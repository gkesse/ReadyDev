<?php   
    class GTest extends GObject {
        //===============================================
        public function __construct() {
            parent::__construct();            
        }
        //===============================================
        public function run() {
            $this->createHeader();
            $this->createFooter();
        }
        //===============================================
        public function createHeader() {
            echo sprintf("%s<br>", __METHOD__);           
        }
        //===============================================
        public function createFooter() {
            echo sprintf("%s<br>", __METHOD__);            
        }
        //===============================================
    }
?>