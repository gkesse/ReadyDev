<?php
//===============================================
header('content-type: text/css');
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/webroot/php/class/GAutoload.php";
//===============================================
$config = array(
// app
"app_font_size" => 20,
"login_size" => 30,
);
//===============================================
?>
/* ============================================== */
/* common */ 
/* ============================================== */
* {
    color: white;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

*:focus { 
    border: none;
    outline: none;
}

html {
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

body {
    background-color: #103010;
    font-family: Allan;
    font-size: <?php echo $config['app_font_size']; ?>px;
    text-align: left;
}

button {
    background-color: transparent;
    border: none;
    color: white;
    cursor: pointer;
    font-family: Allan;
    font-size: <?php echo $config['app_font_size']; ?>px;
}

input {
    background-color: transparent;
    border: none;
    font-size: <?php echo $config['app_font_size']; ?>px;
    color: white;
    font-family: Allan;
}

input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus {
    -webkit-text-fill-color: white ;
    transition: background-color 5000s ease-in-out 0s;
}

select {
    background-color: transparent;
    border: none;
    font-size: <?php echo $config['app_font_size']; ?>px;
    color: white;
    cursor: pointer;
}

textarea {
    background-color: transparent;
    border: none;
    border-radius: 0;
    padding: 5px 10px 5px 10px;
    font-family: arial;
    font-size: <?php echo $config['app_font_size']; ?>px;
    color: white;
    width: 100%;
    resize: none;
}

textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus {
    transition: background-color 5000s ease-in-out 0s;
}

xmp {
    padding: 10px 10px 10px 50px;
	font-size: <?php echo $config['app_font_size']; ?>px;
}

a {
    text-decoration: none;
}

b {
    color: cyan;
}

hr {
    background-color: #051039; 
    border: none;
	height: 3px; 
    width: 100%; 
    margin: auto;
    margin-top: 20px;
    text-align: center;
}

hr:after {
    content: "\f164";
    font-family: FontAwesome;
	font-size: <?php echo $config['app_font_size']; ?>px;
    background-color: #051039;
    color: white; 
    display: inline-block;
    position: relative;
    top: -20px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 20px;
}

span {
    word-break: break-all;
}
/* ============================================== */
/* custom */ 
/* ============================================== */
/* addresskey */
.addresskey_id {
    padding: 0px;
}
/* ============================================== */
/* body */
.body_id {
    padding: 100px 0px;
    max-width: 800px;
    margin: auto;
}
/* ============================================== */
/* button */
.button_id {
    padding: 0px 10px;
    background-color: #305030;
    border-radius: 5px;
    line-height: 30px;
    display: inline-block;
    vertical-align: middle;
}
/* ============================================== */
/* debug */
.debug_id {

}
.debug_id .header {
    padding: 5px 10px;
    border-bottom: 1px solid #ffffff;
    font-size: 0px;
    text-align: right;
}
.debug_id .header .item {
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
    text-align: center;
    border-radius: 5px;
    margin-left: 5px;
}
.debug_id .header .item form button {
    font-size: 18px;
    border: 2px solid #305030;
    background-color: #305030;
    width: 25px;
    border-radius: 5px;
}
.debug_id .body {
    padding: 10px;
}
/* ============================================== */
/* lineedit */
.icon_id {
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
    text-align: center;
    font-size: 18px;
    border: 2px solid #305030;
    border-radius: 5px;
    background-color: #305030;
    width: 25px;
}
/* ============================================== */
/* lineedit */
.lineedit_id {
    position: relative;
    border: 2px solid #305030;
    border-radius: 5px;
    overflow: hidden;
    min-height: 30px;
}
.lineedit_id .label {
    display: inline-block;
    vertical-align: middle;
    position: absolute;
    background-color: #305030;
    min-width: 100px;
    left: 0px;
    top: 0px;
    bottom: 0px;
}
.lineedit_id .label .icon {
    background-color: transparent;
    min-width: 30px;
    min-height: 30px;
    text-align: center;
    display: inline-block;
    vertical-align: middle;
    padding-top: 2px;
}
.lineedit_id .field {
    background-color: transparent;
    display: inline-block;
    vertical-align: middle;
    position: absolute;
    top: 0px;
    bottom: 0px;
    left: 100px;
    right: 30px;
}
.lineedit_id .field input {
    width: 100%;
    padding: 0px 10px;
}
.lineedit_id .goto {
    background-color: #305030;
    position: absolute;
    top: 0px;
    bottom: 0px;
    right: 0px;
    font-size: 18px;
    min-width: 30px;
    min-height: 30px;
    text-align: center;
    vertical-align: middle;
    padding-top: 2px;
    cursor: pointer;
}
/* ============================================== */
/* listbox */
.listbox_id {
    text-align: left;
}
.listbox_id .item {
    padding: 5px 10px;
    cursor: pointer;
}
.listbox_id .item:hover {
    background-color: #305030;
    border-radius: 5px;
}
/* ============================================== */
/* login */
.login_id {
    padding: 50px 10px;
}
.login_id .body {
    border: 1px solid #ffffff;
    max-width: 500px;
    margin: auto;
    border-radius: 5px;
    padding: 20px 10px 10px 10px;
}
.login_id .body .profil {
    border: 1px solid #ffffff;
    width: 150px;
    height: 150px;
    margin: auto;
    border-radius: 50%;
    text-align: center;
    padding-top: 10px;
    font-size: 100px;
}
.login_id .body .connect {
    text-align: right;
}
/* ============================================== */
/* main */
.main_id {
    padding: 10px;
}
/* ============================================== */
/* titlebar */
.titlebar_id {
    position: relative;
    border-bottom: 5px solid #305030;
    padding: 0px 0px 5px 0px;
}
.titlebar_id .logo {
    display: inline-block;
    vertical-align: middle;
    text-align: center;
    height: 20px;
}
.titlebar_id .logo img {
    width: auto;
    height: 20px;
}
.titlebar_id .app_name {
    display: inline-block;
    vertical-align: middle;
}
.titlebar_id .title {
    position: absolute;
    left: 95px;
    right: 30px;
    display: inline-block;
    vertical-align: middle;
    text-align: center;
}
.titlebar_id .login {
    position: absolute;
    right: 0px;
    display: inline-block;
    vertical-align: middle;
    border: 2px solid #305030;
    background-color: #305030;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
}
/* ============================================== */
/* tooltip */
.tooltip_id {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; 
}
.tooltip_id .tooltiptext {
    visibility: hidden;
    background-color: #305050;
    color: #aaaaaa;
    text-align: center;
    padding: 5px 0px;
    border-radius: 6px;
    position: absolute;
    z-index: 1;
    width: 120px;
    top: 100%;
    left: 50%;
    margin-left: -60px;
}
.tooltip_id:hover .tooltiptext {
    visibility: visible;
}
.tooltip_id .tooltiptext::after {
    content: " ";
    position: absolute;
    bottom: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent #305030 transparent;
}
/* ============================================== */
/* window */
.window_id {
    border: 1px solid #ffffff;
    border-radius: 5px;
}
/* ============================================== */
