namespace Model\PbbDb;
 class ModelBase {
      protected $_db;
  protected $db_table;
  protected $_arr;
  protected $_allnames;
  protected $id;
  public final static function beginTransaction(){
     self::GetDb()->beginTransaction();
  }
  public final static function Commit(){
     return self::GetDb()->commit();
  }
  public final static function GetDb(){
       if(!isset($_GET["mysql_db"])){
             let $_GET["mysql_db"]=new \Model\PbbDb\Db();
       }
     return $_GET["mysql_db"];
  }
  protected final function gettablename(){
     return $this->db_table;
  }
  public final function getid(){
     return $this->id;
  }
  public final function haveuser(){
     return $this->id > 0;
  }
  private function checkid(){
       if($this->id < 1){
             call_user_func_array("\\Pbb\\CorePbb::Log",["该对象　" . get_class($this) . "还不存在，请先插入　"]);
       }
  }
  public final function isConnect(){
     return $this->_db->isConnect();
  }
  private function isprivate($pname){
     return in_array($pname,["_allnames", "db_table","_arr","_db"]);
  }
  public final function update($safe=true){
      string $names,$q;
      var $arr,$r,$pname,$pv;
       if($safe){
             $this->checksafe();
       }
     $this->checkid();
     let $names = "";
     let $arr =[];
       for $pname , $pv in (  $this->__getmems()
){
     if($this->isprivate($pname) || $pname == "id"){
               continue;
        }
     if(key_exists($pname,$this->_arr)){
               continue;
        }
     if($names!=""){
               let $names =$names. "," . $pname . "=?";
        }
     else{
               let $names =$names. $pname . "=?";
        }
             let $arr[] = $pv;
       }
       for $pname , $pv in (  $this->_arr
){
     if($names!=""){
               let $names =$names. "," . $pname . "=?";
        }
     else{
               let $names =$names. $pname . "=?";
        }
             let $arr[] = $pv;
       }
       if($names==""){
             echo "id不需要更新　";
             return false;
       }
     let $q = "update " . $this->gettablename() . " set " . $names . " where id=" . $this->id;
     let $r=$this->_db->query($q,$arr);
       if($this->_db->isTransaction()){
             return true;
       }
     return $this->_db->issuccess($r);
  }
  public final function insert(){
      string $names,$values,$q;
      var $arr,$r,$pname,$pv;
     $this->checksafe();
       if($this->id > 0){
             echo "id:".$this->id."该对象已经存在，不需要插入　";
             return 0;
       }
     let $names = "";
     let $values = "";
     let $arr =[];
       for $pname , $pv in (  $this->__getmems()
){
     if($this->isprivate($pname) || $pname == "id"){
               continue;
        }
     if(key_exists($pname,$this->_arr)){
               continue;
        }
     if($names!=""){
               let $names =$names. "," . $pname;
               let $values=$values.( ",?");
        }
     else{
               let $names=$names.( $pname);
               let $values=$values.( "?");
        }
             let $arr[] = $pv;
       }
       for $pname , $pv in (  $this->_arr
){
     if($names!=""){
               let $names =$names. "," . $pname;
               let $values=$values.( ",?");
        }
     else{
               let $names=$names.( $pname);
               let $values=$values.( "?");
        }
             let $arr[] = $pv;
       }
     let $q = "insert " . $this->gettablename() . "(" . $names . ")values(" . $values . ")";
     let $r=$this->_db->query($q,$arr);
     let $this->id = $this->_db->getlastid();
       if($this->_db->isTransaction()){
             return true;
       }
     return $this->_db->issuccess($r);
  }
  public final function getby(string $name,string $value){
      var $namearr,$valuearr,$r,$row,$pname,$pv;
      string $q,$mes;
      int $i;
     let $namearr=explode(",",$name);
     let $valuearr=explode(",",$value);
       if(count($namearr)>1){
     if(count($namearr)!=count($valuearr)){
               var_dump($name);
               var_dump($value);
               call_user_func_array("\\Pbb\\CorePbb::Error",["name和　value个数不相等　",false]);
        }
             let $name=implode("=? and ",$namearr);
       }
     let $q = "select " . $this->_allnames . " from " . $this->gettablename() . " where " . $name. "=? ". ($this->_db->isTransaction() ? "FOR UPDATE;" : ";");
     let $r =$this->_db->query($q, $valuearr);
     let $mes="fetch";
     let $row =$r->{$mes}();
       if(!$row){
             return false;
       }
     let $i = 0;
       for $pname , $pv in (  $this->__getmems()
){
     if($this->isprivate($pname)){
               continue;
        }
             let $this->{$pname} = $row[$i];
             let $i=$i+(1);
       }
     return true;
  }
  public final function getbyid($id){
     return $this->getby("id", $id);
  }
  private function checksafe(){
       if(!$this->_db->isTransaction()){
             call_user_func_array("\\Pbb\\CorePbb::Error",["只能在事务里头进行插入　,安全的更新和删除　!",false]);
       }
  }
  public final function delete($safe=true){
      string $q;
      var $r;
       if($safe){
             $this->checksafe();
       }
     $this->checkid();
     let $q = "delete from " . $this->gettablename() . " where id=?";
     let $r=$this->_db->query($q, [$this->id]);
       if($this->_db->isTransaction()){
             let $this->id=0;
             return true;
       }
     let $r=$this->_db->issuccess($r);
       if($r){
             let $this->id=0;
       }
     return $r;
  }
  public function __construct($key= "",$value= "",$tablename= ""){
      string $all;
      var $pname,$pv;
     let $this->_db=self::GetDb();
       if($tablename==""){
             let $tablename=DB_TABLE;
       }
     let $this->db_table = $tablename;
     let $all = "";
     let $this->_arr=[];
       for $pname , $pv in (  $this->__getmems()
){
     if($this->isprivate($pname)){
               continue;
        }
     if($all==""){
               let $all=$all.( $pname);
        }
     else{
               let $all =$all. "," . $pname;
        }
       }
     let $this->_allnames = $all;
       if($key && $value){
             $this->getby($key, $value);
       }
  }
  public function __destruct(){
     let $this->_db=null;
  }
  public function __get($name){
      string $q,$mes;
      var $r;
       if(key_exists($name,$this->_arr)){
             return $this->_arr[$name];
       }
     $this->checkid();
       if($name=="id"){
             return $this->getid();
       }
     let $q = "select " . $name . " from " . $this->gettablename() . " where id=?";
     let $r =$this->_db->query($q, [$this->id]);
     let $mes="fetch";
     return $r->{$mes}()[0];
  }
  public function __set($name,$value){
       if($name=="id"){
             call_user_func_array("\\Pbb\\CorePbb::Error",["不能修改　id!",false]);
       }
     let $this->_arr[$name]=$value;
  }
  protected function __getmems(){
     return ["id":$this->id];
  }
}