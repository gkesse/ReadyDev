<div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Sommaire"><a class="clrb" href="#">Sommaire</a></h1><div class="txal pgCt10"><div class="dibm Summary1"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Introduction">Introduction</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Auteur">Auteur</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation sous Windows avec MinGW">Installation sous Windows avec MinGW</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ avec MinGW">Compiler un projet C++ avec MinGW</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Communiquer avec la console">Communiquer avec la console</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Communiquer avec le clavier">Communiquer avec le clavier</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Gérer les conditions">Gérer les conditions</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Gérer les boucles">Gérer les boucles</a></div></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Introduction"><a class="clrb" href="#Sommaire">Introduction</a></h1><div class="txal pgCt10">Le C++ est un langage de programmation orienté objet. Le but de ce tutoriel est de vous apprendre le C++.<br><br><b>Prérequis :</b><br>Aucun prérequis n'est nécessaire.<br></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Auteur"><a class="clrb" href="#Sommaire">Auteur</a></h1><div class="txal pgCt10">Je suis <b>Gérard KESSE</b>, <br>Ingénieur en Développement Informatique C/C++/Qt, <br>Avec à la fois des compétences en Systèmes Embarqués et en Robotique.<br><br>Formé à Polytech'Montpellier, Je suis un professionnel de conception de projets logiciel applicatif ou embarqué dans les secteurs de l'Aéronautique, de la Robotique, des Drones et de la Vision par Ordinateur. Aussi, Je reste ouvert à d'autres types de secteurs tels que l'Énergie et les Finances.<br><br>Les Sciences de l’Ingénieur sont au cœur du métier d’ingénieur. Sur le site <br><b>ReadyDev</b>, la Plateforme de Développement Continu, dont j'en suis le concepteur, vous trouverez des cours et des tutoriels adaptés aux sciences de l’ingénieur.<br><br><div align="center">Comprendre la Théorie pour mieux Pratiquer.<br>Montez en Compétences sur ReadyDev.<br>J'aime, Je partage.<br><br><b>Gérard KESSE</b><br><b></b><div class="ovfa"><img src="/img/readydev.png" alt="Image.png"><br><a class="hvra" href="http://github.com/gkesse">GitHub</a> | <a class="hvra" href="https://www.linkedin.com/in/tia-gerard-kesse/">LinkedIn</a></div></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Installation sous Windows avec MinGW"><a class="clrb" href="#Sommaire">Installation sous Windows avec MinGW</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Téléchargements">Téléchargements</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation de MinGW">Installation de MinGW</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation de Notepad++">Installation de Notepad++</a></div></div><br><br><h2 class="ftwn Title2" id="Téléchargements"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec MinGW">Téléchargements</a></h2><br><b>Notepad++ :</b><br><a class="hvra" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a><br><br><b>MinGW :</b><br><a class="hvra" href="https://notepad-plus-plus.org/fr/">http://www.mingw.org/</a><br><br><h2 class="ftwn Title2" id="Installation de MinGW"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec MinGW">Installation de MinGW</a></h2><br><b>Packages MinGW :</b><br>mingw32-base<br>mingw32-gcc-g++<br><br><h2 class="ftwn Title2" id="Installation de Notepad++"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec MinGW">Installation de Notepad++</a></h2><br><b>Plugins Notepad++ :</b><br>TextFX<br>NppExport</div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Compiler un projet C++ avec MinGW"><a class="clrb" href="#Sommaire">Compiler un projet C++ avec MinGW</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ avec un seul fichier source">Compiler un projet C++ avec un seul fichier source</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ avec plusieurs fichiers sources">Compiler un projet C++ avec plusieurs fichiers sources</a></div></div><br><br><h2 class="ftwn Title2" id="Compiler un projet C++ avec un seul fichier source"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compiler un projet C++ avec MinGW">Compiler un projet C++ avec un seul fichier source</a></h2><br><b>Objectif :</b><br>Compiler un projet C++ avec un seul fichier source.<br>Créer un fichier source en C++.<br>Créer un fichier de construction Makefile.<br><br><b>Implémentation :</b><br>Créer un fichier source (main.cpp).<br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_01.png" alt="img/Image_01.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>win/cmd_build.bat<br>win/cmd_clean.bat<br>win/cmd_compile.bat<br>win/cmd_run.bat<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout << "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div><br><b>win/Makefile</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">GSRC = ../src
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
	del /q $(GBIN)\* $(GBUILD)\*</xmp></pre></div><br><b>Macros Makefile :</b><br>GSRC : répertoire des fichiers sources<br>GBIN : répertoire de génération du fichier exécutable<br>GBUILD : répertoire de génération des fichiers objets<br>GTARGET : chemin du fichier exécutable<br>GINCS : liste des répertoires de fichiers entêtes<br>GLIBS: liste des répertoires et des fichiers librairies.<br>GOBJS : liste des fichiers objets<br><br><b>win/cmd_build.bat</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">@echo off

