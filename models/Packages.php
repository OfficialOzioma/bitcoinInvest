<?php
namespace app\models;

use thecodeholic\phpmvc\db\DbModel;


class Packages extends DbModel
{
    public string $packageName = '';
    public string $investmentAmout = '';
    public string $earningAmount = '';
    public string $bitcoin_address = '';
    public string $details = '';

    public static function tableName(): string
    {
        return 'packages'; 
    }

    public function attributes(): array
    {
        return ['packageName', 'investmentAmout', 'earningAmount', 'bitcoin_address', 'details'];
    }

    public function rules()
    {
        return [
            'packageName' => [self::RULE_REQUIRED],
            'investmentAmout' => [self::RULE_REQUIRED],
            'earningAmount' => [self::RULE_REQUIRED],
            'details' => [self::RULE_REQUIRED],
        ];
    }


    public function save()
    { 
        return parent::save();
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

    public function countTable()
    {
        return parent::countTable();
    }

    public function delete($id)
    {
        return parent::delete($id);
    }
}


?>