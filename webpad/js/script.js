//===============================================
function body_onload() {

}
//===============================================
function phone_slide_prev_onclick() {
    GPhone.Instance().prevSlide();
}
//===============================================
function phone_slide_next_onclick() {
    GPhone.Instance().nextSlide();
}
//===============================================
function phone_slide_bar_dot_onclick(index) {
    var lPhone = new GPhone();
    lPhone.showSlide(index);
}
//===============================================
