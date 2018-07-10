<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "SUMMARY") {
        $lData = GJson::Instance()->getData("/data/json/Tuto.json");
        $lSummary = $lData["summary"];
        $lHtml = "";
        for($i = 0; $i < count($lSummary); $i++) {
            $lSummary2 = $lSummary[$i];
            $lName = $lSummary2["name"];
            $lLink = $lSummary2["link"];
            $lHtml .= GGlobal::Instance()->getHtml($lName, $lLink);
        }
        print_r($lHtml);
	}
	//===============================================
?>
