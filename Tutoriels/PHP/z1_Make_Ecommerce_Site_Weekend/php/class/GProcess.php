<?php   
    abstract class GProcess {
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            $lKey = GConfig::Instance()->getData("PROCESS");
            if($lKey == "PRINT") return GProcessPrint::Instance();
            if($lKey == "CONFIG") return GProcessConfig::Instance();
            if($lKey == "ECOMMERCE") return GProcessEcommerce::Instance();
            if($lKey == "SIGNUP") return GProcessSignup::Instance();
            return GProcessPrint::Instance();
        }
        //===============================================
        abstract public function run();
        //===============================================
    }
?>