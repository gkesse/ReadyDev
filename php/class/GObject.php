<?php   
    class GObject {
        //===============================================
        protected $m_dom = null;
        protected $m_codeName = "";
        //===============================================
        public function __construct($_code = "object") {
            $this->m_codeName = $_code;
        }
        //===============================================
        public function createDoms() {
            $lPath = new GPath();
            $this->m_dom = new GXml();
            $this->m_dom->loadFile($lPath->getPath("data/xml", "app.xml"));
        }
        //===============================================
        public function getCodeName() {
            return $this->m_codeName;
        }
        //===============================================
        public function serialize($_code = "object") {return "";}
        public function deserialize($_data, $_code = "object") {}
        //===============================================
    }
?>