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
				var lId = 'img_' + Date.now();
				var lHtml = '';
				lHtml += '<div class="Img3 GImage">';
				lHtml += '<img id="' + lId + '" alt="' + lId + '"/>';
				lHtml += '</div>';
				document.execCommand("insertHTML", false, lHtml);
				var lImg = document.getElementById(lId);
				var lFileReader = new FileReader();
				lFileReader.onload = function(e) {
					lImg.src = e.target.result;
				};
				lFileReader.readAsDataURL(imageBlob);
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
