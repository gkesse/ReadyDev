<?php   
//===============================================
class GError extends GObject {
    //===============================================
    private static $m_instance = null;
    //===============================================
    protected $erros = array();
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
            $lError = sprintf("%s<br>", $error);
        }
        echo $lError;
    }
    //===============================================
}
//===============================================
?>
