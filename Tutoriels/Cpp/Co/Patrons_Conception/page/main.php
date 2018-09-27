<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre les patrons de conception avec le C</div></a></div></div><div class="Body2 Orange">Le <b>C</b> est un langage de programmation structurelle.<br>Les <b>Patrons de Conception</b> sont des modèles de conception basés sur la programmation orientée objet.<br>Le but de ce tutoriel est de vous apprendre les <b>Patrons de Conception</b> avec le <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre les <span class="GColor1" style="color:lime;">Patrons de Conception</span> avec le <span class="GColor1" style="color:lime;">C</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" href="http://mingw.org/">http://mingw.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un&nbsp; module"><a class="Link3" href="#">Créer un&nbsp; module</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer un module </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Un module permet de gérer une fonctionnalité dans un fichier séparé.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537992173377"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537992173377");</script></div><br><h2 class="Title7 GTitle2" id="Créer un&nbsp; module-Programme principal"><a class="Link9" href="#Créer un&nbsp; module">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GModule.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Module Constructeur\n\n");
    GModule* lObj = GModule_Constructor();
    GModule* lObj2 = GModule_Constructor2("Bonjour tout le monde");
    GModule_Print(lObj);
    GModule_Print(lObj2);

    printf("\n### Module Ecriture\n\n");
    GModule_Set_Data(lObj, "Bonjour Gerard");
    GModule_Print(lObj);
    
    printf("\n### Module Lecture\n\n");
    printf("Lecture: %s\n", GModule_Get_Data(lObj2));
    
    printf("\n### Module Destructeur\n\n");
    GModule_Destructor(lObj);
    GModule_Destructor(lObj2);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un&nbsp; module-Module de gestion"><a class="Link9" href="#Créer un&nbsp; module">Module de gestion</a></h2><br><h3 class="Title8 GTitle3">Module de gestion (GModule.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GModule_
