<?php
namespace app\models;

use thecodeholic\phpmvc\Model;
use thecodeholic\phpmvc\UserModel;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\db\DbModel;


class adminLogin extends UserModel
{

    public static function tableName(): string
    {
        return 'admin'; 
    }

    public string $username = '';
    public string $password = ''; 
    
    public function rules()
    {
        return [
            'username' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function labels() 
    {
        return [
            'username' => 'Your Email address',
            'password' => 'Password'
        ];
    }

    public function login()
    {
        
        $adminUsername = adminLogin::findOne(['username' => $this->username]);
        if (!$adminUsername) {
            $this->addError('username', 'Sorry, Incorrect username, Try again');
            return false;
        }
        $adminPassword = adminLogin::findOne(['password' => $this->password]);
        if (!$adminPassword) {
            $this->addError('password', 'Password is incorrect');
            return false; 
        }
       
      //  Application::$app->session->set('adminId', $adminUsername->id); 
        return Application::$app->adminLogin($adminUsername); 
       // return true;   
    }

    public function getDisplayName(): string
    {
        return "Admin";
    }
}

?>

