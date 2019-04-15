<?php   
    abstract class GHeader {
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            $lKey = GConfig::Instance()->getData("HEADER");
            if($lKey == "NORMAL") return GHeaderNormal::Instance();
            return GHeaderNormal::Instance();
        }
        //===============================================
        public function start($info = "") {
            $lTitle = GConfig::Instance()->getData("SITE_NAME");
            if($info != "") $lTitle = " | " . $lTitle;
            ?>
                <!DOCTYPE html>
                <html>
                    <head>
                        <title><?php echo $lTitle ?></title>
                        <style>
                            * {
                                color: white;
                                margin: 0px;
                                padding: 0px;
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
                                font-size: 18px;
                                text-align: center;                            
                            } 
                            input {
                                background-color: transparent;
                                border: none;
                                border-radius: 0px;
                                padding: 5px 10px 5px 10px;
                                font-size: 18px;
                                color: white;
                                width: 100%;
                            }
                            input:-webkit-autofill,
                            input:-webkit-autofill:hover, 
                            input:-webkit-autofill:focus {
                                -webkit-text-fill-color: white ;
                                transition: background-color 5000s ease-in-out 0s;
                            }
                            .Button {
                                background-color: #333363;
                                display: inline-block;
                                font-size: 18px;
                                border-radius: 5px;
                            }
                            .Button:hover {
                                background-color: #633333;
                            }
                            .Button:active {
                                background-color: #333363;
                            }
                        </style>
                    </head>
                    <body>
            <?php
        }
        //===============================================
        abstract public function include();
        //===============================================
    }
?>