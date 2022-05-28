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
		else if(module == "sitemap") {
			this.onSitemap(method, obj, data);
		}
		else if(module == "header") {
			this.onHeader(method);
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
	onHeader(method) {
		var lHeader = new GHeader();
		lHeader.onModule(method)
	}
    //===============================================
	onSitemap(method, obj, data) {
		var lSitemap = new GSitemap();
		lSitemap.onModule(method, obj, data)
	}
    //===============================================
}
//===============================================
