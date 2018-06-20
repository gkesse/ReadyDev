//===============================================
var GLoader = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {

            },
            //===============================================
            loadSummary1: function(id) {
                var lObj = document.getElementById(id);
                var lNodeMap = document.getElementsByClassName("GTitle1");
                var lCount = 0;
				var lTimer = setInterval(function() {
                    if(++lCount > 10) clearInterval(lTimer);
                    var lHtml = '';
                    for(var i = 0; i < lNodeMap.length; i++) {
                        var lTitle = lNodeMap[i].firstChild.firstChild.firstChild.innerText;
                        lHtml += '<div class="Item4">';
                        lHtml += '<span class="Icon10 fa fa-book"></span>';
                        lHtml += '<a class="Link4" href="#'+lTitle+'">';
                        lHtml += lTitle;
                        lHtml += '</a>';
                        lHtml += '</div>';
                    }
                    lObj.innerHTML = lHtml;
				}, 50);
            },
            //===============================================
            loadSummary2: function(id) {
                var lObj = document.getElementById(id);
                var lAction = "None";
                var lCurrentNode;
                var lParentNode = lObj.parentNode;
                var lMainTitle = "";
                while(1) {
                    var lClassName = lParentNode.className;
                    if(lClassName.includes("MainPage")) {
                        break;
                    }
                    if(lClassName.includes("GTitle1")) {
                        lAction = "GTitle1";
                        lCurrentNode = lParentNode;
                        lMainTitle = lParentNode.firstChild.firstChild.firstChild.innerText;
                        break;
                    }
                    lParentNode = lParentNode.parentNode;
                }
                var lNodeMap;
                if(lAction == "None") {
                    lNodeMap = document.getElementsByClassName("GTitle2");
                }
                else if(lAction == "GTitle1") {
                    lNodeMap = lCurrentNode.getElementsByClassName("GTitle2");
                }
                var lCount = 0;
				var lTimer = setInterval(function() {
                    if(++lCount > 10) clearInterval(lTimer);
                    var lHtml = '';
                    for(var i = 0; i < lNodeMap.length; i++) {
                        var lTitle = lNodeMap[i].innerText
                        lHtml += '<div class="Item4">';
                        lHtml += '<span class="Icon10 fa fa-book"></span>';
                        lHtml += '<a class="Link4" href="#'+lMainTitle+'-'+lTitle+'">';
                        lHtml += lTitle;
                        lHtml += '</a>';
                        lHtml += '</div>';
                    }
                    lObj.innerHTML = lHtml;
				}, 50);
            },
            //===============================================
            loadList1: function(id, file, key) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "LIST_1" +
                "&file=" + file +
                "&key=" + key
                );
            },
            //===============================================
            loadList2: function(id, file, key) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "LIST_2" +
                "&file=" + file +
                "&key=" + key
                );
            },
            //===============================================
            loadData1: function(id, file, key) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        lObj.innerHTML = lDataMap["data"];
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "DATA_1" +
                "&file=" + file +
                "&key=" + key
                );
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
GLoader.Instance().init();
//===============================================
