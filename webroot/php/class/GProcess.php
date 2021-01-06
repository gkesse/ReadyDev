<?php   
//===============================================
class GProcess {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private function __construct() {
        
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GProcess();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function run() {
        GManager::Instance()->loadData();
        GWidget::Create("header")->run();
        GWidget::Create("body")->run();
        GWidget::Create("footer")->run();
    }
    //===============================================
}
//===============================================
?>