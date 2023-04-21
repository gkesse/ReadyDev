<?php
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
require $_SERVER["DOCUMENT_ROOT"]."/php/req/functions.php";
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GDefine.php";
//===============================================
    $lReq = $_REQUEST["req"];
    //===============================================
    $lServer = new GServer();
    $lServer->run($lReq);
    $lServer->sendResponse();
    //===============================================
?>
