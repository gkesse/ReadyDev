<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$m_req = $_REQUEST["req"];
	$m_configFile = "data/json/config.json";
	//===============================================
	if($m_req == "LOAD_CONFIG") {
		$m_data = GFile::Instance()->getData($m_configFile);
		print_r($m_data);
	}
	//===============================================
	else if($m_req == "SAVE_CONFIG") {
		$m_data = $_REQUEST["data"];
		$m_data = GFile::Instance()->saveData($m_configFile, $m_data);
	}
	//===============================================
?>
