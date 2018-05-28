<?php
    header('content-type: text/css');
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    $lStyle = GJson::Instance()->getData("data/json/style.json");
?>
/* ============================================== */
/* Global */ 
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
}

body {
    background: #051039;
    font-family: arial;
    font-size: 16px;
    text-align: center;
}

a {
    text-decoration: none;
}

button {
    background: transparent;
    border: none;
    padding: 5px 10px 5px 5px;
    font-size: 16px;
    color: white;
    cursor: pointer;
}

hr {
    margin: 20px 10px 0 10px;
}

input {
    background: none;
    border: none;
    border-radius: 0;
    padding: 5px 10px 5px 10px;
    font-size: 16px;
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
    background: transparent;
    border: none;
    font-size: 16px;
    color: white;
    cursor: pointer;
}

textarea {
    background: transparent;
    border: none;
    border-radius: 0;
    padding: 5px 10px 5px 10px;
    font-family: arial;
    font-size: 16px;
    color: white;
    width: 100%;
    resize: none;
}

textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus {
    transition: background-color 5000s ease-in-out 0s;
}

ul {
    list-style: none;
}

xmp {
    padding: 10px 10px 10px 50px;
	font-size: 16px;
}

b {
    color: cyan;
	font-size: 18px;
}

/* ============================================== */
/* Prettify */ 
/* ============================================== */

.linenums li {
    list-style-type: decimal;
}

/* ============================================== */
/* HtmlPage */
/* ============================================== */

.HtmlPage {
    position: relative;
}

/* ============================================== */
/* BodyPage */
/* ============================================== */

.BodyPage {
    position: relative;
}

.BodyPage.Mrg {
    max-width: 1000px;
    margin: auto;
}

.BodyPage.Pdd {
    padding-top: 250px;
    padding-bottom: 250px;
}

/* ============================================== */
/* MainPage */
/* ============================================== */

.MainPage {
    background: #051039;
    border: 10px solid transparent;
    border-image: url("/data/img/defaults/border.png") 30 round;
    -webkit-border-image: url("/data/img/defaults/border.png") 30 round; 
    -moz-border-image: url("/data/img/defaults/border.png") 30 round; 
    -o-border-image: url("/data/img/defaults/border.png") 30 round;
    padding-bottom: 0px;
}

/* ============================================== */
/* Header */
/* ============================================== */

.Header .Menu {
    background: rgba(255,255,255,0.2);
    text-align: left;
    font-size: 0px;
    line-height: 40px;
    position: relative;
    padding-right: 10px;
    margin-bottom: 10px;
}

.Header .Menu .Item {
    display: inline-block;
    vertical-align: middle;
}

.Header .Menu .Item .Title {
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    font-size: 25px;
    font-family: Akronim;
    color: cyan;
    padding: 0 20px 0 10px;
    display: inline-block;
    vertical-align: middle;
}

.Header .Menu .Item .Link {
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    font-size: 18px;
    font-family: Aclonica;
    padding: 0 10px 0 10px;
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
}

.Header .Menu .Item .Link:hover {
    border-bottom: 5px solid #89a830;
}

.Header .Menu .Item .Link.Active {
    border-bottom: 5px solid #f67b20;
}

.Header .Menu .Bars {
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    font-size: 25px;
    font-family: Akronim;
    color: white;
    padding: 0 10px 0 10px;
    display: none;
    vertical-align: middle;
    position: absolute;
    top: 0;
    right: 0;
    cursor: pointer;
}

/* ============================================== */
/* Footer */ 
/* ============================================== */

.Footer {
    background: rgba(255,255,255,0.2);
    position: absolute;
    bottom: 35px;
    left: 0px;
    right: 0px;
}

/* ============================================== */
/* Parallax */
/* ============================================== */

.Parallax {
    position: relative;
}

.Parallax .Img {
    background-image: url("/data/img/defaults/erreur.jpg");
    min-height: 500px;
    position: relative;
    opacity: 0.65;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    -webkit-background-size: cover; 
    -moz-background-size: cover; 
    -o-background-size: cover; 
}

.Parallax .Img .Caption {
    background-color: #051039;
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    opacity: 0.8;
}

.Parallax .Img .Caption .Text {
    background-color: #111;
    color: #fff;
    padding: 18px;
    font-size: 25px;
    display: inline;
    font-family: Anton;
    letter-spacing: 5px;
}

