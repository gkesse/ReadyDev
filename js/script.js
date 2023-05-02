//===============================================
function call_server(_module, _method, _obj = null, _data = null) {
    var lServer = new GServer();
    lServer.run(_module, _method, _obj, _data);
    lServer.showLogsX();
    return !lServer.hasErrors();
}
//===============================================