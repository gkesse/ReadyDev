<?php
//===============================================
class GMenuUi extends GObjectUi {
    //===============================================
    protected $m_page;
    protected $m_session;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_page           = new GPage();
        $this->m_session        = new GSession();
    }
    //===============================================
    public function run() {
        echo sprintf("<ul class='Menu' id='HeaderMenu'>\n");
        
        $lCount     = $this->m_app->countItem("menu");
        $lPage      = $this->m_page->getPageId();
        $lLoginOn   = $this->m_session->issetSession("user/login");
        $lGroup     = $this->m_session->getSession("user/group");
        $lRootOn    = ($lGroup == G_USER_GROUP_ROOT);
        
        for($i = 0; $i < $lCount; $i++) {
            $lType      = $this->m_app->getItem3("menu", "type", $i);
            $lName      = $this->m_app->getItem3("menu", "name", $i);
            $lImg       = $this->m_app->getItem3("menu", "img", $i);
            $lLink      = $this->m_app->getItem3("menu", "link", $i);
            $lModule    = $this->m_app->getItem3("menu", "module", $i);
            $lMethod    = $this->m_app->getItem3("menu", "method", $i);
            
            $lActive = "";
            if($lLink == $lPage) $lActive = " Active";
            
            if($lType == "link") {
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<a class='Link%s' href='%s'>\n", $lActive, $lLink);
                echo sprintf("%s\n", $lName);
                echo sprintf("</a>\n");
                echo sprintf("</li>\n");
            }
            else if($lType == "link/menu") {
                echo sprintf("<li id='HeaderMenuBars' class='Bars' onclick='server_call(\"%s\", \"%s\");'>\n", $lModule, $lMethod);
                echo sprintf("%s\n", $lName);
                echo sprintf("</li>\n");
            }
            else if($lType == "link/admin") {
                if(!$lLoginOn) continue;
                if(!$lRootOn) continue;
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<a class='Link%s' href='%s'>\n", $lActive, $lLink);
                echo sprintf("%s\n", $lName);
                echo sprintf("</a>\n");
                echo sprintf("</li>\n");
            }
            else if($lType == "link/login") {
                if($lLoginOn) continue;
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<span class='Link' onclick='server_call(\"%s\", \"%s\");'>%s</span>\n"
                    , $lModule, $lMethod, $lName);
                echo sprintf("</li>\n");
            }
            else if($lType == "link/logout") {
                if(!$lLoginOn) continue;
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<span class='Link' onclick='server_call(\"%s\", \"%s\");'>%s</span>\n"
                    , $lModule, $lMethod, $lName);
                echo sprintf("</li>\n");
            }
            else if($lType == "link/image") {
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
