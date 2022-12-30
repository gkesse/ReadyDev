<?php   
    class GObject {
        //===============================================
        protected $dom = null;
        protected $map = array();
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
        public function getData($code, $key, $isCData = false) {
            return $this->dom->getData($code, $key, $isCData);
        }
        //===============================================
        public function getData2($code, $index, $isCData = false) {
            return $this->dom->getItem2($code, $index, $isCData);            
        }
        //===============================================
        public function getData3($code, $key, $index, $isCData = false) {
            return $this->dom->getData3($code, $key, $index, $isCData);
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
        public function printData($data) {
            echo sprintf("<xmp style='
                font-family: courier;
                font-size: 12pt;
            '>%s</xmp>\n", $data);
        }
        //===============================================
    }
?>