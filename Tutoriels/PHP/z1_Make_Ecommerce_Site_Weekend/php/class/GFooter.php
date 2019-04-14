<?php   
    abstract class GFooter {
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            $lKey = GConfig::Instance()->getData("FOOTER");
            if($lKey == "NORMAL") return GFooterNormal::Instance();
            return GFooterNormal::Instance();
        }
        //===============================================
        abstract public function include();
        //===============================================
    }
?>