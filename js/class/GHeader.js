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
