<?php
class GTest extends GObject {
    //===============================================
    protected $m_lang;
    protected $m_module;
    protected $m_method;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_lang = $_obj->m_lang;
        $this->m_module = $_obj->m_module;
        $this->m_method = $_obj->m_method;
    }
    //===============================================
    public function setTest($_lang, $_module, $_method) {
        $this->m_lang = $_lang;
        $this->m_module = $_module;
        $this->m_method = $_method;
    }
    //===============================================
    public function initTest() {
        $this->setTest("php", "prod", "test");
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
    public function run() {
        $this->initTest();
        
        if($this->m_lang == "") {
            $this->addError("Le langage est obligatoire.");
        }
        else if($this->m_lang == "php") {
            $this->runPhp();
        }
        else if($this->m_lang == "js") {
            $this->runJs();
        }
        else {
            $this->addError("Le langage est inconnue.");
        }
    }
    //===============================================
    public function runPhp() {
        $lObj = new GPhpTest();
        $lObj->setObj($this);
        $lObj->run();
        $this->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runJs() {
        $lObj = new GJsTest();
        $lObj->setObj($this);
        $lObj->run();
        $this->addLogs($lObj->getLogs());
    }
    //===============================================
}
?>