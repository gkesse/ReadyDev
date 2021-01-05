<?php   
//===============================================
class GButton extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function button($text, $href) {
        echo sprintf("<a href='%s'><div class='button_id'>
        <button type='button'>%s</button>
        </div></a>\n", $href, $text);
    }
    //===============================================
    public function button2($text, $icon, $href) {
        echo sprintf("<a href='%s'><div class='button_id'>
        <button type='button'><i class='fa fa-%s' style='margin-right:5px;'></i> %s</button>
        </div></a>\n", $href, $icon, $text);
    }
    //===============================================
    public function button3($text, $req) {
        echo sprintf("<div class='button_id'>
        <input type='hidden' id='req' name='req' value='%s'/>
        <button type='submit'>%s</button>
        </div>\n", $req, $text);
    }
    //===============================================
    public function button4($text, $icon, $req) {
        echo sprintf("<div class='button_id'>
        <input type='hidden' id='req' name='req' value='%s'/>
        <button type='submit'><i class='fa fa-%s' style='margin-right:5px;'></i> %s</button>
        </div>\n", $req, $icon, $text);
    }
    //===============================================
}
//===============================================
?>