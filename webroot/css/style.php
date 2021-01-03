<?php
//===============================================
header('content-type: text/css');
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/webroot/php/class/GAutoload.php";
//===============================================
$config = array(
// app
"app_font_size" => 20,
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
    padding: 5px 10px 5px 5px;
    font-size: <?php echo $config['app_font_size']; ?>px;
    color: white;
    cursor: pointer;
}

input {
    background-color: transparent;
    border: none;
    border-radius: 0;
    padding: 5px 10px 5px 10px;
    font-size: <?php echo $config['app_font_size']; ?>px;
    color: white;
    width: 100%;
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
}
/* ============================================== */
/* debug */
.debug {

}
.debug .header {
    padding: 10px;
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
}
/* ============================================== */
