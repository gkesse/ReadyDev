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
                    var lMode = lAceCode[i].dataset.mode;
                    var lTheme = lAceCode[i].dataset.theme;
                    var lEditor = ace.edit(lAceCode[i]);
                    
                    lEditor.session.setMode("ace/mode/"+lMode);
                    
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
                        fontSize: "16px"
                    });                    
                }
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
