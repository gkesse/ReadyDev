<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GInclude.php";
//===============================================
use php\class\GProcess;
//===============================================
$lProcess = new GProcess();
$lProcess->init();
$lProcess->run("php", "connexion");
$lProcess->runFooter();
$lProcess->clean();
//===============================================
?>
