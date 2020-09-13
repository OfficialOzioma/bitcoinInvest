<?php

namespace app\controllers;

use app\models\Packages;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\middlewares\AuthMiddleware;




class packagesController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['packages']));
    }
    public function packages()
    {

        $packageModel = new Packages();
        $packages = $packageModel->findAll();

        $this->setLayout('dash');
        return $this->render('packages', [
            'packages' => $packages
        ] );
    }

    

    
}



?>