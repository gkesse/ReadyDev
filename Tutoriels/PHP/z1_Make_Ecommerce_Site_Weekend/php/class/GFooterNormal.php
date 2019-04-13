<?php   
    class GFooterNormal extends GFooter {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GFooterNormal();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function include() {
            ?>
                                    <div style="
                                        background-color: #A333A3;
                                        min-height: 200px;
                                    "></div>
                                </div>
                            </div>
                            <div style="
                                position: absolute;
                                bottom: 150px;
                                left: 0px;
                                right: 0px;
                                z-index: -1;
                                border: 5px solid transparent;
                            ">FOOTER</div>
                        </div>
                    </body>
                </html>
            <?php
        }
        //===============================================
    }
?>