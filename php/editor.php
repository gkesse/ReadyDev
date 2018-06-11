<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "SAVE_FILE") {
		$lFile = $_REQUEST["file"];
		$lData = $_REQUEST["data"];
		GFile::Instance()->saveData($lFile, $lData);
		print_r($lData);
	}
	//===============================================
	else if($lReq == "READ_FILE") {
		$lFile = $_REQUEST["file"];
		$lData = GFile::Instance()->getData($lFile);
		print_r($lData);
	}
	//===============================================
	else if($lReq == "GET_FILE") {
		$lDir = $_REQUEST["dir"];
		$lFile = $_REQUEST["file"];
		$lDirNameArr = GFilesystem::Instance()->getFile($lDir);
		if(empty($lDirNameArr)) return;
		$lDirPath = GFilesystem::Instance()->getPath($lDir);
		$lDataFile = "";
		$lDataFile .= "<div class='brdc mxha ovfa'>";
		for($i = 0; $i < count($lDirNameArr); $i++) {
			$lDirName = $lDirNameArr[$i];
			$lFilePath = $lDirPath."/".$lDirName[1];
			if($lFilePath == $lFile) {$lDataFile .= "<div class='pddd bdba FileList bgrc'>";}
			else {$lDataFile .= "<div class='pddd bdba FileList'>";}
			$lDataFile .= "<i class='fa fa-".$lDirName[2]."'></i> ";
			$lDataFile .= "<div class='hvra cspt dibm'";
			$lDataFile .= "onclick='openFile(this, ".$lDirName[0].");'>";
			$lDataFile .= $lDirName[1];
			$lDataFile .= "</div>";
			$lDataFile .= "</div>";
		}
		$lDataFile .= "</div>";
		
		$lDataMenu = '';
		$lDataMenu .= '<div class="pgCr05 dibm cspt FileLink" onclick="openLink(this);">';
		$lDataMenu .= '<i class="clrg fa fa-folder"></i></div> ';
		if($lDirPath != "") {
			$lDirPathArr = explode("/", $lDirPath);
			for($i = 0; $i < count($lDirPathArr); $i++) {
				$lDirPathItem = $lDirPathArr[$i];
				if($lDirPathItem == "") continue;
				$lDataMenu .= '<div class="pgCr05 dibm"><i class="clrg fa fa-chevron-right"></i></div> ';
				$lDataMenu .= '<div class="pgCr05 dibm hvra cspt clrg FileLink" onclick="openLink(this);">';
				$lDataMenu .= $lDirPathItem.'</div> ';
			}
		}
		$lDataArr = array();
		$lDataArr["menu"] = $lDataMenu;
		$lDataArr["file"] = $lDataFile;
		$lDataArr["dir"] = $lDirPath;
		$lDataJson = json_encode($lDataArr);
		print_r($lDataJson);
	}
	//===============================================
	else if($lReq == "SUMMARY") {
		$lFile = $_REQUEST["file"];
		$lSummary = $_REQUEST["summary"];
		$lFile = "data/json/".$lFile.".json";
        $lSummary = "summary_".$lSummary;
		$lData = GJson::Instance()->getData($lFile);
		$lDataArr = $lData[$lSummary];
		$lDataSum = '';
		$lDataSum .= '<div class="dibm Summary3">';
		for($i = 0; $i < count($lDataArr); $i++) {
			$lDataObj = $lDataArr[$i];
			$lName = $lDataObj["name"];
			$lLink = $lDataObj["link"];
			$lDataSum .= '<div class="pdlb">';
			$lDataSum .= '<span class="fa fa-book clrg pdra"></span>';
			$lDataSum .= '<a class="hvra clrg" href="'.$lLink.'">';
			$lDataSum .= $lName;
			$lDataSum .= '</a>';
			$lDataSum .= '</div>';
		}
		$lDataSum .= '</div>';
		print_r($lDataSum);
	}
	//===============================================
?>
