//===============================================
// GContact
//===============================================
var GContact = (function() {
    //===============================================
    // private members
    var m_instance;
    //===============================================
    // public
    var Container = function() {
        return {
            init: function() {
                $.getJSON("/data/json/Contacts.json", function(data) {
                    var m_data = data["message"]["max"];
                    GSetting.Instance().setData("ContactMax", m_data);
                    $(".contacts .message").trigger("propertychange");
                });
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
// Initialization
//===============================================
GContact.Instance().init();