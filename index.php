<?php
// ===============================================
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
// ===============================================
$lPage = new GPage();
$lProcess = new GProcess();
$lLog = GLog::Instance();
// ===============================================
$lPage->redirectPost();
$lProcess->run();
$lLog->showErrors();
// ===============================================
?>
