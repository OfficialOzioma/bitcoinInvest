<?php
/**
 * User: TheCodeholic
 * Date: 7/7/2020
 * Time: 9:57 AM
 */


use Dotenv\Dotenv;

use app\controllers\AuthController;
use app\controllers\SiteController;

use app\controllers\AboutController;
use thecodeholic\phpmvc\Application;
use app\controllers\deleteController;
use app\controllers\profileController;
use app\controllers\packagesController;
use app\controllers\withdrawController;
use app\controllers\dashboardController;
use app\controllers\adminLoginController;
use app\controllers\adminUsersController;
use app\controllers\investmentController;
use app\controllers\adminPackageController;
use app\controllers\adminProfileController;
use app\controllers\adminSettingsController;
use app\controllers\adminWithdrawController;
use app\controllers\adminDashboardController;
use app\controllers\bitcoinAddressController;
use app\controllers\adminInvestmentController;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'userClass' => \app\models\User::class,
    'adminClass' => \app\models\adminLogin::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);
 
$app->router->get('/index', [SiteController::class, 'index']);
$app->router->get('/about', [SiteController::class, 'about']);
// $app->router->get('/index', [SiteController::class, 'index']);

// $app->router->get('/register2', [SiteController::class, 'register']);
// $app->router->post('/register2', [SiteController::class, 'register']);

$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/login', [AuthController::class, 'login']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);


// $app->router->get('/login2', [SiteController::class, 'login']);
// $app->router->post('/login2', [SiteController::class, 'login']);
// $app->router->get('/logout', [SiteController::class, 'logout']);
$app->router->get('/logout', [AuthController::class, 'logout']);

$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->get('/about', [AboutController::class, 'index']);
//$app->router->get('/profile', [SiteController::class, 'profile']);

$app->router->get('/dashboard', [dashboardController::class, 'dashboard']);
$app->router->get('/investments', [investmentController::class, 'investments']);
$app->router->get('/packages', [packagesController::class, 'packages']);
$app->router->post('/packages/invest', [investmentController::class, 'invest']);

$app->router->get('/withdraw', [withdrawController::class, 'withdrawals']);
$app->router->post('/withdraw', [withdrawController::class, 'withdraw']);
$app->router->get('/profile', [profileController::class, 'profile']);
$app->router->post('/profile', [profileController::class, 'update']);

$app->router->get('/settings', [bitcoinAddressController::class, 'bitcoinAddress']);
$app->router->post('/settings', [bitcoinAddressController::class, 'addBitcoinAddress']);
$app->router->post('/setting/delete', [deleteController::class, 'deleteAddress']);



//admin routes

$app->router->get('/admin/login', [adminLoginController::class, 'login']);
$app->router->post('/admin/login', [adminLoginController::class, 'login']);
$app->router->get('/admin/dashboard', [adminDashboardController::class, 'dashboard']);
$app->router->get('/admin/investments', [adminInvestmentController::class, 'investment']);
$app->router->post('/admin/investments', [adminInvestmentController::class, 'update']);
$app->router->get('/admin/packages', [adminPackageController::class, 'packages']);
$app->router->post('/admin/packages', [adminPackageController::class, 'create']);
$app->router->get('/admin/withdraw', [adminWithdrawController::class, 'withdraw']);
$app->router->post('/admin/withdraw', [adminWithdrawController::class, 'update']);
$app->router->get('/admin/users', [adminUsersController::class, 'users']);
$app->router->post('/admin/users', [adminUsersController::class, 'update']);
$app->router->post('/admin/users/delete', [deleteController::class, 'deleteUser']);

$app->router->get('/admin/profile', [adminProfileController::class, 'profile']);
$app->router->post('/admin/profile', [adminProfileController::class, 'update']);

$app->router->get('/admin/settings', [adminSettingsController::class, 'bitcoinAddress']);
$app->router->post('/admin/settings', [adminSettingsController::class, 'addBitcoinAddress']);
$app->router->post('/admin/settings/delete', [deleteController::class, 'deleteAdminAddress']);


 
$app->router->post('/delete', [deleteController::class, 'deletePackages']);










$app->run();