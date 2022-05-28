//===============================================
class GHeader extends GObject {
    //===============================================
    constructor() {
		super();
		this.msg = "";
		this.email = "";
		this.password = "";
		this.status = false;
    }
    //===============================================
	serialize(code = "header") {
		var lData = new GCode();
		lData.createDoc();
		lData.addData(code, "msg", this.msg);
		lData.addData(code, "email", this.email);
		lData.addData(code, "password", this.password);
		lData.addData(code, "status", this.status);
		return lData.toStringCode(code);
	}
    //===============================================
	deserialize(data, code = "header") {
		var lData = new GCode();
		lData.loadXml(data);
		this.msg = lData.getItem(code, "msg");
		this.email = lData.getItem(code, "email");
		this.password = lData.getItem(code, "password");
		this.status = lData.getItem(code, "status");
	}
    //===============================================
    onModule(method) {
		if(method == "") {
			return false;
		}
    	//===============================================
		// menu
    	//===============================================
		else if(method == "open_menu") {
			this.onOpenMenu();
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
		// end
    	//===============================================
		else return false;
		return true;
	}
    //===============================================
    // menu
    //===============================================
    onOpenMenu() {
		var lHeaderMenu = document.getElementById("HeaderMenu");
		var lHeaderMenuBars = document.getElementById("HeaderMenuBars");
		var lBars = '<i class="fa fa-bars"></i>';
		if(lBars == lHeaderMenuBars.innerHTML.trim()) {
			lBars = '<i class="fa fa-close"></i>';
			lHeaderMenu.className += " RWD";
		}
		else {
			var lClassName = lHeaderMenu.className;
			lHeaderMenu.className = lClassName.replace(" RWD", "");
		}
		lHeaderMenuBars.innerHTML = lBars;	
    }
    //===============================================
    // connection
    //===============================================
    onOpenConnection() {
        var lModalConnection = document.getElementById("ModalConnection");
        var lConnectionBody = document.getElementById("ConnectionBody");
        var lConnectionMsg = document.getElementById("ConnectionMsg");
        var lClassName = lConnectionBody.className;
        lConnectionMsg.style.display = "none";
        lConnectionBody.className = lClassName.replace(" AnimateShow", "");
        lConnectionBody.className = lClassName.replace(" AnimateHide", "");
        lConnectionBody.className += " AnimateShow";
        lModalConnection.style.display = "block";
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
        var lEmail = document.getElementsByName("Email")[0];
        var lPassword = document.getElementsByName("Password")[0];
        var lConnectionMsg = document.getElementById("ConnectionMsg");
        var lRegExp = /\S+@\S+\.\S+/;
        var lMessage = "";

        if(!lEmail.value.length) {
            lMessage = "Email est obligatoire";
        }
        else if(!lRegExp.test(lEmail.value)) {
            lMessage = "Email est incorrect";
        }
        else if(!lPassword.value.length) {
            lMessage = "Mot de passe est obligatoire";
        }
        
        if(lMessage.length) {
            var lHtml = "<i style='color:#ff9933' class='fa fa-exclamation-triangle'></i> "; 
            lHtml += lMessage; 
            lConnectionMsg.innerHTML = lHtml;
            lConnectionMsg.style.display = "block";
            lConnectionMsg.style.color = "#ff9933";
        }
        else {
			this.email =lEmail.value;
			this.password = lPassword.value;
            this.onRunConnectionCall();
        }
    }
    //===============================================
    onRunConnectionCall() {
		var lAjax = new GAjax();
		var lData = this.serialize();
		lAjax.call("header", "run_connection", lData, this.onRunConnectionCB);		
    }
    //===============================================
    onRunConnectionCB(data) {
        var lConnectionMsg = document.getElementById("ConnectionMsg");
        var lConnectionForm = document.getElementById("ConnectionForm");
        lConnectionMsg.style.display = "none";
        var lHeader = new GHeader();
		lHeader.deserialize(data);
        if(!lHeader.status) {
            var lHtml = "<i style='color:#ff9933' class='fa fa-exclamation-triangle'></i> "; 
            lHtml += lHeader.msg; 
            lConnectionMsg.innerHTML = lHtml;
            lConnectionMsg.style.color = "#ff9933";
            lConnectionMsg.style.display = "block";
        }
        else {
            var lHtml = "<i style='color:#339933' class='fa fa-paper-plane-o'></i> "; 
            lHtml += lHeader.msg; 
            lConnectionMsg.innerHTML = lHtml;
            lConnectionMsg.style.color = "#339933";
            lConnectionMsg.style.display = "block";
            lConnectionForm.submit();
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
		lAjax.call("header", "run_disconnection", "", this.onRunDisconnectionCB);		
    }
    //===============================================
    onRunDisconnectionCB(data) {
        var lDisconnectionMsg = document.getElementById("DisconnectionMsg");
		var lHeader = new GHeader();
		lHeader.deserialize(data);
        var lHtml = "<i style='color:#339933' class='fa fa-power-off'></i> "; 
        lHtml += lHeader.msg; 
        lDisconnectionMsg.innerHTML = lHtml;
        lDisconnectionMsg.style.color = "#339933";
        lDisconnectionMsg.style.display = "block";
        location.reload();
    }
    //===============================================
}
//===============================================
