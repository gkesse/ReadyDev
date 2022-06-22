//===============================================
class GLog extends GModule {
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
			this.onMethodNone();
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
		else {
			this.onMethodUnknown();
			return false;
		}
    	//===============================================
		return true;
	}
    //===============================================
    onCloseError() {
        var lModalErrors = document.getElementById("ModalErrors");
        var lErrorsBody = document.getElementById("ErrorsBody");
        var lClassName = lErrorsBody.className;
        lErrorsBody.className = lClassName.replace(" AnimateShow", "");
        lErrorsBody.className = lClassName.replace(" AnimateHide", "");
        lErrorsBody.className += " AnimateHide";
        setTimeout(function() {
            lModalErrors.style.display = "none";
        }, 400);
    }
    //===============================================
    onCloseLog() {
        var lModalLogs = document.getElementById("ModalLogs");
        var lLogsBody = document.getElementById("LogsBody");
        var lClassName = lLogsBody.className;
        lLogsBody.className = lClassName.replace(" AnimateShow", "");
        lLogsBody.className = lClassName.replace(" AnimateHide", "");
        lLogsBody.className += " AnimateHide";
        setTimeout(function() {
            lModalLogs.style.display = "none";
        }, 400);
    }
    //===============================================
    getErrors() {
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
		return lErrors;
    }
    //===============================================
    getLogs() {
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
		return lLogs;
    }
    //===============================================
    showErrors() {
		var lErrors = this.getErrors();
		if(lErrors == "") return false;
		//
        var lModalErrors = document.getElementById("ModalErrors");
        var lErrorsBody = document.getElementById("ErrorsBody");
        var lErrorsLabel = document.getElementById("ErrorsLabel");
		var lClassName = lErrorsBody.className;
        lErrorsBody.className = lClassName.replace(" AnimateShow", "");
        lErrorsBody.className = lClassName.replace(" AnimateHide", "");
        lErrorsBody.className += " AnimateShow";
        lModalErrors.style.display = "block";
		lErrorsLabel.innerHTML = lErrors;
		//
		this.errors = [];
		return true;
    }
    //===============================================
    showLogs() {
		var lEnvObj = new GEnv();
		var lLogs = this.getLogs();
		if(lLogs == "") return false;
		if(lEnvObj.isTestEnv() && !lEnvObj.isProdOn()) lLogs = sprintf("<xmp>%s</xmp>", lLogs);
		//
        var lModalLogs = document.getElementById("ModalLogs");
        var lLogsBody = document.getElementById("LogsBody");
        var lLogsLabel = document.getElementById("LogsLabel");
		var lClassName = lLogsBody.className;
        lLogsBody.className = lClassName.replace(" AnimateShow", "");
        lLogsBody.className = lClassName.replace(" AnimateHide", "");
        lLogsBody.className += " AnimateShow";
        lModalLogs.style.display = "block";
		lLogsLabel.innerHTML = lLogs;
		//
		this.logs = [];
		return true;
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
