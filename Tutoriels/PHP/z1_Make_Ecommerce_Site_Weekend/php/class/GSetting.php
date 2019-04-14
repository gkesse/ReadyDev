<?php   
    class GSetting {
        //===============================================
        private static $m_instance = null;
		const G_CHAR_COMMENT = '#';
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
			$lFile = fopen($file, "r");
			
			while(!feof($lFile)) {
				$lLine = fgets($lFile);
				$lLine = GString::Instance()->trim($lLine);
				if($lLine == "") continue;
				if($lLine[0] == self::G_CHAR_COMMENT) continue;
				$lSplit = GString::Instance()->split($lLine);
				$lKey = $lSplit[0];
				$lValue = $lSplit[1];
				GConfig::Instance()->setData($lKey, $lValue);
			}
			//GConfig::Instance()->showData();
        }
        //===============================================
    }
?>