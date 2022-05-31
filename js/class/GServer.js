//===============================================
class GServer extends GObject {
    //===============================================
    constructor() {
		super();
		this.module = "";
		this.method = "";
    }
    //===============================================
	run(module, method, obj = null, data = "") {
		if(module == "") {
			return false;
		}
		else if(method == "") {
			return false;
		}
	    //===============================================
		// module
	    //===============================================
		else if(module == "test") {
			this.onTest(method);
		}
		else if(module == "menu") {
			this.onMenu(method);
		}
		else if(module == "user") {
			this.onUser(method);
		}
		else if(module == "sitemap") {
			this.onSitemap(method, obj, data);
		}
	    //===============================================
		// end
	    //===============================================
		else return false;
		return true;
	}
    //===============================================
	onTest(method) {
		var lTest = new GTest();
		lTest.onModule(method)
	}
    //===============================================
	onMenu(method) {
		var lMenu = new GMenu();
		lMenu.onModule(method)
	}
    //===============================================
	onUser(method) {
		var lUser = new GUser();
		lUser.onModule(method)
	}
    //===============================================
	onSitemap(method, obj, data) {
		var lSitemap = new GSitemap();
		lSitemap.onModule(method, obj, data)
	}
    //===============================================
}
//===============================================
