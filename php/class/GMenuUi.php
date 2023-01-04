<?php
//===============================================
class GMenuUi extends GObjectUi {
    //===============================================
    protected $m_page;
    protected $m_session;
    //===============================================
    public function __construct($_codeName = "menu") {
        parent::__construct($_codeName);
        $this->loadDom(__CLASS__);
        $this->m_page           = new GPage();
        $this->m_session        = new GSession();
    }
    //===============================================
    public function run() {
        echo sprintf("<ul class='Menu' id='HeaderMenu'>\n");
        
        $lCount     = $this->m_dom->countItem($this->m_codeName);
        $lPage      = $this->m_page->getPageId();
        $lLoginOn   = $this->m_session->issetSession("user/login");
        $lGroup     = $this->m_session->getSession("user/group");
        $lRootOn    = ($lGroup == G_USER_GROUP_ROOT);
        
        for($i = 0; $i < $lCount; $i++) {
            $lType      = $this->m_dom->getItem3($this->m_codeName, "type", $i);
            $lName      = $this->m_dom->getItem3($this->m_codeName, "name", $i);
            $lImg       = $this->m_dom->getItem3($this->m_codeName, "img", $i);
            $lLink      = $this->m_dom->getItem3($this->m_codeName, "link", $i);
            $lModule    = $this->m_dom->getItem3($this->m_codeName, "module", $i);
            $lMethod    = $this->m_dom->getItem3($this->m_codeName, "method", $i);
            
            $lActive = "";
            if($lLink == $lPage) $lActive = " Active";
            
            if($lType == "link") {
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<a class='Link%s' href='%s'>\n", $lActive, $lLink);
                echo sprintf("%s\n", $lName);
                echo sprintf("</a>\n");
                echo sprintf("</li>\n");
            }
            else if($lType == "link_menu") {
                echo sprintf("<li id='HeaderMenuBars' class='Bars' onclick='call_server(\"%s\", \"%s\");'>\n", $lModule, $lMethod);
                echo sprintf("%s\n", $lName);
                echo sprintf("</li>\n");
            }
            else if($lType == "link_admin") {
                if(!$lLoginOn) continue;
                if(!$lRootOn) continue;
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<a class='Link%s' href='%s'>\n", $lActive, $lLink);
                echo sprintf("%s\n", $lName);
                echo sprintf("</a>\n");
                echo sprintf("</li>\n");
            }
            else if($lType == "link_login") {
                if($lLoginOn) continue;
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<span class='Link' onclick='call_server(\"%s\", \"%s\");'>%s</span>\n"
                    , $lModule, $lMethod, $lName);
                echo sprintf("</li>\n");
            }
            else if($lType == "link_logout") {
                if(!$lLoginOn) continue;
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<span class='Link' onclick='call_server(\"%s\", \"%s\");'>%s</span>\n"
                    , $lModule, $lMethod, $lName);
                echo sprintf("</li>\n");
            }
            else if($lType == "link_image") {
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<a class='Title' href='%s'>\n", $lLink);
                echo sprintf("<img class='Img4' src='%s' alt='%s'/>\n", $lImg, $lImg);
                echo sprintf("<span class='Title11'>%s</span>\n", $lName);
                echo sprintf("</a>\n");
                echo sprintf("</li>\n");
            }
        }
        
        echo sprintf("</ul>\n");
    }
    //===============================================
}
//===============================================
?>
