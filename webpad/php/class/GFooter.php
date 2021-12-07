<?php   
//===============================================
class GFooter extends GWidget {
    //===============================================
    private static $m_instance = null;
    //===============================================
    protected $dom;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("footer.xml");
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GFooter();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function show() {
        $this->loadScripts();
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
    }
    //===============================================
    public function loadScripts() {
        $this->dom->getRoot("rdv")->getNode("footer");
        $lCount = $this->dom->getNode("scripts")->countNode();
        for($i = 0; $i < $lCount; $i++) {
            $this->dom->getNodeItem("script", $i);
            $lScript = $this->dom->getValue();
            echo sprintf("<script src='%s%s'></script>\n", $this->getRootPath(), $lScript);
        }
    }
    //===============================================
}
//===============================================
?>
