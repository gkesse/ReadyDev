<?php   
//===============================================
class GObject {
    //===============================================;
    protected $dom = null;
    //===============================================;
    private $config;
    private $errors;
    //===============================================
    public function __construct() {
        // config
        $this->config = array(
            "webroot" => "webpad/code",
            "datapath" => "data",
            "webkey" => "readypad",
        );
        // errors
        $this->errors = array();
    }
    //===============================================
    public function getConfig($key) {
        $lData = $this->config[$key];
        return $lData;
    }
    //===============================================
    public function getLink($link) {
        $lWebKey = $this->getConfig("webkey");
        $lLink = sprintf("/%s/%s", $lWebKey, $link);
        return $lLink;
    }
    //===============================================
    public function getItem($code, $data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/%s", $code, $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getItem2($code, $index) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", $code, $index + 1));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getItem3($code, $data, $index) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]/%s", $code, $index + 1, $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function countItem($code) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data", $code));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    //===============================================
    public function addErrors($error) {
        array_push($this->errors, $error);
    }
    //===============================================
    public function hasErrors() {
        return !empty($this->errors);
    }
    //===============================================
    public function getErrors() {
        return implode($this->errors, "<br>");
    }
    //===============================================
    public function clearErrors() {
        $this->errors = array();
    }
    //===============================================
    public function setSession($key, $value) {
        $lKeyLink = $this->getLink($key);
        $_SESSION[$lKeyLink] = $value;
    }
    //===============================================
    public function getSession($key) {
        $lKeyLink = $this->getLink($key);
        return $_SESSION[$lKeyLink];
    }
    //===============================================
    public function issetSession($key) {
        $lKeyLink = $this->getLink($key);
        return isset($_SESSION[$lKeyLink]);
    }
    //===============================================
    public function unsetSession($key) {
        $lKeyLink = $this->getLink($key);
        unset($_SESSION[$lKeyLink]);
    }
    //===============================================
    public function encodePassword($email, $password) {
        $password = sprintf("%s|%s", $email, $password);
        $password = md5($password);
        return $password;
    }
    // ===============================================
    public function getTranslatorData($data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='translator']/%s", $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    // ===============================================
    public function getTranslatorItem($index, $data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='translator']/map/data[position()=%d]/%s", $index + 1, $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    // ===============================================
    public function getTranslator($id) {
        $lLang = $this->getTranslatorData("lang");
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='translator']/map/data[id='%d']/%s", $id, $lLang));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
