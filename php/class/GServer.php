<?php   
//===============================================
class GServer extends GModule {
    //===============================================
    protected $m_responseXml;
    protected $m_type;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_responseXml = new GCode();
        $this->m_responseXml->createDoc();
    }
    //===============================================
    public function addResponse($_data) {
        $this->m_responseXml->loadData($_data);
    }
    //===============================================
    public function readErrors() {
        $this->addResponse($this->loadErrors());
    }
    //===============================================
    public function sendResponse() {
        echo $this->m_responseXml->toString();
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
        if($this->m_module == "") {
            $this->addError("Erreur le module est obligatoire.");
        }
        else if($this->m_module == "page") {
            $this->onPage($_data);
        }
        else if($this->m_module == "user") {
            $this->onUser($_data, $this);
        }
        else if($this->m_module == "sitemap") {
            $this->onSitemap($_data, $this);
        }
        else if($this->m_module == "query") {
            $this->onQuery($_data, $this);
        }
        else if($this->m_module == "manager") {
            $this->onManager($_data, $this);
        }
        else {
            $this->addError("Erreur le module est inconnu.");
        }
    }
    //===============================================
    public function onPage($_data) {
        $lPageFac = new GPageFac();
        $lPageFac->onModule($_data);
        $this->addLogs($lPageFac->getLogs());
        $this->addResponse($lPageFac->serialize());
    }
    //===============================================
    public function onUser($data, $server) {
        $lUser = new GUser();
        $lUser->onModule($data, $server);
    }
    //===============================================
    public function onSitemap($data, $server) {
        $lSitemap = new GSitemap();
        $lSitemap->onModule($data, $server);
    }
    //===============================================
    public function onQuery($data, $server) {
        $lQuery = new GQuery();
        $lQuery->onModule($data, $server);
    }
    //===============================================
    public function onManager($data, $server) {
        $lManager = new GManager();
        $lManager->onModule($data, $server);
    }
    //===============================================
 }
//===============================================
?>
