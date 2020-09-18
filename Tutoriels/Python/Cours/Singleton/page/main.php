<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un singleton en Python</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un singleton en <b>Python</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Python </b>est un langage de programmation interprété, multi-paradigme et multiplateformes. Il favorise la programmation impérative structurée, fonctionnelle et orientée objet. Il est doté d'un typage dynamique fort, d'une gestion automatique de la mémoire par ramasse-miettes et d'un système de gestion d'exceptions.(ref. <a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://fr.wikipedia.org/wiki/Python_(langage)">Wikipédia</a>)<br><br><div class="Img3 GImage"><img src="/Tutoriels/Python/Cours/img/b_singleton.png" alt="/Tutoriels/Python/Cours/img/b_singleton.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un singleton en Python"><a class="Link3" href="#">Créer un singleton en Python</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599903147417"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599903147417");</script></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en Python-Introduction"><a class="Link9" href="#Créer un singleton en Python">Introduction</a></h2><br>Un singleton permet créer et d'avoir uniquement une instance d'un objet durant le cycle de vie de tout le programme.<br><br>Dans l'exemple qui suit, nous essayons de construire un singleton (GProcess) contenant la méthode exécution (run) qui affiche un message à l'écran (lancement de la methode execution).<br><br><h2 class="Title7 GTitle2" id="Créer un singleton en Python-Initialisation de l'instance"><a class="Link9" href="#Créer un singleton en Python">Initialisation de l'instance</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
m_instance = None
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en Python-Création de l'instance"><a class="Link9" href="#Créer un singleton en Python">Création de l'instance</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
@staticmethod 
def Instance():
    if GProcess.m_instance == None:
        GProcess.m_instance = GProcess()
    return GProcess.m_instance
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en Python-Constructeur de l'objet"><a class="Link9" href="#Créer un singleton en Python">Constructeur de l'objet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def __init__(self): 
    print("creation du singleton...")
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en Python-Méthode exécution"><a class="Link9" href="#Créer un singleton en Python">Méthode exécution</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run(self):
    print("lancement de la methode execution")
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en Python-Programme de test"><a class="Link9" href="#Créer un singleton en Python">Programme de test</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def main():
    GProcess.Instance().run()
    GProcess.Instance().run()
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en Python-Résultat"><a class="Link9" href="#Créer un singleton en Python">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Python/Cours/img/i_singleton.png" alt="/Tutoriels/Python/Cours/img/i_singleton.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Codes sources"><a class="Link3" href="#">Codes sources</a></h1><div class="Body3"><i><br>ReadyDev met à votre disposition l'ensemble des codes sources publiés sur ce site.<br>Publiés sous licence libre (GNU General Public License v3.0).</i><br><br><h2 class="Title7 GTitle2" id="Codes sources-Programme du singleton"><a class="Link9" href="#Codes sources">Programme du singleton</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
class GProcess:
    #================================================
    m_instance = None
    #================================================
    def __init__(self): 
        print("creation du singleton...")
    #================================================
    @staticmethod 
    def Instance():
        if GProcess.m_instance == None:
            GProcess.m_instance = GProcess()
        return GProcess.m_instance
    #================================================
    def run(self):
        print("lancement de la methode execution")
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Codes sources-Programme de test"><a class="Link9" href="#Codes sources">Programme de test</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
from manager.GProcess import GProcess
#================================================
def main():
    GProcess.Instance().run()
    GProcess.Instance().run()
#================================================
main()
#================================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3"><br>Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1599902988430"><div class="Row26">List 1 &gt; Python &gt; basics</div></div><script>loadList1("Loader_1599902988430","Python","basics");</script></div><br></div></div></div></div><br>