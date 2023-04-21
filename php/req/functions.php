<?php
//===============================================
function utf8_to_b64($_data) {
    return base64_encode(utf8_decode($_data));
}
//===============================================
function b64_to_utf8($_data) {
    return utf8_encode(base64_decode($_data));
}
//===============================================
?>
