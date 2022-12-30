<?php   
//===============================================
class GMenuUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        $lApp = GApp::Instance();
        echo sprintf("<ul class='Menu' id='HeaderMenu'>\n");
        
        $lPageObj = new GPage();
        $lSessionObj = new GSession();
        
        $lCount = $lApp->countItem("menu");
        $lPage = $lPageObj->getPageId();
        $lLoginOn = $lSessionObj->issetSession("user/login");
        $lGroup = $lSessionObj->getSession("user/group");
        $lRootOn = ($lGroup == G_USER_GROUP_ROOT);
        
        for($i = 0; $i < $lCount; $i++) {
            $lType      = $lApp->getData3("menu", "type", $i);
            $lName      = $lApp->getData3("menu", "name", $i);
            $lImg       = $lApp->getData3("menu", "img", $i);
            $lLink      = $lApp->getData3("menu", "link", $i);
            $lModule    = $lApp->getData3("menu", "module", $i);
            $lMethod    = $lApp->getData3("menu", "method", $i);
            
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
                echo sprintf("<li id='HeaderMenuBars' class='Bars' onclick='server_call(\"%s\", \"%s\");'>\n", $lModule, $lMethod);
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
                echo sprintf("<span class='Link' onclick='server_call(\"%s\", \"%s\");'>%s</span>\n"
                    , $lModule, $lMethod, $lName);
                echo sprintf("</li>\n");
            }
            else if($lType == "link_logout") {
                if(!$lLoginOn) continue;
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<span class='Link' onclick='server_call(\"%s\", \"%s\");'>%s</span>\n"
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
