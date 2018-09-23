<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre à compiler un projet C++ avec QMake</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orientée objet.<br><b>QMake</b> est un outil de compilation de projet <b>C++</b> fourni par <b>Qt Creator</b>.<br>Le but de ce tutoriel est de vous apprendre à compiler un projet <b>C++</b> avec <b>QMake</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la compilation de projet <span class="GColor1" style="color:lime;">C++</span> avec <span class="GColor1" style="color:lime;">QMake</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- Qt Creator, comme IDE.<br>- QMake, comme outil de construction.<br>- MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger Qt Creator</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.mingw.org/">http://www.mingw.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler un fichier source"><a class="Link3" href="#">Compiler un fichier source</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">compiler un fichier source</span> avec QMake.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537307622789"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537307622789");</script></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Programme principal"><a class="Link9" href="#Compiler un fichier source">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout << "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Fichier projet"><a class="Link9" href="#Compiler un fichier source">Fichier projet</a></h2><br><h3 class="Title8 GTitle3">Fichier projet (GProject.pro)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier projet (GMain.pro)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">SOURCES += \
    $$PWD/main.cpp</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Générer le projet"><a class="Link9" href="#Compiler un fichier source">Générer le projet</a></h2><br><h3 class="Title8 GTitle3">Générer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\5.8\mingw53_32\bin

qmake -r -spec win32-g++</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Compiler le projet"><a class="Link9" href="#Compiler un fichier source">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Nettoyer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

del /q bin\*.exe
del /q build\*.o
del /q Makefile*</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

mingw32-make</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Construire le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

call cmd_clean.bat
call cmd_qmake.bat
call cmd_compile.bat
call cmd_run.bat</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Résultat"><a class="Link9" href="#Compiler un fichier source">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Unique.png" alt="img/Fichier_Unique.png"></div></div></div></div></div><br>