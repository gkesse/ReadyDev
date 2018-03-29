<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$m_req = $_REQUEST["req"];
	//===============================================
	if($m_req == "ENUMERATE") {
		$m_infos = GSitemap::Instance()->getInfos();
		$m_data = array();
		$m_data["url_number"] = $m_infos["url_number"];
		$m_data["sitemap_number"] = $m_infos["sitemap_number"];
		$m_json = json_encode($m_data);
		print_r($m_json);
	}
	//===============================================
	else if($m_req == "LIST") {
		$m_infos = GSitemap::Instance()->getInfos();
		$m_data = array_column($m_infos["url_list"], "link");
		sort($m_data);
		$m_dataVal = "";
		$m_dataVal .= "<ol class='pdlc'>";
		for($i = 0; $i < count($m_data); $i++) {
			$m_dataVal .= "<li>".$m_data[$i]."</li>";
		}
		$m_dataVal .= "</ol>";
		print_r($m_dataVal);
	}
	//===============================================
	else if($m_req == "GENERATE") {
		GSitemap::Instance()->generate();
		$m_data = "SUCCES: La génération du Sitemap a réussie...";
		print_r($m_data);
	}
	//===============================================
	else if($m_req == "VISUALIZE") {
		GSitemap::Instance()->generate();
		$m_fileArr = array("sitemaps", "sitemap");
		$m_dataArr = array();
		for($i = 0; $i < count($m_fileArr); $i++) {
			$m_file = "/data/sitemaps/".$m_fileArr[$i].".xml";
			$m_data = GFile::Instance()->getData($m_file);
			$m_dataVal = '';
			$m_dataVal .= '<pre>';
			$m_dataVal .= '<xmp class="ovfa mxha">';
			$m_dataVal .= $m_data;
			$m_dataVal .= '</xmp>';
			$m_dataVal .= '</pre>';
			$m_dataArr[$m_fileArr[$i]] = $m_dataVal;
		}
		$m_dataJson = json_encode($m_dataArr);
		print_r($m_dataJson);
	}
	//===============================================
?>
