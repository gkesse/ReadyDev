<?php   
//===============================================
class GHeaderUi extends GObject {
    //===============================================
    private $m_lang;
    private $m_title;
    private $m_logo;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_lang = "fr";
        $this->m_title = "ReadyDev";
        $this->m_logo = "/data/img/defaults/readydev.png";
    }
    //===============================================
    public function run() {
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $this->m_lang);
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $this->m_title);
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $this->m_logo);
        echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        $this->loadFonts();    
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
        echo sprintf("<div class='HtmlPage'>\n");
        $this->loadDialogs();
        echo sprintf("<div class='BodyPage'>\n");
        echo sprintf("<div class='MainPage'>\n");
        $this->loadHeader();
    }
    //===============================================
    public function loadHeader() {

    }
    //===============================================
    public function loadFonts() {

    }
    //===============================================
    public function loadDialogs() {

    }
    //===============================================
}
//===============================================
?>
