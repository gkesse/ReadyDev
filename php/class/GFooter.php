<?php   
    class GFooter extends GObject {
        //===============================================
        private $m_category;
        private $m_model;
        private $m_id;
        private $m_data;
        //===============================================
        public function __construct() {
            parent::__construct();
        }
        //===============================================
        public function addScriptJs($_data) {
            $lObj = new GFooter();
            $this->m_category = "script";
            $this->m_model = "js";
            $this->m_data = $_data;
            $this->m_map[] = $lObj;
        }
        //===============================================
        public function initScriptJs() {
            $this->addScriptJs("/js/functions.js");
            $this->addScriptJs("/js/class/GObject.js");
            $this->addScriptJs("/js/class/GServer.js");
            $this->addScriptJs("/js/script.js");
            $this->addScriptJs("/js/class/GDefine.js");
            $this->addScriptJs("/js/class/GLoader.js");
            $this->addScriptJs("/js/class/GLog.js");
            $this->addScriptJs("/js/class/GXml.js");
            $this->addScriptJs("/js/class/GCode.js");
            $this->addScriptJs("/js/class/GAjax.js");
            $this->addScriptJs("/js/class/GLogUi.js");
            $this->addScriptJs("/js/class/GKeyEvent.js");
            $this->addScriptJs("/js/class/GTitle.js");
            $this->addScriptJs("/js/class/GBullet.js");
            $this->addScriptJs("/js/class/GSkill.js");
            $this->addScriptJs("/js/class/GLine.js");
            $this->addScriptJs("/js/class/GText.js");
            $this->addScriptJs("/js/class/GGraduation.js");
            $this->addScriptJs("/js/class/GNavigation.js");
            $this->addScriptJs("/js/class/GParallax.js");
            $this->addScriptJs("/js/class/GTemplate.js");
            $this->addScriptJs("/js/class/GHeader.js");
            $this->addScriptJs("/js/class/GPath.js");
            $this->addScriptJs("/js/class/GImage.js");
            $this->addScriptJs("/js/class/GComboBox.js");
            $this->addScriptJs("/js/class/GDropDown.js");
            $this->addScriptJs("/js/class/GRadioButton.js");
            $this->addScriptJs("/js/class/GModule.js");
            $this->addScriptJs("/js/class/GConfirm.js");
            $this->addScriptJs("/js/class/GForm.js");
            $this->addScriptJs("/js/class/GSearch.js");
            $this->addScriptJs("/js/class/GTable.js");
            $this->addScriptJs("/js/class/GDate.js");
            $this->addScriptJs("/js/class/GEnv.js");
            $this->addScriptJs("/js/class/GSite.js");
            $this->addScriptJs("/js/class/GPage.js");
            $this->addScriptJs("/js/class/GStore.js");
            $this->addScriptJs("/js/class/GManager.js");
            $this->addScriptJs("/js/class/GQuery.js");
            $this->addScriptJs("/js/class/GSitemap.js");
            $this->addScriptJs("/js/class/GMenu.js");
            $this->addScriptJs("/js/class/GEditor.js");
            $this->addScriptJs("/js/class/GTest.js");
            $this->addScriptJs("/js/class/GDomTest.js");
            $this->addScriptJs("/js/class/GXmlTest.js");
            $this->addScriptJs("/js/class/GTestUi.js");
        }
        //===============================================
        public function run() {
            $this->initScriptJs();
            
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