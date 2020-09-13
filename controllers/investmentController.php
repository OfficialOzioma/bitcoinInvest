<?php
namespace app\controllers;


use app\models\Investment;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AuthMiddleware;


class investmentController extends Controller 
{
    public function __construct()
    {
       $this->registerMiddleware(new AuthMiddleware(['investments']));
    }
    public function investments()
    {

        $investmentModel = new Investment();
        $user_id = Application::$app->userId;
        $investments = $investmentModel->findUser(['user_id' =>  $user_id]);
        $colorArr = [
                'Pending' => 'badge badge-pill badge-warning',
                'Cancelled' => 'badge badge-pill badge-danger',
                'Approved' => 'badge badge-pill badge-success'
            ];
        $this->SetLayout('dash');
        return $this->render('investments', [
            'investments' => $investments,
            'colorArr' => $colorArr
        ]);
    }

    public function invest(Request $request, Response $response)
    {
        $investmentModel = new Investment();
        if ($request->getMethod() === 'post') 
        {
           
            // echo "<pre>";
            // var_dump($request->getBody());
            // echo "</pre>";
            // exit;
            $investmentModel->loadData($request->getBody());
            if ($investmentModel->validate() && $investmentModel->save()) {
                Application::$app->session->setFlash('success', 'You have successfull added a package');
                Application::$app->response->redirect('/packages');
                
            }
        }
    }
}


?>