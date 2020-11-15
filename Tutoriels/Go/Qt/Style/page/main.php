<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Ajouter un style Qt en Go</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à ajouter un style Qt en <b>Go</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Go </b>est un langage de programmation compilé et concurrent inspiré de C et Pascal. Il veut faciliter et accélérer la programmation à grande échelle en raison de sa simplicité. Il peut être utilisé aussi bien pour écrire des applications, des scripts ou de grands systèmes. Il permet d'assurer la maintenance et l'évolution des programmes sur plusieurs générations de développeurs.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/b_qt_style.png" alt="/Tutoriels/Go/img/b_qt_style.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ajouter un style Qt Go"><a class="Link3" href="#">Ajouter un style Qt Go</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Ajouter un style Qt Go-Introduction"><a class="Link9" href="#Ajouter un style Qt Go">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons d'ajouter un style Qt en Go.<br><br><h2 class="Title7 GTitle2" id="Ajouter un style Qt Go-Programme principal"><a class="Link9" href="#Ajouter un style Qt Go">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GQt.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GQtO) Open() {
    lApp := widgets.NewQApplication(len(os.Args), os.Args)
    GManager().SetStyle(lApp)
    lWindow := CreateGWidget("window", nil)
    lWindow.GWidget_PTR().Show()
    lApp.Exec()
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GManager.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">obj.mgr.app.style_path = "data/css/style.css"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter un style Qt Go-Ajouter un style"><a class="Link9" href="#Ajouter un style Qt Go">Ajouter un style</a></h2><br><h3 class="Title8 GTitle3">GManager.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GManagerO) SetStyle(app *widgets.QApplication) {
    lFile := core.NewQFile2(obj.mgr.app.style_path)
    lFile.Open(core.QIODevice__ReadOnly)
    lStyle := lFile.ReadAll().Data()
    app.SetStyleSheet(lStyle)
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter un style Qt Go-Style commun"><a class="Link9" href="#Ajouter un style Qt Go">Style commun</a></h2><br><h3 class="Title8 GTitle3">style.css</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/*===============================================*/
/* QWidget */
QWidget, QWidget * {
    background-color: #201010;
    font-family: "Allan";
    font-size: 20px;
    color: white;
    border: none;
    outline: none
}
/*===============================================*/</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter un style Qt Go-Style personnalisé"><a class="Link9" href="#Ajouter un style Qt Go">Style personnalisé</a></h2><br><h3 class="Title8 GTitle3">style.css</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/*===============================================*/
/* GTitleBar */
QFrame#GTitleBar * {
    background-color: transparent;    
}
QFrame#GTitleBar QLabel#app_name {
    font-family: "Akronim";
    font-size: 40px;
}
QFrame#GTitleBar QLabel#title {
    padding: 0px 20px;
}
QFrame#GTitleBar QPushButton#minimize:hover,
QFrame#GTitleBar QPushButton#maximize:hover,
QFrame#GTitleBar QPushButton#close:hover {
    background-color: #403030;
}
QFrame#GTitleBar QPushButton#minimize:pressed,
QFrame#GTitleBar QPushButton#maximize:pressed,
QFrame#GTitleBar QPushButton#close:pressed {
    background-color: transparent;
}
/*===============================================*/</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter un style Qt Go-Résultat"><a class="Link9" href="#Ajouter un style Qt Go">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/i_qt_style.png" alt="/Tutoriels/Go/img/i_qt_style.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Interface Homme-Machine Qt</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1605458922954"><div class="Row26">List 1 &gt; Go &gt; qt</div></div><script>loadList1("Loader_1605458922954","Go","qt");</script></div><br></div></div></div></div><br>