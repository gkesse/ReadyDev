<?php   
//===============================================
class GFooter extends GWidget {
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
            self::$m_instance = new GFooter();  
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
        $this->loadScripts();
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
    }
    //===============================================
    public function countScripts() {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='scripts']/map/data"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    //===============================================
    public function getScript($index) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='scripts']/map/data"));
        $this->dom->getNodeIndex($index);
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function loadScripts() {
        $lCount = $this->countScripts();
        for($i = 0; $i < $lCount; $i++) {
            $lScript = $this->getScript($i);
            echo sprintf("<script src='%s%s'></script>\n", $this->getWebRoot(), $lScript);
        }
    }
    //===============================================
}
//===============================================
?>
