<?php   
    class GSort {
        //===============================================
        private static $m_instance = null;
        private static $m_field;
        //===============================================
        private function __construct() {
            
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GSort();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function sortData($dataMap, $field="name") {
            $this->SetField($field);
            usort($dataMap, array("GSort", "SortField"));
            return $dataMap;        
        }
        //===============================================
        private static function SetField($field) {
            self::$m_field = $field;
        }
        //===============================================
        private static function SortField($dataA, $dataB) {
            $m_sort = false;
            $m_dataA = strtolower($dataA[self::$m_field]);
            $m_dataB = strtolower($dataB[self::$m_field]);
            $m_strcmp = strcmp($m_dataA, $m_dataB);
            if($m_strcmp > 0) $m_sort = !$m_sort;
            return $m_sort;
        }
        //===============================================
    }
?>        