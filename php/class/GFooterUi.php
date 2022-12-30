<?php   
    class GFooterUi extends GObjectUi {
        //===============================================
        public function __construct() {
            parent::__construct();
        }
        //===============================================
        public function run() {
            echo sprintf("</div>\n");
            $this->onNetwork();
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            $this->loadScripts();
            echo sprintf("</body>\n");
            echo sprintf("</html>\n");
        }
        //===============================================
        public function onNetwork() {            
            echo sprintf("<footer class='Footer'>\n");
            echo sprintf("<div class='Row2'>\n");
            echo sprintf("<div>Réseaux Sociaux - Réjoignez-nous</div>\n");            
            
            $lCount         = $this->m_app->countItem("networks");
            $lCopyright     = $this->m_app->getItem("copyright", "text");
            $lStartDate     = $this->m_app->getItem("copyright", "date");
            $lTitle         = $this->m_app->getItem("copyright", "title");
            $lCurrentDate   = date("Y");
            
            for($i = 0; $i < $lCount; $i++) {
                $lIcon = $this->m_app->getItem3("networks", "icon", $i);
                $lLink = $this->m_app->getItem3("networks", "link", $i);
                
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
        public function loadScripts() {
            $lCount = $this->m_app->countItem("scripts");
            for($i = 0; $i < $lCount; $i++) {
                $lScript = $this->m_app->getItem2("scripts", $i);
                echo sprintf("<script src='%s'></script>\n", $lScript);
            }
        }
        //===============================================
    }
?>