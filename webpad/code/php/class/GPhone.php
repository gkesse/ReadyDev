<?php   
//===============================================
class GPhone extends GWidget {
    //===============================================
    private static $m_instance = null;
    //===============================================
    protected $dom;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("phone.xml");
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GPhone();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function show() {
        echo sprintf("<div class='phone_body'>\n");
        $lCountBox = $this->countBox();
        $lBoxPerPage = $this->getBoxPerPage();
        $lCountPage = ceil($lCountBox / $lBoxPerPage);
        for($j = 0; $j < $lCountPage; $j++) {
            echo sprintf("<div class='phone_slide'>\n");
            for($i = 0; $i < $lBoxPerPage; $i++) {
                $lBoxIndex = $j * $lBoxPerPage + $i;
                if($lBoxIndex == $lCountBox) break;
                $lIcon = $this->getBoxIcon($lBoxIndex);
                $lTitle = $this->getBoxTitle($lBoxIndex);
                $lLink = $this->getBoxLink($lBoxIndex);
                echo sprintf("<a class='phone_box' href='%s'>\n", $lLink);
                echo sprintf("<i class='phone_box_icon fa fa-%s'></i>\n", $lIcon);
                echo sprintf("<div class='phone_box_title'>%s</div>\n", $lTitle);
                echo sprintf("</a>\n");
            }
            echo sprintf("</div>\n");
        }
        echo sprintf("<i class='phone_slide_prev fa fa-chevron-left'
        onclick='phone_slide_prev_onclick()'></i>\n");
        echo sprintf("<i class='phone_slide_next fa fa-chevron-right'
        onclick='phone_slide_next_onclick()'></i>\n");
        echo sprintf("<div class='phone_slide_bar'>\n");
        for($i = 0; $i < $lCountPage; $i++) {
            echo sprintf("<div class='phone_slide_bar_dot' title='Page %d'
            onclick='phone_slide_bar_dot_onclick(%d)'></div>\n", $i + 1, $i + 1);
        }
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function countBox() {
        $this->dom->getRoot("rdv")->getNode("phone");
        $lCount = $this->dom->getNode("boxes")->countNode();
        return $lCount;
    }
    //===============================================
    public function getBoxPerPage() {
        $this->dom->getRoot("rdv")->getNode("phone");
        $this->dom->getNode("settings")->getNode("boxperpage");
        $lBoxPerPage = $this->dom->getValue();
        return $lBoxPerPage;
    }
    //===============================================
    public function getBoxIcon($index) {
        $this->dom->getRoot("rdv")->getNode("phone");
        $this->dom->getNode("boxes");
        $this->dom->getNodeItem("box", $index);
        $lIcon = $this->dom->getNode("icon")->getValue();
        return $lIcon;
    }
    //===============================================
    public function getBoxTitle($index) {
        $this->dom->getRoot("rdv")->getNode("phone");
        $this->dom->getNode("boxes");
        $this->dom->getNodeItem("box", $index);
        $lTitle = $this->dom->getNode("title")->getValue();
        return $lTitle;
    }
    //===============================================
    public function getBoxLink($index) {
        $this->dom->createXPath();
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/box[position()=%d]/link", $index + 1));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        $lData = sprintf("%s%s", $this->webkey, $lData);
        return $lData;
    }
    //===============================================
}
//===============================================
?>
