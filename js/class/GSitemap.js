//===============================================
var GSitemap = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                var lTabCtn = document.getElementsByClassName("SitemapTab");
				var lObj = lTabCtn[0];
				this.openSitemapTab(lObj, "SitemapTab0");
                lTabCtn = document.getElementsByClassName("SitemapFileTab");
				lObj = lTabCtn[0];
				this.openSitemapFileTab(lObj, "SitemapFileTab0");
            },
            //===============================================
            openSitemapTab: function(obj, name) {
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
            },
            //===============================================
            openSitemapFileTab: function(obj, name) {
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
            },
            //===============================================
            enumerateUrl: function() {
				var lUrlSite = document.getElementById("SitemapUrlSite");
				var lUrlMax = document.getElementById("SitemapUrlMax");
				var lSitemapTotal = document.getElementById("SitemapTotal");
				var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
						var lRes = this.responseText;
						var lData = JSON.parse(lRes);
						lUrlSite.innerHTML = String(lData["url_number"]);
						lUrlMax.innerHTML = String(50000);
						lSitemapTotal.innerHTML = String(lData["sitemap_number"]);
                    }
                }
                lXmlhttp.open("POST", "/php/req/sitemap.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
				"req=" + "ENUMERATE"
				);
            },
            //===============================================
            enumerateClear: function() {
				var lUrlSite = document.getElementById("SitemapUrlSite");
				var lUrlMax = document.getElementById("SitemapUrlMax");
				var lSitemapTotal = document.getElementById("SitemapTotal");
				lUrlSite.innerHTML = "";
				lUrlMax.innerHTML = "";
				lSitemapTotal.innerHTML = "";
            },
            //===============================================
            listUrl: function() {
				var lListUrl = document.getElementById("SitemapListUrl");
				var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
						var lData = this.responseText;
						lListUrl.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/sitemap.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
				"req=" + "LIST"
				);
            },
            //===============================================
            listClear: function() {
				var lListUrl = document.getElementById("SitemapListUrl");
				lListUrl.innerHTML = "";
            },
            //===============================================
            generateUrl: function() {
				var lGenerateUrl = document.getElementById("SitemapGenerateUrl");
				var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
						var lRes = this.responseText;
						lGenerateUrl.innerHTML = lRes;
                    }
                }
                lXmlhttp.open("POST", "/php/req/sitemap.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
				"req=" + "GENERATE"
				);
            },
            //===============================================
            generateClear: function() {
				var lGenerateUrl = document.getElementById("SitemapGenerateUrl");
				lGenerateUrl.innerHTML = "";
            },
            //===============================================
            visualizeUrl: function() {
				var lVisualizeSite = document.getElementById("SitemapVisualizeSite");
				var lVisualizeUrl = document.getElementById("SitemapVisualizeUrl");
				var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
						var lData = this.responseText;
						var lDataArr = JSON.parse(lData);
						lVisualizeSite.innerHTML = lDataArr["sitemaps"];
						lVisualizeUrl.innerHTML = lDataArr["sitemap"];
						PR.prettyPrint();
                    }
                }
                lXmlhttp.open("POST", "/php/req/sitemap.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
				"req=" + "VISUALIZE"
				);
            },
            //===============================================
            visualizeClear: function() {
				var lVisualizeSite = document.getElementById("SitemapVisualizeSite");
				var lVisualizeUrl = document.getElementById("SitemapVisualizeUrl");
				lVisualizeSite.innerHTML = "";
				lVisualizeUrl.innerHTML = "";
            }
            //===============================================
        };
    }
    //===============================================
    return {
        Instance: function() {
            if(!m_instance) {
                m_instance = Container();
            }
            return m_instance;
        }
    };
    //===============================================
})();
//===============================================
GSitemap.Instance().init();
//===============================================
