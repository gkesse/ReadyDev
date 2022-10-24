<?php   
//===============================================
class GFooter extends GObject {
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
        $this->loadScripts();
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
    }
    //===============================================
    public function loadScripts() {
        $lWebRoot = "/" . $this->getConfig("webroot");
        $lCount = $this->countItem("js/scripts");
        for($i = 0; $i < $lCount; $i++) {
            $lScript = $this->getItem2("js/scripts", $i);
            echo sprintf("<script src='%s%s'></script>\n", $lWebRoot, $lScript);
        }
    }
    //===============================================
}
//===============================================
?>
