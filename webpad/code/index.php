<?php
//===============================================
require "./php/class/GAutoload.php";
require "./php/class/GInclude.php";
//===============================================
$lPage = new GPage();
$lProcess = new GProcess();
$lPage->redirectPost();
$lProcess->run();
GLog::Instance()->showLog();
GLog::Instance()->showError();
//===============================================
?>