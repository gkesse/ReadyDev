<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la création d'interfaces homme-machine en C++ avec Qt</div></a></div></div><div class="Body2 Orange"><b>Qt</b> est une bibliothèque de création d'interfaces homme-machine.<br>Le but de ce tutoriel est de vous apprendre la création d'interfaces homme-machine en <b>C++</b> avec <b>Qt</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la création d'interfaces homme-machine en <span class="GColor1" style="color:lime;">C++</span> avec <span class="GColor1" style="color:lime;">Qt</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>La création d'interfaces homme-machine en C++ avec Qt nécessite le téléchargement et l'installation de la bibliothèque Qt, un éditeur de texte pour l'édition de nos programmes et un compilateur pour la compilation de nos programmes.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- Qt Creator, comme environnement de développement intégré.<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Installer Qt Creator</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h3 class="Title8 GTitle3">Installer MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bouton poussoir"><a class="Link3" href="#">Bouton poussoir</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser un <span class="GColor1" style="color:lime;">Bouton poussoir </span>avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1557308687577"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1557308687577");</script></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Résultat"><a class="Link9" href="#Bouton poussoir">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat bouton poussoir</h3><div class="Img3 GImage"><img src="img/PushButton.png" alt="img/PushButton.png"></div><br><h3 class="Title8 GTitle3">Résultat bouton poussoir appuyé</h3><div class="Img3 GImage"><img src="img/PushButton_02.png" alt="img/PushButton_02.png"></div><br><h2 class="Title7 GTitle2" id="Bouton poussoir-Bouton poussoir"><a class="Link9" href="#Bouton poussoir">Bouton poussoir</a></h2><br><h3 class="Title8 GTitle3">Bouton poussoir</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
/*===============================================*/</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bouton outil"><a class="Link3" href="#">Bouton outil</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser un <span class="GColor1" style="color:lime;">Bouton outil</span> avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1557444101229"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1557444101229");</script></div><br><h2 class="Title7 GTitle2" id="Bouton outil-Résultat"><a class="Link9" href="#Bouton outil">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat bouton outil</h3><div class="Img3 GImage"><img src="img/ToolButton.png" alt="img/ToolButton.png"></div><br><h3 class="Title8 GTitle3">Résultat bouton outil appuyé</h3><div class="Img3 GImage"><img src="img/ToolButton_02.png" alt="img/ToolButton_02.png"></div><br><h2 class="Title7 GTitle2" id="Bouton outil-Bouton outil"><a class="Link9" href="#Bouton outil">Bouton outil</a></h2><br><h3 class="Title8 GTitle3">Bouton outil</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GWindowToolButton::GWindowToolButton(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowToolButton");
    setWindowFlags(Qt::Widget);

    QToolButton* lFacebook = new QToolButton;
    lFacebook-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::facebook));
    lFacebook-&gt;setIconSize(QSize(30, 30));
    lFacebook-&gt;setToolTip("Facebook");
    lFacebook-&gt;setCursor(Qt::PointingHandCursor);
    connect(lFacebook, SIGNAL(clicked()), this, SLOT(slotFacebookButtonClicked()));

    QToolButton* lSkype = new QToolButton;
    lSkype-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::skype));
    lSkype-&gt;setIconSize(QSize(30, 30));
    lSkype-&gt;setToolTip("Skype");
    lSkype-&gt;setCursor(Qt::PointingHandCursor);
    connect(lSkype, SIGNAL(clicked()), this, SLOT(slotSkypeButtonClicked()));

    QToolButton* lGithub = new QToolButton;
    lGithub-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::github));
    lGithub-&gt;setIconSize(QSize(30, 30));
    lGithub-&gt;setToolTip("GitHub");
    lGithub-&gt;setCursor(Qt::PointingHandCursor);
    connect(lGithub, SIGNAL(clicked()), this, SLOT(slotGithubButtonClicked()));

    QToolButton* lLinkedin = new QToolButton;
    lLinkedin-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::linkedin));
    lLinkedin-&gt;setIconSize(QSize(30, 30));
    lLinkedin-&gt;setToolTip("LinkedIn");
    lLinkedin-&gt;setCursor(Qt::PointingHandCursor);
    connect(lLinkedin, SIGNAL(clicked()), this, SLOT(slotLinkedinButtonClicked()));

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout-&gt;setAlignment(Qt::AlignLeft | Qt::AlignTop);
    lMainLayout-&gt;addWidget(lFacebook);
    lMainLayout-&gt;addWidget(lSkype);
    lMainLayout-&gt;addWidget(lGithub);
    lMainLayout-&gt;addWidget(lLinkedin);

    setLayout(lMainLayout);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton outil-Bouton outil appuyé"><a class="Link9" href="#Bouton outil">Bouton outil appuyé</a></h2><br><h3 class="Title8 GTitle3">Bouton outil appuyé</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GWindowToolButton::slotFacebookButtonClicked() {
    cout &lt;&lt; "slotFacebookButtonClicked()...\n";
}
//===============================================
void GWindowToolButton::slotSkypeButtonClicked() {
    cout &lt;&lt; "slotSkypeButtonClicked()...\n";
}
//===============================================
void GWindowToolButton::slotGithubButtonClicked() {
    cout &lt;&lt; "slotGithubButtonClicked()...\n";
}
//===============================================
void GWindowToolButton::slotLinkedinButtonClicked() {
    cout &lt;&lt; "slotLinkedinButtonClicked()...\n";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton outil-Mise en forme"><a class="Link9" href="#Bouton outil">Mise en forme</a></h2><br><h3 class="Title8 GTitle3">Mise en forme</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/*===============================================*/
/* QToolButton */
QToolButton {
    background-color: rgba(255, 255, 255, 0.2);
    width: 50px;
    height: 50px;
    border-radius: 25px;
}
QToolButton:hover {
    background-color: rgba(255, 255, 255, 0.4);
}
QToolButton:pressed {
    background-color: rgba(255, 255, 255, 0.2);
}
/*===============================================*/</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bouton radio"><a class="Link3" href="#">Bouton radio</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser un <span class="GColor1" style="color:lime;">Bouton radio</span> avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1557478212098"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1557478212098");</script></div><br><h2 class="Title7 GTitle2" id="Bouton radio-Résultat"><a class="Link9" href="#Bouton radio">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat bouton radio</h3><div class="Img3 GImage"><img src="img/RadioButton.png" alt="img/RadioButton.png"></div><br><h3 class="Title8 GTitle3">Résultat bouton radio appuyé</h3><div class="Img3 GImage"><img src="img/RadioButton_02.png" alt="img/RadioButton_02.png"></div><br><h2 class="Title7 GTitle2" id="Bouton radio-Bouton radio"><a class="Link9" href="#Bouton radio">Bouton radio</a></h2><br><h3 class="Title8 GTitle3">Bouton radio</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GWindowRadioButton::GWindowRadioButton(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowRadioButton");
    setWindowFlags(Qt::Widget);

    QRadioButton* lCreate = new QRadioButton;
    lCreate-&gt;setText("Créer");
    lCreate-&gt;setCursor(Qt::PointingHandCursor);
    connect(lCreate, SIGNAL(clicked()), this, SLOT(slotCreateButtonClicked()));

    QRadioButton* lRead = new QRadioButton;
    lRead-&gt;setText("Lire");
    lRead-&gt;setCursor(Qt::PointingHandCursor);
    connect(lRead, SIGNAL(clicked()), this, SLOT(slotReadButtonClicked()));

    QRadioButton* lUpdate = new QRadioButton;
    lUpdate-&gt;setText("Modifier");
    lUpdate-&gt;setCursor(Qt::PointingHandCursor);
    connect(lUpdate, SIGNAL(clicked()), this, SLOT(slotUpdateButtonClicked()));

    QRadioButton* lDelete = new QRadioButton;
    lDelete-&gt;setText("Supprimer");
    lDelete-&gt;setCursor(Qt::PointingHandCursor);
    connect(lDelete, SIGNAL(clicked()), this, SLOT(slotDeleteButtonClicked()));

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;setAlignment(Qt::AlignLeft | Qt::AlignTop);
    lMainLayout-&gt;addWidget(lCreate);
    lMainLayout-&gt;addWidget(lRead);
    lMainLayout-&gt;addWidget(lUpdate);
    lMainLayout-&gt;addWidget(lDelete);

    setLayout(lMainLayout);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton radio-Bouton radio appuyé"><a class="Link9" href="#Bouton radio">Bouton radio appuyé</a></h2><br><h3 class="Title8 GTitle3">Bouton radio appuyé</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GWindowRadioButton::slotCreateButtonClicked() {
    cout &lt;&lt; "slotCreateButtonClicked()...\n";
}
//===============================================
void GWindowRadioButton::slotReadButtonClicked() {
    cout &lt;&lt; "slotReadButtonClicked()...\n";
}
//===============================================
void GWindowRadioButton::slotUpdateButtonClicked() {
    cout &lt;&lt; "slotUpdateButtonClicked()...\n";
}
//===============================================
void GWindowRadioButton::slotDeleteButtonClicked() {
    cout &lt;&lt; "slotDeleteButtonClicked()...\n";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton radio-Mise en forme"><a class="Link9" href="#Bouton radio">Mise en forme</a></h2><br><h3 class="Title8 GTitle3">Mise en forme</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/*===============================================*/
/* QRadioButton */
QRadioButton {
    color: rgba(255, 255, 255, 1.0);
}
QRadioButton::indicator {
    border: none;
    width: 20px;
    height: 20px;
    border-radius: 10px;
}
QRadioButton::indicator::unchecked {
    background-color: rgba(55, 66, 107, 1.0);
}
QRadioButton::indicator:unchecked:hover {
    background-color: rgba(125, 136, 177, 1.0);
}
QRadioButton::indicator:unchecked:pressed {
    background-color: rgba(55, 180, 107, 1.0);
    image: url(data/img/radiobutton_white.png);
}
QRadioButton::indicator::checked {
    background-color: rgba(55, 180, 107, 1.0);
    image: url(data/img/radiobutton_white.png);
}
QRadioButton::indicator:checked:hover {
    background-color: rgba(55, 180, 107, 1.0);
    image: url(data/img/radiobutton_white.png);
}
QRadioButton::indicator:checked:pressed {
    background-color: rgba(55, 180, 107, 1.0);
    image: url(data/img/radiobutton_white.png);
}
/*===============================================*/</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bouton case à cocher"><a class="Link3" href="#">Bouton case à cocher</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser un <span class="GColor1" style="color:lime;">Bouton case à cocher</span> avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1557481438228"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1557481438228");</script></div><br><h2 class="Title7 GTitle2" id="Bouton case à cocher-Résultat"><a class="Link9" href="#Bouton case à cocher">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat bouton case à cocher</h3><div class="Img3 GImage"><img src="img/CheckBox.png" alt="img/CheckBox.png"></div><br><h3 class="Title8 GTitle3">Résultat bouton case à cocher appuyé</h3><div class="Img3 GImage"><img src="img/CheckBox_02.png" alt="img/CheckBox_02.png"></div><br><h2 class="Title7 GTitle2" id="Bouton case à cocher-Bouton case à cocher"><a class="Link9" href="#Bouton case à cocher">Bouton case à cocher</a></h2><br><h3 class="Title8 GTitle3">Bouton case à cocher</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GWindowCheckBox::GWindowCheckBox(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowCheckBox");
    setWindowFlags(Qt::Widget);

    QCheckBox* lCreate = new QCheckBox;
    lCreate-&gt;setText("Créer");
    lCreate-&gt;setCursor(Qt::PointingHandCursor);
    connect(lCreate, SIGNAL(clicked()), this, SLOT(slotCreateButtonClicked()));

    QCheckBox* lRead = new QCheckBox;
    lRead-&gt;setText("Lire");
    lRead-&gt;setCursor(Qt::PointingHandCursor);
    connect(lRead, SIGNAL(clicked()), this, SLOT(slotReadButtonClicked()));

    QCheckBox* lUpdate = new QCheckBox;
    lUpdate-&gt;setText("Modifier");
    lUpdate-&gt;setCursor(Qt::PointingHandCursor);
    connect(lUpdate, SIGNAL(clicked()), this, SLOT(slotUpdateButtonClicked()));

    QCheckBox* lDelete = new QCheckBox;
    lDelete-&gt;setText("Supprimer");
    lDelete-&gt;setCursor(Qt::PointingHandCursor);
    connect(lDelete, SIGNAL(clicked()), this, SLOT(slotDeleteButtonClicked()));

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;setAlignment(Qt::AlignLeft | Qt::AlignTop);
    lMainLayout-&gt;addWidget(lCreate);
    lMainLayout-&gt;addWidget(lRead);
    lMainLayout-&gt;addWidget(lUpdate);
    lMainLayout-&gt;addWidget(lDelete);

    setLayout(lMainLayout);
}
//===============================================
GWindowCheckBox::~GWindowCheckBox() {

}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton case à cocher-Bouton case à cocher appuyé"><a class="Link9" href="#Bouton case à cocher">Bouton case à cocher appuyé</a></h2><br><h3 class="Title8 GTitle3">Bouton case à cocher appuyé</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GWindowToolButton::slotFacebookButtonClicked() {
    cout &lt;&lt; "slotFacebookButtonClicked()...\n";
}
//===============================================
void GWindowToolButton::slotSkypeButtonClicked() {
    cout &lt;&lt; "slotSkypeButtonClicked()...\n";
}
//===============================================
void GWindowToolButton::slotGithubButtonClicked() {
    cout &lt;&lt; "slotGithubButtonClicked()...\n";
}
//===============================================
void GWindowToolButton::slotLinkedinButtonClicked() {
    cout &lt;&lt; "slotLinkedinButtonClicked()...\n";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Bouton case à cocher-Mise en forme"><a class="Link9" href="#Bouton case à cocher">Mise en forme</a></h2><br><h3 class="Title8 GTitle3">Mise en forme</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/*===============================================*/
/* QCheckBox */
QCheckBox {

}
QCheckBox::indicator {
    border: none;
    width: 20px;
    height: 20px;
    border-radius: 5px;
}
QCheckBox::indicator::unchecked {
    background-color: rgba(55, 66, 107, 1.0);
}
QCheckBox::indicator:unchecked:hover {
    background-color: rgba(125, 136, 177, 1.0);
}
QCheckBox::indicator:unchecked:pressed {
    background-color: rgba(55, 180, 107, 1.0);
    image: url(data/img/checkbox_white.png);
}
QCheckBox::indicator::checked {
    background-color: rgba(55, 180, 107, 1.0);
    image: url(data/img/checkbox_white.png);
}
QCheckBox::indicator:checked:hover {
    background-color: rgba(55, 180, 107, 1.0);
    image: url(data/img/checkbox_white.png);
}
QCheckBox::indicator:checked:pressed {
    background-color: rgba(55, 180, 107, 1.0);
    image: url(data/img/checkbox_white.png);
}
/*===============================================*/</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Onglets"><a class="Link3" href="#">Onglets</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser les <span class="GColor1" style="color:lime;">Onglets </span>avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1557776970491"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1557776970491");</script></div><br><h2 class="Title7 GTitle2" id="Onglets-Résultat"><a class="Link9" href="#Onglets">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat onglets</h3><div class="Img3 GImage"><img src="img/TabWidget.png" alt="img/TabWidget.png"></div><br><h3 class="Title8 GTitle3">Résultat onglets appuyés</h3><div class="Img3 GImage"><img src="img/TabWidget_05.png" alt="img/TabWidget_05.png"></div><br><h2 class="Title7 GTitle2" id="Onglets-Onglets"><a class="Link9" href="#Onglets">Onglets</a></h2><br><h3 class="Title8 GTitle3">Onglets</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GWindowTabWidget::GWindowTabWidget(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowTabWidget");
    setWindowFlags(Qt::Widget);

    QLabel* lCreate = new QLabel;
    lCreate-&gt;setObjectName("GTab");
    lCreate-&gt;setText("Créer");
    lCreate-&gt;setAlignment(Qt::AlignCenter);

    QLabel* lRead = new QLabel;
    lRead-&gt;setObjectName("GTab");
    lRead-&gt;setText("Lire");
    lRead-&gt;setAlignment(Qt::AlignCenter);

    QLabel* lUpdate = new QLabel;
    lUpdate-&gt;setObjectName("GTab");
    lUpdate-&gt;setText("Modifier");
    lUpdate-&gt;setAlignment(Qt::AlignCenter);

    QLabel* lDelete = new QLabel;
    lDelete-&gt;setObjectName("GTab");
    lDelete-&gt;setText("Supprimer");
    lDelete-&gt;setAlignment(Qt::AlignCenter);

    QTabWidget* lTabWidget = new QTabWidget;
    lTabWidget-&gt;addTab(lCreate, GPicto::Instance()-&gt;getPicto(fa::plus), "Creer");
    lTabWidget-&gt;addTab(lRead, GPicto::Instance()-&gt;getPicto(fa::filetexto), "Lire");
    lTabWidget-&gt;addTab(lUpdate, GPicto::Instance()-&gt;getPicto(fa::refresh), "Modifier");
    lTabWidget-&gt;addTab(lDelete, GPicto::Instance()-&gt;getPicto(fa::trasho), "Supprimer");
    lTabWidget-&gt;setUsesScrollButtons(false);
    lTabWidget-&gt;setIconSize(QSize(18, 18));
    connect(lTabWidget, SIGNAL(currentChanged(int)), this, SLOT(slotCurrentChanged(int)));

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout-&gt;addWidget(lTabWidget);

    setLayout(lMainLayout);
    resize(500, 500);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Onglets-Onglets appuyés"><a class="Link9" href="#Onglets">Onglets appuyés</a></h2><br><h3 class="Title8 GTitle3">Onglets appuyés</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GWindowTabWidget::slotCurrentChanged(const int &index) {
    QTabWidget* lTabWidget = qobject_cast&lt;QTabWidget*&gt;(sender());
    cout &lt;&lt; "slotCurrentChanged()...(" &lt;&lt; lTabWidget-&gt;tabText(index).toStdString() &lt;&lt; ")...\n";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Onglets-Mise en forme"><a class="Link9" href="#Onglets">Mise en forme</a></h2><br><h3 class="Title8 GTitle3">Mise en forme</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/*===============================================*/
/* QTabWidget */
QTabWidget {

}
QTabWidget::pane {
    background-color: rgba(55, 66, 107, 1.0);
    border-top: 5px solid rgba(5, 16, 57, 1.0);
    padding: 10px;
}
QTabWidget::tab-bar {
    left: 0px;
}
/*===============================================*/
/* QTabBar */
QTabBar::tab {
    background-color: rgba(86, 42, 65, 1.0);
    font-weight: normal;
    font-size: 16px;
    min-width: 0px;
    min-height: 35px;
}
QTabBar::tab:hover {
    background-color: rgba(35, 106, 87, 1.0);
}
QTabBar::tab:selected {
    background-color: rgba(55, 66, 107, 1.0);
}
/*===============================================*/</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Label"><a class="Link3" href="#">Label</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser un <span class="GColor1" style="color:lime;">Label </span>avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1557833132655"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1557833132655");</script></div><br><h2 class="Title7 GTitle2" id="Label-Résultat"><a class="Link9" href="#Label">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat label</h3><div class="Img3 GImage"><img src="img/Label.png" alt="img/Label.png"></div><br><h3 class="Title8 GTitle3">Résultat label multiligne</h3><div class="Img3 GImage"><img src="img/Label_02.png" alt="img/Label_02.png"></div><br><h3 class="Title8 GTitle3">Résultat label lien externe</h3><div class="Img3 GImage"><img src="img/Label_03.png" alt="img/Label_03.png"></div><br><h3 class="Title8 GTitle3">Résultat label image</h3><div class="Img3 GImage"><img src="img/Label_04.png" alt="img/Label_04.png"></div><br><h2 class="Title7 GTitle2" id="Label-Label"><a class="Link9" href="#Label">Label</a></h2><br><h3 class="Title8 GTitle3">Label</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GWindowLabel::GWindowLabel(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowLabel");
    setWindowFlags(Qt::Widget);

    QLabel* lLabel = new QLabel;
    lLabel-&gt;setText("Bonjour tout le monde");
    lLabel-&gt;setAlignment(Qt::AlignCenter);

    QLabel* lLabel2 = new QLabel;
    lLabel2-&gt;setText("ReadyDev est une Plateforme de Développement Continu. "
                     "C'est un site web développé en PHP et maintenu par Gérard KESSE. "
                     "Vous trouverez sur ce site des cours et des tutoriels adaptés aux sciences de l'ingénieur.");
    lLabel2-&gt;setAlignment(Qt::AlignVCenter | Qt::AlignJustify);
    lLabel2-&gt;setWordWrap(true);

    QLabel* lLabel3 = new QLabel;
    lLabel3-&gt;setText("&lt;b style='color:cyan'&gt;ReadyDev&lt;/b&gt; est une Plateforme de Développement Continu. "
                     "C'est un site web développé en &lt;b style='color:cyan'&gt;PHP&lt;/b&gt; et maintenu par &lt;b style='color:cyan'&gt;Gérard KESSE&lt;/b&gt;. "
                     "Vous trouverez sur ce site des &lt;b style='color:cyan'&gt;cours&lt;/b&gt; et des &lt;b style='color:cyan'&gt;tutoriels&lt;/b&gt; adaptés aux sciences de l'ingénieur.&lt;br&gt;&lt;br&gt;"
                     "Accédez au site officiel &lt;a style='font-style: italic; color:lime;' href='http://localhost:8800/'&gt;http://www.readydev.com&lt;/a&gt;");
    lLabel3-&gt;setAlignment(Qt::AlignVCenter | Qt::AlignJustify);
    lLabel3-&gt;setWordWrap(true);
    lLabel3-&gt;setOpenExternalLinks(true);

    QLabel* lLabel4 = new QLabel;
    QPixmap lPixmap("data/img/gopro.png");
    lLabel4-&gt;setPixmap(lPixmap.scaledToWidth(350));
    lLabel4-&gt;setAlignment(Qt::AlignCenter);

    QTabWidget* lTabWidget = new QTabWidget;
    lTabWidget-&gt;addTab(lLabel, "Label");
    lTabWidget-&gt;addTab(lLabel2, "WordWrap");
    lTabWidget-&gt;addTab(lLabel3, "ExternalLinks");
    lTabWidget-&gt;addTab(lLabel4, "Pixmap");
    lTabWidget-&gt;setUsesScrollButtons(false);

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout-&gt;addWidget(lTabWidget);

    setLayout(lMainLayout);
    resize(500, 500);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Label-Mise en forme"><a class="Link9" href="#Label">Mise en forme</a></h2><br><h3 class="Title8 GTitle3">Mise en forme</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/*===============================================*/
/* QLabel */
QLabel {
    background-color: rgba(5, 16, 57, 1.0);
    font-size: 20px;
    padding: 10px;
}
/*===============================================*/</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="ListView"><a class="Link3" href="#">ListView</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser un <span class="GColor1" style="color:lime;">ListView </span>avec Qt.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1557945259244"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1557945259244");</script></div><br><h2 class="Title7 GTitle2" id="ListView-Résultat"><a class="Link9" href="#ListView">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat ListView</h3><br><h3 class="Title8 GTitle3">Résultat ListView Icone Texte<br></h3><br><h3 class="Title8 GTitle3">Résultat ListView Icone Mode<br></h3><br><br><br><br><br><br><br><br><br><br><br><br><br></div></div></div></div><br>