<?php
    session_start();
    
    /*
        ini_set("display_errors", 0);
        ini_set("display_startup_errors", 0);
        error_reporting(E_ALL);
    */
    
    
    function GAutoloadRegister($classname) {
        $m_filename = dirname(__FILE__).DIRECTORY_SEPARATOR.$classname.".php";

        if (is_readable($m_filename)) {
            require $m_filename;
        }    
    }       
    
    if (version_compare(PHP_VERSION, "5.1.2", ">=")) {
        if (version_compare(PHP_VERSION, "5.3.0", ">=")) {
            spl_autoload_register("GAutoloadRegister", true, true);
        } 
        else {
            spl_autoload_register("GAutoloadRegister");
        }
    } 
    else {
        function __autoload($class_name) {
            include $class_name.".php";
        }       
    }
?>