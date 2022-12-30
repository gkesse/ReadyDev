<?php   
    class GObjectUi extends GObject {
        //===============================================
        protected $m_app;
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->m_app = GApp::Instance();
        }
        //===============================================
    }
?>