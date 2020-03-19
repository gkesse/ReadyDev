<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la création d'un logiciel de traitement d'images en C++ avec Qt</div></a></div></div><div class="Body2 Orange"><b>Qt</b> est une bibliothèque de création d'interfaces homme-machine.<br><b>OpenCV </b>est une bibliothèque pour la vision par ordinateur.<br>Le but de ce tutoriel est de vous apprendre la création d'un logiciel de traitement d'images en <b>C++</b> avec <b>Qt</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la création d'un logiciel de traitement d'images en <span class="GColor1" style="color:lime;">C++</span> avec <span class="GColor1" style="color:lime;">Qt</span>, sous Windows.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- Qt Creator, comme bibliothèque de création d'IHM.<br>- MinGW, comme compilateur.<br>- OpenCV, comme bibliothèque de vision par ordinateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Installer Qt Creator</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h3 class="Title8 GTitle3">Installer MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Installer OpenCV</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://opencv.org/">https://opencv.org/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Création de la fenêtre principale"><a class="Link3" href="#">Création de la fenêtre principale</a></h1><div class="Body3">Le but de cette section est de vous apprendre à la <span class="GColor1" style="color:lime;">Création de la fenêtre principale </span>avec Qt.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1583914115740"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1583914115740");</script></div><br><h2 class="Title7 GTitle2" id="Création de la fenêtre principale-Résultat"><a class="Link9" href="#Création de la fenêtre principale">Résultat</a></h2><br><h3 class="Title8 GTitle3">Présentation de la fenêtre principale</h3><div class="Img3 GImage"><img src="img/MainWindow.png" alt="img/MainWindow.png"></div><br><h2 class="Title7 GTitle2" id="Création de la fenêtre principale-Création de la fenêtre principale"><a class="Link9" href="#Création de la fenêtre principale">Création de la fenêtre principale</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GWindowDefault::GWindowDefault(QWidget* parent) :
GWindow(parent) {
    __CLASSNAME__ = __FUNCTION__;
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    QHBoxLayout* lCenterLayout = new QHBoxLayout;

    GTitle* lTitle = GTitle::Create("DEFAULT");
    GMenu* lMenu = GMenu::Create("DEFAULT");
    GWorkspace* lWorkspace = GWorkspace::Create("DEFAULT");
    GSection* lSection = GSection::Create("DEFAULT");
    GStatusBar* lStatusBar = GStatusBar::Create("DEFAULT");
    GImage* lImage = GImage::Instance();
    GManager* lManager = GManager::Instance();

    lCenterLayout-&gt;setMargin(0);
    lCenterLayout-&gt;setSpacing(0);
    lCenterLayout-&gt;addWidget(lMenu);
    lCenterLayout-&gt;addWidget(lWorkspace, 1);
    lCenterLayout-&gt;addWidget(lSection);

    lMainLayout-&gt;setMargin(0);
    lMainLayout-&gt;setSpacing(0);
    lMainLayout-&gt;addWidget(lTitle);
    lMainLayout-&gt;addLayout(lCenterLayout, 1);
    lMainLayout-&gt;addWidget(lStatusBar);

    setLayout(lMainLayout);

    setWindowFlags(Qt::FramelessWindowHint | Qt::Window);

    connect(lTitle, SIGNAL(emitWindowPress(QPoint)), this, SLOT(slotWindowPress(QPoint)));
    connect(lTitle, SIGNAL(emitWindowMove(QPoint)), this, SLOT(slotWindowMove(QPoint)));
    connect(lTitle, SIGNAL(emitWindowMinimize()), this, SLOT(slotWindowMinimize()));
    connect(lTitle, SIGNAL(emitWindowMaximize()), this, SLOT(slotWindowMaximize()));
    connect(lTitle, SIGNAL(emitWindowClose()), this, SLOT(close()));
    connect(lTitle, SIGNAL(emitWindowFullScreen()), this, SLOT(slotWindowFullScreen()));

    connect(lMenu, SIGNAL(emitAddModuleMenuSelect(QString)), lSection, SLOT(slotAddModuleMenuSelect(QString)));
    connect(lMenu, SIGNAL(emitSettingMenuSelect(QString)), this, SLOT(slotSettingMenuSelect(QString)));

    connect(lSection, SIGNAL(emitAddModuleMenuSelect(QString, int)), lWorkspace, SLOT(slotAddModuleMenuSelect(QString, int)));
    connect(lSection, SIGNAL(emitModuleMenuAction(QString, int)), this, SLOT(slotModuleMenuAction(QString, int)));
    connect(lSection, SIGNAL(emitModuleCurrent(int)), lWorkspace, SIGNAL(emitModuleCurrent(int)));

    connect(lWorkspace, SIGNAL(emitModuleCurrent(int)), lSection, SLOT(slotModuleCurrent(int)));

    connect(lImage, SIGNAL(emitImageOpen(int, QString)), lWorkspace, SLOT(slotImageOpen(int, QString)));
    connect(lImage, SIGNAL(emitImageOpen(QString)), lWorkspace, SLOT(slotSetImage(QString)));

    connect(lManager, SIGNAL(emitModuleMax()), this, SLOT(slotModuleMax()));

    connect(this, SIGNAL(windowTitleChanged(QString)), lTitle, SLOT(slotWindowTitleChange(QString)));
    connect(this, SIGNAL(windowIconChanged(QIcon)), lTitle, SLOT(slotWindowIconChange(QIcon)));
    connect(this, SIGNAL(emitWindowMaximize(int, int)), lTitle, SLOT(slotWindowMaximize(int, int)));
    connect(this, SIGNAL(emitWindowFullScreen(int, int)), lTitle, SLOT(slotWindowFullScreen(int, int)));

    setWindowTitle(tr("Qt | ReadyDev"));
    GPicto::Instance()-&gt;setColor("orange");
    setWindowIcon(GPicto::Instance()-&gt;getPicto(fa::snowflakeo));

    m_sizeGrip = new QSizeGrip(this);

    m_pixmapBg.load(":/img/vision.png");
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Suppression de la barre de titre par défaut"><a class="Link3" href="#">Suppression de la barre de titre par défaut</a></h1><div class="Body3">Le but de cette section est de vous apprendre à l'Ajout d'un système de redimensionnement avec Qt.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1583965622247"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1583965622247");</script></div><br><h2 class="Title7 GTitle2" id="Suppression de la barre de titre par défaut-Résultat"><a class="Link9" href="#Suppression de la barre de titre par défaut">Résultat</a></h2><br><h3 class="Title8 GTitle3">Présentation de la barre de titre par défaut</h3><div class="Img3 GImage"><img src="img/DefaultTitleBar.png" alt="img/DefaultTitleBar.png"></div><br><h2 class="Title7 GTitle2" id="Suppression de la barre de titre par défaut-Suppression de la barre de titre par défaut"><a class="Link9" href="#Suppression de la barre de titre par défaut">Suppression de la barre de titre par défaut</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GWindowDefault::GWindowDefault(QWidget* parent) :
GWindow(parent) {
    __CLASSNAME__ = __FUNCTION__;
    ...
    setWindowFlags(Qt::FramelessWindowHint | Qt::Window);
    ...
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ajout d'un système de redimensionnement"><a class="Link3" href="#">Ajout d'un système de redimensionnement</a></h1><div class="Body3">Le but de cette section est de vous apprendre à l'<span class="GColor1" style="color:lime;">Ajout d'un système de redimensionnement</span> avec Qt.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1583959502246"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1583959502246");</script></div><br><h2 class="Title7 GTitle2" id="Ajout d'un système de redimensionnement-Résultat"><a class="Link9" href="#Ajout d'un système de redimensionnement">Résultat</a></h2><br><h3 class="Title8 GTitle3">Présentation du système de redimensionnement</h3><div class="Img3 GImage"><img src="img/Resize.png" alt="img/Resize.png"></div><br><h2 class="Title7 GTitle2" id="Ajout d'un système de redimensionnement-Ajout d'un système de redimensionnement"><a class="Link9" href="#Ajout d'un système de redimensionnement">Ajout d'un système de redimensionnement</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GWindowDefault::GWindowDefault(QWidget* parent) :
GWindow(parent) {
    __CLASSNAME__ = __FUNCTION__;
    ...
    m_sizeGrip = new QSizeGrip(this);
    ...
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajout d'un système de redimensionnement-Positionnement du système de redimensionnement"><a class="Link9" href="#Ajout d'un système de redimensionnement">Positionnement du système de redimensionnement</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GWindow::resizeEvent(QResizeEvent *event) {
    //GDebug::Instance()-&gt;write("%s::%s()", __CLASSNAME__, __FUNCTION__);
    int lSizeGrip = 10;
    m_sizeGrip-&gt;setGeometry(width() - lSizeGrip, height() - lSizeGrip, lSizeGrip, lSizeGrip);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Création de la barre de titre"><a class="Link3" href="#">Création de la barre de titre</a></h1><div class="Body3">Le but de cette section est de vous apprendre à la <span class="GColor1" style="color:lime;">Création de la barre de titre </span>avec Qt.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1583929400758"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1583929400758");</script></div><br><h2 class="Title7 GTitle2" id="Création de la barre de titre-Résultat"><a class="Link9" href="#Création de la barre de titre">Résultat</a></h2><br><h3 class="Title8 GTitle3">Présentation de la barre de titre</h3><div class="Img3 GImage"><img src="img/TitleBar.png" alt="img/TitleBar.png"></div><br><h2 class="Title7 GTitle2" id="Création de la barre de titre-Création de la barre de titre"><a class="Link9" href="#Création de la barre de titre">Création de la barre de titre</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GTitleDefault::GTitleDefault(QWidget* parent) :
GTitle(parent) {
    __CLASSNAME__ = __FUNCTION__;
    QHBoxLayout* lMainLayout = new QHBoxLayout;

    m_icon = new QToolButton;
    m_icon-&gt;setObjectName("GIcon");
    m_icon-&gt;setCursor(Qt::ArrowCursor);
    m_icon-&gt;setIconSize(QSize(30, 30));

    m_title = new QLabel(tr("TITRE"));
    m_title-&gt;setObjectName("GTitle2");

    QToolButton* lMinimize = new QToolButton;
    lMinimize-&gt;setObjectName("GToolButton");
    lMinimize-&gt;setCursor(Qt::PointingHandCursor);
    lMinimize-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::windowminimize));
    lMinimize-&gt;setIconSize(QSize(20, 20));

    m_maximize = new QToolButton;
    m_maximize-&gt;setObjectName("GToolButton");
    m_maximize-&gt;setCursor(Qt::PointingHandCursor);
    m_maximize-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::windowmaximize));
    m_maximize-&gt;setIconSize(QSize(20, 20));

    QToolButton* lClose = new QToolButton;
    lClose-&gt;setObjectName("GToolButton2");
    lClose-&gt;setCursor(Qt::PointingHandCursor);
    lClose-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::close));
    lClose-&gt;setIconSize(QSize(20, 20));

    lMainLayout-&gt;setMargin(0);
    lMainLayout-&gt;setSpacing(0);
    lMainLayout-&gt;addWidget(m_icon);
    lMainLayout-&gt;addWidget(m_title, 1);
    lMainLayout-&gt;addWidget(lMinimize);
    lMainLayout-&gt;addWidget(m_maximize);
    lMainLayout-&gt;addWidget(lClose);

    setLayout(lMainLayout);

    connect(lMinimize, SIGNAL(clicked()), this, SIGNAL(emitWindowMinimize()));
    connect(m_maximize, SIGNAL(clicked()), this, SIGNAL(emitWindowMaximize()));
    connect(lClose, SIGNAL(clicked()), this, SIGNAL(emitWindowClose()));
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création de la barre de titre-Détection de l'appui sur la barre de titre"><a class="Link9" href="#Création de la barre de titre">Détection de l'appui sur la barre de titre</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GTitle::mousePressEvent(QMouseEvent *event) {
    //GDebug::Instance()-&gt;write("%s::%s()", __CLASSNAME__, __FUNCTION__);
    if(event-&gt;button() == Qt::LeftButton) {
        QPoint lPressPosition = event-&gt;globalPos();
        emit emitWindowPress(lPressPosition);
    }
    QWidget::mousePressEvent(event);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création de la barre de titre-Détection du déplacement de la barre de titre"><a class="Link9" href="#Création de la barre de titre">Détection du déplacement de la barre de titre</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GTitle::mouseMoveEvent(QMouseEvent *event) {
    //GDebug::Instance()-&gt;write("%s::%s()", __CLASSNAME__, __FUNCTION__);
    if(event-&gt;buttons() & Qt::LeftButton) {
        QPoint lMovePosition = event-&gt;globalPos();
        emit emitWindowMove(lMovePosition);
    }
    QWidget::mouseMoveEvent(event);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création de la barre de titre-Détection du double-click sur la barre de titre"><a class="Link9" href="#Création de la barre de titre">Détection du double-click sur la barre de titre</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GTitle::mouseDoubleClickEvent(QMouseEvent *event) {
    //GDebug::Instance()-&gt;write("%s::%s()", __CLASSNAME__, __FUNCTION__);
    if(event-&gt;button() == Qt::LeftButton) {
        emit emitWindowFullScreen();
    }
    QWidget::mouseDoubleClickEvent(event);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création de la barre de titre-Mise à jour de l'icône de la barre de titre"><a class="Link9" href="#Création de la barre de titre">Mise à jour de l'icône de la barre de titre</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GTitle::slotWindowTitleChange(QString title) {
    GDebug::Instance()-&gt;write("%s::%s()", __CLASSNAME__, __FUNCTION__);
    m_title-&gt;setText(title);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création de la barre de titre-Mise à jour&nbsp; du titre de la barre de titre"><a class="Link9" href="#Création de la barre de titre">Mise à jour&nbsp; du titre de la barre de titre</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GTitle::slotWindowIconChange(QIcon icon) {
    GDebug::Instance()-&gt;write("%s::%s()", __CLASSNAME__, __FUNCTION__);
    m_icon-&gt;setIcon(icon);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Création de la barre de menu"><a class="Link3" href="#">Création de la barre de menu</a></h1><div class="Body3">Le but de cette section est de vous apprendre à la <span class="GColor1" style="color:lime;">Création de la barre de menu </span>avec Qt.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1583951136851"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1583951136851");</script></div><br><h2 class="Title7 GTitle2" id="Création de la barre de menu-Résultat"><a class="Link9" href="#Création de la barre de menu">Résultat</a></h2><br><h3 class="Title8 GTitle3">Présentation de la barre de menu</h3><div class="Img3 GImage"><img src="img/MenuBar.png" alt="img/MenuBar.png"></div><br><h2 class="Title7 GTitle2" id="Création de la barre de menu-Création de la barre de menu"><a class="Link9" href="#Création de la barre de menu">Création de la barre de menu</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GMenuDefault::GMenuDefault(QWidget* parent) :
GMenu(parent) {
    __CLASSNAME__ = __FUNCTION__;
    QVBoxLayout* lMainLayout = new QVBoxLayout;

    QToolButton* lAddModule = new QToolButton;
    lAddModule-&gt;setObjectName("GToolButton");
    lAddModule-&gt;setToolTip(tr("Ajouter un module"));
    lAddModule-&gt;setCursor(Qt::PointingHandCursor);
    lAddModule-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::plus));
    lAddModule-&gt;setIconSize(QSize(20, 20));

    QToolButton* lSetting = new QToolButton;
    lSetting-&gt;setObjectName("GToolButton");
    lSetting-&gt;setToolTip(tr("Accéder aux paramètres"));
    lSetting-&gt;setCursor(Qt::PointingHandCursor);
    lSetting-&gt;setIcon(GPicto::Instance()-&gt;getPicto(fa::cogs));
    lSetting-&gt;setIconSize(QSize(20, 20));

    lMainLayout-&gt;setMargin(0);
    lMainLayout-&gt;setSpacing(0);
    lMainLayout-&gt;setAlignment(Qt::AlignTop);
    lMainLayout-&gt;addWidget(lAddModule);
    lMainLayout-&gt;addWidget(lSetting);

    setLayout(lMainLayout);

    createAddModuleMenu();
    createSettingMenu();

    connect(lAddModule, SIGNAL(clicked()), this, SLOT(slotAddModuleMenuOpen()));
    connect(lSetting, SIGNAL(clicked()), this, SLOT(slotSettingMenuOpen()));
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Création de l'espace de travail"><a class="Link3" href="#">Création de l'espace de travail</a></h1><div class="Body3">Le but de cette section est de vous apprendre à la <span class="GColor1" style="color:lime;">Création de l'espace de travail </span>avec Qt.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1583957152780"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1583957152780");</script></div><br><h2 class="Title7 GTitle2" id="Création de l'espace de travail-Résultat"><a class="Link9" href="#Création de l'espace de travail">Résultat</a></h2><br><h3 class="Title8 GTitle3">Présentation de l'espace de travail</h3><div class="Img3 GImage"><img src="img/Workspace.png" alt="img/Workspace.png"></div><br><h2 class="Title7 GTitle2" id="Création de l'espace de travail-Création de l'espace de travail"><a class="Link9" href="#Création de l'espace de travail">Création de l'espace de travail</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GWorkspaceDefault::GWorkspaceDefault(QWidget* parent) :
GWorkspace(parent) {
    __CLASSNAME__ = __FUNCTION__;
    QVBoxLayout* lMainLayout = new QVBoxLayout;

    m_workspace = new QStackedWidget;
    QLabel* lWorkspace = new QLabel(tr("Workspace"));
    lWorkspace-&gt;setAlignment(Qt::AlignCenter);
    m_workspace-&gt;addWidget(lWorkspace);

    lMainLayout-&gt;setMargin(0);
    lMainLayout-&gt;setSpacing(0);
    lMainLayout-&gt;addWidget(m_workspace);

    setLayout(lMainLayout);

    connect(this, SIGNAL(emitModuleCurrent(int)), m_workspace, SLOT(setCurrentIndex(int)));
    connect(this, SIGNAL(emitModuleCurrent(int)), this, SLOT(slotSetModuleIndex(int)));
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Création de la barre de section"><a class="Link3" href="#">Création de la barre de section</a></h1><div class="Body3">Le but de cette section est de vous apprendre à la <span class="GColor1" style="color:lime;">Création de la barre de section </span>avec Qt.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1583958713513"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1583958713513");</script></div><br><h2 class="Title7 GTitle2" id="Création de la barre de section-Résultat"><a class="Link9" href="#Création de la barre de section">Résultat</a></h2><br><h3 class="Title8 GTitle3">Présentation de la barre de section</h3><div class="Img3 GImage"><img src="img/Section.png" alt="img/Section.png"></div><br><h2 class="Title7 GTitle2" id="Création de la barre de section-Création de la barre de section"><a class="Link9" href="#Création de la barre de section">Création de la barre de section</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GSectionDefault::GSectionDefault(QWidget* parent) :
GSection(parent) {
    __CLASSNAME__ = __FUNCTION__;
    QVBoxLayout* lMainLayout = new QVBoxLayout;

    m_scrollArea = new QScrollArea;
    m_scrollLayout = new QVBoxLayout;
    m_scrollWidget = new QWidget;

    m_scrollLayout-&gt;setMargin(0);
    m_scrollLayout-&gt;setSpacing(0);
    m_scrollLayout-&gt;setAlignment(Qt::AlignTop);

    m_scrollWidget-&gt;setLayout(m_scrollLayout);
    m_scrollWidget-&gt;installEventFilter(this);

    m_scrollArea-&gt;setWidget(m_scrollWidget);
    m_scrollArea-&gt;setVerticalScrollBarPolicy(Qt::ScrollBarAsNeeded);
    m_scrollArea-&gt;setHorizontalScrollBarPolicy(Qt::ScrollBarAlwaysOff);
    m_scrollArea-&gt;setWidgetResizable(true);
    m_scrollArea-&gt;verticalScrollBar()-&gt;setCursor(Qt::PointingHandCursor);
    m_scrollArea-&gt;setSizePolicy(QSizePolicy::Ignored, QSizePolicy::Expanding);
    m_scrollArea-&gt;verticalScrollBar()-&gt;installEventFilter(this);

    lMainLayout-&gt;setMargin(0);
    lMainLayout-&gt;setSpacing(0);
    lMainLayout-&gt;setAlignment(Qt::AlignTop);
    lMainLayout-&gt;addWidget(m_scrollArea);

    setLayout(lMainLayout);

    m_timer = new QTimer(this);
    m_timer-&gt;setInterval(50);
    m_timer-&gt;setSingleShot(true);
    connect(m_timer, SIGNAL(timeout()), this, SLOT(slotAddModuleMenuTimer()));
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Création de la barre d'état"><a class="Link3" href="#">Création de la barre d'état</a></h1><div class="Body3">Le but de cette section est de vous apprendre à la <span class="GColor1" style="color:lime;">Création de la barre d'état </span>avec Qt.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1583958156812"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1583958156812");</script></div><br><h2 class="Title7 GTitle2" id="Création de la barre d'état-Résultat"><a class="Link9" href="#Création de la barre d'état">Résultat</a></h2><br><h3 class="Title8 GTitle3">Présentation de la barre d'état</h3><div class="Img3 GImage"><img src="img/StatusBar.png" alt="img/StatusBar.png"></div><br><h2 class="Title7 GTitle2" id="Création de la barre d'état-Création de la barre d'état"><a class="Link9" href="#Création de la barre d'état">Création de la barre d'état</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GStatusBarDefault::GStatusBarDefault(QWidget* parent) :
GStatusBar(parent) {
    __CLASSNAME__ = __FUNCTION__;
    QHBoxLayout* lMainLayout = new QHBoxLayout;

    QLabel* lStatusBar = new QLabel("StatusBar");
    lStatusBar-&gt;setObjectName("status_bar");

    lMainLayout-&gt;setMargin(0);
    lMainLayout-&gt;setSpacing(0);
    lMainLayout-&gt;setAlignment(Qt::AlignLeft);
    lMainLayout-&gt;addWidget(lStatusBar);

    setLayout(lMainLayout);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br>