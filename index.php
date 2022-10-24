<?php
// ===============================================
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
// ===============================================
$lPageObj = new GPage();
$lPageObj->redirectPost();
$lProcessObj = new GProcess();
$lProcessObj->run2();
GLog::Instance()->showError();
// ===============================================
?>
