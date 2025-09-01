<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#c-lang">C</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/c-lang/programmation-reseau-pratique-avec-c">Programmation réseau pratique avec C</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Programmation réseau pratique avec C</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>La programmation <b>réseau </b>est un sujet passionnant, mais aussi très profond ; il se passe beaucoup de choses à de nombreux niveaux. Certains langages de programmation masquent ces abstractions. Avec le langage <b>Python</b>, par exemple, vous pouvez télécharger une page web entière en une seule ligne de code. Ce n'est pas le cas en <b>C</b> ! En <b>C</b>, pour télécharger une page web, il est essentiel de tout connaître. Il faut connaître les <b>sockets</b>, le protocole <b>TCP </b>(Transfer Control Protocol) et <b>HTTP</b>. En programmation réseau en <b>C</b>, rien n'est caché.<br><br>Le <b>C</b> est un excellent langage pour apprendre la programmation <b>réseau</b>. Non seulement parce qu'il permet de voir tous les détails, mais aussi parce que les <b>systèmes d'exploitation</b> les plus répandus utilisent tous des noyaux écrits en <b>C</b>. Aucun autre langage ne vous offre un accès aussi performant que le <b>C</b>. En <b>C</b>, tout est sous votre contrôle : vous pouvez organiser vos <b>structures de données</b> exactement comme vous le souhaitez, gérer la <b>mémoire </b>avec précision et même vous tirer une balle dans le pied comme bon vous semble.<br><br>En matière de programmation <b>réseau</b>, on ne peut pas se contenter de l'approche « <b>ça marche, c'est suffisant</b> » de la programmation par coïncidence. Il faut utiliser le raisonnement.<br><br>Dans ce tutoriel, je m'attache à aborder la programmation <b>réseau </b>de manière moderne et sécurisée. Les programmes d'exemple sont soigneusement conçus pour fonctionner avec <b>IPv4 </b>et <b>IPv6</b>, et sont tous écrits de manière <b>portable </b>et indépendante du <b>système d'exploitation</b>, dans la mesure du possible.<br><br>Dès qu'il existe un risque d'erreur de <b>mémoire</b>, je m'efforce d'en tenir compte et de le signaler. La <b>sécurité </b>est trop souvent négligée. Je suis convaincu que la <b>sécurité </b>est importante et qu'elle doit être intégrée au système dès le départ. C'est pourquoi, en plus d'enseigner les bases du <b>réseau</b>, ce tutoriel aborde en détail les <b>protocoles sécurisés</b>, tels que <b>TLS</b>. J'espère que vous prendrez autant de plaisir à lire ce tutoriel.
&nbsp;<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#contenu-de-ce-tutoriel">Contenu de ce tutoriel</a>
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
<a class="Section5" href="#" id="contenu-de-ce-tutoriel">Contenu de ce tutoriel</a>
</h1>
<div class="Section6"><br>La section, « <b>Introduction aux réseaux et aux protocoles</b> », présente les concepts importants liés aux réseaux. Cette section inclut des exemples de programmes pour déterminer votre adresse IP de manière pragmatique.<br><br>La section, « <b>Se familiariser avec les API Socket</b> », présente les API de programmation de sockets et vous permet de créer votre premier programme réseau : un petit serveur web.

La section, « Présentation approfondie des connexions TCP », se concentre sur la programmation des sockets TCP. Cette section contient des exemples de programmes développés pour les côtés client et serveur.<br><br>La section, « <b>Établissement de connexions UDP</b> », aborde la programmation avec les sockets UDP (User Datagram Protocol).

