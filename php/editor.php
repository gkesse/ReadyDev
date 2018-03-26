<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
	
	$m_req = $_REQUEST["r"];
	//===============================================
	if($m_req == "SAVE_FILE") {
		$m_file = $_REQUEST["f"];
		$m_data = $_REQUEST["d"];
		print_r($m_data);
	}
	//===============================================
	else if($m_req == "READ_FILE") {
		$m_file = $_REQUEST["f"];
		$m_data = GFile::Instance()->getData($m_file);
		print_r($m_data);
	}
	//===============================================
?>
<!-- ============================================ -->