<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";    
    //===============================================
    $lReq = $_REQUEST["req"];
    //===============================================
    $lServer = new GServer();
    $lServer->run($lReq);
    $lServer->addError();
    $lServer->sendResponse();
    //===============================================
?>
