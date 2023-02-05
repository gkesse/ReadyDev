<?php   
    class GFileTest extends GTestUi {
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
            $lFile = new GFile();
            $lFile->saveData("data/editor/html", "editor.php", "Bonjour tout le monde");
            $lData = $lFile->loadData("data/editor/html", "editor.php");
            $this->addData($lData);
        }
        //===============================================
    }
?>