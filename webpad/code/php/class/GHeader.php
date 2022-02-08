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
        $this->dom->loadXmlFile("app_header.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function run() {
        $lLang = $this->getSettingItem("lang");
        $lTitle = $this->getSettingItem("title");
        $lLogo = $this->getSettingItem("logo");
        $lWebRoot = $this->getWebRoot();
        $lProcess = GProcess::Instance()->getConfigItem("process");
        
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
        echo sprintf("<body onload='body_onload(\"%s\")'>\n", $lProcess);
    }
    //===============================================
    public function getSettingItem($data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='settings']/%s", $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function countFonts() {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='fonts']/map/data"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    //===============================================
    public function getFont($index) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='fonts']/map/data"));
        $this->dom->getNodeIndex($index);
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function loadFonts() {
        $lCount = $this->countFonts();
        for($i = 0; $i < $lCount; $i++) {
            $lFont = $this->getFont($i);
            echo sprintf("<link rel='stylesheet' href='%s%s'/>\n", $this->getWebRoot(), $lFont);
        }
    }
    //===============================================
}
//===============================================
?>
