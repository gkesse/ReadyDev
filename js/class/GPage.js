//===============================================
class GPage extends GObject {
    //===============================================
    constructor() {
		super();
	}
    //===============================================
    onModule(method, obj, data) {
		if(method == "") {
			return false;
		}
    	//===============================================
		// connection
    	//===============================================
		else if(method == "close_notfound") {
			this.onCloseNotFound();
		}
    	//===============================================
		// end
    	//===============================================
		else return false;
		return true;
	}
    //===============================================
    onCloseNotFound() {
	    var lNotFound = document.getElementById("notfound_box");
	    lNotFound.style.display = "none"; 
    }
    //===============================================
}
//===============================================
