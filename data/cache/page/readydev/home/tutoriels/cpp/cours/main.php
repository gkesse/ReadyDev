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
//===============================================</pre><br>De manière générale, l'opérateur (break) permet de casser une boucle.<br>Alors que l'opérateur (continue) permet de continuer la boucle.<br><br></div></div></div></div><br><div class="GSection1 Section1">
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
//===============================================</pre><br>De manière générale, l'opérateur (break) permet de casser une boucle.<br>Alors que l'opérateur (continue) permet de continuer la boucle.<br>&nbsp;<br></div></div></div></div><br>