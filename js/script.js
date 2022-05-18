//===============================================
// header
//===============================================
function header_menu_open(obj) {
	var lMenu = new GMenu();
	lMenu.openMenu(obj);
}
//===============================================
function header_connection_open(obj) {
	var lConnection = new GConnection();
	lConnection.openConnection(obj);
}
//===============================================
function header_connection_connect(obj) {
	var lConnection = new GConnection();
	lConnection.connect(obj);
}
//===============================================
function header_connection_close(obj) {
	var lConnection = new GConnection();
	lConnection.closeConnection(obj);
}
//===============================================
function header_disconnection_open(obj) {
	var lConnection = new GConnection();
	lConnection.openDisconnection(obj);
}
//===============================================
function header_disconnection_disconnect(obj) {
	var lConnection = new GConnection();
	lConnection.disconnect(obj);
}
//===============================================
function header_disconnection_close(obj) {
	var lConnection = new GConnection();
	lConnection.closeDisconnection(obj);
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
