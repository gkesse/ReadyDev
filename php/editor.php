<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$m_req = $_REQUEST["req"];
	//===============================================
	if($m_req == "SAVE_FILE") {
		$m_file = $_REQUEST["file"];
		$m_data = $_REQUEST["data"];
		GFile::Instance()->saveData($m_file, $m_data);
		print_r($m_data);
	}
	//===============================================
	else if($m_req == "READ_FILE") {
		$m_file = $_REQUEST["file"];
		$m_data = GFile::Instance()->getData($m_file);
		print_r($m_data);
	}
	//===============================================
	else if($m_req == "GET_FILE") {
		$m_dir = $_REQUEST["dir"];
		$m_file = $_REQUEST["file"];
		$m_dirNameArr = GFilesystem::Instance()->getFile($m_dir);
		if(empty($m_dirNameArr)) return;
		$m_dirPath = GFilesystem::Instance()->getPath($m_dir);
		$m_dataFile = "";
		$m_dataFile .= "<div class='brdc mxha ovfa'>";
		for($i = 0; $i < count($m_dirNameArr); $i++) {
			$m_dirName = $m_dirNameArr[$i];
			$m_filePath = $m_dirPath."/".$m_dirName[1];
			if($m_filePath == $m_file) {$m_dataFile .= "<div class='pddd bdba FileList bgrc'>";}
			else {$m_dataFile .= "<div class='pddd bdba FileList'>";}
			$m_dataFile .= "<i class='fa fa-".$m_dirName[2]."'></i> ";
			$m_dataFile .= "<div class='hvra cspt dibm'";
			$m_dataFile .= "onclick='openFile(this, ".$m_dirName[0].");'>";
			$m_dataFile .= $m_dirName[1];
			$m_dataFile .= "</div>";
			$m_dataFile .= "</div>";
		}
		$m_dataFile .= "</div>";
		
		$m_dataMenu = '';
		$m_dataMenu .= '<div class="pgCr05 dibm cspt FileLink" onclick="openLink(this);">';
		$m_dataMenu .= '<i class="clrg fa fa-folder"></i></div> ';
		if($m_dirPath != "") {
			$m_dirPathArr = explode("/", $m_dirPath);
			for($i = 0; $i < count($m_dirPathArr); $i++) {
				$m_dirPathItem = $m_dirPathArr[$i];
				if($m_dirPathItem == "") continue;
				$m_dataMenu .= '<div class="pgCr05 dibm"><i class="clrg fa fa-chevron-right"></i></div> ';
				$m_dataMenu .= '<div class="pgCr05 dibm hvra cspt clrg FileLink" onclick="openLink(this);">';
				$m_dataMenu .= $m_dirPathItem.'</div> ';
			}
		}
		$m_dataArr = array();
		$m_dataArr["menu"] = $m_dataMenu;
		$m_dataArr["file"] = $m_dataFile;
		$m_dataArr["dir"] = $m_dirPath;
		$m_dataJson = json_encode($m_dataArr);
		print_r($m_dataJson);
	}
	//===============================================
	else if($m_req == "SUMMARY") {
		$m_file = $_REQUEST["file"];
		$m_summary = $_REQUEST["summary"];
		$m_file = "data/json/".$m_file.".json";
		$m_data = GJson::Instance()->getData($m_file);
		$m_dataArr = $m_data[$m_summary];
		$m_dataSum = '';
		$m_dataSum .= '<div class="dibm Summary3">';
		for($i = 0; $i < count($m_dataArr); $i++) {
			$m_dataObj = $m_dataArr[$i];
			$m_name = $m_dataObj["name"];
			$m_link = $m_dataObj["link"];
			$m_dataSum .= '<div class="pdlb">';
			$m_dataSum .= '<span class="fa fa-book clrb pdra"></span>';
			$m_dataSum .= '<a class="hvra clrb" href="'.$m_link.'">';
			$m_dataSum .= $m_name;
			$m_dataSum .= '</a>';
			$m_dataSum .= '</div>';
		}
		$m_dataSum .= '</div>';
		print_r($m_dataSum);
	}
	//===============================================
?>
