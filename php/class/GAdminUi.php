<?php
//===============================================
class GAdminUi extends GObject {
    //===============================================
    protected $m_managerUi;
    protected $m_queryUi;
    protected $m_sitemapUi;
    protected $m_editorUi;
    //===============================================
    public function __construct($_codeName = "editor") {
        parent::__construct($_codeName);
        $this->loadDom(__CLASS__);
        $this->m_managerUi  = new GManagerUi();
        $this->m_queryUi    = new GQueryUi();
        $this->m_sitemapUi  = new GSitemapUi();
        $this->m_editorUi   = new GEditorUi();
    }
    //===============================================
    public function run() {
        $this->onIntro();
        echo sprintf("<div class='Content2'>\n");
        
        $this->m_managerUi->run();
        $this->m_queryUi->run();
        $this->m_sitemapUi->run();
        $this->m_editorUi->run();
        
        $this->addLogs($this->m_editorUi->getLogs());
        
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onIntro() {
        $lTitle = $this->m_dom->getItem("admin", "title");
        $lIntro = $this->m_dom->getItem("admin", "intro");
        $lCount = $this->m_dom->countItem("admin");
        
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
            $lCategory = $this->m_dom->getItem3("admin", "category", $i);
            $lLink = $this->m_dom->getItem3("admin", "link", $i);
            $lName = $this->m_dom->getItem3("admin", "name", $i);
            if($lCategory != "intro_link") continue;
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
    public function onEditor() {
        
    }
    //===============================================
}
//===============================================
?>