<div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Sommaire"><a class="clrb" href="#">Sommaire</a></h1><div class="txal pgCt10"><div class="dibm Summary1"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Introduction">Introduction</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Auteur">Auteur</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation sous Windows avec MinGW">Installation sous Windows avec MinGW</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ avec MinGW">Compiler un projet C++ avec MinGW</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Comprendre la structure d’un fichier Makefile">Comprendre la structure d’un fichier Makefile</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Communiquer avec la console">Communiquer avec la console</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Communiquer avec le clavier">Communiquer avec le clavier</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Gérer les conditions">Gérer les conditions</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Gérer les boucles">Gérer les boucles</a></div></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Introduction"><a class="clrb" href="#Sommaire">Introduction</a></h1><div class="txal pgCt10">Le C++ est un langage de programmation orienté objet. Le but de ce tutoriel est de vous apprendre le C++.<br><br><b>Prérequis :</b><br>Aucun prérequis n'est nécessaire.<br></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Auteur"><a class="clrb" href="#Sommaire">Auteur</a></h1><div class="txal pgCt10">Je suis <b>Gérard KESSE</b>, <br>Ingénieur en Développement Informatique C/C++/Qt, <br>Avec à la fois des compétences en Systèmes Embarqués et en Robotique.<br><br>Formé à Polytech'Montpellier, Je suis un professionnel de conception de projets logiciel applicatif ou embarqué dans les secteurs de l'Aéronautique, de la Robotique, des Drones et de la Vision par Ordinateur. Aussi, Je reste ouvert à d'autres types de secteurs tels que l'Énergie et les Finances.<br><br>Les Sciences de l’Ingénieur sont au cœur du métier d’ingénieur. Sur le site <br><b>ReadyDev</b>, la Plateforme de Développement Continu, dont j'en suis le concepteur, vous trouverez des cours et des tutoriels adaptés aux sciences de l’ingénieur.<br><br><div align="center">Comprendre la Théorie pour mieux Pratiquer.<br>Montez en Compétences sur ReadyDev.<br>J'aime, Je partage.<br><br><b>Gérard KESSE</b><br><b></b><div class="ovfa"><img src="/img/readydev.png" alt="Image.png"><br><a class="hvra" href="http://github.com/gkesse">GitHub</a> | <a class="hvra" href="https://www.linkedin.com/in/tia-gerard-kesse/">LinkedIn</a></div></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Installation sous Windows avec MinGW"><a class="clrb" href="#Sommaire">Installation sous Windows avec MinGW</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Téléchargements">Téléchargements</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation de MinGW">Installation de MinGW</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation de Notepad++">Installation de Notepad++</a></div></div><br><br><h2 class="ftwn Title2" id="Téléchargements"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec MinGW">Téléchargements</a></h2><br><b>Notepad++ :</b><br><a class="hvra" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a><br><br><b>MinGW :</b><br><a class="hvra" href="https://notepad-plus-plus.org/fr/">http://www.mingw.org/</a><br><br><h2 class="ftwn Title2" id="Installation de MinGW"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec MinGW">Installation de MinGW</a></h2><br><b>Packages MinGW :</b><br>mingw33-base<br>mingw32-gcc-g++<br><br><h2 class="ftwn Title2" id="Installation de Notepad++"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec MinGW">Installation de Notepad++</a></h2><br><b>Plugins Notepad++ :</b><br>TextFX<br>NppExport</div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Compilation d’un projet C++ avec MinGW"><a class="clrb" href="#Sommaire">Compiler un projet C++ avec MinGW</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ avec un seul fichier source">Compiler un projet C++ avec un seul fichier source</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ avec plusieurs fichiers sources">Compiler un projet C++ avec plusieurs fichiers sources</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ à partir d’un fichier Makefile">Compiler un projet C++ à partir d’un fichier Makefile</a></div></div><br><br><h2 class="ftwn Title2" id="Compiler un projet C++ avec un seul fichier source"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compilation d’un projet C++ avec MinGW">Compiler un projet C++ avec un seul fichier source</a></h2><br><b>Objectif :</b><br>Compiler un projet C++ avec un seul fichier source.<br><br><b>Implémentation :</b><br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br><div class="ovfa"><img src="img/Image_01.png" alt="Image.png"></div><b><br>Dossier projet :</b><br>src/main.cpp<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout << "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div><br><b>Compilation du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">del /q bin\* build\*
g++ -c src/main.cpp -o build/main.o
g++ -o bin/GProject.exe build/main.o</xmp></pre></div><br><b>Exécution du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">bin/GProject.exe</xmp></pre></div><br><h2 class="ftwn Title2" id="Compiler un projet C++ avec plusieurs fichiers sources"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compilation d’un projet C++ avec MinGW">Compiler un projet C++ avec plusieurs fichiers sources</a></h2><br><b>Objectif :</b><br>Compiler un projet C++ avec plusieurs fichiers sources.<br><br><b>Implémentation :</b><br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br><br><br><b>Dossier projet :</b><br>src/main.cpp<br>src/manager/hello.h<br>src/manager/hello.cpp<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include "hello.h"
//===============================================
int main(int argc, char** argv) {
    sayHello();
    return 0;
}
//===============================================</xmp></pre></div><br><b>src/manager/hello.h</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#ifndef _hello_
#define _hello_
//===============================================
#include
//===============================================
using namespace std;
//===============================================
void sayHello();
//===============================================
#endif
//===============================================</xmp></pre></div><br><b>src/manager/hello.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include "hello.h"
//===============================================
void sayHello() {
    cout << "Bonjour tout le monde\n";
}
//===============================================</xmp></pre></div><br><b>Compilation du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">del /q bin\* build\*
g++ -c ..\src\main.cpp -o build\main.o -I..\src\manager
g++ -c ..\src\manager\hello.cpp -o build\hello.o -I..\src\manager
g++ -o bin\GProject.exe build\main.o build\hello.o</xmp></pre></div><br><b>Exécution du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">bin/GProject.exe</xmp></pre></div><br><h2 class="ftwn Title2" id="Compiler un projet C++ à partir d’un fichier Makefile"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compilation d’un projet C++ avec MinGW">Compiler un projet C++ à partir d’un fichier Makefile</a></h2><br><b>Objectif :</b><br>Compiler un projet C++ à partir d’un fichier Makefile.<br><br><b>Implémentation :</b><br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br><br><br><b>Dossier projet :</b><br>src/main.cpp<br>src/manager/hello.h<br>src/manager/hello.cpp<br>win/Makefile<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include "hello.h"
//===============================================
int main(int argc, char** argv) {
    sayHello();
    return 0;
}
//===============================================</xmp></pre></div><br><b>src/manager/hello.h</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#ifndef _hello_
#define _hello_
//===============================================
#include
//===============================================
using namespace std;
//===============================================
void sayHello();
//===============================================
#endif
//===============================================</xmp></pre></div><br><b>src/manager/hello.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include "hello.h"
//===============================================
void sayHello() {
    cout << "Bonjour tout le monde\n";
}
//===============================================</xmp></pre></div><br><b>win/Makefile :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">all: build\main.o build\hello.o
    g++ -o bin\GProject.exe build\main.o build\hello.o
