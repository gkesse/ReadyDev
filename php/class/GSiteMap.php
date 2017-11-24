<?php   
    class GSiteMap {
        //===============================================
        private static $m_instance = null;
        private $m_change = array();
        private $m_xml;
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
            
            /*$this->m_xml = new xmlwriter();
            $this->m_xml->openMemory();
            $this->m_xml->setIndent(TRUE);
            $this->m_xml->setIndentString('    ');*/
            echo $_SERVER["SERVER_NAME"];
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
            $this->_xml->startDocument('1.0', 'UTF-8');
            $this->_xml->startElement("urlset");
            $this->_xml->writeAttribute("xmlns", 
            "http://www.sitemaps.org/schemas/sitemap/0.9");
            $this->_xml->endElement();
        }
        //===============================================
    }
?>            