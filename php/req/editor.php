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
	else if($lReq == "LIST_1") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lID = $_REQUEST["id"];
		$lDataSum = '';
		$lDataSum .= '<div class="Content0 GList1">';
		$lDataSum .= '<div class="Body0" id="'.$lID.'">';
		$lDataSum .= '<div class="Row26">';
		$lDataSum .= 'List 1 > '.$lFile.' > '.$lKey;
		$lDataSum .= '</div>';
		$lDataSum .= '</div>';
		$lDataSum .= '<script>';
		$lDataSum .= 'loadList1("'.$lID.'","'.$lFile.'","'.$lKey.'");';
		$lDataSum .= '</script>';
		$lDataSum .= '</div>';
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "LIST_2") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lID = $_REQUEST["id"];
		$lDataSum = '';
		$lDataSum .= '<div class="Content0 Center GList2">';
		$lDataSum .= '<div class="Body0" id="'.$lID.'">';
		$lDataSum .= '<div class="Row26">';
		$lDataSum .= 'List 2 > '.$lFile.' > '.$lKey;
		$lDataSum .= '</div>';
		$lDataSum .= '</div>';
		$lDataSum .= '<script>';
		$lDataSum .= 'loadList2("'.$lID.'","'.$lFile.'","'.$lKey.'");';
		$lDataSum .= '</script>';
		$lDataSum .= '</div>';
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "LIST_3") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lID = $_REQUEST["id"];
		$lDataSum = '';
		$lDataSum .= '<div class="Content0 GList3">';
		$lDataSum .= '<div class="Body0" id="'.$lID.'">';
		$lDataSum .= '<div class="Row26">';
		$lDataSum .= 'List 3 > '.$lFile.' > '.$lKey;
		$lDataSum .= '</div>';
		$lDataSum .= '</div>';
		$lDataSum .= '<script>';
		$lDataSum .= 'loadList3("'.$lID.'","'.$lFile.'","'.$lKey.'");';
		$lDataSum .= '</script>';
		$lDataSum .= '</div>';
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "LIST_4") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lID = $_REQUEST["id"];
		$lDataSum = '';
		$lDataSum .= '<div class="Content0 GList4">';
		$lDataSum .= '<div class="Body0" id="'.$lID.'">';
		$lDataSum .= '<div class="Row26">';
		$lDataSum .= 'List 4 > '.$lFile.' > '.$lKey;
		$lDataSum .= '</div>';
		$lDataSum .= '</div>';
		$lDataSum .= '<script>';
		$lDataSum .= 'loadList4("'.$lID.'","'.$lFile.'","'.$lKey.'");';
		$lDataSum .= '</script>';
		$lDataSum .= '</div>';
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "LIST_5") {
		$lFile = $_REQUEST["file"];
		$lKey1 = $_REQUEST["key1"];
		$lKey2 = $_REQUEST["key2"];
		$lID = $_REQUEST["id"];
		$lDataSum = '';
		$lDataSum .= '<div class="Content0 GList5">';
		$lDataSum .= '<div class="Body0" id="'.$lID.'">';
		$lDataSum .= '<div class="Row26">';
		$lDataSum .= 'List 5 > '.$lFile.' > '.$lKey1.' > '.$lKey2;
		$lDataSum .= '</div>';
		$lDataSum .= '</div>';
		$lDataSum .= '<script>';
		$lDataSum .= 'loadList5("'.$lID.'","'.$lFile.'","'.$lKey1.'","'.$lKey2.'");';
		$lDataSum .= '</script>';
		$lDataSum .= '</div>';
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "LIST_6") {
		$lFile = $_REQUEST["file"];
		$lKey1 = $_REQUEST["key1"];
		$lKey2 = $_REQUEST["key2"];
		$lID = $_REQUEST["id"];
		$lDataSum = '';
		$lDataSum .= '<div class="Content0 GList6">';
		$lDataSum .= '<div class="Body0" id="'.$lID.'">';
		$lDataSum .= '<div class="Row26">';
		$lDataSum .= 'List 6 > '.$lFile.' > '.$lKey1.' > '.$lKey2;
		$lDataSum .= '</div>';
		$lDataSum .= '</div>';
		$lDataSum .= '<script>';
		$lDataSum .= 'loadList6("'.$lID.'","'.$lFile.'","'.$lKey1.'","'.$lKey2.'");';
		$lDataSum .= '</script>';
		$lDataSum .= '</div>';
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "DATA_1") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lID = $_REQUEST["id"];
		$lDataSum = '';
		$lDataSum .= '<div class="Content0 GData1">';
		$lDataSum .= '<div class="Body0" id="'.$lID.'">';
		$lDataSum .= '<div class="Row26">';
		$lDataSum .= 'Data 1 > '.$lFile.' > '.$lKey;
		$lDataSum .= '</div>';
		$lDataSum .= '</div>';
		$lDataSum .= '<script>';
		$lDataSum .= 'loadData1("'.$lID.'","'.$lFile.'","'.$lKey.'");';
		$lDataSum .= '</script>';
		$lDataSum .= '</div>';
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "DATA_2") {
		$lFile = $_REQUEST["file"];
		$lKey1 = $_REQUEST["key1"];
		$lKey2 = $_REQUEST["key2"];
		$lID = $_REQUEST["id"];
		$lDataSum = '';
		$lDataSum .= '<div class="Content0 GData2">';
		$lDataSum .= '<div class="Body0" id="'.$lID.'">';
		$lDataSum .= '<div class="Row26">';
		$lDataSum .= 'Data 2 > '.$lFile.' > '.$lKey1.' > '.$lKey2;
		$lDataSum .= '</div>';
		$lDataSum .= '</div>';
		$lDataSum .= '<script>';
		$lDataSum .= 'loadData2("'.$lID.'","'.$lFile.'","'.$lKey1.'","'.$lKey2.'");';
		$lDataSum .= '</script>';
		$lDataSum .= '</div>';
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "DATA_3") {
		$lFile = $_REQUEST["file"];
		$lKey1 = $_REQUEST["key1"];
		$lKey2 = $_REQUEST["key2"];
		$lID = $_REQUEST["id"];
		$lDataSum = '';
		$lDataSum .= '<div class="Content0 GData3">';
		$lDataSum .= '<div class="Body0" id="'.$lID.'">';
		$lDataSum .= '<div class="Row26">';
		$lDataSum .= 'Data 3 > '.$lFile.' > '.$lKey1.' > '.$lKey2;
		$lDataSum .= '</div>';
		$lDataSum .= '</div>';
		$lDataSum .= '<script>';
		$lDataSum .= 'loadData3("'.$lID.'","'.$lFile.'","'.$lKey1.'","'.$lKey2.'");';
		$lDataSum .= '</script>';
		$lDataSum .= '</div>';
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "PDF_1") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lID = $_REQUEST["id"];
		$lDataSum = '';
		$lDataSum .= '<div class="Content0 GPdf1">';
		$lDataSum .= '<div class="Body0" id="'.$lID.'">';
		$lDataSum .= '<div class="Row26">';
		$lDataSum .= 'Pdf 1 > '.$lFile.' > '.$lKey;
		$lDataSum .= '</div>';
		$lDataSum .= '</div>';
		$lDataSum .= '<script>';
		$lDataSum .= 'loadPdf1("'.$lID.'","'.$lFile.'","'.$lKey.'");';
		$lDataSum .= '</script>';
		$lDataSum .= '</div>';
		print_r($lDataSum);
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
	else if($lReq == "FILE_LINK") {
		$lFile = $_REQUEST["file"];
		$lID = $_REQUEST["id"];
		$lDataSum = '';
		$lDataSum .= '<div class="Content0 GFileLink">';
		$lDataSum .= '<div class="Body0" id="'.$lID.'">';
		$lDataSum .= '<div class="Row26">';
		$lDataSum .= 'File Link > '.$lFile;
		$lDataSum .= '</div>';
		$lDataSum .= '</div>';
		$lDataSum .= '<script>';
		$lDataSum .= 'loadFileLink("'.$lID.'","'.$lFile.'");';
		$lDataSum .= '</script>';
		$lDataSum .= '</div>';
		print_r($lDataSum);
	}
	//===============================================
?>
