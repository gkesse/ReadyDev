<?php
//===============================================
require "./php/class/GAutoload.php";
//===============================================
GObject::Instance()->redirectPost();
GProcess::Instance()->run();
GLog::Instance()->showError();
GLog::Instance()->showLog();
//===============================================
?>