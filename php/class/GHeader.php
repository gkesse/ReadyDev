<?php   
//===============================================
class GHeader extends GObject {
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
            self::$m_instance = new GHeader();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile($this->getResourcePath("xml", "header.xml"));
        $this->dom->createXPath();
    }
    //===============================================
    public function getHappy() {
        $this->dom->queryXPath(sprintf("/rdv/header/happyyear/text"));
        $this->dom->getNodeXPath();
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getHappyYear() {
        $lHappy = $this->getHappy();
        $lYear = date("Y");
        $lData = sprintf("%s %s", $lHappy, $lYear);
        return $lData;
    }
    //===============================================
}
//===============================================
?>
