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
// sitemap
//===============================================
function openSitemapTab(obj, name) {
	var lSitemap = new GSitemap();
	lSitemap.openSitemapTab(obj, name);
}
//===============================================
function openSitemapFileTab(obj, name) {
	var lSitemap = new GSitemap();
	lSitemap.openSitemapFileTab(obj, name);
}
//===============================================
function enumerateUrl() {
	var lSitemap = new GSitemap();
	lSitemap.enumerateUrl();
}
//===============================================
function enumerateClear() {
	var lSitemap = new GSitemap();
	lSitemap.enumerateClear();
}
//===============================================
function listUrl() {
	var lSitemap = new GSitemap();
	lSitemap.listUrl();
}
//===============================================
function listClear() {
	GSitemap.Instance().listClear();
}
//===============================================
function generateUrl() {
	var lSitemap = new GSitemap();
	lSitemap.generateUrl();
}
//===============================================
function generateClear() {
	var lSitemap = new GSitemap();
	lSitemap.generateClear();
}
//===============================================
function visualizeUrl() {
	var lSitemap = new GSitemap();
	lSitemap.visualizeUrl();
}
//===============================================
function visualizeClear() {
	var lSitemap = new GSitemap();
	lSitemap.visualizeClear();
}
//===============================================
// server
//===============================================
function server_call(module, method) {
	var lServer = new GServer();
	lServer.run(module, method);
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
