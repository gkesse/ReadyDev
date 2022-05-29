<?php   
//===============================================
class GUser extends GModule {
    //===============================================
    private $msg = "";
    private $email = "";
    private $password = "";
    private $status = false;
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
        //===============================================
        // end
        //===============================================
        else return false;
        return true;
    }
    //===============================================
    public function onRunConnection($server) {
        //$this->runConnection();
        $lData = $this->serialize();
        $server->addResponse($lData);        
    }
    //===============================================
    public function runConnection() {
        if($this->email == "") return false;
        if($this->password == "") return false;
        $lEmail= $this->email;
        $lPassword = $this->password;

        if(!$lExist) {
            $this->status = false;
            $this->msg = "Email n'existe pas";
            return false;
        }
        $lEncrypt = md5($lEmail."|".$lPassword);
        $lExist = GGlobal::Instance()->existData($lUserMap["users"], "password", $lEncrypt);
        if(!$lExist) {
            $this->status = false;
            $this->msg = "Mot de passe est incorrect";
            return false;
        }
        $this->status = true;
        $this->msg = "Bonne Connexion";
        $lGroup = GGlobal::Instance()->getData($lUserMap["users"], "email", $lEmail, "group");
        if(!isset($_SESSION["login"])) {
            $_SESSION["login"] = array(
                "email" => $lEmail,
                "group" => $lGroup
            );
        }
        return true;
    }
    //===============================================
}
//===============================================
?>
