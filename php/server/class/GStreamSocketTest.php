<?php
//===============================================
class GStreamSocketTest extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_argc, $_argv) {
        $lEnv = "";
        if($_argc > 3) $lEnv = $_argv[3];
        if($lEnv == "") {
            $this->addError("L'environnement est obligatoire.");
        }
        else if($lEnv == "server") {
            $this->runServer($_argc, $_argv);
        }
        else if($lEnv == "client") {
            $this->runClient($_argc, $_argv);
        }
        else {
            $this->addError("L'environnement est inconnu.");
        }
    }
    //===============================================
    public function runServer($_argc, $_argv) {
        $lTest = new GStreamSocketServerTest();
        $lTest->run($_argc, $_argv);
        $this->addLogs($lTest->getLogs());
    }
    //===============================================
    public function runClient($_argc, $_argv) {
        $lTest = new GStreamSocketClientTest();
        $lTest->run($_argc, $_argv);
        $this->addLogs($lTest->getLogs());
    }
    //===============================================
};
//===============================================
?>