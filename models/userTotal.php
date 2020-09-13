<?php
namespace app\models;

use thecodeholic\phpmvc\db\DbModel;


class userTotal extends DbModel
{
    public int $user_id;
    public int $Total_amount_earned = 0;
    public int $total_amount_invested = 0;
    public int $total_amount_withdrawn = 0;

    public static function tableName(): string
    {
        return 'userTotal'; 
    }

    public function attributes(): array
    {
        return ['user_id', 'Total_amount_earned', 'total_amount_invested', 'total_amount_withdrawn'];
    }

    public function insert_Into_userTotal($user_id)
    {
        $this->user_id = $user_id;

        return parent::save();
    }
    public function findAll()
    {
        return parent::findAll();
    }

    public function find($where)
    {
       return userTotal::findOne($where);
    }

    public function update($data, $where)
    {
       return parent::update($data, $where);
    }
}


?>