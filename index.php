<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GDefine.php";
// ===============================================
$lPageObj = new GPage();
$lProcessObj = new GProcess();
//===============================================
$lPageObj->redirectPost();
$lProcessObj->run();
//===============================================
?>
