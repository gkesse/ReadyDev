//===============================================
var GClipBoard = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {

            },
            //===============================================
            pasteText: function(e) {
                e.preventDefault();
                var lClipboardData = e.clipboardData || window.clipboardData;
                var lData = lClipboardData.getData("text");
				// text
				if(lData != "") {
					lData = this.encodeHtml(lData, "html");
					document.execCommand("insertHTML", false, lData);
				}
				// image
				else {
					this.pasteImage(e, this.pasteImageCB);
				}
            },
            //===============================================
            pasteImage: function(e, callback) {
				if(e.clipboardData == false) return;
				var items = e.clipboardData.items;
				if(items == undefined) return;
				for (var i = 0; i < items.length; i++) {
					if (items[i].type.indexOf("image") == -1) continue;
					var blob = items[i].getAsFile();
					callback(blob);
				}
            },
            //===============================================
            pasteImageCB: function(imageBlob) {
				var lId = "canvas" + Date.now;
				var lHtml = "<canvas style='border:1px solid grey;' id='"+lId+"'></canvas>";
				document.execCommand("insertHTML, false, lHtml);
				var canvas = document.getElementById(lId);
				var ctx = canvas.getContext('2d');
				var img = new Image();
				img.onload = function() {
					canvas.width = this.width;
					canvas.height = this.height;
					ctx.drawImage(img, 0, 0);
				};
				var URLObj = window.URL || window.webkitURL;
				img.src = URLObj.createObjectURL(imageBlob);
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
GClipBoard.Instance().init();
//===============================================
