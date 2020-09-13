<?php

/**
 * User: Ozioma
 * Date: 7/8/2020
 * Time: 8:56 AM
 */
    namespace app\controllers;


    use thecodeholic\phpmvc\Application;
	use thecodeholic\phpmvc\Controller;
	use thecodeholic\phpmvc\middlewares\AuthMiddleware;
	use thecodeholic\phpmvc\Request;
	use thecodeholic\phpmvc\Response;
	use app\models\LoginForm;
	use app\models\User;


class AuthController extends Controller 
{ 
    public function login(Request $request)
    { 
        $loginForm = new LoginForm(); 
        if ($request->getMethod() === 'post') {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                Application::$app->response->redirect('/dashboard');
                return;
            } 
        }
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $registerModel = new User();
        if ($request->getMethod() === 'post') { 
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering, You can now login');
                Application::$app->response->redirect('/login');
                return 'Show success page';
            }

        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/index.html');
    }
}
