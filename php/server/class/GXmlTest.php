<?php
//===============================================
class GXmlTest extends GObject {
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
        $lLog = new GLog();
        $lLog->addError("La méthode est obligatoire");
        $lLog->addLog("La demande a bien été exécutée.");
        $lLog->addData("Bonjour tout le monde");
        $this->addResponse($lLog->serialize());
        $this->addData($this->toResponse());
    }
    //===============================================
};
//===============================================
?>