<?php   
    class GObject {
        //===============================================
        protected $m_app;
        protected $m_dom;
        protected $m_logs;
        protected $m_map = array();
        //===============================================
        public function __construct() {
            $this->m_logs = new GLog();
        }
        //===============================================
        public function loadDom($_className) {
            $this->m_dom = new GCode();
            $this->m_dom->loadFile("php/class", "$_className.xml");
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
    }
?>