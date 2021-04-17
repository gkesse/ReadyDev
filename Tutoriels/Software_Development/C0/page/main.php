<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/b_c.png" alt="/Tutoriels/Software_Development/C0/img/b_c.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616843526757"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616843526757");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous MSYS2"><a class="Link9" href="#Installation">1.1 - Installation sous MSYS2</a></h2><br>MSYS2 est un outil de développement de logiciels Linux sous Windows.<br><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Installer MSYS2"><a class="Link9" href="#Installation">1.1.1 - Installer MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.1 - Télécharger MSYS2"><a class="Link9" href="#Installation">1.1.1.1 - Télécharger MSYS2</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://repo.msys2.org/distrib/x86_64/">https://repo.msys2.org/distrib/x86_64/</a><br><br><b>msys2-x86_64-20210228.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.2 - Démarrer l'installation"><a class="Link9" href="#Installation">1.1.1.2 - Démarrer l'installation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">msys2-x86_64-20210228.exe
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><h2 class="Title7 GTitle2" id="Système d'administration-1 - Menu principal"><a class="Link9" href="#Système d'administration">1 - Menu principal</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_admin_system.png" alt="/Tutoriels/Software_Development/C0/img/i_c_admin_system.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-2 - Menu du module SQLite"><a class="Link9" href="#Système d'administration">2 - Menu du module SQLite</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_admin_system_02.png" alt="/Tutoriels/Software_Development/C0/img/i_c_admin_system_02.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-3 - Affichage des tables SQLite"><a class="Link9" href="#Système d'administration">3 - Affichage des tables SQLite</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_admin_system_03.png" alt="/Tutoriels/Software_Development/C0/img/i_c_admin_system_03.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-4 - Affichage de la table CONFIG_DATA"><a class="Link9" href="#Système d'administration">4 - Affichage de la table CONFIG_DATA</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_admin_system_04.png" alt="/Tutoriels/Software_Development/C0/img/i_c_admin_system_04.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire de fichier log"><a class="Link3" href="#">Gestionnaire de fichier log</a></h1><div class="Body3"><br>Créer un gestionnaire de fichier log en C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616858821799"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616858821799");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Introduction"><a class="Link9" href="#Gestionnaire de fichier log">Introduction</a></h2><br>Le gestionnaire de fichier log que nous présentons ici est une interface permettant de transférer des données depuis notre application vers un fichier texte qui peut être exploité par la suite par un système d'analyse de fichier log dédié. Un fichier log permet de suivre l'historique des traces laissées par un système au cours de son exécution. L'un des avantages de ce concept est de pouvoir analyser en temps réel les actions et réactions du système.<br><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Programme principal"><a class="Link9" href="#Gestionnaire de fichier log">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de fichier log-Résultat"><a class="Link9" href="#Gestionnaire de fichier log">Résultat</a></h2><br><h3 class="Title8 GTitle3">Traçage dans un teminal</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_log.png" alt="/Tutoriels/Software_Development/C0/img/i_c_log.png"></div><br><h3 class="Title8 GTitle3">Traçage dans un fichier</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_c_log_02.png" alt="/Tutoriels/Software_Development/C0/img/i_c_log_02.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface Homme-Machine avec Gtk"><a class="Link3" href="#">Interface Homme-Machine avec Gtk</a></h1><div class="Body3"><br><b>GTK </b>est une bibliothèque de création d'interfaces homme-machine dévoppé à l'origine pour les besoins du logiciel de traitement d'images GIMP.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618606543470"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618606543470");</script></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-1 - Installation"><a class="Link9" href="#Interface Homme-Machine avec Gtk">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-1.1 - Installation sous Windows"><a class="Link9" href="#Interface Homme-Machine avec Gtk">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-1.1.1 - Installation sous MSYS2"><a class="Link9" href="#Interface Homme-Machine avec Gtk">1.1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-1.1.1.1 - Installer Gtk"><a class="Link9" href="#Interface Homme-Machine avec Gtk">1.1.1.1 - Installer Gtk</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed -y mingw-w64-i686-gtk3</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-2 - Tests"><a class="Link9" href="#Interface Homme-Machine avec Gtk">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-2.1 - Test sous Windows"><a class="Link9" href="#Interface Homme-Machine avec Gtk">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-2.1.1 - Test sous MSYS2"><a class="Link9" href="#Interface Homme-Machine avec Gtk">2.1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-2.1.1.1 - Éditer le programme"><a class="Link9" href="#Interface Homme-Machine avec Gtk">2.1.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
static gboolean GWindow_OnDeleteEvent(GtkWidget* obj, GdkEvent* event, gpointer params);
//===============================================
int main(int argc, char** argv) {
    // on initialise gtk
    gtk_init(&argc, &argv);
    
    // on cree la fenetre principale 
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    
    // on cree un label
    GtkWidget* lLabel = gtk_label_new(0);
    // on definit le texte du label
    gtk_label_set_text(GTK_LABEL(lLabel), "Bonjour tout le monde");
    
    // on cree un layout vertical
    GtkWidget* lMainLayout = gtk_vbox_new(0, 0);
    // on ajoute le label dans le layout
    gtk_box_pack_start(GTK_BOX(lMainLayout), lLabel, 1, 1, 0);
    // on ajoute le layout dans la fenetre principale
    gtk_container_add(GTK_CONTAINER(lWindow), lMainLayout);
    // on affiche la fenetre principale 
    gtk_widget_show_all(lWindow);
    
    // on definit le titre de la fenetre principale 
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    // on supprime les marges
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 0);
    // on definit les dimensions de la fenetre principale 
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 600, 330);
    
    // on definit le signal associe a la fermeture de la fenetre principale
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    g_signal_connect(G_OBJECT(lWindow), "delete_event", G_CALLBACK(GWindow_OnDeleteEvent), NULL);
    
    // on rentre dans la boucle de controle
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    // on ferme la fenetre principale
    gtk_main_quit();
}
//===============================================
static gboolean GWindow_OnDeleteEvent(GtkWidget* obj, GdkEvent* event, gpointer params) {
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-2.1.1.2 - Compiler le projet"><a class="Link9" href="#Interface Homme-Machine avec Gtk">2.1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -std=gnu11 -c ./main.c -o ./main.o \
`pkg-config --cflags gtk+-3.0`</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -std=gnu11 -c ./main.c -o ./main.o \
-I/mingw32/include/gtk-3.0 -I/mingw32/include/pango-1.0 -I/mingw32/include -I/mingw32/include/glib-2.0 \
-I/mingw32/lib/glib-2.0/include -I/mingw32/include/harfbuzz -I/mingw32/include/freetype2 \
-I/mingw32/include/libpng16 -mms-bitfields -I/mingw32/include/fribidi -I/mingw32/include/cairo \
-I/mingw32/include/lzo -I/mingw32/include/pixman-1 -mms-bitfields -mms-bitfields -mms-bitfields \
-mms-bitfields -mms-bitfields -mms-bitfields -mms-bitfields -I/mingw32/include/gdk-pixbuf-2.0 \
-mms-bitfields -mms-bitfields -mms-bitfields -I/mingw32/include/atk-1.0 -mms-bitfields -mms-bitfields \
-mms-bitfields -pthread -mms-bitfields</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-2.1.1.3 - Éditer les liens du projet"><a class="Link9" href="#Interface Homme-Machine avec Gtk">2.1.1.3 - Éditer les liens du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -o ./rdc.exe ./main.o  \
`pkg-config --libs gtk+-3.0`</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -o ./rdc.exe ./main.o  \
-L/mingw32/lib \ 
-lgtk-3 -lgdk-3 -lz -lgdi32 -limm32 -lshell32 -lole32 -Wl,-luuid -lwinmm -ldwmapi -lsetupapi \
-lcfgmgr32 -lpangowin32-1.0 -lpangocairo-1.0 -lpango-1.0 -lharfbuzz -latk-1.0 -lcairo-gobject \
-lcairo -lgdk_pixbuf-2.0 -lgio-2.0 -lgobject-2.0 -lglib-2.0 -lintl</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-2.1.1.4 - Exécuter le projet"><a class="Link9" href="#Interface Homme-Machine avec Gtk">2.1.1.4 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdc.exe</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_gtk_test.png" alt="/Tutoriels/Software_Development/C0/img/i_gtk_test.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3 - Projets"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3 - Projets</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1 - Système d'administration"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1 - Système d'administration</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.1 - Introduction"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.1 - Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface graphique permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.2 - Programme principal"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.2 - Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GGtk_Run(int argc, char** argv) {
    // on initialise gtk
    gtk_init(&argc, &argv);

    // on charge le style de l'application
    GManager()-&gt;LoadStyle();
    // on charge les images
    GManager()-&gt;LoadImg();
    // on charge les donnees de l'application
    GManager()-&gt;LoadData();
    // on charge les pictogrammes de l'application
    GPicto()-&gt;Load();
    // on cree le systeme d'administration
    GWidget("window");

    // on rentre dans la boucle de controle
    gtk_main();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.3 - Système d'administration"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.3 - Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GWindow.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GWindow_Widget(GWidgetO* obj) {
    // on recupere le manager de donnees
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;
    // on cree la fenetre principale
    GtkWidget* lWidget = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    // on definit un pointeur vers la fenetre principale 
    obj-&gt;widget = lWidget;
    
    // on cree la barre de titre
    GWidgetO* lTitleBar = GWidget("titlebar");
    // on cree la barre d'adresse
    GWidgetO* lAddressBar = GWidget("addressbar");

    // on cree la barre d'acces rapide
    GWidgetO* lAddressKey = GWidget("addresskey");
    // on cree un pointeur vers la barre d'acces rapide
    lApp-&gt;address_key = lAddressKey;

    // on cree la pile de widget
    GWidgetO* lWorkspace = GWidget("stackwidget");
    // on cree un pointeur vers la pile de widget
    lApp-&gt;page_map = lWorkspace;
    // on definit le nom de l'objet
    gtk_widget_set_name(lWorkspace-&gt;widget, "workspace");
    
    // on cree un layout vertical
    GtkWidget* lMainLayout = gtk_vbox_new(0, 0);
    // on definit le nom de l'objet
    gtk_widget_set_name(lMainLayout, "GWindow");
    // on ajoute les widgets dans le layout
    gtk_box_pack_start(GTK_BOX(lMainLayout), lTitleBar-&gt;widget, 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), GManager()-&gt;SpaceV(10), 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lAddressBar-&gt;widget, 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), GManager()-&gt;SpaceV(10), 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lAddressKey-&gt;widget, 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), GManager()-&gt;SpaceV(10), 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lWorkspace-&gt;widget, 1, 1, 0);

    // on ajoute le layout dans la fenetre principale
    gtk_container_add(GTK_CONTAINER(lWidget), lMainLayout);
    // on affiche la fenetre principale
    gtk_widget_show_all(lWidget);

    // on cree les pages du systeme d'administration
    lWorkspace-&gt;AddPage(lWorkspace, "home", "Accueil", GWidget("home")-&gt;widget, 1);
    lWorkspace-&gt;AddPage(lWorkspace, "home/login", "Connexion", GWidget("login")-&gt;widget, 0);
    lWorkspace-&gt;AddPage(lWorkspace, "home/sqlite", "SQLite", GWidget("sqlite")-&gt;widget, 0);
    lWorkspace-&gt;AddPage(lWorkspace, "home/opencv", "OpenCV", GWidget("opencv")-&gt;widget, 1);
    lWorkspace-&gt;AddPage(lWorkspace, "home/debug", "Debug", GWidget("debug")-&gt;widget, 0);
    
    // on affiche la page par default
    GManager()-&gt;SetPage(lWorkspace-&gt;GetDefaultKey(lWorkspace));

    // on definit le titre de la fenetre principale
    gtk_window_set_title(GTK_WINDOW(lWidget), lApp-&gt;app_name);
    // on definit les marges de la fenetre principale
    gtk_container_set_border_width(GTK_CONTAINER(lWidget), 0);
    // on definit les dimensions de la fenetre principale
    gtk_widget_set_size_request(GTK_WIDGET(lWidget), lApp-&gt;win_width, lApp-&gt;win_height);
    
    // on definit le signal associe a la fermeture de la fenetre principale
    g_signal_connect(G_OBJECT(lWidget), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    g_signal_connect(G_OBJECT(lWidget), "delete_event", G_CALLBACK(GWindow_OnDeleteEvent), NULL);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.4 - Ajout d'une page"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.4 - Ajout d'une page</a></h2><br><h3 class="Title8 GTitle3">GStackWidget.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GStackWidget_AddPage(GWidgetO* obj, char* key, char* title, GtkWidget* widget, int isDefault) {
    // on recupere l'objet enfant
    // qui correspond ici a la pile de widgets
    GStackWidgetO* lChild = obj-&gt;child;
    // on recupere le map des widgets des pages
    GMapO(GStackWidget, GVOID_PTR, GVOID_PTR)* lWidgetMap = lChild-&gt;widgetMap;
    // on recupere le map des titres des pages
    GMapO(GStackWidget, GVOID_PTR, GVOID_PTR)* lTitleMap = lChild-&gt;titleMap;
    
    // on associe la cle au widget de la page
    lWidgetMap-&gt;SetData(lWidgetMap, key, widget, lWidgetMap-&gt;EqualChar);
    // on associe la cle au titre de la page
    lTitleMap-&gt;SetData(lTitleMap, key, title, lTitleMap-&gt;EqualChar);

    // on ajoute le widget dans la pile
    gtk_box_pack_start(GTK_BOX(obj-&gt;widget), widget, 0, 0, 0);
    // on rend invisible le widget dans la pile
    gtk_widget_hide(widget);
    
    // on initialise la cle par defaut
    // on initialise la cle courante
    if(lChild-&gt;currentKeyFlag == 1) {lChild-&gt;defaultKey = key; lChild-&gt;currentKey = key; lChild-&gt;currentKeyFlag = 0;}
    
    // on definit la cle par defaut
    if(isDefault == 1) {lChild-&gt;defaultKey = key;}
    // on compte le nombre de pages
    lChild-&gt;count++;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.5 - Page d'accueil"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.5 - Page d'accueil</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.5.1 - Création de la page d'accueil"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.5.1 - Création de la page d'accueil</a></h2><br><h3 class="Title8 GTitle3">GHome.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GHome_Widget(GWidgetO* obj) {
    // on cree le layout de la fenetre
    GtkWidget* lWidget = gtk_vbox_new(1, 0);
    obj-&gt;widget = lWidget;

    // on cree une liste de widgets
    GWidgetO* lListBox = GWidget("listbox");
    // on associe un observateur a liste de widgets
    lListBox-&gt;AddItemClick(lListBox, obj);
    // on ajoute des widgets a la liste
    lListBox-&gt;AddItem(lListBox, "home/login", "Connexion", "user");
    lListBox-&gt;AddItem(lListBox, "home/sqlite", "SQLite", "database");
    lListBox-&gt;AddItem(lListBox, "home/opencv", "OpenCV", "camera");
    lListBox-&gt;AddItem(lListBox, "home/debug", "Debug", "filetexto");
    
    // on ajoute le layout dans la fenetre
    gtk_box_pack_start(GTK_BOX(lWidget), lListBox-&gt;widget, 0, 0, 0);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.5.2 - Ajout d'un élément de page"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.5.2 - Ajout d'un élément de page</a></h2><br><h3 class="Title8 GTitle3">GListBox.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GListBox_AddItem(GWidgetO* obj, char* key, char* text, char* icon) {
    // on recupere le widget enfant
    // en effet on travaille dans un concept oriente objet
    // et nos widgets perso heritent tous de l'objet GWidgetO
    GListBoxO* lChild = obj-&gt;child;
    // on recupere le map des widgets
    // en effet tous les widgets ajoutes dans la liste
    // sont enregistres dans un systeme de cle/valeur (map)
    GMapO(GListBox, GVOID_PTR, GVOID_PTR)* lWidgetMap = lChild-&gt;widgetMap;
    // on cree un bouton
    GtkWidget* lItem = gtk_button_new();
    // on definit le nom de l'objet
    gtk_widget_set_name(lItem, "item");
    // on cree un layout horizontal
    GtkWidget* lLayout = gtk_hbox_new(0, 0);
    // on definit le nom de l'objet
    gtk_widget_set_name(lLayout, "row");
    // on cree un bouton defini dans le manager
    GtkWidget* lButton = GManager()-&gt;Button(icon, text, 5, 0);
    // on ajoute le bouton au layout horizontal
    gtk_box_pack_start(GTK_BOX(lLayout), lButton, 0, 0, 0);
    // on ajoute le layout horizontal au layout horizontal
    gtk_box_pack_start(GTK_BOX(lLayout), gtk_hbox_new(0, 0), 1, 1, 0);
    // on ajoute le layout horizontal dans le bouton
    gtk_container_add(GTK_CONTAINER(lItem), lLayout);
    // on ajoute le bouton dans la liste de widgets
    gtk_box_pack_start(GTK_BOX(obj-&gt;widget), lItem, 0, 0, 0);
    // on ajoute un element de liste au map
    lWidgetMap-&gt;SetData(lWidgetMap, lItem, key, 0);
    // on definit le signal associe au bouton
    g_signal_connect(G_OBJECT(lItem), "clicked", G_CALLBACK(GListBox_OnItemClick), obj);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.5.3 - Sélection d'un élément de page"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.5.3 - Sélection d'un élément de page</a></h2><br><h3 class="Title8 GTitle3">GListBox.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GListBox_OnItemClick(GtkWidget* widget, gpointer params) {
    // on recupere le manager de donnees
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;
    // on recupere les objets
    GWidgetO* lObj = (GWidgetO*)params;
    GListBoxO* lChild = lObj-&gt;child;
    // on recupere le map associe a la liste de widgets
    GMapO(GListBox, GVOID_PTR, GVOID_PTR)* lWidgetMap = lChild-&gt;widgetMap;
    // on recupere l'id associe au widget
    char* lWidgetId = lWidgetMap-&gt;GetData(lWidgetMap, widget, 0);
    // on sauvegarde l'id associe au widget
    lApp-&gt;widget_id = lWidgetId;
    // on propage le signal vers l'observateur
    lObj-&gt;EmitItemClick(lObj);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.5.4 - Appel de l'observateur"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.5.4 - Appel de l'observateur</a></h2><br><h3 class="Title8 GTitle3">GWidget.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GWidget_EmitItemClick(GWidgetO* obj) {
    // on recupere la liste des objets a observes
    GListO(GWidget, GVOID_PTR)* lItemMap = obj-&gt;item_map;
    // on recupere la taille de la liste
    int lSize = lItemMap-&gt;Size(lItemMap);
    // on parcourt la liste
    for(int i = 0; i &lt; lSize; i++) {
        // on recupere l'objet a l'indice (i)
        GWidgetO* lObj = lItemMap-&gt;GetData(lItemMap, i);
        // on execute l'observateur
        lObj-&gt;OnItemClickObs(lObj);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.5.5 - Ajout d'un élément dans l'observateur"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.5.5 - Ajout d'un élément dans l'observateur</a></h2><br><h3 class="Title8 GTitle3">GWidget.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GWidget_AddItemClick(GWidgetO* obj, GWidgetO* obs) {
    // on recupere la liste des objets a observes
    GListO(GWidget, GVOID_PTR)* lItemMap = obj-&gt;item_map;
    // on ajoute un objet a l'observateur
    lItemMap-&gt;AddData(lItemMap, obs);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.5.6 - Exécution de l'observation"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.5.6 - Exécution de l'observation</a></h2><br><h3 class="Title8 GTitle3">GHome.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GHome_OnItemClickObs(GWidgetO* obj) {
    // on recupere le manager de donnees
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;
    // on recupere l'id de la page
    char* lWidgetId = lApp-&gt;widget_id;
    // on affiche la page
    GManager()-&gt;SetPage(lWidgetId);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.6 - Affichage d'une page"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.6 - Affichage d'une page</a></h2><br><h3 class="Title8 GTitle3">GManager.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GManager_SetPage(char* address) {
    // on recupere le manager de donnees
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;
    // on recupere le map des ids des pages
    GMapO(GManager, GVOID_PTR, GVOID_PTR)* lPageId = lApp-&gt;page_id;
    // on recupere le map des titres de pages
    GMapO(GManager, GVOID_PTR, GVOID_PTR)* lTitleMap = lApp-&gt;title_map;
    // on recupere l'id de la page
    int lPageIndex = (int)lPageId-&gt;GetData(lPageId, address, lPageId-&gt;EqualChar);
    // on recupere l'id de la page
    char* lTitle = lTitleMap-&gt;GetData(lTitleMap, address, lTitleMap-&gt;EqualChar);
    // on affiche la page
    lApp-&gt;page_map-&gt;SetCurrentIndex(lApp-&gt;page_map, lPageIndex);
    // on initialise le titre de la page
    gtk_label_set_text(GTK_LABEL(lApp-&gt;title), lTitle);
    // on initialise la barre d'acces rapide
    lApp-&gt;address_key-&gt;SetContent(lApp-&gt;address_key, address);
    gtk_entry_set_text(GTK_ENTRY(lApp-&gt;address_bar), address);
    // on initialise la barre d'acces rapide
    gtk_widget_show_all(lApp-&gt;address_key-&gt;widget);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.7 - Résultat des opérations"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.7 - Résultat des opérations</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.7.1 - Page d'accueil"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.7.1 - Page d'accueil</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system.png" alt="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.7.2 - Page de connexion"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.7.2 - Page de connexion</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system_02.png" alt="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system_02.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Gtk-3.1.7.3 - Page de débogage"><a class="Link9" href="#Interface Homme-Machine avec Gtk">3.1.7.3 - Page de débogage</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system_03.png" alt="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system_03.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Vision par Ordinateur avec OpenCV"><a class="Link3" href="#">Vision par Ordinateur avec OpenCV</a></h1><div class="Body3"><br><b>OpenCV </b>est une bibliothèque de vision par ordinateur.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618653283888"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618653283888");</script></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1 - Installation"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1.1 - Installation sous Windows"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1.1.1 - Installation sous MSYS2"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1.1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1.1.1.1 - Installer OpenCV"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1.1.1.1 - Installer OpenCV</a></h2><br><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Base de données avec SQLite"><a class="Link3" href="#">Base de données avec SQLite</a></h1><div class="Body3"><br><b>SQLite </b>est un système de gestion de base de données relationnelle accessible par le langage SQL et dont l'intégralité de la base de données (déclarations, tables, index et données) est stockée dans un fichier indépendant de la plateforme.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618653104019"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618653104019");</script></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-1 - Installation"><a class="Link9" href="#Base de données avec SQLite">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-1.1 - Installation sous Windows"><a class="Link9" href="#Base de données avec SQLite">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-1.1.1 - Installation sous MSYS2"><a class="Link9" href="#Base de données avec SQLite">1.1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-1.1.1.1 - Installer SQLite"><a class="Link9" href="#Base de données avec SQLite">1.1.1.1 - Installer SQLite</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">pacman -S --needed --noconfirm mingw-w64-i686-sqlite3</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-2 - Tests"><a class="Link9" href="#Base de données avec SQLite">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-2.1 - Test sous Windows"><a class="Link9" href="#Base de données avec SQLite">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-2.1.1 - Test sous MSYS2"><a class="Link9" href="#Base de données avec SQLite">2.1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-2.1.1.1 - Éditer le programme"><a class="Link9" href="#Base de données avec SQLite">2.1.1.1 - Éditer le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;sqlite3.h&gt;
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    // on recupere la version de SQLite
    const char* lVersion = sqlite3_libversion();
    // on affiche la version de SQLite
    printf("SQLite version %s\n", lVersion);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-2.1.1.2 - Compiler le projet"><a class="Link9" href="#Base de données avec SQLite">2.1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">gcc -std=gnu11 -c ./main.c -o ./main.o \
-I/mingw32/include</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">gcc -o ./rdc.exe ./main.o  \
-L/mingw32/lib -lsqlite3</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-2.1.1.3 - Exécuter le projet"><a class="Link9" href="#Base de données avec SQLite">2.1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdc.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">SQLite version 3.35.2</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-3 - Opérations"><a class="Link9" href="#Base de données avec SQLite">3 - Opérations</a></h2><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-3.1 - Affichage de la version"><a class="Link9" href="#Base de données avec SQLite">3.1 - Affichage de la version</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GSQLite_ShowVersion() {
    // on recupere la version de SQLite
    const char* lShowVersion = sqlite3_libversion();
    // on affiche la version de SQLite
    printf("SQLite version %s\n", lShowVersion);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-3.2 - Ouverture d'une base de données"><a class="Link9" href="#Base de données avec SQLite">3.2 - Ouverture d'une base de données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void* GSQLite_Open() {
    // on recupere le manager de donnees
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;
    // on declare un pointeur sur le gestionnaire
    sqlite3* lDb;
    // on ouvre la base de donnees
    int lOk = sqlite3_open(lApp-&gt;sqlite_db_path, &lDb);
    // on affiche un message en cas d'erreur
    if(lOk != SQLITE_OK) {printf("[error] %s() : %s\n", __FUNCTION__, lApp-&gt;sqlite_db_path);}
    // on retoure le gestionnaire
    return lDb; 
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-3.3 - Exécution d'une requête"><a class="Link9" href="#Base de données avec SQLite">3.3 - Exécution d'une requête</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GSQLite_Exec(char* sqlQuery, void* onExec, void* params) {
    // on ouvre la base de donnees
    sqlite3* lDb = GSQLite_Open();
    // on declare un pointeur sur l'erreur
    char* lError;
    // on execute la requete sql (sqlQuery)
    // avec une fonction de rappel (onExec)
    // et des parametres d'entree (params)
    int lOk = sqlite3_exec(lDb, sqlQuery, onExec, params, &lError);
    // on affiche un message en cas d'erreur
    if(lOk != SQLITE_OK) {printf("[error] %s() : %s\n", __FUNCTION__, lError);}
    // on ferme la base donnees
    sqlite3_close(lDb);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-3.4 - Affichage d'une requête de sélection"><a class="Link9" href="#Base de données avec SQLite">3.4 - Affichage d'une requête de sélection</a></h2><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-3.4.1 - Programme d'affichage"><a class="Link9" href="#Base de données avec SQLite">3.4.1 - Programme d'affichage</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GSQLite_QueryShow(char* sqlQuery, char* widthMap, int defaultWidth) {
    // on definit les parametres a utiliser
    // dans la fonction de rappel
    sGSQLiteShow lParams = {1, 1, widthMap, defaultWidth, 0};
    // on execute la requete de selection
    GSQLite_Exec(sqlQuery, GSQLite_OnQueryShow, &lParams);
    
    // si on a au moins une colonne
    // on affiche le cadre final
    if(lParams.colCount &gt; 0) printf("+-");
    for(int i = 0; i &lt; lParams.colCount; i++) {
        if(i != 0) printf("-+-");
        int lWidth = GManager()-&gt;GetWidth(widthMap, i, defaultWidth);
        for(int j = 0; j &lt; lWidth; j++) {
            printf("-");
        }
    }
    if(lParams.colCount &gt; 0) printf("-+");
    if(lParams.colCount &gt; 0) printf("\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-3.4.2 - Structure des parametres"><a class="Link9" href="#Base de données avec SQLite">3.4.2 - Structure des parametres</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _sGSQLiteShow {
    // on active l'affichage des colonnes si (1)
    int onHeader;
    // on active l'affichage des grilles si (1)
    int onGrid;
    // on definit la largeur des colonnes dans une chaine
    // en les separant par des points virgules
    char* widthMap;
    // on definit la largeur par default
    int defaultWidth;
    // on definit le nombre de colonne
    int colCount;
};
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Base de données avec SQLite-3.4.3 - Fonction de rappel"><a class="Link9" href="#Base de données avec SQLite">3.4.3 - Fonction de rappel</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static int GSQLite_OnQueryShow(void* params, int colCount, char** colValue, char** colName) {
    // on recupere les parametres
    sGSQLiteShow* lParams = (sGSQLiteShow*)params;
    
    // on affiche le cadre de debut colonnes si (1)
    if(lParams-&gt;onHeader == 1) {
        printf("+-");
        for(int i = 0; i &lt; colCount; i++) {
            if(i != 0) printf("-+-");
            int lWidth = GManager()-&gt;GetWidth(lParams-&gt;widthMap, i, lParams-&gt;defaultWidth);
            for(int j = 0; j &lt; lWidth; j++) {
                printf("-");
            }
        }
        printf("-+");
        printf("\n");
    }
    // on affiche les colonnes si (1)
    if(lParams-&gt;onHeader == 1) {
        printf("| ");
        for(int i = 0; i &lt; colCount; i++) {
            if(i != 0) printf(" | ");
            int lWidth = GManager()-&gt;GetWidth(lParams-&gt;widthMap, i, lParams-&gt;defaultWidth);
            printf("%-*s", lWidth, colName[i]);
        }
        printf(" |");
        printf("\n");
    }
    
    // on affiche le cadre de debut des grilles si (1)
    if(lParams-&gt;onGrid == 1) {
        printf("+-");
        for(int i = 0; i &lt; colCount; i++) {
            if(i != 0) printf("-+-");
            int lWidth = GManager()-&gt;GetWidth(lParams-&gt;widthMap, i, lParams-&gt;defaultWidth);
            for(int j = 0; j &lt; lWidth; j++) {
                printf("-");
            }
        }
        printf("-+");
        printf("\n");
    }
    
    // on affiche les donnees
    printf("| ");
    for(int i = 0; i &lt; colCount; i++) {
        char* lColValue = colValue[i] ? colValue[i] : "NULL";
        if(i != 0) printf(" | ");
        int lWidth = GManager()-&gt;GetWidth(lParams-&gt;widthMap, i, lParams-&gt;defaultWidth);
        printf("%-*s", lWidth, lColValue);
    }
    printf(" |");
    printf("\n");
    lParams-&gt;onHeader = 0;
    lParams-&gt;onGrid = 0;
    lParams-&gt;colCount = colCount;
    return 0; 
}
//===============================================</xmp></pre></div><br></div></div></div></div><br>