.Parallax .Body {
    position: relative;
    min-height: 500px;
    background-color: #803300;
    font-size: 20px;
    color: white;
    padding: 10px;
    font-family: Archivo Narrow;
}

.Parallax.Scroll .Img {
    background-attachment: scroll;
}

.Parallax.Error .Img {
    min-height: 500px;
    background-image: url("/data/img/defaults/erreur.png");
}

.Parallax.Error .Body {
    min-height: 50px;
    text-align: center;
    font-size: 25px;
    font-family: Allan;
}

.Parallax.Item2 .Img {
    background-image: url("/data/img/defaults/erreur.jpg");
}

.Parallax.Item2 .Body {
    background-color: #006666;
}

.Parallax.Item3 .Img {
    background-image: url("/data/img/defaults/erreur.jpg");
}

.Parallax.Item3 .Body {
    background-color: #2d2d86;
}

.Parallax.Item4 .Img {
    background-image: url("/data/img/defaults/erreur.jpg");
}

.Parallax.Item4 .Body {
    background-color: #00004d;
}


/* ============================================== */
/* Page */ 
/* ============================================== */

/* Page Background */
.pgBg {
    background: transparent;
}

/* Page Body */
.pgBd {
    max-width: 700px;
}

/* Page Content */
.pgCt00 {
    padding: 0 10px;
}

.pgCt05 {
    padding: 5px 10px;
}

.pgCt10 {
    padding: 10px 10px;
}

.pgCt20 {
    padding: 20px 10px;
}

/* Page Container */
.pgCr05 {
    padding: 5px 0;
}

.pgCr10 {
    padding: 10px 0;
}

.pgCr20 {
    padding: 20px 0px;
}

/* Page Constant */
.pgCc05 {
    padding: 5px;
}

 /* Page Row */
.pgRw {
    font-size: 0;
    padding: 5px;
}

/* Page Column */
.pgCl01 {width: 4.16%;}
.pgCl02 {width: 8.33%;}
.pgCl03 {width: 12.5%;}
.pgCl04 {width: 16.66%;}
.pgCl05 {width: 20.83%;}
.pgCl06 {width: 25%;}
.pgCl07 {width: 29.16%;}
.pgCl08 {width: 33.33%;}
.pgCl09 {width: 37.5%;}
.pgCl10 {width: 41.66%;}
.pgCl11 {width: 45.83%;}
.pgCl12 {width: 50%;}
.pgCl13 {width: 54.16%;}
.pgCl14 {width: 58.33%;}
.pgCl15 {width: 62.5%;}
.pgCl16 {width: 66.66%;}
.pgCl17 {width: 70.83%;}
.pgCl18 {width: 75%;}
.pgCl19 {width: 79.16%;}
.pgCl20 {width: 83.33%;}
.pgCl21 {width: 87.5%;}
.pgCl22 {width: 91.66%;}
.pgCl23 {width: 95.83%;}
.pgCl24 {width: 100%;}

[class*="pgCl"] {
    display: inline-block;
    vertical-align: top;
    font-size: 16px;
    padding: 5px;
}

/* ============================================== */
/* Pdf Format */ 
/* ============================================== */

.pdfBd {
    max-width: 1000px;
}

.pdfHt {
    height: 640px;
}


/* ============================================== */
/* Background */
/* ============================================== */

.Background {
    min-height: 300px;
    background-color: #333333;
    background-image: url("<?php echo $lStyle["background"]["item1"]["img"]; ?>");
    background-position: center;
    position: absolute;
}

.Background.Item1 {
    background-image: url("/data/img/defaults/fete.gif"), url("/data/img/defaults/fond.jpg");
    background-position: center top, left top;
    background-repeat: no-repeat, no-repeat;    
    background-size: auto, 100% 100%;    
    top: 0px;
    left: 0px;
    right: 0px;
    z-index: -1;
    border: 10px solid transparent;
    border-image: url("/data/img/defaults/border.png") 30 round;
    -webkit-border-image: url("/data/img/defaults/border.png") 30 round; 
    -moz-border-image: url("/data/img/defaults/border.png") 30 round; 
    -o-border-image: url("/data/img/defaults/border.png") 30 round;
}

