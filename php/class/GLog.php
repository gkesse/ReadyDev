<?php   
//===============================================
class GLog extends GObject {
    //===============================================
    static private $m_instance = null;
    //===============================================
    private $errors = array();
    private $logs = array();
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDoms();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GLog();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function serialize($errors = "errors", $logs = "logs") {
        $lData = new GCode();
        $lData->createDoc();
        $lData->addList($errors, $this->errors);
        $lData->addList($logs, $this->logs);
        return $lData->toStringData();
    }
    //===============================================
    public function deserialize($data, $errors = "errors", $logs = "logs") {
        $lData = new GCode();
        $lData->loadXml($data);
        $lData->getList($errors, $this->errors);
        $lData->getList($logs, $this->logs);
    }
    //===============================================
    public function addError($error) {
        $lDateObj = new GDate();
        $lEnv = new GEnv();
        $lProdOn = ($this->getItemC("env", "prod", "value") == "1");
        $lBacktrace = debug_backtrace();
        $lCaller = array_shift($lBacktrace);
        $lDate = $lDateObj->getDateTime();
        $lFile = $lCaller['file'];
        $lLine = $lCaller['line'];
        $lFunc = debug_backtrace()[1]['function'];
        $lData = $error;
        if($lEnv->isTestEnv() && !$lProdOn) {
            $lData = sprintf("%s : %s : [%d] : %s :\n%s", $lDate, $lFile, $lLine, $lFunc, $error);
        }
        $this->errors[] = $lData;
    }
    //===============================================
    public function addLog($log) {
        $lDateObj = new GDate();
        $lEnv = new GEnv();
        $lProdOn = ($this->getItemC("env", "prod", "value") == "1");
        $lBacktrace = debug_backtrace();
        $lCaller = array_shift($lBacktrace);
        $lDate = $lDateObj->getDateTime();
        $lFile = $lCaller['file'];
        $lLine = $lCaller['line'];
        $lFunc = debug_backtrace()[1]['function'];
        $lData = $log;
        if($lEnv->isTestEnv() && !$lProdOn) {
            $lData = sprintf("%s : %s : [%d] : %s :\n%s", $lDate, $lFile, $lLine, $lFunc, $log);
        }
        $this->logs[] = $lData;
    }
    //===============================================
    public function hasErrors() {
        return !empty($this->errors);
    }
    //===============================================
    public function onLogUi() {
        $lCount = $this->countItem("logs");
        $lTitle = $this->getData("logs", "title");
        $lIntro = $this->getData("logs", "intro");
        $lModalId = $this->getData("logs", "modal_id");
        $lBodyId = $this->getData("logs", "body_id");
        $lFormId = $this->getData("logs", "form_id");
        $lMsgId = $this->getData("logs", "msg_id");
        $lModule = $this->getData("logs", "module");
        $lKeypressCB = $this->getData("logs", "keypress_cb");
        $lCloseCB = $this->getData("logs", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='server_call(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);        
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        echo sprintf("<div class='Content15'>");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getData3("logs", "category", $i);
            $lModel = $this->getData3("logs", "model", $i);
            $lId = $this->getData3("logs", "id", $i);
            
            if($lCategory == "logs/body") {
                if($lModel == "label") {
                    echo sprintf("<div id='%s'></div>\n", $lId);
                }
            }
        }
        
        echo sprintf("</div>");        
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getData3("logs", "category", $i);
            $lModel = $this->getData3("logs", "model", $i);
            $lId = $this->getData3("logs", "id", $i);
            $lModule = $this->getData3("logs", "module", $i);
            $lCallback = $this->getData3("logs", "callback", $i);
            $lPicto = $this->getData3("logs", "picto", $i);
            $lText = $this->getData3("logs", "text", $i);
            
            if($lCategory == "logs/button") {
                if($lModel == "button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lCallback, $lPicto, $lText);
                }
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
        echo sprintf("<div class='Row14' id='%s'></div>\n", $lMsgId);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onErrorUi() {
        $lCount = $this->countItem("errors");
        $lTitle = $this->getData("errors", "title");
        $lIntro = $this->getData("errors", "intro");
        $lModalId = $this->getData("errors", "modal_id");
        $lBodyId = $this->getData("errors", "body_id");
        $lFormId = $this->getData("errors", "form_id");
        $lMsgId = $this->getData("errors", "msg_id");
        $lModule = $this->getData("errors", "module");
        $lKeypressCB = $this->getData("errors", "keypress_cb");
        $lCloseCB = $this->getData("errors", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='server_call(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);        
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        echo sprintf("<div class='Content15'>");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getData3("errors", "category", $i);
            $lModel = $this->getData3("errors", "model", $i);
            $lId = $this->getData3("errors", "id", $i);
            
            if($lCategory == "errors/body") {
                if($lModel == "label") {
                    echo sprintf("<div id='%s'></div>\n", $lId);
                }
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getData3("errors", "category", $i);
            $lModel = $this->getData3("errors", "model", $i);
            $lId = $this->getData3("errors", "id", $i);
            $lModule = $this->getData3("errors", "module", $i);
            $lCallback = $this->getData3("errors", "callback", $i);
            $lPicto = $this->getData3("errors", "picto", $i);
            $lText = $this->getData3("errors", "text", $i);
            
            if($lCategory == "errors/button") {
                if($lModel == "button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lCallback, $lPicto, $lText);
                }
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
        echo sprintf("<div class='Row14' id='%s'></div>\n", $lMsgId);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>
