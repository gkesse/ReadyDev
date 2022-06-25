<?php   
//===============================================
class GHeader extends GModule {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDoms();
    }
    //===============================================
    public function runUi() {
        $lLang = $this->getItem("header", "lang");
        $lTitle = $this->getItem("header", "title");
        $lLogo = $this->getItem("header", "logo");
        
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $lLang);
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $lTitle);
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $lLogo);
        echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        $this->onFontsUi();
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
        echo sprintf("<div class='HtmlPage'>\n");
        
        $this->onEnvui();
        $this->onBackgroundUi();
        $this->onConnectionUi();
        $this->onAccountUi();
        $this->onDisconnectionUi();
        $this->onTableUi();
        $this->onErrorUi();
        $this->onLogUi();
        
        echo sprintf("<div class='BodyPage'>\n");
        echo sprintf("<div class='MainPage'>\n");
        $this->onHeaderUi();
    }
    //===============================================
    public function onHeaderUi() {
        echo sprintf("<header class='Header'>\n");
        $this->onMenuUi();
        $this->onTitleUi();
        $this->onLinkUi();
        echo sprintf("</header>\n");        
    }
    //===============================================
    public function onFontsUi() {
        $lCount = $this->countItem("fonts");
        for($i = 0; $i < $lCount; $i++) {
            $lFont = $this->getItem2("fonts", $i);
            echo sprintf("<link rel='stylesheet' href='%s'/>\n", $lFont);
        }
    }
    //===============================================
    public function onEnvUi() {
        $lEnv = new GEnv();
        $lEnv->onEnvUi();
    }
    //===============================================
    public function onBackgroundUi() {
        echo sprintf("<div class='Background Top'></div>\n");
        echo sprintf("<div class='Background Middle'></div>\n");
        echo sprintf("<div class='Background Bottom'></div>\n");
    }
    //===============================================
    public function onConnectionUi() {
        $lUser = new GUser();
        $lUser->onConnectionUi();
    }
    //===============================================
    public function onAccountUi() {
        $lUser = new GUser();
        $lUser->onAccountUi();
    }
    //===============================================
    public function onDisconnectionUi() {
        $lUser = new GUser();
        $lUser->onDisconnectionUi();
    }
    //===============================================
    public function onErrorUi() {
        $lLog = new GLog();
        $lLog->onErrorUi();
    }
    //===============================================
    public function onLogUi() {
        $lLog = new GLog();
        $lLog->onLogUi();
    }
    //===============================================
    public function onTableUi() {
        $lTable = new GTable();
        $lTable->onTableUi();
    }
    //===============================================
    public function onMenuUi() {        
        echo sprintf("<ul class='Menu' id='HeaderMenu'>\n");
             
        $lPageObj = new GPage();
        $lSessionObj = new GSession();
        
        $lCount = $this->countItem("menu");        
        $lPage = $lPageObj->getPageId();
        $lLoginOn = $lSessionObj->issetSession("user/login");
        $lGroup = $lSessionObj->getSession("user/group");
        $lRootOn = ($lGroup == G_USER_GROUP_ROOT);
        
        for($i = 0; $i < $lCount; $i++) {
            $lType = $this->getItem3("menu", "type", $i);
            $lName = $this->getItem3("menu", "name", $i);
            $lImg = $this->getItem3("menu", "img", $i);
            $lLink = $this->getItem3("menu", "link", $i);
            $lModule = $this->getItem3("menu", "module", $i);
            $lMethod = $this->getItem3("menu", "method", $i);
            
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
    public function onTitleUi() {
        echo sprintf("<div class='MainBlock'>\n");
        echo sprintf("<div class='Content'>\n");
        echo sprintf("<h1 class='Title2'>%s</h1>\n", "Title");
        echo sprintf("<div class='Body'>\n");
        $this->onSiteUi();
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onSiteUi() {
        echo sprintf("<div class='Row'>\n");
        
        $lCount = $this->countItem("header");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("header", "category", $i);
            $lLink = $this->getItem3("header", "link", $i);
            $lClass = $this->getItem3("header", "class", $i);
            $lTitle = $this->getItem3("header", "title", $i);
            $lPicto = $this->getItem3("header", "picto", $i);
            
            if($lCategory != "site") continue;
            
            echo sprintf("<a href='%s'><div class='%s'><i class='fa fa-%s'></i> %s</div></a>\n"
                , $lLink, $lClass, $lPicto, $lTitle);
        }
        $this->onViewUi();        
        echo sprintf("</div>\n");
        $this->onNetworksUi();        
    }
    //===============================================
    public function onViewUi() {
        $lViewCount = 30;
        
        echo sprintf("<div class='Form'>\n");
        echo sprintf("<div class='Label'>\n");
        echo sprintf("<i class='Icon fa fa-eye'></i>\n");
        echo sprintf("<span>Vues</span>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Field'>\n");
        echo sprintf("<span>%d</span>\n", $lViewCount);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onLinkUi() {
        echo sprintf("<div class='MainBlock0'>");
        echo sprintf("<div class='Content11'>");
        echo sprintf("<div class='Row22'>");
        
        $lCount = 3;
        
        for($i = 0; $i < $lCount; $i++) {
            $lName = "Name";
            $lLink = "Link";
            if($i != 0) {
                echo sprintf("<div class='Col4'><i class='fa fa-chevron-right'></i></div>");                
            }
            echo sprintf("<div class='Col4'><a class='Link8' href='%s'>%s</a></div>"
                , $lLink, $lName);
        }                
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");        
    }
    //===============================================
    public function onNetworksUi() {
        $lUrl = $this->getUrl();
        
        echo sprintf("<div class='Row22'>\n");
        
        $lCount = $this->countItem("header");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("header", "category", $i);
            $lLink = $this->getItem3("header", "link", $i);
            $lClass = $this->getItem3("header", "class", $i);
            $lPicto = $this->getItem3("header", "picto", $i);
            
            if($lCategory != "networks") continue;
                
            $lTitle = "Titre";
            $lSummary = "Sommaire";
            
            $lLink = str_replace("{url}", $lUrl, $lLink);
            $lLink = str_replace("{title}", $lTitle, $lLink);
            $lLink = str_replace("{summary}", $lSummary, $lLink);
            
            echo sprintf("<a class='Col' href='%s' target='_blank'>\n", $lLink);
            echo sprintf("<i class='Link2 %s fa fa-%s'></i>\n", $lClass, $lPicto);
            echo sprintf("</a>\n");
        }
        
        echo sprintf("</div>\n");
    }
    //===============================================
    public function getHappyYear() {
        $lHappy = $this->getItem("happyyear", "msg");
        $lYear = date("Y");
        $lData = sprintf("%s %s", $lHappy, $lYear);
        return $lData;
    }
    //===============================================
    public function getUrl() {
        $lUrl = "";
        $lUrl .= "http://";
        $lUrl .= $_SERVER['HTTP_HOST'];
        $lUrl .=  $_SERVER['REQUEST_URI'];    
        return $lUrl;
    }
    //===============================================
}
//===============================================
?>
