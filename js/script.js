//===============================================
// server
//===============================================
function server_call(module, method, obj = null, data = null) {
	var lServer = new GServer();
	lServer.run(module, method, obj, data);
	lServer.showErrors();
}
//===============================================
