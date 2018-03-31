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
		$m_dirNameArr = GFilesystem::Instance()->getFile($m_dir);
		if(empty($m_dirNameArr)) return;
		$m_dataFile = "";
		$m_dataFile .= "<div class='brdc mxha ovfa'>";
		for($i = 0; $i < count($m_dirNameArr); $i++) {
			$m_dirName = $m_dirNameArr[$i];
			$m_dataFile .= "<div class='pddd bdba FileList'>";
			$m_dataFile .= "<i class='fa fa-".$m_dirName[2]."'></i> ";
			$m_dataFile .= "<div class='hvra cspt dibm'";
			$m_dataFile .= "onclick='openFile(this, ".$m_dirName[0].");'>";
			$m_dataFile .= $m_dirName[1];
			$m_dataFile .= "</div>";
			$m_dataFile .= "</div>";
		}
		$m_dataFile .= "</div>";
		$m_dirRel = GFilesystem::Instance()->getDirRel();
		$m_dataMenu = '';
		$m_dataMenu .= '<div class="pgCr05 dibm cspt" onclick="openLink(this);">';
		$m_dataMenu .= '<i class="fa fa-folder"></i></div> ';
		if($m_dirRel != "") {
			$m_dirRelArr = explode("\\", $m_dirRel);
			for($i = 0; $i < count($m_dirRelArr); $i++) {
				$m_dirRelItem = $m_dirRelArr[$i];
				if($m_dirRelItem == "") continue;
				$m_dataMenu .= '<div class="pgCr05 dibm"><i class="fa fa-chevron-right"></i></div> ';
				$m_dataMenu .= '<div class="pgCr05 dibm hvra cspt FileLink" onclick="openLink(this);">';
				$m_dataMenu .= $m_dirRelItem.'</div> ';
			}
		}
		$m_dataArr = array();
		$m_dataArr["menu"] = $m_dataMenu;
		$m_dataArr["file"] = $m_dataFile;
		$m_dataJson = json_encode($m_dataArr);
		print_r($m_dataJson);
	}
	//===============================================
?>
