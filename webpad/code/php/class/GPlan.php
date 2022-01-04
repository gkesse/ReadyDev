<?php   
//===============================================
class GPlan extends GWidget {
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
            self::$m_instance = new GPlan();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("plan.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function show() {
        echo sprintf("<div class='plan'>\n");
        echo sprintf("<div class=''>plan</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
 }
//===============================================
?>