call cmd_clean.bat
call cmd_compile.bat
call cmd_run.bat</xmp></pre></div><br><b>win/cmd_clean.bat</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">@echo off

set PATH=C:\MinGW\bin

mingw32-make clean</xmp></pre></div><br><b>win/cmd_compile.bat</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">@echo off

set PATH=C:\MinGW\bin

mingw32-make</xmp></pre></div><br><b>win/cmd_run.bat</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">@echo off

set PATH=C:\MinGW\bin

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><b>Nettoyage du projet :</b><br>cmd_clean.bat<br><br><b>Compilation du projet :</b><br>cmd_compile.bat<br><br><b>Exécution du projet :</b><br>cmd_run.bat<br><br><b>Construction du projet :</b><br>cmd_build.bat<br><br><b>Construction manuel :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">del /q bin\* build\*
g++ -c ../src/main.cpp -o build/main.o
g++ -o bin/GProject.exe build/main.o</xmp></pre></div><br><h2 class="ftwn Title2" id="Compiler un projet C++ avec plusieurs fichiers sources"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compiler un projet C++ avec MinGW">Compiler un projet C++ avec plusieurs fichiers sources</a></h2><br><b>Objectif :</b><br>Compiler un projet C++ avec plusieurs fichiers sources.<br>Créer un fichier entête en C++.<br>Créer une fonction en C++.<br>Créer un fichier de construction Makefile.<br><b><br>Implémentation :</b><br>Créer un fichier entête (hello.h). Déclarer la fonction dire bonjour (sayHello()).<br>Créer un fichier source (hello.cpp). Définir la fonction dire bonjour (sayHello()).<br>Créer un fichier source (main.cpp). Utiliser la fonction dire bonjour (sayHello())<br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_01.png" alt="img/Image_01.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>src/manager/hello.h<br>src/manager/hello.cpp<br>win/Makefile<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include "hello.h"
//===============================================
int main(int argc, char** argv) {
    sayHello();
    return 0;
}
//===============================================</xmp></pre></div><b><br>src/manager/hello.h</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
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
//===============================================</xmp></pre></div><br><b>src/manager/hello.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include "hello.h"
//===============================================
void sayHello() {
    cout << "Bonjour tout le monde\n";
}
//===============================================</xmp></pre></div><br><b>win/Makefile</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
	-I../src/manager

GOBJS = \
	$(GBUILD)/main.o \
	$(GBUILD)/hello.o

all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.cpp
	g++ -c $(GSRC)/main.cpp -o $(GBUILD)/main.o $(GINCS)
$(GBUILD)/hello.o: $(GSRC)/manager/hello.cpp
	g++ -c $(GSRC)/manager/hello.cpp -o $(GBUILD)/hello.o $(GINCS)
clean:
	del /q $(GBIN)\* $(GBUILD)\*</xmp></pre></div><br><b>Construction du projet :</b><br>Cmd_build.bat<br><br><b>Construction manuelle :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">del /q bin\* build\*
