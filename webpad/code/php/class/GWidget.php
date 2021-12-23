<?php   
//===============================================
class GWidget extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    //===============================================
    public function createDom() {

    }
    //===============================================
    public function getPageId() {
        $lPageId = $_GET["pageid"];
        if($lPageId == "") {
            $lPageId = "home";
        }
        if(substr($lPageId, -1) == '/') {
            $lPageId = substr($lPageId, 0, -1);
        }
        return $lPageId;
    }
    //===============================================
    public function show() {}
    public function getPageTitle() {return "";}
    //===============================================
}
//===============================================
?>
