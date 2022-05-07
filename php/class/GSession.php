<?php
//===============================================
class GSession extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function setSession($key, $value) {
        $_SESSION[$key] = $value;
    }
    //===============================================
    public function getSession($key, $defaultValue = "") {
        if(!$this->issetSession($key)) return $defaultValue;
        return $_SESSION[$key];
    }
    //===============================================
    public function issetSession($key) {
        return isset($_SESSION[$key]);
    }
    //===============================================
    public function unsetSession($key) {
        unset($_SESSION[$key]);
    }
    //===============================================
}
//===============================================
?>
