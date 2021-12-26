<?php
    header('content-type: text/css');
    require $_SERVER["DOCUMENT_ROOT"]."/webpad/code"."/php/class/GAutoload.php";
    //$lKey = GProcess::Instance()->getProcessName();
?>
/* ============================================== */
*:focus { 
    border: none;
    outline: none;
}
/* ============================================== */
html {
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}
/* ============================================== */
body {
	background-color: #222222;
    color: white;
    font-family: arial;
    font-size: 16px;
    padding: 0px;
    margin: 0px;
}
/* ============================================== */
a {
    color: white;
    text-decoration: none;
}
/* ============================================== */
button {
	background-color: #2e4053;
    color: white;
    font-family: arial;
    font-size: 16px;
    border: none;
    border-radius: 10px;
    padding: 10px;
    cursor: pointer;
}
/* ============================================== */
button:hover {
    background-color: gray;
}
/* ============================================== */
button:active {
    background-color: #2e4053;
}
/* ============================================== */
::-webkit-scrollbar {
    width: 12px;
}
/* ============================================== */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px yellow;
    border-radius: 8px;
}
/* ============================================== */
::-webkit-scrollbar-thumb {
    background: cyan;
    border-radius: 10px;
}
/* ============================================== */
::-webkit-scrollbar-thumb:hover {
    background: rgb(110, 110, 110);
}
/* ============================================== */
::-webkit-scrollbar-track-piece {
    background: rgba(0,0,0,0.4);
}
/* ============================================== */
.error {
    background-color: #c0932b;
    position: fixed;
    top: 50%;
    left: 50%;
    border-radius: 5px;
    padding: 30px 30px 10px 10px;
    transform: translate(-50%, -50%);
    max-height: 500px;
    overflow: auto;
    z-index: 2;
}
/* ============================================== */
.error_close  {
    background-color: rgba(0,0,0,0.4);
    position: absolute;
    top: 5px;
    right: 5px;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    cursor: pointer;
}
/* ============================================== */
.error_close:hover  {
    background-color: rgba(0,0,0,0.2);
}
/* ============================================== */
.error_close:active  {
    background-color: rgba(0,0,0,0.4);
}
/* ============================================== */
.error_close_fa {
    background-color: transparent;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -55%);
}
/* ============================================== */
.error_main {
    background-color: transparent;
}
/* ============================================== */
.log {
    background-color: #366b51;
    position: fixed;
    top: 50%;
    left: 50%;
    border-radius: 5px;
    padding: 30px 30px 10px 10px;
    transform: translate(-50%, -50%);
    max-height: 500px;
    overflow: auto;
    z-index: 2;
}
/* ============================================== */
.log_close  {
    background-color: rgba(0,0,0,0.4);
    position: absolute;
    top: 5px;
    right: 5px;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    cursor: pointer;
}
/* ============================================== */
.log_close:hover  {
    background-color: rgba(0,0,0,0.2);
}
/* ============================================== */
.log_close:active  {
    background-color: rgba(0,0,0,0.4);
}
/* ============================================== */
.log_close_fa {
    background-color: transparent;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -55%);
}
/* ============================================== */
.log_main {
    background-color: rgba(0,0,0,0);
}
/* ============================================== */
.phone_main {
    background-color: transparent;
    position: fixed;
    top: 0px;
    bottom: 0px;
    right: 0px;
    left: 0px;
}
/* ============================================== */
.phone_main_img {
    background-color: transparent;
    background-image: url("../data/img/car_range_rover.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    position: fixed;
    top: 0px;
    bottom: 0px;
    right: 0px;
    left: 0px;
}
/* ============================================== */
.phone_header {
    background-color: transparent;
    position: fixed;
    top: 10px;
    right: 10px;
    left: 10px;
    min-height: 40px;
}
/* ============================================== */
.phone_header_app_name {
    background-color: #c0392b;
    position: absolute;
    top: 50%;
    left: 0px;
    transform: translate(0, -50%);
    padding: 5px;
    border-radius: 5px;
    color: white;
    font-family: allan;
    font-size: 16px;
    text-decoration: none;
    z-index: 1;
}
/* ============================================== */
.phone_header_app_title {
    background-color: transparent;
    position: absolute;
    top: 50%;
    left: 0px;
    right: 0px;
    transform: translate(0, -50%);
    padding: 5px;
    border-radius: 5px;
    text-align: center;
}
/* ============================================== */
.phone_header_app_ref {
    background-color: #c0392b;
    position: absolute;
    top: 50%;
    right: 0px;
    transform: translate(0, -50%);
    padding: 5px;
    border-radius: 5px;
    color: white;
    font-family: allan;
    font-size: 16px;
    text-decoration: none;
    z-index: 1;
}
/* ============================================== */
.phone_body {
    background-color: #2e4053;
    position: fixed;
    top: 60px;
    bottom: 60px;
    right: 10px;
    left: 10px;
    border-radius: 5px;
}
/* ============================================== */
.phone_body_scroll {
    background-color: #2e4053;
    position: fixed;
    top: 60px;
    bottom: 10px;
    right: 10px;
    left: 10px;
    border-radius: 5px;
}
/* ============================================== */
.phone_body_img {
    background-color: rgba(0,0,0,0.4);
    position: fixed;
    top: 60px;
    bottom: 60px;
    right: 10px;
    left: 10px;
    border-radius: 5px;
}
/* ============================================== */
.phone_body_img_scroll {
    background-color: rgba(0,0,0,0.4);
    position: fixed;
    top: 60px;
    bottom: 10px;
    right: 10px;
    left: 10px;
    border-radius: 5px;
}
/* ============================================== */
.phone_body_page {
    background-color: rgba(0,0,0,0);
    position: absolute;
    top: 10px;
    bottom: 10px;
    left: 35px;
    right: 35px;
    border-radius: 5px;
    overflow: auto;
    text-align: center;
}
/* ============================================== */
.phone_body_page_scroll {
    background-color: rgba(0,0,0,0);
    position: absolute;
    top: 10px;
    bottom: 10px;
    left: 10px;
    right: 10px;
    border-radius: 5px;
    overflow: auto;
    text-align: center;
}
/* ============================================== */
.phone_slide_prev {
    background-color: transparent;
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translate(0, -50%);
    font-size: 24px;
    color: #85929e;
    cursor: pointer;
}
/* ============================================== */
.phone_slide_prev_img {
    background-color: transparent;
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translate(0, -50%);
    font-size: 24px;
    color: #ffffff;
    cursor: pointer;
}
/* ============================================== */
.phone_slide_next {
    background-color: transparent;
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translate(0, -50%);
    font-size: 24px;
    color: #85929e;
    cursor: pointer;
}
/* ============================================== */
.phone_slide_next_img {
    background-color: transparent;
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translate(0, -50%);
    font-size: 24px;
    color: #ffffff;
    cursor: pointer;
}
/* ============================================== */
.phone_footer {
    background-color: #2e4053;
    position: fixed;
    bottom: 10px;
    right: 10px;
    left: 10px;
    min-height: 40px;
    border-radius: 5px;
    text-align: center;
}
/* ============================================== */
.phone_footer_img {
    background-color: rgba(0,0,0,0.4);
    position: fixed;
    bottom: 10px;
    right: 10px;
    left: 10px;
    min-height: 40px;
    border-radius: 5px;
    text-align: center;
}
/* ============================================== */
.phone_title {
    background-color: rgba(0,0,0,0);
    padding: 10px 10px 20px 10px;
}
/* ============================================== */
.phone_slide {
    background-color: transparent;
}
/* ============================================== */
.phone_box {
    position: relative;
    background-color: #4d5656;
    color: white;
    display: inline-block;
    padding: 10px;
    margin: 10px;
    margin-bottom: 20px;
    border-radius: 10px;
    height: 40px;
    width: 40px;
    font-size: 14px;
    cursor: pointer;
    text-decoration: none;
}
/* ============================================== */
.phone_box_icon {
    background-color: #2e4053;
    border: 2px solid #2e4053;
    position: absolute;
    left: 10px;
    right: 10px;
    top: 10px;
    bottom: 10px;
    padding-top: 5px;
    border-radius: 50%;
}
/* ============================================== */
.phone_box:hover .phone_box_icon {
    background-color: #4d5656;
    border: 2px solid #2e4053;
}
/* ============================================== */
.phone_box_icon_fa {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);    
    font-size: 20px;
}
/* ============================================== */
.phone_box_title {
    background-color: transparent;
    position: absolute;
    left: 0px;
    right: 0px;
    bottom: -25px;
    height: 20px;
    font-family: arial;
    font-size: 12px;
}
/* ============================================== */
.phone_slide_bar {
    background-color: rgba(0,0,0,0);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
/* ============================================== */
.phone_slide_bar_dot {
    background-color: transparent;
    border: 2px solid #85929e;
    height: 15px;
    width: 15px;
    margin: 0px 5px;
    border-radius: 50%;
    display: inline-block;
    cursor: pointer;
}
/* ============================================== */
.phone_slide_bar_dot.active {
    background-color: #85929e;
}
/* ============================================== */
.phone_slide_bar_dot:hover {
    background-color: #85929e;
}
/* ============================================== */
.infos {
    background-color: rgba(0,0,0,0.4);
    padding: 10px;
    border-radius: 5px;
    display: inline-block;
    min-width: 400px;
    padding-bottom: 30px;
}
/* ============================================== */
.infos_profil {
    padding: 20px 0px;
}
/* ============================================== */
.infos_profil_img {
    background-color: rgba(0,0,0,0.4);
    border-radius: 50%;
    display: inline-block;
    width: 100px;
    haight: auto;
    padding: 10px;
}
/* ============================================== */
.infos_profil_fa {
    background-color: rgba(0,0,0,0.4);
    border-radius: 50%;
    display: inline-block;
    width: 100px;
    line-height: 100px;
    padding: 10px;
    font-size: 80px;
}
/* ============================================== */
.infos_kv {
    background-color: rgba(0,0,0,0);
    text-align: left;
    border-bottom: 1px solid #ffffff;
    padding: 10px;
}
/* ============================================== */
.infos_kv_key {
    background-color: rgba(0,0,0,0);
    text-align: left;
    display: inline-block;
    min-width: 200px;
}
/* ============================================== */
.infos_kv_value {
    background-color: rgba(0,0,0,0);
    text-align: left;
    display: inline-block;
    color: #ffffff;
}
/* ============================================== */
/* Mobile */ 
/* ---------------------------------------------- */
@media (max-width:1024px) {

}
/* ---------------------------------------------- */
@media (max-width:960px) {

}
/* ---------------------------------------------- */
@media (max-width:750px) {

}
/* ---------------------------------------------- */
@media (max-width:640px) {  

}
/* ---------------------------------------------- */
@media (max-width:550px) {
	.infos {
		min-width: 100%;
    	padding: 0px;
	}
}
/* ---------------------------------------------- */
@media (max-width:520px) {

}
/* ---------------------------------------------- */
@media (max-width:420px) {

}
/* ---------------------------------------------- */
@media (max-width:350px) {

}
/* ---------------------------------------------- */
@media (max-width:320px) {

}
/* ---------------------------------------------- */
