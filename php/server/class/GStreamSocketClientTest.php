<?php
//===============================================
class GStreamSocketClientTest extends GObject {
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
        $lStreamSocket->setAction("client_tcp");
        $lStreamSocket->setHostname("127.0.0.1");
        $lStreamSocket->setPort(8081);
        $lStreamSocket->setTimeout(60);
        $lStreamSocket->setData("Bonjour tout le monde");
        $lStreamSocket->run();
        $this->addLogs($lStreamSocket->getLogs());
        $this->addData($lStreamSocket->getResponse());
    }
    //===============================================
};
//===============================================
?>