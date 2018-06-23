<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation avec le Python</div></a></div></div><div class="Body2 Orange">Le Python est un langage de programmation orientée objet.<br>Le but de ce tutoriel est de vous apprendre la programmation avec le Python.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la programmation avec le Python, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>La programmation avec le Python nécessite un éditeur de texte pour l'édition de nos scripts et Python pour l'exécution de nos scripts.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger Python</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.python.org/">https://www.python.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utilisation de Python"><a class="Link3" href="#">Utilisation de Python</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser Python.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Script Python (main.py)<br></h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-py">#================================================
print "### Programme Simple\n"
#================================================
print "Bonjour tout le monde"
#================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécution (cmd_run.bat)<br></h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-sh">@echo off

set PATH=C:\Python27

set GSRC=..\src

echo.
python %GSRC%\main.py
echo.

pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><div class="Img3"><img src="img/Utilisation_Simple.png" alt="img/Utilisation_Simple.png"></div></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gérer les modules"><a class="Link3" href="#">Gérer les modules</a></h1><div class="Body3">Le but de cette section est de vous apprendre à les modules avec Python.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1529742301175"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1529742301175");</script></div><br><h2 class="Title7 GTitle2" id="Gérer les modules-Création et utilisation d'un module"><a class="Link9" href="#Gérer les modules">Création et utilisation d'un module</a></h2><br><h3 class="Title8 GTitle3">Module (GMath.py)
</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-py">#================================================
def add(a, b):
    lData = a + b
    return lData
#================================================
def sub(a, b):
    lData = a - b
    return lData
#================================================
def mul(a, b):
    lData = a * b
    return lData
#================================================
def div(a, b):
    lData = a / float(b)
    return lData
#================================================
def mod(a, b):
    lData = a % b
    return lData
#================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Programme principal (main.py)</h3><div class="GCode1"><div class="Code02"><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums  lang-py">#================================================
print "### Module\n"
#================================================
import GMath
#================================================
lData = GMath.add(22, 7)
print "{0:25}: {1}".format("Addition (22 + 7)", lData)
#================================================
lData = GMath.sub(22, 7)
print "{0:25}: {1}".format("Soustraction (22 - 7)", lData)
#================================================
lData = GMath.mul(22, 7)
print "{0:25}: {1}".format("Multiplication (22 * 7)", lData)
#================================================
lData = GMath.div(22, 7)
print "{0:25}: {1}".format("Division (22 / 7)", lData)
#================================================
lData = GMath.mod(22, 7)
print "{0:25}: {1}".format("Modulo (22 % 7)", lData)
#================================================</xmp></pre></div></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/Utilisation_Module.png" alt="img/Utilisation_Module.png"><br><br><h2 class="Title7 GTitle2" id="Gérer les modules-Intégration d'un test à un module"><a class="Link9" href="#Gérer les modules">Intégration d'un test à un module</a></h2><br><h3 class="Title8 GTitle3">Module (GMath.py)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-py">#================================================
def add(a, b):
    lData = a + b
    return lData
#================================================
def sub(a, b):
    lData = a - b
    return lData
#================================================
def mul(a, b):
    lData = a * b
    return lData
#================================================
def div(a, b):
    lData = a / float(b)
    return lData
#================================================
def mod(a, b):
    lData = a % b
    return lData
#================================================
if __name__ == "__main__":
    print "{0:25}: {1}".format("Addition (25 + 9)", add(25, 9))
    print "{0:25}: {1}".format("Addition (25 - 9)", sub(25, 9))
    print "{0:25}: {1}".format("Addition (25 * 9)", mul(25, 9))
    print "{0:25}: {1}".format("Addition (25 / 9)", div(25, 9))
    print "{0:25}: {1}".format("Addition (25 % 9)", mod(25, 9))
#================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Programme principal (main.py)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-py">#================================================
import GMath
#================================================
lData = GMath.add(22, 7)
print "{0:25}: {1}".format("Addition (22 + 7)", lData)
#================================================
lData = GMath.sub(22, 7)
print "{0:25}: {1}".format("Soustraction (22 - 7)", lData)
#================================================
lData = GMath.mul(22, 7)
print "{0:25}: {1}".format("Multiplication (22 * 7)", lData)
#================================================
lData = GMath.div(22, 7)
print "{0:25}: {1}".format("Division (22 / 7)", lData)
#================================================
lData = GMath.mod(22, 7)
print "{0:25}: {1}".format("Modulo (22 % 7)", lData)
#================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécution</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-sh">@echo off

set PATH=C:\Python27

set GSRC=..\src

echo.
echo ### Module Test Interne
echo.
python %GSRC%\GMath.py
echo.
echo ### Module Test Externe
echo.
python %GSRC%\main.py
echo.

pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/Utilisation_Module_Test.png" alt="img/Utilisation_Module_Test.png"></div></div></div></div></div></div><br><br>