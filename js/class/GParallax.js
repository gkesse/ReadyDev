//===============================================
class GParallax extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_title = "Ajouter un titre...";
        this.m_bgImg = "/data/img/defaults/binary.png";
        this.m_bgColor = "#803300";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GParallax();
        }
        return this.m_instance;
    }    
    //===============================================
    toParallax() {
        var lHtml = "";
        lHtml += sprintf("<div class='GParallax1 Parallax1'>\n");
        lHtml += sprintf("<div class='Parallax2'>\n");
        lHtml += sprintf("<div class='Parallax3'>\n");
        lHtml += sprintf("<a href='#' class='Parallax4'>%s</a>\n", this.m_title);
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("<div class='Parallax5'>\n");
        lHtml += sprintf("Ajouter un texte...\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        
        var lNode = this.createNode(lHtml);
        var lImg = lNode.firstElementChild;
        var lBody = lNode.firstElementChild.nextElementSibling;
        lImg.style.backgroundImage = sprintf("url('%s')", this.m_bgImg);
        lBody.style.backgroundColor = this.m_bgColor;
        lHtml = lNode.outerHTML;
        
        return lHtml;
    }
    //===============================================
}
//===============================================
