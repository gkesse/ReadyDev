<?php   
    abstract class GBody {
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            $lKey = GConfig::Instance()->getData("BODY");
            if($lKey == "NORMAL") return GBodyNormal::Instance();
            return GBodyNormal::Instance();
        }
        //===============================================
        abstract public function include();
        //===============================================
    }
?>