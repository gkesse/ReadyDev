<?php
//===============================================
class GCode extends GDomXml {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function createObj() {
        $this->createDoc("1.0", "UTF-8");
        $this->createRoot("rdv");
        $this->createXPath();
    }
    //===============================================
    public function loadXmlData($xml) {
        $this->createDoc();
        parent::loadXmlData($xml);
        $this->createXPath();
    }
    //===============================================
    public function createRequest($module, $method) {
        $this->createCode2("request", "module", $module);
        $this->createCode2("request", "method", $method);
    }
    //===============================================
    public function addParameter($key, $value) {
        $this->createCode2("parameters", $key, $value);
    }
    //===============================================
    public function createCode($code) {
        if(!$this->hasCode($code)) {
            $this->createNode2("/rdv/datas");
            $this->createNode3("data");
            $this->createNode4("code", $code);
        }
    }
    //===============================================
    public function createCode2($code, $key, $value) {
        $this->createCode($code);
        $this->getCode($code);
        $this->createNode4($key, $value);        
    }
    //===============================================
    public function hasCode($code) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']", $code));
        $lData = $this->countXPath();
        return ($lData != 0);
    }
    //===============================================
    public function getCode($code) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']", $code));
        $this->getNodeIndex(0);
    }
    //===============================================
    public function getCode2($code, $key, $index) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]/%s", $code, $index + 1, $key));
        $this->getNodeIndex(0);
        $lData = $this->getNodeValue();
        return $lData;
    }
    //===============================================
    public function countCode($code, $key) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data/%s", $code, $key));
        return $this->countXPath();
    }
    //===============================================
}
//===============================================
?>
