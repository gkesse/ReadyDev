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
    public function addError($error) {
        $this->errors[] = $error;
    }
    //===============================================
    public function addLog($log) {
        $this->logs[] = $log;
    }
    //===============================================
    public function showError() {
        if(empty($this->errors)) return;
        $lError = "";
        foreach($this->errors as $error) {
            $lError .= sprintf("%s<br>", $error);
        }
        echo sprintf("<div class='error'>\n");
        echo sprintf("<div class='error_close' onclick='error_close_onclick(this)'><i class='error_close_fa fa fa-times'></i></div>\n");
        echo sprintf("<div class='error_main'>%s</div>\n", $lError);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function showLog() {
        if(empty($this->logs)) return;
        $lLog = "";
        foreach($this->logs as $log) {
            $lLog .= sprintf("%s<br>", $log);
        }
        echo sprintf("<div class='log'>\n");
        echo sprintf("<div class='log_close' onclick='log_close_onclick(this)'><i class='error_close_fa fa fa-times'></i></div>\n");
        echo sprintf("<div class='log_main'>%s</div>\n", $lLog);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>