<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre à compiler un projet C++ avec NMake</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orientée objet.<br><b>NMake</b> est un outil de compilation de projet <b>C++</b> fourni par <b>Visual Studio</b>.<br>Le but de ce tutoriel est de vous apprendre à compiler un projet <b>C++</b> avec <b>NMake</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">NMake est un outil de compilation de projet C++ fourni par Visual Studio.<br><br><div class="Img3 GImage"><img src="/data/img/defaults/banner_nmake.png" alt="/data/img/defaults/banner_nmake.png"></div><br>Dans ce tutoriel, nous utiliserons:<br>- NMake, comme compilateur C++.<br><br><h3 class="Title8 GTitle3">Documentation sur NMake</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://docs.microsoft.com/fr-fr/cpp/build/reference/nmake-reference?view=vs-2019">https://docs.microsoft.com/fr-fr/cpp/build/reference/nmake-reference?view=vs-2019</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler un fichier source"><a class="Link3" href="#">Compiler un fichier source</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">compiler un fichier source</span> avec NMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537307622789"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537307622789");</script></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Programme principal"><a class="Link9" href="#Compiler un fichier source">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout << "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Fichier Makefile"><a class="Link9" href="#Compiler un fichier source">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.obj
    
all: $(GOBJS)
	link /OUT:$(GTARGET) $(GOBJS)
$(GBUILD)/main.obj: $(GSRC)/main.cpp
	cl /c /EHsc $(GSRC)/main.cpp /Fo$(GBUILD)/main.obj
clean:
	del /q $(GBUILD)\*.obj $(GBIN)\*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Compiler le projet"><a class="Link9" href="#Compiler un fichier source">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\bin\Hostx86\x86
set PATH=C:\Program Files (x86)\Windows Kits\10\bin\10.0.17763.0\x86;%PATH%

set INCLUDE=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\include
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\um;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\shared;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\ucrt;%INCLUDE%

set LIB=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\lib\x86
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\um\x86;%LIB%
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\ucrt\x86;%LIB%

nmake</xmp></pre></div><br><h3 class="Title8 GTitle3">Compilation manuelle du projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">cl /c /EHsc ../src/main.cpp /Fobuild/main.obj
link /OUT:bin/GProject.exe build/main.obj</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Exécuter le projet"><a class="Link9" href="#Compiler un fichier source">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Résultat"><a class="Link9" href="#Compiler un fichier source">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Unique.png" alt="img/Fichier_Unique.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler plusieurs fichiers sources"><a class="Link3" href="#">Compiler plusieurs fichiers sources</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">compiler plusieurs fichiers sources </span>avec NMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545736257392"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545736257392");</script></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Programme principal"><a class="Link9" href="#Compiler plusieurs fichiers sources">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Fichier Makefile"><a class="Link9" href="#Compiler plusieurs fichiers sources">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
    /I../src/manager

GOBJS = \
    $(GBUILD)/main.obj \
    $(GBUILD)/GShow.obj \
    $(GBUILD)/GMath.obj
    
all: $(GOBJS)
	link /OUT:$(GTARGET) $(GOBJS)
$(GBUILD)/main.obj: $(GSRC)/main.cpp
	cl /c /EHsc $(GSRC)/main.cpp /Fo$(GBUILD)/main.obj $(GINCS)
$(GBUILD)/GShow.obj: $(GSRC)/manager/GShow.cpp
	cl /c /EHsc $(GSRC)/manager/GShow.cpp /Fo$(GBUILD)/GShow.obj $(GINCS)
$(GBUILD)/GMath.obj: $(GSRC)/manager/GMath.cpp
	cl /c /EHsc $(GSRC)/manager/GMath.cpp /Fo$(GBUILD)/GMath.obj $(GINCS)
clean:
	del /q $(GBUILD)\*.obj $(GBIN)\*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Compiler le projet"><a class="Link9" href="#Compiler plusieurs fichiers sources">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\bin\Hostx86\x86
