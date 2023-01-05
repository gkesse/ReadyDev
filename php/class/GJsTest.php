<?php   
    class GJsTest extends GTestUi {
        //===============================================
        public function __construct($_codeName = "js") {
            parent::__construct($_codeName);
        }
        //===============================================
        public function run() {
            echo sprintf("<button class='Button4' type='button' title=\"Exécuter le test\"\n");
            echo sprintf("onclick='call_server(\"test\");'><i class='fa fa-home'></i> Run Test</button>\n");
            echo sprintf("<input type='hidden' id='PhpJsData' value='%s'/>\n", $this->serialize());
        }
        //===============================================
    }
?>