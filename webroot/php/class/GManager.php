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
        $this->mgr->app->lang = "fr";
        $this->mgr->app->title = $this->mgr->app->app_name;
        $this->mgr->app->google_desc = "";
        $this->mgr->app->debug = &$_SESSION["debug"];
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
        $lApp = $this->mgr->app;
        $lApp->debug .= sprintf("[%s]<br>\n", $data);
    }
    //===============================================
    public function loadData() {
        $lApp = $this->mgr->app;
        $lApp->debug = "";
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
    // request
    //===============================================
    public function request() {
        $lReq = $_REQUEST["req"];
        if($lReq == "debug_clear") {$this->clearDebug(); return;}
    }
    //===============================================
    // debug
    //===============================================
    public function clearDebug() {
        $lApp = $this->mgr->app;
        $lApp->debug = "";
    }
    //===============================================
    // font
    //===============================================
    public function loadFont() {
        $lApp = $this->mgr->app;
        $lPath = "";
        $lPath .= $_SERVER["DOCUMENT_ROOT"];
        $lPath .= "/webroot/libs/google_fonts/1.0.0";
        $lMap = glob("$lPath/*/*.css");
        $lRootLength = strlen($_SERVER["DOCUMENT_ROOT"]);
        
        for($i = 0; $i < count($lMap); $i++) {
            $lFilename = $lMap[$i];
            $lFile = substr($lFilename, $lRootLength); 
            echo sprintf("<link rel='stylesheet' type='text/css' href='%s'/>\n", $lFile);
        }
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
    // debug
    public $debug;
}
//===============================================
?>