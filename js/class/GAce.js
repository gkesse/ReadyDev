//===============================================
var GAce = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.setSyntax();
            },
            //===============================================
            setSyntax: function() {
                var lAceCode = document.getElementsByClassName("AceCode");
                for(var i = 0; i < lAceCode.length; i++) {
                    this.setSyntaxNode(lAceCode[i]);                    
                }
            },
            //===============================================
            setSyntaxNode: function(node) {
                var lMode = node.dataset.mode;
                var lHtml = node.innerHTML;
                //lHtml = this.encodeHtml(lHtml, "txt");
                node.innerHTML = lHtml;
                var lTheme = "gruvbox";
                var lEditor = ace.edit(node);
                
                node.style.backgroundColor = "transparent";
                lEditor.session.setMode("ace/mode/"+lMode);
                lEditor.renderer.$cursorLayer.element.style.display = "none";
                
                lEditor.setOptions({
                    theme: "ace/theme/"+lTheme,
                    maxLines: Infinity,
                    readOnly: true,
                    selectionStyle: "text",
                    showLineNumbers: true,
                    showGutter: true,
                    displayIndentGuides: false,
                    highlightActiveLine: false,
                    showPrintMargin: false,
                    showGutter: true,
                    fontSize: "16px",
                    highlightGutterLine: false,
                    fontFamily: "courier",
                    useWorker: false
                });                    
            },
            //===============================================
            encodeHtml: function(data, lang) {
                var lEntityMap = {
                    '<': '&lt;|html;ace',
                    '>': '&gt;|html;ace',
                    '\n': '<br>|html',
                    '<br>': '\n|txt',
                    '&lt;': '<|txt',
                    '&gt;': '>|txt',
                    '&amp;': '&|tex;txt'
                };
                for(key in lEntityMap) {
                    var lVal = lEntityMap[key];
                    var lSplit = lVal.split("|");
                    var lVal2 = lSplit[0];
                    if(lSplit.length > 1) {
                        var lVal3 = lSplit[1];
                        var lSplit2 = lVal3.split(";");
                        var lIncludes = lSplit2.includes(lang);
                        if(!lIncludes) continue;
                    }
                    var lReg = new RegExp(key, 'g');
                    data = data.replace(lReg, lVal2);
                }
                return data;
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
GAce.Instance().init();
//===============================================
