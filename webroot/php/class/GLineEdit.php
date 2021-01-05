<?php   
//===============================================
class GLineEdit extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function setEdit($id, $type, $holder) {
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<div class='field' style='left:0px;right:0px;'>\n");
        echo sprintf("<input type='%s' id='%s' name='%s' placeholder='%s'/></div>\n", $type, $id, $id, $holder);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setIcon($id, $type, $icon, $holder) {
        $width = 30;        
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;background-color:transparent;'>\n", $width, $id);
        echo sprintf("<i class='icon fa fa-%s'></i></label>\n", $icon);
        echo sprintf("<div class='field' style='left:%dpx;right:0px;'>\n", $width);
        echo sprintf("<input class='input' style='padding:0px 5px;' type='%s' id='%s' name='%s' placeholder='%s'/></div>\n", $type, $id, $id, $holder);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setIcon2($id, $type, $icon, $goto, $holder) {
        $width = 30;        
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;background-color:transparent;'>\n", $width, $id);
        echo sprintf("<i class='icon fa fa-%s'></i></label>\n", $icon);
        echo sprintf("<div class='field' style='left:%dpx;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s' placeholder='%s'/></div>\n", $type, $id, $id, $holder);
        echo sprintf("<div class='goto'><i class='fa fa-%s'></i></div>\n", $goto);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setLabel($id, $type, $icon, $label, $width, $holder) {
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;'>\n", $id, $width);
        echo sprintf("<i class='icon fa fa-%s'></i>\n", $icon);
        echo sprintf("%s</label>\n", $label);
        echo sprintf("<div class='field' style='left:%dpx;right:0px;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s' placeholder='%s'/></div>\n", $type, $id, $id, $holder);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setLabel2($id, $type, $icon, $label, $width, $goto, $holder) {
        echo sprintf("<div class='lineedit_id'>\n");
        echo sprintf("<label class='label' for='%s' style='min-width:%dpx;'>\n", $id, $width);
        echo sprintf("<i class='icon fa fa-%s'></i>\n", $icon);
        echo sprintf("%s</label>\n", $label);
        echo sprintf("<div class='field' style='left:%dpx;'>\n", $width);
        echo sprintf("<input class='input' type='%s' id='%s' name='%s' placeholder='%s'/></div>\n", $type, $id, $id, $holder);
        echo sprintf("<div class='goto'><i class='fa fa-%s'></i></div>\n", $goto);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>