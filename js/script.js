//===============================================
// jQuery
//===============================================
$(document).ready(function () {
    //===============================================
    // Header
    //===============================================
    // Header Menu Bar
    $(".hdmb").click(function () {
        $(".hdmn").toggleClass("rwd");
        
        if($(".hdmb").html() == '<i class="fa fa-bars"></i>'){
            $(".hdmb").html('<i class="fa fa-close"></i>');
        }
        else {
            $(".hdmb").html('<i class="fa fa-bars"></i>');
        }
    });
    //===============================================
    // Contacts
    //===============================================
    // Contacts Message
    $(".contacts .message").bind("input propertychange", function() {
        var m_max = GSetting.Instance().getData("ContactMax");
        var m_number = $(this).val().length;
        $(".contacts .number").text(m_number+" / "+m_max);
    });    
    //===============================================
    // Window
    //===============================================
    // Window Click
    $(window).click(function (e) {
        // Admin Disconnection Dialog
        if(e.target.className == "addd mdla") {
            $(".addd").hide();
        }
    });
    //===============================================
    // Admin
    //===============================================
    // Admin Disconnection
    $(".admd").click(function () {
        // Admin Disconnection Dialog
        $(".addd").show();
    });
    //===============================================
    // Admin Disconnection Dialog Close
    $(".addc").click(function () {
        // Disconnection Dialog
        $(".addd").hide();
    });
    //===============================================
    // Initialization
    //===============================================
    // Contacts Message
    $(".contacts .message").trigger("propertychange");
    //===============================================
})();
//===============================================
