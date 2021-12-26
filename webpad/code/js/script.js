//===============================================
// body
//===============================================
function body_onload(process) {

}
//===============================================
// error
//===============================================
function error_close_onclick() {
    var lError = document.getElementsByClassName("error")[0];
    lError.style.display = "none"; 
}
//===============================================
// log
//===============================================
function log_close_onclick() {
    var lLog = document.getElementsByClassName("log")[0];
    lLog.style.display = "none"; 
}
//===============================================
// phone
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
function phone_slide_bar_dot_onclick(index) {
    var lPhone = new GPhone();
    lPhone.showSlide(index);
}
//===============================================
