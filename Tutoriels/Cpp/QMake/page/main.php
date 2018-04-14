<div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Sommaire"><a class="clrb" href="#">Sommaire</a></h1><div class="txal pgCt10">Le C++ est un langage de programmation orienté objet. QMake est un outil de compilation de projet C++ fourni par Qt Creator. Le but de ce tutoriel est de vous apprendre à compiler un projet C++ avec QMake.<br><br><div class="dibm Summary1"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Introduction">Introduction</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Auteur">Auteur</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation sous Windows avec QMake">Installation sous Windows avec QMake</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ avec QMake">Compiler un projet C++ avec QMake</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Gérer les librairies statiques avec QMake">Gérer les librairies statiques avec QMake</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Gérer les librairies dynamiques avec QMake">Gérer les librairies dynamiques avec QMake</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Gérer un projet complet avec QMake">Gérer un projet complet avec QMake</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Codes sources">Codes sources</a></div></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Introduction"><a class="clrb" href="#Sommaire">Introduction</a></h1><div class="txal pgCt10">Le C++ est un langage de programmation orienté objet. QMake est un outil de compilation de projet C++ fourni par Qt Creator. Le but de ce tutoriel est de vous apprendre à compiler un projet C++ avec QMake.<br><br><b>Prérequis :</b><br>Aucun prérequis n'est nécessaire.<br></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac  Title1" id="Auteur"><a class="clrb" href="#Sommaire">Auteur</a></h1><div class="txal pgCt10">Je suis <b>Gérard KESSE</b>, <br>Ingénieur en Développement Informatique C/C++/Qt, <br>Avec à la fois des compétences en Systèmes Embarqués et en Robotique.<br><br>Formé à Polytech'Montpellier, Je suis un professionnel de conception de projets logiciel applicatif ou embarqué dans les secteurs de l'Aéronautique, de la Robotique, des Drones et de la Vision par Ordinateur. Aussi, Je reste ouvert à d'autres types de secteurs tels que l'Énergie et les Finances.<br><br>Les Sciences de l’Ingénieur sont au cœur du métier d’ingénieur. Sur le site <br><b>ReadyDev</b>, la Plateforme de Développement Continu, dont j'en suis le concepteur, vous trouverez des cours et des tutoriels adaptés aux sciences de l’ingénieur.<br><br><div align="center">Comprendre la Théorie pour mieux Pratiquer.<br>Montez en Compétences sur ReadyDev.<br>J'aime, Je partage.<br><br><b>Gérard KESSE</b><br><b></b><div class="ovfa"><img src="/img/readydev.png" alt="Image.png"><br><a class="hvra" href="http://github.com/gkesse">GitHub</a> | <a class="hvra" href="https://www.linkedin.com/in/tia-gerard-kesse/">LinkedIn</a> | <a class="hvra" href="/CV/">CV</a></div></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Installation sous Windows avec QMake"><a class="clrb" href="#Sommaire">Installation sous Windows avec QMake</a></h1><div class="txal pgCt10">Qt Creator est un environnement de développement intégré multiplateforme faisant partie du framework Qt. Il est donc orienté pour la programmation en C++. Il intègre directement dans l'interface un débogueur, un outil de création d'interfaces graphiques, des outils pour la publication de code sur Git.<br><br>Dans ce tutoriel, nous utilisons l'outil Qt Creator, avec le compilateur C++ fourni par MinGW.<br><br><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Téléchargements">Téléchargements</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation de Notepad++">Installation de Notepad++</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Installation de MinGW">Installation de MinGW</a></div></div><br><br><h2 class="ftwn Title2" id="Téléchargements"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec QMake">Téléchargements</a></h2><br><b>Notepad++ :</b><br><a class="hvra" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a><br><br><b>MinGW :</b><br><a class="hvra" href="http://www.mingw.org/">http://www.mingw.org/</a><br><br><b>Qt Creator :</b><br><a class="hvra" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h2 class="ftwn Title2" id="Installation de Notepad++"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec QMake">Installation de Notepad++</a></h2><b><br>Plugins Notepad++ :</b><br>TextFX<br>NppExport<br><br><h2 class="ftwn Title2" id="Installation de MinGW"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation sous Windows avec QMake">Installation de MinGW</a></h2><br><b>Packages MinGW :</b><br>mingw32-base<br>mingw32-gcc-g++<br></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Compiler un projet C++ avec QMake"><a class="clrb" href="#Sommaire">Compiler un projet C++ avec QMake</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ avec un seul fichier source">Compiler un projet C++ avec un seul fichier source</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet C++ avec plusieurs fichiers sources">Compiler un projet C++ avec plusieurs fichiers sources</a></div></div><br><br><h2 class="ftwn Title2" id="Compiler un projet C++ avec un seul fichier source"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compiler un projet C++ avec QMake">Compiler un projet C++ avec un seul fichier source</a></h2><br><b>Objectif :</b><br>Compiler un projet C++ avec un seul fichier source.<br>Créer un fichier source en C++.<br>Créer un fichier de construction Makefile.<br><br><b>Implémentation :</b><br>Afficher un message dans la console (Bonjour tout le monde).<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_01.png" alt="img/Image_01.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>src/GMain.pri<br>win/GProject.pro<br>win/cmd_build.bat<br>win/cmd_clean.bat<br>win/cmd_qmake.bat<br>win/cmd_compile.bat<br>win/cmd_run.bat<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout << "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div><br><b>win/GProject.pro</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)</xmp></pre></div><br><b>src/GMain.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">SOURCES += \
    $$PWD/main.cpp</xmp></pre></div><br><b>win/cmd_build.bat</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">@echo off

