<?php   
//===============================================
class GManager {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private $mgr;
    //===============================================
    private function __construct() {
        // manager
        $this->mgr = new sGManager();
        // app
        $this->mgr->app = new sGApp();
        $this->mgr->app->app_name = "ReadyApp";
        $this->mgr->app->app_logo = "/webroot/data/img/logo.png";
        $this->mgr->app->lang = "fr";
        $this->mgr->app->title = $this->mgr->app->app_name;
        $this->mgr->app->google_desc = "";
        $this->mgr->app->style_path = "/webroot/data/css/style.css";
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GManager();  
        }
        return self::$m_instance;
    }
    //===============================================
    // data
    //===============================================
    public function getData() {
        return $this->mgr;
    }
    //===============================================
    public function showData($data) {
        echo sprintf("%s<br>", $data);
    }
    //===============================================
    // page
    //===============================================
    public function getPageId() {
        $lApp = $this->mgr->app;
        $lApp->page_id = $_GET["pageid"];
        if($lApp->page_id == "") {
            $lApp->page_id = "home";
        }
        else {
            $lApp->page_id = "home/$lApp->page_id";
        }
    }
    //===============================================
    // map
    //===============================================
    public function getValue($map, $key, $default) {
        return isset($map[$key]) ? $map[$key] : $default;
    }
    //===============================================
}
//===============================================
// struct
//===============================================
class sGManager {
    public $app;
}
//===============================================
class sGApp {
    // app
    public $app_name;
    // page
    public $page_id;
    // lang
    public $lang;
    // title
    public $title;
    // google
    public $google_desc;
    // style
    public $style_path;
}
//===============================================
?>