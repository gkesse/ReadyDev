<?php   
//===============================================
class GLogin {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private function __construct() {

    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GLogin();  
        }
        return self::$m_instance;
    }
    //===============================================
    // method
    //===============================================
    public function createRoot() {
        $lCount = $this->countRoot();
        if($lCount == 0) {$this->insertRoot();}
    }    
    //===============================================
    public function countRoot() {
        $lApp = GManager::Instance()->getData()->app;
        $lCount = GSQLite::Instance()->queryValue(sprintf("
        select count(*) from user_data
        where user_name = '%s'
        ", $lApp->root_name));
        return intval($lCount);
    }    
    //===============================================
    public function insertRoot() {
        $lApp = GManager::Instance()->getData()->app;
        GSQLite::Instance()->queryWrite(sprintf("
        insert into user_data (user_name, user_pass, user_group)
        values ('%s', '%s', 'root')
        ", $lApp->root_name, $lApp->root_pass));
    }    
    //===============================================
    public function getGroup($username) {
        $lApp = GManager::Instance()->getData()->app;
        $lGroup = GSQLite::Instance()->queryValue(sprintf("
        select user_group from user_data
        where user_name = '%s'
        ", $username));
        return $lGroup;
    }    
    //===============================================
    public function login() {
        $lApp = GManager::Instance()->getData()->app;
        $lUsername = $_POST["username"];
        $lPassword = $_POST["password"];
        $lPassword = GManager::Instance()->getPassword($lUsername, $lPassword);
        $lCount = GSQLite::Instance()->queryValue(sprintf("
        select count(*) from user_data
        where user_name = '%s'
        and user_pass = '%s'
        ", $lUsername, $lPassword));
        $lCount = intval($lCount);
        if($lCount > 0) {
            $lApp->login_on = "on";
            $lApp->login_group = $this->getGroup($lUsername);
            $lApp->user_name = $lUsername;
            GManager::Instance()->redirect($lApp->last_url);
        }
        else {
            $lApp->login_on = "off";
        }
    }    
    //===============================================
}
//===============================================
?>