<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
require $_SERVER["DOCUMENT_ROOT"]."/php/req/functions.php";
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GDefine.php";
// ===============================================
$lProcess = new GProcess();
// ===============================================
$lProcess->main();
$lProcess->showLogs();
//===============================================
?>
