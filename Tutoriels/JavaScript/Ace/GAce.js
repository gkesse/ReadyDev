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
                    lEditor.setTheme("ace/theme/"+lTheme);
                    lEditor.session.setMode("ace/mode/"+lMode);
                    lEditor.setShowPrintMargin(false);
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
