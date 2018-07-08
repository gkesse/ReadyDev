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
                    var lSyntax = this.syntaxHtml(lData);
                    lPrintSyntaxMap[i].innerHTML = lSyntax;
                }
            },
            //===============================================
            syntaxHtml: function(data) {
                var lExtract = new this.extract(data, "&lt;!--", "--&gt;", this.commentMode, "W3HTMLCOMMENTPOS");
                var lData = lExtract.data;
                var lDataMap = lExtract.map;
                for(var i = 0; i < lDataMap.length; i++) {
                    lData = lData.replace("W3HTMLCOMMENTPOS", lDataMap[i]);
                }
                var lSyntax = this.syntaxCode(lData);
                return lSyntax;
            },
            //===============================================
            syntaxCode: function(data) {
                var lData = "";
                lData += "<div style='display:inline-block;font-family:courier'>";
                lData += data;
                lData += "</div>";
                return lData;
            },
            //===============================================
            extract: function(data, start, end, func, replace) {
                var lDataMap = [];
                while(data.search(start) > -1) {
                    var lSearch = data.search(start);
                    var lIndexOf = data.indexOf(end, lSearch);
                    var lSubstring = data.substring(lSearch, lIndexOf + (end.length));
                    var lFunc = func(lSubstring);
                    lDataMap.push(lFunc);
                    var lSubstring2 = data.substring(0, lSearch);
                    var lSubstring3 = data.substring(lIndexOf + (end.length));
                    data = lSubstring2 + replace + lSubstring3;
                }
                this.data = data;
                this.map = lDataMap;
            },
            //===============================================
            commentMode: function(data) {
                var lData = "";
                lData += "<span style='color:limegreen;'>";
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
