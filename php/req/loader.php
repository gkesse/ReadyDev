<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "LIST_1") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lFilename = "data/json/".$lFile.".json";
		$lData = GJson::Instance()->getData($lFilename);
        $lDataMap = $lData[$lKey];
        $lDataSum = '';
        foreach($lDataMap as $lItem) {
			$lDataSum .= '<div class="Item4">';
			$lDataSum .= '<span class="Icon10 fa fa-book"></span>';
			$lDataSum .= '<a class="Link4" href="'.$lItem["link"].'">';
			$lDataSum .= $lItem["name"];
			$lDataSum .= '</a>';
			$lDataSum .= '</div>';
        }
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "LIST_2") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lFilename = "data/json/".$lFile.".json";
		$lData = GJson::Instance()->getData($lFilename);
        $lDataMap = $lData[$lKey];
        $lDataSum = '';
        foreach($lDataMap as $lItem) {
            $lDataSum .= '<div class="RWD2 RwdC06">';
            $lDataSum .= '<a class="Link6" href="'.$lItem["link"].'">';
            $lDataSum .= '<div class="Content5">';
            $lDataSum .= '<div class="Row6">';
            $lDataSum .= '<div class="Content6">';
            $lDataSum .= '<i class="Icon6 fa '.$lItem["icon"].'"></i>';
            $lDataSum .= '</div>';
            $lDataSum .= '</div>';
            $lDataSum .= '<div class="Row7">';
            $lDataSum .= '<div class="Content6">';
            $lDataSum .= '<div class="Text7">'.$lItem["theme"].'</div>';
            $lDataSum .= '</div>';
            $lDataSum .= '</div>';
            $lDataSum .= '</div>';
            $lDataSum .= '<div class="Text8">'.$lItem["description"].'</div>';
            $lDataSum .= '</a>';
            $lDataSum .= '</div>';
        }
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "DATA_1") {
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
