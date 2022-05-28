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
        $this->createNode4($key, $value, $isCData);
    }
    //===============================================
    public function addParam($key, $value) {
        $this->addData("params", $key, $value);
    }
    //===============================================
    public function addSession($key, $value) {
        $this->addData("session", $key, $value);
    }
    //===============================================
    public function addUser() {
        $lUser = new GUser();
        if(!$lUser->isLogin()) return;
        $lId = $lUser->getUserId();
        $this->addSession("user_id", $lId);
    }
    //===============================================
    public function countCode($code) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data", $code));
        return $this->countXPath();
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
    public function createDoc($version = "1.0", $encoding = "UTF-8") {
        parent::createDoc($version, $encoding);
        $this->createRoot("rdv");
        $this->createXPath();
    }
    //===============================================
    public function createRequest($module, $method) {
        $this->addData("request", "module", $module);
        $this->addData("request", "method", $method);
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
    public function hasCode($code) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']", $code));
        $lData = $this->countXPath();
        return ($lData != 0);
    }
    //===============================================
    public function loadCode($data) {
        if($data == "") return $this;
        $this->createNode2("/rdv/datas");
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
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']", $code));
        $this->getNodeIndex(0);
        $lData = $this->toStringNode();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
