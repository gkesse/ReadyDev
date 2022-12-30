<?php   
//===============================================
class GDisconnectUi extends GObjectUi {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        $lTitle         = $this->m_app->getItemC("user", "disconnection", "title");
        $lIntro         = $this->m_app->getItemC("user", "disconnection", "intro");
        $lModalId       = $this->m_app->getItemC("user", "disconnection", "modal_id");
        $lBodyId        = $this->m_app->getItemC("user", "disconnection", "body_id");
        $lFormId        = $this->m_app->getItemC("user", "disconnection", "form_id");
        $lMsgId         = $this->m_app->getItemC("user", "disconnection", "msg_id");
        $lModule        = $this->m_app->getItemC("user", "disconnection", "module");
        $lKeypressCB    = $this->m_app->getItemC("user", "disconnection", "keypress_cb");
        $lCloseCB       = $this->m_app->getItemC("user", "disconnection", "close_cb");
        $lDisconnectCB  = $this->m_app->getItemC("user", "disconnection", "disconnect_cb");
        $lDisconnectBtn = $this->m_app->getItemC("user", "disconnection", "disconnect_btn");

        echo sprintf("<div class='Modal' id='%s' onkeypress='server_call(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"%s\", \"%s\")'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<div class='Body4' id='%s'>\n", $lFormId);
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        echo sprintf("<div class='Row13'>\n");
        echo sprintf("<div class='Button4' onclick='server_call(\"%s\", \"%s\")'><i class='fa fa-power-off'></i> %s</div>\n", $lModule, $lDisconnectCB, $lDisconnectBtn);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Row14' id='%s'></div>\n", $lMsgId);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>