La section, « Résolution de noms d'hôtes et DNS », explique comment les noms d'hôtes sont traduits en adresses IP. Cette section présente un exemple de programme permettant d'effectuer des recherches DNS manuelles à l'aide d'UDP.<br><br>La section, « <b>Création d'un client web simple</b> », présente HTTP, le protocole qui alimente les sites web. Nous nous lançons directement dans la création d'un client HTTP en C.<br><br>La section, « <b>Construire un serveur web simple</b> », décrit comment construire un serveur web entièrement fonctionnel en C. Ce programme est capable de servir un site web statique à n'importe quel navigateur web moderne.<br><br>La section, « <b>Mettre votre programme en route pour l'envoi d'e-mails</b> », décrit le protocole SMTP (Simple Mail Transfer Protocol), qui gère les e-mails. Dans cette section, nous développons un programme permettant d'envoyer des e-mails sur Internet.<br><br>La section, « <b>Charger des pages web sécurisées avec HTTPS et OpenSSL</b> », explore TLS, le protocole qui sécurise les pages web. Dans cette section, nous développons un client HTTPS capable de télécharger des pages web en toute sécurité.<br><br>La section, « <b>Implémentation d'un serveur web sécurisé</b> », poursuit le thème de la sécurité et explore la construction d'un serveur web HTTPS sécurisé.<br><br>La section, « <b>Établissement de connexions SSH avec libssh</b> », poursuit le thème du protocole sécurisé. L'utilisation de Secure Shell (SSH) est abordée pour se connecter à un serveur distant, exécuter des commandes et télécharger des fichiers en toute sécurité.<br><br>La section, « <b>Surveillance et sécurité du réseau</b> », présente les outils et techniques utilisés pour tester les fonctionnalités du réseau, résoudre les problèmes et intercepter les protocoles de communication non sécurisés.<br><br>La section, « <b>Conseils et pièges de la programmation par socket</b> », détaille TCP et aborde de nombreux cas limites importants liés à la programmation par socket. Les techniques abordées sont précieuses pour créer des programmes réseau robustes.<br><br>La section, « <b>Programmation Web pour l'Internet des Objets</b> », offre un aperçu de la conception et de la programmation des applications de l'Internet des Objets (IoT).

