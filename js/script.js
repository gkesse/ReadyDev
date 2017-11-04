//===============================================
// jQuery
//===============================================
$(document).ready(function () {
    //===============================================
    // header
    //===============================================
    // header icon
    $("header .icon").click(function () {
        $("header .menu").toggleClass("responsive");
        
        if($("header .icon").html() == '<i class="fa fa-bars"></i>'){
            $("header .icon").html('<i class="fa fa-close"></i>');
        }
        else {
            $("header .icon").html('<i class="fa fa-bars"></i>');
        }
    });
    //===============================================
    // contacts
    //===============================================
    $(".contacts .message").bind("input propertychange", function() {
        var m_max = GSetting.Instance().getData("ContactMax");
        var m_number = $(this).val().length;
        $(".contacts .number").text(m_number+" / "+m_max);
    });    
    //===============================================
    // initialization
    //===============================================
    $(".contacts .message").trigger("propertychange");
})();
