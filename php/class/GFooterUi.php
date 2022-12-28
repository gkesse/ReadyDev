<?php   
    class GFooterUi extends GObject {
        //===============================================
        public function __construct() {
            parent::__construct();
        }
        //===============================================
        public function run() {
            echo sprintf("</div>\n");
            $this->loadNetworks();
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            $this->loadScripts();
            echo sprintf("</body>\n");
            echo sprintf("</html>\n");
        }
        //===============================================
        public function loadNetworks() {            

        }
        //===============================================
        public function loadScripts() {

        }
        //===============================================
    }
?>