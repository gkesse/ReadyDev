<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en Python</div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>Python</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1599898225826"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1599898225826");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Python </b>est un langage de programmation orienté objet possédant un interpréteur de scripts.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Python/img/b_python.png" class="lazy" data-src="/Tutoriels/Software_Development/Python/img/b_python.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br><b>Python </b>est un langage de programmation orienté objet possédant un interpréteur de scripts. <b>Pip </b>est un gestionnaire de packages python. <b>Setuptools </b>est un outil de développement de packages python. <b>Wheel </b>est un outil de construction d'installeur python. Un <b>Environnements virtuel</b> python est un espace d'installation de packages python de manière isolée. Cette technique permet d'utiliser en toute sécurité différentes versions&nbsp; d'une bibliothèque sur un même machine tout en évitant des conflits de versions. <b>Pipx&nbsp;</b>est un gestionnaire de packages python ayant la particularité de créer un environnement virtuel pour chaque package python.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Executer-un-programme"><a class="Link9" href="#Fondamentaux">Exécuter un programme</a></h2><br>Création du programme (main.py)<br><br><div class="GCode1"><div class="Code2"><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="python">#=================================================
print("Bonjour tout le monde")
#=================================================</pre></div></div></div></div><br>Exécution du programme (Terminal)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">python3 main.py</pre></div></div><br>Notes<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">-&gt; Aller dans le repertoire du script (main.py)
-&gt; Exécuter le script</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-module"><a class="Link9" href="#Fondamentaux">Créer un module</a></h2><br>Création du module (GProcess.py)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="python">#=================================================
def run():
	print("Bonjour tout le monde")
#=================================================</pre></div></div><br>Appel du module (main.py)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="python">#=================================================
import GProcess
#=================================================
GProcess.run()
#=================================================</pre></div></div><br>Exécution du programme (Terminal)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">python3 main.py</pre></div></div><br>Notes<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">-&gt; Le module (GProcess.py) et le script (main.py) 
&nbsp;&nbsp;&nbsp;sont dans le même repertoire
-&gt; Aller dans le repertoire du script (main.py)
-&gt; Exécuter le script</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-classe"><a class="Link9" href="#Fondamentaux">Créer une classe</a></h2><br>Création de la classe (GProcess.py)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="python">#=================================================
class GProcess:
    def run(self):	
        print("Bonjour tout le monde")
#=================================================</pre></div></div><br>Appel de la classe (main.py)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="python">#=================================================
from GProcess import GProcess
#=================================================
lProcess = GProcess()
lProcess.run()
#=================================================</pre></div></div><br>Exécution du programme (Terminal)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">python3 main.py</pre></div></div><br>Notes<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">-&gt; La classe (GProcess.py) et le script (main.py) 
   sont dans le même repertoire
-&gt; Aller dans le repertoire du script (main.py)
-&gt; Exécuter le script</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Lire-un-argument-passe-en-ligne-de-commande"><a class="Link9" href="#Fondamentaux">Lire un argument passé en ligne de commande</a></h2><br>Lecture de l'argument (GProcess.py)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">#=================================================
import sys
#=================================================
class GProcess:
    def run(self):
        lKey = "default"
        if(len(sys.argv) &gt; 1): lKey = sys.argv[1]
        print("Key : %s" % (lKey))
