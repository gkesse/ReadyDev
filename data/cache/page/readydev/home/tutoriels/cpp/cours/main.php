<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/cours">Cours</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre à programmer en C++</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programmer en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
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
<a class="Summary3" href="#standards-c--11">Standards C++11</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#debogage">Débogage</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#bibliotheque-statique">Bibliothèque statique</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#bibliotheque-dynamique">Bibliothèque dynamique</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#arguments-en-ligne-de-commande">Arguments en ligne de commande</a>
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
<a class="Summary3" href="#traitements-asynchrones--multithreading-">Traitements asynchrones (Multithreading)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#communication-reseau--socket-">Communication réseau (socket)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#communication-reseau-securisee--openssl-">Communication réseau sécurisée (OpenSSL)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#format-de-donnees-xml--libxml2-">Format de données XML (LibXML2)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#expressions-mathematiques--tinyexpr-">Expressions mathématiques (TinyExpr)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#base-de-donnees--sql-">Base de données (SQL)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#classe">Classe</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#heritage-de-classe">Héritage de classe</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#polymorphisme-de-classe">Polymorphisme de classe</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#transtypage--cast-">Transtypage (Cast)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#git">Git</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#cmake">CMake</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#systemd">Systemd</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#openssl">OpenSSL</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#shell">Shell</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#freebox">FreeBox</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#google">Google</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>C++</b>&nbsp;est un langage de programmation généraliste de haut niveau. Sorti pour la première fois en tant qu'extension du langage de programmation C, il s'est depuis considérablement développé au fil du temps. Le C++ moderne possède actuellement des fonctionnalités orientées objet, génériques et fonctionnelles, en plus des fonctionnalités de manipulation de mémoire de bas niveau. Il est presque toujours implémenté en tant que langage compilé et de nombreux fournisseurs proposent des compilateurs C++, notamment la Free Software Foundation, LLVM, Microsoft, Intel, Embarcadero, Oracle et IBM. C ++ a été conçu avec la programmation de systèmes et les logiciels embarqués à ressources limitées et les grands systèmes à l'esprit, avec des performances, une efficacité et une flexibilité d'utilisation comme points forts de sa conception. C++ s'est également avéré utile dans de nombreux autres contextes, les principaux atouts étant l'infrastructure logicielle et les applications à ressources limitées, y compris les applications de bureau , les jeux vidéo , les serveurs (par exemple, le commerce électronique, la recherche sur le Web ou les bases de données), et les applications critiques en termes de performances (par exemple, les commutateurs téléphoniques ou les sondes spatiales). C++ est normalisé par l' Organisation internationale de normalisation (ISO).<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="programme-principal">Programme principal</a>
</h1>
<div class="Section6"><br>La fonction (main) est le point d'entrée d'un programme C++.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int main(int _argc, char** _argv) {
    GProcess lProcess;
    lProcess.init();
    lProcess.run(_argc, _argv);
    lProcess.getLogs().print();
    lProcess.clean();
    return 0;
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="compilation">Compilation</a>
</h1>
<div class="Section6"><br>L'utilitaire (g++) permet de compiler un programme C++.<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
g++ -c main.cpp -o main.o
g++ -o rdv_cpp.exe main.o
rdv_cpp.exe
::===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="standards-c--11">Standards C++11</a>
</h1>
<div class="Section6"><br>Les standards (c++11) apportent plus de fonctionnalités lors de la programmation en C++.<br><br>Ils introduisent le concept du C++ moderne.<br>Ils s'activent au moment de la compilation.<br><br>Activer les standards (gnu++11) sous (g++).<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
g++ -std=gnu++11 -c main.cpp -o main.o
g++ -std=gnu++11 -o rdv_cpp.exe main.o
rdv_cpp.exe
::===============================================</pre><br>Activer les standards (gnu++11) sous Qt avec MinGW.<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">CONFIG += gnu++11</pre><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="debogage">Débogage</a>
</h1>
<div class="Section6"><br>L'utilitaire (gdb) permet de déboguer un programme C++.<br><br>Il s'active au moment de la compilation.<br>On parle de compilation en mode (debug), s'il est activé, pour un projet en cours de développement.<br>Sinon, on parle de compilation en mode (release), s'il est désactivé, pour un projet en cours de livraison.<br><br>Activer le débogueur sous (g++).<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
g++ -g -std=gnu++11 -c main.cpp -o main.o
g++ -g -std=gnu++11 -o rdv_cpp.exe main.o
gdb -ex run --args rdv_cpp.exe test string
::===============================================</pre><br>Activer le débogueur sous Qt avec MinGW.<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">CONFIG += debug gnu++11</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="bibliotheque-statique">Bibliothèque statique</a>
</h1>
<div class="Section6"><br>La commande (gcc) permet de générer des bibliothèques statiques.<br><br>Génération des fichiers objet.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">gcc -c tinyexpr.c -o tinyexpr.o</pre><br>Génération de la bibliothèque statique.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">ar rcs libtinyexpr.a tinyexpr.o</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="bibliotheque-dynamique">Bibliothèque dynamique</a>
</h1>
<div class="Section6"><br>La commande (gcc) permet de générer des bibliothèques dynamiques.<br><br>Génération des fichiers objet.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">gcc -c -fPIC tinyexpr.c -o tinyexpr.o</pre><br>Génération de la bibliothèque dynamique.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">gcc -shared -o libtinyexpr.so tinyexpr.o</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="arguments-en-ligne-de-commande">Arguments en ligne de commande</a>
</h1>
<div class="Section6"><br>La variable (_argc) contient le nombre d'arguments passés en ligne de commande.<br>La variable (_argv) contient la liste d'arguments passés en ligne de commande.<br><br>L'opération (_argv[i]) récupère la valeur d'un argument à la position (i).<br>L'argument à la position (0) correspond au nom du fichier exécutable.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GProcess::run(int _argc, char** _argv) {
    GString lModule = "";
    if(_argc &gt; 1) lModule = _argv[1];

    if(lModule == "") {
        m_logs.addError("Le module est obligatoire.");
    }
    else if(lModule == "test") {
        runTest(_argc, _argv);
    }
    else if(lModule == "client") {
        runClient(_argc, _argv);
    }
    else {
        m_logs.addError("Le module est inconnu.");
    }
}
//===============================================</pre><br>Passer des arguments en ligne de commande.<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">rdv_cpp.exe test string</pre><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">_argv[0] -&gt; rdv_cpp.exe
_argv[1] -&gt; test
_argv[2] -&gt; string</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="conditions">Conditions</a>
</h1>
<div class="Section6"><br>L'opérateur (if) permet de réaliser une condition (Si).<br>L'opérateur (lelse if) permet de réaliser une condition (Sinon Si).<br>L'opérateur (else) permet de réaliser une condition (Sinon).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GProcess::run(int _argc, char** _argv) {
    GString lModule = "";
    if(_argc &gt; 1) lModule = _argv[1];

    if(lModule == "") {
        m_logs.addError("Le module est obligatoire.");
    }
    else if(lModule == "test") {
        runTest(_argc, _argv);
    }
    else if(lModule == "client") {
        runClient(_argc, _argv);
    }
    else {
        m_logs.addError("Le module est inconnu.");
    }
}
//===============================================</pre><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="boucle-for">Boucle For</a>
</h1>
<div class="Section6"><br>L'opérateur (for) permet de réaliser une boucle (Pour Tout).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GLog::print() const {
    for(int i = 0; i &lt; size(); i++) {
        GLog* lObj = m_map[i];
        printf("[%-5s] : %s\n", lObj-&gt;m_type.c_str(), lObj-&gt;m_msg.c_str());
    }
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">De manière générale, l'opérateur (break) permet de casser une boucle.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Alors que l'opérateur (continue) permet de continuer la boucle.</div>
</div><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="boucle-while">Boucle While</a>
</h1>
<div class="Section6"><br>L'opérateur (while) permet de réaliser une boucle (Tant Que).&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSocket::sendData(const GString&amp; _data) {
    int lIndex = 0;
    const char* lBuffer = _data.c_str();
    int lSize = _data.size();
    while(1) {
        int lBytes = send(m_socket, &amp;lBuffer[lIndex], lSize - lIndex, 0);
        if(lBytes == SOCKET_ERROR) break;
        lIndex += lBytes;
        if(lIndex &gt;= lSize) break;
    }
}
//===============================================</pre><br>Ce qu'il faut savoir:<br>&nbsp;<br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">De manière générale, l'opérateur (break) permet de casser une boucle.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Alors que l'opérateur (continue) permet de continuer la boucle.</div>
</div>&nbsp;<br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="traitements-asynchrones--multithreading-">Traitements asynchrones (Multithreading)</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#traitements-asynchrones--multithreading-_sous-windows">Sous Windows</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#traitements-asynchrones--multithreading-_race-condition">Race condition</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#traitements-asynchrones--multithreading-_deadlock">Deadlock</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" href="#traitements-asynchrones--multithreading-" id="traitements-asynchrones--multithreading-_sous-windows">Sous Windows</a>
</h2><br>La fonction (CreateThread) permet de créer un Thread et de le lancer sous (Windows).&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSocket::runServer() {
    while(1) {
        GSocket* lClient = new GSocket;
        lClient-&gt;m_socket = accept(lServer, (struct sockaddr*)&amp;lAddressC, &amp;lAddressCL);

        DWORD lThreadId;
        HANDLE lThreadH = CreateThread(
                NULL,
                0,
                onThread,
                lClient,
                0,
                &amp;lThreadId
        );
    }
}
//===============================================</pre><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">lThreadH --&gt; gestionnaire du Thread
lThreadId -&gt; identifiant du Thread
onThread --&gt; fonction de rappel du Thread
lClient ---&gt; paramètre de la fonction de rappel du Thread</pre><br>Fonction de rappel du Thread sous (Windows).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
DWORD WINAPI GSocket::onThread(LPVOID _params) {
    GSocket* lClient = (GSocket*)_params;
    GString lData = lClient-&gt;readData();
    GServer lServer;
    lServer.run(lData);
    lServer.sendResponse(lClient);
    closesocket(lClient-&gt;m_socket);
    delete lClient;
    return 0;
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="traitements-asynchrones--multithreading-_race-condition" href="#traitements-asynchrones--multithreading-">Race condition</a>
</h2><br>Race condition est une situation dans laquelle 2 threads essayent d'accéder simultanément à une variable partagée qui n'est pas protégée par un mutex, ce qui conduit à des résultats indésirables.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="traitements-asynchrones--multithreading-_deadlock" href="#traitements-asynchrones--multithreading-">Deadlock</a>
</h2><br>Deadlock est une situation d'interblocage dans laquelle 2 threads restent bloqués mutuellement parce qu'ils attendent que l'un d'entre eux déverrouille une variable verrouillée par l'autre.<br><br>- Le thread T1 verrouille la variable V1 pour l'utiliser.<br>- Le thread T2 verrouille la variable V2 pour l'utiliser.<br>- Le thread T2 veut utiliser la variable V1 qui est déjà verrouillée par le thread T1.<br>- Le thread T2 attend que le thread T1 libère la variable V1.<br>- Le thread T1 veut utiliser la variable V2 qui est déjà verrouillée par le thread T2.<br>- Le thread T1 attend que le thread T2 libère la variable V2.<br>- Les threads T1 et T2 restent bloqués mutuellement (Deadlock)<br>&nbsp;<br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="communication-reseau--socket-">Communication réseau (socket)</a>
</h1>
<div class="Section6"><br>Les sockets permettent d'échanger des données via lé réseau internet.<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#communication-reseau--socket-_sous-windows">Sous Windows</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#communication-reseau--socket-_sous-linux">Sous Linux</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="communication-reseau--socket-_sous-windows" href="#communication-reseau--socket-">Sous Windows</a>
</h2><br>La fonction (WSAStartup) permet d'initialiser un socket.<br>La fonction (socket) permet de créer un socket.<br>La structure (sockaddr_in) permet d'instancier l'adresse du socket.<br>La fonction (bind) permet de lier l'adresse au socket.&nbsp;<br>La fonction (listen) permet d'initialiser le nombre de connexions simultanées.&nbsp;<br>La fonction (accept) permet au serveur d'attendre une connexion client.<br>La fonction (closesocket) permet de fermer un socket.<br>La fonction (WSACleanup) permet de libérer les mémoires allouées au socket.<br>La fonction (CreateThread) permet de créer un Thread serveur de gestion d'un client connecté.<br>&nbsp;<br>Création d'un server TCP/IP.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSocket::runServer() {
    WSAStartup(MAKEWORD(lMajor, lMinor), &amp;wsaData);

    struct sockaddr_in lAddress;
    lAddress.sin_family = AF_INET;
    lAddress.sin_addr.s_addr = INADDR_ANY;
    lAddress.sin_port = htons(lPort);

    SOCKET lServer = socket(AF_INET, SOCK_STREAM, 0);
    bind(lServer, (struct sockaddr *)&amp;lAddress, sizeof(lAddress));
    listen(lServer, lBacklog);

    printf("Démarrage du serveur...\n");

    struct sockaddr_in lAddressC;
    int lAddressCL = sizeof(lAddressC);

    while(1) {
        GSocket* lClient = new GSocket;
        lClient-&gt;m_socket = accept(lServer, (struct sockaddr*)&amp;lAddressC, &amp;lAddressCL);

        DWORD lThreadId;
        HANDLE lThreadH = CreateThread(
                NULL,
                0,
                onThread,
                lClient,
                0,
                &amp;lThreadId
        );
    }

    closesocket(lServer);
    WSACleanup();
}
//===============================================</pre><br>Fonction de rappel liée à la connexion d'un client au serveur.&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
DWORD WINAPI GSocket::onThread(LPVOID _params) {
    GSocket* lClient = (GSocket*)_params;
    GString lData = lClient-&gt;readData();
    GServer lServer;
    lServer.run(lData);
    lServer.sendResponse(lClient);
    closesocket(lClient-&gt;m_socket);
    delete lClient;
    return 0;
}
//===============================================</pre><br>La fonction (connect) permet au client de se connecter au serveur.<br><br>Création d'un client TCP/IP.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GSocket::callServer(const GString&amp; _dataIn) {
    WSAStartup(MAKEWORD(lMajor, lMinor), &amp;lWsaData);

    struct sockaddr_in lAddress;

    inet_pton(AF_INET, lHostname.c_str(), &amp;lAddress.sin_addr.s_addr);
    lAddress.sin_family = AF_INET;
    lAddress.sin_port = htons(lPort);

    SOCKET lClient = socket(AF_INET, SOCK_STREAM, 0);

    m_socket = lClient;
    connect(lClient, (SOCKADDR*)(&amp;lAddress), sizeof(lAddress));

    sendData(_dataIn);
    GString lDataOut = readData();

    closesocket(lClient);
    WSACleanup();
    return lDataOut;
}
//===============================================</pre><br>La fonction (send) permet d'envoyer des données sur le réseau.<br>&nbsp;<br>Emission des données sur le réseau.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSocket::sendData(const GString&amp; _data) {
    int lIndex = 0;
    const char* lBuffer = _data.c_str();
    int lSize = _data.size();
    while(1) {
        int lBytes = send(m_socket, &amp;lBuffer[lIndex], lSize - lIndex, 0);
        if(lBytes == SOCKET_ERROR) break;
        lIndex += lBytes;
        if(lIndex &gt;= lSize) break;
    }
}
//===============================================</pre><br>La fonction (recv) permet de recevoir des données sur le réseau.<br>La fonction (ioctlsocket) permet de déterminer le nombre de données disponibles en lecture sur le réseau.
<br><br>Réception des données sur le réseau.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GSocket::readData() {
    GString lData = "";
    while(1) {
        char lBuffer[BUFFER_SIZE];
        int lBytes = recv(m_socket, lBuffer, BUFFER_SIZE - 1, 0);
        if(lBytes == SOCKET_ERROR) break;
        lBuffer[lBytes] = '\0';
        lData += lBuffer;

        if(lData.size() &gt;= BUFFER_MAX) break;

        u_long lBytesIO;
        int lOk = ioctlsocket(m_socket, FIONREAD, &amp;lBytesIO);

        if(lOk == SOCKET_ERROR) break;
        if(lBytesIO &lt;= 0) break;
    }
    return lData;
}
//===============================================</pre><br>Fonction de rappel liée à la connexion d'un client au serveur.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
DWORD WINAPI GSocket::onThread(LPVOID _params) {
    GSocket* lClient = (GSocket*)_params;
    GString lData = lClient-&gt;readData();
    GServer lServer;
    lServer.run(lData);
    lServer.sendResponse(lClient);
    closesocket(lClient-&gt;m_socket);
    delete lClient;
    return 0;
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="communication-reseau--socket-_sous-linux" href="#communication-reseau--socket-">Sous Linux</a>
</h2><br>La fonction (socket) permet de créer un socket.<br>La structure (sockaddr_in) permet d'instancier l'adresse du socket.<br>La fonction (bind) permet de lier l'adresse au socket.<br>La fonction (listen) permet d'initialiser le nombre de connexions simultanées.<br>La fonction (accept) permet au serveur d'attendre une connexion client.<br>La fonction (close) permet de fermer un socket.<br>La fonction (pthread_create) permet de créer un Thread serveur de gestion d'un client connecté.<br><br>Création d'un serveur TCP/IP.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSocket::runServer() {
    int lServer = socket(AF_INET, SOCK_STREAM, IPPROTO_TCP);

    struct sockaddr_in lAddress;
    bzero(&amp;lAddress, sizeof(lAddress));
    lAddress.sin_family = AF_INET;
    lAddress.sin_addr.s_addr = inet_addr(lHostname.c_str());
    lAddress.sin_port = htons(lPort);

    bind(lServer, (struct sockaddr*)&amp;lAddress, sizeof(lAddress));
    listen(lServer, lBacklog);

    printf("Démarrage du serveur...\n");

    struct sockaddr_in lAddressC;
    socklen_t lAddressCL = sizeof(lAddressC);

    while(1) {
        GSocket* lClient = new GSocket;
        lClient-&gt;m_socket = accept(lServer, (struct sockaddr*)&amp;lAddressC, &amp;lAddressCL);

        pthread_t lThreadH;
        pthread_create(&amp;lThreadH, 0, onThreadCB, lClient);
    }

    close(lServer);
}
//===============================================</pre><br>Fonction de rappel liée à la connexion d'un client au serveur.&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void* GSocket::onThreadCB(void* _params) {
    GSocket* lClient = (GSocket*)_params;
    GString lData = lClient-&gt;readData();
    GServer lServer;
    lServer.run(lData);
    lServer.sendResponse(lClient);
    close(lClient-&gt;m_socket);
    delete lClient;
    return 0;
}
//===============================================</pre><br>La fonction (connect) permet au client de se connecter au serveur.&nbsp;<br><br>Création d'un client TCP/IP.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GSocket::callServer(const GString&amp; _dataIn, const GString&amp; _facade) {
    GString lHostname = toHostname(_facade);
    int lPort = toPort(_facade);

    int lClient = socket(AF_INET, SOCK_STREAM, IPPROTO_TCP);

    struct sockaddr_in lAddress;
    bzero(&amp;lAddress, sizeof(lAddress));
    lAddress.sin_family = AF_INET;
    lAddress.sin_addr.s_addr = inet_addr(lHostname.c_str());
    lAddress.sin_port = htons(lPort);

    m_socket = lClient;
    int lConnectOk = connect(lClient, (sockaddr*)&amp;lAddress, sizeof(lAddress));

    sendData(_dataIn);
    GString lDataOut = readData();

    close(lClient);
    return lDataOut;
}
//===============================================</pre><br>La fonction (send) permet d'envoyer des données sur le réseau.&nbsp;<br><br>Emission des données sur le réseau.<br>&nbsp;&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSocket::sendData(const GString&amp; _data) {
    int lIndex = 0;
    const char* lBuffer = _data.c_str();
    int lSize = _data.size();
    while(1) {
        int lBytes = send(m_socket, &amp;lBuffer[lIndex], lSize - lIndex, 0);
        if(lBytes == -1) break;
        lIndex += lBytes;
        if(lIndex &gt;= lSize) break;
    }
}
//===============================================</pre><br>La fonction (recv) permet de recevoir des données sur le réseau.<br>La fonction (ioctlsocket) permet de déterminer le nombre de données disponibles en lecture sur le réseau.<br>&nbsp;<br>Réception des données sur le réseau.&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GSocket::readData() {
    GString lData = "";
    while(1) {
        char lBuffer[BUFFER_SIZE];
        int lBytes = recv(m_socket, lBuffer, BUFFER_SIZE - 1, 0);
        if(lBytes == -1) break;
        lBuffer[lBytes] = '\0';
        lData += lBuffer;

        int lIoctlOk = ioctl(m_socket, FIONREAD, &amp;lBytes);
        if(lIoctlOk == -1) break;
        if(lBytes &lt;= 0) break;
    }
    return lData;
}
//===============================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="communication-reseau-securisee--openssl-">Communication réseau sécurisée (OpenSSL)</a>
</h1>
<div class="Section6"><br>Les sockets permettent d'échanger des données via lé réseau internet.<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#communication-reseau-securisee--openssl-_sous-windows">Sous Windows</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#communication-reseau-securisee--openssl-_sous-linux">Sous Linux</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="communication-reseau-securisee--openssl-_sous-windows" href="#communication-reseau-securisee--openssl-">Sous Windows</a>
</h2>&nbsp;<br>Création d'un client SSL TCP/IP.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GOpenSSL::callSocket(const GString&amp; _dataIn) {
    WSADATA lWsaData;
    WSAStartup(MAKEWORD(lMajor, lMinor) 

    SOCKET lClient = socket(AF_INET, SOCK_STREAM, 0);

    SOCKADDR_IN lAddress;
    lAddress.sin_family = AF_INET;
    lAddress.sin_addr.s_addr = inet_addr(lHostname.c_str());
    lAddress.sin_port = htons(lPort);
    memset(&amp;lAddress.sin_zero, 0, sizeof(lAddress.sin_zero));

    connect(lClient, (SOCKADDR*)(&amp;lAddress), sizeof(lAddress));

    SSL_CTX* lContext = 0;

    if(!initContext(&amp;lContext)) return "";
    if(!initSSL(&amp;m_ssl, lContext, lClient)) return "";

    sendData(_dataIn);
    GString lDataOut = readData();

    SSL_free(m_ssl);
    SSL_CTX_free(lContext);

    closesocket(lClient);
    WSACleanup();

    return lDataOut;
}
//===============================================</pre><br>Création du contexte SSL.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
bool GOpenSSL::initContext(SSL_CTX** _context) {
    const SSL_METHOD* lMethod = SSLv23_client_method();
    SSL_CTX* lContext = SSL_CTX_new(lMethod);
    
    SSL_CTX_load_verify_locations(lContext, lCaFile.c_str(), 0);
    SSL_CTX_use_certificate_file(lContext, lCertificateFile.c_str(), SSL_FILETYPE_PEM);
    SSL_CTX_use_PrivateKey_file(lContext, lPrivateFile.c_str(), SSL_FILETYPE_PEM);
    SSL_CTX_check_private_key(lContext);
    SSL_CTX_set_verify(lContext, SSL_VERIFY_NONE, 0);

    (*_context) = lContext;
    return true;
}
//===============================================</pre><br>Création du module SSL.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
bool GOpenSSL::initSSL(SSL** _ssl, SSL_CTX* _context, SOCKET _socket) {
    SSL* lSSL = SSL_new(_context);
    
    SSL_set_fd(lSSL, _socket);
    SSL_connect(lSSL);
    showCerts(lSSL);
    
    (*_ssl) = lSSL;
    return true;
}
//===============================================</pre><br>Affichage des informations sur le certificat.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GOpenSSL::showCerts(SSL* _ssl) {
    X509* lCertificate = SSL_get_peer_certificate(_ssl);
    printf("Server certificates:\n");

    const int lSize = 256;
    char lLine[lSize];

    X509_NAME_oneline(X509_get_subject_name(lCertificate), lLine, lSize);
    printf("Subject: %s\n", lLine);

    X509_NAME_oneline(X509_get_issuer_name(lCertificate), lLine, lSize);
    printf("Issuer: %s\n", lLine);

    X509_free(lCertificate);
}
//===============================================</pre><br>Emission des données sur le réseau.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GOpenSSL::sendData(const GString&amp; _dataIn) {
    int lSize = _dataIn.size();
    const char* lBuffer = _dataIn.c_str();
    int lIndex = 0;

    while(1) {
        int lBytes = SSL_write(m_ssl, &amp;lBuffer[lIndex], lSize - lIndex);
        if(lBytes == -1) break;
        lIndex += lBytes;
        if(lIndex &gt;= lSize) break;
    }
}
//===============================================</pre><br>Réception des données sur le réseau.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GOpenSSL::readData() {
    GString lData = "";
    while(1) {
        char lBuffer[BUFFER_SIZE];
        int lBytes = SSL_read(m_ssl, lBuffer, BUFFER_SIZE - 1);

        if(lBytes == -1) break;

        lBuffer[lBytes] = '\0';
        lData += lBuffer;

        if(lData.size() &gt;= BUFFER_MAX) break;

        lBytes = SSL_pending(m_ssl);

        if(lBytes &lt;= 0) break;
    }
    return lData;
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="communication-reseau-securisee--openssl-_sous-linux" href="#communication-reseau-securisee--openssl-">Sous Linux</a>
</h2><br>Création d'un serveur SSL TCP/IP.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GOpenSSL::runServer() {
    int lServer = socket(AF_INET, SOCK_STREAM, IPPROTO_TCP);

    struct sockaddr_in lAddress;
    bzero(&amp;lAddress, sizeof(lAddress));
    lAddress.sin_family = AF_INET;
    lAddress.sin_addr.s_addr = inet_addr(lHostname.c_str());
    lAddress.sin_port = htons(lPort);

    bind(lServer, (struct sockaddr*)&amp;lAddress, sizeof(lAddress));
    listen(lServer, lBacklog);

    SSL_CTX* lContext = 0;
    if(!initContext(&amp;lContext)) return;

    printf("Démarrage du serveur...\n");

    struct sockaddr_in lAddressC;
    socklen_t lAddressCL = sizeof(lAddressC);

    while(1) {
        GOpenSSL* lClient = new GOpenSSL;
        lClient-&gt;m_socket = accept(lServer, (struct sockaddr*)&amp;lAddressC, &amp;lAddressCL);
        lClient-&gt;m_context = lContext;

        pthread_t lThreadH;
        pthread_create(&amp;lThreadH, 0, onThreadCB, lClient);
    }

    close(lServer);
    SSL_CTX_free(lContext);
}
//===============================================</pre><br>Fonction de rappel liée à la connexion d'un client au serveur.&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void* GOpenSSL::onThreadCB(void* _params) {
    GOpenSSL* lClient = (GOpenSSL*)_params;
    if(lClient-&gt;initSSL()) {
        GString lData = lClient-&gt;readData();
        GServer lServer;
        lServer.run(lData);
        lServer.sendResponse(lClient);
    }
    lClient-&gt;closeSocket();
    delete lClient;
    return 0;
}
//===============================================</pre><br>Création d'un contexte SSL.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
bool GOpenSSL::initContext(SSL_CTX** _context) {
    const SSL_METHOD* lMethod = SSLv23_server_method();
    SSL_CTX* lContext = SSL_CTX_new(lMethod);

    SSL_CTX_load_verify_locations(lContext, lCaFile.c_str(), 0);
    SSL_CTX_set_client_CA_list(lContext, SSL_load_client_CA_file(lCaFile.c_str()));
    SSL_CTX_use_certificate_file(lContext, lCertificateFile.c_str(), SSL_FILETYPE_PEM) == -1);
    SSL_CTX_use_PrivateKey_file(lContext, lPrivateFile.c_str(), SSL_FILETYPE_PEM);
    SSL_CTX_check_private_key(lContext);

    SSL_CTX_set_mode(lContext, SSL_MODE_AUTO_RETRY);
    SSL_CTX_set_verify(lContext, SSL_VERIFY_PEER | SSL_VERIFY_FAIL_IF_NO_PEER_CERT, 0);
    SSL_CTX_set_verify_depth(lContext, 1);

    (*_context) = lContext;
    return true;
}
//===============================================</pre><br>Création du module SSL.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
bool GOpenSSL::initSSL() {
    m_ssl = SSL_new(m_context);
    
    SSL_set_fd(m_ssl, m_socket);
    SSL_accept(m_ssl);
    showCerts(m_ssl);

    return true;
}
//===============================================</pre><br>Affichage des informations sur le certificat.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GOpenSSL::showCerts(SSL* _ssl) {
    X509* lCertificate = SSL_get_peer_certificate(_ssl);

    printf("Server certificates:\n");

    const int lSize = 256;
    char lLine[lSize];

    X509_NAME_oneline(X509_get_subject_name(lCertificate), lLine, 1024);
    printf("Subject: %s\n", lLine);

    X509_NAME_oneline(X509_get_issuer_name(lCertificate), lLine, 1024);
    printf("Issuer: %s\n", lLine);

    X509_free(lCertificate);
}
//===============================================</pre>&nbsp;<br>Emission des données sur le réseau.<br>&nbsp;&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GOpenSSL::sendData(const GString&amp; _dataIn) {
    int lSize = _dataIn.size();
    const char* lBuffer = _dataIn.c_str();
    int lIndex = 0;

    while(1) {
        int lBytes = SSL_write(m_ssl, &amp;lBuffer[lIndex], lSize - lIndex);
        if(lBytes == -1) break;
        lIndex += lBytes;
        if(lIndex &gt;= lSize) break;
    }
}
//===============================================</pre>&nbsp;<br>Réception des données sur le réseau.&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GOpenSSL::readData() {
    GString lData = "";
    while(1) {
        char lBuffer[BUFFER_SIZE];
        int lBytes = SSL_read(m_ssl, lBuffer, BUFFER_SIZE - 1);
        if(lBytes == -1) break;

        lBuffer[lBytes] = '\0';
        lData += lBuffer;

        if(lData.size() &gt;= BUFFER_MAX) break;
        lBytes = SSL_pending(m_ssl);
        if(lBytes &lt;= 0) break;
    }
    return lData;
}
//===============================================</pre><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="format-de-donnees-xml--libxml2-">Format de données XML (LibXML2)</a>
</h1>
<div class="Section6"><br>La bibliothèque (libXML2) permet de manipuler un document XML.<br><br>La fonction (xmlNewDoc) permet de créer un nouveau document XML.<br>La fonction (xmlNewNode) permet de créer un nouveau noeud XML.<br>La fonction (xmlDocSetRootElement) permet d'initialiser le noeud racine d'un document XML.
<br><br>Création d'un document XML.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GXml::createDoc() {
    m_doc = xmlNewDoc(BAD_CAST("1.0"));
    m_node = xmlNewNode(NULL, BAD_CAST("rdv"));
    xmlDocSetRootElement(m_doc, m_node);
}
//===============================================</pre><br>La fonction (xmlParseDoc) permet de charger des données XML.<br>La fonction (xmlDocGetRootElement) permet de récupérer le noeud racine d'un document XML.<br><br>Chargement de données XML.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
bool GXml::loadXml(const GString&amp; _data) {
    m_doc = xmlParseDoc(BAD_CAST(_data.c_str()));
    if(!m_doc) return false;
    m_node = xmlDocGetRootElement(m_doc);
    if(!m_node) return false;
    return true;
}
//===============================================</pre><br>La fonction (xmlParseInNodeContext) permet de charger un noeud à partir de données XML.<br>La fonction (xmlAddChild) permet d'ajouter un nouveau noeud à un noeud existant.<br>La fonction (xmlCopyNode) permet de copier un noeud ainsi que les noeuds enfants.<br>&nbsp;<br>Chargement d'un noeud à partir de données XML.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GXml::loadNode(const GString&amp; _data) {
    xmlNodePtr lNodes;
    xmlParseInNodeContext(m_node, _data.c_str(), lSize, 0, &amp;lNodes);
    xmlNodePtr lNode = lNodes-&gt;children;
    while(lNode) {
        xmlAddChild(m_node, xmlCopyNode(lNode, 1));
        lNode = lNode-&gt;next;
    }
    xmlFreeNode(lNodes);
}
//===============================================</pre><br>La fonction (xmlNewNode) permet créer un nouveau noeud XML.<br>La fonction (xmlNodeSetContent) permet d'initialiser le contenu d'un noeud.<br>La fonction (xmlAddChild) permet d'ajouter un nouveau noeud à un noeud existant.<br>&nbsp; &nbsp;<br>Ajout d'un nouveau noeud XML.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
xmlNodePtr GXml::addObj(const GString&amp; _name) {
    xmlNodePtr lNode = xmlNewNode(NULL, BAD_CAST(_name.c_str()));
    xmlAddChild(m_node, lNode);
    return lNode;
}
//===============================================</pre><br>Ajout d'un nouveau noeud XML avec un contenu.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GXml::addData(const GString&amp; _name, const GString&amp; _value) {
    xmlNodePtr lNode = xmlNewNode(NULL, BAD_CAST(_name.c_str()));
    xmlNodeSetContent(lNode, BAD_CAST(_value.c_str()));
    xmlAddChild(m_node, lNode);
}
//===============================================</pre><br>Récupération du contenu d'un noeud XML.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GXml::getValue() const {
    GString lValue = (char*)xmlNodeGetContent(m_node);
    return lValue;
}
//===============================================</pre><br>Modification du contenu d'un noeud XML.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GXml::setValue(const GString&amp; _value) {
    xmlNodeSetContent(m_node, BAD_CAST(_value.c_str()));
}
//===============================================</pre><br>La fonction (xmlXPathNewContext) permet de créer un contexte XPath.<br>La fonction (xmlXPathNodeEval) permet d'évaluer une requête XPath à partir d'un noeud.<br>La structure (xmlXPathObjectPtr) fournit la propriété (nodesetval) qui pointe sur une structure contenant les noeuds trouvés.<br>La structure (xmlNodeSetPtr) fournit la propriété (nodeNr) qui contient le nombre de noeuds trouvés.<br>&nbsp;<br>Récupération du nombre de noeuds liés à une requête XPath.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int GXml::countNode(const GXml&amp; _root, const GString&amp; _path) {
    xmlXPathContextPtr lXPathC = xmlXPathNewContext(_root.m_doc);
    if(!lXPathC) return 0;
    xmlNodePtr lRoot = m_node;
    if(_path[0] == '/') lRoot = _root.m_node;
    xmlXPathObjectPtr lXPathO = xmlXPathNodeEval(lRoot, BAD_CAST(_path.c_str()), lXPathC);
    if(!lXPathO) return 0;
    xmlXPathFreeContext(lXPathC);
    int lCount = 0;
    if(lXPathO-&gt;nodesetval) {
        lCount = lXPathO-&gt;nodesetval-&gt;nodeNr;
    }
    xmlXPathFreeObject(lXPathO);
    return lCount;
}
//===============================================</pre><br>La structure (xmlNodeSetPtr) fournit la propriété (nodeTab) qui contient un tableau sur les noeuds trouvés.<br><br>Récupération du noeud liés à une requête XPath.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
xmlNodePtr GXml::getNode(const GXml&amp; _root, const GString&amp; _path) const {
    xmlXPathContextPtr lXPathC = xmlXPathNewContext(_root.m_doc);
    if(!lXPathC) return 0;
    xmlNodePtr lRoot = m_node;
    if(_path[0] == '/') lRoot = _root.m_node;
    xmlXPathObjectPtr lXPathO = xmlXPathNodeEval(lRoot, BAD_CAST(_path.c_str()), lXPathC);
    if(!lXPathO) return 0;
    xmlXPathFreeContext(lXPathC);
    xmlNodePtr lNode = 0;
    if(lXPathO-&gt;nodesetval) {
        if(lXPathO-&gt;nodesetval-&gt;nodeNr) {
            lNode = lXPathO-&gt;nodesetval-&gt;nodeTab[0];
        }
    }
    xmlXPathFreeObject(lXPathO);
    return lNode;
}
//===============================================</pre><br>La fonction (xmlDocDumpFormatMemoryEnc) permet de convertir un document XML en chaînes de caractères.<br><br>Conversion d'un document XML en chaîne de caractères.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GXml::toString() const {
    xmlChar* lBuffer = NULL;
    int lSize;
    xmlDocDumpFormatMemoryEnc(m_doc, &amp;lBuffer, &amp;lSize, "UTF-8", 4);
    GString lData((char*)lBuffer, lSize);
    xmlFree(lBuffer);
    return lData;
}
//===============================================</pre><br>La fonction (xmlNodeDump) permet de convertir un noeud XML en chaînes de caractères.<br><br>Conversion d'un noeud XML en chaîne de caractères.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GXml::toNode(const GXml&amp; _root) const {
    GString lData;
    xmlBufferPtr lBuffer = xmlBufferCreate();
    xmlNodeDump(lBuffer, _root.m_doc, m_node, 0, 1);
    lData = (char*)lBuffer-&gt;content;
    xmlBufferFree(lBuffer);
    return lData;
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="expressions-mathematiques--tinyexpr-">Expressions mathématiques (TinyExpr)</a>
</h1>
<div class="Section6"><br>La bibliothèque (TinyExpr) permet d'évaluer une expression mathématique.&nbsp;<br><br>La fonction (te_interp) permet d'évaluer une expression mathématique.<br><br>Evaluation d'une expression mathématique.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GCalculator::onRunCalculator(const GString&amp; _data) {
    double lResult = te_interp(m_expression.c_str(), 0);
}
//===============================================</pre><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/gif;base64,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"></div><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="base-de-donnees--sql-">Base de données (SQL)</a>
</h1>
<div class="Section6"><br>Les requêtes (SQL) permettent de manipuler des bases de données.<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#base-de-donnees--sql-_index-sql">Index SQL</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#base-de-donnees--sql-_injection-sql">Injection SQL</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="base-de-donnees--sql-_index-sql" href="#base-de-donnees--sql-">Index SQL</a>
</h2><br>Un index SQL permet de rechercher rapidement des données dans une Table.<br><br>Les système de gestion de base données relationnelle (SGBDR) créée systématiquement un index chaque fois que l?on pose une clé primaire (PRIMARY KEY) ou une contrainte d?unicité (UNIQUE) sur une table. En revanche, il n?y a pas d?index créé automatiquement par le système (SGBDR) derrière une contrainte (FOREIGN KEY).<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="base-de-donnees--sql-_injection-sql" href="#base-de-donnees--sql-">Injection SQL</a>
</h2><br>L'injection SQL (SQLi) est une attaque qui consiste à injecter des instruction SQL dans des données utilisateur afin de détourner le comportement du serveur. Cela peut permettre d'accéder à l'interface d'administration d'un système sans s'y être autoriser.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="classe">Classe</a>
</h1>
<div class="Section6"><br>L'opérateur (class) permet de créer une classe en C++.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GObject {

};
//===============================================</pre><br>Une classe peut posséder des attributs ou des propriétés.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GObject {
private:
    GLog m_logs;
    GLog m_dataLogs;
    GCode m_resp;
    std::vector&lt;GObject*&gt; m_map;
};
//===============================================</pre><br>Une classe peut posséder des constructeurs.<br><br>Déclaration d'un constructeur.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GObject {
public:
    GObject();
};
//===============================================</pre><br>Définition du constructeur.&nbsp;<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GObject::GObject() {

}
//===============================================</pre><br>Une classe peut posséder un destructeur.<br>&nbsp; &nbsp;<br>Déclaration du destructeur.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GObject {
public:
    ~GObject();
};
//===============================================</pre><br>Définition du destructeur.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GObject::~GObject() {

}
//===============================================</pre><br>Une classe peut posséder des méthodes.<br><br>Déclaration d'une méthode.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GObject {
public:
    void clearMap();
};
//===============================================</pre><br>Définition de la méthode.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GObject::clearMap() {
    for(int i = 0; i &lt; (int)m_map.size(); i++) {
        GObject* lObj = m_map[i];
        delete lObj;
    }
    m_map.clear();
    m_logs.clearMap();
    m_dataLogs.clearMap();
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une classe peut posséder plusieurs constructeurs.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une classe ne peut posséder qu'un seul destructeur.<br><br></div>
</div>
L'accès à un attribut peut être limité à 3 types de portée:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La portée publique (public) limite l'accès à l'attribut à toutes les classes.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La portée protégée (protected) limite l'accès à l'attribut à la classe fille.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La portée privée (private) limite l'accès à l'attribut à la classe mère.</div>
</div>&nbsp;<br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="heritage-de-classe">Héritage de classe</a>
</h1>
<div class="Section6"><br>L'opérateur (:) permet de créer un héritage de classe en C++.<br><br>Déclaration de la classe mère.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GObject {
public:
    GObject();
    virtual ~GObject();
};
//===============================================</pre><br>Définition  de la classe mère.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GObject::GObject() {

}
//===============================================
GObject::~GObject() {

}
//===============================================</pre><br>Déclaration de la classe fille.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GProcess : public GObject {
public:
    GProcess();
    ~GProcess();
};
//===============================================</pre><br>Définition de la classe fille.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GProcess::GProcess()
: GObject() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="polymorphisme-de-classe">Polymorphisme de classe</a>
</h1>
<div class="Section6"><br>L'opérateur (virtual) permet de créer un polymorphisme de classe en C++.<br><br>Déclaration de la classe mère.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GObject {
public:
    virtual GString serialize(const GString&amp; _code = "object") const;
    virtual void deserialize(const GString&amp; _data, const GString&amp; _code = "object");
};
//===============================================</pre><br>Définition  de la classe mère.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GObject::serialize(const GString&amp; _code) const {return "";}
void GObject::deserialize(const GString&amp; _data, const GString&amp; _code) {}
//===============================================</pre><br>Déclaration de la classe fille.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GCalculator : public GObject {
public:
    GString serialize(const GString&amp; _code = "calculator") const;
    void deserialize(const GString&amp; _data, const GString&amp; _code = "calculator");
};
//===============================================</pre><br>Définition de la classe fille.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GString GCalculator::serialize(const GString&amp; _code) const {
    lDom.addData(_code, "expression", m_expression);
    lDom.addData(_code, "result", m_result);
    return lDom.toString();
}
//===============================================
void GCalculator::deserialize(const GString&amp; _data, const GString&amp; _code) {
    m_expression = lDom.getData(_code, "expression");
    m_result = lDom.getData(_code, "result");
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="transtypage--cast-">Transtypage (Cast)</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#transtypage--cast-_transtypage--const_cast-">Transtypage (const_cast)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#transtypage--cast-_transtypage--dynamic_cast-">Transtypage (dynamic_cast)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#transtypage--cast-_transtypage--reinterpret_cast--">Transtypage (reinterpret_cast)&nbsp;</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#transtypage--cast-_transtypage--static_cast-">Transtypage (static_cast)</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="transtypage--cast-_transtypage--const_cast-" href="#transtypage--cast-">Transtypage (const_cast)</a>
</h2><br><type>L'opérateur (const_cast) est utilisé pour remplacer explicitement const et/ou volatile dans un cast. Le type cible doit être le même que le type source à l'exception de la modification de ses attributs const ou volatile. Ce type de transtypage manipule l'attribut const de l'objet passé, qu'il soit défini ou supprimé.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="transtypage--cast-_transtypage--dynamic_cast-" href="#transtypage--cast-">Transtypage (dynamic_cast)</a>
</h2>&nbsp;<br><type>L'opérateur (dynamic_cast) effectue un cast d'exécution qui vérifie la validité du cast. Si le transtypage ne peut pas être effectué, le transtypage échoue et l'expression prend la valeur null. Un dynamic_cast effectue des transtypages sur des types polymorphes et ne peut convertir un pointeur A* en un pointeur B* que si l'objet pointé est réellement un objet B.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="transtypage--cast-_transtypage--reinterpret_cast--" href="#transtypage--cast-">Transtypage (reinterpret_cast)&nbsp;</a>
</h2><type><br>L'opérateur (reinterpret_cast) change un pointeur en tout autre type de pointeur. Il permet également de convertir un pointeur en un type entier et vice versa.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="transtypage--cast-_transtypage--static_cast-" href="#transtypage--cast-">Transtypage (static_cast)</a>
</h2>&nbsp;&nbsp;<br><type>L'opérateur (static_cast) effectue un cast non polymorphe. Par exemple, il peut être utilisé pour convertir un pointeur de classe de base en un pointeur de classe dérivée.</type></type></type></type><br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="git">Git</a>
</h1>
<div class="Section6"><br>Git permet gérer les versions d'un projet.<br><br>La commande (clone) permet de cloner un dépôt distant.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">git clone https://github.com/jwerle/b64.c.git</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="cmake">CMake</a>
</h1>
<div class="Section6"><br>CMake permet de construire un programme.<br><br>La commande (cmake) permet de générer le fichier (Makefile) à partir du fichier (CMakeLists.txt).<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">mkdir build
cd build
cmake ..</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="systemd">Systemd</a>
</h1>
<div class="Section6"><br>L'utilitaire (systemd) permet de créer des services sous Linux.<br><br>Création du fichier de configuration.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">sudo nano /etc/systemd/system/rdv_cpp_server.service</pre><br>Edition du fichier de configuration.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="ini" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
[Unit]
Description=readydev cpp server
After=network.target
StartLimitIntervalSec=0
#================================================
[Service]
EnvironmentFile=/etc/systemd/rdv_cpp_server.conf
Type=simple
Restart=always
RestartSec=1
User=gkesse
ExecStart=/usr/local/bin/rdv_cpp_server.exe server
#================================================
[Install]
WantedBy=multi-user.target
#================================================</pre><br>Création du fichier des variables d'environnement.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">sudo nano /etc/systemd/rdv_cpp_server.conf</pre><br>Edition du fichier des variables d'environnement.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
#================================================
GPROJECT_ENV=PROD
GPROJECT_DATA=/var/lib/readydev
#================================================</pre><br>La commande (systemctl) permet de gérer les services.<br><br>Chargement de tous les services.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">sudo systemctl daemon-reload</pre><br>Chargement d'un service.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">sudo systemctl reload rdv_cpp_server</pre><br>Redémarrage d'un service.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">sudo systemctl restart rdv_cpp_server</pre><br>Arrêt d'un service.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">sudo systemctl stop rdv_cpp_server</pre><br>Affichage du status.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">systemctl status rdv_cpp_server</pre><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">* rdv_cpp_server.service - readydev cpp server
     Loaded: loaded (/etc/systemd/system/rdv_cpp_server.service; disabled; vendor preset: enabled)
     Active: active (running) since Wed 2023-07-12 01:39:23 CEST; 11min ago
   Main PID: 145033 (rdv_cpp_server.)
      Tasks: 1 (limit: 8864)
     Memory: 508.0K
        CPU: 19ms
     CGroup: /system.slice/rdv_cpp_server.service
             |-145033 /usr/local/bin/rdv_cpp_server.exe server

juil. 12 01:39:23 gkesse-desktop systemd[1]: Started readydev cpp server.</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="openssl">OpenSSL</a>
</h1>
<div class="Section6"><br>La commande (openssl) permet de créer des certificats SSL.<br><br>Le certificat racine permet d'identifier une autorité de certification (CA).<br><br>La commande (req) permet de générer un certificat auto-signé.<br><br>Génération du certificat racine auto-signé.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">mkdir -p ca/private

openssl req \
-x509 \
-nodes \
-days 3650 \
-newkey rsa:4096 \
-keyout ca/private/ca_key.pem \
-out ca/ca_cert.pem \
-subj "/C=FR/ST=Bas-Rhin State/L=Strasbourg City/O=ReadyDev Inc./CN=ca.readydev.ovh"</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (ca_key.pem) est la clé privée du certificat racine (à ne pas partager).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (ca_cert.pem) est la clé publique du certificat racine (à partager).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La durée de validité du certificat racine est définie sur 10 ans (3650).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le certificat racine utilise l'algorithme (RSA) sur une longueur de (4096) bits.</div>
</div><br>La commande (genrsa) permet de générer une clé privée.<br>La commande (req) permet de générer une demande de signature.<br>La commande (x509) permet de générer le certificat.<br>&nbsp;<br>Le certificat server permet d'identifier une machine serveur.<br><br>Génération du certificat serveur.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">mkdir -p server/private

openssl genrsa -out server/private/server_key.pem 4096

openssl req -new \
-key server/private/server_key.pem \
-out server/server.csr \
-subj "/C=FR/ST=Bas-Rhin State/L=Strasbourg City/O=ReadyDev Inc./CN=server.readydev.ovh"

openssl x509 -req -days 1460 -in server/server.csr \
-CA ca/ca_cert.pem -CAkey ca/private/ca_key.pem \
-CAcreateserial -out server/server_cert.pem</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (server_key.pem) est la clé privée du certificat serveur (à ne pas partager).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (server.csr) est la demande de signature  du certificat serveur (à ne pas partager).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (server_cert.pem) est la clé publique du certificat serveur (à partager).&nbsp;</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La durée de validité du certificat serveur est définie sur 4 ans (1460).</div>
</div><br>Le certificat client permet d'identifier une machine client.<br><br>Génération du certificat client.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">mkdir -p client/private

openssl genrsa -out client/private/client_key.pem 4096

openssl req -new \
-key client/private/client_key.pem \
-out client/client.csr \
-subj "/C=US/ST=Bas-Rhin State/L=Strasbourg City/O=ReadyDev Inc./CN=client.readydev.ovh"

openssl x509 -req -days 1460 -in client/client.csr \
-CA ca/ca_cert.pem -CAkey ca/private/ca_key.pem \
-CAcreateserial -out client/client_cert.pem</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (client_key.pem) est la clé privée du certificat client (à ne pas partager).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (client.csr) est la demande de signature du certificat client (à ne pas partager).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (client_cert.pem) est la clé publique du certificat client (à partager).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La durée de validité du certificat client est définie sur 4 ans (1460).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="shell">Shell</a>
</h1>
<div class="Section6"><br>Shell est un interpréteur de ligne de commande sous Linux.<br><br>La commande (tree) permet d'afficher l'arborescence d'un répertoire.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">tree</pre><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">.
|-- ca
|&nbsp;&nbsp; |-- ca_cert.pem
|&nbsp;&nbsp; |-- private
|&nbsp;&nbsp;     |-- ca_key.pem
|-- client
|&nbsp;&nbsp; |-- client_cert.pem
|&nbsp;&nbsp; |-- client.csr
|&nbsp;&nbsp; |-- private
|&nbsp;&nbsp;     |-- client_key.pem
|-- server
    |-- private
    |&nbsp;&nbsp; |-- server_key.pem
    |-- server_cert.pem
    |-- server.csr</pre><br>La commande (screen) fournit l'option (-S) qui permet de créer un screen.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">screen -S gke</pre><br>La commande (screen) fournit l'option (-r) qui permet de récupérer un screen existant.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">screen -r gke</pre>&nbsp;&nbsp;<br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="freebox">FreeBox</a>
</h1>
<div class="Section6"><br>FreeBox est un fournisseur d'accès à internet (FAI).<br><br>La redirection de port permet de connecter un serveur local à internet.<br><br>Création d'une redirection de port.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Menu
Paramètres
Paramètres de la Freebox
Gestion des ports
Redirections des ports
Ajouter une redirection

IP Destination &gt; readydev-system (192.168.1.45)
Redirection active &gt; Cocher
IP source &gt; Toutes
Port de début &gt; 9010
Port de fin &gt; 9010
Port de destination &gt; 9010
Commentaire &gt; readydev-system
Sauvegarder
OK</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="google">Google</a>
</h1>
<div class="Section6"><br>Google est une société spécialisée dans les technologies du web.<br><br>Enregistrement du mot de passe d'une application.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Google Compte
Sécurité
Validation en deux étapes
Mots de passe des applications
Autre (Nom personnalisé)
PHPMailer
Générer
Copier le mot de passe (xxxxxxx)
OK</pre><br></div>
</div>
</div>
</div><br>