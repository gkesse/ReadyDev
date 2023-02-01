//===============================================
class GDropDown extends GObject {
    //===============================================
	static m_instance = null;
    //===============================================
    constructor() {
        super();
    }
    //===============================================
	static Instance() {
		if(this.m_instance == null) {
			this.m_instance = new GDropDown();
		}
		return this.m_instance;
	}	
    //===============================================
    init() {
        var lDropDownLines = document.getElementsByClassName("DropDownLine");
        for(var i = 0; i < lDropDownLines.length; i++) {
            var lDropDownLine = lDropDownLines[i];
            lDropDownLine.addEventListener("click", function(e){
                e.stopPropagation();
                this.parentNode.classList.toggle("DropDownShow");
            });
        }
        
        document.addEventListener("click", function(e){
            e.stopPropagation();
            if (!e.target.matches('.DropDownButton')) {
                var lDropDownContents = document.getElementsByClassName("DropDownContent");
                for(var i = 0; i < lDropDownContents.length; i++) {
                    var lDropDownContent = lDropDownContents[i];
                    lDropDownContent.classList.remove("DropDownShow");
                }
            }
        });
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "toggle_menu") {
            this.onToggleMenu(_obj, _data);
        }
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onToggleMenu(_obj, _data) {
        var lDropDownContent = _obj.nextSibling.nextSibling;
        lDropDownContent.classList.toggle("DropDownShow");
    }
    //===============================================
}
//===============================================
GDropDown.Instance().init();
//===============================================
