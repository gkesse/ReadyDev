<?php
    session_start();
    //===============================================
    function GAutoloadRegister($className) {
        $lFileName = dirname(__FILE__).DIRECTORY_SEPARATOR.$className.".php";

        if(is_readable($lFileName)) {
            require $lFileName;
        }
        else {
            die("[ GAutoloadRegister ] Erreur Autoload: $className<br>");
        }
    }       
    //===============================================
    if (version_compare(PHP_VERSION, "5.1.2", ">=")) {
        if (version_compare(PHP_VERSION, "5.3.0", ">=")) {
            spl_autoload_register("GAutoloadRegister", true, true);
        } 
        else {
            spl_autoload_register("GAutoloadRegister");
        }
    } 
    else {
        function spl_autoload_register($className) {
            if(is_readable($lFileName)) {
                require $className.".php";
            }
            else {
                die("[ GAutoloadRegister ] Erreur Autoload: $className<br>");
            }
        }       
    }
    //===============================================
?>
