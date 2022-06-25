<?php   
//===============================================
class GEnv extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDoms();
    }
    //===============================================
    public function onEnvUi() {
        $lCount = $this->countItem("env");        

        for($i = 0; $i < $lCount; $i++) {
            $lModel = $this->getItem3("env", "model", $i);
            $lId = $this->getItem3("env", "id", $i);
            $lValue = $this->getItem3("env", "value", $i);
            //
            if($lModel == "env/type") {
                $lValue = $this->getEnvType();
            }
            //
            echo sprintf("<input type='hidden' id='%s' value='%s'/>\n", $lId, $lValue);
        }
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
