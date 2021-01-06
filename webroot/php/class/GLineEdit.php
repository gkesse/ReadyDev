<?php   
//===============================================
class GLineEdit extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function lineEdit($id, $type, $holder) {
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<div class='field' style='left:0px;right:0px;'>\n");
        echo sprintf("<input type='%s' id='%s' name='%s' placeholder='%s'/></div>\n", $type, $id, $id, $holder);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function lineEdit2($id, $type, $icon, $holder) {
        $width = 30;        
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;'>\n", $id, $width);
        echo sprintf("<i class='icon fa fa-%s'></i></label>\n", $icon);
        echo sprintf("<div class='field' style='left:%dpx;right:0px;'>\n", $width);
        echo sprintf("<input class='input' style='padding:0px 10px;' type='%s' id='%s' name='%s' placeholder='%s'/></div>\n", $type, $id, $id, $holder);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function lineEdit3($id, $type, $icon, $goto, $holder) {
        $width = 30;        
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;'>\n", $id, $width);
        echo sprintf("<i class='icon fa fa-%s'></i></label>\n", $icon);
        echo sprintf("<div class='field' style='left:%dpx;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s' placeholder='%s'/></div>\n", $type, $id, $id, $holder);
        echo sprintf("<div class='goto'><i class='fa fa-%s'></i></div>\n", $goto);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function lineEdit4($id, $type, $icon, $goto, $holder) {
        $width = 30;        
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;'>\n", $id, $width);
        echo sprintf("<i class='icon fa fa-%s'></i></label>\n", $icon);
        echo sprintf("<div class='field' style='left:%dpx;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s' placeholder='%s'/></div>\n", $type, $id, $id, $holder);
        echo sprintf("<div class='goto' style='background-color:transparent;'><i class='fa fa-%s'></i></div>\n", $goto);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function lineEdit5($id, $type, $label, $width) {
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;padding-left:10px;'>\n", $id, $width);
        echo sprintf("%s</label>\n", $label);
        echo sprintf("<div class='field' style='left:%dpx;right:0px;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s'/></div>\n", $type, $id, $id);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function lineEdit6($id, $type, $icon, $label, $width) {
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;'>\n", $id, $width);
        echo sprintf("<i class='icon fa fa-%s'></i>\n", $icon);
        echo sprintf("%s</label>\n", $label);
        echo sprintf("<div class='field' style='left:%dpx;right:0px;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s'/></div>\n", $type, $id, $id);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function lineEdit7($id, $type, $icon, $label, $width, $goto) {
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;'>\n", $id, $width);
        echo sprintf("<i class='icon fa fa-%s'></i>\n", $icon);
        echo sprintf("%s</label>\n", $label);
        echo sprintf("<div class='field' style='left:%dpx;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s'/></div>\n", $type, $id, $id);
        echo sprintf("<div class='goto'><i class='fa fa-%s'></i></div>\n", $goto);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function lineEdit8($id, $type, $icon, $label, $width, $goto) {
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;'>\n", $id, $width);
        echo sprintf("<i class='icon fa fa-%s'></i>\n", $icon);
        echo sprintf("%s</label>\n", $label);
        echo sprintf("<div class='field' style='left:%dpx;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s'/></div>\n", $type, $id, $id);
        echo sprintf("<div class='goto' style='background-color:transparent;'><i class='fa fa-%s'></i></div>\n", $goto);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>