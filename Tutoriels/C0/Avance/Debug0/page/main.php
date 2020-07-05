<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un système de fichier log en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un système de fichier log en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Le concept d'historique des événements ou de journalisation désigne l'enregistrement séquentiel dans un fichier ou une base de données de tous les événements affectant un processus particulier (application, activité d'un réseau informatique…). Le journal (en anglais log file ou plus simplement log), désigne alors le fichier contenant ces enregistrements. Généralement datés et classés par ordre chronologique, ces derniers permettent d'analyser pas à pas l'activité interne du processus et ses interactions avec son environnement.<br><br><div class="Img3 GImage"><img src="/data/img/defaults/banner_c_debug.png" alt="/data/img/defaults/banner_c_debug.png"></div><br><h2 class="Title7 GTitle2" id="Introduction-Prérequis"><a class="Link9" href="#Introduction">Prérequis</a></h2><br>$\checkmark$ Apprendre la programmation en C<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système de fichier log"><a class="Link3" href="#">Système de fichier log</a></h1><div class="Body3">Création d'un système de fichier log.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593775846782"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593775846782");</script></div><br><h2 class="Title7 GTitle2" id="Système de fichier log-Pourquoi"><a class="Link9" href="#Système de fichier log">Pourquoi</a></h2><br>L'affichage en console est le moyen le plus classique de suivre les traces d'un système en cours d'exécution. Le problème est qu'il est impossible d'analyser ces traces en temps réel lors de l'exécution du système et toutes les traces sont perdues après la fermeture de l'application. Pour répondre à cette problématique, on utilise un système de fichier log (<b>GDebug</b>) qui redirige toutes les traces de l'application vers un fichier. Ce fichier log peut être analyser en temps réel pendant l'exécution de l'application et peut être consulté à tout moment après l'arrêt du système. Le fichier est la <b>boîte noire</b> de toute application logicielle. Vous pouvez ainsi suivre la vie du logiciel en analysant le fichier log.<br><br><h2 class="Title7 GTitle2" id="Système de fichier log-Ligne de fichier log"><a class="Link9" href="#Système de fichier log">Ligne de fichier log</a></h2><br>Une ligne de fichier log est constitué de 2 parties essentielles :<br><br>$\checkmark$ La date et l'heure d'affichage du&nbsp; message (<span class="GColor1" style="color:lime;">03/07/2020 14:15:34</span>)<br>$\checkmark$ Le contenu du  message (<span class="GColor1" style="color:lime;">Lancement de l'application</span>)<br><br><div class="Img3 GImage"><img src="img/debug.png" alt="img/debug.png"></div><br><h2 class="Title7 GTitle2" id="Système de fichier log-Procédure de conception"><a class="Link9" href="#Système de fichier log">Procédure de conception</a></h2><br>La procédure de conception comprend les éléments suivants :<br><br>$\checkmark$ L'acquisition du chemin du fichier log<br>$\checkmark$ L'acquisition de la date et l'heure<br>$\checkmark$ La redirection des données vers le fichier log<br><br><h2 class="Title7 GTitle2" id="Système de fichier log-Acquisition du chemin du fichier log"><a class="Link9" href="#Système de fichier log">Acquisition du chemin du fichier log</a></h2><br>L'acquisition du chemin du fichier log est dépendante de la plateforme utilisée (Windows ou UNIX). Cela implique l'utilisation d'une stratégie pour récupérer le chemin correspondant à chaque plateforme.<br><br><span class="GColor1" style="color:lime;">Définition des chemins</span><br><br><h3 class="Title8 GTitle3">Sous Windows</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#if defined(__WIN32)
#define GDATA_PATH ".readydev\\readyc\\data"
#define GDEBUG_PATH "debug"
#define GDEBUG_FILE "debug.txt"
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Sous UNIX</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#if defined(__unix)
#define GDATA_PATH ".readydev/readyc/data"
#define GDEBUG_PATH "debug"
#define GDEBUG_FILE "debug.txt"
#endif
//===============================================</xmp></pre></div><br><span class="GColor1" style="color:lime;">Interface de récupération du chemin du fichier log</span><br><br><h3 class="Title8 GTitle3">GDebug_DebugFile</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GDebug_DebugFile(GDebugO* obj) {
#if defined(__WIN32)
    GDebug_DebugFileWin(obj);