L'annexe, « Réponses aux questions », répond aux questions de compréhension posées à la fin de chaque section.<br><br>L'annexe, « <b>Configuration de votre compilateur C sous Windows</b> », explique comment configurer l'environnement de développement Windows nécessaire à la compilation de tous les programmes d'exemple de ce tutoriel.<br><br>L'annexe, « <b>Configuration de votre compilateur C sous Linux</b> », fournit les instructions de configuration pour préparer votre ordinateur Linux à compiler tous les programmes d'exemple de ce tutoriel.<br><br>L'annexe, « <b>Configuration de votre compilateur C sous macOS</b> », explique étape par étape comment configurer votre système macOS afin qu'il puisse compiler tous les programmes d'exemple de ce tutoriel.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction-aux-reseaux-et-aux-protocoles">Introduction aux réseaux et aux protocoles</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#introduction-aux-reseaux-et-aux-protocoles_determination-des-routeurs-de-transit">Détermination des routeurs de transit</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#introduction-aux-reseaux-et-aux-protocoles_determination-de-l-adresse-ip">Détermination de l'adresse IP</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#introduction-aux-reseaux-et-aux-protocoles_determination-de-l-adresse-ip-publique">Détermination de l'adresse IP publique</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#introduction-aux-reseaux-et-aux-protocoles_initialisation-et-liberation-de-la-librairie-reseau-sous-windows">Initialisation et libération de la librairie réseau sous Windows</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#introduction-aux-reseaux-et-aux-protocoles_determination-de-la-liste-des-cartes-reseau-sous-windows">Détermination de la liste des cartes réseau sous Windows</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#introduction-aux-reseaux-et-aux-protocoles_determination-de-la-liste-des-cartes-reseau-sous-linux">Détermination de la liste des cartes réseau sous Linux</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="introduction-aux-reseaux-et-aux-protocoles_determination-des-routeurs-de-transit" href="#introduction-aux-reseaux-et-aux-protocoles">Détermination des routeurs de transit</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">Nous souhaitons déterminer les routeurs par lesquels transitent les messages sortant de notre machine vers une machine distante (readydev.ovh).</span><br><br>Nous lançons la commande de traçage (tracert) en indiquant la machine de destination (readydev.ovh) sous Windows (Voir Extrait 1 : Ligne 4).<br><br>Nous lançons la commande de traçage (traceroute) en indiquant la machine de destination (readydev.ovh) sous Linux (Voir Extrait 1 : Ligne 8).<br><br><span class="GText2" style="
color: #00ff00;
">Extrait 1 : Affichage des routeurs de transit vers une machine distante</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
Sous WIndows
...
&gt; tracert readydev.ovh
...
Sous Linux
...
$ traceroute readydev.ovh
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="introduction-aux-reseaux-et-aux-protocoles_determination-de-l-adresse-ip" href="#introduction-aux-reseaux-et-aux-protocoles">Détermination de l'adresse IP</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">Nous souhaitons déterminer l'adresse IP de notre système.</span><br><br>Nous lançons la commande (ipconfig) pour afficher les adresses IP de nos cartes réseau sous Windows (Voir Extrait 1 : Ligne 4).<br><br>Nous lançons la commande (ifconfig) pour afficher les adresses IP de nos cartes réseau sous Linux (Voir Extrait 1 : Ligne 8). C'est l'ancienne procédure, obsolète aujourd'hui.<br><br>Nous pouvons aussi lancer la commande (ip addr) pour afficher les adresses IP de nos cartes réseau sous Linux (Voir Extrait 1 : Ligne 9). C'est la nouvelle procédure, recommandée.<br><br>Nous lançons la commande (ifconfig) pour afficher les adresses IP de nos cartes réseau sous MacOS (Voir Extrait 1 : Ligne 13).<br><br><span class="GText2" style="
color: #00ff00;
">Extrait 1 : Détermination de l'adresse IP</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
&gt; ipconfig
...
Sous Linux
...
$ ifconfig
$ ip addr
...
Sous MacOS
...
$ ifconfig
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="introduction-aux-reseaux-et-aux-protocoles_determination-de-l-adresse-ip-publique" href="#introduction-aux-reseaux-et-aux-protocoles">Détermination de l'adresse IP publique</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">Nous souhaitons déterminer l'adresse IP publique de notre système.</span><br><br>Nous cliquons sur l'un des liens ci-dessous pour afficher l'adresse IP publique de notre machine (Voir Extrait 1 : Ligne 2,3,4).&nbsp;&nbsp;<br><br><span class="GText2" style="
color: #00ff00;
">Extrait 1 : Détermination de l'adresse IP</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
- http://api.ipify.org/
- http://icanhazip.com/
- http://ifconfig.me/ip
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="introduction-aux-reseaux-et-aux-protocoles_initialisation-et-liberation-de-la-librairie-reseau-sous-windows" href="#introduction-aux-reseaux-et-aux-protocoles">Initialisation et libération de la librairie réseau sous Windows</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">Nous souhaitons initialiser et libérer la librairie (Winsock2) chargée de la communication réseau sous notre système Windows à partir d'un programme C.</span><br><br>Nous incluons le fichier d'entête C de la librairie (Winsock2) (Voir Extrait 1 : Ligne 3).<br><br>Nous éditons les liens avec la libraire (Winsock2) à partir de la directive (#pragma comment) en indiquant la librairie (ws2_32.lib) (Voir Extrait 1 : Ligne 5).<br><br>Nous notons que, la directive (#pragma comment) est prise en compte par le compilateur MSVC, mais ignorée par le compilateur MinGW.<br><br>Nous construisons la version de la librairie (Winsock2) à utiliser grâce à la macro (MAKEWORD) en indiquant la version majeur (2) dans le premier argument et la version mineur (2) dans le deuxième argument pour correspondre à la version (2.2) et nous initialisons la libraire (Winsock2) grâce à la fonction (WSAStartup) (Voir Extrait 1 : Ligne 10).<br><br>Nous libérons la mémoire interne allouée par la librairie (Winsock2) grâce à la fonction (WSACleanup) à la fin de l'opération (Voir Extrait 1 : Ligne 16).<br><br><span class="GText2" style="
color: #00ff00;
">Extrait 1 : Initialisation et libération de la librairie (Winsock2)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#include &lt;stdio.h&gt;
#include &lt;winsock2.h&gt;

#pragma comment(lib, "ws2_32.lib")

