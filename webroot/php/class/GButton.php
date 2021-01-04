<?php   
//===============================================
class GButton extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $text = "Se Connecter";        
        echo sprintf("<div class='button'>\n");
        echo sprintf("<button type='button'>%s</button>", $text);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>