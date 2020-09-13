<?php
namespace app\controllers;

use app\models\bitcoinAddress;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AuthMiddleware;


/**
 * bitcoinAddressController::class
 */
class bitcoinAddressController extends Controller 
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['dashboard']));
	}
    public function bitcoinAddress()
    {
        $findAddress = new bitcoinAddress();
        $user_id = Application::$app->userId;
        $addresses = $findAddress->findUser(['user_id' =>  $user_id]);
        
        $this->setLayout('dash');
        return $this->render('settings', [
            'addresses' => $addresses
        ]);
    }

    public function addBitcoinAddress(Request $request, Response $response)
    {
        $addAddress = new bitcoinAddress();

        if ($request->getMethod() === 'post') 
        {
            $addAddress->loadData($request->getBody());
            if ($addAddress->validate() && $addAddress->save()) {
                Application::$app->session->setFlash('success', 'You have successfull added a package');
                Application::$app->response->redirect('/settings');
                
            }
        }
    }

}
