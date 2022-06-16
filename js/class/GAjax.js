//===============================================
class GAjax extends GObject {
    //===============================================
    constructor() {
        super();
		this.xhttp = new XMLHttpRequest();
		this.method = "POST";
		this.url = "/php/req/server.php";
		this.async = true;
		this.user = null;
		this.password = null;
		this.headers = {
			"Content-Type" : "application/x-www-form-urlencoded"
		};
    }
    //===============================================
    call(module, method, params, callback) {
		if(module == "") return false;
		if(method == "") return false;
		if(callback == null) return false;
		var lReq = new GCode();
		lReq.createDoc();
		lReq.addData("request", "module", module);
		lReq.addData("request", "method", method);
		lReq.loadCode(params);
		var lData = lReq.toString();
		this.callServer(lData, callback);
		return true;
	}
    //===============================================
    callServer(data, callback) {
		if(data == "") return false;
		if(callback == null) return false;
        this.xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                var lData = this.responseText;
				var lLog = GLog.Instance();
				lLog.deserialize(lData);
                callback(lData);
				lLog.showErrors();
				lLog.showLogs();
			}
        }
        this.xhttp.open(this.method, this.url, this.async, this.user, this.password);
       	for(var lHeader in this.headers) {
			var lValue = this.headers[lHeader];
			this.xhttp.setRequestHeader(lHeader, lValue);
		}
		var lReq = "";
		lReq += sprintf("req=%s", data);
        this.xhttp.send(lReq);
		return true;
    }
    //===============================================
}
//===============================================
