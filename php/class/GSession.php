<?php
//===============================================
class GSession extends GObject {
    //===============================================
    protected $userId = 0;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($code = "session") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($code, "user_id", $this->userId);
        return $lDom->toStringCode($code);
    }
    //===============================================
    public function deserialize($data, $code = "session") {
        $lDom = new GCode();
        $lDom->loadXml($data);
        $this->userId = $lDom->getItem($code, "user_id");
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
