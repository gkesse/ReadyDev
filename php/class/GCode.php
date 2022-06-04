<?php
//===============================================
class GCode extends GXml {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function addData($code, $key, $value, $isCData = false) {
        if($value == "") return;
        $this->createCode($code);
        $this->getCode($code);
        $this->createXNode($key, $value, $isCData);
    }
    //===============================================
    public function addList($code, $data, $category = "", $isCData = false) {
        if(empty($data)) return;
        $this->createCode($code);
        $this->getCode($code);
        $this->createXNode("map");
        for($i = 0; $i < count($data); $i++) {
            $lData = $data[$i];
            $this->saveNode();
            if($category == "") {
                $this->createRNode("data", $lData, $isCData);
            }
            else {
                $this->createXNode("data");
                $this->saveNode();
                $this->createRNode("category", $category);
                $this->createRNode("data", $lData, $isCData);                
                $this->restoreNode();
            }
            $this->restoreNode();
        }
    }
    //===============================================
    public function addListCD($code, $data, $category = "") {
        $this->addList($code, $data, $category, true);
    }
    //===============================================
    public function countCode($code) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data", $code));
        return $this->countXPath();
    }
    //===============================================
    public function createCode($code) {
        if(!$this->hasCode($code)) {
            $this->createXNode("/rdv/datas");
            $this->createXNode("data");
            $this->createXNode("code", $code);
        }
    }
    //===============================================
    public function createDoc($version = "1.0", $encoding = "UTF-8") {
        parent::createDoc($version, $encoding);
        $this->createXPath();
    }
    //===============================================
    public function createRequest($module, $method) {
        $this->addData("request", "module", $module);
        $this->addData("request", "method", $method);
    }
    //===============================================
    public function getCode($code) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']", $code));
    }
    //===============================================
    public function getItem($code, $key) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']/%s", $code, $key));
        $lData = $this->getNodeValue();
        return $lData;
    }
    //===============================================
    public function getItem2($code, $index) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", $code, $index + 1));
        $lData = $this->getNodeValue();
        return $lData;
    }
    //===============================================
    public function getItem3($code, $key, $index) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]/%s", $code, $index + 1, $key));
        $lData = $this->getNodeValue();
        return $lData;
    }
    //===============================================
    public function hasCode($code) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']", $code));
        $lData = $this->countXPath();
        return ($lData != 0);
    }
    //===============================================
    public function loadCode($data) {
        if($data == "") return $this;
        $this->createXNode("/rdv/datas");
        $this->loadNode($data);
        return $this;
    }
    //===============================================
    public function loadXmlData($xml) {
        if($xml == "") return;
        $this->createDoc();
        parent::loadXmlData($xml);
        $this->createXPath();
    }
    //===============================================
    public function toStringCode($code) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']", $code));
        $lData = $this->toStringNode();
        return $lData;
    }
    //===============================================
    public function toStringData() {
        $this->getXPath(sprintf("/rdv/datas/data"));
        $lCount = $this->countXPath();
        $lData = "";
        for($i = 0; $i < $lCount; $i++) {
            $this->getNodeIndex($i);
            $lData .= $this->toStringNode();
        }
        return $lData;
    }
    //===============================================
}
//===============================================
?>
