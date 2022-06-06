<?php   
//===============================================
class GEnv extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function isProdEnv() {
        $lEnvType = $this->getEnv("GPROJECT_ENV");
        if($lEnvType != "TEST") return true;
        return false;
    }
    //===============================================
    public function isTestEnv() {
        return !$this->isProdEnv();
    }
    //===============================================
    public function getEnvType() {
        if($this->isTestEnv()) return "TEST";
        return "PROD";
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
