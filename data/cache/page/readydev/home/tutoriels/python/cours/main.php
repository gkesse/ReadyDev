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
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#environnement-virtuel--venv-">Environnement virtuel (venv)</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>Python</b> est un langage de programmation généraliste de haut niveau. Sa philosophie de conception met l'accent sur la lisibilité du code avec l'utilisation d'une indentation significative via la règle du hors-jeu. Python est dynamiquement typé et ramassé. Il prend en charge plusieurs paradigmes de programmation, y compris la programmation structurée (en particulier procédurale), orientée objet et fonctionnelle. Il est souvent décrit comme un langage "piles incluses" en raison de sa bibliothèque standard complète.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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Lqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYODjTvwAAAMDSURBVIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQZqNiBgCVgMMMAAAwwwwECwAQUNLmjNaVzbrDYZYIABBhhIMyBgCVgMMMAAAwwwwECwAQUNLqhkn5bs1UmdGGCAAQaqNfAPjyUjxhd/7wcAAAAASUVORK5CYII="></div><br></div>
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
sys.argv[2] -&gt; string</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="environnement-virtuel--venv-">Environnement virtuel (venv)</a>
</h1>
<div class="Section6"><br>Python fournit un&nbsp; environnement virtuel qui permet d'isoler les dépendances spécifiques à un projet.<br><br>Installation des dépendances.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">sudo apt install python3-dev
sudo apt install python3-pip
sudo apt install python3-venv</pre><br>Création d'un environnement virtuel.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">python3 -m venv venv</pre><br>Activation d'un environnement virtuel.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">source venv/bin/activate</pre><br>Désactivation d'un environnement virtuel.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">deactivate</pre><br>Installation d'un package dans un environnement virtuel.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">venv/bin/pip install RPI.GPIO</pre><br>Liste des packages installés dans un environnement virtuel.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">venv/bin/pip list

Package    Version
---------- -------
pip        23.0.1
RPi.GPIO   0.7.1
setuptools 66.1.1</pre><br></div>
</div>
</div>
</div><br>