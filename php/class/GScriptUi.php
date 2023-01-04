<?php   
    class GScriptUi extends GObjectUi {
        //===============================================
        public function __construct($_codeName = "script") {
            parent::__construct($_codeName);
            $this->loadDom(__CLASS__);
        }
        //===============================================
        public function run() {
            $lCount = $this->m_dom->countItem("scripts");
            for($i = 0; $i < $lCount; $i++) {
                $lScript = $this->m_dom->getItem2("scripts", $i);
                echo sprintf("<script src='%s'></script>\n", $lScript);
            }
        }
        //===============================================
    }
?>