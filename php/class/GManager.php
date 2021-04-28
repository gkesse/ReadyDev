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

}
//===============================================
?>
