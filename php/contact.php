<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	GMessage::Instance()->saveMessage($_POST);
	GMail::Instance()->receiveMail($_POST);
	GMail::Instance()->sendMail($_POST);
	//===============================================
?>
