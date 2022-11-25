<?php   
    class GCode extends GXml {
        //===============================================
        public function __construct() {
            parent::__construct();
        }
        //===============================================
        public function createDatas() {
            if(!$this->getDatas()) {
                $this->createNodePath("/rdv/datas");
            }
            return true;
        }
        //===============================================
        public function createCode($_code) {
            if(!$this->getCode($_code)) {
                $this->createDatas();
                $this->createNode("data");
                $this->next();
                $this->createNode("code");
                $this->next();
                $this->setValue($_code);
                $this->getCode($_code);
            }
            return true;
        }
        //===============================================
        public function createRequest($_modules, $_method) {
            $this->addData("manager", "module", $_modules);
            $this->addData("manager", "method", $_method);
            return true;
        }
        //===============================================
        public function countMap($_code) {
            $lData = $this->countNode(sprintf("/rdv/datas/data[code='%s']/map/data", $_code));
            return $lData;
        }
        //===============================================
        public function addData($_code, $_key, $_value, $_isCData = false) {
            if($_value == "") return false;
            $this->createCode($_code);
            if(!$this->getKey($_code, $_key)) {
                $this->createNode($_key);
                $this->next();
            }
            $this->setValue($_value, $_isCData);
            return true;
        }
        //===============================================
        public function addMap($_code, $_map) {
            if(count($_map) == 0) return false;
            $this->createCode($_code);
            if(!$this->getCode($_code, "map")) {
                $this->createNode("map");
                $this->next();
            }
            for($i = 0; $i < count($_map); $i++) {
                $lObj = $_map[$i];
                $lData = $lObj->serialize($lObj->getCodeName());
                $lDom = new GCode();
                $lDom->loadXml($lData);
                $lData = $lDom->toData();
                $this->loadNode($lData);
            }
            return true;
        }
        //===============================================
        public function getDatas() {
            return $this->getNode("/rdv/datas");
        }
        //===============================================
        public function getCode($_code) {
            return $this->getNode(sprintf("/rdv/datas/data[code='%s']", $_code));
        }
        //===============================================
        public function getKey($_code, $_key) {
            return $this->getNode(sprintf("/rdv/datas/data[code='%s']/%s", $_code, $_key));
        }
        //===============================================
        public function getData($_code, $_key) {
            if(!$this->getKey($_code, $_key)) return "";
            return $this->getValue();
        }
        //===============================================
        public function getMap($_code, &$_map, $_obj) {
            $lCount = $this->countMap($_code);
            for($i = 0; $i < $lCount; $i++) {
                $this->getItem($_code, $i);
                $lData = $this->toNode();
                $lData = sprintf("<rdv>%s</rdv>", $lData);
                $lDom = new GCode();
                $lDom->createDoc();
                $lDom->createDatas();
                $lDom->loadNode($lData);
                $lData = $lDom->toString();
                $lObj = clone $_obj;
                $lObj->deserialize($lData, $lObj->getCodeName());
                array_push($_map, $lObj);
            }
            return true;
        }
        //===============================================
        public function getItem($_code, $_index) {
            return $this->getNode(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", $_code, $_index + 1));
        }
        //===============================================
        public function loadData($_data) {
            $_data = trim($_data);
            if($_data == "") return true;
            $lDom = new GCode();
            $lDom->loadXml($_data);
            $lData = $lDom->toData();
            $this->createDatas();
            $this->loadNode($lData);
            return true;
        }
        //===============================================
        public function toData() {
            $lData = "";
            if($this->getDatas()) {
                $lData = $this->toNode();
            }
            return $lData;
        }
        //===============================================
    }
?>        