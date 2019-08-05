<?php   
    class GSetting {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GSetting();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function load($file) {
            GFile::Instance()->existData($file);
            $lFile = GFile::Instance()->getRealPath($file);
			$lFopen = fopen($lFile, "r");
			
			while(!feof($lFopen)) {
				$lLine = fgets($lFopen);
				$lLine = GString::Instance()->trimData($lLine);
				if($lLine == "") continue;
				if($lLine[0] == "#") continue;
				$lSplit = GString::Instance()->splitData($lLine);
				$lKey = $lSplit[0];
				$lValue = $lSplit[1];
				GConfig::Instance()->setData($lKey, $lValue);
			}
            $lConfigShow = GConfig::Instance()->getData("CONFIG_SHOW");
            if($lConfigShow == "TRUE") GConfig::Instance()->showData();
            fclose($lFopen);
        }
        //===============================================
    }
?>