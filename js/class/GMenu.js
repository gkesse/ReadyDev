//===============================================
class GMenu {
    //===============================================
    constructor() {
		
    }
    //===============================================
    openMenu(obj) {
		var lHeaderMenu = document.getElementById("HeaderMenu");
		var lBars = '<i class="fa fa-bars"></i>';
		if(lBars == obj.innerHTML) {
			lBars = '<i class="fa fa-close"></i>';
			lHeaderMenu.className += " RWD";
		}
		else {
			var lClassName = lHeaderMenu.className;
			lHeaderMenu.className = lClassName.replace(" RWD", "");
		}
		obj.innerHTML = lBars;	
    }
    //===============================================
}
//===============================================
