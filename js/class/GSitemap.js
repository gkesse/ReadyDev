//===============================================
class GSitemap extends GObject {
    //===============================================
    constructor() {
		super();
		this.urlCount = 0;
		this.urlMax = 0;
		this.urlList = "";
		this.sitemapCount = 0;
		this.sitemapsXml = "";
		this.sitemapXml = "";
		this.msg = "";
    }
    //===============================================
	deserialize(data, code = "sitemap") {
		var lData = new GCode();
		lData.loadXml(data);
		this.urlCount = lData.getItem(code, "url_count");
		this.urlMax = lData.getItem(code, "url_max");
		this.urlList = lData.getItem(code, "url_list", true);
		this.sitemapCount = lData.getItem(code, "sitemap_count");
		this.sitemapsXml = lData.getItem(code, "sitemaps_xml", true);
		this.sitemapXml = lData.getItem(code, "sitemap_xml", true);
		this.msg = lData.getItem(code, "msg");
	}
    //===============================================
    onModule(method, obj, data) {
		if(method == "") {
			return false;
		}
    	//===============================================
		// method
    	//===============================================
		else if(method == "get_enum") {
			this.onGetEnum();
		}
		else if(method == "clear_enum") {
			this.onClearEnum();
		}
		else if(method == "get_list") {
			this.onGetList();
		}
		else if(method == "clear_list") {
			this.onClearList();
		}
		else if(method == "get_generate") {
			this.onGetGenerate();
		}
		else if(method == "clear_generate") {
			this.onClearGenerate();
		}
		else if(method == "get_visualize") {
			this.onGetVisualize();
		}
		else if(method == "clear_visualize") {
			this.onClearVisualize();
		}
		else if(method == "open_header") {
			this.onOpenHeader(obj, data);
		}
		else if(method == "open_sitemap") {
			this.onOpenSitemap(obj, data);
		}
    	//===============================================
    	// end
    	//===============================================
		else return false;
		return true;
	}
    //===============================================
    init() {
        var lTabCtn = document.getElementsByClassName("SitemapTab");
        var lObj = lTabCtn[0];
        this.openSitemapTab(lObj, "SitemapTab0");
        lTabCtn = document.getElementsByClassName("SitemapFileTab");
        lObj = lTabCtn[0];
        this.openSitemapFileTab(lObj, "SitemapFileTab0");
    }
    //===============================================
    openSitemapTab(obj, name) {
        var lTab = document.getElementsByClassName("SitemapTab");
        for(var i = 0; i < lTab.length; i++) {
            var lTabId = lTab[i];
            lTabId.className = lTabId.className.replace(" Active", "");
        }
        obj.className += " Active";
        var lTabCtn = document.getElementsByClassName("SitemapTabCtn");
        for(var i = 0; i < lTabCtn.length; i++) {
            var lTabCtnId = lTabCtn[i];
            lTabCtnId.style.display = "none";
        }
        var lTabId = document.getElementById(name);
        lTabId.style.display = "block";
    }
    //===============================================
    openSitemapFileTab(obj, name) {
        var lTab = document.getElementsByClassName("SitemapFileTab");
        for(var i = 0; i < lTab.length; i++) {
            var lTabId = lTab[i];
            lTabId.className = lTabId.className.replace(" Active", "");
        }
        obj.className += " Active";
        var lTabCtn = document.getElementsByClassName("SitemapFileTabCtn");
        for(var i = 0; i < lTabCtn.length; i++) {
            var lTabCtnId = lTabCtn[i];
            lTabCtnId.style.display = "none";
        }
        var lTabId = document.getElementById(name);
        lTabId.style.display = "block";
    }
    //===============================================
    onGetEnum() {
		var lAjax = new GAjax();
		lAjax.call("sitemap", "get_enum", "", this.onGetEnumCB);		
    }
    //===============================================
    onGetList() {
		var lAjax = new GAjax();
		lAjax.call("sitemap", "get_list", "", this.onGetListCB);		
    }
    //===============================================
    onGetGenerate() {
		var lAjax = new GAjax();
		lAjax.call("sitemap", "get_generate", "", this.onGetGenerateCB);		
    }
    //===============================================
    onGetVisualize() {
		var lAjax = new GAjax();
		lAjax.call("sitemap", "get_visualize", "", this.onGetVisualizeCB);		
    }
    //===============================================
    onGetEnumCB(data) {
	    var lUrlSite = document.getElementById("SitemapUrlSite");
        var lUrlMax = document.getElementById("SitemapUrlMax");
        var lSitemapTotal = document.getElementById("SitemapTotal");
		var lSitemap = new GSitemap();
		lSitemap.deserialize(data);
        lUrlSite.innerHTML = String(lSitemap.urlCount);
        lUrlMax.innerHTML = String(lSitemap.urlMax);
        lSitemapTotal.innerHTML = String(lSitemap.sitemapCount);
    }
    //===============================================
    onGetListCB(data) {
        var lListUrl = document.getElementById("SitemapListUrl");
		var lSitemap = new GSitemap();
		lSitemap.deserialize(data);
        lListUrl.innerHTML = lSitemap.urlList;
    }
    //===============================================
    onGetGenerateCB(data) {
        var lGenerateUrl = document.getElementById("SitemapGenerateUrl");
		var lSitemap = new GSitemap();
		lSitemap.deserialize(data);
        lGenerateUrl.innerHTML = lSitemap.msg;
    }
    //===============================================
    onGetVisualizeCB(data) {
        var lVisualizeSite = document.getElementById("SitemapVisualizeSite");
        var lVisualizeUrl = document.getElementById("SitemapVisualizeUrl");
		var lSitemap = new GSitemap();
		lSitemap.deserialize(data);
        lVisualizeSite.innerHTML = lSitemap.sitemapsXml;
        lVisualizeUrl.innerHTML = lSitemap.sitemapXml;
        //PR.prettyPrint();
    }
    //===============================================
    onClearEnum() {
        var lUrlSite = document.getElementById("SitemapUrlSite");
        var lUrlMax = document.getElementById("SitemapUrlMax");
        var lSitemapTotal = document.getElementById("SitemapTotal");
        lUrlSite.innerHTML = "";
        lUrlMax.innerHTML = "";
        lSitemapTotal.innerHTML = "";
    }
    //===============================================
    onClearList() {
        var lListUrl = document.getElementById("SitemapListUrl");
        lListUrl.innerHTML = "";
    }
    //===============================================
    onClearGenerate() {
        var lGenerateUrl = document.getElementById("SitemapGenerateUrl");
        lGenerateUrl.innerHTML = "";
    }
    //===============================================
    onClearVisualize() {
        var lVisualizeSite = document.getElementById("SitemapVisualizeSite");
        var lVisualizeUrl = document.getElementById("SitemapVisualizeUrl");
        lVisualizeSite.innerHTML = "";
        lVisualizeUrl.innerHTML = "";
    }
    //===============================================
    onOpenHeader(obj, data) {
		var lSitemap = new GSitemap();
		lSitemap.openSitemapTab(obj, data);
	}
    //===============================================
    onOpenSitemap(obj, data) {
		var lSitemap = new GSitemap();
		lSitemap.openSitemapFileTab(obj, data);
	}
    //===============================================
}
//===============================================
var lSitemap = new GSitemap();
lSitemap.init();
//===============================================