#define _GModule_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GModule GModule;
//===============================================
struct GModule {
    char m_data[50];
};
//===============================================
GModule* GModule_Constructor();
GModule* GModule_Constructor2(const char* data);
void GModule_Destructor(GModule* obj);
void GModule_Print(GModule* obj);
void GModule_Set_Data(GModule* obj, const char* data);
char* GModule_Get_Data(GModule* obj);
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Module de gestion (GModule.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GModule.h"
//===============================================
GModule* GModule_Constructor() {
    GModule* lObj = (GModule*)malloc(sizeof(GModule));
    sprintf(lObj->m_data, "%s", "_NONE_");
    return lObj; 
}
//===============================================
GModule* GModule_Constructor2(const char* data) {
    GModule* lObj = (GModule*)malloc(sizeof(GModule));
    sprintf(lObj->m_data, "%s", data);
    return lObj; 
}
//===============================================
void GModule_Destructor(GModule* obj) {
    free(obj);
    obj = 0;
}
//===============================================
void GModule_Print(GModule* obj) {
    char lData[50];
    sprintf(lData, "Donnee: %s\n", obj->m_data);
    printf(lData);
}
//===============================================
void GModule_Set_Data(GModule* obj, const char* data) {
    sprintf(obj->m_data, "%s", data);
}
//===============================================
char* GModule_Get_Data(GModule* obj) {
    return obj->m_data;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un&nbsp; module-Résultat"><a class="Link9" href="#Créer un&nbsp; module">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Module.png" alt="img/Module.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une classe"><a class="Link3" href="#">Créer une classe</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer une classe</span> avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Une classe permet de regrouper les propriétés et les méthodes d'un module dans une structure.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537978887151"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537978887151");</script></div><br><h2 class="Title7 GTitle2" id="Créer une classe-Programme principal"><a class="Link9" href="#Créer une classe">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GClass.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Classe Constructeur\n\n");
    GClass* lObj = GClass_Constructor();
    GClass* lObj2 = GClass_Constructor2("Bonjour tout le monde");
    lObj->Print(lObj);
    lObj2->Print(lObj2);

    printf("\n### Classe Ecriture\n\n");
    lObj->Set_Data(lObj, "Bonjour Gerard");
    lObj->Print(lObj);
    
    printf("\n### Classe Lecture\n\n");
    printf("Lecture: %s\n", lObj2->Get_Data(lObj2));
    
    printf("\n### Classe Destructeur\n\n");
    lObj->Destructor(lObj);
    lObj2->Destructor(lObj2);
    return 0;
}
//===============================================
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une classe-Classe de gestion"><a class="Link9" href="#Créer une classe">Classe de gestion</a></h2><br><h3 class="Title8 GTitle3">Classe de gestion (GClass.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GClass_
#define _GClass_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GClass GClass;
//===============================================
struct GClass {
    void (*Destructor)(GClass* obj);
    void (*Print)(GClass* obj);
    void (*Set_Data)(GClass* obj, const char* data);
    char* (*Get_Data)(GClass* obj);
    
    char m_data[50];
};
//===============================================
GClass* GClass_Constructor();
GClass* GClass_Constructor2(const char* data);
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Classe de gestion (GClass.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GClass.h"
//===============================================
void GClass_Destructor(GClass* obj);
void GClass_Init(GClass* obj);
void GClass_Destructor(GClass* obj);
void GClass_Print(GClass* obj);
void GClass_Set_Data(GClass* obj, const char* data);
char* GClass_Get_Data(GClass* obj);
//===============================================
GClass* GClass_Constructor() {
    GClass* lObj = (GClass*)malloc(sizeof(GClass));
    sprintf(lObj->m_data, "%s", "_NONE_");
    GClass_Init(lObj);
    return lObj; 
}
//===============================================
GClass* GClass_Constructor2(const char* data) {
    GClass* lObj = (GClass*)malloc(sizeof(GClass));
    sprintf(lObj->m_data, "%s", data);
    GClass_Init(lObj);
    return lObj; 
}
//===============================================
void GClass_Init(GClass* obj) {
    obj->Destructor = GClass_Destructor;
    obj->Print = GClass_Print;
    obj->Set_Data = GClass_Set_Data;
    obj->Get_Data = GClass_Get_Data;
}
//===============================================
void GClass_Destructor(GClass* obj) {
    free(obj);
    obj = 0;
}
//===============================================
void GClass_Print(GClass* obj) {
    char lData[50];
    sprintf(lData, "Donnee: %s\n", obj->m_data);
    printf(lData);
}
//===============================================
void GClass_Set_Data(GClass* obj, const char* data) {
    sprintf(obj->m_data, "%s", data);
}
//===============================================
char* GClass_Get_Data(GClass* obj) {
    return obj->m_data;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une classe-Résultat"><a class="Link9" href="#Créer une classe">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Classe.png" alt="img/Classe.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un patron singleton"><a class="Link3" href="#">Créer un patron singleton</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer un patron singleton</span> avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le patron singleton permet de restreindre l'instanciation d'une classe à un seul objet.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1538070549176"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1538070549176");</script></div><br><h2 class="Title7 GTitle2" id="Créer un patron singleton-Programme principal"><a class="Link9" href="#Créer un patron singleton">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GSingleton.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Singleton Affichage\n\n");
    GSingleton()->Print();

    printf("\n### Singleton Ecriture\n\n");
    GSingleton()->Set_Data("Bonjour tout le monde");
    GSingleton()->Print();
    
    printf("\n### Singleton Lecture\n\n");
    printf("Lecture: %s\n", GSingleton()->Get_Data());
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron singleton-Singleton de gestion"><a class="Link9" href="#Créer un patron singleton">Singleton de gestion</a></h2><br><h3 class="Title8 GTitle3">Singleton de gestion (Gsingleton.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GSingleton_
#define _GSingleton_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GSingletonO GSingletonO;
//===============================================
struct GSingletonO {
    void (*Print)();
    void (*Set_Data)(const char* data);
    char* (*Get_Data)();

    char m_data[50];
};
//===============================================
GSingletonO* GSingleton();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Singleton de gestion (GSingleton.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GSingleton.h"
//===============================================
static GSingleton* m_GSingleton = 0;
//===============================================
GSingleton* GSingleton_Constructor();
void GSingleton_Init(GSingleton* obj);
void GSingleton_Print();
void GSingleton_Set_Data(const char* data);
char* GSingleton_Get_Data();
//===============================================
GSingleton* GSingleton_Constructor() {
    GSingleton* lObj = (GSingleton*)malloc(sizeof(GSingleton));
    sprintf(lObj->m_data, "%s", "_NONE_");
    GSingleton_Init(lObj);
    return lObj; 
}
//===============================================
void GSingleton_Init(GSingleton* obj) {
    obj->Print = GSingleton_Print;
    obj->Set_Data = GSingleton_Set_Data;
    obj->Get_Data = GSingleton_Get_Data;
}
//===============================================
GSingleton* GSingleton_Instance() {
    if(m_GSingleton == 0) {
        m_GSingleton = GSingleton_Constructor();
    }
    return m_GSingleton;
}
//===============================================
void GSingleton_Print() {
    char lData[50];
    sprintf(lData, "Donnee: %s\n", m_GSingleton->m_data);
    printf(lData);
}
//===============================================
void GSingleton_Set_Data(const char* data) {
    sprintf(m_GSingleton->m_data, "%s", data);
}
//===============================================
char* GSingleton_Get_Data() {
    return m_GSingleton->m_data;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron singleton-Résultat"><a class="Link9" href="#Créer un patron singleton">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Singleton.png" alt="img/Singleton.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un patron stratégie"><a class="Link3" href="#">Créer un patron stratégie</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer un patron stratégie</span> avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le patron stratégie permet de sélectionner dynamiquement des algorithmes.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1538072632919"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1538072632919");</script></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie-Programme principal"><a class="Link9" href="#Créer un patron stratégie">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GStrategy.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Strategie Defaut\n\n");
    GStrategy()->Run();
    
    printf("\n### Strategie Python\n\n");
    GConfig()->Set_Data("STRATEGY", "PYTHON");
    GStrategy()->Run();
    
    printf("\n### Strategie JAVA\n\n");
    GConfig()->Set_Data("STRATEGY", "JAVA");
    GStrategy()->Run();
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie-Gestionnaire de stratégie"><a class="Link9" href="#Créer un patron stratégie">Gestionnaire de stratégie</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire de stratégie (GStrategy.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GStrategy_
#define _GStrategy_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GStrategyO GStrategyO;
//===============================================
struct GStrategyO {
    void (*Strategy)();
    void (*Run)();
};
//===============================================
GStrategyO* GStrategy();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire de stratégie (GStrategy.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GStrategy.h"
#include "GStrategyPython.h"
#include "GStrategyJava.h"
#include "GString.h"
#include "GConfig.h"
//===============================================
static GStrategyO* m_GStrategyO = 0;
//===============================================
GStrategyO* GStrategy_Constructor();
void GStrategy_Init(GStrategyO* obj);
void GStrategy_Strategy();
void GStrategy_Run();
//===============================================
GStrategyO* GStrategy_Constructor() {
    GStrategyO* lObj = (GStrategyO*)malloc(sizeof(GStrategyO));
    GStrategy_Init(lObj);
    return lObj;
}
//===============================================
void GStrategy_Init(GStrategyO* obj) {
    obj->Strategy = GStrategy_Strategy;
    obj->Run = GStrategy_Run;
}
//===============================================
GStrategyO* GStrategy() {
    if(m_GStrategyO == 0) {
        m_GStrategyO = GStrategy_Constructor();
    }
    m_GStrategyO->Strategy();
    return m_GStrategyO;
}
//===============================================
void GStrategy_Strategy() {
    char* lStrategy = GConfig()->Get_Data("STRATEGY");
    if(GString()->Is_Equal(lStrategy, "PYTHON")) {GStrategyPython()->Strategy(m_GStrategyO);}
    else if(GString()->Is_Equal(lStrategy, "JAVA")) {GStrategyJava()->Strategy(m_GStrategyO);}
    else {GStrategyPython()->Strategy(m_GStrategyO);}
}
//===============================================
void GStrategy_Run() {
    m_GStrategyO->Run();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie-Gestionnaire de stratégie Python"><a class="Link9" href="#Créer un patron stratégie">Gestionnaire de stratégie Python</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire de stratégie Python (GStrategyPython.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GStrategyPython_
#define _GStrategyPython_
//===============================================
#include "GStrategy.h"
//===============================================
typedef struct GStrategyPythonO GStrategyPythonO;
//===============================================
struct GStrategyPythonO {
    void (*Strategy)(GStrategyO* obj);
};
//===============================================
GStrategyPythonO* GStrategyPython();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire de stratégie Python (GStrategyPython.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GStrategyPython.h"
//===============================================
static GStrategyPythonO* m_GStrategyPythonO = 0;
//===============================================
GStrategyPythonO* GStrategyPython_Constructor();
void GStrategyPython_Init(GStrategyPythonO* obj);
void GStrategyPython_Strategy(GStrategyO* obj);
void GStrategyPython_Run();
//===============================================
GStrategyPythonO* GStrategyPython_Constructor() {
    GStrategyPythonO* lObj = (GStrategyPythonO*)malloc(sizeof(GStrategyPythonO));
    GStrategyPython_Init(lObj);
    return lObj;
}
//===============================================
void GStrategyPython_Init(GStrategyPythonO* obj) {
    obj->Strategy = GStrategyPython_Strategy;
}
//===============================================
GStrategyPythonO* GStrategyPython() {
    if(m_GStrategyPythonO == 0) {
        m_GStrategyPythonO = GStrategyPython_Constructor();
    }
    return m_GStrategyPythonO;
}
//===============================================
void GStrategyPython_Strategy(GStrategyO* obj) {
    obj->Run = GStrategyPython_Run;
}
//===============================================
void GStrategyPython_Run() {
    printf("Strategie: Execution de la strategie PYTHON\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie-Gestionnaire de stratégie Java"><a class="Link9" href="#Créer un patron stratégie">Gestionnaire de stratégie Java</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire de stratégie Java (GStrategyJava.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GStrategyJava_
#define _GStrategyJava_
//===============================================
#include "GStrategy.h"
//===============================================
typedef struct GStrategyJavaO GStrategyJavaO;
//===============================================
struct GStrategyJavaO {
    void (*Strategy)(GStrategyO* obj);
};
//===============================================
GStrategyJavaO* GStrategyJava();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire de stratégie Java (GStrategyJava.c)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GStrategyJava.h"
//===============================================
static GStrategyJavaO* m_GStrategyJavaO = 0;
//===============================================
GStrategyJavaO* GStrategyJava_Constructor();
void GStrategyJava_Interface(GStrategyJavaO* obj);
void GStrategyJava_Strategy(GStrategyO* obj);
void GStrategyJava_Run();
//===============================================
GStrategyJavaO* GStrategyJava_Constructor() {
    GStrategyJavaO* lObj = (GStrategyJavaO*)malloc(sizeof(GStrategyJavaO));
    GStrategyJava_Interface(lObj);
    return lObj;
}
//===============================================
void GStrategyJava_Interface(GStrategyJavaO* obj) {
    obj->Strategy = GStrategyJava_Strategy;
}
//===============================================
GStrategyJavaO* GStrategyJava() {
    if(m_GStrategyJavaO == 0) {
        m_GStrategyJavaO = GStrategyJava_Constructor();
    }
    return m_GStrategyJavaO;
}
//===============================================
void GStrategyJava_Strategy(GStrategyO* obj) {
    obj->Run = GStrategyJava_Run;
}
//===============================================
void GStrategyJava_Run() {
    printf("Strategie: Execution de la strategie JAVA\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie-Résultat"><a class="Link9" href="#Créer un patron stratégie">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Strategie.png" alt="img/Strategie.png"></div></div></div></div></div><br>