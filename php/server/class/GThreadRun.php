<?php
//===============================================
class GThreadRun extends Thread {
    //===============================================
    private $m_logs = null;
    private $m_onThreadCB = null;
    private $m_params = null;
    //===============================================
    public function __construct() {
        $this->m_logs = new GLog();
    }
    //===============================================
    public function setThreadCB(callable $_onThreadCB) {
        $this->m_onThreadCB = $_onThreadCB;
    }
    //===============================================
    public function setParams($_params) {
        $this->m_params = $_params;
    }
    //===============================================
    public function getLogs() {
        return $this->m_logs;
    }
    //===============================================
    public function run() {
        if(!$this->m_onThreadCB) {
            $this->m_logs->addError("La fonction de rappel n'est pas initialisé.");
            return;
        }
        $this->m_onThreadCB($this->m_params);
    }
    //===============================================
};
//===============================================
?>