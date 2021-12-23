<?php   
//===============================================
class GCDiscount extends GWidget {
    //===============================================
    static private $m_instance = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GCDiscount();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("phone.xml");
    }
    //===============================================
    public function show() {
        echo sprintf("<div class='body_main'>\n");

        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>
