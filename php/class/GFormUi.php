<?php   
//===============================================
class GFormUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->loadDom(__CLASS__);
    }
    //===============================================
    public function run() {
        $this->runEnv();
        
        $lCount         = $this->m_dom->countItem("form");
        $lTitle         = $this->m_dom->getItem("form", "title");
        $lIntro         = $this->m_dom->getItem("form", "intro");
        $lModalId       = $this->m_dom->getItem("form", "modal_id");
        $lDataId        = $this->m_dom->getItem("form", "data_id");
        $lTitleId       = $this->m_dom->getItem("form", "title_id");
        $lIntroId       = $this->m_dom->getItem("form", "intro_id");
        $lBodyId        = $this->m_dom->getItem("form", "body_id");
        $lFormId        = $this->m_dom->getItem("form", "form_id");
        $lContentId     = $this->m_dom->getItem("form", "content_id");
        $lMsgId         = $this->m_dom->getItem("form", "msg_id");
        $lModule        = $this->m_dom->getItem("form", "module");
        $lCloseCB       = $this->m_dom->getItem("form", "close_cb");
        
        echo sprintf("<div class='Modal' id='%s'>\n", $lModalId);
        echo sprintf("<div id='%s' hidden='true'></div>\n", $lDataId);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5' id='%s'>%s</div>\n", $lTitleId, $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);        
        echo sprintf("<div class='Row11' id='%s'>%s</div>\n", $lIntroId, $lIntro);
        echo sprintf("<div class='Content16' id='%s'></div>", $lContentId);        
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("form", "category", $i);
            $lModel     = $this->m_dom->getItem3("form", "model", $i);
            $lId        = $this->m_dom->getItem3("form", "id", $i);
            $lModule    = $this->m_dom->getItem3("form", "module", $i);
            $lMethod    = $this->m_dom->getItem3("form", "method", $i);
            $lPicto     = $this->m_dom->getItem3("form", "picto", $i);
            $lText      = $this->m_dom->getItem3("form", "text", $i);
            
            if($lCategory == "button") {
                if($lModel == "button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='call_server(\"%s\", \"%s\", this);'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lMethod, $lPicto, $lText);
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
        $lCount = $this->m_dom->countItem("form");
        
        for($i = 0; $i < $lCount; $i++) {
            $lModel = $this->m_dom->getItem3("env", "model", $i);
            $lId    = $this->m_dom->getItem3("env", "id", $i);
            $lValue = $this->m_dom->getItem3("env", "value", $i);
            
            if($lModel == "input") {
                echo sprintf("<input type='hidden' id='%s' value='%s'/>\n", $lId, $lValue);
            }
        }
    }
    //===============================================
}
//===============================================
?>
