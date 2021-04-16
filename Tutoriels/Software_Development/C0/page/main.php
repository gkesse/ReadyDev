<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C</b> est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/b_c.png" alt="/Tutoriels/Software_Development/C0/img/b_c.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616843526757"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616843526757");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous MSYS2"><a class="Link9" href="#Installation">1.1 - Installation sous MSYS2</a></h2><br>MSYS2 est un outil de développement de logiciels Linux sous Windows.<br><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Installer MSYS2"><a class="Link9" href="#Installation">1.1.1 - Installer MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.1 - Télécharger MSYS2"><a class="Link9" href="#Installation">1.1.1.1 - Télécharger MSYS2</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://repo.msys2.org/distrib/x86_64/">https://repo.msys2.org/distrib/x86_64/</a><br><br><b>msys2-x86_64-20210228.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.2 - Démarrer l'installation"><a class="Link9" href="#Installation">1.1.1.2 - Démarrer l'installation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">msys2-x86_64-20210228.exe
Suivant
Dossier d'installation -&gt; C:\msys64
Suivant
Raccourci du menu Démarrer -&gt; MSYS2 64bit
Suivant
Suivant
Terminer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Démarrer MSYS2"><a class="Link9" href="#Installation">1.1.2 - Démarrer MSYS2</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Windows
MSYS2</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.3 - Installer les packages"><a class="Link9" href="#Installation">1.1.3 - Installer les packages</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -Syu
pacman -S --needed --noconfirm make
pacman -S --needed --noconfirm gcc</xmp><br></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616852257743"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616852257743");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous MSYS2"><a class="Link9" href="#Tests">1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Éditer le programme"><a class="Link9" href="#Tests">1.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    printf("Bonjour tout le monde\n");
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Compiler le projet"><a class="Link9" href="#Tests">1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -std=gnu11 -c ./main.c -o ./main.o </xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Éditer les liens du projet"><a class="Link9" href="#Tests">1.1.3 - Éditer les liens du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -o ./rdc.exe ./main.o </xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.4 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.4 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdc.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616855562692"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616855562692");</script></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Introduction"><a class="Link9" href="#Système d'administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités d'une application.<br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme principal"><a class="Link9" href="#Système d'administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on appelle la méthode d'entrée
// du système d'administration run()
GProcessUi()-&gt;Run(argc, argv);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Système d'administration"><a class="Link9" href="#Système d'administration">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on definit un système d'administration base sur
// le modele d'une machine a etats finis
static void GProcessUi_Run(int argc, char** argv) {
    // on positionne l'etat initial
    m_GProcessUiO-&gt;G_STATE = "S_INIT";
    // on rentre dans la boucle de controle
    while(1) {
        // on verifie l'etat puis on execute la methode correspondante
        // et dans chaque methode on fait evoluer l'etat de la machine
        if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_INIT")) {GProcessUi_Run_INIT(argc, argv);}
        else if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_METHOD")) {GProcessUi_Run_METHOD(argc, argv);}
        else if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_CHOICE")) {GProcessUi_Run_CHOICE(argc, argv);}
        //
        else if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_SQLITE")) {GProcessUi_Run_SQLITE(argc, argv);}
        else if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_OPENCV")) {GProcessUi_Run_OPENCV(argc, argv);}
        //
        else if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_SAVE")) {GProcessUi_Run_SAVE(argc, argv);}
        else if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_LOAD")) {GProcessUi_Run_LOAD(argc, argv);}
        else break;
    }
}</xmp></pre></div><br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme d'initialisation"><a class="Link9" href="#Système d'administration">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static void GProcessUi_Run_INIT(int argc, char** argv) {
    // on affiche quelques informations de base
    printf("\n");
    printf("C_ADMIN !!!\n");
    printf("\t%-2s : %s\n", "-q", "quitter l'application");
    // on passe au chargement des donnees
    m_GProcessUiO-&gt;G_STATE = "S_LOAD";
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de chargement des données"><a class="Link9" href="#Système d'administration">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static void GProcessUi_Run_LOAD(int argc, char** argv) {
    // on charge les donnees
    GConfig()-&gt;LoadData("G_ADMIN_ID");
    // on passe a la presentation des methodes
    m_GProcessUiO-&gt;G_STATE = "S_METHOD";
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme des méthodes"><a class="Link9" href="#Système d'administration">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessUi_Run_METHOD(int argc, char** argv) {
    printf("\n");
    printf("C_ADMIN :\n");
    printf("\t%-2s : %s\n", "1", "S_SQLITE");
    printf("\t%-2s : %s\n", "2", "S_OPENCV");
    printf("\n");
    m_GProcessUiO-&gt;G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du choix d'une méthode"><a class="Link9" href="#Système d'administration">Programme du choix d'une méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessUi_Run_CHOICE(int argc, char** argv) {
    char* lLast = GConfig()-&gt;GetData("G_ADMIN_ID");
    printf("C_ADMIN (%s) ? ", lLast);
    char lAnswer[B_ANSWER+1]; GManager()-&gt;ReadLine(lAnswer, B_ANSWER);
    if(!strcmp(lAnswer, "")) {strcpy(lAnswer, lLast);}
    if(!strcmp(lAnswer, "-q")) {m_GProcessUiO-&gt;G_STATE = "S_END";}
    //
    else if(!strcmp(lAnswer, "1")) {m_GProcessUiO-&gt;G_STATE = "S_SQLITE"; GConfig()-&gt;SetData("G_ADMIN_ID", lAnswer);}
    else if(!strcmp(lAnswer, "2")) {m_GProcessUiO-&gt;G_STATE = "S_OPENCV"; GConfig()-&gt;SetData("G_ADMIN_ID", lAnswer);}
    //
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du module SQLite"><a class="Link9" href="#Système d'administration">Programme du module SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessUi_Run_SQLITE(int argc, char** argv) {
    GSQLiteUi()-&gt;Run(argc, argv);
    m_GProcessUiO-&gt;G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du module OpenCV"><a class="Link9" href="#Système d'administration">Programme du module OpenCV</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessUi_Run_OPENCV(int argc, char** argv) {
    GOpenCVUi()-&gt;Run(argc, argv);
    m_GProcessUiO-&gt;G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de sauvegarde des données"><a class="Link9" href="#Système d'administration">Programme de sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessUi_Run_SAVE(int argc, char** argv) {
    GConfig()-&gt;SaveData("G_ADMIN_ID");
    m_GProcessUiO-&gt;G_STATE = "S_END";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><h3 class="Title8 GTitle3">Menu principal</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_admin_system.png" alt="/Tutoriels/Software_Development/C0/img/i_c_admin_system.png"></div><br><h3 class="Title8 GTitle3">Menu du module SQLite</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_admin_system_02.png" alt="/Tutoriels/Software_Development/C0/img/i_c_admin_system_02.png"></div><br><h3 class="Title8 GTitle3">Affichage des tables SQLite</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_admin_system_03.png" alt="/Tutoriels/Software_Development/C0/img/i_c_admin_system_03.png"></div><br><h3 class="Title8 GTitle3">Affichage de la table CONFIG_DATA</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_admin_system_04.png" alt="/Tutoriels/Software_Development/C0/img/i_c_admin_system_04.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire de fichier log"><a class="Link3" href="#">Gestionnaire de fichier log</a></h1><div class="Body3"><br>Créer un gestionnaire de fichier log en C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616858821799"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616858821799");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Introduction"><a class="Link9" href="#Gestionnaire de fichier log">Introduction</a></h2><br>Le gestionnaire de fichier log que nous présentons ici est une interface permettant de transférer des données depuis notre application vers un fichier texte qui peut être exploité par la suite par un système d'analyse de fichier log dédié. Un fichier log permet de suivre l'historique des traces laissées par un système au cours de son exécution. L'un des avantages de ce concept est de pouvoir analyser en temps réel les actions et réactions du système.<br><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Programme principal"><a class="Link9" href="#Gestionnaire de fichier log">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GLog_Test(int argc, char** argv) {
    sGPerson lPerson = {"Gerard", "KESSE", "gerard.kesse@outlook.fr", 1234};
    
    GLog()-&gt;Sep();
    GLog()-&gt;Write(30, -25, "afficher un entier ", 3, " : ", 1, 10000, 0);
    GLog()-&gt;Write(30, -25, "afficher un reel ", 3, " : ", 20, 2, 3.14, 0);
    GLog()-&gt;Write(30, -25, "afficher un chaine ", 3, " : ", 3, "Bonjour tout le monde", 0);
    GLog()-&gt;Write(30, -25, "afficher une structure ", 3, " : ", 3, "\n", 4, GLog_OnTest, &lPerson, 0);
    GLog()-&gt;Sep();
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _sGPerson {
    char* firstname;
    char* lastname;
    char* email;
    int code;
};
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Accumulateur de messages"><a class="Link9" href="#Gestionnaire de fichier log">Accumulateur de messages</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GLog_Write(int key, ...) {
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;
    if(lApp-&gt;log_on == 0) return;
    char lBuffer[B_LOG+1];
    int lIndex = 0;

    va_list lArgs;
    va_start(lArgs, key);
    int lType = key;
    while(1) {
        // off
        if(lType == 0) break;
        // int
        if(lType == 1) {
            int lData = va_arg(lArgs, int);
            lIndex += sprintf(&lBuffer[lIndex], "%d", lData);
        }
        // int - width
        else if(lType == 10) {
            int lWidth = va_arg(lArgs, int);
            int lData = va_arg(lArgs, int);
            lIndex += sprintf(&lBuffer[lIndex], "%*d", lWidth, lData);
        }
        // double 
        else if(lType == 2) {
            double lData = va_arg(lArgs, double);
            lIndex += sprintf(&lBuffer[lIndex], "%f", lData);
        }
        // double - width
        else if(lType == 20) {
            int lWidth = va_arg(lArgs, int);
            double lData = va_arg(lArgs, double);
            lIndex += sprintf(&lBuffer[lIndex], "%.*f", lWidth, lData);
}
        // string
        else if(lType == 3) {
            char* lData = va_arg(lArgs, char*);
            lIndex += sprintf(&lBuffer[lIndex], "%s", lData);
        }
        // string - width
        else if(lType == 30) {
            int lWidth = va_arg(lArgs, int);
            char* lData = va_arg(lArgs, char*);
            lIndex += sprintf(&lBuffer[lIndex], "%*s", lWidth, lData);
        }
        // struct
        else if(lType == 4) {
            GLOG_FUNC onLogFunc = (GLOG_FUNC)va_arg(lArgs, void*);
            void* lObj = va_arg(lArgs, void*);
            lIndex += onLogFunc(lBuffer, lIndex, lObj);
        }
        lType = va_arg(lArgs, int);
    }
    va_end(lArgs);
    GLog_Buffer(lBuffer);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Traçage d'un message"><a class="Link9" href="#Gestionnaire de fichier log">Traçage d'un message</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GLog_Buffer(char* buffer) {
    FILE* lFile = GLog_Open();
    char* lDate = GLog_Date();
    char lFormat[256];
    
    GListO(GLog, GVOID_PTR)* lLines = GManager()-&gt;Split(buffer, "\n");
    
    for(int i = 0; i &lt; lLines-&gt;Size(lLines); i++) {
        char* lLine = lLines-&gt;GetData(lLines, i);
        sprintf(lFormat, "%s | %s", lDate, lLine);
        fprintf(lFile, "%s\n", lFormat);
    }
    
    GLog_Close(lFile);
    free(lDate);
    lLines-&gt;Delete(lLines, 0);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Traçage d'un séparateur"><a class="Link9" href="#Gestionnaire de fichier log">Traçage d'un séparateur</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GLog_Sep() {
    char lBuffer[256];
    for(int i = 0; i &lt; 50; i++) {
        sprintf(&lBuffer[i], "=");
    }
    GLog_Buffer(lBuffer);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Choix du flux de sortie"><a class="Link9" href="#Gestionnaire de fichier log">Choix du flux de sortie</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static FILE* GLog_Open() {
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;
    FILE* lFile = 0;
    if(!strcmp(lApp-&gt;log_mode, "file")) {
        lFile = fopen(lApp-&gt;log_path , "a+");
    }
    else if(!strcmp(lApp-&gt;log_mode, "stdout")) {
        lFile = stdout;
    }
    else if(!strcmp(lApp-&gt;log_mode, "stderr")) {
        lFile = stderr;
    }
    else {
        lFile = stdout;
    }
    return lFile;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Fermeture du flux de sortie"><a class="Link9" href="#Gestionnaire de fichier log">Fermeture du flux de sortie</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GLog_Close(FILE* file) {
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;
    if(!strcmp(lApp-&gt;log_mode, "file")) {
        fclose(file);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Lecture de la date et l'heure"><a class="Link9" href="#Gestionnaire de fichier log">Lecture de la date et l'heure</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static char* GLog_Date() {
    char lBuffer[B_LOG+1];
    time_t lTime;
    time(&lTime);
    struct tm* lTimeInfo = localtime(&lTime);
    int lDay = lTimeInfo-&gt;tm_mday;
    int lMonth = lTimeInfo-&gt;tm_mon + 1;
    int lYear = lTimeInfo-&gt;tm_year + 1900;
    int lHour = lTimeInfo-&gt;tm_hour;
    int lMin = lTimeInfo-&gt;tm_min;
    int lSec = lTimeInfo-&gt;tm_sec;
    sprintf(lBuffer, "%02d/%02d/%04d %02d:%02d:%02d", lDay, lMonth, lYear, lHour, lMin, lSec);
    return GManager()-&gt;CopyStr(lBuffer);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Traçage d'une structure complexe"><a class="Link9" href="#Gestionnaire de fichier log">Traçage d'une structure complexe</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
typedef int (*GLOG_FUNC)(char* buffer, int index, void* obj);
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static int GLog_OnTest(char* buffer, int index, void* obj) {
    sGPerson* lPerson = obj;
    index += sprintf(&buffer[index], "%*s%*s : %s\n", 5, "", -10, "Nom", lPerson-&gt;lastname);
    index += sprintf(&buffer[index], "%*s%*s : %s\n", 5, "", -10, "Prenom", lPerson-&gt;firstname);
    index += sprintf(&buffer[index], "%*s%*s : %s\n", 5, "", -10, "Email", lPerson-&gt;email);
    index += sprintf(&buffer[index], "%*s%*s : %d\n", 5, "", -10, "Code", lPerson-&gt;code);
    return index;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Résultat"><a class="Link9" href="#Gestionnaire de fichier log">Résultat</a></h2><br><h3 class="Title8 GTitle3">Traçage dans un teminal</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_log.png" alt="/Tutoriels/Software_Development/C0/img/i_c_log.png"></div><br><h3 class="Title8 GTitle3">Traçage dans un fichier</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_log_02.png" alt="/Tutoriels/Software_Development/C0/img/i_c_log_02.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bibliothèques"><a class="Link3" href="#">Bibliothèques</a></h1><div class="Body3"><br><span class="GColor1" style="color:lime;">Bibliothèques C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1616862322310"><div class="Row26">List 1 &gt; C &gt; libs</div></div><script>loadList1("Loader_1616862322310","C","libs");</script></div><br></div></div></div></div><br>