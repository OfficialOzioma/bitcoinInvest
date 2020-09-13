<?php
namespace app\controllers;

use app\models\Packages;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use app\models\adminBitcoinAddress;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AdminMiddleware;

class adminPackageController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AdminMiddleware(['dashboard']));
    }

    public function packages()
    {
        $packageModel = new Packages();
        $findAddress = new adminBitcoinAddress();
        $packages = $packageModel->findAll();
        $addresses = $findAddress->findUser(['admin_id' =>  1]);
        $this->setLayout('adminDash');
        return $this->render('admin/packages',[
            'packages' => $packages,
            'addresses' => $addresses

        ]); 
    } 

    public function create(Request $request, Response $response)
    {
        $packageModel = new Packages();
        if ($request->getMethod() === 'post') {
            $packageModel->loadData($request->getBody());
            if ($packageModel->validate() && $packageModel->save()) {
                Application::$app->session->setFlash('success', 'You have successfull added a package');
                Application::$app->response->redirect('/admin/packages');
                
            }

        }

        $this->setLayout('adminDash');
        return $this->render('admin/packages');
    }
}
