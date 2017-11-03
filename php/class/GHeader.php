<?php   
    class GHeader {
        //===============================================
        // private members
        private static $m_instance = null;
        private $m_title;
        private $m_menu;
        private $m_view;
        private $m_link;
        //===============================================
        // contructor
        private function __construct() {

        }
        //===============================================
        // static methods
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GHeader();  
            }
            
            return self::$m_instance;
        }
        //===============================================
        // public methods
        public function setTitle($title) {
            $this->m_title = $title;
            $this->setMenu($title);
            $this->setView($title);
        }
        //===============================================
        public function setMenu($menu) {
            $this->m_menu = $menu;
        }
        //===============================================
        public function setView($view) {
            $this->m_view = $view;
        }
        //===============================================
        public function setLink($link) {
            $this->m_link = $link;
        }
        //===============================================
        public function getTitle() {
            return $this->m_title;
        }
        //===============================================
        public function getMenu() {
            return $this->m_menu;
        }
        //===============================================
        public function getView() {
            return $this->m_view;
        }
        //===============================================
        public function getLink() {
            return $this->m_link;
        }
        //===============================================
    }
?>