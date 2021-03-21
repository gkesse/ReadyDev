<?php   
//===============================================
class GManagerWin extends GManager {
    //===============================================
    private static $m_instance = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->mgr->app->sqlite_db_path2 = "data\\sqlite\\config.dat";
        $this->mgr->app->sqlite_bin = "C:\\Users\\Admin\\Downloads\\Programs\\ReadyLib\\dev\\sqlite\\3.29.0\\mingw\\bin\\sqlite3";
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GManagerWin();  
        }
        return self::$m_instance;
    }
    //===============================================
}
//===============================================
?>