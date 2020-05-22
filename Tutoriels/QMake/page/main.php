<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre à compiler un projet C++ avec QMake</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orientée objet.<br><b>QMake</b> est un outil de compilation de projet <b>C++</b> fourni par <b>Qt Creator</b>.<br>Le but de ce tutoriel est de vous apprendre à compiler un projet <b>C++</b> avec <b>QMake</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">QMake est un outil de compilation de projet C++ fourni par Qt Creator.<br><br><div class="Img3 GImage"><img src="img/banner_qmake.png" alt="img/banner_qmake.png"></div><br>Dans ce tutoriel, nous utiliserons:<br>- QMake, comme compilateur C++.<br><br><h3 class="Title8 GTitle3">Documentation sur QMake</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://doc.qt.io/qt-5/qmake-tutorial.html">https://doc.qt.io/qt-5/qmake-tutorial.html</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler un fichier source"><a class="Link3" href="#">Compiler un fichier source</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">compiler un fichier source</span> avec QMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537307622789"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537307622789");</script></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Programme principal"><a class="Link9" href="#Compiler un fichier source">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout << "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Fichier Projet"><a class="Link9" href="#Compiler un fichier source">Fichier Projet</a></h2><br><h3 class="Title8 GTitle3">Fichier Projet (GProject.pro)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (src/GMain.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">SOURCES += \
    $$PWD/main.cpp</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Générer le projet"><a class="Link9" href="#Compiler un fichier source">Générer le projet</a></h2><br><h3 class="Title8 GTitle3">Générer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\5.8\mingw53_32\bin

qmake -r -spec win32-g++</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Compiler le projet"><a class="Link9" href="#Compiler un fichier source">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

