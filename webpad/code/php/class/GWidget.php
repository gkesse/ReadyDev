<?php   
//===============================================
class GWidget extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function getPageId() {
        $lPageId = $_GET["pageid"];
        if($lPageId == "") {
            $lPageId = "home";
        }
        if(substr($lPageId, -1) == '/') {
            $lPageId = substr($lPageId, 0, -1);
        }
        return $lPageId;
    }
    //===============================================
    public function isPage($page) {
        $lPageId = $this->getPageId();
        return ($lPageId == $page);
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
    public function getPost($key) {
        if(!$this->issetPost($key)) return "";
        return $_POST[$key];
    }
    //===============================================
    public function hasLogin() {
        $lPost = $this->hasPost();
        if(!$lPost) return false;
        $lSqlite = new GSQLite();
        $lEmail = $_POST["pseudo"];
        $lPassword = $_POST["password"];
        $lCount = $lSqlite->countUser($lEmail, $lPassword);
        return ($lCount != 0);
    }
    //===============================================
    public function hasRegister() {
        $lPostOn = $this->hasPost();
        if(!$lPostOn) return false;
        $lSqlite = new GSQLite();
        $lPseudo = $_POST["pseudo"];
        $lPassword = $_POST["password"];
        $lConfirm = $_POST["confirm"];
        if($lPassword != $lConfirm) {
            $this->addErrors($this->getTranslator(1));
            return false;
        }
        $lUserOn = $lSqlite->hasUser($lPseudo);
        if($lUserOn) {
            $this->addErrors($this->getTranslator(2));
            return false;
        }
        $lSqlite->createUser($lPseudo, $lPassword);
        return true;
    }
    //===============================================
    public function isLogin() {
        return $this->issetSession("user/login");
    }
    //===============================================
    public function isAdmin() {
        $LoginOn = $this->isLogin();
        if(!$LoginOn) return false;
        $lSqlite = new GSQLite();       
        $lUserId = $this->getUserId();
        $lUserGroup = $lSqlite->getUserGroup($lUserId);
        if($lUserGroup != "0") return false;
        return true;
    }
    //===============================================
    public function setLogin() {
        $lSqlite = new GSQLite();
        $lPseudo = $_POST["pseudo"];
        $lPassword = $_POST["password"];
        $lUserId = $lSqlite->getUserId($lPseudo, $lPassword);
        $this->setSession("user/login", true);
        $this->setSession("user/id", $lUserId);
        $this->redirectUrl("home");
    }
    //===============================================
    public function setLogout() {
        $this->unsetSession("user/login"); 
        $this->redirectUrl("home");
    }
    //===============================================
    public function getUserId() {
        return $this->getSession("user/id");
    }
    //===============================================
}
//===============================================
?>
