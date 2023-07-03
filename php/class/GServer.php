<?php   
//===============================================
namespace php\class;
//===============================================
class GServer extends GManager {
    //===============================================
    private $m_type;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function sendResponse() {
        $this->m_resp->loadData($this->m_logs->serialize());
        $lData = $this->toResponse();
        echo $lData;
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
        $this->m_type = $lDom->getData($_code, "type");
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_type == "") {
            $this->m_logs->addError("Le type du traitement est obligatoire.");
        }
        else if($this->m_type == "local") {
            $this->runLocal($_data);
        }
        else if($this->m_type == "remote") {
            $this->runRemote($_data);
        }
        else {
            $this->m_logs->addError("Le type du traitement est inconnu.");
        }
    }
    //===============================================
    public function runLocal($_data) {
        $lLocal = new GLocal();
        $lLocal->run($_data);
        $this->m_logs->addLogs($lLocal->getLogs());
        $this->m_resp->loadData($lLocal->toResponse());
    }
    //===============================================
    public function runRemote($_data) {
        $lCurl = new GCurl();
        $lCurl->callProxy($_data);
        $this->m_logs->addLogs($lCurl->getLogs());
        $this->m_resp->loadData($lCurl->getResponseText());
    }
    //===============================================
 }
//===============================================
?>
