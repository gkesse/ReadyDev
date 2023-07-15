<?php   
//===============================================
namespace php\class;
//===============================================
class GUser extends GObject {
    //===============================================
    private $m_id = 0;
    private $m_pseudo = "";
    private $m_password = "";
    private $m_email = "";
    private $m_createDate = "";
    private $m_updateDate = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        return new GUser();
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_id = $_obj->m_id;
        $this->m_pseudo = $_obj->m_pseudo;
        $this->m_email = $_obj->m_email;
        $this->m_password = $_obj->m_password;
    }
    //===============================================
    public function setId($_id) {
        $this->m_id = $_id;
    }
    //===============================================
    public function setPseudo($_pseudo) {
        $this->m_pseudo = $_pseudo;
    }
    //===============================================
    public function setEmail($_email) {
        $this->m_email = $_email;
    }
    //===============================================
    public function setPassword($_password) {
        $this->m_password = $_password;
    }
    //===============================================
    public function serialize($_code = "user") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "pseudo", $this->m_pseudo);
        $lDom->addData($_code, "password", $this->m_password);
        $lDom->addData($_code, "email", $this->m_email);
        $lDom->addData($_code, "create_date", $this->m_createDate);
        $lDom->addData($_code, "update_date", $this->m_updateDate);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "user") {
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_id = $lDom->getData($_code, "id");
        $this->m_pseudo = $lDom->getData($_code, "pseudo");
        $this->m_password = $lDom->getData($_code, "password");
        $this->m_email = $lDom->getData($_code, "email");
        $this->m_createDate = $lDom->getData($_code, "create_date");
        $this->m_updateDate = $lDom->getData($_code, "update_date");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function loginUser() {
        $lClient = new GSocket();
        $lData = $this->serialize();
        $lData = $lClient->callFacade("user", "login_user", $lData);
        $this->m_logs->addLogs($lClient->getLogs());
        $this->deserialize($lData);
    }
    //===============================================
    public function insertUser() {
        $lClient = new GSocket();
        $lData = $this->serialize();
        $lData = $lClient->callFacade("user", "insert_user", $lData);
        $this->m_logs->addLogs($lClient->getLogs());
        $this->deserialize($lData);
    }
    //===============================================
    public function updateUser() {
        $lClient = new GSocket();
        $lData = $this->serialize();
        $lData = $lClient->callFacade("user", "update_user", $lData);
        $this->m_logs->addLogs($lClient->getLogs());
        $this->deserialize($lData);
    }
    //===============================================
}
//===============================================
?>
