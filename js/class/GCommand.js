//===============================================
class GCommand extends GObject {
    //===============================================
	static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_id = 0;
        this.m_data = "";
    }
    //===============================================
	static Instance() {
		if(this.m_instance == null) {
			this.m_instance = new GCommand();
		}
		return this.m_instance;
	}	
    //===============================================
    init() {

    }
    //===============================================
	serialize(_code = "command") {
		var lDom = new GCode();
		lDom.createDoc();
		lDom.addData(_code, "id", ""+this.m_id);
		lDom.addData(_code, "data", utf8_to_b64(this.m_data));
		lDom.addMap(_code, this.m_map);
		return lDom.toString();
	}
    //===============================================
	deserialize(_data, _code = "command") {
		var lDom = new GCode();
		lDom.loadXml(_data);
		this.m_id = +lDom.getItem(_code, "id");
		this.m_data = b64_to_utf8(lDom.getItem(_code, "data"));
        lDom.getMap(_code, this.m_map, this);
	}
    //===============================================
    readUi() {
        var lEditorEditionContent = document.getElementById("EditorEditionContent");
        this.m_data = lEditorEditionContent.innerHTML;
    }
    //===============================================
    writeUi() {
        var lEditorEditionContent = document.getElementById("EditorEditionContent");
        lEditorEditionContent.innerHTML = this.m_data;
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "selection") {
            this.onSelection(_obj, _data);
        }
        else if(_method == "back_color") {
            this.onBackColor(_obj, _data);
        }
        else if(_method == "store_page_file") {
            this.onStorePageFile(_obj, _data);
        }
        else if(_method == "load_page_file") {
            this.onLoadPageFile(_obj, _data);
        }
        else if(_method == "load_page_file_run") {
            this.onLoadPageFileRun(_obj, _data);
        }
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onSelection(_obj, _data) {
        document.execCommand(_data, false, null);
    }
    //===============================================
    onBackColor(_obj, _data) {
        document.execCommand(_data, false, "#ffaaaa");
    }
    //===============================================
    onStorePageFile(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("command", "store_page_file", lData, this.onStorePageFileCB);
        this.addLogs(lAjax.getLogs());
    }
    //===============================================
    onStorePageFileCB(_data) {

    }
    //===============================================
    onLoadPageFile(_obj, _data) {
        var lConfirm = new GConfirm();
        lConfirm.setCallback("edition_command", "load_page_file_run");
        lConfirm.showConfirm();
    }
    //===============================================
    onLoadPageFileRun(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("command", "load_page_file", lData, this.onLoadPageFileCB);        
        this.addLogs(lAjax.getLogs());
    }
    //===============================================
    onLoadPageFileCB(_data) {
        var lCommand = new GCommand();
        lCommand.deserialize(_data);
        lCommand.writeUi();
    }
    //===============================================
}
//===============================================
GCommand.Instance().init();
//===============================================