.Background.Item2 {
    top: 300px;
    bottom: 300px;
    left: 0px;
    right: 0px;
    z-index: -1;
    background-image: url("<?php echo $lStyle["background"]["item2"]["img"]; ?>");
}

.Background.Item3 {
    bottom: 0px;
    left: 0px;
    right: 0px;
    z-index: -1;
    background-image: url("<?php echo $lStyle["background"]["item3"]["img"]; ?>");
    border: 10px solid transparent;
    border-image: url("/data/img/defaults/border.png") 30 round;
    -webkit-border-image: url("/data/img/defaults/border.png") 30 round; 
    -moz-border-image: url("/data/img/defaults/border.png") 30 round; 
    -o-border-image: url("/data/img/defaults/border.png") 30 round;
}

/* ============================================== */
/* Modal */ 
/* ============================================== */

.Modal {
    display: none;
    position: fixed;
    z-index: 2;
    padding: 10px;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100vh;
    background-image: url("<?php echo $lStyle["modal"]["img"]; ?>");
    background-color: rgba(255,255,255,0.2);
    overflow: auto;
    text-align: left;
}

.Modal .Body {
    background: #051039;
    margin: auto;
    max-width: 500px;
    position: relative;
}


.Modal .Body.AnimateShow {
    animation-name: ModalBodyAnimateShow;
    animation-duration: 0.4s
    -webkit-animation-name: ModalBodyAnimateShow;
    -webkit-animation-duration: 0.4s;
    -moz-animation-name: ModalBodyAnimateShow;
    -moz-animation-duration: 0.4s;
    -o-animation-name: ModalBodyAnimateShow;
    -o-animation-duration: 0.4s;
}

@keyframes ModalBodyAnimateShow {
    from {top:-400px; opacity:0;}
    to {top:0; opacity:1}
}

@-webkit-keyframes ModalBodyAnimateShow {
    from {top:-400px; opacity:0;} 
    to {top:0; opacity:1;}
}

.Modal .Body.AnimateHide {
    animation-name: ModalBodyAnimateHide;
    animation-duration: 0.4s
    -webkit-animation-name: ModalBodyAnimateHide;
    -webkit-animation-duration: 0.4s;
    -moz-animation-name: ModalBodyAnimateHide;
    -moz-animation-duration: 0.4s;
    -o-animation-name: ModalBodyAnimateHide;
    -o-animation-duration: 0.4s;
}

@keyframes ModalBodyAnimateHide {
    from {top:0; opacity:1}
    to {top:-400px; opacity:0}
}

@-webkit-keyframes ModalBodyAnimateHide {
    from {top:0; opacity:1}
    to {top:-400px; opacity:0}
}

.Modal .Body .Title {
    background-color: rgba(255,255,255,0.2);
    padding: 10px 35px 10px 10px;
    font-family: Anton;
    font-size: 25px;
}

.Modal .Body .Text {
    padding: 10px;
}

.Modal .Body .Text .Desc {
    margin-bottom: 10px;    
}

.Modal .Body .Text .Row {
    margin: 4px 0px;
    position: relative;
}

.Modal .Body .Text .Row .Label {
    background-color: rgba(255,255,255,0.2);
    min-width: 150px; 
    line-height: 30px;   
    padding: 0px 10px;
    position: absolute;
    top: 0px;
    left: 0px;
}

.Modal .Body .Text .Row .Field {
    border: 1px solid rgba(255,255,255,0.2);
    height: 30px;   
    margin-left: 150px;
}

.Modal .Body .Text .Row .Field .Data {
    border: 1px solid rgba(255,255,255,0.2);
    height: 100%;   
    width: 100%;
    padding: 5px 10px;
}

.Modal .Body .Text .Col {
    margin: 4px 0px;
    position: relative;
}

.Modal .Body .Text .Col .Label {
    background-color: rgba(255,255,255,0.2);
    padding: 5px 10px;
}

.Modal .Body .Text .Col .Label.File {
    background-color: transparent;
    border: 1px solid rgba(255,255,255,0.2);
    color: #051039;
    font-weight: bold;
}

.Modal .Body .Text .Col .Field {
    border: 1px solid rgba(255,255,255,0.2);
}

.Modal .Body .Text .Col .Field .Data {
    min-height: 300px;   
    padding: 5px 10px;
    overflow: auto; 
}

.Modal .Body .Text .Col .Field .Data.View {
    padding: 5px;
}

