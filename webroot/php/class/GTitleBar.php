<?php   
//===============================================
class GTitleBar extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        echo sprintf("<div class='titlebar'>\n");
        echo sprintf("<div class='item'><i class='fa fa-book'></i></div>\n");
        GWidget::Create("spaceh")->space(5);
        echo sprintf("<div class='item'>ReadyApp</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>