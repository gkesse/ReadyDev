<?php   
//===============================================
class GTableUi extends GObject {
    //===============================================
    public function __construct($_codeName = "table") {
        parent::__construct($_codeName);
        $this->loadDom(__CLASS__);
    }
    //===============================================
    public function run() {
        $lCount         = $this->m_dom->countItem("table");
        $lTitle         = $this->m_dom->getItem("table", "title");
        $lIntro         = $this->m_dom->getItem("table", "intro");
        $lModalId       = $this->m_dom->getItem("table", "modal_id");
        $lBodyId        = $this->m_dom->getItem("table", "body_id");
        $lFormId        = $this->m_dom->getItem("table", "form_id");
        $lMsgId         = $this->m_dom->getItem("table", "msg_id");
        $lModule        = $this->m_dom->getItem("table", "module");
        $lKeypressCB    = $this->m_dom->getItem("table", "keypress_cb");
        $lCloseCB       = $this->m_dom->getItem("table", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='call_server(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->m_dom->getItem3("table", "category", $i);
            $lModel = $this->m_dom->getItem3("table", "model", $i);
            $lId = $this->m_dom->getItem3("table", "id", $i);
            $lPageId = $this->m_dom->getItem3("table", "page_id", $i);
            
            if($lCategory == "body") {
                if($lModel == "table") {
                    echo sprintf("<div class='Modal3' id='%s'>\n", $lPageId);
                    echo sprintf("<table id='%s'>\n", $lId);
                    echo sprintf("</table>\n");
                    echo sprintf("</div>\n");
                }
            }
        }
        
        echo sprintf("<div class='Row35'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("table", "category", $i);
            $lModel     = $this->m_dom->getItem3("table", "model", $i);
            $lId        = $this->m_dom->getItem3("table", "id", $i);
            $lModule    = $this->m_dom->getItem3("table", "module", $i);
            $lMethod    = $this->m_dom->getItem3("table", "method", $i);
            $lPicto     = $this->m_dom->getItem3("table", "picto", $i);
            $lText      = $this->m_dom->getItem3("table", "text", $i, true);
            $lOff       = ($this->m_dom->getItem3("table", "off", $i) == "1");
            
            if($lOff) continue;
            
            if($lCategory == "button") {
                if($lModel == "button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lMethod, $lPicto, $lText);
                }
                if($lModel == "button/icon") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='call_server(\"%s\", \"%s\");'>%s <i class='fa fa-%s'></i></button>\n"
                        , $lId, $lModule, $lMethod, $lText, $lPicto);
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
    public function runEnv() {
        $lCount = $this->m_dom->countItem("table");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("table", "category", $i);
            $lId        = $this->m_dom->getItem3("table", "id", $i);
            $lValue     = $this->m_dom->getItem3("table", "value", $i);
            
            if($lCategory == "env") {
                echo sprintf("<input type='hidden' id='%s' value='%s'/>\n", $lId, $lValue);               
            }
        }
    }
    //===============================================
}
//===============================================
?>
