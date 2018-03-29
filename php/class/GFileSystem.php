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
			$m_dir = $_SERVER["DOCUMENT_ROOT"];
			$m_rootLen = strlen($m_dir);
			$m_dir .= "/".$dir;
			$m_dir = realpath($m_dir);
			$m_dirLen = strlen($m_dir);
			if($m_dirLen < $m_rootLen) return array();
			$m_dirPtr = opendir($m_dir);
			$m_dirNameArr = array();
			while(1) {
				$m_dirName = readdir($m_dirPtr);
				if(!$m_dirName) break;
				$m_find = $this->findData($m_dirName, $this->m_dirFilter);
				if($m_find) continue;
				if($m_dirName == ".." && $m_rootLen == $m_dirLen) continue;
				$m_dirPath = $m_dir."/".$m_dirName;
				$m_isdir = is_dir($m_dirPath);
				$m_dirIcon = "file-o";
				if($m_isdir) $m_dirIcon = "folder";
				$m_dirNameArr[] = array($m_dirIcon, $m_dirName);
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