set PATH=C:\Program Files (x86)\Windows Kits\10\bin\10.0.17763.0\x86;%PATH%

set INCLUDE=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\include
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\um;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\shared;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\ucrt;%INCLUDE%

set LIB=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\lib\x86
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\um\x86;%LIB%
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\ucrt\x86;%LIB%

nmake</xmp></pre></div><br><h3 class="Title8 GTitle3">Compilation manuelle du projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">cl /c /EHsc ../src/main.cpp /Fobuild/main.obj /I../src/manager
cl /c /EHsc ../src/manager/GShow.cpp /Fobuild/GShow.obj /I../src/manager
cl /c /EHsc ../src/manager/GMath.cpp /Fobuild/GMath.obj /I../src/manager
link /OUT:bin/GProject.exe build/main.obj  build/GShow.obj  build/GMath.obj</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Exécuter le projet"><a class="Link9" href="#Compiler plusieurs fichiers sources">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Résultat"><a class="Link9" href="#Compiler plusieurs fichiers sources">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Multiple.png" alt="img/Fichier_Multiple.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une librairie statique"><a class="Link3" href="#">Créer une librairie statique</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer une librairie statique </span>avec NMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545739575298"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545739575298");</script></div><br><h2 class="Title7 GTitle2" id="Créer une librairie statique-Gestionnaire d'opérations mathématiques"><a class="Link9" href="#Créer une librairie statique">Gestionnaire d'opérations mathématiques</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire d'opérations mathématiques (GMath.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie statique-Fichier Makefile"><a class="Link9" href="#Créer une librairie statique">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/Hello.lib

GINCS = \
    /I../src/manager

GOBJS = \
    $(GBUILD)/GShow.obj \
    $(GBUILD)/GMath.obj
    
all: $(GOBJS)
	lib /OUT:$(GTARGET) $(GOBJS)
$(GBUILD)/GShow.obj: $(GSRC)/manager/GShow.cpp
	cl /c /EHsc $(GSRC)/manager/GShow.cpp /Fo$(GBUILD)/GShow.obj $(GINCS)
$(GBUILD)/GMath.obj: $(GSRC)/manager/GMath.cpp
	cl /c /EHsc $(GSRC)/manager/GMath.cpp /Fo$(GBUILD)/GMath.obj $(GINCS)
clean:
	del /q $(GBUILD)\*.obj $(GBIN)\*.lib
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie statique-Compiler le projet"><a class="Link9" href="#Créer une librairie statique">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\bin\Hostx86\x86
set PATH=C:\Program Files (x86)\Windows Kits\10\bin\10.0.17763.0\x86;%PATH%

set INCLUDE=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\include
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\um;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\shared;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\ucrt;%INCLUDE%

set LIB=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\lib\x86
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\um\x86;%LIB%
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\ucrt\x86;%LIB%

nmake</xmp></pre></div><br><h3 class="Title8 GTitle3">Compilation manuelle du projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">cl /c /EHsc ../src/manager/GShow.cpp /Fobuild/GShow.obj /I../src/manager
cl /c /EHsc ../src/manager/GMath.cpp /Fobuild/GMath.obj /I../src/manager
lib /OUT:bin/Hello.lib build/GShow.obj  build/GMath.obj</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie statique-Résultat"><a class="Link9" href="#Créer une librairie statique">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_Statique_Creation.png" alt="img/Librairie_Statique_Creation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser une librairie statique"><a class="Link3" href="#">Utiliser une librairie statique</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">utiliser une librairie statique </span>avec NMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545764563806"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545764563806");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Programme principal"><a class="Link9" href="#Utiliser une librairie statique">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Fichier Makefile"><a class="Link9" href="#Utiliser une librairie statique">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
    -Ilib/Hello/include
    
GLIBS = \
    -Llib/Hello/lib -lHello
    
