namespace Model;
 class Model1 extends \Model\PbbDb\ModelBase
{
  public $num;
  public $name;
  public $id;
  public function __construct($key= "",$value= "",$tablename= ""){
     parent::__construct($key, $value, $tablename);
  }
  protected function __getmems(){
     return ["id":$this->id,"num":$this->num,"name":$this->name];
  }
}