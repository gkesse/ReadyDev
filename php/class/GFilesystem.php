<?php   
    class GFilesystem {
        //===============================================
        private static $m_instance = null;
		private $m_dirFilter;
		private $m_dirFilter2;
		private $m_dirFilter3;
        private $m_iconMap = array();
        //===============================================
        private function __construct() {
			$this->m_dirFilter = array(
			"/^.$/i","/^.git$/i","/^.gitignore$/i","/^.htaccess$/i",
			"/^robots.txt$/i","/^README.md$/i","/^google/i","/^css$/i",
			"/^data$/i","/^email$/i","/^js$/i","/^lib$/i","/^img$/i","/^php$/"
			);
			$this->m_dirFilter2 = array(
			"/^.$/i","/^.git$/i","/^index.php$/i"
			);
			$this->m_dirFilter3 = array(
			"/.php$/i", "/.html$/i"
			);
            $this->m_iconMap = array(
            "dir" => array("folder"),
            "file" => array("file-o"),
            "img" => array("file-image-o", "png", "bmp", "jpeg", "jpg", "gif", "tiff"),
            "txt" => array("file-text-o"),
            "bin" => array("tasks", "exe", "dll", "lib", "so", "a", "jar"),
            "bat" => array("cogs", "bat", "sh")
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
			$lDir = $_SERVER["DOCUMENT_ROOT"];
			$lDir = realpath($lDir);
			$lRootLen = strlen($lDir);
			$lDir .= "/".$dir;
			$lDir = realpath($lDir);
			$lDirLen = strlen($lDir);
			if($lDirLen < $lRootLen) return array();
			$lDirPtr = opendir($lDir);
			$lDirNameArr = array();
			while(1) {
				$lDirName = readdir($lDirPtr);
				if(!$lDirName) break;
				$lFind = $this->findData($lDirName, $this->m_dirFilter);
				if($lFind) continue;
				if($lDirName == ".." && $lRootLen == $lDirLen) continue;
				$lDirPath = $lDir."/".$lDirName;
				$lDirPath = realpath($lDirPath);
				$lDirCheck = is_dir($lDirPath) ? 1: 0;
				$lDirType = $this->getIcon($lDirPath);
				$lDirIcon = $this->m_iconMap[$lDirType][0];
				$lDirNameArr[] = array($lDirCheck, $lDirName, $lDirIcon, $lDirType);
			}
			closedir($lDirPtr);
			usort($lDirNameArr, array("GFilesystem", "SortDirectory"));
			return $lDirNameArr;
        }
        //===============================================
        public function getFile2($root, $dir) {
			$lDir = $_SERVER["DOCUMENT_ROOT"];
			$lDir = realpath($lDir);
			$lDir .= "/".$root;
			$lDir = realpath($lDir);
			$lRootLen = strlen($lDir);
			$lDir .= "/".$dir;
			$lDir = realpath($lDir);
			$lDirLen = strlen($lDir);
			if($lDirLen < $lRootLen) return array();
			$lDirPtr = opendir($lDir);
			$lDirNameArr = array();
			while(1) {
				$lDirName = readdir($lDirPtr);
				if(!$lDirName) break;
				$lFind = $this->findData($lDirName, $this->m_dirFilter2);
				if($lFind) continue;
				if($lDirName == ".." && $lRootLen == $lDirLen) continue;
				$lDirPath = $lDir."/".$lDirName;
				$lDirPath = realpath($lDirPath);
				$lDirCheck = is_dir($lDirPath) ? 1: 0;
				$lDirType = $this->getIcon($lDirPath);
				$lDirIcon = $this->m_iconMap[$lDirType][0];
				$lDirNameArr[] = array($lDirCheck, $lDirName, $lDirIcon, $lDirType);
			}
			closedir($lDirPtr);
			usort($lDirNameArr, array("GFilesystem", "SortDirectory"));
			return $lDirNameArr;
        }
        //===============================================
        public function findData($data, $dataMap) {
            foreach($dataMap as $pattern) {
                $lMatch = preg_match($pattern, $data);
                if($lMatch) return true;
            }
            return false;
        }
        //===============================================
        public function getPath($dir) {
			$lDir = $_SERVER["DOCUMENT_ROOT"];
			$lRootLen = strlen($lDir);
			$lDir .= "/".$dir;
			$lDir = realpath($lDir);
			$lDirLen = strlen($lDir);
			if($lDirLen <= $lRootLen) return "";
			$lDir = substr($lDir, $lRootLen);
			$lDir = str_replace("\\", "/", $lDir);
            return $lDir;
        }
        //===============================================
        public function getPath2($rootPath, $filePath) {
			$lDir = $_SERVER["DOCUMENT_ROOT"];
			$lDir .= "/".$rootPath;
			$lDir = realpath($lDir);
			$lRootLen = strlen($lDir);
			$lDir .= "/".$filePath;
			$lDir = realpath($lDir);
			$lDirLen = strlen($lDir);
			if($lDirLen <= $lRootLen) return "";
			$lDir = substr($lDir, $lRootLen);
			$lDir = str_replace("\\", "/", $lDir);
            return $lDir;
        }
        //===============================================
        public function getIcon($filename) {
            $lExt = pathinfo($filename, PATHINFO_EXTENSION);
            $lExt = strtolower($lExt);
            $lIcon = "file";
            if(is_dir($filename)) {$lIcon = "dir";}
            else if(in_array($lExt, $this->m_iconMap["img"])) {$lIcon = "img";}
            else if(in_array($lExt, $this->m_iconMap["bin"])) {$lIcon = "bin";}
            else if(in_array($lExt, $this->m_iconMap["bat"])) {$lIcon = "bat";}
            else if($lExt != "") {$lIcon = "txt";}
            return $lIcon;
        }
        //===============================================
        private static function SortDirectory($dataA, $dataB) {
            $lSort = false;
            if($dataA[0] < $dataB[0]) $lSort = !$lSort; 
            else if($dataA[0] == $dataB[0]) {
                $lStrcmp = strcmp(strtolower($dataA[1]), strtolower($dataB[1]));
                if($lStrcmp > 0) $lSort = !$lSort;
            }
            return $lSort;
        }
        //===============================================
    }
?>