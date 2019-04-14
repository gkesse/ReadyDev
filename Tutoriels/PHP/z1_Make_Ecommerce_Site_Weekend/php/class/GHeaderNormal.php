<?php   
    class GHeaderNormal extends GHeader {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GHeaderNormal();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function include() {
            $this->start();
            ?>
                <div style="
                    position: relative;
                    border: 5px solid transparent;
                ">
                    <div style="
                        background-color: #633363;
                        position: absolute;
                        min-height: 150px;
                        top: 0px;
                        left: 0px;
                        right: 0px;
                        z-index: -1;
                        border: 5px solid #AAAAAA;
                    "></div>
                    <div style="
                        position: absolute;
                        min-height: 150px;
                        top: 150px;
                        bottom: 150px;
                        left: 0px;
                        right: 0px;
                        z-index: -1;
                        border: 5px solid transparent;
                    "></div>
                    <div style="
                        background-color: #636333;
                        position: absolute;
                        min-height: 150px;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        z-index: -1;
                        border: 5px solid #AAAAAA;
                    "></div>
                    <div style="
                        position: absolute;
                        top: 60px;
                        left: 0px;
                        right: 0px;
                        z-index: 1;
                        border: 5px solid transparent;
                    ">BANNER</div>
                    <div style="
                        max-width: 500px;
                        margin: auto;
                        padding-top: 100px;
                        padding-bottom: 100px;
                        border: 5px solid transparent;
                    ">
                        <div style="
                            border: 5px solid #AAAAAA;
                        ">
                            <div style="
                                position: relative;
                                background-color: #333333;
                                min-height: 50px;
                            ">
                                <div style="
                                    position: absolute;
                                    top: 12px;
                                    left: 0px;
                                    right: 0px;
                                    z-index: 1;
                                    border: 5px solid transparent;
                                ">MENU</div>
                            </div>
            <?php
        }
        //===============================================
    }
?>