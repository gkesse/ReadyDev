<?php
//===============================================
class GTest extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_argc, $_argv) {
        $lModule = "";
        if($_argc > 2) $lModule = $_argv[2];
        if($lModule == "") {
            $this->addError("Le module est obligatoire.");
        }
        else if($lModule == "xml") {
            $this->runXml($_argc, $_argv);
        }
        else if($lModule == "thread") {
            $this->runThread($_argc, $_argv);
        }
        else if($lModule == "stream_socket") {
            $this->runStreamSocket($_argc, $_argv);
        }
        else {
            $this->addError("Le module est inconnu.");
        }
    }
    //===============================================
    public function runXml($_argc, $_argv) {
        $lTest = new GXmlTest();
        $lTest->run($_argc, $_argv);
        $this->addLogs($lTest->getLogs());
    }
    //===============================================
    public function runThread($_argc, $_argv) {
        $lTest = new GThreadTest();
        $lTest->run($_argc, $_argv);
        $this->addLogs($lTest->getLogs());
    }
    //===============================================
    public function runStreamSocket($_argc, $_argv) {
        $lTest = new GStreamSocketTest();
        $lTest->run($_argc, $_argv);
        $this->addLogs($lTest->getLogs());
    }
    //===============================================
};
//===============================================
?>