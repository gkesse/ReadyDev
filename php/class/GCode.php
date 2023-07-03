<?php
//===============================================
namespace php\class;
//===============================================
class GCode extends GXml {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function createRoot() {
        $lNode = $this->getNode($this, sprintf("/rdv"));
        if(!$lNode) {
            $lNode = $this->addObj($this, "rdv");
        }
        return $lNode;
    }
    //===============================================
    public function createDatas() {
        $lDom = new GCode();
        $lDom->m_node = $this->getNode($this, sprintf("/rdv/datas"));
        if(!$lDom->m_node) {
            $lDom->m_node = $this->createRoot();
            $lDom->m_node = $lDom->addObj($this, "datas");
        }
        return $lDom->m_node;
    }
    //===============================================
    public function createCode($_code) {
        $lDom = new GCode();
        $lDom->m_node = $this->getNode($this, sprintf("/rdv/datas/data[code='%s']", $_code));
        if(!$lDom->m_node) {
            $lDom->m_node = $this->createDatas();
            $lDom->m_node = $lDom->addObj($this, "data");
            $lDom->addValue($this, "code", $_code);
        }
        return $lDom->m_node;
    }
    //===============================================
    public function addData($_code, $_key, $_value, $_isCData = false) {
        $_value = strval($_value);
        if($_value == "") return;
        if($_value == "0") return;
        $lDom = new GCode();
        $lDom->m_node = $this->getNode($this, sprintf("/rdv/datas/data[code='%s']/%s", $_code, $_key));
        if(!$lDom->m_node) {
            $lDom->m_node = $this->createCode($_code);
            $lDom->addValue($this, $_key, $_value, $_isCData);
        }
        else {
            $lDom->setValue($this, $_value, $_isCData);
        }
        return $lDom->m_node;
    }
    //===============================================
    public function addMap($_code, $_map) {
        $lSize = count($_map);
        if(!$lSize) return;
        
        $lDom = new GCode();
        $lDom->m_node = $this->getNode($this, sprintf("/rdv/datas/data[code='%s']/map", $_code));
        
        if(!$lDom->m_node) {
            $lDom->m_node = $this->createCode($_code);
            $lDom->m_node = $lDom->addObj($this, "map");
        }
        
        for($i = 0; $i < $lSize; $i++) {
            $lObj = $_map[$i];
            $lData = $lObj->serialize($_code);
            $lData = $this->toDatas($lData);
            $lDom->loadNode($this, $lData);
        }
        return true;
    }
    //===============================================
    public function getData($_code, $_key, $_isCData = false) {
        $lDom = new GCode();
        $lDom->m_node = $this->getNode($this, sprintf("/rdv/datas/data[code='%s']/%s", $_code, $_key));
        $lData = "";
        if($lDom->m_node) {
            $lData = $lDom->getValue($_isCData);
        }
        return $lData;
    }
    //===============================================
    public function getMap($_code, &$_map, $_obj) {
        $lCount = $this->countNode($this, sprintf("/rdv/datas/data[code='%s']/map/data", $_code));
        if(!$lCount) return;
        
        for($i = 0; $i < $lCount; $i++) {
            $lDom = new GCode();
            $lDom->m_node = $this->getNode($this, sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", $_code, $i + 1));
            $lData = $lDom->toNode($this);
            $lData = $this->toCode($lData);
            $lObj = $_obj->clone();
            $lObj->deserialize($lData, $_code);
            $_map[] = $lObj;
        }
    }
    //===============================================
    public function loadData($_data) {
        if($_data == "") return;
        $lData = $this->toDatas($_data);
        if($lData != "") {
            $lDom = new GCode();
            $lDom->m_node = $this->createDatas();
            $lDom->loadNode($this, $lData);
        }
    }
    //===============================================
    public function toDatas($_data) {
        if($_data == "") return "";
        $lDom = new GCode();
        $lDomC = new GCode();
        $lDom->loadXml($_data);
        $lDomC->m_node = $lDom->getNode($lDom, sprintf("/rdv/datas"));
        $lData = "";
        if($lDomC->m_node) {
            $lData = $lDomC->toNode($lDom);
        }
        return $lData;
    }
    //===============================================
    public function toCode($_data) {
        $lDom = new GCode();
        $lDomC = new GCode();
        $lDom->createDoc();
        $lDomC->m_node = $lDom->createDatas();
        $lData = sprintf("<rdv>%s</rdv>", $_data);
        $lDomC->loadNode($lDom, $lData);
        $lData = $lDom->toString();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
