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
                var lSyntax = document.getElementById("Syntax");
                var lCode = new this.getCode();
                var lCodeData = lCode.code;
                var lCodeLang = lCode.lang;
                YUI().use(
                    'aui-ace-editor',
                    function(Y) {
                        new Y.AceEditor(
                            {
                                boundingBox: '#Syntax',
                                mode: lCodeLang,
                                value: lCodeData,
                                showPrintMargin: false
                            }
                        ).render();
                    }
                );
            },
            //===============================================
            getCode: function() {
                var lCode = document.getElementById("Code");
                var lCodeData = lCode.innerHTML;
                var lCodeLang = lCode.dataset.editor;
                this.code = lCodeData;
                this.lang = lCodeLang;
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
