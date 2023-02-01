//===============================================
class GLogUi extends GObject {
    //===============================================
    constructor(_codeName = "logs") {
        super(_codeName);
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "close_error") {
            this.onCloseError();
        }
        else if(_method == "close_log") {
            this.onCloseLog();
        }
        else if(_method == "show_php_logs") {
            this.onShowPhpLogs();
        }
        else {
            this.addError("La méthode est inconnue.");
        }
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
	onShowPhpLogs() {
        var lLogsPhpData = document.getElementById("LogsPhpData");
        var lData = lLogsPhpData.innerHTML;
        this.loadLogs(lData);
	}
    //===============================================
}
//===============================================
