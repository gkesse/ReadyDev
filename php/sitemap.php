<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$m_req = $_REQUEST["req"];
	//===============================================
	if($m_req == "ENUMERATE") {
		$m_infos = GSiteMap::Instance()->getInfos();
		$m_data = array();
		$m_data["url_number"] = $m_infos["url_number"];
		$m_data["sitemap_number"] = $m_infos["sitemap_number"];
		$m_json = json_encode($m_data);
		print_r($m_json);
	}
	//===============================================
	else if($m_req == "READ_FILE") {

	}
	//===============================================
?>
