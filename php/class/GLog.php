<?php   
//===============================================
class GLog extends GObject {
    //===============================================
    static private $m_instance = null;
    //===============================================
    private $m_type = "";
    private $m_side = "";
    private $m_msg = "";
    private $m_map = array();
    //===============================================
    private $m_isDebug = true;
    //===============================================
    public function __construct($_code = "logs") {
        parent::__construct($_code);
    }
    //===============================================
    public function clone() {
        return clone $this;
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GLog();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function serialize($_code = "logs") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "type", $this->m_type);
        $lDom->addData($_code, "side", $this->m_side);
        $lDom->addData($_code, "msg", $this->m_msg);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "logs") {
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_type = $lDom->getData($_code, "type");
        $this->m_side = $lDom->getData($_code, "side");
        $this->m_msg = $lDom->getData($_code, "msg");
        $lDom->getMap($_code, $this->m_map, $this);
        return true;
    }
    //===============================================
    public function addError($_error) {
        $lLog = new GLog();
        $lLog->m_type = "error";
        $lLog->m_side = "client";
        $lLog->m_msg = $_error;
        $this->m_map.push_back($lLog);
    }
    //===============================================
    public function addLog($_log) {
        $lLog = new GLog();
        $lLog->m_type = "log";
        $lLog->m_side = "client";
        $lLog->m_msg = $_log;
        $this->m_map.push_back($lLog);
    }
    //===============================================
    public function showErrors() {
        if(!$this->m_isDebug) return;
        if(!$this->hasErrors()) return;
        $lErrors = "";
        for($i = 0; $i < count($this->m_map); $i++) {
            $lLog = $this->m_map[$i];
            if($lLog->m_type == "error") {
                if($i != 0) $lErrors .= "\n";
                $lErrors .= $lLog->m_msg;
            }
        }
        
        echo sprintf("<div class='error'>\n");
        echo sprintf("<div class='error_close' onclick='error_close(this)'><i class='error_close_fa fa fa-times'></i></div>\n");
        echo sprintf("<div class='error_main'>%s</div>\n", $lErrors);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function showLogs() {
        if(!$this->m_isDebug) return;
        if(!$this->hasErrors()) return;
        $lLogs = "";
        for($i = 0; $i < count($this->m_map); $i++) {
            $lLog = $this->m_map[$i];
            if($lLog->m_type == "error") {
                if($i != 0) $lLogs .= "\n";
                $lLogs .= $lLog->m_msg;
            }
        }
        
        echo sprintf("<div class='log'>\n");
        echo sprintf("<div class='log_close' onclick='log_close(this)'><i class='error_close_fa fa fa-times'></i></div>\n");
        echo sprintf("<div class='log_main'>%s</div>\n", $lLogs);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function hasErrors() {
        for($i = 0; $i < count($this->m_map); $i++) {
            $lLog = $this->m_map[$i];
            if($lLog->m_type == "error") {
                return true;
            }
        }
        return false;
    }
    //===============================================
    public function hasLogs() {
        for($i = 0; $i < count($this->m_map); $i++) {
            $lLog = $this->m_map[$i];
            if($lLog->m_type == "log") {
                return true;
            }
        }
        return false;
    }
    //===============================================
}
//===============================================
?>
