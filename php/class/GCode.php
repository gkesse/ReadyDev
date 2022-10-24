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
        public function addData($_code, $_key, $_value, $_isCData = false) {
            if($_value == "") return false;
            $this->createCode($_code);
            if(!$this->getCode($_code, $_key)) {
                $this->createNode($_key);
                $this->next();
            }
            $this->setValue($_value, $_isCData);
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
    }
?>        