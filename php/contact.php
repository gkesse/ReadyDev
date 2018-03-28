<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	GMail::Instance()->receiveMail($_POST);
	GMail::Instance()->sendMail($_POST);
	//===============================================
?>
