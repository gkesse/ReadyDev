//===============================================
function getCommand(name, arg){
	switch(name){
	case "createLink":
	case "insertImage":
		arg = prompt("Quelle est l'adresse ?");
		break;
	}
	//===============================================
	if (typeof arg === 'undefined') {
		arg = '';
	}
	//===============================================
	switch(name){
	case "createLink":
		GEditor.Instance().editLink(arg);
		break;
	case "insertImage":
		GEditor.Instance().editImage(arg);
		break;
	case "code":
		GEditor.Instance().editReadyStyle("Code1");
		break;
	case "readystyle":
		GEditor.Instance().editReadyStyle(arg);
		break;
	default:
		document.execCommand(name, false, arg);
		break;
	}
}
//===============================================
function openEditorTab(obj, name) {
	GEditor.Instance().openEditorTab(obj, name);
}
//===============================================
function viewCode(){
	GEditor.Instance().viewCode();
}
//===============================================
function viewPage(){
	GEditor.Instance().viewPage();
}
//===============================================
function saveFile() {
	GEditor.Instance().saveFile();
}
//===============================================
function saveFileText() {
	GEditor.Instance().saveFileText();
}
//===============================================
function saveFileKey(e) {
	GEditor.Instance().saveFileKey(e);
}
//===============================================
function saveFileTextKey(e) {
	GEditor.Instance().saveFileTextKey(e);
}
//===============================================
function pasteText(e) {
	GEditor.Instance().pasteText(e);
}
//===============================================
function selectFile() {
	GEditor.Instance().selectFile();
}
//===============================================
function openFile(obj, dir) {
	GEditor.Instance().openFile(obj, dir);
}
//===============================================
function openLink(obj) {
	GEditor.Instance().openLink(obj);
}
//===============================================