//===============================================
class GUser extends GObject {
    //===============================================
    constructor() {
		super();
		this.msg = "";
		this.email = "";
		this.password = "";
		this.status = false;
    }
    //===============================================
	serialize(code = "user") {
		var lData = new GCode();
		lData.createDoc();
		lData.addData(code, "msg", this.msg);
		lData.addData(code, "email", this.email);
		lData.addData(code, "password", this.password);
		lData.addData(code, "status", this.status);
		return lData.toStringCode(code);
	}
    //===============================================
	deserialize(data, code = "user") {
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
		// method
    	//===============================================
		else if(method == "run_connection") {
			this.onRunConnection();
		}
    	//===============================================
		// end
    	//===============================================
		else return false;
		return true;
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
		lAjax.call("user", "run_connection", lData, this.onRunConnectionCB);		
    }
    //===============================================
    onRunConnectionCB(data) {
        var lConnectionMsg = document.getElementById("ConnectionMsg");
        var lConnectionForm = document.getElementById("ConnectionForm");
        lConnectionMsg.style.display = "none";
        var lUser = new GUser();
		lUser.deserialize(data);
        if(!lUser.status) {
            var lHtml = "<i style='color:#ff9933' class='fa fa-exclamation-triangle'></i> "; 
            lHtml += lUser.msg; 
            lConnectionMsg.innerHTML = lHtml;
            lConnectionMsg.style.color = "#ff9933";
            lConnectionMsg.style.display = "block";
        }
        else {
            var lHtml = "<i style='color:#339933' class='fa fa-paper-plane-o'></i> "; 
            lHtml += lUser.msg; 
            lConnectionMsg.innerHTML = lHtml;
            lConnectionMsg.style.color = "#339933";
            lConnectionMsg.style.display = "block";
            lConnectionForm.submit();
        }
    }
    //===============================================
}
//===============================================
