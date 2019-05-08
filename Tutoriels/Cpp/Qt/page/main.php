<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la création d'interfaces homme-machine en C++ avec Qt</div></a></div></div><div class="Body2 Orange"><b>Qt</b> est une bibliothèque de création d'interfaces homme-machine.<br>Le but de ce tutoriel est de vous apprendre la création d'interfaces homme-machine en <b>C++</b> avec <b>Qt</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la création d'interfaces homme-machine en <span class="GColor1" style="color:lime;">C++</span> avec <span class="GColor1" style="color:lime;">Qt</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>La création d'interfaces homme-machine en C++ avec Qt nécessite le téléchargement et l'installation de la bibliothèque Qt, un éditeur de texte pour l'édition de nos programmes et un compilateur pour la compilation de nos programmes.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- Qt Creator, comme environnement de développement intégré.<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Installer Qt Creator</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h3 class="Title8 GTitle3">Installer MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bouton poussoir"><a class="Link3" href="#">Bouton poussoir</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser un <span class="GColor1" style="color:lime;">Bouton poussoir </span>avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1557308687577"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1557308687577");</script></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Programme de Test"><a class="Link9" href="#Bouton poussoir">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessPushButton::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()-&gt;load("data/css/style.css");

    GQt::Instance()-&gt;createPushButton("CREATE", "Créer", fa::plus, this, SLOT(slotCreateButtonClicked()));
    GQt::Instance()-&gt;createPushButton("READ", "Lire", fa::filetexto, this, SLOT(slotReadButtonClicked()));
    GQt::Instance()-&gt;createPushButton("UPDATE", "Modifier", fa::refresh, this, SLOT(slotUpdateButtonClicked()));
    GQt::Instance()-&gt;createPushButton("DELETE", "Supprimer", fa::trasho, this, SLOT(slotDeleteButtonClicked()));
    GQt::Instance()-&gt;createHBoxLayout("MAIN", {"CREATE", "READ", "UPDATE", "DELETE"});

    GQt::Instance()-&gt;createWidget("WINDOW", "GWindow", "MAIN");
    GQt::Instance()-&gt;showWidget("WINDOW");

    lApp.exec();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Bouton poussoir"><a class="Link9" href="#Bouton poussoir">Bouton poussoir</a></h2><br><h3 class="Title8 GTitle3">Bouton poussoir</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
void GQt::createPushButton(const QString &pushButtonName, const QString& pushButtonText, const int& icon, const QObject* receiver, const char* method) {
    QPushButton* lPushButton = new QPushButton;
    lPushButton-&gt;setText(pushButtonText);
    lPushButton-&gt;setIcon(GPicto::Instance()-&gt;getPicto(icon));
    lPushButton-&gt;setIconSize(QSize(20, 20));
    lPushButton-&gt;setCursor(Qt::PointingHandCursor);
    connect(lPushButton, SIGNAL(clicked()), receiver, method);
    m_pushButtonMap[pushButtonName] = lPushButton;
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Bouton poussoir appuyé"><a class="Link9" href="#Bouton poussoir">Bouton poussoir appuyé</a></h2><br><h3 class="Title8 GTitle3">Bouton poussoir appuyé</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessPushButton::slotCreateButtonClicked() {
    cout &lt;&lt; "slotCreateButtonClicked()...\n";
}
//===============================================
void GProcessPushButton::slotReadButtonClicked() {
    cout &lt;&lt; "slotReadButtonClicked()...\n";
}
//===============================================
void GProcessPushButton::slotUpdateButtonClicked() {
    cout &lt;&lt; "slotUpdateButtonClicked()...\n";
}
//===============================================
void GProcessPushButton::slotDeleteButtonClicked() {
    cout &lt;&lt; "slotDeleteButtonClicked()...\n";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Disposition"><a class="Link9" href="#Bouton poussoir">Disposition</a></h2><br><h3 class="Title8 GTitle3">Disposition<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
void GQt::createHBoxLayout(const QString &hBoxLayoutName, initializer_list&lt;QString&gt; pushButtonNameMap) {
    QHBoxLayout* lHBoxLayout = new QHBoxLayout;
    lHBoxLayout-&gt;setAlignment(Qt::AlignLeft | Qt::AlignTop);
    for(QString lPushButtonName : pushButtonNameMap) {
        QPushButton* lPushButton = m_pushButtonMap[lPushButtonName];
        lHBoxLayout-&gt;addWidget(lPushButton);
    }
    m_hBoxLayoutMap[hBoxLayoutName] = lHBoxLayout;
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Mise en forme"><a class="Link9" href="#Bouton poussoir">Mise en forme</a></h2><br><h3 class="Title8 GTitle3">Mise en forme</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/*===============================================*/
/* QWidget */
QWidget#GWindow {
    background-color: rgba(5, 16, 57, 1.0);
}
/*===============================================*/
/* QPushButton */
QPushButton {
    background-color: rgba(255, 255, 255, 0.2);
    padding: 6px;
    font-size: 16px;
    font-weight: normal;
}
QPushButton:hover {
    background-color: rgba(255, 255, 255, 0.4);
    text-decoration: underline;
}
QPushButton:pressed {
    background-color: rgba(255, 255, 255, 0.2);
    font-size: 14px;
}
/*===============================================*/</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Résultat"><a class="Link9" href="#Bouton poussoir">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat bouton poussoir<br></h3><div class="Img3 GImage"><img src="img/PushButton.png" alt="img/PushButton.png"></div><br><h3 class="Title8 GTitle3">Résultat bouton poussoir appuyé</h3><div class="Img3 GImage"><img src="img/PushButton_02.png" alt="img/PushButton_02.png"></div></div></div></div></div><br>