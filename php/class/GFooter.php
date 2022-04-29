<?php   
    class GFooter extends GObject {
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->createDoms();
        }
        //===============================================
        public function run() {
            $this->onFooter();
        }
        //===============================================
        public function onFooter() {
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            $this->loadScripts();
            echo sprintf("</body>\n");
            echo sprintf("</html>\n");
        }
        //===============================================
        public function loadScripts() {
            $lCount = $this->countItem("scripts");
            for($i = 0; $i < $lCount; $i++) {
                $lScript = $this->getItem3("scripts", $i);
                echo sprintf("<script src='%s'></script>\n", $lScript);
            }
        }
        //===============================================
    }
?>