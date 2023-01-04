<?php   
    class GJsTest extends GTestUi {
        //===============================================
        protected $m_scriptUi;
        //===============================================
        public function __construct($_codeName = "js") {
            parent::__construct($_codeName);
            $this->m_scriptUi   = new GScriptUi();
        }
        //===============================================
        public function run() {
            echo sprintf("<!DOCTYPE html>\n");
            echo sprintf("<html>\n");
            echo sprintf("<head>\n");
            $this->m_scriptUi->run();
            echo sprintf("</head>\n");
            echo sprintf("<body>\n");
            echo sprintf("<xmp style='
                font-family: courier;
                font-size: 12pt;
            ' id='JsConsole'></xmp>\n");
            echo sprintf("<input type='hidden' id='JsData' value='%s'/>\n", $this->serialize());
            echo sprintf("<script>call_server('test');</script>\n");
            echo sprintf("</body>\n");
            echo sprintf("</html>\n");
        }
        //===============================================
    }
?>