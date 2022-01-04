<?php   
//===============================================
class GShopping extends GWidget {
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
            self::$m_instance = new GShopping();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("shopping.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function show() {
        echo sprintf("<div class='shopping'>\n");
        echo sprintf("<div class=''>%s</div>\n", $this->getTitle());
        echo sprintf("</div>\n");
    }
    //===============================================
    public function getTitle() {
        $this->dom->queryXPath(sprintf("/rdv/shopping/product/title"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
 }
//===============================================
?>
