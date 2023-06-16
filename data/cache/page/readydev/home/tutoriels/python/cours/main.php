<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#python">Python</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/python/cours">Cours</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre à programmer en Python</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programmer en <b>Python</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#programme-principal">Programme principal</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#fonctions">Fonctions</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#conditions">Conditions</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#boucle-for">Boucle For</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#boucle-while">Boucle While</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#arguments-en-ligne-de-commande">Arguments en ligne de commande</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>Python</b> est un langage de programmation généraliste de haut niveau. Sa philosophie de conception met l'accent sur la lisibilité du code avec l'utilisation d'une indentation significative via la règle du hors-jeu. Python est dynamiquement typé et ramassé. Il prend en charge plusieurs paradigmes de programmation, y compris la programmation structurée (en particulier procédurale), orientée objet et fonctionnelle. Il est souvent décrit comme un langage "piles incluses" en raison de sa bibliothèque standard complète.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="programme-principal">Programme principal</a>
</h1>
<div class="Section6"><br>Le programme principal d'une application Python peut être défini dans un fichier quelconque selon votre choix (main.py).<br><br>C'est le fichier lancé par l'interpréteur Python.<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">python main.py</pre><br>Exemple de programme principal (main.py):<br><br><pre class="GCode1 Code1 AceCode" data-mode="python" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
from manager.GProcess import GProcess
#================================================
lProcess = GProcess()
lProcess.run()
#================================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="fonctions">Fonctions</a>
</h1>
<div class="Section6"><br>L'opérateur (def) permet de définir une fonction.<br><br>Une fonction peut ne pas retourner un résultat.<br><br><pre class="GCode1 Code1 AceCode" data-mode="python" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
def printf(_format, *_args):
    sys.stdout.write(_format % _args)
#================================================</pre><br>Une fonction peut retourner un résultat.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="python" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
def sprintf(_format, *_args):
    lBuffer = io.StringIO()
    lBuffer.write(_format % _args)
    return lBuffer.getvalue()
#================================================
</pre><br>Vous devez dans tous les cas respecter l'indentation (obligatoire).<br><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="conditions">Conditions</a>
</h1>
<div class="Section6"><br>L'opérateur (if) permet de définir une condition (Si).<br>L'opérateur (elif) permet de définir une condition (Sinon Si).<br>L'opérateur (else) permet de définir une condition (Dans le cas contraire).<br><br><pre class="GCode1 Code1 AceCode" data-mode="python" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
def run(self):
    lModule = ""
    if len(sys.argv) &gt; 1:
        lModule = sys.argv[1]
        
    if lModule == "":
        self.m_logs.addError("Le module est obligatoire.");
    elif lModule == "test":
        self.runTest();
    elif lModule == "server":
        self.runServer();
    else:
        self.m_logs.addError("Le module est inconnu.");
#================================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="boucle-for">Boucle For</a>
</h1>
<div class="Section6"><br>L'opérateur (for) permet de définir une boucle For (Pour Tout).<br><br><pre class="GCode1 Code1 AceCode" data-mode="python" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
def print(self):
    for i in range(len(self.m_map)):
        lObj = self.m_map[i]
        printf("[%-5s] : %s\n", lObj.m_type, lObj.m_msg)
#================================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="boucle-while">Boucle While</a>
</h1>
<div class="Section6"><br>L'opérateur (while) permet de définir une boucle While (Tant Que).<br><br><pre class="GCode1 Code1 AceCode" data-mode="python" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
def runServer(self):
    while True:
        lClient.m_socket, lClient.m_address = lSocket.accept()    
        lThread = threading.Thread(target=self.onThread, args=(lClient,))
        lThread.start()
#================================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="arguments-en-ligne-de-commande">Arguments en ligne de commande</a>
</h1>
<div class="Section6"><br>La variable (sys.argv) permet de récupérer la liste des arguments passés en ligne de commande.<br><br>Puisque c'est un tableau, on peut récupérer l'argument à la position (i) grâce à l'opération (sys.argv[i]). On peut aussi récupérer le nombre d'arguments grâce à l'opération (len(sys.argv)).<br><br><pre class="GCode1 Code1 AceCode" data-mode="python" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
def run(self):
    lModule = ""
    if len(sys.argv) &gt; 1:
        lModule = sys.argv[1]
        
    if lModule == "":
        self.m_logs.addError("Le module est obligatoire.");
    elif lModule == "test":
        self.runTest();
    elif lModule == "server":
        self.runServer();
    else:
        self.m_logs.addError("Le module est inconnu.");
#================================================</pre><br>Passage des arguments en ligne de commande:<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">python main.py test string</pre><br>On a:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">sys.argv[0] -&gt; main.py
sys.argv[1] -&gt; test
sys.argv[2] -&gt; string</pre><br></div></div></div></div><br>