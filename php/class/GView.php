<?php   
    class GView {
        private static $m_instance = null;
        private $m_page;
        private $m_defaultView;
        //===============================================
        private function __construct() {
            $this->setDefaultView(250);
            GSQLite::Instance()->setDatabase("data/sqlite/database.dat");
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GView();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function setDefaultView($defaultView) {
            $this->m_defaultView = $defaultView;
        }
        //===============================================
        public function getView($page) {
            $lKey = "JSON";
            if($lKey == "SQLITE") return $this->getViewSQLite($page);
            else if($lKey == "JSON") return $this->getViewJson($page);
        }
        //===============================================
        public function showViews() {
            GSQLite::Instance()->queryShow("
            select * from VIEWS
            ", 1);
        }
        //===============================================
        public function getViewOut() {
            $lView = GSQLite::Instance()->queryValue("
            select VIEW_COUNT from VIEWS
            where VIEW_KEY = 'accueil'
            ");
            echo $lView;
            exit;
        }
        //===============================================
        public function getViewSQLite($page) {
          $this->viewUpdate($page);
          return $this->viewSelect($page);
        }
        //===============================================
        public function getViewJson($page) {
            $m_file = "data/json/views.json";
            $m_data = GJson::Instance()->getData($m_file);
            $m_page = strtolower($page);
            
            if(!isset($m_data[$m_page])) {
                $m_data[$m_page] = $this->m_defaultView; 
            }
            else {
                if($m_data[$m_page] < $this->m_defaultView) $m_data[$m_page] = $this->m_defaultView;
            }
            
            $m_data[$m_page]++;
            ksort($m_data);
            
            GJson::Instance()->saveData($m_file, $m_data);
            return $m_data[$m_page];
        }
        //===============================================
        public function viewUpdate($page) {
            if($this->viewCheck($page)) $this->viewIncrement($page);
            else $this->viewInsert($page);
        }
        //===============================================
        public function viewCheck($page) {
            $lPage = strtolower($page);
            $lCount = GSQLite::Instance()->queryValue("
                select count(*) from VIEWS
                where VIEW_KEY='$lPage'
            ");
            return $lCount;
        }
        //===============================================
        public function viewSelect($page) {
            $lPage = strtolower($page);
            $lCount = GSQLite::Instance()->queryValue("
                select VIEW_COUNT from VIEWS
                where VIEW_KEY='$lPage'
            ");
            return $lCount;
        }
        //===============================================
        public function viewInsert($page) {
            $lPage = strtolower($page);
            GSQLite::Instance()->queryWrite("
                insert into VIEWS (VIEW_KEY, VIEW_COUNT)
                values ('$lPage', $this->m_defaultView)
            ");
        }
        //===============================================
        public function viewIncrement($page) {
            $lPage = strtolower($page);
            GSQLite::Instance()->queryWrite("
                update VIEWS
                set VIEW_COUNT = VIEW_COUNT + 1
                where VIEW_KEY='$lPage'
            ");
        }
        //===============================================
    }
?>