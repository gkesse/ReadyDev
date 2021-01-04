<?php   
//===============================================
class GLineEdit extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function setContent($id, $type) {
        $width = 0;        
        echo sprintf("<div class='lineedit'>\n");
        echo sprintf("<div class='field' style='left:%dpx;right:0px;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s'/></div>\n", $type, $id, $id);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setContent2($id, $type, $icon) {
        $width = 30;        
        echo sprintf("<div class='lineedit'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;background-color:transparent;'>\n", $width, $id);
        echo sprintf("<i class='icon fa fa-%s'></i></label>\n", $icon);
        echo sprintf("<div class='field' style='left:%dpx;right:0px;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s'/></div>\n", $type, $id, $id);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setContent3($id, $type, $icon, $label, $width) {
        echo sprintf("<div class='lineedit'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;'>\n", $width, $id);
        echo sprintf("<i class='icon fa fa-%s'></i>\n", $icon);
        echo sprintf("%s</label>\n", $label);
        echo sprintf("<div class='field' style='left:%dpx;right:0px;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s'/></div>\n", $type, $id, $id);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setContent4($id, $type, $icon, $goto) {
        $width = 30;        
        echo sprintf("<div class='lineedit'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;'>\n", $width, $id);
        echo sprintf("<i class='icon fa fa-%s'></i></label>\n", $icon);
        echo sprintf("<div class='field' style='left:%dpx;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s'/></div>\n", $type, $id, $id);
        echo sprintf("<div class='goto'><i class='fa fa-%s'></i></div>\n", $goto);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setContent5($id, $type, $icon, $label, $width, $goto) {
        echo sprintf("<div class='lineedit'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;'>\n", $width, $id);
        echo sprintf("<i class='icon fa fa-%s'></i>\n", $icon);
        echo sprintf("%s</label>\n", $label);
        echo sprintf("<div class='field' style='left:%dpx;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s'/></div>\n", $type, $id, $id);
        echo sprintf("<div class='goto'><i class='fa fa-%s'></i></div>\n", $goto);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>