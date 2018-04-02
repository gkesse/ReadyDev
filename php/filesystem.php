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
		$m_dataFile .= "<div class='brdc mxha ovfa'>";
		for($i = 0; $i < count($m_dirArr); $i++) {
			$m_dirName = $m_dirArr[$i];
			$m_dataFile .= "<div class='pddd bdba'>";
			$m_dataFile .= "<i class='fa fa-".$m_dirName[2]."'></i> ";
			$m_dataFile .= "<div class='hvra cspt dibm FileItem'";
			$m_dataFile .= "onclick='openFile(this, ".$m_dirName[0].");'>";
			$m_dataFile .= $m_dirName[1];
			$m_dataFile .= "</div>";
			$m_dataFile .= "</div>";
		}
		$m_dataFile .= "</div>";
		$m_dataMap = array();
		$m_dataMap["dir"] = $m_dataFile;
		$m_dataJson = json_encode($m_dataMap);
		print_r($m_dataJson);
	}
	//===============================================
?>