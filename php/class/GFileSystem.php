<?php   
    class GFilesystem {
        //===============================================
        private static $m_instance = null;
		private $m_dirFilter;
		private $m_fileEdit;
		private $m_dirRel;
        //===============================================
        private function __construct() {
			$this->m_dirFilter = array(
			"/^.$/i","/^.git$/i","/^.gitignore$/i","/^.htaccess$/i",
			"/^robots.txt$/i","/^README.md$/i","/^google/i","/^css$/i",
			"/^data$/i","/^email$/i","/^js$/i","/^lib$/i","/^img$/i","/^php$/i"
			);
			$this->m_fileEdit = array(
			"/.php$/i", "/.html$/i"
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
			$this->m_dirRel = "";
			if($m_dirLen > $m_rootLen) $this->m_dirRel .= substr($m_dir, $m_rootLen);
			$m_dirPtr = opendir($m_dir);
			$m_dirNameArr = array();
			while(1) {
				$m_dirName = readdir($m_dirPtr);
				if(!$m_dirName) break;
				$m_find = $this->findData($m_dirName, $this->m_dirFilter);
				if($m_find) continue;
				if($m_dirName == ".." && $m_rootLen == $m_dirLen) continue;
				$m_dirPath = $m_dir."/".$m_dirName;
				$m_dirCheck = is_dir($m_dirPath);
				$m_dirIcon = ($m_dirCheck) ? "folder" : "file-o";
				$m_dirType = ($m_dirCheck) ? 1 : 0;
				if(!$m_dirType) {
					$m_find = $this->findData($m_dirName, $this->m_fileEdit);
					if(!$m_find) continue;
				}
				$m_dirNameArr[] = array($m_dirType, $m_dirName, $m_dirIcon);
			}
			closedir($m_dirPtr);
			usort($m_dirNameArr, array("GFilesystem", "SortDirectory"));
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
        public function getDirRel() {
            return $this->m_dirRel;
        }
        //===============================================
        private static function SortDirectory($dataA, $dataB) {
            $m_sort = false;
            if($dataA[0] < $dataB[0]) $m_sort = !$m_sort; 
            else if($dataA[0] == $dataB[0]) {
                $m_strcmp = strcmp(strtolower($dataA[1]), strtolower($dataB[1]));
                if($m_strcmp > 0) $m_sort = !$m_sort;
            }
            return $m_sort;
        }
        //===============================================
    }
?>