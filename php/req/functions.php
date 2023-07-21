<?php
//===============================================
function utf8_to_b64($_data) {
    $lData = $_data;
    $lData = rawurlencode($lData);
    $lData = utf8_decode($lData);
    $lData = base64_encode($lData);
    return $lData;
}
//===============================================
function b64_to_utf8($_data) {
    $lData = $_data;
    $lData = base64_decode($lData);
    $lData = utf8_encode($lData);
    $lData = rawurldecode($lData);
    return $lData;
}
//===============================================
?>
