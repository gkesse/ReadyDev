<?php   
    class GBodyNormal extends GBody {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GBodyNormal();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function include() {
            ?>
                <div style="
                    background-color: #3333A3;
                    min-height: 600px;
                "></div>
            <?php
        }
        //===============================================
    }
?>