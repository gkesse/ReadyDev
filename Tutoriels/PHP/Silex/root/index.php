<?php 
    require "/php/class/GAutoloadRegister.php";
    //===============================================
    GConfig::Instance()->setData("PROCESS_TYPE", "ROUTER");
    GProcess::Instance()->run();
    //===============================================
?>
