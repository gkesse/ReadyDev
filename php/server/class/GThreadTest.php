<?php
//===============================================
class GThreadTest extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_argc, $_argv) {
        $lMethod = "";
        if($_argc > 3) $lMethod = $_argv[3];
        if($lMethod == "") {
            $this->addError("La méthode est obligatoire.");
        }
        else if($lMethod == "test") {
            $this->runTest($_argc, $_argv);
        }
        else {
            $this->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function runTest($_argc, $_argv) {
        $lThread = new GThread();
        $lThread->run();
        $this->addLogs($lThread->getLogs());
    }
    //===============================================
    public function runTestCB($_params) {

    }
    //===============================================
};
//===============================================
?>