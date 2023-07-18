<?php
//===============================================
namespace php\class;
//===============================================
class GEmailFile extends GObject {
    //===============================================
    private $m_file = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        return new GEmailFile();
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_file = $_obj->m_file;
    }
    //===============================================
    public function addAddr($_file) {
        $lObj = new GEmailFile();
        $lObj->m_file = $_file;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function getFile() {
        return $this->m_file;
    }
    //===============================================
    public function serialize($_code = "email_file") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "file", $this->m_file);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "email_file") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_file = $lDom->getData($_code, "file");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
}
//===============================================
?>