.Modal .Body .Text .Col .Field .Data.Min {
    min-height: 0px;
}

.Modal .Body .Text .Col .Field .Data.Center {
    text-align: center;
}

.Modal .Body .Text .ButtonMap {
    text-align: right;
    font-size: 0px;
    padding-top: 10px;
}

.Modal .Body .Text .ButtonMap .Item {
    display: inline-block;
    background-color: rgba(255,255,255,0.2);
    padding: 0px 10px;
    line-height: 30px; 
    font-size: 16px;
    cursor: pointer;
    margin: 5px;
}

.Modal .Body .Text .ButtonMap .Item:hover {
    background-color: rgba(255,255,255,0.4);
}

.Modal .Body .Text .ButtonMap .Item:active {
    background-color: rgba(255,255,255,0.2);
}

.Modal .Body .Text .ButtonMap.Left {
    text-align: left;
}

.Modal .Body .Text .ButtonMap.Center {
    text-align: center;
}

.Modal .Body .Text .ButtonMap .UploadItem.Active {
    background-color: #051039;
    color: white;
}

.Modal .Msg {
    background-color: rgba(255,255,255,0.2);
    margin: auto;
    max-width: 500px;
    padding: 5px 10px;
    font-family: Archivo Narrow;
    color: white;
    display: none;
}

/* ============================================== */
/* Button */
/* ============================================== */

.Button {
    background-color: rgba(255,255,255,0.2);
    width: 30px;
    line-height: 30px;
    border-radius: 15px;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
}

.Button:hover {
    background-color: rgba(255,255,255,0.4);
}

.Button:active {
    background-color: rgba(255,255,255,0.2);
}

.Button.Close {
    position: absolute;
    top: 5px;
    right: 5px;
}

.Button.BackgroundMod1 {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 1;
    color: #ff9933;
}

.Button.BackgroundMod2 {
    position: absolute;
    top: 330px;
    right: 10px;
    z-index: 1;
    color: #ff9933;
}

.Button.BackgroundMod3 {
    position: absolute;
    bottom: 260px;
    right: 10px;
    z-index: 1;
    color: #ff9933;
}

.Button.HomeImg {
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 1;
    color: #ff9933;
}

.Button.HomeText {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 1;
    color: #ff9933;
}

/* ============================================== */
/* Custom */ 
/* ============================================== */

/* background */
.bgra {
    background: rgba(255,255,255,0.2);
}

.bgrb {
    background: rgba(1,1,1,0.2);
}

.bgrc {
    background: #051039;
}

.bgrd {
    background: #89a830;
}

.bgre {
    background: #f67b20;
}

.bgrf {
    background: #ffcc00;
}

.bgrg {
    background: #333333;
}

.bgrh {
    background: #374061;
}

/* border */
.brda {
    border: 1px solid rgba(255,255,255,0.2);
}

.brdb {
    border: 2px solid #373f60;
}

.brdc {
    border: 1px solid rgba(255,255,255,0.3);
}

/* border-bottom */
.bdba {
    border-bottom: 1px solid rgba(255,255,255,0.3);
}

.bdbb {
    border-bottom: 5px solid #051039;
}

.bdbc {
    border-bottom: 5px solid cyan;
}

.bdbd {
	border-bottom: 5px solid #f67b20;
}

/* border-right */
.bdra {
    border-right: 1px solid rgba(255,255,255,0.3);
}

/* border radius */
.brra {
    border-radius: 5px;
}

.brrb {
    border-radius: 20px;
}

.bdta {
    border-top: 5px solid #051039;
}

/* color */
.clra {
    color: #f67b20;
}

.clrb {
    color: #89a830;
}

.clrc {
    color: #051039;
}    

.clrd {
    color: #555555;
}    

.clre {
    color: navy;
}

.clrf {
    color: white;
}

.clrg {
    color: cyan;
}

.clrh {
    color: red;
}

.clri {
    color: yellow;
}

.clrj {
    color: gray;
}

.clrk {
    color: #374061;
}

/* cursor pointer */
.cspt {
    cursor: pointer;
}

/* display inline-block */
.dibm {
    display: inline-block;
    vertical-align: middle;
}

.dibt {
    display: inline-block;
    vertical-align: top;
}

.dibb {
    display: inline-block;
    vertical-align: bottom;
}

/* display table */
.dtlf {
    display: table;
    table-layout: fixed;
    width: 100%;
}