#else
    GDebug_DebugFileUnix(obj);
#endif
}
//===============================================</xmp></pre></div><br><span class="GColor1" style="color:lime;">Récupération du chemin du fichier log sous Windows</span><br><br><h3 class="Title8 GTitle3">GDebug_DebugFileWin</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#if defined(__WIN32)
static void GDebug_DebugFileWin(GDebugO* obj) {
    char lCommand[256], lHomePath[256], lDebugPath[256];
    FILE* lpFile;
    int lBytes;
    
    sprintf(lCommand, "%s", "echo %HOMEDRIVE%%HOMEPATH%");
    lpFile = popen(lCommand, "r");
    lBytes = fread(lHomePath, 1, 255, lpFile);
    lHomePath[lBytes - 1] = 0;
    pclose(lpFile);
    
    sprintf(lDebugPath, "%s\\%s\\%s", lHomePath, GDATA_PATH, GDEBUG_PATH);
    sprintf(lCommand, "if not exist \"%s\" ( mkdir \"%s\" )", lDebugPath, lDebugPath);
    lpFile = popen(lCommand, "r");
    pclose(lpFile);

    sprintf(obj-&gt;m_debugFile, "%s\\%s", lDebugPath, GDEBUG_FILE);
}
#endif
//===============================================</xmp></pre></div><br><span class="GColor1" style="color:lime;">Récupération du chemin du fichier log sous UNIX</span><br><br><h3 class="Title8 GTitle3">GDebug_DebugFileUnix</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#if defined(__unix)
void GDebug_DebugFileUnix(GDebugO* obj) {
    char lCommand[256], lHomePath[256], lDebugPath[256];
    FILE* lpFile;
    int lBytes;
    
    sprintf(lCommand, "%s", "echo $HOME");
    lpFile = popen(lCommand, "r");
    lBytes = fread(lHomePath, 1, 255, lpFile);
    lHomePath[lBytes - 1] = 0;
    pclose(lpFile);
    
    sprintf(lDebugPath, "%s/%s/%s", lHomePath, GDATA_PATH, GDEBUG_PATH);
    sprintf(lCommand, "if ! [ -d \"%s\" ] ; then mkdir -p \"%s\" ; fi", lDebugPath, lDebugPath);
    lpFile = popen(lCommand, "r");
    pclose(lpFile);

    sprintf(obj-&gt;m_debugFile, "%s/%s", lDebugPath, GDEBUG_FILE);
}
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système de fichier log-Acquisition de la date et l'heure"><a class="Link9" href="#Système de fichier log">Acquisition de la date et l'heure</a></h2><br>Cette méthode récupére l'heure et la date et retourne le résultat sous la format d'une chaine (buffer).<br><br><h3 class="Title8 GTitle3">GDebug_Date</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GDebug_Date(char* buffer) {
    time_t lRawTime;
    time(&lRawTime);
    struct tm* lTimeInfo = localtime(&lRawTime);
    int lDay = lTimeInfo-&gt;tm_mday;
    int lMonth = lTimeInfo-&gt;tm_mon + 1;
    int lYear = lTimeInfo-&gt;tm_year + 1900;
    int lHour = lTimeInfo-&gt;tm_hour;
    int lMin = lTimeInfo-&gt;tm_min;
    int lSec = lTimeInfo-&gt;tm_sec;
    if(lTimeInfo-&gt;tm_isdst == 1) lHour++;
    sprintf(buffer, "%02d/%02d/%04d %02d:%02d:%02d", lDay, lMonth, lYear, lHour, lMin, lSec);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système de fichier log-Redirection des données vers le fichier log"><a class="Link9" href="#Système de fichier log">Redirection des données vers le fichier log</a></h2><br>Dans le principe, on récupère une liste de données, on les transforme en une chaine de caractères et on les affiche dans le fichier log.<br><br>Par choix technique, on utlise 2 types de redirection :<br><br>$\checkmark$ La redirection de chaines de carctères<br>$\checkmark$ La redirection de données complexes<br><br><span class="GColor1" style="color:lime;">Redirection de chaines de caractères</span><br><br>Dans cette redirection, on reçoit en entrée une liste de chaines de carctères (char*).<br><br><h3 class="Title8 GTitle3">GDebug_Write</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GDebug_Write(int key, ...) {
    if(key == 0) return;
    char lBuffer[GDEBUG_BUFFER];
    int lIndex = 0;

    va_list lArgs;
    va_start(lArgs, key);
    while(1) {
        char* lData = va_arg(lArgs, char*);
        if(!strcmp(lData, _EOA_)) break;
        lIndex += sprintf(&lBuffer[lIndex], "%s", lData);
    }
    va_end(lArgs);
    GDebug_Log(lBuffer);
}
//===============================================</xmp></pre></div><br><span class="GColor1" style="color:lime;">Redirection de données complexes</span><br><br>Dans cette redirection, on reçoit en entrée une liste de données complexes :<br><br>$\checkmark$ Les entiers (int)<br>$\checkmark$ Les réels (double)<br>$\checkmark$ Les chaines de carectères (char*)<br>$\checkmark$ Les structures complexes (void*)<br><br><h3 class="Title8 GTitle3">GDebug_Trace</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GDebug_Trace(int key, ...) {
    if(key == 0) return;
    char lBuffer[GDEBUG_BUFFER];
    int lIndex = 0;

    va_list lArgs;
    va_start(lArgs, key);
    while(1) {
        int lType = va_arg(lArgs, int);
        if(lType == _EOT_) break;
        if(lType == 1) {
            int lData = va_arg(lArgs, int);
            lIndex += sprintf(&lBuffer[lIndex], "%d", lData);
        }
        else if(lType == 10) {
            int lWidth = va_arg(lArgs, int);
            int lData = va_arg(lArgs, int);
            lIndex += sprintf(&lBuffer[lIndex], "%*d", lWidth, lData);
        }
        else if(lType == 2) {
            double lData = va_arg(lArgs, double);
            lIndex += sprintf(&lBuffer[lIndex], "%f", lData);
        }
        else if(lType == 20) {
            int lWidth = va_arg(lArgs, int);
            double lData = va_arg(lArgs, double);
            lIndex += sprintf(&lBuffer[lIndex], "%.*f", lWidth, lData);
        }
        else if(lType == 3) {
            char* lData = va_arg(lArgs, char*);
            lIndex += sprintf(&lBuffer[lIndex], "%s", lData);
        }
        else if(lType == 30) {
            int lWidth = va_arg(lArgs, int);
            char* lData = va_arg(lArgs, char*);
            lIndex += sprintf(&lBuffer[lIndex], "%*s", lWidth, lData);
        }
        else if(lType == 4) {
            GDEBUG_LOG onLogFunc = (GDEBUG_LOG)va_arg(lArgs, void*);
            void* lObj = va_arg(lArgs, void*);
            lIndex += onLogFunc(lBuffer, lIndex, lObj);
        }
    }
    va_end(lArgs);
    GDebug_Log(lBuffer);
}
//===============================================</xmp></pre></div><br><span class="GColor1" style="color:lime;">Écriture des données dans le fichier log</span><br><br>Une fois les données transfromées en une chaine de caractères, il ne reste plus qu'à les afficher dans le fichier log.<br><br><h3 class="Title8 GTitle3">GDebug_Log</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GDebug_Log(const char* data) {
    int lCount = GDebug_SplitCount(data, "\n");
    char lData[256];
    char lFormat[256];
    char lDate[256];
    
    GDebug_Date(lDate);

    FILE* lpFile = fopen(m_GDebugO-&gt;m_debugFile, "a+");
    for(int i = 0; i &lt; lCount; i++) {
        GDebug_SplitGet(data, lData, "\n", i);
        sprintf(lFormat, "%s | %s", lDate, lData);
        fprintf(lpFile, "%s\n", lFormat);
    }
    fclose(lpFile);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système de fichier log-Utilisation"><a class="Link9" href="#Système de fichier log">Utilisation</a></h2><br><span class="GColor1" style="color:lime;">Programme de test</span><br><br><h3 class="Title8 GTitle3">GTest_Debug</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GTest_Debug(int argc, char** argv) {
    GDebug()-&gt;Write(1, __FUNCTION__, "()", _EOA_);
    GDebug()-&gt;Trace(1, 30, 5, "", 3, "Test du module debug", _EOT_);
    GDebug()-&gt;Trace(1, 30, 5, "", 3, "Tracage d'un entier", _EOT_);
    GDebug()-&gt;Trace(1, 30, 10, "", 30, -10, "Entier(int)", 3, " : ", 1, 2020, _EOT_);
    GDebug()-&gt;Trace(1, 30, 5, "", 3, "Tracage d'un reel", _EOT_);
    GDebug()-&gt;Trace(1, 30, 10, "", 30, -10, "Reel(double)", 3, " : ", 20, 2, 3.14, _EOT_);
    GDebug()-&gt;Trace(1, 30, 5, "", 3, "Tracage d'une chaine de caracters", _EOT_);
    GDebug()-&gt;Trace(1, 30, 10, "", 30, -10, "Chaine(char*)", 3, " : ", 3, "www.readydev.com", _EOT_);
    GDebug()-&gt;Trace(1, 30, 5, "", 3, "Tracage d'une structure complexe", _EOT_);
    GDebug()-&gt;Trace(1, 30, 10, "", 3, "Creation de la structure", _EOT_);

    sGPerson lPersons[] = {
        {1, "Gerard KESSE", "gerard.kesse@rdev.com", 25.25},
        {2, "Deborah YOBOUE", "deborah.yoboue@rdev.com", 55.25},
        {3, "Robins KESSE", "robins.kesse@rdev.com", 75.25},
        {0, 0, 0, 0}
    };
    
    GDebug()-&gt;Trace(1, 30, 10, "", 3, "Tracage de la structure", _EOT_);
    GDebug()-&gt;Trace(1, 30, 10, "", 30, -10, "Structure(void*)", 3, " : \n\n", 4, GTest_OnDebug, lPersons, _EOT_);
}
//===============================================</xmp></pre></div><br><span class="GColor1" style="color:lime;">Fonction de rappel pour l'affichage de structure de donnnées</span><br><br><h3 class="Title8 GTitle3">GTest_OnDebug</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static int GTest_OnDebug(char* buffer, int index, void* obj) {
    int lIndex = index;
    sGPerson* lPersons = (sGPerson*)obj;
    lIndex += sprintf(&buffer[lIndex], "%-10s%-2s | %-14s | %-23s | %s\n", " ", "id", "name", "email", "coef");
    int i = 0;
    while(1) {
        sGPerson* lPerson = &lPersons[i++];
        int lId = lPerson-&gt;id;
        if(lId == 0) break;
        char* lName = lPerson-&gt;name;
        char* lEmail = lPerson-&gt;email;
        float lCoef = lPerson-&gt;coef;
        lIndex += sprintf(&buffer[lIndex], "%-10s%-2d | %-14s | %-23s | %.2f\n", " ", lId, lName, lEmail, lCoef);
    }
    return lIndex - index;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Codes sources"><a class="Link3" href="#">Codes sources</a></h1><div class="Body3">ReadyDev<b> </b>met à votre disposition l'ensemble des codes sources publiés sur ce site.<br>Publiés sous licence libre (GNU General Public License v3.0).<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593899276401"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593899276401");</script></div><br><h2 class="Title7 GTitle2" id="Codes sources-Système de fichier log (GDebug.h)"><a class="Link9" href="#Codes sources">Système de fichier log (GDebug.h)</a></h2><br><h3 class="Title8 GTitle3">GDebug.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDebug_