call cmd_clean.bat
call cmd_qmake.bat
call cmd_compile.bat
call cmd_run.bat</xmp></pre></div><b><br>win/cmd_clean.bat</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">@echo off

del /q bin\*
del /q build\*
del /q Makefile*</xmp></pre></div><br><b>win/cmd_qmake.bat</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">@echo off

set PATH=C:\Qt\Qt5.8.0\5.8\mingw53_32\bin

qmake -r -spec win32-g++</xmp></pre></div><br><b>win/cmd_compile.bat</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

mingw32-make</xmp></pre></div><br><b>win/cmd_run.bat</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><b>Nettoyage du projet :</b><br>cmd_clean.bat<br><br><b>Génération du Makefile :</b><br>cmd_qmake.bat<br><br><b>Compilation du projet :</b><br>cmd_compile.bat<br><br><b>Exécution du projet :</b><br>cmd_run.bat<br><br><b>Construction du projet :</b><br>cmd_build.bat<br><br><b>Construction manuel :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">del /q bin\*
del /q build\*
del /q Makefile*
qmake -r -spec win32-g++
mingw32-make</xmp></pre></div><br><h2 class="ftwn Title2" id="Compiler un projet C++ avec plusieurs fichiers sources"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compiler un projet C++ avec QMake">Compiler un projet C++ avec plusieurs fichiers sources</a></h2><br><b>Objectif :</b><br>Compiler un projet C++ avec plusieurs fichiers sources.<br>Créer un fichier entête en C++.<br>Créer une classe en C++.<br>Créer un patron Singleton en C++.<br><br><b>Implémentation :</b><br>Créer une classe (GMath) permettant de réaliser des opérations arithmétiques sur deux nombres données,  Additionner (add()), Soustraire (substract()), Multiplier (multiply()), Diviser (divide()), Déterminer le Quotient (quotient()), Déterminer le Modulo  (modulo()). Créer une classe (GShow) permettant d’afficher des données dans la console (show()). Utiliser la classe (GMath) pour réaliser des opérations arithmétiques sur deux nombres données (22, 7). Utiliser la classe (GShow) pour afficher les résultats de calculs.<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_02.png" alt="img/Image_02.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>src/GMain.pri<br>src/manager/GMath.h<br>src/manager/GMath.cpp<br>src/manager/GSow.h<br>src/manager/GShow.cpp<br>src/manager/GManager.pri<br>win/GProject.pro<br>win/bin/<br>win/build/<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include "GShow.h"
#include "GMath.h"
//===============================================
int main(int argc, char** argv) {
    double m_data;
    
    GShow::Instance()->show("### Operations arithmetiques"); 
    
    m_data = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(m_data, "add(22, 7)");  
    
    m_data = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(m_data, "subtract(22, 7)");  
    
    m_data = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(m_data, "multiply(22, 7)"); 
    
    m_data = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(m_data, "divide(22, 7)"); 
    
    m_data = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(m_data, "quotient(22, 7)"); 
    
    m_data = GMath::Instance()->modulo(22, 7);
    GShow::Instance()->show(m_data, "modulo(22, 7)");    
    return 0;
}
//===============================================</xmp></pre></div><br><b>src/manager/GMath.h</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#ifndef _GMath_
#define _GMath_
//===============================================
#include <cmath>
//===============================================
class GMath {
private:
    GMath();
    
public:
    ~GMath();
    
public:
    static GMath* Instance();
    
public:
    double add(const double& a, const double& b);
    double subtract(const double& a, const double& b);
    double multiply(const double& a, const double& b);
    double divide(const double& a, const double& b);
    double quotient(const double& a, const double& b);
    double modulo(const int& a, const int& b);
    
private:
    static GMath* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><b>src/manager/GMath.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include "GMath.h"
//===============================================
GMath* GMath::m_instance = 0;
//===============================================
GMath::GMath() {

}
//===============================================
GMath::~GMath() {

}
//===============================================
GMath* GMath::Instance() {
    if(m_instance == 0) {
        m_instance = new GMath;
    }
    
    return m_instance;
}
//===============================================
double GMath::add(const double& a, const double& b) {
    double m_data = a + b;
    return m_data;
}
//===============================================
double GMath::subtract(const double& a, const double& b) {
    double m_data = a - b;
    return m_data;
}
//===============================================
double GMath::multiply(const double& a, const double& b) {
    double m_data = a * b;
    return m_data;
}
//===============================================
double GMath::divide(const double& a, const double& b) {
    double m_data = a / b;
    return m_data;
}
//===============================================
double GMath::quotient(const double& a, const double& b) {
    double m_data = floor(divide(a, b));
    return m_data;
}
//===============================================
double GMath::modulo(const int& a, const int& b) {
    int m_data = a % b;
    return double(m_data);
}
//===============================================</xmp></pre></div><br><b>src/manager/GShow.h</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#ifndef _GShow_
#define _GShow_
//===============================================
#include <iostream>
#include <iomanip>
#include <string>
//===============================================
using namespace std;
//===============================================
class GShow {
private:
    GShow();
    
public:
    ~GShow();
    
public:
    static GShow* Instance();
    
public:
    void show(const string& data, const string& name = "");
    void show(const double& data, const string& name = "");
    
private:
    static GShow* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><b>src/manager/GShow.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include "GShow.h"
//===============================================
GShow* GShow::m_instance = 0;
//===============================================
GShow::GShow() {

}
//===============================================
GShow::~GShow() {

}
//===============================================
GShow* GShow::Instance() {
    if(m_instance == 0) {
        m_instance = new GShow;
    }
    
    return m_instance;
}
//===============================================
void GShow::show(const string& data, const string& name) {
    if(name != "") cout << name << " : ";
    cout << data << "\n";
}
//===============================================
void GShow::show(const double& data, const string& name) {
    if(name != "") cout << name << " : ";
    cout << fixed << setprecision(2) << data << "\n";
}
//===============================================</xmp></pre></div><br><b>win/GProject.pro</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)</xmp></pre></div><br><b>src/GMain.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">include(manager/GManager.pri)

SOURCES += \
    $$PWD/main.cpp</xmp></pre></div><br><b>src/manager/GManager.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GMath.h \
    $$PWD/GShow.h

SOURCES += \
    $$PWD/GMath.cpp \
    $$PWD/GShow.cpp</xmp></pre></div><b><br>Construction du projet :</b><br>cmd_build.bat<br><br><b>Construction manuel :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">del /q bin\*
del /q build\*
del /q Makefile*
qmake -r -spec win32-g++
mingw32-make</xmp></pre></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Gérer les librairies statiques avec QMake"><a class="clrb" href="#Sommaire">Gérer les librairies statiques avec QMake</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Créer une librairie statique en C++">Créer une librairie statique en C++</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Utiliser une librairie statique en C++">Utiliser une librairie statique en C++</a></div></div><br><br><h2 class="ftwn Title2" id="Créer une librairie statique en C++"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les librairies statiques avec QMake">Créer une librairie statique en C++</a></h2><br><b>Objectif :</b><br>Créer une librairie statique en C++.<br><br><b>Implémentation :</b><br>Créer une classe (GMath) permettant de réaliser des opérations arithmétiques sur deux nombres données,  Additionner (add()), Soustraire (substract()), Multiplier (multiply()), Diviser (divide()), Déterminer le Quotient (quotient()), Déterminer le Modulo  (modulo()).<br>Créer une classe (GShow) permettant d’afficher des données dans la console (show()).<br>Regrouper ces deux classes dans une librairie statique (libHello.a).<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_03.png" alt="img/Image_03.png"></div><br><b>Dossier projet :</b><br>src/GMain.pri<br>src/manager/GMath.h<br>src/manager/GMath.cpp<br>src/manager/GSow.h<br>src/manager/GShow.cpp<br>src/manager/GManager.pri<br>win/GProject.pro<br>win/bin/<br>win/build/<br><br><b>src/manager/GMath.h</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#ifndef _GMath_
#define _GMath_
//===============================================
#include <cmath>
//===============================================
class GMath {
private:
    GMath();
    
public:
    ~GMath();
    
public:
    static GMath* Instance();
    
public:
    double add(const double& a, const double& b);
    double subtract(const double& a, const double& b);
    double multiply(const double& a, const double& b);
    double divide(const double& a, const double& b);
    double quotient(const double& a, const double& b);
    double modulo(const int& a, const int& b);
    
private:
    static GMath* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><b>src/manager/GMath.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include "GMath.h"
//===============================================
GMath* GMath::m_instance = 0;
//===============================================
GMath::GMath() {

}
//===============================================
GMath::~GMath() {

}
//===============================================
GMath* GMath::Instance() {
    if(m_instance == 0) {
        m_instance = new GMath;
    }
    
    return m_instance;
}
//===============================================
double GMath::add(const double& a, const double& b) {
    double m_data = a + b;
    return m_data;
}
//===============================================
double GMath::subtract(const double& a, const double& b) {
    double m_data = a - b;
    return m_data;
}
//===============================================
double GMath::multiply(const double& a, const double& b) {
    double m_data = a * b;
    return m_data;
}
//===============================================
double GMath::divide(const double& a, const double& b) {
    double m_data = a / b;
    return m_data;
}
//===============================================
double GMath::quotient(const double& a, const double& b) {
    double m_data = floor(divide(a, b));
    return m_data;
}
//===============================================
double GMath::modulo(const int& a, const int& b) {
    int m_data = a % b;
    return double(m_data);
}
//===============================================</xmp></pre></div><br><b>src/manager/GShow.h</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#ifndef _GShow_
#define _GShow_
//===============================================
#include <iostream>
#include <iomanip>
#include <string>
//===============================================
using namespace std;
//===============================================
class GShow {
private:
    GShow();
    
public:
    ~GShow();
    
public:
    static GShow* Instance();
    
public:
    void show(const string& data, const string& name = "");
    void show(const double& data, const string& name = "");
    
private:
    static GShow* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><b>src/manager/GShow.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include "GShow.h"
//===============================================
GShow* GShow::m_instance = 0;
//===============================================
GShow::GShow() {

}
//===============================================
GShow::~GShow() {

}
//===============================================
GShow* GShow::Instance() {
    if(m_instance == 0) {
        m_instance = new GShow;
    }
    
    return m_instance;
}
//===============================================
void GShow::show(const string& data, const string& name) {
    if(name != "") cout << name << " : ";
    cout << data << "\n";
}
//===============================================
void GShow::show(const double& data, const string& name) {
    if(name != "") cout << name << " : ";
    cout << fixed << setprecision(2) << data << "\n";
}
//===============================================</xmp></pre></div><br><b>win/GProject.pro</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">TEMPLATE = lib
TARGET = Hello
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console staticlib

include(../src/GMain.pri)</xmp></pre></div><br><b>src/GMain.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">include(manager/GManager.pri)</xmp></pre></div><br><b>win/manager/GManager.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GMath.h \
    $$PWD/GShow.h

SOURCES += \
    $$PWD/GMath.cpp \
    $$PWD/GShow.cpp</xmp></pre></div><br><b>Construction du projet :</b><br>cmd_build.bat<br><br><b>Construction manuel :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">del /q bin\*
del /q build\*
del /q Makefile*
qmake -r -spec win32-g++
mingw32-make</xmp></pre></div><br><h2 class="ftwn Title2" id="Utiliser une librairie statique en C++"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les librairies statiques avec QMake">Utiliser une librairie statique en C++</a></h2><br><b>Objectif :</b><br>Utiliser une librairie statique en C++.<br><br><b>Implémentation :</b><br>Utiliser la classe (GMath) de la librairie statique (libHello.a) pour réaliser des opérations arithmétiques sur deux nombres données (22, 7).<br>Utiliser la classe (GShow) de la librairie statique (libHello.a) pour afficher les résultats de calculs.<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_02.png" alt="img/Image_02.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>src/GMain.pri<br>win/GProject.pro<br>win/bin/<br>win/build/<br><br><b>Dossier librairie :</b><br>win/lib/<br>win/lib/Hello/include/GMath.h<br>win/lib/Hello/include/GShow.h<br>win/lib/Hello/lib/libHello.a<br>win/lib/Hello/GHello.pri<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include "GShow.h"
#include "GMath.h"
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    double m_data;
    
