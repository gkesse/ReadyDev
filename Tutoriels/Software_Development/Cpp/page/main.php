<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C++<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C++</b> est un langage de programmation compilé permettant la programmation sous de multiples paradigmes (comme la programmation procédurale, orientée objet ou générique). Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/b_cpp.png" alt="/Tutoriels/Software_Development/Cpp/img/b_cpp.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616558777155"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616558777155");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - MSYS2"><a class="Link9" href="#Installation">1.1 - MSYS2</a></h2><br>MSYS2 est un outil de développement de logiciels Linux sous Windows.<br><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Installer MSYS2"><a class="Link9" href="#Installation">1.1.1 - Installer MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.1 - Télécharger MSYS2"><a class="Link9" href="#Installation">1.1.1.1 - Télécharger MSYS2</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://repo.msys2.org/distrib/x86_64/msys2-x86_64-20210228.exe">https://repo.msys2.org/distrib/x86_64/msys2-x86_64-20210228.exe</a><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.2 - Démarrer l'installation"><a class="Link9" href="#Installation">1.1.1.2 - Démarrer l'installation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">msys2-x86_64-20210228.exe
Suivant
Dossier d'installation -> C:\msys64
Suivant
Raccourci du menu Démarrer -> MSYS2 64bit
Suivant
Suivant
Terminer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Démarrer MSYS2"><a class="Link9" href="#Installation">1.1.2 - Démarrer MSYS2</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
MSYS2</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.3 - Installer les packages"><a class="Link9" href="#Installation">1.1.3 - Installer les packages</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">pacman -Syu
pacman -S --needed --noconfirm make
pacman -S --needed --noconfirm gcc</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616682650861"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616682650861");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous MSYS2"><a class="Link9" href="#Tests">1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Éditer le programme"><a class="Link9" href="#Tests">1.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Compiler le projet"><a class="Link9" href="#Tests">1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">g++ -std=gnu++11 -c main.cpp -o main.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Éditer les liens du projet"><a class="Link9" href="#Tests">1.1.3 - Éditer les liens du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">g++ -o rdcpp.exe main.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.4 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.4 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">./rdcpp.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron singleton"><a class="Link3" href="#">Patron singleton</a></h1><div class="Body3"><br>Créer un patron  singleton en C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618051220037"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618051220037");</script></div><br><h2 class="Title7 GTitle2" id="Patron singleton-Introduction"><a class="Link9" href="#Patron singleton">Introduction</a></h2><br>Le patron singleton est une architecture logicielle utilisée en programmation orientée objet et permettant de créer et d'utiliser un objet unique d'une classe pour coordonnées les opérations dans un système.<br><br><h2 class="Title7 GTitle2" id="Patron singleton-Programme principal"><a class="Link9" href="#Patron singleton">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on recupere le singleton 
// et on execute la methode run()
GProcess::Instance()-&gt;run(argc, argv);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron singleton-Structure du patron singleton"><a class="Link9" href="#Patron singleton">Structure du patron singleton</a></h2><br><h2 class="Title7 GTitle2" id="Patron singleton-1 - Fichier header"><a class="Link9" href="#Patron singleton">1 - Fichier header</a></h2><br><h3 class="Title8 GTitle3">GProcess.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GProcess_
#define _GProcess_
//===============================================
#include "GInclude.h"
//===============================================
class GProcess {
private:
    // on declare un constructeur prive sur le singleton
    // pour verouiller la construction du singleton depuis l'exterieur
    GProcess();
    
public:
    ~GProcess();
    // on declare une methode statique pour lire le singleton
    static GProcess* Instance();
    // on declare une methode publique run()
    void run(int argc, char** argv);

private:
    // on declare un pointeur statique sur le singleton
    static GProcess* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron singleton-2 - Fichier source"><a class="Link9" href="#Patron singleton">2 - Fichier source</a></h2><br><h3 class="Title8 GTitle3">GProcess.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GProcess.h"
//===============================================
// on initialise le singleton
GProcess* GProcess::m_instance = 0;
//===============================================
GProcess::GProcess() {
    
}
//===============================================
GProcess::~GProcess() {
    
}
//===============================================
// on definit le singleton
//===============================================
GProcess* GProcess::Instance() {
    if(m_instance == 0) {
        // on cree le singleton s'il est nul
        m_instance = new GProcess;
    }
    return m_instance;
}
//===============================================
// on definit la methode publique run()
//===============================================
void GProcess::run(int argc, char** argv) {
    // code source de la methode run()
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Manager de données"><a class="Link3" href="#">Manager de données</a></h1><div class="Body3"><br>Créer un manager de données en C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618051896671"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618051896671");</script></div><br><h2 class="Title7 GTitle2" id="Manager de données-Introduction"><a class="Link9" href="#Manager de données">Introduction</a></h2><br>Le manager de données que nous présentons ici est une interface logicielle permettant de gérer les échanges de données entre le différents modules de notre application.<br><br><h2 class="Title7 GTitle2" id="Manager de données-Programme principal"><a class="Link9" href="#Manager de données">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GTitleBar.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on recupere le manager des donnees application 
sGApp* lApp = GManager::Instance()-&gt;getData()-&gt;app;
// on utilise le nom de l'application (app_name)
lAppName-&gt;setText(lApp-&gt;app_name);</xmp></pre></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on recupere le manager des donnees application 
sGApp* lApp = GManager::Instance()-&gt;getData()-&gt;app;
// on utilise les dimensions de la fenetre 
// de l'application (win_width, win_height)
resize(lApp-&gt;win_width, lApp-&gt;win_height);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Manager de données-Structure du manager de données"><a class="Link9" href="#Manager de données">Structure du manager de données</a></h2><br><h2 class="Title7 GTitle2" id="Manager de données-1 - Fichier header"><a class="Link9" href="#Manager de données">1 - Fichier header</a></h2><br><h3 class="Title8 GTitle3">GManager.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GManager_
#define _GManager_
//===============================================
#include "GInclude.h"
//===============================================
// on declare la structure du manager de donnees
typedef struct _sGManager sGManager;
// on declare la structure du manager des donnees application
typedef struct _sGApp sGApp;
//===============================================
class GManager {    
private:
    GManager();
    
public:
    ~GManager();
    static GManager* Instance();
    // on declare la fonction de lecture du manager de donnees
    sGManager* getData();

private:
    static GManager* m_instance;
    // on declare le pointeur sur le manager de donnees
    sGManager* mgr;
};
//===============================================
// on definit la structure du manager de donnees
//===============================================
struct _sGManager {
    // on declare un pointeur sur le manager des donnees application
    sGApp* app;
};
//===============================================
// on definit la structure du manager des donnees application
//===============================================
struct _sGApp {
    // app
    std::string app_name; // nom de l'application
    // window
    int win_width;        // largeur de la fenetre
    int win_height;       // hauteur de la fenetre
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Manager de données-2 - Fichier source"><a class="Link9" href="#Manager de données">2 - Fichier source</a></h2><br><h3 class="Title8 GTitle3">GManager.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GManager.h"
//===============================================
GManager* GManager::m_instance = 0;
//=============================================== 
GManager::GManager(QObject* parent) {
    // creation du manager de donnees
    mgr = new sGManager;
    // creation des donnees liees a l'application
    mgr-&gt;app = new sGApp;
    mgr-&gt;app-&gt;app_name = "ReadyApp";
    mgr-&gt;app-&gt;win_width = 640;
    mgr-&gt;app-&gt;win_height = 480;
}
//===============================================
GManager::~GManager() {
    
}
//===============================================
GManager* GManager::Instance(QObject* parent) {
    if(m_instance == 0) {
        m_instance = new GManager(parent);
    }
    return m_instance;
}
//===============================================
// fonction de lecture du manager de donnees 
//===============================================
sGManager* GManager::getData() {
    return mgr;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618044541580"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618044541580");</script></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Introduction"><a class="Link9" href="#Système d'administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme principal"><a class="Link9" href="#Système d'administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">GProcessUi::Instance()-&gt;run(argc, argv);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Système d'administration"><a class="Link9" href="#Système d'administration">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run(int argc, char** argv) {
    G_STATE = "S_INIT";
    while(1) {
        if(G_STATE == "S_INIT") run_INIT(argc, argv);
        else if(G_STATE == "S_METHOD") run_METHOD(argc, argv);
        else if(G_STATE == "S_CHOICE") run_CHOICE(argc, argv);
        //
        else if(G_STATE == "S_SQLITE") run_SQLITE(argc, argv);
        else if(G_STATE == "S_OPENCV") run_OPENCV(argc, argv);
        //
        else if(G_STATE == "S_SAVE") run_SAVE(argc, argv);
        else if(G_STATE == "S_LOAD") run_LOAD(argc, argv);
        else break;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme d'initialisation"><a class="Link9" href="#Système d'administration">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_INIT(int argc, char** argv) {
    printf("\n");
    printf("%s\n", "CPP_ADMIN !!!");
    printf("\t%-2s : %s\n", "-q", "quitter l'application");
    G_STATE = "S_LOAD";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de chargement des données"><a class="Link9" href="#Système d'administration">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_LOAD(int argc, char** argv) {
    GConfig::Instance()-&gt;loadData("G_ADMIN_ID");
    G_STATE = "S_METHOD";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme des méthodes"><a class="Link9" href="#Système d'administration">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_METHOD(int argc, char** argv) {
    printf("\n");
    printf("%s\n", "CPP_ADMIN :");
    printf("\t%-2s : %s\n", "1", "S_SQLITE");
    printf("\t%-2s : %s\n", "2", "S_OPENCV");
    printf("\n");
    G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du choix d'une méthode"><a class="Link9" href="#Système d'administration">Programme du choix d'une méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_CHOICE(int argc, char** argv) {
    std::string lLast = GConfig::Instance()-&gt;getData("G_ADMIN_ID");
    printf("CPP_ADMIN (%s) ? : ", lLast.c_str());
    std::string lAnswer; std::getline(std::cin, lAnswer);
    if(lAnswer == "") lAnswer = lLast;
    if(lAnswer == "-q") G_STATE = "S_END";
    //
    else if(lAnswer == "1") {G_STATE = "S_SQLITE"; GConfig::Instance()-&gt;setData("G_ADMIN_ID", lAnswer.c_str());} 
    else if(lAnswer == "2") {G_STATE = "S_OPENCV"; GConfig::Instance()-&gt;setData("G_ADMIN_ID", lAnswer.c_str());}
    //
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du module SQLite"><a class="Link9" href="#Système d'administration">Programme du module SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_SQLITE(int argc, char** argv) {
    GSQLiteUi::Instance()-&gt;run(argc, argv);
    G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du module OpenCV"><a class="Link9" href="#Système d'administration">Programme du module OpenCV</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_OPENCV(int argc, char** argv) {
    GOpenCVUi::Instance()-&gt;run(argc, argv);
    G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de sauvegarde des données"><a class="Link9" href="#Système d'administration">Programme de sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_SAVE(int argc, char** argv) {
    GConfig::Instance()-&gt;saveData("G_ADMIN_ID");
    G_STATE = "S_END";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat des opérations"><a class="Link9" href="#Système d'administration">Résultat des opérations</a></h2><br><h2 class="Title7 GTitle2" id="Système d'administration-1 - Menu principal"><a class="Link9" href="#Système d'administration">1 - Menu principal</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_cpp_admin_system.png" alt="/Tutoriels/Software_Development/Cpp/img/i_cpp_admin_system.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-2 - Menu du module SQLite"><a class="Link9" href="#Système d'administration">2 - Menu du module SQLite</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_cpp_admin_system_02.png" alt="/Tutoriels/Software_Development/Cpp/img/i_cpp_admin_system_02.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-3 - Affichage des tables SQLite"><a class="Link9" href="#Système d'administration">3 - Affichage des tables SQLite</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_cpp_admin_system_03.png" alt="/Tutoriels/Software_Development/Cpp/img/i_cpp_admin_system_03.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface Homme-Machine avec Qt"><a class="Link3" href="#">Interface Homme-Machine avec Qt</a></h1><div class="Body3"><br>Qt est une bibliothèque de création d'interface homme-machine.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617838385077"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617838385077");</script></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1 - Installation"><a class="Link9" href="#Interface Homme-Machine avec Qt">1 - Installation</a></h2><br>Installer l'environnement Qt pour C++.<br><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1.1 - Installation sous Windows"><a class="Link9" href="#Interface Homme-Machine avec Qt">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1.1.1 - Installation sous MSYS2"><a class="Link9" href="#Interface Homme-Machine avec Qt">1.1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1.1.1.1 - Installer Qt"><a class="Link9" href="#Interface Homme-Machine avec Qt">1.1.1.1 - Installer Qt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-qt5
pacman -S --needed --noconfirm mingw-w64-i686-qt-creator
pacman -S --needed --noconfirm mingw-w64-i686-gdb
pacman -S --needed --noconfirm mingw-w64-i686-cmake
pacman -S --needed --noconfirm mingw-w64-i686-clang</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2 - Tests"><a class="Link9" href="#Interface Homme-Machine avec Qt">2 - Tests</a></h2><br>Créer un projet Qt en C++.<br><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1 - Test sous Windows"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1.1 - Test sous MSYS2"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1.1.1 - Éditer le programme"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
//===============================================
int main(int argc, char** argv) {
    QApplication lApp(argc, argv);
    
    QWidget* lWindow = new QWidget;
    
    QLabel* lLabel = new QLabel;
    lLabel-&gt;setText("Bonjour tout le monde");
    lLabel-&gt;setAlignment(Qt::AlignCenter);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lLabel);
    
    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;setWindowTitle("ReadyApp");
    
    lWindow-&gt;show();
    return lApp.exec();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1.1.2 - Éditer le fichier projet"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1.1.2 - Éditer le fichier projet</a></h2><br><h3 class="Title8 GTitle3">GProject.pro</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="prolog">TEMPLATE = app
TARGET = $$(GPROJECT_EXE)
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += console release gnu++11
QT += widgets

QMAKE_CXXFLAGS +=\
    -Wno-unused-parameter \
    -Wno-deprecated-declarations \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1.1.3 - Compiler le projet"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1.1.3 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">qmake
make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1.1.4 - Exécuter le projet"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1.1.4 - Exécuter le projet</a></h2><br>./bin/rdcpp.exe<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_test.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_test.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3 - Modules"><a class="Link9" href="#Interface Homme-Machine avec Qt">3 - Modules</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.1 - QDockWidget"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.1 - QDockWidget</a></h2><br>QDockWidget est un containeur de widgets qui peut être placé autour d'un widget central dans un QMainWidget.<br><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.1.1 - Création d'un QDockWidget"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.1.1 - Création d'un QDockWidget</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_qdockwidget.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_qdockwidget.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.1.1.1 - Création du QDockWidget Clients"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.1.1.1 - Création du QDockWidget Clients</a></h2><br><h3 class="Title8 GTitle3">GMainWindow.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on crée le qdockwidget (clients)
QDockWidget* lDockWidget = new QDockWidget(tr("Clients"), lWorkspace);
// on définit les positions du qdockwidget (gauche, droite)
lDockWidget-&gt;setAllowedAreas(Qt::LeftDockWidgetArea | Qt::RightDockWidgetArea);
// on crée le contenu du qdockwidget
QListWidget* lListWidget = new QListWidget;
lListWidget-&gt;addItems(QStringList()
&lt;&lt; "Gerard KESSE, Sogetek, 75 Paris, France"
&lt;&lt; "Jane Doe, Memorabilia, 23 Watersedge, Beaton"
&lt;&lt; "Tammy Shea, Tiblanka, 38 Sea Views, Carlton"
&lt;&lt; "Tim Sheen, Caraba Gifts, 48 Ocean Way, Deal"
&lt;&lt; "Sol Harvey, Chicos Coffee, 53 New Springs, Eccleston"
&lt;&lt; "Sally Hobart, Tiroli Tea, 67 Long River, Fedula");
lListWidget-&gt;setAlternatingRowColors(true);
lListWidget-&gt;setCursor(Qt::PointingHandCursor);
// on initialise le contenu du qdockwidget
lDockWidget-&gt;setWidget(lListWidget);
// on ajoute le qdockwidget dans le qmainwindow
lWorkspace-&gt;addDockWidget(Qt::RightDockWidgetArea, lDockWidget);
// on initialise l'action de déclenchement du qdockwidget dans le qmenu
lSettingMenu-&gt;addAction(lDockWidget-&gt;toggleViewAction());</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.1.1.2 - Création du QDockWidget Messages"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.1.1.2 - Création du QDockWidget Messages</a></h2><br><h3 class="Title8 GTitle3">GMainWindow.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on crée le qdockwidget (messages)
lDockWidget = new QDockWidget(tr("Messages"), lWorkspace);
// on définit les positions du qdockwidget (gauche, droite)
lDockWidget-&gt;setAllowedAreas(Qt::LeftDockWidgetArea | Qt::RightDockWidgetArea);
// on crée le contenu du qdockwidget
lListWidget = new QListWidget;
lListWidget-&gt;addItems(QStringList()
&lt;&lt; "Merci pour votre paiement que nous avons reçu aujourd'hui."
&lt;&lt; "Votre commande a été expédiée et devrait être avec vous"
"dans les 28 jours."
&lt;&lt; "Nous avons expédié les articles qui étaient en stock. Le"
"le reste de votre commande sera expédié une fois tous les"
"les articles restants sont arrivés à notre entrepôt. Non"
"des frais d'expédition supplémentaires seront facturés."
&lt;&lt; "Vous avez effectué un petit trop-payé (moins de 5 $) que nous"
"conservera votre compte pour vous, ou reviendra à votre demande."
&lt;&lt; "Vous avez effectué un petit sous-paiement (moins de 1 $), mais nous l'avons"
"a quand même envoyé votre commande. Nous ajouterons ce sous-paiement à"
"votre prochaine facture."
&lt;&lt; "Malheureusement, vous n’avez pas envoyé suffisamment d’argent. Veuillez l’envoyer"
"un $ supplémentaire. Votre commande sera expédiée dès que"
"le montant complet a été reçu."
&lt;&lt; "Vous avez effectué un trop-payé (plus de 5 $). Souhaitez-vous"
"acheter plus d'articles ou doit-on vous rendre l'excédent?");     lDockWidget-&gt;setWidget(lListWidget);
lListWidget-&gt;setAlternatingRowColors(true);
lListWidget-&gt;setCursor(Qt::PointingHandCursor);
// on initialise le contenu du qdockwidget
lDockWidget-&gt;setWidget(lListWidget);
// on ajoute le qdockwidget dans le qmainwindow
lWorkspace-&gt;addDockWidget(Qt::RightDockWidgetArea, lDockWidget);
// on initialise l'action de déclenchement du qdockwidget dans le qmenu
lSettingMenu-&gt;addAction(lDockWidget-&gt;toggleViewAction());</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.1.2 - Résutat des opérations"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.1.2 - Résutat des opérations</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.1.2.1 - Déplacement d'un QDockWidget"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.1.2.1 - Déplacement d'un QDockWidget</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_qdockwidget_02.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_qdockwidget_02.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.1.2.2 - Disposition gauche-droite"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.1.2.2 - Disposition gauche-droite</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_qdockwidget_03.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_qdockwidget_03.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.1.2.3 - Disposition en onglet"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.1.2.3 - Disposition en onglet</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.1.2.3.1 - Disposition en onglet clients"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.1.2.3.1 - Disposition en onglet clients</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_qdockwidget_04.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_qdockwidget_04.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.1.2.3.2 - Disposition en onglet messages"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.1.2.3.2 - Disposition en onglet messages</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_qdockwidget_05.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_qdockwidget_05.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.2 - QTextEdit"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.2 - QTextEdit</a></h2><br>QTextEdit est un widget d'édition de texte.<br><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.2.1 - Disposition de textes dans un QTextEdit"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.2.1 - Disposition de textes dans un QTextEdit</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.2.1.1 - Disposition de textes"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.2.1.1 - Disposition de textes</a></h2><br><h3 class="Title8 GTitle3">GMainWindows.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on cree un qtextedit
QTextEdit* lTextEdit = new QTextEdit;
lTextEdit-&gt;setObjectName("workspace");
lWorkspace-&gt;setCentralWidget(lTextEdit);

// on recupere le curseur du qtextedit
QTextCursor lTextCursor(lTextEdit-&gt;textCursor());
// on initialise la position du curseur du qtextedit
lTextCursor.movePosition(QTextCursor::Start);
// on recupere le pointeur de position du curseur du qtextedit
QTextFrame* lTextFrame = lTextCursor.currentFrame();

// on cree un objet de formatage texte pour table (droite)   
QTextTableFormat lTextTableFormatRight;
lTextTableFormatRight.setBorder(0);
lTextTableFormatRight.setCellPadding(0);
lTextTableFormatRight.setAlignment(Qt::AlignRight);

// on cree un objet de formatage texte (par defaut)  
QTextCharFormat lTextCharFormat;

// on cree un objet de formatage texte (gras)  
QTextCharFormat lTextCharFormatBold;
lTextCharFormatBold.setFontWeight(QFont::Bold);
    
// on insere des textes dans le qtextedit
lTextCursor.insertText("Gerard KESSE", lTextCharFormatBold);
lTextCursor.insertBlock();
lTextCursor.insertText("25 Rue du Général Leclerc", lTextCharFormat);
lTextCursor.insertBlock();
lTextCursor.insertText("67000 Strasbourg", lTextCharFormat);

// on insere une table (1 ligne, 1 colonne) dans le qtextedit
lTextCursor.insertTable(1, 1, lTextTableFormatRight);
// on insere des textes dans le qtextedit
lTextCursor.insertText(QDate::currentDate().toString("dd MMMM yyyy"), lTextCharFormat);

// on initialise la position du curseur dans le qtextedit
lTextCursor.setPosition(lTextFrame-&gt;lastPosition());
// on ecrit des textes dans qtextedit
lTextCursor.insertText("Monsieur le Directeur,", lTextCharFormat);

// on insere des textes dans qtextedit
for(int i = 0; i &lt; 2; ++i) {lTextCursor.insertBlock();}
lTextCursor.insertText("Je vous transmets ci-joint ma feuille de temps du mois d'avril 2021.", lTextCharFormat);
for(int i = 0; i &lt; 2; ++i) {lTextCursor.insertBlock();}

// on insere une table (1 ligne, 1 colonne) dans le qtextedit
lTextCursor.insertTable(1, 1, lTextTableFormatRight);
// on insere des textes dans le qtextedit
lTextCursor.insertText("Cordialement,", lTextCharFormat);
lTextCursor.insertBlock();
lTextCursor.insertText("Gérard KESSE", lTextCharFormat);
lTextCursor.insertBlock();
lTextCursor.insertText("Architecte logiciel C/C++/Qt", lTextCharFormat);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.2.1.2 - Résultat de la disposition"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.2.1.2 - Résultat de la disposition</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_qtextedit_qtextcursor.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_qtextedit_qtextcursor.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.2.2 - Impression du contenu d'un QTextEdit"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.2.2 - Impression du contenu d'un QTextEdit</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.2.2.1 - Impression du contenu"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.2.2.1 - Impression du contenu</a></h2><br><h3 class="Title8 GTitle3">GMainWindow.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on recupere le document du qtextedit
QTextDocument* lTextDocument = m_textEdit-&gt;document();
// on declare un qprinter
QPrinter lPrinter;
// on initialise la boite de dialogue du qprinter 
QPrintDialog lPrintDialog(&lPrinter, this);
// on ouvre la boite de dialogue du qprinter 
if (lPrintDialog.exec() != QDialog::Accepted) {return;}
// on demarre l'impression du contenu du qtextedit 
lTextDocument-&gt;print(&lPrinter);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.2.2.2 - Résultat de l'impression"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.2.2.2 - Résultat de l'impression</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.2.2.2.1 - Démarrage de l'impression"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.2.2.2.1 - Démarrage de l'impression</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Imprimer
Général
Sélectionnez une imprimante -&gt; Microsoft Print to PDF
Imprimer
Adresse -&gt; ReadyTest\printer
Nom du fichier -&gt; QTextEdit.pdf
Enregistrer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-3.2.2.2.2 - Document de l'impression"><a class="Link9" href="#Interface Homme-Machine avec Qt">3.2.2.2.2 - Document de l'impression</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_qtextedit_qprinter.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_qtextedit_qprinter.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-Liens"><a class="Link9" href="#Interface Homme-Machine avec Qt">Liens</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://doc.qt.io/qt-5/stylesheet-examples.html">https://doc.qt.io/qt-5/stylesheet-examples.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://doc.qt.io/qt-5/classes.html">https://doc.qt.io/qt-5/classes.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.flaticon.com">https://www.flaticon.com</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/encharm/Font-Awesome-SVG-PNG">https://github.com/encharm/Font-Awesome-SVG-PNG</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Vision par Ordinateur avec OpenCV"><a class="Link3" href="#">Vision par Ordinateur avec OpenCV</a></h1><div class="Body3"><br>OpenCV est une bibliothèque de vision par ordinateur.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617840709282"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617840709282");</script></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1 - Installation"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1 - Installation</a></h2><br>Installer l'environnement OpenCV pour C++.<br><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1.1 - Installation sous Windows"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1.1.1 - Installation sous MSYS2"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1.1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1.1.1.1 - Installer OpenCV"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1.1.1.1 - Installer OpenCV</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-opencv</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2 - Tests"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2 - Tests</a></h2><br>Créer un projet OpenCV en C++.<br><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2.1 - Test sous Windows"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2.1.1 - Test sous MSYS2"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2.1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2.1.1.1 - Éditer le programme"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2.1.1.1 - Éditer le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;opencv2/opencv.hpp&gt;
//===============================================
int main(int argc, char** argv) {
    cv::Mat lImg = cv::imread("image.png");
    cv::namedWindow("ReadyApp");
    cv::imshow("ReadyApp", lImg);
    cv::waitKey(0);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2.1.1.2 - Compiler le projet"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2.1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -std=gnu++11  -c ./main.cpp -o ./main.o \
-I/mingw32/include/opencv4</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -std=gnu++11 -o ./rdcpp.exe ./main.o \
-L/mingw32/lib \
-lopencv_gapi -lopencv_stitching -lopencv_alphamat -lopencv_aruco -lopencv_bgsegm \
-lopencv_ccalib -lopencv_dnn_objdetect -lopencv_dnn_superres -lopencv_dpm -lopencv_face \
-lopencv_fuzzy -lopencv_hdf -lopencv_hfs -lopencv_img_hash -lopencv_intensity_transform \
-lopencv_line_descriptor -lopencv_mcc -lopencv_ovis -lopencv_quality -lopencv_rapid \
-lopencv_reg -lopencv_rgbd -lopencv_saliency -lopencv_sfm -lopencv_stereo \
-lopencv_structured_light -lopencv_phase_unwrapping -lopencv_superres -lopencv_optflow \
-lopencv_surface_matching -lopencv_tracking -lopencv_highgui -lopencv_datasets -lopencv_text \
-lopencv_plot -lopencv_videostab -lopencv_videoio -lopencv_xfeatures2d -lopencv_shape \
-lopencv_ml -lopencv_ximgproc -lopencv_video -lopencv_dnn -lopencv_xobjdetect \
-lopencv_objdetect -lopencv_calib3d -lopencv_imgcodecs -lopencv_features2d -lopencv_flann \
-lopencv_xphoto -lopencv_photo -lopencv_imgproc -lopencv_core</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2.1.1.3 - Exécuter le projet"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2.1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcpp.exe</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_opencv_test.png" alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_test.png"></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-3 - Opérations sur les images"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">3 - Opérations sur les images</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-3.1 - Affichage d'une image"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">3.1 - Affichage d'une image</a></h2><br><h3 class="Title8 GTitle3">GOpenCVPc.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on charge l'image
cv::Mat lImg = cv::imread(lFilename, -1);
// on cree la fenetre d'affichage
cv::namedWindow(lApp-&gt;app_name, cv::WINDOW_AUTOSIZE);
// on affiche l'image
cv::imshow(lApp-&gt;app_name, lImg );
// on attend l'appui d'une touche
cv::waitKey(0);
// on ferme toutes les fenetres
cv::destroyAllWindows();</xmp><br></pre><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_opencv_image_load.png" alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_image_load.png"></div><pre class="Code2"><br></pre></div><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-4 - Opérations sur les vidéos"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">4 - Opérations sur les vidéos</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-4.1 - Lecture d'une vidéo"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">4.1 - Lecture d'une vidéo</a></h2><br><h3 class="Title8 GTitle3">GOpenCVPc.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on cree la fenetre d'affichage
cv::namedWindow(lApp-&gt;app_name, cv::WINDOW_AUTOSIZE);
// on cree l'objet capture video
cv::VideoCapture lCap;
// on ouvre la video
lCap.open(lFilename);
// on cree la matrice d'image
cv::Mat lImg;

while(1) {
    // on lire l'image video
    lCap &gt;&gt; lImg;
    if(lImg.empty()) {break;}
    // on affiche l'image video
    cv::imshow(lApp-&gt;app_name, lImg);
    // on marque un delai d'attente
    char lKey = cv::waitKey(33);
    if(lKey != -1 ) {break;}
}</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_opencv_video_load.png" alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_video_load.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Calcul scientifique avec GSL"><a class="Link3" href="#">Calcul scientifique avec GSL</a></h1><div class="Body3"><br>GSL est une bibliothèque de calculs scientifiques.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617832634274"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617832634274");</script></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-1 - Installation"><a class="Link9" href="#Calcul scientifique avec GSL">1 - Installation</a></h2><br>Installer l'environnement GSL pour C++.<br><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-1.1 - Installation sous Windows"><a class="Link9" href="#Calcul scientifique avec GSL">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-1.1.1 - Installation sous MSYS2"><a class="Link9" href="#Calcul scientifique avec GSL">1.1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-1.1.1.1 - Installer GSL"><a class="Link9" href="#Calcul scientifique avec GSL">1.1.1.1 - Installer GSL</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-gsl</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2 - Tests"><a class="Link9" href="#Calcul scientifique avec GSL">2 - Tests</a></h2><br>Créer un projet GSL en C++.<br><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2.1 - Test sous Windows"><a class="Link9" href="#Calcul scientifique avec GSL">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2.1.1 - Test sous MSYS2"><a class="Link9" href="#Calcul scientifique avec GSL">2.1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2.1.1.1 - Éditer le programme"><a class="Link9" href="#Calcul scientifique avec GSL">2.1.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;gsl/gsl_sf_bessel.h&gt;
//===============================================
int main(int argc, char** argv) {
    double x = 5.0;
    double y = gsl_sf_bessel_J0(x);
    printf ("J0(%g) = %.18e\n", x, y);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2.1.1.2 - Compiler le programme"><a class="Link9" href="#Calcul scientifique avec GSL">2.1.1.2 - Compiler le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -std=gnu++11 -c main.cpp -o main.o -I/mingw32/include
g++ -o rdcpp.exe main.o -lgsl -lgslcblas -lm</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2.1.1.3 - Exécuter le programme"><a class="Link9" href="#Calcul scientifique avec GSL">2.1.1.3 - Exécuter le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcpp.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">J0(5) = -1.775967713143382920e-01</xmp></pre></div><br></div></div></div></div><br>