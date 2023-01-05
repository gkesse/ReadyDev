<?php   
//===============================================
class GAccountUi extends GObject {
    //===============================================
    public function __construct($_codeName = "account") {
        parent::__construct($_codeName);
        $this->loadDom(__CLASS__);
    }
    //===============================================
    public function run() {
        $lCount         = $this->m_dom->countItem("user");
        $lTitle         = $this->m_dom->getItemC("user", "account", "title");
        $lIntro         = $this->m_dom->getItemC("user", "account", "intro");
        $lModalId       = $this->m_dom->getItemC("user", "account", "modal_id");
        $lBodyId        = $this->m_dom->getItemC("user", "account", "body_id");
        $lFormId        = $this->m_dom->getItemC("user", "account", "form_id");
        $lMsgId         = $this->m_dom->getItemC("user", "account", "msg_id");
        $lModule        = $this->m_dom->getItemC("user", "account", "module");
        $lKeypressCB    = $this->m_dom->getItemC("user", "account", "keypress_cb");
        $lCloseCB       = $this->m_dom->getItemC("user", "account", "close_cb");
        //
        echo sprintf("<div class='Modal Connection' id='%s' onkeypress='call_server(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("user", "category", $i);
            $lLabel     = $this->m_dom->getItem3("user", "label", $i);
            $lId        = $this->m_dom->getItem3("user", "id", $i);
            $lType      = $this->m_dom->getItem3("user", "type", $i);
            $lName      = $this->m_dom->getItem3("user", "name", $i);
            
            if($lCategory == "account/body") {
                echo sprintf("<div class='Row12'>\n");
                echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lName, $lLabel);
                echo sprintf("<div class='Field3'><input id='%s' class='Input2' type='%s' name='%s'/></div>\n", $lId, $lType, $lName);
                echo sprintf("</div>\n");
            }
        }
        
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("user", "category", $i);
            $lType      = $this->m_dom->getItem3("user", "type", $i);
            $lId        = $this->m_dom->getItem3("user", "id", $i);
            $lModule    = $this->m_dom->getItem3("user", "module", $i);
            $lCallback  = $this->m_dom->getItem3("user", "callback", $i);
            $lPicto     = $this->m_dom->getItem3("user", "picto", $i);
            $lText      = $this->m_dom->getItem3("user", "text", $i, true);
            
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
}
//===============================================
?>
