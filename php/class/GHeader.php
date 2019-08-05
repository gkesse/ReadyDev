<?php   
    abstract class GHeader {
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            $lKey = GConfig::Instance()->getData("HEADER");
            if($lKey == "DEFAULT") return GHeaderDefault::Instance();
            return GHeaderDefault::Instance();
        }
        //===============================================
        abstract public function load();
        //===============================================
    }
?>