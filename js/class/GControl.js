//===============================================
class GControl {
    //===============================================
    constructor() {
        this.m_selection = null;
        this.m_start = null;
        this.m_data = null;
        this.m_length = null;
        this.m_parent = null;
        this.m_title = "";
        this.m_titleID = "";
    }
    //===============================================
    selection() {
        this.m_selection = document.getSelection();
        this.m_start = this.m_selection.anchorNode;
        this.m_data = this.m_start.data;
    }
    //===============================================
    summary3() {
        if(!this.m_selection.toString()) {
            this.m_data = "";
            if(this.remove("GSummary3")) return;
        }
        if(this.data()) return;
        var lHtml = '';
        lHtml += '<div class="Content0 GSummary3">';
        lHtml += '<div class="Row26">';
        lHtml += 'Summary 3';
        lHtml += '</div>';
        lHtml += '</div>';
        document.execCommand("insertHTML", false, lHtml);                
    }
    //===============================================
    summary32() {
        var lNodeMap = document.getElementsByClassName("GSummary3");
        for(var i = 0; i < lNodeMap.length; i++) {
            var lNode = lNodeMap[i];
            var lNext = lNode.nextSibling;
            var lHtml = '';
            while(1) {
                if(!lNext) break;
                var lClassName = lNext.className;
                if(lClassName && lClassName.includes("GTitle2")) break;
                if(lClassName && lClassName.includes("GTitle3")) {
                    var lHref = lNext.getAttribute("id");
                    var lText = lNext.innerText;
                    lHtml += '<div class="Item4">';
                    lHtml += '<i class="Icon10 fa fa-book"></i>';
                    lHtml += '<a class="Link4" href="#' + lHref + '">';
                    lHtml += lText;
                    lHtml += '</a>';
                    lHtml += '</div>';
                }
                lNext = lNext.nextSibling;
            }
            lNode.innerHTML = lHtml;
        }
    }
    //===============================================
    data() {
        return this.m_data;
    }
    //===============================================
    remove(_tag) {
        var lParentNode = this.m_start.parentNode;
        while(1) {
            var lClassName = lParentNode.className;
            if(lClassName.includes("GEndEditor")) {
                break;
            }
            if(lClassName.includes(_tag)) {
                var lRange = document.createRange();
                lRange.selectNode(lParentNode);
                this.m_selection.addRange(lRange);
                document.execCommand("insertHTML", false, this.m_data);
                return true;
            }
            lParentNode = lParentNode.parentNode;
        }
        return false;
    }
    //===============================================
    title2() {
        var lTitle = "";
        var lParentNode = this.m_start.parentNode;
        while(1) {
            var lClassName = lParentNode.className;
            if(lClassName.includes("GEndEditor")) {
                break;
            }
            if(lClassName.includes("GTitle1")) {
                lTitle = lParentNode.firstChild.firstChild.firstChild.innerText;
                break;
            }
            lParentNode = lParentNode.parentNode;
        }
        var lString = new GString();
        var lTitleID = lTitle + '-' + this.m_data;
        this.m_title = lString.url(lTitle);
        this.m_titleID = lString.url(lTitleID);
        return true;
    }
    //===============================================
    title22() {
        var lRange = document.createRange();
        lRange.setStart(this.m_start, 0);
        lRange.setEnd(this.m_start, this.m_data.length);
        this.m_selection.addRange(lRange);
        var lHtml = '';
        lHtml += '<h2 class="Title7 GTitle2" id="' + this.m_titleID + '">';
        lHtml += '<a class="Link9" href="#' + this.m_title + '">';
        lHtml += this.m_data;
        lHtml += '</a>';
        lHtml += '</h2>';
        document.execCommand("insertHTML", false, lHtml);
    }
    //===============================================
    title3() {
        var lTitle1 = "";
        var lTitle2 = "";
        var lParentNode = this.m_start.parentNode;
        while(1) {
            var lClassName = lParentNode.className;
            if(lClassName.includes("GEndEditor")) {
                break;
            }
            if(lClassName.includes("GTitle1")) {
                lTitle1 = lParentNode.firstChild.firstChild.firstChild.innerText;
                break;
            }
            lParentNode = lParentNode.parentNode;
        }
        var lParentNode = this.m_start.previousSibling;
        while(1) {
            if(!lParentNode) return false;
            var lClassName = lParentNode.className;
            if(lClassName && lClassName.includes("GTitle2")) {
                lTitle2 = lParentNode.innerText;
                break;
            }
            lParentNode = lParentNode.previousSibling;
        }
        var lString = new GString();
        var lTitle = lTitle1 + '-' + lTitle2;
        var lTitleID = lTitle1 + '-' + lTitle2 + '-' + this.m_data;
        this.m_title = lString.url(lTitle);
        this.m_titleID = lString.url(lTitleID);
        return true;
    }
    //===============================================
    title32() {
        var lRange = document.createRange();
        lRange.setStart(this.m_start, 0);
        lRange.setEnd(this.m_start, this.m_data.length);
        this.m_selection.addRange(lRange);
        var lHtml = '';
        lHtml += '<h3 class="GTitle3" id="' + this.m_titleID + '">';
        lHtml += '<a class="Title8" href="#' + this.m_title + '">';
        lHtml += this.m_data;
        lHtml += '</a>';
        lHtml += '</h3>';
        document.execCommand("insertHTML", false, lHtml);
    }
    //===============================================
    title33() {
        var lNodeMap = document.getElementsByClassName("GTitle3");
        for(var i = 0; i < lNodeMap.length; i++) {
            var lNode = lNodeMap[i];
            this.m_start = lNode;
            this.m_data = lNode.innerText;
            this.title3();
            var lHtml = '';
            lHtml += '<a class="Title8" href="#' + this.m_title + '">';
            lHtml += this.m_data;
            lHtml += '</a>'
            lNode.setAttribute("id", this.m_titleID);
            lNode.innerHTML = lHtml;
        }
    }
    //===============================================
}
//===============================================
