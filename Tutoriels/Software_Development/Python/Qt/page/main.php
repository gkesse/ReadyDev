<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Création d'interfaces homme-machine avec Qt en Python<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la création d'interfaces homme-machine avec <b>Qt </b>en <b>Python</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Qt </b>est une bibliothèque de composants d'interfaces graphiques (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc, et doté d'un mécanisme de notifications par des signaux et slots.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/b_qt.png" alt="/Tutoriels/Software_Development/Python/img/b_qt.png"></div><br><h2 class="Title7 GTitle2" id="Introduction-Prérequis"><a class="Link9" href="#Introduction">Prérequis</a></h2><br>$\checkmark$ <a class="Link7 GLink1" style="color:lime;" href="../#Installation">Installer l'environnement Python</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Qt pour Python.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616688816465"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616688816465");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous Batch"><a class="Link9" href="#Installation">1.1 - Installation sous Batch</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Installer PyQt5"><a class="Link9" href="#Installation">1.1.1 - Installer PyQt5</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">python -m pip install pyqt5</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Qt en Python.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616705914360"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616705914360");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous Batch"><a class="Link9" href="#Tests">1.1 - Test sous Batch</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Editer le programme"><a class="Link9" href="#Tests">1.1.1 - Editer le programme</a></h2><br><h3 class="Title8 GTitle3">main.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
import sys
from PyQt5.QtWidgets import *
from PyQt5.QtGui import *
from PyQt5.QtCore import *
#================================================
def window():
    lApp = QApplication(sys.argv)

    lWindow = QWidget()

    lLabel = QLabel()
    lLabel.setText("Bonjour tout le monde")
    lLabel.setAlignment(Qt.AlignCenter)

    lMainLayout = QVBoxLayout()
    lMainLayout.addWidget(lLabel)

    lWindow.setLayout(lMainLayout)
    lWindow.setWindowTitle("ReadyApp")
    lWindow.resize(500, 250)
    
    lWindow.show()

    sys.exit(lApp.exec_())
#================================================
if __name__ == '__main__':
    window()
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.2 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">python main.py</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/i_qt_test.png" alt="/Tutoriels/Software_Development/Python/img/i_qt_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration avec Qt en Python.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617638018266"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617638018266");</script></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Introduction"><a class="Link9" href="#Système d'administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface graphique permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme principal"><a class="Link9" href="#Système d'administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">GQt.Instance().run()</xmp></pre></div><br><h3 class="Title8 GTitle3">GQt.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
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
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Système d'administration"><a class="Link9" href="#Système d'administration">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GWindow.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
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
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Ajout d'une page"><a class="Link9" href="#Système d'administration">Ajout d'une page</a></h2><br><h3 class="Title8 GTitle3">GWindow.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def addPage(self, key, title, widget, isDefault = 0):
    lApp = GManager.Instance().getData().app
    lWidgetId = lApp.page_map.count()
    lApp.page_id[key] = lWidgetId
    lApp.title_map[key] = title
    lApp.page_map.addWidget(widget)
    if isDefault == 1: GManager.Instance().setPage(key)
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Page d'accueil"><a class="Link9" href="#Système d'administration">Page d'accueil</a></h2><br><h3 class="Title8 GTitle3">GHome.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def __init__(self): 
    super().__init__()
    lApp = GManager.Instance().getData().app
    
    lListBox = GWidget.Create("listbox")
    lListBox.addItem("home/login", "Connexion")
    lListBox.addItem("home/sqlite", "SQLite")
    lListBox.addItem("home/opencv", "OpenCV")
    lListBox.addItem("home/debug", "Debug")
    
    lMainLayout = QVBoxLayout()
    lMainLayout.addWidget(lListBox)
    lMainLayout.setContentsMargins(0, 0, 0, 0)
    lMainLayout.setSpacing(0)
    
    self.setLayout(lMainLayout)
    
    lListBox.emitItemClcik.connect(self.slotItemClick)
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Sélection d'une page"><a class="Link9" href="#Système d'administration">Sélection d'une page</a></h2><br><h3 class="Title8 GTitle3">GListBox.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def slotItemClick(self):
    lApp = GManager.Instance().getData().app
    lWidget = self.sender()
    lApp.widget_id = self.m_widgetId[lWidget]
    self.emitItemClcik.emit()
#================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GHome.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def slotItemClick(self):
    lApp = GManager.Instance().getData().app
    GManager.Instance().setPage(lApp.widget_id);
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Affichage d'une page"><a class="Link9" href="#Système d'administration">Affichage d'une page</a></h2><br><h3 class="Title8 GTitle3">GManager.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
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
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><h3 class="Title8 GTitle3">Page d'accueil</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/i_qt_admin_system.png" alt="/Tutoriels/Software_Development/Python/img/i_qt_admin_system.png"></div><br><h3 class="Title8 GTitle3">Page de connexion</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/i_qt_admin_system_02.png" alt="/Tutoriels/Software_Development/Python/img/i_qt_admin_system_02.png"></div><br><h3 class="Title8 GTitle3">Page de débogage</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/i_qt_admin_system_03.png" alt="/Tutoriels/Software_Development/Python/img/i_qt_admin_system_03.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3"><br>Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Bibliothèques Python</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1617637557806"><div class="Row26">List 1 &gt; Python &gt; libs</div></div><script>loadList1("Loader_1617637557806","Python","libs");</script></div><br></div></div></div></div><br>