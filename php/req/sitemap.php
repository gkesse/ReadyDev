<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "ENUMERATE") {
		$lServer = new GServer();
		$lSitemap = new GSitemap();
		$lSitemap->getInfos();
		$lData = $lSitemap->serialize();
		$lServer->addResponse($lData);
		$lServer->sendResponse();
	}
	//===============================================
	else if($lReq == "LIST") {
	    $lServer = new GServer();
	    $lSitemap = new GSitemap();
	    $lSitemap->getInfos();
	    $lSitemap->getList();
	    $lData = $lSitemap->serialize();
	    $lServer->addResponse($lData);
	    $lServer->sendResponse();
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
			$lDataVal .= '<xmp class="Code prettyprint linenums">';
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
