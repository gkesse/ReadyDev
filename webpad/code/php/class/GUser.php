<?php
// ===============================================
class GUser extends GObject {
    // ===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
        $this->id = 0;
    }
    // ===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDoc();
        $this->dom->loadXmlFile("pad.xml");
        $this->dom->createXPath();
    }
    // ===============================================
    public function deserialize($data) {
        $lCode = new GCode();
        $lCode->loadXmlData($data);
        $this->id = intval($lCode->getItem("user", "id"));
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
        $lPseudo = $lPost->getPost("pseudo");
        $lPassword = $lPost->getPost("password");
        $lUserOn = $this->hasUser($lPseudo);
        if(!$lUserOn) {
            $this->addError($this->getTranslator(5));
            return false;
        }
        $lUserOn = $this->hasUserPassword($lPseudo, $lPassword);
        if(GLog::Instance()->hasErrors()) {
            $this->addError($this->getTranslator(5));
            return false;
        }
        return $lUserOn;
    }
    //===============================================
    public function hasRegister() {
        $lPost = new GPost();
        $lPostOn = $lPost->hasPost();
        if(!$lPostOn) return false;
        $lPseudo = $lPost->getPost("pseudo");
        $lPassword = $lPost->getPost("password");
        $lConfirm = $lPost->getPost("confirm");
        if($lPassword != $lConfirm) {
            $this->addError($this->getTranslator(1));
            return false;
        }
        $lUserOn = $this->hasUser($lPseudo);
        if($lUserOn) {
            $this->addError($this->getTranslator(2));
            return false;
        }
        $this->createUser($lPseudo, $lPassword);
        if(GLog::Instance()->hasErrors()) {
            $this->addError($this->getTranslator(3));
            return false;
        }
        return true;
    }
    //===============================================
    public function setLogin() {
        $lPost = new GPost();
        $lSession = new GSession();
        $lPage = new GPage();
        $lPseudo = $lPost->getPost("pseudo");
        $lPassword = $lPost->getPost("password");
        $lUserId = $this->loadUserId($lPseudo, $lPassword);
        $lSession->setSession("user/login", true);
        $lSession->setSession("user/id", $lUserId);
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
        $lUserId = $this->getUserId();
        $lUserGroup = $this->getUserGroup($lUserId);
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
    public function loadUserId($pseudo, $password) {
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("user", "load_user_id");
        $lReq->addParameter("pseudo", $pseudo);
        $lReq->addParameter("password", $password);
        $lClient = new GSocket();
        $lRes = $lClient->callServer($lReq->toString());
        GLog::Instance()->loadErrors($lRes);
        $this->deserialize($lRes);
        return ($this->id != 0);
    }
    //===============================================
    public function getUserGroup($userId) {
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("user", "get_user_group");
        $lReq->addParameter("user_id", $userId);
        $lClient = new GSocket();
        $lRes = $lClient->callServer($lReq->toString());
        GLog::Instance()->loadErrors($lRes);
        $lUserId = 1;
        return $lUserId;
    }
    //===============================================
    public function hasUserPassword($pseudo, $password) {
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("user", "has_user_password");
        $lReq->addParameter("pseudo", $pseudo);
        $lReq->addParameter("password", $password);
        $lClient = new GSocket();
        $lRes = $lClient->callServer($lReq->toString());
        GLog::Instance()->loadErrors($lRes);
        if(GLog::Instance()->hasErrors()) return 0;
        $this->deserialize($lRes);
        return ($this->id != 0);
    }
    //===============================================
    public function hasUser($pseudo) {
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("user", "has_user");
        $lReq->addParameter("pseudo", $pseudo);
        $lClient = new GSocket();
        $lRes = $lClient->callServer($lReq->toString());
        GLog::Instance()->loadErrors($lRes);
        if(GLog::Instance()->hasErrors()) return 0;
        $this->deserialize($lRes);
        return ($this->id != 0);
    }
    //===============================================
    public function createUser($pseudo, $password) {
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("user", "create_user");
        $lReq->addParameter("pseudo", $pseudo);
        $lReq->addParameter("password", $password);
        $lClient = new GSocket();
        $lRes = $lClient->callServer($lReq->toString());
        GLog::Instance()->loadErrors($lRes);
        if(GLog::Instance()->hasErrors()) return 0;
    }
    // ===============================================
}
// ===============================================
?>
