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
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#notion-d-heritage-de-classe">Notion d'héritage de classe</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#notion-de-polymorphisme">Notion de polymorphisme</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>C</b> est un langage procédural impératif, prenant en charge la programmation structurée, la portée des variables lexicales et la récursivité, avec un système de type statique. Il a été conçu pour être compilé afin de fournir un accès de bas niveau à la mémoire et aux constructions de langage qui correspondent efficacement aux instructions machine, le tout avec une prise en charge minimale de l'exécution. Malgré ses capacités de bas niveau, le langage a été conçu pour encourager la programmation multiplateforme. Un programme C conforme aux standards écrit avec portabilité à l'esprit peut être compilé pour une grande variété de plates-formes informatiques et de systèmes d'exploitation avec peu de changements à son code source.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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sAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAj7Cxnlexu7XboOAAAAAElFTkSuQmCC"></div><br></div>
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
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">_fomat ---&gt; argument de référence</pre><br>La macro (va_start) permet d'alimenter un structure (va_list) correspondant à la liste des arguments à partir d'un argument de référence selon votre choix (_format).<br><br>La macro (va_end) permet de libérer les mémoires allouées dynamiquement lors du parcours de la liste d'arguments.<br><br></div></div></div></div><br><div class="GSection1 Section1">
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
//===============================================</pre><br>Passer des arguments en ligne de commande.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">rdv_c.exe test string</pre><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">_argv[0] -&gt; rdv_cpp.exe
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
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">lThreadH ----------&gt; gestionnaire du Thread
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
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">méthodes -------&gt; pointeurs de fonction.
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
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="notion-d-heritage-de-classe">Notion d'héritage de classe</a>
</h1>
<div class="Section6"><br>L'opérateur (void*) permet d'introduire la notion d'héritage de classe en C.<br><br>Classe mère:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GObject GObject;
//===============================================
struct _GObject {
    GLog* m_logs;
    GCode* m_resp;
    GVector* m_map;
    void* m_child;

    void (*delete)(GObject* _this);
    void (*clear)(GObject* _this);
    GObject* (*clone)(GObject* _this);
    GString* (*serialize)(GObject* _this);
    void (*deserialize)(GObject* _this, const char* _data);
    void (*print)(GObject* _this);
};
//===============================================
GObject* GObject_new();
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'opérateur (void*) peut pointer tout type d'objet en C.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La classe mère utilisera l'opérateur (void*) pour les classes fille.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Chaque classe fille connaît par avance le type de sa classe mère (pointeur explicite).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">opérateur (void*) ---&gt; pointeur de tout type d'objet
void* m_child -------&gt; pointeur de la classe fille</pre><br>classe fille:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
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
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="notion-de-polymorphisme">Notion de polymorphisme</a>
</h1>
<div class="Section6"><br>Les pointeurs de fonction permettent d'introduire la notion de polymorphisme en C.<br><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La classe mère doit pointer les fonctions polymorphes de la classe fille.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les fonctions polymorphes de la classe mère doivent posséder les mêmes signatures que celles de la classe fille.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Chaque classe fille implémentera sa propre stratégie (définition).</div>
</div><br>Classe mère:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GObject GObject;
//===============================================
struct _GObject {
    GLog* m_logs;
    GCode* m_resp;
    GVector* m_map;
    void* m_child;

    void (*delete)(GObject* _this);
    void (*clear)(GObject* _this);
    GObject* (*clone)(GObject* _this);
    GString* (*serialize)(GObject* _this);
    void (*deserialize)(GObject* _this, const char* _data);
    void (*print)(GObject* _this);
};
//===============================================
GObject* GObject_new();
//===============================================</pre><br>Classe fille:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
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
//===============================================</pre><br>Constructeur de la classe mère:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GObject* GObject_new() {
    GObject* lObj = (GObject*)malloc(sizeof(GObject));
    lObj-&gt;m_logs = GLog_new();
    lObj-&gt;m_resp = GCode_new();
    lObj-&gt;m_resp-&gt;m_dom-&gt;createDoc(lObj-&gt;m_resp-&gt;m_dom);
    lObj-&gt;m_resp-&gt;createDatas(lObj-&gt;m_resp);
    lObj-&gt;m_map = GVector_new();
    lObj-&gt;m_child = 0;

    lObj-&gt;delete = GObject_delete;
    lObj-&gt;clear = GObject_clear;
    lObj-&gt;clone = GObject_clone;
    lObj-&gt;serialize = GObject_serialize;
    lObj-&gt;deserialize = GObject_deserialize;
    lObj-&gt;print = GObject_print;
    return lObj;
}
//===============================================</pre><br>Constructeur de la classe fille:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
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
//===============================================</pre><br>Signatures des fonctions polymorphes de la classe mère:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">static GObject* GObject_clone(GObject* _this);
static GString* GObject_serialize(GObject* _this);
static void GObject_deserialize(GObject* _this, const char* _data);</pre><br>Signatures des fonctions polymorphes de la classe fille:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">static GObject* GCalculator_clone(GObject* _this);
static GString* GCalculator_serialize(GObject* _this);
static void GCalculator_deserialize(GObject* _this, const char* _data);</pre><br></div>
</div>
</div>
</div><br>