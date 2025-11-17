<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#c-lang">C</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/c-lang/programmation-reseau-pratique-avec-c">Programmation réseau pratique avec C</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Mise en oeuvre d'une communication réseau en C/C++ avec les sockets</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>La programmation <b>réseau </b>est un sujet passionnant, mais aussi très profond ; il se passe beaucoup de choses à de nombreux niveaux. Certains langages de programmation masquent ces abstractions. Avec le langage <b>Python</b>, par exemple, vous pouvez télécharger une page web entière en une seule ligne de code. Ce n'est pas le cas en <b>C</b> ! En <b>C</b>, pour télécharger une page web, il est essentiel de tout connaître. Il faut connaître les <b>sockets</b>, le protocole <b>TCP </b>(Transfer Control Protocol) et <b>HTTP</b>. En programmation réseau en <b>C</b>, rien n'est caché.<br><br>Le <b>C</b> est un excellent langage pour apprendre la programmation <b>réseau</b>. Non seulement parce qu'il permet de voir tous les détails, mais aussi parce que les <b>systèmes d'exploitation</b> les plus répandus utilisent tous des noyaux écrits en <b>C</b>. Aucun autre langage ne vous offre un accès aussi performant que le <b>C</b>. En <b>C</b>, tout est sous votre contrôle : vous pouvez organiser vos <b>structures de données</b> exactement comme vous le souhaitez, gérer la <b>mémoire </b>avec précision et même vous tirer une balle dans le pied comme bon vous semble.<br><br>En matière de programmation <b>réseau</b>, on ne peut pas se contenter de l'approche « <b>ça marche, c'est suffisant</b> » de la programmation par coïncidence. Il faut utiliser le raisonnement.<br><br>Dans ce document, nous nous attachons à aborder la programmation <b>réseau </b>de manière moderne et sécurisée. Les programmes d'exemple sont soigneusement conçus pour fonctionner avec <b>IPv4 </b>et <b>IPv6</b>, et sont tous écrits de manière <b>portable </b>et indépendante du <b>système d'exploitation</b>, dans la mesure du possible.<br><br>Dès qu'il existe un risque d'erreur de <b>mémoire</b>, nous nous efforçons d'en tenir compte et de le signaler. La <b>sécurité </b>est trop souvent négligée. Nous sommes convaincus que la <b>sécurité </b>est importante et qu'elle doit être intégrée au système dès le départ. C'est pourquoi, en plus d'enseigner les bases du <b>réseau</b>, ce document aborde en détail les <b>protocoles sécurisés</b>, tels que <b>TLS</b>. Nous espérons que vous prendrez autant de plaisir à lire ce document.
&nbsp;<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#contenu-de-ce-document">Contenu de ce document</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction-aux-reseaux-et-aux-protocoles">Introduction aux réseaux et aux protocoles</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#a-suivre">À suivre</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="contenu-de-ce-document">Contenu de ce document</a>
</h1>
<div class="Section6"><br>Nous avons rassemblé dans ce document un ensemble de recettes pratiques pour la mise en oeuvre d'une communication réseau en C/C++ avec les sockets.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section «&nbsp;<a class="GLink2 Link4" style=" color: lime;" href="#introduction-aux-reseaux-et-aux-protocoles"><b>Introduction aux réseaux et aux protocoles</b></a>&nbsp;», nous présenterons les concepts importants liés aux réseaux. Nous inclurons des exemples de programmes pour déterminer votre adresse IP de manière pragmatique.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Se familiariser avec les API Socket</b> », nous présenterons les API de programmation de sockets et nous vous permettrons de créer votre premier programme réseau : un petit serveur web.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Présentation approfondie des connexions TCP</b> », nous nous concentrerons sur la programmation des sockets TCP. Nous présenterons des exemples de programmes développés pour les côtés client et serveur.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Établissement de connexions UDP</b> », nous aborderons la programmation avec les sockets UDP (User Datagram Protocol).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Résolution de noms d'hôtes et DNS</b> », nous expliquerons comment les noms d'hôtes sont traduits en adresses IP. Nous présenterons un exemple de programme permettant d'effectuer des recherches DNS manuelles à l'aide d'UDP.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Création d'un client web simple</b> », nous présenterons HTTP, le protocole qui alimente les sites web. Nous nous lancerons directement dans la création d'un client HTTP en C/C++.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Construire un serveur web simple</b> », nous décrirons comment construire un serveur web entièrement fonctionnel en C/C++. Ce programme sera capable de servir un site web statique à partir de n'importe quel navigateur web moderne.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Mettre votre programme en route pour l'envoi d'e-mails</b> », nous décrirons le protocole SMTP (Simple Mail Transfer Protocol), qui gère les e-mails. Nous développerons un programme permettant d'envoyer des e-mails sur Internet.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Charger des pages web sécurisées avec HTTPS et OpenSSL</b> », nous explorerons TLS, le protocole qui sécurise les pages web. Nous développerons un client HTTPS capable de télécharger des pages web en toute sécurité.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Implémentation d'un serveur web sécurisé</b> », nous poursuivrons le thème de la sécurité et explorerons la construction d'un serveur web HTTPS sécurisé.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Établissement de connexions SSH avec libssh</b> », nous poursuivrons le thème du protocole sécurisé. L'utilisation de Secure Shell (SSH) sera abordée pour nous connecter à un serveur distant, exécuter des commandes et télécharger des fichiers en toute sécurité.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Surveillance et sécurité du réseau</b> », nous présenterons les outils et techniques utilisés pour tester les fonctionnalités du réseau, résoudre les problèmes et intercepter les protocoles de communication non sécurisés.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Conseils et pièges de la programmation par socket</b> », nous détaillerons TCP et aborderons de nombreux cas limites importants liés à la programmation par socket. Les techniques abordées seront précieuses pour créer des programmes réseau robustes.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Programmation Web pour l'Internet des Objets</b> », nous offrirons un aperçu de la conception et de la programmation des applications de l'Internet des Objets (IoT).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction-aux-reseaux-et-aux-protocoles">Introduction aux réseaux et aux protocoles</a>
</h1>
<div class="Section6"><br>Nous aborderons le routage du trafic Internet. Nous apprendrons qu'il existe deux versions du protocole Internet : IPv4 et IPv6. Nous découvrirons qu'IPv4 dispose d'un nombre limité d'adresses, et ces adresses s'épuisent. Nous verrons que l'un des principaux avantages d'IPv6 est qu'il offre suffisamment d'espace d'adressage pour que chaque système possède sa propre adresse unique routable publiquement. Nous découvrirons que le nombre limité d'adresses IPv4 est largement compensé par la traduction d'adresses réseau effectuée par les routeurs. Nous montrerons comment détecter votre adresse IP locale à l'aide des utilitaires et des API fournis par le système d'exploitation. Nous découvrirons que les API permettant de lister les adresses IP locales diffèrent sensiblement entre Windows et les systèmes d'exploitation de type Unix.<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#introduction-aux-reseaux-et-aux-protocoles_affichage-du-routage-du-trafic-reseau">Affichage du routage du trafic réseau</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#introduction-aux-reseaux-et-aux-protocoles_affichage-de-l-adresses-ip-locales">Affichage de l'adresses IP locales</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#introduction-aux-reseaux-et-aux-protocoles_affichage-de-l-adresse-ip-publique">Affichage de l'adresse IP publique</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets">Initialisation de l'API des sockets</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="introduction-aux-reseaux-et-aux-protocoles_affichage-du-routage-du-trafic-reseau" href="#introduction-aux-reseaux-et-aux-protocoles">Affichage du routage du trafic réseau</a>
</h2><br>Nous avons affiché les routeurs entre notre système Windows et un système de destination. Cette opération permet d'identifier les routeurs par lesquels doit transiter une requête en provenance de notre système avant d'atteindre une adresse de destination. Nous avons ouvert un Terminal et avons exécuté la commande d'affichage des routeurs.<br><br><span class="GText2" style="
color: #00ff00;
">// Terminal</span><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
tracert example.com
...</pre><br><span class="GText2" style="
color: #00ff00;
">// Terminal</span><br><div class="GImg1 Img1"><img loading="lazy" alt="image.png" src="/data/cache/page/readydev/home/tutoriels/c-lang/programmation-reseau-pratique-avec-c/data/17633646995154950-image.png"></div><br>Nous avons listé les routeurs entre notre système Unix et un système de destination. Cela permet de connaître les routeurs par lesquels doit transiter une requête en provenance de notre système avant d'atteindre une adresse de destination. Nous avons ouvert un Terminal et avons exécuté la commande d'affichage des routeurs.&nbsp;<br><br><span class="GText2" style="
color: #00ff00;
">// Terminal</span><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
traceroute example.com
...</pre><br><div class="GImg1 Img1"><img loading="lazy" alt="image.png" src="/data/cache/page/readydev/home/tutoriels/c-lang/programmation-reseau-pratique-avec-c/data/17633649371205783-image.png"></div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="introduction-aux-reseaux-et-aux-protocoles_affichage-de-l-adresses-ip-locales" href="#introduction-aux-reseaux-et-aux-protocoles">Affichage de l'adresses IP locales</a>
</h2><br>Nous avons affiché les adresses IP locales disponibles sur notre système Windows. L'adresse IP locale permet à un client de notre réseau local d'accéder à notre serveur local. Nous avons ouvert un Terminal et avons exécuté la commande d'affichage des adresses IP.&nbsp;<br><br><span class="GText2" style="
color: #00ff00;
">// Terminal</span><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
ipconfig
...</pre><br><span class="GText2" style="
color: #00ff00;
">// Terminal</span><br><div class="GImg1 Img1"><img loading="lazy" alt="image.png" src="/data/cache/page/readydev/home/tutoriels/c-lang/programmation-reseau-pratique-avec-c/data/17633656068398349-image.png"></div><br>Nous avons affiché les adresses IP locales disponibles sur notre système Unix. L'adresse IP locale permet à un client de notre réseau local d'accéder à notre serveur local. Nous avons ouvert un Terminal et avons exécuté la commande d'affichage des adresses IP.<br><br><span class="GText2" style="
color: #00ff00;
">// Terminal</span><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
ip a s
...</pre><br><span class="GText2" style="
color: #00ff00;
">// Terminal</span><br><div class="GImg1 Img1"><img loading="lazy" alt="image.png" src="/data/cache/page/readydev/home/tutoriels/c-lang/programmation-reseau-pratique-avec-c/data/17633656509369307-image.png"></div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="introduction-aux-reseaux-et-aux-protocoles_affichage-de-l-adresse-ip-publique" href="#introduction-aux-reseaux-et-aux-protocoles">Affichage de l'adresse IP publique</a>
</h2><br>Nous avons affiché l'adresse IP publique de notre interface réseau. L'adresse IP publique permet à un client extérieur à notre réseau local d'accéder à notre serveur local depuis internet grâce à une redirection de port. Nous nous sommes rendus sur la page web d'un service de gestion d'adresse IP publique (<a class="GLink3 Link4" style=" color: lime;" href="https://api.ipify.org/" target="_blank">https://api.ipify.org/</a>) et avons vu afficher notre adresse IP publique.<br><br><span class="GText2" style="
color: #00ff00;
">// Navigateur web</span><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
https://api.ipify.org/
...</pre><br><span class="GText2" style="
color: #00ff00;
">// Navigateur web</span><br><div class="GImg1 Img1"><img loading="lazy" alt="image.png" src="/data/cache/page/readydev/home/tutoriels/c-lang/programmation-reseau-pratique-avec-c/data/17633656948059824-image.png"></div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets" href="#introduction-aux-reseaux-et-aux-protocoles">Initialisation de l'API des sockets</a>
</h2><br>Nous avons écrit un programme en C/C++ permettant d'initialiser et de nettoyer l'API des sockets, portable sur les systèmes Windows, Linux ou MacOS. Même si cette opération est uniquement obligatoire pour les systèmes Windows, nous devons, néanmoins, assurer la portabilité du code source sur les autres systèmes afin d'offrir une même interface pour tous les systèmes.&nbsp;<br><br><div class="GSummary3"><div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_prerequis-sur-la-portabilite-du-code-source">Prérequis sur la portabilité du code source</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_prerequis-sur-l-initialisation-de-l-api-des-sockets">Prérequis sur l'initialisation de l'API des sockets</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_prerequis-sur-le-nettoyage-de-l-api-des-sockets">Prérequis sur le nettoyage de l'API des sockets</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_prerequis-sur-l-automatisation-du-nettoyage-de-l-api-des-sockets">Prérequis sur l'automatisation du nettoyage de l'API des sockets</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_developpement-du-programme-principal">Développement du programme principal</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_developpement-du-manager-de-l-api-des-sockets">Développement du manager de l'API des sockets</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_developpement-de-la-configuration-cmake">Développement de la configuration CMake</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_test-sur-l-initialisation-de-l-api-des-sockets">Test sur l'initialisation de l'API des sockets</a>
</div>
</div><br><h3 class="GTitle2 Title3">
<a class="Title4" id="introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_prerequis-sur-la-portabilite-du-code-source" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets">Prérequis sur la portabilité du code source</a>
</h3><br>Nous avons assuré la portabilité du code source dans le fichier (CMakeLists.txt). Sur les systèmes Windows (WIN32), nous avons ajouté le fichier (SocketWin.cpp) aux codes sources. Dans le cas contraire, sur les systèmes Linux ou MacOS, nous avons ajouté le fichier (SocketUnix.cpp) aux codes sources.<br><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">... 
if(WIN32)
    list(APPEND SRC_FILES
        SocketWin.cpp
    )
