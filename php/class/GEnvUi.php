<?php   
//===============================================
class GEnvUi extends GObjectUi {
    //===============================================
    protected $m_env;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_env    = new GEnv();
    }
    //===============================================
    public function run() {
        $lCount = $this->m_app->countItem("env");        

        for($i = 0; $i < $lCount; $i++) {
            $lModel = $this->m_app->getItem3("env", "model", $i);
            $lId = $this->m_app->getItem3("env", "id", $i);
            $lValue = $this->m_app->getItem3("env", "value", $i);
            //
            if($lModel == "env/type") {
                $lValue = $this->m_env->getEnvType();
            }
            //
            echo sprintf("<input type='hidden' id='%s' value='%s'/>\n", $lId, $lValue);
        }
    }
    //===============================================
 }
//===============================================
?>
