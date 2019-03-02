namespace Model\PbbDb;
final  class ModelAll {
      protected $_db;
  protected $_pos;
  protected $_order;
  protected $_limit;
  protected $_where;
  protected $_myfetch;
  protected $_array;
  public function __construct($selectnames= "",$tablename= ""){
     let $this->_db=ModelBase::GetDb();
       if($tablename==""){
             let $tablename=DB_TABLE;
       }
       if($selectnames==""){
             let $selectnames="*";
       }
     let $this->_pos = 0;
     let $this->_myfetch = "select " . $selectnames . " from " . $tablename;
  }
  public function where($mes){
     let $this->_where = " where " . $mes . " ";
     return $this;
  }
  public function orderby($mes,$desc= false){
       if($desc){
             let $this->_order = " order by " . $mes . " desc ";
       }
       else{
             let $this->_order = " order by " . $mes . " ";
       }
     return $this;
  }
  public function limit(int $start,int $end=-1){
       if($end<0){
             let $this->_limit = " limit " . $start;
       }
       else{
             let $this->_limit=" limit ".$start.",".$end;
       }
     return $this;
  }
  private function _end(){
      var $r,$value;
     let $r =$this->_db->query($this->_myfetch . $this->_where . $this->_order . $this->_limit, null);
     let $this->_array = [];
       for $value in (  $r->fetchAll(\PDO::FETCH_ASSOC)
){
             let $this->_array[] = $value;
       }
  }
  public function getArray(){
       if($this->_array==null){
             $this->_end();
       }
     return $this->_array;
  }
}