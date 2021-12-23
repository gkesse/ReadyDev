<?php   
//===============================================
class GPhone extends GWidget {
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
            self::$m_instance = new GPhone();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("phone.xml");
        $this->dom->createXPath();
        //
        $this->domData = new GDomXml();
        $this->domData->createDom();
        $this->domData->loadXmlFile("app_data.xml");
        $this->domData->createXPath();
    }
    //===============================================
    public function show() {
        if($this->getBgImg()) {
            echo sprintf("<div class='phone_main_img'>\n"); //phone_main
        }
        else {
            echo sprintf("<div class='phone_main'>\n"); //phone_main
        }
        $this->showHeader();
        if($this->getBgImg()) {
            echo sprintf("<div class='phone_body_img'>\n"); //phone_body
        }
        else {
            echo sprintf("<div class='phone_body'>\n"); //phone_body
        }
        $this->showChevron();
        echo sprintf("<div class='phone_body_page'>\n"); //phone_body_page
        $this->showBoxes();
        echo sprintf("</div>\n"); //phone_body_page
        echo sprintf("</div>\n"); //phone_body
        if($this->getBgImg()) {
            echo sprintf("<div class='phone_footer_img'>\n"); //phone_footer
        }
        else {
            echo sprintf("<div class='phone_footer'>\n"); //phone_footer
        }
        $this->showDot();
        echo sprintf("</div>\n"); //phone_footer
        echo sprintf("</div>\n"); //phone_main
    }
    //===============================================
    public function showHeader() {
        echo sprintf("<div class='phone_header'>\n"); //phone_header
        echo sprintf("<a class='phone_header_app_name' href='%s'><i class='fa fa-%s'></i> %s</a>\n", $this->getAppLink(), $this->getAppIcon(), $this->getAppName());
        echo sprintf("<a class='phone_header_app_ref' href='%s'><i class='fa fa-%s'></i> %s</a>\n", $this->getRefLink(), $this->getRefIcon(), $this->getRefName());
        echo sprintf("<div class='phone_header_app_title'>\n"); //phone_header_app_title
        echo sprintf("<div>%s</div>\n", $this->getPageTitle());
        echo sprintf("</div>\n"); //phone_header_app_title
        echo sprintf("</div>\n"); //phone_header
    }
    //===============================================
    public function showBoxes() {
        $lCountBox = $this->countBox();
        $lBoxPerPage = $this->getBoxPerPage();
        $lCountPage = ceil($lCountBox / $lBoxPerPage);
        for($j = 0; $j < $lCountPage; $j++) {
            echo sprintf("<div class='phone_slide'>\n"); //phone_slide
            for($i = 0; $i < $lBoxPerPage; $i++) {
                $lBoxIndex = $j * $lBoxPerPage + $i;
                if($lBoxIndex == $lCountBox) break;
                $lIcon = $this->getBoxIcon($lBoxIndex);
                $lTitle = $this->getBoxTitle($lBoxIndex);
                $lLink = $this->getBoxLink($lBoxIndex);
                echo sprintf("<a class='phone_box' href='%s'>\n", $lLink); //phone_box
                echo sprintf("<div class='phone_box_icon'><i class='phone_box_icon_fa fa fa-%s'></i></div>\n", $lIcon);
                echo sprintf("<div class='phone_box_title'>%s</div>\n", $lTitle);
                echo sprintf("</a>\n"); //phone_box
            }
            echo sprintf("</div>\n"); //phone_slide
        }
    }
    //===============================================
    public function showChevron() {
        $lCountBox = $this->countBox();
        $lBoxPerPage = $this->getBoxPerPage();
        $lCountPage = ceil($lCountBox / $lBoxPerPage);
        if($lCountPage > 1) {
            if($this->getBgImg()) {
                echo sprintf("<i class='phone_slide_prev_img fa fa-chevron-left'
                onclick='phone_slide_prev_onclick()'></i>\n");
                echo sprintf("<i class='phone_slide_next_img fa fa-chevron-right'
                onclick='phone_slide_next_onclick()'></i>\n");
            }
            else {
                echo sprintf("<i class='phone_slide_prev fa fa-chevron-left'
                onclick='phone_slide_prev_onclick()'></i>\n");
                echo sprintf("<i class='phone_slide_next fa fa-chevron-right'
                onclick='phone_slide_next_onclick()'></i>\n");
            }
        }
    }
    //===============================================
    public function showDot() {
        $lCountBox = $this->countBox();
        $lBoxPerPage = $this->getBoxPerPage();
        $lCountPage = ceil($lCountBox / $lBoxPerPage);
        if($lCountPage > 1) {
            echo sprintf("<div class='phone_slide_bar'>");
            for($i = 0; $i < $lCountPage; $i++) {
                echo sprintf("<div class='phone_slide_bar_dot' title='Page %d'
                onclick='phone_slide_bar_dot_onclick(%d)'></div>\n", $i + 1, $i + 1);
            }
            echo sprintf("</div>");
        }
    }
    //===============================================
    public function getBgImg() {
        $this->dom->queryXPath(sprintf("/rdv/phone/body/bgimg"));
        $lData = ($this->dom->getNodeIndex(0)->getValue() == "1");
        return $lData;
    }
    //===============================================
    public function getAppLink() {
        $this->dom->queryXPath(sprintf("/rdv/phone/header/app/link"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getAppIcon() {
        $this->dom->queryXPath(sprintf("/rdv/phone/header/app/icon"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getAppName() {
        $this->dom->queryXPath(sprintf("/rdv/phone/header/app/name"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getRefLink() {
        $this->dom->queryXPath(sprintf("/rdv/phone/header/ref/link"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getRefIcon() {
        $this->dom->queryXPath(sprintf("/rdv/phone/header/ref/icon"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getRefName() {
        $this->dom->queryXPath(sprintf("/rdv/phone/header/ref/name"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function countBox() {
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/map/box"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    //===============================================
    public function getBoxPerPage() {
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/boxperpage"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getBoxIcon($index) {
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/map/box/icon"));
        $lData = $this->dom->getNodeIndex($index)->getValue();
        return $lData;
    }
    //===============================================
    public function getBoxTitle($index) {
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/map/box/title"));
        $lData = $this->dom->getNodeIndex($index)->getValue();
        return $lData;
    }
    //===============================================
    public function getBoxLink($index) {
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/map/box/link"));
        $lData = $this->dom->getNodeIndex($index)->getValue();
        $lData = sprintf("%s%s", $this->getWebKey(), $lData);
        return $lData;
    }
    //===============================================
    public function getPageTitle() {
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/map/box[link/.='/%s/']/title", $this->getPageId()));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
