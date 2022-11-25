<?php
class GManager extends GObject {
    //===============================================
    private $m_moduleName;
    private $m_methodName;
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    public function serialize($_code = "manager") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "module", $this->m_moduleName);
        $lDom->addData($_code, "method", $this->m_methodName);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "manager") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->loadXml($_data);
        $this->m_moduleName = $lDom->getData($_code, "module");
        $this->m_methodName = $lDom->getData($_code, "method");
    }
    //===============================================
}
?>