else()
    list(APPEND SRC_FILES
        SocketUnix.cpp
    )
endif()  
...</pre><br>Nous avons assuré la portabilité du code source dans le fichier (Socket.hpp). Sur les systèmes Windows (_WIN32), nous avons défini la version minimale du système d'exploitation Windows compatible avec le code source (_WIN32_WINNT), nous avons inclus le fichier d'entête de l'API des sockets Windows (Winsock2.h) et nous avons édité les liens du code source à la librairie de l'API des sockets Windows (ws2_32.lib). Sur les systèmes Linux ou MacOS, nous n'avons pas d'initialiser ou de nettoyer l'API des sockets.<br><br><span class="GText2" style="
color: #00ff00;
">// Socket.hpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">... 
#if defined(_WIN32)
#ifndef _WIN32_WINNT
#define _WIN32_WINNT 0x0600
#endif
#include &lt;winsock2.h&gt;
#pragma comment(lib, "ws2_32.lib")
#endif  
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_prerequis-sur-l-initialisation-de-l-api-des-sockets" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets">Prérequis sur l'initialisation de l'API des sockets</a>
</h3><br>Nous avons initialisé l'API des sockets sur les systèmes Windows (WSAStartup). Sur les systèmes Linux ou MacOS, nous n'avons pas besoin d'initialiser l'API des sockets.<br><br><span class="GText2" style="
color: #00ff00;
">// SocketWin.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">... 
bool Socket::initSocket() const
{
    WSADATA d;

    if (WSAStartup(MAKEWORD(2, 2), &amp;d))
    {
        printf("initSocket() failed.\n");
        return false;
    }
    return true;
}  
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_prerequis-sur-le-nettoyage-de-l-api-des-sockets" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets">Prérequis sur le nettoyage de l'API des sockets</a>
</h3><br>Nous avons nettoyé l'API des sockets sur les systèmes Windows (WSAStartup). Sur les systèmes Linux ou MacOS, nous n'avons pas besoin d'initialiser l'API des sockets.<br><br><span class="GText2" style="
color: #00ff00;
">// SocketWin.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">... 
void Socket::cleanSocket() const
{
    WSACleanup();
}  
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_prerequis-sur-l-automatisation-du-nettoyage-de-l-api-des-sockets" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets">Prérequis sur l'automatisation du nettoyage de l'API des sockets</a>
</h3><br>Nous avons automatisé le nettoyage de l'API des sockets. Nous avons créé une classe (SocketClean) et avons appelé la méthode (cleanSocket) dans le destructeur de la classe (~SocketClean). Ainsi, après l'initialisation de l'API des sockets, nous pouvons créer une instance de la classe (SocketClean) pour garantir le nettoyage de l'API des sockets.<br><br><span class="GText2" style="
color: #00ff00;
">// Socket.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">... 
SocketClean::~SocketClean()
{
    Socket oSocket;
    oSocket.cleanSocket();
}  
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_developpement-du-programme-principal" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets">Développement du programme principal</a>
</h3><br>Nous avons initialisé l'API des sockets (initSocket) et avons créé une instance de la classe (SocketClean) qui gère le nettoyage de l'API des sockets dans le destructeur de la classe.<br><br><span class="GText2" style="
color: #00ff00;
">// main.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include "Socket.hpp"

