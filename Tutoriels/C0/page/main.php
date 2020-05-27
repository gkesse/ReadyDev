<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C</div></a></div></div><div class="Body2 Orange"><b>C</b> est un langage de programmation.<br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Le C est un langage de programmation.<br><br><div class="Img3 GImage"><img src="/data/img/defaults/banner_c.png" alt="/data/img/defaults/banner_c.png"></div><br>Dans ce tutoriel, nous utiliserons:<br>- gcc, comme compilateur C.<br><br><h3 class="Title8 GTitle3">Documentation sur C</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.cplusplus.com/reference/">http://www.cplusplus.com/reference/</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme de compilation"><a class="Link3" href="#">Programme de compilation</a></h1><div class="Body3">Le programme de compilation permet de compiler le programme et générer un exécutable.<br>Le fichier Makefile permet de définir les règles de compilation.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589848653356"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589848653356");</script></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Fichier Makefile"><a class="Link9" href="#Programme de compilation">Fichier Makefile</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../code/GProject/src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/gp_c

GINCS = \
    -I$(GSRC)/include \

GLIBS = \

GOBJS = \
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
    $(patsubst $(GSRC)/manager/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/manager/*.c)) \

GCFLAGS = \
    -std=gnu11 \

all: compile run
 
compile: $(GOBJS)
    @if ! [ -d "$(GBIN)" ] ; then mkdir $(GBIN) ; fi
    gcc -o $(GTARGET) $(GOBJS) $(GLIBS) 
$(GBUILD)/%.o: $(GSRC)/%.c
    @if ! [ -d "$(GBUILD)" ] ; then mkdir $(GBUILD) ; fi
    gcc $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
$(GBUILD)/%.o: $(GSRC)/manager/%.c
    @if ! [ -d "$(GBUILD)" ] ; then mkdir $(GBUILD) ; fi
    gcc $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
run:
    @echo
    @./bin/gp_c $(argv)
    @echo
clean:
    rm -f $(GBUILD)/* $(GBIN)/*</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Compilation du projet"><a class="Link9" href="#Programme de compilation">Compilation du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make compile</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Exécution du projet"><a class="Link9" href="#Programme de compilation">Exécution du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make run argv="MY_PROCESS MY_ARGUMENTS"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Nettoyage du projet"><a class="Link9" href="#Programme de compilation">Nettoyage du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make clean</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme principal"><a class="Link3" href="#">Programme principal</a></h1><div class="Body3">Le programme principal est le point d'entrée de notre application.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589805039324"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589805039324");</script></div><br><h2 class="Title7 GTitle2" id="Programme principal-Programme principal"><a class="Link9" href="#Programme principal">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GProcess.h"
#include "GDebug.h"
//===============================================
int main(int argc, char** argv) {
    GDebug()-&gt;Sep();
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GProcess()-&gt;Run(argc, argv);
    return 0;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme de débogage"><a class="Link3" href="#">Programme de débogage</a></h1><div class="Body3">Le programme de débogage permet de tracer des messages dans le fichier log.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589852610186"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589852610186");</script></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Résultat du programme de débogage"><a class="Link9" href="#Programme de débogage">Résultat du programme de débogage</a></h2><br><div class="Img3 GImage"><img src="img/debug.png" alt="img/debug.png"></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Lecture du fichier log"><a class="Link9" href="#Programme de débogage">Lecture du fichier log</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tail -f data/debug/debug.txt</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Traçage du séparateur"><a class="Link9" href="#Programme de débogage">Traçage du séparateur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GDebug_Sep() {
    const char* lSep = "=================================================";
    GDebug_Line(lSep);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Traçage des messages"><a class="Link9" href="#Programme de débogage">Traçage des messages</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GDebug_Write(const char* key, ...) {
    if(key == 0) return;
    char lBuffer[256];
    char lDate[256];
    int lIndex = 0;
    GDebug_Date(lDate);
    lIndex += sprintf(&lBuffer[lIndex], "%s | ", lDate);
    lIndex += sprintf(&lBuffer[lIndex], "%s", key);
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Écriture du ligne de message"><a class="Link9" href="#Programme de débogage">Écriture du ligne de message</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GDebug_Line(const char* data) {
    char lBuffer[512];
    char lDate[256];
    GDebug_Date(lDate);
    sprintf(lBuffer, "%s | %s", lDate, data);
    GDebug_Log(lBuffer);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Lecture de la date courante"><a class="Link9" href="#Programme de débogage">Lecture de la date courante</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Écriture dans le fichier log"><a class="Link9" href="#Programme de débogage">Écriture dans le fichier log</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GDebug_Log(char* data) {
    FILE* lpFile = fopen(m_GDebugO-&gt;filename, "a+");
    fprintf(lpFile, "%s\n", data);
    fclose(lpFile);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme des processus"><a class="Link3" href="#">Programme des processus</a></h1><div class="Body3">Le programme des processus permet de définir la tâche à exécuter.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589874219385"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589874219385");</script></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Résultat du programme des processus"><a class="Link9" href="#Programme des processus">Résultat du programme des processus</a></h2><br><div class="Img3 GImage"><img src="img/process.png" alt="img/process.png"></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Choix du processus"><a class="Link9" href="#Programme des processus">Choix du processus</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Run(int argc, char** argv) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    int lRunFlag = 0;
    for(int i = 1; i &lt; argc; i++) {
        char* lKey = argv[i];
        if(!strcmp(lKey, "test")) {GProcess_Test(argc, argv); lRunFlag = 1; break;}
    }
    if(lRunFlag == 0) {GProcess_Help(argc, argv);}
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Processus d'aide"><a class="Link9" href="#Programme des processus">Processus d'aide</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Help(int argc, char** argv) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    const char* lModule = "gp_c";
    printf("\n");
    printf("%s\n", "Description:");
    printf("\t%s\n", "Operations sur le module gp_c.");
    printf("\n");
    printf("%s\n", "Utilisation:");
    printf("\t\%s : %s\n", lModule, "afficher aide");
    printf("\t\%s %s : %s\n", lModule, "test", "lancer test");
    printf("\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Processus des tests"><a class="Link9" href="#Programme des processus">Processus des tests</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Test(int argc, char** argv) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GDebug()-&gt;Test(argc, argv);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme des commandes shell"><a class="Link3" href="#">Programme des commandes shell</a></h1><div class="Body3">Le programme des commandes shell permet d'exécuter des scripts shell ou batch.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589877937182"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589877937182");</script></div><br><h2 class="Title7 GTitle2" id="Programme des commandes shell-Résultat du programme des commandes shell"><a class="Link9" href="#Programme des commandes shell">Résultat du programme des commandes shell</a></h2><br><div class="Img3 GImage"><img src="img/shell.png" alt="img/shell.png"></div><br><h2 class="Title7 GTitle2" id="Programme des commandes shell-Exécution de commande shell"><a class="Link9" href="#Programme des commandes shell">Exécution de commande shell</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GShell_Run(char* command, char* output, int size, int shift) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    FILE* lpFile = popen(command, "r");
    if(output != 0) {
        int lBytes = fread(output, 1, size, lpFile);
        if(lBytes &gt;= 1) {
            output[lBytes] = 0;
            if(shift == 1) output[lBytes - 1] = 0;
        }
    }
    pclose(lpFile);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les chaines"><a class="Link3" href="#">Programme sur les chaines</a></h1><div class="Body3">Le programme sur les chaines permet de gérer les opérations sur les chaines.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590054835018"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590054835018");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les chaines-Suppression des espaces autour d'une chaine"><a class="Link9" href="#Programme sur les chaines">Suppression des espaces autour d'une chaine</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static char* GString_Trim(char* str) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    if(str[0] == 0) return 0;
    int lStart = 0;
    int lEnd = strlen(str) - 1;
    while(isspace(str[lStart]) != 0 && lStart &lt; lEnd) lStart++;
    while(isspace(str[lEnd]) != 0 && lEnd &gt; lStart) lEnd--;
    if(lStart == lEnd) {if(isspace(str[lStart]) != 0) {return 0;}}
    lEnd += 1;
    int lLength = lEnd - lStart;
    char* lTrim = (char*)malloc(sizeof(char)*(lLength + 1));
    int i = lStart;
    int j = 0;
    while(i &lt; lEnd) {
        lTrim[j] = str[i];
        i++;
        j++;
    }
    lTrim[j] = 0;
    return lTrim;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les chaines-Copie d'une chaine"><a class="Link9" href="#Programme sur les chaines">Copie d'une chaine</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static char* GString_Copy(char* str) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    int lLength = strlen(str);
    char* lCopy = (char*)malloc(sizeof(char)*(lLength + 1));
    strcpy(lCopy, str);
    return lCopy;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les chaines-Division d'une chaine"><a class="Link9" href="#Programme sur les chaines">Division d'une chaine</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static char** GString_Split(char* str, char* sep, int* count) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    int lPos = 0;
    int lCount = 0;
    while(str[lPos] != 0) {
        char lChar = str[lPos];
        char* lSearch = strchr(sep, lChar);
        if(lSearch != 0) lCount++;
        lPos++;
    }
    lCount += 1;
    *count = lCount;
    char** lSplit = (char**)malloc(sizeof(char*)*lCount);
    char* lStr = GString()-&gt;Copy(str);
    char* lToken = strtok(lStr, sep);
    int lTok = 0;
    while(lToken != 0) {
        lSplit[lTok] = GString()-&gt;Copy(lToken);
        lToken = strtok(0, sep);
        lTok++;
    }
    free(lStr);
    return lSplit;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les chaines-Chaine en majuscule"><a class="Link9" href="#Programme sur les chaines">Chaine en majuscule</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GString_ToUpper(char* str, char* output) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    int lSize = strlen(str);
    for(int i = 0; i &lt; lSize; i ++) {
        output[i] = toupper(str[i]);
    }
    output[lSize] = 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les chaines-Chaine en minuscule"><a class="Link9" href="#Programme sur les chaines">Chaine en minuscule</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GString_ToLower(char* str, char* output) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    int lSize = strlen(str);
    for(int i = 0; i &lt; lSize; i ++) {
        output[i] = tolower(str[i]);
    }
    output[lSize] = 0;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les fichiers"><a class="Link3" href="#">Programme sur les fichiers</a></h1><div class="Body3">Le programme sur les fichiers permet de manipuler les fichiers.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590055762875"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590055762875");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les fichiers-Vérification de l'existence d'un fichier"><a class="Link9" href="#Programme sur les fichiers">Vérification de l'existence d'un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GFile_Exist(char* filename) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    FILE* lFile = fopen(filename, "r");
    if(lFile != 0) {printf("erreur: fichier inexistant : %s\n", filename); exit(0);}
    fclose(lFile);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les fichiers-Ouverture d'un fichier"><a class="Link9" href="#Programme sur les fichiers">Ouverture d'un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GFile_Open(char* fileId, char* filename, char* mode) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GMapO(GFile, GCHAR_PTR, GVOID_PTR)* lpFileMap = m_GFileO-&gt;m_pFileMap;
    FILE* lpFile = fopen(filename, mode);
    if(lpFile == 0) {printf("erreur: echec ouverture fichier : %s\n", filename); exit(0);}
    lpFileMap-&gt;SetData(lpFileMap, fileId, lpFile, GMap_EqualChar);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les fichiers-Fermeture d'un fichier"><a class="Link9" href="#Programme sur les fichiers">Fermeture d'un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GFile_Close(char* fileId) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GMapO(GFile, GCHAR_PTR, GVOID_PTR)* lpFileMap = m_GFileO-&gt;m_pFileMap;
    FILE* lpFile = lpFileMap-&gt;GetData(lpFileMap, fileId, GMap_EqualChar);
    fclose(lpFile);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les fichiers-Chargement du contenu"><a class="Link9" href="#Programme sur les fichiers">Chargement du contenu</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static char* GFile_GetData(char* fileId) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GMapO(GFile, GCHAR_PTR, GVOID_PTR)* lpFileMap = m_GFileO-&gt;m_pFileMap;
    FILE* lpFile = lpFileMap-&gt;GetData(lpFileMap, fileId, GMap_EqualChar);
    int lSize = GFile_Size(fileId);
    char* lData = (char*)malloc(sizeof(char)*(lSize + 1));
    int lBytes = fread(lData, sizeof(char), lSize, lpFile);
    lData[lBytes] = 0;
    return lData;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les fichiers-Chargement de données de configuration"><a class="Link9" href="#Programme sur les fichiers">Chargement de données de configuration</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GFile_GetDataMap(char* fileId) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GMapO(GFile, GCHAR_PTR, GVOID_PTR)* lpFileMap = m_GFileO-&gt;m_pFileMap;
    FILE* lpFile = lpFileMap-&gt;GetData(lpFileMap, fileId, GMap_EqualChar);
    char lLine[256];
    
    while(fgets(lLine, sizeof(lLine), lpFile) != NULL) {
        char* lTrim = GString()-&gt;Trim(lLine);
        if(lTrim == 0) {continue;}
        char lFirst = lTrim[0];
        if(lFirst == '#') {GString()-&gt;Free(lTrim); continue;}
        int lCount;
        char** lSplit = GString()-&gt;Split(lTrim, "=", &lCount);
        char* lKey = GString()-&gt;Trim(lSplit[0]);
        char* lValue = GString()-&gt;Trim(lSplit[1]);
        GConfig()-&gt;SetData(lKey, lValue);
        GString()-&gt;Free(lTrim);
        GString()-&gt;Free2(lSplit, lCount);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les fichiers-Chargement de données CSV"><a class="Link9" href="#Programme sur les fichiers">Chargement de données CSV</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GFile_GetDataCsv(char* fileId) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GMapO(GFile, GCHAR_PTR, GVOID_PTR)* lpFileMap = m_GFileO-&gt;m_pFileMap;
    FILE* lpFile = lpFileMap-&gt;GetData(lpFileMap, fileId, GMap_EqualChar);
    char lLine[256];
    
    while(fgets(lLine, sizeof(lLine), lpFile) != NULL) {
        char* lTrim = GString()-&gt;Trim(lLine);
        if(lTrim == 0) {continue;}
        char lFirst = lTrim[0];
        if(lFirst == '#') {GString()-&gt;Free(lTrim); continue;}
        int lCount;
        char** lSplit = GString()-&gt;Split(lTrim, ";", &lCount);
        
        GCsv()-&gt;AddRow();    
        
        for(int i = 0; i &lt; lCount; i++) {
            char* lCol = GString()-&gt;Trim(lSplit[i]);
            GCsv()-&gt;AddData(lCol);    
        }
               
        GString()-&gt;Free(lTrim);
        GString()-&gt;Free2(lSplit, lCount);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les fichiers-Taille en octet d'un fichier"><a class="Link9" href="#Programme sur les fichiers">Taille en octet d'un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static int GFile_Size(char* fileId) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GMapO(GFile, GCHAR_PTR, GVOID_PTR)* lpFileMap = m_GFileO-&gt;m_pFileMap;
    FILE* lpFile = lpFileMap-&gt;GetData(lpFileMap, fileId, GMap_EqualChar);
    fseek(lpFile, 0, SEEK_END);
    int lSize = (int)ftell(lpFile);
    rewind(lpFile);
    return lSize;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les répertoires"><a class="Link3" href="#">Programme sur les répertoires</a></h1><div class="Body3">Le programme sur les répertoires permet d'effectuer des opérations sur les répertoires.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590056533661"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590056533661");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les répertoires-Lecture du répertoire HOME"><a class="Link9" href="#Programme sur les répertoires">Lecture du répertoire HOME</a></h2><br><h3 class="Title8 GTitle3">Sous Linux</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#if defined(__unix)
static void GDir_HomePathUnix(GDirO* obj) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    char lCommand[256];
    sprintf(lCommand, "%s", "echo $HOME");
    GShell()-&gt;Run(lCommand, obj-&gt;m_homePath, 255, 1);
    sprintf(obj-&gt;m_dataPath, "%s%s", obj-&gt;m_homePath, GDIR_DATA_PATH);
}
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les répertoires-Lecture du répertoire des données"><a class="Link9" href="#Programme sur les répertoires">Lecture du répertoire des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GDir_DataPath(char* path, char* output) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    sprintf(output, "%s%s", m_GDirO-&gt;m_dataPath, path);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les listes"><a class="Link3" href="#">Programme sur les listes</a></h1><div class="Body3">Le programme sur les listes permet de gérer une liste chainée de données de type quelconque.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590057462260"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590057462260");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les listes-Structure du nœud de données"><a class="Link9" href="#Programme sur les listes">Structure du nœud de données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">struct _GListNodeO_##GPREFIX##_##GDATA { \
    GDATA m_data; \
    GListNodeO_##GPREFIX##_##GDATA* m_next; \
}; \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les listes-Structure de la liste de données"><a class="Link9" href="#Programme sur les listes">Structure de la liste de données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">struct _GListO_##GPREFIX##_##GDATA { \
    GListNodeO_##GPREFIX##_##GDATA* m_head; \
}; \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les listes-Ajout d'une donnée"><a class="Link9" href="#Programme sur les listes">Ajout d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static void GList_AddData_##GPREFIX##_##GDATA(GListO_##GPREFIX##_##GDATA* obj, GDATA data) { \
    GListNodeO_##GPREFIX##_##GDATA* lNext = obj-&gt;m_head; \
    GListNodeO_##GPREFIX##_##GDATA* lPrevious = 0; \
    \
    while(lNext != 0) { \
        lPrevious = lNext; \
        lNext = lNext-&gt;m_next; \
    } \
    \
    GListNodeO_##GPREFIX##_##GDATA* lNode = (GListNodeO_##GPREFIX##_##GDATA*)malloc(sizeof(GListNodeO_##GPREFIX##_##GDATA)); \
    lNode-&gt;m_data = data; \
    lNode-&gt;m_next = 0; \
    \
    if(lPrevious == 0) obj-&gt;m_head = lNode; \
    else lPrevious-&gt;m_next = lNode; \
}\
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les listes-Modification d'une donnée"><a class="Link9" href="#Programme sur les listes">Modification d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static void GList_SetData_##GPREFIX##_##GDATA(GListO_##GPREFIX##_##GDATA* obj, int index, GDATA data, GLIST_REMOVE_##GPREFIX##_##GDATA remove) { \
    GListNodeO_##GPREFIX##_##GDATA* lNext = obj-&gt;m_head; \
    int lIndex = 0; \
    \
    while(lNext != 0) { \
        if(lIndex == index) { \
            GDATA lData = lNext-&gt;m_data; \
            if(remove == 0) free(lData); \
            else remove(lData); \
            lNext-&gt;m_data = data; \
            return; \
        } \
        lNext = lNext-&gt;m_next; \
        lIndex++; \
    } \
    \
    \
}\</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les listes-Lecture d'une donnée"><a class="Link9" href="#Programme sur les listes">Lecture d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static GDATA GList_GetData_##GPREFIX##_##GDATA(GListO_##GPREFIX##_##GDATA* obj, int index) { \
    GListNodeO_##GPREFIX##_##GDATA* lNext = obj-&gt;m_head; \
    int lIndex = 0; \
    \
    while(lNext != 0) { \
        GDATA lData = lNext-&gt;m_data; \
        if(lIndex == index) return lData; \
        lNext = lNext-&gt;m_next; \
        lIndex++; \
    } \
    return 0; \
} \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les listes-Suppression d'une donnée"><a class="Link9" href="#Programme sur les listes">Suppression d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static void GList_RemoveIndex_##GPREFIX##_##GDATA(GListO_##GPREFIX##_##GDATA* obj, int index, GLIST_REMOVE_##GPREFIX##_##GDATA remove) { \
    GListNodeO_##GPREFIX##_##GDATA* lNext = obj-&gt;m_head; \
    GListNodeO_##GPREFIX##_##GDATA* lPrevious = 0; \
    int lIndex = 0; \
    \
    while(lNext != 0) { \
        if(lIndex == index) { \
            if(lPrevious == 0) obj-&gt;m_head = lNext-&gt;m_next; \
            else lPrevious-&gt;m_next = lNext-&gt;m_next; \
            GList_RemoveNode_##GPREFIX##_##GDATA(lNext, remove); \
            return; \
        } \
        lPrevious = lNext; \
        lNext = lNext-&gt;m_next; \
        lIndex++; \
    } \
} \
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les listes-Supperssion d'un nœud"><a class="Link9" href="#Programme sur les listes">Supperssion d'un nœud</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static void GList_RemoveNode_##GPREFIX##_##GDATA(GListNodeO_##GPREFIX##_##GDATA* node, GLIST_REMOVE_##GPREFIX##_##GDATA remove) { \
    GDATA lData = node-&gt;m_data; \
    if(remove == 0) free(lData); \
    else remove(lData); \
    free(node); \
} \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les listes-Taille des données"><a class="Link9" href="#Programme sur les listes">Taille des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static int GList_Size_##GPREFIX##_##GDATA(GListO_##GPREFIX##_##GDATA* obj) { \
    GListNodeO_##GPREFIX##_##GDATA* lNext = obj-&gt;m_head; \
    int lSize = 0; \
    \
    while(lNext != 0) { \
        lSize++; \
        lNext = lNext-&gt;m_next; \
    } \
    return lSize; \
} \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les listes-Affichage des données de la liste"><a class="Link9" href="#Programme sur les listes">Affichage des données de la liste</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static void GList_Show_##GPREFIX##_##GDATA(GListO_##GPREFIX##_##GDATA* obj, GLIST_SHOW_##GPREFIX##_##GDATA show) { \
    GListNodeO_##GPREFIX##_##GDATA* lNext = obj-&gt;m_head; \
    int lIndex = 0; \
    \
    while(lNext != 0) { \
        GDATA lData = lNext-&gt;m_data; \
        show(lIndex, lData); \
        lNext = lNext-&gt;m_next; \
        lIndex++; \
    } \
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les listes-Fonction de rappel d'affichage d'une donnée"><a class="Link9" href="#Programme sur les listes">Fonction de rappel d'affichage d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GList_ShowChar(int index, void* value) {
    printf("%20s", (char*)value);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les listes-Définition des macros"><a class="Link9" href="#Programme sur les listes">Définition des macros</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#define GList_New(GPREFIX, GDATA) \
        GList_New_##GPREFIX##_##GDATA
//===============================================
#define GListO(GPREFIX, GDATA) \
        GListO_##GPREFIX##_##GDATA
//===============================================
#define GListNodeO(GPREFIX, GDATA) \
        GListNodeO_##GPREFIX##_##GDATA
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les maps"><a class="Link3" href="#">Programme sur les maps</a></h1><div class="Body3">Le programme sur les maps permet de gérer une liste chainée de données au format clé-valeur de types quelconques.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590078347642"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590078347642");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les maps-Structure du noeud de données"><a class="Link9" href="#Programme sur les maps">Structure du noeud de données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">struct _GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE { \
    GKEY m_key; \
    GVALUE m_value; \
    GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE* m_next; \
}; \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les maps-Structure du map de données"><a class="Link9" href="#Programme sur les maps">Structure du map de données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">struct _GMapO_##GPREFIX##_##GKEY##_##GVALUE { \
    GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE* m_head; \
}; \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les maps-Ajout ou modification d'une donnée"><a class="Link9" href="#Programme sur les maps">Ajout ou modification d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static void GMap_SetData_##GPREFIX##_##GKEY##_##GVALUE(GMapO_##GPREFIX##_##GKEY##_##GVALUE* obj, GKEY key, GVALUE value, GMAP_EQUAL_KEY_##GPREFIX##_##GKEY##_##GVALUE equal) { \
    if(obj == 0) {printf("[ GMap ] Error Map None\n");  exit(0);} \
    GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE* lNext = obj-&gt;m_head; \
    GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE* lPrevious = 0; \
    \
    while(lNext != 0) { \
        GKEY lKey = lNext-&gt;m_key; \
        int lEqual = FALSE; \
        if(equal == 0) lEqual = (lKey == key) ? TRUE : FALSE; \
        else lEqual = equal(lKey, key); \
        if(lEqual == TRUE) { \
            free(lNext-&gt;m_value); \
            lNext-&gt;m_value = value; \
            return; \
        } \
        lPrevious = lNext; \
        lNext = lNext-&gt;m_next; \
    } \
    \
    GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE* lNode = (GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE*)malloc(sizeof(GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE)); \
    lNode-&gt;m_key = key; \
    lNode-&gt;m_value = value; \
    lNode-&gt;m_next = 0; \
    \
    if(lPrevious == 0) obj-&gt;m_head = lNode; \
    else lPrevious-&gt;m_next = lNode; \
}\</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les maps-Lecture d'une donnée"><a class="Link9" href="#Programme sur les maps">Lecture d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static GVALUE GMap_GetData_##GPREFIX##_##GKEY##_##GVALUE(GMapO_##GPREFIX##_##GKEY##_##GVALUE* obj, GKEY key, GMAP_EQUAL_KEY_##GPREFIX##_##GKEY##_##GVALUE equal) { \
    GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE* lNext = obj-&gt;m_head; \
    \
    while(lNext != 0) { \
        GKEY lKey = lNext-&gt;m_key; \
        GVALUE lValue = lNext-&gt;m_value; \
        int lEqual = FALSE; \
        if(equal == 0) lEqual = (lKey == key) ? TRUE : FALSE; \
        else lEqual = equal(lKey, key); \
        if(lEqual == TRUE) return lValue; \
        lNext = lNext-&gt;m_next; \
    } \
    return 0; \
} \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les maps-Taille des données"><a class="Link9" href="#Programme sur les maps">Taille des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static int GMap_Size_##GPREFIX##_##GKEY##_##GVALUE(GMapO_##GPREFIX##_##GKEY##_##GVALUE* obj) { \
    GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE* lNext = obj-&gt;m_head; \
    int lSize = 0; \
    \
    while(lNext != 0) { \
        lSize++; \
        lNext = lNext-&gt;m_next; \
    } \
    printf("[ GMap ] Size: %d\n", lSize); \
    return lSize; \
} \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les maps-Affichage des données"><a class="Link9" href="#Programme sur les maps">Affichage des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">static void GMap_Show_##GPREFIX##_##GKEY##_##GVALUE(GMapO_##GPREFIX##_##GKEY##_##GVALUE* obj, GMAP_EQUAL_##GPREFIX##_##GKEY##_##GVALUE show) { \
    GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE* lNext = obj-&gt;m_head; \
    \
    while(lNext != 0) { \
        GKEY lKey = lNext-&gt;m_key; \
        GVALUE lValue = lNext-&gt;m_value; \
        show(lKey, lValue); \
        lNext = lNext-&gt;m_next; \
    } \
}
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les maps-Fonction de rappel de comparaiton de données"><a class="Link9" href="#Programme sur les maps">Fonction de rappel de comparaiton de données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static int GMap_EqualChar(char* key1, char* key2) {
    int lStrcmp = strcmp(key1, key2);
    if(lStrcmp == 0) return TRUE;
    return FALSE;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les maps-Fonction de rappel d'affichage d'une donnée"><a class="Link9" href="#Programme sur les maps">Fonction de rappel d'affichage d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GMap_ShowChar(char* key, void* value) {
    printf("%s = %s\n", key, (char*)value);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les maps-Définition des macros"><a class="Link9" href="#Programme sur les maps">Définition des macros</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#define GMap_New(GPREFIX, GKEY, GVALUE) \
        GMap_New_##GPREFIX##_##GKEY##_##GVALUE
//===============================================
#define GMapO(GPREFIX, GKEY, GVALUE) \
        GMapO_##GPREFIX##_##GKEY##_##GVALUE
//===============================================
#define GMapNodeO(GPREFIX, GKEY, GVALUE) \
        GMapNodeO_##GPREFIX##_##GKEY##_##GVALUE
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les données de configuration"><a class="Link3" href="#">Programme sur les données de configuration</a></h1><div class="Body3">Le programme sur les données de configuration permet de manipuler un système de données stocké au format clé-valeur.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590083317181"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590083317181");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Résulat du programme sur les données de configuration"><a class="Link9" href="#Programme sur les données de configuration">Résulat du programme sur les données de configuration</a></h2><br><div class="Img3 GImage"><img src="img/config.png" alt="img/config.png"></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Ajout ou modification d'une donnée"><a class="Link9" href="#Programme sur les données de configuration">Ajout ou modification d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GConfig_SetData(char* key, char* value) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GMapO(GConfig, GCHAR_PTR, GVOID_PTR)* lDataMap = m_GConfigO-&gt;m_dataMap;
    lDataMap-&gt;SetData(lDataMap, key, value, GMap_EqualChar);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Lecture d'une donnée"><a class="Link9" href="#Programme sur les données de configuration">Lecture d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static char* GConfig_GetData(char* key) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GMapO(GConfig, GCHAR_PTR, GVOID_PTR)* lDataMap = m_GConfigO-&gt;m_dataMap;
    char* lValue = lDataMap-&gt;GetData(lDataMap, key, GMap_EqualChar);
    return lValue;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Suppression d'une donnée"><a class="Link9" href="#Programme sur les données de configuration">Suppression d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GConfig_Remove(char* key) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GMapO(GConfig, GCHAR_PTR, GVOID_PTR)* lDataMap = m_GConfigO-&gt;m_dataMap;
    lDataMap-&gt;Remove(lDataMap, key, GMap_EqualChar);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Taille des données"><a class="Link9" href="#Programme sur les données de configuration">Taille des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static int GConfig_Size() {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GMapO(GConfig, GCHAR_PTR, GVOID_PTR)* lDataMap = m_GConfigO-&gt;m_dataMap;
    return lDataMap-&gt;Size(lDataMap);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Affichage des données"><a class="Link9" href="#Programme sur les données de configuration">Affichage des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GConfig_Show() {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GMapO(GConfig, GCHAR_PTR, GVOID_PTR)* lDataMap = m_GConfigO-&gt;m_dataMap;
    lDataMap-&gt;Show(lDataMap, GMap_ShowChar);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les données CSV"><a class="Link3" href="#">Programme sur les données CSV</a></h1><div class="Body3">Le programme sur les données CSV permet de manipuler un système de données stocké au format CSV.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590083384831"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590083384831");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Résultat du programme sur les données CSV"><a class="Link9" href="#Programme sur les données CSV">Résultat du programme sur les données CSV</a></h2><br><div class="Img3 GImage"><img src="img/csv.png" alt="img/csv.png"></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Ajout d'une ligne de données"><a class="Link9" href="#Programme sur les données CSV">Ajout d'une ligne de données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GCsv_AddRow() {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GListO(GCsv, GVOID_PTR)* lDataMap = m_GCsvO-&gt;m_dataMap;
    m_GCsvO-&gt;m_listMap = GList_New(GCsv, GVOID_PTR)();
    lDataMap-&gt;AddData(lDataMap, m_GCsvO-&gt;m_listMap);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Ajout d'une données"><a class="Link9" href="#Programme sur les données CSV">Ajout d'une données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GCsv_AddData(char* value) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GListO(GCsv, GVOID_PTR)* lItemMap = m_GCsvO-&gt;m_listMap;
    lItemMap-&gt;AddData(lItemMap, value);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Modification d'une donnée"><a class="Link9" href="#Programme sur les données CSV">Modification d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GCsv_SetData(int row, int col, char* data) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GListO(GCsv, GVOID_PTR)* lDataMap = m_GCsvO-&gt;m_dataMap;
    GListO(GCsv, GVOID_PTR)* lItemMap = lDataMap-&gt;GetData(lDataMap, row);
    lItemMap-&gt;SetData(lItemMap, col, data, 0);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Lecture d'une donnée"><a class="Link9" href="#Programme sur les données CSV">Lecture d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static char* GCsv_GetData(int row, int col) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    int lWidth, lHeight;
    GCsv_Size(&lWidth, &lHeight);
    if(lWidth == 0 || lHeight == 0) return 0;
    GListO(GCsv, GVOID_PTR)* lDataMap = m_GCsvO-&gt;m_dataMap;
    GListO(GCsv, GVOID_PTR)* lItemMap = lDataMap-&gt;GetData(lDataMap, row);
    char* lData = lItemMap-&gt;GetData(lItemMap, col);
    return lData;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Suppression d'une ligne de données"><a class="Link9" href="#Programme sur les données CSV">Suppression d'une ligne de données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GCsv_Remove(int row) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GListO(GCsv, GVOID_PTR)* lDataMap = m_GCsvO-&gt;m_dataMap;
    GListO(GCsv, GVOID_PTR)* lItemMap = lDataMap-&gt;GetData(lDataMap, row);
    lItemMap-&gt;Clear(lItemMap, 0);
    lDataMap-&gt;RemoveIndex(lDataMap, row, 0);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Taille des données"><a class="Link9" href="#Programme sur les données CSV">Taille des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GCsv_Size(int* width, int* height) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GListO(GCsv, GVOID_PTR)* lDataMap = m_GCsvO-&gt;m_dataMap;
    *width = lDataMap-&gt;Size(lDataMap);
    *height = 0;
    if(*width != 0) {
        GListO(GCsv, GVOID_PTR)* lItemMap = lDataMap-&gt;GetData(lDataMap, 0);
        *height = lItemMap-&gt;Size(lItemMap);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Affichage des données"><a class="Link9" href="#Programme sur les données CSV">Affichage des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GCsv_Show() {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GListO(GCsv, GVOID_PTR)* lDataMap = m_GCsvO-&gt;m_dataMap;
    int lSize = lDataMap-&gt;Size(lDataMap);
    for(int i = 0; i &lt; lSize; i++) {
        GListO(GCsv, GVOID_PTR)* lItemMap = lDataMap-&gt;GetData(lDataMap, i);
        lItemMap-&gt;Show(lItemMap, GList_ShowChar);
        printf("\n");
    }
}
//===============================================</xmp></pre></div><br></div></div></div></div><br>