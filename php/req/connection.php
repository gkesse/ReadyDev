<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "CONNECT") {
		$lEmail= $_REQUEST["email"];
		$lPassword = $_REQUEST["password"];
        $lUserMap = GJson::Instance()->getData("data/json/users.json");
        $lExist = GGlobal::Instance()->existData($lUserMap["users"], "email", $lEmail);
        $lData = array();
        if(!$lExist) {
            $lData["status"] = false;
            $lData["msg"] = "Email n'existe pas";
            print_r(json_encode($lData));
            return;
        }
        $lEncrypt = md5($lEmail."|".$lPassword);
        $lExist = GGlobal::Instance()->existData($lUserMap["users"], "password", $lEncrypt);
        if(!$lExist) {
            $lData["status"] = false;
            $lData["msg"] = "Mot de passe est incorrect";
            print_r(json_encode($lData));
            return;
        }
        $lData["status"] = true;
        $lData["msg"] = "Bonne Connexion";
        $lGroup = GGlobal::Instance()->getData($lUserMap["users"], "email", $lEmail, "group");
        if(!isset($_SESSION["login"])) {
            $_SESSION["login"] = array(
            "email" => $lEmail,
            "group" => $lGroup
            );
        }
        print_r(json_encode($lData));
	}
	//===============================================
	else if($lReq == "DISCONNECT") {
        if(isset($_SESSION["login"])) {
            unset($_SESSION["login"]);
        }
        header("Location: ".$_SESSION["lasturl"]);
        print_r("Bonne Déconnexion");
	}
	//===============================================
?>
