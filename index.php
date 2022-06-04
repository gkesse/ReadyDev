<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
// ===============================================
$lPageObj = new GPage();
$lProcessObj = new GProcess();
$lLog = GLog::Instance();
//===============================================
$lPageObj->redirectPost();
$lProcessObj->run();
$lLog->showErrors();
$lLog->showLogs();
//===============================================
?>
