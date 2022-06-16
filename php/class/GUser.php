<?php   
//===============================================
class GUser extends GModule {
    //===============================================
    private $mode = "1";
    private $email = "";
    private $password = "";
    private $group = "0";
    private $active = "0";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($code = "user") {
        $lData = new GCode();
        $lData->createDoc();
        $lData->addData($code, "mode", $this->mode);
        $lData->addData($code, "email", $this->email);
        $lData->addData($code, "password", $this->password);
        $lData->addData($code, "group", $this->group);
        $lData->addData($code, "active", $this->active);
        return $lData->toStringData();
    }
    //===============================================
    public function deserialize($data, $code = "user") {
        parent::deserialize($data);
        $lData = new GCode();
        $lData->loadXml($data);
        $this->mode = $lData->getItem($code, "mode");
        $this->email = $lData->getItem($code, "email");
        $this->password = $lData->getItem($code, "password");
        $this->group = $lData->getItem($code, "group");
        $this->active = $lData->getItem($code, "active");
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
        $lData = $this->serialize();
        $lData = $lClient->callServer($this->module, $this->method, $lData);
        $this->deserialize($lData);
        $this->onConnection();
    }
    //===============================================
    public function runDisconnection() {
        $lLog = GLog::Instance();
        $lSession = new GSession();
        $lLoginOn = $lSession->issetSession("user/login");        
        if(!$lLoginOn) {$lLog->addError(sprintf("Erreur lors de la déconnexion.")); return false;}
        $lSession->unsetSession("user/login");
        $lSession->unsetSession("user/group");
        return true;
    }
    //===============================================
    public function onConnection() {        
        $lLog = GLog::Instance();
        $lSession = new GSession();
        if($lLog->hasErrors()) return false;
        $lSession->setSession("user/login", true);
        $lSession->setSession("user/group", $this->group);
        return true;
    }
    //===============================================
}
//===============================================
?>
