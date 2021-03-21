<?php
//===============================================
header('content-type: text/css');
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/webroot/php/class/GAutoload.php";
//===============================================
$config = array(
// app
"app_bg_color" => "#102030",
"app_light_color" => "#304050",
"app_font_size" => 20,
"app_font_family" => "Allan",
"app_font_color" => "#ffffff",
"app_icon_size" => 16,
"login_size" => 30,
"script_font_size" => 16,
);
//===============================================
?>
/* ============================================== */
/* common */ 
/* ============================================== */
* {
    color: <?php echo $config['app_font_color']; ?>;
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
    scrollbar-color: <?php echo $config['app_light_color']; ?> #051039;
    scrollbar-width: auto;
}

body {
    background-color: <?php echo $config['app_bg_color']; ?>;
    font-family: <?php echo $config['app_font_family']; ?>;
    font-size: <?php echo $config['app_font_size']; ?>px;
    text-align: left;
}

button {
    background-color: transparent;
    border: none;
    color: <?php echo $config['app_font_color']; ?>;
    cursor: pointer;
    font-family: <?php echo $config['app_font_family']; ?>;
    font-size: <?php echo $config['app_font_size']; ?>px;
}

input {
    background-color: transparent;
    border: none;
    font-size: <?php echo $config['app_font_size']; ?>px;
    color: <?php echo $config['app_font_color']; ?>;
    font-family: <?php echo $config['app_font_family']; ?>;
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
    font-family: <?php echo $config['app_font_family']; ?>;
    font-size: <?php echo $config['app_font_size']; ?>px;
    color: <?php echo $config['app_font_color']; ?>;
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
    color: <?php echo $config['app_font_color']; ?>; 
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

table {
    border-collapse: collapse;
}

table thead tr {
    background-color: <?php echo $config['app_light_color']; ?>;
    text-align: left;
}

table th,  table td {
    padding: 5px 10px;
    border: 1px solid #aaaaaa;
}

table th {
    font-weight: normal;
}

 table td {
    color: #aaaaaa;
}
/* ============================================== */
/* custom */ 
/* ============================================== */
/* app_name */
.app_name {
    top: 5px;
    left: 30px;
}
/* ============================================== */
/* bg */
.bg {
    background-color: rgba(255, 255, 255, 0.2);
}
/* ============================================== */
/* body */
.body {
    position: relative;
    max-width: 1000px;
    margin: auto;
    padding-top: 0px;
    padding-bottom: 0px;
}
/* ============================================== */
/* body2 */
.body2 {
    border: 1px solid #ffffff;
    max-width: 500px;
    margin: auto;
    border-radius: 5px;
    padding: 20px 10px 10px 10px;
}
/* ============================================== */
/* body3 */
.body3 {
    background-color: <?php echo $config['app_light_color']; ?>;
    min-height: 300px;
    border-radius: 5px;
    padding: 10px;
    text-align: center;
}
/* ============================================== */
/* body4 */
.body4 {
    border-radius: 5px;
    text-align: center;
}
/* ============================================== */
/* border */
.border {
    border: 1px solid <?php echo $config['app_light_color']; ?>;
    padding: 10px 10px;
}
/* ============================================== */
/* box */
.box {
    position: relative;
    border-bottom: 5px solid <?php echo $config['app_light_color']; ?>;
    padding-bottom: 5px;
    min-height: 40px;
    overflow: hidden;
}
/* ============================================== */
/* box2 */
.box2 {
    position: relative;
    min-height: 40px;
    overflow: hidden;
}
/* ============================================== */
/* box3 */
.box3 {
    padding: 50px 10px;
}
/* ============================================== */
/* box4 */
.box4 {
    padding: 10px;
    overflow: hidden;
    overflow-x: auto;
}
/* ============================================== */
/* box5 */
.box5 {
    display: inline-block;
}
/* ============================================== */
/* button */
.button {
    display: inline-block;
    line-height: 30px;
    background-color: <?php echo $config['app_light_color']; ?>;
    padding: 0px 10px;
    border-radius: 5px;
    margin: 5px 0px;
}
.button:not(:last-child) {
    margin-right: 5px;
}
/* ============================================== */
/* button2 */
.button2 {
    display: block;
    line-height: 30px;
    padding: 2px 10px;
    border-radius: 5px;
    margin: 5px 0px;
    width: 100%;
    text-align: left;
}
.button2:hover {
    background-color: <?php echo $config['app_light_color']; ?>;
}
/* ============================================== */
/* button3 */
.button3 {
    top: 2px;
    left: 10px;
    bottom: 0px;
    right: 35px;
}
/* ============================================== */
/* button4 */
.button4 {
    width: 100%;
    height: 100%;
    text-align: left;
}
/* ============================================== */
/* center */
.center {
    text-align: center;
}
/* ============================================== */
/* content */
.content {
    background-color: <?php echo $config['app_light_color']; ?>;
    padding: 20px 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    color: #ffffff;
}
/* ============================================== */
/* content2 */
.content2 {
    border: 1px solid #305050;
}
/* ============================================== */
/* cursor */
.cursor {
    cursor: pointer;
}
/* ============================================== */
/* date */
.date {
    background-color: <?php echo $config['app_light_color']; ?>;
    top: 5px;
    left: 0px;
    border-radius: 5px;
    min-width: 90px;
    padding: 2px 0px;
    text-align: center;
}
/* ============================================== */
/* debug */
.debug {
    padding: 10px;
    font-family: "Courier Prime";
    font-size: 16px;
    overflow: hidden;
    overflow-x: auto;
    white-space: nowrap;
}
/* ============================================== */
/* edit */
.edit {
    position: relative;
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    border-radius: 5px;
    min-height: 30px;
    margin-bottom: 20px;
}
/* ============================================== */
/* error */
.error {
    color: #ffaa55;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
}
/* ============================================== */
/* family */
.family {
    font-family: "Archivo Narrow";
}
/* ============================================== */
/* field */
.field {
    position: absolute;
    top: 0px;
    bottom: 0px;
    left: 30px;
    right: 0px;
}
/* ============================================== */
/* field2 */
.field2 {
    position: absolute;
    top: 0px; 
    bottom: 0px;
    right: 0px;
    left: 120px;
}
/* ============================================== */
/* file */
.file {
    display: block;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
    width: 100%;
    text-align: left;
}
.file:hover {
    background-color: <?php echo $config['app_light_color']; ?>;
}
/* ============================================== */
/* float */
.float {
    position: absolute;
}
/* ============================================== */
/* float2 */
.float2 {
    position: relative;
}
/* ============================================== */
/* html */
.html {
    position: relative;
}
/* ============================================== */
/* header */
.header {
    border-bottom: 1px solid #ffffff;
    margin-bottom: 10px;
    padding-bottom: 10px;
}
/* ============================================== */
/* header2 */
.header2 {
    border-bottom: 2px solid <?php echo $config['app_light_color']; ?>;
    margin-bottom: 10px;
    padding-bottom: 10px;
}
/* ============================================== */
/* icon */
.icon {
    margin-right: 5px;
}
/* ============================================== */
/* icon2 */
.icon2 {
    width: 100%;
    height: 100%;
    text-align: center;
}
/* ============================================== */
/* icon3 */
.icon3 {
    display: inline-block;
    font-size: 120px;
}
/* ============================================== */
/* icon4 */
.icon4 {
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
    text-align: center;
    font-size: 18px;
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    border-radius: 5px;
    background-color: <?php echo $config['app_light_color']; ?>;
    width: 25px;
}
/* ============================================== */
/* input */
.input {
    width: 100%;
    height: 100%;
    padding: 0px 10px;
}
/* ============================================== */
/* input2 */
.input2 {
    display: inline-block;
    vertical-align: middle;
    width: 100%;
    height: 100%;
    padding: 0px 10px;
}
/* ============================================== */
/* item */
.item {
    display: inline-block;
    vertical-align: middle;
}
/* ============================================== */
/* item2 */
.item2 {
    border: 1px solid #305050;
    padding: 10px;
    overflow: hidden;
    overflow-x: auto;
}
/* ============================================== */
/* item3 */
.item3 {
    font-family: "Archivo Narrow";
    font-size: 18px;
    color: #aaaaaa;
}
/* ============================================== */
/* item4 */
.item4 {
    background-color: <?php echo $config['app_light_color']; ?>;
    font-family: "Archivo Narrow";
    font-size: 18px;
}
/* ============================================== */
/* item5 */
.item5 {
    background-color: <?php echo $config['app_light_color']; ?>;
}
/* ============================================== */
/* item6 */
.item6 {
    font-family: "Archivo Narrow";
    font-size: 18px;
    color: #ffffff;
}
/* ============================================== */
/* item7 */
.item7 {
    background-color: <?php echo $config['app_light_color']; ?>;
    display: inline-block;
    vertical-align: middle;
    border-radius: 5px;
    padding: 5px 10px;
}
/* ============================================== */
/* key */
.key {
    background-color: #305050;
    position: absolute;
    top: 0px; 
    bottom: 0px; 
    left: 0px;
    min-width: 120px;
}
/* ============================================== */
/* label */
.label {
    position: absolute;
    background-color: <?php echo $config['app_light_color']; ?>;
    min-width: 30px;
    left: 0px;
    top: 0px;
    bottom: 0px;
}
/* ============================================== */
/* label2 */
.label2 {
    display: inline-block;
    vertical-align: middle;
    padding: 0px 10px;
}
/* ============================================== */
/* left */
.left {
    text-align: left;
}
/* ============================================== */
/* login */
.login {
    right: 5px;
    top: 5px;
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    background-color: <?php echo $config['app_light_color']; ?>;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
}
/* ============================================== */
/* logo */
.logo {
    width: auto;
    height: 20px;
    top: 5px;
    left: 5px;
}
/* ============================================== */
/* main */
.main {
    padding: 10px;
}
/* ============================================== */
/* margin */
.margin {
    margin-bottom: 10px;
}
/* ============================================== */
/* margin2 */
.margin2 {
    margin-right: 10px;
}
/* ============================================== */
/* margin3 */
.margin3 {
    margin-bottom: 10px;
}
/* ============================================== */
/* menu */
.menu {
    position: absolute;
    display: inline-block;
    right: 5px;
}
.menu2 {
    background-color: transparent;
}
.menu3 {
    padding: 0px 5px;
    cursor: pointer;
}
.menu4 {
    display: none;
    position: absolute;
    right: 0;
    background-color: <?php echo $config['app_bg_color']; ?>;
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    border-radius: 5px;
    padding: 5px;
    min-width: 200px;
    z-index: 1;
}
.menu2:hover .menu4 {
    display: block;
}
/* ============================================== */
/* menu5 */
.menu5 {
    background-color: transparent;
    padding: 2px 10px;
    display: block;
    border-radius: 5px;
}
.menu5:hover {
    background-color: <?php echo $config['app_light_color']; ?>;
}
/* ============================================== */
/* menu6 */
.menu6 {
    display: none;
    position: absolute;
    left: 0;
    background-color: <?php echo $config['app_bg_color']; ?>;
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    border-radius: 5px;
    padding: 5px;
    min-width: 200px;
    z-index: 1;
}
.menu2.click .menu6 {
    display: block;
}
/* ============================================== */
/* network */
.network {
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
    text-align: center;
    font-size: 18px;
    border-radius: 50%;
    background-color: <?php echo $config['app_light_color']; ?>;
    width: 40px;
    line-height: 40px;
}
/* ============================================== */
/* overflow */
.overflow {
    overflow: hidden;
    overflow-x: auto;
}
/* ============================================== */
/* output */
.output {
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    padding: 10px;
    border-radius: 5px;
    font-family: "Courier Prime";
    width: 100%;
    text-align: left;
    font-size: <?php echo $config['script_font_size']; ?>px;
}
/* ============================================== */
/* profile */
.profile {
    border: 1px solid #ffffff;
    width: 150px;
    height: 150px;
    margin: auto;
    border-radius: 50%;
    text-align: center;
    padding-top: 10px;
    font-size: 100px;
    margin-bottom: 20px;
}
/* ============================================== */
/* profile2 */
.profile2 {
    display: inline-block;
    background-color: #305050;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    padding-top: 10px;
    margin-top: 10px;
    margin-bottom: 20px;
}
/* ============================================== */
/* right */
.right {
    text-align: right;
}
/* ============================================== */
/* row */
.row {
    position: relative;
    border: 1px solid #305050;
    margin-bottom: 10px;
    min-height: 30px;
}
/* ============================================== */
/* row2 */
.row2 {
    min-height: 35px;
}
/* ============================================== */
/* sep */
.sep {
    font-size: 16px;
    padding: 0px 5px;
}
/* ============================================== */
/* sep2 */
.sep2 {
    font-size: 16px;
    margin: 0px 5px;
}
/* ============================================== */
/* setting */
.setting {
    top: 6px;
    right: 10px;
}
/* ============================================== */
/* success */
.success {
    color: #aaff55;
    text-align: center;
    margin-bottom: 20px;
}
/* ============================================== */
/* textarea */
.textarea {
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    padding: 10px;
    border-radius: 5px;
    font-family: "Courier Prime";
    font-size: <?php echo $config['script_font_size']; ?>px;
    width: 100%;
}
/* ============================================== */
/* time */
.time {
    background-color: <?php echo $config['app_light_color']; ?>;
    top: 5px;
    right: 0px;
    min-width: 80px;
    text-align: center;
    padding: 2px 0px;
    border-radius: 5px;
}
/* ============================================== */
/* title */
.title {
    left: 110px;
    right: 35px;
    right: 110px;
    top: 5px;
    text-align: center;
}
/* ============================================== */
/* title2 */
.title2 {
    background-color: #305050;
    padding: 5px 10px;
    text-align: center;
}
/* ============================================== */
/* title3 */
.title3 {
    background-color: #305050;
    border: 1px solid #aaaaaa;
    border-bottom-color: transparent;
    padding: 5px 10px;
    text-align: center;
}
/* ============================================== */
/* view */
.view {
    top: 5px;
    left: 95px;
    right: 95px;
    text-align: center;
}
/* ============================================== */
/* view2 */
.view2 {
    background-color: <?php echo $config['app_light_color']; ?>;
    display: inline-block;
    vertical-align: middle;
    text-align: center;
    padding: 2px 10px;
    border-radius: 5px;
}
/* ============================================== */
/* window */
.window {
    border: 1px solid #aaaaaa;
    border-radius: 5px;
    padding: 10px;
}
/* ============================================== */
/* mobile */ 
/* ============================================== */
@media (max-width:1024px) {

}
/* ============================================== */
@media (max-width:960px) {

}
/* ============================================== */
