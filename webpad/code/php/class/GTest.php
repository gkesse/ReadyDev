<?php   
//===============================================
class GTest extends GWidget {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("pad.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function run() {
        echo "ooooooooooooooo<br>";
    }
    //===============================================
}
//===============================================
?>