int main()
{
    WSADATA d;
    if (WSAStartup(MAKEWORD(2, 2), &amp;d))
    {
        printf("Failed to initialize.\n");
        return -1;
    }

    WSACleanup();
    printf("Ok.\n");
    return 0;
}
...</pre><br>Nous démarrons la compilation grâce à la commande (gcc) en indiquant le fichier source (main.c) et le nom du fichier exécutable (setup.exe) et nous éditions les liens avec la librairie (Winsock2) pour le compilateur MinGW sous Windows (Voir Extrait 2 : Ligne 2).<br><br><span class="GText2" style="
color: #00ff00;
">Extrait 2 : Compilation et édition des liens avec la librairie (Winsock2)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
&gt; gcc main.c -o setup.exe -lws2_32
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="introduction-aux-reseaux-et-aux-protocoles_determination-de-la-liste-des-cartes-reseau-sous-windows" href="#introduction-aux-reseaux-et-aux-protocoles">Détermination de la liste des cartes réseau sous Windows</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">Nous souhaitons lister les cartes réseau sous notre système Windows à partir d'un programme C basé sur la librairie (Winsock2).</span><br><br>Nous définissons la macro (WIN32_WINNT) afin de pouvoir inclure les versions appropriées des fichiers d'entête C sous Windows (Voir Extrait 1 : Ligne 3).<br><br>Nous incluons les fichiers d'entête C de la librairie (Winsock2) (Voir Extrait 1 : Ligne 6,8).<br><br>Nous incluons les fichiers d'entête C de la librairie (IP Helper) (Voir Extrait 1 : Ligne 7).<br><br>Nous éditons par programmation les liens avec la librairie (Winsock2) grâce à la directive (#pragma comment) en indiquant la librairie (ws2_32.lib) (Voir Extrait 1 : Ligne 12).<br><br>Nous éditons par programmation les liens avec la librairie (IP Helper) grâce à la directive (#pragma comment) en indiquant la librairie (iphlpapi.lib) (Voir Extrait 1 : Ligne 13).<br><br>Nous initialisons la librairie (Winsock2) (Voir Extrait 1 : Ligne 18).<br><br>Nous créons dynamiquement de la mémoire pour les adaptateurs réseau (adapters) de type (PIP_ADAPTER_ADDRESSES) grâce à la fonction (malloc) en indiquant la taille de l'espace mémoire (asize) (Voir Extrait 1 : Ligne 28).<br><br>Nous réservons une mémoire de 20.000 octets (Voir Extrait 1 : Ligne 24).<br><br>Nous récupérons la liste chaînée de tous les adaptateurs réseau installés sur notre système Windows grâce à la méthode (GetAdaptersAddresses) en indiquant que nous souhaitons des adresses réseau IPv4 et IPv6 (AF_UNSPEC) (Voir Extrait 1 : Ligne 37).<br><br>Nous pouvons aussi spécifier (AF_INET) pour les adresses réseau IPv4 uniquement ou (AF_INET6) pour les adresses réseau IPv6 uniquement.

La fonction (GetAdaptersAddresses) nous renvoie le code d'erreur (ERROR_BUFFER_OVERFLOW) si taille de la mémoire allouée (asize) est insuffisante pour stocker toutes les adresses des adaptateurs réseau disponibles 
(Voir Extrait 1 : Ligne 39). Dans ce cas la variable (asize) est modifiée pour stocker la taille de la mémoire requise.<br><br>Nous libérons la mémoire allouée par les adaptateurs réseau (adapters) pour reprendre l'opérations (Voir Extrait 1 : Ligne 42). 

