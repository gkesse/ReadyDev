<?php   
//===============================================
class GWindow extends GWidget {
    //===============================================
    private $m_widgetMap;
    //===============================================
    public function __construct() {
        $this->m_widgetMap = GWidget::Create("stackwidget");
    }
    //===============================================
    // method
    //===============================================
    public function load() {
        $this->m_widgetMap->addStack("home", "home", "Accueil");
        $this->m_widgetMap->addStack("home/login", "login", "Connexion");
        $this->m_widgetMap->addStack("home/sqlite", "sqlite", "SQLite");
        $this->m_widgetMap->addStack("home/opencv", "opencv", "OpenCV");
        $this->m_widgetMap->addStack("home/debug", "debug", "Debug");
    }
    //===============================================
    public function start() {
        $lApp = GManager::Instance()->getData()->app;
        $lApp->title = $this->m_widgetMap->getTitle($lApp->page_id);
    }
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $lPage = $this->m_widgetMap->getPage($lApp->page_id);
        echo sprintf("<div class='window_id'>\n");
        GWidget::Create($lPage)->run();
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>