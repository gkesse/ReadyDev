//===============================================
class GLog extends GObject {
    //===============================================
	static m_instance = null;
    //===============================================
    constructor() {
		super();
		this.errors = [];
		this.logs = [];
		this.env = "";
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
		lData.getList(errors, this.errors);
		lData.getList(logs, this.logs);
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
		var lEnvObj = new GEnv();
		var lErrors = "";
		for(var i = 0; i < this.errors.length; i++) {
			var lError = this.errors[i];
			var lBr = "<br>";
			if(lEnvObj.isTestEnv() && !lEnvObj.isProdOn()) lBr = "\n";
			if(i != 0) lErrors += lBr;
			var lMsg = sprintf("<i class='fa fa-chevron-right'></i> %s", lError);
			if(lEnvObj.isTestEnv() && !lEnvObj.isProdOn()) lMsg = sprintf("> %s", lError);
			lErrors += lMsg;
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
		var lEnvObj = new GEnv();
		var lLogs = "";
		for(var i = 0; i < this.logs.length; i++) {
			var lLog = this.logs[i];
			var lBr = "<br>";
			if(lEnvObj.isTestEnv() && !lEnvObj.isProdOn()) lBr = "\n";
			if(i != 0) lLogs += lBr;
			var lMsg = sprintf("<i class='fa fa-chevron-right'></i> %s", lLog);
			if(lEnvObj.isTestEnv() && !lEnvObj.isProdOn()) lMsg = sprintf("> %s", lLog);
			lLogs += lMsg;
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
		var lEnvObj = new GEnv();
		var lDateObj = new GDate();
		var lError = new Error();
		var lStack = lError.stack.toString().split(/\r\n|\n/);
		var lTrace = lStack[2].trim();
		var lDate = lDateObj.getDate();
		var lMsg = error;
		if(lEnvObj.isTestEnv() && !lEnvObj.isProdOn()) lMsg = sprintf("%s %s :\n%s", lDate, lTrace, error);
		this.errors.push(lMsg);
	}
    //===============================================
	addLog(log) {
		var lEnvObj = new GEnv();
		var lDateObj = new GDate();
		var lError = new Error();
		var lStack = lError.stack.toString().split(/\r\n|\n/);
		var lTrace = lStack[2].trim();
		var lDate = lDateObj.getDate();
		var lMsg = log;		
		if(lEnvObj.isTestEnv() && !lEnvObj.isProdOn()) lMsg = sprintf("%s %s :\n%s", lDate, lTrace, log);
		this.logs.push(lMsg);
	}
    //===============================================
	getError() {
		if(this.errors.length == 0) return "";
		var lData = this.errors[0];
		return lData;
	}
    //===============================================
	getLog() {
		if(this.logs.length == 0) return "";
		var lData = this.logs[0];
		return lData;
	}
    //===============================================
	hasErrors() {
		var lData = (this.errors.length > 0);
		return lData;
	}
    //===============================================
	clearErrors() {
		this.errors = [];
	}
    //===============================================
	clearLogs() {
		this.logs = [];
	}
    //===============================================
}
//===============================================
