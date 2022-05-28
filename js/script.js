//===============================================
// server
//===============================================
function server_call(module, method, obj = null, data = "") {
	var lServer = new GServer();
	lServer.run(module, method, obj, data);
}
//===============================================
// error
//===============================================
function error_close() {
    var lError = document.getElementsByClassName("error")[0];
    lError.style.display = "none"; 
}
//===============================================
// log
//===============================================
function log_close() {
    var lLog = document.getElementsByClassName("log")[0];
    lLog.style.display = "none"; 
}
//===============================================
