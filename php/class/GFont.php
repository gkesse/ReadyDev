<?php   
    class GFont extends GObject {
        //===============================================
        public function __construct() {
        
        }
        //===============================================
        public function serialize($_code = "font") {
            $lDom = new GCode();
            $lDom->createDoc();
        }
        //===============================================
        public function deserialize($_data, $_code = "font") {
            
        }
        //===============================================
    }
?>