build\main.o: ..\src\main.cpp
    g++ -c ..\src\main.cpp -o build\main.o -I..\src\manager
build\hello.o: ..\src\manager\hello.cpp
    g++ -c ..\src\manager\hello.cpp -o build\hello.o -I..\src\manager
clean:
    del /q bin\* build\*</xmp></pre></div><br><b>Compilation du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">mingw32-make clean
mingw32-make</xmp></pre></div><br><b>Exécution du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">bin/GProject.exe</xmp></pre></div> </div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Comprendre la structure d’un fichier Makefile"><a class="clrb" href="#Sommaire">Comprendre la structure d’un fichier Makefile</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Optimiser la structure d’un fichier Makefile">Optimiser la structure d’un fichier Makefile</a></div></div><br><br><h2 class="ftwn Title2" id="Optimiser la structure d’un fichier Makefile"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Comprendre la structure d’un fichier Makefile">Optimiser la structure d’un fichier Makefile</a></h2><br><b>Objectif :</b><br>Écrire un fichier Makefile optimisé.<br>Créer des macros dans un fichier Makefile.<br><br><b>Implémentation :</b><br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br> <br><br><b>Dossier projet :</b><br>src/main.cpp<br>src/manager/hello.h<br>src/manager/hello.cpp<br>win/Makeifle<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include "hello.h"
//===============================================
int main(int argc, char** argv) {
    sayHello();
    return 0;
}
//===============================================</xmp></pre></div><br><b>src/manager/hello.h</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#ifndef _hello_
#define _hello_
//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
void sayHello();
//===============================================
#endif
//===============================================</xmp></pre></div><iostream><br><b>src/manager/hello.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include "hello.h"
//===============================================
void sayHello() {
    cout << "Bonjour tout le monde\n";
}
//===============================================</xmp></pre></div><br><b>Makefile :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">GSRC = ..\src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\GProject.exe

