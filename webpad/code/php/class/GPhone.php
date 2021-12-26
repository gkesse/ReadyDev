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
        if(!$this->getScroll()) {
            if($this->getBgImg()) {
                echo sprintf("<div class='phone_body_img'>\n"); //phone_body
            }
            else {
                echo sprintf("<div class='phone_body'>\n"); //phone_body
            }
        }
        else {
            if($this->getBgImg()) {
                echo sprintf("<div class='phone_body_img_scroll'>\n"); //phone_body
            }
            else {
                echo sprintf("<div class='phone_body_scroll'>\n"); //phone_body
            }
        }
        if(!$this->getScroll()) {
            $this->showChevron();
        }
        if(!$this->getScroll()) {
            echo sprintf("<div class='phone_body_page'>\n"); //phone_body_page
        }
        else {
            echo sprintf("<div class='phone_body_page_scroll'>\n"); //phone_body_page
        }
        $this->showBody();
        echo sprintf("</div>\n"); //phone_body_page
        echo sprintf("</div>\n"); //phone_body
        echo sprintf("<div class='phone_footer_scroll' hidden>%s</div>\n", $this->getScroll());
        if(!$this->getScroll()) {
            if($this->getBgImg()) {
                echo sprintf("<div class='phone_footer_img'>\n"); //phone_footer
            }
            else {
                echo sprintf("<div class='phone_footer'>\n"); //phone_footer
            }
            $this->showDot();
            echo sprintf("</div>\n"); //phone_footer
        }
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
    public function showBody() {
        if($this->checkPageId()) {
            $lPageId = $this->getPageId();
            $this->showTitle();
            if($lPageId == "home") {$this->showHome();}
            else if($lPageId == "home/ken") {$this->showKen();}
            else if($lPageId == "home/shopping") {$this->showShopping();}
            else if($lPageId == "home/infos") {$this->showInfos();}
        }
        else {
            GLog::Instance()->addError(sprintf("La page demandée n'esiste pas !!!"));
        }
    }
    //===============================================
    public function showHome() {
        if(!$this->getScroll()) {
            $this->showBoxes();
        }
        else {
            $this->showBoxesScroll();
        }
    }
    //===============================================
    public function showKen() {
        echo sprintf("<div class='ken'>\n");
        echo sprintf("<div class=''>ken</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function showShopping() {
        echo sprintf("<div class='shopping'>\n");
        echo sprintf("<div class=''>shopping</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function showInfos() {
        GInfos::Instance()->show();
    }
    //===============================================
    public function showTitle() {
        $lPageId = $this->getPageId();
        if($lPageId != "home") {
            echo sprintf("<div class='phone_title'>\n");
            $lMap = explode("/", $lPageId);
            $lHref = $this->webkey;
            for($i = 0; $i < count($lMap); $i++) {
                $lKey = $lMap[$i];
                if($i != 0) {
                    echo sprintf("<i class='fa fa-chevron-right'></i>\n");
                }
                $lHref .= "/";
                $lHref .= $lKey;
                echo sprintf("<a class='' href='%s'>%s</a>\n", $lHref, $lKey);
            }
            echo sprintf("</div>\n");
        }
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
                $lActive = $this->getBoxActive($lBoxIndex);
                if($lActive) {
                    $lIcon = $this->getBoxIcon($lBoxIndex);
                    $lTitle = $this->getBoxName($lBoxIndex);
                    $lLink = $this->getBoxLink($lBoxIndex);
                    echo sprintf("<a class='phone_box' href='%s'>\n", $lLink); //phone_box
                    echo sprintf("<div class='phone_box_icon'><i class='phone_box_icon_fa fa fa-%s'></i></div>\n", $lIcon);
                    echo sprintf("<div class='phone_box_title'>%s</div>\n", $lTitle);
                    echo sprintf("</a>\n"); //phone_box
                }
            }
            echo sprintf("</div>\n"); //phone_slide
        }
    }
    //===============================================
    public function showBoxesScroll() {
        $lCountBox = $this->countBox();
        for($i = 0; $i < $lCountBox; $i++) {
            $lActive = $this->getBoxActive($i);
            if($lActive) {$lIcon = $this->getBoxIcon($i);
                $lTitle = $this->getBoxName($i);
                $lLink = $this->getBoxLink($i);
                echo sprintf("<a class='phone_box' href='%s'>\n", $lLink); //phone_box
                echo sprintf("<div class='phone_box_icon'><i class='phone_box_icon_fa fa fa-%s'></i></div>\n", $lIcon);
                echo sprintf("<div class='phone_box_title'>%s</div>\n", $lTitle);
                echo sprintf("</a>\n"); //phone_box
            }
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
        $this->dom->queryXPath(sprintf("/rdv/phone/settings/bgimg"));
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
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/box"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    //===============================================
    public function getBoxPerPage() {
        $this->dom->queryXPath(sprintf("/rdv/phone/settings/boxperpage"));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getBoxActive($index) {
        $this->dom->queryXPathEmpty(sprintf("/rdv/phone/boxes/box[position()=%d]/active", $index + 1));
        $lData = ($this->dom->getNodeIndex(0)->getValue() == "1");
        return $lData;
    }
    //===============================================
    public function getBoxIcon($index) {
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/box[position()=%d]/icon", $index + 1));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getBoxName($index) {
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/box[position()=%d]/name", $index + 1));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
    public function getBoxLink($index) {
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/box[position()=%d]/link", $index + 1));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        $lData = sprintf("%s%s", $this->getWebKey(), $lData);
        return $lData;
    }
    //===============================================
    public function getPageTitle() {
        $this->dom->queryXPathEmpty(sprintf("/rdv/phone/boxes/box[link/.='/%s/']/title", $this->getPageId()));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        if($lData == "") {
            $this->dom->queryXPathEmpty(sprintf("/rdv/phone/boxes/box[link/.='/%s/']/name", $this->getPageId()));
            $lData = $this->dom->getNodeIndex(0)->getValue();
        }
        return $lData;
    }
    //===============================================
    public function checkPageId() {
        if($this->getPageId() == "home") return true;
        $this->dom->queryXPathEmpty(sprintf("/rdv/phone/boxes/box[link/.='/%s/']/name", $this->getPageId()));
        $lData = ($this->dom->getNodeIndex(0)->getValue() != "");
        return $lData;
    }
    //===============================================
    public function getScroll() {
        $this->dom->queryXPath(sprintf("/rdv/phone/settings/scroll"));
        $lData = ($this->dom->getNodeIndex(0)->getValue() == "1");
        return $lData;
    }
    //===============================================
}
//===============================================
?>
