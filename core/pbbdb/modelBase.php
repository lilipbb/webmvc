<?php
namespace Model\PbbDb;
    use Pbb\CorePbb;
    class ModelBase //implements \ArrayAccess
    {
        protected $id;
        private $_allnames;
        private $_arr;
        private $db_table;
        private $_db;
        public final static function beginTransaction(){
            self::GetDb()->beginTransaction();
        }
        public final static function Commit():bool{
            return self::GetDb()->commit();
        }
        public final static function GetDb(){
             if(!isset($GLOBALS['mysql_db']))
                 $GLOBALS['mysql_db']=new Db();
             return $GLOBALS['mysql_db'];
        }
        protected final function gettablename()
        {
            return $this->db_table;
        }
        public final function getid():int
        {
            return $this->id;
        }
        public final function haveuser()
        {
            return $this->id > 0;
        }

        private function checkid()
        {
            if ($this->id < 1) {
                CorePbb::Log('该对象' . get_class($this) . '还不存在，请先插入');
            }
        }
        public final function isConnect(){
            return $this->_db->isConnect();
        }
        private function isprivate($pname)
        {
            return in_array($pname,['_allnames', 'db_table','_arr','_db']);
        }
        public final function update($safe=false)
        {
            if($safe)
            $this->checksafe();
            $this->checkid();
            $names = '';
            $arr = array();
            foreach ($this as $pname => $pv) {
                if ($this->isprivate($pname) || $pname == 'id') continue;
                if(key_exists($pname,$this->_arr))continue;
                if ($names!='') {
                    $names =$names. ',' . $pname . '=?';
                } else {
                    $names =$names. $pname . '=?';
                }
                $arr[] = $pv;
            }
            foreach ($this->_arr as $pname => $pv) {
                if ($names!='') {
                    $names =$names. ',' . $pname . '=?';
                } else {
                    $names =$names. $pname . '=?';
                }
                $arr[] = $pv;
            }
            if ($names=="") {
                echo "id不需要更新";
                return false;
            }
            $q = 'update ' . $this->gettablename() . ' set ' . $names . ' where id=' . $this->id;
            $r=$this->_db->query($q,$arr);
            if($this->_db->isTransaction()){
                return true;
            }
            return $this->_db->issuccess($r);
        }
        public final function insert():bool
        {
            $this->checksafe();
            if ($this->id > 0) {
                echo "id:{$this->id}该对象已经存在，不需要插入";
                return 0;
            }
            $names = '';
            $values = '';
            $arr = array();
            foreach ($this as $pname => $pv) {
                if ($this->isprivate($pname) || $pname == 'id') continue;
                if(key_exists($pname,$this->_arr))continue;
                if ($names!='') {
                    $names =$names. ',' . $pname;
                    $values .= ',?';
                } else {
                    $names .= $pname;
                    $values .= '?';
                }
                $arr[] = $pv;
            }

            foreach ($this->_arr as $pname => $pv) {
                if ($names!='') {
                    $names =$names. ',' . $pname;
                    $values .= ',?';
                } else {
                    $names .= $pname;
                    $values .= '?';
                }
                $arr[] = $pv;
            }
            $q = 'insert ' . $this->gettablename() . '(' . $names . ')values(' . $values . ')';
            $r=$this->_db->query($q,$arr);
            $this->id = $this->_db->getlastid();
            if($this->_db->isTransaction()){
                return true;
            }
            return $this->_db->issuccess($r);
        }
        public final function getby(string $name,string $value)
        {
            $namearr=explode(',',$name);
            $valuearr=explode(',',$value);
            if(count($namearr)>1){
                if(count($namearr)!=count($valuearr)){var_dump($name);var_dump($value);CorePbb::Error("name和value个数不相等",false);}
                $name=implode('=? and ',$namearr);
            }
            $q = 'select ' . $this->_allnames . ' from ' . $this->gettablename() . ' where ' . $name. '=? '. ($this->_db->isTransaction() ? 'FOR UPDATE;' : ';');
            $r = $this->_db->query($q, $valuearr);
            $mes='fetch';
            $row = $r->$mes();
            if (!$row) {
                return false;
            }
            $i = 0;
            foreach ($this as $pname => $pv) {
                if ($this->isprivate($pname)) continue;
                $this->$pname = $row[$i];
                $i++;
            }
            return true;
        }
        public final function getbyid($id)
        {
            return $this->getby('id', $id);
        }
        private function checksafe(){
            if(!$this->_db->isTransaction()){CorePbb::Error("只能在事务里头进行插入,安全的更新和删除!",false);}
        }
        public final function delete($safe=false):bool
        {
            if($safe)
                $this->checksafe();
            $this->checkid();
            $q = 'delete from ' . $this->gettablename() . ' where id=?';
            $r=$this->_db->query($q, [$this->id]);
            if($this->_db->isTransaction()){
                $this->id=0;
                return true;
            }
            $r=$this->_db->issuccess($r);
            if($r)$this->id=0;
            return $r;
        }
        public function __construct($key = '', $value = '', $tablename = "")
        {
            $this->_db=self::GetDb();
            if($tablename=='')$tablename=DB_TABLE;
            $this->db_table = $tablename;
            $all = "";
            $this->_arr=[];
            foreach ($this as $pname => $pv) {
                if ($this->isprivate($pname)) continue;
                if ($all=="")
                    $all .= $pname;
                else
                    $all =$all. ',' . $pname;
            }
            $this->_allnames = $all;
            if ($key && $value)
                $this->getby($key, $value);
        }
        public function __destruct()
        {
            $this->_db=null;
        }
        public function __get($name)
        {
            if(key_exists($name,$this->_arr))return $this->_arr[$name];
            $this->checkid();
            if($name=='id')return $this->getid();
            $q = 'select ' . $name . ' from ' . $this->gettablename() . ' where id=?';
            $r = $this->_db->query($q, [$this->id]);
            $mes='fetch';
            return $r->$mes()[0];
        }
        public function __set($name,$value){
            if($name=='id'){CorePbb::Error("不能修改id!",false);}
            $this->_arr[$name]=$value;
        }
//        function offsetExists($offset)
//        {
//            return true;
//        }
//
//        function offsetGet($offset)
//        {
//            return $this->__get($offset);
//        }
//
//        function offsetSet($offset, $value)
//        {
//            if ($offset == 'id') return;
//            if ($this->__get($offset))
//                $this->$offset = $value;
//            else
//                CorePbb::Error($offset . "不存在");
//        }
//
//        function offsetUnset($offset)
//        {
//            //unset($this->$offset);
//        }
    }