<?php
class GFont extends GObject {
    //===============================================
    private $m_filename;
    //===============================================
    public function __construct() {
        $this->m_filename = "un/deux/trois";
    }
    //===============================================
    public function serialize($_code = "font") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "filename", $this->m_filename);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "font") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->loadXml($_data);
        $this->m_filename = $lDom->getData($_code, "filename");
    }
    //===============================================
    public function loadFont() {
        $lClient = new GClient();
        $lData = $this->serialize();
        $lData = $lClient->callServer("font", "load_module", $lData);
        $this->deserialize($lData);
    }
    //===============================================
}
?>