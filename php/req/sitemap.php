<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "ENUMERATE") {
		$lInfos = GSitemap::Instance()->getInfos();
		$lData = array();
		$lData["url_number"] = $lInfos["url_number"];
		$lData["sitemap_number"] = $lInfos["sitemap_number"];
		$lJson = json_encode($lData);
		print_r($lJson);
	}
	//===============================================
	else if($lReq == "LIST") {
		$lInfos = GSitemap::Instance()->getInfos();
		$lData = array_column($lInfos["url_list"], "link");
		$lDataVal = "";
		$lDataVal .= "<ol class='List'>";
		for($i = 0; $i < count($lData); $i++) {
			$lDataVal .= "<li>".$lData[$i]."</li>";
		}
		$lDataVal .= "</ol>";
		print_r($lDataVal);
	}
	//===============================================
	else if($lReq == "GENERATE") {
		GSitemap::Instance()->generate();
		$lData = "SUCCES: La génération du Sitemap a réussie...";
		print_r($lData);
	}
	//===============================================
	else if($lReq == "VISUALIZE") {
		GSitemap::Instance()->generate();
		$lFileArr = array("sitemaps", "sitemap");
		$lDataArr = array();
		for($i = 0; $i < count($lFileArr); $i++) {
			$lFile = "/data/sitemaps/".$lFileArr[$i].".xml";
			$lData = GFile::Instance()->getData($lFile);
			$lDataVal = '';
			$lDataVal .= '<pre>';
			$lDataVal .= '<xmp class="ovfa mxha prettyprint linenums">';
			$lDataVal .= $lData;
			$lDataVal .= '</xmp>';
			$lDataVal .= '</pre>';
			$lDataArr[$lFileArr[$i]] = $lDataVal;
		}
		$lDataJson = json_encode($lDataArr);
		print_r($lDataJson);
	}
	//===============================================
?>
