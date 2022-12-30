<?php
class GApp extends GCode {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private function __construct() {
        parent::__construct();
        $this->loadFile("data/xml", "app.xml");
    }
    //===============================================
    public static function Instance() {
        if(self::$m_instance == null) {
            self::$m_instance = new GApp;
        }
        return self::$m_instance;
    }
    //===============================================
}
?>