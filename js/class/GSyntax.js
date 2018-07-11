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
                    var lData2 = this.encodeHtml(lData);
                    var lSyntax = this.syntaxHtml(lData2);
                    lPrintSyntaxMap[i].innerHTML = lSyntax;
                }
            },
            //===============================================
            encodeHtml: function(data, lang="html") {
                var lEntityMap = {
                    '<xmp>': '|html',
                    '</xmp>': '|html',
                    '<': '&lt;|html',
                    '>': '&gt;|html',
                    '\n': '<br>|html'
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
            },
            //===============================================
            syntaxHtml: function(data) {
                var lExtract = new this.extract(data, "&lt;!--", "--&gt;", this.commentMode, "W3HTMLCOMMENTPOS");
                var lData = lExtract.data;
                var lDataMap = lExtract.map;
                var lDone = "";
                while(lData.indexOf("&lt;") > -1) {
                    var lIndexOf = lData.indexOf("&lt;");
                    var lIndexOf2 = lData.indexOf("&gt;", lIndexOf);
                    var lSubstring = lData.substring(0, lIndexOf);
                    var lSubstring2 = lData.substring(lIndexOf, lIndexOf2 + 4);
                    var lTagMode = this.tagMode(lSubstring2);
                    lDone += lSubstring
                    lDone += lTagMode;
                    lData = lData.substr(lIndexOf2 + 4);
                }
                lData = lDone + lData;
                for(var i = 0; i < lDataMap.length; i++) {
                    lData = lData.replace("W3HTMLCOMMENTPOS", lDataMap[i]);
                }
                var lSyntax = this.syntaxCode(lData);
                return lSyntax;
            },
            //===============================================
            syntaxCode: function(data) {
                var lData = "";
                lData += "<div style='display:inline-block;"
                lData += "background-color:#112233;";
                lData += "color:#999999;";
                lData += "padding:10px;";
                lData += "font-family:courier'>";
                lData += data;
                lData += "</div>";
                return lData;
            },
            //===============================================
            tagMode: function(data) {
                var lDone = "";
                while(data.search(/(\s|<br>)/) > -1) {
                    var lSearch = data.search(/(\s|<br>)/);
                    var lIndexOf = data.indexOf("&gt;");
                    var lSubstring = data.substring(0, lSearch);
                    var lSubstring2 = data.substring(lSearch, lIndexOf);
                    var lAttributeMode = this.attributeMode(lSubstring2);
                    data = data.substr(lIndexOf);
                    lDone += lSubstring;
                    lDone += lAttributeMode;
                    data = data.substr(lIndexOf);
                }
                var lResult = lDone + data;
                lResult = "<span style='color:lightblue'>&lt;</span>" + 
                lResult.substring(4);
                if(lResult.substr(lResult.length - 4, 4) == "&gt;") {
                    lResult = lResult.substring(0, lResult.length - 4) + 
                    "<span style='color:lightblue'>&gt;</span>";
                }
                else {
                    lResult = lResult + 
                    "<span style='color:lightblue'>&gt;</span>";
                }
                return "<span style='color:brown'>" + lResult + "</span>";
            },
            //===============================================
            attributeMode: function(data) {
                var lDone = "";
                while(data.indexOf("=") > -1) {
                    var lIndexOf = data.indexOf("=");
                    var lIndexOf2 = data.indexOf("'", lIndexOf);
                    var lIndexOf3 = data.indexOf('"', lIndexOf);
                    var lIndexOf4 = data.indexOf(" ", lIndexOf + 2);
                    var lIndexOf5 = -1;

                    if(lIndexOf4 > -1 && (lIndexOf4 < lIndexOf2 || lIndexOf2 == -1) && (lIndexOf4 < lIndexOf3 || lIndexOf3 == -1)) {
                        lIndexOf5 = data.indexOf(" ", lIndexOf);      
                    }
                    else if(lIndexOf3 > -1 && (lIndexOf3 < lIndexOf2 || lIndexOf2 == -1) && (lIndexOf3 < lIndexOf4 || lIndexOf4 == -1)) {
                        var lIndexOf6 = data.indexOf('"', lIndexOf);
                        lIndexOf5 = data.indexOf('"', lIndexOf6 + 1);
                    }
                    else if(lIndexOf2 > -1 && (lIndexOf2 < lIndexOf3 || lIndexOf3 == -1) && (lIndexOf2 < lIndexOf4 || lIndexOf4 == -1)) {
                        var lIndexOf6 = data.indexOf("'", lIndexOf);
                        lIndexOf5 = data.indexOf("'", lIndexOf6 + 1);
                    }
                    if (!lIndexOf5 || lIndexOf5 == -1 || lIndexOf5 < lIndexOf) {lIndexOf5 = data.length;}  
                    
                    var lSubstring = data.substring(0, lIndexOf);
                    var lSubstring2 = data.substring(lIndexOf, lIndexOf5 + 1);
                    
                    lDone += lSubstring;
                    lDone += this.attributeValueMode(lSubstring2);
                    data = data.substr(lIndexOf5 + 1);
                }
                var lData = lDone + data;
                return this.attributeKeyMode(lData);
            },
            //===============================================
            attributeKeyMode: function(data) {
                var lData = "";
                lData += "<span style='color:red'>";
                lData += data;
                lData += "</span>";
                return lData;
            },
            //===============================================
            attributeValueMode: function(data) {
                var lData = "";
                lData += "<span style='color:lightblue'>";
                lData += data;
                lData += "</span>";
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
                lData += "<span style='color:#03ee26;'>";
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