#define _GDebug_
//===============================================
#include "GInclude.h"
//===============================================
#define _EOA_ "_END_OF_ARG_"
#define _EOT_ (-1) // _END_OF_TRACE_
//===============================================
typedef struct _GDebugO GDebugO;
//===============================================
struct _GDebugO {
    void (*Delete)();
    void (*Write)(int key, ...);
    void (*Trace)(int key, ...);
    void (*Sep)();
    //===============================================
    char m_debugFile[256];
};
//===============================================
GDebugO* GDebug_New();
void GDebug_Delete();
GDebugO* GDebug();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Codes sources-Système de fichier log (GDebug.c)"><a class="Link9" href="#Codes sources">Système de fichier log (GDebug.c)</a></h2><br><h3 class="Title8 GTitle3">GDebug.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDebug.h"
//===============================================
typedef int (*GDEBUG_LOG)(char* buffer, int index, void* obj);
//===============================================
#if defined(__WIN32)
#define GDATA_PATH ".readydev\\readyc\\data"
#define GDEBUG_PATH "debug"
#define GDEBUG_FILE "debug.txt"
#endif
//===============================================
#if defined(__unix)
#define GDATA_PATH ".readydev/readyc/data"
#define GDEBUG_PATH "debug"
#define GDEBUG_FILE "debug.txt"
#endif
//===============================================
#define GDEBUG_BUFFER 1024
//===============================================
static GDebugO* m_GDebugO = 0;
//===============================================
static void GDebug_Write(int key, ...);
static void GDebug_Trace(int key, ...);
static void GDebug_Sep();
//===============================================
static void GDebug_Date(char* buffer);
static void GDebug_DebugFile(GDebugO* obj);
static void GDebug_Log(const char* data);
static void GDebug_SplitGet(const char* strIn, char* strOut, char* sep, int index);
static int GDebug_SplitCount(const char* strIn, char* sep);
//===============================================
#if defined(__WIN32)
static void GDebug_DebugFileWin(GDebugO* obj);
#endif
//===============================================
#if defined(__unix)
static void GDebug_DebugFileUnix(GDebugO* obj);
#endif
//===============================================
GDebugO* GDebug_New() {
    GDebugO* lObj = (GDebugO*)malloc(sizeof(GDebugO));

    GDebug_DebugFile(lObj);

    lObj-&gt;Delete = GDebug_Delete;
    lObj-&gt;Write = GDebug_Write;
    lObj-&gt;Trace = GDebug_Trace;
    lObj-&gt;Sep = GDebug_Sep;
    return lObj;
}
//===============================================
void GDebug_Delete() {
    GDebugO* lObj = GDebug();
    if(lObj != 0) {
        free(lObj);
    }
    m_GDebugO = 0;
}
//===============================================
GDebugO* GDebug() {
    if(m_GDebugO == 0) {
        m_GDebugO = GDebug_New();
    }
    return m_GDebugO;
}
//===============================================
static void GDebug_Write(int key, ...) {
    if(key == 0) return;
    char lBuffer[GDEBUG_BUFFER];
    int lIndex = 0;

    va_list lArgs;
    va_start(lArgs, key);
    while(1) {
        char* lData = va_arg(lArgs, char*);
        if(!strcmp(lData, _EOA_)) break;
        lIndex += sprintf(&lBuffer[lIndex], "%s", lData);
    }
    va_end(lArgs);
    GDebug_Log(lBuffer);
}
//===============================================
static void GDebug_Trace(int key, ...) {
    if(key == 0) return;
    char lBuffer[GDEBUG_BUFFER];
    int lIndex = 0;

    va_list lArgs;
    va_start(lArgs, key);
    while(1) {
        int lType = va_arg(lArgs, int);
        if(lType == _EOT_) break;
        if(lType == 1) {
            int lData = va_arg(lArgs, int);
            lIndex += sprintf(&lBuffer[lIndex], "%d", lData);
        }
        else if(lType == 10) {
            int lWidth = va_arg(lArgs, int);
            int lData = va_arg(lArgs, int);
            lIndex += sprintf(&lBuffer[lIndex], "%*d", lWidth, lData);
        }
        else if(lType == 2) {
            double lData = va_arg(lArgs, double);
            lIndex += sprintf(&lBuffer[lIndex], "%f", lData);
        }
        else if(lType == 20) {
            int lWidth = va_arg(lArgs, int);
            double lData = va_arg(lArgs, double);
            lIndex += sprintf(&lBuffer[lIndex], "%.*f", lWidth, lData);
        }
        else if(lType == 3) {
            char* lData = va_arg(lArgs, char*);
            lIndex += sprintf(&lBuffer[lIndex], "%s", lData);
        }
        else if(lType == 30) {
            int lWidth = va_arg(lArgs, int);
            char* lData = va_arg(lArgs, char*);
            lIndex += sprintf(&lBuffer[lIndex], "%*s", lWidth, lData);
        }
        else if(lType == 4) {
            GDEBUG_LOG onLogFunc = (GDEBUG_LOG)va_arg(lArgs, void*);
            void* lObj = va_arg(lArgs, void*);
            lIndex += onLogFunc(lBuffer, lIndex, lObj);
        }
    }
    va_end(lArgs);
    GDebug_Log(lBuffer);
}
//===============================================
static void GDebug_Log(const char* data) {
    int lCount = GDebug_SplitCount(data, "\n");
    char lData[256];
    char lFormat[256];
    char lDate[256];
    
    GDebug_Date(lDate);

    FILE* lpFile = fopen(m_GDebugO-&gt;m_debugFile, "a+");
    for(int i = 0; i &lt; lCount; i++) {
        GDebug_SplitGet(data, lData, "\n", i);
        sprintf(lFormat, "%s | %s", lDate, lData);
        fprintf(lpFile, "%s\n", lFormat);
    }
    fclose(lpFile);
}
//===============================================
static void GDebug_SplitGet(const char* strIn, char* strOut, char* sep, int index) {
    int lPos = 0;
    int lOut = 0;
    int lCount = 0;
    int lFlag = 0;
    while(strIn[lPos] != 0) {
        if(lFlag == 0) {
            if(lCount == index) lFlag = 1;
            else lFlag = 2;
        }
        if(lFlag == 1) {
            char lChar = strIn[lPos];
            char* lSearch = strchr(sep, lChar);
            if(lSearch != 0) break;
            strOut[lOut] = lChar;
            lPos++; lOut++;
        }
        if(lFlag == 2) {
            char lChar = strIn[lPos];
            char* lSearch = strchr(sep, lChar);
            if(lSearch != 0) lCount++;
            lPos++;
            lFlag = 0;
        }
    }
    strOut[lOut] = 0;
}
//===============================================
static int GDebug_SplitCount(const char* strIn, char* sep) {
    int lPos = 0;
    int lCount = 0;
    while(strIn[lPos] != 0) {
        char lChar = strIn[lPos];
        char* lSearch = strchr(sep, lChar);
        if(lSearch != 0) lCount++;
        lPos++;
    }
    lCount += 1;
    return lCount;
}
//===============================================
static void GDebug_Sep() {
    const char* lSep = "=================================================";
    GDebug_Log(lSep);
}
//===============================================
static void GDebug_Date(char* buffer) {
    time_t lRawTime;
    time(&lRawTime);
    struct tm* lTimeInfo = localtime(&lRawTime);
    int lDay = lTimeInfo-&gt;tm_mday;
    int lMonth = lTimeInfo-&gt;tm_mon + 1;
    int lYear = lTimeInfo-&gt;tm_year + 1900;
    int lHour = lTimeInfo-&gt;tm_hour;
    int lMin = lTimeInfo-&gt;tm_min;
    int lSec = lTimeInfo-&gt;tm_sec;
    if(lTimeInfo-&gt;tm_isdst == 1) lHour++;
    sprintf(buffer, "%02d/%02d/%04d %02d:%02d:%02d", lDay, lMonth, lYear, lHour, lMin, lSec);
}
//===============================================
static void GDebug_DebugFile(GDebugO* obj) {
#if defined(__WIN32)
    GDebug_DebugFileWin(obj);
#else
    GDebug_DebugFileUnix(obj);
#endif
}
//===============================================
#if defined(__WIN32)
static void GDebug_DebugFileWin(GDebugO* obj) {
    char lCommand[256], lHomePath[256], lDebugPath[256];
    FILE* lpFile;
    int lBytes;
    
    sprintf(lCommand, "%s", "echo %HOMEDRIVE%%HOMEPATH%");
    lpFile = popen(lCommand, "r");
    lBytes = fread(lHomePath, 1, 255, lpFile);
    lHomePath[lBytes - 1] = 0;
    pclose(lpFile);
    
    sprintf(lDebugPath, "%s\\%s\\%s", lHomePath, GDATA_PATH, GDEBUG_PATH);
    sprintf(lCommand, "if not exist \"%s\" ( mkdir \"%s\" )", lDebugPath, lDebugPath);
    lpFile = popen(lCommand, "r");
    pclose(lpFile);

    sprintf(obj-&gt;m_debugFile, "%s\\%s", lDebugPath, GDEBUG_FILE);
}
#endif
//===============================================
#if defined(__unix)
void GDebug_DebugFileUnix(GDebugO* obj) {
    char lCommand[256], lHomePath[256], lDebugPath[256];
    FILE* lpFile;
    int lBytes;
    
    sprintf(lCommand, "%s", "echo $HOME");
    lpFile = popen(lCommand, "r");
    lBytes = fread(lHomePath, 1, 255, lpFile);
    lHomePath[lBytes - 1] = 0;
    pclose(lpFile);
    
    sprintf(lDebugPath, "%s/%s/%s", lHomePath, GDATA_PATH, GDEBUG_PATH);
    sprintf(lCommand, "if ! [ -d \"%s\" ] ; then mkdir -p \"%s\" ; fi", lDebugPath, lDebugPath);
    lpFile = popen(lCommand, "r");
    pclose(lpFile);

    sprintf(obj-&gt;m_debugFile, "%s/%s", lDebugPath, GDEBUG_FILE);
}
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Codes sources-Programme de test (GTest_Debug)"><a class="Link9" href="#Codes sources">Programme de test (GTest_Debug)</a></h2><br><h3 class="Title8 GTitle3">GTest_Debug</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GTest_Debug(int argc, char** argv) {
    GDebug()-&gt;Write(1, __FUNCTION__, "()", _EOA_);
    GDebug()-&gt;Trace(1, 30, 5, "", 3, "Test du module debug", _EOT_);
    GDebug()-&gt;Trace(1, 30, 5, "", 3, "Tracage d'un entier", _EOT_);
    GDebug()-&gt;Trace(1, 30, 10, "", 30, -10, "Entier(int)", 3, " : ", 1, 2020, _EOT_);
    GDebug()-&gt;Trace(1, 30, 5, "", 3, "Tracage d'un reel", _EOT_);
    GDebug()-&gt;Trace(1, 30, 10, "", 30, -10, "Reel(double)", 3, " : ", 20, 2, 3.14, _EOT_);
    GDebug()-&gt;Trace(1, 30, 5, "", 3, "Tracage d'une chaine de caracters", _EOT_);
    GDebug()-&gt;Trace(1, 30, 10, "", 30, -10, "Chaine(char*)", 3, " : ", 3, "www.readydev.com", _EOT_);
    GDebug()-&gt;Trace(1, 30, 5, "", 3, "Tracage d'une structure complexe", _EOT_);
    GDebug()-&gt;Trace(1, 30, 10, "", 3, "Creation de la structure", _EOT_);

    sGPerson lPersons[] = {
        {1, "Gerard KESSE", "gerard.kesse@rdev.com", 25.25},
        {2, "Deborah YOBOUE", "deborah.yoboue@rdev.com", 55.25},
        {3, "Robins KESSE", "robins.kesse@rdev.com", 75.25},
        {0, 0, 0, 0}
    };
    
    GDebug()-&gt;Trace(1, 30, 10, "", 3, "Tracage de la structure", _EOT_);
    GDebug()-&gt;Trace(1, 30, 10, "", 30, -10, "Structure(void*)", 3, " : \n\n", 4, GTest_OnDebug, lPersons, _EOT_);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Codes sources-Fonction de rappel de traçage d'une structure (GTest_OnDebug)"><a class="Link9" href="#Codes sources">Fonction de rappel de traçage d'une structure (GTest_OnDebug)</a></h2><br><h3 class="Title8 GTitle3">GTest_OnDebug</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static int GTest_OnDebug(char* buffer, int index, void* obj) {
    int lIndex = index;
    sGPerson* lPersons = (sGPerson*)obj;
    lIndex += sprintf(&buffer[lIndex], "%-10s%-2s | %-14s | %-23s | %s\n", " ", "id", "name", "email", "coef");
    int i = 0;
    while(1) {
        sGPerson* lPerson = &lPersons[i++];
        int lId = lPerson-&gt;id;
        if(lId == 0) break;
        char* lName = lPerson-&gt;name;
        char* lEmail = lPerson-&gt;email;
        float lCoef = lPerson-&gt;coef;
        lIndex += sprintf(&buffer[lIndex], "%-10s%-2d | %-14s | %-23s | %.2f\n", " ", lId, lName, lEmail, lCoef);
    }
    return lIndex - index;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Codes sources-Structure de données (sGPerson)"><a class="Link9" href="#Codes sources">Structure de données (sGPerson)</a></h2><br><h3 class="Title8 GTitle3">sGPerson</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _sGPerson {
    int id;
    char* name;
    char* email;
    float coef;
};
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Codes sources-Jeu de données de la structure (sGPerson)"><a class="Link9" href="#Codes sources">Jeu de données de la structure (sGPerson)</a></h2><br><h3 class="Title8 GTitle3">lPersons</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">sGPerson lPersons[] = {
    {1, "Gerard KESSE", "gerard.kesse@rdev.com", 25.25},
    {2, "Deborah YOBOUE", "deborah.yoboue@rdev.com", 55.25},
    {3, "Robins KESSE", "robins.kesse@rdev.com", 75.25},
    {0, 0, 0, 0}
};</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Codes sources-Traçage de la structure (GDebug_Trace)"><a class="Link9" href="#Codes sources">Traçage de la structure (GDebug_Trace)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">GDebug()-&gt;Trace(1, 4, GTest_OnDebug, lPersons, _EOT_);</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez voir aussi :<br><br><span class="GColor1" style="color:lime;">Programmation en C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1593931667585"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1593931667585","C","basics");</script></div><br><span class="GColor1" style="color:lime;">Programmation avancée en C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1593931890209"><div class="Row26">List 1 &gt; C &gt; advanced</div></div><script>loadList1("Loader_1593931890209","C","advanced");</script></div><br></div></div></div></div><br>