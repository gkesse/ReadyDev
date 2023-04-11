<?php   
    class GObject {
        //===============================================
        protected $m_isTestEnv = false;
        protected $m_homePage = "";
        protected $m_pageId = "";
        //===============================================
        protected $m_category = "";
        protected $m_model = "";
        //===============================================
        protected $m_map = array();
        protected $m_parentMap = array();
        //===============================================
        protected $m_logs = null;
        protected $m_parentObj = null;
        protected $m_currentObj = null;
        //===============================================
        public function __construct() {
            $this->m_logs = new GLog();
        }
        //===============================================
        public function clone() {
            return new GObject();
        }
        //===============================================
        public function setObj($_obj) {
            $this->m_category = $_obj->m_category;
            $this->m_model = $_obj->m_model;
            $this->m_parentObj = $_obj->m_parentObj;
            $this->m_currentObj = $_obj;
        }
        //===============================================
        public function isEqual($_obj) {
            $lEqualOk = true;
            $lEqualOk &= ($this->m_category == $_obj->m_category);
            $lEqualOk &= ($this->m_model == $_obj->m_model);
            return $lEqualOk;
        }
        //===============================================
        public function size() {
            return count($this->m_map);
        }
        //===============================================
        public function loadFromMap($_index) {
            if($_index >= 0 && $_index < count($this->m_map)) {
                $lObj = $this->m_map[$_index];
                $this->setObj($lObj);
            }
        }
        //===============================================
        public function loadToMap($_index) {
            if($_index >= 0 && $_index < count($this->m_map)) {
                $lObj = $this->m_map[$_index];
                $lObj->setObj($this);
            }
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
        public function findObjMapC($_category, $_parent = null, $_isParent = true) {
            $lMap = $this->clone();
            for($i = 0; $i < count($this->m_map); $i++) {
                $lObj = $this->m_map[$i];
                if($lObj->m_category == $_category) {
                    if($lObj->m_parentObj == $_parent || !$_isParent) {
                        $lMap->m_map[] = $lObj;
                    }
                }
            }
            return $lMap;
        }
        //===============================================
        public function findObjMapCM($_category, $_model, $_parent = null, $_isParent = true) {
            $lMap = $this->clone();
            for($i = 0; $i < count($this->m_map); $i++) {
                $lObj = $this->m_map[$i];
                if($lObj->m_category == $_category) {
                    if($lObj->m_model == $_model) {
                        if($lObj->m_parentObj == $_parent || !$_isParent) {
                            $lMap->m_map[] = $lObj;
                        }
                    }
                }
            }
            return $lMap;
        }
        //===============================================
        public function isEmpty() {
            return $this->isEqual($this->clone());
        }
        //===============================================
        public function initTestEnv() {
            $this->m_isTestEnv = ($this->getEnv("GPROJECT_ENV") == "TEST");
        }
        //===============================================
        public function initHomePage() {
            $this->setHomePage("/home");
        }
        //===============================================
        public function initParent() {
            $this->m_parentObj = $this->m_currentObj;
        }
        //===============================================
        public function setHomePage($_homePage) {
            $this->m_homePage = $_homePage;
        }
        //===============================================
        public function pushParent() {
            $this->m_parentMap[] = $this->m_parentObj;
        }
        //===============================================
        public function popParent() {
            $this->m_parentObj = array_pop($this->m_parentMap);
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
        public function serialize($_code = "object") {return "";}
        public function deserialize($_data, $_code = "object") {}
        //===============================================
    }
?>