<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en Python</div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>Python</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1599898225826"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1599898225826");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Python </b>est un langage de programmation interprété orienté objet, multi-plateforme et doté d'un typage dynamique fort et d'une gestion automatique de la mémoire par ramasse-miettes.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/b_python.png" alt="/Tutoriels/Software_Development/Python/img/b_python.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Python.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617616549921"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617616549921");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Télécharger Python"><a class="Link9" href="#Installation">1.1 - Télécharger Python</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.python.org/downloads/windows/">https://www.python.org/downloads/windows/</a><br><br><b>python-3.9.4.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.2 - Installer Python"><a class="Link9" href="#Installation">1.2 - Installer Python</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">python-3.9.4.exe
Customize installation
Cocher -&gt; Documentation
Cocher -&gt; pip
Cocher -&gt; tcl/tk and IDE
Cocher -&gt; Python test suite
Next
Cocher -&gt; Associate files with Python (requires the py launcher)
Cocher -&gt; Create shortcuts for installed applications
Customize install location -&gt; C:\Users\Admin\AppData\Local\Programs\Python\Python39-32
Install
Close</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.3 - Vérifier l'installation"><a class="Link9" href="#Installation">1.3 - Vérifier l'installation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">python --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Python 3.9.4</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Python.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617622025898"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617622025898");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Éditer le programme"><a class="Link9" href="#Tests">1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
print("Bonjour tout le monde")
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.2 - Exécuter le programme"><a class="Link9" href="#Tests">1.2 - Exécuter le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Python27;%PATH%"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">python main.py</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en Python.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617625225324"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617625225324");</script></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Introduction"><a class="Link9" href="#Système d'administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme principal"><a class="Link9" href="#Système d'administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">GProcessUi.Instance().run()</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Création du système d'administration"><a class="Link9" href="#Système d'administration">Création du système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run(self):
    self.G_STATE = "S_INIT"
    while True:
        if self.G_STATE == "S_INIT" : self.run_INIT()
        elif self.G_STATE == "S_METHOD" : self.run_METHOD()
        elif self.G_STATE == "S_CHOICE" : self.run_CHOICE()
        #
        elif self.G_STATE == "S_YOUTUBE" : self.run_YOUTUBE()
        elif self.G_STATE == "S_SQLITE" : self.run_SQLITE()
        #
        elif self.G_STATE == "S_SAVE" : self.run_SAVE()
        elif self.G_STATE == "S_LOAD" : self.run_LOAD()
        else : break
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme d'initialisation"><a class="Link9" href="#Système d'administration">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_INIT(self):
    sys.stdout.write("\n")
    sys.stdout.write("PYTHON_ADMIN !!!\n")
    sys.stdout.write("\t%-2s : %s\n" % ("-q", "quitter l'application"))
    sys.stdout.write("\n")
    self.G_STATE = "S_LOAD"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de chargement des données"><a class="Link9" href="#Système d'administration">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_LOAD(self):
    GConfig.Instance().loadData("G_ADMIN_ID")
    self.G_STATE = "S_METHOD"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme des méthodes"><a class="Link9" href="#Système d'administration">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_METHOD(self):
    sys.stdout.write("PYTHON_ADMIN :\n")
    sys.stdout.write("\t%-2s : %s\n" % ("1", "S_YOUTUBE"))
    sys.stdout.write("\t%-2s : %s\n" % ("2", "S_SQLITE"))
    sys.stdout.write("\n")
    self.G_STATE = "S_CHOICE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du choix d'une méthode"><a class="Link9" href="#Système d'administration">Programme du choix d'une méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_CHOICE(self):
    lLast = GConfig.Instance().getData("G_ADMIN_ID")
    lAnswer = raw_input("PYTHON_ADMIN (%s) ? " % (lLast))
    if lAnswer == "" : lAnswer = lLast
    if lAnswer == "-q" : self.G_STATE = "S_END"
    #
    elif lAnswer == "1" : self.G_STATE = "S_YOUTUBE" ; GConfig.Instance().setData("G_ADMIN_ID", lAnswer)
    elif lAnswer == "2" : self.G_STATE = "S_SQLITE" ; GConfig.Instance().setData("G_ADMIN_ID", lAnswer)
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du module YouTube"><a class="Link9" href="#Système d'administration">Programme du module YouTube</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_YOUTUBE(self):
    GYouTubeUi.Instance().run()
    self.G_STATE = "S_SAVE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du module SQLite"><a class="Link9" href="#Système d'administration">Programme du module SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_SQLITE(self):
    GSQLiteUi.Instance().run()
    self.G_STATE = "S_SAVE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de sauvegarde des données"><a class="Link9" href="#Système d'administration">Programme de sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_SAVE(self):
    GConfig.Instance().saveData("G_ADMIN_ID")
    self.G_STATE = "S_END"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><h3 class="Title8 GTitle3">Menu principal</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/i_python_admin_system.png" alt="/Tutoriels/Software_Development/Python/img/i_python_admin_system.png"></div><br><h3 class="Title8 GTitle3">Menu du module YouTube</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/i_python_admin_system_02.png" alt="/Tutoriels/Software_Development/Python/img/i_python_admin_system_02.png"></div><br><h3 class="Title8 GTitle3">Menu du module SQLite</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/i_python_admin_system_03.png" alt="/Tutoriels/Software_Development/Python/img/i_python_admin_system_03.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface Homme-Machine avec Qt"><a class="Link3" href="#">Interface Homme-Machine avec Qt</a></h1><div class="Body3"><br><b>Qt </b>est une bibliothèque de composants d'interfaces graphiques (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc, et doté d'un mécanisme de notifications par des signaux et slots.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618875825281"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618875825281");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/b_qt.png" alt="/Tutoriels/Software_Development/Python/img/b_qt.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1 - Installation"><a class="Link9" href="#Interface Homme-Machine avec Qt">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1.1 - Installation sous Windows"><a class="Link9" href="#Interface Homme-Machine avec Qt">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1.1.1 - Installer PyQt5"><a class="Link9" href="#Interface Homme-Machine avec Qt">1.1.1 - Installer PyQt5</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">python -m pip install pyqt5</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2 - Tests"><a class="Link9" href="#Interface Homme-Machine avec Qt">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1 - Test sous Windows"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1.1 - Editer le programme"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1.1 - Editer le programme</a></h2><br><h3 class="Title8 GTitle3">main.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
