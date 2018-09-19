<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre à compiler un projet C++ avec Cygwin</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orientée objet.<br><b>Cygwin</b> est un outil de compilation de projet <b>C++</b>.<br>Le but de ce tutoriel est de vous apprendre à compiler un projet <b>C++</b> avec <b>Cygwin</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la compilation de projet <span class="GColor1" style="color:lime;">C++</span> avec <span class="GColor1" style="color:lime;">Cygwin</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    Cygwin, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger Cygwin</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.cygwin.com/">https://www.cygwin.com/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation de Cygwin"><a class="Link3" href="#">Installation de Cygwin</a></h1><div class="Body3">Le but de cette section est de vous apprendre à installer <span class="GColor1" style="color:lime;">Cygwin</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Cygwin permet de compiler des projets développés en C/C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537342025364"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537342025364");</script></div><br><h2 class="Title7 GTitle2" id="Installation de Cygwin-Installer Cygwin"><a class="Link9" href="#Installation de Cygwin">Installer Cygwin</a></h2><br><h3 class="Title8 GTitle3">Lancer Cygwin (setup-x86_64.exe)<br></h3><div class="Img3 GImage"><img src="img/Cygwin.png" alt="img/Cygwin.png"></div><br><h3 class="Title8 GTitle3">Continuer</h3><div class="Img3 GImage"><img src="img/Cygwin_01.png" alt="img/Cygwin_01.png"></div><br><h3 class="Title8 GTitle3">Installer à partir d'internet</h3><div class="Img3 GImage"><img src="img/Cygwin_02.png" alt="img/Cygwin_02.png"></div><br><h3 class="Title8 GTitle3">Définir le répertoire d'installation</h3><div class="Img3 GImage"><img src="img/Cygwin_03.png" alt="img/Cygwin_03.png"></div><br><h3 class="Title8 GTitle3">Définir le répertoire système</h3><div class="Img3 GImage"><img src="img/Cygwin_04.png" alt="img/Cygwin_04.png"></div><br><h3 class="Title8 GTitle3">Utiliser une connexion directe</h3><div class="Img3 GImage"><img src="img/Cygwin_05.png" alt="img/Cygwin_05.png"></div><br><h3 class="Title8 GTitle3">Sélectionner un site de téléchargement</h3><div class="Img3 GImage"><img src="img/Cygwin_06.png" alt="img/Cygwin_06.png"></div><br><h2 class="Title7 GTitle2" id="Installation de Cygwin-Installer le compilateur C/C++"><a class="Link9" href="#Installation de Cygwin">Installer le compilateur C/C++</a></h2><br><h3 class="Title8 GTitle3">Sélectionner le compilateur C/C++</h3><div class="Img3 GImage"><img src="img/Cygwin_08.png" alt="img/Cygwin_08.png"></div><br><h3 class="Title8 GTitle3">Installer</h3><div class="Img3 GImage"><img src="img/Cygwin_09.png" alt="img/Cygwin_09.png"></div><br><h3 class="Title8 GTitle3">Terminer</h3><div class="Img3 GImage"><img src="img/Cygwin_10.png" alt="img/Cygwin_10.png"></div><br><h3 class="Title8 GTitle3">Compilateur C (gcc)<br></h3><div class="Img3 GImage"><img src="img/Cygwin_11.png" alt="img/Cygwin_11.png"></div><br><h3 class="Title8 GTitle3">Compilateur C++ (g++)<br></h3><div class="Img3 GImage"><img src="img/Cygwin_12.png" alt="img/Cygwin_12.png"></div><br><h3 class="Title8 GTitle3">Archiveur (ar)</h3><div class="Img3 GImage"><img src="img/Cygwin_13.png" alt="img/Cygwin_13.png"></div><br><h2 class="Title7 GTitle2" id="Installation de Cygwin-Installer l'outil Make"><a class="Link9" href="#Installation de Cygwin">Installer l'outil Make</a></h2><br><h3 class="Title8 GTitle3">Sélectionner l'outil Make</h3><div class="Img3 GImage"><img src="img/Cygwin_14.png" alt="img/Cygwin_14.png"></div><br><h3 class="Title8 GTitle3">Installer</h3><div class="Img3 GImage"><img src="img/Cygwin_15.png" alt="img/Cygwin_15.png"></div><br><h3 class="Title8 GTitle3">Outil Make</h3><div class="Img3 GImage"><img src="img/Cygwin_16.png" alt="img/Cygwin_16.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler un fichier source"><a class="Link3" href="#">Compiler un fichier source</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">compiler un fichier source</span> avec MinGW.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537307622789"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537307622789");</script></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Programme principal"><a class="Link9" href="#Compiler un fichier source">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout << "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Compiler le projet"><a class="Link9" href="#Compiler un fichier source">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o
    
all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.cpp
	g++ -c $(GSRC)/main.cpp -o $(GBUILD)/main.o
clean:
	rm -f $(GBUILD)/*.o $(GBIN)/*.exe</xmp></pre></div><br><h3 class="Title8 GTitle3">Nettoyer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\cygwin64\bin

make clean</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\cygwin64\bin

make</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\cygwin64\bin

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Construire le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

call cmd_clean.bat
call cmd_compile.bat
call cmd_run.bat</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Résultat"><a class="Link9" href="#Compiler un fichier source">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Unique.png" alt="img/Fichier_Unique.png"></div></div></div></div></div><br>