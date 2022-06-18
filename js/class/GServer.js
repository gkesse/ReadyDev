//===============================================
class GServer extends GObject {
    //===============================================
    constructor() {
		super();
		this.module = "";
		this.method = "";
    }
    //===============================================
	run(module, method, obj, data) {
		if(module == "") {
			this.onModuleNone();
			return false;
		}
		else if(method == "") {
			this.onMethodNone();
			return false;
		}
	    //===============================================
		// module
	    //===============================================
		else if(module == "test") {
			this.onTest(method, obj, data);
		}
		else if(module == "menu") {
			this.onMenu(method, obj, data);
		}
		else if(module == "user") {
			this.onUser(method, obj, data);
		}
		else if(module == "sitemap") {
			this.onSitemap(method, obj, data);
		}
		else if(module == "manager") {
			this.onManager(method, obj, data);
		}
		else if(module == "log") {
			this.onLog(method, obj, data);
		}
		else if(module == "page") {
			this.onPage(method, obj, data);
		}
		else if(module == "query") {
			this.onQuery(method, obj, data);
		}
	    //===============================================
		// end
	    //===============================================
		else {
			this.onModuleUnknown();
			return false;	
		}
	    //===============================================
		return true;
	}
    //===============================================
	onTest(method, obj, data) {
		var lTest = new GTest();
		lTest.onModule(method, obj, data)
	}
    //===============================================
	onMenu(method, obj, data) {
		var lMenu = new GMenu();
		lMenu.onModule(method, obj, data)
	}
    //===============================================
	onUser(method, obj, data) {
		var lUser = new GUser();
		lUser.onModule(method, obj, data)
	}
    //===============================================
	onSitemap(method, obj, data) {
		var lSitemap = new GSitemap();
		lSitemap.onModule(method, obj, data)
	}
    //===============================================
	onManager(method, obj, data) {
		var lManager = new GManager();
		lManager.onModule(method, obj, data)
	}
    //===============================================
	onLog(method, obj, data) {
		var lLog = new GLog();
		lLog.onModule(method, obj, data)
	}
    //===============================================
	onPage (method, obj, data) {
		var lPage = new GPage();
		lPage.onModule(method, obj, data)
	}
    //===============================================
	onQuery (method, obj, data) {
		var lQuery = new GQuery();
		lQuery.onModule(method, obj, data)
	}
    //===============================================
	showErrors() {
		var lLog = GLog.Instance();
		lLog.showErrors();
		lLog.showLogs();
	}
    //===============================================
}
//===============================================
