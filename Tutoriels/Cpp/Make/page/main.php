<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre à compiler un projet C++ avec Make</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orientée objet.<br><b>Make</b> est un outil de compilation de projet <b>C++</b>.<br>Le but de ce tutoriel est de vous apprendre à compiler un projet <b>C++</b> avec <b>Make</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Linux"><a class="Link3" href="#">Installation sous Linux</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la compilation de projet <span class="GColor1" style="color:lime;">C++</span> avec <span class="GColor1" style="color:lime;">Make</span>, sous Linux.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Linux:<br>-    Make, comme compilateur.<br>- SublimeText, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger Make</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.gnu.org/software/make/">https://www.gnu.org/software/make/</a><br><br><h3 class="Title8 GTitle3">Télécharger SublimeText</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.sublimetext.com/">https://www.sublimetext.com/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation de Make"><a class="Link3" href="#">Installation de Make</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">installer Make</span>, sous Linux.<br>Produit par <b>Gérard KESSE</b>.<br><br>Make permet de compiler des projets C/C++.<br>build-essential permet d'installer les outils essentiels à la construction de projets C/C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537436051132"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537436051132");</script></div><br><h2 class="Title7 GTitle2" id="Installation de Make-Installer build-essential"><a class="Link9" href="#Installation de Make">Installer build-essential</a></h2><br><h3 class="Title8 GTitle3">Installer build-essential</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt-get install build-essential</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation de Make-Outil Make"><a class="Link9" href="#Installation de Make">Outil Make</a></h2><br><h3 class="Title8 GTitle3">Outil Make</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">which make</xmp></pre></div><br><div class="Img3 GImage"><img src="img/Make.png" alt="img/Make.png"></div><br><h2 class="Title7 GTitle2" id="Installation de Make-Compilateur C"><a class="Link9" href="#Installation de Make">Compilateur C</a></h2><br><h3 class="Title8 GTitle3">Compilateur C (gcc)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">which gcc</xmp></pre></div><br><div class="Img3 GImage"><img src="img/Make_02.png" alt="img/Make_02.png"></div><br><h2 class="Title7 GTitle2" id="Installation de Make-Compilateur C++"><a class="Link9" href="#Installation de Make">Compilateur C++</a></h2><br><h3 class="Title8 GTitle3">Compilateur C++ (g++)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">which g++</xmp></pre></div><br><div class="Img3 GImage"><img src="img/Make_03.png" alt="img/Make_03.png"></div><br><h2 class="Title7 GTitle2" id="Installation de Make-Archiveur"><a class="Link9" href="#Installation de Make">Archiveur</a></h2><br><h3 class="Title8 GTitle3">Archiveur (ar)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">which ar</xmp></pre></div><br><div class="Img3 GImage"><img src="img/Make_04.png" alt="img/Make_04.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler un fichier source"><a class="Link3" href="#">Compiler un fichier source</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">compiler un fichier source</span> avec MinGW.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537307622789"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537307622789");</script></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Programme principal"><a class="Link9" href="#Compiler un fichier source">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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