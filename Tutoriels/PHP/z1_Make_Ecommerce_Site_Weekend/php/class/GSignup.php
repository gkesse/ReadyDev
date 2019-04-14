<?php   
    abstract class GSignup {
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            $lKey = GConfig::Instance()->getData("SIGNUP");
            if($lKey == "NORMAL") return GSignupNormal::Instance();
            return GSignupNormal::Instance();
        }
        //===============================================
        abstract public function include();
        //===============================================
    }
?>