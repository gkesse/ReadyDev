<?php   
//===============================================
class GEnvUi extends GObject {
    //===============================================
    private $m_env;
    //===============================================
    public function __construct($_codeName = "env") {
        parent::__construct($_codeName);
        $this->loadDom(__CLASS__);
        $this->m_env    = new GEnv();
    }
    //===============================================
    public function run() {
        $lCount = $this->m_dom->countItem("env");        

        for($i = 0; $i < $lCount; $i++) {
            $lModel = $this->m_dom->getItem3("env", "model", $i);
            $lId = $this->m_dom->getItem3("env", "id", $i);
            $lValue = $this->m_dom->getItem3("env", "value", $i);

            if($lModel == "input") {
                if($lId == "EnvType") {
                    $lValue = $this->m_env->getEnvType();
                }
                echo sprintf("<input type='hidden' id='%s' value='%s'/>\n", $lId, $lValue);
            }
            else if($lModel == "div") {
                echo sprintf("<div id='%s' hidden></div>", $lId);
            }
        }
    }
    //===============================================
 }
//===============================================
?>
