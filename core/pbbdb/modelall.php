<?php
namespace Model\PbbDb;
use Pbb\CorePbb;
    final class ModelAll //implements \Iterator
    {
        private $_array;
        private $_myfetch;
        private $_where;
        private $_limit;
        private $_order;
        private $_pos;
        private $_db;
        public function __construct($selectnames = '', $tablename = '')
        {
            $this->_db=ModelBase::GetDb();
            if($tablename=='')$tablename=DB_TABLE;
            if($selectnames=='')$selectnames='*';
            $this->_pos = 0;
            $this->_myfetch = 'select ' . $selectnames . ' from ' . $tablename;
        }

        public function where($mes)
        {
            $this->_where = ' where ' . $mes . ' ';
            return $this;
        }

        public function orderby($mes, $desc = false)
        {
            if ($desc)
                $this->_order = ' order by ' . $mes . ' desc ';
            else
                $this->_order = ' order by ' . $mes . ' ';
            return $this;
        }

        public function limit(int $start,int $end=-1)
        {
            if($end<0)
            $this->_limit = ' limit ' . $start;
            else
                $this->_limit=' limit '.$start.','.$end;
            return $this;
        }

        private function _end()
        {
            $r = $this->_db->query($this->_myfetch . $this->_where . $this->_order . $this->_limit, null);
            $this->_array = [];
            foreach ($r->fetchAll(\PDO::FETCH_ASSOC) as $value) {
                $this->_array[] = $value;
            }
        }
        public function getArray(){
            if($this->_array==null)$this->_end();
            return $this->_array;
        }
//        function current()
//        {
//            return $this->_array[$this->_pos];
//        }
//
//        function key()
//        {
//            return $this->_pos;
//        }
//
//        function next()
//        {
//            ++$this->_pos;
//        }
//
//        function rewind()
//        {
//            $this->_end();
//            $this->_pos = 0;
//        }
//
//        function valid()
//        {
//            return count($this->_array) > $this->_pos;
//        }
    }