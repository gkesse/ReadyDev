<?php   
    class GXmlTest extends GTestUi {
        //===============================================
        public function __construct() {
            parent::__construct();
        }
        //===============================================
        public function run() {
            $this->m_headerUi->run();
            $this->runMain();
            $this->m_footerUi->run();
        }
        //===============================================
        public function runMain() {
            if($this->m_method == "") {
                $this->addError("Erreur la méthode est obligatoire.");
            }
            else if($this->m_method == "test") {
                $this->runTest();
            }
            else {
                $this->addError("Erreur la méthode est inconnue.");
            }
        }
        //===============================================
        public function runTest() {
            $this->addLog("Test XML");
        }
        //===============================================
    }
?>