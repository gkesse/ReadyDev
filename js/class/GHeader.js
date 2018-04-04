//===============================================
var GHeader = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            openHeaderMenu: function(obj) {
				var m_HeaderMenu = document.getElementById("HeaderMenu");
				var m_bars = '<i class="fa fa-bars"></i>';
				if(m_bars == obj.innerHTML) {
					m_bars = '<i class="fa fa-close"></i>';
					m_HeaderMenu.className += " HeaderMenuRwd";
				}
				else {
					var m_className = m_HeaderMenu.className;
					m_HeaderMenu.className = m_className.replace(" HeaderMenuRwd", "");
				}
				obj.innerHTML = m_bars;	
            },
            //===============================================
            openDisconnect: function() {
				var m_Logout = document.getElementById("Logout");
				var m_LogoutCtn = document.getElementById("LogoutCtn");
				var m_className = m_LogoutCtn.className;
				m_LogoutCtn.className = m_className.replace(" ModalAnimHide", " ModalAnimShow");
				m_Logout.style.display = "block";
            },
            //===============================================
            disconnectClose: function() {
				var m_Logout = document.getElementById("Logout");
				var m_LogoutCtn = document.getElementById("LogoutCtn");
				var m_className = m_LogoutCtn.className;
				m_LogoutCtn.className = m_className.replace(" ModalAnimShow", " ModalAnimHide");
				setTimeout(function() {
					m_Logout.style.display = "none";
				}, 400);
            },
            //===============================================
            windowEvent: function() {
				window.onclick = function(event) {
					var m_Logout = document.getElementById("Logout");
					var m_target = event.target;
					if(m_target == m_Logout) {
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
