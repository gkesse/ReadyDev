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
        $lMethod = $this->m_method;
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
        else if($lMethod == "create_account") {
            $this->onCreateAccount($server);
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
        $lMsgId = $this->getItemC("user", "connection", "msg_id");
        $lModule = $this->getItemC("user", "connection", "module");
        $lKeypressCB = $this->getItemC("user", "connection", "keypress_cb");
        $lCloseCB = $this->getItemC("user", "connection", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='call_server(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
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
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lCallback, $lPicto, $lText);
                }
                else if($lType == "text/link") {
                    echo sprintf($lText, $lModule, $lCallback);
                }
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
        echo sprintf("<div class='Row14' id='%s'></div>\n", $lMsgId);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onAccountUi() {
        $lCount = $this->countItem("user");
        $lTitle = $this->getItemC("user", "account", "title");
        $lIntro = $this->getItemC("user", "account", "intro");
        $lModalId = $this->getItemC("user", "account", "modal_id");
        $lBodyId = $this->getItemC("user", "account", "body_id");
        $lFormId = $this->getItemC("user", "account", "form_id");
        $lMsgId = $this->getItemC("user", "account", "msg_id");
        $lModule = $this->getItemC("user", "account", "module");
        $lKeypressCB = $this->getItemC("user", "account", "keypress_cb");
        $lCloseCB = $this->getItemC("user", "account", "close_cb");
        //
        echo sprintf("<div class='Modal Connection' id='%s' onkeypress='call_server(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("user", "category", $i);
            $lLabel = $this->getItem3("user", "label", $i);
            $lId = $this->getItem3("user", "id", $i);
            $lType = $this->getItem3("user", "type", $i);
            $lName = $this->getItem3("user", "name", $i);
            
            if($lCategory == "account/body") {
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
            
            if($lCategory == "account/button") {
                if($lType == "button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lCallback, $lPicto, $lText);
                }
                else if($lType == "text/link") {
                    echo sprintf($lText, $lModule, $lCallback);
                }
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
        echo sprintf("<div class='Row14' id='%s'></div>\n", $lMsgId);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onDisconnectionUi() {
        $lTitle = $this->getItemC("user", "disconnection", "title");
        $lIntro = $this->getItemC("user", "disconnection", "intro");
        $lModalId = $this->getItemC("user", "disconnection", "modal_id");
        $lBodyId = $this->getItemC("user", "disconnection", "body_id");
        $lFormId = $this->getItemC("user", "disconnection", "form_id");
        $lMsgId = $this->getItemC("user", "disconnection", "msg_id");
        $lModule = $this->getItemC("user", "disconnection", "module");
        $lKeypressCB = $this->getItemC("user", "disconnection", "keypress_cb");
        $lCloseCB = $this->getItemC("user", "disconnection", "close_cb");
        $lDisconnectCB = $this->getItemC("user", "disconnection", "disconnect_cb");
        $lDisconnectBtn = $this->getItemC("user", "disconnection", "disconnect_btn");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='call_server(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='call_server(\"%s\", \"%s\")'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<div class='Body4' id='%s'>\n", $lFormId);
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        echo sprintf("<div class='Row13'>\n");
        echo sprintf("<div class='Button4' onclick='call_server(\"%s\", \"%s\")'><i class='fa fa-power-off'></i> %s</div>\n", $lModule, $lDisconnectCB, $lDisconnectBtn);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Row14' id='%s'></div>\n", $lMsgId);
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
    public function onCreateAccount($server) {
        $this->createAccount();
        $lData = $this->serialize();
        $server->addResponse($lData);
    }
    //===============================================
    public function runConnection() {
        $lClient = new GSocket();
        $lData = $this->serialize();
        $lData = $lClient->callServer($this->m_module, $this->m_method, $lData);
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
    public function createAccount() {
        $lClient = new GSocket();
        $lData = $this->serialize();
        $lData = $lClient->callServer($this->m_module, $this->m_method, $lData);
        $this->deserialize($lData);
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
