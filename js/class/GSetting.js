//===============================================
// GSetting
//===============================================
var GSetting = (function() {
    // private members
    var m_instance;
    var m_dataMap = {};
    //===============================================
    // public
    var Container = function() {
        return {
            setData: function(key, value) {
                m_dataMap[key] = value;
            },
            getData: function(key) {
                return m_dataMap[key];
            }
        };
    }
    //===============================================
    // instance
    return {
        Instance: function () {
            if (!m_instance) {
                m_instance = Container();
            }
            
            return m_instance;
        }
    };
})();
//===============================================
