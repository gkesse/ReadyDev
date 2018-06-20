<?php 
    //===============================================
    require "/vendor/autoload.php";
    //===============================================
    class GProcessRouter extends GProcess {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GProcessRouter();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function run() {
            $lApp = new Silex\Application();
            
            $app = new Silex\Application();

$app->get('/', function () {
    return 'Hello world';
});

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});

$app->run();
            
            $lApp->run();        
        }
        //===============================================
    }
?>        