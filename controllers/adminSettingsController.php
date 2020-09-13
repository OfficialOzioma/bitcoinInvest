<?php
namespace app\controllers;

use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use app\models\adminBitcoinAddress;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AdminMiddleware;


/**
 * adminSettingsController::class
 */
class adminSettingsController extends Controller 
{
    public function __construct()
    {
        $this->registerMiddleware(new AdminMiddleware(['dashboard']));
    }
    public function bitcoinAddress()
    {
        $findAddress = new adminBitcoinAddress();
        $addresses = $findAddress->findUser(['admin_id' =>  1]);
        
        $this->setLayout('adminDash');
        return $this->render('/admin/settings', [
            'addresses' => $addresses
        ]);
    }

    public function addBitcoinAddress(Request $request, Response $response)
    {
        $addAddress = new adminBitcoinAddress();

        if ($request->getMethod() === 'post') 
        {
            $addAddress->loadData($request->getBody());
            if ($addAddress->validate() && $addAddress->save()) {
                Application::$app->session->setFlash('success', 'You have successfull added a package');
                Application::$app->response->redirect('/admin/settings');
                
            }
        }
    }

}
