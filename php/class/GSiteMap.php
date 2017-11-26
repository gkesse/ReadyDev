<?php   
    class GSiteMap {
        //===============================================
        private static $m_instance = null;
        private $m_change = array();
        private $m_xml;
        private $m_filename;
        private $m_file;
        private $m_urls = array();
        private $m_urlMap = array();
        private $m_compiler = array();
        //===============================================
        private function __construct() {
            $this->m_change = array(
            'always', 
            'hourly', 
            'daily', 
            'weekly', 
            'monthly', 
            'yearly', 
            'never');
            
            $this->m_compiler = array(
            "/NMake/", 
            "/MinGW/", 
            "/Cygwin/", 
            "/Make/", 
            "/CMake/NMake/", 
            "/QMake/NMake/");
            
            $this->m_xml = new xmlwriter();
            $this->m_xml->openMemory();
            $this->m_xml->setIndent(TRUE);
            $this->m_xml->setIndentString('    ');
            
            $this->m_filename = GGlobal::Instance()->getPath("data/sitemaps/sitemap.xml");
            $this->m_file = fopen($this->m_filename, "w");
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GSiteMap();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function generate() {
            $this->getUrls();
            $this->m_xml->startDocument('1.0', 'UTF-8');
            $this->m_xml->startElement("urlset");
            $this->m_xml->writeAttribute("xmlns", 
            "http://www.sitemaps.org/schemas/sitemap/0.9");
            
            foreach($this->m_urls as $m_url) {
                $this->m_xml->startElement("url");
                foreach($m_url as $key => $value) {
                    if(isset($m_url[$key]) == true) $this->m_xml->writeElement($key, $value);
                }
                $this->m_xml->endElement();
            }
            $this->m_xml->endElement();
            fwrite($this->m_file, $this->m_xml->flush());
            fclose($this->m_file);
        }
        //===============================================
        public function getUrls() {
            $m_root = "/data/json/";
            $m_path = GGlobal::Instance()->getPath($m_root);
            $m_handle = opendir($m_path);
            if($m_handle == true) { 
                while(1) {
                    $m_doc = readdir($m_handle);
                    if($m_doc == false) break;
                    if($m_doc == "." || $m_doc == "..") continue;
                    $m_ext = pathinfo($m_doc, PATHINFO_EXTENSION);
                    if($m_ext != "json") continue; 
                    $m_path = $m_root.$m_doc;
                    $m_data = GJson::Instance()->getData($m_path);
                    if(isset($m_data["sitemap"])) {
                        if($m_data["sitemap"] == "yes") {
                            $this->getData($m_data);
                        }
                    }
                }
            }
            $this->addUrls();
        }
        //===============================================
        public function getData($data) {
            if(is_array($data)) {
                foreach($data as $key => $value) {
                    if(is_array($value)) {
                        $this->getData($value);
                    }
                    else {
                        if($key == "link" && !is_numeric($key)) {
                            if(!empty($value)) {
                                if($value[0] != "#") {
                                    if(!in_array($value, $this->m_urlMap)) {
                                        $m_isCompiler = preg_match("#.*/NMake/.*#", $value);
                                        if($m_isCompiler == true) {
                                            foreach($this->m_compiler as $m_item) {
                                                $m_result = str_replace("/NMake/", $m_item, $value);
                                                $data["link"] = $m_result;
                                                $this->m_urlMap[] = $data;
                                            }
                                        }
                                        else {
                                            $this->m_urlMap[] = $data;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        //===============================================
        public function addUrls() {
            foreach($this->m_urlMap as $m_link) {
                $m_url = array();
                if(isset($m_link["link"])) $m_url["loc"] = GGlobal::Instance()->getUrl($m_link["link"]);
                if(isset($m_link["link"])) $m_url["lastmod"] = GFile::Instance()->getDate($m_link["link"]);
                $m_url["changefreq"] = "weekly";
                if(isset($m_link["freq"])) $m_url["changefreq"] = $m_link["freq"];
                $m_url["priority"] = "0.5";
                if(isset($m_link["prio"])) $m_url["priority"] = $m_link["prio"];
                $this->m_urls[] = $m_url;
            }
        }
        //===============================================
    }
?>            