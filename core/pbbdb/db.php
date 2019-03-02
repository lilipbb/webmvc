<?php
namespace Model\PbbDb;
    use Pbb\CorePbb;
    use PDOException;
    class Db
    {
        public $pdo;
        private $prepareobj;
        private $isTransaction;
        private $isconnect;
        public function isTransaction(){
            return $this->isTransaction;
        }
        public function isConnect(){
            return $this->isconnect;
        }
        public function __construct()
        {
            if(!defined('DB_HOST'))call_user_func_array('_include',[file_get_contents(PATH_CONFIG.'mysqlconfig.php')]);
            $this->isconnect=false;
            $this->init();
            $this->pingdb();
            $this->isTransaction=false;
        }
        public function init()
        {
            try {
//                $arr=[
//                    \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8;",
//                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
//                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_NUM,
//                    \PDO::ATTR_PERSISTENT => true
//                ];
                $arr=[
                    1002 => "SET NAMES utf8;",
                    3 => 2,
                    19 => 3,
                    12=> true
                ];
                $this->pdo = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=' . DB_PORT, DB_USER, DB_PSD, $arr);
                $this->isconnect=true;
            } catch (PDOException $e) {
                CorePbb::Log("连接数据库失败:" . $e->getMessage());
            }
        }
        public function pingdb()
        {
            try {
                $this->pdo->getAttribute(\PDO::ATTR_SERVER_VERSION);
            } catch (PDOException $e) {
                $this->pdo = null;
                $this->init();
            }
        }

        public function getlastid()
        {
            return $this->pdo->lastInsertId();
        }

        public function issuccess($query){
            if(gettype($query)!='object')return false;
            return $query->rowCount()>0;
        }
        public function query($mes, $args)
        {
            try {
                if($this->isTransaction){
                    $this->prepareobj[]=func_get_args();
                    return;
                }
                $pre = $this->pdo->prepare($mes);
                if ($pre->execute($args)) {
                    return $pre;
                }
            } catch (PDOException $e) {
                CorePbb::Log($mes.$e->getMessage());
            }
            return false;
        }
        public function beginTransaction()
        {
            if($this->isTransaction)return;
            $this->isTransaction=true;
            $this->preparefun=[];
            try {
                $this->pdo->beginTransaction();
            }catch (\PDOException $e){
                CorePbb::log("安全类型的model对象还未释放!不能创建新的安全类型的对象".$e->getMessage());
            }
        }
        public function commit()
        {
            if(!$this->isTransaction)echo("事务还没开始!");
            $this->isTransaction=false;
            if(!$this->isconnect)return false;
            try {
                foreach($this->prepareobj as $value){
                    if(!$this->query($value[0],$value[1])){
                        return false;
                    }
                }
                $r=$this->pdo->commit();
                return $r;
            } catch (\PDOException $e) {
                $this->pdo->rollBack();
                CorePbb::Log($e->getMessage());
            }
            return false;
        }
        public function rollback(){
            if($this->isTransaction)
            {
                $this->isTransaction=false;
                $this->pdo->rollBack();
            }
        }
        public function __destruct()
        {
            $this->rollback();
        }
    }