/* display table-cell */
.dtcm {
    display: table-cell;
    vertical-align: middle;
}

/* error */
.erra {
    color: #f67b20;
}

.errb {
    background: rgba(255,255,255,0.2);
    border-radius: 5px;
    color: #f67b20;
    padding: 10px;
    text-align: left;
}

.errc {
    border: 1px solid #f67b20;
    border-radius: 5px;
}

/* event */
.evta:hover {
    background: rgba(255,255,255,0.3);
    color: white;
}

.evta:active {
    background: rgba(255,255,255,0.2);
    color: white;
}

.evtb:hover {
    border: 2px solid #ffcc00;
}

.evtb:active {
    border: 2px solid #373f60;
}

.evtc:hover {
    border: 2px solid #89a830;
}

.evtc:active {
    border: 2px solid #89a830;
}

.evtd:hover {
    border: 2px solid #f67b20;
}

.evtd:active {
    border: 2px solid #f67b20;
}

/* font-style */
.ftti {
    font-style: italic;
}

/* font-weight */
.ftwb {
    font-weight: bold;
}

.ftwn {
    font-weight: normal;
}

/* font awesome */
.ftaa {
    background: rgba(255,255,255,0.2);
    width: 40px;
    line-height: 40px;
    font-size: 20px;
    border-radius: 20px;
    text-align: center;
}

.ftab {
    font-size: 20px;
    padding: 0 10px;
}

.ftac {
    font-size: 20px;
    padding: 3px 0px 0 10px;
}

.ftad {
    background: rgba(255,255,255,0.2);
    width: 40px;
    line-height: 40px;
    font-size: 20px;
    border-radius: 20px;
    text-align: center;
    margin: 5px 5px 0 5px;
}

.ftae {
    background: rgba(255,255,255,0.2);
    width: 24px;
    line-height: 24px;
    font-size: 16px;
    border-radius: 12px;
    text-align: center;
}

/* float */
.fltl {
    float: left;
}

/* font-size */
.fts0 {
    font-size: 0;
}

.ftsa {
    font-size: 12px;
}

.ftsb {
    font-size: 16px;
}

.ftsc {
    font-size: 14px;
}

.ftsd {
    font-size: 20px;
}

.ftse {
    font-size: 30px;
}

.ftsf {
    font-size: 40px;
}

.ftsg {
    font-size: 18px;
}

/* font-family */
.ftfa {
    font-family: Akronim;
}

.ftfb {
    font-family: Aclonica;
}

.ftfc {
    font-family: courier;
}

.ftfd {
    font-family: Allan;
}

.ftfe {
    font-family: Archivo Narrow;
}

/* height */
.hgha {
    height: 150px;
}

.hghb {
    height: 50px;
}

.hghc {
    height: 100px;
}

.hghd {
    height: 400px;
}

.hghe {
    height: 30px;
}

/* hover */
.hvra:hover {
    text-decoration: underline;
}

/* line-height */
.lnha {
    line-height: 16px;
}

.lnhb {
    line-height: 18px;
}

.lnhc {
    line-height: 20px;
}

.lnhd {
    line-height: 30px;
}

/* list-style-type */
.lstc {
    list-style-type: circle;
}

.lstd {
    list-style-type: disc;
}

/* margin */
.mrga {
    margin: auto;
}

.mrgb {
    margin: 5px 0 5px 20px;
}

.mrgc {
    margin: 10px 5px 10px 5px;
}

.mrgd {
    margin: 0 5px;
}

/* margin-left */
.mgla {
    margin-left: 50px;
}

.mglb {
    margin-left: 30px;
}

/* margin-right */
.mgra {
    margin-right: 10px;
}

/* margin bottom */
.mgba {
    margin-bottom: 10px;
}

.mgbb {
    margin-bottom: 5px;
}

/* mark word */
.mkwa {
    color: #f67b20;
    padding-top: 5px;
}

/* min-height */
.mnha {
    min-height: 150px;
}

.mnhb {
    min-height: 50px;
}

.mnhc {
    min-height: 100px;
}

.mnhd {
    min-height: 20px;
}

.mnhe {
    min-height: 40px;
}

.mnhf {
    min-height: 400px;
}

/* min-width */
.mnwa {
    min-width: 100px;
}

.mnwb {
    min-width: 150px;
}

