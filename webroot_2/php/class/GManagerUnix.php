<?php   
//===============================================
class GManagerUnix extends GManager {
    //===============================================
    private static $m_instance = null;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GManagerUnix();  
        }
        return self::$m_instance;
    }
    //===============================================
}
//===============================================
?>