#=================================================</pre></div></div><br>Appel de la méthode (main.py)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">#=================================================
from GProcess import GProcess
#=================================================
lProcess = GProcess()
lProcess.run()
#=================================================</pre></div></div><br>Exécution du programme (Terminal)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">python3 main.py
python3 main.py server</pre></div></div><br>Notes<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">-&gt; Utiliser le module sys
-&gt; Aller dans le repertoire du script (main.py)
-&gt; Exécuter le script</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Verifier-l-installation-de-python"><a class="Link9" href="#Fondamentaux">Vérifier l'installation de python</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">python3</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Verifier-l-installation-de-pip"><a class="Link9" href="#Fondamentaux">Vérifier l'installation de pip</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">python3 -m pip --version</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Mettre-a-jour-les-outils-python"><a class="Link9" href="#Fondamentaux">Mettre à jour les outils python</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">python3 -m pip install --upgrade pip setuptools wheel</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Installer-pipx"><a class="Link9" href="#Fondamentaux">Installer pipx</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">python3 -m pip install --user pipx
python3 -m pipx ensurepath</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Python.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Installation-1---Installation-sous-Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1-1---Telecharger-Python"><a class="Link9" href="#Installation">1.1 - Télécharger Python</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.python.org/downloads/windows/">https://www.python.org/downloads/windows/</a><br><br><b>python-3.9.4.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1-2---Installer-Python"><a class="Link9" href="#Installation">1.2 - Installer Python</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">python-3.9.4.exe
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
Close</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-1-3---Verifier-l-installation"><a class="Link9" href="#Installation">1.3 - Vérifier l'installation</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">python --version</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Python 3.9.4</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Python.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Tests-1---Test-sous-Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1-1---Editer-le-programme"><a class="Link9" href="#Tests">1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3" id="Tests-1-1---Editer-le-programme-main-py"><a class="Title8" href="#Tests-1-1---Editer-le-programme">main.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">#================================================
print("Bonjour tout le monde")
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-2---Executer-le-programme"><a class="Link9" href="#Tests">1.2 - Exécuter le programme</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">set "PATH=C:\Python27;%PATH%"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">python main.py</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Bonjour tout le monde</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Systeme-d-administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en Python.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Introduction"><a class="Link9" href="#Systeme-d-administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-principal"><a class="Link9" href="#Systeme-d-administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Programme-principal-GProcess-py"><a class="Title8" href="#Systeme-d-administration-Programme-principal">GProcess.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">GProcessUi.Instance().run()</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Creation-du-systeme-d-administration"><a class="Link9" href="#Systeme-d-administration">Création du système d'administration</a></h2><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Creation-du-systeme-d-administration-GProcessUi-py"><a class="Title8" href="#Systeme-d-administration-Creation-du-systeme-d-administration">GProcessUi.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">#================================================
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
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-d-initialisation"><a class="Link9" href="#Systeme-d-administration">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Programme-d-initialisation-GProcessUi-py"><a class="Title8" href="#Systeme-d-administration-Programme-d-initialisation">GProcessUi.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">#================================================
def run_INIT(self):
    sys.stdout.write("\n")
    sys.stdout.write("PYTHON_ADMIN !!!\n")
    sys.stdout.write("\t%-2s : %s\n" % ("-q", "quitter l'application"))
    sys.stdout.write("\n")
    self.G_STATE = "S_LOAD"
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-de-chargement-des-donnees"><a class="Link9" href="#Systeme-d-administration">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Programme-de-chargement-des-donnees-GProcessUi-py"><a class="Title8" href="#Systeme-d-administration-Programme-de-chargement-des-donnees">GProcessUi.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">#================================================
def run_LOAD(self):
    GConfig.Instance().loadData("G_ADMIN_ID")
    self.G_STATE = "S_METHOD"
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-des-methodes"><a class="Link9" href="#Systeme-d-administration">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Programme-des-methodes-GProcessUi-py"><a class="Title8" href="#Systeme-d-administration-Programme-des-methodes">GProcessUi.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">#================================================
def run_METHOD(self):
    sys.stdout.write("PYTHON_ADMIN :\n")
    sys.stdout.write("\t%-2s : %s\n" % ("1", "S_YOUTUBE"))
    sys.stdout.write("\t%-2s : %s\n" % ("2", "S_SQLITE"))
    sys.stdout.write("\n")
    self.G_STATE = "S_CHOICE"
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-du-choix-d-une-methode"><a class="Link9" href="#Systeme-d-administration">Programme du choix d'une méthode</a></h2><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Programme-du-choix-d-une-methode-GProcessUi-py"><a class="Title8" href="#Systeme-d-administration-Programme-du-choix-d-une-methode">GProcessUi.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">#================================================
def run_CHOICE(self):
    lLast = GConfig.Instance().getData("G_ADMIN_ID")
    lAnswer = raw_input("PYTHON_ADMIN (%s) ? " % (lLast))
    if lAnswer == "" : lAnswer = lLast
    if lAnswer == "-q" : self.G_STATE = "S_END"
    #
    elif lAnswer == "1" : self.G_STATE = "S_YOUTUBE" ; GConfig.Instance().setData("G_ADMIN_ID", lAnswer)
    elif lAnswer == "2" : self.G_STATE = "S_SQLITE" ; GConfig.Instance().setData("G_ADMIN_ID", lAnswer)
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-du-module-YouTube"><a class="Link9" href="#Systeme-d-administration">Programme du module YouTube</a></h2><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Programme-du-module-YouTube-GProcessUi-py"><a class="Title8" href="#Systeme-d-administration-Programme-du-module-YouTube">GProcessUi.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">#================================================
def run_YOUTUBE(self):
    GYouTubeUi.Instance().run()
    self.G_STATE = "S_SAVE"
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-du-module-SQLite"><a class="Link9" href="#Systeme-d-administration">Programme du module SQLite</a></h2><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Programme-du-module-SQLite-GProcessUi-py"><a class="Title8" href="#Systeme-d-administration-Programme-du-module-SQLite">GProcessUi.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">#================================================
def run_SQLITE(self):
    GSQLiteUi.Instance().run()
    self.G_STATE = "S_SAVE"
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-de-sauvegarde-des-donnees"><a class="Link9" href="#Systeme-d-administration">Programme de sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Programme-de-sauvegarde-des-donnees-GProcessUi-py"><a class="Title8" href="#Systeme-d-administration-Programme-de-sauvegarde-des-donnees">GProcessUi.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">#================================================
def run_SAVE(self):
    GConfig.Instance().saveData("G_ADMIN_ID")
    self.G_STATE = "S_END"
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Resultat"><a class="Link9" href="#Systeme-d-administration">Résultat</a></h2><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Resultat-Menu-principal"><a class="Title8" href="#Systeme-d-administration-Resultat">Menu principal</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Python/img/i_python_admin_system.png" class="lazy" data-src="/Tutoriels/Software_Development/Python/img/i_python_admin_system.png"></div><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Resultat-Menu-du-module-YouTube"><a class="Title8" href="#Systeme-d-administration-Resultat">Menu du module YouTube</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Python/img/i_python_admin_system_02.png" class="lazy" data-src="/Tutoriels/Software_Development/Python/img/i_python_admin_system_02.png"></div><br><h3 class="Title8 GTitle3" id="Systeme-d-administration-Resultat-Menu-du-module-SQLite"><a class="Title8" href="#Systeme-d-administration-Resultat">Menu du module SQLite</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Python/img/i_python_admin_system_03.png" class="lazy" data-src="/Tutoriels/Software_Development/Python/img/i_python_admin_system_03.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface-Homme-Machine-avec-Qt"><a class="Link3" href="#">Interface Homme-Machine avec Qt</a></h1><div class="Body3"><br><b>Qt </b>est une bibliothèque de composants d'interfaces graphiques (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc, et doté d'un mécanisme de notifications par des signaux et slots.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Python/img/b_qt.png" class="lazy" data-src="/Tutoriels/Software_Development/Python/img/b_qt.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-1---Installation"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-1-1---Installation-sous-Windows"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-1-1-1---Installer-PyQt5"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">1.1.1 - Installer PyQt5</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">python -m pip install pyqt5</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-2---Tests"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-2-1---Test-sous-Windows"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-2-1-1---Editer-le-programme"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">2.1.1 - Editer le programme</a></h2><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-2-1-1---Editer-le-programme-main-py"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-2-1-1---Editer-le-programme">main.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">#================================================
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
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-2-1-2---Executer-le-projet"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">2.1.2 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">python main.py</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Python/img/i_qt_test.png" class="lazy" data-src="/Tutoriels/Software_Development/Python/img/i_qt_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Base-de-donnees-avec-SQLite"><a class="Link3" href="#">Base de données avec SQLite</a></h1><div class="Body3"><br><b>SQLite </b>est un système de gestion de base de données relationnelle accessible par le langage SQL et dont l'intégralité de la base de données (déclarations, tables, index et données) est stockée dans un fichier indépendant de la plateforme.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Python/img/b_sqlite.png" class="lazy" data-src="/Tutoriels/Software_Development/Python/img/b_sqlite.png"></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-1---Installation"><a class="Link9" href="#Base-de-donnees-avec-SQLite">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-1-1---Installation-sous-Windows"><a class="Link9" href="#Base-de-donnees-avec-SQLite">1.1 - Installation sous Windows</a></h2><br>Aucune installation n'est nécessaire.<br><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-2---Tests"><a class="Link9" href="#Base-de-donnees-avec-SQLite">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-2-1---Test-sous-Windows"><a class="Link9" href="#Base-de-donnees-avec-SQLite">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-2-1-1---Editer-le-programme"><a class="Link9" href="#Base-de-donnees-avec-SQLite">2.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3" id="Base-de-donnees-avec-SQLite-2-1-1---Editer-le-programme-main-py"><a class="Title8" href="#Base-de-donnees-avec-SQLite-2-1-1---Editer-le-programme">main.py</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="python">#================================================
import sqlite3
#================================================
# on ouvre la base de donnees
lConnect = sqlite3.connect('config.dat')
# on positionne le curseur
lCursor = lConnect.cursor()
# on execute une requete
lCursor.execute("select 'Bonjour tout le monde'")
print(lCursor.fetchone())
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-2-1-2---Executer-le-projet"><a class="Link9" href="#Base-de-donnees-avec-SQLite">2.1.2 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">python main.py</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">('Bonjour tout le monde',)</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Pip"><a class="Link3" href="#">Pip</a></h1><div class="Body3"><br><b>Pip </b>est un gestionnaire de packages Python.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Pip-1---Installation"><a class="Link9" href="#Pip">1 - Installation</a></h2><br>Aucune installation n'est nécessaire.<br><br><h2 class="Title7 GTitle2" id="Pip-2---Mise-a-jour"><a class="Link9" href="#Pip">2 - Mise à jour</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">python -m pip install --upgrade pip</pre></div></div><br><h2 class="Title7 GTitle2" id="Pip-3---Commandes"><a class="Link9" href="#Pip">3 - Commandes</a></h2><br><h2 class="Title7 GTitle2" id="Pip-3-1---Lister-les-packages"><a class="Link9" href="#Pip">3.1 - Lister les packages</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">python -m pip list</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Package Version
------- -------
pip     21.0.1</pre></div></div><br><h2 class="Title7 GTitle2" id="Pip-3-2---Installer-un-package"><a class="Link9" href="#Pip">3.2 - Installer un package</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">python -m pip install pyqt5</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">python -m pip list</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Package   Version
--------- -------
pip       21.0.1
PyQt5     5.15.4
PyQt5-Qt5 5.15.2
PyQt5-sip 12.8.1</pre></div></div><br><h2 class="Title7 GTitle2" id="Pip-3-3---Mettre-a-jour-un-package"><a class="Link9" href="#Pip">3.3 - Mettre à jour un package</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">python -m pip install --upgrade pyqt5</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ressources"><a class="Link3" href="#">Ressources</a></h1><div class="Body3"><br><b>Geany </b>est un éditeur de texte. <b>Eclipse </b>est un environnement de développement intégré.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Ressources-Geany"><a class="Link9" href="#Ressources">Geany</a></h2><br><div class="Content0 GSummary3"><div class="Row26">Summary 3</div></div><br><h3 class="GTitle3" id="Ressources-Geany-Installer-Geany-sur-Raspberry-Pi"><a class="Title8" href="#Ressources-Geany">Installer Geany sur Raspberry Pi</a></h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://raspberrytips.com/use-geany-on-raspberry-pi/">https://raspberrytips.com/use-geany-on-raspberry-pi/</a><br><br><h2 class="Title7 GTitle2" id="Ressources-Eclipse"><a class="Link9" href="#Ressources">Eclipse</a></h2><br><div class="Content0 GSummary3"><div class="Row26">Summary 3</div></div><br><h3 class="GTitle3" id="Ressources-Eclipse-Installer-Eclipse-sur-Raspberry-Pi"><a class="Title8" href="#Ressources-Eclipse">Installer Eclipse sur Raspberry Pi</a></h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://raspberrytips.com/install-eclipse-on-raspberry-pi/">https://raspberrytips.com/install-eclipse-on-raspberry-pi/</a><br><br><h3 class="GTitle3" id="Ressources-Eclipse-Installer-le-plug-in-PyDev-pour-Eclipse"><a class="Title8" href="#Ressources-Eclipse">Installer le plug-in PyDev pour Eclipse</a></h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.rose-hulman.edu/class/csse/resources/Eclipse/eclipse-python-configuration.htm">https://www.rose-hulman.edu/class/csse/resources/Eclipse/eclipse-python-configuration.htm</a><br><br><h3 class="GTitle3" id="Ressources-Eclipse-Importer-un-projet-python-preexistant-dans-Eclipse"><a class="Title8" href="#Ressources-Eclipse">Importer un projet python préexistant dans Eclipse</a></h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://stackoverflow.com/questions/13298630/how-do-i-import-a-pre-existing-python-project-into-eclipse">https://stackoverflow.com/questions/13298630/how-do-i-import-a-pre-existing-python-project-into-eclipse</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.youtube.com/watch?v=T8oCYfaD1Qo">https://www.youtube.com/watch?v=T8oCYfaD1Qo</a><br><br></div></div></div></div><br>