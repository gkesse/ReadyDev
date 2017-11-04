<?php
    //===============================================
    function SortDirectory($dataA, $dataB) {
        $m_sort = false;
        if($dataA[0] < $dataB[0]) $m_sort = true; 
        else if($dataA[0] == $dataB[0]) {
            $m_strcmp = strcmp(strtolower($dataA[1]), strtolower($dataB[1]));
            if($m_strcmp > 0) $m_sort = true;
        }
        return $m_sort;
    }
    //===============================================
?>