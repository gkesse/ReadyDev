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
                    position: relative;
                    background-color: #336363;
                    min-height: 350px;
                ">
                    <div style="
                        position: absolute;
                        top: 120px;
                        left: 0px;
                        right: 0px;
                        z-index: 1;
                        border: 5px solid transparent;
                    ">BODY</div>
                </div>
            <?php
        }
        //===============================================
    }
?>