La fonction (GetAdaptersAddresses) nous renvoie le code de succès (ERROR_SUCCESS) si l'opération s'est bien déroulée (Voir Extrait 1 : Ligne 44). Dans ce cas, nous cassons la boucle avec l'instruction (break) pour continuer l'opération (Voir Extrait 1 : Ligne 46).<br><br>Nous récupérons le pointeur direct vers le premier adaptateur réseau (adapter) (Voir Extrait 1 : Ligne 57).<br><br>Nous entrons dans une boucle pour parcourir la liste des adaptateurs réseau (adapter) 
(Voir Extrait 1 : Ligne 58).<br><br>Nous affichons le nom de l'adaptateur réseau (FriendlyName) à partir du gestionnaire (adapter) (Voir Extrait 1 : Ligne 60).<br><br>Nous récupérons le pointeur direct vers l'adresse du premier adaptateur réseau (address) de type (PIP_ADAPTER_UNICAST_ADDRESS) à partir du gestionnaire (adapter) en indiquant le pointeur (FirstUnicastAddress) (Voir Extrait 1 : Ligne 62).<br><br>Nous entrons dans une boucle pour parcourir la liste des adresses des adaptateurs réseau (address) (Voir Extrait 1 : Ligne 63).<br><br>Nous récupérons le type de l'adresse IP (sa_family) à partir du gestionnaire (address) et nous affichons s'il s'agit d'une adresse IPv4 ou IPv6 (Voir Extrait 1 : Ligne 66).<br><br>Nous récupérons la chaîne de l'adresse IP (ap) grâce à la fonction (getnameinfo) en indiquant l'adresse du socket réseau (lpSockaddr) à partir du gestionnaire (address), la taille en octet de l'adresse du socket réseau (iSockaddrLength) à partir du gestionnaire (address) (Voir Extrait 1 : Ligne 71).<br><br>Nous affichons la chaîne de l'adresse IP de l'adaptateur réseau (Voir Extrait 1 : Ligne 74).<br><br>Nous récupérons l'adresse de l'adaptateur réseau suivante (address) à partir du gestionnaire (address) en indiquant le pointeur suivant (Next) (Voir Extrait 1 : Ligne 71).<br><br>Nous récupérons l'adaptateur réseau suivant (adapter) à partir du gestionnaire (adapter) en indiquant le pointeur (Next) (Voir Extrait 1 : Ligne 79).<br><br>Nous libérons la mémoire allouée par les adaptateurs réseau (adapters) (Voir Extrait 1 : Ligne 82).<br><br>Nous libérons la mémoire allouée par la librairie (Winsock2) (Voir Extrait 1 : Ligne 83).<br><br><span class="GText2" style="
color: #00ff00;
">Extrait 1 : Détermination de la liste des cartes réseau sous Windows</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#ifndef _WIN32_WINNT
#define _WIN32_WINNT 0x0600
#endif

#include &lt;winsock2.h&gt;
#include &lt;iphlpapi.h&gt;
#include &lt;ws2tcpip.h&gt;
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

#pragma comment(lib, "ws2_32.lib")
#pragma comment(lib, "iphlpapi.lib")

