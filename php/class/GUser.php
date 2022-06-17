<?php   
//===============================================
class GUser extends GModule {
    //===============================================
    private $pseudo = "";
    private $email = "";
    private $password = "";
    private $group = "";
    private $active = "";
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDoms();
    }
    //===============================================
    public function serialize($code = "user") {
        $lData = new GCode();
        $lData->createDoc();
        $lData->addData($code, "pseudo", $this->pseudo);
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
        $this->pseudo = $lData->getItem($code, "pseudo");
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
    public function onConnectionUi() {
        $lCount = $this->countItem("user");
        $lTitle = $this->getItemC("user", "connection", "title");
        $lIntro = $this->getItemC("user", "connection", "intro");
        $lModalId = $this->getItemC("user", "connection", "modal_id");
        $lBodyId = $this->getItemC("user", "connection", "body_id");
        $lFormId = $this->getItemC("user", "connection", "form_id");
        $lModule = $this->getItemC("user", "connection", "module");
        $lKeypressCB = $this->getItemC("user", "connection", "keypress_cb");
        $lCloseCB = $this->getItemC("user", "connection", "close_cb");
        //
        echo sprintf("<div class='Modal Connection' id='%s' onkeypress='server_call(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);

        for($i = 0; $i < $lCount; $i++) {            
            $lCategory = $this->getItem3("user", "category", $i);
            $lLabel = $this->getItem3("user", "label", $i);
            $lId = $this->getItem3("user", "id", $i);
            $lType = $this->getItem3("user", "type", $i);
            $lName = $this->getItem3("user", "name", $i);
            
            if($lCategory == "connection/body") {
                echo sprintf("<div class='Row12'>\n");
                echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lName, $lLabel);
                echo sprintf("<div class='Field3'><input id='%s' class='Input2' type='%s' name='%s'/></div>\n", $lId, $lType, $lName);
                echo sprintf("</div>\n");
            }
        }

        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("user", "category", $i);
            $lType = $this->getItem3("user", "type", $i);
            $lId = $this->getItem3("user", "id", $i);
            $lModule = $this->getItem3("user", "module", $i);
            $lCallback = $this->getItem3("user", "callback", $i);
            $lPicto = $this->getItem3("user", "picto", $i);
            $lText = $this->getItem3("user", "text", $i, true);
            
            if($lCategory == "connection/button") {
                if($lType == "button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lCallback, $lPicto, $lText);
                }
                else if($lType == "text/link") {
                    echo sprintf($lText, $lModule, $lCallback);
                }
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
        echo sprintf("<div class='Row14' id='ConnectionMsg'></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onDisconnectionUi() {
        echo sprintf("<div class='Modal Disconnection' id='ModalDisconnection'>\n");
        echo sprintf("<div class='Content10' id='DisconnectionBody'>\n");
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"user\", \"close_disconnection\")'><i class='fa fa-close'></i></div>\n");
        echo sprintf("<div class='Title5'>Déconnexion</div>\n");
        echo sprintf("<div class='Body4' id='DisconnectionForm'>\n");
        echo sprintf("<div class='Row11'>Êtes-vous sûr de vous déconnecter ?</div>\n");
        echo sprintf("<div class='Row13'>\n");
        echo sprintf("<div class='Button4' onclick='server_call(\"user\", \"run_disconnection\")'><i class='fa fa-power-off'></i> Se Déconnecter</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Row14' id='DisconnectionMsg'></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
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
        $lSession->setSession("user/id", $this->id);
        return true;
    }
    //===============================================
}
//===============================================
?>
