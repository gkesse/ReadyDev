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
    }
    //===============================================
    public function show() {
        echo sprintf("<div class='body_main'>\n");
        $this->showNotifications();
        $this->showHeader();
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
        echo sprintf("</div>\n");
        echo sprintf("</div>\n"); // body_main
    }
    //===============================================
    public function showNotifications() {
        if($this->getPageId() == "home/notifications") {
            echo sprintf("<a class='phone_notifications' href='/readypad/'></a>\n");
            echo sprintf ( "<div class='phone_notifications_box'>\n" );
            for($i = 0; $i < 10; $i++) {
                echo sprintf ( "<div class='phone_notifications_item'>\n" );
                echo sprintf ( "<div class='phone_notifications_header'>\n" );
                echo sprintf ( "<i class='phone_notifications_icon fa fa-info'></i>\n" );
                echo sprintf ( "<div class='phone_notifications_app'>ReadyPad</div>\n" );
                echo sprintf ( "<div class='phone_notifications_time'>2 mn</div>\n" );
                echo sprintf ( "</div>\n" );
                echo sprintf ( "<div class='phone_notifications_body'>\n" );
                echo sprintf ( "<div class='phone_notifications_title'>Titre</div>\n" );
                echo sprintf ( "<div class='phone_notifications_msg'>Message</div>\n" );
                echo sprintf ( "<i class='phone_notifications_img fa fa-envelope'></i>\n" );
                echo sprintf ( "</div>\n" );
                echo sprintf ( "</div>\n" );
            }
            echo sprintf ( "</div>\n" );
        }
    }
    //===============================================
    public function showHeader() {
        echo sprintf("<div class='body_page'>\n");
        echo sprintf("<a class='app_name' href='%s'><i class='fa fa-%s'></i> %s</a>\n", $this->getAppLink(), $this->getAppIcon(), $this->getAppName());
        echo sprintf("<a class='app_ref' href='%s'><i class='fa fa-%s'></i> %s</a>\n", $this->getRefLink(), $this->getRefIcon(), $this->getRefName());
        echo sprintf("<div class='app_title'>\n");
        echo sprintf("<div>%s</div>\n", $this->getObj()->getPageTitle());
        echo sprintf("</div>\n");
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
        $this->dom->getRoot("rdv")->getNode("phone");
        $lCount = $this->dom->getNode("boxes")->countNode("box");
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
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/box[position()=%d]/link", $index + 1));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        $lData = sprintf("%s%s", $this->getWebKey(), $lData);
        return $lData;
    }
    //===============================================
    public function getPageTitle() {
        $this->dom->queryXPath(sprintf("/rdv/phone/boxes/box[link/.='/%s/']/title", $this->getPageId()));
        $lData = $this->dom->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
