<?php
//===============================================
class GProcess extends GObject {
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
            self::$m_instance = new GProcess();
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("app_process.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function show() {
        GHeader::Instance()->show();
        $this->getObj()->show();
        GFooter::Instance()->show();
    }
    //===============================================
    public function getProcessName() {
        $this->dom->queryXPath(sprintf("/rdv/process/name"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
