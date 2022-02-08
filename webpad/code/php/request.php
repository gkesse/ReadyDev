<?php
    require "./class/GAutoload.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "LOAD_XML_FILE") {
		$lFile = $_REQUEST["file"];
		$lObj = new GObject();
		$lPath = $lObj->getRepoPath("data/xml", $lFile);
		$lData = file_get_contents($lPath);
		print_r($lData);
	}
	//===============================================
?>
