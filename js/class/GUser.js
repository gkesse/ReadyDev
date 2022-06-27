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
			this.onMethodNone();
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
		else if(method == "keypress_connection") {
			this.onKeyPressConnection(obj, data);
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
		// account
    	//===============================================
		else if(method == "open_account") {
			this.onOpenCreateAccount();
		}
		else if(method == "close_account") {
			this.onCloseAccount();
		}
		else if(method == "create_account") {
			this.onCreateAccount();
		}
		else if(method == "keypress_account") {
			this.onKeyPressAccount(obj, data);
		}
    	//===============================================
		// end
    	//===============================================
		else {
			this.onMethodUnknown();
			return false;		
		}
    	//===============================================
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
    onKeyPressConnection(obj, event) {
		var lConnectionButton = document.getElementById("ConnectionButton");
		if(event.key == "Enter") {
			lConnectionButton.click();
		}
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
    // account
    //===============================================
    onOpenCreateAccount() {
        var lModalAccount = document.getElementById("ModalAccount");
        var lAccountBody = document.getElementById("AccountBody");
        var lAccountMsg = document.getElementById("AccountMsg");
        //var lAccountPseudo = document.getElementById("AccountPseudo");
		var lClassName = lAccountBody.className;
        lAccountMsg.style.display = "none";
        lAccountBody.className = lClassName.replace(" AnimateShow", "");
        lAccountBody.className = lClassName.replace(" AnimateHide", "");
        lAccountBody.className += " AnimateShow";
        lModalAccount.style.display = "block";
		//lAccountPseudo.focus();
    }    
    //===============================================
    onCloseAccount() {
        var lModalAccount = document.getElementById("ModalAccount");
        var lAccountBody = document.getElementById("AccountBody");
        var lClassName = lAccountBody.className;
        lAccountBody.className = lClassName.replace(" AnimateShow", "");
        lAccountBody.className = lClassName.replace(" AnimateHide", "");
        lAccountBody.className += " AnimateHide";
        setTimeout(function() {
            lModalAccount.style.display = "none";
        }, 400);
    }
    //===============================================
    onCreateAccount() {
        var lPseudo = document.getElementById("AccountPseudo");
        var lPassword = document.getElementById("AccountPassword");
        var lConfirm = document.getElementById("AccountConfirm");
        var lAccountMsg = document.getElementById("AccountMsg");
        var lAccountButton = document.getElementById("AccountButton");
        var lMessage = "";

		lAccountButton.disabled = true;
        lAccountMsg.style.display = "none";

        if(!lPseudo.value.length) {
            lMessage = "Le nom d'utilisateur est obligatoire.";
        }
        else if(lPseudo.value.length < 8) {
            lMessage = "Le nom d'utilisateur doit faire au minimum 8 caractères.";
        }
        else if(lPseudo.value.length > 50) {
            lMessage = "Le nom d'utilisateur doit faire au maximum 50 caractères.";
        }
        else if(!lPassword.value.length) {
            lMessage = "Le mot de passe est obligatoire.";
        }
        else if(lPassword.value.length < 8) {
            lMessage = "Le mot de passe doit faire au minimum 8 caractères.";
        }
        else if(lPassword.value.length > 50) {
            lMessage = "Le mot de passe doit faire au maximum 50 caractères.";
        }
        else if(!lConfirm.value.length) {
            lMessage = "La confirmation du mot de passe est obligatoire.";
        }
        else if(lPassword.value != lConfirm.value) {
            lMessage = "Les mots de passe sont différents.";
        }
        
        if(lMessage.length) {
            var lHtml = "<i style='color:#ff9933' class='fa fa-exclamation-triangle'></i> "; 
            lHtml += lMessage; 
            lAccountMsg.innerHTML = lHtml;
            lAccountMsg.style.display = "block";
            lAccountMsg.style.color = "#ff9933";
			lAccountButton.disabled = false;
        }
        else {
			this.pseudo =lPseudo.value;
			this.password = lPassword.value;
            this.onCreateAccountCall();
        }
    }
    //===============================================
    onCreateAccountCall() {
		var lAjax = new GAjax();
		var lData = this.serialize();
		lAjax.call("user", "create_account", lData, this.onCreateAccountCB);		
    }
    //===============================================
    onCreateAccountCB(data) {
		var lLog = GLog.Instance();
        var lAccountMsg = document.getElementById("AccountMsg");
        var lAccountForm = document.getElementById("AccountForm");
        var lAccountButton = document.getElementById("AccountButton");

        lAccountMsg.style.display = "none";

        var lUser = new GUser();
		lUser.deserialize(data);
		
        if(lLog.hasErrors()) {
            var lHtml = "<i style='color:#ff9933' class='fa fa-exclamation-triangle'></i> "; 
            lHtml += lLog.getError(); 
            lAccountMsg.innerHTML = lHtml;
            lAccountMsg.style.color = "#ff9933";
            lAccountMsg.style.display = "block";
			lLog.clearErrors();
        }
        else {
            var lHtml = "<i style='color:#339933' class='fa fa-paper-plane-o'></i> "; 
            lHtml += "La création du compte a réussi."; 
            lAccountMsg.innerHTML = lHtml;
            lAccountMsg.style.color = "#339933";
            lAccountMsg.style.display = "block";
            //lAccountForm.submit();
        }
		lAccountButton.disabled = false;
    }
	//===============================================
    onKeyPressAccount(obj, event) {
		var lAccountButton = document.getElementById("AccountButton");
		if(event.key == "Enter") {
			lAccountButton.click();
		}
    }
    //===============================================
}
//===============================================
