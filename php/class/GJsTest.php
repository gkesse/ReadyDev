<?php   
    class GJsTest extends GTestUi {
        //===============================================
        public function __construct($_codeName = "js") {
            parent::__construct($_codeName);
        }
        //===============================================
        public function run() {
            echo sprintf("<xmp style='
                font-family: courier;
                font-size: 12pt;
            ' id='JsConsole'></xmp>\n");
            echo sprintf("<input type='hidden' id='JsData' value='%s'/>\n", $this->serialize());
            echo sprintf("<script>call_server('test');</script>\n");
        }
        //===============================================
    }
?>