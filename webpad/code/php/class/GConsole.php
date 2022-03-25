<?php
//===============================================
class GConsole extends GObject {
    //===============================================
    static private $m_instance = null;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GConsole();
        }
        return self::$m_instance;
    }
    //===============================================
    public function printData($data) {
        echo $data . "<br>";
    }
    //===============================================
    public function printCode($data) {
        echo "<xmp class='console'>$data</xmp>";
    }
    //===============================================
}
//===============================================
?>