GINCS = \
    -I..\src\manager

GOBJS = \
    $(GBUILD)\main.o \
    $(GBUILD)\hello.o

all: $(GOBJS)
    g++ -o $(GTARGET) $(GOBJS)
$(GBUILD)\main.o: $(GSRC)\main.cpp
    g++ -c $(GSRC)\main.cpp -o $(GBUILD)\main.o $(GINCS)
$(GBUILD)\hello.o: $(GSRC)\manager\hello.cpp
    g++ -c $(GSRC)\manager\hello.cpp -o $(GBUILD)\hello.o $(GINCS)
clean:
    del /q $(GBIN)\* $(GBUILD)\*</xmp></pre></div><br><b>Macros Makefile :</b><br>GSRC : répertoire des fichiers sources<br>GBIN : répertoire du fichier exécutable<br>GBUILD : répertoire de génération des fichiers objets<br>GTARGET : chemin du fichier exécutable<br>GINCS : liste des répertoires de fichiers entêtes<br>GOBJS : liste des fichiers objets<br><br><b>Compilation du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">mingw32-make clean
mingw32-make</xmp></pre></div><br><b>Exécution du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">bin/GProject.exe</xmp></pre></div></iostream></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Communiquer avec la console"><a class="clrb" href="#Sommaire">Communiquer avec la console</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Afficher un message">Afficher un message</a></div></div><br><br><h2 class="ftwn Title2" id="Afficher un message"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer avec la console">Afficher un message</a></h2><br><br></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Communiquer avec le clavier"><a class="clrb" href="#Sommaire">Communiquer avec le clavier</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Lire des données à partir du clavier">Lire des données à partir du clavier</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Gérer le problème d’espace lors de la saisie de données">Gérer le problème d’espace lors de la saisie de données</a></div></div><br><br><h2 class="ftwn Title2" id="Lire des données à partir du clavier"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer avec le clavier">Lire des données à partir du clavier</a></h2><br><br><h2 class="ftwn Title2" id="Gérer le problème d’espace lors de la saisie de données"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer avec le clavier">Gérer le problème d’espace lors de la saisie de données</a></h2><br><br></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Gérer les conditions"><a class="clrb" href="#Sommaire">Gérer les conditions</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Condition If (Si)">Condition If (Si)</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Condition Else (Sinon)">Condition Else (Sinon)</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Condition Else If (Sinon Si)">Condition Else If (Sinon Si)</a></div></div><br><br><h2 class="ftwn Title2" id="Condition If (Si)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les conditions">Condition If (Si)</a></h2><br><br><h2 class="ftwn Title2" id="Condition Else (Sinon)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les conditions">Condition Else (Sinon)</a></h2><br><br><h2 class="ftwn Title2" id="Condition Else If (Sinon Si)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les conditions">Condition Else If (Sinon Si)</a></h2><br><br><br></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Gérer les boucles"><a class="clrb" href="#Sommaire">Gérer les boucles</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Boucle For (Pour Tout)">Boucle For (Pour Tout)</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Boucle While (Tant Que)">Boucle While (Tant Que)</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Boucle Do While (Faire Tant Que)">Boucle Do While (Faire Tant Que)</a></div></div><br><br><h2 class="ftwn Title2" id="Boucle For (Pour Tout)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les boucles">Boucle For (Pour Tout)</a></h2><br><br><h2 class="ftwn Title2" id="Boucle While (Tant Que)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les boucles">Boucle While (Tant Que)</a></h2><br><br><h2 class="ftwn Title2" id="Boucle Do While (Faire Tant Que)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les boucles">Boucle Do While (Faire Tant Que)</a></h2><br><br><br></div></div></div><br><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ -->