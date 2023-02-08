<?php   
    class GObject {
        //===============================================
        protected $m_logs = null;
        protected $m_responseDom = null;
        protected $m_map = array();
        //===============================================
        public function __construct() {
            $this->m_logs = new GLog();
            $this->m_responseDom = new GCode();
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
        public function addResponse($_data) {
            $this->m_responseDom->loadData($_data);
        }
        //===============================================
        public function toResponse() {
            return $this->m_responseDom->toString();
        }
        //===============================================
        public function clearLogs() {
            return $this->m_logs->clearMap();
        }
        //===============================================
        public function getLogs() {
            return $this->m_logs;
        }
        //===============================================
        public function loadLogs() {
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
            $this->m_logs->showLogs();
        }
        //===============================================
    }
?>