<?php   
//===============================================
class GHeader extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    //===============================================
    public function createDom() {
        $this->m_dom = new GXml();
        $this->m_dom->createDocFile("pad.xml");
    }
    //===============================================
    public function run() {
        $lLang = $this->getItem("header", "lang");
        $lTitle = $this->getItem("header", "title");
        $lLogo = $this->getItem("header", "logo");
        $lWebRoot = "/" . $this->getConfig("webroot");
        
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $lLang);
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $lTitle);
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s%s'/>\n", $lWebRoot, $lLogo);
        echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        echo sprintf("<link rel='stylesheet' href='%s/libs/font_awesome/css/font-awesome.min.css'/>\n", $lWebRoot);
        $this->loadFonts();
        echo sprintf("<link rel='stylesheet' href='%s/css/style.css'/>\n", $lWebRoot);
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
    }
    //===============================================
    public function loadFonts() {
        $lWebRoot = "/" . $this->getConfig("webroot");
        $lCount = $this->countItem("css/fonts");
        for($i = 0; $i < $lCount; $i++) {
            $lFont = $this->getItem2("css/fonts", $i);
            echo sprintf("<link rel='stylesheet' href='%s%s'/>\n", $lWebRoot, $lFont);
        }
    }
    //===============================================
}
//===============================================
?>
