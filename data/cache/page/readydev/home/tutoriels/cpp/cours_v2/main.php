<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/cours_2">Cours</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Programmation en C++</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programmer en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#recommandations-techniques">Recommandations techniques</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#le-compilateur-mingw">Le compilateur MinGW</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#le-compilateur-cygwin">Le compilateur Cygwin</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#les-variables-d-environnement">Les variables d'environnement</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#le-programme-minimal">Le programme minimal</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#les-bibliotheques-statiques">Les bibliothèques statiques</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#les-bibliotheques-dynamiques">Les bibliothèques dynamiques</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#les-commentaires">Les commentaires</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#les-directives-de-preprocesseur">Les directives de préprocesseur</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#la-fonction-principale">La fonction principale</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#les-flux-d-entree-sortie">Les flux d'entrée/sortie</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#les-espaces-de-noms">Les espaces de noms</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#les-variables">Les variables</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#les-operateurs">Les opérateurs</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br>La plus part des systèmes d'exploitation les plus populaires sont principalement écrits en <b>C++</b>, ou utilisent des composants et des bibliothèques qui sont écrits en C++. Il est quasiment impossible de trouver un ordinateur qui ne contient pas de code écrit en C++. Le C++ offre une certaine flexibilité tout comme les langages modernes de haut niveau et une puissance de calcul considérable en vous donnant un accès direct à la mémoire afin d'optimiser sa gestion et augmenter ainsi les performances de votre application.&nbsp;Grâce à des fonctionnalités telles que les classes et la surcharge des opérateurs ou des méthodes, le C++ vous permet d'étendre les fonctionnalités du langage et d'écrire du code réutilisable.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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MAADwRkI/kBUKyMXGIABGIABGICBamcAgYVqhwEYgAEYgAEYgIHADGDQwAatdsVO/hm1wgAMwAAMwADiIrsCs2fPnuakk04yp556aurX0UcfbY444gjTv39/06tXL7PWWmuZpZdemopB4wgDMJBJBtSGHXvssV5t4n777WdatmyZyfzSh5d1H17WiQP4Ao38JZdcYr7//nvz22+/pX599913Zvr06ebLL7807733nnnmmWfMddddZ/r27WtatGiB/QvYn4aNtgMGyo8BDRQ//fRTrzbx8ccfN506daK9o70LzUD5VRAaLbcy+cc//hE1IibwNWvWLPPFF1+Yhx56yGy//famadOmplGjRqHB43k0ZjAAA8EZ6N27t5kyZYpXq/j000+bDTbYIHha6Mvc+rIKtlPVGyCzlapYAsu2TBJab7zxhvnzn/9smjdvnlk7VXDlpUwQKBXBwJprrml22GEHI3Hk+urcubNZdtllF8s/Aos+vYzafAqjjApjscaiUNqKLbAktObOnWteeeUVs9NOO5mlllrKK32F0s7fqHcwAAOWgQMPPDByUdDMk+vrqquuMqussspibRICC64sV2VwpzDKoBAWayRc0lQKgSWRpZmsO+64w7Rt2zZVOl3ywnuohzBQvQwceeSR5ttvv7WT5053tUlt2rRZrE1CYFUvR2XYhlAYZVgoizUa+dJYKoGl1m7SpEmmR48eTunKl1Z+Rz2DARiojYGQAkvt1Pjx451nwjRjNmzYMNOhQwfaN5bcQzNApa+t0pf770spsLRUOHDgwLw+D+VuJ9JHHYeB8mYgpMDSppx1113XrL/++s4v+YDl8+eCm/LmJgPlgwEzUEh5VXUpBZZmse6++26z6qqr5k1LWhuuuOKKZpdddjGKx7XzzjtHOxZdnqWlAfmFHXLIIdFnTznllFzcm5NPPjmKg/OnP/3J7LbbbmadddYJEttLDXa/fv2iZ9vvGzRokNH3bLXVVs5pd8lfqPdo96c6j7322sv89a9/Ndtuu61Zbrnl6ixDdTabbrpp9LnDDz/cHH/88Tn7Ku6abKwy09/22GOPaIt7qTuoJk2amO7du0f2P/HEE6P0qVwU100x4lw2ZqjcDj74YHPCCSfkPj9gwACz9957B2c9X5nKr3G99daLwqKofJR+vf7yl7+YffbZJxIKheLS2fJVGSj2k+Xy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pZmne+65x0uYxNOgn239CTWDJdvI8VxH5vjmMZm22v4vYXj99ddHvlvxZU59NwKrIrRJRWQCgVVbDU78PiszWGpg5Egr53XXYzwSWS34XzVsmo3aeOONc6JI32lfmknaYYcdokZODV1dL0Wft46/eoZG0vJV8blsB2HToHuxBJY2BGiGLc0MhJYHZ8yY4dXpILAWklCOAkus33nnnc7L6nGmNVujWWCfGZt8AkusH3roodFMWloxY+tPSIGlwZcGYT/88EM820F+1oyw2qCNNtoobxuEwFrUHsfbxIz9XBGZyHWMGTN+vdJdyTNYthw7duwY+XuEbOAUBFS7FLt27Wq0o85+V/x+4IEHRjM86hBdXvKfksOtfYZ+1qyAzxU/asc+p1gCS6NlOfDLMddn5kId6XPPPRf5u7n6mMgGCKyFJJSjwNKs61577eV9/qdypHh1vn5YtQksxdQ644wzzFdffeUl3m0dK4bAUriWLl26RIMRX79Dm658d9sGaZNAcmnQ1n0EVkVok4rIRK5js3BWw70aBJYa/w033DByHNVUvY8YyNewyVn7qquuimauahNXYsf3bDQ1mIoGr2No9NLWd83yuF4SKxJ1donR8lssgaXnawfZQQcdZD766CNnu2rruY4DOvvss53DPMgGCKyFJJSjwBILOvrmqKOOMhMnTnRm4e233zb9+vUzaod++uknV9SjHagSD0nWJfrl93TKKadE6fCdySqGwJJtJIAUskX5VPnVpw1SnvQMtQ96ZqE2CIFVEdqkIjJRlQJryJAhUTgCVVjX16hRo4yOSrEdeH3uWr5z/V77PkU49v1OjSLV8GoZ7rbbbosEwffffx+FcdASV77lCTVk+r2csrXEqJAJ8vFQhGY9S88slA6N6H0Pe1Uno1krvSSufBripACxadOuJGs7l/v48ePNuuuuWzBv9tm6K3q9GnI52H/zzTeLbRKQHbWUoV1minck+2nnmXxTdHacS5r0HsXN0s5K+91amtX5j66f1/skjFV29hm+/Csy/zrrrJP7fI8ePaLwHj5pSPKrYLQTJkxwzkeyfOS3J7u6pkEcS4jbUwcUKFTO3a5l8eWXX5prrrmmxnK2tWezZs2MjogSC0qPltHjdUssqL6JBbUj2vknYaYdfEqXax7GjBljZPukwFI6JLKUJ4U7uOKKK6KNLnJ+1yBAA6xC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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="recommandations-techniques">Recommandations techniques</a>
</h1>
<div class="Section6"><br>Pour tester les extraits de code dans ce tutoriel, vous aurez besoin des éléments suivants:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un compilateur compatible C++11.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien du compilateur WinLibs sous Windows:&nbsp;<a class="GLink3 Link4" href="https://winlibs.com/" target="_blank" style="color: lime;">https://winlibs.com/</a></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien du compilateur TDM-GCC sous Windows:&nbsp;<a class="GLink3 Link4" href="https://jmeubank.github.io/tdm-gcc/" target="_blank" style="color: lime;">https://jmeubank.github.io/tdm-gcc/</a></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien du compilateur MSYS2 sous Windows:&nbsp;<a class="GLink3 Link4" style=" color: lime;" href="https://www.msys2.org/" target="_blank">https://www.msys2.org/</a><br>MSYS2 est émulateur de l'environnement Linux sous Windows.<br>MSYS2 dispose d'un gestionnaire de packages (pacman).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien du compilateur Cygwin sous Windows:&nbsp;<a class="GLink3 Link4" style=" color: lime;" href="https://cygwin.com/" target="_blank">https://cygwin.com/</a><br>Cygwin est émulateur de l'environnement Linux sous Windows.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Sous Linux: Installer GCC (GNU Compiler Collection) en ligne de commande.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="le-compilateur-mingw">Le compilateur MinGW</a>
</h1>
<div class="Section6"><br>MinGW est un ensemble d'outils de programmation gratuit et open source qui fournit le compilateur GCC pour les systèmes Windows.<br><br>MinGW signifie (Minimalist GNU for Windows), il fournit un environnement minimal pour créer des exécutables Windows à l'aide de GCC. Entre autres choses, MinGW inclut un portage de GCC, un portage de l'archiveur et de l'éditeur de liens GNU, et un portage du débogueur GNU GDB. Il comprend également MSYS, un environnement de ligne de commande capable d'exécuter des makefiles GNU et de configurer des scripts.<br><br>À quelques exceptions près, vous pouvez distribuer des binaires compilés avec le portage MinGW de GCC sous la licence de votre choix.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="le-compilateur-cygwin">Le compilateur Cygwin</a>
</h1>
<div class="Section6"><br>Cygwin est un ensemble d'outils de programmation gratuit et open source qui fournit le compilateur GCC pour les systèmes Windows. Il fournit un émulateur du noyau Linux pour les systèmes Windows.<br><br>Cygwin est un projet ambitieux visant à produire un environnement de type Unix hébergé par Windows. Il fournit une couche de compatibilité Unix qui permet aux programmes écrits pour Unix d'être compilés et exécutés sous Windows. Par conséquent, un énorme assortiment d'utilitaires Unix est disponible pour Cygwin. Même si vous n'êtes pas un développeur Unix, vous pourriez bientôt considérer les outils Cygwin comme indispensables.<br><br>Les binaires construits avec le port Cygwin de GCC, en revanche, sont couverts par la licence publique générale GNU (GPL) par défaut.<br><br>Si vous souhaitez distribuer un programme compilé sous Cygwin sans rendre la source disponible, vous devez acheter une licence auprès de Red Hat.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="les-variables-d-environnement">Les variables d'environnement</a>
</h1>
<div class="Section6"><br>Les variables d'environnement sont des paires de chaînes gérées par votre système et accessibles aux applications en cours d'exécution. Les outils de ligne de commande font fréquemment référence à des variables d'environnement pour connaître des détails sur votre système et obtenir des informations de configuration qui autrement devraient être saisies sur la ligne de commande.<br><br>La variable d'environnement
que vous rencontrerez le plus souvent est PATH, qui stocke une liste de répertoires recherchés par le système d'exploitation lorsque le nom d'un exécutable est saisi sur la ligne de commande en utilisant son nom simple plutôt que son nom de chemin complet.<br><br>Sous Windows, les répertoires dans PATH sont également recherchés lors du chargement d'une bibliothèque dynamique.<br><br>Les outils de ligne de commande utilisent des variables d'environnement sous Unix et Windows, mais sous Unix, il existe généralement un compilateur C++ dominant et les variables d'environnement dont il a besoin sont définies par défaut sur des valeurs correctes.<br><br>Sous Windows, cependant, il existe traditionnellement un certain nombre de compilateurs C++ concurrents. Deux compilateurs différents devront presque certainement chercher à des emplacements différents leurs en-têtes standard et leurs bibliothèques de support d'exécution compilées. Il est donc courant que les ensembles d'outils Windows fournissent des scripts qui définissent un certain nombre de variables d'environnement pour enregistrer les emplacements des en-têtes, des bibliothèques et d'autres informations.<br><br>Une façon d'utiliser un tel script consiste à l'exécuter à partir de la ligne de commande avant d'appeler l'un des outils de ligne de commande.<br><br>Il est également possible de rendre les paramètres des variables d'environnement permanents afin que vous n'ayez pas à exécuter le script à chaque fois que vous démarrez une session de ligne de commande.<br><br>Cependant, modifier définitivement vos variables d'environnement n'est pas toujours une bonne idée, car plusieurs jeux d'outils peuvent contenir des outils portant le même nom, ce qui entraîne l'appel du mauvais outil pendant le processus de construction.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="le-programme-minimal">Le programme minimal</a>
</h1>
<div class="Section6"><br>Un programme C++ commence son exécution par la fonction principale (main).&nbsp;<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#le-programme-minimal_le-programme-minimal">Le programme minimal</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#le-programme-minimal_la-compilation-du-programme">La compilation du programme</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#le-programme-minimal_l-edition-des-liens-du-programme">L'édition des liens du programme</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#le-programme-minimal_l-execution-du-programme">L'exécution du programme</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="le-programme-minimal_le-programme-minimal" href="#le-programme-minimal">Le programme minimal</a>
</h2><br>Considérons l'extrait de code suivant qui affiche un message à l'écran:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Hello, World!" &lt;&lt; std::endl;
    return 0;
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="le-programme-minimal_la-compilation-du-programme" href="#le-programme-minimal">La compilation du programme</a>
</h2><br>Considérons l'extrait de code suivant qui compile le fichier source pour générer un fichier objet:&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
g++ -c main.cpp -o main.o
::===============================================</pre><br>Considérons l'extrait de code suivant qui édite les liens pour générer un fichier exécutable:&nbsp;&nbsp;<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="le-programme-minimal_l-edition-des-liens-du-programme" href="#le-programme-minimal">L'édition des liens du programme</a>
</h2><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
g++ -o setup.exe main.o
::===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="le-programme-minimal_l-execution-du-programme" href="#le-programme-minimal">L'exécution du programme</a>
</h2><br>Considérons l'extrait de code suivant qui exécute du programme:&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
setup.exe
::===============================================
Hello, World!
::===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="les-bibliotheques-statiques">Les bibliothèques statiques</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-bibliotheques-dynamiques_le-module-john">Le module John</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-bibliotheques-dynamiques_le-module-paul">Le module Paul</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-bibliotheques-dynamiques_le-module-john-paul">Le module John-Paul</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-bibliotheques-dynamiques_le-module-john" href="#les-bibliotheques-statiques">Le module John</a>
</h2><br>Considérons l'extrait de code suivant qui présente le fichier header (GJohn.hpp):&nbsp; &nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#ifndef _GJohn_
#define _GJohn_
//===============================================
void john(); // Prints "John, "
//===============================================
#endif
//===============================================</pre><br>Considérons l'extrait de code suivant qui présente le fichier source (GJohn.cpp):&nbsp; &nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include "john.hpp"
//===============================================
void john() {
    std::cout &lt;&lt; "John, ";
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-bibliotheques-dynamiques_le-module-paul" href="#les-bibliotheques-statiques">Le module Paul</a>
</h2><br>Considérons l'extrait de code suivant qui présente le fichier header (GPaul.hpp):&nbsp; &nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#ifndef _GPaul_
#define _GPaul_
//===============================================
void paul( ); // Prints " Paul, "
//===============================================
#endif
//===============================================</pre><br>Considérons l'extrait de code suivant qui présente le fichier source (GPaul.cpp):&nbsp; &nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include "paul.hpp"
//===============================================
void paul() {
    std::cout &lt;&lt; "Paul, ";
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-bibliotheques-dynamiques_le-module-john-paul" href="#les-bibliotheques-statiques">Le module John-Paul</a>
</h2><br>Considérons l'extrait de code suivant qui présente le fichier header (GJohnPaul.hpp):&nbsp; &nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#ifndef _GJohnPaul_
#define _GJohnPaul_
//===============================================
void johnpaul( ); // Prints "John, Paul, "
//===============================================
#endif
//===============================================</pre><br>Considérons l'extrait de code suivant qui présente le fichier source (GJohnPaul.cpp):&nbsp; &nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include "john.hpp"
#include "paul.hpp"
#include "johnpaul.hpp"
//===============================================
void johnpaul() {
    john( );
    paul( );
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="les-bibliotheques-dynamiques">Les bibliothèques dynamiques</a>
</h1>
<div class="Section6"><br>Une bibliothèque dynamique, également appelée bibliothèque partagée, est comme un exécutable sauf qu'elle ne peut pas être exécutée seule; il se compose d'un corps de code exécutable par la machine qui est chargé en mémoire après le démarrage d'une application et peut être partagé par une ou plusieurs applications.<br><br>Sous Windows, les bibliothèques dynamiques sont également appelées bibliothèques de liens dynamiques (DLL).<br><br>Les fichiers objets et les bibliothèques statiques dont dépend un exécutable ne sont nécessaires que lorsque l'exécutable est construit.<br><br>Les bibliothèques dynamiques dont dépend un exécutable doivent cependant être présentes sur le système d'un utilisateur lorsque l'exécutable est exécuté.<br><br>Extensions de fichiers par système d'exploitation:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">+-------------------+----------+--------------+--------------+
| File type         | Windows  | Mac OS X     | Linux        |
+-------------------+----------+--------------+--------------+
| Object files      | .obj     | .o           | .o           |
| Static libraries  | .lib     | .a           | .a           |
| Dynamic libraries | .dll     | .dylib       | .so          |
| Executables       | .exe     | No extension | No extension |
+-------------------+----------+--------------+--------------+</pre><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-bibliotheques-dynamiques_le-module-george">Le module George</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-bibliotheques-dynamiques_le-module-ringo">Le module Ringo</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-bibliotheques-dynamiques_le-module-george-ringo">Le module George-Ringo</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-bibliotheques-dynamiques_la-creation-de-la-bibliotheque-dynamique">La création de la bibliothèque dynamique</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-bibliotheques-dynamiques_l-utilisation-de-la-bibliotheque-dynamique">L'utilisation de la bibliothèque dynamique</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-bibliotheques-dynamiques_les-commandes-de-creation-de-la-bibliotheque-dynamique">Les commandes de création de la bibliothèque dynamique</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-bibliotheques-dynamiques_le-module-george" href="#les-bibliotheques-dynamiques">Le module George</a>
</h2><br>Considérons l'extrait de code suivant qui présente le fichier header (GGeorge.hpp):&nbsp; &nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#ifndef _GGeorge_
#define _GGeorge_
//===============================================
void george( ); // Prints "George, "
//===============================================
#endif
//===============================================</pre><br>Considérons l'extrait de code suivant qui présente le fichier source (GGeorge.cpp):&nbsp; &nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include "george.hpp"
//===============================================
void george() {
    std::cout &lt;&lt; "George, ";
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-bibliotheques-dynamiques_le-module-ringo" href="#les-bibliotheques-dynamiques">Le module Ringo</a>
</h2><br>Considérons l'extrait de code suivant qui présente le fichier header (GRingo.hpp):&nbsp; &nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#ifndef _GRingo_
#define _GRingo_
//===============================================
void ringo(); // Prints "and Ringo\n"
//===============================================
#endif
//===============================================</pre><br>Considérons l'extrait de code suivant qui présente le fichier source (GRingo.cpp):&nbsp; &nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include "ringo.hpp"
//===============================================
void ringo() {
    std::cout &lt;&lt; "and Ringo\n";
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-bibliotheques-dynamiques_le-module-george-ringo" href="#les-bibliotheques-dynamiques">Le module George-Ringo</a>
</h2><br>Considérons l'extrait de code suivant qui présente le fichier header (GGeorgeRingo.hpp):&nbsp; &nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#ifndef _GGeorgeRingo_
#define _GGeorgeRingo_
//===============================================
#if defined(_WIN32) &amp;&amp; !defined(__GNUC__)
#   ifdef GEORGERINGO_DLL
#       define GEORGERINGO_DECL __declspec(dllexport)
#   else
#       define GEORGERINGO_DECL __declspec(dllimport)
#   endif
#endif // WIN32
//===============================================
#ifndef GEORGERINGO_DECL
#   define GEORGERINGO_DECL
#endif
//===============================================
#ifdef __MWERKS__
#   pragma export on
#endif // MWERKS
//===============================================
GEORGERINGO_DECL void georgeringo(); // Prints "George, and Ringo\n"
//===============================================
#ifdef __MWERKS__
#   pragma export off
#endif  // MWERKS
//===============================================
#endif
//===============================================</pre><br>Considérons l'extrait de code suivant qui présente le fichier source (GGeorgeRingo.cpp):&nbsp; &nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include "george.hpp"
#include "ringo.hpp"
#include "georgeringo.hpp"
//===============================================
void georgeringo() {
    george();
    ringo();
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-bibliotheques-dynamiques_la-creation-de-la-bibliotheque-dynamique" href="#les-bibliotheques-dynamiques">La création de la bibliothèque dynamique</a>
</h2><br>Considérons l'extrait de code suivant qui présente la création de la bibliothèque dynamique:&nbsp; &nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
g++ -c george.cpp -o george.o
g++ -c ringo.cpp -o ringo.o
::===============================================
g++ -DGERORGERINGO_DLL -c georgeringo.cpp -o georgeringo.o
::===============================================
g++ -shared -o libgeorgeringo.dll ^
-Wl,--out-implib,libgeorgeringo.a ^
-Wl,--enable-auto-image-base george.o ringo.o georgeringo.o
::===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-bibliotheques-dynamiques_l-utilisation-de-la-bibliotheque-dynamique" href="#les-bibliotheques-dynamiques">L'utilisation de la bibliothèque dynamique</a>
</h2><br>Considérons l'extrait de code suivant qui présente l'utilisation de la bibliothèque dynamique:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int main(int _argc, char** _argv) {
    georgeringo();
    return 0;
}
//===============================================
g++ -c main.cpp -o main.o
g++ -o setup.exe main.o -L. -lgeorgeringo
setup.exe
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-bibliotheques-dynamiques_les-commandes-de-creation-de-la-bibliotheque-dynamique" href="#les-bibliotheques-dynamiques">Les commandes de création de la bibliothèque dynamique</a>
</h2><br>Considérons l'extrait de code suivant qui présente les commandes de création de la bibliothèque dynamique:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">+-------------------------------+----------------------------------------------------------------------------------------------+
| Toolset                       | Command line                                                                                 |
+-------------------------------+----------------------------------------------------------------------------------------------+
| GCC                           | g++ -shared -fPIC -o libgeorgeringo.so george.o ringo.o georgeringo.o                        |
+-------------------------------+----------------------------------------------------------------------------------------------+
| GCC (Mac OS X)                | g++ -dynamiclib -fPIC -o libgeorgeringo.dylib george.o ringo.o georgeringo.o                 |
+-------------------------------+----------------------------------------------------------------------------------------------+
| GCC (Cygwin)                  | g++ -shared -o libgeorgeringo.dll                                                            |
|                               | -Wl,--out-implib,libgeorgeringo.dll.a                                                        |
|                               | -W1,--export-all-symbols                                                                     |
|                               | -Wl,--enable-auto-image-base george.o ringo.o georgeringo.o                                  |
+-------------------------------+----------------------------------------------------------------------------------------------+
| GCC (MinGW)                   | g++ -shared -o libgeorgeringo.dll                                                            |
|                               | -Wl,--out-implib,libgeorgeringo.a -W1,--export-all-symbols                                   |
|                               | -Wl,--enable-auto-image-base george.o ringo.o georgeringo.o                                  |
| Visual C++                    | link -nologo -dll -out:libgeorgeringo.dll -implib:libgeorgeringo.lib george.obj ringo.obj    |
|                               | georgeringo.obj                                                                              |
| Intel (Windows)               | xilink -nologo -dll -out:libgeorgeringo.dll -implib:libgeorgeringo.lib george.obj ringo.obj  |
|                               | georgeringo.obj                                                                              |
| Intel (Linux)                 | g++ -shared -fPIC -lrt -o libgeorgeringo.so george.o ringo.o georgeringo.o georgeringo.obj   |
+-------------------------------+----------------------------------------------------------------------------------------------+
| Metrowerks (Windows)          | mwld -shared -export dllexport -runtime dm -o libgeorgeringo.dll -implib libgeorgeringo.lib  |
|                               | george.obj ringo.obj georgeringo.obj                                                         |
+-------------------------------+----------------------------------------------------------------------------------------------+
| Metrowerks (Mac OS X)         | mwld -shared -export pragma -o libgeorgeringo.dylib george.o ringo.o georgeringo.o           |
+-------------------------------+----------------------------------------------------------------------------------------------+
| CodeWarrior 10.0 (Mac OS X)a  | Consult the Metrowerks documentation.                                                        |
+-------------------------------+----------------------------------------------------------------------------------------------+
| Borland                       | bcc32 -q -WD -WR -elibgeorgeringo.dll george.obj ringo.obj georgeringo.obj                   |
|                               | implib -c libgeorgeringo.lib libgeorgeringo.dll                                              |
+-------------------------------+----------------------------------------------------------------------------------------------+
| Digital Mars                  | dmc -WD -L/implib:libgeorgeringo.lib -o libgeorgeringo.dll george.obj ringo.obj georgeringo. |
|                               | obj user32.lib kernel32.lib                                                                  |
+-------------------------------+----------------------------------------------------------------------------------------------+</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="les-commentaires">Les commentaires</a>
</h1>
<div class="Section6"><br>Un commentaire est un message qui n'existe que pour le programmeur et qui est ignoré par le compilateur.<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-commentaires_les-commentaires-sur-une-ligne">Les commentaires sur une ligne</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-commentaires_les-commentaires-sur-plusieurs-lignes">Les commentaires sur plusieurs lignes</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-commentaires_les-commentaires-sur-une-ligne" href="#les-commentaires">Les commentaires sur une ligne</a>
</h2><br>Un commentaire définit sur une ligne commence par l'opérateur double slash (//).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// helloworld.cpp
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-commentaires_les-commentaires-sur-plusieurs-lignes" href="#les-commentaires">Les commentaires sur plusieurs lignes</a>
</h2><br>Un commentaire définit sur plusieurs lignes commence par l'opérateur slash-étoile&nbsp; (/*) et se termine par l'opérateur étoile-slash (*/).&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
/* this is a multiline
 * C-style comment. The
 * compiler will ignore
 * it.
 */
//===============================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="les-directives-de-preprocesseur">Les directives de préprocesseur</a>
</h1>
<div class="Section6"><br>La construction d'un programme C++ est un processus en trois étapes. Tout d'abord, le code est exécuté via un préprocesseur, qui analyse le code pour identifier et exécuter toutes les directives de préprocesseur. Ensuite, le code est compilé ou traduit en fichiers objets lisibles par la machine. Enfin, les fichiers objet individuels sont liés dans une seule application.<br><br>Les directives de préprocesseur sont des directives destinées au préprocesseur et commencent par le caractère dièse (#).<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-directives-de-preprocesseur_la-directive-d-inclusion-de-fichier---include-">La directive d'inclusion de fichier (#include)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-directives-de-preprocesseur_la-directive-de-definition-de-constante-ou-de-macro---define-">La directive de définition de constante ou de macro (#define)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-directives-de-preprocesseur_les-directives-de-compilation-conditionnelle---if---elif---else-">Les directives de compilation conditionnelle (#if, #elif, #else)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-directives-de-preprocesseur_la-directive-de-verification-de-l-existence-d-une-definition---ifdef-">La directive de vérification de l'existence d'une définition (#ifdef)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-directives-de-preprocesseur_la-directive-de-verification-de-la-non-existence-d-une-definition---ifndef--">La directive de vérification de la non existence d'une définition (#ifndef)&nbsp;</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-directives-de-preprocesseur_la-directive-de-verification-de-definition--defined-">La directive de vérification de définition (defined)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-directives-de-preprocesseur_la-directive-de-mise-en-chaine----">La directive de mise en chaine (#)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#les-directives-de-preprocesseur_la-directive-de-concatenation-----">La directive de concaténation (##)</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-directives-de-preprocesseur_la-directive-d-inclusion-de-fichier---include-" href="#les-directives-de-preprocesseur">La directive d'inclusion de fichier (#include)</a>
</h2><br>La directive d'inclusion de fichier est constituée de l'opérateur d'inclusion (#include) suivi du nom de fichier. Elle permet de copier le contenu d'un fichier dans un programme en remplaçant la directive (#include) par le contenu du fichier.<br><br><nom de="" fichier="">Si le nom du fichier est entouré par les opérateurs plus petit et plus grand (&lt;filename&gt;), le fichier ne sera recherché que dans les répertoires définis par la variable d'environnement (INCLUDE).<br><br>Si le nom du fichier est indiqué entre guillemets ("filename"), le fichier sera d'abord recherché dans le répertoire courant, puis&nbsp;dans les répertoires définis par la variable d'environnement (INCLUDE).<br><br>Le nom du fichier peut inclure un chemin absolu (/path/to/filename). Dans ce cas, le fichier n'est recherché que dans le répertoire indiqué.<br><br>Le nom du fichier peut inclure un chemin relatif (path/to/filename). Dans ce cas, le fichier recherché dans le répertoire du chemin relatif, et à partir des répertoires définis par la variable d'environnement (INCLUDE).<br><br>Vous pouvez fournir le nom du fichier sous forme de constante symbolique. Le texte de remplacement doit être entre guillemets ("filename") ou entre crochets ([filename])dans ce cas.<br></nom><br>Considérons l'extrait de code suivant qui inclut le fichier (iostream):<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
//===============================================</pre><br>Considérons l'extrait de code suivant qui inclut le fichier (project.h):&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include "project.h"
//===============================================</pre><br>Considérons l'extrait de code suivant qui inclut le fichier (versionX.h) à partir d'une constante symbolique:&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#if VERSION == 1
    #define MYPROJ_H "version1.h"
#else
    #define MYPROJ_H "version2.h"
#endif
//===============================================
#include MYPROJ_H
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-directives-de-preprocesseur_la-directive-de-definition-de-constante-ou-de-macro---define-" href="#les-directives-de-preprocesseur">La directive de définition de constante ou de macro (#define)</a>
</h2><br>La directive de définition de constante ou de macro est constituée de l'opérateur (#define) suivi d'abord de la clé de la définition, puis de la valeur de la définition.<br><br>Considérons l'extrait de code suivant qui définit la constante symbolique (BUFSIZ):<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define BUFSIZ 512
//===============================================</pre><br>Considérons l'extrait de code suivant qui définit la macro (CLS):<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define CLS std::cout &lt;&lt; "\033[2J"
//===============================================</pre><br>Considérons l'extrait de code suivant qui définit la macro (MAX):<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define MAX(a,b) ((a)&gt;(b) ? (a):(b))
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-directives-de-preprocesseur_les-directives-de-compilation-conditionnelle---if---elif---else-" href="#les-directives-de-preprocesseur">Les directives de compilation conditionnelle (#if, #elif, #else)</a>
</h2><br>Les directives (#if, #elif, #else) permettent de compiler certaines parties d'un fichier source et en ignorer d'autres.<br><br>Syntaxe:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#if expression_1
    code_1
#elif expression_2
    code_2
    ...
#elif expression_n
    code_n
#else
    code_n+1
#endif
//===============================================</pre><br>Chaque directive (#if) doit être terminée par une directive (#endif). Plusieurs directives (#elif) peuvent se produire entre les deux. La directive (#else)&nbsp; ne peut apparaître qu'une seule fois.
Le préprocesseur évalue les expressions de manière séquentielle. Si une expression qui renvoie "vrai" est trouvée, c'est-à-dire que sa valeur n'est pas 0, le code correspondant à cette expression est traité.
Si aucune de ces expressions n'est vraie, la directive (#else) est exécutée. Si cette directive est omise, aucun code correspondant n'est traité. Les expressions doivent être des constantes de types entiers et ne peuvent pas contenir l'opérateur cast. Certains compilateurs n'autorisent pas l'utilisation de l'opérateur sizeof.
Le texte correspondant à une expression est un texte source, c'est-à-dire qu'il comprend des directives de préprocesseur, des instructions C++ ou des programmes C++ entiers.
Lorsqu'un texte correspondant est traité, le préprocesseur peut d'abord exécuter des directives avant de transmettre le code source étendu au compilateur pour compilation. Le code que le préprocesseur n'a pas traité est supprimé de la source.<br><br>Considérons l'extrait de code suivant qui sélectionne le fichier (versionX.h) parmi plusieurs:&nbsp; &nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define VERSION 2
//===============================================
#if VERSION == 1
    #define MYPROJ_H "version1.h"
#elif VERSION == 2
    #define MYPROJ_H "version2.h"
#else
    #define MYPROJ_H "version0.h"
#endif
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-directives-de-preprocesseur_la-directive-de-verification-de-l-existence-d-une-definition---ifdef-" href="#les-directives-de-preprocesseur">La directive de vérification de l'existence d'une définition (#ifdef)</a>
</h2><br>La directive (#ifdef) renvoie une valeur autre que 0 si l'expression est défini et une valeur égale à 0 sinon.<br><br>Considérons l'extrait de code suivant qui sélectionne le fichier (versionX.h) parmi plusieurs:<br>&nbsp; &nbsp;&nbsp;<br>Approche 1:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define VERSION "v1.0"
//===============================================
#ifdef VERSION
    #define MYPROJ_H "version1.h"
#else
    #define MYPROJ_H "version2.h"
#endif
//===============================================</pre><br>Approche 2:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define VERSION "v1.0"
//===============================================
#if defined(VERSION)
    #define MYPROJ_H "version1.h"
#else
    #define MYPROJ_H "version2.h"
#endif
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-directives-de-preprocesseur_la-directive-de-verification-de-la-non-existence-d-une-definition---ifndef--" href="#les-directives-de-preprocesseur">La directive de vérification de la non existence d'une définition (#ifndef)&nbsp;</a>
</h2><br>La directive (#ifndef) garantit qu'une valeur n'a pas encore été définie, renvoyant 0 si l'expression a été défini et une valeur différente de 0 dans tous les autres cas.<br><br>Considérons l'extrait de code suivant qui sélectionne le fichier (versionX.h) parmi plusieurs:<br>&nbsp;<br>Approche 1:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define VERSION "v1.0"
//===============================================
#ifndef VERSION
    #define MYPROJ_H "version1.h"
#else
    #define MYPROJ_H "version2.h"
#endif
//===============================================</pre><br>Approche 2:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define VERSION "v1.0"
//===============================================
#if not defined(VERSION)
    #define MYPROJ_H "version1.h"
#else
    #define MYPROJ_H "version2.h"
#endif
//===============================================</pre><br>Approche 3:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define VERSION "v1.0"
//===============================================
#if !defined(VERSION)
    #define MYPROJ_H "version1.h"
#else
    #define MYPROJ_H "version2.h"
#endif
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-directives-de-preprocesseur_la-directive-de-verification-de-definition--defined-" href="#les-directives-de-preprocesseur">La directive de vérification de définition (defined)</a>
</h2><br>L'opérateur (defined) permet de vérifier si une constante symbolique ou une macro a été définie. L'opérateur renvoie une valeur autre que 0 s'il existe une définition valide pour l'expression et la valeur 0 dans tous les autres cas.<br><br>Une définition créée à l'aide de la directive (#define) reste valide jusqu'à ce qu'elle soit supprimée par une directive (#undef).<br><br>Si le texte de remplacement suivant le nom dans la directive (#define) est manquant, la définition est toujours valide.<br><br>Considérons l'extrait de code suivant qui sélectionne le fichier (versionX.h) parmi plusieurs:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define VERSION "v1.0"
//===============================================
#if defined(VERSION)
    #define MYPROJ_H "version1.h"
#else
    #define MYPROJ_H "version2.h"
#endif
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-directives-de-preprocesseur_la-directive-de-mise-en-chaine----" href="#les-directives-de-preprocesseur">La directive de mise en chaine (#)</a>
</h2><br>La directive de mise en chaîne (#) est constituée de l'opérateur dièse (#) suivi du paramètre de macro.<br><br>Considérons l'extrait de code suivant qui construit un titre à partir d'un paramètre de macro:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define TITLE(s) "**** " #s " *****"
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; TITLE(Catalog) &lt;&lt; std::endl;
    return 0;
}
//===============================================
**** Catalog *****
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="les-directives-de-preprocesseur_la-directive-de-concatenation-----" href="#les-directives-de-preprocesseur">La directive de concaténation (##)</a>
</h2><br>La directive de concaténation est constituée de l'opérateur double-dièse (##) suivi du paramètre de macro.<br><br>Considérons l'extrait de code suivant qui construit une variable à partir d'un paramètre de macro:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#define debug(n) std::cout &lt;&lt; "x_" #n "=" &lt;&lt; x_##n &lt;&lt; std::endl
//===============================================
int main(int argc, char** argv) {
    int x_1 = 10;
    debug(1);
    return 0;
}
//===============================================
x_1=10
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="la-fonction-principale">La fonction principale</a>
</h1>
<div class="Section6"><br>La fonction principale (main) est l'endroit où le programme démarre. Un int est renvoyé par la fonction (main), indiquant l'état du résultat du programme. La fonction (main) prend deux paramètres : (argc) donne le nombre d'arguments passés au programme, et (argv) contient ces arguments. Le premier argument est toujours le nom du programme lui-même.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int main(int argc, char** argv) {
    // code du programme principal
    return 0;
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="les-flux-d-entree-sortie">Les flux d'entrée/sortie</a>
</h1>
<div class="Section6"><br>Considérez un flux de sortie (std::cout) comme une goulotte à linge pour les données. Tout ce que vous y jetez sera affiché de manière appropriée. (std::cout) est la goulotte correspondant à la console utilisateur, ou la sortie standard. Il existe d'autres goulottes, notamment (std::cerr), qui renvoient vers la console d'erreurs. L'opérateur (&lt;&lt;) jette les données dans la goulotte.<br><br>Les flux de sortie permettent d'envoyer plusieurs données de types différents dans le flux de manière séquentielle sur une seule ligne de code.<br><br>Considérons l'extrait de code suivant qui présente l'utilisation du flux de sortie (std::cout):<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
std::cout &lt;&lt; "There are " &lt;&lt; 219 &lt;&lt; " ways I love you." &lt;&lt; std::endl;
//===============================================</pre><br>Les caractères d'échappement peuvent être utilisés dans n'importe quelle chaîne de texte citée.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">+-----+--------------------------+
| \n  | new line                 |
+-----+--------------------------+
| \r  | carriage return          |
+-----+--------------------------+
| \t  | tab                      |
+-----+--------------------------+
| \\  | the backslash character  |
+-----+--------------------------+
| \"  | quotation mark           |
+-----+--------------------------+</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="les-espaces-de-noms">Les espaces de noms</a>
</h1>
<div class="Section6"><br>Les espaces de noms résolvent le problème des conflits de noms entre différents morceaux de code. Par exemple, vous pourriez écrire du code doté d'une fonction appelée foo(). Un jour, vous décidez de commencer à utiliser une bibliothèque tierce, qui possède également une fonction foo(). Le compilateur n'a aucun moyen de savoir à quelle version de foo() vous faites référence dans votre code. Vous ne pouvez pas changer le nom de la fonction de la bibliothèque, et ce serait très pénible de changer le vôtre.<br><br>Pour placer du code dans un espace de noms, placez le simplement dans un bloc d'espace de noms:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
namespace mycode {
void foo();
}
//===============================================
namespace mycode {
void foo() {
    std::cout &lt;&lt;  __PRETTY_FUNCTION__ &lt;&lt; std::endl;
}
}
//===============================================
int main(int _argc, char** _argv) {
    mycode::foo();
    return 0;
}
//===============================================</pre><br>En plaçant votre version de foo() dans l'espace de noms « mycode », elle est isolée de la fonction foo() fournie par la bibliothèque tierce. Pour appeler la version de foo() compatible avec l'espace de noms, ajoutez l'espace de noms au nom de la fonction comme suit.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
mycode::foo(); // Calls the "foo" function in the "mycode" namespace
//===============================================</pre><br>Tout code appartenant à un bloc d'espace de noms «&nbsp;mycode&nbsp;» peut appeler un autre code dans le même espace de noms sans ajouter explicitement l'espace de noms. Cet espace de noms implicite est utile pour rendre le code plus précis et plus lisible.<br><br>Vous pouvez également éviter de préfixer des espaces de noms avec la directive using. Cette directive indique au compilateur que le code suivant utilise des noms dans l'espace de noms spécifié. L'espace de noms est donc implicite pour le code qui suit:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
namespace mycode {
void foo();
}
//===============================================
namespace mycode {
void foo() {
    std::cout &lt;&lt;  __PRETTY_FUNCTION__ &lt;&lt; std::endl;
}
}
//===============================================
using namespace mycode;
//===============================================
int main(int _argc, char** _argv) {
    foo();
    return 0;
}
//===============================================</pre><br>Le programme minimal peut se réécrire avec la directive using comme indiqué ici:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout &lt;&lt; "Hello, World!" &lt;&lt; endl;
    return 0;
}
//===============================================</pre><br>La directive using peut également être utilisée pour faire référence à un élément particulier dans un espace de noms. Par exemple, si la seule partie de l'espace de noms std que vous avez l'intention d'utiliser est cout, vous pouvez y faire référence comme suit:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
using std::cout;
//===============================================
int main(int argc, char** argv) {
    cout &lt;&lt; "Hello, World!\n";
    return 0;
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="les-variables">Les variables</a>
</h1>
<div class="Section6"><br>En C++, les variables peuvent être déclarées à peu près n'importe où dans votre code et peuvent être utilisées n'importe où dans le bloc actuel sous la ligne où elles sont déclarées. <br><br>En pratique, votre équipe d'ingénieurs doit décider si les variables seront déclarées au début de chaque fonction ou en fonction des besoins.<br><br>Les variables peuvent être déclarées sans recevoir de valeur. Ces variables non déclarées finissent généralement avec une valeur semi aléatoire basée sur ce qui est en mémoire à ce moment là et sont à l'origine d'innombrables bugs. Les variables en C++ peuvent également se voir attribuer une valeur initiale lorsqu'elles sont déclarées. Le code qui suit montre les deux types de déclaration de variable, tous deux utilisant des entiers, qui représentent des valeurs entières.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    int uninitializedInt;
    int initializedInt = 7;
    cout &lt;&lt; uninitializedInt &lt;&lt; " is a random value" &lt;&lt; endl;
    cout &lt;&lt; initializedInt &lt;&lt; " was assigned an initial value" &lt;&lt; endl;
    return 0;
}
//===============================================</pre><br>Une fois exécuté, ce code affichera une valeur aléatoire de la mémoire pour la première ligne et le nombre 7 pour la seconde. Ce code montre également comment les variables peuvent être utilisées avec les flux de sortie.<br><br>Les variables peuvent être converties en d'autres types en les convertissant. Par exemple, un int peut être converti en booléen. C++ propose trois manières de modifier explicitement le type d'une variable. La première méthode est un héritage du C, mais reste la plus couramment utilisée. La deuxième méthode semble plus naturelle au premier abord mais est rarement utilisée. La troisième méthode est la plus verbeuse, mais souvent considérée comme la plus propre.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int main(int argc, char** argv) {
    int someInt = 7;
    bool someBool1 = (bool)someInt; // method 1
    bool someBool2 = bool(someInt); // method 2
    bool someBool3 = static_cast&lt;bool&gt;(someInt); // method 3
    return 0;
}
//===============================================</pre><br>Le résultat sera faux si l'entier était 0 et vrai sinon. Dans certains contextes, les variables peuvent être automatiquement converties ou forcées. Par exemple, un short peut être automatiquement converti en long car un long représente le même type de données avec une précision supplémentaire.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int main(int argc, char** argv) {
    short someShort = 7;
    long someLong = someShort; // no explicit cast needed
    return 0;
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="les-operateurs">Les opérateurs</a>
</h1>
<div class="Section6"><br>À quoi sert une variable si vous n'avez aucun moyen de la modifier? Les opérateurs en C++ peuvent être binaires (opérer sur deux variables), unaires (opérer sur une seule variable) ou même ternaires (opérer sur trois variables).
Il n'existe qu'un seul opérateur ternaire en C++.<br><br>Le programme suivant montre les types de variables et les opérateurs les plus courants en action.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    int someInteger = 256;
    short someShort;
    long someLong;
    float someFloat;
    double someDouble;

    someInteger++;
    someInteger *= 2;

    someShort = (short)someInteger;
    someLong = someShort * 10000;
    someFloat = someLong + 0.785;
    someDouble = (double)someFloat / 100000;

    cout &lt;&lt; someDouble &lt;&lt; endl;
}
//===============================================</pre><br>Le compilateur C++ dispose d'une recette pour l'ordre dans lequel les expressions sont évaluées. Si vous disposez d'une ligne de code complexe comportant de nombreux opérateurs, l'ordre d'exécution peut ne pas être évident. Pour cette raison, il est probablement préférable de diviser une instruction complexe en plusieurs instructions plus petites ou de regrouper explicitement les expressions à l'aide de parenthèses.<br><br>Par exemple, la ligne de code suivante prête à confusion, sauf si vous connaissez par coeur la table de priorité des opérateurs C++:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int main(int argc, char** argv) {
    int i = 34 + 8 * 2 + 21 / 7 % 2;
    std::cout &lt;&lt; i &lt;&lt; std::endl;
}
//===============================================</pre><br>L'ajout de parenthèses indique clairement quelles opérations se produisent en premier:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int main(int argc, char** argv) {
    int i = 34 + (8 * 2) + ( (21 / 7) % 2 );
    std::cout &lt;&lt; i &lt;&lt; std::endl;
}
//===============================================</pre><br>Diviser la déclaration en lignes distinctes le rend encore plus clair:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int main(int argc, char** argv) {
    int i = 8 * 2;
    int j = 21 / 7;
    j %= 2;
    i = 34 + i + j;
    std::cout &lt;&lt; i &lt;&lt; std::endl;
}
//===============================================</pre><br>C++ évalue d'abord /, * et % (de gauche à droite), suivis des opérateurs d'addition et de soustraction, puis des opérateurs au niveau du bit.<br><br>Les parenthèses vous permettent d'indiquer explicitement au compilateur qu'une certaine opération doit être évaluée séparément.<br><br></div>
</div>
</div>
</div><br>