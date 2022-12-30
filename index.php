<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GDefine.php";
// ===============================================
$lPage = new GPage();
$lProcess = new GProcess();
//===============================================
$lPage->redirectPost();
$lProcess->run();
//===============================================
?>
