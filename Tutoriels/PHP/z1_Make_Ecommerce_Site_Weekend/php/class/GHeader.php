<?php   
    abstract class GHeader {
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            $lKey = GConfig::Instance()->getData("HEADER");
            if($lKey == "NORMAL") return GHeaderNormal::Instance();
            return GHeaderNormal::Instance();
        }
        //===============================================
        abstract public function include();
        //===============================================
    }
?>