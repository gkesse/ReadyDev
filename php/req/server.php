<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GInclude.php";
//===============================================
use php\class\GServer;
//===============================================
$lReq = $_REQUEST["req"];
//===============================================
$lServer = new GServer();
$lServer->run($lReq);
$lServer->sendResponse();
//===============================================
?>
