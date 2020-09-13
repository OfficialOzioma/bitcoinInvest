<?php

/**
 * User: TheCodeholic
 * Date: 7/8/2020
 * Time: 8:43 AM
 */

namespace app\controllers;


use app\models\User;
use app\models\Packages;
use app\models\LoginForm;
use app\models\userTotal;
use app\models\Investment;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AuthMiddleware;
 
/**
 * Class SiteController
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\controllers
 */
class dashboardController extends Controller
{
	public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['dashboard']));
	}
		
	public function dashboard()
    { 
        // $users = new User();
        $investment = new Investment();
        $userTotal = new userTotal();
        $user_id = Application::$app->userId;
        $findpackages = $investment->findUser(['user_id' =>  $user_id]);
        $findTotal = $userTotal->findOne(['user_id' =>  $user_id]);

        $packageModel = new Packages();
        $packages = $packageModel->findAll();

        // echo "<pre>";
        // var_dump($findTotal);
        // exit;
        // echo "</pre>";

	    $this->setLayout('dash');
        return $this->render('dashboard',[
            'findTotal' => $findTotal,
            'findpackages' => $findpackages,
            'packages' => $packages
        ]);
    }
}

?>