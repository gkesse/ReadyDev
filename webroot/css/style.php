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
    font-size: <?php echo $config['app_font_size']; ?>px;
    color: white;
    cursor: pointer;
    font-family: Allan;
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
/* main */
.main {
    padding: 10px;
}
/* ============================================== */
/* body */
.body {
    padding: 100px 0px;
    max-width: 800px;
    margin: auto;
}
/* ============================================== */
/* window */
.window {
    border: 1px solid #ffffff;
    border-radius: 5px;
}
/* ============================================== */
/* lineedit */
.lineedit {
    position: relative;
    border: 2px solid #305030;
    border-radius: 5px;
    overflow: hidden;
    min-height: 30px;
}
.lineedit .label {
    position: absolute;
    background-color: #305030;
    min-width: 100px;
    left: 0px;
    top: 0px;
    bottom: 0px;
}
.lineedit .label .icon {
    background-color: transparent;
    min-width: 30px;
    min-height: 30px;
    text-align: center;
    display: inline-block;
    vertical-align: middle;
    padding-top: 2px;
}
.lineedit .field {
    position: absolute;
    top: 0px;
    bottom: 0px;
    left: 100px;
    right: 30px;
}
.lineedit .field .input {
    background-color: transparent;
    width: 100%;
    padding: 0px 10px;
    min-height: 30px;
    display: inline-block;
    vertical-align: middle;
    padding-bottom: 10px;
}
.lineedit .goto {
    background-color: transparent;
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
/* login */
.login {
    padding: 50px 10px;
}
.login .content {
    border: 1px solid #ffffff;
    max-width: 500px;
    margin: auto;
    border-radius: 5px;
    padding: 20px 10px 10px 10px;
}
.login .content .profil {
    border: 1px solid #ffffff;
    width: 150px;
    height: 150px;
    margin: auto;
    border-radius: 50%;
    text-align: center;
    padding-top: 10px;
    font-size: 100px;
}
/* ============================================== */
/* debug */
.debug {

}
.debug .header {
    padding: 5px 10px;
    border-bottom: 1px solid #ffffff;
    font-size: 0px;
    text-align: right;
}
.debug .header .item {
    display: inline-block;
    border: 1px solid transparent;
    font-size: <?php echo $config['app_font_size']; ?>px;
    cursor: pointer;
}
.debug .body {
    padding: 10px;
}
/* ============================================== */
/* listbox */
.listbox {
    text-align: left;
}
.listbox .item {
    padding: 5px 10px;
    cursor: pointer;
}
.listbox .item:hover {
    background-color: #305030;
    border-radius: 5px;
}
/* ============================================== */
/* addresskey */
.addresskey {
    padding: 0px;
}
/* ============================================== */
/* titlebar */
.titlebar {
    border-bottom: 5px solid #305030;
    border-radius: 0px;
    padding: 0px 0px 5px 0px;
    overflow:hidden;
}
.titlebar .left {
    font-size: <?php echo $config['app_font_size']; ?>px;
    float: left;
}
.titlebar .left img {
    width: auto;
    height: <?php echo $config['app_font_size']; ?>px;
}
.titlebar .left.app_name {
    padding: 0px 0px 0px 5px;
}
.titlebar .center {
    width: auto;
    text-align: center;
    padding: 0px 10px;
}
.titlebar .right {
    float: right;
}
.titlebar .right .login {
    border: 2px solid #aaaaaa;
    width: <?php echo $config['login_size']; ?>px;
    height: <?php echo $config['login_size']; ?>px;
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
    padding: 2px 0px 0px 0px;
}
/* ============================================== */
/* tooltip */
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; 
}
.tooltip .tooltiptext {
    visibility: hidden;
    background-color: #305030;
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
.tooltip:hover .tooltiptext {
    visibility: visible;
}
.tooltip .tooltiptext::after {
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
