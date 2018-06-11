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

button {
    background: transparent;
    border: none;
    padding: 5px 10px 5px 5px;
    font-size: 16px;
    color: white;
    cursor: pointer;
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

xmp {
    padding: 10px 10px 10px 50px;
	font-size: 16px;
}

a {
    text-decoration: none;
}

b {
    color: cyan;
	font-size: 18px;
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
	font-size: 20px;
    background: #051039;
    color: white; 
    display: inline-block;
    position: relative;
    top: -20px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 20px;
}

/* ============================================== */
/* Prettify */ 
/* ============================================== */

.linenums li {
    list-style-type: decimal;
}

/* ============================================== */
/* Custom */
/* ============================================== */

.Background {
    min-height: 300px;
    background-color: #333333;
    background-image: url("<?php echo $lStyle["background"]["top"]["img"]; ?>");
    background-position: center;
    position: absolute;
}

.Background.Top {
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

.Background.Middle {
    top: 300px;
    bottom: 300px;
    left: 0px;
    right: 0px;
    z-index: -1;
    background-image: url("/data/img/defaults/middle.gif");
    background-position: center center;
    background-repeat: repeat;    
    background-size: auto;    
}

.Background.Bottom {
    bottom: 0px;
    left: 0px;
    right: 0px;
    z-index: -1;
    background-image: url("/data/img/defaults/footer.jpg");
    background-position: left top;
    background-repeat: no-repeat;    
    background-size: 100% 100%;    
    border: 10px solid transparent;
    border-image: url("/data/img/defaults/border.png") 30 round;
    -webkit-border-image: url("/data/img/defaults/border.png") 30 round; 
    -moz-border-image: url("/data/img/defaults/border.png") 30 round; 
    -o-border-image: url("/data/img/defaults/border.png") 30 round;
}

.Bars {
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

.Body {
    padding: 5px;
}

.Body2 {
    position: relative;
    min-height: 50px;
    background-color: #803300;
    font-size: 20px;
    color: white;
    padding: 10px;
    font-family: Archivo Narrow;
    text-align: left;
}

.Body2.Orange {
    background-color: #803300;
}

.Body2.Green {
    background-color: #006666;
}

.Body2.Purple {
    background-color: #2d2d86;
}

.Body2.Blue {
    background-color: #051039;
}

.Body2.Light {
    background-color: #373f60;
}

.Body2.Pdd {
    padding: 0px;
}

.Body3 {
    padding: 10px;
    text-align: left;
}

.Body4 {
    padding: 10px;
}

.Body5 {
    text-align: left;
}

.Body6 {
    padding: 10px 0px;
    overflow: auto;
}

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

.Button {
    background: rgba(255,255,255,0.2);
    border-radius: 5px;
}

.Button:hover {
    background: rgba(255,255,255,0.4);
    color: white;
}

.Button:active {
    background: rgba(255,255,255,0.2);
    color: white;
}

.Button2 {
    background-color: rgba(255, 255, 255, 0.2);
    padding: 5px 10px;
}

.Button2:hover {
    text-decoration: underline;
}

.Button2.Active {
    background: #051039;
}

.Caption {
    background-color: #051039;
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 40px;
    margin-top: -20px; 
    opacity: 0.8;
}

.Center {
    text-align: center;
}

.Col {
    display: inline-block;
    font-size: 14px;
    padding: 5px;
}

.Content {
    background-color: rgba(255, 255, 255, 0.2);
}

.Content2 {
    max-width: 800px;
    margin: auto;
}

.Content3 {
    float: left;
    text-align: center;
}

.Content4 {
    position: relative;
    padding-left: 10px;
}

.Content5 {
    background: #333333;
}

.Content6 {
    display: table-cell;
    vertical-align: middle;
}

.Content7 {
    background-color: rgba(255, 255, 255, 0.2);
    max-width: 700px;
    margin: auto;
    padding: 10px;
}

.Content8 {
    background-color: rgba(255, 255, 255, 0.2);
    max-width: 500px;
    margin: auto;
}

.Content9 {
    height: 400px;
}

.Error {
    color: #f67b20;
}

.Error2 {
    background: rgba(255,255,255,0.2);
    border-radius: 5px;
    color: #f67b20;
    padding: 10px;
    text-align: left;
}

.Field {
    display: inline-block;
    padding: 5px;
    font-size: 14px;
}

.Field2 {
    background-color: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 5px;
}

.Field2.Error {
    border: 1px solid #f67b20;
}

.Form {
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    font-size: 0px;
}

.Footer {
    background: rgba(255,255,255,0.0);
    position: absolute;
    bottom: 35px;
    left: 0px;
    right: 0px;
}

.HtmlPage {
    position: relative;
}

.Icon {
    font-size: 16px;
}

.Icon2 {
    color: cyan;
}

.Icon3 {
    background: rgba(255,255,255,0.2);
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 20px;
    border-radius: 20px;
    text-align: center;
}

.Icon3:hover {
    background: rgba(255,255,255,0.3);
    color: white;
}

.Icon3:active {
    background: rgba(255,255,255,0.2);
    color: white;
}

.Icon4 {
    background: rgba(255,255,255,0.2);
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 20px;
    border-radius: 20px;
    text-align: center;
}

.Icon5 {
    padding: 10px 0px;
}

.Icon6 {
    font-size: 30px;
}

.Icon7 {
    font-size: 20px;
    padding: 3px 0px 0 10px;
    float: left;
}

.Icon8 {
    color: #89a830;
}

.Icon9 {
    color: #f67b20;
}

.Img {
    background-image: url("/data/img/defaults/wave.png");
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

.Img.Wave {
    background-image: url("/data/img/defaults/wave.png");
}

.Img.Binary {
    background-image: url("/data/img/defaults/binary.png");
}

.Img.Signal {
    background-image: url("/data/img/defaults/signal.jpg");
}

.Img.Chip {
    background-image: url("/data/img/defaults/chip.jpg");
}

.Img.Developer {
    background-image: url("/data/img/defaults/developer.jpg");
}

.Img.Grid {
    background-image: url("/data/img/defaults/grid.jpg");
}

.Img2 {
    float: left;
    border-radius: 20px;
}

.Input {
    margin-left: 30px;
}

.Item {
    display: inline-block;
    vertical-align: middle;
}

.Item2 {
    padding: 10px 0px;
}

.Item3 {
    margin: 5px 0 5px 20px;
}

.Label {
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    padding: 5px;
    font-size: 14px;
}

.Label2 {
    display: inline-block;
    vertical-align: middle;
    padding: 5px 0px;
}

.Left {
    text-align: left;
}

.Link {
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    font-size: 18px;
    font-family: Aclonica;
    padding: 0 10px 0 10px;
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
}

.Link:hover {
    border-bottom: 5px solid #89a830;
}

.Link.Active {
    border-bottom: 5px solid #f67b20;
}

.Link2 {
    background-color: rgba(255, 255, 255, 0.2);
    width: 40px;
    height: 40px;
    border-radius: 20px;
    line-height: 40px;
    font-size: 20px;
}

.Link2 {
    cursor: pointer;
}

.Link2:hover {
    opacity: 0.8;
}

.Link2:active {
    opacity: 1.0;
}

.Link2.Facebook {
    background-color: #3b5998;
}

.Link2.Twitter {
    background-color: #0e76a8;
}

.Link3 {
    color: #89a830;
}

.Link4 {
    color: cyan;
}

.Link4:hover {
    text-decoration: underline;
}

.Link5 {
    display: inline-block;
    vertical-align: middle;
}

.Link6 {
    background-color: #ffcc00;
    display: inline-block;
    vertical-align: middle;
    border: 2px solid #373f60;
}

.Link6:hover {
    border: 2px solid #ffcc00;
}

.Link6:active {
    border: 2px solid #373f60;
}

.Link7:hover {
    text-decoration: underline;
}

.List {
    padding-right: 10px;
}

.List2 {
    padding-left: 20px;
    padding-right: 10px;
}

.MainBlock {
    padding: 10px;
}

.MainPage {
    background-color: #051039;
    border: 10px solid transparent;
    border-image: url("/data/img/defaults/border.png") 30 round;
    -webkit-border-image: url("/data/img/defaults/border.png") 30 round; 
    -moz-border-image: url("/data/img/defaults/border.png") 30 round; 
    -o-border-image: url("/data/img/defaults/border.png") 30 round;
    padding-bottom: 0px;
}

.Menu {
    background: rgba(255,255,255,0.2);
    text-align: left;
    font-size: 0px;
    line-height: 40px;
    position: relative;
    padding-right: 10px;
}

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

.Network {
    background: rgba(255,255,255,0.2);
    width: 40px;
    line-height: 40px;
    font-size: 20px;
    border-radius: 20px;
    text-align: center;
    margin: 5px 5px 0 5px;
}

.Parallax {
    position: relative;
    text-align: center;
}

.Right {
    text-align: right;
}

.Row {
    padding: 5px;
}

.Row2:not(:last-child) {
    margin-bottom: 20px;
}

.Row3 {
    padding: 10px 0px;
}

.Row4 {
    padding: 10px;
}

.Row5 {
    font-size: 0;
    padding: 5px;
}

.Row6 {
    background: rgba(255,255,255,0.2);
    height: 50px;
    text-align: center;
    display: table;
    table-layout: fixed;
    width: 100%;
}

.Row7 {
    height: 100px;
    text-align: center;
    display: table;
    table-layout: fixed;
    width: 100%;
}

.Row8 {
    padding-bottom: 10px;
}

.Row9 {
    padding: 5px 0px;
}

.Row10 {
    text-align: left;
    font-size: 0px;
}

.Succes {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    color: #89a830;
    padding: 10px;
    text-align: left;
}

.Text {
    background-color: #111;
    color: #fff;
    padding: 18px 10px;
    font-size: 25px;
    display: inline-block;
    font-family: Anton;
    letter-spacing: 5px;
    margin-top: -20px; 
}

.Text2 {
    font-family: Allan;
    font-size: 14px;
}

.Text3 {
    margin-left: 50px;
}

.Text4 {
    color: #051039;
} 

.Text5 {
    color: #051039;
    font-weight: bold;
} 

.Text6 {
    position: absolute;
    top: 35px;
    left: -33px;
    color: #051039;
    font-weight: bold;
}

.Text7 {
    font-size: 20px;
    font-family: Aclonica;
    padding: 10px;
}

.Text8 {
    padding: 5px;
    font-family: Arial;
    font-size: 14px;
    color: #555555;
    text-align: center;
}

.Title {
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    font-size: 25px;
    font-family: Akronim;
    color: cyan;
    padding: 0 20px 0 10px;
    display: inline-block;
    vertical-align: middle;
}

.Title2{
    background-color: rgba(255, 255, 255, 0.2);
    color: #f67b20;
    padding: 20px 10px;
}

.Title3 {
    background: rgba(255,255,255,0.2);
    display: inline-block;
    vertical-align: middle;
    font-family: Aclonica;
    color: #f67b20;
    padding: 10px;
}

.Title4 {
    border-bottom: 5px solid #051039;
    color: #f67b20;
    padding: 5px 0px;
}

/* ============================================== */
/* Responsive Web Design */ 
/* ============================================== */

.RwdC01 {width: 4.16%;}
.RwdC02 {width: 8.33%;}
.RwdC03 {width: 12.5%;}
.RwdC04 {width: 16.66%;}
.RwdC05 {width: 20.83%;}
.RwdC06 {width: 25%;}
.RwdC07 {width: 29.16%;}
.RwdC08 {width: 33.33%;}
.RwdC09 {width: 37.5%;}
.RwdC10 {width: 41.66%;}
.RwdC11 {width: 45.83%;}
.RwdC12 {width: 50%;}
.RwdC13 {width: 54.16%;}
.RwdC14 {width: 58.33%;}
.RwdC15 {width: 62.5%;}
.RwdC16 {width: 66.66%;}
.RwdC17 {width: 70.83%;}
.RwdC18 {width: 75%;}
.RwdC19 {width: 79.16%;}
.RwdC20 {width: 83.33%;}
.RwdC21 {width: 87.5%;}
.RwdC22 {width: 91.66%;}
.RwdC23 {width: 95.83%;}
.RwdC24 {width: 100%;}

[class*="RwdC"] {
    display: inline-block;
    vertical-align: top;
    font-size: 16px;
    padding: 5px;
}

/* ============================================== */
/* Mobile */ 
/* ============================================== */

@media (max-width:1024px) {

}
/* ---------------------------------------------- */
@media (max-width:960px) {
    .Bars {
        display: inline-block;
    }
    
    .Item:not(:first-child) {
        display: none;
    }
    
    .RWD .Item {
        display: block;
    }
}
/* ---------------------------------------------- */
@media (max-width:750px) {
    .RWD2[class*="RwdC"] {
        width: 33.33%;
    } 
}
/* ---------------------------------------------- */
@media (max-width:670px) {  
    .Background.Top {
        background-position: center center, left top;
        background-size: 98% auto, 100% 100%;    
    }
}
/* ---------------------------------------------- */
@media (max-width:640px) {  

}
/* ---------------------------------------------- */
@media (max-width:550px) {
    .RWD2[class*="RwdC"] {
        width: 50%;
    } 
}/* ---------------------------------------------- */
@media (max-width:520px) {

}
/* ---------------------------------------------- */
@media (max-width:420px) {

}
/* ---------------------------------------------- */
@media (max-width:350px) {
    .RWD2[class*="RwdC"] {
        width: 100%;
    } 
}
/* ---------------------------------------------- */
@media (max-width:320px) {

}

/* ============================================== */
