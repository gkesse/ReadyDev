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
        $lData = new GCode();
        $lData->createDoc();
        $lData->addData($code, "user_id", $this->userId);
        return $lData->toStringCode($code);
    }
    //===============================================
    public function deserialize($data, $code = "session") {
        $lData = new GCode();
        $lData->loadXml($data);
        $this->userId = $lData->getItem($code, "user_id");
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
