//===============================================
var GConnection = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {

            },
            //===============================================
            openDisconnection: function(obj) {
				var lModalDisconnection = document.getElementById("ModalDisconnection");
				//var lModalDisconnectionCtn = document.getElementById("ModalDisconnectionCtn");
				//var lClassName = lModalDisconnectionCtn.className;
				//lModalDisconnectionCtn.className = lClassName.replace(" ModalAnimHide", " ModalAnimShow");
				lModalDisconnection.style.display = "block";
            },
            //===============================================
            closeDisconnection: function(obj) {
				var lModalDisconnection = document.getElementById("ModalDisconnection");
				var lModalDisconnectionCtn = document.getElementById("ModalDisconnectionCtn");
				var lClassName = lModalDisconnectionCtn.className;
				lModalDisconnectionCtn.className = lClassName.replace(" ModalAnimShow", " ModalAnimHide");
				setTimeout(function() {
					lModalDisconnection.style.display = "none";
				}, 400);
            }
            //===============================================
        };
    }
    //===============================================
    return {
        Instance: function() {
            if (!m_instance) {
                m_instance = Container();
            }
            return m_instance;
        }
    };
    //===============================================
})();
//===============================================
GConnection.Instance().init();
//===============================================
