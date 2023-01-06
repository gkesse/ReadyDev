<?php   
//===============================================
class GModule extends GSession {
    //===============================================
    protected $m_module = "";
    protected $m_method = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($_code = "request") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "module", $this->m_module);
        $lDom->addData($_code, "method", $this->m_method);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "request") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_module = $lDom->getItem($_code, "module");
        $this->m_method = $lDom->getItem($_code, "method");
    }
    //===============================================
 }
//===============================================
?>
