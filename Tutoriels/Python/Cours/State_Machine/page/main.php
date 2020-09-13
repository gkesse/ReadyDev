<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une machine à états finis en Python</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une machine états finis en <b>Python</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Python </b>est un langage de programmation interprété, multi-paradigme et multiplateformes. Il favorise la programmation impérative structurée, fonctionnelle et orientée objet. Il est doté d'un typage dynamique fort, d'une gestion automatique de la mémoire par ramasse-miettes et d'un système de gestion d'exceptions.(ref. <a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://fr.wikipedia.org/wiki/Python_(langage)">Wikipédia</a>)<br><br><div class="Img3 GImage"><img src="/Tutoriels/Python/Cours/img/b_state_machine.png" alt="/Tutoriels/Python/Cours/img/b_state_machine.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une machine à états finis en Python"><a class="Link3" href="#">Créer une machine à états finis en Python</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599903147417"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599903147417");</script></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Python-Introduction"><a class="Link9" href="#Créer une machine à états finis en Python">Introduction</a></h2><br>Une machine à états finis permet de réaliser un système d'administration complet. Dans la logique, elle associe à chaque tâche un état et avec un système de changement d'états, couplé à une boucle infinie, elle permet de basculer d'une tâche à l'autre.<br><br>Dans l'exemple qui suit, nous essayons de construire une machine à états finis (GProcess) contenant la méthode d'exécution (run) qui encapsule toute la stratégie de la machine. L'état (S_INIT) est associé à la méthode du menu principal (run_INIT). L'état (S_CHOICE) est associé à la méthode du programme des choix (run_CHOICE). L'état (S_SQLITE) est associé à la méthode du programme SQLite (run_SQLITE). L'état (S_YOUTUBE) est associé à la méthode du programme YouTube (run_YOUTUBE).<br><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Python-Stratégie de la machine"><a class="Link9" href="#Créer une machine à états finis en Python">Stratégie de la machine</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run(self):
    self.G_STATE = "S_INIT"
    while True:
        if self.G_STATE == "S_INIT" : self.run_INIT()
        elif self.G_STATE == "S_CHOICE" : self.run_CHOICE()
        elif self.G_STATE == "S_SQLITE" : self.run_SQLITE()
        elif self.G_STATE == "S_YOUTUBE" : self.run_YOUTUBE()
        else : break
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Python-Menu principal"><a class="Link9" href="#Créer une machine à états finis en Python">Menu principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_INIT(self):
    print("")
    print("MENU !!!")
    print("\t%-2s : %s" % ("m", "afficher le menu principal"))
    print("\t%-2s : %s" % ("1", "acceder au programme SQLITE"))
    print("\t%-2s : %s" % ("2", "acceder au programme YOUTUBE"))
    print("\t%-2s : %s" % ("q", "quitter l'application"))
    self.G_STATE = "S_CHOICE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Python-Choix d'une méthode"><a class="Link9" href="#Créer une machine à états finis en Python">Choix d'une méthode</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_CHOICE(self):
    print("")
    lAnswer = input("CHOIX ? ")
    if lAnswer == "m" : self.G_STATE = "S_INIT"
    elif lAnswer == "1" : self.G_STATE = "S_SQLITE"
    elif lAnswer == "2" : self.G_STATE = "S_YOUTUBE"
    elif lAnswer == "q" : self.G_STATE = "S_END"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Python-Méthode du programme SQLite"><a class="Link9" href="#Créer une machine à états finis en Python">Méthode du programme SQLite</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_SQLITE(self):
    print("")
    print("lancement du programme SQLITE")
    self.G_STATE = "S_CHOICE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Python-Méthode du programme YouTube"><a class="Link9" href="#Créer une machine à états finis en Python">Méthode du programme YouTube</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_YOUTUBE(self):
    print("")
    print("lancement du programme YOUTUBE")
    self.G_STATE = "S_CHOICE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Python-Programme de test"><a class="Link9" href="#Créer une machine à états finis en Python">Programme de test</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def main():
    GProcess.Instance().run()
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Python-Résultat"><a class="Link9" href="#Créer une machine à états finis en Python">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Python/Cours/img/i_state_machine.png" alt="/Tutoriels/Python/Cours/img/i_state_machine.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3"><br>Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de bases</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1599902988430"><div class="Row26">List 1 &gt; Python &gt; basics</div></div><script>loadList1("Loader_1599902988430","Python","basics");</script></div><br></div></div></div></div><br>