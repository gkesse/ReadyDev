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
            ?>
                <!DOCTYPE html>
                <html>
                <head>
                    <title>ReadyShop</title>
                    <style>
                        * {
                            color: white;
                            margin: 0;
                            padding: 0;
                            box-sizing: border-box;
                        }

                        *:focus { 
                            border: none;
                            outline: none;
                        }

                        html {
                            -webkit-text-size-adjust: 100%;
                            -webkit-tap-highlight-color: transparent;
                            overflow: auto;
                            scrollbar-color: #5f6681 #051039;
                            scrollbar-width: auto;
                        }

                        body {
                            background-color: #051039;
                            font-family: arial;
                            font-size: 16px;
                            text-align: center;
                        }                        
                    </style>
                </head>
                <body>
                    <div style="
                        border: 5px solid transparent;
                        position: relative;
                    ">
                        <div style="
                            position: absolute;
                            top: 150px;
                            left: 0px;
                            right: 0px;
                            z-index: -1;
                            border: 5px solid transparent;
                        ">HEADER</div>
                        <div style="
                            position: absolute;
                            min-height: 300px;
                            top: 0px;
                            left: 0px;
                            right: 0px;
                            z-index: -1;
                            border: 5px solid #AAAAAA;
                        "></div>
                        <div style="
                            position: absolute;
                            min-height: 300px;
                            top: 300px;
                            bottom: 300px;
                            left: 0px;
                            right: 0px;
                            z-index: -1;
                            border: 5px solid transparent;
                        "></div>
                        <div style="
                            position: absolute;
                            min-height: 300px;
                            bottom: 0;
                            left: 0;
                            right: 0;
                            z-index: -1;
                            border: 5px solid #AAAAAA;
                        "></div>
                        <div style="
                            max-width: 1000px;
                            margin: auto;
                            padding-top: 250px;
                            padding-bottom: 250px;
                        ">
                            <div style="
                                border: 5px solid #AAAAAA;
                            ">
                                <div style="
                                    background-color: #333333;
                                    min-height: 50px;
                                "></div>
            <?php
        }
        //===============================================
    }
?>