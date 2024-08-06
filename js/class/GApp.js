//===============================================
class GApp extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GApp();
        }
        return this.m_instance;
    }
    //===============================================
    clone() {
        return new GApp();
    }
    //===============================================
    init() {

    }
    //===============================================
    serialize(_code = "app") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "app") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        //===============================================
        else if(_method == "open_menu_bars") {
            this.onOpenMenuBars(_obj, _data);
        }
        //===============================================
        else if(_method == "open_menu_group") {
            this.onOpenMenuGroup(_obj, _data);
        }
        //===============================================
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onOpenMenuBars(_obj, _data) {
        var lHeaderMenu = document.getElementById("HeaderMenu");
        var lBars = '<i class="fa fa-bars"></i>';

        if(lBars == _obj.innerHTML) {
            lBars = '<i class="fa fa-close"></i>';
            lHeaderMenu.classList.add("RWD");

            var lMenus = document.getElementsByClassName("Menu7");

            for(var i = 0; i < lMenus.length; i++) {
                var lMenu = lMenus[i];
                var lLine = lMenu.previousElementSibling;
                if(lLine == _obj) continue;
                lMenu.classList.remove("Show");
            }
        }
        else {
            lHeaderMenu.classList.remove("RWD");
        }

        _obj.innerHTML = lBars;
    }
    //===============================================
    onOpenMenuGroup(_obj, _data) {
        if(this.toWidth() <= this.toWidthRWD()) {
            this.m_dataLogs.addError("Le lien ne doit pas être suivi.");

            var lHref = _obj.getAttribute("href");
            var lTitle = _obj.firstElementChild.innerHTML;

            var lMenus = document.getElementsByClassName("Menu7");

            for(var i = 0; i < lMenus.length; i++) {
                var lMenu = lMenus[i];
                var lLine = lMenu.previousElementSibling;
                if(lLine == _obj) continue;
                lMenu.classList.remove("Show");
            }

            var lMenus = document.getElementsByClassName("Menu11");

            for(var i = 0; i < lMenus.length; i++) {
                var lMenu = lMenus[i];
                lMenu.classList.remove("Show");
            }

            var lMenu = _obj.nextElementSibling;
            lMenu.classList.toggle("Show");
        }
    }
    //===============================================
}
//===============================================
GApp.Instance().init();
//===============================================
