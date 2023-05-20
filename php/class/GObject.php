<?php   
    class GObject {
        //===============================================
        protected $m_index = 0;
        protected $m_parentIndex = 0;
        protected $m_map = array();
        //===============================================
        private $m_logs = null;
        private $m_template = null;
        //===============================================
        public function __construct() {
            $this->m_logs = new GLog();
            $this->m_template = new GTemplate();
        }
        //===============================================
        public function clone() {
            return new GObject();
        }
        //===============================================
        public function setObj($_obj) {
            $this->m_index = $_obj->m_index;
            $this->m_parentIndex = $_obj->m_parentIndex;
        }
        //===============================================
        public function size() {
            return count($this->m_map);
        }
        //===============================================
        public function loadFromMap($_index) {
            if($_index >= 1 && $_index <= $this->size()) {
                $lObj = $this->m_map[$_index - 1];
                $this->setObj($lObj);
            }
        }
        //===============================================
        public function loadToMap($_index) {
            if($_index >= 1 && $_index <= $this->size()) {
                $lObj = $this->m_map[$_index - 1];
                $lObj->setObj($this);
            }
        }
        //===============================================
        public function findObj($_obj) {
            for($i = 0; $i < $this->size(); $i++) {
                $lObj = $this->m_map[$i];
                if($lObj->isEqual($_obj)) {
                    return $i + 1;
                }
            }
            return 0;
        }
        //===============================================
        public function findMap($_parent) {
            $lMap = $this->clone();
            for($i = 0; $i < $this->size(); $i++) {
                $lObj = $this->m_map[$i];
                if($lObj->m_parentIndex == $_parent->m_index) {
                    $lClone = $this->clone();
                    $lClone->setObj($lObj);
                    $lMap->m_map[] = $lClone;
                }
            }
            return $lMap;
        }
        //===============================================
        public function isAdmin() {
            if($this->getPageId() != "/home/admin") return false;
            return true;
        }
        //===============================================
        public function isLogin() {
            return $this->isTestEnv();
        }
        //===============================================
        public function isEmpty() {
            return $this->isEqual($this->clone());
        }
        //===============================================
        public function isTestEnv() {
            return ($this->toProjectEnv() == "TEST");
        }
        //===============================================
        public function toProjectEnv() {
            $lEnv = getenv("GPROJECT_ENV");
            return $lEnv;
        }
        //===============================================
        public function getHomePage() {
            return "/home";
        }
        //===============================================
        public function getTemplate() {
            return $this->m_template;
        }
        //===============================================
        public function addError($_msg) {
            $this->m_logs->addError($_msg);
        }
        //===============================================
        public function addLog($_msg) {
            $this->m_logs->addLog($_msg);
        }
        //===============================================
        public function addData($_msg) {
            $this->m_logs->addData($_msg);
        }
        //===============================================
        public function addLogs($_logs) {
            $this->m_logs->addLogs($_logs);
        }
        //===============================================
        public function getLogs() {
            return $this->m_logs;
        }
        //===============================================
        public function loadLogs($_data) {
            return $this->m_logs->deserialize($_data);
        }
        //===============================================
        public function toLogs() {
            return $this->m_logs->serialize();
        }
        //===============================================
        public function hasErrors() {
            return $this->m_logs->hasErrors();
        }
        //===============================================
        public function hasLogs() {
            return $this->m_logs->hasLogs();
        }
        //===============================================
        public function showLogs() {
            return $this->m_logs->showLogs();
        }
        //===============================================
        public function printLogs() {
            $this->m_logs->printLogs();
        }
        //===============================================
        public function getPageId() {
            $lPageId = $this->getGet("pageid");
            if($lPageId != "") {
                if(substr($lPageId, -1) == "/") {
                    $lPageId = substr($lPageId, 0, -1);
                }
            }
            $lPageId = sprintf("/%s", $lPageId);
            return $lPageId;
        }
        //===============================================
        public function getUrl() {
            $lUrl = "";
            $lUrl .= "https://";
            $lUrl .= $_SERVER['HTTP_HOST'];
            $lUrl .=  $_SERVER['REQUEST_URI'];
            return $lUrl;
        }
        //===============================================
        public function getPath($_path) {
            $lUrl = "";
            $lUrl .= $_SERVER['DOCUMENT_ROOT'];
            $lUrl .=  $_path;
            return $lUrl;
        }
        //===============================================
        public function getGet($key, $defaultValue = "") {
            if(!isset($_GET[$key])) return $defaultValue;
            return $_GET[$key];
        }
        //===============================================
        public function getEnv($key, $defaultValue = "") {
            $lEnv = getenv($key);
            if($lEnv == false) return $defaultValue;
            return $lEnv;
        }
        //===============================================
        public function redirectUrl($_url) {
            $lLocation = sprintf("Location: %s", $_url);
            header($lLocation);
            exit;
        }
        //===============================================
        public function redirectPost() {
            if(!empty($_POST) OR !empty($_FILES)) {
                $_SESSION["_SAVE_POST_"] = $_POST;
                $_SESSION["_SAVE_FILES_"] = $_FILES;
                $lUrl = $_SERVER["REQUEST_URI"];
                header("Location: " . $lUrl);
                exit;
            }
            if(isset($_SESSION["_SAVE_POST_"])) {
                $_POST = $_SESSION["_SAVE_POST_"];
                $_FILES = $_SESSION["_SAVE_FILES_"];
                unset($_SESSION["_SAVE_POST_"], $_SESSION["_SAVE_FILES_"]);
            }
        }
        //===============================================
        public function redirectHomePage() {
            $lPageId = $this->getPageId();
            $lRedirectOk = false;
            
            if($lPageId == "/") {
                $lRedirectOk = true;
            }
            else if($lPageId == "/home/admin") {
                if(!$this->isLogin()) {
                    $lRedirectOk = true;
                }
            }
            else if($lPageId == "/home/connexion") {
                if($this->isLogin()) {
                    $lRedirectOk = true;
                }
            }
            
            if($lRedirectOk) {
                $lHome = $this->getHomePage();
                if($lHome != "" && $lHome != "/") {
                    $this->redirectUrl($lHome);
                }
            }
        }
        //===============================================
        public function print() {
            echo sprintf("<xmp style='text-align: left;'>%s</xmp>\n", $this->serialize());
        }
        //===============================================
        public function isEqual($_obj) {return false;}
        public function serialize($_code = "object") {return "";}
        public function deserialize($_data, $_code = "object") {}
        //===============================================
    }
?>