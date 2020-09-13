<?php
/**
 * User: TheCodeholic
 * Date: 7/8/2020
 * Time: 9:15 AM
 */

namespace app\models;


use app\models\userTotal;
use thecodeholic\phpmvc\DbModel;
use thecodeholic\phpmvc\UserModel;

/**
 * Class Register  
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\models
 */
class User extends UserModel
{
    public int $id = 0;
    public string $fullname = '';
    public string $username = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirm = '';
    public string $status = 'inactive';

    public static function tableName(): string
    {
        return 'users'; 
    }

    public function attributes(): array
    {
        return ['fullname', 'username', 'email', 'password','status'];
    }

    public function labels(): array
    {
        return [
            'fullname' => 'Fullname name',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'passwordConfirm' => 'Password Confirm'
        ];
    }

    public function rules()
    {
        return [
            'fullname' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 3]],
            'username' => [self::RULE_REQUIRED,[self::RULE_MIN, 'min' => 6],[
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]],
            'passwordConfirm' => [[self::RULE_MATCH, 'match' => 'password']],
        ];
    }
    
    

    public function save()
    { 
        $insert = new userTotal();
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

        if(parent::save()){
            $user =  parent::findOne(['username' => $this->username]);
            return $insert->insert_Into_userTotal($user->id);
        }
    }

    public  function update($data, $where)
    {
       return parent::update($data, $where);
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

    public function getDisplayName(): string
    {
        return $this->fullname;
    }
 
    
}