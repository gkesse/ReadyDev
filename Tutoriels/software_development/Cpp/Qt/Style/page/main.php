<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Ajouter un style à une fenêtre Qt en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à ajouter un style à une fenêtre <b>Qt </b>en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Qt </b>est une API orientée objet et développée en C++. Qt offre des composants d'interface graphique (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML. Elle utilse le mécanisme des signaux et slots.Qt prend en charge le système graphique X Window System et intègre des bindings avec plusieurs langages.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_qt_style.png" alt="/Tutoriels/Cpp/img/b_qt_style.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ajouter un style à une fenêtre Qt en C++"><a class="Link3" href="#">Ajouter un style à une fenêtre Qt en C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Ajouter un style à une fenêtre Qt en C++-Introduction"><a class="Link9" href="#Ajouter un style à une fenêtre Qt en C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons d'ajouter un style à une fenêtre (styles.qss) à une fenêtre.<br><br><h2 class="Title7 GTitle2" id="Ajouter un style à une fenêtre Qt en C++-Programme principal"><a class="Link9" href="#Ajouter un style à une fenêtre Qt en C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">GManager::Instance()-&gt;styleLoad();</xmp></pre></div><br><h3 class="Title8 GTitle3">GManager.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_mgr-&gt;qt-&gt;style_file = ":/qss/styles.qss";</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter un style à une fenêtre Qt en C++-Chargement du style"><a class="Link9" href="#Ajouter un style à une fenêtre Qt en C++">Chargement du style</a></h2><br><h3 class="Title8 GTitle3">GManager.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GManager::styleLoad() {
    QFile lFile(m_mgr-&gt;qt-&gt;style_file);
    lFile.open(QFile::ReadOnly);
    QString lStyleSheet = QLatin1String(lFile.readAll());
    qApp-&gt;setStyleSheet(lStyleSheet);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter un style à une fenêtre Qt en C++-Définition du style"><a class="Link9" href="#Ajouter un style à une fenêtre Qt en C++">Définition du style</a></h2><br><h3 class="Title8 GTitle3">styles.qss</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/*===============================================*/
/* QWidget */
QWidget, QWidget * {
    background-color: transparent;
    background-color: rgba(20, 20, 20, 100%);
    font-family: "Allan";
    font-size: 16px;
    color: white;
    border: none;
}
/*===============================================*/
/* GTitleBar */
QFrame#GTitleBar * {
    color: white;
    font-size: 30px;
    font-family: "Akronim";
}
/* GTitleBar */
QFrame#GTitleBar QToolButton:hover {
    background-color: rgba(255, 255, 255, 20%);
}
/* GTitleBar */
QFrame#GTitleBar QToolButton:pressed {
    background-color: transparent;
}
/* GTitleBar */
QFrame#GTitleBar QToolButton#icon {
    background-color: transparent;
}
/* GTitleBar */
QFrame#GTitleBar QToolButton#icon:hover {
    background-color: transparent;
}
/* GTitleBar */
QFrame#GTitleBar QLabel#title {
    font-family: "Aclonica";
    font-size: 16px;
}
/*===============================================*/
/* GMenuIcon */
QFrame#GMenuIcon * {
    background-color: transparent;
    color: white;
    font-size: 14px;
    font-family: "Allan";
}
QFrame#GMenuIcon:hover {
    background-color: rgba(255, 255, 255, 20%);
}
/*===============================================*/</xmp></pre></div><br><br><h2 class="Title7 GTitle2" id="Ajouter un style à une fenêtre Qt en C++-Résultat"><a class="Link9" href="#Ajouter un style à une fenêtre Qt en C++">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_qt_style.png" alt="/Tutoriels/Cpp/img/i_qt_style.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Interface Homme-Machine Qt</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1601149057068"><div class="Row26">List 1 &gt; Cpp &gt; qt</div></div><script>loadList1("Loader_1601149057068","Cpp","qt");</script></div><br></div></div></div></div><br>