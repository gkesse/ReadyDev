<?php
//===============================================
class GStreamSocketServerTest extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_argc, $_argv) {
        $lMethod = "";
        if($_argc > 4) $lMethod = $_argv[4];
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
        $lStreamSocket = new GStreamSocket();
        $lStreamSocket->setAction("server_tcp");
        $lStreamSocket->setHostname("0.0.0.0");
        $lStreamSocket->setPort(8081);
        $lStreamSocket->setStartMessage("Démarrage du serveur...");
        $lStreamSocket->run();
        $this->addLogs($lStreamSocket->getLogs());
    }
    //===============================================
};
//===============================================
?>