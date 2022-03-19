<?php
//===============================================
require "./php/class/GAutoload.php";
//===============================================
$lPath = new GPath();
$lPath->getPath("xml", "pad.xml");
$lRedirect = new GRedirect();
$lProcess = new GProcess();
$lRedirect->redirectPost();
$lProcess->run();
GLog::Instance()->showError();
GLog::Instance()->showLog();
//===============================================
?>