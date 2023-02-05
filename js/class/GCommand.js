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
		lDom.addData(_code, "data", btoa(this.m_data));
		lDom.addMap(_code, this.m_map);
		return lDom.toString();
	}
    //===============================================
	deserialize(_data, _code = "command") {
		var lDom = new GCode();
		lDom.loadXml(_data);
		this.m_id = +lDom.getItem(_code, "id");
		this.m_data = atob(lDom.getItem(_code, "data"));
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
        else if(_method == "store_page") {
            this.onStorePage(_obj, _data);
        }
        else if(_method == "load_page") {
            this.onLoadPage(_obj, _data);
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
    onStorePage(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("command", "store_page", lData, this.onStorePageCB);        
    }
    //===============================================
    onStorePageCB(_data) {

    }
    //===============================================
    onLoadPage(_obj, _data) {
        this.addData("onLoadPage");
    }
    //===============================================
}
//===============================================
GCommand.Instance().init();
//===============================================
