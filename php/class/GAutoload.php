<?php
//===============================================
namespace php\class;
//===============================================
session_start();
//===============================================
function GAutoloadRegister($_className) {
    $lFilename = $_SERVER["DOCUMENT_ROOT"].$_className.".php";

    if (is_readable($lFilename)) {
        require $lFilename;
    }    
}       
//===============================================
if (version_compare(PHP_VERSION, "5.1.2", ">=")) {
    if (version_compare(PHP_VERSION, "5.3.0", ">=")) {
        spl_autoload_register("php\class\GAutoloadRegister", true, true);
    } 
    else {
        spl_autoload_register("GAutoloadRegister");
    }
} 
else {
    function spl_autoload_register($_className) {
        include $_className.".php";
    }       
}
//===============================================
?>