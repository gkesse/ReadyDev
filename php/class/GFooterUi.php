<?php   
    class GFooterUi extends GObject {
        //===============================================
        protected $m_scriptUi;
        //===============================================
        public function __construct($_codeName = "footer") {
            parent::__construct($_codeName);
            $this->loadDom(__CLASS__);
            $this->m_scriptUi   = new GScriptUi();
        }
        //===============================================
        public function run() {
            echo sprintf("</div>\n");
            $this->onNetworks();
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            $this->m_scriptUi->run();
            echo sprintf("</body>\n");
            echo sprintf("</html>\n");
        }
        //===============================================
        public function onNetworks() {            
            echo sprintf("<footer class='Footer'>\n");
            echo sprintf("<div class='Row2'>\n");
            echo sprintf("<div>Réseaux Sociaux - Réjoignez-nous</div>\n");            
            
            $lCount         = $this->m_dom->countItem("networks");
            $lCopyright     = $this->m_dom->getItem("copyright", "text");
            $lStartDate     = $this->m_dom->getItem("copyright", "date");
            $lTitle         = $this->m_dom->getItem("copyright", "title");
            $lCurrentDate   = date("Y");
            
            for($i = 0; $i < $lCount; $i++) {
                $lIcon = $this->m_dom->getItem3("networks", "icon", $i);
                $lLink = $this->m_dom->getItem3("networks", "link", $i);
                
                echo sprintf("<a href='%s'>\n", $lLink);
                echo sprintf("<i class='Network %s'></i>\n", $lIcon);
                echo sprintf("</a>\n");
            }
            
            echo sprintf("</div>\n");
            echo sprintf("<div class='Row2'>\n");
            echo sprintf("<div>\n");
            echo sprintf("<i class='fa fa-copyright'></i>\n");
            echo sprintf("<span>%s - %s | %s</span>\n", $lStartDate, $lCurrentDate, $lTitle);
            echo sprintf("</div>\n");
            echo sprintf("<div>%s</div>\n", $lCopyright);
            echo sprintf("</div>\n");
            echo sprintf("</footer>\n");
        }
        //===============================================
    }
?>