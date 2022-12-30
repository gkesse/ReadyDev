<?php   
//===============================================
class GLogUi extends GObjectUi {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        $lCount         = $this->m_app->countItem("logs");
        $lTitle         = $this->m_app->getItem("logs", "title");
        $lIntro         = $this->m_app->getItem("logs", "intro");
        $lModalId       = $this->m_app->getItem("logs", "modal_id");
        $lBodyId        = $this->m_app->getItem("logs", "body_id");
        $lFormId        = $this->m_app->getItem("logs", "form_id");
        $lMsgId         = $this->m_app->getItem("logs", "msg_id");
        $lModule        = $this->m_app->getItem("logs", "module");
        $lKeypressCB    = $this->m_app->getItem("logs", "keypress_cb");
        $lCloseCB       = $this->m_app->getItem("logs", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='server_call(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);        
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        echo sprintf("<div class='Content15'>");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_app->getItem3("logs", "category", $i);
            $lModel     = $this->m_app->getItem3("logs", "model", $i);
            $lId        = $this->m_app->getItem3("logs", "id", $i);
            
            if($lCategory == "logs/body") {
                if($lModel == "label") {
                    echo sprintf("<div id='%s'></div>\n", $lId);
                }
            }
        }
        
        echo sprintf("</div>");        
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_app->getItem3("logs", "category", $i);
            $lModel     = $this->m_app->getItem3("logs", "model", $i);
            $lId        = $this->m_app->getItem3("logs", "id", $i);
            $lModule    = $this->m_app->getItem3("logs", "module", $i);
            $lCallback  = $this->m_app->getItem3("logs", "callback", $i);
            $lPicto     = $this->m_app->getItem3("logs", "picto", $i);
            $lText      = $this->m_app->getItem3("logs", "text", $i);
            
            if($lCategory == "logs/button") {
                if($lModel == "button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lCallback, $lPicto, $lText);
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
