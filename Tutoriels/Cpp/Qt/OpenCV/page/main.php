<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la création d'un logiciel de traitement d'images en C++ avec Qt</div></a></div></div><div class="Body2 Orange"><b>Qt</b> est une bibliothèque de création d'interfaces homme-machine.<br><b>OpenCV </b>est une bibliothèque pour la vision par ordinateur.<br>Le but de ce tutoriel est de vous apprendre la création d'un logiciel de traitement d'images en <b>C++</b> avec <b>Qt</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la création d'un logiciel de traitement d'images en <span class="GColor1" style="color:lime;">C++</span> avec <span class="GColor1" style="color:lime;">Qt</span>, sous Windows.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- Qt Creator, comme environnement de développement intégré.<br>- MinGW, comme compilateur.<br>- OpenCV, comme bibliothèque de vision par ordinateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Installer Qt Creator</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h3 class="Title8 GTitle3">Installer MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Télécharger OpenCV</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://opencv.org/">https://opencv.org/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Création de la fenêtre principale"><a class="Link3" href="#">Création de la fenêtre principale</a></h1><div class="Body3">Le but de cette section est de vous apprendre à la <span class="GColor1" style="color:lime;">Création de la fenêtre principale </span>avec Qt.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1583914115740"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1583914115740");</script></div><br><h2 class="Title7 GTitle2" id="Création de la fenêtre principale-Résultat"><a class="Link9" href="#Création de la fenêtre principale">Résultat</a></h2><br><h3 class="Title8 GTitle3">Présentation de la fenêtre principale</h3><div class="Img3 GImage"><img src="img/MainWindow.png" alt="img/MainWindow.png"></div><br><h2 class="Title7 GTitle2" id="Création de la fenêtre principale-Création de la fenêtre principale"><a class="Link9" href="#Création de la fenêtre principale">Création de la fenêtre principale</a></h2><br><h3 class="Title8 GTitle3">Création de la fenêtre principale</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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

	setWindowTitle(tr("OpenCV | ReadyDev"));
	GPicto::Instance()-&gt;setColor("orange");
	setWindowIcon(GPicto::Instance()-&gt;getPicto(fa::snowflakeo));

	m_sizeGrip = new QSizeGrip(this);

	m_pixmapBg.load(":/img/vision.png");
}
//===============================================</xmp></pre></div><br></div></div></div></div><br>