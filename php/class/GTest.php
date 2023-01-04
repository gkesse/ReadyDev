<?php
class GTest extends GObjectUi {
    //===============================================
    protected $m_lang;
    protected $m_module;
    protected $m_method;
    //===============================================
    public function __construct($_codeName = "test") {
        parent::__construct($_codeName);
    }
    //===============================================
    public function serialize($code = "test") {
        $lData = new GCode();
        $lData->createDoc();
        $lData->addData($code, "lang", $this->m_lang);
        $lData->addData($code, "module", $this->m_module);
        $lData->addData($code, "method", $this->m_method);
        return $lData->toString();
    }
    //===============================================
    public function deserialize($data, $code = "test") {
        $lData = new GCode();
        $lData->loadXml($data);
        $this->m_lang = $lData->getData($code, "lang");
        $this->m_module = $lData->getData($code, "module");
        $this->m_method = $lData->getData($code, "method");
    }
    //===============================================
}
?>