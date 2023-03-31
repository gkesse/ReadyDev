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
        else if(_module == "menu") {
            this.onMenu(_method, _obj, _data);
        }
        else {
            this.addError("Le module est inconnu.");
        }
    }
    //===============================================
    onTest(_method, _obj, _data) {
        var lObj = new GTest();
        lObj.loadData();
        lObj.run()
        this.addLogs(lObj.getLogs());
    }
    //===============================================
}
//===============================================
