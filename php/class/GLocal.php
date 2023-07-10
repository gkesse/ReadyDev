<?php
//===============================================
namespace php\class;
//===============================================
class GLocal extends GManager {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_data) {
        parent::deserialize($_data);
        if($this->m_module == "") {
            $this->m_logs->addError("Le module est obligatoire.");
        }
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
        else if($this->m_module == "sitemap") {
            $this->onSitemap($_data);
        }
        else {
            $this->m_logs->addError("Le module est inconnu.");
        }
    }
    //===============================================
    public function onPage($_data) {
        $lObj = new GPage();
        $lObj->run($_data);
        $this->m_logs->addLogs($lObj->getLogs());
        $this->m_resp->loadData($lObj->serialize());
    }
    //===============================================
    public function onImage($_data) {
        $lObj = new GImage();
        $lObj->run($_data);
        $this->m_logs->addLogs($lObj->getLogs());
        $this->m_resp->loadData($lObj->serialize());
    }
    //===============================================
    public function onFontAwesome($_data) {
        $lObj = new GFontAwesome();
        $lObj->run($_data);
        $this->m_logs->addLogs($lObj->getLogs());
        $this->m_resp->loadData($lObj->serialize());
    }
    //===============================================
    public function onFile($_data) {
        $lObj = new GFile();
        $lObj->run($_data);
        $this->m_logs->addLogs($lObj->getLogs());
        $this->m_resp->loadData($lObj->serialize());
    }
    //===============================================
    public function onSitemap($_data) {
        $lObj = new GSitemap();
        $lObj->run($_data);
        $this->m_logs->addLogs($lObj->getLogs());
        $this->m_resp->loadData($lObj->serialize());
    }
    //===============================================
}
//===============================================
?>
