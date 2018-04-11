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
			$m_dir = $_SERVER["DOCUMENT_ROOT"];
			$m_dir = realpath($m_dir);
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
				$m_dirPath = realpath($m_dirPath);
				$m_dirCheck = is_dir($m_dirPath) ? 1: 0;
				$m_dirType = $this->getIcon($m_dirPath);
				$m_dirIcon = $this->m_iconMap[$m_dirType][0];
				$m_dirNameArr[] = array($m_dirCheck, $m_dirName, $m_dirIcon, $m_dirType);
			}
			closedir($m_dirPtr);
			usort($m_dirNameArr, array("GFilesystem", "SortDirectory"));
			return $m_dirNameArr;
        }
        //===============================================
        public function getFile2($root, $dir) {
			$m_dir = $_SERVER["DOCUMENT_ROOT"];
			$m_dir = realpath($m_dir);
			$m_dir .= "/".$root;
			$m_dir = realpath($m_dir);
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
				$m_find = $this->findData($m_dirName, $this->m_dirFilter2);
				if($m_find) continue;
				if($m_dirName == ".." && $m_rootLen == $m_dirLen) continue;
				$m_dirPath = $m_dir."/".$m_dirName;
				$m_dirPath = realpath($m_dirPath);
				$m_dirCheck = is_dir($m_dirPath) ? 1: 0;
				$m_dirType = $this->getIcon($m_dirPath);
				$m_dirIcon = $this->m_iconMap[$m_dirType][0];
				$m_dirNameArr[] = array($m_dirCheck, $m_dirName, $m_dirIcon, $m_dirType);
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
        public function getPath($dir) {
			$m_dir = $_SERVER["DOCUMENT_ROOT"];
			$m_rootLen = strlen($m_dir);
			$m_dir .= "/".$dir;
			$m_dir = realpath($m_dir);
			$m_dirLen = strlen($m_dir);
			if($m_dirLen <= $m_rootLen) return "";
			$m_dir = substr($m_dir, $m_rootLen);
			$m_dir = str_replace("\\", "/", $m_dir);
            return $m_dir;
        }
        //===============================================
        public function getPath2($rootPath, $filePath) {
			$m_dir = $_SERVER["DOCUMENT_ROOT"];
			$m_dir .= "/".$rootPath;
			$m_dir = realpath($m_dir);
			$m_rootLen = strlen($m_dir);
			$m_dir .= "/".$filePath;
			$m_dir = realpath($m_dir);
			$m_dirLen = strlen($m_dir);
			if($m_dirLen <= $m_rootLen) return "";
			$m_dir = substr($m_dir, $m_rootLen);
			$m_dir = str_replace("\\", "/", $m_dir);
            return $m_dir;
        }
        //===============================================
        public function getIcon($filename) {
            $m_ext = pathinfo($filename, PATHINFO_EXTENSION);
            $m_ext = strtolower($m_ext);
            $m_icon = "file";
            if(is_dir($filename)) {$m_icon = "dir";}
            else if(in_array($m_ext, $this->m_iconMap["img"])) {$m_icon = "img";}
            else if(in_array($m_ext, $this->m_iconMap["bin"])) {$m_icon = "bin";}
            else if(in_array($m_ext, $this->m_iconMap["bat"])) {$m_icon = "bat";}
            else if($m_ext != "") {$m_icon = "txt";}
            return $m_icon;
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