mingw32-make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Exécuter le projet"><a class="Link9" href="#Compiler un fichier source">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Résultat"><a class="Link9" href="#Compiler un fichier source">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Unique.png" alt="img/Fichier_Unique.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler plusieurs fichiers sources"><a class="Link3" href="#">Compiler plusieurs fichiers sources</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">compiler plusieurs fichiers sources </span>avec QMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545736257392"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545736257392");</script></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Programme principal"><a class="Link9" href="#Compiler plusieurs fichiers sources">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GShow.h"
#include "GMath.h"
//===============================================
int main(int argc, char** argv) {
    double lData;
    
    GShow::Instance()->show("### Operations arithmetiques\n"); 
    
    lData = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(lData, "add(22, 7)");  
    
    lData = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(lData, "subtract(22, 7)");  
    
    lData = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(lData, "multiply(22, 7)"); 
    
    lData = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(lData, "divide(22, 7)"); 
    
    lData = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(lData, "quotient(22, 7)"); 
    
    lData = GMath::Instance()->modulo(22, 7);
    GShow::Instance()->show(lData, "modulo(22, 7)");    
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Programme secondaire"><a class="Link9" href="#Compiler plusieurs fichiers sources">Programme secondaire</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire d'opérations mathématiques</h3><br><span class="GColor1" style="color:lime;">Gestionnaire d'opérations mathématiques (GMath.h)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><span class="GColor1" style="color:lime;">Gestionnaire d'opérations mathématiques (GMath.cpp)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
    double lData = a + b;
    return lData;
}
//===============================================
double GMath::subtract(const double& a, const double& b) {
    double lData = a - b;
    return lData;
}
//===============================================
double GMath::multiply(const double& a, const double& b) {
    double lData = a * b;
    return lData;
}
//===============================================
double GMath::divide(const double& a, const double& b) {
    double lData = a / b;
    return lData;
}
//===============================================
double GMath::quotient(const double& a, const double& b) {
    double lData = floor(divide(a, b));
    return lData;
}
//===============================================
double GMath::modulo(const int& a, const int& b) {
    int lData = a % b;
    return double(lData);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire d'affichage</h3><br><span class="GColor1" style="color:lime;">Gestionnaire d'affichage (GShow.h)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><span class="GColor1" style="color:lime;">Gestionnaire d'affichage (GShow.cpp)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Fichier Projet"><a class="Link9" href="#Compiler plusieurs fichiers sources">Fichier Projet</a></h2><br><h3 class="Title8 GTitle3">Fichier Projet (GProject.pro)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (src/GMain.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">include(manager/GManager.pri)

SOURCES += \
    $$PWD/main.cpp</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (src/manager/GManager.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GMath.h \
    $$PWD/GShow.h

SOURCES += \
    $$PWD/GMath.cpp \
    $$PWD/GShow.cpp</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Générer le projet"><a class="Link9" href="#Compiler plusieurs fichiers sources">Générer le projet</a></h2><br><h3 class="Title8 GTitle3">Générer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\5.8\mingw53_32\bin

qmake -r -spec win32-g++</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Compiler le projet"><a class="Link9" href="#Compiler plusieurs fichiers sources">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

mingw32-make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Exécuter le projet"><a class="Link9" href="#Compiler plusieurs fichiers sources">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Résultat"><a class="Link9" href="#Compiler plusieurs fichiers sources">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Multiple.png" alt="img/Fichier_Multiple.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une librairie statique"><a class="Link3" href="#">Créer une librairie statique</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer une librairie statique </span>avec QMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545739575298"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545739575298");</script></div><br><h2 class="Title7 GTitle2" id="Créer une librairie statique-Gestionnaire d'opérations mathématiques"><a class="Link9" href="#Créer une librairie statique">Gestionnaire d'opérations mathématiques</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire d'opérations mathématiques (GMath.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire d'opérations mathématiques (GMath.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
    double lData = a + b;
    return lData;
}
//===============================================
double GMath::subtract(const double& a, const double& b) {
    double lData = a - b;
    return lData;
}
//===============================================
double GMath::multiply(const double& a, const double& b) {
    double lData = a * b;
    return lData;
}
//===============================================
double GMath::divide(const double& a, const double& b) {
    double lData = a / b;
    return lData;
}
//===============================================
double GMath::quotient(const double& a, const double& b) {
    double lData = floor(divide(a, b));
    return lData;
}
//===============================================
double GMath::modulo(const int& a, const int& b) {
    int lData = a % b;
    return double(lData);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie statique-Gestionnaire d'affichage"><a class="Link9" href="#Créer une librairie statique">Gestionnaire d'affichage</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire d'affichage (GShow.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire d'affichage (GShow.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie statique-Fichier Projet"><a class="Link9" href="#Créer une librairie statique">Fichier Projet</a></h2><br><h3 class="Title8 GTitle3">Fichier Projet (GProject.pro)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">TEMPLATE = lib
TARGET = Hello
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console staticlib

include(../src/GMain.pri)</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (src/GMain.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">include(manager/GManager.pri)</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (src/manager/GManager.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GMath.h \
    $$PWD/GShow.h

SOURCES += \
    $$PWD/GMath.cpp \
    $$PWD/GShow.cpp</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie statique-Générer le projet"><a class="Link9" href="#Créer une librairie statique">Générer le projet</a></h2><br><h3 class="Title8 GTitle3">Générer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\5.8\mingw53_32\bin

qmake -r -spec win32-g++
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie statique-Compiler le projet"><a class="Link9" href="#Créer une librairie statique">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

mingw32-make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie statique-Résultat"><a class="Link9" href="#Créer une librairie statique">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_Statique_Creation.png" alt="img/Librairie_Statique_Creation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser une librairie statique"><a class="Link3" href="#">Utiliser une librairie statique</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">utiliser une librairie statique </span>avec QMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545764563806"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545764563806");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Programme principal"><a class="Link9" href="#Utiliser une librairie statique">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GShow.h"
#include "GMath.h"
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    double lData;
    
    GShow::Instance()->show("### Operations arithmetiques\n"); 
    
    lData = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(lData, "add(22, 7)");  
    
    lData = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(lData, "subtract(22, 7)");  
    
    lData = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(lData, "multiply(22, 7)"); 
    
    lData = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(lData, "divide(22, 7)"); 
    
    lData = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(lData, "quotient(22, 7)"); 
    
    lData = GMath::Instance()->modulo(22, 7);
    GShow::Instance()->show(lData, "modulus(22, 7)");    
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Librairie statique"><a class="Link9" href="#Utiliser une librairie statique">Librairie statique</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire d'opérations mathématiques</h3><br><span class="GColor1" style="color:lime;">Gestionnaire d'opérations mathématiques (GMath.h)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire d'affichage</h3><br><span class="GColor1" style="color:lime;">Gestionnaire d'affichage (GShow.h)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Fichier Projet"><a class="Link9" href="#Utiliser une librairie statique">Fichier Projet</a></h2><br><h3 class="Title8 GTitle3">Fichier Projet (GProject.pro)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (src/GMain.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">include(../win/lib/Hello/GHello.pri)

SOURCES += \
    $$PWD/main.cpp</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (lib/Hello/GHello.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">LIBS += \
    -L$$PWD/lib -lHello

INCLUDEPATH += \
    $$PWD/include

HEADERS += \
    $$PWD/include/GMath.h \
    $$PWD/include/GShow.h</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Générer le projet"><a class="Link9" href="#Utiliser une librairie statique">Générer le projet</a></h2><br><h3 class="Title8 GTitle3">Générer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\5.8\mingw53_32\bin

qmake -r -spec win32-g++</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Compiler le projet"><a class="Link9" href="#Utiliser une librairie statique">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

mingw32-make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Exécuter le projet"><a class="Link9" href="#Utiliser une librairie statique">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Résultat"><a class="Link9" href="#Utiliser une librairie statique">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_Statique_Utilisation.png" alt="img/Librairie_Statique_Utilisation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une librairie dynamique"><a class="Link3" href="#">Créer une librairie dynamique</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer une librairie dynamique </span>avec QMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545766398481"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545766398481");</script></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique-Gestionnaire d'opérations mathématiques"><a class="Link9" href="#Créer une librairie dynamique">Gestionnaire d'opérations mathématiques</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire d'opérations mathématiques (GMath.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire d'opérations mathématiques (GMath.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
    double lData = a + b;
    return lData;
}
//===============================================
double GMath::subtract(const double& a, const double& b) {
    double lData = a - b;
    return lData;
}
//===============================================
double GMath::multiply(const double& a, const double& b) {
    double lData = a * b;
    return lData;
}
//===============================================
double GMath::divide(const double& a, const double& b) {
    double lData = a / b;
    return lData;
}
//===============================================
double GMath::quotient(const double& a, const double& b) {
    double lData = floor(divide(a, b));
    return lData;
}
//===============================================
double GMath::modulo(const int& a, const int& b) {
    int lData = a % b;
    return double(lData);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique-Gestionnaire d'affichage"><a class="Link9" href="#Créer une librairie dynamique">Gestionnaire d'affichage</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire d'affichage (GShow.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire d'affichage (GShow.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique-Fichier Projet"><a class="Link9" href="#Créer une librairie dynamique">Fichier Projet</a></h2><br><h3 class="Title8 GTitle3">Fichier Projet (GProject.pro)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">TEMPLATE = lib
TARGET = Hello
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console
DEFINES += DLL_APP

include(../src/GMain.pri)</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (src/GMain.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">include(manager/GManager.pri)</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (src/manager/GManager.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GMath.h \
    $$PWD/GShow.h

SOURCES += \
    $$PWD/GMath.cpp \
    $$PWD/GShow.cpp</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique-Générer le projet"><a class="Link9" href="#Créer une librairie dynamique">Générer le projet</a></h2><br><h3 class="Title8 GTitle3">Générer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\5.8\mingw53_32\bin

qmake -r -spec win32-g++</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique-Compiler le projet"><a class="Link9" href="#Créer une librairie dynamique">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

mingw32-make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique-Résultat"><a class="Link9" href="#Créer une librairie dynamique">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_Dynamique_Creation.png" alt="img/Librairie_Dynamique_Creation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser une librairie dynamique"><a class="Link3" href="#">Utiliser une librairie dynamique</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">utiliser une librairie dynamique </span>avec QMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545767834105"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545767834105");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Programme principal"><a class="Link9" href="#Utiliser une librairie dynamique">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GShow.h"
#include "GMath.h"
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    double lData;
    
    GShow::Instance()->show("### Operations arithmetiques\n"); 
    
    lData = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(lData, "add(22, 7)");  
    
    lData = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(lData, "subtract(22, 7)");  
    
    lData = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(lData, "multiply(22, 7)"); 
    
    lData = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(lData, "divide(22, 7)"); 
    
    lData = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(lData, "quotient(22, 7)"); 
    
    lData = GMath::Instance()->modulo(22, 7);
    GShow::Instance()->show(lData, "modulus(22, 7)");    
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Librairie dynamique"><a class="Link9" href="#Utiliser une librairie dynamique">Librairie dynamique</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire d'opérations mathématiques</h3><br><span class="GColor1" style="color:lime;">Gestionnaire d'opérations mathématiques (GMath.h)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire d'affichage</h3><br><span class="GColor1" style="color:lime;">Gestionnaire d'affichage (GShow.h)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Fichier Projet"><a class="Link9" href="#Utiliser une librairie dynamique">Fichier Projet</a></h2><br><h3 class="Title8 GTitle3">Fichier Projet (GProject.pro)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (src/GMain.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">include(../win/lib/Hello/GHello.pri)

SOURCES += \
    $$PWD/main.cpp</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (lib/Hello/GHello.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">LIBS += \
    -L$$PWD/lib -lHello

INCLUDEPATH += \
    $$PWD/include

HEADERS += \
    $$PWD/include/GMath.h \
    $$PWD/include/GShow.h</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Générer le projet"><a class="Link9" href="#Utiliser une librairie dynamique">Générer le projet</a></h2><br><h3 class="Title8 GTitle3">Générer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\5.8\mingw53_32\bin

qmake -r -spec win32-g++</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Compiler le projet"><a class="Link9" href="#Utiliser une librairie dynamique">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

mingw32-make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Exécuter le projet"><a class="Link9" href="#Utiliser une librairie dynamique">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin
set PATH=lib\Hello\bin;%PATH%

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Résultat"><a class="Link9" href="#Utiliser une librairie dynamique">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_Dynamique_Utilisation.png" alt="img/Librairie_Dynamique_Utilisation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gérer un programme complet"><a class="Link3" href="#">Gérer un programme complet</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">gérer un programme complet </span>avec QMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545770229223"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545770229223");</script></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Programme principal"><a class="Link9" href="#Gérer un programme complet">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GProcess.h"
//===============================================
int main(int argc, char** argv) {
    GProcess::Instance()->run();
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Programme secondaire"><a class="Link9" href="#Gérer un programme complet">Programme secondaire</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire de processus</h3><br><span class="GColor1" style="color:lime;">Gestionnaire de processus (GProcess.h)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><span class="GColor1" style="color:lime;">Gestionnaire de processus (GProcess.cpp)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
    double lData;
    
    GShow::Instance()->show("### Operations arithmetiques\n"); 
    
    lData = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(lData, "add(22, 7)");  
    
    lData = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(lData, "subtract(22, 7)");  
    
    lData = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(lData, "multiply(22, 7)"); 
    
    lData = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(lData, "divide(22, 7)"); 
    
    lData = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(lData, "quotient(22, 7)"); 
    
    lData = GMath::Instance()->modulo(22, 7);
    GShow::Instance()->show(lData, "modulus(22, 7)");    
}
//===============================================
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Librairie dynamique"><a class="Link9" href="#Gérer un programme complet">Librairie dynamique</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire d'opérations mathématiques</h3><br><span class="GColor1" style="color:lime;">Gestionnaire d'opérations mathématiques (GMath.h)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire d'affichage</h3><br><span class="GColor1" style="color:lime;">Gestionnaire d'affichage (GShow.h)</span><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GShow_
#define _GShow_
//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Fichier Projet"><a class="Link9" href="#Gérer un programme complet">Fichier Projet</a></h2><br><h3 class="Title8 GTitle3">Fichier Projet (GProject.pro)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (src/GMain.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">include(manager/GManager.pri)

SOURCES += \
    $$PWD/main.cpp</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (src/manager/GManager.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">include(../../win/lib/Hello/GHello.pri)

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GProcess.h

SOURCES += \
    $$PWD/GProcess.cpp</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Projet (lib/Hello/GHello.pri)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">LIBS += \
    -L$$PWD/lib -lHello

INCLUDEPATH += \
    $$PWD/include

HEADERS += \
    $$PWD/include/GMath.h \
    $$PWD/include/GShow.h</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Compiler le projet"><a class="Link9" href="#Gérer un programme complet">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin

mingw32-make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Exécuter le projet"><a class="Link9" href="#Gérer un programme complet">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Qt\Qt5.8.0\Tools\mingw530_32\bin
set PATH=lib\Hello\bin;%PATH%

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Résultat"><a class="Link9" href="#Gérer un programme complet">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Programme_Complet.png" alt="img/Programme_Complet.png"></div></div></div></div></div><br>