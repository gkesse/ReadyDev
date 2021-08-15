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
            $lHref = GManager::Instance()->getUrl($lItem["link"]);
			$lDataSum .= '<a class="Link4" href="'.$lHref.'">';
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
	if($lReq == "LIST_3") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lFilename = "data/json/".$lFile.".json";
		$lData = GJson::Instance()->getData($lFilename);
        $lDataMap = $lData[$lKey];
        $lDataSum = '';
        foreach($lDataMap as $lItem) {            
            $lDataSum .= '<div class="Row3">';
			$lDataSum .= '<div class="Content3">';
			$lDataSum .= '<i class="Icon4 '.$lItem["icon"].'"></i>';
			$lDataSum .= '</div>';
			$lDataSum .= '<div class="Text3">'.join(" ", $lItem["description"]).'</div>';
			$lDataSum .= '</div>';
        }
		print_r($lDataSum);
	}
	//===============================================
	if($lReq == "LIST_4") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lFilename = "data/json/".$lFile.".json";
		$lData = GJson::Instance()->getData($lFilename);
        $lDataMap = $lData[$lKey];
        $lCount = count($lDataMap);
        $i = 0;
        $lDataSum = '';
        foreach($lDataMap as $lItem) { 
            if($i != 0) {$lDataSum .= '<hr/><br/>';} $i++; 
            //===============================================            
            $lDataSum .= '<div class="Row3">';
            $lDataSum .= '<div class="Content3">';
            $lDataSum .= '<i class="Icon4 '.$lItem["icon"].'"></i><br/>';
            $lDataSum .= '<span class="Text5">';
            $lDataSum .= ($lCount - $i + 1).'/'.$lCount;
            $lDataSum .= '</span>';
            $lDataSum .= '</div>';
            $lDataSum .= '<div class="Text3">'.join(" ", $lItem["intro"]).'</div>';
            $lDataSum .= '</div>';
            //===============================================            
            $lDataSum .= '<div class="Row3">';
            $lDataSum .= '<a class="Title3" href="#Expériences Professionnelles">';
            $lDataSum .= 'Contexte';
            $lDataSum .= '</a>';
            $lDataSum .= '</div>';
            //===============================================            
            $lDataSum .= '<div class="Row3">';
            $lDataSum .= join(" ", $lItem["context"]);
            $lDataSum .= '</div>';
            //===============================================            
            $lDataSum .= '<div class="Row3">';
            $lDataSum .= '<a class="Title3" href="#Expériences Professionnelles">';
            $lDataSum .= 'Responsabilités';
            $lDataSum .= '</a>';
            $lDataSum .= '</div>';
            //===============================================            
            $lDataSum .= '<div class="Row3">';
            $lDataSum .= '<ul class="fa-ul">';
            $lDataMapi = $lItem["task"];
            foreach($lDataMapi as $lDj) {
                $lDataSum .= '<li>';
                $lDataSum .= '<i class="fa-li fa fa-check"></i>';
                $lDataSum .= $lDj;
                $lDataSum .= '</li>';
            }
            $lDataSum .= '</ul>';
            $lDataSum .= '</div>';
            //===============================================            
            $lDataSum .= '<div class="Row3">';
            $lDataSum .= '<a class="Title3" href="#Expériences Professionnelles">';
            $lDataSum .= 'Résultats';
            $lDataSum .= '</a>';
            $lDataSum .= '</div>';
            //===============================================            
            $lDataSum .= '<div class="Row3">';
            $lDataSum .= '<ul class="fa-ul">';
            $lDataMapi = $lItem["result"];
            foreach($lDataMapi as $lDj) {
                $lDataSum .= '<li>';
                $lDataSum .= '<i class="fa-li fa fa-check"></i>';
                $lDataSum .= $lDj;
                $lDataSum .= '</li>';
            }
            $lDataSum .= '</ul>';
            $lDataSum .= '</div>';
            //===============================================            
            $lDataSum .= '<div class="Row3">';
            $lDataSum .= '<a class="Title3" href="#Expériences Professionnelles">';
            $lDataSum .= 'Environnements';
            $lDataSum .= '</a>';
            $lDataSum .= '</div>';
            //===============================================            
            $lDataSum .= '<div class="Row3">';
            $lDataSum .= '<ul class="fa-ul">';
            $lDataMapi = $lItem["tool"];
            foreach($lDataMapi as $lDj) {
                $lDataSum .= '<li>';
                $lDataSum .= '<i class="fa-li fa fa-check"></i>';
                $lDataSum .= $lDj;
                $lDataSum .= '</li>';
            }
            $lDataSum .= '</ul>';
            $lDataSum .= '</div>';
            //===============================================            
        }
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "LIST_5") {
		$lFile = $_REQUEST["file"];
		$lKey1 = $_REQUEST["key1"];
		$lKey2 = $_REQUEST["key2"];
        $lIcon = $lKey2."_icon";
		$lFilename = "data/json/".$lFile.".json";
		$lData = GJson::Instance()->getData($lFilename);   
        
        $lDataMap = $lData[$lKey1][$lKey2];
        $lDataIcon = $lData[$lKey1][$lIcon];
        
        $lDataSum = '';        
        $lDataSum .= '<ul class="fa-ul">';
        foreach($lDataMap as $lItem) {
            $lDataSum .= '<li>';
            $lDataSum .= '<i class="fa-li '.$lDataIcon.'"></i>';
            $lDataSum .= join(" ", $lItem);
            $lDataSum .= '</li>';
        }
        $lDataSum .= '</ul>';   
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "LIST_6") {
		$lFile = $_REQUEST["file"];
		$lKey1 = $_REQUEST["key1"];
		$lKey2 = $_REQUEST["key2"];
        $lIconIn = $lKey2."_icon";
		$lFilename = "data/json/".$lFile.".json";
		$lData = GJson::Instance()->getData($lFilename);   
        
        $lDataMap = $lData[$lKey1][$lKey2];
        $lIcon = $lData[$lKey1][$lIconIn];
        
        $lDataSum = '';        
        $lDataSum .= '<ul class="List2 fa-ul">';
        $lCount = count($lDataMap);
        $i = 0;
        foreach($lDataMap as $lItem) {
            if($i != 0) {$lDataSum .= '<hr/><br/>';} $i++;
            $lDataSum .= '<li class="Item2">';
            $lDataSum .= '<i class="Icon4 fa-li '.$lIcon.'"></i>';
            $lDataSum .= '<div class="Content4">';
            $lDataSum .= $lItem["company"].'<br/>';
            $lDataSum .= join(" ", $lItem["description"]);
            //===============================================
            $lDataSum .= '<span class="Text6">';
            $lDataSum .= $i."/".$lCount;
            $lDataSum .= '</span>';
            //===============================================
            if(isset($lItem["info"])) {
                $lDataSum .= '<div class="Row3">';
                $lDataSum .= $lItem["info"];
                $lDataSum .= '</div>';
            }
            //===============================================
            if(isset($lItem["list"])) {
                $lDataSum .= '<ul class="fa-ul">';
                $lDataMapj = $lItem["list"];
                foreach($lDataMapj as $lDk) {
                    $lDataSum .= '<li class="">';
                    $lDataSum .= '<i class="fa-li fa fa-check"></i>';
                    $lDataSum .= join(" ", $lDk);
                    $lDataSum .= '</li>';
                }
                $lDataSum .= '</ul>';           
            }
            //===============================================
            if(isset($lItem["info2"])) {
                $lDataSum .= '<div class="Row3">';
                $lDataSum .= $lItem["info2"];
                $lDataSum .= '</div>';
            }
            //===============================================
            if(isset($lItem["list2"])) {
                $lDataSum .= '<ul class="fa-ul">';
                $lDataMapj = $lItem["list2"];
                foreach($lDataMapj as $lDk) {
                    $lDataSum .= '<li class="">';
                    $lDataSum .= '<i class="fa-li fa fa-check"></i>';
                    $lDataSum .= join(" ", $lDk);
                    $lDataSum .= '</li>';
                }
                $lDataSum .= '</ul>';           
            }
            //===============================================
            $lDataSum .= '</div>';
            $lDataSum .= '</li>';  
        }
        $lDataSum .= '</ul>';   
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "DATA_1") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lFilename = "data/json/".$lFile.".json";
		$lData = GJson::Instance()->getData($lFilename);
        $lDataMap = array();
		$lDataV = join(" ", $lData[$lKey]);
		print_r($lDataV);
	}
	//===============================================
	else if($lReq == "DATA_2") {
		$lFile = $_REQUEST["file"];
		$lKey1 = $_REQUEST["key1"];
		$lKey2 = $_REQUEST["key2"];
		$lFilename = "data/json/".$lFile.".json";
		$lData = GJson::Instance()->getData($lFilename);   
        
        $lDataMap = $lData[$lKey1];
        $lDataSum = '';
        $lDataSum .= '<img class="Img2" src="'.$lDataMap["src"].'" ';
        $lDataSum .= 'alt="'.$lDataMap["alt"].'" ';
        $lDataSum .= 'width="'.$lDataMap["width"].'"/>';
        
        $lDataMap = $lData[$lKey2];
        $lDataSum .= '<div class="Text3">'.join(" ", $lDataMap).'</div>';
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "DATA_3") {
		$lFile = $_REQUEST["file"];
		$lKey1 = $_REQUEST["key1"];
		$lKey2 = $_REQUEST["key2"];
		$lFilename = "data/json/".$lFile.".json";
		$lData = GJson::Instance()->getData($lFilename);   
        
        $lDataMap = $lData[$lKey1][$lKey2];
        $lDataSum = '';
        $lDataSum .= join(" ", $lDataMap);
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "PDF_1") {
		$lFile = $_REQUEST["file"];
		$lKey = $_REQUEST["key"];
		$lFilename = "data/json/".$lFile.".json";
		$lData = GJson::Instance()->getData($lFilename);
        $lPdf = GPdf::Instance()->getUrl($lData[$lKey]);
        $lDataSum = '';
        $lDataSum .= '<iframe src="https://docs.google.com/gview?url=';
        $lDataSum .= $lPdf;
        $lDataSum .= '&embedded=true" style="width:100%; height:100vh;" frameborder="0"></iframe>';
		print_r($lDataSum);
	}
	//===============================================
	else if($lReq == "FILE_LINK") {
        $lFile = "";
        $lFile .= $_SERVER["DOCUMENT_ROOT"];
		$lFile .= $_REQUEST["file"];
        $lDataSum = file_get_contents($lFile);
		print_r($lDataSum);
	}
	//===============================================
?>
