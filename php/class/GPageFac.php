<?php
class GPageFac extends GModule {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($_code = "page") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->loadData(parent::serialize());
        //$lDom->addData($_code, "module", $this->m_module);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "page") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        //$this->m_module = $lDom->getItem($_code, "module");
    }
    //===============================================
    public function onModule($_data) {
        $this->deserialize($_data);
        if($this->m_method == "") {
            $this->addError("Erreur la méthode est obligatoire.");
        }
        else if($this->m_method == "save_page") {
            $this->onSavePage();
        }
        else if($this->m_method == "search_page") {
            $this->onSearchPage();
        }
        else if($this->m_method == "delete_page") {
            $this->onDeletePage();
        }
        else {
            $this->addError("Erreur la méthode est inconnue.");
        }
    }
    //===============================================
    public function onSavePage() {
        $this->addData($this->serialize());
    }
    //===============================================
    public function onSearchPage() {
        $this->addLog("onSearchPage");
    }
    //===============================================
    public function onDeletePage() {
        $this->addLog("onDeletePage");
    }
    //===============================================
}
?>
