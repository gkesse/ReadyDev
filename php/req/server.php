<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";    
    //===============================================
    $lCom = $_REQUEST["com"];
    //===============================================
    if($lCom == "req") {
        $lReq = $_REQUEST["req"];
        $lServer = new GServer();
        $lServer->deserialize($lReq);
        $lServer->run($lReq);
        $lServer->sendResponse();
    }
    //===============================================
    else if($lCom == "data") {
        $lModule = $_REQUEST["module"];
        $lMethod = $_REQUEST["method"];
        $lData = $_REQUEST["data"];
        $lServer = new GServer();
        $lServer->setModule($lModule);
        $lServer->setMethod($lMethod);
        $lServer->setType("local");
        $lServer->run($lData);
        $lServer->sendResponse();
    }
    //===============================================
?>
