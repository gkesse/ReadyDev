<?php   
//===============================================
class GAddressKey extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $lMap = explode("/", $lApp->page_id);
        $lHref = "/";
        for($i = 0; $i < count($lMap); $i++) {
            if($i != 0) {
                echo sprintf("<i>></i>\n");
            }
            $lKey = $lMap[$i];
            if($i != 0) {$lHref .= "/";}
            $lHref .= $lKey;
            echo sprintf("<a href='%s'><div style='display: inline-block;'>%s</div></a>\n", $lHref, $lKey);
        }
    }
    //===============================================
}
//===============================================
?>