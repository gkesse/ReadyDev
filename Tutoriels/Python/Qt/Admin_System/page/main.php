<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un système d'administration Qt en Python</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un système d'administration Qt en <b>Python</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Python </b>est un langage de programmation interprété orienté objet, multiplateforme et doté d'un typage dynamique fort et d'une gestion automatique de la mémoire par ramasse-miettes.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Python/img/b_qt_admin_system.png" alt="/Tutoriels/Python/img/b_qt_admin_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un système d'administration Qt en Python"><a class="Link3" href="#">Créer un système d'administration Qt en Python</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599903147417"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599903147417");</script></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration Qt en Python-Introduction"><a class="Link9" href="#Créer un système d'administration Qt en Python">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un système d'administration Qt en Python (GWindow).<br><br><h2 class="Title7 GTitle2" id="Créer un système d'administration Qt en Python-Programme principal"><a class="Link9" href="#Créer un système d'administration Qt en Python">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GQt.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run(self):
    lApp = GManager.Instance().getData().app
    app = QApplication(sys.argv)
    lApp.qapp = app;
    GManager.Instance().loadFont()
    GManager.Instance().loadImg()
    GManager.Instance().loadStyle()
    lWindow = GWidget.Create("window")
    lWindow.show()
    app.exec_()
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration Qt en Python-Système d'administration"><a class="Link9" href="#Créer un système d'administration Qt en Python">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GWindow.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def __init__(self): 
    super().__init__()
    self.setObjectName("GWindow")
    lApp = GManager.Instance().getData().app
    lApp.win = self
    
    lTitleBar = GWidget.Create("titlebar")
    lAddressBar = GWidget.Create("addressbar")
    
    lAddressKey = GWidget.Create("addresskey")
    lApp.address_key = lAddressKey
    
    lWorkspace = QStackedWidget()
    lWorkspace.setObjectName("workspace")
    lApp.page_map = lWorkspace
    
    self.addPage("home", "Accueil", GWidget.Create("home"), 1)
    self.addPage("home/login", "Connexion", GWidget.Create("login"))
    self.addPage("home/sqlite", "SQLite", GWidget.Create("sqlite"))
    self.addPage("home/opencv", "OpenCV", GWidget.Create("opencv"))
    self.addPage("home/debug", "Debug", GWidget.Create("debug"))
    
    lMainLayout = QVBoxLayout()
    lMainLayout.addWidget(lTitleBar)
    lMainLayout.addWidget(lAddressBar)
    lMainLayout.addWidget(lAddressKey)
    lMainLayout.addWidget(lWorkspace, 1)
    lMainLayout.setContentsMargins(0, 0, 0, 0)
    lMainLayout.setSpacing(10)
    
    self.setLayout(lMainLayout)
    
    self.setWindowFlags(Qt.Window | Qt.FramelessWindowHint)
    self.setWindowIcon(QIcon(lApp.img_map["logo.png"]))
    self.setWindowTitle(lApp.app_name)
    self.resize(lApp.win_width, lApp.win_height)
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration Qt en Python-Ajout d'une page"><a class="Link9" href="#Créer un système d'administration Qt en Python">Ajout d'une page</a></h2><br><h3 class="Title8 GTitle3">GWindow.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def addPage(self, key, title, widget, isDefault = 0):
    lApp = GManager.Instance().getData().app
    lWidgetId = lApp.page_map.count()
    lApp.page_id[key] = lWidgetId
    lApp.title_map[key] = title
    lApp.page_map.addWidget(widget)
    if isDefault == 1: GManager.Instance().setPage(key)
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration Qt en Python-Affichage d'une page"><a class="Link9" href="#Créer un système d'administration Qt en Python">Affichage d'une page</a></h2><br><h3 class="Title8 GTitle3">GManager.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def setPage(self, address):
    lPageId = self.mgr.app.page_id.get(address, -1)
    if lPageId == -1: self.mgr.app.address.setText(self.mgr.app.address_url); return
    lPage = self.mgr.app.page_map.widget(lPageId)
    self.mgr.app.address_new = address;
    if lPage.loadPage() == 0: self.mgr.app.address.setText(self.mgr.app.address_url); return
    self.mgr.app.page_map.setCurrentIndex(lPageId);
    self.mgr.app.address.setText(address);
    self.mgr.app.address_url = address;
    self.mgr.app.address_key.setContent(address);
    self.mgr.app.title.setText(self.mgr.app.title_map[address]);
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration Qt en Python-Résultat"><a class="Link9" href="#Créer un système d'administration Qt en Python">Résultat</a></h2><br><h3 class="Title8 GTitle3">Page d'accueil</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Python/img/i_qt_admin_system.png" alt="/Tutoriels/Python/img/i_qt_admin_system.png"></div><br><h3 class="Title8 GTitle3">Interface du module de Login</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Python/img/i_qt_admin_system_02.png" alt="/Tutoriels/Python/img/i_qt_admin_system_02.png"></div><br><h3 class="Title8 GTitle3">Interface du module de débogage</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Python/img/i_qt_admin_system_03.png" alt="/Tutoriels/Python/img/i_qt_admin_system_03.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3"><br>Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1599902988430"><div class="Row26">List 1 &gt; Python &gt; basics</div></div><script>loadList1("Loader_1599902988430","Python","basics");</script></div><br></div></div></div></div><br>