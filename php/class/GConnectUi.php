<?php   
//===============================================
class GConnectUi extends GObjectUi {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        $lCount         = $this->m_app->countItem("user");
        $lTitle         = $this->m_app->getItemC("user", "connection", "title");
        $lIntro         = $this->m_app->getItemC("user", "connection", "intro");
        $lModalId       = $this->m_app->getItemC("user", "connection", "modal_id");
        $lBodyId        = $this->m_app->getItemC("user", "connection", "body_id");
        $lFormId        = $this->m_app->getItemC("user", "connection", "form_id");
        $lMsgId         = $this->m_app->getItemC("user", "connection", "msg_id");
        $lModule        = $this->m_app->getItemC("user", "connection", "module");
        $lKeypressCB    = $this->m_app->getItemC("user", "connection", "keypress_cb");
        $lCloseCB       = $this->m_app->getItemC("user", "connection", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='server_call(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_app->getData3("user", "category", $i);
            $lLabel     = $this->m_app->getData3("user", "label", $i);
            $lId        = $this->m_app->getData3("user", "id", $i);
            $lType      = $this->m_app->getData3("user", "type", $i);
            $lName      = $this->m_app->getData3("user", "name", $i);
            
            if($lCategory == "connection_body") {
                echo sprintf("<div class='Row12'>\n");
                echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lName, $lLabel);
                echo sprintf("<div class='Field3'><input id='%s' class='Input2' type='%s' name='%s'/></div>\n", $lId, $lType, $lName);
                echo sprintf("</div>\n");
            }
        }
        
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_app->getData3("user", "category", $i);
            $lType      = $this->m_app->getData3("user", "type", $i);
            $lId        = $this->m_app->getData3("user", "id", $i);
            $lModule    = $this->m_app->getData3("user", "module", $i);
            $lCallback  = $this->m_app->getData3("user", "callback", $i);
            $lPicto     = $this->m_app->getData3("user", "picto", $i);
            $lText      = $this->m_app->getData3("user", "text", $i, true);
            
            if($lCategory == "connection_button") {
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
        echo sprintf("<div class='Row14' id='%s'></div>\n", $lMsgId);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>
