//===============================================
class GLog extends GObject {
    //===============================================
    constructor() {
		super();
		this.errors = [];
		this.logs = [];
    }
    //===============================================
    deserialize(data, errors = "errors", logs = "logs") {
		var lData = new GCode();
		lData.loadXml(data);
		this.errors = lData.getList(errors);
		this.logs = lData.getList(logs);
	}
    //===============================================
    onModule(method, obj, data) {
		if(method == "") {
			return false;
		}
    	//===============================================
		// method
    	//===============================================
		else if(method == "close_error") {
			this.onCloseError();
		}
		else if(method == "close_log") {
			this.onCloseLog();
		}
    	//===============================================
		// end
    	//===============================================
		else return false;
		return true;
	}
    //===============================================
    onCloseError() {
	    var lErrorBox = document.getElementById("error_box");
	    lErrorBox.style.display = "none"; 
    }
    //===============================================
    onCloseLog() {
	    var lLog = document.getElementById("log_box");
	    lLog.style.display = "none"; 
    }
    //===============================================
    showErrors() {
		var lErrors = "";
		for(var i = 0; i < this.errors.length; i++) {
			var lError = this.errors[i];
			if(i != 0) lErrors += "\n";
			lErrors += "> " + lError;
		}
		if(lErrors == "") return;
	    var lErrorBox = document.getElementById("error_box");
	    var lErrorMsg = document.getElementById("error_msg");
	    lErrorBox.style.display = "block";
 		lErrorMsg.innerHTML = lErrors;
    }
    //===============================================
    showLogs() {
		var lLogs = "";
		for(var i = 0; i < this.logs.length; i++) {
			var lLog = this.logs[i];
			if(i != 0) lLogs += "\n";
			lLogs += "> " + lLog;
		}
		if(lLogs == "") return;
	    var lLogBox = document.getElementById("log_box");
	    var lLogMsg = document.getElementById("log_msg");
	    lLogBox.style.display = "block";
 		lLogMsg.innerHTML = lLogs;
    }
    //===============================================
}
//===============================================
