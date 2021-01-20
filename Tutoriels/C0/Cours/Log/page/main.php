<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un système de fichier log en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un système de fichier log en <b>C</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/b_cours_log.png" alt="/Tutoriels/C0/img/b_cours_log.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un système de fichier log en C"><a class="Link3" href="#">Créer un système de fichier log en C</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599254364774"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599254364774");</script></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Introduction"><a class="Link9" href="#Créer un système de fichier log en C">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un système de fichier log en C (GLog).<br><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Programme principal"><a class="Link9" href="#Créer un système de fichier log en C">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Accumulateur de messages"><a class="Link9" href="#Créer un système de fichier log en C">Accumulateur de messages</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Traçage d'un message"><a class="Link9" href="#Créer un système de fichier log en C">Traçage d'un message</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Traçage d'un séparateur"><a class="Link9" href="#Créer un système de fichier log en C">Traçage d'un séparateur</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GLog_Sep() {
    char lBuffer[256];
    for(int i = 0; i &lt; 50; i++) {
        sprintf(&lBuffer[i], "=");
    }
    GLog_Buffer(lBuffer);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Choix du flux de sortie"><a class="Link9" href="#Créer un système de fichier log en C">Choix du flux de sortie</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Fermeture du flux de sortie"><a class="Link9" href="#Créer un système de fichier log en C">Fermeture du flux de sortie</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GLog_Close(FILE* file) {
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;
    if(!strcmp(lApp-&gt;log_mode, "file")) {
        fclose(file);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Lecture de la date et l'heure"><a class="Link9" href="#Créer un système de fichier log en C">Lecture de la date et l'heure</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Traçage d'une structure complexe"><a class="Link9" href="#Créer un système de fichier log en C">Traçage d'une structure complexe</a></h2><br><h3 class="Title8 GTitle3">GLog.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Résultat"><a class="Link9" href="#Créer un système de fichier log en C">Résultat</a></h2><br><h3 class="Title8 GTitle3">Traçage dans un teminal</h3><br><div class="Img3 GImage"><img src="/tutoriels/C0/img/i_cours_log.png" alt="/tutoriels/C0/img/i_cours_log.png"></div><br><h3 class="Title8 GTitle3">Traçage dans un fichier</h3><br><div class="Img3 GImage"><img src="/tutoriels/C0/img/i_cours_log_02.png" alt="/tutoriels/C0/img/i_cours_log_02.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465340717"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1594465340717","C","basics");</script></div><br></div></div></div></div><br>