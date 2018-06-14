<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "GET_FILE") {
		$lRootPath = $_REQUEST["root"];
		$lDirPath = $_REQUEST["dir"];
		$lDirArr = GFilesystem::Instance()->getFile2($lRootPath, $lDirPath);
		$lDataFile = "";
		$lDataFile .= "<div class='Body17'>";
		for($i = 0; $i < count($lDirArr); $i++) {
			$lDirName = $lDirArr[$i];
			$lDataFile .= "<div class='Row20'>";
			$lDataFile .= "<i class='fa fa-".$lDirName[2]."'></i> ";
			$lDataFile .= "<div class='Text9 FilesystemItem'";
			$lDataFile .= "onclick='openFile(this, \"".$lDirName[3]."\");'>";
			$lDataFile .= $lDirName[1];
			$lDataFile .= "</div>";
			$lDataFile .= "</div>";
		}
		$lDataFile .= "</div>";
		
		$lFilePath = GFilesystem::Instance()->getPath2($lRootPath, $lDirPath);
		$lDataMenu = '';
		$lDataMenu .= '<div class="Col5 FilesystemLink" onclick="openLink(this);">';
		$lDataMenu .= '<i class="Icon2 fa fa-folder"></i></div> ';
		if($lFilePath != "") {
			$lFilePathArr = explode("/", $lFilePath);
			for($i = 0; $i < count($lFilePathArr); $i++) {
				$lFilePathItem = $lFilePathArr[$i];
				if($lFilePathItem == "") continue;
				$lDataMenu .= '<div class="Col2">';
				$lDataMenu .= '<i class="Icon2 fa fa-chevron-right"></i></div> ';
				$lDataMenu .= '<div class="Text10 FilesystemLink" onclick="openLink(this);">';
				$lDataMenu .= $lFilePathItem.'</div> ';
			}
		}
		$lDataArr = array();
		$lDataArr["menu"] = $lDataMenu;
		$lDataArr["file"] = $lDataFile;
		$lDataArr["dir"] = $lFilePath;
		$lDataJson = json_encode($lDataArr);
		print_r($lDataJson);		
	}
	//===============================================
	else if($lReq == "GET_CONTENT") {
		$lRootPath = $_REQUEST["root"];
		$lFilePath = $_REQUEST["file"];
		$lFileType = $_REQUEST["type"];
		$lContent = '';
		if($lFileType == "img") {
			$lFileName = GFilesystem::Instance()->getPath3($lRootPath, $lFilePath);
			//if($lFileName[0] == "/") $lFileName = substr($lFileName, 1);
			$lContent .= '<div class="Row25">';
			$lContent .= '<img src="'.$lFileName.'" alt="Image"/>';
			$lContent .= '</div>';
		}
		else if($lFileType == "bat" || $lFileType == "file") {
			$lData = GFile::Instance()->getData3($lRootPath, $lFilePath);
			$lContent .= '<pre><xmp class="prettyprint linenums lang-sh">';
			$lContent .= $lData;
			$lContent .= '</xmp></pre>';
		}
		else {
			$lData = GFile::Instance()->getData3($lRootPath, $lFilePath);
			$lContent .= '<pre><xmp class="prettyprint linenums">';
			$lContent .= $lData;
			$lContent .= '</xmp></pre>';
		}
		$lFileName = GFilesystem::Instance()->getPath2($lRootPath, $lFilePath);
		$lDataMenu = '';
		$lDataMenu .= '<div class="Col5 FilesystemLink" onclick="openLink(this);">';
		$lDataMenu .= '<i class="Icon2 fa fa-folder"></i></div> ';
		if($lFileName != "") {
			$lFileNameArr = explode("/", $lFileName);
			for($i = 0; $i < count($lFileNameArr); $i++) {
				$lFileNameItem = $lFileNameArr[$i];
				if($lFileNameItem == "") continue;
				$lDataMenu .= '<div class="Col2">';
				$lDataMenu .= '<i class="Icon2 fa fa-chevron-right"></i></div> ';
				$lDataMenu .= '<div class="Text10 clrg FilesystemLink" onclick="openLink(this);">';
				$lDataMenu .= $lFileNameItem.'</div> ';
			}
		}
		$lDataArr = array();
		$lDataArr["menu"] = $lDataMenu;
		$lDataArr["content"] = $lContent;
		$lDataJson = json_encode($lDataArr);
		print_r($lDataJson);		
	}
	//===============================================
?>