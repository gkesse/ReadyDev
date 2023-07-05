<?php   
//===============================================
namespace php\class;
//===============================================
class GTestPhp extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_module, $_method) {
        if($_method == "") {
            $this->m_logs->addError("La méthode est obligatoire.");
        }
        else if($_method == "prod") {
            $this->runProd($_module, $_method);
        }
        else if($_method == "xml") {
            $this->runXml($_module, $_method);
        }
        else if($_method == "code") {
            $this->runCode($_module, $_method);
        }
        else if($_method == "log") {
            $this->runLog($_module, $_method);
        }
        else if($_method == "socket") {
            $this->runSocket($_module, $_method);
        }
        else if($_method == "curl") {
            $this->runCurl($_module, $_method);
        }
        else {
            $this->m_logs->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function runProd($_module, $_method) {
        $lObj = new GReady();
        $lObj->run();
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runXml($_module, $_method) {
        $lDom = new GXml();
        $lDomC = new GXml();
        
        // createDoc - setNode - addObj - addValue - print
        $lDom->createDoc();
        $lDomC->setNode($lDom->addObj($lDom, "datas"));
        $lDomC->setNode($lDomC->addObj($lDom, "data"));
        $lDomC->addValue($lDom, "code", "logs");
        $lDomC->addValue($lDom, "type", "error");
        $lDomC->addValue($lDom, "side", "server_php");
        $lDomC->addValue($lDom, "msg", "La connexion au serveur a échoué.");
        $lDom->print();
    }
    //===============================================
    public function runCode($_module, $_method) {
        $lDom = new GCode();
        
        // createDoc - addData - print
        $lDom->createDoc();
        $lDom->addData("logs", "type", "error");
        $lDom->addData("logs", "side", "server_php");
        $lDom->addData("logs", "msg", "La connexion au serveur a échoué.");
        $lDom->print();
    }
    //===============================================
    public function runLog($_module, $_method) {
        $lLog = new GLog();
        
        // addError - addLog - addData - print
        $lLog->addError("La connexion au serveur a échoué.");
        $lLog->addLog("La module de communication est chargé.");
        $lLog->addData("La résolution est de 1200 x 796.");
        $lLog->loadFromMap(1);
        $lLog->print();
        $this->m_logs->addLogs($lLog);
    }
    //===============================================
    public function runSocket($_module, $_method) {
        $lClient = new GSocket();
        $lDom = new GCode();
        
        // callFacade
        $lDom->createDoc();
        $lDom->addData("calculator", "expression", utf8_to_b64("22/7"));
        $lDom->addData("facade", "facade", "server_cpp");
        $lData = $lDom->toString();
        $lData = $lClient->callFacade("calculator", "run_calculator", $lData);
        $this->m_logs->addLogs($lClient->getLogs());
        $this->m_logs->deserialize($lData);
        if(!$this->m_logs->hasErrors()) {
            $this->m_logs->addData($lData);
        }
    }
    //===============================================
    public function runCurl($_module, $_method) {
        $lClient = new GCurl();
    }
    //===============================================
}
//===============================================
?>