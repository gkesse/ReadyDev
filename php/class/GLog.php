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
    public function deserialize($data, $errors = "errors", $logs = "logs") {
        $lData = new GCode();
        $lData->loadXmlData($data);
        $this->errors = $lData->getList($errors);
        $this->logs = $lData->getList($logs);
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
        $lEnvObj = new GEnv();
        $lClass = "";
        $lErrors = "";
        foreach($this->errors as $error) {
            $lErrors .= sprintf("%s<br>", $error);
        }
        if($lErrors == "") $lClass = "BoxHide";
        if($lEnvObj->isTestEnv()) {
            echo sprintf("<div id='ErrorsBox' class='Errors %s'>\n", $lClass);
            echo sprintf("<div class='ErrorsClose' onclick='server_call(\"log\", \"close_error\", this);'><i class='ErrorsCloseFa fa fa-times'></i></div>\n");
            echo sprintf("<xmp id='ErrorsMsg' class='ErrorsMain Code3'>%s</xmp>\n", $lErrors);
            echo sprintf("</div>\n");
        }
        else {
            echo sprintf("<div id='ErrorsBox' class='Errors %s'>\n", $lClass);
            echo sprintf("<div class='ErrorsClose' onclick='server_call(\"log\", \"close_error\", this);'><i class='ErrorsCloseFa fa fa-times'></i></div>\n");
            echo sprintf("<div id='ErrorsMsg' class='ErrorsMain'>%s</div>\n", $lErrors);
            echo sprintf("</div>\n");
        }
    }
    //===============================================
    public function showLogs() {
        $lEnvObj = new GEnv();
        $lClass = "";
        $lLogs = "";
        foreach($this->logs as $log) {
            $lLogs .= sprintf("%s<br>", $log);
        }
        if($lLogs == "") $lClass = "BoxHide";
        if($lEnvObj->isTestEnv()) {
            echo sprintf("<div id='LogsBox' class='Logs %s'>\n", $lClass);
            echo sprintf("<div class='LogsClose' onclick='server_call(\"log\", \"close_log\", this);'><i class='LogsCloseFa fa fa-times'></i></div>\n");
            echo sprintf("<xmp id='LogsMsg' class='LogsMain Code3'>%s</xmp>\n", $lLogs);
            echo sprintf("</div>\n");
        }
        else {
            echo sprintf("<div id='LogsBox' class='Logs %s'>\n", $lClass);
            echo sprintf("<div class='LogsClose' onclick='server_call(\"log\", \"close_log\", this);'><i class='LogsCloseFa fa fa-times'></i></div>\n");
            echo sprintf("<div id='LogsMsg' class='LogsMain'>%s</div>\n", $lLogs);
            echo sprintf("</div>\n");
        }
    }
    //===============================================
}
//===============================================
?>
