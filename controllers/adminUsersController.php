<?php
namespace app\controllers;

use app\models\User;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AdminMiddleware;



/**
 * adminUsersController::class
 */
class adminUsersController extends Controller 
{
    public function __construct()
    {
        $this->registerMiddleware(new AdminMiddleware(['dashboard']));
    }
    public function users()
    {
        $users = new User();
        $getUsers = $users->findAll();
        $colorArr = [
            'inactive' => 'badge badge-pill badge-warning',
            'Cancelled' => 'badge badge-pill badge-danger',
            'Activated' => 'badge badge-pill badge-success'
        ];
        $this->setLayout('adminDash');
        return $this->render('admin/users',[
            'getUsers' => $getUsers,
            'colorArr' => $colorArr
        ]);
    }

    public function update(Request $request, Response $response)
   {
       $userUpdate = new User();
        if ($request->getMethod() === 'post') {
            $data = $request->getBody();
    
            $arr = [
                'id' => $data['id']
            ];
            
            if ($userUpdate->update($data,  $arr)) {
                Application::$app->session->setFlash('success', 'You have successfully Update the status ');
                $response->redirect('/admin/users');   
            }
           
        }   
    }
}

?>