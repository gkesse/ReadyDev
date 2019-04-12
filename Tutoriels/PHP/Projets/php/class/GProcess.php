<?php   
    abstract class GProcess {
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            $lKey = GConfig::Instance()->getData("PROCESS");
            if($lKey == "PRINT") return GProcessPrint::Instance();
            return GProcessPrint::Instance();
        }
        //===============================================
        abstract public function run();
        //===============================================
    }
?>