int main(int _argc, char** _argv)
{
    Socket oSocket;
    if (!oSocket.initSocket())
        return 0;

    SocketClean oSocketClean;

    printf("Socket() Ok.\n");
    return 0;
}</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_developpement-du-manager-de-l-api-des-sockets" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets">Développement du manager de l'API des sockets</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// Socket.hpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#pragma once

// Windows
#if defined(_WIN32)
#ifndef _WIN32_WINNT
#define _WIN32_WINNT _WIN32_WINNT_WIN6
#endif
#include &lt;winsock2.h&gt;
#pragma comment(lib, "ws2_32.lib")
#endif

#include &lt;iostream&gt;

// Socket
class Socket
{
public:
    explicit Socket();
    ~Socket();
    bool initSocket() const;
    void cleanSocket() const;
};

// SocketClean
class SocketClean
{
public:
    explicit SocketClean();
    ~SocketClean();
};</pre><br><span class="GText2" style="
color: #00ff00;
">// Socket.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include "Socket.hpp"

// Socket
Socket::Socket()
{
}

Socket::~Socket()
{
}

// SocketClean
SocketClean::SocketClean()
{
}

SocketClean::~SocketClean()
{
    Socket oSocket;
    oSocket.cleanSocket();
}</pre><br><span class="GText2" style="
color: #00ff00;
">// SocketWin.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include "Socket.hpp"

