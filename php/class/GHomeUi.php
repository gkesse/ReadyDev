<?php
//===============================================
class GHomeUi extends GObject {
    //===============================================
    private $m_parallaxUi;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->loadDom(__CLASS__);
        $this->m_parallaxUi  = new GParallaxUi();
    }
    //===============================================
    public function run() {
        $this->onIntro();
        return !$this->hasErrors();
    }
    //===============================================
    public function onIntro() {
        $lTitle = $this->m_dom->getItem("home", "title");
        $lIntro = $this->m_dom->getItem("home", "intro");
        $lBody = sprintf("<br>%s<br><br>%s<br>\n", $lIntro, $this->onLink());
        $this->m_parallaxUi->setTitle($lTitle);
        $this->m_parallaxUi->setBody($lBody);
        $this->m_parallaxUi->run();        
        $this->addLogs($this->m_parallaxUi->getLogs());
        return !$this->hasErrors();
    }
    //===============================================
    public function onLink() {
        $lCount = $this->m_dom->countItem("home");
        $lData = "";
        $lData .= sprintf("<div class='Row0'>\n");
        $lData .= sprintf("<ul class='fa-ul'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->m_dom->getItem3("home", "category", $i);
            $lLink = $this->m_dom->getItem3("home", "link", $i);
            $lName = $this->m_dom->getItem3("home", "name", $i);
            if($lCategory != "intro_link") continue;
            $lData .= sprintf("<li>\n");
            $lData .= sprintf("<i class='Icon2 fa-li fa fa-book'></i>\n");
            $lData .= sprintf("<a class='Link4' href='%s'>%s</a>\n", $lLink, $lName);
            $lData .= sprintf("</li>\n");
        }
        
        $lData .= sprintf("</ul>\n");
        $lData .= sprintf("</div>\n");
        return $lData;
    }
    //===============================================
}
//===============================================
?>