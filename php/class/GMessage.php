<?php   
    class GMessage {
        //===============================================
        private $m_moduleName;
        private $m_methodName;
        //===============================================
        public function __construct() {
            
        }
        //===============================================
        public function serialize($_code = "manager") {
            $lDom = new GCode();
            $lDom->createDoc();
            $lDom->addData($_code, "module", $this->m_moduleName);
            $lDom->addData($_code, "method", $this->m_methodName);
            return $lDom->toString();
        }
        //===============================================
        public function deserialize($_data, $_code = "manager") {
            $lDom = new GCode();
            $lDom->createDoc();
            $lDom->loadXml($_data);
            $this->m_moduleName = $lDom->getData($_code, "module");
            $this->m_methodName = $lDom->getData($_code, "method");
        }
        //===============================================
        public function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GMessage();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function saveMessage($data) {
            $m_file = "data/json/messages.json";
            $m_data = GJson::Instance()->getData($m_file);
            
            if(!isset($m_data["messages"])) {
                $m_data["messages"] = array();
            }
            
            $m_message = array(
            "name"=>$data["nameValue"],
            "email"=>$data["emailValue"],
            "subject"=>$data["subjectValue"],
            "message"=>$data["messageValue"]
            );
            
            array_push($m_data["messages"], $m_message);
            GJson::Instance()->saveData($m_file, $m_data);
        }
        //===============================================
    }
?>