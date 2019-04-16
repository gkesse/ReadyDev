<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoload.php";	
	//===============================================
    GSetting::Instance()->load("/data/config/config.txt"); 
    GSignup::Instance()->save();
	//===============================================
?>