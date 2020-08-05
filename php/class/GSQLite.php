<?php   
    class GSQLite {
        //===============================================
        private static $m_instance = null;
        private $m_pdo = null;
        private $m_database;
        private $m_page;
        private $m_defaultView;
        //===============================================
        private function __construct() {
            $this->setDatabase("data/sqlite/database.dat");
            $this->setPage("Tutoriels");
            $this->setDefaultView(250);
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GSQLite();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function setDatabase($database) {
            $this->m_database = GFile::Instance()->getPath($database);
        }
        //===============================================
        public function setPage($page) {
            $this->m_page = strtolower($page);
        }
        //===============================================
        public function setDefaultView($defaultView) {
            $this->m_defaultView = $defaultView;
        }
        //===============================================
        public function connect() {
            $lUrl = "sqlite:$this->m_database";
            $this->m_pdo = new PDO($lUrl);
            $this->m_pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->m_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        //===============================================
        public function close() {
            $this->m_pdo = null;
        }
        //===============================================
        public function viewUpdate() {
            if($this->viewCheck()) $this->viewIncrement();
            else $this->viewInsert();
        }
        //===============================================
        public function viewCheck() {
            $lCount = 0;
            $lCheck = 0;
            $this->connect();
            $lResult = $this->m_pdo->query("
                select count(*) iCOUNT from VIEWS
                where VIEW_KEY='$this->m_page'
            ");
            foreach($lResult as $lRow) {
                $lCheck = $lRow["iCOUNT"];
                break;
            }
            if($lCount >= 1) $lCheck = 1;
            $this->close();
            return $lCheck;
        }
        //===============================================
        public function viewSelect() {
            $lCount = 0;
            $this->connect();
            $lResult = $this->m_pdo->query("
                select VIEW_COUNT from VIEWS
                where VIEW_KEY='$this->m_page'
            ");
            foreach($lResult as $lRow) {
                $lCount = $lRow["VIEW_COUNT"];
                break;
            }
            $this->close();
            return $lCount;
        }
        //===============================================
        public function viewInsert() {
            $this->connect();
            $this->m_pdo->query("
                insert into VIEWS (VIEW_KEY, VIEW_COUNT)
                valuse ('$this->m_page', $this->m_defaultView)
            ");
            $this->close();
        }
        //===============================================
        public function viewIncrement() {
            $this->connect();
            $this->m_pdo->query("
                update VIEWS
                set VIEW_COUNT = VIEW_COUNT + 1
                where VIEW_KEY='$this->m_page'
            ");
            $this->close();
        }
        //===============================================
    }
?>