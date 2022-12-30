<?php   
    class GTestUi extends GObjectUi {
        //===============================================
        protected $m_module;
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->m_module     = $this->m_app->getItem("test", "module");
        }
        //===============================================
        public function run() {
            if($this->m_module == "prod") {
                $this->runProd();
            }
            else {
                $this->runDefault();
            }
        }
        //===============================================
        public function runDefault() {
            $this->printData("Erreur le processus est inconnu.");
        }
        //===============================================
        public function runProd() {
            $lReadyUi = new GReadyUi();
            $lReadyUi->run();
        }
        //===============================================
    }
?>