    GShow::Instance()->show("### Operations arithmetiques\n"); 
    
    m_data = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(m_data, "add(22, 7)");  
    
    m_data = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(m_data, "subtract(22, 7)");  
    
    m_data = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(m_data, "multiply(22, 7)"); 
    
    m_data = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(m_data, "divide(22, 7)"); 
    
    m_data = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(m_data, "quotient(22, 7)"); 
    
    m_data = GMath::Instance()->modulo(22, 7);
    GShow::Instance()->show(m_data, "modulus(22, 7)");    
    return 0;
}
//===============================================</xmp></pre></div><br><b>win/GProject.pro</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)</xmp></pre></div><br><b>src/GMain.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">include(../win/lib/Hello/GHello.pri)

SOURCES += \
    $$PWD/main.cpp</xmp></pre></div><br><b>win/lib/Hello/GHello.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">LIBS += \
    -L$$PWD/lib -lHello

INCLUDEPATH += \
    $$PWD/include

HEADERS += \
    $$PWD/include/GMath.h \
    $$PWD/include/GShow.h</xmp></pre></div><br><b>Construction du projet :</b><br>cmd_build.bat<br><br><b>Construction manuel :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">del /q bin\*
del /q build\*
del /q Makefile*
qmake -r -spec win32-g++
mingw32-make</xmp></pre></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Gérer les librairies dynamiques avec QMake"><a class="clrb" href="#Sommaire">Gérer les librairies dynamiques avec QMake</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Créer une librairie dynamique en C++">Créer une librairie dynamique en C++</a></div><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Utiliser une librairie dynamique en C++">Utiliser une librairie dynamique en C++</a></div></div><br><br><h2 class="ftwn Title2" id="Créer une librairie dynamique en C++"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les librairies dynamiques avec QMake">Créer une librairie dynamique en C++</a></h2><br><b>Objectif :</b><br>Créer une librairie dynamique en C++.<br><br><b>Implémentation :</b><br>Créer une classe (GMath) permettant de réaliser des opérations arithmétiques sur deux nombres données,  Additionner (add()), Soustraire (substract()), Multiplier (multiply()), Diviser (divide()), Déterminer le Quotient (quotient()), Déterminer le Modulo  (modulo()).<br>Créer une classe (GShow) permettant d’afficher des données dans la console (show()).<br>Regrouper ces deux classes dans une librairie dynamique (libHello.dll).<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_04.png" alt="img/Image_04.png"></div><br><b>Dossier projet :</b><br>src/GMain.pri<br>src/manager/GMath.h<br>src/manager/GMath.cpp<br>src/manager/GSow.h<br>src/manager/GShow.cpp<br>src/manager/GManager.pri<br>win/GProject.pro<br>win/bin/<br>win/build/<br><b><br>src/manager/GMath.h</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#ifndef _GMath_
#define _GMath_
//===============================================
#include <cmath>
//===============================================
#ifdef DLL_APP  
#define DLL_API __declspec(dllexport)   
#else  
#define DLL_API __declspec(dllimport)   
#endif 
//===============================================
class DLL_API GMath {
private:
    GMath();
    
public:
    ~GMath();
    
public:
    static GMath* Instance();
    
public:
    double add(const double& a, const double& b);
    double subtract(const double& a, const double& b);
    double multiply(const double& a, const double& b);
    double divide(const double& a, const double& b);
    double quotient(const double& a, const double& b);
    double modulo(const int& a, const int& b);
    
private:
    static GMath* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><b>src/manager/GMath.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include "GMath.h"
//===============================================
GMath* GMath::m_instance = 0;
//===============================================
GMath::GMath() {

}
//===============================================
GMath::~GMath() {

}
//===============================================
GMath* GMath::Instance() {
    if(m_instance == 0) {
        m_instance = new GMath;
    }
    
    return m_instance;
}
//===============================================
double GMath::add(const double& a, const double& b) {
    double m_data = a + b;
    return m_data;
}
//===============================================
double GMath::subtract(const double& a, const double& b) {
    double m_data = a - b;
    return m_data;
}
//===============================================
double GMath::multiply(const double& a, const double& b) {
    double m_data = a * b;
    return m_data;
}
//===============================================
double GMath::divide(const double& a, const double& b) {
    double m_data = a / b;
    return m_data;
}
//===============================================
double GMath::quotient(const double& a, const double& b) {
    double m_data = floor(divide(a, b));
    return m_data;
}
//===============================================
double GMath::modulo(const int& a, const int& b) {
    int m_data = a % b;
    return double(m_data);
}
//===============================================</xmp></pre></div><b><br>src/manager/GShow.h</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#ifndef _GShow_
#define _GShow_
//===============================================
#include <iostream>
#include <iomanip>
#include <string>
//===============================================
#ifdef DLL_APP  
#define DLL_API __declspec(dllexport)   
#else  
#define DLL_API __declspec(dllimport)   
#endif 
//===============================================
using namespace std;
//===============================================
class DLL_API GShow {
private:
    GShow();
    
public:
    ~GShow();
    
public:
    static GShow* Instance();
    
public:
    void show(const string& data, const string& name = "");
    void show(const double& data, const string& name = "");
    
private:
    static GShow* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><b>src/manager/GShow.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include "GShow.h"
//===============================================
GShow* GShow::m_instance = 0;
//===============================================
GShow::GShow() {

}
//===============================================
GShow::~GShow() {

}
//===============================================
GShow* GShow::Instance() {
    if(m_instance == 0) {
        m_instance = new GShow;
    }
    
    return m_instance;
}
//===============================================
void GShow::show(const string& data, const string& name) {
    if(name != "") cout << name << " : ";
    cout << data << "\n";
}
//===============================================
void GShow::show(const double& data, const string& name) {
    if(name != "") cout << name << " : ";
    cout << fixed << setprecision(2) << data << "\n";
}
//===============================================</xmp></pre></div><br><b>win/GProject.pro</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">TEMPLATE = lib
TARGET = Hello
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console
DEFINES += DLL_APP

include(../src/GMain.pri)</xmp></pre></div><br><b>src/GMain.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">include(manager/GManager.pri)</xmp></pre></div><br><b>src/manager/GManager.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GMath.h \
    $$PWD/GShow.h

SOURCES += \
    $$PWD/GMath.cpp \
    $$PWD/GShow.cpp</xmp></pre></div><br><b>Construction du projet :</b><br>cmd_build.bat<br><br><b>Construction manuel :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">del /q bin\*
del /q build\*
del /q Makefile*
qmake -r -spec win32-g++
mingw32-make</xmp></pre></div><br><h2 class="ftwn Title2" id="Utiliser une librairie dynamique en C++"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer les librairies dynamiques avec QMake">Utiliser une librairie dynamique en C++</a></h2><br><b>Objectif :</b><br>Utiliser une librairie dynamique en C++.<br><br><b>Implémentation :</b><br>Utiliser la classe (GMath) de la librairie dynamique (libHello.dll) pour réaliser des opérations arithmétiques sur deux nombres données (22, 7).<br>Utiliser la classe (GShow) de la librairie dynamique (libHello.dll) pour afficher les résultats de calculs.<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_02.png" alt="img/Image_02.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>src/GMain.pri<br>win/GProject.pro<br>win/bin/<br>win/build/<br><br><b>Dossier librairie :</b><br>win/lib/<br>win/lib/Hello/include/GMath.h<br>win/lib/Hello/include/GShow.h<br>win/lib/Hello/lib/libHello.a<br>win/lib/Hello/bin/Hello.dll<br>win/lib/Hello/GHello.pri<br><b><br>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include "GShow.h"
#include "GMath.h"
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    double m_data;
    
