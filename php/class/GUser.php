<?php   
//===============================================
class GUser extends GModule {
    //===============================================
    private $email = "";
    private $password = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($code = "user") {
        $lData = new GCode();
        $lData->createDoc();
        $lData->addData($code, "email", $this->email);
        $lData->addData($code, "password", $this->password);
        return $lData->toStringCode($code);
    }
    //===============================================
    public function deserialize($data, $code = "user") {
        parent::deserialize($data);
        $lData = new GCode();
        $lData->loadXmlData($data);
        $this->email = $lData->getItem($code, "email");
        $this->password = $lData->getItem($code, "password");
    }
    //===============================================
    public function setEmail($email) {
        $this->email = $email;
    }
    //===============================================
    public function setPassword($password) {
        $this->password = $password;
    }
    //===============================================
    public function getEmail() {
        return $this->email;
    }
    //===============================================
    public function getPassword() {
        return $this->password;
    }
    //===============================================
}
//===============================================
?>
