<?php
//===============================================
class GCode extends GXml {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function addData($code, $key, $value, $isCData = false) {
        if($value == "") return false;
        $this->createCode($code);
        $this->getCode($code);
        $this->createXNode($key, $value, $isCData);
        return true;
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
    public function addMap($_code, $_map) {
        if(!count($_map)) return false;
        $this->createCode($_code);
        $this->getCode($_code);
        $this->createXNode("map");
        for($i = 0; $i < count($_map); $i++) {
            $lObj = $_map[$i];
            $lData = $lObj->serialize($_code);
            $lDom = new GCode();
            $lDom->loadXml($lData);
            $lData = $lDom->toStringData();            
            $this->loadNode($lData);
        }
        return true;
    }
    //===============================================
    public function getMap($_code, &$_map, $_obj) {
        $lCount = $this->countItem($_code);
        
        for($i = 0; $i < $lCount; $i++) {
            $lData = $this->getMapItem($_code, $i);
            $lObj = $_obj->clone();
            $lObj->deserialize($lData, $_code);
            $_map[] = $lObj;
        }
        return true;
    }
    //===============================================
    public function getMap2($_code, &$datas, $obj) {
        $lCount = $this->countItem($_code);
        
        for($i = 0; $i < $lCount; $i++) {
            $lData = $this->getMapItem($_code, $i);
            $lObj = $obj->clone();
            $lObj->deserialize($lData, $_code);
            $datas[] = $lObj;
        }
        return true;
    }
    //===============================================
    public function getMapItem($code, $index) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", $code, $index + 1));
        $lData = $this->toStringNode();
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->createXNode("/rdv/datas");
        $lDom->loadNode($lData);
        return $lDom->toString();
    }
    //===============================================
    public function countItem($code) {
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
    public function createRequest($module, $method) {
        $this->addData("request", "module", $module);
        $this->addData("request", "method", $method);
    }
    //===============================================
    public function getCode($code) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']", $code));
    }
    //===============================================
    public function getCode2($code, $index) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", $code, $index + 1));
    }
    //===============================================
    public function getItem($code, $key, $isCData = false) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']/%s", $code, $key));
        $lData = $this->getNodeValue($isCData);
        return $lData;
    }
    //===============================================
    public function getItem2($code, $index, $isCData = false) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", $code, $index + 1));
        $lData = $this->getNodeValue($isCData);
        return $lData;
    }
    //===============================================
    public function getItem3($code, $key, $index, $isCData = false) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]/%s", $code, $index + 1, $key));
        $lData = $this->getNodeValue($isCData);
        return $lData;
    }
    //===============================================
    public function getItemC($code, $category, $key, $isCData = false) {
        $lCount = $this->countItem($code);
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3($code, "category", $i);
            $lData = $this->getItem3($code, $key, $i, $isCData);
            if($lCategory == $category) {
                return $lData;
            }
        }
        return "";
    }
    //===============================================
    public function getList($code, &$obj, $isCData = false) {
        $lCount = $this->countItem($code);
        for($i = 0; $i < $lCount; $i++) {
            $lData = $this->getItem2($code, $i, $isCData);
            $obj[] = $lData;
        }
    }
    //===============================================
    public function getListC($code, $category, $key, $isCData = false) {
        $lDatas = array();
        $lCount = $this->countItem($code);
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3($code, "category", $i);
            $lData = $this->getItem3($code, $key, $i);
            if($lCategory == $category) {
                $lDatas[] = $lData;
            }
        }
        return $lDatas;
    }
    //===============================================
    public function hasData() {
        $this->queryXPath(sprintf("/rdv/datas/data[code]"));
        $lCount = $this->countXPath();
        return ($lCount != 0);
    }
    //===============================================
    public function hasCode($code) {
        $this->queryXPath(sprintf("/rdv/datas/data[code='%s']", $code));
        $lCount = $this->countXPath();
        return ($lCount != 0);
    }
    //===============================================
    public function loadCode($data) {
        if($data == "") return $this;
        $this->createXNode("/rdv/datas");
        $this->loadNode($data);
        return $this;
    }
    //===============================================
    public function toStringCode($code) {
        $this->getXPath(sprintf("/rdv/datas/data[code='%s']", $code));
        $lData = $this->toStringNode();
        return $lData;
    }
    //===============================================
    public function toStringData() {
        $lData = "";
        if($this->hasData()) {
            $this->queryXPath(sprintf("/rdv/datas/data"));
            $lCount = $this->countXPath();
            for($i = 0; $i < $lCount; $i++) {
                $this->getNodeIndex($i);
                $lData .= $this->toStringNode();
            }
        }
        return $lData;
    }
    //===============================================
}
//===============================================
?>
