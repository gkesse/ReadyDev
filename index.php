<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GDefine.php";
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
