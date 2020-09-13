<?php
namespace app\models;

use thecodeholic\phpmvc\db\DbModel;


class adminTotal extends DbModel
{
    
    public static function tableName(): string
    {
        return 'adminTotal'; 
    }

    public function findAll()
    {
        return parent::findAll();
    }

    public function find($where)
    {
       return adminTotal::findOne($where);
    }

    public function update($data, $where)
    {
       return parent::update($data, $where);
    }
}


?>