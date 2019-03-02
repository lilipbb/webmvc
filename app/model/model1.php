<?php
namespace Model;
class Model1 extends \Model\PbbDb\ModelBase
{
    public $id;
    public $name;
    public $num;
    public function __construct($key = '', $value = '', $tablename = "")
    {
        parent::__construct($key, $value, $tablename);
    }
}