bool Socket::initSocket() const
{
    WSADATA d;

    if (WSAStartup(MAKEWORD(2, 2), &amp;d))
    {
        printf("initSocket() failed.\n");
        return false;
    }
    return true;
}

void Socket::cleanSocket() const
{
    WSACleanup();
}</pre><br><span class="GText2" style="
color: #00ff00;
">// SocketUnix.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include "Socket.hpp"

bool Socket::initSocket() const
{
    return true;
}

void Socket::cleanSocket() const
{
}</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_developpement-de-la-configuration-cmake" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets">Développement de la configuration CMake</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt</span><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">cmake_minimum_required(VERSION 3.10.0)
project(c01-socket-init VERSION 0.1.0 LANGUAGES C CXX)

set(SRC_FILES
    main.cpp
    Socket.hpp
    Socket.cpp
)

if(WIN32)
    list(APPEND SRC_FILES
        SocketWin.cpp
    )
else()
    list(APPEND SRC_FILES
        SocketUnix.cpp
    )
endif()

add_executable(${PROJECT_NAME}
    ${SRC_FILES}
)</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets_test-sur-l-initialisation-de-l-api-des-sockets" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-de-l-api-des-sockets">Test sur l'initialisation de l'API des sockets</a>
</h3><br>Nous avons affiché un message « socket() Ok. » pour indiquer que l'initialisation de l'API des sockets s'est bien déroulé.<br><br><span class="GText2" style="
color: #00ff00;
">// Terminal</span><br><div class="GImg1 Img1"><img loading="lazy" alt="image.png" src="/data/cache/page/readydev/home/tutoriels/c-lang/programmation-reseau-pratique-avec-c/data/17634083027066952-image.png"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="a-suivre">À suivre</a>
</h1>
<div class="Section6"><br>À suivre...<br><br></div>
</div>
</div>
</div><br>