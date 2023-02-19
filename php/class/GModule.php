<?php   
//===============================================
class GModule extends GSession {
    //===============================================
    protected $m_module = "";
    protected $m_method = "";
    protected $m_responseXml = null;
    protected $m_curl;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_responseXml = new GCode();
        $this->m_curl = new GCurl();
    }
    //===============================================
    public function callServer($_module, $_method, $_data = "") {
        $this->m_curl->callServer($_module, $_method, $_data);
        $this->addLogs($this->m_curl->getLogs());
        $this->loadLogs($this->m_curl->getResponseText());
        $this->deserialize($this->m_curl->getResponseText());
    }
    //===============================================
    public function callProxy($_data) {
        $this->m_curl->callProxy($_data);
        $this->addLogs($this->m_curl->getLogs());
        $this->loadLogs($this->m_curl->getResponseText());
        $this->deserialize($this->m_curl->getResponseText());
    }
    //===============================================
    public function serialize($_code = "manager") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "module", $this->m_module);
        $lDom->addData($_code, "method", $this->m_method);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "manager") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_module = $lDom->getItem($_code, "module");
        $this->m_method = $lDom->getItem($_code, "method");
    }
    //===============================================
    public function setModule($_module) {
        $this->m_module = $_module;
    }
    //===============================================
    public function setMethod($_method) {
        $this->m_method = $_method;
    }
    //===============================================
    public function addResponse($_data) {
        $this->m_responseXml->loadData($_data);
    }
    //===============================================
    public function toResponse() {
        return $this->m_responseXml->toString();
    }
    //===============================================
 }
//===============================================
?>
