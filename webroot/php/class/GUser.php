<?php   
//===============================================
class GUser {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private function __construct() {

    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GUser();
        }
        return self::$m_instance;
    }
    //===============================================
    // method
    //===============================================
    public function createUser($username, $password) {
        $lCount = $this->countUser($username);
        if($lCount == 0) {$this->insertUser($username, $password);}
    }    
    //===============================================
    public function countUser($username) {
        $lCount = GSQLite::Instance()->queryValue(sprintf("
        select count(*) from user_data
        where lower(user_name) = '%s'
        ", strtolower($username)));
        return intval($lCount);
    }    
    //===============================================
    public function insertUser($username, $password) {
        $lPassword = GManager::Instance()->getPassword($username, $password);
        GSQLite::Instance()->queryWrite(sprintf("
        insert into user_data (user_name, user_pass, user_group)
        values ('%s', '%s', 'user')
        ", $username, $lPassword));
    }    
    //===============================================
}
//===============================================
?>