<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C++<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Introduction">Introduction</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Installation">Installation</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Tests">Tests</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Fondamentaux">Fondamentaux</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Programmation-orientee-objet">Programmation orientée objet</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Patrons-de-conception">Patrons de conception</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Surchage-d-operateurs">Surchage d'opérateurs</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Manager-de-donnees">Manager de données</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Systeme-d-administration">Système d'administration</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Multithreading">Multithreading</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Interface-Homme-Machine-avec-Qt">Interface Homme-Machine avec Qt</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome">Création de pitogrammes avec QtAwesome</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot">Tracé de courbes 2D avec QCustomPlot</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt">Communication Inter-Processus avec D-Bus sous Qt</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV">Vision par Ordinateur avec OpenCV</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Calcul-scientifique-avec-GSL">Calcul scientifique avec GSL</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#C---Builder">C++ Builder</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Notes-et-references">Notes et références</a></div></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>C++</b> est un langage de programmation compilé permettant la programmation sous de multiples paradigmes (comme la programmation procédurale, orientée objet ou générique). Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/b_cpp.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/b_cpp.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement C++.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Installation-Installer-l-environnement-C---sous-MSYS2">Installer l'environnement C++ sous MSYS2</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Installation-Installer-l-environnement-C---sous-WinLibs">Installer l'environnement C++ sous WinLibs</a></div></div><br><h2 class="Title7 GTitle2" id="Installation-Installer-l-environnement-C---sous-MSYS2"><a class="Link9" href="#Installation">Installer l'environnement C++ sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Télécharger MSYS2</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://repo.msys2.org/distrib/x86_64/msys2-x86_64-20210228.exe">https://repo.msys2.org/distrib/x86_64/msys2-x86_64-20210228.exe</a><br><br><h3 class="Title8 GTitle3">Installer MSYS2</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">msys2-x86_64-20210228.exe
Suivant
Dossier d'installation -&gt; C:\msys64
Suivant
Raccourci du menu Démarrer -&gt; MSYS2 64bit
Suivant
Suivant
Terminer</pre></div></div><br><br><h3 class="Title8 GTitle3">Démarrer MSYS2</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Windows
MSYS2</pre></div></div><br><h3 class="Title8 GTitle3">Mettre à jour les packages MSYS2</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -Syu</pre></div></div><br><h3 class="Title8 GTitle3">Installer le package (make)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -S --needed --noconfirm make</pre></div></div><br><h3 class="Title8 GTitle3">Installer le package (gcc)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -S --needed --noconfirm gcc</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Installer-l-environnement-C---sous-WinLibs"><a class="Link9" href="#Installation">Installer l'environnement C++ sous WinLibs</a></h2><br><h3 class="Title8 GTitle3">Télécharger WinLibs</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://winlibs.com/#download-release">https://winlibs.com/#download-release</a><br><br><b>winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-8.0.2-r1.7z</b><br><br><h3 class="Title8 GTitle3">Extraire WinLibs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-8.0.2-r1.7z -&gt; Clic droit
Extraire vers winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-8.0.2-r1\</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet C++.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Tests-Tester-un-projet-C---sous-MSYS2">Tester un projet C++ sous MSYS2</a></div></div><br><h2 class="Title7 GTitle2" id="Tests-Tester-un-projet-C---sous-MSYS2"><a class="Link9" href="#Tests">Tester un projet C++ sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Éditer le programme (main.cpp)<br></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Bonjour tout le monde\n";
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">g++ -std=gnu++11 -c main.cpp -o main.o</pre></div></div><br><h3 class="Title8 GTitle3">Éditer les liens du projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">g++ -o rdcpp.exe main.o</pre></div></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">./rdcpp.exe</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de C++.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-condition-if">Créer une condition if</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-condition-if-else">Créer une condition if else</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-condition-else-if">Créer une condition else if</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-boucle-for">Créer une boucle for</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-bouble-while">Créer une bouble while</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-boucle-do-while">Créer une boucle do while</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Casser-une-boucle-for">Casser une boucle for</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Casser-une-boucle-while">Casser une boucle while</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Casser-une-boucle-do-while">Casser une boucle do while</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Continuer-une-boucle-for">Continuer une boucle for</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Continuer-une-boucle-while">Continuer une boucle while</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Continuer-une-boucle-do-while">Continuer une boucle do while</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Recuperer-les-parametres-passes-en-ligne-de-commande">Récupérer les paramètres passés en ligne de commande</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-machine-a-etats-finis">Créer une machine à états finis</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-surcharge-de-fonctions">Créer une surcharge de fonctions</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-allocation-memoire-dynamique">Créer une allocation mémoire dynamique</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-tableau-d-allocation-memoire-dynamique">Créer un tableau d'allocation mémoire dynamique</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-fonction-inline-automatique">Créer une fonction inline automatique</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-fonction-inline-externe">Créer une fonction inline externe</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-reference">Créer une référence</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-espace-de-nom">Créer un espace de nom</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-template-de-fonction">Créer un template de fonction</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-template-de-classe">Créer un template de classe</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-template-de-classe-header">Créer un template de classe header</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-template-variadique--C--11-">Créer un template variadique (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-exception">Créer une exception</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-exception-de-classe">Créer une exception de classe</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-reference-LValue">Créer une référence LValue</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-reference-LValue-de-fonction">Créer une référence LValue de fonction</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-reference-RValue--C--11-">Créer une référence RValue (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-reference-RValue-de-fonction--C--11-">Créer une référence RValue de fonction (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-deduction-de-type-avec-auto--C--11-">Créer une déduction de type avec auto (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-deduction-de-type-liste-avec-auto--C--11-">Créer une déduction de type liste avec auto (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--11-">Créer une évaluation d'expression avec constexpr (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--14-">Créer une évaluation d'expression avec constexpr (C++14)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-fonction-lambda--C--11-">Créer une fonction lambda (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-fonction-lambda-comme-parametre--C--14-">Créer une fonction lambda comme paramètre (C++14)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-boucle-for-basee-sur-une-palge--C--11-">Créer une boucle for basée sur une palge (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-module-avec-import--export-et-module--C--20-">Créer un module avec import, export et module (C++20)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Activer-la-sortie-boolalpha--C--11-">Activer la sortie boolalpha (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Activier-la-sortie-noboolalpha--C--11-">Activier la sortie noboolalpha (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-standard--C--11-">Vérifier si un type a une mise en forme standard (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-scalaire--C--11-">Vérifier si un type a une mise en forme scalaire (C++11)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-predicat-avec-concept--C--20-">Créer un prédicat avec concept (C++20)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-predicat-avec-requires--C--20-">Créer un predicat avec requires (C++20)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-fonction-avec-consteval--C--20-">Créer une fonction avec consteval (C++20)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-une-fonction-de-coroutine--C--20-">Créer une fonction de coroutine (C++20)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-parametre-non-utilise">Créer un paramètre non utilisé</a></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-if"><a class="Link9" href="#Fondamentaux">Créer une condition if</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int a = 1000;
    int b = 100;
    if(a &gt; b) {
        printf("a(%d) est superieur a b(%d)\n", a, b);
    }
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a(1000) est superieur a b(100)</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-if-else"><a class="Link9" href="#Fondamentaux">Créer une condition if else</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int a = 10;
    int b = 100;
    if(a &gt; b) {
        printf("a(%d) est superieur a b(%d)\n", a, b);
    }
    else {
        printf("a(%d) est inferieur ou egal a b(%d)\n", a, b);
    }
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a(10) est inferieur ou egal a b(100)</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-else-if"><a class="Link9" href="#Fondamentaux">Créer une condition else if</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int a = 100;
    int b = 100;
    if(a &gt; b) {
        printf("a(%d) est superieur a b(%d)\n", a, b);
    }
    else if(a == b) {
        printf("a(%d) est egal a b(%d)\n", a, b);
    }
    else {
        printf("a(%d) est inferieur a b(%d)\n", a, b);
    }
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a(100) est egal a b(100)</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-boucle-for"><a class="Link9" href="#Fondamentaux">Créer une boucle for</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int lNumber = 3;
    for(int i = 0; i &lt; 10; i++) {
        int lData = i*lNumber;
        printf("%d x %d = %d\n", i, lNumber, lData);
    }
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-bouble-while"><a class="Link9" href="#Fondamentaux">Créer une bouble while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int lNumber = 3;
    int i = 0;
    while(i &lt; 10) {
        int lData = i*lNumber;
        printf("%d x %d = %d\n", i, lNumber, lData);
        i++;
    }
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-boucle-do-while"><a class="Link9" href="#Fondamentaux">Créer une boucle do while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int lNumber = 3;
    int i = 0;
    do {
        int lData = i*lNumber;
        printf("%d x %d = %d\n", i, lNumber, lData);
        i++;
    } while(i &lt; 10);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Casser-une-boucle-for"><a class="Link9" href="#Fondamentaux">Casser une boucle for</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int lNumber = 3;
    int i = 0;
    for(;;) {
        int lData = i*lNumber;
        printf("%d x %d = %d\n", i, lNumber, lData);
        i++;
        if(i &gt;= 10) {break;}
    }
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Casser-une-boucle-while"><a class="Link9" href="#Fondamentaux">Casser une boucle while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int lNumber = 3;
    int i = 0;
    while(1) {
        int lData = i*lNumber;
        printf("%d x %d = %d\n", i, lNumber, lData);
        i++;
        if(i &gt;= 10) {break;}
    }
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Casser-une-boucle-do-while"><a class="Link9" href="#Fondamentaux">Casser une boucle do while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int lNumber = 3;
    int i = 0;
    do {
        int lData = i*lNumber;
        printf("%d x %d = %d\n", i, lNumber, lData);
        i++;
        if(i &gt;= 10) {break;}
    } while(1);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Continuer-une-boucle-for"><a class="Link9" href="#Fondamentaux">Continuer une boucle for</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int lNumber = 3;
    int i = 0;
    for(double x = -5.0; x &lt;= 5.0; x += 1.0) {
        if(x == 0) {continue;}
        double f = 1/x;
        printf("f[%.1f] = %.2f\n", x, f);
    }
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">f[-5.0] = -0.20
f[-4.0] = -0.25
f[-3.0] = -0.33
f[-2.0] = -0.50
f[-1.0] = -1.00
f[1.0] = 1.00
f[2.0] = 0.50
f[3.0] = 0.33
f[4.0] = 0.25
f[5.0] = 0.20</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Continuer-une-boucle-while"><a class="Link9" href="#Fondamentaux">Continuer une boucle while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    double x = -5;

    while(x &lt;= 5) {
        if(x == 0) {x += 1; continue;}
        double f = 1.0/x;
        printf("f[%.1f] = %.2f\n", x, f);
        x += 1;
    }

    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">f[-5.0] = -0.20
f[-4.0] = -0.25
f[-3.0] = -0.33
f[-2.0] = -0.50
f[-1.0] = -1.00
f[1.0] = 1.00
f[2.0] = 0.50
f[3.0] = 0.33
f[4.0] = 0.25
f[5.0] = 0.20</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Continuer-une-boucle-do-while"><a class="Link9" href="#Fondamentaux">Continuer une boucle do while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    double x = -5;

    do {
        if(x == 0) {x += 1; continue;}
        double f = 1.0/x;
        printf("f[%.1f] = %.2f\n", x, f);
        x += 1;
    } while(x &lt;= 5);

    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">f[-5.0] = -0.20
f[-4.0] = -0.25
f[-3.0] = -0.33
f[-2.0] = -0.50
f[-1.0] = -1.00
f[1.0] = 1.00
f[2.0] = 0.50
f[3.0] = 0.33
f[4.0] = 0.25
f[5.0] = 0.20</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Recuperer-les-parametres-passes-en-ligne-de-commande"><a class="Link9" href="#Fondamentaux">Récupérer les paramètres passés en ligne de commande</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;cstdio&gt;
//===============================================
int main(int argc, char** argv) {
    for(int i = 0; i &lt; argc; i++) {
        printf("argv[%d] : %s\n", i, argv[i]);
    }
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">./rdcpp.exe un deux trois</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">argv[0] : rdcpp.exe
argv[1] : un
argv[2] : deux
argv[3] : trois</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-machine-a-etats-finis"><a class="Link9" href="#Fondamentaux">Créer une machine à états finis</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
int main(int argc, char** argv) {
    std::string lState = "init";

    while(1) {
        if(lState == "init") {
            printf("initialiser le systeme\n");
            lState = "method";
        }
        else if(lState == "method") {
            printf("afficher la liste des methodes\n");
            lState = "choice";
        }
        else if(lState == "choice") {
            printf("choisir une methode\n");
            lState = "run";
        }
        else if(lState == "run") {
            printf("executer la methode\n");
            lState = "end";
        }
        else {break;}
    }

    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">initialiser le systeme
afficher la liste des methodes
choisir une methode
executer la methode</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-surcharge-de-fonctions"><a class="Link9" href="#Fondamentaux">Créer une surcharge de fonctions</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
void sayHello();
void sayHello(const std::string&amp; name);
//===============================================
int main(int argc, char** argv) {
    sayHello();
    sayHello("Gerard KESEE");
    return 0;
}
//===============================================
void sayHello() {
    printf("Bonjour tout le monde\n");
}
//===============================================
void sayHello(const std::string&amp; name) {
    std::cout &lt;&lt; "Bonjour " &lt;&lt; name &lt;&lt; "\n";
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde
Bonjour Gerard KESEE</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-allocation-memoire-dynamique"><a class="Link9" href="#Fondamentaux">Créer une allocation mémoire dynamique</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int* lData = new int;
    *lData = 1000;
    printf("Donnee : %d\n", *lData);
    delete lData;
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Donnee : 1000</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-tableau-d-allocation-memoire-dynamique"><a class="Link9" href="#Fondamentaux">Créer un tableau d'allocation mémoire dynamique</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int lSize = 10;
    int* lData = new int[lSize];
    
    for(int i = 0; i &lt; lSize; i++) {
        lData[i] = i*i;
    }
    
    for(int i = 0; i &lt; lSize; i++) {
        printf("Donnee[%d] : %d\n", i, lData[i]);
    }
    
    delete[] lData;
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Donnee[0] : 0
Donnee[1] : 1
Donnee[2] : 4
Donnee[3] : 9
Donnee[4] : 16
Donnee[5] : 25
Donnee[6] : 36
Donnee[7] : 49
Donnee[8] : 64
Donnee[9] : 81</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-inline-automatique"><a class="Link9" href="#Fondamentaux">Créer une fonction inline automatique</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================
int main(int argc, char** argv) {
    GHello lHello;
    lHello.sayHello();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GHello.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GHello_
#define _GHello_
//===============================================
#include &lt;iostream&gt;
//===============================================
class GHello {
public:
    GHello() {}
    ~GHello() {}
    
public:
    void sayHello() {
        printf("Bonjour tout le monde\n");
    }
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GHello.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-inline-externe"><a class="Link9" href="#Fondamentaux">Créer une fonction inline externe</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================
int main(int argc, char** argv) {
    GHello lHello;
    lHello.sayHello();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GHello.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GHello_
#define _GHello_
//===============================================
#include &lt;iostream&gt;
//===============================================
class GHello {
public:
    GHello();
    ~GHello();
    
public:
    void sayHello();
};
//===============================================
inline GHello::GHello() {

}
//===============================================
inline GHello::~GHello() {

}
//===============================================
inline void GHello::sayHello() {
    printf("Bonjour tout le monde\n");
}
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GHello.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-reference"><a class="Link9" href="#Fondamentaux">Créer une référence</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
void updateData(int&amp; ptr, int value);
//===============================================
void updateData(int&amp; ptr, int value) {
    ptr = value;
}
//===============================================
int main(int argc, char** argv) {
    int lData = 10;
    updateData(lData, 2021);
    printf("Donnee : %d\n", lData);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Donnee : 2021</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-espace-de-nom"><a class="Link9" href="#Fondamentaux">Créer un espace de nom</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
namespace rd {
void sayHello();
}
//===============================================
int main(int argc, char** argv) {
    rd::sayHello();
    return 0;
}
//===============================================
void rd::sayHello() {
    printf("Bonjour tout le monde\n");
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
namespace rd {
void sayHello();
}
//===============================================
int main(int argc, char** argv) {
    rd::sayHello();
    return 0;
}
//===============================================
void rd::sayHello() {
    printf("Bonjour tout le monde\n");
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-template-de-fonction"><a class="Link9" href="#Fondamentaux">Créer un template de fonction</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
template &lt;typename T&gt; T min(const T &amp;x, const T &amp;y);
//===============================================
int main(int argc, char** argv) {
    printf("%s : %.1f\n", "min&lt;double&gt;(20.5, 50.5)", 
    min&lt;double&gt;(20.5, 50.5));
    printf("%s : %d\n", "min&lt;int&gt;(40, 30)", 
    min&lt;int&gt;(40, 30));
    printf("%s : %s\n", "min&lt;std::string&gt;(\"bonjour\", \"bonbon\")", 
    min&lt;std::string&gt;("bonjour", "bonbon").c_str());
    return 0;
}
//===============================================
template &lt;typename T&gt; T min(const T &amp;x, const T &amp;y) {
    return (x &lt; y) ? x : y;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">min&lt;double&gt;(20.5, 50.5) : 20.5
min&lt;int&gt;(40, 30) : 30
min&lt;std::string&gt;("bonjour", "bonbon") : bonbon</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-template-de-classe"><a class="Link9" href="#Fondamentaux">Créer un template de classe</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GRectangle.h"
//===============================================
int main(int argc, char** argv) {
    GRectangle&lt;int&gt; lRect(-1, 2, -2, 2);
    printf("Rectangle (-1, 2, -2, 2) : width : %d\n", lRect.width());
    printf("Rectangle (-1, 2, -2, 2) : height : %d\n", lRect.height());
    printf("Rectangle (-1, 2, -2, 2) : perimeter : %d\n", lRect.perimeter());
    printf("Rectangle (-1, 2, -2, 2) : area : %d\n", lRect.area());
    printf("Rectangle (-1, 2, -2, 2) : area : %d\n", lRect.area());
    printf("Rectangle (-1, 2, -2, 2) : contain (0,-1) : %d\n", lRect.contain(0, -1));
    printf("Rectangle (-1, 2, -2, 2) : contain (0,-3) : %d\n", lRect.contain(0, -3));
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GRectangle.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GRectangle_
#define _GRectangle_
//===============================================
#include &lt;iostream&gt;
//===============================================
template &lt;typename T&gt; 
class GRectangle {
public:
    GRectangle(const T&amp; x1, const T&amp; x2, const T&amp; y1, const T&amp; y2);
    ~GRectangle();

public:
    T width() const;
    T height() const;
    bool contain(const T&amp; x, const T&amp; y) const;
    T perimeter() const;
    T area() const;
    
private:
    T m_x1;
    T m_x2;
    T m_y1;
    T m_y2;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GRectangle.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GRectangle.h"
//===============================================
template &lt;typename T&gt;
GRectangle&lt;T&gt;::GRectangle(const T&amp; x1, const T&amp; x2, const T&amp; y1, const T&amp; y2) {
    m_x1 = x1;
    m_x2 = x2;
    m_y1 = y1;
    m_y2 = y2;
    T lTmp;
    if(m_x1 &gt; m_x2) {lTmp = m_x1; m_x1 = m_x2; m_x2 = lTmp;}
    if(m_y1 &gt; m_y2) {lTmp = m_y1; m_y1 = m_y2; m_y2 = lTmp;}
}
//===============================================
template &lt;typename T&gt;
GRectangle&lt;T&gt;::~GRectangle() {

}
//===============================================
template &lt;typename T&gt;
T GRectangle&lt;T&gt;::width() const {
    T lWidth = m_x2 - m_x1;
    return lWidth;
}
//===============================================
template &lt;typename T&gt;
T GRectangle&lt;T&gt;::height() const {
    T lHeight = m_y2 - m_y1;
    return lHeight;
}
//===============================================
template &lt;typename T&gt;
bool GRectangle&lt;T&gt;::contain(const T&amp; x, const T&amp; y) const {
    if(x &lt; m_x1 || x &gt; m_x2) {return 0;}
    if(y &lt; m_y1 || y &gt; m_y2) {return 0;}
    return 1;
}
//===============================================
template &lt;typename T&gt;
T GRectangle&lt;T&gt;::perimeter() const {
    T lWidth = width();
    T lHeight = height();
    T lPerimeter = 2 * (lWidth + lHeight);
    return lPerimeter;
}
//===============================================
template &lt;typename T&gt;
T GRectangle&lt;T&gt;::area() const {
    T lWidth = width();
    T lHeight = height();
    T lArea = lWidth * lHeight;
    return lArea;
}
//===============================================
template class GRectangle&lt;int&gt;;
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Rectangle (-1, 2, -2, 2) : width : 3
Rectangle (-1, 2, -2, 2) : height : 4
Rectangle (-1, 2, -2, 2) : perimeter : 14
Rectangle (-1, 2, -2, 2) : area : 12
Rectangle (-1, 2, -2, 2) : area : 12
Rectangle (-1, 2, -2, 2) : contain (0,-1) : 1
Rectangle (-1, 2, -2, 2) : contain (0,-3) : 0</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-template-de-classe-header"><a class="Link9" href="#Fondamentaux">Créer un template de classe header</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GRectangle.h"
//===============================================
int main(int argc, char** argv) {
    GRectangle&lt;double&gt; lRect(-1, 2, -2, 2);
    printf("Rectangle (-1, 2, -2, 2) : width : %.2f\n", lRect.width());
    printf("Rectangle (-1, 2, -2, 2) : height : %.2f\n", lRect.height());
    printf("Rectangle (-1, 2, -2, 2) : perimeter : %.2f\n", lRect.perimeter());
    printf("Rectangle (-1, 2, -2, 2) : area : %.2f\n", lRect.area());
    printf("Rectangle (-1, 2, -2, 2) : area : %.2f\n", lRect.area());
    printf("Rectangle (-1, 2, -2, 2) : contain (0,-1) : %d\n", lRect.contain(0, -1));
    printf("Rectangle (-1, 2, -2, 2) : contain (0,-3) : %d\n", lRect.contain(0, -3));
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GRectangle.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GRectangle_
#define _GRectangle_
//===============================================
#include &lt;iostream&gt;
//===============================================
template &lt;typename T&gt; 
class GRectangle {
public:
    GRectangle(const T&amp; x1, const T&amp; x2, const T&amp; y1, const T&amp; y2);
    ~GRectangle();

public:
    T width() const;
    T height() const;
    bool contain(const T&amp; x, const T&amp; y) const;
    T perimeter() const;
    T area() const;
    
private:
    T m_x1;
    T m_x2;
    T m_y1;
    T m_y2;
};
//===============================================
template &lt;typename T&gt;
GRectangle&lt;T&gt;::GRectangle(const T&amp; x1, const T&amp; x2, const T&amp; y1, const T&amp; y2) {
    m_x1 = x1;
    m_x2 = x2;
    m_y1 = y1;
    m_y2 = y2;
    T lTmp;
    if(m_x1 &gt; m_x2) {lTmp = m_x1; m_x1 = m_x2; m_x2 = lTmp;}
    if(m_y1 &gt; m_y2) {lTmp = m_y1; m_y1 = m_y2; m_y2 = lTmp;}
}
//===============================================
template &lt;typename T&gt;
GRectangle&lt;T&gt;::~GRectangle() {

}
//===============================================
template &lt;typename T&gt;
T GRectangle&lt;T&gt;::width() const {
    T lWidth = m_x2 - m_x1;
    return lWidth;
}
//===============================================
template &lt;typename T&gt;
T GRectangle&lt;T&gt;::height() const {
    T lHeight = m_y2 - m_y1;
    return lHeight;
}
//===============================================
template &lt;typename T&gt;
bool GRectangle&lt;T&gt;::contain(const T&amp; x, const T&amp; y) const {
    if(x &lt; m_x1 || x &gt; m_x2) {return 0;}
    if(y &lt; m_y1 || y &gt; m_y2) {return 0;}
    return 1;
}
//===============================================
template &lt;typename T&gt;
T GRectangle&lt;T&gt;::perimeter() const {
    T lWidth = width();
    T lHeight = height();
    T lPerimeter = 2 * (lWidth + lHeight);
    return lPerimeter;
}
//===============================================
template &lt;typename T&gt;
T GRectangle&lt;T&gt;::area() const {
    T lWidth = width();
    T lHeight = height();
    T lArea = lWidth * lHeight;
    return lArea;
}
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GRectangle.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GRectangle.h"
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Rectangle (-1, 2, -2, 2) : width : 3.00
Rectangle (-1, 2, -2, 2) : height : 4.00
Rectangle (-1, 2, -2, 2) : perimeter : 14.00
Rectangle (-1, 2, -2, 2) : area : 12.00
Rectangle (-1, 2, -2, 2) : area : 12.00
Rectangle (-1, 2, -2, 2) : contain (0,-1) : 1
Rectangle (-1, 2, -2, 2) : contain (0,-3) : 0</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-template-variadique--C--11-"><a class="Link9" href="#Fondamentaux">Créer un template variadique (C++11)</a></h2><br>Un pack de paramètres de modèle est un paramètre de modèle qui accepte zéro ou plusieurs arguments de modèle (non-types, types ou modèles). Un pack de paramètres de fonction est un paramètre de fonction qui accepte zéro ou plusieurs arguments de fonction. Un modèle avec au moins un pack de paramètres est appelé un modèle variadique.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
void tprintf(const char* format) {
    std::cout &lt;&lt; format;
}
//===============================================
template&lt;typename T, typename... Targs&gt;
void tprintf(const char* format, T value, Targs... Fargs) {
    for ( ; *format != '\0'; format++ ) {
        if ( *format == '%' ) {
           std::cout &lt;&lt; value;
           tprintf(format+1, Fargs...);
           return;
        }
        std::cout &lt;&lt; *format;
    }
}
//===============================================
int main(int argc, char** argv) {
    tprintf("% tout le monde % %\n","Bonjour",'!',123);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde ! 123</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-exception"><a class="Link9" href="#Fondamentaux">Créer une exception</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
double divide(double a, double b);
//===============================================
int main(int argc, char** argv) {
    try {
        printf("divide (22, 7) : %.2f\n", divide(22, 7));
        printf("divide (33, 8) : %.2f\n", divide(33, 8));
        printf("divide (44, 0) : %.2f\n", divide(44, 0));
    }
    catch(const std::string&amp; e) {
        std::cerr &lt;&lt; e &lt;&lt; "\n";
    }
    return 0;
}
//===============================================
double divide(double a, double b) {
    if(b == 0) {
        throw std::string("[erreur] division par zero");
    }
    return a/b;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">divide (22, 7) : 3.14
divide (33, 8) : 4.12
[erreur] division par zero</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-exception-de-classe"><a class="Link9" href="#Fondamentaux">Créer une exception de classe</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GError.h"
//===============================================
double divide(double a, double b);
//===============================================
int main(int argc, char** argv) {
    try {
        printf("divide (22, 7) : %.2f\n", divide(22, 7));
        printf("divide (33, 8) : %.2f\n", divide(33, 8));
        printf("divide (44, 0) : %.2f\n", divide(44, 0));
    }
    catch(const std::exception&amp; e) {
        std::cerr &lt;&lt; e.what() &lt;&lt; "\n";
    }
    return 0;
}
//===============================================
double divide(double a, double b) {
    if(b == 0) {
        throw GError("[erreur] division par zero");
    }
    return a/b;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GError.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GError_
#define _GError_
//===============================================
#include &lt;iostream&gt;
#include &lt;exception&gt;
//===============================================
class GError : public std::exception {
public:
    GError(const std::string&amp; msg) throw();
    ~GError() throw();

public:
    const char* what() const throw();

private:
    std::string m_msg;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GError.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GError.h"
//===============================================
GError::GError(const std::string&amp; msg) throw() {
    m_msg = msg;
}
//===============================================
GError::~GError() throw() {
    
}
//===============================================
const char* GError::what() const throw() {
    return m_msg.c_str();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">divide (22, 7) : 3.14
divide (33, 8) : 4.12
[erreur] division par zero</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-reference-LValue"><a class="Link9" href="#Fondamentaux">Créer une référence LValue</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int a = 100;
    int&amp; b = a;
    printf("a : %d\n", a);
    b = 200;
    printf("a : %d\n", a);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a : 100
a : 200</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-reference-LValue-de-fonction"><a class="Link9" href="#Fondamentaux">Créer une référence LValue de fonction</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int a = 100;
//===============================================
int&amp; getA();
//===============================================
int main(int argc, char** argv) {
    printf("a : %d\n", a);
    getA() = 200;
    printf("a : %d\n", a);
    return 0;
}
//===============================================
int&amp; getA() {
    return a;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a : 100
a : 200</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-reference-RValue--C--11-"><a class="Link9" href="#Fondamentaux">Créer une référence RValue (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int a = 100;
//===============================================
int getA();
//===============================================
int main(int argc, char** argv) {
    printf("a : %d\n", a);
    int&amp;&amp; b = getA();
    b = 200;
    printf("a : %d\n", a);
    printf("b : %d\n", b);
    return 0;
}
//===============================================
int getA() {
    return a;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a : 100
a : 100
b : 200</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-reference-RValue-de-fonction--C--11-"><a class="Link9" href="#Fondamentaux">Créer une référence RValue de fonction (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int a = 100;
//===============================================
int getA();
void printV(std::string k, int&amp;&amp; v);
//===============================================
int main(int argc, char** argv) {
    // printV("a", a); // genere une erreur
    printV("a", getA());
    printV("v", 200);
    return 0;
}
//===============================================
int getA() {
    return a;
}
//===============================================
void printV(std::string k, int&amp;&amp; v) {
    printf("%s : %d\n", k.c_str(), v);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a : 100
v : 200</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-deduction-de-type-avec-auto--C--11-"><a class="Link9" href="#Fondamentaux">Créer une déduction de type avec auto (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    auto var_int = 100;
    auto var_double = 3.14;
    auto var_bool = true;
    auto var_string = "voici ma chaine";
    printf("var_int : %d\n", var_int);
    printf("var_double : %.2f\n", var_double);
    printf("var_bool : %d\n", var_bool);
    printf("var_string : %s\n", var_string);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">var_int : 100
var_double : 3.14
var_bool : 1
var_string : voici ma chaine</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-deduction-de-type-liste-avec-auto--C--11-"><a class="Link9" href="#Fondamentaux">Créer une déduction de type liste avec auto (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    // std::initializer_list&lt;int&gt;
    auto vec_int = {1, 2, 3, 4, 5}; int i;
    i = 0;
    for(int x : vec_int) {
        if(i != 0) {printf(" ; ");}
        printf("%d", x);
        i = 1;
    }
    printf("\n");
    // std::initializer_list&lt;double&gt;
    auto vec_double = {1.1, 2.2, 3.3, 4.4, 5.5};
    i = 0;
    for(double x : vec_double) {
        if(i != 0) {printf(" ; ");}
        printf("%.1f", x);
        i = 1;
    }
    printf("\n");
    // std::initializer_list&lt;const char*&gt;
    auto vec_string = {"un", "deux", "trois", "quatre", "cinq"};
    i = 0;
    for(const char* x : vec_string) {
        if(i != 0) {printf(" ; ");}
        printf("%s", x);
        i = 1;
    }
    printf("\n");
    //
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">1 ; 2 ; 3 ; 4 ; 5
1.1 ; 2.2 ; 3.3 ; 4.4 ; 5.5
un ; deux ; trois ; quatre ; cinq</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--11-"><a class="Link9" href="#Fondamentaux">Créer une évaluation d'expression avec constexpr (C++11)</a></h2><br>En C ++11, une fonction <b>constexpr </b>ne doit contenir qu'une seule instruction <b>return</b>.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
constexpr int product(int a, int b);
//===============================================
int main(int argc, char** argv) {
    printf("product (3, 4) : %d\n", product(3, 4));
    printf("product (4, 5) : %d\n", product(4, 5));
    printf("product (5, 6) : %d\n", product(5, 6));
    return 0;
}
//===============================================
constexpr int product(int a, int b) {
    return (a * b);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">product (3, 4) : 12
product (4, 5) : 20
product (5, 6) : 30</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--14-"><a class="Link9" href="#Fondamentaux">Créer une évaluation d'expression avec constexpr (C++14)</a></h2><br>En C ++14, une fonction <b>constexpr </b>autorise plusieurs instructions.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
constexpr int product(int a, int b);
//===============================================
int main(int argc, char** argv) {
    printf("product (3, 4) : %d\n", product(3, 4));
    printf("product (4, 5) : %d\n", product(4, 5));
    printf("product (5, 6) : %d\n", product(5, 6));
    return 0;
}
//===============================================
constexpr int product(int a, int b) {
    int c = a * b;
    return c;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">product (3, 4) : 12
product (4, 5) : 20
product (5, 6) : 30</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-lambda--C--11-"><a class="Link9" href="#Fondamentaux">Créer une fonction lambda (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;algorithm&gt;
//===============================================
int main(int argc, char** argv) {
    std::vector&lt;int&gt; nums {1, 2, 3, 4, 5};
    int i;
    auto show = [&amp;i](const int&amp; n) -&gt; void {
        if(i != 0) {printf(" ; ");}
        printf("%d", n);
        i = 1;
    };
    i = 0; std::for_each(nums.cbegin(), nums.cend(), show);
    printf("\n");
    //
    std::for_each(nums.begin(), nums.end(), [](int &amp;n) -&gt; void { 
        n *= 5;
    });
    //
    i = 0; std::for_each(nums.cbegin(), nums.cend(), show);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">1 ; 2 ; 3 ; 4 ; 5
5 ; 10 ; 15 ; 20 ; 25</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-lambda-comme-parametre--C--14-"><a class="Link9" href="#Fondamentaux">Créer une fonction lambda comme paramètre (C++14)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;algorithm&gt;
//===============================================
int main(int argc, char** argv) {
    auto lambda = [](auto params, auto onFunc) -&gt; void {
        onFunc(params);
    };

    lambda(42, [](int x) -&gt; void {printf("%d\n", x);});
    
    auto lambda_vec = [](auto vec, auto onFunc) -&gt; void {
        for(auto x : vec) {
            onFunc(x);           
        }
    };

    std::vector&lt;int&gt; vec_nums {1, 2, 3, 4, 5};

    int i = 0;
    lambda_vec(vec_nums, [&amp;i](int x) -&gt; void {
        if(i != 0) {printf(" ; ");}
        printf("%d", x);
        i = 1;
    });
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">42
1 ; 2 ; 3 ; 4 ; 5</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-boucle-for-basee-sur-une-palge--C--11-"><a class="Link9" href="#Fondamentaux">Créer une boucle for basée sur une palge (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;algorithm&gt;
//===============================================
int main(int argc, char** argv) {
    std::vector&lt;int&gt; vec_nums {1, 2, 3, 4, 5};
    int i = 0;
    for(auto x : vec_nums) {
        if(i != 0) {printf(" ; ");}
        printf("%d", x);
        i = 1;
    }
    printf("\n");
    //
    int tab_nums[] = {5, 6, 7, 8, 9};
    i = 0;
    for(auto x : tab_nums) {
        if(i != 0) {printf(" ; ");}
        printf("%d", x);
        i = 1;
    }
    printf("\n");
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">1 ; 2 ; 3 ; 4 ; 5
5 ; 6 ; 7 ; 8 ; 9</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-module-avec-import--export-et-module--C--20-"><a class="Link9" href="#Fondamentaux">Créer un module avec import, export et module (C++20)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
import hello;
//===============================================
int main (int argc, char** argv) {
    sayHello("Gerard KESSE");
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GHello.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
module;
//===============================================
#include &lt;iostream&gt;
#include &lt;string_view&gt;
//===============================================
export module hello;
//===============================================
export void sayHello (std::string_view const &amp;name) {
    std::cout &lt;&lt; "[module] Bonjour " &lt;&lt; name &lt;&lt; "!\n";
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">set "PATH=winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-8.0.2-r1\mingw64\bin;%PATH%"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">g++ -std=gnu++20 -fmodules-ts -c main.cpp -o main.o
g++ -std=gnu++20 -fmodules-ts -c GHello.cpp -o GHello.o
g++ -std=gnu++20 -fmodules-ts -o rdcpp.exe main.o GHello.o</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">rdcpp.exe</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">[module] Bonjour Gerard KESSE</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Activer-la-sortie-boolalpha--C--11-"><a class="Link9" href="#Fondamentaux">Activer la sortie boolalpha (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;sstream&gt;
#include &lt;locale&gt;
//===============================================
int main(int argc, char** argv) {
    // boolalpha output
    std::cout &lt;&lt; std::boolalpha 
    &lt;&lt; "boolalpha true: " &lt;&lt; true &lt;&lt; "\n"
    &lt;&lt; "boolalpha false: " &lt;&lt; false &lt;&lt; "\n";
    std::cout &lt;&lt; std::noboolalpha 
    &lt;&lt; "noboolalpha true: " &lt;&lt; true &lt;&lt; "\n"
    &lt;&lt; "noboolalpha false: " &lt;&lt; false &lt;&lt; "\n";
    // boolalpha parse
    bool b1, b2;
    std::istringstream is("true false");
    is &gt;&gt; std::boolalpha &gt;&gt; b1 &gt;&gt; b2;
    std::cout &lt;&lt; "\"" &lt;&lt; is.str() 
    &lt;&lt; "\" parsed as " &lt;&lt; b1 &lt;&lt; " " &lt;&lt; b2 &lt;&lt; "\n";
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">boolalpha true: true
boolalpha false: false
noboolalpha true: 1
noboolalpha false: 0
"true false" parsed as 1 0</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Activier-la-sortie-noboolalpha--C--11-"><a class="Link9" href="#Fondamentaux">Activier la sortie noboolalpha (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;sstream&gt;
#include &lt;locale&gt;
//===============================================
int main(int argc, char** argv) {
    // boolalpha output
    std::cout &lt;&lt; std::boolalpha 
    &lt;&lt; "boolalpha true: " &lt;&lt; true &lt;&lt; "\n"
    &lt;&lt; "boolalpha false: " &lt;&lt; false &lt;&lt; "\n";
    std::cout &lt;&lt; std::noboolalpha 
    &lt;&lt; "noboolalpha true: " &lt;&lt; true &lt;&lt; "\n"
    &lt;&lt; "noboolalpha false: " &lt;&lt; false &lt;&lt; "\n";
    // boolalpha parse
    bool b1, b2;
    std::istringstream is("true false");
    is &gt;&gt; std::boolalpha &gt;&gt; b1 &gt;&gt; b2;
    std::cout &lt;&lt; "\"" &lt;&lt; is.str() 
    &lt;&lt; "\" parsed as " &lt;&lt; b1 &lt;&lt; " " &lt;&lt; b2 &lt;&lt; "\n";
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">boolalpha true: true
boolalpha false: false
noboolalpha true: 1
noboolalpha false: 0
"true false" parsed as 1 0</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-standard--C--11-"><a class="Link9" href="#Fondamentaux">Vérifier si un type a une mise en forme standard (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;type_traits&gt;
//===============================================
struct A {
    int m;
};
//===============================================
struct B {
    int m1;
private:
    int m2;
};
//===============================================
struct C {
    virtual void foo();
};
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; std::boolalpha;
    std::cout &lt;&lt; std::is_standard_layout&lt;A&gt;::value &lt;&lt; "\n";
    std::cout &lt;&lt; std::is_standard_layout&lt;B&gt;::value &lt;&lt; "\n";
    std::cout &lt;&lt; std::is_standard_layout&lt;C&gt;::value &lt;&lt; "\n";
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">true
false
false</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-scalaire--C--11-"><a class="Link9" href="#Fondamentaux">Vérifier si un type a une mise en forme scalaire (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;type_traits&gt;
//===============================================
class A {};
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; std::boolalpha;
    std::cout &lt;&lt; "is_scalar:" &lt;&lt; std::endl;
    std::cout &lt;&lt; "int: " &lt;&lt; std::is_scalar&lt;int&gt;::value &lt;&lt; std::endl;
    std::cout &lt;&lt; "A: " &lt;&lt; std::is_scalar&lt;A&gt;::value &lt;&lt; std::endl;
    std::cout &lt;&lt; "A&amp;: " &lt;&lt; std::is_scalar&lt;A&amp;&gt;::value &lt;&lt; std::endl;
    std::cout &lt;&lt; "A*: " &lt;&lt; std::is_scalar&lt;A*&gt;::value &lt;&lt; std::endl;
    std::cout &lt;&lt; "int(int): " &lt;&lt; std::is_scalar&lt;int(int)&gt;::value &lt;&lt; std::endl;
    std::cout &lt;&lt; "int(*)(int): " &lt;&lt; std::is_scalar&lt;int(*)(int)&gt;::value &lt;&lt; std::endl;
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">is_scalar:
int: true
A: false
A&amp;: false
A*: true
int(int): false
int(*)(int): true</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-predicat-avec-concept--C--20-"><a class="Link9" href="#Fondamentaux">Créer un prédicat avec concept (C++20)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;type_traits&gt;
//===============================================
template &lt;typename T&gt;
concept Integral = std::is_integral&lt;T&gt;::value;
//===============================================
template &lt;Integral T&gt;
void fun(T v) { std::cout &lt;&lt; "concept  : 1\n"; } 
//===============================================
template &lt;typename T&gt;
void fun(T v) { std::cout &lt;&lt; "template : 2\n"; } 
//===============================================
int main(int argc, char** argv) {
    fun("A");
    fun(1);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">template : 2
concept  : 1</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-predicat-avec-requires--C--20-"><a class="Link9" href="#Fondamentaux">Créer un predicat avec requires (C++20)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;type_traits&gt;
//===============================================
template &lt;typename T&gt;
requires std::is_integral_v&lt;T&gt;
void fun(T v) { std::cout &lt;&lt; "require  : 1\n"; } 
//===============================================
template &lt;typename T&gt;
void fun(T v) { std::cout &lt;&lt; "template : 2\n"; } 
//===============================================
int main(int argc, char** argv) {
    fun("A");
    fun(1);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">template : 2
require  : 1</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-avec-consteval--C--20-"><a class="Link9" href="#Fondamentaux">Créer une fonction avec consteval (C++20)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
consteval int square(int n) {
  return n*n;
}
//===============================================
int main(int argc, char** argv) {
    constexpr int a = 5;
    constexpr int b = square(a);
    printf("consteval (%d) : %d\n", a, b);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">consteval (5) : 25</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-de-coroutine--C--20-"><a class="Link9" href="#Fondamentaux">Créer une fonction de coroutine (C++20)</a></h2><br>Une coroutine est une fonction qui peut suspendre l'exécution pour être reprise plus tard. Les coroutines sont sans pile: elles suspendent l'exécution en retournant à l'appelant et les données nécessaires pour reprendre l'exécution sont stockées séparément de la pile. Cela permet un code séquentiel qui s'exécute de manière asynchrone (par exemple pour gérer des E / S non bloquantes sans rappels explicites), et prend également en charge des algorithmes sur des séquences infinies calculées paresseusement et d'autres utilisations.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;coroutine&gt;
#include &lt;iostream&gt;
#include &lt;stdexcept&gt;
#include &lt;thread&gt;
//===============================================
auto switch_to_new_thread(std::jthread&amp; out) {
    struct awaitable {
        std::jthread* p_out;
        bool await_ready() { return false; }
        void await_suspend(std::coroutine_handle&lt;&gt; h) {
            std::jthread&amp; out = *p_out;
            if (out.joinable()) {throw std::runtime_error("Output jthread parameter not empty");}
            out = std::jthread([h] { h.resume(); });
            std::cout &lt;&lt; "New thread ID: " &lt;&lt; out.get_id() &lt;&lt; "\n";
        }
        void await_resume() {}
    };
    return awaitable{&amp;out};
}
//===============================================
struct task {
    struct promise_type {
        task get_return_object() { return {}; }
        std::suspend_never initial_suspend() { return {}; }
        std::suspend_never final_suspend() noexcept { return {}; }
        void return_void() {}
        void unhandled_exception() {}
    };
};
//===============================================
task resuming_on_new_thread(std::jthread&amp; out) {
    std::cout &lt;&lt; "Coroutine started on thread: " 
    &lt;&lt; std::this_thread::get_id() &lt;&lt; "\n";
    co_await switch_to_new_thread(out);
    std::cout &lt;&lt; "Coroutine resumed on thread: " 
    &lt;&lt; std::this_thread::get_id() &lt;&lt; "\n";
}
//===============================================
int main() {
    std::jthread out;
    resuming_on_new_thread(out);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Coroutine started on thread: 1
New thread ID: 2
Coroutine resumed on thread: 2</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-parametre-non-utilise"><a class="Link9" href="#Fondamentaux">Créer un paramètre non utilisé</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    (void)argc;
    (void)argv;
    printf("Bonjour tout le monde\n");
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation-orientee-objet"><a class="Link3" href="#">Programmation orientée objet</a></h1><div class="Body3"><br>La <b>programmation orientée objet</b> (POO) est un paradigme de programmation informatique qui consiste en la définition et l'interaction de briques logicielles appelées objets ; un objet représente un concept, une idée ou toute entité du monde physique, comme une voiture, une personne ou encore une page d'un livre. Il possède une structure interne et un comportement, et il sait interagir avec ses pairs. Il s'agit donc de représenter ces objets et leurs relations ; l'interaction entre les objets via leurs relations permet de concevoir et réaliser les fonctionnalités attendues, de mieux résoudre le ou les problèmes. Dès lors, l'étape de modélisation revêt une importance majeure et nécessaire pour la POO. C'est elle qui permet de transcrire les éléments du réel sous forme virtuelle. La programmation orientée objet consiste à utiliser des techniques de programmation pour mettre en œuvre une conception basée sur les objets. Celle-ci peut être élaborée en utilisant des méthodologies de développement logiciel objet, dont la plus connue est le processus unifié et exprimée à l'aide de langages de modélisation tels que le Unified Modeling Language (UML).<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Creer-une-classe">Créer une classe</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Creer-un-heritage">Créer un héritage</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Creer-un-polymorphisme">Créer un polymorphisme</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Creer-une-classe-abstraite">Créer une classe abstraite</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Creer-une-interface">Créer une interface</a></div></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Creer-une-classe"><a class="Link9" href="#Programmation-orientee-objet">Créer une classe</a></h2><br>En programmation orientée objet, la déclaration d'une <b>classe </b>regroupe des membres, méthodes et propriétés (attributs) communs à un ensemble d'objets. La classe déclare, d'une part, des attributs représentant l'état des objets et, d'autre part, des méthodes représentant leur comportement. Une classe représente donc une catégorie d'objets. Elle apparaît aussi comme un moule ou une usine à partir de laquelle il est possible de créer des objets ; c'est en quelque sorte une « boîte à outils » qui permet de fabriquer un objet. On parle alors d'un objet en tant qu'instance d'une classe (création d'un objet ayant les propriétés de la classe). Il est possible de restreindre l'ensemble d'objets représenté par une classe A grâce à un mécanisme d'héritage. Dans ce cas, on crée une nouvelle classe B liée à la classe A et qui ajoute de nouvelles propriétés.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GPerson.h"
//===============================================
int main(int argc, char** argv) {
    GPerson lPerson = {"Gerard KESSE", 123456, 3.14};
    lPerson.print();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GPerson.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GPerson_
#define _GPerson_
//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
class GPerson {
public:
    GPerson(const std::string&amp; name, const int&amp; code, const double&amp; coef);
    ~GPerson();

public:
    void print();
    
private:
    std::string m_name;
    int m_code;
    double m_coef;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GPerson.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GPerson.h"
//===============================================
GPerson::GPerson(const std::string&amp; name, const int&amp; code, const double&amp; coef) {
    m_name = name;
    m_code = code;
    m_coef = coef;
}
//===============================================
GPerson::~GPerson() {
    
}
//===============================================
void GPerson::print() {
    printf("Personne[name] : %s\n", m_name.c_str());
    printf("Personne[code] : %d\n", m_code);
    printf("Personne[coef] : %.2f\n", m_coef);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Personne[name] : Gerard KESSE
Personne[code] : 123456
Personne[coef] : 3.14</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Creer-un-heritage"><a class="Link9" href="#Programmation-orientee-objet">Créer un héritage</a></h2><br>En programmation orientée objet, l’<b>héritage </b>est un mécanisme qui permet, lors de la déclaration d’une nouvelle classe, d'y inclure les caractéristiques d’une autre classe. L'héritage établit une relation de généralisation-spécialisation qui permet d'hériter dans la déclaration d’une nouvelle classe (appelée classe dérivée, classe fille, classe enfant ou sous-classe) des caractéristiques (propriétés et méthodes) de la déclaration d'une autre classe (appelée classe de base, classe mère, classe parent ou super-classe). Lorsqu'une classe fille hérite d'une classe mère, elle peut alors utiliser les caractéristiques de la classe mère.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
#include "GDog.h"
//===============================================
int main(int argc, char** argv) {
    GAnimal lAnimal("Tom");
    lAnimal.setCategory("Chat");
    lAnimal.print();
    
    GDog lDog("Medor", 20);
    lDog.setCategory("Chien");
    lDog.print();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
class GAnimal {
public:
    GAnimal(const std::string&amp; name);
    ~GAnimal();

public:
    void setCategory(const std::string&amp; category);
    void print();
    
protected:
    std::string m_name;
    std::string m_category;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
//===============================================
GAnimal::GAnimal(const std::string&amp; name) {
    m_name = name;
}
//===============================================
GAnimal::~GAnimal() {
    
}
//===============================================
void GAnimal::setCategory(const std::string&amp; category) {
    m_category = category;
}
//===============================================
void GAnimal::print() {
    printf("[Animal] Nom : %s\n", m_name.c_str());
    printf("[Animal] Categorie : %s\n", m_category.c_str());
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDog.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDog_
#define _GDog_
//===============================================
#include "GAnimal.h"
//===============================================
class GDog : public GAnimal {
public:
    GDog(const std::string&amp; name, int weight);
    ~GDog();

public:
    void print();
    
private:
    int m_weight;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDog.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GDog.h"
//===============================================
GDog::GDog(const std::string&amp; name, int weight) :
GAnimal(name) {
    m_weight = weight;
}
//===============================================
GDog::~GDog() {
    
}
//===============================================
void GDog::print() {
    printf("[Dog] Nom : %s\n", m_name.c_str());
    printf("[Dog] Categorie : %s\n", m_category.c_str());
    printf("[Dog] Poids : %d (kg)\n", m_weight);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">[Animal] Nom : Tom
[Animal] Categorie : Chat
[Dog] Nom : Medor
[Dog] Categorie : Chien
[Dog] Poids : 20 (kg)</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Creer-un-polymorphisme"><a class="Link9" href="#Programmation-orientee-objet">Créer un polymorphisme</a></h2><br>En informatique et en théorie des types, le <b>polymorphisme </b>est le concept consistant à fournir une interface unique à des entités pouvant avoir différents types. Par exemple, des opérations telles que la multiplication  peuvent ainsi être étendues à des <span class="GCode3"><code style="color:#cccccc;">scalaires </code></span>aux <span class="GCode3"><code style="color:#cccccc;">vecteurs </code></span>ou aux <span class="GCode3"><code style="color:#cccccc;">matrices</code></span>, l'addition des scalaires aux <span class="GCode3"><code style="color:#cccccc;">fonctions </code></span>ou aux <span class="GCode3"><code style="color:#cccccc;">chaînes de caractères</code></span>, etc.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
#include "GDog.h"
//===============================================
int main(int argc, char** argv) {
    GAnimal *lAnimal, *lAnimals[2];

    lAnimal = new GAnimal("Tom");
    lAnimal-&gt;setCategory("Chat");
    lAnimals[0] = lAnimal;

    lAnimal = new GDog("Medor", 20);
    lAnimal-&gt;setCategory("Chien");
    lAnimals[1] = lAnimal;

    for(int i = 0; i &lt; 2; i++) {
        lAnimal = lAnimals[i];
        lAnimal-&gt;print();
    }
    
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
class GAnimal {
public:
    GAnimal(const std::string&amp; name);
    virtual ~GAnimal();

public:
    virtual void setCategory(const std::string&amp; category);
    virtual void print();
    
protected:
    std::string m_name;
    std::string m_category;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
//===============================================
GAnimal::GAnimal(const std::string&amp; name) {
    m_name = name;
}
//===============================================
GAnimal::~GAnimal() {
    
}
//===============================================
void GAnimal::setCategory(const std::string&amp; category) {
    m_category = category;
}
//===============================================
void GAnimal::print() {
    printf("[Animal] Nom : %s | Categorie : %s\n", 
    m_name.c_str(), m_category.c_str());
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDog.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDog_
#define _GDog_
//===============================================
#include "GAnimal.h"
//===============================================
class GDog : public GAnimal {
public:
    GDog(const std::string&amp; name, int weight);
    ~GDog();

public:
    void print();
    
private:
    int m_weight;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDog.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GDog.h"
//===============================================
GDog::GDog(const std::string&amp; name, int weight) :
GAnimal(name) {
    m_weight = weight;
}
//===============================================
GDog::~GDog() {
    
}
//===============================================
void GDog::print() {
    printf("[Dog] Nom : %s | Categorie : %s | Poids : %d (kg)\n", 
    m_name.c_str(), m_category.c_str(), m_weight);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">[Animal] Nom : Tom | Categorie : Chat
[Dog] Nom : Medor | Categorie : Chien | Poids : 20 (kg)</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Creer-une-classe-abstraite"><a class="Link9" href="#Programmation-orientee-objet">Créer une classe abstraite</a></h2><br>En programmation orientée objet (POO), une <b>classe abstraite</b> est une classe dont l'implémentation n'est pas complète et qui n'est pas instanciable. Elle sert de base à d'autres classes dérivées (héritées). En <span class="GCode3"><code style="color:#cccccc;">C++</code></span>, une classe est abstraite si elle contient au moins une méthode déclarée virtuelle pure, c'est-à-dire commençant par virtual et terminée par <span class="GCode3"><code style="color:#cccccc;">= 0</code></span>. Ce type de classe n'est pas instanciable. On peut néanmoins créer des pointeurs ou des références du type de la classe abstraite qui pointeront ou référenceront des objets d'une classe dérivée non abstraite. Une fonction virtuelle pure doit être définie ou redéclarée explicitement virtuelle pure.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
#include "GCat.h"
#include "GDog.h"
//===============================================
int main(int argc, char** argv) {
    GAnimal *lAnimal, *lAnimals[2];

    lAnimal = new GCat("Tom", 1000);
    lAnimal-&gt;setCategory("Chat");
    lAnimals[0] = lAnimal;

    lAnimal = new GDog("Medor", 20);
    lAnimal-&gt;setCategory("Chien");
    lAnimals[1] = lAnimal;

    for(int i = 0; i &lt; 2; i++) {
        lAnimal = lAnimals[i];
        lAnimal-&gt;print();
    }
    
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
class GAnimal {
public:
    GAnimal(const std::string&amp; name);
    virtual ~GAnimal();

public:
    virtual void setCategory(const std::string&amp; category);
    virtual void print() = 0;
    
protected:
    std::string m_name;
    std::string m_category;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
//===============================================
GAnimal::GAnimal(const std::string&amp; name) {
    m_name = name;
}
//===============================================
GAnimal::~GAnimal() {
    
}
//===============================================
void GAnimal::setCategory(const std::string&amp; category) {
    m_category = category;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDog.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDog_
#define _GDog_
//===============================================
#include "GAnimal.h"
//===============================================
class GDog : public GAnimal {
public:
    GDog(const std::string&amp; name, int weight);
    ~GDog();

public:
    void print();
    
private:
    int m_weight;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDog.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GDog.h"
//===============================================
GDog::GDog(const std::string&amp; name, int weight) :
GAnimal(name) {
    m_weight = weight;
}
//===============================================
GDog::~GDog() {
    
}
//===============================================
void GDog::print() {
    printf("[Dog] Nom : %s | Categorie : %s | Poids : %d (kg)\n", 
    m_name.c_str(), m_category.c_str(), m_weight);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GCat.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GCat_
#define _GCat_
//===============================================
#include "GAnimal.h"
//===============================================
class GCat : public GAnimal {
public:
    GCat(const std::string&amp; name, int price);
    ~GCat();

public:
    void print();
    
private:
    int m_price;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GCat.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GCat.h"
//===============================================
GCat::GCat(const std::string&amp; name, int price) :
GAnimal(name) {
    m_price = price;
}
//===============================================
GCat::~GCat() {
    
}
//===============================================
void GCat::print() {
    printf("[Cat] Nom : %s | Categorie : %s | Prix : %d (€)\n", 
    m_name.c_str(), m_category.c_str(), m_price);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">[Cat] Nom : Tom | Categorie : Chat | Prix : 1000 (€)
[Dog] Nom : Medor | Categorie : Chien | Poids : 20 (kg)</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Creer-une-interface"><a class="Link9" href="#Programmation-orientee-objet">Créer une interface</a></h2><br>En programmation orientée objet, une <b>interface </b>est un ensemble de signatures de méthodes publiques d'un objet. Il s'agit donc d'un ensemble de méthodes accessibles depuis l'extérieur d'une classe, par lesquelles on peut modifier un objet, ou plus généralement communiquer avec lui. Pour rappel, la différenciation entre méthodes publiques et méthodes privées introduit une abstraction qui empêche le programmeur d'application (qui emploie une classe) de manipuler l'objet de façon indue, puisque les seules modifications possibles d'une instance sont celles indiquées comme publiques par le concepteur de la classe ; permet au programmeur de la classe, de modifier l'implémentation interne de ces méthodes de manière transparente. Selon le langage de programmation, l'utilité, la portée et la manière de décrire une interface, varient. Néanmoins il est commun à toutes les interfaces de déclarer chacune de leurs méthodes sous la forme d'une signature.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GShape.h"
#include "GRectangle.h"
#include "GCircle.h"
//===============================================
int main(int argc, char** argv) {
    GShape *lShape, *lShapes[2];

    lShape = new GRectangle(30, 40);
    lShapes[0] = lShape;

    lShape = new GCircle(20);
    lShapes[1] = lShape;

    for(int i = 0; i &lt; 2; i++) {
        lShape = lShapes[i];
        lShape-&gt;perimeter();
        lShape-&gt;area();
        delete lShape;
    }
    
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GShape.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GShape_
#define _GShape_
//===============================================
#define _USE_MATH_DEFINES
//===============================================
#include &lt;iostream&gt;
#include &lt;cmath&gt;
//===============================================
class GShape {
public:
    virtual ~GShape() {}
    virtual void perimeter() const = 0;
    virtual void area() const = 0;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GShape.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GShape.h"
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GRectangle.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GRectangle_
#define _GRectangle_
//===============================================
#include "GShape.h"
//===============================================
class GRectangle : public GShape {
public:
    GRectangle(double w, double h);
    ~GRectangle();

public:
    void perimeter() const;
    void area() const;
    
private:
    double m_w;
    double m_h;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GRectangle.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GRectangle.h"
//===============================================
GRectangle::GRectangle(double w, double h) {
    m_w = w;
    m_h = h;
}
//===============================================
GRectangle::~GRectangle() {
    printf("[Rectangle] on supprime le rectangle (r : %.0f ; w : %.0f)\n", m_w, m_h);
}
//===============================================
void GRectangle::perimeter() const {
    double lPerimeter = 2 * (m_w + m_h);
    printf("[Rectangle] Perimetre (w : %.0f, h : %.0f) : %.0f (m)\n", m_w, m_h, lPerimeter);
}
//===============================================
void GRectangle::area() const {
    double lArea = m_w * m_h;
    printf("[Rectangle] Aire (w : %.0f, h : %.0f) : %.0f (m2)\n", m_w, m_h, lArea);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GCircle.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GCircle_
#define _GCircle_
//===============================================
#include "GShape.h"
//===============================================
class GCircle : public GShape {
public:
    GCircle(double r);
    ~GCircle();

public:
    void perimeter() const;
    void area() const;
    
private:
    double m_r;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GCircle.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GCircle.h"
//===============================================
GCircle::GCircle(double r) {
    m_r = r;
}
//===============================================
GCircle::~GCircle() {
    printf("[Circle] on supprime le cercle (r : %.0f)\n", m_r);
}
//===============================================
void GCircle::perimeter() const {
    double lPerimeter = 2 * M_PI * m_r;
    printf("[Circle] Perimetre (r : %.0f) : %.0f (m)\n", m_r, lPerimeter);
}
//===============================================
void GCircle::area() const {
    double lArea = M_PI * m_r * m_r;
    printf("[Circle] Aire (r : %.0f) : %.0f (m2)\n", m_r, lArea);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">[Rectangle] Perimetre (w : 30, h : 40) : 140 (m)
[Rectangle] Aire (w : 30, h : 40) : 1200 (m2)
[Rectangle] on supprime le rectangle (r : 30 ; w : 40)
[Circle] Perimetre (r : 20) : 126 (m)
[Circle] Aire (r : 20) : 1257 (m2)
[Circle] on supprime le cercle (r : 20)</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patrons-de-conception"><a class="Link3" href="#">Patrons de conception</a></h1><div class="Body3"><br>Un <b>patron de conception</b> (design pattern) est un arrangement caractéristique de modules, reconnu comme bonne pratique en réponse à un problème de conception d'un logiciel. Il décrit une solution standard, utilisable dans la conception de différents logiciels. Un patron de conception est issu de l'expérience des concepteurs de logiciels. Il décrit un arrangement récurrent de rôles et d'actions joués par des modules d'un logiciel, et le nom du patron sert de vocabulaire commun entre le concepteur et le programmeur. D'une manière analogue à un motif de conception en architecture, le patron de conception décrit les grandes lignes d'une solution, qui peuvent ensuite être modifiées et adaptées en fonction des besoins.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Patrons-de-conception-Creer-un-patron-singleton">Créer un patron singleton</a></div></div><br><h2 class="Title7 GTitle2" id="Patrons-de-conception-Creer-un-patron-singleton"><a class="Link9" href="#Patrons-de-conception">Créer un patron singleton</a></h2><br>Le <b>singleton </b>est un patron de conception dont l'objet est de restreindre l'instanciation d'une classe à un seul objet (ou bien à quelques objets seulement). Il est utilisé lorsque l'on a besoin d'exactement un objet pour coordonner des opérations dans un système. Le modèle est parfois utilisé pour son efficacité, lorsque le système est plus rapide ou occupe moins de mémoire avec peu d'objets qu'avec beaucoup d'objets similaires. On implémente le singleton en écrivant une classe contenant une méthode qui crée une instance uniquement s'il n'en existe pas encore. Sinon elle renvoie une référence vers l'objet qui existe déjà. Dans beaucoup de langages de type objet, il faudra veiller à ce que le constructeur de la classe soit privé ou bien protégé, afin de s'assurer que la classe ne puisse être instanciée autrement que par la méthode de création contrôlée. Le singleton doit être implémenté avec précaution dans les applications multi-thread. Si deux processus légers exécutent en même temps la méthode de création alors que l'objet unique n'existe pas encore, il faut absolument s'assurer qu'un seul créera l'objet, et que l'autre obtiendra une référence vers ce nouvel objet. La solution classique à ce problème consiste à utiliser l'exclusion mutuelle (mutex) pour indiquer que l'objet est en cours d'instanciation. Dans un langage à base de prototypes, où sont utilisés des objets mais pas des classes, un singleton désigne seulement un objet qui n'a pas de copies, et qui n'est pas utilisé comme prototype pour d'autres objets.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GDatabase.h"
//===============================================
int main(int argc, char** argv) {
    GDatabase::Instance()-&gt;open();
    GDatabase::Instance()-&gt;load();
    GDatabase::Instance()-&gt;update();
    GDatabase::Instance()-&gt;save();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDatabase.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDatabase_
#define _GDatabase_
//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
class GDatabase {
public:
    GDatabase();
    ~GDatabase();

public:
    static GDatabase* Instance();
    void open();
    void load();
    void update();
    void save();
    
private:
    static GDatabase* m_instance;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDatabase.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GDatabase.h"
//===============================================
GDatabase* GDatabase::m_instance = 0;
//===============================================
GDatabase::GDatabase() {

}
//===============================================
GDatabase::~GDatabase() {
    
}
//===============================================
GDatabase* GDatabase::Instance() {
    if(m_instance == 0) {
        m_instance = new GDatabase;
    }
    return m_instance;
}
//===============================================
void GDatabase::open() {
    printf("ouvrir la base de donnees\n");
}
//===============================================
void GDatabase::load() {
    printf("charger les donnees\n");
}
//===============================================
void GDatabase::update() {
    printf("mettre a jour les donnees\n");
}
//===============================================
void GDatabase::save() {
    printf("sauvegarder les donnees\n");
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">ouvrir la base de donnees
charger les donnees
mettre a jour les donnees
sauvegarder les donnees</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Surchage-d-operateurs"><a class="Link3" href="#">Surchage d'opérateurs</a></h1><div class="Body3"><br>La <b>surcharge d'opérateurs</b> est une fonctionnalité offerte par certains langages de programmation qui permet d'utiliser des opérateurs (comme +, = ou ==) comme des fonctions ou des méthodes en les définissant pour de nouveaux types de données. Les opérateurs ne sont pas nécessairement des symboles. Parfois, la définition de nouveaux opérateurs est autorisée.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Surchage-d-operateurs-Creer-une-surcharge-de-l-operateur-d-affichage-----">Créer une surcharge de l'opérateur d'affichage (&lt;&lt;)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Surchage-d-operateurs-Creer-un-constructeur-de-copie">Créer un constructeur de copie</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Surchage-d-operateurs-Creer-une-surcharge-de-l-operateur-d-affectation----">Créer une surcharge de l'opérateur d'affectation (=)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Surchage-d-operateurs-Creer-une-surcharge-de-l-operateur-addition----">Créer une surcharge de l'opérateur addition (+)</a></div></div><br><h2 class="Title7 GTitle2" id="Surchage-d-operateurs-Creer-une-surcharge-de-l-operateur-d-affichage-----"><a class="Link9" href="#Surchage-d-operateurs">Créer une surcharge de l'opérateur d'affichage (&lt;&lt;)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GMatrix.h"
//===============================================
int main(int argc, char** argv) {
    GMatrix A(3, 3, {1, 2, 3, 4, 5, 6, 7, 8, 9});
    std::cout &lt;&lt; A &lt;&lt; "\n";
    return (0);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GMatrix.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GMatrix_
#define _GMatrix_
//===============================================
#include &lt;iostream&gt;
#include &lt;vector&gt;
//===============================================
class GMatrix {
public:
    GMatrix(int row, int col, const std::vector&lt;double&gt;&amp; data);
    ~GMatrix();

public:
    void set(int row, int col, double d);
    double get(int row, int col) const;
    void load(const std::vector&lt;double&gt;&amp; data);
    void print() const;
    
public:
    friend std::ostream&amp; operator&lt;&lt;(std::ostream&amp; os, const GMatrix&amp; m);
    
private:
    double* m_data;
    int m_row;
    int m_col;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GMatrix.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GMatrix.h"
//===============================================
GMatrix::GMatrix(int w, int h, const std::vector&lt;double&gt;&amp; data) {
    m_row = w;
    m_col = h;
    int lSize = m_row * m_col;
    m_data = new double[lSize];
    load(data);
}
//===============================================
GMatrix::~GMatrix() {
    delete[] m_data;
}
//===============================================
void GMatrix::set(int row, int col, double d) {
    int i = row * m_col + col;
    m_data[i] = d;
}
//===============================================
double GMatrix::get(int row, int col) const {
    int i = row * m_col + col;
    return m_data[i];
}
//===============================================
void GMatrix::load(const std::vector&lt;double&gt;&amp; data) {
    for(int row = 0; row &lt; m_row; row++) {
        for(int col = 0; col &lt; m_col; col++) {
            int i = row * m_col + col;
            double lData = data[i];
            set(row, col, lData);
        }
    }
}
//===============================================
void GMatrix::print() const {
    for(int row = 0; row &lt; m_row; row++) {
        printf("| ");
        for(int col = 0; col &lt; m_col; col++) {
            if(col != 0) {printf(" | ");}
            double d = get(row, col);
            printf("%3.0f", d);
        }
        printf(" |");
        printf("\n");
    }
}
//===============================================
std::ostream&amp; operator&lt;&lt;(std::ostream&amp; os, const GMatrix&amp; m) {
    m.print();
    return os;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">|   1 |   2 |   3 |
|   4 |   5 |   6 |
|   7 |   8 |   9 |</pre></div></div><br><h2 class="Title7 GTitle2" id="Surchage-d-operateurs-Creer-un-constructeur-de-copie"><a class="Link9" href="#Surchage-d-operateurs">Créer un constructeur de copie</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GMatrix.h"
//===============================================
int main(int argc, char** argv) {
    GMatrix A(3, 3, {1, 2, 3, 4, 5, 6, 7, 8, 9});
    std::cout &lt;&lt; A &lt;&lt; "\n";
    GMatrix B(A);
    std::cout &lt;&lt; B &lt;&lt; "\n";
    return (0);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GMatrix.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GMatrix_
#define _GMatrix_
//===============================================
#include &lt;iostream&gt;
#include &lt;vector&gt;
//===============================================
class GMatrix {
public:
    GMatrix(int row, int col, const std::vector&lt;double&gt;&amp; data);
    GMatrix(const GMatrix&amp; m);
    ~GMatrix();

public:
    void set(int row, int col, double d);
    double get(int row, int col) const;
    void load(const std::vector&lt;double&gt;&amp; data);
    void load(const GMatrix&amp; m);
    void print() const;
    
public:
    friend std::ostream&amp; operator&lt;&lt;(std::ostream&amp; os, const GMatrix&amp; m);
    
private:
    double* m_data;
    int m_row;
    int m_col;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GMatrix.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GMatrix.h"
//===============================================
GMatrix::GMatrix(int w, int h, const std::vector&lt;double&gt;&amp; data) {
    m_row = w;
    m_col = h;
    int lSize = m_row * m_col;
    m_data = new double[lSize];
    load(data);
}
//===============================================
GMatrix::GMatrix(const GMatrix&amp; m) {
    m_row = m.m_row;
    m_col = m.m_col;
    int lSize = m_row * m_col;
    m_data = new double[lSize];
    load(m);
}
//===============================================
GMatrix::~GMatrix() {
    delete[] m_data;
}
//===============================================
void GMatrix::set(int row, int col, double d) {
    int i = row * m_col + col;
    m_data[i] = d;
}
//===============================================
double GMatrix::get(int row, int col) const {
    int i = row * m_col + col;
    return m_data[i];
}
//===============================================
void GMatrix::load(const std::vector&lt;double&gt;&amp; data) {
    for(int row = 0; row &lt; m_row; row++) {
        for(int col = 0; col &lt; m_col; col++) {
            int i = row * m_col + col;
            double lData = data[i];
            set(row, col, lData);
        }
    }
}
//===============================================
void GMatrix::load(const GMatrix&amp; m) {
    for(int row = 0; row &lt; m_row; row++) {
        for(int col = 0; col &lt; m_col; col++) {
            double lData = m.get(row, col);
            set(row, col, lData);
        }
    }
}
//===============================================
void GMatrix::print() const {
    for(int row = 0; row &lt; m_row; row++) {
        printf("| ");
        for(int col = 0; col &lt; m_col; col++) {
            if(col != 0) {printf(" | ");}
            double d = get(row, col);
            printf("%3.0f", d);
        }
        printf(" |");
        printf("\n");
    }
}
//===============================================
std::ostream&amp; operator&lt;&lt;(std::ostream&amp; os, const GMatrix&amp; m) {
    m.print();
    return os;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">|   1 |   2 |   3 |
|   4 |   5 |   6 |
|   7 |   8 |   9 |

|   1 |   2 |   3 |
|   4 |   5 |   6 |
|   7 |   8 |   9 |</pre></div></div><br><h2 class="Title7 GTitle2" id="Surchage-d-operateurs-Creer-une-surcharge-de-l-operateur-d-affectation----"><a class="Link9" href="#Surchage-d-operateurs">Créer une surcharge de l'opérateur d'affectation (=)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GMatrix.h"
//===============================================
int main(int argc, char** argv) {
    GMatrix A(3, 3, {1, 2, 3, 4, 5, 6, 7, 8, 9});
    std::cout &lt;&lt; A &lt;&lt; "\n";
    GMatrix B;
    B = A;
    std::cout &lt;&lt; B &lt;&lt; "\n";
    return (0);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GMatrix.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GMatrix_
#define _GMatrix_
//===============================================
#include &lt;iostream&gt;
#include &lt;vector&gt;
//===============================================
class GMatrix {
public:
    GMatrix();
    GMatrix(int row, int col, const std::vector&lt;double&gt;&amp; data);
    GMatrix(const GMatrix&amp; m);
    ~GMatrix();

public:
    void set(int row, int col, double d);
    double get(int row, int col) const;
    void load(const std::vector&lt;double&gt;&amp; data);
    void load(const GMatrix&amp; m);
    void print() const;
    
public:
    GMatrix&amp; operator=(const GMatrix&amp; m);

public:
    friend std::ostream&amp; operator&lt;&lt;(std::ostream&amp; os, const GMatrix&amp; m);
    
private:
    double* m_data;
    int m_row;
    int m_col;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GMatrix.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GMatrix.h"
//===============================================
GMatrix::GMatrix() {
    m_row = 0;
    m_col = 0;
    m_data = 0;
}
//===============================================
GMatrix::GMatrix(int w, int h, const std::vector&lt;double&gt;&amp; data) {
    m_row = w;
    m_col = h;
    int lSize = m_row * m_col;
    m_data = new double[lSize];
    load(data);
}
//===============================================
GMatrix::GMatrix(const GMatrix&amp; m) {
    m_row = m.m_row;
    m_col = m.m_col;
    int lSize = m_row * m_col;
    m_data = new double[lSize];
    load(m);
}
//===============================================
GMatrix::~GMatrix() {
    delete[] m_data;
}
//===============================================
void GMatrix::set(int row, int col, double d) {
    int i = row * m_col + col;
    m_data[i] = d;
}
//===============================================
double GMatrix::get(int row, int col) const {
    int i = row * m_col + col;
    return m_data[i];
}
//===============================================
void GMatrix::load(const std::vector&lt;double&gt;&amp; data) {
    for(int row = 0; row &lt; m_row; row++) {
        for(int col = 0; col &lt; m_col; col++) {
            int i = row * m_col + col;
            double lData = data[i];
            set(row, col, lData);
        }
    }
}
//===============================================
void GMatrix::load(const GMatrix&amp; m) {
    for(int row = 0; row &lt; m_row; row++) {
        for(int col = 0; col &lt; m_col; col++) {
            double lData = m.get(row, col);
            set(row, col, lData);
        }
    }
}
//===============================================
void GMatrix::print() const {
    for(int row = 0; row &lt; m_row; row++) {
        printf("| ");
        for(int col = 0; col &lt; m_col; col++) {
            if(col != 0) {printf(" | ");}
            double d = get(row, col);
            printf("%3.0f", d);
        }
        printf(" |");
        printf("\n");
    }
}
//===============================================
GMatrix&amp; GMatrix::operator=(const GMatrix&amp; m) {
    if(m_data != 0) {delete this;}
    m_row = m.m_row;
    m_col = m.m_col;
    int lSize = m_row * m_col;
    m_data = new double[lSize];
    load(m);
    return *this;
}
//===============================================
std::ostream&amp; operator&lt;&lt;(std::ostream&amp; os, const GMatrix&amp; m) {
    m.print();
    return os;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">|   1 |   2 |   3 |
|   4 |   5 |   6 |
|   7 |   8 |   9 |

|   1 |   2 |   3 |
|   4 |   5 |   6 |
|   7 |   8 |   9 |</pre></div></div><br><h2 class="Title7 GTitle2" id="Surchage-d-operateurs-Creer-une-surcharge-de-l-operateur-addition----"><a class="Link9" href="#Surchage-d-operateurs">Créer une surcharge de l'opérateur addition (+)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GMatrix.h"
//===============================================
int main(int argc, char** argv) {
    GMatrix A(3, 3, {1, 2, 3, 4, 5, 6, 7, 8, 9});
    std::cout &lt;&lt; A &lt;&lt; "\n";
    GMatrix B = A + A;
    std::cout &lt;&lt; B &lt;&lt; "\n";
    return (0);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GMatrix.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GMatrix_
#define _GMatrix_
//===============================================
#include &lt;iostream&gt;
#include &lt;vector&gt;
//===============================================
class GMatrix {
public:
    GMatrix(int row, int col, const std::vector&lt;double&gt;&amp; data);
    GMatrix(const GMatrix&amp; m);
    ~GMatrix();

public:
    void set(int row, int col, double d);
    double get(int row, int col) const;
    void load(const std::vector&lt;double&gt;&amp; data);
    void load(const GMatrix&amp; m);
    void add(const GMatrix&amp; m);
    void print() const;
    
public:
    friend std::ostream&amp; operator&lt;&lt;(std::ostream&amp; os, const GMatrix&amp; m);
    friend GMatrix operator+(GMatrix const&amp; a, GMatrix const&amp; b);
    
private:
    double* m_data;
    int m_row;
    int m_col;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GMatrix.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GMatrix.h"
//===============================================
GMatrix::GMatrix(int w, int h, const std::vector&lt;double&gt;&amp; data) {
    m_row = w;
    m_col = h;
    int lSize = m_row * m_col;
    m_data = new double[lSize];
    load(data);
}
//===============================================
GMatrix::GMatrix(const GMatrix&amp; m) {
    m_row = m.m_row;
    m_col = m.m_col;
    int lSize = m_row * m_col;
    m_data = new double[lSize];
    load(m);
}
//===============================================
GMatrix::~GMatrix() {
    delete[] m_data;
}
//===============================================
void GMatrix::set(int row, int col, double d) {
    int i = row * m_col + col;
    m_data[i] = d;
}
//===============================================
double GMatrix::get(int row, int col) const {
    int i = row * m_col + col;
    return m_data[i];
}
//===============================================
void GMatrix::load(const std::vector&lt;double&gt;&amp; data) {
    for(int row = 0; row &lt; m_row; row++) {
        for(int col = 0; col &lt; m_col; col++) {
            int i = row * m_col + col;
            double lData = data[i];
            set(row, col, lData);
        }
    }
}
//===============================================
void GMatrix::load(const GMatrix&amp; m) {
    for(int row = 0; row &lt; m_row; row++) {
        for(int col = 0; col &lt; m_col; col++) {
            double lData = m.get(row, col);
            set(row, col, lData);
        }
    }
}
//===============================================
void GMatrix::add(const GMatrix&amp; m) {
    for(int row = 0; row &lt; m_row; row++) {
        for(int col = 0; col &lt; m_col; col++) {
            double Ai = m.get(row, col);
            double Bi = get(row, col);
            double Ci = Ai + Bi;
            set(row, col, Ci);
        }
    }
}
//===============================================
void GMatrix::print() const {
    for(int row = 0; row &lt; m_row; row++) {
        printf("| ");
        for(int col = 0; col &lt; m_col; col++) {
            if(col != 0) {printf(" | ");}
            double d = get(row, col);
            printf("%3.0f", d);
        }
        printf(" |");
        printf("\n");
    }
}
//===============================================
std::ostream&amp; operator&lt;&lt;(std::ostream&amp; os, const GMatrix&amp; m) {
    m.print();
    return os;
}
//===============================================
GMatrix operator+(GMatrix const&amp; a, GMatrix const&amp; b) {
    GMatrix c(a);
    c.add(b);
    return c;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">|   1 |   2 |   3 |
|   4 |   5 |   6 |
|   7 |   8 |   9 |

|   2 |   4 |   6 |
|   8 |  10 |  12 |
|  14 |  16 |  18 |</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Manager-de-donnees"><a class="Link3" href="#">Manager de données</a></h1><div class="Body3"><br>Le <b>manager de données</b> que nous présentons ici est une architecture logicielle permettant d'accéder à toutes les données de notre application.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Manager-de-donnees-main-cpp">main.cpp</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Manager-de-donnees-GManager-h">GManager.h</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Manager-de-donnees-GManager-cpp">GManager.cpp</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Manager-de-donnees-Resultat">Résultat</a></div></div><br><h2 class="Title7 GTitle2" id="Manager-de-donnees-main-cpp"><a class="Link9" href="#Manager-de-donnees">main.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GManager.h"
//===============================================
int main(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;getData()-&gt;app;
    printf("lApp-&gt;app_name : %s\n", lApp-&gt;app_name.c_str());
    printf("lApp-&gt;win_width : %d\n", lApp-&gt;win_width);
    printf("lApp-&gt;win_height : %d\n", lApp-&gt;win_height);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Manager-de-donnees-GManager-h"><a class="Link9" href="#Manager-de-donnees">GManager.h</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GManager_
#define _GManager_
//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
typedef struct _sGManager sGManager;
typedef struct _sGApp sGApp;
//===============================================
class GManager {
public:
    GManager();
    ~GManager();

public:
    static GManager* Instance();
    sGManager* getData() const;
    
private:
    static GManager* m_instance;
    sGManager* mgr;
};
//===============================================
struct _sGManager {
    sGApp* app;
};
//===============================================
struct _sGApp {
    // app
    std::string app_name;
    // win
    int win_width;
    int win_height;
    
};
//===============================================
#endif
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Manager-de-donnees-GManager-cpp"><a class="Link9" href="#Manager-de-donnees">GManager.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GManager.h"
//===============================================
GManager* GManager::m_instance = 0;
//===============================================
GManager::GManager() {
    // manager
    mgr = new sGManager;
    // app
    mgr-&gt;app = new sGApp;
    mgr-&gt;app-&gt;app_name = "ReadyDev";
    mgr-&gt;app-&gt;win_width = 640;
    mgr-&gt;app-&gt;win_height = 480;
}
//===============================================
GManager::~GManager() {
    
}
//===============================================
GManager* GManager::Instance() {
    if(m_instance == 0) {
        m_instance = new GManager;
    }
    return m_instance;
}
//===============================================
sGManager* GManager::getData() const {
    return mgr;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Manager-de-donnees-Resultat"><a class="Link9" href="#Manager-de-donnees">Résultat</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">lApp-&gt;app_name : ReadyDev
lApp-&gt;win_width : 640
lApp-&gt;win_height : 480</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Systeme-d-administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Le <b>système d'administration</b> que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Systeme-d-administration-main-cpp">main.cpp</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Systeme-d-administration-GProcess-h">GProcess.h</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Systeme-d-administration-GProcess-cpp">GProcess.cpp</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Systeme-d-administration-Resultat">Résultat</a></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-main-cpp"><a class="Link9" href="#Systeme-d-administration">main.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GProcess.h"
//===============================================
int main(int argc, char** argv) {
    GProcess::Instance()-&gt;run(argc, argv);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-GProcess-h"><a class="Link9" href="#Systeme-d-administration">GProcess.h</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GProcess_
#define _GProcess_
//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
class GProcess {
public:
    GProcess();
    ~GProcess();

public:
    static GProcess* Instance();
    void run(int argc, char** argv);

private:
    void runInit(int argc, char** argv);
    void runMethod(int argc, char** argv);
    void runChoice(int argc, char** argv);
    void runSQLite(int argc, char** argv);
    void runOpenCV(int argc, char** argv);
    void runQuit(int argc, char** argv);
    
private:
    static GProcess* m_instance;
    std::string m_state;
};
//===============================================
#endif
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-GProcess-cpp"><a class="Link9" href="#Systeme-d-administration">GProcess.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GProcess.h"
//===============================================
GProcess* GProcess::m_instance = 0;
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {
    
}
//===============================================
GProcess* GProcess::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcess;
    }
    return m_instance;
}
//===============================================
void GProcess::run(int argc, char** argv) {
    m_state = "init";
    while(1) {
        if(m_state == "init") {runInit(argc, argv);}
        else if(m_state == "method") {runMethod(argc, argv);}
        else if(m_state == "choice") {runChoice(argc, argv);}
        else if(m_state == "sqlite") {runSQLite(argc, argv);}
        else if(m_state == "opencv") {runOpenCV(argc, argv);}
        else if(m_state == "quit") {runQuit(argc, argv);}
        else {break;}
    }
}
//===============================================
void GProcess::runInit(int argc, char** argv) {
    printf("\n");
    printf("%s\n", "ADMIN !!!");
    printf("\t%-2s : %s\n", "-q", "quitter l'application");
    m_state = "method";
}
//===============================================
void GProcess::runMethod(int argc, char** argv) {
    printf("\n");
    printf("%s\n", "ADMIN :");
    printf("\t%-2s : %s\n", "1", "sqlite");
    printf("\t%-2s : %s\n", "2", "opencv");
    printf("\n");
    m_state = "choice";
}
//===============================================
void GProcess::runChoice(int argc, char** argv) {
    printf("ADMIN ? : ");
    std::string lAnswer; std::getline(std::cin, lAnswer);
    if(lAnswer == "-q") m_state = "end";
    else if(lAnswer == "1") {m_state = "sqlite";} 
    else if(lAnswer == "2") {m_state = "opencv";}
}
//===============================================
void GProcess::runSQLite(int argc, char** argv) {
    printf("\n");
    printf("on execute le module OpenCV\n");
    m_state = "quit";
}
//===============================================
void GProcess::runOpenCV(int argc, char** argv) {
    printf("\n");
    printf("on execute le module SQLite\n");
    m_state = "quit";
}
//===============================================
void GProcess::runQuit(int argc, char** argv) {
    printf("\n");
    printf("QUIT (Oui/[N]on) ? : ");
    std::string lAnswer; std::getline(std::cin, lAnswer);
    if(lAnswer == "") m_state = "init";
    else if(lAnswer == "n") {m_state = "init";} 
    else if(lAnswer == "o") {m_state = "end";}
    else if(lAnswer == "-q") {m_state = "end";}
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Resultat"><a class="Link9" href="#Systeme-d-administration">Résultat</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_admin_system.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_admin_system.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Multithreading"><a class="Link3" href="#">Multithreading</a></h1><div class="Body3"><br>Un processeur est dit <b>multithread </b>s'il est capable d'exécuter efficacement plusieurs threads simultanément. Contrairement aux systèmes multiprocesseurs (tels les systèmes multi-cœur), les threads doivent partager les ressources d'un unique cœur1 : les unités de traitement, le cache processeur et le translation lookaside buffer ; certaines parties sont néanmoins dupliquées : chaque thread dispose de ses propres registres et de son propre pointeur d'instruction. Là où les systèmes multiprocesseurs incluent plusieurs unités de traitement complètes, le multithreading a pour but d'augmenter l'utilisation d'un seul cœur en tirant profit des propriétés des threads et du parallélisme au niveau des instructions. Comme les deux techniques sont complémentaires, elles sont parfois combinées dans des systèmes comprenant de multiples processeurs multithreads ou des processeurs avec de multiples cœurs multithreads.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Multithreading-Creer-un-thread">Créer un thread</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Multithreading-Creer-un-objet-atomique">Créer un objet atomique</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Multithreading-Creer-un-appel-de-fonction-unique">Créer un appel de fonction unique</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Multithreading-Creer-un-mutex">Créer un mutex</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Multithreading-Creer-un-mutex-recursif">Créer un mutex récursif</a></div></div><br><h2 class="Title7 GTitle2" id="Multithreading-Creer-un-thread"><a class="Link9" href="#Multithreading">Créer un thread</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;thread&gt;
//===============================================
static void onRun(const std::string&amp; name, int n) {
    for(int i = 0; i &lt; n; i++) {
        printf("Thread[%s][%d] : on execute le thread\n", name.c_str(), i);
        std::this_thread::sleep_for(std::chrono::milliseconds(200));
    }
};
//===============================================
int main(int argc, char** argv) {
    std::thread lThreadA(onRun, "A", 5);
    std::thread lThreadB(onRun, "B", 10);
    lThreadA.join();
    lThreadB.join();
    return (0);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Thread[A][0] : on execute le thread
Thread[B][0] : on execute le thread
Thread[A][1] : on execute le thread
Thread[B][1] : on execute le thread
Thread[A][2] : on execute le thread
Thread[B][2] : on execute le thread
Thread[B][3] : on execute le thread
Thread[A][3] : on execute le thread
Thread[B][4] : on execute le thread
Thread[A][4] : on execute le thread
Thread[B][5] : on execute le thread
Thread[B][6] : on execute le thread
Thread[B][7] : on execute le thread
Thread[B][8] : on execute le thread
Thread[B][9] : on execute le thread</pre></div></div><br><h2 class="Title7 GTitle2" id="Multithreading-Creer-un-objet-atomique"><a class="Link9" href="#Multithreading">Créer un objet atomique</a></h2><br>Les objets de types <b>atomiques </b>contiennent une valeur d'un type particulier (T). La principale caractéristique des objets atomiques est que l'accès à cette valeur contenue à partir de différents threads ne peut pas provoquer de courses de données (c'est-à-dire que faire cela est un comportement bien défini , avec des accès correctement séquencés). Généralement, pour tous les autres objets, la possibilité de provoquer une course aux données pour accéder simultanément au même objet qualifie l'opération comme un comportement indéfini. Aditionellement, les objets atomiques ont la capacité de synchroniser l'accès à d'autres objets non atomiques dans leurs threads en spécifiant différents ordres de mémoire .<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;thread&gt;
#include &lt;atomic&gt;
//===============================================
std::atomic&lt;int&gt; gCounter(0);
//===============================================
static void onRun(const std::string&amp; name, int n) {
    for(int i = 0; i &lt; n; i++) {
        int lCounter = gCounter.load(std::memory_order_relaxed);
        printf("Thread[%2d][%s][%d] : on execute le thread\n", lCounter, name.c_str(), i);
        std::this_thread::sleep_for(std::chrono::milliseconds(200));
        gCounter++;
    }
};
//===============================================
int main(int argc, char** argv) {
    std::thread lThreadA(onRun, "A", 5);
    std::thread lThreadB(onRun, "B", 10);
    lThreadA.join();
    lThreadB.join();
    return (0);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Thread[ 0][A][0] : on execute le thread
Thread[ 0][B][0] : on execute le thread
Thread[ 1][A][1] : on execute le thread
Thread[ 2][B][1] : on execute le thread
Thread[ 3][A][2] : on execute le thread
Thread[ 4][B][2] : on execute le thread
Thread[ 5][A][3] : on execute le thread
Thread[ 6][B][3] : on execute le thread
Thread[ 7][A][4] : on execute le thread
Thread[ 8][B][4] : on execute le thread
Thread[10][B][5] : on execute le thread
Thread[11][B][6] : on execute le thread
Thread[12][B][7] : on execute le thread
Thread[13][B][8] : on execute le thread
Thread[14][B][9] : on execute le thread</pre></div></div><br><h2 class="Title7 GTitle2" id="Multithreading-Creer-un-appel-de-fonction-unique"><a class="Link9" href="#Multithreading">Créer un appel de fonction unique</a></h2><br>L'appel à <b>call_once</b> exécute la fonction passée en argument exactement une fois, même s'il est appelé simultanément, à partir de plusieurs threads.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;thread&gt;
#include &lt;mutex&gt;
//===============================================
std::string gWinner;
std::once_flag gOnceFlag;
//===============================================
static void onCallOnce(const std::string&amp; name) {
    gWinner = name;
}
//===============================================
static void onRun(const std::string&amp; name) {
    std::this_thread::sleep_for(std::chrono::milliseconds(200));
    std::call_once(gOnceFlag, onCallOnce, name);
}
//===============================================
int main(int argc, char** argv) {
    std::thread lThreadA(onRun, "A");
    std::thread lThreadB(onRun, "B");
    std::thread lThreadC(onRun, "C");
    std::thread lThreadD(onRun, "D");
    lThreadA.join();
    lThreadB.join();
    lThreadC.join();
    lThreadD.join();
    std::printf("Thread gagnant : Thread [%s]\n", gWinner.c_str());
    return (0);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Thread gagnant : Thread [C]</pre></div></div><br><h2 class="Title7 GTitle2" id="Multithreading-Creer-un-mutex"><a class="Link9" href="#Multithreading">Créer un mutex</a></h2><br>Un <b>mutex </b>est un objet verrouillable qui est conçu pour signaler quand des sections critiques de code ont besoin d'un accès exclusif, empêchant d'autres threads avec la même protection de s'exécuter simultanément et d'accéder aux mêmes emplacements de mémoire. Les objets mutex fournissent la propriété exclusive et ne prennent pas en charge la récursivité (c'est-à-dire qu'un thread ne doit pas verrouiller un mutex qu'il possède déjà).<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;thread&gt;
#include &lt;mutex&gt;
//===============================================
std::mutex gMutex;
//===============================================
static void onRun(const std::string&amp; name) {
    gMutex.lock();
    printf("Thread [%s] : ", name.c_str());
    for(int i = 0; i &lt; 20; i++) {
        printf("%s", name.c_str());
        std::this_thread::sleep_for(std::chrono::milliseconds(1));
    }
    printf("\n");
    gMutex.unlock();
}
//===============================================
int main(int argc, char** argv) {
    std::thread lThreadA(onRun, "A");
    std::thread lThreadB(onRun, "B");
    std::thread lThreadC(onRun, "C");
    std::thread lThreadD(onRun, "D");
    lThreadA.join();
    lThreadB.join();
    lThreadC.join();
    lThreadD.join();
    return (0);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Thread [A] : AAAAAAAAAAAAAAAAAAAA
Thread [B] : BBBBBBBBBBBBBBBBBBBB
Thread [C] : CCCCCCCCCCCCCCCCCCCC
Thread [D] : DDDDDDDDDDDDDDDDDDDD</pre></div></div><br><h2 class="Title7 GTitle2" id="Multithreading-Creer-un-mutex-recursif"><a class="Link9" href="#Multithreading">Créer un mutex récursif</a></h2><br>Un <b>mutex récursif</b> est un objet verrouillable, tout comme mutex, mais permet au même thread d'acquérir plusieurs niveaux de propriété sur l'objet mutex. Cela permet de verrouiller (ou d' essayer de verrouiller) l'objet mutex à partir d'un thread qui le verrouille déjà, en acquérant un nouveau niveau de propriété sur l'objet mutex : l' objet mutex restera en fait verrouillé en possédant le thread jusqu'à ce que son membre ouvrir est appelé autant de fois que ce niveau d'appropriation.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;thread&gt;
#include &lt;mutex&gt;
//===============================================
std::recursive_mutex gMutex;
//===============================================
static void onRun(const std::string&amp; name) {
    std::lock_guard&lt;std::recursive_mutex&gt; lLock(gMutex);
    printf("onRun_1 Thread [%s] : ", name.c_str());
    for(int i = 0; i &lt; 20; i++) {
        printf("%s", name.c_str());
        std::this_thread::sleep_for(std::chrono::milliseconds(1));
    }
    printf("\n");
}
//===============================================
static void onRun2(const std::string&amp; name) {
    std::lock_guard&lt;std::recursive_mutex&gt; lLock(gMutex);
    printf("onRun_2 Thread [%s] : ", name.c_str());
    for(int i = 0; i &lt; 20; i++) {
        printf("%s", name.c_str());
        std::this_thread::sleep_for(std::chrono::milliseconds(1));
    }
    printf("\n");
    onRun(name);
}
//===============================================
int main(int argc, char** argv) {
    std::thread lThreadA(onRun, "A");
    std::thread lThreadB(onRun, "B");
    std::thread lThreadC(onRun2, "C");
    std::thread lThreadD(onRun2, "D");
    lThreadA.join();
    lThreadB.join();
    lThreadC.join();
    lThreadD.join();
    return (0);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">onRun_1 Thread [A] : AAAAAAAAAAAAAAAAAAAA
onRun_1 Thread [B] : BBBBBBBBBBBBBBBBBBBB
onRun_2 Thread [C] : CCCCCCCCCCCCCCCCCCCC
onRun_1 Thread [C] : CCCCCCCCCCCCCCCCCCCC
onRun_2 Thread [D] : DDDDDDDDDDDDDDDDDDDD
onRun_1 Thread [D] : DDDDDDDDDDDDDDDDDDDD</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface-Homme-Machine-avec-Qt"><a class="Link3" href="#">Interface Homme-Machine avec Qt</a></h1><div class="Body3"><br><b>Qt </b>est une API orientée objet et développée en C++ qui offre des composants d'interface graphique (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc. Par certains aspects, elle ressemble à un framework lorsqu'on l'utilise pour concevoir des interfaces graphiques ou que l'on conçoit l'architecture de son application en utilisant les mécanismes des signaux et slots par exemple. Qt permet la portabilité des applications qui n'utilisent que ses composants par simple recompilation du code source. Les environnements pris en charge sont les Unix (dont GNU/Linux) qui utilisent le système graphique X Window System ou Wayland, Windows, Mac OS X, Tizen et également Genode. Le fait d'être une bibliothèque logicielle multiplateforme attire un grand nombre de personnes qui ont donc l'occasion de diffuser leurs programmes sur les principaux OS existants. Qt intègre des bindings avec plus d'une dizaine de langages autres que le C++, comme Ada, C#, Java, Python, Ruby, Visual Basic, etc. Qt est notamment connu pour être le framework sur lequel repose l'environnement graphique KDE Plasma, l'un des environnements de bureau par défaut de plusieurs distributions GNU/Linux. <br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Interface-Homme-Machine-avec-Qt-Installer-l-environnement-Qt-sous-MSYS2">Installer l'environnement Qt sous MSYS2</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Interface-Homme-Machine-avec-Qt-Compiler-un-projet-Qt-sous-MSYS2">Compiler un projet Qt sous MSYS2</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Interface-Homme-Machine-avec-Qt-Creer-une-fenetre">Créer une fenêtre</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Interface-Homme-Machine-avec-Qt-Creer-une-fenetre-personnalisee">Créer une fenêtre personnalisée</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Interface-Homme-Machine-avec-Qt-Creer-un-bouton-avec-un-texte">Créer un bouton avec un texte</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Interface-Homme-Machine-avec-Qt-Creer-un-bouton-avec-un-texte-et-une-icone">Créer un bouton avec un texte et une icône</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Interface-Homme-Machine-avec-Qt-Creer-un-bouton-avec-une-icone-sans-texte">Créer un bouton avec une icône sans texte</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Interface-Homme-Machine-avec-Qt-Ouvrir-un-fichier">Ouvrir un fichier</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Interface-Homme-Machine-avec-Qt-Ouvrir-une-image-dans-QGraphicsScene">Ouvrir une image dans QGraphicsScene</a></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/b_qt.png" class="lazy entered loaded" data-src="/Tutoriels/Software_Development/Cpp/img/b_qt.png" data-ll-status="loaded" src="/Tutoriels/Software_Development/Cpp/img/b_qt.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Installer-l-environnement-Qt-sous-MSYS2"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Installer l'environnement Qt sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Installer Qt</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-qt5
pacman -S --needed --noconfirm mingw-w64-i686-qt-creator
pacman -S --needed --noconfirm mingw-w64-i686-gdb
pacman -S --needed --noconfirm mingw-w64-i686-cmake
pacman -S --needed --noconfirm mingw-w64-i686-clang</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Installer-l-environnement-Qt-sous-ubuntu"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Installer l'environnement Qt sous ubuntu</a></h2><br><h3 class="Title8 GTitle3">Installer Qt</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">sudo apt install -y qtcreator
sudo apt install -y qtbase5-dev
sudo apt install -y qt5-qmake</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Compiler-un-projet-Qt-sous-MSYS2"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Compiler un projet Qt sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Éditer le fichier projet (GProject.pro)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">TEMPLATE = app
TARGET = rdcpp
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += console release gnu++11
QT += widgets

INCLUDEPATH +=\
    /mingw32/include \

SOURCES +=\
    $$PWD/main.cpp \</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">qmake
make</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Creer-une-fenetre"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Créer une fenêtre</a></h2><br><b>QWidget </b>est la classe de base de tous les objets d'interface utilisateur. Le widget est l'atome de l'interface utilisateur : il reçoit la souris, le clavier et d'autres événements du système de fenêtres, et peint une représentation de lui-même sur l'écran. Chaque widget est rectangulaire et ils sont triés dans un ordre Z. Un widget est découpé par son parent et par les widgets qui le précèdent. Un widget qui n'est pas intégré dans un widget parent est appelé une fenêtre. Habituellement, les fenêtres ont un cadre et une barre de titre, bien qu'il soit également possible de créer des fenêtres sans une telle décoration en utilisant des indicateurs de fenêtre appropriés).<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
//===============================================
int main(int argc, char** argv) {
    QApplication lApp(argc, argv);
    
    QWidget* lWindow = new QWidget;
    
    QLabel* lLabel = new QLabel;
    lLabel-&gt;setText("Bonjour tout le monde");
    lLabel-&gt;setAlignment(Qt::AlignCenter);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lLabel);
    
    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;setWindowTitle("ReadyApp");
    
    lWindow-&gt;show();
    return lApp.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qt_test.png" class="lazy entered loaded" data-src="/Tutoriels/Software_Development/Cpp/img/i_qt_test.png" data-ll-status="loaded" src="/Tutoriels/Software_Development/Cpp/img/i_qt_test.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Creer-une-fenetre-personnalisee"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Créer une fenêtre personnalisée</a></h2><br><b>QFrame </b>est la classe de base des widgets pouvant avoir un cadre. <span class="GCode3"><code style="color:#cccccc;">QMenu </code></span>l' utilise pour « élever » le menu au-dessus de l'écran environnant. <span class="GCode3"><code style="color:#cccccc;">QProgressBar </code></span>a un aspect « enfoncé ». <span class="GCode3"><code style="color:#cccccc;">QLabel </code></span>a un aspect plat. Les cadres de widgets comme ceux-ci peuvent être modifiés. <span class="GCode3"><code style="color:#cccccc;">QFrame </code></span>peut également être utilisée directement pour créer de simples cadres d'espace réservé sans aucun contenu. Le style de cadre est spécifié par une forme de cadre et un style d'ombre qui est utilisé pour séparer visuellement le cadre des widgets environnants. Ces propriétés peuvent être définies ensemble à l'aide de la fonction <span class="GCode3"><code style="color:#cccccc;">setFrameStyle </code></span>et lues avec <span class="GCode3"><code style="color:#cccccc;">frameStyle</code></span>. Les formes de cadre sont <span class="GCode3"><code style="color:#cccccc;">NoFrame </code></span>, <span class="GCode3"><code style="color:#cccccc;">Box </code></span>, <span class="GCode3"><code style="color:#cccccc;">Panel </code></span>, <span class="GCode3"><code style="color:#cccccc;">StyledPanel </code></span>, <span class="GCode3"><code style="color:#cccccc;">HLine </code></span>et <span class="GCode3"><code style="color:#cccccc;">VLine </code></span>; les styles d'ombre sont <span class="GCode3"><code style="color:#cccccc;">Plain </code></span>, <span class="GCode3"><code style="color:#cccccc;">Raised </code></span>et <span class="GCode3"><code style="color:#cccccc;">Sunken </code></span>.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include "GWindow.h"
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;    
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QFrame {
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QFrame {
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qt_custom_widget.png" class="lazy entered loaded" data-src="/Tutoriels/Software_Development/Cpp/img/i_qt_custom_widget.png" data-ll-status="loaded" src="/Tutoriels/Software_Development/Cpp/img/i_qt_custom_widget.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Creer-un-bouton-avec-un-texte"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Créer un bouton avec un texte</a></h2><br>Le widget <b>QPushButton </b>fournit un bouton de commande. Le bouton poussoir, ou bouton de commande, est peut-être le widget le plus couramment utilisé dans n'importe quelle interface utilisateur graphique. Appuyez (cliquez) sur un bouton pour ordonner à l'ordinateur d'effectuer une action ou de répondre à une question. Les boutons typiques sont <span class="GCode3"><code style="color:#cccccc;">OK</code></span>, <span class="GCode3"><code style="color:#cccccc;">Appliquer</code></span>, <span class="GCode3"><code style="color:#cccccc;">Annuler</code></span>, <span class="GCode3"><code style="color:#cccccc;">Fermer</code></span>, <span class="GCode3"><code style="color:#cccccc;">Oui</code></span>, <span class="GCode3"><code style="color:#cccccc;">Non </code></span>et <span class="GCode3"><code style="color:#cccccc;">Aide</code></span>. Un bouton de commande est rectangulaire et affiche généralement une étiquette de texte décrivant son action. Une touche de raccourci peut être spécifiée en faisant précéder le caractère préféré d'une esperluette dans le texte.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include "GWindow.h"
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;    
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();

public slots:
    void onClick();
    
private:
    QTextEdit* m_textEdit;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    QPushButton* lButton = new QPushButton;
    lButton-&gt;setText("Button");
    
    QHBoxLayout* lTopLayout = new QHBoxLayout;
    lTopLayout-&gt;addWidget(lButton);
    lTopLayout-&gt;setAlignment(Qt::AlignLeft);
    
    QTextEdit* lTextEdit = new QTextEdit;
    m_textEdit = lTextEdit;
    lTextEdit-&gt;setReadOnly(true);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lTopLayout);
    lMainLayout-&gt;addWidget(lTextEdit, 1);
    
    setLayout(lMainLayout);
    
    connect(lButton, SIGNAL(clicked()), this, SLOT(onClick()));
}
//================================================
GWindow::~GWindow() {
    
}
//================================================
void GWindow::onClick() {
    m_textEdit-&gt;append("on traite l'action associée au clic");
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qt_button.gif" class="lazy entered loaded" data-src="/Tutoriels/Software_Development/Cpp/img/i_qt_button.gif" data-ll-status="loaded" src="/Tutoriels/Software_Development/Cpp/img/i_qt_button.gif"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Creer-un-bouton-avec-un-texte-et-une-icone"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Créer un bouton avec un texte et une icône</a></h2><br><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Creer-un-bouton-avec-une-icone-sans-texte"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Créer un bouton avec une icône sans texte</a></h2><br><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Ouvrir-un-fichier"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Ouvrir un fichier</a></h2><br><b>QFileDialog </b>fournit une boîte de dialogue qui permet aux utilisateurs de sélectionner des fichiers ou des répertoires. QFileDialog permet à un utilisateur de parcourir le système de fichiers afin de sélectionner un ou plusieurs fichiers ou un répertoire. La façon la plus simple de créer un QFileDialog est d'utiliser les fonctions statiques. Vous pouvez créer votre propre QFileDialog sans utiliser les fonctions statiques. En appelant <span class="GCode3"><code style="color:#cccccc;">setFileMode</code></span>, vous pouvez spécifier ce que l'utilisateur doit sélectionner dans la boîte de dialogue. La propriété <span class="GCode3"><code style="color:#cccccc;">fileMode </code></span>contient le mode de fonctionnement de la boîte de dialogue ; cela indique quels types d'objets l'utilisateur est censé sélectionner. Utilisez <span class="GCode3"><code style="color:#cccccc;">setNameFilter </code></span>pour définir le filtre de fichier de la boîte de dialogue.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();   
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();

public:
    void onEvent(const QString&amp; event);

public slots:
    void slotClick();
    
private:
    QMap&lt;QWidget*, QString&gt; m_widgetMap;
    QTextEdit* m_textEdit;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindon.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();

public:
    void onEvent(const QString&amp; event);

public slots:
    void slotClick();
    
private:
    QMap&lt;QWidget*, QString&gt; m_widgetMap;
    QTextEdit* m_textEdit;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_file_open.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_file_open.gif"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Parcourir-un-repertoire-de-fichiers"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Parcourir un répertoire de fichiers</a></h2><br><b>QDir </b>est utilisé pour manipuler les noms de chemin, accéder aux informations concernant les chemins et les fichiers et manipuler le système de fichiers sous-jacent. Il peut également être utilisé pour accéder au système de ressources de Qt . Qt utilise <span class="GCode3"><code style="color:#cccccc;">"/"</code></span> comme séparateur de répertoire universel de la même manière que <span class="GCode3"><code style="color:#cccccc;">"/"</code></span> est utilisé comme séparateur de chemin dans les URL. Si vous utilisez toujours <span class="GCode3"><code style="color:#cccccc;">"/"</code></span> comme séparateur de répertoire, Qt traduira vos chemins pour se conformer au système d'exploitation sous-jacent. QDir peut pointer vers un fichier en utilisant un chemin relatif ou absolu. Les chemins absolus commencent par le séparateur de répertoire (éventuellement précédé d'une spécification de lecteur sous Windows). Les noms de fichiers relatifs commencent par un nom de répertoire ou un nom de fichier et spécifient un chemin relatif au répertoire actuel.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();   
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();

public:
    void onEvent(const QString&amp; event);

public slots:
    void slotClick();
    
private:
    QMap&lt;QWidget*, QString&gt; m_widgetMap;
    QTextEdit* m_textEdit;
    QString m_filename;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    QPushButton* lOpen = new QPushButton;
    lOpen-&gt;setText("Open");
    m_widgetMap[lOpen] = "open";
    
    QPushButton* lNext = new QPushButton;
    lNext-&gt;setText("Next");
    m_widgetMap[lNext] = "next";
    
    QPushButton* lPrevious = new QPushButton;
    lPrevious-&gt;setText("Previous");
    m_widgetMap[lPrevious] = "previous";
    
    QHBoxLayout* lButtonLayout = new QHBoxLayout;
    lButtonLayout-&gt;addWidget(lOpen);
    lButtonLayout-&gt;addWidget(lPrevious);
    lButtonLayout-&gt;addWidget(lNext);
    lButtonLayout-&gt;setAlignment(Qt::AlignLeft);
    lButtonLayout-&gt;setMargin(0);
    
    QTextEdit* lTextedit = new QTextEdit;
    m_textEdit = lTextedit;
    lTextedit-&gt;setReadOnly(true);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lButtonLayout);
    lMainLayout-&gt;addWidget(lTextedit, 1);
    
    setLayout(lMainLayout);
    
    connect(lOpen, SIGNAL(clicked()), this, SLOT(slotClick()));
    connect(lNext, SIGNAL(clicked()), this, SLOT(slotClick()));
    connect(lPrevious, SIGNAL(clicked()), this, SLOT(slotClick()));
}
//================================================
GWindow::~GWindow() {

}
//================================================
void GWindow::onEvent(const QString&amp; event) {
    if(event == "open") {
        QString lFilename = QFileDialog::getOpenFileName(
        this, tr("Ouvrir une image"), ".", tr("Fichiers Image (*.png *.jpg *.bmp)"));
        if(lFilename == "") {return;}
        m_textEdit-&gt;append(lFilename);
        m_filename = lFilename;
    }
    else if(event == "next") {
        if(m_filename == "") {return;}
        QFileInfo lFileInfo(m_filename);
        QDir lDir = lFileInfo.absoluteDir();
        QStringList lFilters;
        lFilters &lt;&lt; "*.png" &lt;&lt; "*.bmp" &lt;&lt; "*.jpg";
        QStringList lFilenames = lDir.entryList(lFilters, QDir::Files, QDir::Name);
        int lIndex = lFilenames.indexOf(QRegExp(QRegExp::escape(lFileInfo.fileName())));
        if(lIndex &lt; lFilenames.size() - 1) {
            QString lFilename = lDir.absoluteFilePath(lFilenames.at(lIndex + 1));
            m_textEdit-&gt;append(lFilename);
            m_filename = lFilename;
        } else {
            m_textEdit-&gt;append("Cette image est la dernière...");
        }    
    }
    else if(event == "previous") {
        if(m_filename == "") {return;}
        QFileInfo lFileInfo(m_filename);
        QDir lDir = lFileInfo.absoluteDir();
        QStringList lFilters;
        lFilters &lt;&lt; "*.png" &lt;&lt; "*.bmp" &lt;&lt; "*.jpg";
        QStringList lFilenames = lDir.entryList(lFilters, QDir::Files, QDir::Name);
        int lIndex = lFilenames.indexOf(QRegExp(QRegExp::escape(lFileInfo.fileName())));
        if(lIndex &gt; 0) {
            QString lFilename = lDir.absoluteFilePath(lFilenames.at(lIndex - 1));
            m_textEdit-&gt;append(lFilename);
            m_filename = lFilename;
        } else {
            m_textEdit-&gt;append("Cette image est la première...");
        }    
    }
}
//================================================
void GWindow::slotClick() {
    QWidget* lWidget = qobject_cast&lt;QWidget*&gt;(sender());
    QString lWidgetId = m_widgetMap[lWidget];
    onEvent(lWidgetId);
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_file_browser.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_file_browser.gif"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Ouvrir-une-image-dans-QGraphicsScene"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Ouvrir une image dans QGraphicsScene</a></h2><br><b>QGraphicsScene</b> sert de conteneur pour QGraphicsItems. Il est utilisé avec QGraphicsView pour visualiser des éléments graphiques, tels que des lignes, des rectangles, du texte ou même des éléments personnalisés, sur une surface 2D. QGraphicsScene fait partie de Graphics View Framework . QGraphicsScene fournit également une fonctionnalité qui vous permet de déterminer efficacement à la fois l'emplacement des éléments et pour déterminer quels éléments sont visibles dans une zone arbitraire de la scène. Avec le widget QGraphicsView , vous pouvez soit visualiser l'ensemble de la scène, soit zoomer et afficher uniquement des parties de la scène.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();   
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();

public:
    void onEvent(const QString&amp; event);

public slots:
    void slotClick();
    
private:
    QMap&lt;QWidget*, QString&gt; m_widgetMap;
    QGraphicsScene* m_scene;
    QGraphicsView* m_view;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    QPushButton* lOpen = new QPushButton;
    lOpen-&gt;setText("Open");
    m_widgetMap[lOpen] = "open";
    
    QHBoxLayout* lButtonLayout = new QHBoxLayout;
    lButtonLayout-&gt;addWidget(lOpen);
    lButtonLayout-&gt;setAlignment(Qt::AlignLeft);
    lButtonLayout-&gt;setMargin(0);
    
    QGraphicsScene* lScene = new QGraphicsScene;
    m_scene = lScene;
    QGraphicsView* lView = new QGraphicsView(lScene);
    m_view = lView;
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lButtonLayout);
    lMainLayout-&gt;addWidget(lView, 1);
    
    setLayout(lMainLayout);
    
    connect(lOpen, SIGNAL(clicked()), this, SLOT(slotClick()));
}
//================================================
GWindow::~GWindow() {

}
//================================================
void GWindow::onEvent(const QString&amp; event) {
    if(event == "open") {
        QString lFilename = QFileDialog::getOpenFileName(
        this, tr("Ouvrir une image"), ".", tr("Fichiers Image (*.png *.jpg *.bmp)"));
        if(lFilename == "") {return;}
        m_scene-&gt;clear();
        m_view-&gt;resetMatrix();
        QPixmap lPixmap(lFilename);
        m_scene-&gt;addPixmap(lPixmap);
        m_scene-&gt;update();
        m_view-&gt;setSceneRect(lPixmap.rect());
    }
}
//================================================
void GWindow::slotClick() {
    QWidget* lWidget = qobject_cast&lt;QWidget*&gt;(sender());
    QString lWidgetId = m_widgetMap[lWidget];
    onEvent(lWidgetId);
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_qgraphicsscene_image_open.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_qgraphicsscene_image_open.gif"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Zoomer-une-image-dans-QGraphicsScene"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Zoomer une image dans QGraphicsScene</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();   
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();

public:
    void onEvent(const QString&amp; event);

public slots:
    void slotClick();
    
private:
    QMap&lt;QWidget*, QString&gt; m_widgetMap;
    QGraphicsScene* m_scene;
    QGraphicsView* m_view;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    QPushButton* lOpen = new QPushButton;
    lOpen-&gt;setText("Open");
    m_widgetMap[lOpen] = "open";
    
    QPushButton* lZoomIn = new QPushButton;
    lZoomIn-&gt;setText("ZoomIn");
    m_widgetMap[lZoomIn] = "zoom_in";
    
    QPushButton* lZoomOut = new QPushButton;
    lZoomOut-&gt;setText("ZoomOut");
    m_widgetMap[lZoomOut] = "zoom_out";
    
    QHBoxLayout* lButtonLayout = new QHBoxLayout;
    lButtonLayout-&gt;addWidget(lOpen);
    lButtonLayout-&gt;addWidget(lZoomOut);
    lButtonLayout-&gt;addWidget(lZoomIn);
    lButtonLayout-&gt;setAlignment(Qt::AlignLeft);
    lButtonLayout-&gt;setMargin(0);
    
    QGraphicsScene* lScene = new QGraphicsScene;
    m_scene = lScene;
    QGraphicsView* lView = new QGraphicsView(lScene);
    m_view = lView;
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lButtonLayout);
    lMainLayout-&gt;addWidget(lView, 1);
    
    setLayout(lMainLayout);
    
    connect(lOpen, SIGNAL(clicked()), this, SLOT(slotClick()));
    connect(lZoomIn, SIGNAL(clicked()), this, SLOT(slotClick()));
    connect(lZoomOut, SIGNAL(clicked()), this, SLOT(slotClick()));
}
//================================================
GWindow::~GWindow() {

}
//================================================
void GWindow::onEvent(const QString&amp; event) {
    if(event == "open") {
        QString lFilename = QFileDialog::getOpenFileName(
        this, tr("Ouvrir une image"), ".", tr("Fichiers Image (*.png *.jpg *.bmp)"));
        if(lFilename == "") {return;}
        m_scene-&gt;clear();
        m_view-&gt;resetMatrix();
        QPixmap lPixmap(lFilename);
        m_scene-&gt;addPixmap(lPixmap);
        m_scene-&gt;update();
        m_view-&gt;setSceneRect(lPixmap.rect());
    }
    else if(event == "zoom_in") {
        m_view-&gt;scale(1.2, 1.2);
    }
    else if(event == "zoom_out") {
        m_view-&gt;scale(1/1.2, 1/1.2);
    }
}
//================================================
void GWindow::slotClick() {
    QWidget* lWidget = qobject_cast&lt;QWidget*&gt;(sender());
    QString lWidgetId = m_widgetMap[lWidget];
    onEvent(lWidgetId);
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_qgraphicsscene_image_zoom.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_qgraphicsscene_image_zoom.gif"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Integrer-un-projet-OpenGL-dans-Qt"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Intégrer un projet OpenGL dans Qt</a></h2><br><b>QOpenGLWindow </b>est une sous-classe pratique de QWindow pour effectuer la peinture OpenGL. QOpenGLWindow est un QWindow amélioré qui permet de créer facilement des fenêtres qui effectuent un rendu OpenGL à l'aide d'une API compatible avec QOpenGLWidget et similaire à l'ancien QGLWidget. Contrairement à QOpenGLWidget , QOpenGLWindow ne dépend pas du module widgets et offre de meilleures performances. Pour programmer un repeint, appelez la fonction <span class="GCode3"><code style="color:#cccccc;">update</code></span>. Notez que cela n'entraînera pas immédiatement un appel à <span class="GCode3"><code style="color:#cccccc;">paintGL</code></span>. Appeler <span class="GCode3"><code style="color:#cccccc;">update </code></span>plusieurs fois de suite ne changera en rien le comportement.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();   
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Gwindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
#include "GWindowGL.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {    
    GWindowGL* lWindowGL = new GWindowGL;
    QWidget* lWindowGLW = QWidget::createWindowContainer(lWindowGL, this);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lWindowGLW);
    
    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindowGL.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindowGL_
#define _GWindowGL_
//================================================
#include &lt;QtWidgets&gt;
#include &lt;QOpenGLWindow&gt;
//================================================
class GWindowGL : public QOpenGLWindow {
    Q_OBJECT
    
public:
    GWindowGL();
    ~GWindowGL();

protected:
	void initializeGL();
	void paintEvent(QPaintEvent *event);
	void resizeEvent(QResizeEvent *event);
    
private:
	QOpenGLContext* m_context;
    QOpenGLVertexArrayObject* m_vao;
    QOpenGLShaderProgram* m_shaderProgram;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindowGL.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindowGL.h"
//================================================
GWindowGL::GWindowGL() : QOpenGLWindow() {
	setSurfaceType(QWindow::OpenGLSurface);

	QSurfaceFormat lFormat;
	lFormat.setProfile(QSurfaceFormat::CoreProfile);
	lFormat.setVersion(3, 2);
	setFormat(lFormat);

	QOpenGLContext* lContext = new QOpenGLContext();
    m_context = lContext;
	lContext-&gt;setFormat(lFormat);
	lContext-&gt;create();
	lContext-&gt;makeCurrent(this);
}
//================================================
GWindowGL::~GWindowGL() {

}
//================================================
void GWindowGL::initializeGL() {
	static const char* lVertexShader =
	"#version 330 core\n"
	"layout(location = 0) in vec2 posAttr;\n"
	"void main() {\n"
	"gl_Position = vec4(posAttr, 0.0, 1.0);\n"
    "}";

	static const char* lFragmentShader =
	"#version 330 core\n"
	"out vec4 col;\n"
	"void main() {\n"
	"col = vec4(1.0, 0.0, 0.0, 1.0);\n"
    "}";

	QOpenGLShaderProgram* lShaderProgram = new QOpenGLShaderProgram(this);
	m_shaderProgram = lShaderProgram;
    lShaderProgram-&gt;addShaderFromSourceCode(QOpenGLShader::Vertex, lVertexShader);
	lShaderProgram-&gt;addShaderFromSourceCode(QOpenGLShader::Fragment, lFragmentShader);
	lShaderProgram-&gt;link();

	GLfloat lVertices[] = {
		-1.0f, -1.0f,
		1.0f, -1.0f,
		0.0f,  1.0f
	};

	QOpenGLVertexArrayObject* lVao = new QOpenGLVertexArrayObject();
	m_vao = lVao;
    lVao-&gt;create();
	lVao-&gt;bind();

	QOpenGLBuffer* lVbo = new QOpenGLBuffer(QOpenGLBuffer::VertexBuffer);
	lVbo-&gt;create();
	lVbo-&gt;setUsagePattern(QOpenGLBuffer::StaticDraw);
	lVbo-&gt;bind();
	lVbo-&gt;allocate(lVertices, sizeof(lVertices) * sizeof(GLfloat));

	lVao-&gt;release();
}
//================================================
void GWindowGL::paintEvent(QPaintEvent *event) {
    const qreal lRatio = devicePixelRatio();
    glViewport(0, 0, width() * lRatio, height() * lRatio);

	glClearColor(0.0f, 0.0f, 0.0f, 1.0f);
	glClear(GL_COLOR_BUFFER_BIT);

	m_vao-&gt;bind();
	m_shaderProgram-&gt;bind();

	m_shaderProgram-&gt;bindAttributeLocation("posAttr", 0);
	m_shaderProgram-&gt;enableAttributeArray(0);
	m_shaderProgram-&gt;setAttributeBuffer(0, GL_FLOAT, 0, 2);

	glDrawArrays(GL_TRIANGLES, 0, 3);

	m_shaderProgram-&gt;release();
	m_vao-&gt;release();
}
//================================================
void GWindowGL::resizeEvent(QResizeEvent *event) {
	glViewport(0, 0, width(), height());
	update();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_opengl_integrate.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_opengl_integrate.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Creation-de-pitogrammes-avec-QtAwesome"><a class="Link3" href="#">Création de pitogrammes avec QtAwesome</a></h1><div class="Body3"><br><b>QtAwesome</b> est une bibliothèque simple qui peut être utilisée pour ajouter des icônes Font Awesome à votre application Qt. Bien que le nom soit QtAwesome et qu'il soit actuellement très basé sur Font Awesome, vous pouvez utiliser toutes les autres polices d'icônes / glyphes de votre choix. La classe peut également être utilisée pour gérer vos propres icônes dessinées par code dynamique, en ajoutant des peintres d'icônes nommés. Cette bibliothèque a été mise à jour vers la version 4.7.0 de Font Awesome <br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome-Installer-l-environnement-QtAwesome-sous-MSYS2">Installer l'environnement QtAwesome sous MSYS2</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2">Tester un projet QtAwesome sous MSYS2</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-id">Créer un pictogramme à partir de son id</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-nom">Créer un pictogramme à partir de son nom</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-caractere">Créer un pictogramme à partir de son caractère</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-d-un-pictogramme">Définir la couleur d'un pictogramme</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-par-defaut-des-pictogrammes">Définir la couleur par défaut des pictogrammes</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-anime">Créer un pictogramme animé</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome-Basculer-d-un-pictogramme-a-l-autre-entre-deux-etats">Basculer d'un pictogramme à l'autre entre deux états</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-personnalise">Créer un pictogramme personnalisé</a></div></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Installer-l-environnement-QtAwesome-sous-MSYS2"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Installer l'environnement QtAwesome sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Télécharger QtAwesome</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/gamecreature/QtAwesome">https://github.com/gamecreature/QtAwesome</a><br><br><b>QtAwesome-master.zip</b><br><br><h3 class="Title8 GTitle3">Extraire QtAwesome</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">QtAwesome-master.zip
Clic droit -&gt; Extraire vers QtAwesome-master\</pre></div></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Tester un projet QtAwesome sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Observer la structure du projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">ReadyTest/QtAwesome/
|___ main.cpp
|___ QtAwesome.cpp  
|___ QtAwesome.h 
|___ QtAwesomeAnim.cpp
|___ QtAwesomeAnim.h
|___ QtAwesome.qrc
|___ fonts/fontawesome-4.7.0.ttf
|___ GProject.pro</pre></div></div><br><h3 class="Title8 GTitle3">Editer le programme (main.cpp)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;QtAwesome.h&gt;
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    QWidget* lWindow = new QWidget;
    QtAwesome* lAwesome = new QtAwesome(lWindow);
    lAwesome-&gt;initFontAwesome();

    QPushButton* lButton = new QPushButton;
    lButton-&gt;setText("Button");
    lButton-&gt;setIcon(lAwesome-&gt;icon(fa::book));
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lButton);
    lMainLayout-&gt;setAlignment(Qt::AlignTop | Qt::AlignLeft);

    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Définir le fichier projet (GProjet.pro)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">TEMPLATE = app
TARGET = rdcpp
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += console release gnu++11
QT += widgets

INCLUDEPATH +=\
    /mingw32/include \
    $$PWD \

SOURCES +=\
    $$PWD/main.cpp \
    $$PWD/QtAwesome.cpp \
    $$PWD/QtAwesomeAnim.cpp \

HEADERS +=\
    $$PWD/QtAwesome.h \   
    $$PWD/QtAwesomeAnim.h \

RESOURCES +=\
    $$PWD/QtAwesome.qrc \</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">qmake
make</pre></div></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">./release/rdcpp</pre></div></div><br><h3 class="Title8 GTitle3">Résulat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_test.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_test.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-id"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Créer un pictogramme à partir de son id</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;QtAwesome.h&gt;
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    QWidget* lWindow = new QWidget;
    QtAwesome* lAwesome = new QtAwesome(lWindow);
    lAwesome-&gt;initFontAwesome();

    QPushButton* lButton = new QPushButton;
    lButton-&gt;setText("Button");
    lButton-&gt;setIcon(lAwesome-&gt;icon(fa::camera));
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lButton);
    lMainLayout-&gt;setAlignment(Qt::AlignTop | Qt::AlignLeft);

    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_id.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_id.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-nom"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Créer un pictogramme à partir de son nom</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;QtAwesome.h&gt;
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    QWidget* lWindow = new QWidget;
    QtAwesome* lAwesome = new QtAwesome(lWindow);
    lAwesome-&gt;initFontAwesome();

    QPushButton* lButton = new QPushButton;
    lButton-&gt;setText("Button");
    lButton-&gt;setIcon(lAwesome-&gt;icon("paperplane"));
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lButton);
    lMainLayout-&gt;setAlignment(Qt::AlignTop | Qt::AlignLeft);

    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_name.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_name.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-caractere"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Créer un pictogramme à partir de son caractère</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;QtAwesome.h&gt;
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    QWidget* lWindow = new QWidget;
    QtAwesome* lAwesome = new QtAwesome(qApp);
    lAwesome-&gt;initFontAwesome();

    QLabel* lLabel = new QLabel(QChar( fa::group));
    lLabel-&gt;setFont(lAwesome-&gt;font(16));
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lLabel);
    lMainLayout-&gt;setAlignment(Qt::AlignTop | Qt::AlignLeft);

    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_char.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_char.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-d-un-pictogramme"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Définir la couleur d'un pictogramme</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;QtAwesome.h&gt;
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    QWidget* lWindow = new QWidget;
    QtAwesome* lAwesome = new QtAwesome(qApp);
    lAwesome-&gt;initFontAwesome();

    QPushButton* lButton = new QPushButton;
    lButton-&gt;setText("Button");
    QVariantMap lOptions;
    lOptions.insert("color-active" , QColor(0, 127, 0));
    lButton-&gt;setIcon(lAwesome-&gt;icon(fa::camera, lOptions));
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lButton);
    lMainLayout-&gt;setAlignment(Qt::AlignTop | Qt::AlignLeft);

    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_color.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_color.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-par-defaut-des-pictogrammes"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Définir la couleur par défaut des pictogrammes</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;QtAwesome.h&gt;
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    QWidget* lWindow = new QWidget;
    QtAwesome* lAwesome = new QtAwesome(qApp);
    lAwesome-&gt;initFontAwesome();
    lAwesome-&gt; setDefaultOption("color-active" , QColor(0, 127, 0));

    QPushButton* lButton = new QPushButton;
    lButton-&gt;setText("Button");
    lButton-&gt;setIcon(lAwesome-&gt;icon(fa::camera));
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lButton);
    lMainLayout-&gt;setAlignment(Qt::AlignTop | Qt::AlignLeft);

    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_default.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_default.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-anime"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Créer un pictogramme animé</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;QtAwesome.h&gt;
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    QWidget* lWindow = new QWidget;
    QtAwesome* lAwesome = new QtAwesome(lWindow);
    lAwesome-&gt;initFontAwesome();

    QPushButton* lButton = new QPushButton;
    lButton-&gt;setText("Button");
    QVariantMap lOptions;
    lOptions.insert("anim", qVariantFromValue(new QtAwesomeAnimation(lButton)));
    lButton-&gt;setIcon(lAwesome-&gt;icon(fa::refresh, lOptions));
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lButton);
    lMainLayout-&gt;setAlignment(Qt::AlignTop | Qt::AlignLeft);

    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_anim.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_anim.gif"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Basculer-d-un-pictogramme-a-l-autre-entre-deux-etats"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Basculer d'un pictogramme à l'autre entre deux états</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;QtAwesome.h&gt;
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    QWidget* lWindow = new QWidget;
    QtAwesome* lAwesome = new QtAwesome(lWindow);
    lAwesome-&gt;initFontAwesome();

    QPushButton* lButton = new QPushButton;
    lButton-&gt;setText("Button");
    lButton-&gt;setCheckable("Button");
    QVariantMap lOptions;
    lOptions.insert("color", QColor(Qt::green) );
    lOptions.insert("text-off", QString(fa::squareo) );
    lOptions.insert("color-off", QColor(Qt::red) );
    lButton-&gt;setIcon(lAwesome-&gt;icon(fa::checksquareo, lOptions));
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lButton);
    lMainLayout-&gt;setAlignment(Qt::AlignTop | Qt::AlignLeft);

    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_toogle.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_toogle.gif"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-personnalise"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Créer un pictogramme personnalisé</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;QtAwesome.h&gt;
//================================================
class DuplicateIconPainter : public QtAwesomeIconPainter {
public:
    //================================================
    virtual void paint(QtAwesome* awesome, QPainter* painter, const QRect&amp; rectIn, QIcon::Mode mode, QIcon::State state, const QVariantMap&amp; options) {
        int drawSize = qRound(rectIn.height()*0.5);
        int offset = rectIn.height() / 4;
        QChar chr = QChar(static_cast&lt;int&gt;(fa::plus));

        painter-&gt;setFont(awesome-&gt;font(drawSize));
        painter-&gt;setPen(QColor(100,100,100));
        painter-&gt;drawText(QRect(QPoint(offset*2, offset*2), 
        QSize(drawSize, drawSize)), chr , 
        QTextOption(Qt::AlignCenter|Qt::AlignVCenter));

        painter-&gt;setFont(awesome-&gt;font(drawSize));
        painter-&gt;setPen(QColor(50,50,50));
        painter-&gt;drawText(QRect(QPoint(rectIn.width()-drawSize-offset, 
        rectIn.height()-drawSize-offset), QSize(drawSize, drawSize)), 
        chr, QTextOption(Qt::AlignCenter|Qt::AlignVCenter));
    }
    //================================================
};
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    QWidget* lWindow = new QWidget;
    QtAwesome* lAwesome = new QtAwesome(qApp);
    lAwesome-&gt;initFontAwesome();
    lAwesome-&gt;give("duplicate", new DuplicateIconPainter());

    QPushButton* lButton = new QPushButton;
    lButton-&gt;setText("Button");
    lButton-&gt;setIcon(lAwesome-&gt;icon("duplicate"));
    lButton-&gt;setStyleSheet("Text-align:left");
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lButton);
    lMainLayout-&gt;setAlignment(Qt::AlignTop | Qt::AlignLeft);

    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_custom.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_custom.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Trace-de-courbes-2D-avec-QCustomPlot"><a class="Link3" href="#">Tracé de courbes 2D avec QCustomPlot</a></h1><div class="Body3"><br><b>QCustomPlot </b>est un widget Qt en C++ pour le traçage et la visualisation des données 2D. Il n'a pas d'autres dépendances et est bien documenté. Il se concentre sur la création de tracés 2D, de graphiques et offre de hautes performances pour les applications de visualisation de données en temps réel. Il permet d'exporter les graphes vers divers formats de fichiers tels que les fichiers PDF vectorisés et les images pixelisées comme PNG, JPG et BMP. QCustomPlot est la solution idéale pour afficher des données en temps réel dans une application ainsi que pour produire des tracés 2D de haute qualité pour d'autres médias.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Installer-l-environnement-QCustomPlot-sous-MSYS">Installer l'environnement QCustomPlot sous MSYS</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2">Tester un projet QCustomPlot sous MSYS2</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-interactions">Créer un graphe avec des interactions</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points">Créer un graphe avec un nuage de points</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-differents">Créer un graphe avec un nuage de points différents</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-lignes">Créer un graphe avec des lignes</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-une-image-de-fond">Créer un graphe avec une image de fond</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-textures">Créer un graphe avec des textures</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-plusieurs-graphes-avec-des-reperes-differents">Créer plusieurs graphes avec des repères différents</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-logarithmique">Créer un graphe logarithmique</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-donnees-temps-reel">Créer un graphe de données temps réel</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-parametrique">Créer un graphe paramétrique</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-barres">Créer un graphe à barres</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-moustaches">Créer un graphe à moustaches</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-texte">Créer un graphe avec un texte</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-style">Créer un graphe stylé</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-plusieurs-niveaux-d-affichage">Créer un graphe avec plusieurs niveaux d'affichage</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-cartagraphie-de-couleurs">Créer un graphe de cartagraphie de couleurs</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-en-analyse-financiere">Créer un graphe en analyse financière</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-polaire">Créer un graphe polaire</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-accolades">Créer un graphe avec des accolades</a></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_style.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_style.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Installer-l-environnement-QCustomPlot-sous-MSYS"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Installer l'environnement QCustomPlot sous MSYS</a></h2><br><h3 class="Title8 GTitle3">Télécharger QCustomPlot</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.qcustomplot.com/index.php/download">https://www.qcustomplot.com/index.php/download</a><br><br><b>QCustomPlot.tar.gz</b><br><br><h3 class="Title8 GTitle3">Extraire QCustomPlot</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">QCustomPlot.tar.gz
Clic droit -&gt; Extraire vers QCustomPlot\</pre></div></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Tester un projet QCustomPlot sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Observer la structure du projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">ReadyTest/QCustomPlot/
|___ main.cpp
|___ qcustomplot.h
|___ qcustomplot.cpp
|___ GProject.pro</pre></div></div><br><h3 class="Title8 GTitle3">Editer le programme (main.cpp)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;QApplication&gt;
#include &lt;qcustomplot.h&gt;
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    QVector&lt;double&gt; x(101), y(101); 
    for (int i= 0; i &lt; 101; i++) {
        x[i] = i/50.0 - 1; 
        y[i] = x[i]*x[i];  
    }
    
    QCustomPlot* lCustomPlot = new QCustomPlot;
    lCustomPlot-&gt;addGraph();
    lCustomPlot-&gt;graph(0)-&gt;setData(x, y);
    lCustomPlot-&gt;xAxis-&gt;setLabel("x");
    lCustomPlot-&gt;yAxis-&gt;setLabel("y");
    lCustomPlot-&gt;xAxis-&gt;setRange(-1, 1);
    lCustomPlot-&gt;yAxis-&gt;setRange(0, 1);
    
    lCustomPlot-&gt;show();
    lCustomPlot-&gt;setWindowTitle("ReadyApp");
    lCustomPlot-&gt;resize(500, 250);
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Editer le fichier projet (GProject.pro)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">TEMPLATE = app
TARGET = rdcpp
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += console release gnu++11
QT += widgets sql printsupport

INCLUDEPATH +=\
    /mingw32/include \
    $$PWD \
    
SOURCES +=\
    $$PWD/main.cpp \
    $$PWD/qcustomplot.cpp \
    
HEADERS +=\
    $$PWD/qcustomplot.h \</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">qmake
make</pre></div></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">./release/rdcpp.exe</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_test.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_test.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-interactions"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec des interactions</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;
    
    customPlot-&gt;addGraph();
    customPlot-&gt;graph(0)-&gt;setPen(QPen(Qt::blue)); 
    customPlot-&gt;graph(0)-&gt;setBrush(QBrush(QColor(0, 0, 255, 20))); 
    customPlot-&gt;addGraph();
    customPlot-&gt;graph(1)-&gt;setPen(QPen(Qt::red)); 

    QVector&lt;double&gt; x(250), y0(250), y1(250);
    for (int i=0; i&lt;250; ++i) {
        x[i] = i;
        y0[i] = qExp(-i/150.0)*qCos(i/10.0);
        y1[i] = qExp(-i/150.0);
    }

    customPlot-&gt;xAxis2-&gt;setVisible(true);
    customPlot-&gt;xAxis2-&gt;setTickLabels(false);
    customPlot-&gt;yAxis2-&gt;setVisible(true);
    customPlot-&gt;yAxis2-&gt;setTickLabels(false);

    connect(customPlot-&gt;xAxis, SIGNAL(rangeChanged(QCPRange)), customPlot-&gt;xAxis2, SLOT(setRange(QCPRange)));
    connect(customPlot-&gt;yAxis, SIGNAL(rangeChanged(QCPRange)), customPlot-&gt;yAxis2, SLOT(setRange(QCPRange)));

    customPlot-&gt;graph(0)-&gt;setData(x, y0);
    customPlot-&gt;graph(1)-&gt;setData(x, y1);

    customPlot-&gt;graph(0)-&gt;rescaleAxes();
    customPlot-&gt;graph(1)-&gt;rescaleAxes(true);

    customPlot-&gt;setInteractions(QCP::iRangeDrag | QCP::iRangeZoom | QCP::iSelectPlottables);    

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);
    
    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {
    
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_interactions.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_interactions.gif"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec un nuage de points</a></h2><br>En statistiques, un <b>nuage de points</b> est une représentation de données dépendant de plusieurs variables. Il permet de mettre en évidence le degré de corrélation entre au moins deux variables liées. Les différentes observations des nuages de points permettent de déterminer : des tendances ; des dépendances ; des relations positives, négatives, directes, indirectes ou inverses ; des répartitions plus ou moins homogènes ; des données aberrantes s'écartant de l'écart type ; des sous groupes pouvant correspondre à l'application d'une loi normale.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;
    
    customPlot-&gt;legend-&gt;setVisible(true);
    customPlot-&gt;legend-&gt;setFont(QFont("Helvetica",9));

    customPlot-&gt;setLocale(QLocale(QLocale::English, QLocale::UnitedKingdom));

    customPlot-&gt;addGraph();
    
    QPen pen;
    pen.setStyle(Qt::DotLine);
    pen.setWidth(1);
    pen.setColor(QColor(180,180,180));
    
    customPlot-&gt;graph(0)-&gt;setName("Confidence Band 68%");
    customPlot-&gt;graph(0)-&gt;setPen(pen);
    customPlot-&gt;graph(0)-&gt;setBrush(QBrush(QColor(255,50,30,20)));
    
    customPlot-&gt;addGraph();
    
    customPlot-&gt;legend-&gt;removeItem(customPlot-&gt;legend-&gt;itemCount()-1); 

    customPlot-&gt;graph(1)-&gt;setPen(pen);
    customPlot-&gt;graph(0)-&gt;setChannelFillGraph(customPlot-&gt;graph(1));

    customPlot-&gt;addGraph();
    
    pen.setStyle(Qt::DashLine);
    pen.setWidth(2);
    pen.setColor(Qt::red);
    
    customPlot-&gt;graph(2)-&gt;setPen(pen);
    customPlot-&gt;graph(2)-&gt;setName("Theory Curve");
    
    customPlot-&gt;addGraph();
    customPlot-&gt;graph(3)-&gt;setPen(QPen(Qt::blue));
    customPlot-&gt;graph(3)-&gt;setName("Measurement");
    customPlot-&gt;graph(3)-&gt;setLineStyle(QCPGraph::lsNone);
    customPlot-&gt;graph(3)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCross, 4));
    
    QCPErrorBars *errorBars = new QCPErrorBars(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    errorBars-&gt;removeFromLegend();
    errorBars-&gt;setAntialiased(false);
    errorBars-&gt;setDataPlottable(customPlot-&gt;graph(3));
    errorBars-&gt;setPen(QPen(QColor(180,180,180)));

    QVector&lt;double&gt; x0(250), y0(250);
    QVector&lt;double&gt; yConfUpper(250), yConfLower(250);
    for (int i=0; i&lt;250; ++i) {
        x0[i] = (i/249.0-0.5)*30+0.01; 
        y0[i] = qSin(x0[i])/x0[i]; 
        yConfUpper[i] = y0[i]+0.15;
        yConfLower[i] = y0[i]-0.15;
        x0[i] *= 1000;
    }
    
    QVector&lt;double&gt; x1(50), y1(50), y1err(50);
    for (int i=0; i&lt;50; ++i) {
        double tmp1 = rand()/(double)RAND_MAX;
        double tmp2 = rand()/(double)RAND_MAX;
        double r = qSqrt(-2*qLn(tmp1))*qCos(2*M_PI*tmp2);

        x1[i] = (i/50.0-0.5)*30+0.25;
        y1[i] = qSin(x1[i])/x1[i]+r*0.15;
        x1[i] *= 1000;
        y1err[i] = 0.15;
    }

    customPlot-&gt;graph(0)-&gt;setData(x0, yConfUpper);
    customPlot-&gt;graph(1)-&gt;setData(x0, yConfLower);
    customPlot-&gt;graph(2)-&gt;setData(x0, y0);
    customPlot-&gt;graph(3)-&gt;setData(x1, y1);
    errorBars-&gt;setData(y1err);
    
    customPlot-&gt;graph(2)-&gt;rescaleAxes();
    customPlot-&gt;graph(3)-&gt;rescaleAxes(true);
    
    customPlot-&gt;xAxis-&gt;setTickLabelRotation(30);
    customPlot-&gt;xAxis-&gt;ticker()-&gt;setTickCount(9);
    customPlot-&gt;xAxis-&gt;setNumberFormat("ebc");
    customPlot-&gt;xAxis-&gt;setNumberPrecision(1);
    customPlot-&gt;xAxis-&gt;moveRange(-10);
    
    customPlot-&gt;axisRect()-&gt;setupFullAxesBox();
  
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);
    
    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {
    
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_scatter.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_scatter.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-differents"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec un nuage de points différents</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;legend-&gt;setVisible(true);
    customPlot-&gt;legend-&gt;setFont(QFont("Helvetica", 9));
    customPlot-&gt;legend-&gt;setRowSpacing(-3);
    
    QVector&lt;QCPScatterStyle::ScatterShape&gt; shapes;
    shapes &lt;&lt; QCPScatterStyle::ssCross;
    shapes &lt;&lt; QCPScatterStyle::ssPlus;
    shapes &lt;&lt; QCPScatterStyle::ssCircle;
    shapes &lt;&lt; QCPScatterStyle::ssDisc;
    shapes &lt;&lt; QCPScatterStyle::ssSquare;
    shapes &lt;&lt; QCPScatterStyle::ssDiamond;
    shapes &lt;&lt; QCPScatterStyle::ssStar;
    shapes &lt;&lt; QCPScatterStyle::ssTriangle;
    shapes &lt;&lt; QCPScatterStyle::ssTriangleInverted;
    shapes &lt;&lt; QCPScatterStyle::ssCrossSquare;
    shapes &lt;&lt; QCPScatterStyle::ssPlusSquare;
    shapes &lt;&lt; QCPScatterStyle::ssCrossCircle;
    shapes &lt;&lt; QCPScatterStyle::ssPlusCircle;
    shapes &lt;&lt; QCPScatterStyle::ssPeace;
    shapes &lt;&lt; QCPScatterStyle::ssCustom;

    QPen pen;
    for (int i = 0; i &lt; shapes.size(); ++i) {
        customPlot-&gt;addGraph();
        pen.setColor(QColor(qSin(i*0.3)*100+100, qSin(i*0.6+0.7)*100+100, qSin(i*0.4+0.6)*100+100));

        QVector&lt;double&gt; x(10), y(10);
        for (int k = 0; k &lt; 10; ++k) {
            x[k] = k/10.0 * 4*3.14 + 0.01;
            y[k] = 7*qSin(x[k])/x[k] + (shapes.size()-i)*5;
        }
        
        customPlot-&gt;graph()-&gt;setData(x, y);
        customPlot-&gt;graph()-&gt;rescaleAxes(true);
        customPlot-&gt;graph()-&gt;setPen(pen);
        customPlot-&gt;graph()-&gt;setName(QCPScatterStyle::staticMetaObject.enumerator(QCPScatterStyle::staticMetaObject.indexOfEnumerator("ScatterShape")).valueToKey(shapes.at(i)));
        customPlot-&gt;graph()-&gt;setLineStyle(QCPGraph::lsLine);

        if (shapes.at(i) != QCPScatterStyle::ssCustom) {
            customPlot-&gt;graph()-&gt;setScatterStyle(QCPScatterStyle(shapes.at(i), 10));
        }
        else {
            QPainterPath customScatterPath;
            for (int i = 0; i &lt; 3; ++i) {
                customScatterPath.cubicTo(qCos(2*M_PI*i/3.0)*9, qSin(2*M_PI*i/3.0)*9, qCos(2*M_PI*(i+0.9)/3.0)*9, qSin(2*M_PI*(i+0.9)/3.0)*9, 0, 0);
            }
            customPlot-&gt;graph()-&gt;setScatterStyle(QCPScatterStyle(customScatterPath, QPen(Qt::black, 0), QColor(40, 70, 255, 50), 10));
        }
    }

    customPlot-&gt;rescaleAxes();
    customPlot-&gt;xAxis-&gt;setTicks(false);
    customPlot-&gt;yAxis-&gt;setTicks(false);
    customPlot-&gt;xAxis-&gt;setTickLabels(false);
    customPlot-&gt;yAxis-&gt;setTickLabels(false);

    customPlot-&gt;axisRect()-&gt;setupFullAxesBox();

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_scatter_style.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_scatter_style.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-lignes"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec des lignes</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;legend-&gt;setVisible(true);
    customPlot-&gt;legend-&gt;setFont(QFont("Helvetica", 9));

    QPen pen;
    QStringList lineNames;
    lineNames &lt;&lt; "lsNone" &lt;&lt; "lsLine" &lt;&lt; "lsStepLeft" &lt;&lt; "lsStepRight" &lt;&lt; "lsStepCenter" &lt;&lt; "lsImpulse";

    for (int i=QCPGraph::lsNone; i&lt;=QCPGraph::lsImpulse; ++i) {
        customPlot-&gt;addGraph();
        pen.setColor(QColor(qSin(i*1+1.2)*80+80, qSin(i*0.3+0)*80+80, qSin(i*0.3+1.5)*80+80));
        customPlot-&gt;graph()-&gt;setPen(pen);
        customPlot-&gt;graph()-&gt;setName(lineNames.at(i-QCPGraph::lsNone));
        customPlot-&gt;graph()-&gt;setLineStyle((QCPGraph::LineStyle)i);
        customPlot-&gt;graph()-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, 5));

        QVector&lt;double&gt; x(15), y(15);
        for (int j=0; j&lt;15; ++j) {
            x[j] = j/15.0 * 5*3.14 + 0.01;
            y[j] = 7*qSin(x[j])/x[j] - (i-QCPGraph::lsNone)*5 + (QCPGraph::lsImpulse)*5 + 2;
        }
        customPlot-&gt;graph()-&gt;setData(x, y);
        customPlot-&gt;graph()-&gt;rescaleAxes(true);
    }

    customPlot-&gt;yAxis-&gt;scaleRange(1.1, customPlot-&gt;yAxis-&gt;range().center());
    customPlot-&gt;xAxis-&gt;scaleRange(1.1, customPlot-&gt;xAxis-&gt;range().center());

    customPlot-&gt;xAxis-&gt;setTicks(false);
    customPlot-&gt;yAxis-&gt;setTicks(true);
    customPlot-&gt;xAxis-&gt;setTickLabels(false);
    customPlot-&gt;yAxis-&gt;setTickLabels(true);

    customPlot-&gt;axisRect()-&gt;setupFullAxesBox();

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_line.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_line.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-une-image-de-fond"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec une image de fond</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;axisRect()-&gt;setBackground(QPixmap("solarpanels.jpg"));
    
    customPlot-&gt;addGraph();
    customPlot-&gt;graph()-&gt;setLineStyle(QCPGraph::lsLine);
    
    QPen pen;
    pen.setColor(QColor(255, 200, 20, 200));
    pen.setStyle(Qt::DashLine);
    pen.setWidthF(2.5);
    
    customPlot-&gt;graph()-&gt;setPen(pen);
    customPlot-&gt;graph()-&gt;setBrush(QBrush(QColor(255,200,20,70)));
    customPlot-&gt;graph()-&gt;setScatterStyle(QCPScatterStyle(QPixmap("./sun.png")));

    customPlot-&gt;graph()-&gt;setName("Data from Photovoltaic\nenergy barometer 2011");

    QVector&lt;double&gt; year, value;
    year  &lt;&lt; 2005 &lt;&lt; 2006 &lt;&lt; 2007 &lt;&lt; 2008  &lt;&lt; 2009  &lt;&lt; 2010 &lt;&lt; 2011;
    value &lt;&lt; 2.17 &lt;&lt; 3.42 &lt;&lt; 4.94 &lt;&lt; 10.38 &lt;&lt; 15.86 &lt;&lt; 29.33 &lt;&lt; 52.1;
    customPlot-&gt;graph()-&gt;setData(year, value);

    customPlot-&gt;plotLayout()-&gt;insertRow(0);
    customPlot-&gt;plotLayout()-&gt;addElement(0, 0, new QCPTextElement(customPlot, "Regenerative Energies", QFont("sans", 12, QFont::Bold)));

    customPlot-&gt;xAxis-&gt;setLabel("Year");
    customPlot-&gt;yAxis-&gt;setLabel("Installed Gigawatts of\nphotovoltaic in the European Union");
    customPlot-&gt;xAxis2-&gt;setVisible(true);
    customPlot-&gt;yAxis2-&gt;setVisible(true);
    customPlot-&gt;xAxis2-&gt;setTickLabels(false);
    customPlot-&gt;yAxis2-&gt;setTickLabels(false);
    customPlot-&gt;xAxis2-&gt;setTicks(false);
    customPlot-&gt;yAxis2-&gt;setTicks(false);
    customPlot-&gt;xAxis2-&gt;setSubTicks(false);
    customPlot-&gt;yAxis2-&gt;setSubTicks(false);
    customPlot-&gt;xAxis-&gt;setRange(2004.5, 2011.5);
    customPlot-&gt;yAxis-&gt;setRange(0, 52);

    customPlot-&gt;legend-&gt;setFont(QFont(font().family(), 7));
    customPlot-&gt;legend-&gt;setIconSize(50, 20);
    customPlot-&gt;legend-&gt;setVisible(true);
    customPlot-&gt;axisRect()-&gt;insetLayout()-&gt;setInsetAlignment(0, Qt::AlignLeft | Qt::AlignTop);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_image.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_image.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-textures"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec des textures</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;setLocale(QLocale(QLocale::English, QLocale::UnitedKingdom));

    double now = QDateTime::currentDateTime().toMSecsSinceEpoch()/1000.0;
    srand(8); 

    for (int gi=0; gi&lt;5; ++gi) {
        customPlot-&gt;addGraph();
        QColor color(20+200/4.0*gi,70*(1.6-gi/4.0), 150, 150);
        customPlot-&gt;graph()-&gt;setLineStyle(QCPGraph::lsLine);
        customPlot-&gt;graph()-&gt;setPen(QPen(color.lighter(200)));
        customPlot-&gt;graph()-&gt;setBrush(QBrush(color));

        QVector&lt;QCPGraphData&gt; timeData(250);
        for (int i=0; i&lt;250; ++i) {
            timeData[i].key = now + 24*3600*i;
            if (i == 0)
                timeData[i].value = (i/50.0+1)*(rand()/(double)RAND_MAX-0.5);
            else
                timeData[i].value = qFabs(timeData[i-1].value)*(1+0.02/4.0*(4-gi)) + (i/50.0+1)*(rand()/(double)RAND_MAX-0.5);
        }
        customPlot-&gt;graph()-&gt;data()-&gt;set(timeData);
    }

    QSharedPointer&lt;QCPAxisTickerDateTime&gt; dateTicker(new QCPAxisTickerDateTime);
    dateTicker-&gt;setDateTimeFormat("d. MMMM\nyyyy");
    customPlot-&gt;xAxis-&gt;setTicker(dateTicker);

    QSharedPointer&lt;QCPAxisTickerText&gt; textTicker(new QCPAxisTickerText);
    textTicker-&gt;addTick(10, "a bit\nlow");
    textTicker-&gt;addTick(50, "quite\nhigh");
    customPlot-&gt;yAxis-&gt;setTicker(textTicker);

    customPlot-&gt;xAxis-&gt;setTickLabelFont(QFont(QFont().family(), 8));
    customPlot-&gt;yAxis-&gt;setTickLabelFont(QFont(QFont().family(), 8));

    customPlot-&gt;xAxis-&gt;setLabel("Date");
    customPlot-&gt;yAxis-&gt;setLabel("Random wobbly lines value");

    customPlot-&gt;xAxis2-&gt;setVisible(true);
    customPlot-&gt;yAxis2-&gt;setVisible(true);
    customPlot-&gt;xAxis2-&gt;setTicks(false);
    customPlot-&gt;yAxis2-&gt;setTicks(false);
    customPlot-&gt;xAxis2-&gt;setTickLabels(false);
    customPlot-&gt;yAxis2-&gt;setTickLabels(false);

    customPlot-&gt;xAxis-&gt;setRange(now, now+24*3600*249);
    customPlot-&gt;yAxis-&gt;setRange(0, 60);

    customPlot-&gt;legend-&gt;setVisible(true);
    customPlot-&gt;legend-&gt;setBrush(QColor(255, 255, 255, 150));

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_texture.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_texture.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-plusieurs-graphes-avec-des-reperes-differents"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer plusieurs graphes avec des repères différents</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;setInteractions(QCP::iRangeDrag | QCP::iRangeZoom);

    customPlot-&gt;setLocale(QLocale(QLocale::English, QLocale::UnitedKingdom)); // period as decimal separator and comma as thousand separator
    customPlot-&gt;legend-&gt;setVisible(true);

    QFont legendFont = font();  
    legendFont.setPointSize(9); 

    customPlot-&gt;legend-&gt;setFont(legendFont);
    customPlot-&gt;legend-&gt;setBrush(QBrush(QColor(255,255,255,230)));

    customPlot-&gt;axisRect()-&gt;insetLayout()-&gt;setInsetAlignment(0, Qt::AlignBottom|Qt::AlignRight);

    customPlot-&gt;addGraph(customPlot-&gt;yAxis, customPlot-&gt;xAxis);
    customPlot-&gt;graph(0)-&gt;setPen(QPen(QColor(255, 100, 0)));
    customPlot-&gt;graph(0)-&gt;setBrush(QBrush(QPixmap("./balboa.jpg"))); 
    customPlot-&gt;graph(0)-&gt;setLineStyle(QCPGraph::lsLine);
    customPlot-&gt;graph(0)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssDisc, 5));
    customPlot-&gt;graph(0)-&gt;setName("Left maxwell function");

    customPlot-&gt;addGraph();
    customPlot-&gt;graph(1)-&gt;setPen(QPen(Qt::red));
    customPlot-&gt;graph(1)-&gt;setBrush(QBrush(QPixmap("./balboa.jpg"))); // same fill as we used for graph 0
    customPlot-&gt;graph(1)-&gt;setLineStyle(QCPGraph::lsStepCenter);
    customPlot-&gt;graph(1)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, Qt::red, Qt::white, 7));
    customPlot-&gt;graph(1)-&gt;setName("Bottom maxwell function");
    QCPErrorBars *errorBars = new QCPErrorBars(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    errorBars-&gt;removeFromLegend();
    errorBars-&gt;setDataPlottable(customPlot-&gt;graph(1));

    customPlot-&gt;addGraph(customPlot-&gt;xAxis2, customPlot-&gt;yAxis2);
    customPlot-&gt;graph(2)-&gt;setPen(QPen(Qt::blue));
    customPlot-&gt;graph(2)-&gt;setName("High frequency sine");

    customPlot-&gt;addGraph(customPlot-&gt;xAxis2, customPlot-&gt;yAxis2);
    QPen blueDotPen;
    blueDotPen.setColor(QColor(30, 40, 255, 150));
    blueDotPen.setStyle(Qt::DotLine);
    blueDotPen.setWidthF(4);
    customPlot-&gt;graph(3)-&gt;setPen(blueDotPen);
    customPlot-&gt;graph(3)-&gt;setName("Sine envelope");

    customPlot-&gt;addGraph(customPlot-&gt;yAxis2, customPlot-&gt;xAxis2);
    customPlot-&gt;graph(4)-&gt;setPen(QColor(50, 50, 50, 255));
    customPlot-&gt;graph(4)-&gt;setLineStyle(QCPGraph::lsNone);
    customPlot-&gt;graph(4)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, 4));
    customPlot-&gt;graph(4)-&gt;setName("Some random data around\na quadratic function");

    QVector&lt;double&gt; x0(25), y0(25);
    QVector&lt;double&gt; x1(15), y1(15), y1err(15);
    QVector&lt;double&gt; x2(250), y2(250);
    QVector&lt;double&gt; x3(250), y3(250);
    QVector&lt;double&gt; x4(250), y4(250);
    
    for (int i=0; i&lt;25; ++i) {
        x0[i] = 3*i/25.0;
        y0[i] = qExp(-x0[i]*x0[i]*0.8)*(x0[i]*x0[i]+x0[i]);
    }
    for (int i=0; i&lt;15; ++i) {
        x1[i] = 3*i/15.0;;
        y1[i] = qExp(-x1[i]*x1[i])*(x1[i]*x1[i])*2.6;
        y1err[i] = y1[i]*0.25;
    }
    for (int i=0; i&lt;250; ++i) {
        x2[i] = i/250.0*3*M_PI;
        x3[i] = x2[i];
        x4[i] = i/250.0*100-50;
        y2[i] = qSin(x2[i]*12)*qCos(x2[i])*10;
        y3[i] = qCos(x3[i])*10;
        y4[i] = 0.01*x4[i]*x4[i] + 1.5*(rand()/(double)RAND_MAX-0.5) + 1.5*M_PI;
    }

    customPlot-&gt;graph(0)-&gt;setData(x0, y0);
    customPlot-&gt;graph(1)-&gt;setData(x1, y1);
    errorBars-&gt;setData(y1err);
    customPlot-&gt;graph(2)-&gt;setData(x2, y2);
    customPlot-&gt;graph(3)-&gt;setData(x3, y3);
    customPlot-&gt;graph(4)-&gt;setData(x4, y4);

    customPlot-&gt;xAxis2-&gt;setVisible(true);
    customPlot-&gt;yAxis2-&gt;setVisible(true);

    customPlot-&gt;xAxis-&gt;setRange(0, 2.7);
    customPlot-&gt;yAxis-&gt;setRange(0, 2.6);
    customPlot-&gt;xAxis2-&gt;setRange(0, 3.0*M_PI);
    customPlot-&gt;yAxis2-&gt;setRange(-70, 35);

    customPlot-&gt;xAxis2-&gt;setTicker(QSharedPointer&lt;QCPAxisTickerPi&gt;(new QCPAxisTickerPi));

    customPlot-&gt;plotLayout()-&gt;insertRow(0);
    customPlot-&gt;plotLayout()-&gt;addElement(0, 0, new QCPTextElement(customPlot, "Way too many graphs in one plot", QFont("sans", 12, QFont::Bold)));

    customPlot-&gt;xAxis-&gt;setLabel("Bottom axis with outward ticks");
    customPlot-&gt;yAxis-&gt;setLabel("Left axis label");
    customPlot-&gt;xAxis2-&gt;setLabel("Top axis label");
    customPlot-&gt;yAxis2-&gt;setLabel("Right axis label");

    customPlot-&gt;xAxis-&gt;setTickLength(0, 5);
    customPlot-&gt;xAxis-&gt;setSubTickLength(0, 3);

    customPlot-&gt;yAxis2-&gt;setTickLength(3, 3);
    customPlot-&gt;yAxis2-&gt;setSubTickLength(1, 1);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_multiaxis.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_multiaxis.gif"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-logarithmique"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe logarithmique</a></h2><br>Une <b>échelle logarithmique</b> est un système de graduation en progression géométrique. Chaque pas multiplie la valeur par une constante positive. De ce fait, la position sur l'axe d'une valeur est proportionnelle à son logarithme. Une échelle logarithmique est particulièrement adaptée pour rendre compte des ordres de grandeur dans les applications. Elle montre sur un petit espace une large gamme de valeurs, à condition qu'elles soient non nulles et de même signe. Les échelles logarithmiques servent soit pour effectuer des calculs analogiques, soit pour présenter des résultats sur des graphiques. <br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_logarithmic.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_logarithmic.gif"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-donnees-temps-reel"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe de données temps réel</a></h2><br>En informatique, on parle d'un système <b>temps réel</b> lorsque ce système est capable de contrôler (ou piloter) un procédé physique à une vitesse adaptée à l'évolution du procédé contrôlé. Les systèmes informatiques temps réel se différencient des autres systèmes informatiques par la prise en compte de contraintes temporelles dont le respect est aussi important que l'exactitude du résultat, autrement dit le système ne doit pas simplement délivrer des résultats exacts, il doit les délivrer dans des délais imposés. <br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();

private slots:
    void realtimeDataSlot();
    
private:
    QCustomPlot* customPlot;
    QTimer dataTimer;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;addGraph();
    customPlot-&gt;graph(0)-&gt;setPen(QPen(QColor(40, 110, 255)));
    customPlot-&gt;addGraph();
    customPlot-&gt;graph(1)-&gt;setPen(QPen(QColor(255, 110, 40)));

    QSharedPointer&lt;QCPAxisTickerTime&gt; timeTicker(new QCPAxisTickerTime);
    timeTicker-&gt;setTimeFormat("%h:%m:%s");
    customPlot-&gt;xAxis-&gt;setTicker(timeTicker);
    customPlot-&gt;axisRect()-&gt;setupFullAxesBox();
    customPlot-&gt;yAxis-&gt;setRange(-1.2, 1.2);

    connect(customPlot-&gt;xAxis, SIGNAL(rangeChanged(QCPRange)), customPlot-&gt;xAxis2, SLOT(setRange(QCPRange)));
    connect(customPlot-&gt;yAxis, SIGNAL(rangeChanged(QCPRange)), customPlot-&gt;yAxis2, SLOT(setRange(QCPRange)));

    connect(&amp;dataTimer, SIGNAL(timeout()), this, SLOT(realtimeDataSlot()));
    dataTimer.start(0);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================
void GWindow::realtimeDataSlot() {
    static QTime timeStart = QTime::currentTime();
    double key = timeStart.msecsTo(QTime::currentTime())/1000.0; 
    static double lastPointKey = 0;

    if (key-lastPointKey &gt; 0.002) {
        customPlot-&gt;graph(0)-&gt;addData(key, qSin(key)+std::rand()/(double)RAND_MAX*1*qSin(key/0.3843));
        customPlot-&gt;graph(1)-&gt;addData(key, qCos(key)+std::rand()/(double)RAND_MAX*0.5*qSin(key/0.4364));
        lastPointKey = key;
    }

    customPlot-&gt;xAxis-&gt;setRange(key, 8, Qt::AlignRight);
    customPlot-&gt;replot();

    static double lastFpsKey;
    static int frameCount;
    ++frameCount;

    if (key-lastFpsKey &gt; 2) {
        qDebug() &lt;&lt;
        QString("%1 FPS, Total Data points: %2")
        .arg(frameCount/(key-lastFpsKey), 0, 'f', 0)
        .arg(customPlot-&gt;graph(0)-&gt;data()-&gt;size()+customPlot-&gt;graph(1)-&gt;data()-&gt;size());
        lastFpsKey = key;
        frameCount = 0;
    }
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_realtime.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_realtime.gif"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-parametrique"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe paramétrique</a></h2><br>En mathématiques, une <b>représentation paramétrique</b> ou paramétrage d’un ensemble est sa description comme ensemble image d’une fonction d’une ou plusieurs variables appelées alors paramètres. Pour un ensemble de points du plan ou d’un espace de plus grande dimension muni d’un repère, l’expression des différentes composantes se décompose en équations paramétriques. En particulier, elle peut définir un chemin ou un ensemble géométrique ; comme une courbe ou une surface. Elle est importante en cinématique ; le paramètre est alors généralement le temps. Cette représentation est duale de la description de l’ensemble par des équations cartésiennes.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    QCPCurve *fermatSpiral1 = new QCPCurve(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    QCPCurve *fermatSpiral2 = new QCPCurve(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    QCPCurve *deltoidRadial = new QCPCurve(customPlot-&gt;xAxis, customPlot-&gt;yAxis);

    const int pointCount = 500;
    QVector&lt;QCPCurveData&gt; dataSpiral1(pointCount), dataSpiral2(pointCount), dataDeltoid(pointCount);
    for (int i=0; i&lt;pointCount; ++i) {
        double phi = i/(double)(pointCount-1)*8*M_PI;
        double theta = i/(double)(pointCount-1)*2*M_PI;
        dataSpiral1[i] = QCPCurveData(i, qSqrt(phi)*qCos(phi), qSqrt(phi)*qSin(phi));
        dataSpiral2[i] = QCPCurveData(i, -dataSpiral1[i].key, -dataSpiral1[i].value);
        dataDeltoid[i] = QCPCurveData(i, 2*qCos(2*theta)+qCos(1*theta)+2*qSin(theta), 2*qSin(2*theta)-qSin(1*theta));
    }

    fermatSpiral1-&gt;data()-&gt;set(dataSpiral1, true);
    fermatSpiral2-&gt;data()-&gt;set(dataSpiral2, true);
    deltoidRadial-&gt;data()-&gt;set(dataDeltoid, true);

    fermatSpiral1-&gt;setPen(QPen(Qt::blue));
    fermatSpiral1-&gt;setBrush(QBrush(QColor(0, 0, 255, 20)));
    fermatSpiral2-&gt;setPen(QPen(QColor(255, 120, 0)));
    fermatSpiral2-&gt;setBrush(QBrush(QColor(255, 120, 0, 30)));

    QRadialGradient radialGrad(QPointF(310, 180), 200);
    radialGrad.setColorAt(0, QColor(170, 20, 240, 100));
    radialGrad.setColorAt(0.5, QColor(20, 10, 255, 40));
    radialGrad.setColorAt(1,QColor(120, 20, 240, 10));

    deltoidRadial-&gt;setPen(QPen(QColor(170, 20, 240)));
    deltoidRadial-&gt;setBrush(QBrush(radialGrad));

    customPlot-&gt;setInteractions(QCP::iRangeDrag | QCP::iRangeZoom | QCP::iSelectPlottables);
    customPlot-&gt;axisRect()-&gt;setupFullAxesBox();
    customPlot-&gt;rescaleAxes();

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_curveparametric.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_curveparametric.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-barres"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe à barres</a></h2><br>Un <b>diagramme à barres</b> (ou en barres), également appelé diagramme à bâtons (ou en bâtons), est un graphique qui présente des variables catégorielles avec des barres rectangulaires avec des hauteurs ou des longueurs proportionnelles aux valeurs qu'elles représentent. Les barres peuvent être tracées verticalement ou horizontalement. Un diagramme à barres montre des comparaisons entre des catégories discrètes. Un axe du diagramme montre les catégories spécifiques comparées et l'autre axe représente une valeur mesurée. Certains diagrammes à barres présentent des barres regroupées, indiquant les valeurs de plusieurs variables mesurées.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    QLinearGradient gradient(0, 0, 0, 400);
    gradient.setColorAt(0, QColor(90, 90, 90));
    gradient.setColorAt(0.38, QColor(105, 105, 105));
    gradient.setColorAt(1, QColor(70, 70, 70));
    customPlot-&gt;setBackground(QBrush(gradient));

    QCPBars *regen = new QCPBars(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    QCPBars *nuclear = new QCPBars(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    QCPBars *fossil = new QCPBars(customPlot-&gt;xAxis, customPlot-&gt;yAxis);

    regen-&gt;setAntialiased(false); 
    nuclear-&gt;setAntialiased(false);
    fossil-&gt;setAntialiased(false);

    regen-&gt;setStackingGap(1);
    nuclear-&gt;setStackingGap(1);
    fossil-&gt;setStackingGap(1);

    fossil-&gt;setName("Fossil fuels");
    fossil-&gt;setPen(QPen(QColor(111, 9, 176).lighter(170)));
    fossil-&gt;setBrush(QColor(111, 9, 176));

    nuclear-&gt;setName("Nuclear");
    nuclear-&gt;setPen(QPen(QColor(250, 170, 20).lighter(150)));
    nuclear-&gt;setBrush(QColor(250, 170, 20));

    regen-&gt;setName("Regenerative");
    regen-&gt;setPen(QPen(QColor(0, 168, 140).lighter(130)));
    regen-&gt;setBrush(QColor(0, 168, 140));

    nuclear-&gt;moveAbove(fossil);
    regen-&gt;moveAbove(nuclear);

    QVector&lt;double&gt; ticks;
    QVector&lt;QString&gt; labels;
    ticks &lt;&lt; 1 &lt;&lt; 2 &lt;&lt; 3 &lt;&lt; 4 &lt;&lt; 5 &lt;&lt; 6 &lt;&lt; 7;
    labels &lt;&lt; "USA" &lt;&lt; "Japan" &lt;&lt; "Germany" &lt;&lt; "France" &lt;&lt; "UK" &lt;&lt; "Italy" &lt;&lt; "Canada";
    QSharedPointer&lt;QCPAxisTickerText&gt; textTicker(new QCPAxisTickerText);
    textTicker-&gt;addTicks(ticks, labels);
    customPlot-&gt;xAxis-&gt;setTicker(textTicker);
    customPlot-&gt;xAxis-&gt;setTickLabelRotation(60);
    customPlot-&gt;xAxis-&gt;setSubTicks(false);
    customPlot-&gt;xAxis-&gt;setTickLength(0, 4);
    customPlot-&gt;xAxis-&gt;setRange(0, 8);
    customPlot-&gt;xAxis-&gt;setBasePen(QPen(Qt::white));
    customPlot-&gt;xAxis-&gt;setTickPen(QPen(Qt::white));
    customPlot-&gt;xAxis-&gt;grid()-&gt;setVisible(true);
    customPlot-&gt;xAxis-&gt;grid()-&gt;setPen(QPen(QColor(130, 130, 130), 0, Qt::DotLine));
    customPlot-&gt;xAxis-&gt;setTickLabelColor(Qt::white);
    customPlot-&gt;xAxis-&gt;setLabelColor(Qt::white);

    customPlot-&gt;yAxis-&gt;setRange(0, 12.1);
    customPlot-&gt;yAxis-&gt;setPadding(5); 
    customPlot-&gt;yAxis-&gt;setLabel("Power Consumption in\nKilowatts per Capita (2007)");
    customPlot-&gt;yAxis-&gt;setBasePen(QPen(Qt::white));
    customPlot-&gt;yAxis-&gt;setTickPen(QPen(Qt::white));
    customPlot-&gt;yAxis-&gt;setSubTickPen(QPen(Qt::white));
    customPlot-&gt;yAxis-&gt;grid()-&gt;setSubGridVisible(true);
    customPlot-&gt;yAxis-&gt;setTickLabelColor(Qt::white);
    customPlot-&gt;yAxis-&gt;setLabelColor(Qt::white);
    customPlot-&gt;yAxis-&gt;grid()-&gt;setPen(QPen(QColor(130, 130, 130), 0, Qt::SolidLine));
    customPlot-&gt;yAxis-&gt;grid()-&gt;setSubGridPen(QPen(QColor(130, 130, 130), 0, Qt::DotLine));

    QVector&lt;double&gt; fossilData, nuclearData, regenData;
    fossilData  &lt;&lt; 0.86*10.5 &lt;&lt; 0.83*5.5 &lt;&lt; 0.84*5.5 &lt;&lt; 0.52*5.8 &lt;&lt; 0.89*5.2 &lt;&lt; 0.90*4.2 &lt;&lt; 0.67*11.2;
    nuclearData &lt;&lt; 0.08*10.5 &lt;&lt; 0.12*5.5 &lt;&lt; 0.12*5.5 &lt;&lt; 0.40*5.8 &lt;&lt; 0.09*5.2 &lt;&lt; 0.00*4.2 &lt;&lt; 0.07*11.2;
    regenData   &lt;&lt; 0.06*10.5 &lt;&lt; 0.05*5.5 &lt;&lt; 0.04*5.5 &lt;&lt; 0.06*5.8 &lt;&lt; 0.02*5.2 &lt;&lt; 0.07*4.2 &lt;&lt; 0.25*11.2;
    fossil-&gt;setData(ticks, fossilData);
    nuclear-&gt;setData(ticks, nuclearData);
    regen-&gt;setData(ticks, regenData);

    customPlot-&gt;legend-&gt;setVisible(true);
    customPlot-&gt;axisRect()-&gt;insetLayout()-&gt;setInsetAlignment(0, Qt::AlignTop|Qt::AlignHCenter);
    customPlot-&gt;legend-&gt;setBrush(QColor(255, 255, 255, 100));
    customPlot-&gt;legend-&gt;setBorderPen(Qt::NoPen);
    QFont legendFont = font();
    legendFont.setPointSize(10);
    customPlot-&gt;legend-&gt;setFont(legendFont);
    customPlot-&gt;setInteractions(QCP::iRangeDrag | QCP::iRangeZoom);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_barchart.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_barchart.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-moustaches"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe à moustaches</a></h2><br>Dans les représentations graphiques de données statistiques, la <b>boîte à moustaches</b> (aussi appelée diagramme en boîte, boîte de Tukey ou box-and-whisker plot, plus simplement box plot en anglais) est un moyen rapide de figurer le profil essentiel d'une série statistique quantitative. Elle a été inventée en 1977 par John Tukey, mais peut faire l'objet de certains aménagements selon les utilisateurs. Son nom est la traduction de Box and Whiskers Plot. La boîte à moustaches résume seulement quelques indicateurs de position du caractère étudié (médiane, quartiles, minimum, maximum ou déciles). Ce diagramme est utilisé principalement pour comparer un même caractère dans deux populations de tailles différentes.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;setInteractions(QCP::iRangeDrag | QCP::iRangeZoom);

    QCPStatisticalBox *statistical = new QCPStatisticalBox(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    QBrush boxBrush(QColor(60, 60, 255, 100));
    boxBrush.setStyle(Qt::Dense6Pattern); 
    statistical-&gt;setBrush(boxBrush);

    statistical-&gt;addData(1, 1.1, 1.9, 2.25, 2.7, 4.2);
    statistical-&gt;addData(2, 0.8, 1.6, 2.2, 3.2, 4.9, 
    QVector&lt;double&gt;() &lt;&lt; 0.7 &lt;&lt; 0.34 &lt;&lt; 0.45 &lt;&lt; 6.2 &lt;&lt; 5.84); 
    statistical-&gt;addData(3, 0.2, 0.7, 1.1, 1.6, 2.9);

    customPlot-&gt;xAxis-&gt;setSubTicks(false);
    customPlot-&gt;xAxis-&gt;setTickLength(0, 4);
    customPlot-&gt;xAxis-&gt;setTickLabelRotation(20);
    QSharedPointer&lt;QCPAxisTickerText&gt; textTicker(new QCPAxisTickerText);
    textTicker-&gt;addTick(1, "Sample 1");
    textTicker-&gt;addTick(2, "Sample 2");
    textTicker-&gt;addTick(3, "Control Group");
    customPlot-&gt;xAxis-&gt;setTicker(textTicker);

    customPlot-&gt;yAxis-&gt;setLabel(QString::fromUtf8("O₂ Absorption [mg]"));
    customPlot-&gt;rescaleAxes();
    customPlot-&gt;xAxis-&gt;scaleRange(1.7, customPlot-&gt;xAxis-&gt;range().center());
    customPlot-&gt;yAxis-&gt;setRange(0, 7);
    customPlot-&gt;setInteractions(QCP::iRangeDrag | QCP::iRangeZoom);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_boxplot.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_boxplot.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-texte"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec un texte</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;setInteractions(QCP::iRangeDrag | QCP::iRangeZoom);


    QCPItemText *textLabel = new QCPItemText(customPlot);
    textLabel-&gt;setPositionAlignment(Qt::AlignTop|Qt::AlignHCenter);
    textLabel-&gt;position-&gt;setType(QCPItemPosition::ptAxisRectRatio);
    textLabel-&gt;position-&gt;setCoords(0.5, 0); 
    textLabel-&gt;setText("Text Item Demo");
    textLabel-&gt;setFont(QFont(font().family(), 16));
    textLabel-&gt;setPen(QPen(Qt::black)); 

    QCPItemLine *arrow = new QCPItemLine(customPlot);
    arrow-&gt;start-&gt;setParentAnchor(textLabel-&gt;bottom);
    arrow-&gt;end-&gt;setCoords(4, 1.6); 
    arrow-&gt;setHead(QCPLineEnding::esSpikeArrow);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_text.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_text.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-style"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe stylé</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    QVector&lt;double&gt; x1(20), y1(20);
    QVector&lt;double&gt; x2(100), y2(100);
    QVector&lt;double&gt; x3(20), y3(20);
    QVector&lt;double&gt; x4(20), y4(20);
    for (int i=0; i&lt;x1.size(); ++i) {
        x1[i] = i/(double)(x1.size()-1)*10;
        y1[i] = qCos(x1[i]*0.8+qSin(x1[i]*0.16+1.0))*qSin(x1[i]*0.54)+1.4;
    }
    for (int i=0; i&lt;x2.size(); ++i) {
        x2[i] = i/(double)(x2.size()-1)*10;
        y2[i] = qCos(x2[i]*0.85+qSin(x2[i]*0.165+1.1))*qSin(x2[i]*0.50)+1.7;
    }
    for (int i=0; i&lt;x3.size(); ++i) {
        x3[i] = i/(double)(x3.size()-1)*10;
        y3[i] = 0.05+3*(0.5+qCos(x3[i]*x3[i]*0.2+2)*0.5)/(double)(x3[i]+0.7)+std::rand()/(double)RAND_MAX*0.01;
    }
    for (int i=0; i&lt;x4.size(); ++i) {
        x4[i] = x3[i];
        y4[i] = (0.5-y3[i])+((x4[i]-2)*(x4[i]-2)*0.02);
    }

    QCPGraph *graph1 = customPlot-&gt;addGraph();
    graph1-&gt;setData(x1, y1);
    graph1-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, QPen(Qt::black, 1.5), QBrush(Qt::white), 9));
    graph1-&gt;setPen(QPen(QColor(120, 120, 120), 2));

    QCPGraph *graph2 = customPlot-&gt;addGraph();
    graph2-&gt;setData(x2, y2);
    graph2-&gt;setPen(Qt::NoPen);
    graph2-&gt;setBrush(QColor(200, 200, 200, 20));
    graph2-&gt;setChannelFillGraph(graph1);

    QCPBars *bars1 = new QCPBars(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    bars1-&gt;setWidth(9/(double)x3.size());
    bars1-&gt;setData(x3, y3);
    bars1-&gt;setPen(Qt::NoPen);
    bars1-&gt;setBrush(QColor(10, 140, 70, 160));

    QCPBars *bars2 = new QCPBars(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    bars2-&gt;setWidth(9/(double)x4.size());
    bars2-&gt;setData(x4, y4);
    bars2-&gt;setPen(Qt::NoPen);
    bars2-&gt;setBrush(QColor(10, 100, 50, 70));
    bars2-&gt;moveAbove(bars1);

    customPlot-&gt;addLayer("abovemain", customPlot-&gt;layer("main"), QCustomPlot::limAbove);
    customPlot-&gt;addLayer("belowmain", customPlot-&gt;layer("main"), QCustomPlot::limBelow);
    graph1-&gt;setLayer("abovemain");
    customPlot-&gt;xAxis-&gt;grid()-&gt;setLayer("belowmain");
    customPlot-&gt;yAxis-&gt;grid()-&gt;setLayer("belowmain");

    customPlot-&gt;xAxis-&gt;setBasePen(QPen(Qt::white, 1));
    customPlot-&gt;yAxis-&gt;setBasePen(QPen(Qt::white, 1));
    customPlot-&gt;xAxis-&gt;setTickPen(QPen(Qt::white, 1));
    customPlot-&gt;yAxis-&gt;setTickPen(QPen(Qt::white, 1));
    customPlot-&gt;xAxis-&gt;setSubTickPen(QPen(Qt::white, 1));
    customPlot-&gt;yAxis-&gt;setSubTickPen(QPen(Qt::white, 1));
    customPlot-&gt;xAxis-&gt;setTickLabelColor(Qt::white);
    customPlot-&gt;yAxis-&gt;setTickLabelColor(Qt::white);
    customPlot-&gt;xAxis-&gt;grid()-&gt;setPen(QPen(QColor(140, 140, 140), 1, Qt::DotLine));
    customPlot-&gt;yAxis-&gt;grid()-&gt;setPen(QPen(QColor(140, 140, 140), 1, Qt::DotLine));
    customPlot-&gt;xAxis-&gt;grid()-&gt;setSubGridPen(QPen(QColor(80, 80, 80), 1, Qt::DotLine));
    customPlot-&gt;yAxis-&gt;grid()-&gt;setSubGridPen(QPen(QColor(80, 80, 80), 1, Qt::DotLine));
    customPlot-&gt;xAxis-&gt;grid()-&gt;setSubGridVisible(true);
    customPlot-&gt;yAxis-&gt;grid()-&gt;setSubGridVisible(true);
    customPlot-&gt;xAxis-&gt;grid()-&gt;setZeroLinePen(Qt::NoPen);
    customPlot-&gt;yAxis-&gt;grid()-&gt;setZeroLinePen(Qt::NoPen);
    customPlot-&gt;xAxis-&gt;setUpperEnding(QCPLineEnding::esSpikeArrow);
    customPlot-&gt;yAxis-&gt;setUpperEnding(QCPLineEnding::esSpikeArrow);

    QLinearGradient plotGradient;
    plotGradient.setStart(0, 0);
    plotGradient.setFinalStop(0, 350);
    plotGradient.setColorAt(0, QColor(80, 80, 80));
    plotGradient.setColorAt(1, QColor(50, 50, 50));
    customPlot-&gt;setBackground(plotGradient);

    QLinearGradient axisRectGradient;
    axisRectGradient.setStart(0, 0);
    axisRectGradient.setFinalStop(0, 350);
    axisRectGradient.setColorAt(0, QColor(80, 80, 80));
    axisRectGradient.setColorAt(1, QColor(30, 30, 30));
    customPlot-&gt;axisRect()-&gt;setBackground(axisRectGradient);

    customPlot-&gt;rescaleAxes();
    customPlot-&gt;yAxis-&gt;setRange(0, 2);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_style.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_style.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-plusieurs-niveaux-d-affichage"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec plusieurs niveaux d'affichage</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;plotLayout()-&gt;clear(); 

    QCPAxisRect *wideAxisRect = new QCPAxisRect(customPlot);
    wideAxisRect-&gt;setupFullAxesBox(true);
    wideAxisRect-&gt;axis(QCPAxis::atRight, 0)-&gt;setTickLabels(true);
    wideAxisRect-&gt;addAxis(QCPAxis::atLeft)-&gt;setTickLabelColor(QColor("#6050F8")); // add an extra axis on the left and color its numbers
    QCPLayoutGrid *subLayout = new QCPLayoutGrid;
    customPlot-&gt;plotLayout()-&gt;addElement(0, 0, wideAxisRect); 
    customPlot-&gt;plotLayout()-&gt;addElement(1, 0, subLayout); 

    QCPAxisRect *subRectLeft = new QCPAxisRect(customPlot, false); 
    QCPAxisRect *subRectRight = new QCPAxisRect(customPlot, false);
    subLayout-&gt;addElement(0, 0, subRectLeft);
    subLayout-&gt;addElement(0, 1, subRectRight);
    subRectRight-&gt;setMaximumSize(100, 100); 
    subRectRight-&gt;setMinimumSize(100, 100); 

    subRectLeft-&gt;addAxes(QCPAxis::atBottom | QCPAxis::atLeft);
    subRectRight-&gt;addAxes(QCPAxis::atBottom | QCPAxis::atRight);
    subRectLeft-&gt;axis(QCPAxis::atLeft)-&gt;ticker()-&gt;setTickCount(2);
    subRectRight-&gt;axis(QCPAxis::atRight)-&gt;ticker()-&gt;setTickCount(2);
    subRectRight-&gt;axis(QCPAxis::atBottom)-&gt;ticker()-&gt;setTickCount(2);
    subRectLeft-&gt;axis(QCPAxis::atBottom)-&gt;grid()-&gt;setVisible(true);

    QCPMarginGroup *marginGroup = new QCPMarginGroup(customPlot);
    subRectLeft-&gt;setMarginGroup(QCP::msLeft, marginGroup);
    subRectRight-&gt;setMarginGroup(QCP::msRight, marginGroup);
    wideAxisRect-&gt;setMarginGroup(QCP::msLeft | QCP::msRight, marginGroup);

    foreach (QCPAxisRect *rect, customPlot-&gt;axisRects()) {
        foreach (QCPAxis *axis, rect-&gt;axes()) {
            axis-&gt;setLayer("axes");
            axis-&gt;grid()-&gt;setLayer("grid");
        }
    }

    QVector&lt;QCPGraphData&gt; dataCos(21), dataGauss(50), dataRandom(100);
    QVector&lt;double&gt; x3, y3;
    std::srand(3);
    for (int i=0; i&lt;dataCos.size(); ++i) {
        dataCos[i].key = i/(double)(dataCos.size()-1)*10-5.0;
        dataCos[i].value = qCos(dataCos[i].key);
    }
    for (int i=0; i&lt;dataGauss.size(); ++i) {
        dataGauss[i].key = i/(double)dataGauss.size()*10-5.0;
        dataGauss[i].value = qExp(-dataGauss[i].key*dataGauss[i].key*0.2)*1000;
    }
    for (int i=0; i&lt;dataRandom.size(); ++i) {
        dataRandom[i].key = i/(double)dataRandom.size()*10;
        dataRandom[i].value = std::rand()/(double)RAND_MAX-0.5+dataRandom[qMax(0, i-1)].value;
    }
    x3 &lt;&lt; 1 &lt;&lt; 2 &lt;&lt; 3 &lt;&lt; 4;
    y3 &lt;&lt; 2 &lt;&lt; 2.5 &lt;&lt; 4 &lt;&lt; 1.5;

    QCPGraph *mainGraphCos = customPlot-&gt;addGraph(wideAxisRect-&gt;axis(QCPAxis::atBottom), wideAxisRect-&gt;axis(QCPAxis::atLeft));
    mainGraphCos-&gt;data()-&gt;set(dataCos);
    mainGraphCos-&gt;valueAxis()-&gt;setRange(-1, 1);
    mainGraphCos-&gt;rescaleKeyAxis();
    mainGraphCos-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, QPen(Qt::black), QBrush(Qt::white), 6));
    mainGraphCos-&gt;setPen(QPen(QColor(120, 120, 120), 2));

    QCPGraph *mainGraphGauss = customPlot-&gt;addGraph(wideAxisRect-&gt;axis(QCPAxis::atBottom), wideAxisRect-&gt;axis(QCPAxis::atLeft, 1));
    mainGraphGauss-&gt;data()-&gt;set(dataGauss);
    mainGraphGauss-&gt;setPen(QPen(QColor("#8070B8"), 2));
    mainGraphGauss-&gt;setBrush(QColor(110, 170, 110, 30));

    mainGraphCos-&gt;setChannelFillGraph(mainGraphGauss);
    mainGraphCos-&gt;setBrush(QColor(255, 161, 0, 50));
    mainGraphGauss-&gt;valueAxis()-&gt;setRange(0, 1000);
    mainGraphGauss-&gt;rescaleKeyAxis();

    QCPGraph *subGraphRandom = customPlot-&gt;addGraph(subRectLeft-&gt;axis(QCPAxis::atBottom), subRectLeft-&gt;axis(QCPAxis::atLeft));
    subGraphRandom-&gt;data()-&gt;set(dataRandom);
    subGraphRandom-&gt;setLineStyle(QCPGraph::lsImpulse);
    subGraphRandom-&gt;setPen(QPen(QColor("#FFA100"), 1.5));
    subGraphRandom-&gt;rescaleAxes();

    QCPBars *subBars = new QCPBars(subRectRight-&gt;axis(QCPAxis::atBottom), subRectRight-&gt;axis(QCPAxis::atRight));
    subBars-&gt;setWidth(3/(double)x3.size());
    subBars-&gt;setData(x3, y3);
    subBars-&gt;setPen(QPen(Qt::black));
    subBars-&gt;setAntialiased(false);
    subBars-&gt;setAntialiasedFill(false);
    subBars-&gt;setBrush(QColor("#705BE8"));
    subBars-&gt;keyAxis()-&gt;setSubTicks(false);
    subBars-&gt;rescaleAxes();

    QSharedPointer&lt;QCPAxisTickerFixed&gt; intTicker(new QCPAxisTickerFixed);
    intTicker-&gt;setTickStep(1.0);
    intTicker-&gt;setScaleStrategy(QCPAxisTickerFixed::ssMultiples);
    subBars-&gt;keyAxis()-&gt;setTicker(intTicker);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_advanced.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_advanced.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-cartagraphie-de-couleurs"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe de cartagraphie de couleurs</a></h2><br>Une <b>carte thermique</b> (ou heatmap ) est une technique de visualisation de données qui montre l'ampleur d'un phénomène sous forme de couleur en deux dimensions. La variation de couleur peut être par teinte ou intensité, donnant au lecteur des indices visuels évidents sur la façon dont le phénomène est groupé ou varie dans l'espace. Il existe deux catégories de cartes thermiques fondamentalement différentes : la carte thermique des clusters et la carte thermique spatiale.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;setInteractions(QCP::iRangeDrag|QCP::iRangeZoom); 
    customPlot-&gt;axisRect()-&gt;setupFullAxesBox(true);
    customPlot-&gt;xAxis-&gt;setLabel("x");
    customPlot-&gt;yAxis-&gt;setLabel("y");

    QCPColorMap *colorMap = new QCPColorMap(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    int nx = 200;
    int ny = 200;
    colorMap-&gt;data()-&gt;setSize(nx, ny); 
    colorMap-&gt;data()-&gt;setRange(QCPRange(-4, 4), QCPRange(-4, 4)); 

    double x, y, z;
    for (int xIndex=0; xIndex&lt;nx; ++xIndex) {
        for (int yIndex=0; yIndex&lt;ny; ++yIndex) {
            colorMap-&gt;data()-&gt;cellToCoord(xIndex, yIndex, &amp;x, &amp;y);
            double r = 3*qSqrt(x*x+y*y)+1e-2;
            z = 2*x*(qCos(r+2)/r-qSin(r+2)/r); 
            colorMap-&gt;data()-&gt;setCell(xIndex, yIndex, z);
        }
    }

    QCPColorScale *colorScale = new QCPColorScale(customPlot);
    customPlot-&gt;plotLayout()-&gt;addElement(0, 1, colorScale); 
    colorScale-&gt;setType(QCPAxis::atRight); 
    colorMap-&gt;setColorScale(colorScale); 
    colorScale-&gt;axis()-&gt;setLabel("Magnetic Field Strength");

    colorMap-&gt;setGradient(QCPColorGradient::gpPolar);
    colorMap-&gt;rescaleDataRange();

    QCPMarginGroup *marginGroup = new QCPMarginGroup(customPlot);
    customPlot-&gt;axisRect()-&gt;setMarginGroup(QCP::msBottom|QCP::msTop, marginGroup);
    colorScale-&gt;setMarginGroup(QCP::msBottom|QCP::msTop, marginGroup);

    customPlot-&gt;rescaleAxes();

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_colormap.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_colormap.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-en-analyse-financiere"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe en analyse financière</a></h2><br>En finance , l'<b>analyse technique</b> est une méthodologie d'analyse permettant de prévoir la direction des prix grâce à l'étude de données de marché passées, principalement de prix et de volume. L'économie comportementale et l'analyse quantitative utilisent bon nombre des mêmes outils d'analyse technique, qui, étant un aspect de la gestion active , sont en contradiction avec une grande partie de la théorie moderne du portefeuille.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;legend-&gt;setVisible(true);

    int n = 500;
    QVector&lt;double&gt; time(n), value1(n), value2(n);
    QDateTime start(QDate(2014, 6, 11), QTime(0, 0));
    start.setTimeSpec(Qt::UTC);
    double startTime = start.toMSecsSinceEpoch()/1000.0;
    double binSize = 3600*24; 

    time[0] = startTime;
    value1[0] = 60;
    value2[0] = 20;
    std::srand(9);

    for (int i=1; i&lt;n; ++i) {
        time[i] = startTime + 3600*i;
        value1[i] = value1[i-1] + (std::rand()/(double)RAND_MAX-0.5)*10;
        value2[i] = value2[i-1] + (std::rand()/(double)RAND_MAX-0.5)*3;
    }

    QCPFinancial *candlesticks = new QCPFinancial(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    candlesticks-&gt;setName("Candlestick");
    candlesticks-&gt;setChartStyle(QCPFinancial::csCandlestick);
    candlesticks-&gt;data()-&gt;set(QCPFinancial::timeSeriesToOhlc(time, value1, binSize, startTime));
    candlesticks-&gt;setWidth(binSize*0.9);
    candlesticks-&gt;setTwoColored(true);
    candlesticks-&gt;setBrushPositive(QColor(245, 245, 245));
    candlesticks-&gt;setBrushNegative(QColor(40, 40, 40));
    candlesticks-&gt;setPenPositive(QPen(QColor(0, 0, 0)));
    candlesticks-&gt;setPenNegative(QPen(QColor(0, 0, 0)));

    QCPFinancial *ohlc = new QCPFinancial(customPlot-&gt;xAxis, customPlot-&gt;yAxis);
    ohlc-&gt;setName("OHLC");
    ohlc-&gt;setChartStyle(QCPFinancial::csOhlc);
    ohlc-&gt;data()-&gt;set(QCPFinancial::timeSeriesToOhlc(time, value2, binSize/3.0, startTime)); 
    ohlc-&gt;setWidth(binSize*0.2);
    ohlc-&gt;setTwoColored(true);

    QCPAxisRect *volumeAxisRect = new QCPAxisRect(customPlot);
    customPlot-&gt;plotLayout()-&gt;addElement(1, 0, volumeAxisRect);
    volumeAxisRect-&gt;setMaximumSize(QSize(QWIDGETSIZE_MAX, 100));
    volumeAxisRect-&gt;axis(QCPAxis::atBottom)-&gt;setLayer("axes");
    volumeAxisRect-&gt;axis(QCPAxis::atBottom)-&gt;grid()-&gt;setLayer("grid");
    customPlot-&gt;plotLayout()-&gt;setRowSpacing(0);
    volumeAxisRect-&gt;setAutoMargins(QCP::msLeft|QCP::msRight|QCP::msBottom);
    volumeAxisRect-&gt;setMargins(QMargins(0, 0, 0, 0));

    customPlot-&gt;setAutoAddPlottableToLegend(false);
    QCPBars *volumePos = new QCPBars(volumeAxisRect-&gt;axis(QCPAxis::atBottom), volumeAxisRect-&gt;axis(QCPAxis::atLeft));
    QCPBars *volumeNeg = new QCPBars(volumeAxisRect-&gt;axis(QCPAxis::atBottom), volumeAxisRect-&gt;axis(QCPAxis::atLeft));
    for (int i=0; i&lt;n/5; ++i) {
        int v = std::rand()%20000+std::rand()%20000+std::rand()%20000-10000*3;
        (v &lt; 0 ? volumeNeg : volumePos)-&gt;addData(startTime+3600*5.0*i, qAbs(v)); 
    }

    volumePos-&gt;setWidth(3600*4);
    volumePos-&gt;setPen(Qt::NoPen);
    volumePos-&gt;setBrush(QColor(100, 180, 110));
    volumeNeg-&gt;setWidth(3600*4);
    volumeNeg-&gt;setPen(Qt::NoPen);
    volumeNeg-&gt;setBrush(QColor(180, 90, 90));

    connect(customPlot-&gt;xAxis, SIGNAL(rangeChanged(QCPRange)), volumeAxisRect-&gt;axis(QCPAxis::atBottom), SLOT(setRange(QCPRange)));
    connect(volumeAxisRect-&gt;axis(QCPAxis::atBottom), SIGNAL(rangeChanged(QCPRange)), customPlot-&gt;xAxis, SLOT(setRange(QCPRange)));

    QSharedPointer&lt;QCPAxisTickerDateTime&gt; dateTimeTicker(new QCPAxisTickerDateTime);
    dateTimeTicker-&gt;setDateTimeSpec(Qt::UTC);
    dateTimeTicker-&gt;setDateTimeFormat("dd. MMMM");
    volumeAxisRect-&gt;axis(QCPAxis::atBottom)-&gt;setTicker(dateTimeTicker);
    volumeAxisRect-&gt;axis(QCPAxis::atBottom)-&gt;setTickLabelRotation(15);
    customPlot-&gt;xAxis-&gt;setBasePen(Qt::NoPen);
    customPlot-&gt;xAxis-&gt;setTickLabels(false);
    customPlot-&gt;xAxis-&gt;setTicks(false); 
    customPlot-&gt;xAxis-&gt;setTicker(dateTimeTicker);
    customPlot-&gt;rescaleAxes();
    customPlot-&gt;xAxis-&gt;scaleRange(1.025, customPlot-&gt;xAxis-&gt;range().center());
    customPlot-&gt;yAxis-&gt;scaleRange(1.1, customPlot-&gt;yAxis-&gt;range().center());

    QCPMarginGroup *group = new QCPMarginGroup(customPlot);
    customPlot-&gt;axisRect()-&gt;setMarginGroup(QCP::msLeft|QCP::msRight, group);
    volumeAxisRect-&gt;setMarginGroup(QCP::msLeft|QCP::msRight, group);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_financial.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_financial.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-polaire"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe polaire</a></h2><br>Les <b>coordonnées polaires</b> sont, en mathématiques, un système de coordonnées curvilignes à deux dimensions, dans lequel chaque point du plan est entièrement déterminé par un angle et une distance. Ce système est particulièrement utile dans les situations où la relation entre deux points est plus facile à exprimer en termes d’angle et de distance, comme dans le cas du pendule. Dans ce cas, le système des coordonnées cartésiennes, plus familier, impliquerait d’utiliser des formules trigonométriques pour exprimer une telle relation.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    QCustomPlot* customPlot;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;plotLayout()-&gt;clear();
    QCPPolarAxisAngular *angularAxis = new QCPPolarAxisAngular(customPlot);
    customPlot-&gt;plotLayout()-&gt;addElement(0, 0, angularAxis);

    customPlot-&gt;setInteractions(QCP::iRangeDrag | QCP::iRangeZoom);
    angularAxis-&gt;setRangeDrag(false);
    angularAxis-&gt;setTickLabelMode(QCPPolarAxisAngular::lmUpright);

    angularAxis-&gt;radialAxis()-&gt;setTickLabelMode(QCPPolarAxisRadial::lmUpright);
    angularAxis-&gt;radialAxis()-&gt;setTickLabelRotation(0);
    angularAxis-&gt;radialAxis()-&gt;setAngle(45);

    angularAxis-&gt;grid()-&gt;setAngularPen(QPen(QColor(200, 200, 200), 0, Qt::SolidLine));
    angularAxis-&gt;grid()-&gt;setSubGridType(QCPPolarGrid::gtAll);

    QCPPolarGraph *g1 = new QCPPolarGraph(angularAxis, angularAxis-&gt;radialAxis());
    QCPPolarGraph *g2 = new QCPPolarGraph(angularAxis, angularAxis-&gt;radialAxis());
    g2-&gt;setPen(QPen(QColor(255, 150, 20)));
    g2-&gt;setBrush(QColor(255, 150, 20, 50));
    g1-&gt;setScatterStyle(QCPScatterStyle::ssDisc);
    for (int i=0; i&lt;100; ++i) {
        g1-&gt;addData(i/100.0*360.0, qSin(i/100.0*M_PI*8)*8+1);
        g2-&gt;addData(i/100.0*360.0, qSin(i/100.0*M_PI*6)*2);
    }
    angularAxis-&gt;setRange(0, 360);
    angularAxis-&gt;radialAxis()-&gt;setRange(-10, 10);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_polar.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_polar.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-accolades"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec des accolades</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();
    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private slots:
    void bracketDataSlot();

private:
    QCustomPlot* customPlot;
    QTimer dataTimer;
    QCPItemTracer *itemDemoPhaseTracer;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    customPlot-&gt;setInteractions(QCP::iRangeDrag | QCP::iRangeZoom);
    QCPGraph *graph = customPlot-&gt;addGraph();
    int n = 500;
    double phase = 0;
    double k = 3;
    QVector&lt;double&gt; x(n), y(n);
    for (int i=0; i&lt;n; ++i) {
        x[i] = i/(double)(n-1)*34 - 17;
        y[i] = qExp(-x[i]*x[i]/20.0)*qSin(k*x[i]+phase);
    }
    graph-&gt;setData(x, y);
    graph-&gt;setPen(QPen(Qt::blue));
    graph-&gt;rescaleKeyAxis();
    customPlot-&gt;yAxis-&gt;setRange(-1.45, 1.65);
    customPlot-&gt;xAxis-&gt;grid()-&gt;setZeroLinePen(Qt::NoPen);

    QCPItemBracket *bracket = new QCPItemBracket(customPlot);
    bracket-&gt;left-&gt;setCoords(-8, 1.1);
    bracket-&gt;right-&gt;setCoords(8, 1.1);
    bracket-&gt;setLength(13);

    QCPItemText *wavePacketText = new QCPItemText(customPlot);
    wavePacketText-&gt;position-&gt;setParentAnchor(bracket-&gt;center);
    wavePacketText-&gt;position-&gt;setCoords(0, -10); 
    wavePacketText-&gt;setPositionAlignment(Qt::AlignBottom|Qt::AlignHCenter);
    wavePacketText-&gt;setText("Wavepacket");
    wavePacketText-&gt;setFont(QFont(font().family(), 10));

    QCPItemTracer *phaseTracer = new QCPItemTracer(customPlot);
    itemDemoPhaseTracer = phaseTracer; 
    phaseTracer-&gt;setGraph(graph);
    phaseTracer-&gt;setGraphKey((M_PI*1.5-phase)/k);
    phaseTracer-&gt;setInterpolating(true);
    phaseTracer-&gt;setStyle(QCPItemTracer::tsCircle);
    phaseTracer-&gt;setPen(QPen(Qt::red));
    phaseTracer-&gt;setBrush(Qt::red);
    phaseTracer-&gt;setSize(7);

    QCPItemText *phaseTracerText = new QCPItemText(customPlot);
    phaseTracerText-&gt;position-&gt;setType(QCPItemPosition::ptAxisRectRatio);
    phaseTracerText-&gt;setPositionAlignment(Qt::AlignRight|Qt::AlignBottom);
    phaseTracerText-&gt;position-&gt;setCoords(1.0, 0.95); 
    phaseTracerText-&gt;setText("Points of fixed\nphase define\nphase velocity vp");
    phaseTracerText-&gt;setTextAlignment(Qt::AlignLeft);
    phaseTracerText-&gt;setFont(QFont(font().family(), 9));
    phaseTracerText-&gt;setPadding(QMargins(8, 0, 0, 0));

    QCPItemCurve *phaseTracerArrow = new QCPItemCurve(customPlot);
    phaseTracerArrow-&gt;start-&gt;setParentAnchor(phaseTracerText-&gt;left);
    phaseTracerArrow-&gt;startDir-&gt;setParentAnchor(phaseTracerArrow-&gt;start);
    phaseTracerArrow-&gt;startDir-&gt;setCoords(-40, 0); 
    phaseTracerArrow-&gt;end-&gt;setParentAnchor(phaseTracer-&gt;position);
    phaseTracerArrow-&gt;end-&gt;setCoords(10, 10);
    phaseTracerArrow-&gt;endDir-&gt;setParentAnchor(phaseTracerArrow-&gt;end);
    phaseTracerArrow-&gt;endDir-&gt;setCoords(30, 30);
    phaseTracerArrow-&gt;setHead(QCPLineEnding::esSpikeArrow);
    phaseTracerArrow-&gt;setTail(QCPLineEnding(QCPLineEnding::esBar, (phaseTracerText-&gt;bottom-&gt;pixelPosition().y()-phaseTracerText-&gt;top-&gt;pixelPosition().y())*0.85));

    QCPItemTracer *groupTracer = new QCPItemTracer(customPlot);
    groupTracer-&gt;setGraph(graph);
    groupTracer-&gt;setGraphKey(5.5);
    groupTracer-&gt;setInterpolating(true);
    groupTracer-&gt;setStyle(QCPItemTracer::tsCircle);
    groupTracer-&gt;setPen(QPen(Qt::green));
    groupTracer-&gt;setBrush(Qt::green);
    groupTracer-&gt;setSize(7);

    QCPItemText *groupTracerText = new QCPItemText(customPlot);
    groupTracerText-&gt;position-&gt;setType(QCPItemPosition::ptAxisRectRatio);
    groupTracerText-&gt;setPositionAlignment(Qt::AlignRight|Qt::AlignTop);
    groupTracerText-&gt;position-&gt;setCoords(1.0, 0.20); // lower right corner of axis rect
    groupTracerText-&gt;setText("Fixed positions in\nwave packet define\ngroup velocity vg");
    groupTracerText-&gt;setTextAlignment(Qt::AlignLeft);
    groupTracerText-&gt;setFont(QFont(font().family(), 9));
    groupTracerText-&gt;setPadding(QMargins(8, 0, 0, 0));

    QCPItemCurve *groupTracerArrow = new QCPItemCurve(customPlot);
    groupTracerArrow-&gt;start-&gt;setParentAnchor(groupTracerText-&gt;left);
    groupTracerArrow-&gt;startDir-&gt;setParentAnchor(groupTracerArrow-&gt;start);
    groupTracerArrow-&gt;startDir-&gt;setCoords(-40, 0); // direction 30 pixels to the left of parent anchor (tracerArrow-&gt;start)
    groupTracerArrow-&gt;end-&gt;setCoords(5.5, 0.4);
    groupTracerArrow-&gt;endDir-&gt;setParentAnchor(groupTracerArrow-&gt;end);
    groupTracerArrow-&gt;endDir-&gt;setCoords(0, -40);
    groupTracerArrow-&gt;setHead(QCPLineEnding::esSpikeArrow);
    groupTracerArrow-&gt;setTail(QCPLineEnding(QCPLineEnding::esBar, (groupTracerText-&gt;bottom-&gt;pixelPosition().y()-groupTracerText-&gt;top-&gt;pixelPosition().y())*0.85));

    QCPItemCurve *arrow = new QCPItemCurve(customPlot);
    arrow-&gt;start-&gt;setCoords(1, -1.1);
    arrow-&gt;startDir-&gt;setCoords(-1, -1.3);
    arrow-&gt;endDir-&gt;setCoords(-5, -0.3);
    arrow-&gt;end-&gt;setCoords(-10, -0.2);
    arrow-&gt;setHead(QCPLineEnding::esSpikeArrow);

    QCPItemText *dispersionText = new QCPItemText(customPlot);
    dispersionText-&gt;position-&gt;setCoords(-6, -0.9);
    dispersionText-&gt;setRotation(40);
    dispersionText-&gt;setText("Dispersion with\nvp &lt; vg");
    dispersionText-&gt;setFont(QFont(font().family(), 10));
    
    connect(&amp;dataTimer, SIGNAL(timeout()), this, SLOT(bracketDataSlot()));
    dataTimer.start(0); 

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {

}
//================================================
void GWindow::bracketDataSlot() {
    double secs = QCPAxisTickerDateTime::dateTimeToKey(QDateTime::currentDateTime());

    int n = 500;
    double phase = secs*5;
    double k = 3;
    QVector&lt;double&gt; x(n), y(n);
    for (int i=0; i&lt;n; ++i) {
        x[i] = i/(double)(n-1)*34 - 17;
        y[i] = qExp(-x[i]*x[i]/20.0)*qSin(k*x[i]+phase);
    }
    customPlot-&gt;graph()-&gt;setData(x, y);
    itemDemoPhaseTracer-&gt;setGraphKey((8*M_PI+fmod(M_PI*1.5-phase, 6*M_PI))/k);
    customPlot-&gt;replot();

    double key = secs;
    static double lastFpsKey;
    static int frameCount;
    ++frameCount;
    if (key-lastFpsKey &gt; 2) {
        qDebug() &lt;&lt;
        QString("%1 FPS, Total Data points: %2")
        .arg(frameCount/(key-lastFpsKey), 0, 'f', 0)
        .arg(customPlot-&gt;graph(0)-&gt;data()-&gt;size());
        lastFpsKey = key;
        frameCount = 0;
    }
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_bracket.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_bracket.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt"><a class="Link3" href="#">Communication Inter-Processus avec D-Bus sous Qt</a></h1><div class="Body3"><br><b>D-Bus</b> est un mécanisme de communication inter-processus (IPC) et d'appel de procédure à distance (RPC) développé à l'origine pour Linux afin de remplacer les solutions IPC existantes et concurrentes par un protocole unifié. Il a également été conçu pour permettre la communication entre les processus au niveau du système (tels que les services d'imprimante et de pilote matériel) et les processus utilisateur normaux. Il utilise un protocole de transmission de messages binaire rapide, qui convient à la communication avec la même machine en raison de sa faible latence et de sa faible surcharge. Son cahier des charges est actuellement défini par le projet freedesktop.org, et est accessible à toutes les parties. La communication s'effectue en général via une application serveur centrale, appelée "bus" (d'où le nom), mais une communication directe d'application à application est également possible. Lorsqu'elles communiquent sur un bus, les applications peuvent demander  quelles sont les services disponibles, ainsi qu'en activer un à la demande.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications">Envoyer un message à toutes les applications</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance">Appeler une procédure à distance</a></div></div><br><h2 class="Title7 GTitle2" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications"><a class="Link9" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt">Envoyer un message à toutes les applications</a></h2><br>Création d'un sytème de chat en ligne. Le <b>chat en ligne</b>, dialogue en ligne, ou clavardage, peut faire référence à tout type de communication sur Internet offrant une transmission en temps réel de messages texte de l'expéditeur au destinataire. Les messages de discussion sont généralement courts afin de permettre aux autres participants de répondre rapidement. <br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(300, 200);
    lWindow-&gt;show();

    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;QtDBus/QtDBus&gt;
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
public:
    void onEvent(const QString&amp; event);
    void updateView(const QString&amp; event);
    
public slots:
    void slotClick();
    void slotDBusMessage(const QString&amp; key, const QString&amp; value);

signals:
    void emitDBusMessage(const QString&amp; key, const QString&amp; value);

private:
    QMap&lt;QWidget*, QString&gt; m_widgetMap;
    QString m_key;
    QString m_value;
    QLineEdit* m_usernameEdit;
    QString m_username;
    QLabel* m_usernameLabel;
    QLineEdit* m_messageEdit;
    QTextEdit* m_textEdit;
    QFrame* m_connectWidget;
    QFrame* m_disconnectWidget;
    QFrame* m_messageWidget;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
#include "GDBusInterface.h"
#include "GDBusAdaptor.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    if (!QDBusConnection::sessionBus().isConnected()) {
        qDebug() &lt;&lt; "[error] connexion dbus";
        return;
    }

    new GDBusAdaptor(this);
    QDBusConnection::sessionBus().registerObject("/", this);
    GDBusInterface* lInterface = new GDBusInterface(QString(), QString(), QDBusConnection::sessionBus(), this);

    QLineEdit* lUsernameEdit = new QLineEdit;
    m_usernameEdit = lUsernameEdit;
    lUsernameEdit-&gt;setPlaceholderText("Username");

    QPushButton* lConnect = new QPushButton;
    lConnect-&gt;setText("Connect");
    m_widgetMap[lConnect] = "connect";

    QHBoxLayout* lConnectLayout = new QHBoxLayout;
    lConnectLayout-&gt;addWidget(lUsernameEdit);
    lConnectLayout-&gt;addWidget(lConnect);
    lConnectLayout-&gt;setMargin(0);
    
    QFrame* lConnectWidget = new QFrame;
    m_connectWidget = lConnectWidget;
    lConnectWidget-&gt;setLayout(lConnectLayout);
    
    QLabel* lUsernameLabel = new QLabel;
    m_usernameLabel = lUsernameLabel;
    
    QPushButton* lDisconnect = new QPushButton;
    lDisconnect-&gt;setText("Disconnect");
    m_widgetMap[lDisconnect] = "disconnect";
    
    QHBoxLayout* lDisconnectLayout = new QHBoxLayout;
    lDisconnectLayout-&gt;addWidget(lUsernameLabel);
    lDisconnectLayout-&gt;addWidget(lDisconnect);
    lDisconnectLayout-&gt;setMargin(0);
    lDisconnectLayout-&gt;setAlignment(Qt::AlignLeft);

    QFrame* lDisconnectWidget = new QFrame;
    m_disconnectWidget = lDisconnectWidget;
    lDisconnectWidget-&gt;setLayout(lDisconnectLayout);
    lDisconnectWidget-&gt;setVisible(false);

    QLineEdit* lMessageEdit = new QLineEdit;
    m_messageEdit = lMessageEdit;
    lMessageEdit-&gt;setPlaceholderText("Message");

    QPushButton* lSend = new QPushButton;
    lSend-&gt;setText("Send");
    m_widgetMap[lSend] = "send";

    QHBoxLayout* lMessageLayout = new QHBoxLayout;
    lMessageLayout-&gt;addWidget(lMessageEdit);
    lMessageLayout-&gt;addWidget(lSend);
    lMessageLayout-&gt;setMargin(0);
    
    QFrame* lMessageWidget = new QFrame;
    m_messageWidget = lMessageWidget;
    lMessageWidget-&gt;setLayout(lMessageLayout);
    lMessageWidget-&gt;setVisible(false);

    QTextEdit* lTextEdit = new QTextEdit;
    m_textEdit = lTextEdit;
    lTextEdit-&gt;setReadOnly(true);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lConnectWidget);
    lMainLayout-&gt;addWidget(lDisconnectWidget);
    lMainLayout-&gt;addWidget(lMessageWidget);
    lMainLayout-&gt;addWidget(lTextEdit);

    setLayout(lMainLayout);
    
    connect(lConnect, SIGNAL(clicked()), this, SLOT(slotClick()));
    connect(lDisconnect, SIGNAL(clicked()), this, SLOT(slotClick()));
    connect(lSend, SIGNAL(clicked()), this, SLOT(slotClick()));
    connect(lInterface, SIGNAL(emitDBusMessage(QString, QString)), this, SLOT(slotDBusMessage(QString, QString)));
}
//================================================
GWindow::~GWindow() {

}
//================================================
void GWindow::slotClick() {
    QWidget* lWidget = qobject_cast&lt;QWidget*&gt;(sender());
    QString lWidgetId = m_widgetMap[lWidget];
    onEvent(lWidgetId);
}
//================================================
void GWindow::slotDBusMessage(const QString&amp; key, const QString&amp; value) {
    m_key = key;
    m_value = value;
    onEvent("dbus_message");
}
//================================================
void GWindow::updateView(const QString&amp; event) {
    if(event == "connect") {
        m_connectWidget-&gt;setVisible(false);
        m_disconnectWidget-&gt;setVisible(true);
        m_messageWidget-&gt;setVisible(true);
    }
}
//================================================
void GWindow::onEvent(const QString&amp; event) {
    if(event == "connect") {
        m_username = m_usernameEdit-&gt;text();
        if(m_username == "") {return;}
        updateView(event);
        m_usernameLabel-&gt;setText(m_username);
        QString lMessage = QString("&lt;%1&gt; vient de se connecter")
        .arg(m_username);
        emit emitDBusMessage("connect", lMessage);
    }
    else if(event == "disconnect") {
        QString lMessage = QString("&lt;%1&gt; vient de se déconnecter")
        .arg(m_username);
        emit emitDBusMessage("disconnect", lMessage);
        close();
    }
    else if(event == "send") {
        QString lText = m_messageEdit-&gt;text();
        if(lText == "") {return;}
        QString lMessage = QString("&lt;%1&gt; %2")
        .arg(m_username, lText);
        m_messageEdit-&gt;clear();
        emit emitDBusMessage("message", lMessage);
    }
    else if(event == "dbus_message") {
        m_textEdit-&gt;append(m_value);
    }
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GDBusAdaptor.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GDBusAdaptor_
#define _GDBusAdaptor_
//================================================
#include &lt;QtDBus/QtDBus&gt;
//================================================
class GDBusAdaptor : public QDBusAbstractAdaptor {
    Q_OBJECT
    Q_CLASSINFO("D-Bus Interface", "com.readydev.app")
    Q_CLASSINFO("D-Bus Introspection", ""
    "&lt;interface name=\"com.readydev.app\"&gt;\n"
    "   &lt;signal name=\"emitDBusMessage\"&gt;\n"
    "       &lt;arg direction=\"out\" type=\"s\" name=\"key\"/&gt;\n"
    "       &lt;arg direction=\"out\" type=\"s\" name=\"value\"/&gt;\n"
    "    &lt;/signal&gt;\n"
    "&lt;/interface&gt;\n"
    "")
        
public:
    GDBusAdaptor(QObject *parent = 0);
    ~GDBusAdaptor();

signals:
    void emitDBusMessage(const QString&amp; key, const QString&amp; value);
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GDBusAdaptor.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GDBusAdaptor.h"
//================================================
GDBusAdaptor::GDBusAdaptor(QObject *parent) : 
QDBusAbstractAdaptor(parent) {
    setAutoRelaySignals(true);
}
//================================================
GDBusAdaptor::~GDBusAdaptor() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GDBusInterface.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GDBusInterface_
#define _GDBusInterface_
//================================================
#include &lt;QtDBus/QtDBus&gt;
//================================================
class GDBusInterface : public QDBusAbstractInterface {
    Q_OBJECT

public:
    GDBusInterface(const QString &amp;service, const QString &amp;path, const QDBusConnection &amp;connection = QDBusConnection::sessionBus(), QObject *parent = 0);
    ~GDBusInterface();

signals:
    void emitDBusMessage(const QString&amp; key, const QString&amp; value);
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GDBusInterface.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GDBusInterface.h"
//================================================
GDBusInterface::GDBusInterface(const QString &amp;service, const QString &amp;path, const QDBusConnection &amp;connection, QObject *parent) : 
QDBusAbstractInterface(service, path, "com.readydev.app", connection, parent) {

}
//================================================
GDBusInterface::~GDBusInterface() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_dbus_qt_chat.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_dbus_qt_chat.gif"></div><br><h2 class="Title7 GTitle2" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance"><a class="Link9" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt">Appeler une procédure à distance</a></h2><br>Création d'un système RPC. En informatique et en télécommunication, <b>RPC </b>(remote procedure call) est un protocole réseau permettant de faire des appels de procédures sur un ordinateur distant à l'aide d'un serveur d'applications. Ce protocole est utilisé dans le modèle client-serveur pour assurer la communication entre le client, le serveur et d’éventuels intermédiaires. Ce système est également utilisé pour la conception des micro-noyaux. <br><br><h3 class="Title8 GTitle3">Serveur (main.cpp)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GDBusObject.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    if (!QDBusConnection::sessionBus().isConnected()) {
        qDebug() &lt;&lt; "[error] connexion bus session";
        return 0;
    }
    if (!QDBusConnection::sessionBus().registerService("com.readydev.app")) {
        qDebug() &lt;&lt; "[error] enregistrement service";
        return 0;
    }
    GDBusObject lObject;
    QDBusConnection::sessionBus().registerObject("/", &amp;lObject, QDBusConnection::ExportAllSlots);    
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Serveur (GDBusObject.h)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GDBusObject_
#define _GDBusObject_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtDBus/QtDBus&gt;
//================================================
class GDBusObject : public QObject {
    Q_OBJECT
    
public:
    GDBusObject(QObject* parent = 0);
    ~GDBusObject();
    
public slots:
    QString say_hello();
    int add_data(const int&amp; a, const int&amp; b);
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Serveur (GDBusObject.cpp)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GDBusObject.h"
//================================================
GDBusObject::GDBusObject(QObject* parent) : 
QObject(parent) {

}
//================================================
GDBusObject::~GDBusObject() {

}
//================================================
QString GDBusObject::say_hello() {
    return QString("Bonjour tout le monde");
}
//================================================
int GDBusObject::add_data(const int&amp; a, const int&amp; b) {
    return (a + b);
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Client (main.cpp)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;QApplication&gt;
#include &lt;QtDBus/QtDBus&gt;
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    if (!QDBusConnection::sessionBus().isConnected()) {
        qDebug() &lt;&lt; "[error] connexion bus session";
        return 0;
    }
    QDBusInterface lInterface("com.readydev.app", "/", "", QDBusConnection::sessionBus());
    if (lInterface.isValid()) {
        QDBusReply&lt;QString&gt; lReplyHello = lInterface.call("say_hello");
        if (lReplyHello.isValid()) {
            printf("say_hello : %s\n", qPrintable(lReplyHello.value()));
        }
        QDBusReply&lt;int&gt; lReplyAdd = lInterface.call("add_data", 20, 30);
        if (lReplyAdd.isValid()) {
            printf("add_data : %d\n", lReplyAdd.value());
        }
    }
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Lancer le serveur</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">./server</pre></div></div><br><h3 class="Title8 GTitle3">Lancer le client</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">./client</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">say_hello : Bonjour tout le monde
add_data : 50</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Vision-par-Ordinateur-avec-OpenCV"><a class="Link3" href="#">Vision par Ordinateur avec OpenCV</a></h1><div class="Body3"><br><b>OpenCV </b>est une bibliothèque graphique libre, spécialisée dans le traitement d'images en temps réel. La bibliothèque OpenCV met à disposition de nombreuses fonctionnalités très diversifiées permettant de créer des programmes en partant des données brutes pour aller jusqu'à la création d'interfaces graphiques basiques. OpenCV propose la plupart des opérations classiques en traitement bas niveau des images : lecture, écriture et affichage d’une image ; calcul de l'histogramme des niveaux de gris ou d'histogrammes couleurs ; lissage, filtrage ; seuillage d'image (méthode d'Otsu, seuillage adaptatif) ; segmentation (composantes connexes, GrabCut) ; morphologie mathématique.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Installer-l-environnement-OpenCV-sous-MSYS2">Installer l'environnement OpenCV sous MSYS2</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Compiler-un-projet-OpenCV">Compiler un projet OpenCV</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Tester-un-projet-OpenCV-sous-MSYS2">Tester un projet OpenCV sous MSYS2</a></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/b_opencv.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/b_opencv.png"></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-Installer-l-environnement-OpenCV-sous-MSYS2"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">Installer l'environnement OpenCV sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Installer OpenCV</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-opencv</pre></div></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-Compiler-un-projet-OpenCV"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">Compiler un projet OpenCV</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">export "PATH=/mingw32/bin:$PATH"

g++ -std=gnu++11  -c main.cpp -o main.o \
-I/mingw32/include/opencv4

g++ -std=gnu++11 -o rdcpp.exe main.o \
-L/mingw32/lib \
-lopencv_gapi -lopencv_stitching -lopencv_alphamat -lopencv_aruco -lopencv_bgsegm \
-lopencv_ccalib -lopencv_dnn_objdetect -lopencv_dnn_superres -lopencv_dpm -lopencv_face \
-lopencv_fuzzy -lopencv_hdf -lopencv_hfs -lopencv_img_hash -lopencv_intensity_transform \
-lopencv_line_descriptor -lopencv_mcc -lopencv_ovis -lopencv_quality -lopencv_rapid \
-lopencv_reg -lopencv_rgbd -lopencv_saliency -lopencv_sfm -lopencv_stereo \
-lopencv_structured_light -lopencv_phase_unwrapping -lopencv_superres -lopencv_optflow \
-lopencv_surface_matching -lopencv_tracking -lopencv_highgui -lopencv_datasets -lopencv_text \
-lopencv_plot -lopencv_videostab -lopencv_videoio -lopencv_xfeatures2d -lopencv_shape \
-lopencv_ml -lopencv_ximgproc -lopencv_video -lopencv_dnn -lopencv_xobjdetect \
-lopencv_objdetect -lopencv_calib3d -lopencv_imgcodecs -lopencv_features2d -lopencv_flann \
-lopencv_xphoto -lopencv_photo -lopencv_imgproc -lopencv_core</pre></div></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-Tester-un-projet-OpenCV-sous-MSYS2"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">Tester un projet OpenCV sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;opencv2/opencv.hpp&gt;
//===============================================
int main(int argc, char** argv) {
    cv::Mat lImg = cv::imread("image.png");
    cv::namedWindow("ReadyApp");
    cv::imshow("ReadyApp", lImg);
    cv::waitKey(0);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_test.png" class="lazy entered loaded" data-src="/Tutoriels/Software_Development/Cpp/img/i_opencv_test.png" data-ll-status="loaded" src="/Tutoriels/Software_Development/Cpp/img/i_opencv_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Calcul-scientifique-avec-GSL"><a class="Link3" href="#">Calcul scientifique avec GSL</a></h1><div class="Body3"><br><b>GSL </b>est une bibliothèque de calcul scientifique comportant une collection de routines pour le calcul numérique. Les routines ont été écrites à partir de zéro en C et présentent une interface de programmation d'applications (API) moderne pour les programmeurs C, permettant d'écrire des wrappers pour des langages de très haut niveau. Le code source est distribué sous la licence publique générale GNU.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Installer-l-environnement-GSL-sous-MSYS2">Installer l'environnement GSL sous MSYS2</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Tester-un-projet-GSL-sous-MSYS2">Tester un projet GSL sous MSYS2</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire">Résoudre une équation différentielle ordinaire</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire">Rechercher une interpolation linéaire</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale">Rechercher une interploation polynomiale</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique">Rechercher une interpolation spline cubique</a></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/b_gsl.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/b_gsl.png"></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Installer-l-environnement-GSL-sous-MSYS2"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Installer l'environnement GSL sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Installer GSL</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-gsl</pre></div></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Tester-un-projet-GSL-sous-MSYS2"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Tester un projet GSL sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Editer le programme (main.cpp)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;gsl/gsl_sf_bessel.h&gt;
//===============================================
int main(int argc, char** argv) {
    double x = 5.0;
    double y = gsl_sf_bessel_J0(x);
    printf ("J0(%g) = %.18e\n", x, y);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">g++ -std=gnu++11 -c main.cpp -o main.o -I/mingw32/include
g++ -o rdcpp.exe main.o -lgsl -lgslcblas -lm</pre></div></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">./rdcpp.exe</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">J0(5) = -1.775967713143382920e-01</pre></div></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Résoudre une équation différentielle ordinaire</a></h2><br>En mathématiques, une <b>équation différentielle ordinaire</b> (parfois simplement appelée équation différentielle et abrégée en EDO) est une équation différentielle dont la ou les fonctions inconnues ne dépendent que d'une seule variable; elle se présente sous la forme d'une relation entre ces fonctions inconnues et leurs dérivées successives. Le terme ordinaire est utilisé par opposition au terme équation différentielle partielle (plus communément équation aux dérivées partielles, ou EDP) où la ou les fonctions inconnues peuvent dépendre de plusieurs variables. L'ordre d'une équation différentielle correspond au degré maximal de dérivation auquel l'une des fonctions inconnues a été soumise.<br><br><h3 class="Title8 GTitle3">Définir l'équation différentielle</h3><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
u''(t)+µu'(t)\left(u(t)^2-1\right)+u(t) &amp;=&amp; 0
\end{eqnarray}</div></div><br><h3 class="Title8 GTitle3">Déterminer les dérivées premières de l'équation différentielle</h3><br><div class="Formula GFormula1"><div class="Formula2">$$\left \{
\begin{array}{r c l}
u' &amp;=&amp; v \\
v'+µv(u^2-1)+u &amp;=&amp; 0
\end{array}
\right .$$</div></div><br><div class="Formula GFormula1"><div class="Formula2">$$\left \{
\begin{array}{r c l}
u' &amp; = &amp; v \\
v'&amp; = &amp; -µv(u^2-1)-µ
\end{array}
\right .$$</div></div><br><div class="Formula GFormula1"><div class="Formula2">$$\left \{
\begin{array}{r c l}
u' &amp; = &amp; v \\
v'&amp; = &amp; -µ+µv(1-u^2)
\end{array}
\right .$$</div></div><br><div class="Formula GFormula1"><div class="Formula5">$$\left \{
\begin{array}{r c l}
f_0 &amp; = &amp; v \\
f_1&amp; = &amp; -µ+µv(1-u^2)
\end{array}
\right .$$</div></div><br><h3 class="Title8 GTitle3">Déterminer la Jacobienne de l'équation différentielle</h3><br><div class="Formula GFormula1"><div class="Formula2">$$
\mathbb{J}_F
=
\begin{pmatrix}
\dfrac{\partial f_0}{\partial u} &amp; \dfrac{\partial f_0}{\partial v}\\
\dfrac{\partial f_1}{\partial u} &amp; \dfrac{\partial f_1}{\partial v}\\
\end{pmatrix}
$$</div></div><br><div class="Formula GFormula1"><div class="Formula5">$$
\mathbb{J}_F
=
\begin{pmatrix}
0 &amp; 1\\
-1-2µuv &amp; µ(1-u^2)\\
\end{pmatrix}
$$</div></div><br><h3 class="Title8 GTitle3">Editer le programme (main.cpp)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;QApplication&gt;
#include &lt;qcustomplot.h&gt;
#include &lt;gsl/gsl_errno.h&gt;
#include &lt;gsl/gsl_matrix.h&gt;
#include &lt;gsl/gsl_odeiv2.h&gt;
//===============================================
int onFunction (double t, const double y[], double f[], void *params) {
    (void)(t);
    double mu = *(double *)params;
    f[0] = y[1];
    f[1] = -y[0] - mu*y[1]*(y[0]*y[0] - 1);
    return GSL_SUCCESS;
}
//===============================================
int onJacobian (double t, const double y[], double *dfdy, double dfdt[], void *params) {
    (void)(t);
    double mu = *(double *)params;
    gsl_matrix_view dfdy_mat = gsl_matrix_view_array (dfdy, 2, 2);
    gsl_matrix * m = &amp;dfdy_mat.matrix;
    gsl_matrix_set (m, 0, 0, 0.0);
    gsl_matrix_set (m, 0, 1, 1.0);
    gsl_matrix_set (m, 1, 0, -2.0*mu*y[0]*y[1] - 1.0);
    gsl_matrix_set (m, 1, 1, -mu*(y[0]*y[0] - 1.0));
    dfdt[0] = 0.0;
    dfdt[1] = 0.0;
    return GSL_SUCCESS;
}
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    double mu = 10;
    gsl_odeiv2_system sys = {onFunction, onJacobian, 2, &amp;mu};

    gsl_odeiv2_driver * d =
    gsl_odeiv2_driver_alloc_y_new (&amp;sys, gsl_odeiv2_step_rk8pd, 1e-6, 1e-6, 0.0);
    int i;
    double t = 0.0, t1 = 100.0;
    double y[2] = { 1.0, 0.0 };
    QVector&lt;double&gt; x(100), y1(100), y2(100);
    double xmin = 0, xmax = 0, ymin = 0, ymax = 0;
    int lOneOnly = true;
    
    for (i = 1; i &lt;= 100; i++) {
        double ti = i * t1 / 100.0;
        int status = gsl_odeiv2_driver_apply (d, &amp;t, ti, y);

        if (status != GSL_SUCCESS) {
            printf ("error, return value=%d\n", status);
            break;
        }

        x[i] = t; 
        y1[i] = y[0];  
        y2[i] = y[1];
        
        if(lOneOnly == true) {
            xmin = t; 
            xmax = t;
            ymin = y[0];
            ymax = y[0];
            lOneOnly = false;
        }
        
        if(t &lt; xmin) {xmin = t;}
        if(t &gt; xmax) {xmax = t;}
        if(y[0] &lt; ymin) {ymin = y[0];}
        if(y[0] &gt; ymax) {ymax = y[0];}
        if(y[1] &lt; ymin) {ymin = y[1];}
        if(y[1] &gt; ymax) {ymax = y[1];}        
    }

    QCustomPlot* lCustomPlot = new QCustomPlot;
    lCustomPlot-&gt;addGraph();
    lCustomPlot-&gt;addGraph();
    lCustomPlot-&gt;graph(0)-&gt;setData(x, y1);
    lCustomPlot-&gt;graph(1)-&gt;setData(x, y2);
    lCustomPlot-&gt;xAxis-&gt;setLabel("x");
    lCustomPlot-&gt;yAxis-&gt;setLabel("y");
    lCustomPlot-&gt;xAxis-&gt;setRange(xmin, xmax);
    lCustomPlot-&gt;yAxis-&gt;setRange(ymin, ymax);
    lCustomPlot-&gt;graph(0)-&gt;setPen(QPen(Qt::red)); 

    lCustomPlot-&gt;show();
    lCustomPlot-&gt;setWindowTitle("ReadyApp");
    lCustomPlot-&gt;resize(500, 250);

    gsl_odeiv2_driver_free (d);
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_gsl_ode_2.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_gsl_ode_2.png"></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Rechercher une interpolation linéaire</a></h2><br>L’<b>interpolation linéaire</b> est la méthode la plus simple pour estimer la valeur prise par une fonction continue entre deux points déterminés (interpolation). Elle consiste à utiliser pour cela la fonction affine (de la forme <span class="GCode3"><code style="color:#cccccc;">f(x) = m.x + b</code></span>) passant par les deux points déterminés. Cette technique était d'un emploi systématique lorsque l'on ne disposait que de tables numériques pour le calcul avec les fonctions transcendantes : les tables comportaient d'ailleurs à cet effet en marge les « différences tabulaires », auxiliaire de calcul servant à l'interpolation linéaire. Enfin l'interpolation linéaire est la base de la technique de quadrature numérique par la méthode des trapèzes. <br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();

    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
#include &lt;gsl/gsl_interp.h&gt;
//================================================
struct sGCoord {
    double x;
    double y;
    operator QString() const {
        QString d = QString("sGCoord (%1 ; %2)")
        .arg(x, 0, 'g', 2).arg(y, 0, 'g', 2);
        return d;
    }
};
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
public:
    void onEvent(const QString&amp; event);
    void detectPoint();
    void interpolation();
    void sort();
    
public slots:
    void slotMousePress(QMouseEvent* event);
    void slotMouseMove(QMouseEvent* event);
    void onClick();

private:
    QCustomPlot* customPlot;
    double m_x;
    double m_y;
    double m_xmin;
    double m_xmax;
    double m_ymin;
    double m_ymax;
    int m_iClear;
    QVector&lt;double&gt; m_xData;
    QVector&lt;double&gt; m_yData;
    QCPItemText* m_coords;
    bool m_clearFlag;
    QMap&lt;QWidget*, QString&gt; m_widgetMap;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    m_xmin = -10.1; m_xmax = 10.1; m_ymin = -10.1; m_ymax = 10.1;
    
    customPlot-&gt;addGraph();
    customPlot-&gt;addGraph();
    customPlot-&gt;addGraph();
    customPlot-&gt;addGraph();
    
    customPlot-&gt;graph(0)-&gt;setPen(QPen(Qt::NoPen));
    customPlot-&gt;graph(0)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, QPen(Qt::black, 1.5), QBrush(Qt::white), 9));    
    customPlot-&gt;graph(1)-&gt;setPen(QPen(Qt::blue));
    customPlot-&gt;graph(2)-&gt;setPen(QPen(Qt::NoPen));
    customPlot-&gt;graph(2)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, QPen(Qt::gray, 1.5), QBrush(Qt::NoBrush), 16));    
    customPlot-&gt;graph(3)-&gt;setPen(QPen(Qt::NoPen));
    customPlot-&gt;graph(3)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, QPen(Qt::blue, 3), QBrush(Qt::NoBrush), 9));    
    
    m_coords = new QCPItemText(customPlot);
    m_coords-&gt;setPositionAlignment(Qt::AlignTop|Qt::AlignHCenter);
    m_coords-&gt;position-&gt;setType(QCPItemPosition::ptPlotCoords);
    m_coords-&gt;setFont(QFont(font().family(), 10));
    m_coords-&gt;setPen(QPen(Qt::NoPen)); 
    m_coords-&gt;setText("");
    
    customPlot-&gt;xAxis-&gt;setLabel("x");
    customPlot-&gt;yAxis-&gt;setLabel("y");
    customPlot-&gt;xAxis-&gt;setRange(m_xmin, m_xmax);
    customPlot-&gt;yAxis-&gt;setRange(m_ymin, m_ymax);

    m_clearFlag = false;

    QPushButton* lRun = new QPushButton;
    lRun-&gt;setText("Run");
    m_widgetMap[lRun] = "run";

    QHBoxLayout* lButtonLayout = new QHBoxLayout;
    lButtonLayout-&gt;addWidget(lRun);
    lButtonLayout-&gt;setAlignment(Qt::AlignLeft);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lButtonLayout);
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
    
    connect(lRun, SIGNAL(clicked()), this, SLOT(onClick()));
    connect(customPlot, SIGNAL(mousePress(QMouseEvent*)), this, SLOT(slotMousePress(QMouseEvent*)));
    connect(customPlot, SIGNAL(mouseMove(QMouseEvent*)), this, SLOT(slotMouseMove(QMouseEvent*)));
}
//================================================
GWindow::~GWindow() {

}
//================================================
void GWindow::onClick() {
    QWidget* lWidget = qobject_cast&lt;QWidget*&gt;(sender());
    QString lWidgetId = m_widgetMap[lWidget];
    onEvent(lWidgetId);
}
//================================================
void GWindow::onEvent(const QString&amp; event) {
    if(event == "add_point") {
        m_xData &lt;&lt; m_x;
        m_yData &lt;&lt; m_y;
        customPlot-&gt;graph(0)-&gt;setData(m_xData, m_yData);
        customPlot-&gt;replot();
    }
    else if(event == "clear_point") {
        if(m_clearFlag == false) {return;}
        m_xData.removeAt(m_iClear);
        m_yData.removeAt(m_iClear);
        customPlot-&gt;graph(0)-&gt;setData(m_xData, m_yData);
        customPlot-&gt;graph(3)-&gt;setData({}, {});
        customPlot-&gt;replot();
    }
    else if(event == "mouse_move") {
        m_clearFlag = false;
        m_coords-&gt;position-&gt;setCoords(m_x, m_y + 2.5);
        customPlot-&gt;graph(3)-&gt;setData({}, {});
        detectPoint();
        m_coords-&gt;setText(QString("(%1 ; %2)").arg(m_x, 0, 'g', 2).arg(m_y, 0, 'g', 2));
        customPlot-&gt;graph(2)-&gt;setData({m_x}, {m_y});
        customPlot-&gt;replot();
    }
    else if(event == "run") {
        interpolation();
    }
}
//================================================
void GWindow::interpolation() {
    int lSize = m_xData.size();
    if(lSize &lt; 2) {return;}
    sort();
    gsl_interp* lInter = gsl_interp_alloc(gsl_interp_linear, lSize);
    gsl_interp_init(lInter, m_xData.data(), m_yData.data(), lSize);
    gsl_interp_accel* lAccel = gsl_interp_accel_alloc();
    
    double lXmin = m_xData.first();
    double lXmax = m_xData.last();
    double lN = 200;
    double dX = (lXmax - lXmin) / lN;
    
    customPlot-&gt;graph(1)-&gt;setData({}, {});
    
    for(double lX = lXmin; lX &lt;= lXmax; lX += dX) { 
        double lY = gsl_interp_eval(lInter , m_xData.data(), m_yData.data(), lX, lAccel);
        customPlot-&gt;graph(1)-&gt;addData(lX, lY);
    }
    
    customPlot-&gt;replot();
    
    qDebug() &lt;&lt; "gsl_interp_name : " &lt;&lt; gsl_interp_name(lInter);
    qDebug() &lt;&lt; "gsl_interp_min_size : " &lt;&lt; gsl_interp_min_size(lInter);
    qDebug() &lt;&lt; "gsl_interp_type_min_size : " &lt;&lt; gsl_interp_type_min_size(gsl_interp_linear);
    
    gsl_interp_free(lInter);
    gsl_interp_accel_free(lAccel);
}
//================================================
void GWindow::sort() {
    if(m_xData.size() &lt;= 1) {return;}
    QVector&lt;sGCoord&gt; lCoords;
    for(int i = 0; i &lt; m_xData.size(); i++) {
        double lX = m_xData.at(i);
        double lY = m_yData.at(i);
        sGCoord lCoord = {lX, lY};
        lCoords &lt;&lt; lCoord;
    }
    qSort(lCoords.begin(), lCoords.end(), [](const sGCoord&amp; a, const sGCoord&amp; b) {
        return a.x &lt; b.x;
    });
    m_xData.clear();
    m_yData.clear();
    for(int i = 0; i &lt; lCoords.size(); i++) {
        sGCoord lCoord = lCoords.at(i);
        double lX = lCoord.x;
        double lY = lCoord.y;
        m_xData &lt;&lt; lX;
        m_yData &lt;&lt; lY;
    }
}
//================================================
void GWindow::detectPoint() {
    for(int i = 0; i &lt; m_xData.size(); i++) {
        double lX = m_xData.at(i);
        double lY = m_yData.at(i);
        double dX = lX - m_x;
        double dY = lY - m_y;
        double dR = qSqrt(dX*dX + dY*dY);
        if(dR &lt;= 0.15) {
            m_iClear = i;
            customPlot-&gt;graph(3)-&gt;setData({lX}, {lY});
            customPlot-&gt;replot();
            m_clearFlag = true;
            break;
        }
    }
}
//================================================
void GWindow::slotMousePress(QMouseEvent* event) {
    if(event-&gt;button() == Qt::LeftButton) {
        m_x = customPlot-&gt;xAxis-&gt;pixelToCoord(event-&gt;pos().x());
        m_y = customPlot-&gt;yAxis-&gt;pixelToCoord(event-&gt;pos().y());
        onEvent("add_point");
    }
    else if(event-&gt;button() == Qt::RightButton) {
        onEvent("clear_point");
    }
}
//================================================
void GWindow::slotMouseMove(QMouseEvent* event) {
    m_x = customPlot-&gt;xAxis-&gt;pixelToCoord(event-&gt;pos().x());
    m_y = customPlot-&gt;yAxis-&gt;pixelToCoord(event-&gt;pos().y());
    onEvent("mouse_move");
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_linear.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_linear.gif"></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">gsl_interp_name :  linear
gsl_interp_min_size :  2
gsl_interp_type_min_size :  2</pre></div></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Rechercher une interploation polynomiale</a></h2><br>En mathématiques, en analyse numérique, l'<b>interpolation polynomiale</b> est une technique d'interpolation d'un ensemble de données ou d'une fonction par un polynôme. En d'autres termes, étant donné un ensemble de points (obtenu, par exemple, à la suite d'une expérience), on cherche un polynôme qui passe par tous ces points, et éventuellement vérifie d'autres conditions, de degré si possible le plus bas. Le résultat n'est toutefois pas toujours à la hauteur des espérances : dans le cas de l'interpolation lagrangienne, par exemple, le choix des points d'interpolation est critique. L'interpolation en des points régulièrement espacés peut fort bien diverger même pour des fonctions très régulières (phénomène de Runge).<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();

    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
#include &lt;gsl/gsl_interp.h&gt;
//================================================
struct sGCoord {
    double x;
    double y;
    operator QString() const {
        QString d = QString("sGCoord (%1 ; %2)")
        .arg(x, 0, 'g', 2).arg(y, 0, 'g', 2);
        return d;
    }
};
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
public:
    void onEvent(const QString&amp; event);
    void detectPoint();
    void interpolation();
    void sort();
    
public slots:
    void slotMousePress(QMouseEvent* event);
    void slotMouseMove(QMouseEvent* event);
    void onClick();

private:
    QCustomPlot* customPlot;
    double m_x;
    double m_y;
    double m_xmin;
    double m_xmax;
    double m_ymin;
    double m_ymax;
    int m_iClear;
    QVector&lt;double&gt; m_xData;
    QVector&lt;double&gt; m_yData;
    QCPItemText* m_coords;
    bool m_clearFlag;
    QMap&lt;QWidget*, QString&gt; m_widgetMap;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    m_xmin = -10.1; m_xmax = 10.1; m_ymin = -10.1; m_ymax = 10.1;
    
    customPlot-&gt;addGraph();
    customPlot-&gt;addGraph();
    customPlot-&gt;addGraph();
    customPlot-&gt;addGraph();
    
    customPlot-&gt;graph(0)-&gt;setPen(QPen(Qt::NoPen));
    customPlot-&gt;graph(0)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, QPen(Qt::black, 1.5), QBrush(Qt::white), 9));    
    customPlot-&gt;graph(1)-&gt;setPen(QPen(Qt::blue));
    customPlot-&gt;graph(2)-&gt;setPen(QPen(Qt::NoPen));
    customPlot-&gt;graph(2)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, QPen(Qt::gray, 1.5), QBrush(Qt::NoBrush), 16));    
    customPlot-&gt;graph(3)-&gt;setPen(QPen(Qt::NoPen));
    customPlot-&gt;graph(3)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, QPen(Qt::blue, 3), QBrush(Qt::NoBrush), 9));    
    
    m_coords = new QCPItemText(customPlot);
    m_coords-&gt;setPositionAlignment(Qt::AlignTop|Qt::AlignHCenter);
    m_coords-&gt;position-&gt;setType(QCPItemPosition::ptPlotCoords);
    m_coords-&gt;setFont(QFont(font().family(), 10));
    m_coords-&gt;setPen(QPen(Qt::NoPen)); 
    m_coords-&gt;setText("");
    
    customPlot-&gt;xAxis-&gt;setLabel("x");
    customPlot-&gt;yAxis-&gt;setLabel("y");
    customPlot-&gt;xAxis-&gt;setRange(m_xmin, m_xmax);
    customPlot-&gt;yAxis-&gt;setRange(m_ymin, m_ymax);

    m_clearFlag = false;

    QPushButton* lRun = new QPushButton;
    lRun-&gt;setText("Run");
    m_widgetMap[lRun] = "run";

    QHBoxLayout* lButtonLayout = new QHBoxLayout;
    lButtonLayout-&gt;addWidget(lRun);
    lButtonLayout-&gt;setAlignment(Qt::AlignLeft);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lButtonLayout);
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
    
    connect(lRun, SIGNAL(clicked()), this, SLOT(onClick()));
    connect(customPlot, SIGNAL(mousePress(QMouseEvent*)), this, SLOT(slotMousePress(QMouseEvent*)));
    connect(customPlot, SIGNAL(mouseMove(QMouseEvent*)), this, SLOT(slotMouseMove(QMouseEvent*)));
}
//================================================
GWindow::~GWindow() {

}
//================================================
void GWindow::onClick() {
    QWidget* lWidget = qobject_cast&lt;QWidget*&gt;(sender());
    QString lWidgetId = m_widgetMap[lWidget];
    onEvent(lWidgetId);
}
//================================================
void GWindow::onEvent(const QString&amp; event) {
    if(event == "add_point") {
        m_xData &lt;&lt; m_x;
        m_yData &lt;&lt; m_y;
        customPlot-&gt;graph(0)-&gt;setData(m_xData, m_yData);
        customPlot-&gt;replot();
    }
    else if(event == "clear_point") {
        if(m_clearFlag == false) {return;}
        m_xData.removeAt(m_iClear);
        m_yData.removeAt(m_iClear);
        customPlot-&gt;graph(0)-&gt;setData(m_xData, m_yData);
        customPlot-&gt;graph(3)-&gt;setData({}, {});
        customPlot-&gt;replot();
    }
    else if(event == "mouse_move") {
        m_clearFlag = false;
        m_coords-&gt;position-&gt;setCoords(m_x, m_y + 2.5);
        customPlot-&gt;graph(3)-&gt;setData({}, {});
        detectPoint();
        m_coords-&gt;setText(QString("(%1 ; %2)").arg(m_x, 0, 'g', 2).arg(m_y, 0, 'g', 2));
        customPlot-&gt;graph(2)-&gt;setData({m_x}, {m_y});
        customPlot-&gt;replot();
    }
    else if(event == "run") {
        interpolation();
    }
}
//================================================
void GWindow::interpolation() {
    int lSize = m_xData.size();
    if(lSize &lt; 3) {return;}
    sort();
    gsl_interp* lInter = gsl_interp_alloc(gsl_interp_polynomial, lSize);
    gsl_interp_init(lInter, m_xData.data(), m_yData.data(), lSize);
    gsl_interp_accel* lAccel = gsl_interp_accel_alloc();
    
    double lXmin = m_xData.first();
    double lXmax = m_xData.last();
    double lN = 200;
    double dX = (lXmax - lXmin) / lN;
    
    customPlot-&gt;graph(1)-&gt;setData({}, {});
    
    m_ymin = m_yData.at(0);
    m_ymax = m_yData.at(0);
    
    for(double lX = lXmin; lX &lt;= lXmax; lX += dX) { 
        double lY = gsl_interp_eval(lInter , m_xData.data(), m_yData.data(), lX, lAccel);
        if(lY &lt; m_ymin) {m_ymin = lY;}
        if(lY &gt; m_ymax) {m_ymax = lY;}
        customPlot-&gt;graph(1)-&gt;addData(lX, lY);
    }
    
    customPlot-&gt;yAxis-&gt;setRange(m_ymin - 1.0, m_ymax + 1.0);
    customPlot-&gt;replot();
    
    qDebug() &lt;&lt; "gsl_interp_name : " &lt;&lt; gsl_interp_name(lInter);
    qDebug() &lt;&lt; "gsl_interp_min_size : " &lt;&lt; gsl_interp_min_size(lInter);
    qDebug() &lt;&lt; "gsl_interp_type_min_size : " &lt;&lt; gsl_interp_type_min_size(gsl_interp_polynomial);
    
    gsl_interp_free(lInter);
    gsl_interp_accel_free(lAccel);
}
//================================================
void GWindow::sort() {
    if(m_xData.size() &lt;= 1) {return;}
    QVector&lt;sGCoord&gt; lCoords;
    for(int i = 0; i &lt; m_xData.size(); i++) {
        double lX = m_xData.at(i);
        double lY = m_yData.at(i);
        sGCoord lCoord = {lX, lY};
        lCoords &lt;&lt; lCoord;
    }
    qSort(lCoords.begin(), lCoords.end(), [](const sGCoord&amp; a, const sGCoord&amp; b) {
        return a.x &lt; b.x;
    });
    m_xData.clear();
    m_yData.clear();
    for(int i = 0; i &lt; lCoords.size(); i++) {
        sGCoord lCoord = lCoords.at(i);
        double lX = lCoord.x;
        double lY = lCoord.y;
        m_xData &lt;&lt; lX;
        m_yData &lt;&lt; lY;
    }
}
//================================================
void GWindow::detectPoint() {
    for(int i = 0; i &lt; m_xData.size(); i++) {
        double lX = m_xData.at(i);
        double lY = m_yData.at(i);
        double dX = lX - m_x;
        double dY = lY - m_y;
        double dR = qSqrt(dX*dX + dY*dY);
        if(dR &lt;= 0.15) {
            m_iClear = i;
            customPlot-&gt;graph(3)-&gt;setData({lX}, {lY});
            customPlot-&gt;replot();
            m_clearFlag = true;
            break;
        }
    }
}
//================================================
void GWindow::slotMousePress(QMouseEvent* event) {
    if(event-&gt;button() == Qt::LeftButton) {
        m_x = customPlot-&gt;xAxis-&gt;pixelToCoord(event-&gt;pos().x());
        m_y = customPlot-&gt;yAxis-&gt;pixelToCoord(event-&gt;pos().y());
        onEvent("add_point");
    }
    else if(event-&gt;button() == Qt::RightButton) {
        onEvent("clear_point");
    }
}
//================================================
void GWindow::slotMouseMove(QMouseEvent* event) {
    m_x = customPlot-&gt;xAxis-&gt;pixelToCoord(event-&gt;pos().x());
    m_y = customPlot-&gt;yAxis-&gt;pixelToCoord(event-&gt;pos().y());
    onEvent("mouse_move");
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_polynomial.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_polynomial.gif"></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">gsl_interp_name :  polynomial
gsl_interp_min_size :  3
gsl_interp_type_min_size :  3</pre></div></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Rechercher une interpolation spline cubique</a></h2><br>En mathématiques appliquées et en analyse numérique, une <b>spline </b>est une fonction définie par morceaux par des polynômes. Dans les problèmes d'interpolation, la méthode des splines est très souvent préférée à l'interpolation polynomiale. Les splines sont également utilisées dans les problèmes de lissage de données expérimentales ou de statistiques. Les splines sont utilisées pour représenter numériquement des contours complexes. Leur mise en œuvre est simple. Elles sont fréquemment employées dans les logiciels de dessin ou de conception graphique ; leur usage y a été généralisé par Pierre Bézier avec les B-splines. <br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(500, 300);
    lWindow-&gt;show();

    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;qcustomplot.h&gt;
#include &lt;gsl/gsl_spline.h&gt;
//================================================
struct sGCoord {
    double x;
    double y;
    operator QString() const {
        QString d = QString("sGCoord (%1 ; %2)")
        .arg(x, 0, 'g', 2).arg(y, 0, 'g', 2);
        return d;
    }
};
//================================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
public:
    void onEvent(const QString&amp; event);
    void detectPoint();
    void interpolation();
    void sort();
    
public slots:
    void slotMousePress(QMouseEvent* event);
    void slotMouseMove(QMouseEvent* event);
    void onClick();

private:
    QCustomPlot* customPlot;
    double m_x;
    double m_y;
    double m_xmin;
    double m_xmax;
    double m_ymin;
    double m_ymax;
    int m_iClear;
    QVector&lt;double&gt; m_xData;
    QVector&lt;double&gt; m_yData;
    QCPItemText* m_coords;
    bool m_clearFlag;
    QMap&lt;QWidget*, QString&gt; m_widgetMap;
};
//================================================
#endif
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    customPlot = new QCustomPlot;

    m_xmin = -10.1; m_xmax = 10.1; m_ymin = -10.1; m_ymax = 10.1;
    
    customPlot-&gt;addGraph();
    customPlot-&gt;addGraph();
    customPlot-&gt;addGraph();
    customPlot-&gt;addGraph();
    
    customPlot-&gt;graph(0)-&gt;setPen(QPen(Qt::NoPen));
    customPlot-&gt;graph(0)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, QPen(Qt::black, 1.5), QBrush(Qt::white), 9));    
    customPlot-&gt;graph(1)-&gt;setPen(QPen(Qt::blue));
    customPlot-&gt;graph(2)-&gt;setPen(QPen(Qt::NoPen));
    customPlot-&gt;graph(2)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, QPen(Qt::gray, 1.5), QBrush(Qt::NoBrush), 16));    
    customPlot-&gt;graph(3)-&gt;setPen(QPen(Qt::NoPen));
    customPlot-&gt;graph(3)-&gt;setScatterStyle(QCPScatterStyle(QCPScatterStyle::ssCircle, QPen(Qt::blue, 3), QBrush(Qt::NoBrush), 9));    
    
    m_coords = new QCPItemText(customPlot);
    m_coords-&gt;setPositionAlignment(Qt::AlignTop|Qt::AlignHCenter);
    m_coords-&gt;position-&gt;setType(QCPItemPosition::ptPlotCoords);
    m_coords-&gt;setFont(QFont(font().family(), 10));
    m_coords-&gt;setPen(QPen(Qt::NoPen)); 
    m_coords-&gt;setText("");
    
    customPlot-&gt;xAxis-&gt;setLabel("x");
    customPlot-&gt;yAxis-&gt;setLabel("y");
    customPlot-&gt;xAxis-&gt;setRange(m_xmin, m_xmax);
    customPlot-&gt;yAxis-&gt;setRange(m_ymin, m_ymax);

    m_clearFlag = false;

    QPushButton* lRun = new QPushButton;
    lRun-&gt;setText("Run");
    m_widgetMap[lRun] = "run";

    QHBoxLayout* lButtonLayout = new QHBoxLayout;
    lButtonLayout-&gt;addWidget(lRun);
    lButtonLayout-&gt;setAlignment(Qt::AlignLeft);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lButtonLayout);
    lMainLayout-&gt;addWidget(customPlot);

    setLayout(lMainLayout);
    
    connect(lRun, SIGNAL(clicked()), this, SLOT(onClick()));
    connect(customPlot, SIGNAL(mousePress(QMouseEvent*)), this, SLOT(slotMousePress(QMouseEvent*)));
    connect(customPlot, SIGNAL(mouseMove(QMouseEvent*)), this, SLOT(slotMouseMove(QMouseEvent*)));
}
//================================================
GWindow::~GWindow() {

}
//================================================
void GWindow::onClick() {
    QWidget* lWidget = qobject_cast&lt;QWidget*&gt;(sender());
    QString lWidgetId = m_widgetMap[lWidget];
    onEvent(lWidgetId);
}
//================================================
void GWindow::onEvent(const QString&amp; event) {
    if(event == "add_point") {
        m_xData &lt;&lt; m_x;
        m_yData &lt;&lt; m_y;
        customPlot-&gt;graph(0)-&gt;setData(m_xData, m_yData);
        customPlot-&gt;replot();
    }
    else if(event == "clear_point") {
        if(m_clearFlag == false) {return;}
        m_xData.removeAt(m_iClear);
        m_yData.removeAt(m_iClear);
        customPlot-&gt;graph(0)-&gt;setData(m_xData, m_yData);
        customPlot-&gt;graph(3)-&gt;setData({}, {});
        customPlot-&gt;replot();
    }
    else if(event == "mouse_move") {
        m_clearFlag = false;
        m_coords-&gt;position-&gt;setCoords(m_x, m_y + 2.5);
        customPlot-&gt;graph(3)-&gt;setData({}, {});
        detectPoint();
        m_coords-&gt;setText(QString("(%1 ; %2)").arg(m_x, 0, 'g', 2).arg(m_y, 0, 'g', 2));
        customPlot-&gt;graph(2)-&gt;setData({m_x}, {m_y});
        customPlot-&gt;replot();
    }
    else if(event == "run") {
        interpolation();
    }
}
//================================================
void GWindow::interpolation() {
    int lSize = m_xData.size();
    if(lSize &lt; 3) {return;}
    sort();
    gsl_spline* lSpline = gsl_spline_alloc(gsl_interp_cspline, lSize);
    gsl_spline_init(lSpline, m_xData.data(), m_yData.data(), lSize);
    gsl_interp_accel* lAccel = gsl_interp_accel_alloc();

    double lXmin = m_xData.first();
    double lXmax = m_xData.last();
    double lN = 200;
    double dX = (lXmax - lXmin) / lN;
    
    customPlot-&gt;graph(1)-&gt;setData({}, {});
    
    m_ymin = m_yData.at(0);
    m_ymax = m_yData.at(0);
    
    for(double lX = lXmin; lX &lt;= lXmax; lX += dX) { 
        double lY = gsl_spline_eval(lSpline , lX, lAccel);
        if(lY &lt; m_ymin) {m_ymin = lY;}
        if(lY &gt; m_ymax) {m_ymax = lY;}
        customPlot-&gt;graph(1)-&gt;addData(lX, lY);
    }
    
    customPlot-&gt;yAxis-&gt;setRange(m_ymin - 1.0, m_ymax + 1.0);
    customPlot-&gt;replot();
    
    qDebug() &lt;&lt; "gsl_spline_name : " &lt;&lt; gsl_spline_name(lSpline);
    qDebug() &lt;&lt; "gsl_spline_min_size : " &lt;&lt; gsl_spline_min_size(lSpline);
    qDebug() &lt;&lt; "gsl_interp_type_min_size : " &lt;&lt; gsl_interp_type_min_size(gsl_interp_cspline);
    
    gsl_spline_free(lSpline);
    gsl_interp_accel_free(lAccel);
}
//================================================
void GWindow::sort() {
    if(m_xData.size() &lt;= 1) {return;}
    QVector&lt;sGCoord&gt; lCoords;
    for(int i = 0; i &lt; m_xData.size(); i++) {
        double lX = m_xData.at(i);
        double lY = m_yData.at(i);
        sGCoord lCoord = {lX, lY};
        lCoords &lt;&lt; lCoord;
    }
    qSort(lCoords.begin(), lCoords.end(), [](const sGCoord&amp; a, const sGCoord&amp; b) {
        return a.x &lt; b.x;
    });
    m_xData.clear();
    m_yData.clear();
    for(int i = 0; i &lt; lCoords.size(); i++) {
        sGCoord lCoord = lCoords.at(i);
        double lX = lCoord.x;
        double lY = lCoord.y;
        m_xData &lt;&lt; lX;
        m_yData &lt;&lt; lY;
    }
}
//================================================
void GWindow::detectPoint() {
    for(int i = 0; i &lt; m_xData.size(); i++) {
        double lX = m_xData.at(i);
        double lY = m_yData.at(i);
        double dX = lX - m_x;
        double dY = lY - m_y;
        double dR = qSqrt(dX*dX + dY*dY);
        if(dR &lt;= 0.15) {
            m_iClear = i;
            customPlot-&gt;graph(3)-&gt;setData({lX}, {lY});
            customPlot-&gt;replot();
            m_clearFlag = true;
            break;
        }
    }
}
//================================================
void GWindow::slotMousePress(QMouseEvent* event) {
    if(event-&gt;button() == Qt::LeftButton) {
        m_x = customPlot-&gt;xAxis-&gt;pixelToCoord(event-&gt;pos().x());
        m_y = customPlot-&gt;yAxis-&gt;pixelToCoord(event-&gt;pos().y());
        onEvent("add_point");
    }
    else if(event-&gt;button() == Qt::RightButton) {
        onEvent("clear_point");
    }
}
//================================================
void GWindow::slotMouseMove(QMouseEvent* event) {
    m_x = customPlot-&gt;xAxis-&gt;pixelToCoord(event-&gt;pos().x());
    m_y = customPlot-&gt;yAxis-&gt;pixelToCoord(event-&gt;pos().y());
    onEvent("mouse_move");
}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_spline.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_spline.gif"></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">gsl_spline_name :  cspline
gsl_spline_min_size :  3
gsl_interp_type_min_size :  3</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="C---Builder"><a class="Link3" href="#">C++ Builder</a></h1><div class="Body3"><br><b>C++Builder</b> est un logiciel de développement rapide d'applications (RAD) conçu par Borland qui reprend les mêmes concepts, la même interface et la même bibliothèque que Delphi en utilisant le langage C++. Il permet de créer rapidement des applications Win32, Win64, MacOS, iOS, Android, ainsi qu'une interface graphique avec son éditeur de ressources. Utilisant en interne le compilateur Clang, ll est compatible avec la version de norme ISO C++ C++17. <br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#C---Builder-Installer-l-environnement-C--Builder-sous-Windows">Installer l'environnement C++Builder sous Windows</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#C---Builder-Tester-C--Builder-sous-Windows">Tester C++Builder sous Windows</a></div></div><br><h2 class="Title7 GTitle2" id="C---Builder-Installer-l-environnement-C--Builder-sous-Windows"><a class="Link9" href="#C---Builder">Installer l'environnement C++Builder sous Windows</a></h2><br><h3 class="Title8 GTitle3">Télécharger C++Builder</h3><br><b>RADStudio-1042-esd-4203.exe</b><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.embarcadero.com/fr/products/cbuilder/start-for-free">https://www.embarcadero.com/fr/products/cbuilder/start-for-free</a><br><br><h3 class="Title8 GTitle3">Installer C++Builder</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">RADStudio-1042-esd-4203.exe
Cocher -&gt; J'accepte le contrat de licence RAD Studio et la politique de confidentialité
Suivant
Cocher -&gt; Je me suis inscrit pour une version d'évaluation sur embarcadero.com
Numéro de série -&gt; HSAL-D9C8CU-4PR4SY-HJQS
S'enregistrer
Cocher -&gt; C++Builder Windows Entreprise Trial
Continuer
Autres Options -&gt; Décocher -&gt; Tout
Installer
Commencer à travailler
Association de fichiers -&gt; Tout désélectionner
OK
Sélectionner votre thème favori -&gt; Foncé
Suivant
Dossier projet par défaut -&gt; C:\Users\Admin\Documents\Embarcadero\Studio\Projets
Démarrer</pre></div></div><br><h2 class="Title7 GTitle2" id="C---Builder-Tester-C--Builder-sous-Windows"><a class="Link9" href="#C---Builder">Tester C++Builder sous Windows</a></h2><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Notes-et-references"><a class="Link3" href="#">Notes et références</a></h1><div class="Body3"><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://cs.stanford.edu/people/eroberts/courses/cs106b/materials/cppdoc/">https://cs.stanford.edu/people/eroberts/courses/cs106b/materials/cppdoc/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://vector-of-bool.github.io/2019/03/10/modules-1.html">https://vector-of-bool.github.io/2019/03/10/modules-1.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://gcc.gnu.org/wiki/cxx-modules">https://gcc.gnu.org/wiki/cxx-modules</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.modernescpp.com/index.php/c-20-concepts-defining-concepts">https://www.modernescpp.com/index.php/c-20-concepts-defining-concepts</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.ionos.fr/digitalguide/sites-internet/developpement-web/quest-ce-que-le-builder-pattern/">https://www.ionos.fr/digitalguide/sites-internet/developpement-web/quest-ce-que-le-builder-pattern/</a><br><br></div></div></div></div><br>