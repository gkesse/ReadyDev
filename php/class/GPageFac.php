<?php
class GPageFac extends GModule {
    //===============================================
    private $m_id = 0;
    private $m_name = "";
    private $m_title = "";
    private $m_url = "";
    private $m_path = "";
    private $m_map = array();
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($_code = "page") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "name", $this->m_name);
        $lDom->addData($_code, "title", $this->m_title);
        $lDom->addData($_code, "url", $this->m_url);
        $lDom->addData($_code, "path", $this->m_path);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "page") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_id = $lDom->getItem($_code, "id");
        $this->m_name = $lDom->getItem($_code, "name");
        $this->m_title = $lDom->getItem($_code, "title");
        $this->m_url = $lDom->getItem($_code, "url");
        $this->m_path = $lDom->getItem($_code, "path");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function clone() {
        $lObj = new GPageFac();
        $lObj->setPage($this);
        return $lObj;
    }
    //===============================================
    public function setPage($_obj) {
        $this->m_id = $_obj->m_id;
        $this->m_name = $_obj->m_name;
        $this->m_title = $_obj->m_title;
        $this->m_url = $_obj->m_url;
        $this->m_path = $_obj->m_path;
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
        $this->addData("serialize()");
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
    public function searchPage() {
        $this->addLog("searchPage");
    }
    //===============================================
}
?>