GOBJS = \
    $(GBUILD)/main.o
    
all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS) $(GLIBS)
$(GBUILD)/main.o: $(GSRC)/main.cpp
	g++ -c $(GSRC)/main.cpp -o $(GBUILD)/main.o $(GINCS)
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Compiler le projet"><a class="Link9" href="#Utiliser une librairie statique">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\bin\Hostx86\x86
set PATH=C:\Program Files (x86)\Windows Kits\10\bin\10.0.17763.0\x86;%PATH%

set INCLUDE=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\include
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\um;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\shared;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\ucrt;%INCLUDE%

set LIB=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\lib\x86
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\um\x86;%LIB%
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\ucrt\x86;%LIB%

nmake</xmp></pre></div><br><h3 class="Title8 GTitle3">Compilation manuelle du projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">cl /c /EHsc ../src/main.cpp /Fobuild/main.obj /Ilib/Hello/include
link /OUT:bin/GProject.exe build/main.obj /LIBPATH:lib/hello/lib Hello.lib</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Exécuter le projet"><a class="Link9" href="#Utiliser une librairie statique">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie statique-Résultat"><a class="Link9" href="#Utiliser une librairie statique">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_Statique_Utilisation.png" alt="img/Librairie_Statique_Utilisation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une librairie dynamique"><a class="Link3" href="#">Créer une librairie dynamique</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer une librairie dynamique </span>avec NMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545766398481"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545766398481");</script></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique-Gestionnaire d'opérations mathématiques"><a class="Link9" href="#Créer une librairie dynamique">Gestionnaire d'opérations mathématiques</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire d'opérations mathématiques (GMath.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique-Fichier Makefile"><a class="Link9" href="#Créer une librairie dynamique">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/Hello.dll

GINCS = \
    /I../src/manager
    
GOBJS = \
    $(GBUILD)/GShow.obj \
    $(GBUILD)/GMath.obj
    
all: $(GOBJS)
	link /DLL /OUT:$(GTARGET) $(GOBJS)
$(GBUILD)/GShow.obj: $(GSRC)/manager/GShow.cpp
	cl /c /EHsc /DDLL_APP $(GSRC)/manager/GShow.cpp /Fo$(GBUILD)/GShow.obj $(GINCS)
$(GBUILD)/GMath.obj: $(GSRC)/manager/GMath.cpp
	cl /c /EHsc /DDLL_APP $(GSRC)/manager/GMath.cpp /Fo$(GBUILD)/GMath.obj $(GINCS)
clean:
	del /q $(GBUILD)\*.obj $(GBIN)\*.dll $(GBIN)\*.lib $(GBIN)\*.exp</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique-Compiler le projet"><a class="Link9" href="#Créer une librairie dynamique">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\bin\Hostx86\x86
set PATH=C:\Program Files (x86)\Windows Kits\10\bin\10.0.17763.0\x86;%PATH%

set INCLUDE=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\include
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\um;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\shared;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\ucrt;%INCLUDE%

set LIB=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\lib\x86
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\um\x86;%LIB%
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\ucrt\x86;%LIB%

nmake
</xmp></pre></div><br><h3 class="Title8 GTitle3">Compilation manuelle du projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">cl /c /EHsc /DDLL_APP ../src/manager/GShow.cpp /Fobuild/GShow.obj /I../src/manager
cl /c /EHsc /DDLL_APP ../src/manager/GMath.cpp /Fobuild/GMath.obj /I../src/manager
link /DLL /OUT:bin/Hello.dll build/GShow.obj  build/GMath.obj</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique-Résultat"><a class="Link9" href="#Créer une librairie dynamique">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_Dynamique_Creation.png" alt="img/Librairie_Dynamique_Creation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser une librairie dynamique"><a class="Link3" href="#">Utiliser une librairie dynamique</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">utiliser une librairie dynamique </span>avec NMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545767834105"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545767834105");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Programme principal"><a class="Link9" href="#Utiliser une librairie dynamique">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Fichier Makefile"><a class="Link9" href="#Utiliser une librairie dynamique">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="Makefile">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
    -Ilib/Hello/include

