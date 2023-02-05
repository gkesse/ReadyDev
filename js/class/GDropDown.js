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
            lDropDownLine.addEventListener("click", function(e) {
                this.parentNode.classList.toggle("DropDownShow");
            });
            lDropDownLine.addEventListener("mousedown", function(e) {
                e.preventDefault();
            });
        }
        
        var lDropDownButtons = document.getElementsByClassName("DropDownButton");
        for(var i = 0; i < lDropDownButtons.length; i++) {
            var lDropDownButton = lDropDownButtons[i];
            lDropDownButton.addEventListener("click", function(e) {
                this.nextElementSibling.classList.toggle("DropDownShow");
                var lDropDownSubs = document.getElementsByClassName("DropDownSub");
                for(var i = 0; i < lDropDownSubs.length; i++) {
                    var lDropDownSub = lDropDownSubs[i];
                    lDropDownSub.classList.remove("DropDownActive");
                    var lDropDownContainer = lDropDownSub.nextElementSibling;
                    lDropDownContainer.classList.remove("DropDownShow");
                }
            });
        }
        
        var lDropDownSubs = document.getElementsByClassName("DropDownSub");
        for(var i = 0; i < lDropDownSubs.length; i++) {
            var lDropDownSub = lDropDownSubs[i];
            
            lDropDownSub.addEventListener("click", function(e) {
                var lDropDownSubs = document.getElementsByClassName("DropDownSub");
                for(var i = 0; i < lDropDownSubs.length; i++) {
                    var lDropDownSub = lDropDownSubs[i];
                    if(lDropDownSub == this) continue;
                    lDropDownSub.classList.remove("DropDownActive");
                    var lDropDownContainer = lDropDownSub.nextElementSibling;
                    lDropDownContainer.classList.remove("DropDownShow");
                }
                lParentNode = this;
                while(1) {
                    var lParentNode = lParentNode.parentNode;
                    if(lParentNode.matches(".DropDownContent")) break;
                    var lDropDownContainer = lParentNode;
                    var lDropDownSub = lDropDownContainer.previousElementSibling;
                    lDropDownSub.classList.toggle("DropDownActive");
                    lDropDownContainer.classList.toggle("DropDownShow");
                }
                this.classList.toggle("DropDownActive");
                var lDropDownContainer = this.nextElementSibling;
                lDropDownContainer.classList.toggle("DropDownShow");
            });

            lDropDownSub.addEventListener("mousedown", function(e) {
                e.preventDefault();
            });
        }
        
        document.addEventListener("click", function(e) {
            var lHideOk = !e.target.matches(".DropDownButton")
                       && !e.target.matches(".DropDownSub")
                       && !e.target.matches(".DropDownCaret");
            if (lHideOk) {
                var lDropDownContents = document.getElementsByClassName("DropDownContent");
                for(var i = 0; i < lDropDownContents.length; i++) {
                    var lDropDownContent = lDropDownContents[i];
                    lDropDownContent.classList.remove("DropDownShow");
                }
                var lDropDownSubs = document.getElementsByClassName("DropDownSub");
                for(var i = 0; i < lDropDownSubs.length; i++) {
                    var lDropDownSub = lDropDownSubs[i];
                    lDropDownSub.classList.remove("DropDownActive");
                    var lDropDownContainer = lDropDownSub.nextElementSibling;
                    lDropDownContainer.classList.remove("DropDownShow");
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
        var lDropDownContent = _obj.nextElementSibling;
        lDropDownContent.classList.toggle("DropDownShow");
    }
    //===============================================
}
//===============================================
GDropDown.Instance().init();
//===============================================
