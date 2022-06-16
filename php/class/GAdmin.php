<?php
//===============================================
class GAdmin extends GObject {
    //===============================================
    private static $m_instance = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDoms();        
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GAdmin();
        }
        return self::$m_instance;
    }
    //===============================================
    public function run() {
        $this->onIntro();
        echo sprintf("<div class='Content2'>\n");
        
        $this->onManager();
        $this->onQuery();
        $this->onSitemap();
        $this->onEditor();
        
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onIntro() {
        $lTitle = $this->getItem("admin", "title");
        $lIntro = $this->getItem("admin", "intro");
        $lCount = $this->countItem("admin");
        
        echo sprintf("<div class='Parallax'>\n");
        echo sprintf("<div class='Img Binary'>\n");
        echo sprintf("<div class='Caption'>\n");
        echo sprintf("<a href='#'><div class='Text'>%s</div></a>\n", $lTitle);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Body2 Orange'>\n");
        echo sprintf("<div class='Row8'><br/>\n");
        echo sprintf("%s\n", $lIntro);
        echo sprintf("</div><br/>\n");
        echo sprintf("<div class='Row0'>\n");
        echo sprintf("<ul class='fa-ul'>\n");        
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("admin", "category", $i);
            $lLink = $this->getItem3("admin", "link", $i);
            $lName = $this->getItem3("admin", "name", $i);
            if($lCategory != "intro/link") continue;
            echo sprintf("<li>\n");
            echo sprintf("<i class='Icon2 fa-li fa fa-book'></i>\n");
            echo sprintf("<a class='Link4' href='%s'>%s</a>\n", $lLink, $lName);
            echo sprintf("</li>\n");
        }
        
        echo sprintf("</ul>\n");
        echo sprintf("</div><br/>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onManager() {
        $lManager = new GManager();
        $lManager->run();
    }
    //===============================================
    public function onQuery() {
        $lQuery = new GQuery();
        $lQuery->run();
    }
    //===============================================
    public function onSitemap() {
        $lSitemapObj = new GSitemap();
        $lSitemapObj->run();
    }
    //===============================================
    public function onEditor() {
        
    }
    //===============================================
    public function validate() {
        $lValidate = true;
        if(!isset($_SESSION["login"])) $lValidate = false;
        else if($_SESSION["login"]["group"] != "admin") $lValidate = false;
        
        if(!$lValidate) {
            header("Location: ".$_SESSION["lasturl"]);
        }
    }
    //===============================================
}
//===============================================
?>