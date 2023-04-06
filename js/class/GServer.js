//===============================================
class GServer extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    run(_module, _method, _obj, _data) {
        if(_module == "") {
            this.addError("Le module est obligatoire.");
        }
        else if(_module == "logs") {
            this.onLogs(_method, _obj, _data);
        }
        else if(_module == "admin") {
            this.onAdmin(_method, _obj, _data);
        }
        else if(_module == "editor") {
            this.onEditor(_method, _obj, _data);
        }
        else if(_module == "page") {
            this.onPage(_method, _obj, _data);
        }
        else if(_module == "template") {
            this.onTemplate(_method, _obj, _data);
        }
        else if(_module == "keyevent") {
            this.onKeyevent(_method, _obj, _data);
        }
        else {
            this.addError("Le module est inconnu.");
        }
    }
    //===============================================
    onLogs(_method, _obj, _data) {
        var lObj = new GLog();
        lObj.run(_method, _obj, _data)
    }
    //===============================================
    onAdmin(_method, _obj, _data) {
        var lObj = new GAdmin();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onEditor(_method, _obj, _data) {
        var lObj = new GEditor();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onPage(_method, _obj, _data) {
        var lObj = new GPage();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onTemplate(_method, _obj, _data) {
        var lObj = new GTemplate();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onKeyevent(_method, _obj, _data) {
        var lObj = new GKeyEvent();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
}
//===============================================
