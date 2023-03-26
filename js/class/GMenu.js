//===============================================
class GMenu extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "open_menu") {
            this.onOpenMenu(_obj, _data);
        }
        else {
            this.addError("La méthode est inconnue.");
        }
        return true;
    }
    //===============================================
    onOpenMenu(_obj, _data) {
        var lHeaderMenu = document.getElementById("HeaderMenu");
        var lHeaderMenuBars = document.getElementById("HeaderMenuBars");
        var lBars = '<i class="fa fa-bars"></i>';
        if(!lHeaderMenu.classList.contains("RWD")) {
            lBars = '<i class="fa fa-close"></i>';
        }
        lHeaderMenu.classList.toggle("RWD");
        lHeaderMenuBars.innerHTML = lBars;    
    }
    //===============================================
}
//===============================================
