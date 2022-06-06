<?php   
//===============================================
class GHeader extends GModule {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDoms();
    }
    //===============================================
    public function run() {
        $lEnvObj = new GEnv();
        $lEnv = $lEnvObj->getEnvType();
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
        $this->onFonts();
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
        echo sprintf("<div id='EnvType' hidden>%s</div>\n", $lEnv);
        echo sprintf("<div class='HtmlPage'>\n");
        $this->onBackground();
        $this->onConnection();
        $this->onDisconnection();
        echo sprintf("<div class='BodyPage'>\n");
        echo sprintf("<div class='MainPage'>\n");
        $this->onHeader();
    }
    //===============================================
    public function onHeader() {
        echo sprintf("<header class='Header'>\n");
        $this->onMenu();
        $this->onTitle();
        $this->onLink();
        echo sprintf("</header>\n");        
    }
    //===============================================
    public function onFonts() {
        $lCount = $this->countItem("fonts");
        for($i = 0; $i < $lCount; $i++) {
            $lFont = $this->getItem2("fonts", $i);
            echo sprintf("<link rel='stylesheet' href='%s'/>\n", $lFont);
        }
    }
    //===============================================
    public function onBackground() {
        echo sprintf("<div class='Background Top'></div>\n");
        echo sprintf("<div class='Background Middle'></div>\n");
        echo sprintf("<div class='Background Bottom'></div>\n");
    }
    //===============================================
    public function onConnection() {
        echo sprintf("<div class='Modal Connection' id='ModalConnection' onkeypress='server_call(\"user\", \"key_press\", this, event);'>\n");
        echo sprintf("<div class='Content10' id='ConnectionBody'>\n");
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"user\", \"close_connection\");'><i class='fa fa-close'></i></div>\n");
        echo sprintf("<div class='Title5'>Connexion</div>\n");
        echo sprintf("<form class='Body4' id='ConnectionForm' method='post'>\n");
        echo sprintf("<div class='Row11'>Entrez vos identifiants de connexion.</div>\n");
        echo sprintf("<div class='Row12'>\n");
        echo sprintf("<div class='Label3'>Email :</div>\n");
        echo sprintf("<div class='Field3'><input id='ConnectionEmail' class='Input2' type='text' name='Email'/></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Row12'>\n");
        echo sprintf("<div class='Label3'>Mot de passe :</div>\n");
        echo sprintf("<div class='Field3'><input class='Input2' type='password' name='Password'/></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Row13'>\n");
        echo sprintf("<div id='ConnectionButton' class='Button4' onclick='server_call(\"user\", \"run_connection\");'><i class='fa fa-paper-plane-o'></i> Se Connecter</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
        echo sprintf("<div class='Row14' id='ConnectionMsg'></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onDisconnection() {
        echo sprintf("<div class='Modal Disconnection' id='ModalDisconnection'>\n");
        echo sprintf("<div class='Content10' id='DisconnectionBody'>\n");
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"user\", \"close_disconnection\")'><i class='fa fa-close'></i></div>\n");
        echo sprintf("<div class='Title5'>Déconnexion</div>\n");
        echo sprintf("<div class='Body4' id='DisconnectionForm'>\n");
        echo sprintf("<div class='Row11'>Êtes-vous sûr de vous déconnecter ?</div>\n");
        echo sprintf("<div class='Row13'>\n");
        echo sprintf("<div class='Button4' onclick='server_call(\"user\", \"run_disconnection\")'><i class='fa fa-power-off'></i> Se Déconnecter</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Row14' id='DisconnectionMsg'></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onMenu() {        
        echo sprintf("<ul class='Menu' id='HeaderMenu'>\n");
             
        $lPageObj = new GPage();
        $lSessionObj = new GSession();
        
        $lCount = $this->countItem("menu");        
        $lPage = $lPageObj->getPageId();
        $lLoginOn = $lSessionObj->issetSession("login");
        
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
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<a class='Link%s' href='%s'>\n", $lActive, $lLink);
                echo sprintf("%s\n", $lName);
                echo sprintf("</a>\n");
                echo sprintf("</li>\n");
            }
            else if($lType == "link/login") {
                if($lLoginOn) continue;
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<a class='Link%s' href='%s'>\n", $lActive, $lLink);
                echo sprintf("%s\n", $lName);
                echo sprintf("</a>\n");
                echo sprintf("</li>\n");
            }
            else if($lType == "link/login/js") {
                if($lLoginOn) continue;
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<span class='Link' onclick='server_call(\"%s\", \"%s\");'>%s</span>\n"
                    , $lModule, $lMethod, $lName);
                echo sprintf("</li>\n");
            }
            else if($lType == "link/logout") {
                if(!$lLoginOn) continue;
                echo sprintf("<li class='Item'>\n");
                echo sprintf("<a class='Link%s' href='%s'>\n", $lActive, $lLink);
                echo sprintf("%s\n", $lName);
                echo sprintf("</a>\n");
                echo sprintf("</li>\n");
            }
            else if($lType == "link/logout/js") {
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
    public function onTitle() {
        echo sprintf("<div class='MainBlock'>\n");
        echo sprintf("<div class='Content'>\n");
        echo sprintf("<h1 class='Title2'>%s</h1>\n", "Title");
        echo sprintf("<div class='Body'>\n");
        $this->onSite();
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onSite() {
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
        $this->onView();        
        echo sprintf("</div>\n");
        $this->onNetworks();        
    }
    //===============================================
    public function onView() {
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
    public function onLink() {
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
    public function onNetworks() {
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
