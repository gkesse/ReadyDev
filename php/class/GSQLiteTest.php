<?php   
    class GSQLiteTest extends GTestUi {
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
                $this->addError("La méthode est obligatoire.");
            }
            else if($this->m_method == "test") {
                $this->runTest();
            }
            else {
                $this->addError("La méthode est inconnue.");
            }
        }
        //===============================================
        public function runTest() {
            $lSQLite = new GSQLite();
            $lSQLite->setPath("sqlite:data/sqlite/database.dat");
            $lSQLite->setAction("read");
            $lSQLite->run();
            $this->addLogs($lSQLite->getLogs());
        }
        //===============================================
    }
?>