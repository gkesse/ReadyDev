<?php   
//===============================================
class GHeader extends GWidget {
    //===============================================
    static private $m_instance = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GHeader();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("header.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function show() {
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $this->getLang());
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $this->getTitle());
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s%s'/>\n", $this->getWebRoot(), $this->getLogo());
        echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        echo sprintf("<link rel='stylesheet' href='%s/libs/font_awesome/css/font-awesome.min.css'/>\n", $this->getWebRoot());
        $this->loadFonts();
        echo sprintf("<link rel='stylesheet' href='%s/css/style.php'/>\n", $this->getWebRoot());
        echo sprintf("</head>\n");
        echo sprintf("<body onload='body_onload(\"%s\")'>\n", $this->getObj("process")->getProcessName());
    }
    //===============================================
    public function getLang() {
        $this->dom->queryXPath(sprintf("/rdv/header/lang"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getTitle() {
        $this->dom->queryXPath(sprintf("/rdv/header/site"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getLogo() {
        $this->dom->queryXPath(sprintf("/rdv/header/logo"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function countFonts() {
        $this->dom->queryXPath(sprintf("/rdv/header/fonts/font"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    //===============================================
    public function loadFonts() {
        $lCount = $this->countFonts();
        for($i = 0; $i < $lCount; $i++) {
            $this->dom->getNodeIndex($i);
            $lFont = $this->dom->getValue();
            echo sprintf("<link rel='stylesheet' href='%s%s'/>\n", $this->getWebRoot(), $lFont);
        }
    }
    //===============================================
}
//===============================================
?>