int main()
{
    WSADATA d;
    if (WSAStartup(MAKEWORD(2, 2), &amp;d))
    {
        printf("Failed to initialize.\n");
        return -1;
    }

    DWORD asize = 20000;
    PIP_ADAPTER_ADDRESSES adapters;
    do
    {
        adapters = (PIP_ADAPTER_ADDRESSES)malloc(asize);

        if (!adapters)
        {
            printf("Couldn't allocate %ld bytes for adapters.\n", asize);
            WSACleanup();
            return -1;
        }

        int r = GetAdaptersAddresses(AF_UNSPEC, GAA_FLAG_INCLUDE_PREFIX, 0,
                                     adapters, &amp;asize);
        if (r == ERROR_BUFFER_OVERFLOW)
        {
            printf("GetAdaptersAddresses wants %ld bytes.\n", asize);
            free(adapters);
        }
        else if (r == ERROR_SUCCESS)
        {
            break;
        }
        else
        {
            printf("Error from GetAdaptersAddresses: %d\n", r);
            free(adapters);
            WSACleanup();
            return -1;
        }
    } while (!adapters);

    PIP_ADAPTER_ADDRESSES adapter = adapters;
    while (adapter)
    {
        printf("\nAdapter name: %S\n", adapter-&gt;FriendlyName);

        PIP_ADAPTER_UNICAST_ADDRESS address = adapter-&gt;FirstUnicastAddress;
        while (address)
        {
            printf("\t%s",
                   address-&gt;Address.lpSockaddr-&gt;sa_family == AF_INET ? 
                   "IPv4" : "IPv6");

            char ap[100];

            getnameinfo(address-&gt;Address.lpSockaddr,
                        address-&gt;Address.iSockaddrLength,
                        ap, sizeof(ap), 0, 0, NI_NUMERICHOST);
            printf("\t%s\n", ap);

            address = address-&gt;Next;
        }

        adapter = adapter-&gt;Next;
    }

    free(adapters);
    WSACleanup();
    return 0;
}
...</pre><br>Nous compilons le projet pour le compilateur MinGW (Voir Extrait 2 : Ligne 2).<br><br><span class="GText2" style="
color: #00ff00;
">Extrait 2 : Compilation et édition des liens du projet sous MinGW</span>&nbsp;&nbsp;&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
&gt; gcc main.c -o setup.exe -liphlpapi -lws2_32
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="introduction-aux-reseaux-et-aux-protocoles_determination-de-la-liste-des-cartes-reseau-sous-linux" href="#introduction-aux-reseaux-et-aux-protocoles">Détermination de la liste des cartes réseau sous Linux</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">Nous souhaitons lister les cartes réseau sous notre système Linux ou MacOS à partir d'un programme C basé sur la librairie (socket).</span><br><br>Nous incluons les fichiers d'entête C de la librairie (socket) (Voir Extrait 1 : Ligne 2).<br><br>Nous récupérons la liste chainée des interfaces réseau (addresses) de type (ifaddrs) grâce à la fonction (getifaddrs) (Voir Extrait 1 : Ligne 12).<br><br>Nous récupérons le pointeur direct vers la première interface réseau (address) à partir du gestionnaire (Voir Extrait 1 : Ligne 18).<br><br>Nous entrons dans une boucle pour parcourir la liste des interfaces réseau (address) (Voir Extrait 1 : Ligne 19).<br><br>Nous récupérons le type de l'interface réseau (family) à partir du gestionnaire (address) en indiquant le type (sa_family) (Voir Extrait 1 : Ligne 26).<br><br>Nous affichons le nom de l'interface réseau (ifa_name) à partir du gestionnaire (address) (Voir Extrait 1 : Ligne 26).<br><br>Nous vérifions le type de l'interface réseau (family) pour afficher s'il s'agit d'une adresse IPv4 ou IPv6 (Voir Extrait 1 : Ligne 33).<br><br>Nous récupérons la taille en octets de l'adresse du socket réseau IPv4 ou IPv6 (family_size) en fonction du type (family) (Voir Extrait 1 : Ligne 30).<br><br>Nous récupérons la chaîne de l'adresse IP de l'interface réseau (ap) grâce à la fonction (getnameinfo) en indiquant l'adresse du socket réseau (ifa_addr) à partir du gestionnaire (address) et la taille en octet de l'adresse du socket réseau (family_size) (Voir Extrait 1 : Ligne 35).<br><br>Nous affichons la chaîne de l'adresse IP de l'interface réseau (ap) (Voir Extrait 1 : Ligne 37).<br><br>Nous récupérons l'adresse de l'interface réseau suivante (address) à partir du gestionnaire (address) en indiquant le pointeur suivant (ifa_next)  (Voir Extrait 1 : Ligne 39).<br><br>Nous libérons la mémoire allouée par le gestionnaire d'interfaces réseau (addresses)  (Voir Extrait 1 : Ligne 42).<br><br><span class="GText2" style="
color: #00ff00;
">Extrait 1 : Détermination de la liste des cartes réseau sous Linux ou MacOS</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#include &lt;sys/socket.h&gt;
#include &lt;netdb.h&gt;
#include &lt;ifaddrs.h&gt;
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

int main()
{
    struct ifaddrs *addresses;

    if (getifaddrs(&amp;addresses) == -1)
    {
        printf("getifaddrs call failed\n");
        return -1;
    }

    struct ifaddrs *address = addresses;
    while (address)
    {
        if (address-&gt;ifa_addr == NULL)
        {
            address = address-&gt;ifa_next;
            continue;
        }
        int family = address-&gt;ifa_addr-&gt;sa_family;
        if (family == AF_INET || family == AF_INET6)
        {
            printf("%s\t", address-&gt;ifa_name);
            printf("%s\t", family == AF_INET ? "IPv4" : "IPv6");

            char ap[100];
            const int family_size = family == AF_INET ? sizeof(struct 
            sockaddr_in) : sizeof(struct sockaddr_in6);
            getnameinfo(address-&gt;ifa_addr,
                        family_size, ap, sizeof(ap), 0, 0, NI_NUMERICHOST);
            printf("\t%s\n", ap);
        }
        address = address-&gt;ifa_next;
    }

    freeifaddrs(addresses);
    return 0;
}
...</pre><br>Nous compilons le projet sous Linux ou MacOS (Voir Extrait 2 : Ligne 2).<br><br><span class="GText2" style="
color: #00ff00;
">Extrait 2 : Compilation du projet sous Linux ou MacOS</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ gcc main.c -o setup
...</pre><br></div>
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