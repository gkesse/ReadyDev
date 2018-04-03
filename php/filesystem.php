<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$m_req = $_REQUEST["req"];
	//===============================================
	if($m_req == "GET_FILE") {
		$m_rootPath = $_REQUEST["root"];
		$m_dirPath = $_REQUEST["dir"];
		$m_dirArr = GFilesystem::Instance()->getFile2($m_rootPath, $m_dirPath);
		$m_dataFile = "";
		$m_dataFile .= "<div class='mxha ovfa'>";
		for($i = 0; $i < count($m_dirArr); $i++) {
			$m_dirName = $m_dirArr[$i];
			$m_dataFile .= "<div class='pddd bdba'>";
			$m_dataFile .= "<i class='fa fa-".$m_dirName[2]."'></i> ";
			$m_dataFile .= "<div class='hvra cspt dibm FileItem'";
			$m_dataFile .= "onclick='openFile(this, \"".$m_dirName[3]."\");'>";
			$m_dataFile .= $m_dirName[1];
			$m_dataFile .= "</div>";
			$m_dataFile .= "</div>";
		}
		$m_dataFile .= "</div>";
		
		$m_dirRel = GFilesystem::Instance()->getDirRel();
		$m_dataMenu = '';
		$m_dataMenu .= '<div class="pgCr05 dibm cspt FileLink" onclick="openLink(this);">';
		$m_dataMenu .= '<i class="fa fa-folder clrg"></i></div> ';
		if($m_dirRel != "") {
			$m_dirRelArr = explode("\\", $m_dirRel);
			for($i = 0; $i < count($m_dirRelArr); $i++) {
				$m_dirRelItem = $m_dirRelArr[$i];
				if($m_dirRelItem == "") continue;
				$m_dataMenu .= '<div class="pgCr05 dibm">';
				$m_dataMenu .= '<i class="fa fa-chevron-right clrg"></i></div> ';
				$m_dataMenu .= '<div class="pgCr05 dibm hvra cspt clrg FileLink" onclick="openLink(this);">';
				$m_dataMenu .= $m_dirRelItem.'</div> ';
			}
		}
		$m_dataArr = array();
		$m_dataArr["menu"] = $m_dataMenu;
		$m_dataArr["file"] = $m_dataFile;
		$m_dataArr["dir"] = $m_dirRel;
		$m_dataJson = json_encode($m_dataArr);
		print_r($m_dataJson);		
	}
	//===============================================
	else if($m_req == "GET_CONTENT") {
		$m_rootPath = $_REQUEST["root"];
		$m_filePath = $_REQUEST["file"];
		$m_fileType = $_REQUEST["type"];
		$m_content = '';
		if($m_fileType == "img") {
			if($m_filePath[0] == "/") $m_data = substr($m_filePath, 1);
			$m_content .= '<div class="txal ovfa pgCt10">';
			$m_content .= '<img src="'.$m_data.'" alt="Image.png"/>';
			$m_content .= '</div>';
		}
		else {
			$m_data = GFile::Instance()->getData3($m_rootPath, $m_filePath);
			$m_content .= '<pre><xmp class="prettyprint linenums">';
			$m_content .= $m_data;
			$m_content .= '</xmp></pre>';
		}
		$m_dirRel = GFilesystem::Instance()->getPath($m_rootPath, $m_filePath);
		$m_dataMenu = '';
		$m_dataMenu .= '<div class="pgCr05 dibm cspt FileLink" onclick="openLink(this);">';
		$m_dataMenu .= '<i class="fa fa-folder clrg"></i></div> ';
		if($m_dirRel != "") {
			$m_dirRelArr = explode("\\", $m_dirRel);
			for($i = 0; $i < count($m_dirRelArr); $i++) {
				$m_dirRelItem = $m_dirRelArr[$i];
				if($m_dirRelItem == "") continue;
				$m_dataMenu .= '<div class="pgCr05 dibm">';
				$m_dataMenu .= '<i class="fa fa-chevron-right clrg"></i></div> ';
				$m_dataMenu .= '<div class="pgCr05 dibm hvra cspt clrg FileLink" onclick="openLink(this);">';
				$m_dataMenu .= $m_dirRelItem.'</div> ';
			}
		}
		$m_dataArr = array();
		$m_dataArr["menu"] = $m_dataMenu;
		$m_dataArr["content"] = $m_content;
		$m_dataJson = json_encode($m_dataArr);
		print_r($m_dataJson);		
	}
	//===============================================
?>