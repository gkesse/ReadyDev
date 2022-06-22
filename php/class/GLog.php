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
        $lEnvObj = new GEnv();
        $lProdOn = ($this->getItem("test", "prod_on") == "1");
        $lBacktrace = debug_backtrace();
        $lCaller = array_shift($lBacktrace);
        $lDate = $lDateObj->getDateTime();
        $lFile = $lCaller['file'];
        $lLine = $lCaller['line'];
        $lFunc = debug_backtrace()[1]['function'];
        $lData = $error;
        if($lEnvObj->isTestEnv() && !$lProdOn) {
            $lData = sprintf("%s : %s : [%d] : %s :\n%s", $lDate, $lFile, $lLine, $lFunc, $error);
        }
        $this->errors[] = $lData;
    }
    //===============================================
    public function addLog($log) {
        $lDateObj = new GDate();
        $lEnvObj = new GEnv();
        $lProdOn = ($this->getItem("test", "prod_on") == "1");
        $lBacktrace = debug_backtrace();
        $lCaller = array_shift($lBacktrace);
        $lDate = $lDateObj->getDateTime();
        $lFile = $lCaller['file'];
        $lLine = $lCaller['line'];
        $lFunc = debug_backtrace()[1]['function'];
        $lData = $log;
        if($lEnvObj->isTestEnv() && !$lProdOn) {
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
        $lTitle = $this->getItem("logs", "title");
        $lIntro = $this->getItem("logs", "intro");
        $lModalId = $this->getItem("logs", "modal_id");
        $lBodyId = $this->getItem("logs", "body_id");
        $lFormId = $this->getItem("logs", "form_id");
        $lMsgId = $this->getItem("logs", "msg_id");
        $lModule = $this->getItem("logs", "module");
        $lKeypressCB = $this->getItem("logs", "keypress_cb");
        $lCloseCB = $this->getItem("logs", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='server_call(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);        
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        echo sprintf("<div class='Content15'>");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("logs", "category", $i);
            $lModel = $this->getItem3("logs", "model", $i);
            $lId = $this->getItem3("logs", "id", $i);
            
            if($lCategory == "logs/body") {
                if($lModel == "label") {
                    echo sprintf("<div id='%s'></div>\n", $lId);
                }
            }
        }
        
        echo sprintf("</div>");        
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("logs", "category", $i);
            $lType = $this->getItem3("logs", "type", $i);
            $lId = $this->getItem3("logs", "id", $i);
            $lModule = $this->getItem3("logs", "module", $i);
            $lCallback = $this->getItem3("logs", "callback", $i);
            $lPicto = $this->getItem3("logs", "picto", $i);
            $lText = $this->getItem3("logs", "text", $i);
            
            if($lCategory == "logs/button") {
                if($lType == "button") {
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
        $lTitle = $this->getItem("errors", "title");
        $lIntro = $this->getItem("errors", "intro");
        $lModalId = $this->getItem("errors", "modal_id");
        $lBodyId = $this->getItem("errors", "body_id");
        $lFormId = $this->getItem("errors", "form_id");
        $lMsgId = $this->getItem("errors", "msg_id");
        $lModule = $this->getItem("errors", "module");
        $lKeypressCB = $this->getItem("errors", "keypress_cb");
        $lCloseCB = $this->getItem("errors", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='server_call(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);        
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        echo sprintf("<div class='Content15'>");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("errors", "category", $i);
            $lModel = $this->getItem3("errors", "model", $i);
            $lId = $this->getItem3("errors", "id", $i);
            
            if($lCategory == "errors/body") {
                if($lModel == "label") {
                    echo sprintf("<div id='%s'></div>\n", $lId);
                }
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("errors", "category", $i);
            $lType = $this->getItem3("errors", "type", $i);
            $lId = $this->getItem3("errors", "id", $i);
            $lModule = $this->getItem3("errors", "module", $i);
            $lCallback = $this->getItem3("errors", "callback", $i);
            $lPicto = $this->getItem3("errors", "picto", $i);
            $lText = $this->getItem3("errors", "text", $i);
            
            if($lCategory == "errors/button") {
                if($lType == "button") {
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