/* max-height */
.mxha {
    max-height: 400px;
}

/* max-width */
.mxwa {
    max-width: 400px;
}

.mxwb {
    max-width: 200px;
}

/* overflow auto */
.ovfa {
    overflow: auto;
}

/* overflow-y auto */
.ovfy {
    overflow-y: auto;
}

/* overflow hidden */
.ovfh {
    overflow: hidden;
}

/* padding */
.pdda {
    padding: 10px 0 5px 0;
}

.pddb {
    padding: 10px;
}

.pddc {
    padding: 5px;
}

.pddd {
    padding: 5px 10px;
}

.pdde {
    padding: 10px 10px 5px 10px;
}

.pddf {
    padding: 0 0 10px 10px;
}

.pddg {
    padding: 20px 10px;
}

.pddh {
    padding: 10px 5px;
}

.pddi {
    padding: 5px 0;
}

/* padding left */
.pdla {
    padding-left: 5px;
}

.pdlb {
    padding-left: 10px;
}

.pdlc {
    padding-left: 30px;
}

.pdld {
    padding-left: 40px;
}

.pdle {
    padding-left: 18px;
}

.pdlf {
    padding-left: 50px;
}

.pdlg {
    padding-left: 60px;
}

/* padding right */
.pdra {
    padding-right: 10px;
}

/* padding top */
.pdta {
    padding-top: 10px;
}

.pdtb {
    padding-top: 35px;
}

/* padding bottom */
.pdba {
    padding-bottom: 10px;
}

.pdbb {
    padding-bottom: 5px;
}

.pdbc {
    padding-bottom: 20px;
}

/* position relative */
.psra {
    position: relative;
}

/* position absolute */
.psaa {
    position: absolute;
    top: 25px;
    left: -28px;
}

.psab {
    position: absolute;
    top: 10px;
    right: 10px;
}

.psac {
    position: absolute;
    top: 0px;
    left: 0px;
}

/* position fixed */
.psfa {
    position: fixed;
    top: 0;
    left: 0;
	right: 0;
}

/* succes */
.scca {
    background: rgba(255,255,255,0.2);
    border-radius: 5px;
    color: #89a830;
    padding: 10px;
    text-align: left;
}

/* social network */
.scna {
    background: #3b5998;
}

.scna:hover {
    opacity: 0.8;
}

.scnb {
    background: #0e76a8;
}

.scnb:hover {
    opacity: 0.8;
}
/* text-align */
.txal {
    text-align: left;
}

.txar {
    text-align: right;
}

.txac {
    text-align: center;
}

/* text-decoration */
.txdu {
    text-decoration: underline;
}

.txdl {
	text-decoration: line-through;
}

/* width */
.wdha {
    width: 100%; 
}

.wdhb {
    width: 40px; 
}

/* word-wrap */
.wwbw {
    word-wrap: break-word;
}

/* word-break */
.wbba {
    word-break: break-all;
}

/* word-spacing */
.wspa {
    word-spacing: 5px;
}

/* white-space */
.whpr {
    white-space: pre-wrap;
}

/* ============================================== */
/* Mobile */ 
/* ============================================== */

@media (max-width:1024px) {

}
/* ---------------------------------------------- */
@media (max-width:960px) {
    /* Header */    
    .Header .Menu .Item:not(:first-child) {
        display: none;
    }
        
    .Header .Menu .Bars {
        display: inline-block;
    }

     .Header .Menu.RWD .Item {
        display: block;
    }

    /* Page */
    .rwda[class*="pgCl"] {
        width: 33.33%;
    } 
}
/* ---------------------------------------------- */
@media (max-width:670px) {  
    /* Background */  
    .Background.Item1 {
        background-position: center center, left top;
        background-size: 98% auto, 100% 100%;    
    }
}
/* ---------------------------------------------- */
@media (max-width:640px) {    

}
/* ---------------------------------------------- */
@media (max-width:520px) {
    /* Pdf Format */
    .pdfHt {
        height: 520px;
    }
}
/* ---------------------------------------------- */
@media (max-width:420px) {
    /* Page */
    .rwda[class*="pgCl"] {
        width: 50%;
    }
    /* Pdf Format */
    .pdfHt {
        height: 450px;
    }
}
/* ---------------------------------------------- */
@media (max-width:320px) {

}
/* ============================================== */
