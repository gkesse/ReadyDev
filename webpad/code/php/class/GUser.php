<?php
// ===============================================
class GUser extends GObject {
    // ===============================================
    private $id;
    private $pseudo;
    private $password;
    private $group;
    private $active;
    // ===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
        $this->id = 0;
        $this->pseudo = "";
        $this->password = "";
        $this->group = "";
        $this->active = "";
    }
    // ===============================================
    // dom
    // ===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDoc();
        $this->dom->loadXmlFile("pad.xml");
        $this->dom->createXPath();
    }
    // ===============================================
    public function serialize() {
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->addParameter("id", strval($this->id));
        $lReq->addParameter("pseudo", $this->pseudo);
        $lReq->addParameter("password", $this->password);
        $lReq->addParameter("group", $this->group);
        $lReq->addParameter("active", $this->active);
        return $lReq->toStringNode();
    }
    // ===============================================
    public function deserialize($data) {
        if($data == "") return;
        $lCode = new GCode();
        $lCode->loadXmlData($data);
        $this->id = intval($lCode->getItem("user", "id"));
        $this->pseudo = $lCode->getItem("user", "pseudo");
        $this->password = $lCode->getItem("user", "password");
        $this->group = $lCode->getItem("user", "group");
        $this->active = $lCode->getItem("user", "active");
    }
    //===============================================
    // login
    //===============================================
    public function isLogin() {
        $lSession = new GSession();
        return $lSession->issetSession("user/login");
    }
    //===============================================
    public function hasLogin() {
        $lPost = new GPost();
        $lPostOn = $lPost->hasPost();
        if(!$lPostOn) return false;
        $this->pseudo = $lPost->getPost("pseudo");
        $this->password = $lPost->getPost("password");
        $this->computePassword();
        $lUserOn = $this->hasUser();
        if(!$lUserOn) {
            $this->addError($this->getTranslator(5));
            return false;
        }
        $lUserOn = $this->hasUserPassword();
        if(!$lUserOn) {
            $this->addError($this->getTranslator(6));
            return false;
        }
        return $lUserOn;
    }
    //===============================================
    public function hasRegister() {
        $lPost = new GPost();
        $lPostOn = $lPost->hasPost();
        if(!$lPostOn) return false;
        $this->pseudo = $lPost->getPost("pseudo");
        $this->password = $lPost->getPost("password");
        $lConfirm = $lPost->getPost("confirm");
        if($this->password != $lConfirm) {
            $this->addError($this->getTranslator(1));
            return false;
        }
        $this->computePassword();        
        $lUserOn = $this->hasUser();
        if($lUserOn) {
            $this->addError($this->getTranslator(2));
            return false;
        }
        $lCreateOn = $this->createUser();
        if(!$lCreateOn) {
            $this->addError($this->getTranslator(3));
            return false;
        }
        return true;
    }
    //===============================================
    public function setLogin() {
        $lSession = new GSession();
        $lPage = new GPage();
        $lSession->setSession("user/login", true);
        $lSession->setSession("user/id", $this->id);
        $lSession->setSession("user/group", $this->group);
        $lPage->redirectUrl("home");
    }
    //===============================================
    public function setLogout() {
        $lPage = new GPage();
        $lSession = new GSession();
        $lSession->unsetSession("user/login");
        $lPage->redirectUrl("home");
    }
    //===============================================
    // admin
    //===============================================
    public function isAdmin() {
        $LoginOn = $this->isLogin();
        if(!$LoginOn) return false;
        $lUserGroup = $this->getUserGroup();
        if($lUserGroup != "0") return false;
        return true;
    }
    //===============================================
    // user
    //===============================================
    public function getUserId() {
        $lSession = new GSession();
        return $lSession->getSession("user/id");
    }
    //===============================================
    public function getUserGroup() {
        $lSession = new GSession();
        return $lSession->getSession("user/group");        
    }
    //===============================================
    public function hasUser() {
        $lParams = $this->serialize();
        $lClient = new GSocket();
        $lRes = $lClient->callServer("user", "has_user", $lParams);
        GLog::Instance()->loadErrors($lRes);
        if(GLog::Instance()->hasErrors()) return 0;
        $this->deserialize($lRes);
        return ($this->id != 0);
    }
    //===============================================
    public function hasUserPassword() {
        $lParams = $this->serialize();
        $lClient = new GSocket();
        $lRes = $lClient->callServer("user", "has_user_password", $lParams);
        GLog::Instance()->loadErrors($lRes);
        if(GLog::Instance()->hasErrors()) return 0;
        $this->deserialize($lRes);
        return ($this->id != 0);
    }
    //===============================================
    public function createUser() {
        $lParams = $this->serialize();
        $lClient = new GSocket();
        $lRes = $lClient->callServer("user", "create_user", $lParams);
        GLog::Instance()->loadErrors($lRes);
        if(GLog::Instance()->hasErrors()) return 0;
        $this->deserialize($lRes);
        return ($this->id != 0);
    }
    //===============================================
    public function computePassword() {
        if($this->pseudo == "") return;
        if($this->password == "") return;
        $this->password = sprintf("%s|%s", $this->pseudo, $this->password);
        $this->password = md5($this->password);
    }
    // ===============================================
}
// ===============================================
?>
