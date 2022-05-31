//===============================================
class GMenu extends GObject {
    //===============================================
    constructor() {
		super();
    }
    //===============================================
    onModule(method) {
		if(method == "") {
			return false;
		}
    	//===============================================
		// method
    	//===============================================
		else if(method == "open_menu") {
			this.onOpenMenu();
		}
    	//===============================================
		// end
    	//===============================================
		else return false;
		return true;
	}
    //===============================================
    // menu
    //===============================================
    onOpenMenu() {
		var lHeaderMenu = document.getElementById("HeaderMenu");
		var lHeaderMenuBars = document.getElementById("HeaderMenuBars");
		var lBars = '<i class="fa fa-bars"></i>';
		if(lBars == lHeaderMenuBars.innerHTML.trim()) {
			lBars = '<i class="fa fa-close"></i>';
			lHeaderMenu.className += " RWD";
		}
		else {
			var lClassName = lHeaderMenu.className;
			lHeaderMenu.className = lClassName.replace(" RWD", "");
		}
		lHeaderMenuBars.innerHTML = lBars;	
    }
    //===============================================
}
//===============================================
