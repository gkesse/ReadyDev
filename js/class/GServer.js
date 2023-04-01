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
        else if(_module == "admin") {
            this.onAdmin(_method, _obj, _data);
        }
        else {
            this.addError("Le module est inconnu.");
        }
    }
    //===============================================
    onAdmin(_method, _obj, _data) {
        var lObj = new GAdmin();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
}
//===============================================
