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
<a class="Summary3" href="#le-programme-principal">Le programme principal</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#les-fichiers-d-entete">Les fichiers d'entête</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#affichage-d-un-message">Affichage d'un message</a>
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
<a class="Section5" href="#" id="le-programme-principal">Le programme principal</a>
</h1>
<div class="Section6"><br>La fonction (main) est le point d'entrée de tout programme C++.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int _argc, char** _argv) {
    std::cout &lt;&lt; "Bonjour tout le monde.\n";
    return 0;
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="les-fichiers-d-entete">Les fichiers d'entête</a>
</h1>
<div class="Section6"><br>Avant d'appeler une fonction en C++ vous devez tout d'abord inclure le fichier d'entête dans lequel la fonction est déclarée à l'aide de l'opérateur (#include).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
//===============================================
std::cout &lt;&lt; "Bonjour tout le monde.\n";
//===============================================
</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="affichage-d-un-message">Affichage d'un message</a>
</h1>
<div class="Section6"><br>La fon<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent">Ajouter un code...</pre><br></div>
</div>
</div>
</div><br>