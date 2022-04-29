<?php   
//===============================================
class GHeader extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDoms();
    }
    //===============================================
    public function run() {
        $this->onHeader();
    }
    //===============================================
    public function onHeader() {
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
        echo sprintf("<div class='HtmlPage'>\n");
        $this->onBackground();
        echo sprintf("<div class='BodyPage'>\n");
        echo sprintf("<div class='MainPage'>\n");
        $this->onMenu();
    }
    //===============================================
    public function onFonts() {
        $lCount = $this->countItem("fonts");
        for($i = 0; $i < $lCount; $i++) {
            $lFont = $this->getItem3("fonts", $i);
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
    public function onMenu() {
        $lTitle = $this->getItem("header", "title");
        $lLogo = $this->getItem("header", "logo");
        
        echo sprintf("<header class='Header'>\n");
        echo sprintf("<ul class='Menu' id='HeaderMenu'>\n");
        echo sprintf("<li class='Item'>\n");
        echo sprintf("<a class='Title' href='/home'>\n");
        echo sprintf("<img class='Img4' src='%s' alt='%s'/>\n", $lLogo, $lLogo);
        echo sprintf("<span class='Title11'>%s</span>\n", $lTitle);
        echo sprintf("</a>\n");
        echo sprintf("</li>\n");
                
        $lCount = $this->countItem("menu");

        $lPageObj = new GPage();
        $lPage = $lPageObj->getPageId();
        
        for($i = 0; $i < $lCount; $i++) {
            $lName = $this->getItem2("menu", "name", $i);
            $lLink = $this->getItem2("menu", "link", $i);
            $lActive = "";
            if($lLink == $lPage) $lActive = " Active";
            
            echo sprintf("<li class='Item'>\n");
            echo sprintf("<a class='Link%s' href='%s'>\n", $lActive, $lLink);
            echo sprintf("%s\n", $lName);
            echo sprintf("</a>\n");
            echo sprintf("</li>\n");
        }
        
        echo sprintf("</ul>\n");
        echo sprintf("</header>\n");
    }
    //===============================================
    public function getHappyYear() {
        $lHappy = $this->getItem("happyyear", "msg");
        $lYear = date("Y");
        $lData = sprintf("%s %s", $lHappy, $lYear);
        return $lData;
    }
    //===============================================
}
//===============================================
?>
