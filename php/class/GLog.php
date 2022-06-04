<?php   
//===============================================
class GLog extends GObject {
    //===============================================
    static private $m_instance = null;
    //===============================================
    private $errors = array();
    private $logs = array();
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GLog();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function serialize($errors = "errors", $logs = "logs") {
        $lData = new GCode();
        $lData->createDoc();
        $lData->addList($errors, $this->errors);
        $lData->addList($logs, $this->logs);
        return $lData->toStringData();
    }
    //===============================================
    public function addError($error) {
        $lDateObj = new GDate();
        $lBacktrace = debug_backtrace();
        $lCaller = array_shift($lBacktrace);
        $lDate = $lDateObj->getDateTime();
        $lFile = $lCaller['file'];
        $lLine = $lCaller['line'];
        $lFunc = debug_backtrace()[1]['function'];
        $lData = sprintf("%s : %s : [%d] : %s :\n%s", $lDate, $lFile, $lLine, $lFunc, $error);
        $this->errors[] = $lData;
    }
    //===============================================
    public function addLog($log) {
        $lDateObj = new GDate();
        $lBacktrace = debug_backtrace();
        $lCaller = array_shift($lBacktrace);
        $lDate = $lDateObj->getDateTime();
        $lFile = $lCaller['file'];
        $lLine = $lCaller['line'];
        $lFunc = debug_backtrace()[1]['function'];
        $lData = sprintf("%s : %s : [%d] : %s :\n%s", $lDate, $lFile, $lLine, $lFunc, $log);
        $this->logs[] = $lData;
    }
    //===============================================
    public function hasErrors() {
        return !empty($this->errors);
    }
    //===============================================
    public function showErrors() {
        $lClass = "None";
        $lError = "";
        foreach($this->errors as $error) {
            $lError .= sprintf("%s<br>", $error);
        }
        if($lError != "") $lClass = "error";
        echo sprintf("<div id='error_box' class='error %s'>\n", $lClass);
        echo sprintf("<div class='error_close' onclick='server_call(\"log\", \"close_error\", this);'><i class='error_close_fa fa fa-times'></i></div>\n");
        echo sprintf("<div><xmp id='error_msg' class='error_main Code3'>%s</xmp></div>\n", $lError);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function showLogs() {
        $lClass = "None";
        $lLog = "";
        foreach($this->logs as $log) {
            $lLog .= sprintf("%s<br>", $log);
        }
        if($lLog != "") $lClass = "error";
        echo sprintf("<div id='log_box' class='log %s'>\n", $lClass);
        echo sprintf("<div class='log_close' onclick='server_call(\"log\", \"close_log\", this);'><i class='error_close_fa fa fa-times'></i></div>\n");
        echo sprintf("<xmp id='log_msg' class='log_main Code3'>%s</xmp>\n", $lLog);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>
