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
        $this->createCode2("params", $key, $value);
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
        if($value == "") return;
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
    public function getItem($code, $key) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']/%s", $code, $key));
        $this->getNodeIndex(0);
        $lData = $this->getNodeValue();
        return $lData;
    }
    //===============================================
    public function getItem2($code, $index) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", $code, $index + 1));
        $this->getNodeIndex(0);
        $lData = $this->getNodeValue();
        return $lData;
    }
    //===============================================
    public function getItem3($code, $key, $index) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]/%s", $code, $index + 1, $key));
        $this->getNodeIndex(0);
        $lData = $this->getNodeValue();
        return $lData;
    }
    //===============================================
    public function countCode($code) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data", $code));
        return $this->countXPath();
    }
    //===============================================
    public function loadCode($data) {
        if($data == "") return $this;
        $this->queryXPath(sprintf("/rdv/datas"));
        $this->getNodeIndex(0);
        $this->loadNodeData($data);
        return $this;
    }
    //===============================================
    public function toStringCode($code) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']", $code));
        $this->getNodeIndex(0);
        $lData = $this->toStringNode();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
