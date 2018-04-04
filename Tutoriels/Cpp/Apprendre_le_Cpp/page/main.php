<div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Sommaire"><a class="clrb" href="#">Sommaire</a></h1><div class="txal pgCt10"><div class="dibm Summary1"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Introduction">Introduction</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Auteur">Auteur</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation sous Windows avec MinGW">Installation sous Windows avec MinGW</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compilation d’un projet C++ avec MinGW">Compilation d’un projet C++ avec MinGW</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Comprendre la structure d’un fichier Makefile">Comprendre la structure d’un fichier Makefile</a></div></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Introduction"><a class="clrb" href="#Sommaire">Introduction</a></h1><div class="txal pgCt10">Le C++ est un langage de programmation orienté objet. Le but de ce tutoriel est de vous apprendre le C++.<br><br><b>Prérequis :</b><br>Aucun prérequis n'est nécessaire.<br></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Auteur"><a class="clrb" href="#Sommaire">Auteur</a></h1><div class="txal pgCt10">Je suis <b>Gérard KESSE</b>, <br>Ingénieur en Développement Informatique C/C++/Qt, <br>Avec à la fois des compétences en Systèmes Embarqués et en Robotique.<br><br>Formé à Polytech'Montpellier, Je suis un professionnel de conception de projets logiciel applicatif ou embarqué dans les secteurs de l'Aéronautique, de la Robotique, des Drones et de la Vision par Ordinateur. Aussi, Je reste ouvert à d'autres types de secteurs tels que l'Énergie et les Finances.<br><br>Les Sciences de l’Ingénieur sont au cœur du métier d’ingénieur. Sur le site <br><b>ReadyDev</b>, la Plateforme de Développement Continu, dont j'en suis le concepteur, vous trouverez des cours et des tutoriels adaptés aux sciences de l’ingénieur.<br><br><div align="center">Comprendre la Théorie pour mieux Pratiquer.<br>Montez en Compétences sur ReadyDev.<br>J'aime, Je partage.<br><br><b>Gérard KESSE</b><br><b></b><div class="ovfa"><img src="/img/readydev.png" alt="Image.png"><br><a class="hvra" href="http://github.com/gkesse">GitHub</a> | <a class="hvra" href="https://www.linkedin.com/in/tia-gerard-kesse/">LinkedIn</a></div></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Installation sous Windows avec MinGW"><a class="clrb" href="#Sommaire">Installation sous Windows avec MinGW</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Téléchargements">Téléchargements</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation de MinGW">Installation de MinGW</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation de Notepad++">Installation de Notepad++</a></div></div><br><br><h2 class="ftwn Title2" id="Téléchargements"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec MinGW">Téléchargements</a></h2><br><b>Notepad++ :</b><br><a class="hvra" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a><br><br><b>MinGW :</b><br><a class="hvra" href="https://notepad-plus-plus.org/fr/">http://www.mingw.org/</a><br><br><h2 class="ftwn Title2" id="Installation de MinGW"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec MinGW">Installation de MinGW</a></h2><br><b>Packages MinGW :</b><br>mingw33-base<br>mingw32-gcc-g++<br><br><h2 class="ftwn Title2" id="Installation de Notepad++"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec MinGW">Installation de Notepad++</a></h2><br><b>Plugins Notepad++ :</b><br>TextFX<br>NppExport</div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Compilation d’un projet C++ avec MinGW"><a class="clrb" href="#Sommaire">Compilation d’un projet C++ avec MinGW</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ avec un seul fichier source">Compiler un projet C++ avec un seul fichier source</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ avec plusieurs fichiers sources">Compiler un projet C++ avec plusieurs fichiers sources</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ à partir d’un fichier Makefile">Compiler un projet C++ à partir d’un fichier Makefile</a></div></div><br><br><h2 class="ftwn Title2" id="Compiler un projet C++ avec un seul fichier source"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compilation d’un projet C++ avec MinGW">Compiler un projet C++ avec un seul fichier source</a></h2><br><b>Objectif :</b><br>Compiler un projet C++ avec un seul fichier source.<br><br><b>Implémentation :</b><br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br><br><br><b>Dossier projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">src/main.cpp
win/bin/
win/build/</xmp></pre></div><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
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
g++ -o bin/GProject.exe build/main.o</xmp></pre></div><br><b>Exécution du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">bin/GProject.exe</xmp></pre></div><br><h2 class="ftwn Title2" id="Compiler un projet C++ avec plusieurs fichiers sources"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compilation d’un projet C++ avec MinGW">Compiler un projet C++ avec plusieurs fichiers sources</a></h2><br><b>Objectif :</b><br>Compiler un projet C++ avec plusieurs fichiers sources.<br><br><b>Implémentation :</b><br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br><br><b><br>Dossier projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">src/main.cpp
src/manager/hello.h
src/manager/hello.cpp
win/bin/
win/build/</xmp></pre></div><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
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
g++ -o bin\GProject.exe build\main.o build\hello.o</xmp></pre></div><br><b>Exécution du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">bin/GProject.exe</xmp></pre></div><br><h2 class="ftwn Title2" id="Compiler un projet C++ à partir d’un fichier Makefile"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compilation d’un projet C++ avec MinGW">Compiler un projet C++ à partir d’un fichier Makefile</a></h2><br><b>Objectif :</b><br>Compiler un projet C++ à partir d’un fichier Makefile.<br><br><b>Implémentation :</b><br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br><br><br><b>Dossier projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">src/main.cpp
src/manager/hello.h
src/manager/hello.cpp
win/Makefile
win/bin/
win/build/</xmp></pre></div><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
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
mingw32-make</xmp></pre></div><br><b>Exécution du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">bin/GProject.exe</xmp></pre></div> </div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Comprendre la structure d’un fichier Makefile"><a class="clrb" href="#Sommaire">Comprendre la structure d’un fichier Makefile</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Optimiser la structure d’un fichier Makefile">Optimiser la structure d’un fichier Makefile</a></div></div><br><br><h2 class="ftwn Title2" id="Optimiser la structure d’un fichier Makefile"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Comprendre la structure d’un fichier Makefile">Optimiser la structure d’un fichier Makefile</a></h2><br><b>Objectif :</b><br>Écrire un fichier Makefile optimisé.<br>Créer des macros dans un fichier Makefile.<br><br><b>Implémentation :</b><br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br> <br><br><b>Dossier projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">src/main.cpp
src/manager/hello.h
src/manager/hello.cpp
win/Makeifle
win/bin/
win/build/</xmp></pre></div><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
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
    del /q $(GBIN)\* $(GBUILD)\*</xmp></pre></div><br><b>Macros Makefile :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">GSRC : répertoire des fichiers sources
GBIN : répertoire du fichier exécutable
GBUILD : répertoire de génération des fichiers objets
GTARGET : chemin du fichier exécutable
GINCS : liste des répertoires de fichiers entêtes
GOBJS : liste des fichiers objets</xmp></pre></div><b><br>Compilation du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">mingw32-make clean
mingw32-make</xmp></pre></div><br><b>Exécution du projet :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">bin/GProject.exe</xmp></pre></div></iostream></div></div></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ -->