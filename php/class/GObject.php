<?php   
    class GObject {
        //===============================================
        protected $dom = null;
        //===============================================
        public function __construct() {

        }
        //===============================================
        public function createDoms() {
            $this->dom = new GCode();
            $this->dom->loadFile("data/xml", "app.xml");
        }
        //===============================================
        public function createObj() {
            return new GObject();
        }
        //===============================================
        public function getItem($code, $key, $isCData = false) {
            return $this->dom->getItem($code, $key, $isCData);
        }
        //===============================================
        public function getItem2($code, $index, $isCData = false) {
            return $this->dom->getItem2($code, $index, $isCData);            
        }
        //===============================================
        public function getItem3($code, $key, $index, $isCData = false) {
            return $this->dom->getItem3($code, $key, $index, $isCData);
        }
        //===============================================
        public function getItemC($code, $category, $key, $isCData = false) {
            return $this->dom->getItemC($code, $category, $key, $isCData);
        }
        //===============================================
        public function getList($code, &$obj, $isCData = false) {
            $this->dom->getList($code, $obj, $isCData);
        }
        //===============================================
        public function getListC($code, $category, $key, $isCData = false) {
            return $this->dom->getListC($code, $category, $key, $isCData);
        }
        //===============================================
        public function countItem($code) {
            return $this->dom->countItem($code);
        }
        //===============================================
    }
?>