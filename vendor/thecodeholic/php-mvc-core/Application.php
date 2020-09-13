<?php
/**
 * User: TheCodeholic
 * Date: 7/7/2020
 * Time: 9:57 AM
 */

namespace thecodeholic\phpmvc;

use app\models\adminLogin;
use thecodeholic\phpmvc\db\Database;

/**
 * Class Application
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app
 */
class Application
{
    const EVENT_BEFORE_REQUEST = 'beforeRequest';
    const EVENT_AFTER_REQUEST = 'afterRequest';

    protected array $eventListeners = [];

    public static Application $app;
    public static string $ROOT_DIR;
    public string $userClass;
    public string $layout = 'main';
    public Router $router;
    public Request $request;
    public Response $response;
    public ?Controller $controller = null;
    public Database $db;
    public Session $session;
    public View $view;
    public ?UserModel $user;
    public $adminId;

    public function __construct($rootDir, $config)
    {
        $this->userId = '';
        $this->admin = '';
        $this->adminId = null;
        $this->user = null;
        $this->userClass = $config['userClass'];
        $this->adminClass = $config['adminClass'];
        self::$ROOT_DIR = $rootDir;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config['db']);
        $this->session = new Session();
        $this->view = new View();
 
        $this->userId = Application::$app->session->get('user');
        if ($this->userId) {
            $key = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$key => $this->userId]);
        }


        $this->admin = Application::$app->session->get('adminId');
        if ($this->admin) {
            $key = $this->adminClass::primaryKey();
            $this->adminId = $this->adminClass::findOne([$key => $this->admin]);
        }
    } 

    public static function isGuest()
    {
        return !self::$app->user;
    }

    public function notAdmin()
    {
        return !self::$app->adminId;
    }

    public function login(UserModel $user)
    {
        $this->user = $user;  
        $primaryKey = $user->primaryKey();
        $value = $user->{$primaryKey};
        Application::$app->session->set('user', $value); 
 
        return true;
    }

    public function adminLogin(adminLogin $adminId)
    {
        $this->adminId = $adminId;  
        $primaryKey = $adminId->primaryKey();
        $value = $adminId->{$primaryKey};
        Application::$app->session->set('adminId', $value); 
 
        return true;
    }
    public function logout()
    {
        if(isset($this->user)){
            $this->user = null;
            self::$app->session->remove('user');
        }else{
            $this->adminId = null;
            self::$app->session->remove('adminId');
        }
        
    }

    public function run()
    {
        $this->triggerEvent(self::EVENT_BEFORE_REQUEST);
        try {
            echo $this->router->resolve();
        } catch (\Exception $e) {
            echo $this->router->renderView('_error', [
                'exception' => $e,
            ]);
        }
    }

    public function triggerEvent($eventName)
    {
        $callbacks = $this->eventListeners[$eventName] ?? [];
        foreach ($callbacks as $callback) {
            call_user_func($callback);
        }
    }

    public function on($eventName, $callback)
    {
        $this->eventListeners[$eventName][] = $callback;
    }
}