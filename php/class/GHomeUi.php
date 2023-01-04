<?php
//===============================================
class GHomeUi extends GObjectUi {
    //===============================================
    protected $m_parallaxUi;
    //===============================================
    public function __construct($_codeName = "home") {
        parent::__construct($_codeName);
        $this->loadDom(__CLASS__);
        $this->m_parallaxUi  = new GParallaxUi();
    }
    //===============================================
    public function run() {
        $this->onIntro();
        $this->onIntro();
    }
    //===============================================
    public function onIntro() {
        $lTitle = $this->m_dom->getItem($this->m_codeName, "title");
        $lIntro = $this->m_dom->getItem($this->m_codeName, "intro");
        $lBody = sprintf("<br>%s<br><br>%s<br>\n", $lIntro, $this->onLink());
        $this->m_parallaxUi->setTitle($lTitle);
        $this->m_parallaxUi->setBody($lBody);
        $this->m_parallaxUi->run();        
    }
    //===============================================
    public function onLink() {
        $lCount = $this->m_dom->countItem($this->m_codeName);
        $lData = "";
        $lData .= sprintf("<div class='Row0'>\n");
        $lData .= sprintf("<ul class='fa-ul'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->m_dom->getItem3($this->m_codeName, "category", $i);
            $lLink = $this->m_dom->getItem3($this->m_codeName, "link", $i);
            $lName = $this->m_dom->getItem3($this->m_codeName, "name", $i);
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