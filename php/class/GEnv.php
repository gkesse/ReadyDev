<?php   
//===============================================
class GEnv extends GObject {
    //===============================================
    protected $m_envType;
    protected $m_isTestEnv;
    protected $m_isProdEnv;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_envType    = $this->getEnv("GPROJECT_ENV");
        $this->m_isTestEnv  = ($this->m_envType == "TEST");
        $this->m_isProdEnv  = !$this->m_isTestEnv;
        $this->m_envType    = ($this->m_isTestEnv ? "TEST" : "PROD");
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
    public function getEnvType() {
        return $this->m_envType;
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
