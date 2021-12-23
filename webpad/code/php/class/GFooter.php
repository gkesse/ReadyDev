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
        $this->dom->loadXmlFile("header.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function show() {
        $this->loadScripts();
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
    }
    //===============================================
    public function countScripts() {
        $this->dom->queryXPath(sprintf("/rdv/header/scripts/script"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    //===============================================
    public function loadScripts() {
        $lCount = $this->countScripts();
        for($i = 0; $i < $lCount; $i++) {
            $this->dom->getNodeIndex($i);
            $lScript = $this->dom->getValue();
            echo sprintf("<script src='%s%s'></script>\n", $this->getWebRoot(), $lScript);
        }
    }
    //===============================================
}
//===============================================
?>
