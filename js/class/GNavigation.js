//===============================================
class GNavigation extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_siteName = "ReadyDev";
        this.m_logoPath = "/data/img/defaults/readydev.png";
        this.m_logoName = "readydev.png";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GNavigation();
        }
        return this.m_instance;
    }    
    //===============================================
    init() {
        var lNodes = document.getElementsByClassName("GNavigation1");
        for(var i = 0; i < lNodes.length; i++) {
            var lNode = lNodes[i];
            var lMenus = lNode.getElementsByClassName("Navigation3");
            for(var j = 0; j < lMenus.length; j++) {
                var lMenu = lMenus[j];
                lMenu.addEventListener("click", function(e) {
                    var lMenus = this.parentNode.getElementsByClassName("Navigation3");
                    for(var i = 0; i < lMenus.length; i++) {
                        var lMenu = lMenus[i];
                        lMenu.classList.remove("Active");
                    }
                    this.classList.add("Active");
                });
            }
        }
    }
    //===============================================
    toNavigation() {
        var lHtml = "";
        lHtml += sprintf("<div class='GNavigation1 Navigation1'>\n");
        lHtml += sprintf("<div class='Navigation2'>\n");
        lHtml += sprintf("<img class='Navigation4' src='%s' alt='%s'/>\n", this.m_logoPath, this.m_logoName);
        lHtml += sprintf("<span class='Navigation5'>%s</span>\n", this.m_siteName);
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("<div class='Navigation3'>A</div>\n");
        lHtml += sprintf("<div class='Navigation3'>B</div>\n");
        lHtml += sprintf("<div class='Navigation3'>C</div>\n");
        lHtml += sprintf("<div class='Navigation3'>D</div>\n");
        lHtml += sprintf("<div class='Navigation3'>E</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
}
//===============================================
GNavigation.Instance().init();
//===============================================
