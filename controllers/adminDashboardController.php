<?php
namespace app\controllers;

use app\models\User;
use app\models\Packages;
use app\models\adminTotal;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\middlewares\AdminMiddleware;


class adminDashboardController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AdminMiddleware(['dashboard']));
    }
    
    public function dashboard()
    {
        $users = new User();
        $packages = new Packages();
        $totalInvestment = new adminTotal();
        
        $userList = $users->countTable();
        $packageList = $packages->countTable();
        $total = $totalInvestment->find(['id' => 1]);

        // echo "<pre>";
        // var_dump($total->total_investments);
        // exit;
        // echo "</pre>";
 
        $this->setLayout('adminDash');
        return $this->render('admin/dashboard',[
            'userList' => $userList,
            'packageList' => $packageList,
            'total' => $total

        ]);
    }
}

?>