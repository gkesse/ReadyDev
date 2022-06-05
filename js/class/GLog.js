//===============================================
class GLog extends GObject {
    //===============================================
	static m_instance = null;
    //===============================================
    constructor() {
		super();
		this.errors = [];
		this.logs = [];
    }
    //===============================================
	static Instance() {
		if(this.m_instance == null) {
			this.m_instance = new GLog();
		}
		return this.m_instance;
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
	    var lErrorBox = document.getElementById("ErrorsBox");
	    lErrorBox.style.display = "none"; 
    }
    //===============================================
    onCloseLog() {
	    var lLog = document.getElementById("LogsBox");
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
	    var lErrorsBox = document.getElementById("ErrorsBox");
	    var lErrorsMsg = document.getElementById("ErrorsMsg");
	    lErrorsBox.style.display = "block";
 		lErrorsMsg.innerHTML = lErrors;
		this.errors = [];
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
	    var lLogsBox = document.getElementById("LogsBox");
	    var lLogsMsg = document.getElementById("LogsMsg");
	    lLogsBox.style.display = "block";
 		lLogsMsg.innerHTML = lLogs;
		this.logs = [];
    }
    //===============================================
	addError(error) {
		var lDateObj = new GDate();
		var lError = new Error();
		var lStack = lError.stack.toString().split(/\r\n|\n/);
		var lTrace = lStack[2].trim();
		var lDate = lDateObj.getDate();
		var lMsg = sprintf("%s %s :\n%s", lDate, lTrace, error);
		this.errors.push(lMsg);
	}
    //===============================================
	addLog(log) {
		var lDateObj = new GDate();
		var lError = new Error();
		var lStack = lError.stack.toString().split(/\r\n|\n/);
		var lTrace = lStack[2].trim();
		var lDate = lDateObj.getDate();
		var lMsg = sprintf("%s %s :\n%s", lDate, lTrace, log);
		this.logs.push(lMsg);
	}
    //===============================================
}
//===============================================
