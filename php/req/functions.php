<?php
//===============================================
function utf8_to_b64($_data)
{
    $lData = $_data;
    // $lData = utf8_decode($lData);
    $lData = mb_convert_encoding($lData, 'ISO-8859-1', 'UTF-8');
    $lData = base64_encode($lData);
    $lData = rawurlencode($lData);
    return $lData;
}
//===============================================
function b64_to_utf8($_data)
{
    ini_set("memory_limit", "128M");
    $lData = $_data;
    $lData = rawurldecode($lData);
    $lData = base64_decode($lData);
    //$lData = utf8_encode($lData);
    $lData = mb_convert_encoding($lData, 'UTF-8', 'ISO-8859-1');
    return $lData;
}
//===============================================
