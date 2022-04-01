<?php
//===============================================
class GSession extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function setSession($key, $value) {
        $lPage = new GPage();
        $lKeyLink = $lPage->getLink($key);
        $_SESSION[$lKeyLink] = $value;
    }
    //===============================================
    public function getSession($key, $defaultValue = "") {
        $lPage = new GPage();
        if(!$this->issetSession($key)) return $defaultValue;
        $lKeyLink = $lPage->getLink($key);
        return $_SESSION[$lKeyLink];
    }
    //===============================================
    public function issetSession($key) {
        $lPage = new GPage();
        $lKeyLink = $lPage->getLink($key);
        return isset($_SESSION[$lKeyLink]);
    }
    //===============================================
    public function unsetSession($key) {
        $lPage = new GPage();
        $lKeyLink = $lPage->getLink($key);
        unset($_SESSION[$lKeyLink]);
    }
    //===============================================
}
//===============================================
?>
