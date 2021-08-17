<?php   
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/webroot/php/class/GAutoload.php";
//===============================================
GManager::Instance()->redirectPost();
GProcess::Instance()->run();
//===============================================
?>