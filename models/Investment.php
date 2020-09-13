<?php
namespace app\models;

use thecodeholic\phpmvc\db\DbModel;


class Investment extends DbModel
{

    public string $package_id;
    public string $user_id;
    public string $amount_invested;
    public string $amount_to_earn;
    public string $status = '';

    public static function tableName(): string
    {
        return 'investment'; 
    }

    public function attributes(): array
    {
        return ['package_id', 'user_id', 'amount_invested', 'amount_to_earn','status'];
    }

    public function findAll()
    {
        return parent::findAll();
    }

    public static function findOne($where)
    {
        
        $result = parent::findOne($where);
        return $result;
    }

    public function update($data, $where)
    {
       return parent::update($data, $where);
    }
}


?>