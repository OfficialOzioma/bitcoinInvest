<?php
namespace app\controllers;

use app\models\adminLogin;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AdminMiddleware;

class adminProfileController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AdminMiddleware(['dashboard']));
    }
    public function profile()
    {
        $admin = Application::$app->adminId;
        $this->setLayout('adminDash');
        return $this->render('admin/profile',[
            'admin' => $admin
        ]);
    }

    public function update(Request $request, Response $response)
    {
        $updateModel = new adminLogin();
        if ($request->getMethod() === 'post') {
           
            $data = $request->getBody();
            $adminId = Application::$app->admin;
            $primaryKey = $updateModel->primaryKey();
            $arr = [
                $primaryKey => $adminId
            ];
            if ($updateModel->update($data,  $arr)) {
                Application::$app->session->setFlash('success', 'Your details was updated successfully');
                $response->redirect('/admin/profile');   
            }
        }
    }
}


?>