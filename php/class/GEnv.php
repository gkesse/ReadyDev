<?php   
//===============================================
class GEnv extends GObject {
    //===============================================
    private $m_envType;
    private $m_isTestEnv;
    private $m_isProdEnv;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_envType = $this->getEnv("GPROJECT_ENV");
        $this->m_isTestEnv = ($this->m_envType == "TEST");
        $this->m_isProdEnv = !$this->m_isTestEnv;
    }
    //===============================================
    public function isProdEnv() {
        return $this->m_isProdEnv;
    }
    //===============================================
    public function isTestEnv() {
        return $this->m_isTestEnv;
    }
    //===============================================
    public function getEnv($key, $defaultValue = "") {
        $lEnv = getenv($key);
        if($lEnv == false) return $defaultValue;
        return $lEnv;
    }
    //===============================================
 }
//===============================================
?>
