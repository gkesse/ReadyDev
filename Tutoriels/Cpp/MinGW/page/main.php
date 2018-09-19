<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre à compiler un projet C++ avec MinGW</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orientée objet.<br><b>MinGW</b> est un outil de compilation de projet <b>C++</b>.<br>Le but de ce tutoriel est de vous apprendre à compiler un projet <b>C++</b> avec <b>MinGW</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la compilation de projet <span class="GColor1" style="color:lime;">C++</span> avec <span class="GColor1" style="color:lime;">MinGW</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" href="http://mingw.org/">http://mingw.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation de MinGW"><a class="Link3" href="#">Installation de MinGW</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">installer MinGW</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>MinGW permet de compiler des projets développés en C/C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1536327105034"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1536327105034");</script></div><br><h2 class="Title7 GTitle2" id="Installation de MinGW-Installer MinGW"><a class="Link9" href="#Installation de MinGW">Installer MinGW</a></h2><br><h3 class="Title8 GTitle3">Lancer MinGW</h3><div class="Img3 GImage"><img src="img/MinGW.png" alt="img/MinGW.png"></div><br><h3 class="Title8 GTitle3">Démarrer l'installation</h3><div class="Img3 GImage"><img src="img/MinGW_02.png" alt="img/MinGW_02.png"></div><br><h3 class="Title8 GTitle3">Définir le répertoire d'installation</h3><div class="Img3 GImage"><img src="img/MinGW_03.png" alt="img/MinGW_03.png"></div><br><h3 class="Title8 GTitle3">Continuer</h3><div class="Img3 GImage"><img src="img/MinGW_04.png" alt="img/MinGW_04.png"></div><br><h3 class="Title8 GTitle3">Sélectionner les packages à installer</h3><div class="Img3 GImage"><img src="img/MinGW_05.png" alt="img/MinGW_05.png"></div><br><h3 class="Title8 GTitle3">Installer les packages</h3><div class="Img3 GImage"><img src="img/MinGW_06.png" alt="img/MinGW_06.png"></div><br><h3 class="Title8 GTitle3">Appliquer</h3><div class="Img3 GImage"><img src="img/MinGW_07.png" alt="img/MinGW_07.png"></div><br><h3 class="Title8 GTitle3">Fermer</h3><div class="Img3 GImage"><img src="img/MinGW_08.png" alt="img/MinGW_08.png"></div><br><h2 class="Title7 GTitle2" id="Installation de MinGW-Outil Make"><a class="Link9" href="#Installation de MinGW">Outil Make</a></h2><br><h3 class="Title8 GTitle3">Outil Make (mingw32-make)<br></h3><div class="Img3 GImage"><img src="img/MinGW_09.png" alt="img/MinGW_09.png"></div><br><h2 class="Title7 GTitle2" id="Installation de MinGW-Compilateur C"><a class="Link9" href="#Installation de MinGW">Compilateur C</a></h2><br><h3 class="Title8 GTitle3">Compilateur C (gcc)<br></h3><div class="Img3 GImage"><img src="img/MinGW_11.png" alt="img/MinGW_11.png"></div><br><h2 class="Title7 GTitle2" id="Installation de MinGW-Compilateur C++"><a class="Link9" href="#Installation de MinGW">Compilateur C++</a></h2><br><h3 class="Title8 GTitle3">Compilateur C++ (g++)<br></h3><div class="Img3 GImage"><img src="img/MinGW_10.png" alt="img/MinGW_10.png"></div><br><h2 class="Title7 GTitle2" id="Installation de MinGW-Archiveur"><a class="Link9" href="#Installation de MinGW">Archiveur</a></h2><br><h3 class="Title8 GTitle3">Archiveur (ar)<br></h3><div class="Img3 GImage"><img src="img/MinGW_12.png" alt="img/MinGW_12.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler un fichier source"><a class="Link3" href="#">Compiler un fichier source</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">compiler un fichier source</span> avec MinGW.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537307622789"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537307622789");</script></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Programme principal"><a class="Link9" href="#Compiler un fichier source">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
	del /q $(GBUILD)\*.o $(GBIN)\*.exe</xmp></pre></div><br><h3 class="Title8 GTitle3">Nettoyer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

mingw32-make clean</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

mingw32-make</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Construire le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

call cmd_clean.bat
call cmd_compile.bat
call cmd_run.bat</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Résultat"><a class="Link9" href="#Compiler un fichier source">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Unique.png" alt="img/Fichier_Unique.png"></div></div></div></div></div><br>