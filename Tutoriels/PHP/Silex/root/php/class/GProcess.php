<?php 
    abstract class GProcess {
        //===============================================
        abstract public function run();
        //===============================================
        public static function Instance() {
            $lType = GConfig::Instance()->getData("PROCESS_TYPE");
            if($lType == "MESSEAGE") return GProcessMessage::Instance();
            if($lType == "ROUTER") return GProcessRouter::Instance();
            return GProcessMessage::Instance(); 
        }
        //===============================================
    }
?>        