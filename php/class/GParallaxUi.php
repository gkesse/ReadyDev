<?php
//===============================================
class GParallaxUi extends GObject {
    //===============================================
    protected $m_title;
    protected $m_body;
    //===============================================
    public function __construct($_codeName = "parallax") {
        parent::__construct($_codeName);
        $this->m_title  = "TITLE";
        $this->m_body   = "BODY";
    }
    //===============================================
    public function setTitle($_title) {
        $this->m_title = $_title;
    }
    //===============================================
    public function setBody($_body) {
        $this->m_body = $_body;
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='Parallax'>\n");
        echo sprintf("<div class='Img Binary'>\n");
        echo sprintf("<div class='Caption'>\n");
        echo sprintf("<a href='#'><div class='Text'>%s</div></a>\n", $this->m_title);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Body2 Orange'>\n");
        echo sprintf("<div class='Row8'>\n");
        echo sprintf("%s\n", $this->m_body);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>