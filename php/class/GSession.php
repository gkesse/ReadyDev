<?php
//===============================================
class GSession extends GObject {
    //===============================================
    protected $m_userId = 0;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($_code = "session") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "user_id", $this->m_userId);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "session") {
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_userId = $lDom->getItem($_code, "user_id");
    }
    //===============================================
    public function setSession($_key, $_value) {
        $_SESSION[$_key] = $_value;
    }
    //===============================================
    public function getSession($_key, $_defaultValue = "") {
        if(!$this->issetSession($_key)) return $_defaultValue;
        return $_SESSION[$_key];
    }
    //===============================================
    public function issetSession($_key) {
        return isset($_SESSION[$_key]);
    }
    //===============================================
    public function unsetSession($_key) {
        unset($_SESSION[$_key]);
    }
    //===============================================
}
//===============================================
?>
