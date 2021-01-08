<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un système d'administration en Python</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un système d'administration en <b>Python</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Python </b>est un langage de programmation interprété orienté objet, multiplateforme et doté d'un typage dynamique fort et d'une gestion automatique de la mémoire par ramasse-miettes.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Python/img/b_cours_admin_system.png" alt="/Tutoriels/Python/img/b_cours_admin_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un système d'administration en Python"><a class="Link3" href="#">Créer un système d'administration en Python</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599903147417"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599903147417");</script></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en Python-Introduction"><a class="Link9" href="#Créer un système d'administration en Python">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un système d'administration en Python.<br><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en Python-Programme principal"><a class="Link9" href="#Créer un système d'administration en Python">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
from manager.GProcess import GProcess
#================================================
def GMain():
    GProcess.Instance().run()
#================================================
GMain()
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en Python-Création du système d'administration"><a class="Link9" href="#Créer un système d'administration en Python">Création du système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
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
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en Python-Programme d'initialisation"><a class="Link9" href="#Créer un système d'administration en Python">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_INIT(self):
    sys.stdout.write("\n")
    sys.stdout.write("PYTHON_ADMIN !!!\n")
    sys.stdout.write("\t%-2s : %s\n" % ("-q", "quitter l'application"))
    sys.stdout.write("\n")
    self.G_STATE = "S_LOAD"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en Python-Programme des méthodes"><a class="Link9" href="#Créer un système d'administration en Python">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_METHOD(self):
    sys.stdout.write("PYTHON_ADMIN :\n")
    sys.stdout.write("\t%-2s : %s\n" % ("1", "S_YOUTUBE"))
    sys.stdout.write("\t%-2s : %s\n" % ("2", "S_SQLITE"))
    sys.stdout.write("\n")
    self.G_STATE = "S_CHOICE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en Python-Programme du choix d'une méthode"><a class="Link9" href="#Créer un système d'administration en Python">Programme du choix d'une méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_CHOICE(self):
    lLast = GConfig.Instance().getData("G_ADMIN_ID")
    lAnswer = raw_input("PYTHON_ADMIN (%s) ? " % (lLast))
    if lAnswer == "" : lAnswer = lLast
    if lAnswer == "-q" : self.G_STATE = "S_END"
    #
    elif lAnswer == "1" : self.G_STATE = "S_YOUTUBE" ; GConfig.Instance().setData("G_ADMIN_ID", lAnswer)
    elif lAnswer == "2" : self.G_STATE = "S_SQLITE" ; GConfig.Instance().setData("G_ADMIN_ID", lAnswer)
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en Python-Programme du module YouTube"><a class="Link9" href="#Créer un système d'administration en Python">Programme du module YouTube</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_YOUTUBE(self):
    GYouTubeUi.Instance().run()
    self.G_STATE = "S_SAVE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en Python-Programme du module SQLite"><a class="Link9" href="#Créer un système d'administration en Python">Programme du module SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_SQLITE(self):
    GSQLiteUi.Instance().run()
    self.G_STATE = "S_SAVE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en Python-Programme de sauvegarde des données"><a class="Link9" href="#Créer un système d'administration en Python">Programme de sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_SAVE(self):
    GConfig.Instance().saveData("G_ADMIN_ID")
    self.G_STATE = "S_END"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en Python-Programme de chargement des données"><a class="Link9" href="#Créer un système d'administration en Python">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_LOAD(self):
    GConfig.Instance().loadData("G_ADMIN_ID")
    self.G_STATE = "S_METHOD"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en Python-Résultat"><a class="Link9" href="#Créer un système d'administration en Python">Résultat</a></h2><br><h3 class="Title8 GTitle3">Menu principal</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Python/img/i_cours_admin_system.png" alt="/Tutoriels/Python/img/i_cours_admin_system.png"></div><br><h3 class="Title8 GTitle3">Menu YouTube</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Python/img/i_cours_admin_system_02.png" alt="/Tutoriels/Python/img/i_cours_admin_system_02.png"></div><br><h3 class="Title8 GTitle3">Menu SQLite</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Python/img/i_cours_admin_system_03.png" alt="/Tutoriels/Python/img/i_cours_admin_system_03.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3"><br>Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1599902988430"><div class="Row26">List 1 &gt; Python &gt; basics</div></div><script>loadList1("Loader_1599902988430","Python","basics");</script></div><br></div></div></div></div><br>