<?php   
    class GGlobal {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GGlobal();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function getHtml($name, $link) {
            $lHtml = "";
            $lHtml .= "<div class='Row2'>";
            $lHtml .= "<a class='Link' href='".$link."'>".$name."</a>";
            $lHtml .= "</div>";
            return $lHtml;
        }
        //===============================================
    }
?>