<?php   
    abstract class GForm {
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            $lKey = GConfig::Instance()->getData("FORM");
            if($lKey == "NORMAL") return GFormNormal::Instance();
            return GFormNormal::Instance();
        }
        //===============================================
        abstract public function input($label, $type, $id);
        abstract public function button($name, $type, $id);
        //===============================================
    }
?>