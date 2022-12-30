<?php   
//===============================================
class GEnvUi extends GObjectUi {
    //===============================================
    protected $m_env;
    protected $m_envType;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_env        = new GEnv();
        $this->m_envType    = $this->m_env->getEnvType();
    }
    //===============================================
    public function run() {
        $this->onEnv();
        $this->onSearch();
    }
    //===============================================
    public function onEnv() {
        echo sprintf("<input type='hidden' id='env_prod_on' value='1'/>\n");
        echo sprintf("<input type='hidden' id='env_type' value='%s'/>\n", $this->m_envType);
    }
    //===============================================
    public function onSearch() {
        echo sprintf("<input type='hidden' id='search_data_size' value='8'/>\n");
        echo sprintf("<input type='hidden' id='search_data_count' value='0'/>\n");
        echo sprintf("<input type='hidden' id='search_data_offset' value='0'/>\n");
        echo sprintf("<input type='hidden' id='search_last_id' value='0'/>\n");
    }
    //===============================================
 }
//===============================================
?>
