<?php
namespace app\controllers;

use app\models\adminLogin;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;



class adminLoginController extends Controller
{
    public function login(Request $request)
    {
        $loginForm = new adminLogin();
        if ($request->getMethod() === 'post') {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                // $u = $loginForm->login();
                // echo "<pre>";
                // var_dump(Application::$app->session->get('adminId'));
                // exit;
                // echo "</pre>";
                Application::$app->response->redirect('/admin/dashboard');
                return;
            } 
        }
        
        $this->setLayout('adminLogin');
        return $this->render('admin/login',[
            'model' => $loginForm
        ]);
    }
}

?>