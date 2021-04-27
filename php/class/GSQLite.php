<?php   
    class GSQLite {
        //===============================================
        private static $m_instance = null;
        private $m_pdo = null;
        //===============================================
        private function __construct() {
            $this->queryWrite(sprintf("
            create table if not exists views (
            view_key text,
            view_count integer
            )"));
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GSQLite();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function connect() {
            $lApp = GManager::Instance()->getData()->app;
            $lUrl = "sqlite:".$_SERVER["DOCUMENT_ROOT"].$lApp->sqlite_db_path;
            $this->m_pdo = new PDO($lUrl);
            $this->m_pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->m_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        //===============================================
        public function close() {
            $this->m_pdo = null;
        }
        //===============================================
        public function showTables() {
            $this->queryShow("
            select name 
            from sqlite_master 
            where type='table'
            ", 1);
        }
        //===============================================
        public function queryShow($sqlIn, $onHeaderIn) {
            $this->connect();
            $lResult = $this->m_pdo->query($sqlIn);
            $lHeaderUi = "<div>";
            foreach($lResult as $lRow) {
                $lHeaderSepOn = 0;
                $lDataSepOn = 0;
                foreach($lRow as $lKey => $lValue) {
                    if($onHeaderIn == 1) {
                        if($lHeaderSepOn != 0) echo " | ";
                        $lHeaderSepOn = 1;
                        echo "$lKey";
                    }
                }
                if($onHeaderIn == 1) {
                    $onHeaderIn = 0;
                    echo "<br>";
                }
                foreach($lRow as $lKey => $lValue) {
                    if($lDataSepOn != 0) echo " | ";
                    $lDataSepOn = 1;
                    echo "$lValue";
                }
                echo "<br>";
            }
            $this->close();
            exit;
        }
        //===============================================
        public function queryWrite($sqlIn) {
            $this->connect();
            $this->m_pdo->query($sqlIn);
            $this->close();
        }
        //===============================================
        public function queryValue($sqlIn) {
            $this->connect();
            $lResult = $this->m_pdo->query($sqlIn);
            $lData = "";
            foreach($lResult as $lRow) {
                foreach($lRow as $lKey => $lValue) {
                    $lData = $lValue;
                    break;
                }
            }
            $this->close();
            return $lData;
        }
        //===============================================
        public function queryCol($sqlIn) {
            $this->connect();
            $lResult = $this->m_pdo->query($sqlIn);
            $lDataMap = array();
            foreach($lResult as $lRow) {
                foreach($lRow as $lKey => $lValue) {
                    array_push($lDataMap, $lValue);
                    break;
                }
            }
            $this->close();
            return $lDataMap;
        }
        //===============================================
        public function queryRow($sqlIn) {
            $this->connect();
            $lResult = $this->m_pdo->query($sqlIn);
            $lDataMap = array();
            foreach($lResult as $lRow) {
                foreach($lRow as $lKey => $lValue) {
                    array_push($lDataMap, $lValue);
                }
                break;
            }
            $this->close();
            return $lDataMap;
        }
        //===============================================
        public function queryMap($sqlIn) {
            $this->connect();
            $lResult = $this->m_pdo->query($sqlIn);
            $lDataMap = array();
            foreach($lResult as $lRow) {
                $lData = array();
                foreach($lRow as $lKey => $lValue) {
                    array_push($lData, $lValue);
                }
                array_push($lDataMap, $lData);
            }
            $this->close();
            return $lDataMap;
        }
        //===============================================
    }
?>
