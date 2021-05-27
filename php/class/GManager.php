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
        $this->mgr->app->app_name = "ReadyDev";
        $this->mgr->app->lang = "fr";
        $this->mgr->app->title = $this->mgr->app->app_name;
        $this->mgr->app->sqlite_db_path = "/data/sqlite/database.dat";
        $this->mgr->app->view_offset = 250;
        $this->mgr->app->cv_path = "https://github.com/gkesse/ReadyDev/raw/master";    
        $this->mgr->app->img_path = "/data/img/defaults";
        $this->mgr->app->img_map = array();
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
    // url
    //===============================================
    public function getUrl($url) {
        $lUrl = $url;
        $lUrl = Normalizer::normalize($lUrl , Normalizer::FORM_D);
        $lUrl = preg_replace('/[\x{0300}-\x{036f}]/u', "", $lUrl);
        $lUrl = preg_replace('/\s/u', "-", $lUrl);
        $lUrl = str_replace("'", "-", $lUrl);
        $lUrl = str_replace('"', "-", $lUrl);
        return $lUrl;
    }
    //===============================================
    // img
    //===============================================
    public function loadImg() {
        $lApp = $this->mgr->app;
        $lFullPath = $_SERVER["DOCUMENT_ROOT"]."/".$lApp->img_path;
        $lDir = opendir($lFullPath);
        if($lDir) {
            while(1) {
                $lFile = readdir($lDir);
                if(!$lFile) {break;}
                if(is_dir($lFile)) {continue;}
                $lPath = $lApp->img_path ."/".$lFile;
                $lApp->img_map[$lFile] = $lPath;
            }
            closedir($lDir);
        }
    }
    //===============================================
    public function getImg($img) {
        $lApp = $this->mgr->app;
        $lPath = $lApp->img_path ."/".$img;
        return $lPath;
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
    // lang
    public $lang;
    // title
    public $title;
    // sqlite
    public $sqlite_db_path;
    // view
    public $view_offset;
    // cv
    public $cv_path;
    // img
    public $img_map;
    public $img_path;
}
//===============================================
?>
