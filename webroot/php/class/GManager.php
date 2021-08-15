<?php   
//===============================================
class GManager {
    //===============================================
    private static $m_instance = null;
    //===============================================
    protected $mgr;
    //===============================================
    public function __construct() {
        // manager
        $this->mgr = new sGManager();
        // app
        $this->mgr->app = new sGApp();
        $this->mgr->app->app_name = "ReadyPHP";
        $this->mgr->app->lang = "fr";
        $this->mgr->app->title = "";
        $this->mgr->app->google_desc = "";
        $this->mgr->app->debug = &$_SESSION["debug"];
        $this->mgr->app->last_url = &$_SESSION["last_url"];
        $this->mgr->app->sqlite_db_path = "/webroot/data/sqlite/config.dat";
        $this->mgr->app->sqlite_db_path2 = "data/sqlite/config.dat";
        $this->mgr->app->sqlite_bin = "sqlite3";
        $this->mgr->app->google_fonts = "/webroot/libs/google_fonts";
        $this->mgr->app->logo_web = "/webroot/data/img/logo_web.png";
        $this->mgr->app->logo_flat = "/webroot/data/img/logo_flat.png";
        $this->mgr->app->logo_org = "/webroot/data/img/logo_org.png";
        $this->mgr->app->font_awesome = "/webroot/libs/font_awesome/css/font-awesome.min.css";
        $this->mgr->app->style_css = "/webroot/css/style.php";
        $this->mgr->app->manager_js = "/webroot/js/class/GManager.js";
        $this->mgr->app->request_js = "/webroot/js/request/request.js";
        $this->mgr->app->filesystem = &$_SESSION["filesystem"];
        $this->mgr->app->view_offset = 10;
        $this->mgr->app->login_on = &$_SESSION["login_on"];
        $this->mgr->app->login_group = &$_SESSION["login_group"];
        $this->mgr->app->root_name = "root";
        $this->mgr->app->root_pass = "6536e597b35fd94253fcf5ec2c0d5988";
        $this->mgr->app->message = &$_SESSION["message"];
        $this->mgr->app->user_name = &$_SESSION["user_name"];
        $this->mgr->app->user_fullname = &$_SESSION["user_fullname"];
        $this->mgr->app->user_manager = &$_SESSION["user_manager"];
        $this->mgr->app->client_name = &$_SESSION["client_name"];
        $this->mgr->app->client_address = &$_SESSION["client_address"];
        $this->mgr->app->days = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
        $this->mgr->app->months = array("inconnu", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
    }
    //===============================================
    public static function Instance() {
        $lOs = self::GetOs();
        if($lOs == "win") {return GManagerWin::Instance();}
        if($lOs == "unix") {return GManagerUnix::Instance();}
        return GManagerUnix::Instance();
    }
    //===============================================
    public static function GetOs() {
        $lOs = "unix";
        if (strtoupper(substr(PHP_OS, 0, 3)) == "WIN") {
            $lOs = "win";
        }      
        return $lOs;
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
        $lApp->debug .= sprintf("%s<br>\n", $data);
    }
    //===============================================
    public function loadData() {
        $this->clearDebug();
        $this->getPageId();
        $this->lastUrl();
        $this->fullUrl();
        $this->initFilesystem();
        $this->initSession();
        $this->getTitle();
    }
    //===============================================
    // session
    //===============================================
    public function initSession() {
        $lApp = $this->mgr->app;
        $lDataMap = array(
        "user_name",
        "user_fullname",
        "user_manager",
        "client_name",
        "client_address",
        );
        for($i = 0; $i < count($lDataMap); $i++) {
            $lData = $lDataMap[$i];
            if(!isset($_SESSION[$lData])) {
                $_SESSION[$lData] = "inconnu";
            }
        }
    }
    //===============================================
    public function clearSession() {
        $lDataMap = array(
        "user_name",
        "user_fullname",
        "user_manager",
        "client_name",
        "client_address",
        );
        for($i = 0; $i < count($lDataMap); $i++) {
            $lData = $lDataMap[$i];
            unset($_SESSION[$lData]);
        }
    }
    //===============================================
    // url
    //===============================================
    public function lastUrl() {
        $lApp = $this->mgr->app;
        $lNoLastUrl = array(
        "home/login",
        "home/logout",
        "home/message",
        );
        if(!in_array($lApp->page_id, $lNoLastUrl)) {
            $lApp->last_url = "/".$lApp->page_id;
        }
    }
    //===============================================
    // title
    //===============================================
    public function getTitle() {
        $lApp = $this->mgr->app;
        $lTitle = $lApp->page_map->getTitle($lApp->page_id);
        $lApp->title = $lApp->app_name;
        if($lTitle != "") {$lApp->title = $lTitle . " | " . $lApp->app_name;}
    }
    //===============================================
    public function fullUrl() {
        $lApp = $this->mgr->app;
        $lApp->full_url = "";
        $lApp->full_url .= isset($_SERVER['HTTPS']) ? "https" : "http";
        $lApp->full_url .= "://";
        $lApp->full_url .= $_SERVER["HTTP_HOST"];
        $lApp->full_url .= $_SERVER["REQUEST_URI"];
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
        $lReq = $_POST["req"];
        // view
        if($lReq == "view_get_datetime") {
            $lData = array();
            $lTimezone = $_POST["timezone"];
            date_default_timezone_set('Europe/Paris');
            $lData["date"] = date("d/m/Y");
            $lData["time"] = date("H:i:s");
            print_r(json_encode($lData));
        }
    }
    //===============================================
    // debug
    //===============================================
    public function clearDebug() {
        $lApp = $this->mgr->app;
        $lApp->debug = "";
    }
    //===============================================
    // filesystem
    //===============================================
    public function initFilesystem() {
        $lApp = $this->mgr->app;
        if(!$lApp->filesystem) {$lApp->filesystem = ".";}
    }
    //===============================================
    // font
    //===============================================
    public function loadFont() {
        $lApp = $this->mgr->app;
        $lPath = "";
        $lPath .= $_SERVER["DOCUMENT_ROOT"];
        $lPath .= $lApp->google_fonts;
        $lMap = glob("$lPath/*/*.css");
        $lRootLength = strlen($_SERVER["DOCUMENT_ROOT"]);
        
        for($i = 0; $i < count($lMap); $i++) {
            $lFilename = $lMap[$i];
            $lFile = substr($lFilename, $lRootLength); 
            echo sprintf("<link rel='stylesheet' type='text/css' href='%s'/>\n", $lFile);
        }
    }
    //===============================================
    // redirect
    //===============================================
    public function redirect($url) {
        $lLocation = sprintf("Location: %s", $url);
        header($lLocation);
        exit;
    }
    //===============================================
    public function redirectPost() {
        if(!empty($_POST) OR !empty($_FILES)) {
            $_SESSION["_SAVE_POST_"] = $_POST;
            $_SESSION["_SAVE_FILES_"] = $_FILES;
            $lUrl = $_SERVER["REQUEST_URI"];
            header("Location: " . $lUrl);
            exit;
        }
        if(isset($_SESSION["_SAVE_POST_"])) {
            $_POST = $_SESSION["_SAVE_POST_"];
            $_FILES = $_SESSION["_SAVE_FILES_"];
            unset($_SESSION["_SAVE_POST_"], $_SESSION["_SAVE_FILES_"]);
        }
    }
    //===============================================
    // string
    //===============================================
    public function getWidth($widthMap, $index, $defaultWidth) {
        $lWidthMap = explode(";", $widthMap);
        $lLength = count($lWidthMap);
        if($index >= $lLength) return $defaultWidth;
        $lWidthId = $lWidthMap[$index];
        if(!is_numeric($lWidthId)) return $defaultWidth;
        $lWidth = $lWidthId;
        return $lWidth;
    }    
    //===============================================
    // login
    //===============================================
    public function loginOn() {
        $lApp = $this->mgr->app;
        if($lApp->login_on != "on") {
            $lApp->message = sprintf("Vous n'êtes pas connectés");
            $this->redirect("/home/message");
        }
    }    
    //===============================================
    public function loginRoot() {
        $lApp = $this->mgr->app;
        $this->loginOn();
        if($lApp->login_group != "root") {
            $lApp->message = sprintf("Vous devez vous connecter en tant qu'utilisateur root");
            $this->redirect("/home/message");
        }
    }    
    //===============================================
    // password
    //===============================================
    public function getPassword($username, $userpass) {
        $lPassword = md5($username . "|" . $userpass);
        return $lPassword;
    }
    //===============================================
    // module
    //===============================================
    public function getId($key="id") {
        $lTime = microtime(true);
        $lId = $key . "_" . $lTime;
        return $lId;
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
    // win
    public $win;
    // page
    public $page_map;
    public $page_id;
    // lang
    public $lang;
    // title
    public $title;
    // style
    public $style_css;
    // font
    public $font_awesome;
    // manager
    public $manager_js;
    // request
    public $request_js;
    // google
    public $google_desc;
    public $google_fonts;
    // debug
    public $debug;
    // url
    public $last_url;
    public $full_url;
    // sqlite
    public $sqlite_db_path;
    public $sqlite_db_path2;
    public $sqlite_bin;
    // logo
    public $logo_web;
    public $logo_flat;
    public $logo_org;
    // filesystem
    public $filesystem;
    // view
    public $view_offset;
    // login
    public $login_on;
    public $login_group;
    // root
    public $root_name;
    public $root_pass;
    // user
    public $user_name;
    public $user_fullname;
    public $user_manager;
    // message
    public $message;
    // client
    public $client_name;
    public $client_address;
    // date
    public $days;
    public $months;
}
//===============================================
?>