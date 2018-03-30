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
		$m_data = "";
		$m_data .= "<div class='brdc mxha ovfa'>";
		for($i = 0; $i < count($m_dirNameArr); $i++) {
			$m_dirName = $m_dirNameArr[$i];
			$m_data .= "<div class='pddd bdba FileList'>";
			$m_data .= "<i class='fa fa-".$m_dirName[2]."'></i> ";
			$m_data .= "<div class='hvra cspt dibm'";
			$m_data .= "onclick='openFile(this, ".$m_dirName[0].");'>";
			$m_data .= $m_dirName[1];
			$m_data .= "</div>";
			$m_data .= "</div>";
		}
		$m_data .= "</div>";
		print_r($m_data);
	}
	//===============================================
?>
