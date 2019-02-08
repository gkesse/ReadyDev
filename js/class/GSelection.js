//===============================================
var GSelection = (function() {
    //===============================================
    var m_instance;
    var m_range;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                m_range = null;
			},
            //===============================================
            save: function() {
                var lSelection = document.getSelection();
                m_range = lSelection.getRangeAt(0);
            },
            //===============================================
            load: function() {
                if(!m_range) return;
                var lSelection = document.getSelection();
                lSelection.removeAllRanges();
                lSelection.addRange(m_range);
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
GSelection.Instance().init();
//===============================================
