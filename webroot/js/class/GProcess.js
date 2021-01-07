//===============================================
var GProcess = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {

            },
            //===============================================
            run: function(obj, req) {
                // debug
                if(req == "debug_clear") {this.debug_clear(obj, req); return;}
            },
            //===============================================
            // debug
            //===============================================
            debug_clear: function(obj, req) {
                var lDebug = document.getElementById("debug");
                lDebug.innerHTML = "";
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                    }
                }
                lXmlhttp.open("POST", "/webroot/php/request/request.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+req
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
GProcess.Instance().init();
//===============================================
