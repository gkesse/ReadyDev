<?php   
    class GMessage {
        //===============================================
        // private members
        private static $m_instance = null;
        //===============================================
        // contructor
        private function __construct() {
            
        }
        //===============================================
        // static methods
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GMessage();  
            }
            
            return self::$m_instance;
        }
        //===============================================
        // public methods
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