<?php   
//===============================================
class GLineEdit extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function setContent4() {
        $width = 0;
        $type = "password";
        
        echo sprintf("<div class='lineedit'>\n");
        echo sprintf("<div class='field' style='left:%dpx;right:0px;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='fname' name='fname'/></div>\n", $type);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setContent3() {
        $width = 30;
        $icon = "user";
        $type = "password";
        
        echo sprintf("<div class='lineedit'>\n");
        echo sprintf("<label class='label' for='fname' style='min-width:%dpx;background-color:transparent;'>\n", $width);
        echo sprintf("<i class='icon fa fa-%s'></i></label>\n", $icon);
        echo sprintf("<div class='field' style='left:%dpx;right:0px;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='fname' name='fname'/></div>\n", $type);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setContent2() {
        $label= "Nom d'utilisateur :";
        $width = 200;
        $icon = "user";
        $type = "password";
        
        echo sprintf("<div class='lineedit'>\n");
        echo sprintf("<label class='label' for='fname' style='min-width:%dpx;'>\n", $width);
        echo sprintf("<i class='icon fa fa-%s'></i>\n", $icon);
        echo sprintf("%s</label>\n", $label);
        echo sprintf("<div class='field' style='left:%dpx;right:0px;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='fname' name='fname'/></div>\n", $type);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setContent() {
        $width = 30;
        $icon = "user";
        $goto = "times";
        $type = "password";
        
        echo sprintf("<div class='lineedit'>\n");
        echo sprintf("<label class='label' for='fname' style='min-width:%dpx;'>\n", $width);
        echo sprintf("<i class='icon fa fa-%s'></i></label>\n", $icon);
        echo sprintf("<div class='field' style='left:%dpx;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='fname' name='fname'/></div>\n", $icon);
        echo sprintf("<div class='goto'><i class='fa fa-%s'></i></div>\n", $goto);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setContent5() {
        $label= "Nom d'utilisateur :";
        $width = 200;
        $icon = "user";
        $goto = "times";
        $type = "password";
        
        echo sprintf("<div class='lineedit'>\n");
        echo sprintf("<label class='label' for='fname' style='min-width:%dpx;'>\n", $width);
        echo sprintf("<i class='icon fa fa-%s'></i>\n", $icon);
        echo sprintf("%s</label>\n", $label);
        echo sprintf("<div class='field' style='left:%dpx;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='fname' name='fname'/></div>\n", $icon);
        echo sprintf("<div class='goto'><i class='fa fa-%s'></i></div>\n", $goto);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>