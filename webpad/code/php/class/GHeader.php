<?php   
//===============================================
class GHeader extends GWidget {
    //===============================================
    private static $m_instance = null;
    //===============================================
    protected $dom;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("header.xml");
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GHeader();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function show() {
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $this->getLang());
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $this->getTitle());
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s%s'/>\n", $this->getRootPath(), $this->getLogo());
        echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        echo sprintf("<link rel='stylesheet' href='%s/libs/font_awesome/css/font-awesome.min.css'/>\n", $this->getRootPath());
        $this->loadFonts();
        echo sprintf("<link rel='stylesheet' href='%s/css/style.css'/>\n", $this->getRootPath());
        echo sprintf("</head>\n");
        echo sprintf("<body onload='body_onload()'>\n");
        echo sprintf("<div class='body_page'>\n");
        echo sprintf("<a class='app_name' href='%s'><i class='fa fa-%s'></i> %s</a>\n", $this->getAppLink(), $this->getAppIcon(), $this->getAppName());
        echo sprintf("<a class='app_ref' href='%s'><i class='fa fa-%s'></i> %s</a>\n", $this->getRefLink(), $this->getRefIcon(), $this->getRefName());
        echo sprintf("<div class='app_title'>\n");
        echo sprintf("<div>%s</div>\n", $this->getPageTitle());
        echo sprintf("</div>\n");
    }
    //===============================================
    public function getLang() {
        $this->dom->getRoot("rdv")->getNode("header");
        $lLang = $this->dom->getNode("lang")->getValue();
        return $lLang;
    }
    //===============================================
    public function getTitle() {
        $this->dom->getRoot("rdv")->getNode("header");
        $lTitle = $this->dom->getNode("site")->getValue();
        return $lTitle;
    }
    //===============================================
    public function getPageTitle() {
        $this->dom->createXPath();
        $this->dom->queryXPath(sprintf("/rdv/header/titles/title[link/.='%s']/name", $this->getPageId()));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getLogo() {
        $this->dom->getRoot("rdv")->getNode("header");
        $lLogo = $this->dom->getNode("logo")->getValue();
        return $lLogo;
    }
    //===============================================
    public function getAppName() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("app")->getNode("name");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getAppLink() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("app")->getNode("link");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getAppIcon() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("app")->getNode("icon");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getRefName() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("ref")->getNode("name");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getRefLink() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("ref")->getNode("link");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getRefIcon() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("ref")->getNode("icon");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function loadFonts() {
        $this->dom->getRoot("rdv")->getNode("header");
        $lCount = $this->dom->getNode("fonts")->countNode();
        for($i = 0; $i < $lCount; $i++) {
            $this->dom->getNodeItem("font", $i);
            $lFont = $this->dom->getValue();
            echo sprintf("<link rel='stylesheet' href='%s%s'/>\n", $this->getRootPath(), $lFont);
        }
    }
    //===============================================
}
//===============================================
?>
