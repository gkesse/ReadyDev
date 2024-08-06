<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/cours">Cours</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Programmation en C++</a></div>
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
<a class="Summary3" href="#gestionnaire-de-processus">Gestionnaire de processus</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestionnaire-de-tests">Gestionnaire de tests</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestionnaire-de-chaine-de-caracteres">Gestionnaire de chaîne de caractères</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestionnaire-de-logs">Gestionnaire de logs</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#git">Git</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br>La plus part des systèmes d'exploitation les plus populaires sont principalement écrits en <b>C++</b>, ou utilisent des composants et des bibliothèques qui sont écrits en C++. Il est quasiment impossible de trouver un ordinateur qui ne contient pas de code écrit en C++. Le C++ offre une certaine flexibilité tout comme les langages modernes de haut niveau et une puissance de calcul considérable en vous donnant un accès direct à la mémoire afin d'optimiser sa gestion et augmenter ainsi les performances de votre application.&nbsp;Grâce à des fonctionnalités telles que les classes et la surcharge des opérateurs ou des méthodes, le C++ vous permet d'étendre les fonctionnalités du langage et d'écrire du code réutilisable.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="programme-principal">Programme principal</a>
</h1>
<div class="Section6"><br>Le programme principal est le point d'entrée de notre projet C++.<br><br>On vérifie que notre environnement de développement est opérationnel, avant d'aller plus loin, en affichant un message sur le Terminal.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.cpp
//===============================================
int main(int _argc, char** _argv) {
    printf("Bonjour tout le monde.\n");
    return 0;
}
//===============================================</pre><br>On veut pouvoir sélectionner un projet à exécuter parmi plusieurs projets à partir des arguments passés en ligne de commande. On se sert d'un gestionnaire de processus (GProcess).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.cpp
//===============================================
int main(int _argc, char** _argv) {
    printf("%s...\n", __PRETTY_FUNCTION__);
    GProcess lProcess;
    lProcess.run(_argc, _argv);
    return 0;
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestionnaire-de-processus">Gestionnaire de processus</a>
</h1>
<div class="Section6"><br>Le gestionnaire de processus est chargé de sélectionner un projet à exécuter parmi plusieurs projets à partir des arguments passés en ligne de commande.<br><br>On vérifie qu'on récupère les bonnes valeurs à partir des arguments passés en ligne de commande.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GProcess.cpp
//===============================================
void GProcess::run(int _argc, char** _argv) {
    std::string lModule = "";
    if(_argc &gt; 1) lModule = _argv[1];

    if(lModule == "") {
        printf("Le module est obligatoire.\n");
    }
    else if(lModule == "test") {
        printf("On exécute le module de test.\n");
    }
    else {
        printf("Le module est inconnu.\n");
    }
}
//===============================================</pre><br>On définit la sélection du module de tests (GTest). Le gestionnaire de tests est un module intégré à notre projet permettant de tester quelques fonctionnalités de notre application.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GProcess.cpp
//===============================================
void GProcess::run(int _argc, char** _argv) {
    std::string lModule = "";
    if(_argc &gt; 1) lModule = _argv[1];

    if(lModule == "") {
        printf("Le module est obligatoire.\n");
    }
    else if(lModule == "test") {
        runTest(_argc, _argv);
    }
    else {
        printf("Le module est inconnu.\n");
    }
}
//===============================================
void GProcess::runTest(int _argc, char** _argv) {
    GTest lObj;
    lObj.run(_argc, _argv);
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestionnaire-de-tests">Gestionnaire de tests</a>
</h1>
<div class="Section6"><br>Le gestionnaire de tests est un module intégré à notre projet et chargé de sélectionner un test à exécuter parmi plusieurs tests à partir des arguments passés en ligne de commande.<br><br>On vérifie qu'on récupère les bonnes valeurs à partir des arguments passés en ligne de commande.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GTest.cpp
//===============================================
void GTest::run(int _argc, char** _argv) {
    std::string lMethod = "";
    if(_argc &gt; 2) lMethod = _argv[2];

    if(lMethod == "") {
        printf("La méthode est obligatoire.\n");
    }
    else if(lMethod == "string") {
        printf("On exécute le test sur les chaines.\n");
    }
    else {
        printf("La méthode est inconnue.\n");
    }
}
//===============================================</pre><br>On définit le test sur les chaînes de caractères. C'est l'occasion d'implémenter et tester un gestionnaire de chaîne de caractères (GString).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GTest.cpp
//===============================================
void GTest::run(int _argc, char** _argv) {
    std::string lMethod = "";
    if(_argc &gt; 2) lMethod = _argv[2];

    if(lMethod == "") {
        printf("La méthode est obligatoire.\n");
    }
    else if(lMethod == "string") {
        runString(_argc, _argv);
    }
    else {
        printf("La méthode est inconnue.\n");
    }
}
//===============================================
void GTest::runString(int _argc, char** _argv) {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestionnaire-de-chaine-de-caracteres">Gestionnaire de chaîne de caractères</a>
</h1>
<div class="Section6"><br>Le gestionnaire de chaîne de caractères est chargé de réaliser toutes les opérations nécessaire sur une chaîne de caractères dans le cadre de notre projet.<br><br>Avec le gestionnaire de chaîne de caractères, nous pouvons:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer une chaîne (GString) vide.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer une chaîne (GString) à partir d'un booléen (bool).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer une chaîne (GString) à partir d'un caractère (char).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer une chaîne (GString) à partir d'une chaîne (const char*).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer une chaîne (GString) à partir d'un entier (int).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer une chaîne (GString) à partir d'un réel (double).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer une chaîne (GString) à partir d'une chaîne (std::string).</div>
</div>

<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Concaténer une chaîne (GString)&nbsp; avec un type pris en charge.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Comparer une chaîne (GString) avec un type pris en charge.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Convertir une chaîne (GString) vers un type pris en charge.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Sauvegarder des fichiers binaires dans une chaîne (GString).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Réaliser des conversion en base64 à partir d'une chaîne (GString).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Récupérer une sous chaîne à partir d'une chaîne (GString).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vérifier si une chaîne (GString) commence par une clé donnée.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vérifier si une chaîne (GString) se termine par une clé donnée.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Récupérer l'index d'une clé donnée à partir d'une chaîne (GString).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Extraire une sous chaîne entre 2 clés données à partir d'une chaîne (GString).</div>
</div><br>On commence par définir la structure de notre gestionnaire de chaîne de caractères. On aura besoin des attributs suivants pour réaliser notre gestionnaire:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un attribut (m_data) pour stocker le pointeur de données.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un attribut (m_size) pour stocker la taille des données.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GString.h
//===============================================
class GString {
private:
    int m_size;
    char* m_data;
};
//===============================================</pre><br>On aura besoin de pouvoir nettoyer une chaîne (GString) avant de réaliser de certaines opérations.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GString.cpp
//===============================================
void GString::clear() {
    if(m_data) delete[] m_data;
    m_data = 0;
    m_size = 0;
}
//===============================================</pre><br>On aura besoin de pouvoir créer une chaîne (GString) à partir d'un pointer de chaîne de caractère et la taille de la chaîne avant de réaliser certaines opérations.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GString.cpp
//===============================================
void GString::create(const char* _data, int _size) {
    clear();
    if(_size &lt; 0) _size = 0;
    m_data = new char[_size + 1];
    m_data[_size] = '\0';
    memcpy(m_data, _data, _size);
    m_size = _size;
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestionnaire-de-logs">Gestionnaire de logs</a>
</h1>
<div class="Section6"><br>MobaXterm est un puissant émulateur de terminal et une application de bureau à distance qui vous permet d'utiliser des onglets pour organiser plusieurs sessions de terminal dans une seule fenêtre.&nbsp;MobaXterm vous permet de lancer des sessions à distance. Il vous suffit de cliquer sur le bouton « Sessions » pour démarrer une nouvelle session. Vous pouvez ensuite choisir de créer une nouvelle session SSH, Telnet, Rlogin, RDP, VNC, XDMCP, FTP, SFTP, Mosh ou Serial. Chaque session que vous démarrez est automatiquement enregistrée.<br><br>Avec MobaXterm, nous pouvons:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer une connexion SSH avec un serveur distant.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer une connexion SFTP avec un serveur distant.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Naviguer dans les répertoires d'un serveur distant.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer un nouveau répertoire sur un serveur distant.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer un nouveau fichier sur un serveur distant.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Transférer des fichiers à un serveur distant.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Récupérer des fichiers à partir d'un serveur distant.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Renommer un répertoire sur un serveur distant.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Renommer un fichier sur un serveur distant.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Editer un fichier sur un serveur distant.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="git">Git</a>
</h1>
<div class="Section6"><br>Git facilite donc le travail collaboratif en minimisant les risques de perte de travail et en permettant également aux développeurs de travailler chacun sur leur branches et donc en autonomie sans empiéter sur le travail des autres.<br><br></div>
</div>
</div>
</div><br>