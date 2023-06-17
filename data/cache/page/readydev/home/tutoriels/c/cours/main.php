<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#c">C</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/c/cours">Cours</a>
</div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre à programmer en C</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programmer en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#programme-principal">Programme principal</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#compilation">Compilation</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#standards-c11">Standards C11</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#debogage">Débogage</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#fonctions">Fonctions</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#fonctions-a-nombre-variable-d-arguments">Fonctions à nombre variable d'arguments</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#conditions">Conditions</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#boucle-for">Boucle For</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#boucle-while">Boucle While</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#arguments-en-ligne-de-commande">Arguments en ligne de commande</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#allocation-dynamique-de-memoire">Allocation dynamique de mémoire</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#multithreading">Multithreading</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#definition-d-un-type">Définition d'un type</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#structure">Structure</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#notion-de-classe">Notion de classe</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>C</b> est un langage procédural impératif, prenant en charge la programmation structurée, la portée des variables lexicales et la récursivité, avec un système de type statique. Il a été conçu pour être compilé afin de fournir un accès de bas niveau à la mémoire et aux constructions de langage qui correspondent efficacement aux instructions machine, le tout avec une prise en charge minimale de l'exécution. Malgré ses capacités de bas niveau, le langage a été conçu pour encourager la programmation multiplateforme. Un programme C conforme aux standards écrit avec portabilité à l'esprit peut être compilé pour une grande variété de plates-formes informatiques et de systèmes d'exploitation avec peu de changements à son code source.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="programme-principal">Programme principal</a>
</h1>
<div class="Section6"><br>La fonction (main) est le point d'entrée d'un programme C.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int main(int _argc, char** _argv) {
    GProcess* lProcess = GProcess_new();
    lProcess-&gt;init(lProcess);
    lProcess-&gt;run(lProcess, _argc, _argv);
    lProcess-&gt;clean(lProcess);
    lProcess-&gt;delete(lProcess);
    return 0;
}
//===============================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="compilation">Compilation</a>
</h1>
<div class="Section6"><br>L'utilitaire (gcc) permet de compiler un programme C.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
gcc -c main.c -o main.o
gcc -o rdv_c.exe main.o
rdv_c.exe
::===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="standards-c11">Standards C11</a>
</h1>
<div class="Section6"><br>Les standards (c11) apportent plus de fonctionnalités lors de la programmation en C.<br><br>Ils s'activent au moment de la compilation.<br><br>Activer les standards (gnu11) sous (gcc).<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
gcc -std=gnu11 -c main.c -o main.o
gcc -std=gnu11 -o rdv_c.exe main.o
rdv_c.exe
::===============================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="debogage">Débogage</a>
</h1>
<div class="Section6"><br>L'utilitaire (gdb) permet de déboguer un programme C.<br><br>Il s'active au moment de la compilation.<br>On parle de compilation en mode (debug), s'il est activé, pour un projet en cours de développement.<br>Sinon, on parle de compilation en mode (release), s'il est désactivé, pour un projet en cours de livraison.<br><br>Activer le débogueur sous (gcc).<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
gcc -g -std=gnu11 -c main.c -o main.o
gcc -g -std=gnu11 -o rdv_c.exe main.o
gdb -ex run --args rdv_c.exe test string
::===============================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="fonctions">Fonctions</a>
</h1>
<div class="Section6"><br>Une fonction en C peut ne pas retourner un résultat.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GFunctions_delete() {
    free(gFunctions_Buffer);
}
//===============================================</pre><br>Une fonction en C peut retourner un résultat.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
const char* sformat(const char* _format, ...) {
    va_list lArgs;
    va_start(lArgs, _format);
    int lSize = vsnprintf(0, 0, _format, lArgs);
    char* lBuffer = (char*)malloc(sizeof(char)*(lSize + 1));
    vsnprintf(lBuffer, lSize + 1, _format, lArgs);
    va_end(lArgs);
    free(gFunctions_Buffer);
    gFunctions_Buffer = lBuffer;
    return lBuffer;
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="fonctions-a-nombre-variable-d-arguments">Fonctions à nombre variable d'arguments</a>
</h1>
<div class="Section6"><br>L'opérateur (...) permet à une fonction de recevoir un nombre variable d'arguments.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
const char* sformat(const char* _format, ...) {
    va_list lArgs;
    va_start(lArgs, _format);
    int lSize = vsnprintf(0, 0, _format, lArgs);
    char* lBuffer = (char*)malloc(sizeof(char)*(lSize + 1));
    vsnprintf(lBuffer, lSize + 1, _format, lArgs);
    va_end(lArgs);
    free(gFunctions_Buffer);
    gFunctions_Buffer = lBuffer;
    return lBuffer;
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><pre class="GCode1 Code1 AceCode" data-mode="txt" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">_fomat ---&gt; argument de référence</pre><br>La macro (va_start) permet d'alimenter un structure (va_list) correspondant à la liste des arguments à partir d'un argument de référence selon votre choix (_format).<br><br>La macro (va_end) permet de libérer les mémoires allouées dynamiquement lors du parcours de la liste d'arguments.<br><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="conditions">Conditions</a>
</h1>
<div class="Section6"><br>L'opérateur (if) permet de réaliser une condition (Si).<br>L'opérateur (lelse if) permet de réaliser une condition (Sinon Si).<br>L'opérateur (else) permet de réaliser une condition (Sinon).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_run(GProcess* _this, int _argc, char** _argv) {
    assert(_this);
    GLog* lLog = _this-&gt;m_obj-&gt;m_logs;
    const char* lModule = "";
    if(_argc &gt; 1) lModule = _argv[1];

    if(!strcmp(lModule, "")) {
        lLog-&gt;addError(lLog, "Le module est obligatoire.");
    }
    else if(!strcmp(lModule, "test")) {
        _this-&gt;runTest(_this, _argc, _argv);
    }
    else if(!strcmp(lModule, "server")) {
        _this-&gt;runServer(_this, _argc, _argv);
    }
    else {
        lLog-&gt;addError(lLog, "Le module est inconnu.");
    }

    lLog-&gt;showLogsX(lLog);
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="boucle-for">Boucle For</a>
</h1>
<div class="Section6"><br>L'opérateur (for) permet de réaliser une boucle (Pour Tout).&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GLog_showLogs(GLog* _this) {
    assert(_this);
    GVector* lMap = _this-&gt;m_map;
    for(int i = 0; i &lt; lMap-&gt;size(lMap); i++) {
        GLog* lObj = lMap-&gt;get(lMap, i);
        if(strcmp(lObj-&gt;m_type, "log")) continue;
        printf("[%-5s] : %s\n", lObj-&gt;m_type, lObj-&gt;m_msg);
    }
}
//===============================================</pre><br>De manière générale, l'opérateur (break) permet de casser une boucle.<br>Alors que l'opérateur (continue) permet de continuer la boucle.<br><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="boucle-while">Boucle While</a>
</h1>
<div class="Section6"><br>L'opérateur (while) permet de réaliser une boucle (Tant Que).&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GSocket_send(GSocket* _this, const char* _data) {
    assert(_this);
    SOCKET lSocket = _this-&gt;m_socket;
    int lIndex = 0;
    const char* lBuffer = _data;
    int lSize = strlen(_data);
    while(1) {
        int lBytes = send(lSocket, &amp;lBuffer[lIndex], lSize - lIndex, 0);
        if(lBytes == SOCKET_ERROR) break;
        lIndex += lBytes;
        if(lIndex &gt;= lSize) break;
    }
}
//===============================================</pre><br>De manière générale, l'opérateur (break) permet de casser une boucle.<br>Alors que l'opérateur (continue) permet de continuer la boucle.<br><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="arguments-en-ligne-de-commande">Arguments en ligne de commande</a>
</h1>
<div class="Section6"><br>La variable (_argc) contient le nombre d'arguments passés en ligne de commande.<br>La variable (_argv) contient la liste d'arguments passés en ligne de commande.<br><br>L'opération (_argv[i]) récupère la valeur d'un argument à la position (i).<br>L'argument à la position (0) correspond au nom du fichier exécutable.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_run(GProcess* _this, int _argc, char** _argv) {
    assert(_this);
    GLog* lLog = _this-&gt;m_obj-&gt;m_logs;
    const char* lModule = "";
    if(_argc &gt; 1) lModule = _argv[1];

    if(!strcmp(lModule, "")) {
        lLog-&gt;addError(lLog, "Le module est obligatoire.");
    }
    else if(!strcmp(lModule, "test")) {
        _this-&gt;runTest(_this, _argc, _argv);
    }
    else if(!strcmp(lModule, "server")) {
        _this-&gt;runServer(_this, _argc, _argv);
    }
    else {
        lLog-&gt;addError(lLog, "Le module est inconnu.");
    }

    lLog-&gt;showLogsX(lLog);
}
//===============================================</pre><br>Passer des arguments en ligne de commande.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">rdv_c.exe test string</pre><br><pre class="GCode1 Code1 AceCode" data-mode="txt" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">_argv[0] -&gt; rdv_cpp.exe
_argv[1] -&gt; test
_argv[2] -&gt; string</pre><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="allocation-dynamique-de-memoire">Allocation dynamique de mémoire</a>
</h1>
<div class="Section6"><br>La fonction (malloc) permet de réserver dynamiquement de la mémoire sur le tas.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
const char* sformat(const char* _format, ...) {
    va_list lArgs;
    va_start(lArgs, _format);
    int lSize = vsnprintf(0, 0, _format, lArgs);
    char* lBuffer = (char*)malloc(sizeof(char)*(lSize + 1));
    vsnprintf(lBuffer, lSize + 1, _format, lArgs);
    va_end(lArgs);
    free(gFunctions_Buffer);
    gFunctions_Buffer = lBuffer;
    return lBuffer;
}
//===============================================</pre><br>La fonction (free) permet de libérer une mémoire réservée dynamiquement sur le tas.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GFunctions_delete() {
    free(gFunctions_Buffer);
}
//===============================================</pre><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="multithreading">Multithreading</a>
</h1>
<div class="Section6"><br>La fonction (CreateThread) permet de créer un Thread et de le lancer sous (Windows).&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GSocket_runServer(GSocket* _this, int _argc, char** _argv) {
    assert(_this);
    while(1) {
        GSocket* lClient = GSocket_new();
        lClient-&gt;m_socket = accept(lServer, (struct sockaddr*)&amp;lAddressC, &amp;lAddressCL);

        DWORD lThreadId;
        HANDLE lThreadH = CreateThread(
                NULL,
                0,
                GSocket_onThread,
                lClient,
                0,
                &amp;lThreadId
        );

        if(!lThreadH) {
            printf("La création du thread a échoué\n");
        }
    }
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><pre class="GCode1 Code1 AceCode" data-mode="txt" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">lThreadH ----------&gt; gestionnaire du Thread
lThreadId ---------&gt; identifiant du Thread
GSocket_onThread --&gt; fonction de rappel du Thread
lClient -----------&gt; paramètre de la fonction de rappel du Thread</pre><br>Fonction de rappel du Thread sous (Windows):<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static DWORD WINAPI GSocket_onThread(LPVOID _params) {
    GSocket* lClient = (GSocket*)_params;
    GServer* lServer = GServer_new();
    GString* lRequest = GString_new();

    lClient-&gt;read(lClient, lRequest);
    lServer-&gt;run(lServer, lRequest-&gt;m_data);
    lServer-&gt;send(lServer, lClient);

    closesocket(lClient-&gt;m_socket);
    lRequest-&gt;delete(lRequest);
    lServer-&gt;delete(lServer);
    lClient-&gt;delete(lClient);
    return 0;
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="definition-d-un-type">Définition d'un type</a>
</h1>
<div class="Section6"><br>L'opérateur (typedef) permet de définir un type.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GCalculator GCalculator;
//===============================================
struct _GCalculator {
    GManager* m_mgr;
    GObject* m_obj;
    GString* m_expression;
    GString* m_result;
};
//===============================================
</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="structure">Structure</a>
</h1>
<div class="Section6"><br>L'opérateur (struct) permet de définir une structure.<br><br>Une structure peut contenir des attributs.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GCalculator GCalculator;
//===============================================
struct _GCalculator {
    GManager* m_mgr;
    GObject* m_obj;
    GString* m_expression;
    GString* m_result;
};
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="notion-de-classe">Notion de classe</a>
</h1>
<div class="Section6"><br>L'opérateur (struct) permet d'introduire la notion de classe en C.<br><br>Une classe peut contenir des attributs et des pointeurs de fonction.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GCalculator GCalculator;
//===============================================
struct _GCalculator {
    GManager* m_mgr;
    GObject* m_obj;
    GString* m_expression;
    GString* m_result;

    void (*delete)(GCalculator* _this);
    void (*run)(GCalculator* _this, const char* _data);
    void (*onRunCalculator)(GCalculator* _this, const char* _data);
};
//===============================================
GCalculator* GCalculator_new();
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les méthodes sont représentées par les pointeurs de fonction.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'objet (this) est représenté par le premier argument de chaque méthode.&nbsp;</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="txt" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">méthodes -------&gt; pointeurs de fonction.
objet (this) ---&gt; premier argument de chaque méthode.<br></pre><br>Une classe peut posséder un constructeur.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GCalculator* GCalculator_new() {
    GCalculator* lObj = (GCalculator*)malloc(sizeof(GCalculator));
    lObj-&gt;m_mgr = GManager_new();
    lObj-&gt;m_obj = GObject_new();
    lObj-&gt;m_expression = GString_new();
    lObj-&gt;m_result = GString_new();

    lObj-&gt;delete = GCalculator_delete;
    lObj-&gt;run = GCalculator_run;
    lObj-&gt;onRunCalculator = GCalculator_onRunCalculator;

    lObj-&gt;m_obj-&gt;clone = GCalculator_clone;
    lObj-&gt;m_obj-&gt;serialize = GCalculator_serialize;
    lObj-&gt;m_obj-&gt;deserialize = GCalculator_deserialize;
    lObj-&gt;m_obj-&gt;m_child = lObj;
    return lObj;
}
//===============================================</pre><br>Une classe peut posséder un destructeur.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GCalculator_delete(GCalculator* _this) {
    assert(_this);
    _this-&gt;m_mgr-&gt;delete(_this-&gt;m_mgr);
    _this-&gt;m_obj-&gt;delete(_this-&gt;m_obj);
    _this-&gt;m_expression-&gt;delete(_this-&gt;m_expression);
    _this-&gt;m_result-&gt;delete(_this-&gt;m_result);
    free(_this);
}
//===============================================</pre><br>Une classe peut posséder des méthodes.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GCalculator_onRunCalculator(GCalculator* _this, const char* _data) {
    assert(_this);
    GLog* lLog = _this-&gt;m_obj-&gt;m_logs;

    if(!strcmp(_this-&gt;m_expression-&gt;m_data, "")) {
        lLog-&gt;addError(lLog, "L'expression est vide.");
        return;
    }

    double lResult = te_interp(_this-&gt;m_expression-&gt;m_data, 0);
    _this-&gt;m_result-&gt;format(_this-&gt;m_result, "%.2f", lResult);
}
//===============================================</pre><br></div></div></div></div><br>