//===============================================
class GUser extends GObject {
    //===============================================
    constructor() {
		super();
		this.pseudo = "";
		this.password = "";
    }
    //===============================================
	serialize(code = "user") {
		var lData = new GCode();
		lData.createDoc();
		lData.addData(code, "pseudo", this.pseudo);
		lData.addData(code, "password", this.password);
		return lData.toStringData();
	}
    //===============================================
	deserialize(data, code = "user") {
		var lData = new GCode();
		lData.loadXml(data);
		this.pseudo = lData.getItem(code, "pseudo");
		this.password = lData.getItem(code, "password");
	}
    //===============================================
    onModule(method, obj, data) {
		if(method == "") {
			return false;
		}
    	//===============================================
		// connection
    	//===============================================
		else if(method == "open_connection") {
			this.onOpenConnection();
		}
		else if(method == "close_connection") {
			this.onCloseConnection();
		}
		else if(method == "run_connection") {
			this.onRunConnection();
		}
    	//===============================================
		// disconnection
    	//===============================================
		else if(method == "open_disconnection") {
			this.onOpenDisconnection();
		}
		else if(method == "close_disconnection") {
			this.onCloseDisconnection();
		}
		else if(method == "run_disconnection") {
			this.onRunDisconnection();
		}
    	//===============================================
		// event
    	//===============================================
		else if(method == "key_press") {
			this.onKeyPress(obj, data);
		}
    	//===============================================
		// end
    	//===============================================
		else return false;
		return true;
	}
    //===============================================
    // connection
    //===============================================
    onOpenConnection() {
        var lModalConnection = document.getElementById("ModalConnection");
        var lConnectionBody = document.getElementById("ConnectionBody");
        var lConnectionMsg = document.getElementById("ConnectionMsg");
        var lConnectionPseudo = document.getElementById("ConnectionPseudo");
		var lClassName = lConnectionBody.className;
        lConnectionMsg.style.display = "none";
        lConnectionBody.className = lClassName.replace(" AnimateShow", "");
        lConnectionBody.className = lClassName.replace(" AnimateHide", "");
        lConnectionBody.className += " AnimateShow";
        lModalConnection.style.display = "block";
		lConnectionPseudo.focus();
    }
    //===============================================
    onCloseConnection() {
        var lModalConnection = document.getElementById("ModalConnection");
        var lConnectionBody = document.getElementById("ConnectionBody");
        var lClassName = lConnectionBody.className;
        lConnectionBody.className = lClassName.replace(" AnimateShow", "");
        lConnectionBody.className = lClassName.replace(" AnimateHide", "");
        lConnectionBody.className += " AnimateHide";
        setTimeout(function() {
            lModalConnection.style.display = "none";
        }, 400);
    }
    //===============================================
    onRunConnection() {
        var lPseudo = document.getElementById("ConnectionPseudo");
        var lPassword = document.getElementById("ConnectionPassword");
        var lConnectionMsg = document.getElementById("ConnectionMsg");
        var lConnectionButton = document.getElementById("ConnectionButton");
        var lMessage = "";

		lConnectionButton.disabled = true;
            lConnectionMsg.style.display = "none";

        if(!lPseudo.value.length) {
            lMessage = "Le nom d'utilisateur' est obligatoire.";
        }
        else if(!lPassword.value.length) {
            lMessage = "Le mot de passe est obligatoire.";
        }
        
        if(lMessage.length) {
            var lHtml = "<i style='color:#ff9933' class='fa fa-exclamation-triangle'></i> "; 
            lHtml += lMessage; 
            lConnectionMsg.innerHTML = lHtml;
            lConnectionMsg.style.display = "block";
            lConnectionMsg.style.color = "#ff9933";
			lConnectionButton.disabled = false;
        }
        else {
			this.pseudo =lPseudo.value;
			this.password = lPassword.value;
            this.onRunConnectionCall();
        }
    }
    //===============================================
    onRunConnectionCall() {
		var lAjax = new GAjax();
		var lData = this.serialize();
		lAjax.call("user", "run_connection", lData, this.onRunConnectionCB);		
    }
    //===============================================
    onRunConnectionCB(data) {
		var lLog = GLog.Instance();
        var lConnectionMsg = document.getElementById("ConnectionMsg");
        var lConnectionForm = document.getElementById("ConnectionForm");
        var lConnectionButton = document.getElementById("ConnectionButton");

        lConnectionMsg.style.display = "none";

        var lUser = new GUser();
		lUser.deserialize(data);
		
        if(lLog.hasErrors()) {
            var lHtml = "<i style='color:#ff9933' class='fa fa-exclamation-triangle'></i> "; 
            lHtml += lLog.getError(); 
            lConnectionMsg.innerHTML = lHtml;
            lConnectionMsg.style.color = "#ff9933";
            lConnectionMsg.style.display = "block";
			lLog.clearErrors();
        }
        else {
            var lHtml = "<i style='color:#339933' class='fa fa-paper-plane-o'></i> "; 
            lHtml += "La connexion a réussi."; 
            lConnectionMsg.innerHTML = lHtml;
            lConnectionMsg.style.color = "#339933";
            lConnectionMsg.style.display = "block";
            lConnectionForm.submit();
        }
		lConnectionButton.disabled = false;
    }
    //===============================================
    // disconnection
    //===============================================
    onOpenDisconnection() {
        var lModalDisconnection = document.getElementById("ModalDisconnection");
        var lDisconnectionBody = document.getElementById("DisconnectionBody");
        var lClassName = lDisconnectionBody.className;
        lDisconnectionBody.className = lClassName.replace(" AnimateShow", "");
        lDisconnectionBody.className = lClassName.replace(" AnimateHide", "");
        lDisconnectionBody.className += " AnimateShow";
        lModalDisconnection.style.display = "block";
    }
    //===============================================
    onCloseDisconnection() {
        var lModalDisconnection = document.getElementById("ModalDisconnection");
        var lDisconnectionBody = document.getElementById("DisconnectionBody");
        var lClassName = lDisconnectionBody.className;
        lDisconnectionBody.className = lClassName.replace(" AnimateShow", "");
        lDisconnectionBody.className = lClassName.replace(" AnimateHide", "");
        lDisconnectionBody.className += " AnimateHide";
        setTimeout(function() {
            lModalDisconnection.style.display = "none";
        }, 400);
    }
    //===============================================
    onRunDisconnection() {
		var lAjax = new GAjax();
		lAjax.call("user", "run_disconnection", "", this.onRunDisconnectionCB);		
    }
    //===============================================
    onRunDisconnectionCB(data) {
        var lDisconnectionMsg = document.getElementById("DisconnectionMsg");
		var lUser = new GUser();
		lUser.deserialize(data);
        var lHtml = "<i style='color:#339933' class='fa fa-power-off'></i> "; 
        lHtml += "La déconnexion a réussi."; 
        lDisconnectionMsg.innerHTML = lHtml;
        lDisconnectionMsg.style.color = "#339933";
        lDisconnectionMsg.style.display = "block";
        location.reload();
    }
    //===============================================
    onKeyPress(obj, event) {
		var lConnectionButton = document.getElementById("ConnectionButton");
		if(event.key == "Enter") {
			lConnectionButton.click();
		}
    }
    //===============================================
}
//===============================================
