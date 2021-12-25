<?php   
//===============================================
class GError extends GObject {
    //===============================================
    static private $m_instance = null;
    //===============================================
    private $errors = array();
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GError();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function addError($error) {
        $this->errors[] = $error;
    }
    //===============================================
    public function showError() {
        if(empty($this->errors)) return;
        $lError = "";
        foreach($this->errors as $error) {
            $lError .= sprintf("%s<br>", $error);
        }
        echo sprintf("<div class='error'>");
        echo sprintf("<div class='error_close' onclick='error_close_onclick(this)'><i class='error_close_fa fa fa-times'></i></div>");
        echo sprintf("<div class='error_main'>%s</div>", $lError);
        echo sprintf("</div>");
    }
    //===============================================
}
//===============================================
?>
