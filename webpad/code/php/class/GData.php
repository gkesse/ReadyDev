<?php
//===============================================
class GData extends GObject {
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
            self::$m_instance = new GData();
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("app_data.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function getData($code) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/data", $code));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
