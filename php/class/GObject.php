<?php   
    class GObject {
        //===============================================
        protected $m_homePage = "";
        protected $m_pageId = "";
        protected $m_logs = null;
        protected $m_map = array();
        //===============================================
        public function __construct() {
            $this->m_logs = new GLog();
        }
        //===============================================
        public function setHomePage($_homePage) {
            $this->m_homePage = $_homePage;
        }
        //===============================================
        public function initHomePage() {
            $this->setHomePage("/home");
        }
        //===============================================
        public function findObj($_obj) {
            for($i = 0; $i < count($this->m_map); $i++) {
                $lObj = $this->m_map[$i];
                if($lObj->isEqual($_obj)) {
                    $this->setObj($this);
                    return true;
                }
            }
            return false;
        }
        //===============================================
        public function isEmpty() {
            return $this->isEqual($this->clone());
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
        public function initPageId() {
            $lPageId = $this->getGet("pageid");
            if($lPageId != "") {
                if(substr($lPageId, -1) == "/") {
                    $lPageId = substr($lPageId, 0, -1);
                }
            }
            $lPageId = sprintf("/%s", $lPageId);
            $this->m_pageId = $lPageId;
        }
        //===============================================
        public function getUrl() {
            $lUrl = "";
            $lUrl .= "http://";
            $lUrl .= $_SERVER['HTTP_HOST'];
            $lUrl .=  $_SERVER['REQUEST_URI'];
            return $lUrl;
        }
        //===============================================
        public function validate() {
            $lValidate = true;
            if(!isset($_SESSION["login"])) $lValidate = false;
            else if($_SESSION["login"]["group"] != "admin") $lValidate = false;
            
            if(!$lValidate) {
                header("Location: ".$_SESSION["lasturl"]);
            }
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
        public function print() {
            echo sprintf("<xmp style='text-align: left;'>%s</xmp>\n", $this->serialize());
        }
        //===============================================
        public function clone() {return new GObject();}
        public function setObj($_obj) {}
        public function isEqual($_obj) {return false;}
        public function serialize($_code = "object") {return "";}
        public function deserialize($_data, $_code = "object") {}
        //===============================================
    }
?>