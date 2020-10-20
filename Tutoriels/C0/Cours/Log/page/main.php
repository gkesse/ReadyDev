<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un système de fichier log en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un système de fichier log en <b>C</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/b_cours_log.png" alt="/Tutoriels/C0/img/b_cours_log.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un système de fichier log en C"><a class="Link3" href="#">Créer un système de fichier log en C</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599254364774"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599254364774");</script></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Introduction"><a class="Link9" href="#Créer un système de fichier log en C">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un système de fichier log.<br><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Programme principal"><a class="Link9" href="#Créer un système de fichier log en C">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">GManager()-&gt;Trace(3, "[info] main()", 0);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Traçage de message"><a class="Link9" href="#Créer un système de fichier log en C">Traçage de message</a></h2><br><h3 class="Title8 GTitle3">GManager.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GManager_Trace(int key, ...) {
    sGApp* lApp = GManager()-&gt;m_mgr-&gt;app;
    if(lApp-&gt;trace_on == 0) return;
    char lBuffer[B_TRACE_MSG+1];
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
            GTRACE_FUNC onLogFunc = (GTRACE_FUNC)va_arg(lArgs, void*);
            void* lObj = va_arg(lArgs, void*);
            lIndex += onLogFunc(lBuffer, lIndex, lObj);
        }
        lType = va_arg(lArgs, int);
    }
    va_end(lArgs);
    // write
    if(!strcmp(lApp-&gt;trace_mode, "file")) GManager_TraceFile(lBuffer);
    else if(!strcmp(lApp-&gt;trace_mode, "stdout")) GManager_TraceTerminal(lBuffer);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Traçage de message dans un terminal"><a class="Link9" href="#Créer un système de fichier log en C">Traçage de message dans un terminal</a></h2><br><h3 class="Title8 GTitle3">GManager.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GManager_TraceTerminal(char* data) {
    sGApp* lApp = GManager()-&gt;m_mgr-&gt;app;
    int lCount = GManager_SplitCount(data, "\n");
    char lData[B_STRING+1];
    char lFormat[B_STRING+1];
    char lDate[B_STRING+1];
    
    GManager_Date(lDate);

    for(int i = 0; i &lt; lCount; i++) {
        GManager_SplitGet(data, lData, "\n", i);
        if(lApp-&gt;date_on == 1) sprintf(lFormat, "%s | %s", lDate, lData);
        else sprintf(lFormat, "%s", lData);
        fprintf(stdout, "%s\n", lFormat);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Traçage de message dans un fichier log"><a class="Link9" href="#Créer un système de fichier log en C">Traçage de message dans un fichier log</a></h2><br><h3 class="Title8 GTitle3">GManager.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GManager_TraceFile(char* data) {
    sGApp* lApp = GManager()-&gt;m_mgr-&gt;app;
    int lCount = GManager_SplitCount(data, "\n");
    char lData[B_STRING+1];
    char lFormat[B_STRING+1];
    char lDate[B_STRING+1];
    
    GManager_Date(lDate);

    FILE* lpFile = fopen(lApp-&gt;trace_file , "a+");
    for(int i = 0; i &lt; lCount; i++) {
        GManager_SplitGet(data, lData, "\n", i);
        if(lApp-&gt;date_on == 1) sprintf(lFormat, "%s | %s", lDate, lData);
        else sprintf(lFormat, "%s", lData);
        fprintf(lpFile, "%s\n", lFormat);
    }
    fclose(lpFile);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Fonction de rappel de traçage d'une structure"><a class="Link9" href="#Créer un système de fichier log en C">Fonction de rappel de traçage d'une structure</a></h2><br><h3 class="Title8 GTitle3">GManager.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
typedef int (*GTRACE_FUNC)(char* buffer, int index, void* obj);
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Résultat"><a class="Link9" href="#Créer un système de fichier log en C">Résultat</a></h2><br><div class="Img3 GImage"><img src="/tutoriels/C0/img/i_cours_log.png" alt="/tutoriels/C0/img/i_cours_log.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465340717"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1594465340717","C","basics");</script></div><br></div></div></div></div><br>