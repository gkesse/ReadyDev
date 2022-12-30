//===============================================
// server
//===============================================
function server_call(_module, _method, _obj = null, _data = null) {
    var lServer = new GServer();
    lServer.run(_module, _method, _obj, _data);
    lServer.showErrors();
}
//===============================================
