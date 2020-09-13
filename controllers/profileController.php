<?php
namespace app\controllers;

use app\models\User;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AuthMiddleware;


class profileController extends Controller
{
    public function __construct()
    {
       $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function profile()
    {
        $user = Application::$app->user;
        $this->setLayout('dash');
        return $this->render('profile', [
            'user' => $user
        ]);

    }

    public function update(Request $request, Response $response)
    {
        $updateModel = new User();
        if ($request->getMethod() === 'post') {
           
            $data = $request->getBody();
            $userId = Application::$app->userId;
            $primaryKey = $updateModel->primaryKey();
            $arr = [
                $primaryKey => $userId
            ];
            if ($updateModel->update($data,  $arr)) {
                Application::$app->session->setFlash('success', 'Your details was updated successfully');
                $response->redirect('/profile');   
            }
        }
    }
}

?>