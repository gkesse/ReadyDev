<?php   
    class GObject {
        //===============================================
        public function __construct() {

        }
        //===============================================
        public function clone() {
            return new GObject();
        }
        //===============================================
        public function clearMap(&$map) {
            $map = array();
            return true;
        }
        //===============================================
    }
?>