<?php   
    class GObject {
        //===============================================
        protected $dom = null;
        //===============================================
        public function __construct() {

        }
        //===============================================
        public function createDoms() {
            $this->dom = new GXml();
            $this->dom->createDocFile("data/xml", "app.xml");
        }
        //===============================================
        public function getItem($code, $key) {
            $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/%s", $code, $key));
            $this->dom->getNodeIndex(0);
            $lData = $this->dom->getNodeValue();
            return $lData;
        }
        //===============================================
        public function getItem2($code, $key, $index) {
            $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]/%s", $code, $index + 1, $key));
            $this->dom->getNodeIndex(0);
            $lData = $this->dom->getNodeValue();
            return $lData;
        }
        //===============================================
        public function getItem3($code, $key, $index) {
            $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/%s[position()=%d]", $code, $key, $index + 1));
            $this->dom->getNodeIndex(0);
            $lData = $this->dom->getNodeValue();
            return $lData;
        }
        //===============================================
        public function countItem($code) {
            $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data", $code));
            $lData = $this->dom->countXPath();
            return $lData;
        }
        //===============================================
    }
?>