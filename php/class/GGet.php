<?php
//===============================================
class GGet extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function hasGet() {
        return !empty($_GET);
    }
    //===============================================
    public function issetGet($key) {
        return isset($_GET[$key]);
    }
    //===============================================
    public function getGet($key, $defaultValue = "") {
        if(!$this->issetGet($key)) return $defaultValue;
        return $_GET[$key];
    }
    //===============================================
}
//===============================================
?>
