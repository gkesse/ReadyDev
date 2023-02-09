<?php   
//===============================================
class GModule extends GSession {
    //===============================================
    protected $m_module = "";
    protected $m_method = "";
    protected $m_responseXml = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_responseXml = new GCode();
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
