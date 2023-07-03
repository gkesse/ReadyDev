<?php
//===============================================
namespace php\class;
//===============================================
class GTest extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_module, $_method) {        
        if($_module == "") {
            $this->m_logs->addError("Le module est obligatoire.");
        }
        else if($_module == "php") {
            $this->runPhp($_module, $_method);
        }
        else if($_module == "js") {
            $this->runJs($_module, $_method);
        }
        else if($_module == "prod") {
            $this->runProd($_module, $_method);
        }
        else {
            $this->m_logs->addError("Le module est inconnue.");
        }
    }
    //===============================================
    public function runPhp($_module, $_method) {
        $lObj = new GTestPhp();
        $lObj->run($_module, $_method);
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runJs($_module, $_method) {
        $lObj = new GTestJs();
        $lObj->run($_module, $_method);
        $this->m_logs->addLogs($lObj->getLogs());
        $this->m_dataLogs->addLogs($lObj->getDataLogs());
    }
    //===============================================
    public function runProd($_module, $_method) {
        $lObj = new GReady();
        $lObj->run();
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
}
//===============================================
?>