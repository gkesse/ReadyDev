<?php   
    class GFormNormal extends GForm {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GFormNormal();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function input($label, $type, $id) {
            ?>
                <div style="
                    border: 5px solid #333363;
                    overflow: hidden;
                    position: relative;
                    min-height: 40px;
                    margin: 5px 0px;
                ">
                    <div style="
                        background-color: #333363;
                        font-weight: bold;
                        min-width: 200px;
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        bottom: 0px;
                        padding: 5px;
                    "><label for="<?php echo $id; ?>"><?php echo $label; ?>:</label></div>
                    <div style="
                        background-color: rgba(255, 255, 255, 0.2);
                        position: absolute;
                        top: 0px;
                        left: 200px;
                        right: 0px;
                        bottom: 0px;
                    "><input style="
                        width
                    " type="<?php echo $type; ?>" id="<?php echo $id; ?>" name="<?php echo $id; ?>"></div>
                </div>
            <?php
        }
        //===============================================
        public function button() {
            ?>
                <div style="
                    background-color: #633333;
                    padding: 5px 10px 5px 10px;
                    display: inline-block;
                ">BUTTON</div>
            <?php
        }
        //===============================================
    }
?>