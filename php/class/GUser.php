<?php   
//===============================================
class GUser extends GModule {
    //===============================================
    private $msg = "";
    private $email = "";
    private $password = "";
    private $status = false;
    private $group = "2";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($code = "user") {
        $lData = new GCode();
        $lData->createDoc();
        $lData->addData($code, "msg", $this->msg);
        $lData->addData($code, "email", $this->email);
        $lData->addData($code, "password", $this->password);
        $lData->addData($code, "status", $this->status);
        $lData->addData($code, "group", $this->group);
        return $lData->toStringCode($code);
    }
    //===============================================
    public function deserialize($data, $code = "user") {
        parent::deserialize($data);
        $lData = new GCode();
        $lData->loadXmlData($data);
        $this->msg = $lData->getItem($code, "msg");
        $this->email = $lData->getItem($code, "email");
        $this->password = $lData->getItem($code, "password");
        $this->status = $lData->getItem($code, "status");
        $this->group = $lData->getItem($code, "group");
    }
    //===============================================
    public function onModule($data, $server) {
        $this->deserialize($data);
        $lMethod = $this->method;
        //===============================================
        if($lMethod == "") {
            return false;
        }
        //===============================================
        // method
        //===============================================
        else if($lMethod == "run_connection") {
            $this->onRunConnection($server);
        }
        else if($lMethod == "run_disconnection") {
            $this->onRunDisconnection($server);
        }
        //===============================================
        // end
        //===============================================
        else return false;
        return true;
    }
    //===============================================
    public function onRunConnection($server) {
        $this->runConnection();
        $lData = $this->serialize();
        $server->addResponse($lData);        
    }
    //===============================================
    public function onRunDisconnection($server) {
        $this->runDisconnection();
        $lData = $this->serialize();
        $server->addResponse($lData);
    }
    //===============================================
    public function runConnection() {
        $lClient = new GSocket();
        $this->onPassword();
        $lData = $this->serialize();
        $lData = $lClient->callServer($this->module, $this->method, $lData);
        $this->deserialize($lData);
        $this->onConnection();
    }
    //===============================================
    public function runDisconnection() {
        if(isset($_SESSION["login"])) {
            unset($_SESSION["login"]);
            $this->msg = "Bonne Déconnexion";
        }
    }
    //===============================================
    public function onPassword() {
        $this->password = md5($this->email."|".$this->password);
    }
    //===============================================
    public function onConnection() {        
        if($this->status) {
            $_SESSION["login"] = array(
                "email" => $this->email,
                "group" => $this->group
            );
        }
    }
    //===============================================
}
//===============================================
?>
