namespace Model\PbbDb;
 class Db {
      protected $isconnect;
  protected $isTransaction;
  protected $prepareobj;
  public $pdo;
  public function isTransaction(){
     return $this->isTransaction;
  }
  public function isConnect(){
     return $this->isconnect;
  }
  public function __construct(){
       if(!defined("DB_HOST")){
             call_user_func_array("_include",[file_get_contents(PATH_CONFIG."mysqlconfig.php")]);
       }
     let $this->isconnect=false;
     $this->init();
     $this->pingdb();
     let $this->isTransaction=false;
  }
  public function init(){
      var $arr,$e;
   try{
       let $arr=[
                    1002 : "SET NAMES utf8;",
                    3 : 2,
                    19 : 3,
                    12: true
                ];
       let $this->pdo = new \PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT, DB_USER, DB_PSD, $arr);
       let $this->isconnect=true;
}catch \PDOException,$e {
       call_user_func_array("\\Pbb\\CorePbb::Log",["连接数据库失败　:" . $e->getMessage()]);
}
  }
  public function pingdb(){
      var $e;
   try{
       $this->pdo->getAttribute(\PDO::ATTR_SERVER_VERSION);
}catch \PDOException,$e {
       let $this->pdo = null;
       $this->init();
}
  }
  public function getlastid(){
     return $this->pdo->lastInsertId();
  }
  public function issuccess($query){
       if(gettype($query)!="object"){
             return false;
       }
     return $query->rowCount()>0;
  }
  public function query($mes,$args){
      var $pre,$e;
   try{
           if($this->isTransaction){
                 let $this->prepareobj[]=func_get_args();
                 return;
         }
       let $pre =$this->pdo->prepare($mes);
           if($pre->execute($args)){
                 return $pre;
         }
}catch \PDOException,$e {
       call_user_func_array("\\Pbb\\CorePbb::Log",[$mes.$e->getMessage()]);
}     return false;
  }
  public function beginTransaction(){
      var $e;
       if($this->isTransaction){
             return;
       }
     let $this->isTransaction=true;
     let $this->preparefun=[];
   try{
       $this->pdo->beginTransaction();
}catch \PDOException,$e {
       call_user_func_array("\\Pbb\\CorePbb::log",["安全类型的　model对象还未释放　!不能创建新的安全类型的对象　".$e->getMessage()]);
}
  }
  public function commit(){
      var $r,$value,$e;
       if(!$this->isTransaction){
             echo "事务还没开始　!";
       }
     let $this->isTransaction=false;
       if(!$this->isconnect){
             return false;
       }
   try{
           for $value in (  $this->prepareobj
){
       if(!$this->query($value[0],$value[1])){
                   return false;
          }
         }
       let $r=$this->pdo->commit();
       return $r;
}catch \PDOException,$e {
       $this->pdo->rollBack();
       call_user_func_array("\\Pbb\\CorePbb::Log",[$e->getMessage()]);
}     return false;
  }
  public function rollback(){
       if($this->isTransaction){
             let $this->isTransaction=false;
             $this->pdo->rollBack();
       }
  }
  public function __destruct(){
     $this->rollback();
  }
}