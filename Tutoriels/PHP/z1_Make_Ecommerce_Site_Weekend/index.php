<?php 
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
    GSetting::Instance()->load("/data/config/config.txt"); 
    GProcess::Instance()->run();
	//===============================================
?>