<?php
//===============================================
namespace php\class;
//===============================================
class GEmailAddr extends GObject {
    //===============================================
    private $m_email = "";
    private $m_name = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        return new GEmailAddr();
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_email = $_obj->m_email;
        $this->m_name = $_obj->m_name;
    }
    //===============================================
    public function setAddr($_email, $_name) {
        $this->m_email = $_email;
        $this->m_name = $_name;
    }
    //===============================================
    public function addAddr($_email, $_name) {
        $lObj = new GEmailAddr();
        $lObj->m_email = $_email;
        $lObj->m_name = $_name;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function getEmail() {
        return $this->m_email;
    }
    //===============================================
    public function getName() {
        return $this->m_name;
    }
    //===============================================
    public function serialize($_code = "email_addr") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "email", $this->m_email);
        $lDom->addData($_code, "name", $this->m_name);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "email_addr") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_email = $lDom->getData($_code, "email");
        $this->m_name = $lDom->getData($_code, "name");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
}
//===============================================
?>
