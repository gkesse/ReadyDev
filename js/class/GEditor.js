//===============================================
class GEditor extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_node = null;
        this.m_range = null;
        this.m_copy = null;
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GEditor();
        }
        return this.m_instance;
    }
    //===============================================
    clone() {
        return new GEditor();
    }
    //===============================================
    setObj(_obj) {
        this.m_node = _obj.m_node;
        this.m_range = _obj.m_range;
    }
    //===============================================
    init() {
        if(this.isAdmin()) {
            this.openDefaultTab();
        }
    }
    //===============================================
    hasParent(_className) {
        this.m_node = this.toNode();
        while(1) {
            if(!this.m_node) return false;
            if(this.m_node.nodeType != Node.TEXT_NODE) {
                if(this.m_node.matches("." + _className)) return true;
                if(this.m_node.matches(".GEndEditor")) return false;
                if(this.m_node.matches(".HtmlPage")) return false;
            }
            this.m_node = this.m_node.parentNode;
        }
        return false;
    }
    //===============================================
    isEditor() {
        return this.hasParent("GEndEditor");
    }
    //===============================================
    isLine() {
        var lNode = this.toNode();
        if(!lNode) return false;
        var lLine = lNode.data;
        return (lLine);
    }
    //===============================================
    isData() {
        var lSelection = document.getSelection();
        var lData = lSelection.toString();
        return (lData);
    }
    //===============================================
    isFilter() {
        return true;
    }
    //===============================================
    isNode(_className) {
        if(!this.m_node) return false;
        if(!this.m_node.matches("." + _className)) return false;
        return true;
    }
    //===============================================
    countNode(_className) {
        var lNode = this.m_node.parentNode;
        var lNodes = lNode.getElementsByClassName(_className);
        return lNodes.length;
    }
    //===============================================
    toNode() {
        var lSelection = document.getSelection();
        var lNode = lSelection.anchorNode;
        return lNode;
    }
    //===============================================
    toNodeSiblings(_node, _className) {
        var lNodes = [];
        var lStart = _node;
        
        while(1) {
            var lPrevious = lStart.previousElementSibling;
            if(!lPrevious) break;
            if(!lPrevious.matches("." + _className)) break;
            lStart = lPrevious;
        }
        
        var lNode = lStart;
        
        while(1) {
            if(!lNode) break;
            if(!lNode.matches("." + _className)) break;
            lNodes.push(lNode);
            lNode = lNode.nextElementSibling;
        }
        
        return lNodes;
    }
    //===============================================
    toPreviousNode(_node, _className) {
        var lNode = _node;
        
        while(1) {
            if(!lNode) break;
            if(lNode.nodeType != Node.TEXT_NODE) {
                if(lNode.matches("." + _className)) break;
                if(lNode.matches(".GEndEditor")) return 0;
            }
            lNode = lNode.previousElementSibling;
        }
        
        return lNode;
    }
    //===============================================
    toNodeNexts(_node, _startClass, _endClass) {
        var lNodes = [];
        var lNode = _node;
        
        while(1) {
            if(!lNode) break;
            if(lNode.nodeType != Node.TEXT_NODE) {
                if(lNode.matches("." + _endClass)) break;
                if(lNode.matches("." + _startClass)) {
                    lNodes.push(lNode);
                }
            }
            lNode = lNode.nextElementSibling;
        }
        return lNodes;
    }
    //===============================================
    toLine() {
        var lSelection = document.getSelection();
        var lNode = lSelection.anchorNode;
        return lNode.data;
    }
    //===============================================
    toLines() {
        var lSelection = document.getSelection();
        return lSelection.toString();
    }
    //===============================================
    toData() {
        var lSelection = document.getSelection();
        var lData = lSelection.toString();
        return lData;
    }
    //===============================================
    toRange() {
        var lSelection = document.getSelection();
        var lRange = lSelection.getRangeAt(0);
        return lRange;
    }
    //===============================================
    toPasteImage() {
        var lHtml = "";
        lHtml += "<div class='GImg1 Img1'>";
        lHtml += "<img alt='image.png'/>";
        lHtml += "</div>";
        return lHtml;
    }
    //===============================================
    saveRange() {
        this.m_range = this.toRange();
    }
    //===============================================
    restoreRange() {
        if(this.m_range) {
            var lSelection = document.getSelection();
            lSelection.removeAllRanges();
            lSelection.addRange(this.m_range);
        }
    }
    //===============================================
    openDefaultTab() {
        var lEditorDefaultTab = document.getElementById("EditorDefaultTab");
        var lIndex = +lEditorDefaultTab.value;
        var lContentId = sprintf("EditorTab%s", lIndex);
        var lTab = document.getElementsByClassName("EditorTab")[lIndex];
        this.onOpenEditorTab(lTab, lContentId);
    }
    //===============================================
    copyNode() {
        var lObj = GEditor.Instance();
        lObj.m_copy = this.m_node;
    }
    //===============================================
    restoreCopy() {
        var lObj = GEditor.Instance();
        this.m_node = lObj.m_copy;
        if(!this.m_node) return false;
        return true;
    }
    //===============================================
    removeNode() {
        this.m_node.remove();
    }
    //===============================================
    selectLine() {
        var lSelection = document.getSelection();
        var lNode = lSelection.anchorNode;
        if(!lNode.data) return false;
        var lLength = lNode.data.length;
        var lRange = document.createRange();
        lRange.setStart(lNode, 0);
        lRange.setEnd(lNode, lLength);
        lSelection.removeAllRanges();
        lSelection.addRange(lRange);
        return true;
    }
    //===============================================
    selectNode(_node) {
        var lSelection = document.getSelection();
        var lRange = document.createRange();
        lRange.selectNode(_node);
        lSelection.removeAllRanges();
        lSelection.addRange(lRange);
        return true;
    }
    //===============================================
    toParallax() {
        var lBgImg = "/data/img/defaults/binary.png";
        var lBgColor = "#803300";
        
        var lHtml = "";
        lHtml += sprintf("<div class='GParallax1 Parallax1'>\n");
        lHtml += sprintf("<div class='Parallax2'>\n");
        lHtml += sprintf("<div class='Parallax3'>\n");
        lHtml += sprintf("<a href='#' class='Parallax4'>Ajouter un titre...</a>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("<div class='Parallax5'>Ajouter un texte...</div>\n");
        lHtml += sprintf("</div>\n");
                
        var lNode = this.createNode(lHtml);
        var lImgId = lNode.firstElementChild;
        var lBodyId = lNode.firstElementChild.nextElementSibling;
        lImgId.style.backgroundImage = sprintf("url('%s')", lBgImg);
        lBodyId.style.backgroundColor = lBgColor;
        lHtml = lNode.outerHTML;

        return lHtml;
    }
    //===============================================
    toLink1() {
        var lHtml = "";
        lHtml += sprintf("<div class='GLink1 Link1'>\n");
        lHtml += sprintf("<i class='Link2 fa fa-book'></i>\n");
        lHtml += sprintf("<a class='Link3' href='#'>Ajouter un lien...</a>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toLink2(_text, _href) {
        var lHtml = "";
        lHtml += sprintf("<a class='GLink2 Link4' style='");
        lHtml += sprintf(" color: lime;");
        lHtml += sprintf("' href='%s'>%s</a>\n", _href, _text);
        return lHtml;
    }
    //===============================================
    toLink3(_text, _href) {
        var lHtml = "";
        lHtml += sprintf("<a class='GLink3 Link4' style='");
        lHtml += sprintf(" color: lime;");
        lHtml += sprintf("' href='%s' target='_blank'>%s</a>\n", _href, _text);
        return lHtml;
    }
    //===============================================
    toGraduation() {
        var lHtml = "";
        lHtml += sprintf("<div class='GGraduation1 Graduation1'>\n");
        lHtml += sprintf("<i class='Graduation2 fa fa-graduation-cap'></i>\n");
        lHtml += sprintf("<div class='Graduation3'>%s</div>\n", this.toGraduationText());
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toGraduationText() {
        var lHtml = "";
        lHtml += sprintf("<b>2006 - 2009</b><br/>\n");
        lHtml += sprintf("DUT Electronique Industrielle,<br/>\n");
        lHtml += sprintf("Faculté des Sciences de Bizerte, Tunisie.<br/>\n");
        return lHtml;
    }
    //===============================================
    toBullet(_data) {
        var lHtml = "";
        lHtml += sprintf("<div class='GBullet1 Bullet1'>\n");
        lHtml += sprintf("<i class='Bullet2 fa fa-check-square-o'></i>\n");
        lHtml += sprintf("<div class='Bullet3'>%s</div>\n", _data);
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toText3Group() {
        var lHtml = "";
        lHtml += sprintf("<div class='GText3 Text4'>\n");
        lHtml += this.toText3Simple();
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toText3Simple() {
        var lHtml = "";
        lHtml += sprintf("<a href='#'>\n");
        lHtml += sprintf("<div class='GText4 Text5'>\n");
        lHtml += sprintf("<i class='Text6 fa fa-file-pdf-o'></i>\n");
        lHtml += sprintf("<div class='Text7'>CV<br>Simplifié</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</a>\n");
        return lHtml;
    }
    //===============================================
    toTextImageLeft() {
        var lHtml = "";
        lHtml += sprintf("<div class='GText1 Text1'>\n");
        lHtml += sprintf("<img class='Text2' src='/data/img/defaults/img_avatar.png' alt='image.png'/>\n");
        lHtml += sprintf("<div class='Text3'>Ajouter un texte...</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toSection() {
        var lHtml = "";
        lHtml += sprintf("<div class='GSection1 Section1'>\n");
        lHtml += sprintf("<div class='Section2'>\n");
        lHtml += sprintf("<div class='Section3'>\n");
        lHtml += sprintf("<h1 class='Section4'>\n");
        lHtml += sprintf("<a class='Section5' href='#'>Ajouter un titre...</a>\n");
        lHtml += sprintf("</h1>\n");
        lHtml += sprintf("<div class='Section6'><br>À suivre...<br><br></div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toSummary1() {
        var lHtml = "";
        lHtml += sprintf("<div class='GSummary1'>\n");
        lHtml += sprintf("<div class='GSummary11 Summary1'>\n");
        lHtml += sprintf("<i class='Summary2 fa fa-book'></i>\n");
        lHtml += sprintf("<a class='Summary3' href='#'>Modifier le titre principal...</a>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toSummary2() {
        var lHtml = "";
        lHtml += sprintf("<div class='GSummary2'>\n");
        lHtml += sprintf("<div class='GSummary21 Summary4'>\n");
        lHtml += sprintf("<i class='Summary5 fa fa-book'></i>\n");
        lHtml += sprintf("<a class='Summary6' href='#'>Modifier le titre principal...</a>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toSummary3() {
        var lHref = "";
        var lIcon = "fa-book";
        var lText = "Modifier le titre principal...";
        
        var lHtml = "";
        lHtml += sprintf("<div class='GSummary3'>\n");
        lHtml += this.toSummary31(lHref, lIcon, lText);
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toSummary31(_href, _icon, _text) {
        var lHtml = "";
        lHtml += sprintf("<div class='Summary7'>\n");
        lHtml += sprintf("<i class='Summary8 fa %s'></i>\n", _icon);
        lHtml += sprintf("<a class='Summary9' href='#%s'>%s</a>\n", _href, _text);
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toTitle1(_id, _href, _text) {
        var lHtml = "";
        lHtml += sprintf("<h2 class='GTitle1 Title1'>\n");
        if(_id == "") {
            lHtml += sprintf("<a class='Title2' href='#%s'>%s</a>\n", _href, _text);
        }
        else {
            lHtml += sprintf("<a class='Title2' id='%s' href='#%s'>%s</a>\n", _id, _href, _text);
        }
        lHtml += sprintf("</h2>\n");
        return lHtml;
    }
    //===============================================
    toTitle2(_id, _href, _text) {
        var lHtml = "";
        lHtml += sprintf("<h3 class='GTitle2 Title3'>\n");
        if(_id == "") {
            lHtml += sprintf("<a class='Title4' href='#%s'>%s</a>\n", _href, _text);
        }
        else {
            lHtml += sprintf("<a class='Title4' id='%s' href='#%s'>%s</a>\n", _id, _href, _text);
        }
        lHtml += sprintf("</h3>\n");
        return lHtml;
    }
    //===============================================
    toSkill() {
        var lHtml = "";
        lHtml += sprintf("<div class='GSkill1 Skill1'>\n");
        lHtml += sprintf("<i class='Skill2 fa fa-building-o'></i>\n");
        lHtml += sprintf("<div class='Skill3'>1/7</div>\n");
        lHtml += sprintf("<div class='Skill4'>Ajouter un texte...</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toCode1() {
        var lHtml = "";
        lHtml += sprintf("<pre class='GCode1 Code1 AceCode'");
        lHtml += sprintf(" data-mode='c_cpp'");
        lHtml += sprintf(" data-theme='gruvbox'");
        lHtml += sprintf(" data-bg-color='transparent'");
        lHtml += sprintf(">Ajouter un code...</pre>\n");
        return lHtml;
    }
    //===============================================
    toAccess1() {
        var lHtml = "";
        lHtml += sprintf("<div class='GAccess1 Access1'>\n");
        lHtml += this.toAccess2();
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toAccess2() {
        var lHtml = "";
        lHtml += sprintf("<a class='GAccess2 Access2' href='/home'>Accueil</a>\n");
        return lHtml;
    }
    //===============================================
    toAccess3() {
        var lHtml = "";
        lHtml += sprintf("<i class='Access3 fa fa-chevron-right'></i>\n");
        return lHtml;
    }
    //===============================================
    toPdfFile(_path) {
        var lPath = sprintf("https://github.com/gkesse/ReadyDev/raw/2.0%s", _path);
        lPath = sprintf("https://docs.google.com/viewer?url=%s&embedded=true", lPath);
        return lPath;
    }
    //===============================================
    toPdf1() {
        var lPdf = "/data/file/cv/KESSE_Gerard_CV_Simplifie.pdf";
        var lFile = this.toPdfFile(lPdf);
        var lHtml = "";
        lHtml += sprintf("<div class='GPdf1 Pdf1' data-pdf='%s'>\n", lPdf);
        lHtml += sprintf("<iframe class='Pdf2' src='%s' frameborder='0'>\n", lFile);
        lHtml += sprintf("</iframe>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toTuto1() {
        var lHtml = "";
        lHtml += sprintf("<div class='GTuto1 Tuto1'>\n");
        lHtml += this.toTuto2();
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toTuto2() {
        var lHtml = "";
        lHtml += sprintf("<a class='GTuto2 Tuto2' href='#'>\n");
        lHtml += sprintf("<div class='Tuto3'><i class='Tuto6 fa fa-book'></i></div>\n");
        lHtml += sprintf("<div class='Tuto4'><div class='Tuto7'>C++</div></div>\n");
        lHtml += sprintf("<div class='Tuto5'><div class='Tuto8'>Programmez en<br>C++</div></div>\n");
        lHtml += sprintf("</a>\n");
        return lHtml;
    }
    //===============================================
    toLineBar() {
        var lHtml = "";
        lHtml += sprintf("<div class='GLine1 Line1'>\n");
        lHtml += sprintf("<hr class='Line2'/>\n");
        lHtml += sprintf("<div class='Line3'>\n");
        lHtml += sprintf("<i class='Line4 fa fa-thumbs-up'></i>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toTextColor1(_data) {
        var lHtml = "";
        lHtml += sprintf("<span class='GText2' style='\n");
        lHtml += sprintf("color: #00ff00;\n");
        lHtml += sprintf("'>%s</span>\n", _data);
        return lHtml;
    }
    //===============================================
    toFormula1() {
        var lHtml = "";
        lHtml += sprintf("<div class='GFormula1 Formula1'>Ajouter une formule...</div>\n");
        return lHtml;
    }
    //===============================================
    toUpdateEditionPage() {
        this.toUpdateSummary1();
        this.toUpdateSummary2();
        this.toUpdateSummary3();
        this.toUpdateTitle1();
        this.toUpdateTitle2();
    }
    //===============================================
    toUpdateSummary1() {
        var lEditionN = document.getElementById("EditorEditionPage");
        var lSummaryNs = lEditionN.getElementsByClassName("GSummary1");
        if(!lSummaryNs.length) return;
        var lSummaryN = lSummaryNs[0];
        
        var lSectionNs = lEditionN.getElementsByClassName("GSection1");
        
        var lHtml = "";

        for(var i = 0; i < lSectionNs.length; i++) {
            var lSectionN = lSectionNs[i];
            var lSectionTN = lSectionN.firstElementChild.firstElementChild.firstElementChild.firstElementChild;

            var lTitle = lSectionTN.innerHTML;
            var lId = lSectionTN.id;

            lHtml += sprintf("<div class='GSummary11 Summary1'>\n");
            lHtml += sprintf("<i class='Summary2 fa fa-book'></i>\n");
            lHtml += sprintf("<a class='Summary3' href='#%s'>%s</a>\n", lId, lTitle);
            lHtml += sprintf("</div>\n");
        }        
        
        var lNode = lSummaryN;
        lNode.innerHTML = lHtml;
    }
    //===============================================
    toUpdateSummary2() {
        var lEditionN = document.getElementById("EditorEditionPage");
        var lSectionNs = lEditionN.getElementsByClassName("GSection1");
        var lIcon = "fa-book";

        for(var i = 0; i < lSectionNs.length; i++) {
            var lSectionN = lSectionNs[i];
            var lSummaryNs = lSectionN.getElementsByClassName("GSummary2");
            if(!lSummaryNs.length) continue;
            var lSummaryN = lSummaryNs[0];
            var lTitleNs = lSectionN.getElementsByClassName("GTitle1");
                        
            var lHtml = "";
            for(var j = 0; j < lTitleNs.length; j++) {
                var lTitleN = lTitleNs[j];
                lTitleN = lTitleN.firstElementChild;
                var lHref = lTitleN.id;
                var lText = lTitleN.innerHTML;
                
                lHtml += sprintf("<div class='GSummary21 Summary4'>\n");
                lHtml += sprintf("<i class='Summary5 fa fa-book'></i>\n");
                lHtml += sprintf("<a class='Summary6' href='#%s'>%s</a>\n", lHref, lText);
                lHtml += sprintf("</div>\n");
            }
            
            lSummaryN.innerHTML = lHtml;
        }
    }
    //===============================================
    toUpdateSummary3() {
        var lEditionN = document.getElementById("EditorEditionPage");
        var lSummary3Ns = lEditionN.getElementsByClassName("GSummary3");

        for(var i = 0; i < lSummary3Ns.length; i++) {
            var lSummary3N = lSummary3Ns[i];
            var lTitle2Ns = this.toNodeNexts(lSummary3N, "GTitle2", "GTitle1");
            
            var lHtml = "";
            for(var j = 0; j < lTitle2Ns.length; j++) {
                var lTitle2N = lTitle2Ns[j];
                var lTitle2AN = lTitle2N.firstElementChild;
                var lTitle2AI = lTitle2AN.id;
                var lTitle2AT = lTitle2AN.innerHTML;
                
                lHtml += sprintf("<div class='Summary7'>\n");
                lHtml += sprintf("<i class='Summary8 fa fa-book'></i>\n");
                lHtml += sprintf("<a class='Summary9' href='#%s'>%s</a>\n", lTitle2AI, lTitle2AT);
                lHtml += sprintf("</div>\n");
            }
            lSummary3N.innerHTML = lHtml;        
        }    
    }
    //===============================================
    toUpdateTitle1() {
        var lEditionN = document.getElementById("EditorEditionPage");
        var lSectionNs = lEditionN.getElementsByClassName("GSection1");
        var lIcon = "fa-book";

        for(var i = 0; i < lSectionNs.length; i++) {
            var lSectionN = lSectionNs[i];
            var lSectionTN = lSectionN.firstElementChild.firstElementChild.firstElementChild.firstElementChild;
            var lTitleNs = lSectionN.getElementsByClassName("GTitle1");
            var lSectionId = lSectionTN.id;
            var lHref = "#" + lSectionId;

            for(var j = 0; j < lTitleNs.length; j++) {
                var lTitleN = lTitleNs[j];
                lTitleN = lTitleN.firstElementChild;
                lTitleN.setAttribute("href", lHref);
            }
        }
    }
    //===============================================
    toUpdateTitle2() {
        var lEditionN = document.getElementById("EditorEditionPage");
        var lTitle2Ns = lEditionN.getElementsByClassName("GTitle2");
        
        for(var i = 0; i < lTitle2Ns.length; i++) {
            var lTitle2N = lTitle2Ns[i];
            var lTitle2AN = lTitle2N.firstElementChild;
            var lTitle2AT = lTitle2AN.innerHTML;
            
            var lTitle1N = this.toPreviousNode(lTitle2N, "GTitle1");
            if(!lTitle1N) continue;
            var lTitle1AN = lTitle1N.firstElementChild;
            var lTitle1AI = lTitle1AN.id;
            
            var lTitle2AH = sprintf("#%s", lTitle1AI);
            var lTitle2AI = sprintf("%s_%s", lTitle1AI, lTitle2AT.getNormalize());
            
            lTitle2AN.id = lTitle2AI;
            lTitle2AN.setAttribute("href", lTitle2AH);
        }
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        //===============================================
        // editeur
        //===============================================
        else if(_method == "open_editor_tab") {
            this.onOpenEditorTab(_obj, _data);
        }
        //===============================================
        // commande
        //===============================================
        else if(_method == "exec_command") {
            this.onExecCommand(_obj, _data);
        }
        //===============================================
        // texte/couleur/premier_plan
        //===============================================
        else if(_method == "add_text_color_1") {
            this.onAddTextColor1(_obj, _data);
        }
        else if(_method == "update_text_color_1") {
            this.onUpdateTextColor1(_obj, _data);
        }
        else if(_method == "update_text_color_1_form") {
            this.onUpdateTextColor1Form(_obj, _data);
        }
        else if(_method == "delete_text_color_1") {
            this.onDeleteTextColor1(_obj, _data);
        }
        //===============================================
        // texte/icone/horizontal/bas
        //===============================================
        else if(_method == "add_text_3") {
            this.onAddText3(_obj, _data);
        }
        else if(_method == "insert_text_3_left") {
            this.onInsertText3Left(_obj, _data);
        }
        else if(_method == "insert_text_3_right") {
            this.onInsertText3Right(_obj, _data);
        }
        else if(_method == "update_text_3") {
            this.onUpdateText3(_obj, _data);
        }
        else if(_method == "update_text_3_form") {
            this.onUpdateText3Form(_obj, _data);
        }
        else if(_method == "delete_text_3_simple") {
            this.onDeleteText3Simple(_obj, _data);
        }
        else if(_method == "delete_text_3_group") {
            this.onDeleteText3Group(_obj, _data);
        }
        //===============================================
        // texte/image/gauche
        //===============================================
        else if(_method == "add_text_image_left") {
            this.onAddTextImageLeft(_obj, _data);
        }
        else if(_method == "update_text_image_left") {
            this.onUpdateTextImageLeft(_obj, _data);
        }
        else if(_method == "update_text_image_left_form") {
            this.onUpdateTextImageLeftForm(_obj, _data);
        }
        else if(_method == "delete_text_image_left") {
            this.onDeleteTextImageLeft(_obj, _data);
        }
        //===============================================
        // texte/style/gras
        //===============================================
        else if(_method == "add_text_bold") {
            this.onAddTextBold(_obj, _data);
        }
        //===============================================
        // images
        //===============================================
        else if(_method == "delete_image_1") {
            this.onDeleteImage1(_obj, _data);
        }
        //===============================================
        // edition
        //===============================================
        else if(_method == "keydown_event_edition") {
            this.onKeydownEventEdition(_obj, _data);
        }
        else if(_method == "paste_event_edition") {
            this.onPasteEventEdition(_obj, _data);
        }
        else if(_method == "open_edition_tab") {
            this.onOpenEditionTab(_obj, _data);
        }
        else if(_method == "update_edition_page") {
            this.onUpdateEditionPage(_obj, _data);
        }
        //===============================================
        // code
        //===============================================
        else if(_method == "open_code_tab") {
            this.onOpenCodeTab(_obj, _data);
        }
        //===============================================
        // edition/fichier/pdf
        //===============================================
        else if(_method == "add_pdf_1") {
            this.onAddPdf1(_obj, _data);
        }
        else if(_method == "update_pdf_1") {
            this.onUpdatePdf1(_obj, _data);
        }
        else if(_method == "update_pdf_1_form") {
            this.onUpdatePdf1Form(_obj, _data);
        }
        else if(_method == "delete_pdf_1") {
            this.onDeletePdf1(_obj, _data);
        }
        //===============================================
        // edition/tutoriels
        //===============================================
        else if(_method == "add_tuto_1") {
            this.onAddTuto1(_obj, _data);
        }
        else if(_method == "insert_tuto_1_left") {
            this.onInsertTuto1Left(_obj, _data);
        }
        else if(_method == "insert_tuto_1_right") {
            this.onInsertTuto1Right(_obj, _data);
        }
        else if(_method == "update_tuto_1") {
            this.onUpdateTuto1(_obj, _data);
        }
        else if(_method == "update_tuto_1_form") {
            this.onUpdateTuto1Form(_obj, _data);
        }
        else if(_method == "delete_tuto_1_simple") {
            this.onDeleteTuto1Simple(_obj, _data);
        }
        else if(_method == "delete_tuto_1_group") {
            this.onDeleteTuto1Group(_obj, _data);
        }
        //===============================================
        // edition/formule
        //===============================================
        else if(_method == "add_formula_1") {
            this.onAddFormula1(_obj, _data);
        }
        else if(_method == "copy_formula_1") {
            this.onCopyFormula1(_obj, _data);
        }
        else if(_method == "paste_formula_1") {
            this.onPasteFormula1(_obj, _data);
        }
        else if(_method == "update_formula_1") {
            this.onUpdateFormula1(_obj, _data);
        }
        else if(_method == "update_formula_1_form") {
            this.onUpdateFormula1Form(_obj, _data);
        }
        else if(_method == "delete_formula_1") {
            this.onDeleteFormula1(_obj, _data);
        }
        //===============================================
        // edition/template/barre_acces_rapide
        //===============================================
        else if(_method == "add_access_1") {
            this.onAddAcess1(_obj, _data);
        }
        else if(_method == "insert_access_1_left") {
            this.onInsertAcess1Left(_obj, _data);
        }
        else if(_method == "insert_access_1_right") {
            this.onInsertAcess1Right(_obj, _data);
        }
        else if(_method == "copy_access_1") {
            this.onCopyAccess1(_obj, _data);
        }
        else if(_method == "paste_access_1") {
            this.onPasteAccess1(_obj, _data);
        }
        else if(_method == "update_access_1") {
            this.onUpdateAcess1(_obj, _data);
        }
        else if(_method == "update_access_1_form") {
            this.onUpdateAcess1Form(_obj, _data);
        }
        else if(_method == "delete_access_1_simple") {
            this.onDeleteAcess1Simple(_obj, _data);
        }
        else if(_method == "delete_access_1_group") {
            this.onDeleteAcess1Group(_obj, _data);
        }
        //===============================================
        // edition/template/code
        //===============================================
        else if(_method == "add_code_1") {
            this.onAddCode1(_obj, _data);
        }
        else if(_method == "copy_code_1") {
            this.onCopyCode1(_obj, _data);
        }
        else if(_method == "paste_code_1") {
            this.onPasteCode1(_obj, _data);
        }
        else if(_method == "update_code_1") {
            this.onUpdateCode1(_obj, _data);
        }
        else if(_method == "update_code_1_form") {
            this.onUpdateCode1Form(_obj, _data);
        }
        else if(_method == "delete_code_1") {
            this.onDeleteCode1(_obj, _data);
        }
        //===============================================
        // template/skill
        //===============================================
        else if(_method == "add_skill") {
            this.onAddSkill(_obj, _data);
        }
        else if(_method == "copy_skill") {
            this.onCopySkill(_obj, _data);
        }
        else if(_method == "paste_skill") {
            this.onPasteSkill(_obj, _data);
        }
        else if(_method == "update_skill") {
            this.onUpdateSkill(_obj, _data);
        }
        else if(_method == "update_skill_form") {
            this.onUpdateSkillForm(_obj, _data);
        }
        else if(_method == "delete_skill") {
            this.onDeleteSkill(_obj, _data);
        }
        //===============================================
        // template/graduation
        //===============================================
        else if(_method == "add_graduation") {
            this.onAddGraduation(_obj, _data);
        }
        else if(_method == "copy_graduation") {
            this.onCopyGraduation(_obj, _data);
        }
        else if(_method == "paste_graduation") {
            this.onPasteGraduation(_obj, _data);
        }
        else if(_method == "update_graduation") {
            this.onUpdateGraduation(_obj, _data);
        }
        else if(_method == "update_graduation_form") {
            this.onUpdateGraduationForm(_obj, _data);
        }
        else if(_method == "delete_graduation") {
            this.onDeleteGraduation(_obj, _data);
        }
        //===============================================
        // template/lien/simple/interne
        //===============================================
        else if(_method == "add_link_1") {
            this.onAddLink1(_obj, _data);
        }
        else if(_method == "update_link_1") {
            this.onUpdateLink1(_obj, _data);
        }
        else if(_method == "update_link_1_form") {
            this.onUpdateLink1Form(_obj, _data);
        }
        else if(_method == "delete_link_1") {
            this.onDeleteLink1(_obj, _data);
        }
        //===============================================
        // template/lien/simple/externe
        //===============================================
        else if(_method == "add_link_3") {
            this.onAddLink3(_obj, _data);
        }
        else if(_method == "update_link_3") {
            this.onUpdateLink3(_obj, _data);
        }
        else if(_method == "update_link_3_form") {
            this.onUpdateLink3Form(_obj, _data);
        }
        else if(_method == "delete_link_3") {
            this.onDeleteLink3(_obj, _data);
        }
        //===============================================
        // template/lien/groupe
        //===============================================
        else if(_method == "add_link_2") {
            this.onAddLink2(_obj, _data);
        }
        else if(_method == "update_link_2") {
            this.onUpdateLink2(_obj, _data);
        }
        else if(_method == "update_link_2_form") {
            this.onUpdateLink2Form(_obj, _data);
        }
        else if(_method == "delete_link_2") {
            this.onDeleteLink2(_obj, _data);
        }
        //===============================================
        // template/ligne
        //===============================================
        else if(_method == "add_line") {
            this.onAddLine(_obj, _data);
        }
        else if(_method == "update_line") {
            this.onUpdateLine(_obj, _data);
        }
        else if(_method == "update_line_form") {
            this.onUpdateLineForm(_obj, _data);
        }
        else if(_method == "delete_line") {
            this.onDeleteLine(_obj, _data);
        }
        //===============================================
        // template/parallax
        //===============================================
        else if(_method == "add_parallax") {
            this.onAddParallax(_obj, _data);
        }
        else if(_method == "update_parallax") {
            this.onUpdateParallax(_obj, _data);
        }
        else if(_method == "update_parallax_form") {
            this.onUpdateParallaxForm(_obj, _data);
        }
        else if(_method == "delete_parallax") {
            this.onDeleteParallax(_obj, _data);
        }
        //===============================================
        // template/puce
        //===============================================
        else if(_method == "add_bullet") {
            this.onAddBullet(_obj, _data);
        }
        else if(_method == "add_bullet_group") {
            this.onAddBulletGroup(_obj, _data);
        }
        else if(_method == "insert_bullet_before") {
            this.onInsertBulletBefore(_obj, _data);
        }
        else if(_method == "insert_bullet_after") {
            this.onInsertBulletAfter(_obj, _data);
        }
        else if(_method == "update_bullet") {
            this.onUpdateBullet(_obj, _data);
        }
        else if(_method == "update_bullet_form") {
            this.onUpdateBulletForm(_obj, _data);
        }
        else if(_method == "cancel_bullet") {
            this.onCancelBullet(_obj, _data);
        }
        else if(_method == "delete_bullet") {
            this.onDeleteBullet(_obj, _data);
        }
        //===============================================
        // template/section
        //===============================================
        else if(_method == "add_section") {
            this.onAddSection(_obj, _data);
        }
        else if(_method == "copy_section") {
            this.onCopySection(_obj, _data);
        }
        else if(_method == "paste_section") {
            this.onPasteSection(_obj, _data);
        }
        else if(_method == "update_section") {
            this.onUpdateSection(_obj, _data);
        }
        else if(_method == "update_section_form") {
            this.onUpdateSectionForm(_obj, _data);
        }
        else if(_method == "update_section_form_edit") {
            this.onUpdateSectionFormEdit(_obj, _data);
        }
        else if(_method == "delete_section") {
            this.onDeleteSection(_obj, _data);
        }
        //===============================================
        // template/sommaire/principal
        //===============================================
        else if(_method == "add_summary_1") {
            this.onAddSummary1(_obj, _data);
        }
        else if(_method == "update_summary_1") {
            this.onUpdateSummary1(_obj, _data);
        }
        else if(_method == "delete_summary_1") {
            this.onDeleteSummary1(_obj, _data);
        }
        //===============================================
        // template/sommaire/secondaire
        //===============================================
        else if(_method == "add_summary_2") {
            this.onAddSummary2(_obj, _data);
        }
        else if(_method == "update_summary_2") {
            this.onUpdateSummary2(_obj, _data);
        }
        else if(_method == "delete_summary_2") {
            this.onDeleteSummary2(_obj, _data);
        }
        //===============================================
        // template/sommaire/tertiaire
        //===============================================
        else if(_method == "add_summary_3") {
            this.onAddSummary3(_obj, _data);
        }
        else if(_method == "update_summary_3") {
            this.onUpdateSummary3(_obj, _data);
        }
        else if(_method == "delete_summary_3") {
            this.onDeleteSummary3(_obj, _data);
        }
        //===============================================
        // template/titre/primaire
        //===============================================
        else if(_method == "add_title_1") {
            this.onAddTitle1(_obj, _data);
        }
        else if(_method == "update_title_1") {
            this.onUpdateTitle1(_obj, _data);
        }
        else if(_method == "update_title_1_form") {
            this.onUpdateTitle1Form(_obj, _data);
        }
        else if(_method == "update_title_1_form_edit") {
            this.onUpdateTitle1FormEdit(_obj, _data);
        }
        else if(_method == "delete_title_1") {
            this.onDeleteTitle1(_obj, _data);
        }
        //===============================================
        // template/titre/secondaire
        //===============================================
        else if(_method == "add_title_2") {
            this.onAddTitle2(_obj, _data);
        }
        else if(_method == "update_title_2") {
            this.onUpdateTitle2(_obj, _data);
        }
        else if(_method == "update_title_2_form") {
            this.onUpdateTitle2Form(_obj, _data);
        }
        else if(_method == "update_title_2_form_edit") {
            this.onUpdateTitle2FormEdit(_obj, _data);
        }
        else if(_method == "delete_title_2") {
            this.onDeleteTitle2(_obj, _data);
        }
        //===============================================
        //===============================================
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    // editor
    //===============================================
    onOpenEditorTab(_obj, _data) {
        var lContents = document.getElementsByClassName("EditorTabCtn");
        for(var i = 0; i < lContents.length; i++) {
            var lContent = lContents[i];
            lContent.style.display = "none";
        }
        var lContentId = _data;
        var lContent = document.getElementById(lContentId);
        lContent.style.display = "block";
    }
    //===============================================
    // command
    //===============================================
    onExecCommand(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.isData()) {
            this.m_logs.addError("Vous n'avez pas sélectionné de texte.");
            return false;
        }
        document.execCommand(_data, false, null);
    }
    //===============================================
    // texte/couleur/premier_plan
    //===============================================
    onAddTextColor1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GText2")) {
            this.m_logs.addError("Vous êtes dans un effet texte couleur premier plan.");
            return false;
        }
        if(!this.isData()) {
            this.m_logs.addError("Vous n'avez pas sélectionné de texte.");
            return false;
        }
        document.execCommand("insertHTML", false, this.toTextColor1(this.toData()));
    }
    //===============================================
    onUpdateTextColor1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet texte couleur premier plan.");
            return false;
        }
        
        var lNode = this.m_node;
        var lColor = lNode.style.color.getHexFromRgb();
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_text_color_1_form");
        lForm.addLabelColor("m_color", "Couleur :", lColor);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateTextColor1Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet texte couleur premier plan.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lColor = lForm.loadFromMap(1).m_value;
        
        var lNode = this.m_node;
        
        lNode.style.color = lColor;
    }
    //===============================================
    onDeleteTextColor1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet texte couleur premier plan.");
            return false;
        }
        var lNode = this.m_node;
        var lText = lNode.innerHTML;
        lNode.replaceWith(lText);
    }
    //===============================================
    // texte/icone/horizontal/bas
    //===============================================
    onAddText3(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GText3")) {
            this.m_logs.addError("Vous êtes dans un effet texte icône bas horizontale.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }
        document.execCommand("insertHTML", false, this.toText3Group());
    }
    //===============================================
    onInsertText3Left(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText4")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet texte icône bas horizontale.");
            return false;
        }
        
        var lNode = this.m_node;
        var lNew = this.createNode(this.toText3Simple());
        lNode.appendBefore(lNew);
    }
    //===============================================
    onInsertText3Right(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText4")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet texte icône bas horizontale.");
            return false;
        }
        
        var lNode = this.m_node;
        var lNew = this.createNode(this.toText3Simple());
        lNode.appendAfter(lNew);
    }
    //===============================================
    onUpdateText3(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText4")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet texte icône bas horizontale.");
            return false;
        }
        
        var lNode = this.m_node;
        var lLinkId = lNode.parentNode;
        var lIconId = lNode.firstElementChild;
        
        var lLink = lLinkId.getAttribute("href");
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
                
        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_text_3_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateText3Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText4")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet texte icône bas horizontale.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lIcon = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
        
        lIcon = sprintf("Text6 fa %s", lIcon);
        
        var lNode = this.m_node;
        var lLinkId = lNode.parentNode;
        var lIconId = lNode.firstElementChild;
        
        lLinkId.setAttribute("href", lLink);
        lIconId.setAttribute("class", lIcon);
    }
    //===============================================
    onDeleteText3Simple(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText3")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet texte icône bas horizontale groupe.");
            return false;
        }
        if(!this.hasParent("GText4")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet texte icône bas horizontale simple.");
            return false;
        }
        if(this.countNode("GText4") <= 1) {
            this.m_logs.addError("Vous voulez supprimer le parent.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    onDeleteText3Group(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText3")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet texte icône bas horizontale groupe.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // texte/image/gauche
    //===============================================
    onAddTextImageLeft(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GText1")) {
            this.m_logs.addError("Vous êtes dans un effet texte image gauche.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toTextImageLeft());
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateTextImageLeft(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet texte image gauche.");
            return false;
        }

        var lNode = this.m_node;
        var lImgId = lNode.firstElementChild;
        var lBodyId = lNode.firstElementChild.nextElementSibling;
        var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild;
        var lTitle = lTitleId.innerHTML;
        var lBgImg = lImgId.style.backgroundImage.getPathFromUrl();
        var lBgColor = lBodyId.style.backgroundColor.getHexFromRgb();

        var lImage = GImage.Instance();
        var lIndex = lImage.findImg(lBgImg);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_parallax_form");
        lForm.addLabelEdit("m_title", "Titre :", lTitle);
        lForm.addLabelImage("m_bgImg", "Image :", lImage.toForm(), lIndex);
        lForm.addLabelColor("m_bgColor", "Couleur :", lBgColor);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateTextImageLeftForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }
        
        var lImage = GImage.Instance();
        var lForm = GForm.Instance();
        lForm.readForm();

        var lTitle = lForm.loadFromMap(1).m_value;
        var lBgImgI = lForm.loadFromMap(2).m_index;
        var lBgColor = lForm.loadFromMap(3).m_value;
        
        var lBgImg = lImage.loadFromMap(lBgImgI).m_path;
        
        var lNode = this.m_node;
        var lImgId = lNode.firstElementChild;
        var lBodyId = lNode.firstElementChild.nextElementSibling;
        var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild;
        lTitleId.innerHTML = lTitle;
        lImgId.style.backgroundImage = sprintf("url('%s')", lBgImg);
        lBodyId.style.backgroundColor = lBgColor;
    }
    //===============================================
    onDeleteTextImageLeft(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // texte/style/gras
    //===============================================
    onAddTextBold(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }
        document.execCommand("bold", false, null);
    }
    //===============================================
    // images
    //===============================================
    onDeleteImage1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GImg1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet image.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // edition
    //===============================================
    onKeydownEventEdition(_obj, _data) {
        var lEvent = _obj || window.event;
        var lKeyCode = lEvent.charCode || lEvent.keyCode;
        if(lKeyCode == 13) {
            document.execCommand("insertLineBreak")
            lEvent.preventDefault();
        }
    }
    //===============================================
    onPasteEventEdition(_obj, _data) {
        var lEvent = _obj || window.event;
        var lClipboardData = lEvent.clipboardData || window.clipboardData;
        // [info] : on récupère le texte pour vérifier si on a un texte ou une iamge
        var lData = lClipboardData.getData("text");
        // [info] : on vérifie si on a un texte
        if(lData != "") {
            if(this.isFilter()) {
                lEvent.preventDefault();
                document.execCommand("insertHTML", false, lData);
            }
        }
        // [info] : sinon on a une image
        else {
            lEvent.preventDefault();
            if(!lEvent.clipboardData) return false;
            var lItems = lEvent.clipboardData.items;
            if(!lItems) return false;
            for(var i = 0; i < lItems.length; i++) {
                if (lItems[i].type.indexOf("image") == -1) continue;
                var lBlob = lItems[i].getAsFile();
                this.onPasteImageCB(lBlob);
            }
        }
        
        return true;
    }
    //===============================================
    onPasteImageCB(_imgBlob) {
        var lNode = this.createNode(this.toPasteImage());
        var lImg = lNode.firstElementChild;
        
        var lFileReader = new FileReader();
        
        lFileReader.onload = function(e) {
            lImg.src = e.target.result;
            document.execCommand("insertHTML", false, lNode.outerHTML);
        };
        
        lFileReader.readAsDataURL(_imgBlob);
    }
    //===============================================
    onOpenEditionTab(_obj, _data) {
        var lTab = document.getElementsByClassName("EditorTab")[2];
        this.onOpenEditorTab(lTab, "EditorTab2");
    }
    //===============================================
    onUpdateEditionPage(_obj, _data) {
        this.toUpdateEditionPage();
        this.toUpdateEditionPage();
    }
    //===============================================
    // code
    //===============================================
    onOpenCodeTab(_obj, _data) {
        var lTab = document.getElementsByClassName("EditorTab")[3];
        this.onOpenEditorTab(lTab, "EditorTab3");
    }
    //===============================================
    // edition/fichier/pdf
    //===============================================
    onAddPdf1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GPdf1")) {
            this.m_logs.addError("Vous êtes dans un effet pdf.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toPdf1());
    }
    //===============================================
    onUpdatePdf1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPdf1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet pdf.");
            return false;
        }

        var lNode = this.m_node;
        
        var lFilename = lNode.dataset.pdf;
        
        var lFile = GFile.Instance();
        var lIndex = lFile.findObj(lFilename);
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_pdf_1_form");
        lForm.addLabelTree("m_filename", "Fichier :", lFile.toForm(), lIndex);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdatePdf1Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPdf1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet pdf.");
            return false;
        }
        
        var lFile = GFile.Instance();
        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lFilenameI = lForm.loadFromMap(1).m_index;
        var lFilename = lFile.loadFromMap(lFilenameI).m_path;
        var lMimeType = lFile.loadFromMap(lFilenameI).m_mimeType;
        
        if(lMimeType != "application/pdf") {
            this.m_logs.addError("Le fichier n'est pas un pdf.");
            return false;
        }
                
        var lNode = this.m_node;
        var lObject = lNode.firstElementChild;
        
        lNode.dataset.pdf = lFilename;
        lObject.setAttribute("src", this.toPdfFile(lFilename));
    }
    //===============================================
    onDeletePdf1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPdf1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet pdf.");
            return false;
        }
        
        this.removeNode();
    }
    //===============================================
    // edition/tutoriels
    //===============================================
    onAddTuto1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GTuto1")) {
            this.m_logs.addError("Vous êtes dans un effet tutoriel.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        document.execCommand("insertHTML", false, this.toTuto1());
    }
    //===============================================
    onInsertTuto1Left(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }
        var lNode = this.m_node;
        var lNew = this.createNode(this.toTuto2());
        lNode.appendBefore(lNew);
    }
    //===============================================
    onInsertTuto1Right(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }
        var lNode = this.m_node;
        var lNew = this.createNode(this.toTuto2());
        lNode.appendAfter(lNew);
    }
    //===============================================
    onDeleteTuto1Simple(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }
        if(this.countNode("GTuto2") <= 1) {
            this.m_logs.addError("Vous voulez supprimer le parent.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    onUpdateTuto1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }

        var lFont = GFontAwesome.Instance();

        var lNode = this.m_node;
        var lLinkId = lNode;
        var lIconId = lNode.firstElementChild.firstElementChild;
        
        var lLink = lLinkId.getAttribute("href");
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
        
        var lIconI = lFont.findFont(lIcon);
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_tuto_1_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIconI);
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateTuto1Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }

        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lIcon = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
        
        lIcon = sprintf("Tuto6 fa %s", lIcon);
        
        var lNode = this.m_node;
        var lLinkId = lNode;
        var lIconId = lNode.firstElementChild.firstElementChild;
        
        lLinkId.setAttribute("href", lLink);
        lIconId.setAttribute("class", lIcon);
    }
    //===============================================
    onDeleteTuto1Group(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // edition/formule
    //===============================================
    onAddFormula1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GFormula1")) {
            this.m_logs.addError("Vous êtes dans un effet formule.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        document.execCommand("insertHTML", false, this.toFormula1());
    }
    //===============================================
    onCopyFormula1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GFormula1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet formule.");
            return false;
        }
        
        this.copyNode();
    }
    //===============================================
    onPasteFormula1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GFormula1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet formule.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }
        if(!this.restoreCopy()) {
            this.m_logs.addError("Aucun noeud n'a été copié.");
            return false;
        }
        if(!this.isNode("GFormula1")) {
            this.m_logs.addError("Le noeud copié n'est pas un effet formule.");
            return false;
        }

        var lNode = this.m_node;
        document.execCommand("insertHTML", false, lNode.outerHTML);
    }
    //===============================================
    onUpdateFormula1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GFormula1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet formule.");
            return false;
        }

        var lNode = this.m_node;
        var lFormula = lNode.innerHTML;
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_formula_1_form");
        lForm.addLabelText("m_formula", "Formule :", lFormula);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateFormula1Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GFormula1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet formule.");
            return false;
        }

        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lFormula = lForm.loadFromMap(1).m_value;

        var lNode = this.m_node;

        lNode.innerHTML = lFormula;
    }
    //===============================================
    onDeleteFormula1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GFormula1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet formule.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/barre_acces_rapide
    //===============================================
    onAddAcess1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GAccess1")) {
            this.m_logs.addError("Vous êtes dans un effet barre d'accès rapide.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        document.execCommand("insertHTML", false, this.toAccess1());
    }
    //===============================================
    onInsertAcess1Left(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        var lNode = this.m_node;
        var lNewLink = this.createNode(this.toAccess2());
        var lNewChevron = this.createNode(this.toAccess3());
        lNode.appendBefore(lNewLink);
        lNode.appendBefore(lNewChevron);
    }
    //===============================================
    onInsertAcess1Right(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        var lNode = this.m_node;
        var lNewLink = this.createNode(this.toAccess2());
        var lNewChevron = this.createNode(this.toAccess3());
        lNode.appendAfter(lNewLink);
        lNode.appendAfter(lNewChevron);
    }
    //===============================================
    onCopyAccess1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        this.copyNode();
    }
    //===============================================
    onPasteAccess1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GAccess1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }
        if(!this.restoreCopy()) {
            this.m_logs.addError("Aucun noeud n'a été copié.");
            return false;
        }
        if(!this.isNode("GAccess1")) {
            this.m_logs.addError("Le noeud copié n'est pas un effet barre d'accès rapide.");
            return false;
        }

        var lNode = this.m_node;
        document.execCommand("insertHTML", false, lNode.outerHTML);
    }
    //===============================================
    onUpdateAcess1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        var lNode = this.m_node;
        
        var lLink = lNode.getAttribute("href");
        var lText = lNode.innerHTML;
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_access_1_form");
        lForm.addLabelEdit("m_text", "Texte :", lText);
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateAcess1Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lText = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
                
        var lNode = this.m_node;
        
        lNode.setAttribute("href", lLink);
        lNode.innerHTML = lText;
    }
    //===============================================
    onDeleteAcess1Simple(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        var lNode = this.m_node;
        var lChevron = lNode.previousElementSibling;
        
        if(!lChevron) {
            this.m_logs.addError("Vous voulez supprimer le parent.");
            return false;
        }
        
        lChevron.remove();
        lNode.remove();
    }
    //===============================================
    onDeleteAcess1Group(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/code
    //===============================================
    onAddCode1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GCode1")) {
            this.m_logs.addError("Vous êtes dans un effet code.");
            return false;
        }
        
        document.execCommand("insertHTML", false, this.toCode1());
    }
    //===============================================
    onCopyCode1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GCode1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet code.");
            return false;
        }
        
        this.copyNode();
    }
    //===============================================
    onPasteCode1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GCode1")) {
            this.m_logs.addError("Vous êtes dans un effet code.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }
        if(!this.restoreCopy()) {
            this.m_logs.addError("Aucun noeud n'a été copié.");
            return false;
        }
        if(!this.isNode("GCode1")) {
            this.m_logs.addError("Le noeud copié n'est pas un effet code.");
            return false;
        }

        var lNode = this.m_node;
        document.execCommand("insertHTML", false, lNode.outerHTML);
    }
    //===============================================
    onUpdateCode1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GCode1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet code.");
            return false;
        }
        
        var lNode = this.m_node;
        var lMode = lNode.dataset.mode;
        var lTheme = lNode.dataset.theme;
        var lBgColor = lNode.dataset.bgColor;
        var lCode = lNode.innerHTML;
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_code_1_form");
        lForm.addLabelEdit("m_mode", "Mode :", lMode);
        lForm.addLabelEdit("m_theme", "Thème :", lTheme);
        lForm.addLabelEdit("m_bgColor", "Couleur de fond :", lBgColor);
        lForm.addLabelText("m_code", "Code :", lCode);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateCode1Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GCode1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet code.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lMode = lForm.loadFromMap(1).m_value;
        var lTheme = lForm.loadFromMap(2).m_value;
        var lBgColor = lForm.loadFromMap(3).m_value;
        var lCode = lForm.loadFromMap(4).m_value;
        
        lCode = lCode.replaceAll("<", "&lt;");
        lCode = lCode.replaceAll(">", "&gt;");
        
        var lNode = this.m_node;
        
        lNode.dataset.mode = lMode;
        lNode.dataset.theme = lTheme;
        lNode.style.backgroundColor = lBgColor;
        lNode.innerHTML = lCode;
    }
    //===============================================
    onDeleteCode1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GCode1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet code.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/skill
    //===============================================
    onAddSkill(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GSkill1")) {
            this.m_logs.addError("Vous êtes dans un effet compétence.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toSkill());
    }
    //===============================================
    onCopySkill(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSkill1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet compétence.");
            return false;
        }
        
        this.copyNode();
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onPasteSkill(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GSkill1")) {
            this.m_logs.addError("Vous êtes dans un effet compétence.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }
        if(!this.restoreCopy()) {
            this.m_logs.addError("Aucun noeud n'a été copié.");
            return false;
        }
        if(!this.isNode("GSkill1")) {
            this.m_logs.addError("Le noeud copié n'est pas un effet compétence.");
            return false;
        }

        var lNode = this.m_node;
        document.execCommand("insertHTML", false, lNode.outerHTML);
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateSkill(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSkill1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet compétence.");
            return false;
        }

        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
        
        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);

        var lSort = new GForm();
        lSort.addValue("Croissant");
        lSort.addValue("Décroissant");

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_skill_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.addLabelCombo("m_sort", "Tri :", lSort.serialize(), 1);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateSkillForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSkill1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet compétence.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lIcon = lForm.loadFromMap(1).m_value;
        var lSort = lForm.loadFromMap(2).m_index;
        
        lIcon = sprintf("Skill2 fa %s", lIcon);

        var lNode = this.m_node;
        var lNodes = lNode.getElementsByClassName("GSkill1");
        var lSize = lNodes.length;
        
        for(var i = 0; i < lNodes.length; i++) {
            var lNode = lNodes[i];
            var lIconId = lNode.firstElementChild;
            var lNumId = lNode.firstElementChild.nextElementSibling;
            
            var lPos = i + 1;
            if(lSort == "1") lPos = lSize - lPos + 1;
                
            var lNum = sprintf("%s/%s", lPos, lSize);
            
            lIconId.setAttribute("class", lIcon);
            lNumId.innerHTML = lNum;
        }
    }
    //===============================================
    onDeleteSkill(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSkill1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet compétence.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/graduation
    //===============================================
    onAddGraduation(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GGraduation1")) {
            this.m_logs.addError("Vous êtes dans un effet formation.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toGraduation());
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onCopyGraduation(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GGraduation1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet formation.");
            return false;
        }
        
        this.copyNode();
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onPasteGraduation(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GGraduation1")) {
            this.m_logs.addError("Vous êtes dans un effet formation.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }
        if(!this.restoreCopy()) {
            this.m_logs.addError("Aucun noeud n'a été copié.");
            return false;
        }
        if(!this.isNode("GGraduation1")) {
            this.m_logs.addError("Le noeud copié n'est pas un effet formation.");
            return false;
        }

        var lNode = this.m_node;
        document.execCommand("insertHTML", false, lNode.outerHTML);
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateGraduation(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GGraduation1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet formation.");
            return false;
        }

        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
                
        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_graduation_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateGraduationForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GGraduation1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet formation.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lIcon = lForm.loadFromMap(1).m_value;
        
        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        
        lIcon = sprintf("Graduation2 fa %s", lIcon);
        
        lIconId.setAttribute("class", lIcon);
    }
    //===============================================
    onDeleteGraduation(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GGraduation1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet formation.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/lien/simple
    //===============================================
    onAddLink2(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GLink2")) {
            this.m_logs.addError("Vous êtes dans un effet lien simple.");
            return false;
        }
        
        var lHref = "#";
        var lText = "Ajouter un lien";
        if(this.isData()) lText = this.toData();
        if(this.isData()) lHref = this.toData();

        document.execCommand("insertHTML", false, this.toLink2(lText, lHref));
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateLink2(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet lien simple.");
            return false;
        }

        var lNode = this.m_node;
        
        var lLink = lNode.getAttribute("href");
        var lText = lNode.innerHTML;
        var lColor = lNode.style.color;

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_link_2_form");
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.addLabelEdit("m_text", "Texte :", lText);
        lForm.addLabelEdit("m_color", "Couleur :", lColor);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateLink2Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet lien simple.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lLink = lForm.loadFromMap(1).m_value;
        var lText = lForm.loadFromMap(2).m_value;
        var lColor = lForm.loadFromMap(3).m_value;
        
        var lNode = this.m_node;

        lNode.setAttribute("href", lLink);
        lNode.innerHTML = lText;
        lNode.style.color = lColor;
    }
    //===============================================
    onDeleteLink2(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet lien simple.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/lien/simple/externe
    //===============================================
    onAddLink3(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GLink3")) {
            this.m_logs.addError("Vous êtes dans un effet lien simple externe.");
            return false;
        }
        
        var lHref = "#";
        var lText = "Ajouter un lien";
        if(this.isData()) lText = this.toData();
        if(this.isData()) lHref = this.toData();
        
        document.execCommand("insertHTML", false, this.toLink3(lText, lHref));
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateLink3(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink3")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet lien simple externe.");
            return false;
        }

        var lNode = this.m_node;
        
        var lLink = lNode.getAttribute("href");
        var lText = lNode.innerHTML;
        var lColor = lNode.style.color;

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_link_3_form");
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.addLabelEdit("m_text", "Texte :", lText);
        lForm.addLabelEdit("m_color", "Couleur :", lColor);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateLink3Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink3")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet lien simple externe.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lLink = lForm.loadFromMap(1).m_value;
        var lText = lForm.loadFromMap(2).m_value;
        var lColor = lForm.loadFromMap(3).m_value;
        
        var lNode = this.m_node;

        lNode.setAttribute("href", lLink);
        lNode.innerHTML = lText;
        lNode.style.color = lColor;
    }
    //===============================================
    onDeleteLink3(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink3")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet lien simple externe.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/lien/groupe
    //===============================================
    onAddLink1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GLink1")) {
            this.m_logs.addError("Vous êtes dans un effet lien groupe.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toLink1());
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateLink1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet lien groupe.");
            return false;
        }

        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        var lLinkId = lNode.firstElementChild.nextElementSibling;
        
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
        var lLink = lLinkId.getAttribute("href");
        var lTitle = lLinkId.innerHTML;

        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_link_1_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.addLabelEdit("m_title", "Titre :", lTitle);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateLink1Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet lien groupe.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lIcon = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
        var lTitle = lForm.loadFromMap(3).m_value;
        
        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        var lLinkId = lNode.firstElementChild.nextElementSibling;
        
        lIcon = sprintf("Link2 fa %s", lIcon);
        
        lIconId.setAttribute("class", lIcon);
        lLinkId.setAttribute("href", lLink);
        lLinkId.innerHTML = lTitle;
    }
    //===============================================
    onDeleteLink1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet lien groupe.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/ligne
    //===============================================
    onAddLine(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GLine1")) {
            this.m_logs.addError("Vous êtes dans un effet ligne.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toLineBar());
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateLine(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLine1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet ligne.");
            return false;
        }

        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        var lLineId = lNode.firstElementChild.nextElementSibling;
        
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
        var lLine = lLineId.getAttribute("href");
        var lTitle = lLinkId.innerHTML;

        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_link_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.addLabelEdit("m_title", "Titre :", lTitle);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateLineForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLine1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet ligne.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lIcon = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
        var lTitle = lForm.loadFromMap(3).m_value;
        
        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        var lLinkId = lNode.firstElementChild.nextElementSibling;
        
        lIcon = sprintf("Link2 fa %s", lIcon);
        
        lIconId.setAttribute("class", lIcon);
        lLinkId.setAttribute("href", lLink);
        lLinkId.innerHTML = lTitle;
    }
    //===============================================
    onDeleteLine(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLine1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet ligne.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/parallax
    //===============================================
    onAddParallax(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GParallax1")) {
            this.m_logs.addError("Vous êtes dans un effet parallax.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toParallax());
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateParallax(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }

        var lNode = this.m_node;
        var lImgId = lNode.firstElementChild;
        var lBodyId = lNode.firstElementChild.nextElementSibling;
        var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild;
        var lTitle = lTitleId.innerHTML;
        var lBgImg = lImgId.style.backgroundImage.getPathFromUrl();
        var lBgColor = lBodyId.style.backgroundColor.getHexFromRgb();

        var lImage = GImage.Instance();
        var lIndex = lImage.findImg(lBgImg);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_parallax_form");
        lForm.addLabelEdit("m_title", "Titre :", lTitle);
        lForm.addLabelImage("m_bgImg", "Image :", lImage.toForm(), lIndex);
        lForm.addLabelColor("m_bgColor", "Couleur :", lBgColor);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateParallaxForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }
        
        var lImage = GImage.Instance();
        var lForm = GForm.Instance();
        lForm.readForm();

        var lTitle = lForm.loadFromMap(1).m_value;
        var lBgImgI = lForm.loadFromMap(2).m_index;
        var lBgColor = lForm.loadFromMap(3).m_value;
        
        var lBgImg = lImage.loadFromMap(lBgImgI).m_path;

        var lNode = this.m_node;
        var lImgId = lNode.firstElementChild;
        var lBodyId = lNode.firstElementChild.nextElementSibling;
        var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild;
        lTitleId.innerHTML = lTitle;
        lImgId.style.backgroundImage = sprintf("url('%s')", lBgImg);
        lBodyId.style.backgroundColor = lBgColor;
    }
    //===============================================
    onDeleteParallax(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/bullet
    //===============================================
    onAddBullet(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GBullet1")) {
            this.m_logs.addError("Vous êtes dans un effet puce.");
            return false;
        }
        if(this.isData()) {
            this.m_logs.addError("Vous avez sélectionné de texte.");
            return false;
        }

        var lText = "Ajouter un texte...";
        if(this.selectLine()) lText = this.toLine();
        
        document.execCommand("insertHTML", false, this.toBullet(lText));
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onAddBulletGroup(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GBullet1")) {
            this.m_logs.addError("Vous êtes dans un effet puce.");
            return false;
        }
        if(!this.isData()) {
            this.m_logs.addError("Vous n'avez pas sélectionné de texte.");
            return false;
        }

        var lText = this.toLines();
        var lLines = lText.split("\n");
        
        var lHtml = "";

        for(var i = 0; i < lLines.length; i++) {
            var lLine = lLines[i];
            lHtml += this.toBullet(lLine);
        }
        
        document.execCommand("insertHTML", false, lHtml);
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onInsertBulletBefore(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }

        var lNode = this.m_node;
        var lText = "Ajouter un texte...";
        var lNew = this.createNode(this.toBullet(lText));
        lNode.appendBefore(lNew);
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onInsertBulletAfter(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }

        var lNode = this.m_node;
        var lText = "Ajouter un texte...";
        var lNew = this.createNode(this.toBullet(lText));
        lNode.appendAfter(lNew);
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateBullet(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }

        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        
        var lIcon = lIconId.getAttribute("class").split(" ")[2];

        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_bullet_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateBulletForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lIcon = lForm.loadFromMap(1).m_value;
        
        lIcon = sprintf("Bullet2 fa %s", lIcon);
        
        var lNodes = this.toNodeSiblings(this.m_node, "GBullet1");
        
        for(var i = 0; i < lNodes.length; i++) {
            var lNode = lNodes[i];
            var lIconId = lNode.firstElementChild;
            
            lIconId.setAttribute("class", lIcon);
        }
    }
    //===============================================
    onCancelBullet(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }
        var lNode = this.m_node;
        var lText = sprintf("%s\n", this.toLine());
        lNode.replaceWith(lText);
    }
    //===============================================
    onDeleteBullet(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/section
    //===============================================
    onAddSection(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GSection1")) {
            this.m_logs.addError("Vous êtes dans un effet section.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toSection());
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onCopySection(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }
        
        this.copyNode();
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onPasteSection(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GSection1")) {
            this.m_logs.addError("Vous êtes dans un effet section.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }
        if(!this.restoreCopy()) {
            this.m_logs.addError("Aucun noeud n'a été copié.");
            return false;
        }
        if(!this.isNode("GSection1")) {
            this.m_logs.addError("Le noeud copié n'est pas un effet compétence.");
            return false;
        }

        var lNode = this.m_node;
        document.execCommand("insertHTML", false, lNode.outerHTML);
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateSection(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }

        var lNode = this.m_node;
        var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild.firstElementChild;

        var lTitle = lTitleId.innerHTML;        
        var lId = lTitleId.id;
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_section_form");
        lForm.setCallbackEdit("editor", "update_section_form_edit");
        lForm.addLabelEdit("m_title", "Titre :", lTitle);
        lForm.addLabelEdit("m_id", "Identifiant :", lId);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateSectionForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }

        var lForm = GForm.Instance();
        lForm.readForm();

        var lTitle = lForm.loadFromMap(1).m_value;
        var lId = lForm.loadFromMap(2).m_value;

        var lSectionN = this.m_node;
        var lSectionTN = lSectionN.firstElementChild.firstElementChild.firstElementChild.firstElementChild;

        lSectionTN.innerHTML = lTitle;
        lSectionTN.id = lId;
    }
    //===============================================
    onUpdateSectionFormEdit(_obj, _data) {
        var lFormData = new GForm();
        lFormData.deserialize(_data);
        
        var lForm = GForm.Instance();
        lForm.readForm();
        
        if(lFormData.m_position == 1) {
            var lTitle = lFormData.m_value;
            var lId = lTitle.getNormalize();

            lForm.loadFromMap(2);
            lForm.m_value = lId;
            lForm.loadToMap(2);
        }
        
        lForm.updateForm();
    }
    //===============================================
    onDeleteSection(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/sommaire/principal
    //===============================================
    onAddSummary1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GSummary1")) {
            this.m_logs.addError("Vous êtes dans un effet sommaire principal.");
            return false;
        }
        if(this.hasParent("GSection1")) {
            this.m_logs.addError("Vous êtes dans un effet section.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toSummary1());
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateSummary1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSummary1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet sommaire principal.");
            return false;
        }

        var lNodes = document.getElementsByClassName("GSection1");
        
        var lHtml = "";

        for(var i = 0; i < lNodes.length; i++) {
            var lNode = lNodes[i];
            var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild.firstElementChild;

            var lTitle = lTitleId.innerHTML;
            var lId = lTitleId.id;

            lHtml += sprintf("<div class='GSummary11 Summary1'>\n");
            lHtml += sprintf("<i class='Summary2 fa fa-book'></i>\n");
            lHtml += sprintf("<a class='Summary3' href='#%s'>%s</a>\n", lId, lTitle);
            lHtml += sprintf("</div>\n");
        }
                
        var lNode = this.m_node;
        lNode.innerHTML = lHtml;
    }
    //===============================================
    onDeleteSummary1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSummary1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet sommaire principal.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/sommaire/secondaire
    //===============================================
    onAddSummary2(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GSummary2")) {
            this.m_logs.addError("Vous êtes dans un effet sommaire secondaire.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toSummary2());
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateSummary2(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSummary2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet sommaire secondaire.");
            return false;
        }

        var lNode = this.m_node;
        var lSummaryN = lNode.firstElementChild.firstElementChild;
        var lIcon = lSummaryN.getAttribute("class").split(" ")[2];
        
        var lSectionN = this.toParentNode(lNode, "GSection1");
        var lTitleNs = lSectionN.getElementsByClassName("GTitle1");
        
        var lHtml = "";
        for(var i = 0; i < lTitleNs.length; i++) {
            var lTitleN = lTitleNs[i];
            lTitleN = lTitleN.firstElementChild;
            var lHref = lTitleN.id;
            var lText = lTitleN.innerHTML;
            
            lHtml += sprintf("<div class='GSummary21 Summary4'>\n");
            lHtml += sprintf("<i class='Summary5 fa fa-book'></i>\n");
            lHtml += sprintf("<a class='Summary6' href='#%s'>%s</a>\n", lHref, lText);
            lHtml += sprintf("</div>\n");
        }
        
        lNode.innerHTML = lHtml;
    }
    //===============================================
    onDeleteSummary2(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSummary2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet sommaire secondaire.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/sommaire/tertiaire
    //===============================================
    onAddSummary3(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GSummary3")) {
            this.m_logs.addError("Vous êtes dans un effet sommaire tertiaire.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }
        if(this.isLine()) {
            this.m_logs.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toSummary3());
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateSummary3(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSummary3")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet sommaire tertiaire.");
            return false;
        }

        var lTitleNs = this.toNodeNexts(this.m_node, "GTitle2", "GTitle1");
        var lIcon = "fa-book";
        
        var lHtml = "";
        for(var i = 0; i < lTitleNs.length; i++) {
            var lTitleN = lTitleNs[i];
            lTitleN = lTitleN.firstElementChild;
            var lHref = lTitleN.id;
            var lTitle = lTitleN.innerHTML;
            lHtml += this.toSummary31(lHref, lIcon, lTitle);
        }
        
        var lNode = this.m_node;
        lNode.innerHTML = lHtml;
    }
    //===============================================
    onDeleteSummary3(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSummary3")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet sommaire tertiaire.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/titre/primaire
    //===============================================
    onAddTitle1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GTitle1")) {
            this.m_logs.addError("Vous êtes dans un effet titre primaire.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }
        
        var lNode = this.m_node;
        var lSection = lNode.firstElementChild.firstElementChild.firstElementChild.firstElementChild;
        
        var lHref = lSection.id;
        var lText = "Ajouter un titre...";
        var lId = "";
        
        if(this.selectLine()) {
            lText = this.toLine();
            lId = sprintf("%s_%s", lHref.getNormalize(), lText.getNormalize());
        }

        document.execCommand("insertHTML", false, this.toTitle1(lId, lHref, lText));
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateTitle1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTitle1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet titre primaire.");
            return false;
        }

        var lNode = this.m_node;
        var lSectionN = this.toParentNode(lNode, "GSection1");
        lSectionN = lSectionN.firstElementChild.firstElementChild.firstElementChild.firstElementChild;
        var lTitleN = lNode.firstElementChild;
        
        var lTitle = lTitleN.innerHTML;
        var lLink = lTitleN.getAttribute("href");
        var lSectionT = lSectionN.innerHTML;
        var lIdRef = lSectionT.getNormalize();
        var lId = sprintf("%s_%s", lIdRef, lTitle.getNormalize());
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_title_1_form");
        lForm.setCallbackEdit("editor", "update_title_1_form_edit");
        lForm.addLabelEdit("m_title", "Titre :", lTitle);
        lForm.addLabelLine("m_link", "Lien :", lLink);
        lForm.addLabelLine("m_id", "Id :", lId);
        lForm.addVariable("m_idRef", lIdRef);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateTitle1Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTitle1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet titre primaire.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lTitle = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
        var lId = lForm.loadFromMap(3).m_value;
                
        var lNode = this.m_node;
        var lTitleN = lNode.firstElementChild;

        lTitleN.id = lId;
        lTitleN.setAttribute("href", lLink);
        lTitleN.innerHTML = lTitle;
    }
    //===============================================
    onUpdateTitle1FormEdit(_obj, _data) {
        var lFormData = new GForm();
        lFormData.deserialize(_data);
        
        var lForm = GForm.Instance();
        lForm.readForm();
        
        if(lFormData.m_position == 1) {
            var lTitle = lFormData.m_value;
            var lIdRef = lForm.loadFromMap(4).m_value;
            var lId = sprintf("%s_%s", lIdRef, lTitle.getNormalize());

            lForm.loadFromMap(3);
            lForm.m_value = lId;
            lForm.loadToMap(3);
        }
        
        lForm.updateForm();
    }
    //===============================================
    onDeleteTitle1(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTitle1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet titre primaire.");
            return false;
        }
        
        var lNode = this.m_node;
        var lSummary = lNode.firstElementChild;
        var lText = lSummary.innerHTML;
        lNode.replaceWith(lText);
    }
    //===============================================
    // template/titre/secondaire
    //===============================================
    onAddTitle2(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GTitle2")) {
            this.m_logs.addError("Vous êtes dans un effet titre secondaire.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }
        
        var lNode = this.m_node;
        var lSectionN = lNode.firstElementChild.firstElementChild.firstElementChild.firstElementChild;

        var lHref = lSectionN.id;
        var lTitle = "Ajouter un titre...";
        var lId = "";

        if(this.isLine()) {
            if(!this.toPreviousNode(this.toNode(), "GTitle1")) {
                this.m_logs.addError("Vous n'êtes pas dans un effet titre primaire.");
                return false;
            }

            var lTitle1N = this.toPreviousNode(this.toNode(), "GTitle1");
            lTitle1N = lTitle1N.firstElementChild;
            var lTitle1 = lTitle1N.innerHTML;

            lTitle = this.toLine();
            lHref = sprintf("%s_%s", lHref.getNormalize(), lTitle1.getNormalize());
            lId = sprintf("%s_%s", lHref.getNormalize(), lTitle.getNormalize());
            
            this.selectLine();
            document.execCommand("insertHTML", false, this.toTitle2(lId, lHref, lTitle));
        }
        else {
            document.execCommand("insertHTML", false, this.toTitle2(lId, lHref, lTitle));
            var lNode = this.toNode();
            lNode = this.toParentNode(lNode, "GTitle2");
            var lTitleN = lNode.firstElementChild;
            
            if(!this.toPreviousNode(lNode, "GTitle1")) {
                this.m_logs.addError("Vous n'êtes pas dans un effet titre primaire.");
                lNode.remove();
                return false;
            }
            
            var lTitle1N = this.toPreviousNode(lNode, "GTitle1");
            lTitle1N = lTitle1N.firstElementChild;
            var lTitle1 = lTitle1N.innerHTML;

            lHref = sprintf("#%s_%s", lHref.getNormalize(), lTitle1.getNormalize());
            lTitleN.setAttribute("href", lHref);
        }
        
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onUpdateTitle2(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTitle2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet titre secondaire.");
            return false;
        }

        var lNode = this.m_node;
        var lTitle2N = lNode.firstElementChild;
        var lSectionN = this.toParentNode(lNode, "GSection1");
        lSectionN = lSectionN.firstElementChild.firstElementChild.firstElementChild.firstElementChild;
        
        var lTitle2 = lTitle2N.innerHTML;
        var lLink = lTitle2N.getAttribute("href");
        var lSectionId = lSectionN.innerHTML;
        
        var lTitle1N = this.toPreviousNode(lNode, "GTitle1");
        lTitle1N = lTitle1N.firstElementChild;
        var lTitle1 = lTitle1N.innerHTML;

        var lIdRef = sprintf("%s_%s", lSectionId.getNormalize(), lTitle1.getNormalize());
        var lId = sprintf("%s_%s", lIdRef, lTitle2.getNormalize());
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_title_2_form");
        lForm.setCallbackEdit("editor", "update_title_2_form_edit");
        lForm.addLabelEdit("m_title", "Titre :", lTitle2);
        lForm.addLabelLine("m_link", "Lien :", lLink);
        lForm.addLabelLine("m_id", "Id :", lId);
        lForm.addVariable("m_idRef", lIdRef);
        lForm.showForm();
        this.m_logs.addLogs(lForm.m_logs);
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateTitle2Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTitle2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet titre secondaire.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lTitle = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
        var lId = lForm.loadFromMap(3).m_value;
                
        var lNode = this.m_node;
        var lTitleN = lNode.firstElementChild;

        lTitleN.id = lId;
        lTitleN.setAttribute("href", lLink);
        lTitleN.innerHTML = lTitle;
    }
    //===============================================
    onUpdateTitle2FormEdit(_obj, _data) {
        var lFormData = new GForm();
        lFormData.deserialize(_data);
        
        var lForm = GForm.Instance();
        lForm.readForm();
        
        if(lFormData.m_position == 1) {
            var lTitle = lFormData.m_value;
            var lIdRef = lForm.loadFromMap(4).m_value;
            var lId = sprintf("%s_%s", lIdRef, lTitle.getNormalize());

            lForm.loadFromMap(3);
            lForm.m_value = lId;
            lForm.loadToMap(3);
        }
        
        lForm.updateForm();
    }
    //===============================================
    onDeleteTitle2(_obj, _data) {
        if(!this.isEditor()) {
            this.m_logs.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTitle2")) {
            this.m_logs.addError("Vous n'êtes pas dans un effet titre secondaire.");
            return false;
        }
        
        var lNode = this.m_node;
        var lTitleN = lNode.firstElementChild;
        var lTitle = lTitleN.innerHTML;
        lNode.replaceWith(lTitle);
    }
    //===============================================
}
//===============================================
GEditor.Instance().init();
//===============================================
