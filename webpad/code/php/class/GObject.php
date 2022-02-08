<?php   
//===============================================
class GObject {
    //===============================================
    static private $m_instance = null;
    //===============================================
    private $webroot;
    private $webkey;
    private $errors;
    //===============================================
    protected $dom = null;
    //===============================================
    public function __construct() {
        $this->initObj();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GObject();  
        }
        return self::$m_instance;
    }
    //===============================================
    private function initObj() {
        $this->webroot = "webpad/code";
        $this->webkey = "/readypad";
        $this->errors = array();
    }
    //===============================================
    public function getRepoPath($repo, $file) {
        $lPath = $repo;
        if($this->webroot != "") {
            $lPath = sprintf("%s/%s", $this->webroot, $lPath);
        }
        $lPath = sprintf("%s/%s/%s", $_SERVER["DOCUMENT_ROOT"], $lPath, $file);
        return $lPath;
    }
    //===============================================
    public function getWebRoot() {
        $lRoot = "";
        if($this->webroot != "") {
            $lRoot = sprintf("/%s", $this->webroot);
        }
        return $lRoot;
    }
    //===============================================
    public function getWebKey() {
        return $this->webkey;
    }
    //===============================================
    public function getLink($link) {
        $lLink = sprintf("%s/%s", $this->webkey, $link);
        return $lLink;
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
    public function redirectUrl($url) {
        $lUrlLink = $this->getLink($url);
        $lLocation = sprintf("Location: %s", $lUrlLink);
        header($lLocation);
        exit;
    }
    //===============================================
    public function redirectPost() {
        if(!empty($_POST) OR !empty($_FILES)) {
            $_SESSION["_SAVE_POST_"] = $_POST;
            $_SESSION["_SAVE_FILES_"] = $_FILES;
            $lUrl = $_SERVER["REQUEST_URI"];
            header("Location: " . $lUrl);
            exit;
        }
        if(isset($_SESSION["_SAVE_POST_"])) {
            $_POST = $_SESSION["_SAVE_POST_"];
            $_FILES = $_SESSION["_SAVE_FILES_"];
            unset($_SESSION["_SAVE_POST_"], $_SESSION["_SAVE_FILES_"]);
        }
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
