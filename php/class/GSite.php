<?php
class GSite extends GModule {
    //===============================================
    private $m_id = 0;
    private $m_name = "";
    private $m_title = "";
    private $m_label = "";
    private $m_defaultSite = "";
    //===============================================
    private $m_cacheDataPath = "data/cache/data";
    private $m_defaultSitePath = "cache_default_site.xml";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        $lObj = new GSite();
        $lObj->setPage($this);
        return $lObj;
    }
    //===============================================
    public function setPage($_obj) {
        $this->m_id = $_obj->m_id;
        $this->m_name = $_obj->m_name;
        $this->m_title = $_obj->m_title;
        $this->m_label = $_obj->m_label;
        $this->m_defaultSite = $_obj->m_defaultSite;
    }
    //===============================================
    public function serialize($_code = "site") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "name", $this->m_name);
        $lDom->addData($_code, "title", $this->m_title);
        $lDom->addData($_code, "label", $this->m_label);
        $lDom->addData($_code, "default_site", base64_encode($this->m_defaultSite));
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "site") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_id = $lDom->getItem($_code, "id");
        $this->m_name = $lDom->getItem($_code, "name");
        $this->m_title = $lDom->getItem($_code, "title");
        $this->m_label = $lDom->getItem($_code, "label");
        $this->m_defaultSite = base64_decode($lDom->getItem($_code, "default_site"));
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method == "") {
            $this->addError("La méthode est obligatoire.");
        }
        else if($this->m_method == "save_site") {
            $this->onSaveSite($_data);
        }
        else if($this->m_method == "store_default_site") {
            $this->onStoreDefaultSite($_data);
        }
        else if($this->m_method == "load_default_site") {
            $this->onLoadDefaultSite($_data);
        }
        else {
            $this->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function onSaveSite($_data) {
        $lData = $this->m_defaultSite;
        $this->callProxy($_data);
        if(!$this->hasErrors()) {
            $lSite = new GSite();
            $lSite->m_defaultSite = $lData;
            $lSite->onStoreDefaultSite($_data);
        }
    }
    //===============================================
    public function onStoreDefaultSite($_data) {
        if($this->m_defaultSite == "") {
            $this->addError("Les données du site par défaut sont vides.");
            return  false;
        }
        $lData = $this->serialize();
        $lFile = new GFile();
        $lFile->saveData($this->m_cacheDataPath, $this->m_defaultSitePath, $lData);
        $this->addLogs($lFile->getLogs());
        return !$this->hasErrors();
    }
    //===============================================
    public function onLoadDefaultSite($_data) {
        $lFile = new GFile();
        $lData = $lFile->loadData($this->m_cacheDataPath, $this->m_defaultSitePath);
        if(!$lFile->hasErrors()) {
            $this->deserialize($lData);
        }
        return !$this->hasErrors();
    }
    //===============================================
}
?>
