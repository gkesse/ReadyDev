<?php   
    abstract class GSqlite {
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            $lKey = GConfig::Instance()->getData("FORM");
            if($lKey == "NORMAL") return GSqlitePdo::Instance();
            return GSqliteNormal::Instance();
        }
        //===============================================
        abstract public function input($label, $type, $id);
        abstract public function button($name, $type, $id);
        //===============================================
    }
?>