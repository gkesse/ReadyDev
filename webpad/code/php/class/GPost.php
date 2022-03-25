<?php
//===============================================
class GPost extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function hasPost() {
        return !empty($_POST);
    }
    //===============================================
    public function issetPost($key) {
        return isset($_POST[$key]);
    }
    //===============================================
    public function getPost($key, $defaultValue = "") {
        if(!$this->issetPost($key)) return $defaultValue;
        return $_POST[$key];
    }
    //===============================================
}
//===============================================
?>
