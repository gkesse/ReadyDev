<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre à compiler un projet C++ avec CMake</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orientée objet.<br><b>CMake</b> est un outil de compilation de projet <b>C++</b>.<br>Le but de ce tutoriel est de vous apprendre à compiler un projet <b>C++</b> avec <b>CMake</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la compilation de projet <span class="GColor1" style="color:lime;">C++</span> avec <span class="GColor1" style="color:lime;">CMake</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- CMake, comme outil de construction.<br>- MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger CMake</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://cmake.org/download/">https://cmake.org/download/</a><br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.mingw.org/">http://www.mingw.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utilisation de CMake"><a class="Link3" href="#">Utilisation de CMake</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">utiliser CMake</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537656305499"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537656305499");</script></div><br><h2 class="Title7 GTitle2" id="Utilisation de CMake-Obtenir de l'aide"><a class="Link9" href="#Utilisation de CMake">Obtenir de l'aide</a></h2><br><h3 class="Title8 GTitle3">Obtenir de l'aide</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\CMake\bin

cmake --help

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utilisation de CMake-Programme principal"><a class="Link9" href="#Utilisation de CMake">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout << "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utilisation de CMake-Fichier de construction"><a class="Link9" href="#Utilisation de CMake">Fichier de construction</a></h2><br><h3 class="Title8 GTitle3">Fichier de construction (src/CMakeLists.txt)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cmake_minimum_required(VERSION 3.0)
project(GProject)
set(GTARGET ${PROJECT_NAME})
set(
	GSOURCES
	main.cpp
)
add_executable(${GTARGET} ${GSOURCES})</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utilisation de CMake-Générer le projet"><a class="Link9" href="#Utilisation de CMake">Générer le projet</a></h2><br><h3 class="Title8 GTitle3">Démarrer CMake</h3><div class="Img3 GImage"><img src="img/CMake.png" alt="img/CMake.png"></div><br><h3 class="Title8 GTitle3">Sélectionner le générateur</h3><div class="Img3 GImage"><img src="img/CMake_02.png" alt="img/CMake_02.png"></div><br><h3 class="Title8 GTitle3">Définir les compilateurs</h3><div class="Img3 GImage"><img src="img/CMake_03.png" alt="img/CMake_03.png"></div><br><h3 class="Title8 GTitle3">Configurer</h3><div class="Img3 GImage"><img src="img/CMake_04.png" alt="img/CMake_04.png"></div><br><h3 class="Title8 GTitle3">Configurer</h3><div class="Img3 GImage"><img src="img/CMake_05.png" alt="img/CMake_05.png"></div><br><h3 class="Title8 GTitle3">Générer</h3><div class="Img3 GImage"><img src="img/CMake_06.png" alt="img/CMake_06.png"></div><br><div class="Img3 GImage"><img src="img/CMake_07.png" alt="img/CMake_07.png"></div><br><div class="Img3 GImage"><img src="img/CMake_08.png" alt="img/CMake_08.png"></div><br><h2 class="Title7 GTitle2" id="Utilisation de CMake-Compiler le projet"><a class="Link9" href="#Utilisation de CMake">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Nettoyer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

rd /q /s build\CMakeFiles
del /q build\*.txt
del /q build\*.cmake
del /q build\*.exe
del /q build\Makefile</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

cd build
mingw32-make
cd ..</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

echo.
build\GProject
echo.
pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Construire le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

call cmd_compile.bat
call cmd_run.bat</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utilisation de CMake-Résultat"><a class="Link9" href="#Utilisation de CMake">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/CMake_09.png" alt="img/CMake_09.png"></div><br><div class="Img3 GImage"><img src="img/CMake_10.png" alt="img/CMake_10.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler un fichier source"><a class="Link3" href="#">Compiler un fichier source</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">compiler un fichier source</span> avec CMake.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537307622789"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537307622789");</script></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Programme principal"><a class="Link9" href="#Compiler un fichier source">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout << "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Fichier de construction"><a class="Link9" href="#Compiler un fichier source">Fichier de construction</a></h2><br><h3 class="Title8 GTitle3">Fichier de construction (src/CMakeLists.txt)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cmake_minimum_required(VERSION 3.0)
project(GProject)
set(GTARGET ${PROJECT_NAME})
set(
	GSOURCES
	main.cpp
)
add_executable(${GTARGET} ${GSOURCES})</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Compiler le projet"><a class="Link9" href="#Compiler un fichier source">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Nettoyer la compilation</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

cd build
mingw32-make clean
cd ..</xmp></pre></div><br><h3 class="Title8 GTitle3">Nettoyer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

rd /q /s build\CMakeFiles
del /q build\*.txt
del /q build\*.cmake
del /q build\Makefile</xmp></pre></div><br><h3 class="Title8 GTitle3">Générer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\CMake\bin
set PATH=C:\MinGW\bin;%PATH%

cd build
cmake ../../src ^
-G "MinGW Makefiles" ^
-DCMAKE_BUILD_TYPE=RELEASE ^
-DCMAKE_C_COMPILER=gcc ^
-DCMAKE_CXX_COMPILER=g++
cd ..</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

cd build
mingw32-make
cd ..</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

echo.
build\src\GProject
echo.
pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Construire le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

call cmd_remove.bat
call cmd_cmake.bat
call cmd_compile.bat
call cmd_run.bat</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Résultat"><a class="Link9" href="#Compiler un fichier source">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Unique.png" alt="img/Fichier_Unique.png"></div></div></div></div></div><br>