    GShow::Instance()->show("### Operations arithmetiques\n"); 
    
    m_data = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(m_data, "add(22, 7)");  
    
    m_data = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(m_data, "subtract(22, 7)");  
    
    m_data = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(m_data, "multiply(22, 7)"); 
    
    m_data = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(m_data, "divide(22, 7)"); 
    
    m_data = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(m_data, "quotient(22, 7)"); 
    
    m_data = GMath::Instance()->modulo(22, 7);
    GShow::Instance()->show(m_data, "modulus(22, 7)");    
    return 0;
}
//===============================================</xmp></pre></div><br><b>win/GProject.pro</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)</xmp></pre></div><br><b>src/GMain.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">include(../win/lib/Hello/GHello.pri)

SOURCES += \
    $$PWD/main.cpp</xmp></pre></div><br><b>win/lib/Hello/GHello.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">LIBS += \
    -L$$PWD/lib -lHello

INCLUDEPATH += \
    $$PWD/include

HEADERS += \
    $$PWD/include/GMath.h \
    $$PWD/include/GShow.h</xmp></pre></div><b><br>win/cmd_run.bat</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin
set PATH=lib\Hello\bin;%PATH%

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><b>Construction du projet :</b><br>cmd_build.bat<br><br><b>Construction manuel :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">del /q bin\*
del /q build\*
del /q Makefile*
qmake -r -spec win32-g++
mingw32-make</xmp></pre></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Gérer un projet complet avec QMake"><a class="clrb" href="#Sommaire">Gérer un projet complet avec QMake</a></h1><div class="txal pgCt10"><div class="dibm Summary2"><div class="pdlb"><span class="fa fa-book clrg pdra"></span><a class="hvra clrg" href="#Compiler un projet complet C++ avec QMake">Compiler un projet complet C++ avec QMake</a></div></div><br><br><h2 class="ftwn Title2" id="Compiler un projet complet C++ avec QMake"><a class="bgra dibm ftfb ftsg clra pgCt10" href="#Gérer un projet complet avec QMake">Compiler un projet complet C++ avec QMake</a></h2><br><b>Objectif :</b><br>Compiler un projet complet C++ avec QMake.<br>Utiliser un fichier entête en C++.<br>Utiliser une librairie dynamique en C++.<br>Utiliser un fichier de construction Makefile.<br><br><b>Implémentation :</b><br>Créer une classe (GProcess)  utilisant la classe (GMath) de la librairie dynamique (libHello.dll) pour réaliser des opérations arithmétiques sur deux nombres données (22, 7) et la classe (GShow) de la librairie dynamique (libHello.dll) pour afficher les résultats de calculs.<br><br><b>Résultat :</b><br> <div class="ovfa"><img src="img/Image_02.png" alt="img/Image_02.png"></div><br><b>Dossier projet :</b><br>src/main.cpp<br>src/GMain.pri<br>src/manager/GProcess.h<br>src/manager/GProcess.cpp<br>src/manager/GManager.pri<br>win/GProject.pro<br>win/bin/<br>win/build/<br><br><b>Dossier librairie :</b><br>win/lib/<br>win/lib/Hello/include/GMath.h<br>win/lib/Hello/include/GShow.h<br>win/lib/Hello/lib/libHello.a<br>win/lib/Hello/bin/Hello.dll<br>win/lib/Hello/GHello.pri<br><br><b>src/main.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include "GProcess.h"
//===============================================
int main(int argc, char** argv) {
    GProcess::Instance()->run();
    return 0;
}
//===============================================</xmp></pre></div><br><b>src/manager/GProcess.h</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">//===============================================
#ifndef _GProcess_
#define _GProcess_
//===============================================
class GProcess {
private:
    GProcess();
    
public:
    ~GProcess();
    
public:
    static GProcess* Instance();
    
public:
    void run();
    
private:
    static GProcess* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><b>src/manager/GProcess.cpp</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums lang-cpp">//===============================================
#include "GProcess.h"
#include "GShow.h"
#include "GMath.h"
//===============================================
GProcess* GProcess::m_instance = 0;
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================
GProcess* GProcess::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcess;
    }
    return m_instance;
}
//===============================================
void GProcess::run() {
    double m_data;
    
    GShow::Instance()->show("### Operations arithmetiques\n"); 
    
    m_data = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(m_data, "add(22, 7)");  
    
    m_data = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(m_data, "subtract(22, 7)");  
    
    m_data = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(m_data, "multiply(22, 7)"); 
    
    m_data = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(m_data, "divide(22, 7)"); 
    
    m_data = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(m_data, "quotient(22, 7)"); 
    
    m_data = GMath::Instance()->modulo(22, 7);
    GShow::Instance()->show(m_data, "modulus(22, 7)");    
}
//===============================================</xmp></pre></div><br><b>win/GProject.pro</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)</xmp></pre></div><br><b>src/GMain.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">include(../win/lib/Hello/GHello.pri)
include(manager/GManager.pri)

SOURCES += \
    $$PWD/main.cpp</xmp></pre></div><b><br>src/manager/GManager.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GProcess.h

SOURCES += \
    $$PWD/GProcess.cpp</xmp></pre></div><br><b>win/lib/Hello/GHello.pri</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">LIBS += \
    -L$$PWD/lib -lHello

INCLUDEPATH += \
    $$PWD/include

HEADERS += \
    $$PWD/include/GMath.h \
    $$PWD/include/GShow.h</xmp></pre></div><br><b>win/cmd_run.bat</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin
set PATH=lib\Hello\bin;%PATH%

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><b>Construction du projet :</b><br>cmd_build.bat<br><br><b>Construction manuel :</b><br><div class="Code1"><pre><xmp class="ovfa prettyprint linenums">del /q bin\*
del /q build\*
del /q Makefile*
qmake -r -spec win32-g++
mingw32-make</xmp></pre></div></div></div></div><br><div class="pgCt00"><div class="bgra"><h1 class="bgra pgCt20 txac Title1" id="Codes sources"><a class="clrb" href="#Sommaire">Codes sources</a></h1><div class="txal pgCt10"><b>ReadyDev</b> met à votre disposition, l'ensemble des codes sources abordés dans ce tutoriel.<br><br><div class="brda Code2"><div class="bgra txal pgCt00" id="FilesystemMenu">...</div><div class="txal ovfa mxha" id="FilesystemList">...</div></div><script src="/js/class/GFilesystem.js"></script><script src="/js/filesystem.js"></script></div></div></div>