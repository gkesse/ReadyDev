<?php   
    class GObject {
        //===============================================
        protected $m_dom = null;
        //===============================================
        public function __construct() {

        }
        //===============================================
        public function createDoms() {
            $lPath = new GPath();
            $this->m_dom = new GXml();
            $this->m_dom->loadFile($lPath->getPath("data/xml2", "app.xml"));
        }
        //===============================================
    }
?>