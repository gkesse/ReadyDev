<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "DATA_1") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lFilename = "data/json/".$lFile.".json";
		$lData = GJson::Instance()->getData($lFilename);
        $lDataMap = array();
		$lDataMap["data"] = join(" ", $lData[$lKey]);
		print_r(json_encode($lDataMap));
	}
	//===============================================
?>