g++ -c ../src/main.cpp -o build/main.o -I../src/manager
g++ -c ../src/manager/hello.cpp -o build/hello.o -I../src/manager
g++ -o bin/GProject.exe build/main.o build/hello.o</xmp></pre></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Communiquer avec la console"><a class="clrb" href="#Sommaire">Communiquer avec la console</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Afficher un message">Afficher un message</a></div></div><br><br><h2 class="ftwn Title2" id="Afficher un message"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer avec la console">Afficher un message</a></h2><br><b>Objectif :</b><br>Afficher un message dans la console.<br><br><b>Implémentation :</b><br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_01.png" alt="img/Image_01.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout << "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Communiquer avec le clavier"><a class="clrb" href="#Sommaire">Communiquer avec le clavier</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Lire des données à partir du clavier">Lire des données à partir du clavier</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Gérer le problème d’espace lors de la saisie de données">Gérer le problème d’espace lors de la saisie de données</a></div></div><br><br><h2 class="ftwn Title2" id="Lire des données à partir du clavier"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer avec le clavier">Lire des données à partir du clavier</a></h2><br><b>Objectif :</b><br>Récupérer des données saisies à partir du clavier.<br><br><b>Implémentation :</b><br>Récupérer les identifiants d’une personne saisis à partir du clavier.<br>Récupérer le nom (m_name) et le code d’entrée (m_code) de la personne.<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_02.png" alt="img/Image_02.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    string m_name;
    int m_code;
    
    cout << "\n### Saisir vos identifiants:\n";
    cout << "Nom: "; cin >> m_name;
    cout << "Code: "; cin >> m_code;
    
    cout << "\n### Vous avez saisi:\n";
    cout << "Nom: " << m_name << "\n";
    cout << "Code: " << m_code << "\n";
    return 0;
}
//===============================================</xmp></pre></div><b><br>Problème :</b><br>Problème de gestion d’espace lors de la saisie<br>Nom : Gerard KESSE<br>Code : la saisie du code est ignorée<br> <div class="ovfa"><img src="img/Image_03.png" alt="img/Image_03.png"></div><br><h2 class="ftwn Title2" id="Gérer le problème d’espace lors de la saisie de données"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer avec le clavier">Gérer le problème d’espace lors de la saisie de données</a></h2><b><br>Objectif :</b><br>Gérer le problème d’espace lors de la saisie de données à partir du clavier.<br><br><b>Implémentation :</b><br>Récupérer les identifiants d’une personne saisis à partir du clavier.<br>Récupérer le nom (m_name) et le code d’entrée (m_code) de la personne.<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_04.png" alt="img/Image_04.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    string m_cin;
    string m_name;
    int m_code;
    
    cout << "\n### Saisir vos identifiants:\n";
    cout << "Nom: "; getline(cin, m_cin); m_name = m_cin;
    cout << "Code: "; getline(cin, m_cin); m_code = stoi(m_cin);
    
    cout << "\n### Vous avez saisi:\n";
    cout << "Nom: " << m_name << "\n";
    cout << "Code: " << m_code << "\n";
    return 0;
}
//===============================================</xmp></pre></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Gérer les conditions"><a class="clrb" href="#Sommaire">Gérer les conditions</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Condition If (Si)">Condition If (Si)</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Condition Else (Sinon)">Condition Else (Sinon)</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Condition Else If (Sinon Si)">Condition Else If (Sinon Si)</a></div></div><br><br><h2 class="ftwn Title2" id="Condition If (Si)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les conditions">Condition If (Si)</a></h2><b><br>Objectif :</b><br>Exécuter une instruction Si une condition est vérifiée.<br><br><b>Implémentation :</b><br>Récupérer le code d’accès (m_code) d’une personne.<br>Afficher un message (BRAVO !!! Code Correct) si le code d’accès est correct.<br><b><br>Résultat Code Correct :</b><br> <div class="ovfa"><img src="img/Image_05.png" alt="img/Image_05.png"></div><b><br>Résultat Code Incorrect :</b><br> <div class="ovfa"><img src="img/Image_06.png" alt="img/Image_06.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    string m_cin;
    int m_code;
    int ACCESS_CODE = 1325;
    
    cout << "\n### Saisir vos identifiants:\n";
    cout << "Code: "; getline(cin, m_cin); m_code = stoi(m_cin);
    
    cout << "\n### Verification d'acces:\n";
    if(m_code == ACCESS_CODE) {
        cout << "BRAVO !!! Code Correct\n";
        return 0;
    }
    cout << "ERROR !!! Code Incorrect\n";
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="ftwn Title2" id="Condition Else (Sinon)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les conditions">Condition Else (Sinon)</a></h2><br><b>Objectif :</b><br>Exécuter une instruction Si une condition est vérifiée, <br>Sinon exécuter l’autre instruction.<br><br><b>Implémentation :</b><br>Récupérer le code d’accès (m_code) d’une personne.<br>Afficher un message (BRAVO !!! Code Correct) si le code d’accès est correct.<br>Sinon afficher le message (ERREUR !!! Code Incorrect).<br><br><b>Résultat Code Correct :</b><br> <div class="ovfa"><img src="img/Image_05.png" alt="img/Image_05.png"></div><b><br>Résultat Code Incorrect :</b><br> <div class="ovfa"><img src="img/Image_06.png" alt="img/Image_06.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    string m_cin;
    int m_code;
    int ACCESS_CODE = 1325;
    
    cout << "\n### Saisir vos identifiants:\n";
    cout << "Code: "; getline(cin, m_cin); m_code = stoi(m_cin);
    
    cout << "\n### Verification d'acces:\n";
    if(m_code == ACCESS_CODE) {
        cout << "BRAVO !!! Code Correct\n";
        return 0;
    }
    cout << "ERROR !!! Code Incorrect\n";
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="ftwn Title2" id="Condition Else If (Sinon Si)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les conditions">Condition Else If (Sinon Si)</a></h2><br><b>Objectif :</b><br>Exécuter une instruction Si une condition est vérifiée, <br>Sinon Si la condition suivante est vérifiée, exécuter l’autre instruction.<br><br><b>Implémentation :</b><br>Récupérer le code d’accès (m_code) d’une personne.<br>Si le code d’accès correspond au code d’accès administrateur,<br>Afficher un message (BRAVO !!! Code Administrateur Correct).<br>Sinon Si le code d’accès correspond au code d’accès utilisateur, <br>Afficher le message (BRAVO !!! Code Utilisateur Correct).<br>Dans le Cas Contraire (Sinon),<br>Afficher le message (ERREUR !!! Code Incorrect).<br><b><br>Résultat Code Administrateur Correct :</b><br> <div class="ovfa"><img src="img/Image_07.png" alt="img/Image_07.png"></div><br><b>Résultat Code Utilisateur Correct :</b><br> <div class="ovfa"><img src="img/Image_08.png" alt="img/Image_08.png"></div><br><b>Résultat Code Incorrect :</b><br> <div class="ovfa"><img src="img/Image_06.png" alt="img/Image_06.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>win/bin/<br>win/build/<br><b><br>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
	string m_cin;
	int m_code;
	int ADMIN_CODE = 1325;
	int USER_CODE = 2513;
	
	cout << "\n### Saisir vos identifiants:\n";
	cout << "Code: "; getline(cin, m_cin); m_code = stoi(m_cin);
	
	cout << "\n### Verification d'acces:\n";
	if(m_code == ADMIN_CODE) {
		cout << "BRAVO !!! Code Administrateur Correct\n";
	}
	else if(m_code == USER_CODE) {
		cout << "BRAVO !!! Code Utilisateur Correct\n";
	}
	else {
		cout << "ERREUR !!! Code Incorrect\n";
	}
	return 0;
}
//===============================================</xmp></pre></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Gérer les boucles"><a class="clrb" href="#Sommaire">Gérer les boucles</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Boucle For (Pour Tout)">Boucle For (Pour Tout)</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Boucle While (Tant Que)">Boucle While (Tant Que)</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Boucle Do While (Faire Tant Que)">Boucle Do While (Faire Tant Que)</a></div></div><br><br><h2 class="ftwn Title2" id="Boucle For (Pour Tout)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les boucles">Boucle For (Pour Tout)</a></h2><br><b>Objectif :</b><br>Exécuter une instruction en boucle.<br><br><b>Implémentation :</b><br>Créer une table de multiplication par 9. <br>Les lignes allant de (0 à 10).<br><br><b>Résultat :</b><br> <div class="ovfa"><div class="ovfa"><img src="img/Image_09.png" alt="img/Image_09.png"></div></div><br><b>Dossier projet :</b><br>src/main.cpp<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include <iostream>
#include <iomanip>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    int ROW_MAX = 10;
    int FACTOR = 9;
    
    cout << "### Table de multiplication par 9\n\n";
    
    for(int i = 0; i <= ROW_MAX; i++) {
        int m_data = i * FACTOR;
        cout << setw(2) << i << " x ";
        cout << FACTOR << " = ";
        cout << setw(2) << m_data << "\n";
    }<br><br> return 0;
}
//===============================================</xmp></pre></div><br><h2 class="ftwn Title2" id="Boucle While (Tant Que)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les boucles">Boucle While (Tant Que)</a></h2><br><b>Objectif :</b><br>Exécuter une instruction en boucle.<br><b><br>Implémentation :</b><br>Créer une table de multiplication par 9. <br>Les lignes allant de (0 à 10).<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_09.png" alt="img/Image_09.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include <iostream>
#include <iomanip>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    int ROW_MAX = 10;
    int FACTOR = 9;
    
    cout << "### Table de multiplication par 9\n\n";
    
    int i = 0;
    
    while(i <= ROW_MAX) {
        int m_data = i * FACTOR;
        cout << setw(2) << i << " x ";
        cout << FACTOR << " = ";
        cout << setw(2) << m_data << "\n";
        i++;
    }<br><br> return 0;
}
//===============================================</xmp></pre></div><br><h2 class="ftwn Title2" id="Boucle Do While (Faire Tant Que)"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les boucles">Boucle Do While (Faire Tant Que)</a></h2><br><b>Objectif :</b><br>Exécuter une instruction en boucle.<br><br><b>Implémentation :</b><br>Créer une table de multiplication par 9. <br>Les lignes allant de (0 à 10).<br><br><b>Résultat :</b><br> <div class="ovfa"><div class="ovfa"><img src="img/Image_09.png" alt="img/Image_09.png"></div></div><br><b>Dossier projet :</b><br>src/main.cpp<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#include <iostream>
#include <iomanip>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    int ROW_MAX = 10;
    int FACTOR = 9;
    
    cout << "### Table de multiplication par 9\n\n";
    
    int i = 0;
    
    do {
        int m_data = i * FACTOR;
        cout << setw(2) << i << " x ";
        cout << FACTOR << " = ";
        cout << setw(2) << m_data << "\n";
        i++;
    } while(i <= ROW_MAX);<br><br> return 0;
}
//===============================================</xmp></pre></div></div></div></div><br><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ --><!-- ============================================ -->