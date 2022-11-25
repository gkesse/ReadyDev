<?php   
    class GString {
        //===============================================
        public function __construct() {
            
        }
        //===============================================
        public function startBy($_data, $_start) {
            $lSize = strlen($_data);
            $lSize2 = strlen($_start);
            if($lSize == 0) return false;
            if($lSize2 == 0) return false;
            if($lSize < $lSize2) return false;
            for($i = 0; $i < $lSize2; $i++) {
                if($_data[$i] != $_start[$i]) return false;
            }
            return true;
        }
        //===============================================
        public function extract($_data, $_pos, $_sep) {
            $lSize = strlen($_data);
            $lWord = "";
            $lPos = 0;
            for($i = 0; $i < $lSize; $i++) {
                $lChar = $_data[$i];
                if($this->isSep($_sep, $lChar)) {
                    if($lPos == $_pos) return $lWord;
                    $lWord = "";
                    $lPos++;
                }
                else {
                    $lWord .= $lChar;
                }
            }
            return $lWord;
        }
        //===============================================
        public function isSep($_data, $_char) {
            $lSize = strlen($_data);
            for($i = 0; $i < $lSize; $i++) {
                if($_data[$i] == $_char) return true;
            }
            return false;
        }
        //===============================================
        public function countSep($_data, $_sep) {
            $lSize = strlen($_data);
            $lCount = 1;
            for($i = 0; $i < $lSize; $i++) {
                $lChar = $_data[$i];
                if($this->isSep($_sep, $lChar)) {
                    $lCount++;
                }
            }
            return $lCount;
        }
        //===============================================
        public function sepSize($_data, $_pos, $_sep) {
            $lLength = strlen($_data);
            $lSize = 0;
            $lCount = 0;
            for($i = 0; $i < $lLength; $i++) {
                $lChar = $_data[$i];
                $lSize++;
                if($this->isSep($_sep, $lChar)) {
                    if($lCount == $_pos) break;
                    $lCount++;
                }
            }
            return $lSize;
        }
        //===============================================
    }
?>        