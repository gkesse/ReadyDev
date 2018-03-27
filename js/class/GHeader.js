//===============================================
var GHeader = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            openHeaderMenu: function(obj) {
				var m_HeaderMenuId = document.getElementById("HeaderMenuId");
				var m_bars = '<i class="fa fa-bars"></i>';
				if(m_bars == obj.innerHTML) {
					m_bars = '<i class="fa fa-close"></i>';
					m_HeaderMenuId.className += " HeaderMenuRwd";
				}
				else {
					var m_className = m_HeaderMenuId.className;
					m_HeaderMenuId.className = m_className.replace(" HeaderMenuRwd", "");
				}
				obj.innerHTML = m_bars;	
            },
            //===============================================
            openDisconnect: function() {
				var m_LogoutId = document.getElementById("LogoutId");
				var m_ModalCtnId = document.getElementById("ModalCtnId");
				var m_className = m_ModalCtnId.className;
				m_ModalCtnId.className = m_className.replace(" ModalAnimHide", " ModalAnimShow");
				m_LogoutId.style.display = "block";
            },
            //===============================================
            disconnectClose: function() {
				var m_LogoutId = document.getElementById("LogoutId");
				var m_ModalCtnId = document.getElementById("ModalCtnId");
				var m_className = m_ModalCtnId.className;
				m_ModalCtnId.className = m_className.replace(" ModalAnimShow", " ModalAnimHide");
				setTimeout(function() {
					m_LogoutId.style.display = "none";
				}, 400);
            },
            //===============================================
            windowEvent: function() {
				window.onclick = function(event) {
					var m_LogoutId = document.getElementById("LogoutId");
					var m_target = event.target;
					if(m_target == m_LogoutId) {
						disconnectClose();
					}
				};
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
GHeader.Instance().windowEvent();
//===============================================
