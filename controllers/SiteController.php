<?php
/**
 * User: TheCodeholic
 * Date: 7/8/2020
 * Time: 8:43 AM
 */

namespace app\controllers;


use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\middlewares\AuthMiddleware;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use app\models\LoginForm;
use app\models\User;
 
/**
 * Class SiteController
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\controllers
 */
class SiteController extends Controller
{


    public function index()
    {
        return $this->render('home');
    }

    public function about()
    {
        return $this->render('AboutUs');
    }
}