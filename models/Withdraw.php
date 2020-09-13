<?php
namespace app\models;

use thecodeholic\phpmvc\db\DbModel;


class Withdraw extends DbModel
{
    public string $user_id = '';
    public string $amount = '';
    public string $bitcoin_address = '';
    public string $status = '';


    public static function tableName(): string
    {
        return 'widthdraw'; 
    }

    public function attributes(): array
    {
        return ['user_id', 'amount', 'bitcoin_address', 'status'];
    }
    
    public function findAll()
    {
        return parent::findAll();
    }

    public function update($data, $where)
    {
       return parent::update($data, $where);
    }
}


?>