GLIBS = \
    -Llib/Hello/bin -lHello

GOBJS = \
    $(GBUILD)/main.o
    
all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS) $(GLIBS)
$(GBUILD)/main.o: $(GSRC)/main.cpp
	g++ -c $(GSRC)/main.cpp -o $(GBUILD)/main.o $(GINCS)
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Compiler le projet"><a class="Link9" href="#Utiliser une librairie dynamique">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

mingw32-make</xmp></pre></div><br><h3 class="Title8 GTitle3">Compilation manuelle du projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -c ../src/main.cpp -o build/main.o -Ilib/Hello/include
g++ -o bin/GProject.exe build/main.o -Llib/Hello/bin -lHello</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Exécuter le projet"><a class="Link9" href="#Utiliser une librairie dynamique">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin
set PATH=lib\Hello\bin;%PATH%

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique-Résultat"><a class="Link9" href="#Utiliser une librairie dynamique">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_Dynamique_Utilisation.png" alt="img/Librairie_Dynamique_Utilisation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gérer un programme complet"><a class="Link3" href="#">Gérer un programme complet</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">gérer un programme complet </span>avec NMake.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1545770229223"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1545770229223");</script></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Programme principal"><a class="Link9" href="#Gérer un programme complet">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Fichier Makefile"><a class="Link9" href="#Gérer un programme complet">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
    /I../src/manager \
    /Ilib/Hello/include

GLIBS = \
    /LIBPATH:lib/Hello/lib Hello.lib
        
GOBJS = \
    $(GBUILD)/main.obj \
    $(GBUILD)/GProcess.obj
    
all: $(GOBJS)
	link /OUT:$(GTARGET) $** $(GLIBS)
{$(GSRC)}.cpp{$(GBUILD)}.obj:
	cl /c /EHsc $< /Fo$@ $(GINCS)
{$(GSRC)/manager}.cpp{$(GBUILD)}.obj:
	cl /c /EHsc $< /Fo$@ $(GINCS)
clean:
	del /q $(GBUILD)\*.obj $(GBIN)\*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Compiler le projet"><a class="Link9" href="#Gérer un programme complet">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\bin\Hostx86\x86
set PATH=C:\Program Files (x86)\Windows Kits\10\bin\10.0.17763.0\x86;%PATH%

set INCLUDE=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\include
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\um;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\shared;%INCLUDE%
set INCLUDE=C:\Program Files (x86)\Windows Kits\10\Include\10.0.17763.0\ucrt;%INCLUDE%

set LIB=C:\Program Files (x86)\Microsoft Visual Studio\2017\Community\VC\Tools\MSVC\14.16.27023\lib\x86
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\um\x86;%LIB%
set LIB=C:\Program Files (x86)\Windows Kits\10\Lib\10.0.17763.0\ucrt\x86;%LIB%

nmake
</xmp></pre></div><br><h3 class="Title8 GTitle3">Compilation manuelle du projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">cl /c /EHsc ../src\main.cpp /Fobuild/main.obj /I../src/manager  /Ilib/Hello/include
cl /c /EHsc ../src/manager\GProcess.cpp /Fobuild/GProcess.obj /I../src/manager  /Ilib/Hello/include
link /OUT:bin/GProject.exe build/main.obj build/GProcess.obj /LIBPATH:lib/Hello/lib Hello.lib</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Exécuter le projet"><a class="Link9" href="#Gérer un programme complet">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=lib\Hello\bin

echo.
bin\GProject.exe
echo.
pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un programme complet-Résultat"><a class="Link9" href="#Gérer un programme complet">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Programme_Complet.png" alt="img/Programme_Complet.png"></div></div></div></div></div><br>