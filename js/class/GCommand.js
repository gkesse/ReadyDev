//===============================================
class GCommand extends GObject {
    //===============================================
	static m_instance = null;
    //===============================================
    constructor() {
        super();
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
}
//===============================================
GCommand.Instance().init();
//===============================================
