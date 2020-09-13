<?php
namespace app\controllers;

use app\models\User;
use app\models\Packages;
use app\models\bitcoinAddress;
use thecodeholic\phpmvc\Request;
use app\models\adminBitcoinAddress;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AuthMiddleware;

class deleteController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['dashboard']));
	}
    public function deletePackages(Request $request)
    {
        $package = new Packages();
        if ($request->getMethod() === 'post') 
        {
            $data = $request->getBody();
            $package->delete($data['id']);
            Application::$app->session->setFlash('success', 'You Have Successfully delete the package');
            Application::$app->response->redirect('/admin/packages');
        }
    }

    public function deleteUser(Request $request)
    {
        $user = new User();
        if ($request->getMethod() === 'post') 
        {
            $data = $request->getBody();
            $user->delete($data['id']);
            Application::$app->session->setFlash('success', 'You Have Successfully delete the package');
            Application::$app->response->redirect('/admin/users');
        }
    }

    public function deleteAddress(Request $request)
    {
        $bitcoinAddress = new bitcoinAddress();
        if ($request->getMethod() === 'post') 
        {
            
            $data = $request->getBody();
            $bitcoinAddress->delete($data['id']);
            Application::$app->session->setFlash('success', 'You Have Successfully delete the package');
            Application::$app->response->redirect('/settings');
        }
    }

    public function deleteAdminAddress(Request $request)
    {
        $bitcoinAddress = new adminBitcoinAddress();
        if ($request->getMethod() === 'post') 
        {
            
            $data = $request->getBody();
            $bitcoinAddress->delete($data['id']);
            Application::$app->session->setFlash('success', 'You Have Successfully delete the package');
            Application::$app->response->redirect('/admin/settings');
        }
    }
}

?>