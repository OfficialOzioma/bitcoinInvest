<?php
namespace app\controllers;

use app\models\Withdraw;
use app\models\bitcoinAddress;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AuthMiddleware;


class withdrawController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['earning']));
    }


    public function withdrawals()
    {
        $withdrawModel = new Withdraw();
        $findAddress = new bitcoinAddress();
        $user_id = Application::$app->userId;
        $withdraws = $withdrawModel->findUser(['user_id' =>  $user_id]);
        $addresses = $findAddress->findUser(['user_id' =>  $user_id]);
        $colorArr = [
            'Pending' => 'badge badge-pill badge-warning',
            'Cancelled' => 'badge badge-pill badge-danger',
            'Approved' => 'badge badge-pill badge-primary',
            'Paid' => 'badge badge-pill badge-success',

        ]; 

        $this->setLayout('dash');
        return $this->render('withdraw', [
            'withdraws' => $withdraws,
            'colorArr' => $colorArr,
            'addresses' => $addresses
        ]);
    }

    public function withdraw(Request $request, Response $response)
    {
        $withdrawModel = new Withdraw();

        if ($request->getMethod() === 'post') 
        {
            $withdrawModel->loadData($request->getBody());
            if ($withdrawModel->validate() && $withdrawModel->save()) {
                Application::$app->session->setFlash('success', 'You have successfull added a package');
                Application::$app->response->redirect('/withdraw');
                
            }
        }
    }
}

?>