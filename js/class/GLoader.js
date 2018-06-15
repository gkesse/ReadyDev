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
            loadData: function(id, file, key) {
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
