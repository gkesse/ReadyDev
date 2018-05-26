//===============================================
var GHeader = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            openHeaderMenu: function(obj) {
				var lHeaderMenu = document.getElementById("HeaderMenu");
				var lBars = '<i class="fa fa-bars"></i>';
				if(lBars == obj.innerHTML) {
					lBars = '<i class="fa fa-close"></i>';
					lHeaderMenu.className += " RWD";
				}
				else {
					var lClassName = lHeaderMenu.className;
					lHeaderMenu.className = lClassName.replace(" RWD", "");
				}
				obj.innerHTML = lBars;	
            },
            //===============================================
            openDisconnect: function() {
				var lLogout = document.getElementById("Logout");
				var lLogoutCtn = document.getElementById("LogoutCtn");
				var lClassName = lLogoutCtn.className;
				lLogoutCtn.className = lClassName.replace(" ModalAnimHide", " ModalAnimShow");
				lLogout.style.display = "block";
            },
            //===============================================
            disconnectClose: function() {
				var lLogout = document.getElementById("Logout");
				var lLogoutCtn = document.getElementById("LogoutCtn");
				var lClassName = lLogoutCtn.className;
				lLogoutCtn.className = lClassName.replace(" ModalAnimShow", " ModalAnimHide");
				setTimeout(function() {
					lLogout.style.display = "none";
				}, 400);
            },
            //===============================================
            windowEvent: function() {
				window.onclick = function(event) {
					var lLogout = document.getElementById("Logout");
					var m_target = event.target;
					if(m_target == lLogout) {
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
