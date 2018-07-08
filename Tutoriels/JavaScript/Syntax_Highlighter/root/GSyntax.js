//===============================================
var GSyntax = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.printSyntax();
            },
            //===============================================
            printSyntax: function() {
                var lPrintSyntaxMap = document.getElementsByClassName("PrintSyntax");
                if(!lPrintSyntaxMap.length) return;
                for(var i = 0; i < lPrintSyntaxMap.length; i++) {
                    var lData = lPrintSyntaxMap[i].innerHTML;
                    this.syntaxHtml(lData);
                }
            },
            //===============================================
            syntaxHtml: function(data) {
                this.extract(data, "&lt;!--", "--&gt;", this.commentMode);
            },
            //===============================================
            extract: function(data, start, end, func) {
                var lDataMap = [];
                if(data.search(start) > -1) {
                    var lSearch = data.search(start);
                    var lIndexOf = data.indexOf(end, lSearch);
                    var lSubstring = data.substring(lSearch, lIndexOf + (end.length));
                    var lFunc = func(lSubstring);
                    alert(lFunc);
                }
            },
            //===============================================
            commentMode: function(data) {
                var lData = "";
                lData += "<span style='color:lime;'>";
                lData += data;
                lData += "</span>";
                return lData;
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
GSyntax.Instance().init();
//===============================================
