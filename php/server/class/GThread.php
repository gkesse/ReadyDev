<?php
//===============================================
class GThread extends GObject {
    //===============================================
    private $m_onThreadCB = null;
    private $m_params = null;
    //===============================================
    public function __construct() {
        parent::__construct();
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
    public function run() {
        $lThread = new GThreadRun();
        $lThread->setThreadCB($this->m_onThreadCB);
        $lThread->setParams($this->m_params);
        $lThread->start();
        $this->addLogs($lThread->getLogs());
        return !$this->hasErrors();
    }
    //===============================================
};
//===============================================
?>