<?php
//===============================================
class GProcess extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_argc, $_argv) {
        $lProcess = "";
        if($_argc > 1) $lProcess = $_argv[1];
        if($lProcess == "") {
            $this->addError("Le process est obligatoire.");
        }
        else if($lProcess == "test") {
            $this->runTest($_argc, $_argv);
        }
        else {
            $this->addError("Le process est inconnu.");
        }
    }
    //===============================================
    public function runTest($_argc, $_argv) {
        $lTest = new GTest();
        $lTest->run($_argc, $_argv);
        $this->addLogs($lTest->getLogs());
    }
    //===============================================
};
//===============================================
?>