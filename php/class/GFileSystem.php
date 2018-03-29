<?php   
    class GFilesystem {
        //===============================================
        private static $m_instance = null;
		private $m_dirFilter;
        //===============================================
        private function __construct() {
			$this->m_dirFilter = array(
			"/^.$/i","/^.git$/i","/^.gitignore$/i","/^.htaccess$/i",
			"/^robots.txt$/i","/^README.md$/i","/^google/i","/^css$/i",
			"/^data$/i","/^email$/i","/^js$/i","/^lib$/i","/^img$/i","/^php$/i"
			);
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
				self::$m_instance = new GFilesystem();  
			}
			return self::$m_instance;
        }
        //===============================================
        public function getFile($dir) {
			if($dir != "" && $dir[0] != "/") $dir = "/".$dir;
			$m_dir = $_SERVER["DOCUMENT_ROOT"].$dir;
			$m_dirPtr = opendir($m_dir);
			$m_dirNameArr = array();
			while(1) {
				$m_dirName = readdir($m_dirPtr);
				if(!$m_dirName) break;
				$m_find = $this->findData($m_dirName, $this->m_dirFilter);
				if($m_find) continue;
				$m_dirNameArr[] = $m_dirName;
			}
			return $m_dirNameArr;
        }
        //===============================================
        public function findData($data, $dataMap) {
            foreach($dataMap as $pattern) {
                $m_match = preg_match($pattern, $data);
                if($m_match) return true;
            }
            return false;
        }
        //===============================================
    }
?>