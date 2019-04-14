<?php
    //===============================================
    function GAutoload($className) {
		include $className.".php";
    }       
    //===============================================
    if (version_compare(PHP_VERSION, "5.1.2", ">=")) {
        if (version_compare(PHP_VERSION, "5.3.0", ">=")) {
            spl_autoload_register("GAutoload", true, true);
        } 
        else {
            spl_autoload_register("GAutoload");
        }
    } 
    else {
        function spl_autoload_register($className) {
            include $className.".php";
        }       
    }
    //===============================================
?>