import sys
from PyQt5.QtWidgets import *
from PyQt5.QtGui import *
from PyQt5.QtCore import *
#================================================
def window():
    # on cree l'application
    lApp = QApplication(sys.argv)

    # on cree la fenetre principale
    lWindow = QWidget()

    # on cree un label
    lLabel = QLabel()
    # on definit le texte du label
    lLabel.setText("Bonjour tout le monde")
    # on centre le texte dans le label
    lLabel.setAlignment(Qt.AlignCenter)

    # on cree le layout principal
    lMainLayout = QVBoxLayout()
    # on ajoute le label dans le layout principal
    lMainLayout.addWidget(lLabel)

    # on initialise le layout principal
    # dans la fenetre principale
    lWindow.setLayout(lMainLayout)
    # on definit le titre de la fenetre principale
    lWindow.setWindowTitle("ReadyApp")
    # on definit les dimensions de la fenetre principale
    lWindow.resize(500, 250)
    
    # on affiche la fenetre principale
    lWindow.show()

    # on rentre dans la boucle de controle
    sys.exit(lApp.exec_())
#================================================
if __name__ == '__main__':
    window()
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1.2 - Exécuter le projet"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1.2 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">python main.py</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/i_qt_test.png" alt="/Tutoriels/Software_Development/Python/img/i_qt_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Base de données avec SQLite"><a class="Link3" href="#">Base de données avec SQLite</a></h1><div class="Body3"><br><b>SQLite </b>est un système de gestion de base de données relationnelle accessible par le langage SQL et dont l'intégralité de la base de données (déclarations, tables, index et données) est stockée dans un fichier indépendant de la plateforme.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618877938611"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618877938611");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Python/img/b_sqlite.png" alt="/Tutoriels/Software_Development/Python/img/b_sqlite.png"></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-1 - Installation"><a class="Link9" href="#Base de données avec SQLite">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-1.1 - Installation sous Windows"><a class="Link9" href="#Base de données avec SQLite">1.1 - Installation sous Windows</a></h2><br>Aucune installation n'est nécessaire.<br><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-2 - Tests"><a class="Link9" href="#Base de données avec SQLite">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-2.1 - Test sous Windows"><a class="Link9" href="#Base de données avec SQLite">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-2.1.1 - Éditer le programme"><a class="Link9" href="#Base de données avec SQLite">2.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
import sqlite3
#================================================
# on ouvre la base de donnees
lConnect = sqlite3.connect('config.dat')
# on positionne le curseur
lCursor = lConnect.cursor()
# on execute une requete
lCursor.execute("select 'Bonjour tout le monde'")
print(lCursor.fetchone())
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-2.1.2 - Exécuter le projet"><a class="Link9" href="#Base de données avec SQLite">2.1.2 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">python main.py</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">('Bonjour tout le monde',)</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Pip"><a class="Link3" href="#">Pip</a></h1><div class="Body3"><br><b>Pip </b>est un gestionnaire de packages Python.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617632484641"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617632484641");</script></div><br><h2 class="Title7 GTitle2" id="Pip-1 - Installation"><a class="Link9" href="#Pip">1 - Installation</a></h2><br>Aucune installation n'est nécessaire.<br><br><h2 class="Title7 GTitle2" id="Pip-2 - Mise à jour"><a class="Link9" href="#Pip">2 - Mise à jour</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">python -m pip install --upgrade pip</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Pip-3 - Commandes"><a class="Link9" href="#Pip">3 - Commandes</a></h2><br><h2 class="Title7 GTitle2" id="Pip-3.1 - Lister les packages"><a class="Link9" href="#Pip">3.1 - Lister les packages</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">python -m pip list</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Package Version
------- -------
pip     21.0.1</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Pip-3.2 - Installer un package"><a class="Link9" href="#Pip">3.2 - Installer un package</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">python -m pip install pyqt5</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">python -m pip list</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Package   Version
--------- -------
pip       21.0.1
PyQt5     5.15.4
PyQt5-Qt5 5.15.2
PyQt5-sip 12.8.1</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Pip-3.3 - Mettre à jour un package"><a class="Link9" href="#Pip">3.3 - Mettre à jour un package</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">python -m pip install --upgrade pyqt5</xmp></pre></div><br></div></div></div></div><br>