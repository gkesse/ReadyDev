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
        $this->m_widgetMap->addItem2("home", "home", "Accueil");
        $this->m_widgetMap->addItem2("home/sqlite", "sqlite", "SQLite");
        $this->m_widgetMap->addItem2("home/opencv", "opencv", "OpenCV");
        $this->m_widgetMap->addItem2("home/debug", "debug", "Debug");
    }
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $lPage = $this->m_widgetMap->getPage($lApp->page_id);
        echo sprintf("<div class='window'>\n");
        GWidget::Create($lPage)->run();
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>