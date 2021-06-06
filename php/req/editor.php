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
		$lDataFile .= "<div class='Body12'>";
		for($i = 0; $i < count($lDirNameArr); $i++) {
			$lDirName = $lDirNameArr[$i];
			$lFilePath = $lDirPath."/".$lDirName[1];
			if($lFilePath == $lFile) {$lDataFile .= "<div class='Row19 FileList'>";}
			else {$lDataFile .= "<div class='Row20 FileList'>";}
			$lDataFile .= "<i class='fa fa-".$lDirName[2]."'></i> ";
			$lDataFile .= "<div class='Text9'";
			$lDataFile .= "onclick='openFile(this, ".$lDirName[0].");'>";
			$lDataFile .= $lDirName[1];
			$lDataFile .= "</div>";
			$lDataFile .= "</div>";
		}
		$lDataFile .= "</div>";
		
		$lDataMenu = '';
		$lDataMenu .= '<div class="Col3 FileLink" onclick="openLink(this);">';
		$lDataMenu .= '<i class="Icon2 fa fa-folder"></i></div> ';
		if($lDirPath != "") {
			$lDirPathArr = explode("/", $lDirPath);
			for($i = 0; $i < count($lDirPathArr); $i++) {
				$lDirPathItem = $lDirPathArr[$i];
				if($lDirPathItem == "") continue;
				$lDataMenu .= '<div class="Col2"><i class="Icon2 fa fa-chevron-right"></i></div> ';
				$lDataMenu .= '<div class="Col3 FileLink" onclick="openLink(this);">';
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
	else if($lReq == "FILE_CONTENT") {
        $lFile = "";
        $lFile .= $_SERVER["DOCUMENT_ROOT"];
		$lFile .= $_REQUEST["file"];
        $lContent = file_get_contents($lFile);
		print_r($lContent);
	}
	//===============================================
?>
