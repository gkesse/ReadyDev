<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la création d'interfaces homme-machine en C++ avec Qt</div></a></div></div><div class="Body2 Orange"><b>Qt</b> est une bibliothèque de création d'interfaces homme-machine.<br>Le but de ce tutoriel est de vous apprendre la création d'interfaces homme-machine en <b>C++</b> avec <b>Qt</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la création d'interfaces homme-machine en <span class="GColor1" style="color:lime;">C++</span> avec <span class="GColor1" style="color:lime;">Qt</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>La création d'interfaces homme-machine en C++ avec Qt nécessite le téléchargement et l'installation de la bibliothèque Qt, un éditeur de texte pour l'édition de nos programmes et un compilateur pour la compilation de nos programmes.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- Qt Creator, comme environnement de développement intégré.<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Installer Qt Creator</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h3 class="Title8 GTitle3">Installer MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bouton poussoir"><a class="Link3" href="#">Bouton poussoir</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser un <span class="GColor1" style="color:lime;">Bouton poussoir </span>avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1557308687577"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1557308687577");</script></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Résultat"><a class="Link9" href="#Bouton poussoir">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat bouton poussoir</h3><div class="Img3 GImage"><img src="img/PushButton.png" alt="img/PushButton.png"></div><br><h3 class="Title8 GTitle3">Résultat bouton poussoir appuyé</h3><div class="Img3 GImage"><img src="img/PushButton_02.png" alt="img/PushButton_02.png"></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Programme de Test"><a class="Link9" href="#Bouton poussoir">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessPushButton::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()-&gt;load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("PUSHBUTTON");
    lWindow-&gt;show();
    lApp.exec();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Bouton poussoir"><a class="Link9" href="#Bouton poussoir">Bouton poussoir</a></h2><br><h3 class="Title8 GTitle3">Bouton poussoir</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GWindowPushButton::GWindowPushButton(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowPushButton");
    setWindowFlags(Qt::Widget);

    QPushButton* lCreate = new QPushButton;
    lCreate-&gt;setText("Créer");
    lCreate-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::plus));
    lCreate-&gt;setIconSize(QSize(20, 20));
    lCreate-&gt;setToolTip("Créer une donnée");
    lCreate-&gt;setCursor(Qt::PointingHandCursor);
    connect(lCreate, SIGNAL(clicked()), this, SLOT(slotCreateButtonClicked()));

    QPushButton* lRead = new QPushButton;
    lRead-&gt;setText("Lire");
    lRead-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::filetexto));
    lRead-&gt;setIconSize(QSize(20, 20));
    lRead-&gt;setToolTip("Lire une donnée");
    lRead-&gt;setCursor(Qt::PointingHandCursor);
    connect(lRead, SIGNAL(clicked()), this, SLOT(slotReadButtonClicked()));

    QPushButton* lUpdate = new QPushButton;
    lUpdate-&gt;setText("Modifier");
    lUpdate-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::refresh));
    lUpdate-&gt;setIconSize(QSize(20, 20));
    lUpdate-&gt;setToolTip("Modifier une donnée");
    lUpdate-&gt;setCursor(Qt::PointingHandCursor);
    connect(lUpdate, SIGNAL(clicked()), this, SLOT(slotUpdateButtonClicked()));

    QPushButton* lDelete = new QPushButton;
    lDelete-&gt;setText("Supprimer");
    lDelete-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::trasho));
    lDelete-&gt;setIconSize(QSize(20, 20));
    lDelete-&gt;setToolTip("Supprimer une donnée");
    lDelete-&gt;setCursor(Qt::PointingHandCursor);
    connect(lDelete, SIGNAL(clicked()), this, SLOT(slotDeleteButtonClicked()));

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout-&gt;setAlignment(Qt::AlignLeft | Qt::AlignTop);
    lMainLayout-&gt;addWidget(lCreate);
    lMainLayout-&gt;addWidget(lRead);
    lMainLayout-&gt;addWidget(lUpdate);
    lMainLayout-&gt;addWidget(lDelete);

    setLayout(lMainLayout);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Bouton poussoir appuyé"><a class="Link9" href="#Bouton poussoir">Bouton poussoir appuyé</a></h2><br><h3 class="Title8 GTitle3">Bouton poussoir appuyé</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GWindowPushButton::slotCreateButtonClicked() {
    cout &lt;&lt; "slotCreateButtonClicked()...\n";
}
//===============================================
void GWindowPushButton::slotReadButtonClicked() {
    cout &lt;&lt; "slotReadButtonClicked()...\n";
}
//===============================================
void GWindowPushButton::slotUpdateButtonClicked() {
    cout &lt;&lt; "slotUpdateButtonClicked()...\n";
}
//===============================================
void GWindowPushButton::slotDeleteButtonClicked() {
    cout &lt;&lt; "slotDeleteButtonClicked()...\n";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Mise en forme"><a class="Link9" href="#Bouton poussoir">Mise en forme</a></h2><br><h3 class="Title8 GTitle3">Mise en forme</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/*===============================================*/
/* QPushButton */
QPushButton {
    background-color: rgba(255, 255, 255, 0.2);
    padding: 6px;
    font-size: 16px;
    border-radius: 5px;
}
QPushButton:hover {
    background-color: rgba(255, 255, 255, 0.4);
    text-decoration: underline;
}
QPushButton:pressed {
    background-color: rgba(255, 255, 255, 0.2);
    font-size: 14px;
}
/*===============================================*/</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bouton outil"><a class="Link3" href="#">Bouton outil</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser un <span class="GColor1" style="color:lime;">Bouton outil</span> avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1557444101229"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1557444101229");</script></div><br><h2 class="Title7 GTitle2" id="Bouton outil-Résultat"><a class="Link9" href="#Bouton outil">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat bouton outil</h3><div class="Img3 GImage"><img src="img/ToolButton.png" alt="img/ToolButton.png"></div><br><h3 class="Title8 GTitle3">Résultat bouton outil appuyé</h3><div class="Img3 GImage"><img src="img/ToolButton_02.png" alt="img/ToolButton_02.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bouton radio"><a class="Link3" href="#">Bouton radio</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser un <span class="GColor1" style="color:lime;">Bouton radio</span> avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><br><br><br><br><br><br><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bouton case à cocher"><a class="Link3" href="#">Bouton case à cocher</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser un <span class="GColor1" style="color:lime;">Bouton case à cocher</span> avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><br><br><br><br><br></div></div></div></div><br>