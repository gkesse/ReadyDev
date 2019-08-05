<?php   
    abstract class GProcess {
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            $lKey = GConfig::Instance()->getData("PROCESS");
            if($lKey == "DEFAULT") return GProcessReadyWeb::Instance();
            return GProcessReadyWeb::Instance();
        }
        //===============================================
        abstract public function run();
        //===============================================
    }
?>