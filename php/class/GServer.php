<?php   
//===============================================
class GServer extends GModule {
    //===============================================
    protected $m_type;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function sendResponse() {
        $this->addResponse($this->loadLogs());
        echo $this->toResponse();
    }
    //===============================================
    public function serialize($_code = "server") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "type", $this->m_type);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "server") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_type = $lDom->getItem($_code, "type");
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_type == "") {
            $this->addError("Erreur le type du traitement est obligatoire.");
        }
        else if($this->m_type == "local") {
            $this->runLocal($_data);
        }
        else if($this->m_type == "remote") {
            $this->runRemote($_data);
        }
        else {
            $this->addError("Erreur le type du traitement est inconnu.");
        }
    }
    //===============================================
    public function runLocal($_data) {
        if($this->m_module == "") {
            $this->addError("Erreur le module est obligatoire.");
        }
        else if($this->m_module == "page") {
            $this->onPage($_data);
        }
        else {
            $this->addError("Erreur le module est inconnu.");
        }
    }
    //===============================================
    public function runRemote($_data) {
        $lCurl = new GCurl();
        $lDom = new GXml();
        $lDom->loadXml($_data);
        $lCurl->callProxy($lDom->toString());
        $this->addLogs($lCurl->getLogs());
        $this->addResponse($lCurl->getResponseText());
    }
    //===============================================
    public function onPage($_data) {
        $lPage = new GPageFac();
        $lPage->onModule($_data);
        $this->addLogs($lPage->getLogs());
        $this->addResponse($lPage->serialize());
    }
    //===============================================
 }
//===============================================
?>
