<?php
//===============================================
function utf8_to_b64($_data) {
    $lData = $_data;
    $lData = utf8_decode($lData);
    $lData = base64_encode($lData);
    $lData = rawurlencode($lData);
    return $lData;
}
//===============================================
function b64_to_utf8($_data) {
    $lData = $_data;
    $lData = rawurldecode($lData);
    $lData = base64_decode($lData);
    $lData = utf8_encode($lData);
    return $lData;
}
//===============================================
?>
