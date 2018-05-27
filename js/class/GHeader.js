//===============================================
var GHeader = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {

            },
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
                alert(lHeaderMenu.className);
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
GHeader.Instance().init();
//===============================================
