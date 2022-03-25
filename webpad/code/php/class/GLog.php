<?php   
//===============================================
class GLog extends GObject {
    //===============================================
    static private $m_instance = null;
    //===============================================
    private $logs;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->logs = array();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GLog();  
        }
        return self::$m_instance;
    }
    //===============================================
    // errors
    //===============================================
    public function showError() {
        if(!$this->hasErrors()) return;
        echo sprintf("<div class='error box'>\n");
        echo sprintf("<div class='box_body'>\n");
        echo sprintf("<a class='button_close' onclick='error_close_onclick()'><i class='button_close_fa fa fa-times'></i></a>\n");
        echo sprintf("<div class='title_text'>%s</div>\n", "ERREUR");
        echo sprintf("<hr class='title_hr'>\n");
        echo sprintf("<div class='row_line_courier'>%s</div>\n", $this->getErrors());
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    // logs
    //===============================================
    public function addLog($log) {
        $this->logs[] = $log;
    }
    //===============================================
    public function showLog() {
        if(empty($this->logs)) return;
        $lLog = "";
        foreach($this->logs as $log) {
            $lLog .= sprintf("%s<br>", $log);
        }
        echo sprintf("<div class='log box'>\n");
        echo sprintf("<div class='box_body'>\n");
        echo sprintf("<a class='button_close' onclick='log_close_onclick()'><i class='button_close_fa fa fa-times'></i></a>\n");
        echo sprintf("<div class='title_text'>%s</div>\n", "LOG");
        echo sprintf("<hr class='title_hr'>\n");
        echo sprintf("<div class='row_line'>%s</div>\n", $lLog);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>
