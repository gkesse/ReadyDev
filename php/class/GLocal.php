<?php
class GLocal extends GModule {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_data) {
        parent::deserialize($_data);
        if($this->m_module == "") {
            $this->addError("Le module est obligatoire.");
        }
        //===============================================
        else if($this->m_module == "page") {
            $this->onPage($_data);
        }
        else if($this->m_module == "image") {
            $this->onImage($_data);
        }
        else if($this->m_module == "font_awesome") {
            $this->onFontAwesome($_data);
        }
        else if($this->m_module == "file") {
            $this->onFile($_data);
        }
        //===============================================
        else {
            $this->addError("Le module est inconnu.");
        }
    }
    //===============================================
    public function onPage($_data) {
        $lObj = new GPageFac();
        $lObj->run($_data);
        $this->addLogs($lObj->getLogs());
        $this->addResponse($lObj->serialize());
    }
    //===============================================
    public function onImage($_data) {
        $lObj = new GImage();
        $lObj->run($_data);
        $this->addLogs($lObj->getLogs());
        $this->addResponse($lObj->serialize());
    }
    //===============================================
    public function onFontAwesome($_data) {
        $lObj = new GFontAwesome();
        $lObj->run($_data);
        $this->addLogs($lObj->getLogs());
        $this->addResponse($lObj->serialize());
    }
    //===============================================
    public function onFile($_data) {
        $lObj = new GFile();
        $lObj->run($_data);
        $this->addLogs($lObj->getLogs());
        $this->addResponse($lObj->serialize());
    }
    //===============================================
}
?>
