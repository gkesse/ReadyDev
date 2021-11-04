<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C++<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Introduction">Introduction</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Fondamentaux">Fondamentaux</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Programmation-orientee-objet">Programmation orientée objet</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Patrons-de-conception">Patrons de conception</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Manager-de-donnees">Manager de données</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Systeme-d-administration">Système d'administration</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Multithreading">Multithreading</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Interface-Homme-Machine-avec-Qt">Interface Homme-Machine avec Qt</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Creation-de-pitogrammes-avec-QtAwesome">Création de pitogrammes avec QtAwesome</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Trace-de-courbes-2D-avec-QCustomPlot">Tracé de courbes 2D avec QCustomPlot</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt">Communication Inter-Processus avec D-Bus sous Qt</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV">Vision par Ordinateur avec OpenCV</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Programmation-3D-avec-OpenGL">Programmation 3D avec OpenGL</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Calcul-scientifique-avec-GSL">Calcul scientifique avec GSL</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Programmation-reseau-socket-sous-Windows">Programmation réseau socket sous Windows</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Programmation-reseau-socket-sous-Linux">Programmation réseau socket sous Linux</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Programmation-reseau-avec-Boost-Asio">Programmation réseau avec Boost.Asio</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Programmation-reseau-RPC-avec-XML-RPC">Programmation réseau RPC avec XML-RPC</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Programmation-reseau-avec-cURL">Programmation réseau avec cURL</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Analyse-de-donnees-XML-avec-Libxml2">Analyse de données XML avec Libxml2</a></div></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>C++</b> est un langage de programmation compilé permettant la programmation sous de multiples paradigmes (comme la programmation procédurale, orientée objet ou générique). Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/b_cpp.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/b_cpp.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de C++.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Installer-l-environnement-C---sous-MSYS2"><a class="Link9" href="#Fondamentaux">Installer l'environnement C++ sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Installer-l-environnement-C---sous-MSYS2-Telecharger-MSYS2"><a class="Title8" href="#Fondamentaux-Installer-l-environnement-C---sous-MSYS2">Télécharger MSYS2</a></h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://repo.msys2.org/distrib/x86_64/msys2-x86_64-20210228.exe">https://repo.msys2.org/distrib/x86_64/msys2-x86_64-20210228.exe</a><br><br><h3 class="Title8 GTitle3" id="Fondamentaux-Installer-l-environnement-C---sous-MSYS2-Installer-MSYS2"><a class="Title8" href="#Fondamentaux-Installer-l-environnement-C---sous-MSYS2">Installer MSYS2</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">msys2-x86_64-20210228.exe
Suivant
Dossier d'installation -&gt; C:\msys64
Suivant
Raccourci du menu Démarrer -&gt; MSYS2 64bit
Suivant
Suivant
Terminer</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Installer-l-environnement-C---sous-MSYS2-Demarrer-MSYS2"><a class="Title8" href="#Fondamentaux-Installer-l-environnement-C---sous-MSYS2">Démarrer MSYS2</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Windows
MSYS2</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Installer-l-environnement-C---sous-MSYS2-Mettre-a-jour-les-packages-MSYS2"><a class="Title8" href="#Fondamentaux-Installer-l-environnement-C---sous-MSYS2">Mettre à jour les packages MSYS2</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -Syu</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Installer-l-environnement-C---sous-MSYS2-Installer-le-package--make----h3--pacman--S---needed---noconfirm-make"><a class="Title8" href="#Fondamentaux-Installer-l-environnement-C---sous-MSYS2">Installer le package (make)&lt; /h3&gt; pacman -S --needed --noconfirm make</a></h3><h3 class="Title8 GTitle3" id="Fondamentaux-Installer-l-environnement-C---sous-MSYS2-Installer-le-package--gcc-"><a class="Title8" href="#Fondamentaux-Installer-l-environnement-C---sous-MSYS2">Installer le package (gcc)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -S --needed --noconfirm gcc</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Installer-l-environnement-C---sous-WinLibs"><a class="Link9" href="#Fondamentaux">Installer l'environnement C++ sous WinLibs</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Installer-l-environnement-C---sous-WinLibs-Telecharger-WinLibs"><a class="Title8" href="#Fondamentaux-Installer-l-environnement-C---sous-WinLibs">Télécharger WinLibs</a></h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://winlibs.com/#download-release">https://winlibs.com/#download-release</a><br><br><b>winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-8.0.2-r1.7z</b><br><br><h3 class="Title8 GTitle3" id="Fondamentaux-Installer-l-environnement-C---sous-WinLibs-Extraire-WinLibs"><a class="Title8" href="#Fondamentaux-Installer-l-environnement-C---sous-WinLibs">Extraire WinLibs</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-8.0.2-r1.7z -&gt; Clic droit
Extraire vers winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-8.0.2-r1\</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Compiler-un-projet-C---sous-MSYS2"><a class="Link9" href="#Fondamentaux">Compiler un projet C++ sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Compiler-un-projet-C---sous-MSYS2-Editer-le-programme--main-cpp-"><a class="Title8" href="#Fondamentaux-Compiler-un-projet-C---sous-MSYS2">Éditer le programme (main.cpp)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Bonjour tout le monde\n";
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Compiler-un-projet-C---sous-MSYS2-Compiler-le-projet"><a class="Title8" href="#Fondamentaux-Compiler-un-projet-C---sous-MSYS2">Compiler le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">g++ -std=gnu++11 -c main.cpp -o main.o</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Compiler-un-projet-C---sous-MSYS2-Editer-les-liens-du-projet"><a class="Title8" href="#Fondamentaux-Compiler-un-projet-C---sous-MSYS2">Éditer les liens du projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">g++ -o rdcpp.exe main.o</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Compiler-un-projet-C---sous-MSYS2-Executer-le-projet"><a class="Title8" href="#Fondamentaux-Compiler-un-projet-C---sous-MSYS2">Exécuter le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">./rdcpp.exe</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-if"><a class="Link9" href="#Fondamentaux">Créer une condition if</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-condition-if-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-condition-if">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-condition-if-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-condition-if">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a(1000) est superieur a b(100)</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-if-else"><a class="Link9" href="#Fondamentaux">Créer une condition if else</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-condition-if-else-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-condition-if-else">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-condition-if-else-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-condition-if-else">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a(10) est inferieur ou egal a b(100)</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-else-if"><a class="Link9" href="#Fondamentaux">Créer une condition else if</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-condition-else-if-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-condition-else-if">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-condition-else-if-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-condition-else-if">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a(100) est egal a b(100)</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-boucle-for"><a class="Link9" href="#Fondamentaux">Créer une boucle for</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-boucle-for-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-boucle-for">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-boucle-for-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-boucle-for">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-bouble-while"><a class="Link9" href="#Fondamentaux">Créer une bouble while</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-bouble-while-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-bouble-while">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-bouble-while-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-bouble-while">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-boucle-do-while"><a class="Link9" href="#Fondamentaux">Créer une boucle do while</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-boucle-do-while-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-boucle-do-while">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-boucle-do-while-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-boucle-do-while">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Casser-une-boucle-for"><a class="Link9" href="#Fondamentaux">Casser une boucle for</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Casser-une-boucle-for-main-cpp"><a class="Title8" href="#Fondamentaux-Casser-une-boucle-for">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Casser-une-boucle-for-Resultat"><a class="Title8" href="#Fondamentaux-Casser-une-boucle-for">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Casser-une-boucle-while"><a class="Link9" href="#Fondamentaux">Casser une boucle while</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Casser-une-boucle-while-main-cpp"><a class="Title8" href="#Fondamentaux-Casser-une-boucle-while">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Casser-une-boucle-while-Resultat"><a class="Title8" href="#Fondamentaux-Casser-une-boucle-while">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Casser-une-boucle-do-while"><a class="Link9" href="#Fondamentaux">Casser une boucle do while</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Casser-une-boucle-do-while-main-cpp"><a class="Title8" href="#Fondamentaux-Casser-une-boucle-do-while">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Casser-une-boucle-do-while-Resultat"><a class="Title8" href="#Fondamentaux-Casser-une-boucle-do-while">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Continuer-une-boucle-for"><a class="Link9" href="#Fondamentaux">Continuer une boucle for</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Continuer-une-boucle-for-main-cpp"><a class="Title8" href="#Fondamentaux-Continuer-une-boucle-for">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Continuer-une-boucle-for-Resultat"><a class="Title8" href="#Fondamentaux-Continuer-une-boucle-for">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">f[-5.0] = -0.20
f[-4.0] = -0.25
f[-3.0] = -0.33
f[-2.0] = -0.50
f[-1.0] = -1.00
f[1.0] = 1.00
f[2.0] = 0.50
f[3.0] = 0.33
f[4.0] = 0.25
f[5.0] = 0.20</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Continuer-une-boucle-while"><a class="Link9" href="#Fondamentaux">Continuer une boucle while</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Continuer-une-boucle-while-main-cpp"><a class="Title8" href="#Fondamentaux-Continuer-une-boucle-while">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Continuer-une-boucle-while-Resultat"><a class="Title8" href="#Fondamentaux-Continuer-une-boucle-while">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">f[-5.0] = -0.20
f[-4.0] = -0.25
f[-3.0] = -0.33
f[-2.0] = -0.50
f[-1.0] = -1.00
f[1.0] = 1.00
f[2.0] = 0.50
f[3.0] = 0.33
f[4.0] = 0.25
f[5.0] = 0.20</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Continuer-une-boucle-do-while"><a class="Link9" href="#Fondamentaux">Continuer une boucle do while</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Continuer-une-boucle-do-while-main-cpp"><a class="Title8" href="#Fondamentaux-Continuer-une-boucle-do-while">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Continuer-une-boucle-do-while-Resultat"><a class="Title8" href="#Fondamentaux-Continuer-une-boucle-do-while">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">f[-5.0] = -0.20
f[-4.0] = -0.25
f[-3.0] = -0.33
f[-2.0] = -0.50
f[-1.0] = -1.00
f[1.0] = 1.00
f[2.0] = 0.50
f[3.0] = 0.33
f[4.0] = 0.25
f[5.0] = 0.20</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Recuperer-les-parametres-passes-en-ligne-de-commande"><a class="Link9" href="#Fondamentaux">Récupérer les paramètres passés en ligne de commande</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Recuperer-les-parametres-passes-en-ligne-de-commande-main-cpp"><a class="Title8" href="#Fondamentaux-Recuperer-les-parametres-passes-en-ligne-de-commande">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;cstdio&gt;
//===============================================
int main(int argc, char** argv) {
    for(int i = 0; i &lt; argc; i++) {
        printf("argv[%d] : %s\n", i, argv[i]);
    }
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Recuperer-les-parametres-passes-en-ligne-de-commande-Resultat"><a class="Title8" href="#Fondamentaux-Recuperer-les-parametres-passes-en-ligne-de-commande">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">./rdcpp.exe un deux trois</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">argv[0] : rdcpp.exe
argv[1] : un
argv[2] : deux
argv[3] : trois</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-machine-a-etats-finis"><a class="Link9" href="#Fondamentaux">Créer une machine à états finis</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-machine-a-etats-finis-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-machine-a-etats-finis">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-machine-a-etats-finis-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-machine-a-etats-finis">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">initialiser le systeme
afficher la liste des methodes
choisir une methode
executer la methode</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-surcharge-de-fonctions"><a class="Link9" href="#Fondamentaux">Créer une surcharge de fonctions</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-surcharge-de-fonctions-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-surcharge-de-fonctions">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-surcharge-de-fonctions-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-surcharge-de-fonctions">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde
Bonjour Gerard KESEE</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-allocation-memoire-dynamique"><a class="Link9" href="#Fondamentaux">Créer une allocation mémoire dynamique</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-allocation-memoire-dynamique-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-allocation-memoire-dynamique">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int* lData = new int;
    *lData = 1000;
    printf("Donnee : %d\n", *lData);
    delete lData;
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-allocation-memoire-dynamique-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-allocation-memoire-dynamique">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Donnee : 1000</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-tableau-d-allocation-memoire-dynamique"><a class="Link9" href="#Fondamentaux">Créer un tableau d'allocation mémoire dynamique</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-tableau-d-allocation-memoire-dynamique-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-tableau-d-allocation-memoire-dynamique">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-tableau-d-allocation-memoire-dynamique-Resultat"><a class="Title8" href="#Fondamentaux-Creer-un-tableau-d-allocation-memoire-dynamique">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Donnee[0] : 0
Donnee[1] : 1
Donnee[2] : 4
Donnee[3] : 9
Donnee[4] : 16
Donnee[5] : 25
Donnee[6] : 36
Donnee[7] : 49
Donnee[8] : 64
Donnee[9] : 81</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-inline-automatique"><a class="Link9" href="#Fondamentaux">Créer une fonction inline automatique</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-inline-automatique-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-inline-automatique">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================
int main(int argc, char** argv) {
    GHello lHello;
    lHello.sayHello();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-inline-automatique-GHello-h"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-inline-automatique">GHello.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-inline-automatique-GHello-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-inline-automatique">GHello.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-inline-automatique-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-inline-automatique">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-inline-externe"><a class="Link9" href="#Fondamentaux">Créer une fonction inline externe</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-inline-externe-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-inline-externe">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================
int main(int argc, char** argv) {
    GHello lHello;
    lHello.sayHello();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-inline-externe-GHello-h"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-inline-externe">GHello.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-inline-externe-GHello-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-inline-externe">GHello.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-inline-externe-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-inline-externe">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-reference"><a class="Link9" href="#Fondamentaux">Créer une référence</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-reference-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-reference">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-reference-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-reference">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Donnee : 2021</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-espace-de-nom"><a class="Link9" href="#Fondamentaux">Créer un espace de nom</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-espace-de-nom-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-espace-de-nom">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-espace-de-nom-Resultat"><a class="Title8" href="#Fondamentaux-Creer-un-espace-de-nom">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-espace-de-nom-Resultat"><a class="Title8" href="#Fondamentaux-Creer-un-espace-de-nom">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-template-de-fonction"><a class="Link9" href="#Fondamentaux">Créer un template de fonction</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-de-fonction-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-template-de-fonction">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-de-fonction-Resultat"><a class="Title8" href="#Fondamentaux-Creer-un-template-de-fonction">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">min&lt;double&gt;(20.5, 50.5) : 20.5
min&lt;int&gt;(40, 30) : 30
min&lt;std::string&gt;("bonjour", "bonbon") : bonbon</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-template-de-classe"><a class="Link9" href="#Fondamentaux">Créer un template de classe</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-de-classe-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-template-de-classe">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-de-classe-GRectangle-h"><a class="Title8" href="#Fondamentaux-Creer-un-template-de-classe">GRectangle.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-de-classe-GRectangle-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-template-de-classe">GRectangle.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-de-classe-Resultat"><a class="Title8" href="#Fondamentaux-Creer-un-template-de-classe">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Rectangle (-1, 2, -2, 2) : width : 3
Rectangle (-1, 2, -2, 2) : height : 4
Rectangle (-1, 2, -2, 2) : perimeter : 14
Rectangle (-1, 2, -2, 2) : area : 12
Rectangle (-1, 2, -2, 2) : area : 12
Rectangle (-1, 2, -2, 2) : contain (0,-1) : 1
Rectangle (-1, 2, -2, 2) : contain (0,-3) : 0</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-template-de-classe-header"><a class="Link9" href="#Fondamentaux">Créer un template de classe header</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-de-classe-header-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-template-de-classe-header">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-de-classe-header-GRectangle-h"><a class="Title8" href="#Fondamentaux-Creer-un-template-de-classe-header">GRectangle.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-de-classe-header-GRectangle-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-template-de-classe-header">GRectangle.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GRectangle.h"
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-de-classe-header-Resultat"><a class="Title8" href="#Fondamentaux-Creer-un-template-de-classe-header">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Rectangle (-1, 2, -2, 2) : width : 3.00
Rectangle (-1, 2, -2, 2) : height : 4.00
Rectangle (-1, 2, -2, 2) : perimeter : 14.00
Rectangle (-1, 2, -2, 2) : area : 12.00
Rectangle (-1, 2, -2, 2) : area : 12.00
Rectangle (-1, 2, -2, 2) : contain (0,-1) : 1
Rectangle (-1, 2, -2, 2) : contain (0,-3) : 0</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-template-variadique--C--11-"><a class="Link9" href="#Fondamentaux">Créer un template variadique (C++11)</a></h2><br>Un pack de paramètres de modèle est un paramètre de modèle qui accepte zéro ou plusieurs arguments de modèle (non-types, types ou modèles). Un pack de paramètres de fonction est un paramètre de fonction qui accepte zéro ou plusieurs arguments de fonction. Un modèle avec au moins un pack de paramètres est appelé un modèle variadique.<br><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-variadique--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-template-variadique--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-template-variadique--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Creer-un-template-variadique--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde ! 123</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-exception"><a class="Link9" href="#Fondamentaux">Créer une exception</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-exception-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-exception">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-exception-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-exception">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">divide (22, 7) : 3.14
divide (33, 8) : 4.12
[erreur] division par zero</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-exception-de-classe"><a class="Link9" href="#Fondamentaux">Créer une exception de classe</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-exception-de-classe-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-exception-de-classe">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-exception-de-classe-GError-h"><a class="Title8" href="#Fondamentaux-Creer-une-exception-de-classe">GError.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-exception-de-classe-GError-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-exception-de-classe">GError.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-exception-de-classe-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-exception-de-classe">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">divide (22, 7) : 3.14
divide (33, 8) : 4.12
[erreur] division par zero</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-reference-LValue"><a class="Link9" href="#Fondamentaux">Créer une référence LValue</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-reference-LValue-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-reference-LValue">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-reference-LValue-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-reference-LValue">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a : 100
a : 200</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-reference-LValue-de-fonction"><a class="Link9" href="#Fondamentaux">Créer une référence LValue de fonction</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-reference-LValue-de-fonction-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-reference-LValue-de-fonction">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-reference-LValue-de-fonction-Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-reference-LValue-de-fonction">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a : 100
a : 200</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-reference-RValue--C--11-"><a class="Link9" href="#Fondamentaux">Créer une référence RValue (C++11)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-reference-RValue--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-reference-RValue--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-reference-RValue--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-reference-RValue--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a : 100
a : 100
b : 200</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-reference-RValue-de-fonction--C--11-"><a class="Link9" href="#Fondamentaux">Créer une référence RValue de fonction (C++11)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-reference-RValue-de-fonction--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-reference-RValue-de-fonction--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-reference-RValue-de-fonction--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-reference-RValue-de-fonction--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">a : 100
v : 200</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-deduction-de-type-avec-auto--C--11-"><a class="Link9" href="#Fondamentaux">Créer une déduction de type avec auto (C++11)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-deduction-de-type-avec-auto--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-deduction-de-type-avec-auto--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-deduction-de-type-avec-auto--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-deduction-de-type-avec-auto--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">var_int : 100
var_double : 3.14
var_bool : 1
var_string : voici ma chaine</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-deduction-de-type-liste-avec-auto--C--11-"><a class="Link9" href="#Fondamentaux">Créer une déduction de type liste avec auto (C++11)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-deduction-de-type-liste-avec-auto--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-deduction-de-type-liste-avec-auto--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-deduction-de-type-liste-avec-auto--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-deduction-de-type-liste-avec-auto--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">1 ; 2 ; 3 ; 4 ; 5
1.1 ; 2.2 ; 3.3 ; 4.4 ; 5.5
un ; deux ; trois ; quatre ; cinq</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--11-"><a class="Link9" href="#Fondamentaux">Créer une évaluation d'expression avec constexpr (C++11)</a></h2><br>En C ++11, une fonction <b>constexpr </b>ne doit contenir qu'une seule instruction <b>return</b>.<br><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">product (3, 4) : 12
product (4, 5) : 20
product (5, 6) : 30</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--14-"><a class="Link9" href="#Fondamentaux">Créer une évaluation d'expression avec constexpr (C++14)</a></h2><br>En C ++14, une fonction <b>constexpr </b>autorise plusieurs instructions.<br><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--14--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--14-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--14--Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-evaluation-d-expression-avec-constexpr--C--14-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">product (3, 4) : 12
product (4, 5) : 20
product (5, 6) : 30</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-lambda--C--11-"><a class="Link9" href="#Fondamentaux">Créer une fonction lambda (C++11)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-lambda--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-lambda--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-lambda--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-lambda--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">1 ; 2 ; 3 ; 4 ; 5
5 ; 10 ; 15 ; 20 ; 25</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-lambda-comme-parametre--C--14-"><a class="Link9" href="#Fondamentaux">Créer une fonction lambda comme paramètre (C++14)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-lambda-comme-parametre--C--14--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-lambda-comme-parametre--C--14-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-lambda-comme-parametre--C--14--Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-lambda-comme-parametre--C--14-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">42
1 ; 2 ; 3 ; 4 ; 5</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-boucle-for-basee-sur-une-palge--C--11-"><a class="Link9" href="#Fondamentaux">Créer une boucle for basée sur une palge (C++11)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-boucle-for-basee-sur-une-palge--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-boucle-for-basee-sur-une-palge--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-boucle-for-basee-sur-une-palge--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-boucle-for-basee-sur-une-palge--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">1 ; 2 ; 3 ; 4 ; 5
5 ; 6 ; 7 ; 8 ; 9</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-module-avec-import--export-et-module--C--20-"><a class="Link9" href="#Fondamentaux">Créer un module avec import, export et module (C++20)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-module-avec-import--export-et-module--C--20--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-module-avec-import--export-et-module--C--20-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
import hello;
//===============================================
int main (int argc, char** argv) {
    sayHello("Gerard KESSE");
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-module-avec-import--export-et-module--C--20--GHello-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-module-avec-import--export-et-module--C--20-">GHello.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-module-avec-import--export-et-module--C--20--Compiler-le-projet"><a class="Title8" href="#Fondamentaux-Creer-un-module-avec-import--export-et-module--C--20-">Compiler le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">set "PATH=winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-8.0.2-r1\mingw64\bin;%PATH%"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">g++ -std=gnu++20 -fmodules-ts -c main.cpp -o main.o
g++ -std=gnu++20 -fmodules-ts -c GHello.cpp -o GHello.o
g++ -std=gnu++20 -fmodules-ts -o rdcpp.exe main.o GHello.o</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-module-avec-import--export-et-module--C--20--Resultat"><a class="Title8" href="#Fondamentaux-Creer-un-module-avec-import--export-et-module--C--20-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">rdcpp.exe</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">[module] Bonjour Gerard KESSE</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Activer-la-sortie-boolalpha--C--11-"><a class="Link9" href="#Fondamentaux">Activer la sortie boolalpha (C++11)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Activer-la-sortie-boolalpha--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Activer-la-sortie-boolalpha--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Activer-la-sortie-boolalpha--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Activer-la-sortie-boolalpha--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">boolalpha true: true
boolalpha false: false
noboolalpha true: 1
noboolalpha false: 0
"true false" parsed as 1 0</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Activier-la-sortie-noboolalpha--C--11-"><a class="Link9" href="#Fondamentaux">Activier la sortie noboolalpha (C++11)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Activier-la-sortie-noboolalpha--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Activier-la-sortie-noboolalpha--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Activier-la-sortie-noboolalpha--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Activier-la-sortie-noboolalpha--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">boolalpha true: true
boolalpha false: false
noboolalpha true: 1
noboolalpha false: 0
"true false" parsed as 1 0</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-standard--C--11-"><a class="Link9" href="#Fondamentaux">Vérifier si un type a une mise en forme standard (C++11)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-standard--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-standard--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-standard--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-standard--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">true
false
false</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-scalaire--C--11-"><a class="Link9" href="#Fondamentaux">Vérifier si un type a une mise en forme scalaire (C++11)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-scalaire--C--11--main-cpp"><a class="Title8" href="#Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-scalaire--C--11-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-scalaire--C--11--Resultat"><a class="Title8" href="#Fondamentaux-Verifier-si-un-type-a-une-mise-en-forme-scalaire--C--11-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">is_scalar:
int: true
A: false
A&amp;: false
A*: true
int(int): false
int(*)(int): true</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-predicat-avec-concept--C--20-"><a class="Link9" href="#Fondamentaux">Créer un prédicat avec concept (C++20)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-predicat-avec-concept--C--20--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-predicat-avec-concept--C--20-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-predicat-avec-concept--C--20--Resultat"><a class="Title8" href="#Fondamentaux-Creer-un-predicat-avec-concept--C--20-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">template : 2
concept  : 1</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-predicat-avec-requires--C--20-"><a class="Link9" href="#Fondamentaux">Créer un predicat avec requires (C++20)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-predicat-avec-requires--C--20--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-predicat-avec-requires--C--20-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-predicat-avec-requires--C--20--Resultat"><a class="Title8" href="#Fondamentaux-Creer-un-predicat-avec-requires--C--20-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">template : 2
require  : 1</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-avec-consteval--C--20-"><a class="Link9" href="#Fondamentaux">Créer une fonction avec consteval (C++20)</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-avec-consteval--C--20--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-avec-consteval--C--20-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-avec-consteval--C--20--Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-avec-consteval--C--20-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">consteval (5) : 25</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-de-coroutine--C--20-"><a class="Link9" href="#Fondamentaux">Créer une fonction de coroutine (C++20)</a></h2><br>Une coroutine est une fonction qui peut suspendre l'exécution pour être reprise plus tard. Les coroutines sont sans pile: elles suspendent l'exécution en retournant à l'appelant et les données nécessaires pour reprendre l'exécution sont stockées séparément de la pile. Cela permet un code séquentiel qui s'exécute de manière asynchrone (par exemple pour gérer des E / S non bloquantes sans rappels explicites), et prend également en charge des algorithmes sur des séquences infinies calculées paresseusement et d'autres utilisations.<br><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-de-coroutine--C--20--main-cpp"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-de-coroutine--C--20-">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-une-fonction-de-coroutine--C--20--Resultat"><a class="Title8" href="#Fondamentaux-Creer-une-fonction-de-coroutine--C--20-">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Coroutine started on thread: 1
New thread ID: 2
Coroutine resumed on thread: 2</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-parametre-non-utilise"><a class="Link9" href="#Fondamentaux">Créer un paramètre non utilisé</a></h2><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-parametre-non-utilise-main-cpp"><a class="Title8" href="#Fondamentaux-Creer-un-parametre-non-utilise">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    (void)argc;
    (void)argv;
    printf("Bonjour tout le monde\n");
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Fondamentaux-Creer-un-parametre-non-utilise-Resultat"><a class="Title8" href="#Fondamentaux-Creer-un-parametre-non-utilise">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Bonjour tout le monde</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation-orientee-objet"><a class="Link3" href="#">Programmation orientée objet</a></h1><div class="Body3"><br>La <b>programmation orientée objet</b> permet d'encapsuler dans une classe les attributs d'un objet et les méthodes qui permettent d'interagir avec l'objet.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Fondamentaux"><a class="Link9" href="#Programmation-orientee-objet">Fondamentaux</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Fondamentaux-Creation-d-une-classe">Création d'une classe</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Fondamentaux-Creation-d-un-constructeur">Création d'un constructeur</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Fondamentaux-Creation-d-un-destructeur">Création d'un destructeur</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Fondamentaux-Creation-d-un-constructeur-de-copie">Création d'un constructeur de copie</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Fondamentaux-Creation-d-un-mutateur--setter-">Création d'un mutateur (setter)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Fondamentaux-Creation-d-un-accesseur--getter-">Création d'un accesseur (getter)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Fondamentaux-Initialisation-d-un-objet-avec-des-accolades">Initialisation d'un objet avec des accolades</a></div></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Fondamentaux-Creation-d-une-classe"><a class="Title8" href="#Programmation-orientee-objet-Fondamentaux">Création d'une classe</a></h3><br>Cette opération permet de présenter la <b>structure d'une classe</b>. Une classe est créée grâce au mot clé <b>class</b>.<br><br>Création de la classe<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {

};
//===============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Fondamentaux-Creation-d-un-constructeur"><a class="Title8" href="#Programmation-orientee-objet-Fondamentaux">Création d'un constructeur</a></h3><br>Cette opération permet d'<b>appeler une méthode à chaque construction</b> d'un objet de la classe. Un objet est construit au moment de la déclaration de l'objet.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObj;
}
//===============================================</pre></div></div><br>Implémentation du constructeur (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass::GClass() {
    printf("Je suis le constructeur\n");
}
//===============================================</pre></div></div><br>Déclaration du constructeur (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_constructor.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_constructor.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Fondamentaux-Creation-d-un-destructeur"><a class="Title8" href="#Programmation-orientee-objet-Fondamentaux">Création d'un destructeur</a></h3><br>Cette opération permet d'<b>appeler une méthode à chaque destruction</b> d'un objet de la classe. Un objet est détruit quand sort de la portée ou du contexte de déclaration de l'objet.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObj;
}
//===============================================</pre></div></div><br>Implémentation du destructeur (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass::~GClass() {
    printf("Je suis le destructeur\n");
}
//===============================================</pre></div></div><br>Déclaration du destructeur (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    ~GClass();
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_destructor.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_destructor.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Fondamentaux-Creation-d-un-constructeur-de-copie"><a class="Title8" href="#Programmation-orientee-objet-Fondamentaux">Création d'un constructeur de copie</a></h3><br>Cette opération permet d'<b>initialiser un objet avec un autre objet</b> au moment de la déclaration de l'objet.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObj("Gerard KESSE");
    GClass lObjA(lObj);
    GClass lObjB = lObj;
}
//===============================================</pre></div></div><br>Implémentation du constructeur de copie (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass::GClass() {
    printf("Je suis le constructeur\n");
}
//===============================================
GClass::GClass(const std::string&amp; _name) {
    printf("Je suis le constructeur (2)\n");
    m_name = _name;
}
//===============================================
GClass::GClass(const GClass&amp; _class) {
    printf("Je suis le constructeur de copie\n");
    m_name = _class.m_name;
}
//===============================================
GClass::~GClass() {
    printf("Je suis le destructeur\n");
}
//===============================================</pre></div></div><br>Déclaration du constructeur de copie (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(const std::string&amp; _name);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

protected:
    std::string m_name;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_copy_constructor.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_copy_constructor.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Fondamentaux-Creation-d-un-mutateur--setter-"><a class="Title8" href="#Programmation-orientee-objet-Fondamentaux">Création d'un mutateur (setter)</a></h3><br>Cette opération permet d'<b>initialiser un attribut</b> d'un objet depuis l'extérieur.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObj;
    lObj.setName("Gerard KESSE");
}
//===============================================</pre></div></div><br>Implémentation du mutateur (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GClass::setName(const std::string&amp; _name) {
    printf("Je suis le mutateur\n");
    m_name = _name;
}
//===============================================</pre></div></div><br>Déclaration du mutateur (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    ~GClass();
    void setName(const std::string&amp; _name);

private:
    std::string m_name;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_setter.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_setter.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Fondamentaux-Creation-d-un-accesseur--getter-"><a class="Title8" href="#Programmation-orientee-objet-Fondamentaux">Création d'un accesseur (getter)</a></h3><br>Cette opération permet d'<b>accéder à un attribut</b> d'un objet depuis l'extérieur.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObj;
    lObj.setName("Gerard KESSE");
    std::string lName = lObj.getName();
    std::cout &lt;&lt; "Name : " &lt;&lt; lName &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de l'accesseur (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
std::string GClass::getName() const {
    printf("Je suis l'accesseur\n");
    return m_name;
}
//===============================================</pre></div></div><br>Déclaration de l'accesseur (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    ~GClass();
    void setName(const std::string&amp; _name);
    std::string getName() const;

private:
    std::string m_name;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_getter.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_getter.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Fondamentaux-Initialisation-d-un-objet-avec-des-accolades"><a class="Title8" href="#Programmation-orientee-objet-Fondamentaux">Initialisation d'un objet avec des accolades</a></h3><br>Cette opération permet de <b>reproduire le concept d'initialisation</b> d'une structure avec des accolades.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObj = {"Gerard KESSE"};
    std::string lName = lObj.getName();
    std::cout &lt;&lt; "Name : " &lt;&lt; lName &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation du constructeur de l'objet (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass::GClass(const std::string&amp; _name) {
    printf("Je suis le constructeur (2)\n");
    m_name = _name;
}
//===============================================</pre></div></div><br>Déclaration du constructeur de l'objet (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(const std::string&amp; _name);
    ~GClass();
    void setName(const std::string&amp; _name);
    std::string getName() const;

private:
    std::string m_name;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_accolade.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_accolade.png"></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Heritage-de-classe"><a class="Link9" href="#Programmation-orientee-objet">Héritage de classe</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Heritage-de-classe-Heritage-d-une-classe">Héritage d'une classe</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Heritage-de-classe-Polymorphisme-de-classe">Polymorphisme de classe</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Heritage-de-classe-Creation-d-une-classe-abstraite">Création d'une classe abstraite</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Heritage-de-classe-Creation-d-une-interface">Création d'une interface</a></div></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Heritage-de-classe-Heritage-d-une-classe"><a class="Title8" href="#Programmation-orientee-objet-Heritage-de-classe">Héritage d'une classe</a></h3><br>Cette opération permet à une classe fille de <b>réutiliser les attributs et les méthodes</b> d'une classe mère.<br><br>Programme principal (sans accolades)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClassA lObj;
    lObj.setName("Gerard KESSE");
    lObj.setEmail("gerard.kesse@readydev.com");
    std::string lName = lObj.getName();
    std::string lEmail = lObj.getEmail();
    std::cout &lt;&lt; "Name....: " &lt;&lt; lName &lt;&lt; "\n";
    std::cout &lt;&lt; "Email...: " &lt;&lt; lEmail &lt;&lt; "\n";
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_inheritance.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_inheritance.png"></div><br>Programme principal (avec accolades)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClassA lObj = {"Gerard KESSE", "gerard.kesse@readydev.com"};
    std::string lName = lObj.getName();
    std::string lEmail = lObj.getEmail();
    std::cout &lt;&lt; "Name....: " &lt;&lt; lName &lt;&lt; "\n";
    std::cout &lt;&lt; "Email...: " &lt;&lt; lEmail &lt;&lt; "\n";
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_inheritance_2.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_inheritance_2.png"></div><br>Implémentation de la classe mère (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass::GClass() {
    printf("Je suis le constructeur\n");
}
//===============================================
GClass::GClass(const std::string&amp; _name) {
    printf("Je suis le constructeur (2)\n");
    m_name = _name;
}
//===============================================
GClass::~GClass() {
    printf("Je suis le destructeur\n");
}
//===============================================
void GClass::setName(const std::string&amp; _name) {
    printf("Je suis le mutateur\n");
    m_name = _name;
}
//===============================================
std::string GClass::getName() const {
    printf("Je suis l'accesseur\n");
    return m_name;
}
//===============================================</pre></div></div><br>Déclaration de la classe mère (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(const std::string&amp; _name);
    ~GClass();
    void setName(const std::string&amp; _name);
    std::string getName() const;

private:
    std::string m_name;
};
//===============================================</pre></div></div><br>Implémentation de la classe fille (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClassA::GClassA() {
    printf("Je suis le constructeur A\n");
}
//===============================================
GClassA::GClassA(const std::string&amp; _name, const std::string&amp; _email) :
GClass(_name) {
    printf("Je suis le constructeur A(2)\n");
    m_email = _email;
}
//===============================================
GClassA::~GClassA() {
    printf("Je suis le destructeur A\n");
}
//===============================================
void GClassA::setEmail(const std::string&amp; _email) {
    printf("Je suis le mutateur A\n");
    m_email = _email;
}
//===============================================
std::string GClassA::getEmail() const {
    printf("Je suis l'accesseur A\n");
    return m_email;
}
//===============================================</pre></div></div><br>Déclaration de la classe fille (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClassA : public GClass {
public:
    GClassA();
    GClassA(const std::string&amp; _name, const std::string&amp; _email);
    ~GClassA();
    void setEmail(const std::string&amp; _email);
    std::string getEmail() const;

private:
    std::string m_email;
};
//===============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Heritage-de-classe-Polymorphisme-de-classe"><a class="Title8" href="#Programmation-orientee-objet-Heritage-de-classe">Polymorphisme de classe</a></h3><br>Cette opération permet de <b>créer une méthode qui peut prendre plusieurs formes</b> en fonction du type de l'objet. La méthode polymorphe est appelée méthode virtuelle et elle créée grâce au mot clé <b>virtual</b>.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    std::vector&lt;GClass*&gt; lObjs;
    GClass* lObjA = new GClass("Pierre DUPONT");
    GClassA* lObjB = new GClassA("Gerard KESSE", "gerard.kesse@readydev.com");

    lObjs.push_back(lObjA);
    lObjs.push_back(lObjB);

    for(int i = 0; i &lt; lObjs.size(); i++) {
        GClass* lObj = lObjs.at(i);
        lObj-&gt;print();
        delete lObj;
    }
}
//===============================================</pre></div></div><br>Implémentation de la méthode polymorphe dans la classe mère (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GClass::print() const {
    printf("Je suis une methode polymorphe\n");
    printf("Name.....: %s\n", m_name.c_str());
}
//===============================================</pre></div></div><br>Déclaration de la méthode polymorphe dans la classe mère (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(const std::string&amp; _name);
    virtual ~GClass();
    void setName(const std::string&amp; _name);
    std::string getName() const;
    virtual void print() const;

protected:
    std::string m_name;
};
//===============================================</pre></div></div><br>Implémentation de la méthode polymorphe dans la classe fille (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GClassA::print() const {
    printf("Je suis une methode polymorphe A\n");
    printf("Name.....: %s\n", m_name.c_str());
    printf("Email....: %s\n", m_email.c_str());
}
//===============================================</pre></div></div><br>Déclaration de la méthode polymorphe dans la classe fille (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClassA : public GClass {
public:
    GClassA();
    GClassA(const std::string&amp; _name, const std::string&amp; _email);
    ~GClassA();
    void setEmail(const std::string&amp; _email);
    std::string getEmail() const;
    void print() const;

private:
    std::string m_email;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_polymorphism.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_polymorphism.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Heritage-de-classe-Creation-d-une-classe-abstraite"><a class="Title8" href="#Programmation-orientee-objet-Heritage-de-classe">Création d'une classe abstraite</a></h3><br>Cette opération permet de <b>grouper un ensemble de méthodes standards et au moins une méthode virtuelle pure</b> dans une classe mère. Les classes filles doivent implémenter l'ensemble des méthodes virtuelles pures. Il est impossible de créer une instance de la classe abstraite.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass* lObj = new GClassA("Gerard KESSE", "gerard.kesse@readydev.com");
    lObj-&gt;print();
    delete lObj;
}
//===============================================</pre></div></div><br>Création des méthodes non virtuelles pures dans la classe mère (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass::GClass() {
    printf("Je suis le constructeur\n");
}
//===============================================
GClass::GClass(const std::string&amp; _name) {
    printf("Je suis le constructeur (2)\n");
    m_name = _name;
}
//===============================================
GClass::~GClass() {
    printf("Je suis le destructeur\n");
}
//===============================================
void GClass::setName(const std::string&amp; _name) {
    printf("Je suis le mutateur\n");
    m_name = _name;
}
//===============================================
std::string GClass::getName() const {
    printf("Je suis l'accesseur\n");
    return m_name;
}
//===============================================</pre></div></div><br>Déclaration de la méthode virtuelle pure dans la classe mère (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(const std::string&amp; _name);
    virtual ~GClass();
    void setName(const std::string&amp; _name);
    std::string getName() const;
    virtual void print() const = 0;

protected:
    std::string m_name;
};
//===============================================</pre></div></div><br>Implémentation de la méthode polymorphe dans la classe fille (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClassA::GClassA() {
    printf("Je suis le constructeur A\n");
}
//===============================================
GClassA::GClassA(const std::string&amp; _name, const std::string&amp; _email) :
GClass(_name) {
    printf("Je suis le constructeur A(2)\n");
    m_email = _email;
}
//===============================================
GClassA::~GClassA() {
    printf("Je suis le destructeur A\n");
}
//===============================================
void GClassA::setEmail(const std::string&amp; _email) {
    printf("Je suis le mutateur A\n");
    m_email = _email;
}
//===============================================
std::string GClassA::getEmail() const {
    printf("Je suis l'accesseur A\n");
    return m_email;
}
//===============================================
void GClassA::print() const {
    printf("Je suis une methode polymorphe A\n");
    printf("Name.....: %s\n", m_name.c_str());
    printf("Email....: %s\n", m_email.c_str());
}
//===============================================</pre></div></div><br>Déclaration de la méthode polymorphe dans la classe fille (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClassA : public GClass {
public:
    GClassA();
    GClassA(const std::string&amp; _name, const std::string&amp; _email);
    ~GClassA();
    void setEmail(const std::string&amp; _email);
    std::string getEmail() const;
    void print() const;

private:
    std::string m_email;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_abstract_class.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_abstract_class.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Heritage-de-classe-Creation-d-une-interface"><a class="Title8" href="#Programmation-orientee-objet-Heritage-de-classe">Création d'une interface</a></h3><br>Cette opération permet de <b>grouper un ensemble de méthodes virtuelles pures</b> dans une classe mère. Les classes filles doivent implémenter l'ensemble des méthodes virtuelles pures. Il est impossible de créer une instance de l'interface.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass* lObj = new GClassA("Gerard KESSE", "gerard.kesse@readydev.com");
    lObj-&gt;print();
    delete lObj;
}
//===============================================</pre></div></div><br>Déclaration des méthodes virtuelles pures dans la classe mère(.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    virtual ~GClass() {}
    virtual void print() const = 0;
};
//===============================================</pre></div></div><br>Implémentation des méthodes polymorphes dans la classe fille (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClassA::GClassA() {
    printf("Je suis le constructeur A\n");
}
//===============================================
GClassA::GClassA(const std::string&amp; _name, const std::string&amp; _email) {
    printf("Je suis le constructeur A(2)\n");
    m_name = _name;
    m_email = _email;
}
//===============================================
GClassA::~GClassA() {
    printf("Je suis le destructeur A\n");
}
//===============================================
void GClassA::setName(const std::string&amp; _name) {
    printf("Je suis le mutateur A(1)\n");
    m_name = _name;
}
//===============================================
std::string GClassA::getName() const {
    printf("Je suis l'accesseur A(1)\n");
    return m_name;
}
//===============================================
void GClassA::setEmail(const std::string&amp; _email) {
    printf("Je suis le mutateur A\n");
    m_email = _email;
}
//===============================================
std::string GClassA::getEmail() const {
    printf("Je suis l'accesseur A\n");
    return m_email;
}
//===============================================
void GClassA::print() const {
    printf("Je suis une methode polymorphe A\n");
    printf("Name.....: %s\n", m_name.c_str());
    printf("Email....: %s\n", m_email.c_str());
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_interface.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_interface.png"></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Surcharge-d-operateurs"><a class="Link9" href="#Programmation-orientee-objet">Surcharge d'opérateurs</a></h2><br>Cette opération permet d'<b>associer des méthodes à des opérateurs</b> et de les appliquer sur des objets.<br><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-d-affichage-----">Surcharge de l'opérateur d'affichage (&lt;&lt;)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-d-affectation----">Surcharge de l'opérateur d'affectation (=)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-addition-affectation-----">Surcharge de l'opérateur addition-affectation (+=)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-soustraction-affectation-----">Surcharge de l'opérateur soustraction-affectation (-=)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-multiplication-affectation-----">Surcharge de l'opérateur multiplication-affectation (*=)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-division-affectation-----">Surcharge de l'opérateur division-affectation (/=)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-modulo-affectation-----">Surcharge de l'opérateur modulo-affectation (%=)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-addition----">Surcharge de l'opérateur addition (+)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-soustraction----">Surcharge de l'opérateur soustraction (-)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-multiplication----">Surcharge de l'opérateur multiplication (*)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-division----">Surcharge de l'opérateur division (/)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-orientee-objet-Surchage-d-operateurs-Surcharge-de-l-operateur-modulo----">Surcharge de l'opérateur modulo (%)</a></div></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-d-affichage-----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur d'affichage (&lt;&lt;)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(100);
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur d'affichage (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
std::ostream&amp; operator&lt;&lt;(std::ostream&amp; _os, const GClass&amp; _c) {
    _os &lt;&lt; _c.m_data;
    return _os;
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur d'affichage (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(int _data);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

public:
    friend std::ostream&amp; operator&lt;&lt;(std::ostream&amp; _os, const GClass&amp; _c);

protected:
    int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_print.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_print.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-d-affectation----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur d'affectation (=)</a></h3><br>Cette opération permet d'<b>affecter un objet à un autre objet</b>.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(100);
    GClass lObjB = lObjA;
    GClass lObjC;
    lObjC = lObjA;
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjB...: " &lt;&lt; lObjB &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjC...: " &lt;&lt; lObjC &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémenation de la surcharge de l'opérateur affectation (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass&amp; GClass::operator=(const GClass&amp; _c) {
    printf("Je surcharge l'operateur d'affectation (=)\n");
    m_data = _c.m_data;
    return *this;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur affectation (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(int _data);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

public:
    GClass&amp; operator=(const GClass&amp; _c);

protected:
    int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_assign.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_assign.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-addition-affectation-----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur addition-affectation (+=)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(100);
    GClass lObjB(50);
    lObjB += lObjA;
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjB...: " &lt;&lt; lObjB &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur addition-affectation (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass&amp; GClass::operator+=(const GClass&amp; _c) {
    printf("Je surcharge l'operateur d'addition-affectation (+=)\n");
    m_data += _c.m_data;
    return *this;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur addition-affectation (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(int _data);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

public:
    GClass&amp; operator+=(const GClass&amp; _c);

protected:
    int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_add_assign.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_add_assign.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-soustraction-affectation-----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur soustraction-affectation (-=)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(100);
    GClass lObjB(50);
    lObjB -= lObjA;
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjB...: " &lt;&lt; lObjB &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur soustraction-affectation (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass&amp; GClass::operator-=(const GClass&amp; _c) {
    printf("Je surcharge l'operateur de soustraction-affectation (-=)\n");
    m_data -= _c.m_data;
    return *this;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur soustraction-affectation (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(int _data);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

public:
    GClass&amp; operator-=(const GClass&amp; _c);

protected:
    int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_add_assign.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_add_assign.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-multiplication-affectation-----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur multiplication-affectation (*=)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(100);
    GClass lObjB(50);
    lObjB *= lObjA;
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjB...: " &lt;&lt; lObjB &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur multiplication-affectation (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass&amp; GClass::operator*=(const GClass&amp; _c) {
    printf("Je surcharge l'operateur de multiplication-affectation (*=)\n");
    m_data *= _c.m_data;
    return *this;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur multiplication-affectation (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(int _data);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

public:
    GClass&amp; operator*=(const GClass&amp; _c);

protected:
    int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_mul_assign.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_mul_assign.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-division-affectation-----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur division-affectation (/=)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(50);
    GClass lObjB(100);
    lObjB /= lObjA;
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjB...: " &lt;&lt; lObjB &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur division-affectation (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass&amp; GClass::operator/=(const GClass&amp; _c) {
    printf("Je surcharge l'operateur d'division-affectation (/=)\n");
    m_data /= _c.m_data;
    return *this;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur division-affectation (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(int _data);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

public:
    GClass&amp; operator/=(const GClass&amp; _c);

protected:
    int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_div_assign.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_div_assign.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-modulo-affectation-----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur modulo-affectation (%=)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(50);
    GClass lObjB(105);
    lObjB %= lObjA;
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjB...: " &lt;&lt; lObjB &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur modulo-affectation (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass&amp; GClass::operator%=(const GClass&amp; _c) {
    printf("Je surcharge l'operateur de modulo-affectation (%=)\n");
    m_data %= _c.m_data;
    return *this;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur modulo-affectation (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(int _data);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

public:
    GClass&amp; operator%=(const GClass&amp; _c);

protected:
    int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_mod_assign.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_mod_assign.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-addition----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur addition (+)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(100);
    GClass lObjB(50);
    GClass lObjC = lObjA + lObjB;
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjB...: " &lt;&lt; lObjB &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjC...: " &lt;&lt; lObjC &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur addition (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass operator+(const GClass&amp; _c1, const GClass&amp; _c2) {
    printf("Je surcharge l'operateur d'addition (+)\n");
    GClass c(_c1);
    c += _c2;
    return c;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur addition (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
GClass();
GClass(int _data);
GClass(const GClass&amp; _class);
virtual ~GClass();

public:
friend GClass operator+(const GClass&amp; _c1, const GClass&amp; _c2);

protected:
int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_add.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_add.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-soustraction----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur soustraction (-)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(100);
    GClass lObjB(50);
    GClass lObjC = lObjA - lObjB;
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjB...: " &lt;&lt; lObjB &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjC...: " &lt;&lt; lObjC &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur soustraction (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass operator-(const GClass&amp; _c1, const GClass&amp; _c2) {
    printf("Je surcharge l'operateur de soustraction (-)\n");
    GClass c(_c1);
    c -= _c2;
    return c;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur soustraction (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(int _data);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

public:
    friend GClass operator-(const GClass&amp; _c1, const GClass&amp; _c2);

protected:
    int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_sub.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_sub.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-multiplication----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur multiplication (*)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(100);
    GClass lObjB(50);
    GClass lObjC = lObjA * lObjB;
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjB...: " &lt;&lt; lObjB &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjC...: " &lt;&lt; lObjC &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur multiplication (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass operator*(const GClass&amp; _c1, const GClass&amp; _c2) {
    printf("Je surcharge l'operateur de multiplication (*)\n");
    GClass c(_c1);
    c *= _c2;
    return c;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur multiplication (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(int _data);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

public:
    friend GClass operator+(const GClass&amp; _c1, const GClass&amp; _c2);

protected:
    int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_mul.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_mul.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-division----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur division (/)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(50);
    GClass lObjB(100);
    GClass lObjC = lObjA / lObjB;
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjB...: " &lt;&lt; lObjB &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjC...: " &lt;&lt; lObjC &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur division (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass operator/(const GClass&amp; _c1, const GClass&amp; _c2) {
    printf("Je surcharge l'operateur d'division (/)\n");
    GClass c(_c1);
    c /= _c2;
    return c;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur division (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
   GClass();
   GClass(int _data);
   GClass(const GClass&amp; _class);
   virtual ~GClass();

public:
   friend GClass operator/(const GClass&amp; _c1, const GClass&amp; _c2);

protected:
   int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_div.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_div.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-modulo----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur modulo (%)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(50);
    GClass lObjB(105);
    GClass lObjC = lObjA + lObjB;
    std::cout &lt;&lt; "lObjA...: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjB...: " &lt;&lt; lObjB &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjC...: " &lt;&lt; lObjC &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur modulo (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass operator%(const GClass&amp; _c1, const GClass&amp; _c2) {
    printf("Je surcharge l'operateur de modulo (%)\n");
    GClass c(_c1);
    c %= _c2;
    return c;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur modulo (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
   GClass();
   GClass(int _data);
   GClass(const GClass&amp; _class);
   virtual ~GClass();

public:
   friend GClass operator%(const GClass&amp; _c1, const GClass&amp; _c2);

protected:
   int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_mod.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_mod.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-crochets-----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur crochets ([])</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(123);
    std::cout &lt;&lt; "lObjA......: " &lt;&lt; lObjA &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjA[0]...: " &lt;&lt; lObjA[0] &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjA[1]...: " &lt;&lt; lObjA[1] &lt;&lt; "\n";
    std::cout &lt;&lt; "lObjA[2]...: " &lt;&lt; lObjA[2] &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur corchets (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
int GClass::operator[](int _i) const {
    std::string lData = std::to_string(m_data);
    char lChar = lData[_i];
    int lInt = lChar - '0';
    return lInt;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur crochets (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(int _data);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

public:
    int operator[](int _i) const;

protected:
    int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_bracket.png" alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_bracket.png"></div><br><h3 class="GTitle3" id="Programmation-orientee-objet-Surcharge-d-operateurs-Surcharge-de-l-operateur-and-affectation-----"><a class="Title8" href="#Programmation-orientee-objet-Surcharge-d-operateurs">Surcharge de l'opérateur and-affectation (&amp;=)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass lObjA(123);
    lObjA &amp;= lObjA;
    std::cout &lt;&lt; "lObjA......: " &lt;&lt; lObjA &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Implémentation de la surcharge de l'opérateur and-affectation (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass&amp; GClass::operator&amp;=(const GClass&amp; _c) {
    printf("Je surcharge l'operateur and-affectation (&amp;=)\n");
    int lData = 0;
    for(int i = 0; i &lt; size(); i++) {
    	lData += (*this)[i] * _c[i];
    }
    m_data = lData;
    return *this;
}
//===============================================</pre></div></div><br>Déclaration de la surcharge de l'opérateur and-affectation (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(int _data);
    GClass(const GClass&amp; _class);
    virtual ~GClass();

public:
    GClass&amp; operator&amp;=(const GClass&amp; _c);

protected:
    int m_data;
};
//===============================================</pre></div></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_and_assign.png" alt="/Tutoriels/Software_Development/Cpp/img/i_poo_learn_operator_and_assign.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patrons-de-conception"><a class="Link3" href="#">Patrons de conception</a></h1><div class="Body3"><br>Les patrons de conception permettent de <b>proposer des modèles de conception</b> à des problèmes de conception rencontrés en développement logiciel.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Patrons-de-conception-Patrons-de-creation"><a class="Link9" href="#Patrons-de-conception">Patrons de création</a></h2><br>Les patrons de création permettent de <b>résoudre les problèmes</b> liés à la création et la configuration d'objets.<br><br><div class="Content0 GSummary3"><div class="Row26">Summary 3</div></div><br><h3 class="GTitle3" id="Patrons-de-conception-Patrons-de-creation-Patron-singleton"><a class="Title8" href="#Patrons-de-conception-Patrons-de-creation">Patron singleton</a></h3><br>Le patron singleton permet de <b>restreindre l'instanciation d'une classe</b> à un seul objet. <br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass::Instance()-&gt;run();
    GClass::Instance()-&gt;run();
}
//===============================================</pre></div></div><br>Déclaration du singleton (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    ~GClass();
    static GClass* Instance();
    void run();

private:
    static GClass* m_instance;
};
//===============================================</pre></div></div><br>Implémentation du singleton (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass* GClass::m_instance = 0;
//===============================================
GClass::GClass() {
    printf("appel du constructeur\n");
}
//===============================================
GClass::~GClass() {
    
}
//===============================================
GClass* GClass::Instance() {
    if(m_instance == 0) {
    	m_instance = new GClass;
    }
    return m_instance;
}
//===============================================
void GClass::run() {
    printf("appel de la methode (run)\n");
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_design_creation_singleton.png" alt="/Tutoriels/Software_Development/Cpp/img/i_design_creation_singleton.png"></div><br><h3 class="GTitle3" id="Patrons-de-conception-Patrons-de-creation-Patron-prototype"><a class="Title8" href="#Patrons-de-conception-Patrons-de-creation">Patron prototype</a></h3><br>Le patron prototype permet de <b>faciliter le création d'un objet complexe</b> à partir d'un objet de référence et une méthode de clonage.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    printf("### creation de la reference\n");
    GClass* lRefA = new GClassA("Gerard KESSE", "gerard.kesse@readydev.com");
    lRefA-&gt;print();
    printf("### clonage de la reference\n");
    GClass* lObjA = lRefA-&gt;clone();
    lObjA-&gt;print();
}
//===============================================</pre></div></div><br>Déclaration de la classe mère (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    GClass(const std::string&amp; _name);
    virtual ~GClass();
    virtual GClass* clone() const = 0;
    virtual void print() const = 0;

protected:
    std::string m_name;
};
//===============================================</pre></div></div><br>Implémentation de la classe mère (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass::GClass() {

}
//===============================================
GClass::GClass(const std::string&amp; _name) {
    m_name = _name;
}
//===============================================
GClass::~GClass() {

}
//===============================================</pre></div></div><br>Déclaration de la classe fille (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClassA : public GClass {
public:
    GClassA();
    GClassA(const std::string&amp; _name, const std::string&amp; _email);
    GClassA(const GClassA&amp; _c);
    ~GClassA();
    GClass* clone() const;
    void print() const;

private:
    std::string m_email;
};
//===============================================</pre></div></div><br>Implémentation de la classe fille (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClassA::GClassA() {

}
//===============================================
GClassA::GClassA(const std::string&amp; _name, const std::string&amp; _email) :
GClass(_name) {
	m_email = _email;
}
//===============================================
GClassA::GClassA(const GClassA&amp; _c) :
GClass(_c.m_name) {
	m_email = _c.m_email;
}
//===============================================
GClassA::~GClassA() {

}
//===============================================
GClass* GClassA::clone() const {
    return new GClassA(*this);
}
//===============================================
void GClassA::print() const {
    printf("Name.....: %s\n", m_name.c_str());
    printf("Email....: %s\n", m_email.c_str());
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_design_creation_prototype.png" alt="/Tutoriels/Software_Development/Cpp/img/i_design_creation_prototype.png"></div><br><h3 class="GTitle3" id="Patrons-de-conception-Patrons-de-creation-Patron-fabrique"><a class="Title8" href="#Patrons-de-conception-Patrons-de-creation">Patron fabrique</a></h3><br>Le patron fabrique permet de <b>créer des objets de types différents</b> à partir d'un paramètre.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCppUi::run(int _argc, char** _argv) {
    GClass* lObj = 0;
    lObj = GClass::Create("class");
    lObj-&gt;run();
    lObj = GClass::Create("classa");
    lObj-&gt;run();
}
//===============================================</pre></div></div><br>Déclaration de la classe mère (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClass {
public:
    GClass();
    virtual ~GClass();
    static GClass* Create(const std::string&amp; _key);
    virtual void run() const;
};
//===============================================</pre></div></div><br>Implémentation de la classe mère (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClass::GClass() {

}
//===============================================
GClass::~GClass() {

}
//===============================================
GClass* GClass::Create(const std::string&amp; _key) {
    if(_key == "class") return new GClass;
    if(_key == "classa") return new GClassA;
    return new GClass;
}
//===============================================
void GClass::run() const {
    printf("appel de la methode par defaut (run)\n");
}
//===============================================</pre></div></div><br>Déclaration de la classe fille (.h)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
class GClassA : public GClass {
public:
    GClassA();
    ~GClassA();
    void run() const;
};
//===============================================</pre></div></div><br>Implémentation de la classe fille (.cpp)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GClassA::GClassA() {

}
//===============================================
GClassA::~GClassA() {

}
//===============================================
void GClassA::run() const {
    printf("appel de la methode concrete (run) \n");
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_design_creation_fabrique.png" alt="/Tutoriels/Software_Development/Cpp/img/i_design_creation_fabrique.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Manager-de-donnees"><a class="Link3" href="#">Manager de données</a></h1><div class="Body3"><br>Le <b>manager de données</b> que nous présentons ici est une architecture logicielle permettant d'accéder à toutes les données de notre application.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Manager-de-donnees-main-cpp"><a class="Link9" href="#Manager-de-donnees">main.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
lApp-&gt;win_height : 480</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Systeme-d-administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Le <b>système d'administration</b> que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-main-cpp"><a class="Link9" href="#Systeme-d-administration">main.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GProcess.h"
//===============================================
int main(int argc, char** argv) {
    GProcess::Instance()-&gt;run(argc, argv);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-GProcess-h"><a class="Link9" href="#Systeme-d-administration">GProcess.h</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp" data-state="off">//===============================================
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
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-GProcess-cpp"><a class="Link9" href="#Systeme-d-administration">GProcess.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp" data-state="off">//===============================================
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
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Resultat"><a class="Link9" href="#Systeme-d-administration">Résultat</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_admin_system.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_admin_system.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Multithreading"><a class="Link3" href="#">Multithreading</a></h1><div class="Body3"><br>Un processeur est dit <b>multithread </b>s'il est capable d'exécuter efficacement plusieurs threads simultanément. Contrairement aux systèmes multiprocesseurs (tels les systèmes multi-cœur), les threads doivent partager les ressources d'un unique cœur1 : les unités de traitement, le cache processeur et le translation lookaside buffer ; certaines parties sont néanmoins dupliquées : chaque thread dispose de ses propres registres et de son propre pointeur d'instruction. Là où les systèmes multiprocesseurs incluent plusieurs unités de traitement complètes, le multithreading a pour but d'augmenter l'utilisation d'un seul cœur en tirant profit des propriétés des threads et du parallélisme au niveau des instructions. Comme les deux techniques sont complémentaires, elles sont parfois combinées dans des systèmes comprenant de multiples processeurs multithreads ou des processeurs avec de multiples cœurs multithreads.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Multithreading-Creer-un-thread"><a class="Link9" href="#Multithreading">Créer un thread</a></h2><br><h3 class="Title8 GTitle3" id="Multithreading-Creer-un-thread-main-cpp"><a class="Title8" href="#Multithreading-Creer-un-thread">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Multithreading-Creer-un-thread-Resultat"><a class="Title8" href="#Multithreading-Creer-un-thread">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Thread[A][0] : on execute le thread
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
Thread[B][9] : on execute le thread</pre></div></div><br><h2 class="Title7 GTitle2" id="Multithreading-Creer-un-objet-atomique"><a class="Link9" href="#Multithreading">Créer un objet atomique</a></h2><br>Les objets de types <b>atomiques </b>contiennent une valeur d'un type particulier (T). La principale caractéristique des objets atomiques est que l'accès à cette valeur contenue à partir de différents threads ne peut pas provoquer de courses de données (c'est-à-dire que faire cela est un comportement bien défini , avec des accès correctement séquencés). Généralement, pour tous les autres objets, la possibilité de provoquer une course aux données pour accéder simultanément au même objet qualifie l'opération comme un comportement indéfini. Aditionellement, les objets atomiques ont la capacité de synchroniser l'accès à d'autres objets non atomiques dans leurs threads en spécifiant différents ordres de mémoire .<br><br><h3 class="Title8 GTitle3" id="Multithreading-Creer-un-objet-atomique-main-cpp"><a class="Title8" href="#Multithreading-Creer-un-objet-atomique">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Multithreading-Creer-un-objet-atomique-Resultat"><a class="Title8" href="#Multithreading-Creer-un-objet-atomique">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Thread[ 0][A][0] : on execute le thread
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
Thread[14][B][9] : on execute le thread</pre></div></div><br><h2 class="Title7 GTitle2" id="Multithreading-Creer-un-appel-de-fonction-unique"><a class="Link9" href="#Multithreading">Créer un appel de fonction unique</a></h2><br>L'appel à <b>call_once</b> exécute la fonction passée en argument exactement une fois, même s'il est appelé simultanément, à partir de plusieurs threads.<br><br><h3 class="Title8 GTitle3" id="Multithreading-Creer-un-appel-de-fonction-unique-main-cpp"><a class="Title8" href="#Multithreading-Creer-un-appel-de-fonction-unique">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Multithreading-Creer-un-appel-de-fonction-unique-Resultat"><a class="Title8" href="#Multithreading-Creer-un-appel-de-fonction-unique">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Thread gagnant : Thread [C]</pre></div></div><br><h2 class="Title7 GTitle2" id="Multithreading-Creer-un-mutex"><a class="Link9" href="#Multithreading">Créer un mutex</a></h2><br>Un <b>mutex </b>est un objet verrouillable qui est conçu pour signaler quand des sections critiques de code ont besoin d'un accès exclusif, empêchant d'autres threads avec la même protection de s'exécuter simultanément et d'accéder aux mêmes emplacements de mémoire. Les objets mutex fournissent la propriété exclusive et ne prennent pas en charge la récursivité (c'est-à-dire qu'un thread ne doit pas verrouiller un mutex qu'il possède déjà).<br><br><h3 class="Title8 GTitle3" id="Multithreading-Creer-un-mutex-main-cpp"><a class="Title8" href="#Multithreading-Creer-un-mutex">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Multithreading-Creer-un-mutex-Resultat"><a class="Title8" href="#Multithreading-Creer-un-mutex">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Thread [A] : AAAAAAAAAAAAAAAAAAAA
Thread [B] : BBBBBBBBBBBBBBBBBBBB
Thread [C] : CCCCCCCCCCCCCCCCCCCC
Thread [D] : DDDDDDDDDDDDDDDDDDDD</pre></div></div><br><h2 class="Title7 GTitle2" id="Multithreading-Creer-un-mutex-recursif"><a class="Link9" href="#Multithreading">Créer un mutex récursif</a></h2><br>Un <b>mutex récursif</b> est un objet verrouillable, tout comme mutex, mais permet au même thread d'acquérir plusieurs niveaux de propriété sur l'objet mutex. Cela permet de verrouiller (ou d' essayer de verrouiller) l'objet mutex à partir d'un thread qui le verrouille déjà, en acquérant un nouveau niveau de propriété sur l'objet mutex : l' objet mutex restera en fait verrouillé en possédant le thread jusqu'à ce que son membre ouvrir est appelé autant de fois que ce niveau d'appropriation.<br><br><h3 class="Title8 GTitle3" id="Multithreading-Creer-un-mutex-recursif-main-cpp"><a class="Title8" href="#Multithreading-Creer-un-mutex-recursif">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Multithreading-Creer-un-mutex-recursif-Resultat"><a class="Title8" href="#Multithreading-Creer-un-mutex-recursif">Résultat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">onRun_1 Thread [A] : AAAAAAAAAAAAAAAAAAAA
onRun_1 Thread [B] : BBBBBBBBBBBBBBBBBBBB
onRun_2 Thread [C] : CCCCCCCCCCCCCCCCCCCC
onRun_1 Thread [C] : CCCCCCCCCCCCCCCCCCCC
onRun_2 Thread [D] : DDDDDDDDDDDDDDDDDDDD
onRun_1 Thread [D] : DDDDDDDDDDDDDDDDDDDD</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface-Homme-Machine-avec-Qt"><a class="Link3" href="#">Interface Homme-Machine avec Qt</a></h1><div class="Body3"><br><b>Qt </b>est une API orientée objet et développée en C++ qui offre des composants d'interface graphique (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc. Par certains aspects, elle ressemble à un framework lorsqu'on l'utilise pour concevoir des interfaces graphiques ou que l'on conçoit l'architecture de son application en utilisant les mécanismes des signaux et slots par exemple. Qt permet la portabilité des applications qui n'utilisent que ses composants par simple recompilation du code source. Les environnements pris en charge sont les Unix (dont GNU/Linux) qui utilisent le système graphique X Window System ou Wayland, Windows, Mac OS X, Tizen et également Genode. Le fait d'être une bibliothèque logicielle multiplateforme attire un grand nombre de personnes qui ont donc l'occasion de diffuser leurs programmes sur les principaux OS existants. Qt intègre des bindings avec plus d'une dizaine de langages autres que le C++, comme Ada, C#, Java, Python, Ruby, Visual Basic, etc. Qt est notamment connu pour être le framework sur lequel repose l'environnement graphique KDE Plasma, l'un des environnements de bureau par défaut de plusieurs distributions GNU/Linux. <br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/b_qt.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/b_qt.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Installer-l-environnement-Qt-sous-MSYS2"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Installer l'environnement Qt sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Installer-l-environnement-Qt-sous-MSYS2-Installer-Qt"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Installer-l-environnement-Qt-sous-MSYS2">Installer Qt</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-qt5
pacman -S --needed --noconfirm mingw-w64-i686-qt-creator
pacman -S --needed --noconfirm mingw-w64-i686-gdb
pacman -S --needed --noconfirm mingw-w64-i686-cmake
pacman -S --needed --noconfirm mingw-w64-i686-clang</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Installer-l-environnement-Qt-sous-ubuntu"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Installer l'environnement Qt sous ubuntu</a></h2><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Installer-l-environnement-Qt-sous-ubuntu-Installer-Qt"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Installer-l-environnement-Qt-sous-ubuntu">Installer Qt</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">sudo apt install -y qtcreator
sudo apt install -y qtbase5-dev
sudo apt install -y qt5-qmake</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Compiler-un-projet-Qt-sous-MSYS2"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Compiler un projet Qt sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Compiler-un-projet-Qt-sous-MSYS2-Editer-le-fichier-projet--GProject-pro-"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Compiler-un-projet-Qt-sous-MSYS2">Éditer le fichier projet (GProject.pro)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">TEMPLATE = app
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
    $$PWD/main.cpp \</pre></div></div><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Compiler-un-projet-Qt-sous-MSYS2-Compiler-le-projet"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Compiler-un-projet-Qt-sous-MSYS2">Compiler le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">qmake
make</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Executer-un-projet-Qt-existant-sous-Windows"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Exécuter un projet Qt existant sous Windows</a></h2><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Executer-un-projet-Qt-existant-sous-Windows-run-bat"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Executer-un-projet-Qt-existant-sous-Windows">run.bat</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\Qt\5.15.0\mingw81_64\bin;%PATH%"
set "PATH=C:\Qt\Tools\mingw810_64\bin;%PATH%"
::===============================================
qmake
mingw32-make
set "lFile="
for %%a in (*.pro) do ( set "lFile=%%~na" )
set "lSetup=release\%lFile%"
%lSetup%
::===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Creer-une-horloge-analogique"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Créer une horloge analogique</a></h2><br>L'exemple dde l'<b>horloge analogique</b> montre comment dessiner le contenu d'un widget personnalisé. Cet exemple montre également comment les fonctionnalités de transformation et de mise à l'échelle de QPainter peuvent être utilisées pour faciliter le dessin de widgets personnalisés<br><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Creer-une-horloge-analogique-GAnalogClock-cpp"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Creer-une-horloge-analogique">GAnalogClock.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GAnalogClock.h"
//===============================================
GAnalogClock::GAnalogClock(QWidget* parent) : GQtUi(parent) {
    QTimer *timer = new QTimer(this);
    connect(timer, SIGNAL(timeout()), this, SLOT(onEvent()));
    timer-&gt;start(1000);
}
//===============================================
GAnalogClock::~GAnalogClock() {

}
//===============================================
void GAnalogClock::resize() {
	QFrame::resize(400, 350);
}
//===============================================
void GAnalogClock::paintEvent(QPaintEvent* event) {
    static const QPoint hourHand[3] = {
        QPoint(7, 8),
        QPoint(-7, 8),
        QPoint(0, -40)
    };
    static const QPoint minuteHand[3] = {
        QPoint(7, 8),
        QPoint(-7, 8),
        QPoint(0, -70)
    };
    static const QPoint secondeHand[3] = {
        QPoint(7, 8),
        QPoint(-7, 8),
        QPoint(0, -90)
    };

    QColor hourColor(127, 0, 127);
    QColor minuteColor(0, 127, 127, 191);
    QColor secondeColor(127, 127, 0, 191);

    int side = qMin(width(), height());
    QTime time = QTime::currentTime();

    QPainter painter(this);

    painter.setRenderHint(QPainter::Antialiasing);
    painter.translate(width() / 2, height() / 2);
    painter.scale(side / 200.0, side / 200.0);

    painter.setPen(Qt::NoPen);
    painter.setBrush(hourColor);

    painter.save();
    painter.rotate(30.0 * ((time.hour() + time.minute() / 60.0)));
    painter.drawConvexPolygon(hourHand, 3);
    painter.restore();

    painter.setPen(hourColor);

    for (int i = 0; i &lt; 12; ++i) {
        painter.drawLine(88, 0, 96, 0);
        painter.rotate(30.0);
    }

    painter.setPen(Qt::NoPen);
    painter.setBrush(minuteColor);

    painter.save();
    painter.rotate(6.0 * (time.minute() + time.second() / 60.0));
    painter.drawConvexPolygon(minuteHand, 3);
    painter.restore();

    painter.setPen(minuteColor);

    for (int j = 0; j &lt; 60; ++j) {
        if ((j % 5) != 0) {
            painter.drawLine(92, 0, 96, 0);
        }
        painter.rotate(6.0);
    }

    painter.setPen(Qt::NoPen);
    painter.setBrush(secondeColor);

    painter.save();
    painter.rotate(6.0 * (time.second() % 60));
    painter.drawConvexPolygon(secondeHand, 3);
    painter.restore();
}
//===============================================
void GAnalogClock::onEvent() {
    update();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Creer-une-horloge-analogique-Resultat"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Creer-une-horloge-analogique">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qt_analog_clock.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qt_analog_clock.gif"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Creer-une-calculatrice"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Créer une calculatrice</a></h2><br>L'exemple de la <b>calculatrice </b>montre comment utiliser des signaux et des slots pour implémenter la fonctionnalité d'un widget de calculatrice, et comment utiliser QGridLayout pour placer des widgets enfants dans une grille.<br><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Creer-une-calculatrice-GCalculator-cpp"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Creer-une-calculatrice">GCalculator.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GCalculator.h"
//===============================================
GCalculator::GCalculator(QWidget* parent) : GQtUi(parent) {
    display = new QLineEdit("0");
    display-&gt;setReadOnly(true);
    display-&gt;setAlignment(Qt::AlignRight);
    display-&gt;setMaxLength(15);

    QFont font = display-&gt;font();
    font.setPointSize(font.pointSize() + 8);
    display-&gt;setFont(font);

    for (int i = 0; i &lt; NumDigitButtons; ++i) {
        GCalculatorButton* digitButton = createButton(QString::number(i), SLOT(onEvent()));
        widgetMap[digitButton] = "digit";
        digitButtons[i] = digitButton;
    }

    GCalculatorButton* pointButton = createButton(tr("."), SLOT(onEvent()));
    widgetMap[pointButton] = "point";
    GCalculatorButton* changeSignButton = createButton(tr("\302\261"), SLOT(onEvent()));
    widgetMap[changeSignButton] = "change_sign";

    GCalculatorButton* backspaceButton = createButton(tr("Backspace"), SLOT(onEvent()));
    widgetMap[backspaceButton] = "backspace";
    GCalculatorButton* clearButton = createButton(tr("Clear"), SLOT(onEvent()));
    widgetMap[clearButton] = "clear";
    GCalculatorButton* clearAllButton = createButton(tr("Clear All"), SLOT(onEvent()));
    widgetMap[clearAllButton] = "clear_all";

    GCalculatorButton* clearMemoryButton = createButton(tr("MC"), SLOT(onEvent()));
    widgetMap[clearMemoryButton] = "clear_memory";
    GCalculatorButton* readMemoryButton = createButton(tr("MR"), SLOT(onEvent()));
    widgetMap[readMemoryButton] = "read_memory";
    GCalculatorButton* setMemoryButton = createButton(tr("MS"), SLOT(onEvent()));
    widgetMap[setMemoryButton] = "set_memory";
    GCalculatorButton* addToMemoryButton = createButton(tr("M+"), SLOT(onEvent()));
    widgetMap[addToMemoryButton] = "add_to_memory";

    GCalculatorButton* divisionButton = createButton(tr("\303\267"), SLOT(onEvent()));
    widgetMap[divisionButton] = "division";
    GCalculatorButton* timesButton = createButton(tr("\303\227"), SLOT(onEvent()));
    widgetMap[timesButton] = "times";
    GCalculatorButton* minusButton = createButton(tr("-"), SLOT(onEvent()));
    widgetMap[minusButton] = "minus";
    GCalculatorButton* plusButton = createButton(tr("+"), SLOT(onEvent()));
    widgetMap[plusButton] = "plus";

    GCalculatorButton* squareRootButton = createButton(tr("Sqrt"), SLOT(onEvent()));
    widgetMap[squareRootButton] = "square_root";
    GCalculatorButton* powerButton = createButton(tr("x\302\262"), SLOT(onEvent()));
    widgetMap[powerButton] = "power";
    GCalculatorButton* reciprocalButton = createButton(tr("1/x"), SLOT(onEvent()));
    widgetMap[reciprocalButton] = "reciprocal";
    GCalculatorButton* equalButton = createButton(tr("="), SLOT(onEvent()));
    widgetMap[equalButton] = "equal";

    QGridLayout *mainLayout = new QGridLayout;

    mainLayout-&gt;setSizeConstraint(QLayout::SetFixedSize);
    mainLayout-&gt;addWidget(display, 0, 0, 1, 6);
    mainLayout-&gt;addWidget(backspaceButton, 1, 0, 1, 2);
    mainLayout-&gt;addWidget(clearButton, 1, 2, 1, 2);
    mainLayout-&gt;addWidget(clearAllButton, 1, 4, 1, 2);

    mainLayout-&gt;addWidget(clearMemoryButton, 2, 0);
    mainLayout-&gt;addWidget(readMemoryButton, 3, 0);
    mainLayout-&gt;addWidget(setMemoryButton, 4, 0);
    mainLayout-&gt;addWidget(addToMemoryButton, 5, 0);

    for (int i = 1; i &lt; NumDigitButtons; ++i) {
        int row = ((9 - i) / 3) + 2;
        int column = ((i - 1) % 3) + 1;
        mainLayout-&gt;addWidget(digitButtons[i], row, column);
    }

    mainLayout-&gt;addWidget(digitButtons[0], 5, 1);
    mainLayout-&gt;addWidget(pointButton, 5, 2);
    mainLayout-&gt;addWidget(changeSignButton, 5, 3);

    mainLayout-&gt;addWidget(divisionButton, 2, 4);
    mainLayout-&gt;addWidget(timesButton, 3, 4);
    mainLayout-&gt;addWidget(minusButton, 4, 4);
    mainLayout-&gt;addWidget(plusButton, 5, 4);

    mainLayout-&gt;addWidget(squareRootButton, 2, 5);
    mainLayout-&gt;addWidget(powerButton, 3, 5);
    mainLayout-&gt;addWidget(reciprocalButton, 4, 5);
    mainLayout-&gt;addWidget(equalButton, 5, 5);

    setLayout(mainLayout);

    waitingForOperand = true;
    sumInMemory = 0.0;
    sumSoFar = 0.0;
    factorSoFar = 0.0;
}
//===============================================
GCalculator::~GCalculator() {

}
//===============================================
GCalculatorButton* GCalculator::createButton(const QString &amp;text, const char *member) {
    GCalculatorButton* button = new GCalculatorButton(text);
    connect(button, SIGNAL(clicked()), this, member);
    return button;
}
//===============================================
bool GCalculator::calculate(double rightOperand, const QString &amp;pendingOperator) {
    if (pendingOperator == tr("+")) {
        sumSoFar += rightOperand;
    } else if (pendingOperator == tr("-")) {
        sumSoFar -= rightOperand;
    } else if (pendingOperator == tr("\303\227")) {
        factorSoFar *= rightOperand;
    } else if (pendingOperator == tr("\303\267")) {
        if (rightOperand == 0.0) {
            return false;
        }
        factorSoFar /= rightOperand;
    }
    return true;
}
//===============================================
void GCalculator::abortOperation() {
    onEvent("clear_all");
    display-&gt;setText(tr("####"));
}
//===============================================
void GCalculator::onEvent() {
    GCalculatorButton* clickedButton = qobject_cast&lt;GCalculatorButton*&gt;(sender());
    QString key = widgetMap[clickedButton];
    onEvent(key);
}
//===============================================
void GCalculator::onEvent(const QString&amp; key) {
    // digit
    if(key == "digit") {
        GCalculatorButton* clickedButton = qobject_cast&lt;GCalculatorButton*&gt;(sender());
        int digitValue = clickedButton-&gt;text().toInt();
        if (display-&gt;text() == "0" &amp;&amp; digitValue == 0) {
            return;
        }

        if (waitingForOperand) {
            display-&gt;clear();
            waitingForOperand = false;
        }

        display-&gt;setText(display-&gt;text() + QString::number(digitValue));
    }
    // point
    else if(key == "point") {
        if (waitingForOperand) {
            display-&gt;setText("0");
        }
        if (!display-&gt;text().contains('.')) {
            display-&gt;setText(display-&gt;text() + tr("."));
        }
        waitingForOperand = false;
    }
    // change_sign
    else if(key == "change_sign") {
        QString text = display-&gt;text();
        double value = text.toDouble();

        if (value &gt; 0.0) {
            text.prepend(tr("-"));
        } else if (value &lt; 0.0) {
            text.remove(0, 1);
        }

        display-&gt;setText(text);
    }
    // backspace
    else if(key == "backspace") {
        if (waitingForOperand) {
            return;
        }

        QString text = display-&gt;text();
        text.chop(1);

        if (text.isEmpty()) {
            text = "0";
            waitingForOperand = true;
        }

        display-&gt;setText(text);
    }
    // clear
    else if(key == "clear") {
        if (waitingForOperand) {
            return;
        }

        display-&gt;setText("0");
        waitingForOperand = true;
    }
    // clear_all
    else if(key == "clear_all") {
        sumSoFar = 0.0;
        factorSoFar = 0.0;
        pendingAdditiveOperator.clear();
        pendingMultiplicativeOperator.clear();
        display-&gt;setText("0");
        waitingForOperand = true;
    }
    // clear_memory
    else if(key == "clear_memory") {
        sumInMemory = 0.0;
    }
    // read_memory
    else if(key == "read_memory") {
        display-&gt;setText(QString::number(sumInMemory));
        waitingForOperand = true;
    }
    // set_memory
    else if(key == "set_memory") {
        onEvent("equal");
        sumInMemory = display-&gt;text().toDouble();
    }
    // add_to_memory
    else if(key == "add_to_memory") {
        onEvent("equal");
        sumInMemory += display-&gt;text().toDouble();
    }
    // division
    else if(key == "division") {
        onEvent("division_times");
    }
    // times
    else if(key == "times") {
        onEvent("division_times");
    }
    // division_times
    else if(key == "division_times") {
        GCalculatorButton* clickedButton = qobject_cast&lt;GCalculatorButton*&gt;(sender());
        if (!clickedButton) {
            return;
        }
        QString clickedOperator = clickedButton-&gt;text();
        double operand = display-&gt;text().toDouble();

        if (!pendingMultiplicativeOperator.isEmpty()) {
            if (!calculate(operand, pendingMultiplicativeOperator)) {
                abortOperation();
                return;
            }
            display-&gt;setText(QString::number(factorSoFar));
        }
        else {
            factorSoFar = operand;
        }

        pendingMultiplicativeOperator = clickedOperator;
        waitingForOperand = true;
    }
    // minus
    else if(key == "minus") {
        onEvent("minus_plus");
    }
    // plus
    else if(key == "plus") {
        onEvent("minus_plus");
    }
    // minus_plus
    else if(key == "minus_plus") {
        GCalculatorButton *clickedButton = qobject_cast&lt;GCalculatorButton*&gt;(sender());
        if (!clickedButton) {
            return;
        }

        QString clickedOperator = clickedButton-&gt;text();
        double operand = display-&gt;text().toDouble();

        if (!pendingMultiplicativeOperator.isEmpty()) {
            if (!calculate(operand, pendingMultiplicativeOperator)) {
                abortOperation();
                return;
            }
            display-&gt;setText(QString::number(factorSoFar));
            operand = factorSoFar;
            factorSoFar = 0.0;
            pendingMultiplicativeOperator.clear();
        }

        if (!pendingAdditiveOperator.isEmpty()) {
            if (!calculate(operand, pendingAdditiveOperator)) {
                abortOperation();
                return;
            }
            display-&gt;setText(QString::number(sumSoFar));
        }
        else {
            sumSoFar = operand;
        }

        pendingAdditiveOperator = clickedOperator;
        waitingForOperand = true;
    }
    // square_root
    else if(key == "square_root") {
        onEvent("square_root_power_reciprocal");
    }
    // power
    else if(key == "power") {
        onEvent("square_root_power_reciprocal");
    }
    // reciprocal
    else if(key == "reciprocal") {
        onEvent("square_root_power_reciprocal");
    }
    // square_root_power_reciprocal
    else if(key == "square_root_power_reciprocal") {
        GCalculatorButton *clickedButton = qobject_cast&lt;GCalculatorButton*&gt;(sender());
        QString clickedOperator = clickedButton-&gt;text();
        double operand = display-&gt;text().toDouble();
        double result = 0.0;

        if (clickedOperator == tr("Sqrt")) {
            if (operand &lt; 0.0) {
                abortOperation();
                return;
            }
            result = std::sqrt(operand);
        }
        else if (clickedOperator == tr("x\302\262")) {
            result = std::pow(operand, 2.0);
        }
        else if (clickedOperator == tr("1/x")) {
            if (operand == 0.0) {
                abortOperation();
                return;
            }
            result = 1.0 / operand;
        }
        display-&gt;setText(QString::number(result));
        waitingForOperand = true;
    }
    // equal
    else if(key == "equal") {
        double operand = display-&gt;text().toDouble();

        if (!pendingMultiplicativeOperator.isEmpty()) {
            if (!calculate(operand, pendingMultiplicativeOperator)) {
                abortOperation();
                return;
            }
            operand = factorSoFar;
            factorSoFar = 0.0;
            pendingMultiplicativeOperator.clear();
        }
        if (!pendingAdditiveOperator.isEmpty()) {
            if (!calculate(operand, pendingAdditiveOperator)) {
                abortOperation();
                return;
            }
            pendingAdditiveOperator.clear();
        } else {
            sumSoFar = operand;
        }

        display-&gt;setText(QString::number(sumSoFar));
        sumSoFar = 0.0;
        waitingForOperand = true;
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Creer-une-calculatrice-GCalculatorButton-cpp"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Creer-une-calculatrice">GCalculatorButton.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GCalculatorButton.h"
//===============================================
GCalculatorButton::GCalculatorButton(const QString &amp;text, QWidget* parent) : QToolButton(parent) {
    setSizePolicy(QSizePolicy::Expanding, QSizePolicy::Preferred);
    setText(text);
}
//===============================================
GCalculatorButton::~GCalculatorButton() {

}
//===============================================
QSize GCalculatorButton::sizeHint() const {
    QSize size = QToolButton::sizeHint();
    size.rheight() += 20;
    size.rwidth() = qMax(size.width(), size.height());
    return size;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Creer-une-calculatrice-Resultat"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Creer-une-calculatrice">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qt_calculator.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qt_calculator.gif"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-Creer-un-calendrier"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">Créer un calendrier</a></h2><br>L'exemple du <b>calendrier </b>montre l'utilisation de QCalendarWidget . QCalendarWidget affiche un mois calendaire à la fois et permet à l'utilisateur de sélectionner une date. Le calendrier se compose de quatre composants : une barre de navigation qui permet à l'utilisateur de modifier le mois affiché, une grille où chaque cellule représente un jour du mois et deux en-têtes qui affichent les noms et les numéros des jours de la semaine. L'exemple du clendrier affiche un QCalendarWidget et permet à l'utilisateur de configurer son apparence et son comportement à l'aide de QComboBox, QCheckBox et QDateEdit. De plus, l'utilisateur peut influencer le formatage des dates et des en-têtes individuels.<br><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Creer-un-calendrier-GCalendar-cpp"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Creer-un-calendrier">GCalendar.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GCalendar.h"
//===============================================
GCalendar::GCalendar(QWidget* parent) : GQtUi(parent) {
	createPreviewGroupBox();
	createGeneralOptionsGroupBox();
	createDatesGroupBox();
	createTextFormatsGroupBox();

	QGridLayout *layout = new QGridLayout;
	layout-&gt;addWidget(previewGroupBox, 0, 0);
	layout-&gt;addWidget(generalOptionsGroupBox, 0, 1);
	layout-&gt;addWidget(datesGroupBox, 1, 0);
	layout-&gt;addWidget(textFormatsGroupBox, 1, 1);
	layout-&gt;setSizeConstraint(QLayout::SetFixedSize);
	setLayout(layout);

	previewLayout-&gt;setRowMinimumHeight(0, calendar-&gt;sizeHint().height());
	previewLayout-&gt;setColumnMinimumWidth(0, calendar-&gt;sizeHint().width());

	setWindowTitle(tr("Calendar Widget"));
}
//===============================================
GCalendar::~GCalendar() {

}
//===============================================
void GCalendar::createPreviewGroupBox() {
	previewGroupBox = new QGroupBox(tr("Preview"));

	calendar = new QCalendarWidget;
	calendar-&gt;setMinimumDate(QDate(1900, 1, 1));
	calendar-&gt;setMaximumDate(QDate(3000, 1, 1));
	calendar-&gt;setGridVisible(true);

	connect(calendar, SIGNAL(currentPageChanged(int, int)), this, SLOT(onEvent(int, int)));

	previewLayout = new QGridLayout;
	previewLayout-&gt;addWidget(calendar, 0, 0, Qt::AlignCenter);
	previewGroupBox-&gt;setLayout(previewLayout);
}
//===============================================
void GCalendar::createGeneralOptionsGroupBox() {
	generalOptionsGroupBox = new QGroupBox(tr("General Options"));

	localeCombo = new QComboBox;
	int curLocaleIndex = -1;
	int index = 0;
	for (int _lang = QLocale::C; _lang &lt;= QLocale::LastLanguage; ++_lang) {
		QLocale::Language lang = static_cast&lt;QLocale::Language&gt;(_lang);
		QList&lt;QLocale::Country&gt; countries = QLocale::countriesForLanguage(lang);
		for (int i = 0; i &lt; countries.count(); ++i) {
			QLocale::Country country = countries.at(i);
			QString label = QLocale::languageToString(lang);
			label += QLatin1Char('/');
			label += QLocale::countryToString(country);
			QLocale locale(lang, country);
			if (this-&gt;locale().language() == lang &amp;&amp; this-&gt;locale().country() == country)
				curLocaleIndex = index;
			localeCombo-&gt;addItem(label, locale);
			++index;
		}
	}
	if (curLocaleIndex != -1) {
		localeCombo-&gt;setCurrentIndex(curLocaleIndex);
	}
	localeLabel = new QLabel(tr("&amp;Locale"));
	localeLabel-&gt;setBuddy(localeCombo);

	firstDayCombo = new QComboBox;
	firstDayCombo-&gt;addItem(tr("Sunday"), Qt::Sunday);
	firstDayCombo-&gt;addItem(tr("Monday"), Qt::Monday);
	firstDayCombo-&gt;addItem(tr("Tuesday"), Qt::Tuesday);
	firstDayCombo-&gt;addItem(tr("Wednesday"), Qt::Wednesday);
	firstDayCombo-&gt;addItem(tr("Thursday"), Qt::Thursday);
	firstDayCombo-&gt;addItem(tr("Friday"), Qt::Friday);
	firstDayCombo-&gt;addItem(tr("Saturday"), Qt::Saturday);

	firstDayLabel = new QLabel(tr("Wee&amp;k starts on:"));
	firstDayLabel-&gt;setBuddy(firstDayCombo);

	selectionModeCombo = new QComboBox;
	selectionModeCombo-&gt;addItem(tr("Single selection"),
			QCalendarWidget::SingleSelection);
	selectionModeCombo-&gt;addItem(tr("None"), QCalendarWidget::NoSelection);

	selectionModeLabel = new QLabel(tr("&amp;Selection mode:"));
	selectionModeLabel-&gt;setBuddy(selectionModeCombo);

	gridCheckBox = new QCheckBox(tr("&amp;Grid"));
	gridCheckBox-&gt;setChecked(calendar-&gt;isGridVisible());

	navigationCheckBox = new QCheckBox(tr("&amp;Navigation bar"));
	navigationCheckBox-&gt;setChecked(true);

	horizontalHeaderCombo = new QComboBox;
	horizontalHeaderCombo-&gt;addItem(tr("Single letter day names"),
			QCalendarWidget::SingleLetterDayNames);
	horizontalHeaderCombo-&gt;addItem(tr("Short day names"),
			QCalendarWidget::ShortDayNames);
	horizontalHeaderCombo-&gt;addItem(tr("None"),
			QCalendarWidget::NoHorizontalHeader);
	horizontalHeaderCombo-&gt;setCurrentIndex(1);

	horizontalHeaderLabel = new QLabel(tr("&amp;Horizontal header:"));
	horizontalHeaderLabel-&gt;setBuddy(horizontalHeaderCombo);

	verticalHeaderCombo = new QComboBox;
	verticalHeaderCombo-&gt;addItem(tr("ISO week numbers"),
			QCalendarWidget::ISOWeekNumbers);
	verticalHeaderCombo-&gt;addItem(tr("None"), QCalendarWidget::NoVerticalHeader);

	verticalHeaderLabel = new QLabel(tr("&amp;Vertical header:"));
	verticalHeaderLabel-&gt;setBuddy(verticalHeaderCombo);

	connect(localeCombo, SIGNAL(currentIndexChanged(QString)), this, SLOT(onEvent(QString)));
	connect(firstDayCombo, SIGNAL(currentIndexChanged(QString)), this, SLOT(onEvent(QString)));
	connect(selectionModeCombo, SIGNAL(currentIndexChanged(QString)), this, SLOT(onEvent(QString)));
	connect(gridCheckBox, SIGNAL(toggled(bool)), calendar, SLOT(setGridVisible(bool)));
	connect(navigationCheckBox, SIGNAL(toggled(bool)), calendar, SLOT(setNavigationBarVisible(bool)));
	connect(horizontalHeaderCombo, SIGNAL(currentIndexChanged(QString)), this, SLOT(onEvent(QString)));
	connect(verticalHeaderCombo, SIGNAL(currentIndexChanged(QString)), this, SLOT(onEvent(QString)));

	QHBoxLayout *checkBoxLayout = new QHBoxLayout;
	checkBoxLayout-&gt;addWidget(gridCheckBox);
	checkBoxLayout-&gt;addStretch();
	checkBoxLayout-&gt;addWidget(navigationCheckBox);

	QGridLayout *outerLayout = new QGridLayout;
	outerLayout-&gt;addWidget(localeLabel, 0, 0);
	outerLayout-&gt;addWidget(localeCombo, 0, 1);
	outerLayout-&gt;addWidget(firstDayLabel, 1, 0);
	outerLayout-&gt;addWidget(firstDayCombo, 1, 1);
	outerLayout-&gt;addWidget(selectionModeLabel, 2, 0);
	outerLayout-&gt;addWidget(selectionModeCombo, 2, 1);
	outerLayout-&gt;addLayout(checkBoxLayout, 3, 0, 1, 2);
	outerLayout-&gt;addWidget(horizontalHeaderLabel, 4, 0);
	outerLayout-&gt;addWidget(horizontalHeaderCombo, 4, 1);
	outerLayout-&gt;addWidget(verticalHeaderLabel, 5, 0);
	outerLayout-&gt;addWidget(verticalHeaderCombo, 5, 1);
	generalOptionsGroupBox-&gt;setLayout(outerLayout);

	firstDayChanged(firstDayCombo-&gt;currentIndex());
	selectionModeChanged(selectionModeCombo-&gt;currentIndex());
	horizontalHeaderChanged(horizontalHeaderCombo-&gt;currentIndex());
	verticalHeaderChanged(verticalHeaderCombo-&gt;currentIndex());
}
//===============================================
void GCalendar::createDatesGroupBox() {
	datesGroupBox = new QGroupBox(tr("Dates"));

	minimumDateEdit = new QDateEdit;
	minimumDateEdit-&gt;setDisplayFormat("MMM d yyyy");
	minimumDateEdit-&gt;setDateRange(calendar-&gt;minimumDate(),
			calendar-&gt;maximumDate());
	minimumDateEdit-&gt;setDate(calendar-&gt;minimumDate());

	minimumDateLabel = new QLabel(tr("&amp;Minimum Date:"));
	minimumDateLabel-&gt;setBuddy(minimumDateEdit);

	currentDateEdit = new QDateEdit;
	currentDateEdit-&gt;setDisplayFormat("MMM d yyyy");
	currentDateEdit-&gt;setDate(calendar-&gt;selectedDate());
	currentDateEdit-&gt;setDateRange(calendar-&gt;minimumDate(),
			calendar-&gt;maximumDate());

	currentDateLabel = new QLabel(tr("&amp;Current Date:"));
	currentDateLabel-&gt;setBuddy(currentDateEdit);

	maximumDateEdit = new QDateEdit;
	maximumDateEdit-&gt;setDisplayFormat("MMM d yyyy");
	maximumDateEdit-&gt;setDateRange(calendar-&gt;minimumDate(),
			calendar-&gt;maximumDate());
	maximumDateEdit-&gt;setDate(calendar-&gt;maximumDate());

	maximumDateLabel = new QLabel(tr("Ma&amp;ximum Date:"));
	maximumDateLabel-&gt;setBuddy(maximumDateEdit);

	connect(currentDateEdit, SIGNAL(dateChanged(QDate)), calendar, SLOT(setSelectedDate(QDate)));
	connect(calendar, SIGNAL(selectionChanged()), this, SLOT(onEvent()));
	connect(minimumDateEdit, SIGNAL(dateChanged(QDate)), this, SLOT(onEvent(QDate)));
	connect(maximumDateEdit, SIGNAL(dateChanged(QDate)), this, SLOT(onEvent(QDate)));

	QGridLayout *dateBoxLayout = new QGridLayout;
	dateBoxLayout-&gt;addWidget(currentDateLabel, 1, 0);
	dateBoxLayout-&gt;addWidget(currentDateEdit, 1, 1);
	dateBoxLayout-&gt;addWidget(minimumDateLabel, 0, 0);
	dateBoxLayout-&gt;addWidget(minimumDateEdit, 0, 1);
	dateBoxLayout-&gt;addWidget(maximumDateLabel, 2, 0);
	dateBoxLayout-&gt;addWidget(maximumDateEdit, 2, 1);
	dateBoxLayout-&gt;setRowStretch(3, 1);

	datesGroupBox-&gt;setLayout(dateBoxLayout);
}
//===============================================
void GCalendar::createTextFormatsGroupBox() {
	textFormatsGroupBox = new QGroupBox(tr("Text Formats"));

	weekdayColorCombo = createColorComboBox();
	weekdayColorCombo-&gt;setCurrentIndex(weekdayColorCombo-&gt;findText(tr("Black")));

	weekdayColorLabel = new QLabel(tr("&amp;Weekday color:"));
	weekdayColorLabel-&gt;setBuddy(weekdayColorCombo);

	weekendColorCombo = createColorComboBox();
	weekendColorCombo-&gt;setCurrentIndex(weekendColorCombo-&gt;findText(tr("Red")));

	weekendColorLabel = new QLabel(tr("Week&amp;end color:"));
	weekendColorLabel-&gt;setBuddy(weekendColorCombo);

	headerTextFormatCombo = new QComboBox;
	headerTextFormatCombo-&gt;addItem(tr("Bold"));
	headerTextFormatCombo-&gt;addItem(tr("Italic"));
	headerTextFormatCombo-&gt;addItem(tr("Plain"));

	headerTextFormatLabel = new QLabel(tr("&amp;Header text:"));
	headerTextFormatLabel-&gt;setBuddy(headerTextFormatCombo);

	firstFridayCheckBox = new QCheckBox(tr("&amp;First Friday in blue"));

	mayFirstCheckBox = new QCheckBox(tr("May &amp;1 in red"));

	connect(weekdayColorCombo, SIGNAL(currentIndexChanged(QString)), this, SLOT(onEvent(QString)));
	connect(weekdayColorCombo, SIGNAL(currentIndexChanged(QString)), this, SLOT(onEvent(QString)));
	connect(weekendColorCombo, SIGNAL(currentIndexChanged(QString)), this, SLOT(onEvent(QString)));
	connect(weekendColorCombo, SIGNAL(currentIndexChanged(QString)), this, SLOT(onEvent(QString)));
	connect(headerTextFormatCombo, SIGNAL(currentIndexChanged(QString)), this, SLOT(onEvent(QString)));
	connect(firstFridayCheckBox, SIGNAL(toggled(bool)), this, SLOT(onEvent(bool)));
	connect(mayFirstCheckBox, SIGNAL(toggled(bool)), this, SLOT(onEvent(bool)));

	QHBoxLayout *checkBoxLayout = new QHBoxLayout;
	checkBoxLayout-&gt;addWidget(firstFridayCheckBox);
	checkBoxLayout-&gt;addStretch();
	checkBoxLayout-&gt;addWidget(mayFirstCheckBox);

	QGridLayout *outerLayout = new QGridLayout;
	outerLayout-&gt;addWidget(weekdayColorLabel, 0, 0);
	outerLayout-&gt;addWidget(weekdayColorCombo, 0, 1);
	outerLayout-&gt;addWidget(weekendColorLabel, 1, 0);
	outerLayout-&gt;addWidget(weekendColorCombo, 1, 1);
	outerLayout-&gt;addWidget(headerTextFormatLabel, 2, 0);
	outerLayout-&gt;addWidget(headerTextFormatCombo, 2, 1);
	outerLayout-&gt;addLayout(checkBoxLayout, 3, 0, 1, 2);
	textFormatsGroupBox-&gt;setLayout(outerLayout);

	weekdayFormatChanged();
	weekendFormatChanged();
	reformatHeaders();
	reformatCalendarPage();
}
//===============================================
QComboBox *GCalendar::createColorComboBox() {
	QComboBox *comboBox = new QComboBox;
	comboBox-&gt;addItem(tr("Red"), QColor(Qt::red));
	comboBox-&gt;addItem(tr("Blue"), QColor(Qt::blue));
	comboBox-&gt;addItem(tr("Black"), QColor(Qt::black));
	comboBox-&gt;addItem(tr("Magenta"), QColor(Qt::magenta));
	return comboBox;
}
//===============================================
void GCalendar::firstDayChanged(int index) {
	calendar-&gt;setFirstDayOfWeek(
			Qt::DayOfWeek(firstDayCombo-&gt;itemData(index).toInt()));
}
//===============================================
void GCalendar::selectionModeChanged(int index) {
	calendar-&gt;setSelectionMode(QCalendarWidget::SelectionMode(
			selectionModeCombo-&gt;itemData(index).toInt()));
}
//===============================================
void GCalendar::horizontalHeaderChanged(int index) {
	calendar-&gt;setHorizontalHeaderFormat(
			QCalendarWidget::HorizontalHeaderFormat(
					horizontalHeaderCombo-&gt;itemData(index).toInt()));
}
//===============================================
void GCalendar::verticalHeaderChanged(int index) {
	calendar-&gt;setVerticalHeaderFormat(
			QCalendarWidget::VerticalHeaderFormat(
					verticalHeaderCombo-&gt;itemData(index).toInt()));
}
//===============================================
void GCalendar::weekdayFormatChanged() {
	QTextCharFormat format;

	format.setForeground(qvariant_cast&lt;QColor&gt;(weekdayColorCombo-&gt;itemData(weekdayColorCombo-&gt;currentIndex())));
	calendar-&gt;setWeekdayTextFormat(Qt::Monday, format);
	calendar-&gt;setWeekdayTextFormat(Qt::Tuesday, format);
	calendar-&gt;setWeekdayTextFormat(Qt::Wednesday, format);
	calendar-&gt;setWeekdayTextFormat(Qt::Thursday, format);
	calendar-&gt;setWeekdayTextFormat(Qt::Friday, format);
}
//===============================================
void GCalendar::weekendFormatChanged() {
    QTextCharFormat format;

    format.setForeground(qvariant_cast&lt;QColor&gt;(weekendColorCombo-&gt;itemData(weekendColorCombo-&gt;currentIndex())));
    calendar-&gt;setWeekdayTextFormat(Qt::Saturday, format);
    calendar-&gt;setWeekdayTextFormat(Qt::Sunday, format);
}
//===============================================
void GCalendar::reformatHeaders() {
    QString text = headerTextFormatCombo-&gt;currentText();
    QTextCharFormat format;

    if (text == tr("Bold"))
        format.setFontWeight(QFont::Bold);
    else if (text == tr("Italic"))
        format.setFontItalic(true);
    else if (text == tr("Green"))
        format.setForeground(Qt::green);
    calendar-&gt;setHeaderTextFormat(format);
}
//===============================================
void GCalendar::reformatCalendarPage() {
    QTextCharFormat mayFirstFormat;
    const QDate mayFirst(calendar-&gt;yearShown(), 5, 1);

    QTextCharFormat firstFridayFormat;
    QDate firstFriday(calendar-&gt;yearShown(), calendar-&gt;monthShown(), 1);
    while (firstFriday.dayOfWeek() != Qt::Friday)
        firstFriday = firstFriday.addDays(1);

    if (firstFridayCheckBox-&gt;isChecked()) {
        firstFridayFormat.setForeground(Qt::blue);
    }
    else {
        Qt::DayOfWeek dayOfWeek(static_cast&lt;Qt::DayOfWeek&gt;(firstFriday.dayOfWeek()));
        firstFridayFormat.setForeground(calendar-&gt;weekdayTextFormat(dayOfWeek).foreground());
    }

    calendar-&gt;setDateTextFormat(firstFriday, firstFridayFormat);

    if (mayFirstCheckBox-&gt;isChecked()) {
        mayFirstFormat.setForeground(Qt::red);
    }
    else if (!firstFridayCheckBox-&gt;isChecked() || firstFriday != mayFirst) {
        Qt::DayOfWeek dayOfWeek(static_cast&lt;Qt::DayOfWeek&gt;(mayFirst.dayOfWeek()));
        calendar-&gt;setDateTextFormat(mayFirst, calendar-&gt;weekdayTextFormat(dayOfWeek));
    }

    calendar-&gt;setDateTextFormat(mayFirst, mayFirstFormat);
}
//===============================================
void GCalendar::onEvent(int year, int month) {

}
//===============================================
void GCalendar::onEvent(const QString&amp; text) {

}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-Creer-un-calendrier-Resultat"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-Creer-un-calendrier">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qt_calendar.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qt_calendar.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-QProcess"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">QProcess</a></h2><br>La classe <b>QProcess </b>est utilisée pour démarrer des programmes externes et pour communiquer avec eux. Pour démarrer un processus, passez le nom et les arguments de ligne de commande du programme que vous souhaitez exécuter en tant qu'arguments pour start(). Les arguments sont fournis sous forme de chaînes individuelles dans une QStringList . Vous pouvez également configurer le programme pour qu'il s'exécute avec setProgram () et setArguments(), puis appeler start() ou open().<br><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-QProcess-Executer-un-programme-et-recuperer-la-sortie"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-QProcess">Exécuter un programme et récupérer la sortie</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GQtUi::run(int argc, char** argv) {
    QProcess lProcess;
    lProcess.start("sqlite3 --version");
    lProcess.waitForFinished(-1);
    QString lStdout = lProcess.readAllStandardOutput();
    qDebug() &lt;&lt; lStdout;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Interface-Homme-Machine-avec-Qt-QProcess-Executer-un-programme-et-recuperer-la-sortie--en-cas-d-erreur-"><a class="Title8" href="#Interface-Homme-Machine-avec-Qt-QProcess">Exécuter un programme et récupérer la sortie (en cas d'erreur)</a></h3><br>Exécution du programme<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GQtUi::run(int argc, char** argv) {
    QProcess lProcess;
    lProcess.start("sqlite3 --version");
    lProcess.waitForFinished(-1);
    QString lStdout = lProcess.readAllStandardOutput();
    qDebug() &lt;&lt; lProcess.error();
    qDebug() &lt;&lt; lStdout;
}
//===============================================</pre></div></div><br>Type d'erreur<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
enum ProcessError {
    FailedToStart, //### file not found, resource error
    Crashed,
    Timedout,
    ReadError,
    WriteError,
    UnknownError   //### no error
};
//===============================================</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Creation-de-pitogrammes-avec-QtAwesome"><a class="Link3" href="#">Création de pitogrammes avec QtAwesome</a></h1><div class="Body3"><br><b>QtAwesome</b> est une bibliothèque simple qui peut être utilisée pour ajouter des icônes Font Awesome à votre application Qt. Bien que le nom soit QtAwesome et qu'il soit actuellement très basé sur Font Awesome, vous pouvez utiliser toutes les autres polices d'icônes / glyphes de votre choix. La classe peut également être utilisée pour gérer vos propres icônes dessinées par code dynamique, en ajoutant des peintres d'icônes nommés. Cette bibliothèque a été mise à jour vers la version 4.7.0 de Font Awesome <br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Installer-l-environnement-QtAwesome-sous-MSYS2"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Installer l'environnement QtAwesome sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Installer-l-environnement-QtAwesome-sous-MSYS2-Telecharger-QtAwesome"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Installer-l-environnement-QtAwesome-sous-MSYS2">Télécharger QtAwesome</a></h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/gamecreature/QtAwesome">https://github.com/gamecreature/QtAwesome</a><br><br><b>QtAwesome-master.zip</b><br><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Installer-l-environnement-QtAwesome-sous-MSYS2-Extraire-QtAwesome"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Installer-l-environnement-QtAwesome-sous-MSYS2">Extraire QtAwesome</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">QtAwesome-master.zip
Clic droit -&gt; Extraire vers QtAwesome-master\</pre></div></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Tester un projet QtAwesome sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2-Observer-la-structure-du-projet"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2">Observer la structure du projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">ReadyTest/QtAwesome/
|___ main.cpp
|___ QtAwesome.cpp  
|___ QtAwesome.h 
|___ QtAwesomeAnim.cpp
|___ QtAwesomeAnim.h
|___ QtAwesome.qrc
|___ fonts/fontawesome-4.7.0.ttf
|___ GProject.pro</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2-Editer-le-programme--main-cpp-"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2">Editer le programme (main.cpp)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2-Definir-le-fichier-projet--GProjet-pro-"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2">Définir le fichier projet (GProjet.pro)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">TEMPLATE = app
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
    $$PWD/QtAwesome.qrc \</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2-Compiler-le-projet"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2">Compiler le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">qmake
make</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2-Executer-le-projet"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2">Exécuter le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">./release/rdcpp</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2-Resulat"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Tester-un-projet-QtAwesome-sous-MSYS2">Résulat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_test.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_test.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-id"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Créer un pictogramme à partir de son id</a></h2><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-id-main-cpp"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-id">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp" data-state="off">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-id-Resultat"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-id">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_id.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_id.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-nom"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Créer un pictogramme à partir de son nom</a></h2><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-nom-main-cpp"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-nom">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-nom-Resultat"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-nom">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_name.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_name.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-caractere"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Créer un pictogramme à partir de son caractère</a></h2><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-caractere-main-cpp"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-caractere">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-caractere-Resultat"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-a-partir-de-son-caractere">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_char.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_char.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-d-un-pictogramme"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Définir la couleur d'un pictogramme</a></h2><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-d-un-pictogramme-main-cpp"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-d-un-pictogramme">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp" data-state="off">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-d-un-pictogramme-Resultat"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-d-un-pictogramme">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_color.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_color.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-par-defaut-des-pictogrammes"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Définir la couleur par défaut des pictogrammes</a></h2><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-par-defaut-des-pictogrammes-main-cpp"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-par-defaut-des-pictogrammes">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp" data-state="off">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-par-defaut-des-pictogrammes-Resultat"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Definir-la-couleur-par-defaut-des-pictogrammes">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_default.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_default.png"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-anime"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Créer un pictogramme animé</a></h2><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-anime-main-cpp"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-anime">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-anime-Resultat"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-anime">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_anim.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_anim.gif"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Basculer-d-un-pictogramme-a-l-autre-entre-deux-etats"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Basculer d'un pictogramme à l'autre entre deux états</a></h2><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Basculer-d-un-pictogramme-a-l-autre-entre-deux-etats-main-cpp"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Basculer-d-un-pictogramme-a-l-autre-entre-deux-etats">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Basculer-d-un-pictogramme-a-l-autre-entre-deux-etats-Resultat"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Basculer-d-un-pictogramme-a-l-autre-entre-deux-etats">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_toogle.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_toogle.gif"></div><br><h2 class="Title7 GTitle2" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-personnalise"><a class="Link9" href="#Creation-de-pitogrammes-avec-QtAwesome">Créer un pictogramme personnalisé</a></h2><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-personnalise-main-cpp"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-personnalise">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-personnalise-Resultat"><a class="Title8" href="#Creation-de-pitogrammes-avec-QtAwesome-Creer-un-pictogramme-personnalise">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_custom.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_custom.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Trace-de-courbes-2D-avec-QCustomPlot"><a class="Link3" href="#">Tracé de courbes 2D avec QCustomPlot</a></h1><div class="Body3"><br><b>QCustomPlot </b>est un widget Qt en C++ pour le traçage et la visualisation des données 2D. Il n'a pas d'autres dépendances et est bien documenté. Il se concentre sur la création de tracés 2D, de graphiques et offre de hautes performances pour les applications de visualisation de données en temps réel. Il permet d'exporter les graphes vers divers formats de fichiers tels que les fichiers PDF vectorisés et les images pixelisées comme PNG, JPG et BMP. QCustomPlot est la solution idéale pour afficher des données en temps réel dans une application ainsi que pour produire des tracés 2D de haute qualité pour d'autres médias.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_style.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_style.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Installer-l-environnement-QCustomPlot-sous-MSYS"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Installer l'environnement QCustomPlot sous MSYS</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Installer-l-environnement-QCustomPlot-sous-MSYS-Telecharger-QCustomPlot"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Installer-l-environnement-QCustomPlot-sous-MSYS">Télécharger QCustomPlot</a></h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.qcustomplot.com/index.php/download">https://www.qcustomplot.com/index.php/download</a><br><br><b>QCustomPlot.tar.gz</b><br><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Installer-l-environnement-QCustomPlot-sous-MSYS-Extraire-QCustomPlot"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Installer-l-environnement-QCustomPlot-sous-MSYS">Extraire QCustomPlot</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">QCustomPlot.tar.gz
Clic droit -&gt; Extraire vers QCustomPlot\</pre></div></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Tester un projet QCustomPlot sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2-Observer-la-structure-du-projet"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2">Observer la structure du projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">ReadyTest/QCustomPlot/
|___ main.cpp
|___ qcustomplot.h
|___ qcustomplot.cpp
|___ GProject.pro</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2-Editer-le-programme--main-cpp-"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2">Editer le programme (main.cpp)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2-Editer-le-fichier-projet--GProject-pro-"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2">Editer le fichier projet (GProject.pro)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">TEMPLATE = app
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
    $$PWD/qcustomplot.h \</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2-Compiler-le-projet"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2">Compiler le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">qmake
make</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2-Executer-le-projet"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2">Exécuter le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">./release/rdcpp.exe</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Tester-un-projet-QCustomPlot-sous-MSYS2">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_test.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_test.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-interactions"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec des interactions</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-interactions-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-interactions">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-interactions-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-interactions">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-interactions-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-interactions">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-interactions-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-interactions">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_interactions.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_interactions.gif"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec un nuage de points</a></h2><br>En statistiques, un <b>nuage de points</b> est une représentation de données dépendant de plusieurs variables. Il permet de mettre en évidence le degré de corrélation entre au moins deux variables liées. Les différentes observations des nuages de points permettent de déterminer : des tendances ; des dépendances ; des relations positives, négatives, directes, indirectes ou inverses ; des répartitions plus ou moins homogènes ; des données aberrantes s'écartant de l'écart type ; des sous groupes pouvant correspondre à l'application d'une loi normale.<br><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_scatter.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_scatter.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-differents"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec un nuage de points différents</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-differents-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-differents">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-differents-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-differents">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-differents-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-differents">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-differents-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-nuage-de-points-differents">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_scatter_style.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_scatter_style.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-lignes"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec des lignes</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-lignes-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-lignes">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-lignes-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-lignes">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-lignes-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-lignes">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-lignes-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-lignes">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_line.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_line.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-une-image-de-fond"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec une image de fond</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-une-image-de-fond-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-une-image-de-fond">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-une-image-de-fond-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-une-image-de-fond">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-une-image-de-fond-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-une-image-de-fond">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-une-image-de-fond-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-une-image-de-fond">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_image.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_image.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-textures"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec des textures</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-textures-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-textures">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-textures-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-textures">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-textures-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-textures">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-textures-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-textures">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_texture.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_texture.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-plusieurs-graphes-avec-des-reperes-differents"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer plusieurs graphes avec des repères différents</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-plusieurs-graphes-avec-des-reperes-differents-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-plusieurs-graphes-avec-des-reperes-differents">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-plusieurs-graphes-avec-des-reperes-differents-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-plusieurs-graphes-avec-des-reperes-differents">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-plusieurs-graphes-avec-des-reperes-differents-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-plusieurs-graphes-avec-des-reperes-differents">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-plusieurs-graphes-avec-des-reperes-differents-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-plusieurs-graphes-avec-des-reperes-differents">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_multiaxis.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_multiaxis.gif"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-logarithmique"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe logarithmique</a></h2><br>Une <b>échelle logarithmique</b> est un système de graduation en progression géométrique. Chaque pas multiplie la valeur par une constante positive. De ce fait, la position sur l'axe d'une valeur est proportionnelle à son logarithme. Une échelle logarithmique est particulièrement adaptée pour rendre compte des ordres de grandeur dans les applications. Elle montre sur un petit espace une large gamme de valeurs, à condition qu'elles soient non nulles et de même signe. Les échelles logarithmiques servent soit pour effectuer des calculs analogiques, soit pour présenter des résultats sur des graphiques. <br><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-logarithmique-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-logarithmique">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-logarithmique-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-logarithmique">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-logarithmique-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-logarithmique">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_logarithmic.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_logarithmic.gif"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-donnees-temps-reel"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe de données temps réel</a></h2><br>En informatique, on parle d'un système <b>temps réel</b> lorsque ce système est capable de contrôler (ou piloter) un procédé physique à une vitesse adaptée à l'évolution du procédé contrôlé. Les systèmes informatiques temps réel se différencient des autres systèmes informatiques par la prise en compte de contraintes temporelles dont le respect est aussi important que l'exactitude du résultat, autrement dit le système ne doit pas simplement délivrer des résultats exacts, il doit les délivrer dans des délais imposés. <br><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-donnees-temps-reel-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-donnees-temps-reel">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-donnees-temps-reel-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-donnees-temps-reel">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-donnees-temps-reel-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-donnees-temps-reel">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-donnees-temps-reel-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-donnees-temps-reel">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_realtime.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_realtime.gif"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-parametrique"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe paramétrique</a></h2><br>En mathématiques, une <b>représentation paramétrique</b> ou paramétrage d’un ensemble est sa description comme ensemble image d’une fonction d’une ou plusieurs variables appelées alors paramètres. Pour un ensemble de points du plan ou d’un espace de plus grande dimension muni d’un repère, l’expression des différentes composantes se décompose en équations paramétriques. En particulier, elle peut définir un chemin ou un ensemble géométrique ; comme une courbe ou une surface. Elle est importante en cinématique ; le paramètre est alors généralement le temps. Cette représentation est duale de la description de l’ensemble par des équations cartésiennes.<br><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-parametrique-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-parametrique">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-parametrique-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-parametrique">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-parametrique-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-parametrique">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-parametrique-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-parametrique">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_curveparametric.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_curveparametric.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-barres"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe à barres</a></h2><br>Un <b>diagramme à barres</b> (ou en barres), également appelé diagramme à bâtons (ou en bâtons), est un graphique qui présente des variables catégorielles avec des barres rectangulaires avec des hauteurs ou des longueurs proportionnelles aux valeurs qu'elles représentent. Les barres peuvent être tracées verticalement ou horizontalement. Un diagramme à barres montre des comparaisons entre des catégories discrètes. Un axe du diagramme montre les catégories spécifiques comparées et l'autre axe représente une valeur mesurée. Certains diagrammes à barres présentent des barres regroupées, indiquant les valeurs de plusieurs variables mesurées.<br><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-barres-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-barres">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-barres-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-barres">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-barres-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-barres">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-barres-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-barres">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_barchart.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_barchart.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-moustaches"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe à moustaches</a></h2><br>Dans les représentations graphiques de données statistiques, la <b>boîte à moustaches</b> (aussi appelée diagramme en boîte, boîte de Tukey ou box-and-whisker plot, plus simplement box plot en anglais) est un moyen rapide de figurer le profil essentiel d'une série statistique quantitative. Elle a été inventée en 1977 par John Tukey, mais peut faire l'objet de certains aménagements selon les utilisateurs. Son nom est la traduction de Box and Whiskers Plot. La boîte à moustaches résume seulement quelques indicateurs de position du caractère étudié (médiane, quartiles, minimum, maximum ou déciles). Ce diagramme est utilisé principalement pour comparer un même caractère dans deux populations de tailles différentes.<br><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-moustaches-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-moustaches">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-moustaches-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-moustaches">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-moustaches-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-moustaches">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-moustaches-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-a-moustaches">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_boxplot.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_boxplot.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-texte"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec un texte</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-texte-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-texte">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-texte-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-texte">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-texte-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-texte">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-texte-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-un-texte">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_text.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_text.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-style"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe stylé</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-style-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-style">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-style-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-style">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-style-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-style">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-style-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-style">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_style.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_style.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-plusieurs-niveaux-d-affichage"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec plusieurs niveaux d'affichage</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-plusieurs-niveaux-d-affichage-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-plusieurs-niveaux-d-affichage">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-plusieurs-niveaux-d-affichage-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-plusieurs-niveaux-d-affichage">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-plusieurs-niveaux-d-affichage-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-plusieurs-niveaux-d-affichage">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-plusieurs-niveaux-d-affichage-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-plusieurs-niveaux-d-affichage">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_advanced.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_advanced.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-cartagraphie-de-couleurs"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe de cartagraphie de couleurs</a></h2><br>Une <b>carte thermique</b> (ou heatmap ) est une technique de visualisation de données qui montre l'ampleur d'un phénomène sous forme de couleur en deux dimensions. La variation de couleur peut être par teinte ou intensité, donnant au lecteur des indices visuels évidents sur la façon dont le phénomène est groupé ou varie dans l'espace. Il existe deux catégories de cartes thermiques fondamentalement différentes : la carte thermique des clusters et la carte thermique spatiale.<br><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-cartagraphie-de-couleurs-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-cartagraphie-de-couleurs">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-cartagraphie-de-couleurs-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-cartagraphie-de-couleurs">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-cartagraphie-de-couleurs-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-cartagraphie-de-couleurs">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-cartagraphie-de-couleurs-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-de-cartagraphie-de-couleurs">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_colormap.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_colormap.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-en-analyse-financiere"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe en analyse financière</a></h2><br>En finance , l'<b>analyse technique</b> est une méthodologie d'analyse permettant de prévoir la direction des prix grâce à l'étude de données de marché passées, principalement de prix et de volume. L'économie comportementale et l'analyse quantitative utilisent bon nombre des mêmes outils d'analyse technique, qui, étant un aspect de la gestion active , sont en contradiction avec une grande partie de la théorie moderne du portefeuille.<br><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-en-analyse-financiere-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-en-analyse-financiere">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-en-analyse-financiere-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-en-analyse-financiere">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-en-analyse-financiere-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-en-analyse-financiere">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-en-analyse-financiere-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-en-analyse-financiere">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_financial.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_financial.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-polaire"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe polaire</a></h2><br>Les <b>coordonnées polaires</b> sont, en mathématiques, un système de coordonnées curvilignes à deux dimensions, dans lequel chaque point du plan est entièrement déterminé par un angle et une distance. Ce système est particulièrement utile dans les situations où la relation entre deux points est plus facile à exprimer en termes d’angle et de distance, comme dans le cas du pendule. Dans ce cas, le système des coordonnées cartésiennes, plus familier, impliquerait d’utiliser des formules trigonométriques pour exprimer une telle relation.<br><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-polaire-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-polaire">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-polaire-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-polaire">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-polaire-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-polaire">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-polaire-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-polaire">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_polar.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_polar.png"></div><br><h2 class="Title7 GTitle2" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-accolades"><a class="Link9" href="#Trace-de-courbes-2D-avec-QCustomPlot">Créer un graphe avec des accolades</a></h2><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-accolades-main-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-accolades">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-accolades-GWindow-h"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-accolades">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-accolades-GWindow-cpp"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-accolades">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-accolades-Resultat"><a class="Title8" href="#Trace-de-courbes-2D-avec-QCustomPlot-Creer-un-graphe-avec-des-accolades">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_bracket.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_bracket.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt"><a class="Link3" href="#">Communication Inter-Processus avec D-Bus sous Qt</a></h1><div class="Body3"><br><b>D-Bus</b> est un mécanisme de communication inter-processus (IPC) et d'appel de procédure à distance (RPC) développé à l'origine pour Linux afin de remplacer les solutions IPC existantes et concurrentes par un protocole unifié. Il a également été conçu pour permettre la communication entre les processus au niveau du système (tels que les services d'imprimante et de pilote matériel) et les processus utilisateur normaux. Il utilise un protocole de transmission de messages binaire rapide, qui convient à la communication avec la même machine en raison de sa faible latence et de sa faible surcharge. Son cahier des charges est actuellement défini par le projet freedesktop.org, et est accessible à toutes les parties. La communication s'effectue en général via une application serveur centrale, appelée "bus" (d'où le nom), mais une communication directe d'application à application est également possible. Lorsqu'elles communiquent sur un bus, les applications peuvent demander  quelles sont les services disponibles, ainsi qu'en activer un à la demande.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications"><a class="Link9" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt">Envoyer un message à toutes les applications</a></h2><br>Création d'un sytème de chat en ligne. Le <b>chat en ligne</b>, dialogue en ligne, ou clavardage, peut faire référence à tout type de communication sur Internet offrant une transmission en temps réel de messages texte de l'expéditeur au destinataire. Les messages de discussion sont généralement courts afin de permettre aux autres participants de répondre rapidement. <br><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications-main-cpp"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications-GWindow-h"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications-GWindow-cpp"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications-GDBusAdaptor-h"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications">GDBusAdaptor.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications-GDBusAdaptor-cpp"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications">GDBusAdaptor.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GDBusAdaptor.h"
//================================================
GDBusAdaptor::GDBusAdaptor(QObject *parent) : 
QDBusAbstractAdaptor(parent) {
    setAutoRelaySignals(true);
}
//================================================
GDBusAdaptor::~GDBusAdaptor() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications-GDBusInterface-h"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications">GDBusInterface.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications-GDBusInterface-cpp"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications">GDBusInterface.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
#include "GDBusInterface.h"
//================================================
GDBusInterface::GDBusInterface(const QString &amp;service, const QString &amp;path, const QDBusConnection &amp;connection, QObject *parent) : 
QDBusAbstractInterface(service, path, "com.readydev.app", connection, parent) {

}
//================================================
GDBusInterface::~GDBusInterface() {

}
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications-Resultat"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Envoyer-un-message-a-toutes-les-applications">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_dbus_qt_chat.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_dbus_qt_chat.gif"></div><br><h2 class="Title7 GTitle2" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance"><a class="Link9" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt">Appeler une procédure à distance</a></h2><br>Création d'un système RPC. En informatique et en télécommunication, <b>RPC </b>(remote procedure call) est un protocole réseau permettant de faire des appels de procédures sur un ordinateur distant à l'aide d'un serveur d'applications. Ce protocole est utilisé dans le modèle client-serveur pour assurer la communication entre le client, le serveur et d’éventuels intermédiaires. Ce système est également utilisé pour la conception des micro-noyaux. <br><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance-Serveur--main-cpp-"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance">Serveur (main.cpp)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance-Serveur--GDBusObject-h-"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance">Serveur (GDBusObject.h)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance-Serveur--GDBusObject-cpp-"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance">Serveur (GDBusObject.cpp)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance-Client--main-cpp-"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance">Client (main.cpp)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance-Lancer-le-serveur"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance">Lancer le serveur</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">./server</pre></div></div><br><h3 class="Title8 GTitle3" id="Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance-Lancer-le-client"><a class="Title8" href="#Communication-Inter-Processus-avec-D-Bus-sous-Qt-Appeler-une-procedure-a-distance">Lancer le client</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">./client</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">say_hello : Bonjour tout le monde
add_data : 50</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Vision-par-Ordinateur-avec-OpenCV"><a class="Link3" href="#">Vision par Ordinateur avec OpenCV</a></h1><div class="Body3"><br><b>OpenCV </b>est une bibliothèque graphique libre, spécialisée dans le traitement d'images en temps réel. La bibliothèque OpenCV met à disposition de nombreuses fonctionnalités très diversifiées permettant de créer des programmes en partant des données brutes pour aller jusqu'à la création d'interfaces graphiques basiques. OpenCV propose la plupart des opérations classiques en traitement bas niveau des images : lecture, écriture et affichage d’une image ; calcul de l'histogramme des niveaux de gris ou d'histogrammes couleurs ; lissage, filtrage ; seuillage d'image (méthode d'Otsu, seuillage adaptatif) ; segmentation (composantes connexes, GrabCut) ; morphologie mathématique.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/b_opencv.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/b_opencv.png"></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-Installer-l-environnement-OpenCV-sous-MSYS2"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">Installer l'environnement OpenCV sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Installer-l-environnement-OpenCV-sous-MSYS2-Installer-OpenCV"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Installer-l-environnement-OpenCV-sous-MSYS2">Installer OpenCV</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh" data-state="off">pacman -S --needed --noconfirm mingw-w64-i686-opencv</pre></div></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-Compiler-un-projet-OpenCV"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">Compiler un projet OpenCV</a></h2><br><h3 class="Title8 GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Compiler-un-projet-OpenCV-Compiler-le-projet"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Compiler-un-projet-OpenCV">Compiler le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">export "PATH=/mingw32/bin:$PATH"

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
-lopencv_xphoto -lopencv_photo -lopencv_imgproc -lopencv_core</pre></div></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">Apprendre OpenCV</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Affichage-d-une-image">Affichage d'une image</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Affichage-d-une-video">Affichage d'une vidéo</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Utilisation-d-une-barre-de-defilement-dans-une-video">Utilisation d'une barre de défilement dans une vidéo</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Creation-d-un-flou-gaussien">Création d'un flou gaussien</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Creation-d-une-pyramide-d-images">Création d'une pyramide d'images</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Conversion-d-une-image-en-niveau-de-gris">Conversion d'une image en niveau de gris</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Redimensionnement-d-une-image">Redimensionnement d'une image</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Egalisation-de-l-histogramme-d-une-image">Egalisation de l'histogramme d'une image</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Detection-de-contours-avec-le-filtre-de-canny">Détection de contours avec le filtre de canny</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Lecture-et-modification-des-valeurs-d-un-pixel">Lecture et modification des valeurs d'un pixel</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Enregistrement-d-une-video">Enregistrement d'une vidéo</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Apprentissage-automatique-avec-TrainData">Apprentissage automatique avec TrainData</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Detection-faciale">Détection faciale</a></div></div><br><h3 class="GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Affichage-d-une-image"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Affichage d'une image</a></h3><br>Cette opération permet d'<b>afficher une image</b>. L'image est chargée depuis le disque dur de l'ordinateur et affichée dans une fenêtre.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenCV.filename(lApp-&gt;image_file);
    lOpenCV.load();
    lOpenCV.show();
    lOpenCV.wait();
}
//===============================================</pre></div></div><br>Chargement de l'image<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::load() {
    m_img = cv::imread(m_filename);
}
//===============================================</pre></div></div><br>Affichage de l'image<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::show() {
    cv::imshow(m_title, m_img);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_image_show.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_image_show.png"></div><br><h3 class="Title8 GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Affichage-d-une-video"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Affichage d'une vidéo</a></h3><br>Cette opération permet d'<b>afficher une vidéo</b>. La vidéo est chargée depuis le disque dur de l'ordinateur et à chaque tour de boucle on récupère une image vidéo pour l'afficher dans une fenêtre. <br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenCV.filename(lApp-&gt;video_file);
    lOpenCV.open();
    lOpenCV.window();

    while(1) {
    	lOpenCV.read();
    	if(lOpenCV.empty()) {break;}
    	lOpenCV.show();
    	if(!lOpenCV.wait(33)) {break;}
    }
}
//===============================================</pre></div></div><br>Ouverture de la video<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::open() {
    m_cap.open(m_filename);
}
//===============================================</pre></div></div><br>Lecture d'une image vidéo<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::read() {
    m_cap &gt;&gt; m_img;
}
//===============================================</pre></div></div><br>Gestion du délai de lecture<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
bool GOpenCV::wait(int _ms) {
	bool lContinue = true;
    char lChar = (char)cv::waitKey(_ms);
    if(lChar != -1) {lContinue = false;}
    return lContinue;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Utilisation-d-une-barre-de-defilement-dans-une-video"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Utilisation d'une barre de défilement dans une vidéo</a></h3><br>Cette opération permet d'<b>associer une barre de défilement</b> à la fenêtre d'affichage de la vidéo. La modification de la position de la barre de défilement génère un évènement qui permet de controler la position de la lecture de la trame vidéo. Cette technique permet de déclencher plusieurs action de traitement en fonction de la valeur de la position de la barre de défilement.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    sGParams lParams;
    lParams.frame = 0;
    lParams.run = 1;
    lParams.dontset = 0;

    lOpenCV.filename(lApp-&gt;video_file);
    lOpenCV.open();

    lParams.frames = lOpenCV.frames();

    lOpenCV.window();
    lOpenCV.onTrackbar(onTrackbar);
    lOpenCV.trackbar("Frame", &amp;lParams.frame, lParams.frames, 0);

    while(1) {
        if(lParams.run != 0) {
            lOpenCV.read();
            if(lOpenCV.empty()) {break;}
            lParams.frame = lOpenCV.frame();
            lParams.dontset = 1;
            lOpenCV.trackbar("Frame", lParams.frame);
            lOpenCV.show();
            lParams.run -= 1;
        }
        if(!lOpenCV.wait(33, lParams.run)) {break;}
    }
}
//===============================================
void GOpenCVUi::onTrackbar(int _pos, void* _params) {
    lOpenCV.onTrackbar(_pos, lParams.run, lParams.dontset);
}
//===============================================</pre></div></div><br>Gestion du clavier<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
    bool GOpenCV::wait(int _ms, int&amp; _run) {
    bool lContinue = true;
    char lChar = (char)cv::waitKey(_ms);
    if(lChar == 's') {_run = 1;}
    if(lChar == 'r') {_run = -1;}
    if(lChar == 27) {lContinue = false;}
    return lContinue;
}
//===============================================</pre></div></div><br>Gestion de la barre de défilement<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::onTrackbar(int _pos, int&amp; _run, int&amp; _dontset) {
    m_cap.set(cv::CAP_PROP_POS_FRAMES, _pos);
    if(!_dontset) {_run = 1;}
    _dontset = 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Creation-d-un-flou-gaussien"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Création d'un flou gaussien</a></h3><br>Cette opération permet de <b>flouter une image</b>. L'image de sortie est construite à travers un filtre flou basé sur une fonction gaussienne (appelée également distribution normale) pour calculer la transformation à appliquer à chaque pixel de l'image d'entrée.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    GOpenCV lGaussian;

    lOpenCV.filename(lApp-&gt;image_file);
    lOpenCV.load();
    lOpenCV.gaussian(lGaussian);
    lGaussian.gaussian(lGaussian);
    lGaussian.gaussian(lGaussian);
    lOpenCV.show(lGaussian);
    lOpenCV.wait();
}
//===============================================</pre></div></div><br>Création du flou gaussien<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::gaussian(GOpenCV&amp; _out) {
	cv::GaussianBlur(m_img, _out.img(), cv::Size(5, 5), 3, 3);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_gaussian.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_gaussian.png"></div><br><h3 class="Title8 GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Creation-d-une-pyramide-d-images"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Création d'une pyramide d'images</a></h3><br>Cette opération permet de représenter une <b>image sous plusieurs échelles</b>. Les dimensions de l'image d'entrée sont divisées par 2 pour fournir l'image de sortie. Cette technique permet d'analyser une image sous plusieurs résolutions.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    GOpenCV lPyramid;

    lOpenCV.filename(lApp-&gt;image_file);
    lOpenCV.load();
    lOpenCV.pyramid(lPyramid);
    lOpenCV.show();
    lPyramid.show();
    lOpenCV.wait();
}
//===============================================</pre></div></div><br>Création de la pyramide<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::pyramid(GOpenCV&amp; _out) {
    cv::pyrDown(m_img, _out.img());
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_pyramid.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_pyramid.png"></div><br><h3 class="Title8 GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Conversion-d-une-image-en-niveau-de-gris"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Conversion d'une image en niveau de gris</a></h3><br>Cette opération permet de <b>convertir une image</b> de l'espace de couleurs multicanal RGB vers l'espace de couleurs monocanal. Les intensités des pixels de l'image d'entrée sont interpolées entre les couleurs noir et blanc pour fournir l'image de sortie. Cette technique permet de réduire le temps de calcul du traitement d'une image.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    GOpenCV lGray;

    lOpenCV.filename(lApp-&gt;image_file);
    lOpenCV.load();
    lOpenCV.gray(lGray);
    lOpenCV.show(lGray);
    lOpenCV.wait();
}
//===============================================</pre></div></div><br>Conversion de l'image en niveau de gris<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::gray(GOpenCV&amp; _out) {
    cv::cvtColor(m_img, _out.img(), cv::COLOR_BGR2GRAY);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_gray.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_gray.png"></div><br><h3 class="Title8 GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Redimensionnement-d-une-image"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Redimensionnement d'une image</a></h3><br>Cette opération permet de <b>rédimensionner une image</b>. Les dimensions de l'image d'entrée sont multipliées par un facteur pour fournir l'image de sortie.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    GOpenCV lResize;

    lOpenCV.filename(lApp-&gt;image_file);
    lOpenCV.load();
    lOpenCV.resize(lResize, lOpenCV.width2()/2, lOpenCV.height2()/2);
    lOpenCV.show(lResize);
    lOpenCV.wait();
}
//===============================================</pre></div></div><br>Redimensionnement de l'image<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_resize.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_resize.png"></div><br><h3 class="Title8 GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Egalisation-de-l-histogramme-d-une-image"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Egalisation de l'histogramme d'une image</a></h3><br>Cette opération permet d'<b>ajuster le contraste</b> d'une image. L'histogramme de l'image d'entrée est étalé de sorte à mieux répartir les instensités sur l'ensemble de la plage de valeurs possibles. L'image de sortie est construite à partir de l'histogramme cumulé de l'image d'entrée.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    GOpenCV lEqualize;

    lOpenCV.filename(lApp-&gt;image_file);
    lOpenCV.load();
    lOpenCV.gray(lEqualize);
    lEqualize.equalize(lEqualize);
    lOpenCV.show(lEqualize);
    lOpenCV.wait();
}
//===============================================</pre></div></div><br>Egalisation de l'histogramme de l'image<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::equalize(GOpenCV&amp; _out) {
    cv::equalizeHist(m_img, _out.img());
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_equalize.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_equalize.png"></div><br><h3 class="GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Detection-de-contours-avec-le-filtre-de-canny"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Détection de contours avec le filtre de canny</a></h3><br>Cette opération permet de <b>détecter des contours</b> dans une image. L'image de sortie est construite à travers un filtre de sobel appliqué à l'image d'entrée.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenCV.filename(lApp-&gt;image_file);
    lOpenCV.load();
    lOpenCV.gray(lOpenCV);
    lOpenCV.canny(lOpenCV);
    lOpenCV.show();
    lOpenCV.wait();
}
//===============================================</pre></div></div><br>Utilisation du filtre de canny<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::canny(GOpenCV&amp; _out) {
    cv::Canny(
            m_img,
            _out.img(),
            m_minThreshold,
            m_maxThreshold,
            m_apertureSize,
            m_gradient
    );
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_canny.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_canny.png"></div><br><h3 class="GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Lecture-et-modification-des-valeurs-d-un-pixel"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Lecture et modification des valeurs d'un pixel</a></h3><br>Cette opération permet de <b>lire et modifier</b> la valeur d'un pixel en un point donné de l'image. <br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    GOpenCV lGray;

    lOpenCV.filename(lApp-&gt;image_file);
    lOpenCV.load();
    lOpenCV.pixel(10, 10, 50, 100, 150);
    lOpenCV.pixel(10, 10);
    lOpenCV.print2();
    lOpenCV.gray(lGray);
    lGray.pixel(10, 10, 127);
    lGray.pixel2(10, 10);
    lGray.print3();
}
//===============================================</pre></div></div><br>Modification d'un pixel RGB<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::pixel(int _x, int _y, uchar _red, uchar _green, uchar _blue) {
    cv::Vec3b lPixel;
    lPixel[2] = _red;
    lPixel[1] = _green;
    lPixel[0] = _blue;
    m_img.at&lt;cv::Vec3b&gt;(_y, _x) = lPixel;
}
//===============================================</pre></div></div><br>Modification d'un pixel en niveau de gris<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::pixel(int _x, int _y, uchar _pixel) {
    m_img.at&lt;uchar&gt;(_y, _x) = _pixel;
}
//===============================================</pre></div></div><br>Lecture d'un pixel RGB<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::pixel(int _x, int _y) {
    m_pixel = m_img.at&lt;cv::Vec3b&gt;(_y, _x);
    m_red = m_pixel[2];
    m_green = m_pixel[1];
    m_blue = m_pixel[0];
}
//===============================================</pre></div></div><br>Lecture d'un pixel en niveau de gris<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::pixel2(int _x, int _y) {
    m_pixel2 = m_img.at&lt;uchar&gt;(_y, _x);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_pixel.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_pixel.png"></div><br><h3 class="GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Enregistrement-d-une-video"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Enregistrement d'une vidéo</a></h3><br>Cette opération permet d'<b>enregistrer une vidéo</b>. Le module d'enregistrement est initialisé avec la taille de chaque image vidéo, le FPS et l'encodage de la vidéo. Le FPS définit le nombre d'images pouvant être lu par seconde. L'encodage est une combianison de 4 caractères au format ('M', 'J', 'P', 'G').<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenCV.filename(lApp-&gt;video_file);
    lOpenCV.open();
    lOpenCV.read();
    lOpenCV.window();

    GOpenCV lWriter;
    lWriter.filename(lApp-&gt;video_file2);
    lWriter.fps(lOpenCV);
    lWriter.size2(lOpenCV);
    lWriter.open2();

    while(1) {
    	lOpenCV.read();
    	if(lOpenCV.empty()) break;
    	lOpenCV.gray(lOpenCV);
    	lOpenCV.bgr(lOpenCV);
    	lWriter.write(lOpenCV);
    	lOpenCV.show();
    	if(!lOpenCV.wait(33)) break;
    }
}
//===============================================</pre></div></div><br>Ouverture du module d'enregistrement<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::open2() {
    m_writer.open(m_filename, m_fourcc, m_fps, m_size);
}
//===============================================</pre></div></div><br>Construction de l'encodage<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::fourcc(char _c1, char _c2, char _c3, char _c4) {
    m_fourcc = cv::VideoWriter::fourcc(_c1, _c2, _c3, _c4);
}
//===============================================</pre></div></div><br>Enregistrement de l'image vidéo<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::write(GOpenCV&amp; _out) {
    m_writer &lt;&lt; _out.img();
}
//===============================================</pre></div></div><br><h3 class="GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Apprentissage-automatique-avec-TrainData"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Apprentissage automatique avec TrainData</a></h3><br>Cette opération permet de <b>prédire les valeurs</b> que peut prendre une variable. L'estimation du modèle est réalisé à travers l'analyse d'un jeu de donnée d'entrées. Le jeu de données est chargé à partir d'un fichier au format CSV. Une quantité importante de données d'entrée permet d'améliorer la précision du modèle.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    float lPriors[] = {1.0, 10.0};

    lOpenCV.filename(lApp-&gt;train_file);
    lOpenCV.train();
    lOpenCV.split(0.9f);
    lOpenCV.tree();
    lOpenCV.maxDepth(8);
    lOpenCV.minSample(10);
    lOpenCV.accuracy(0.01f);
    lOpenCV.surrogates(false);
    lOpenCV.maxCategories(15);
    lOpenCV.folds(0);
    lOpenCV.rule(true);
    lOpenCV.truncate(true);
    lOpenCV.priors(1, 2, lPriors);
    lOpenCV.trainTree();
    lOpenCV.performanceData();
    lOpenCV.performanceTest();
    lOpenCV.responses();
    lOpenCV.print();
}
//===============================================</pre></div></div><br>Chargement des données d'apprentissage<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::train() {
    m_trainData = cv::ml::TrainData::loadFromCSV(
            m_filename,
            m_headerLine,
            m_startIndex,
            m_endIndex,
            m_specType,
            m_delimiter,
            m_missch
    );
}
//===============================================</pre></div></div><br>Démarrage de l'apprentissage<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::trainTree() {
    m_treeData-&gt;train(m_trainData);
}
//===============================================</pre></div></div><br>Analyse des résultat de l'apprentissage<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::responses() {
    m_trainData-&gt;getNames(m_names);
    cv::Mat lResponses = m_trainData-&gt;getResponses();
    m_good = 0, m_bad = 0, m_total = 0;
    for (int i = 0; i &lt; m_trainData-&gt;getNTrainSamples(); ++i) {
        float lReceived = m_resultData.at&lt;float&gt;(i, 0);
        float lExpected = lResponses.at&lt;float&gt;(i, 0);
        cv::String lReceivedName = m_names[(int)lReceived];
        cv::String lExpectedName = m_names[(int)lExpected];
        std::cout &lt;&lt; "Received: " &lt;&lt; lReceivedName &lt;&lt; ", Expected: " &lt;&lt; lExpectedName &lt;&lt; std::endl;
        if(lReceived == lExpected) {
            m_good++;
        }
        else {
            m_bad++;
        }
        m_total++;
    }
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_ml_traindata.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_ml_traindata.png"></div><br><h3 class="GTitle3" id="Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV-Detection-faciale"><a class="Title8" href="#Vision-par-Ordinateur-avec-OpenCV-Apprendre-OpenCV">Détection faciale</a></h3><br>Cette opération permet de <b>détecter des visgaes</b> de personnes de différentes tailles dans une image d'entrée. Les visages détectés sont renvoyés sous forme de liste de rectangles. La liste de rectangles est utilisée par la suite pour encadrer les viages détectés dans l'image d'entrée.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCVUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    cv::Scalar lColors[] = {
        cv::Scalar(0, 0, 255),
        cv::Scalar(0, 128, 255),
        cv::Scalar(0, 255, 255),
        cv::Scalar(0, 255, 0)
    };

    GOpenCV lCascade;
    lCascade.filename(lApp-&gt;cascade_file);
    lCascade.scaleFactor(1.1);
    lCascade.minNeighbors(3);
    lCascade.minSize(20, 20);
    lCascade.maxSize(80, 80);
    lCascade.cascade();

    lOpenCV.filename(lApp-&gt;image_file);
    lOpenCV.load();
    lOpenCV.gray(lCascade);
    lCascade.equalize(lCascade);
    lCascade.objects();
    lOpenCV.resize(0.3);
    lOpenCV.objects(lCascade, lColors, 4, 0.3);
    lOpenCV.show();
    lOpenCV.wait();

    std::cout &lt;&lt; "Faces : " &lt;&lt; lCascade.count() &lt;&lt; "\n";
}
//===============================================</pre></div></div><br>Chargement du modèle<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::cascade() {
    m_cascade.reset(new cv::CascadeClassifier(m_filename));
}
//===============================================</pre></div></div><br>Détection faciale<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::objects() {
    m_cascade-&gt;detectMultiScale(
            m_img,
            m_objects,
            m_scaleFactor,
            m_minNeighbors,
            cv::CASCADE_DO_CANNY_PRUNING,
            m_minSize,
            m_maxSize
    );
}
//===============================================</pre></div></div><br>Affichage des faces<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenCV::objects(cv::Scalar* _colors, int _n, double _scale) {
    std::vector&lt;cv::Rect&gt;::iterator it = m_objects.begin();
    for(int i = 0; it != m_objects.end(); it++, i++) {
        cv::Rect lRect = (*it);
        lRect.x *= _scale;
        lRect.y *= _scale;
        lRect.width *= _scale;
        lRect.height *= _scale;
        cv::rectangle(m_img, lRect, _colors[i % _n]);
    }
}
//===============================================</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Faces : 27</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_face_detect.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opencv_learn_face_detect.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation-3D-avec-OpenGL"><a class="Link3" href="#">Programmation 3D avec OpenGL</a></h1><div class="Body3"><br><b>OpenGL </b>(Open Graphics Library) est une interface de programmation d'applications (API) multi-langage et multi-plateforme pour le rendu de graphiques vectoriels 2D et 3D . L'API est généralement utilisée pour interagir avec une unité de traitement graphique (GPU) afin d'obtenir un rendu accéléré par le matériel . OpenGL est abondamment utilisé dans les domaines de la conception assistée par ordinateur (CAO), de la réalité virtuelle , de la visualisation scientifique , de la visualisation de l' information, de la simulation de vol et des jeux vidéo .<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Programmation-3D-avec-OpenGL-Installer-l-environnement-GLFW-sous-Ubuntu"><a class="Link9" href="#Programmation-3D-avec-OpenGL">Installer l'environnement GLFW sous Ubuntu</a></h2><br><b>GLFW </b>est une bibliothèque utilitaire légère à utiliser avec OpenGL . GLFW signifie Graphics Library Framework. Il offre aux programmeurs la possibilité de créer et de gérer des fenêtres et des contextes OpenGL, ainsi que de gérer les entrées du joystick , du clavier et de la souris . <br><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Installer-l-environnement-GLFW-sous-Ubuntu-Installer-GLFW"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Installer-l-environnement-GLFW-sous-Ubuntu">Installer GLFW</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">sudo apt install -y libglfw3-dev</pre></div></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Installer-l-environnement-GLFW-sous-Ubuntu-Telecharger-les-dependances"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Installer-l-environnement-GLFW-sous-Ubuntu">Télécharger les dépendances</a></h3><br>Télécharger GLFW<br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/glfw/glfw/releases">https://github.com/glfw/glfw/releases</a><br><br><b>glfw-3.3.4.zip</b><br><br>Décompresser GLFW<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">unzip glfw-3.3.4.zip</pre></div></div><br>Vérifier les dépendances<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">ls -l glfw-3.3.4/deps</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-3D-avec-OpenGL-Installer-l-environnement-GLFW-sous-WinLibs"><a class="Link9" href="#Programmation-3D-avec-OpenGL">Installer l'environnement GLFW sous WinLibs</a></h2><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Installer-l-environnement-GLFW-sous-WinLibs-Telecharger-GLFW"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Installer-l-environnement-GLFW-sous-WinLibs">Télécharger GLFW</a></h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/glfw/glfw/releases">https://github.com/glfw/glfw/releases</a><br><br><b>glfw-3.3.4.zip</b><br><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Installer-l-environnement-GLFW-sous-WinLibs-Configurer-GLFW-sous-CMake"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Installer-l-environnement-GLFW-sous-WinLibs">Configurer GLFW sous CMake</a></h3><br>Démarrer CMake<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">set "PATH=winlibs-i686-posix-dwarf-gcc-11.2.0-llvm-12.0.1-mingw-w64-9.0.0-r1/mingw32/bin;%PATH%"
set "PATH=C:\Program Files\CMake\bin;%PATH%"

cmake-gui</pre></div></div><br>Configurer GLFW<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Source code -&gt; GLFW/src
Build binaries -&gt; GLFW/build
BUILD_SHARED_LIBS -&gt; Cocher
Configure
Configure
Generate</pre></div></div><br>Construire GLFW<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">cd GLFW/build
mingw32-make</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-Ubuntu"><a class="Link9" href="#Programmation-3D-avec-OpenGL">Compiler un projet GLFW sous Ubuntu</a></h2><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-Ubuntu-Fichiers-headers"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-Ubuntu">Fichiers headers</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//==============================================
#include &lt;glad/gl.h&gt;
#include &lt;GLFW/glfw3.h&gt;
//==============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-Ubuntu-Compiler-le-projet"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-Ubuntu">Compiler le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">g++ -c main.cpp -o main.o -IRLib/include
gcc -c RLib/glad/src/glad_gl.c -o glad_gl.o -IRLib/include
g++ -o rdcpp main.o glad.o -lglfw -ldl</pre></div></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-Ubuntu-Executer-le-projet"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-Ubuntu">Exécuter le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">./rdcpp</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-WinLibs"><a class="Link9" href="#Programmation-3D-avec-OpenGL">Compiler un projet GLFW sous WinLibs</a></h2><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-WinLibs-Fichiers-headers"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-WinLibs">Fichiers headers</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//==============================================
#include &lt;glad/gl.h&gt;
#include &lt;GLFW/glfw3.h&gt;
//==============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-WinLibs-Compiler-le-projet"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-WinLibs">Compiler le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">set "PATH=winlibs-i686-posix-dwarf-gcc-11.2.0-llvm-12.0.1-mingw-w64-9.0.0-r1\mingw32\bin;%PATH%";
set "PATH=RLib\lib;%PATH%"

g++ -c main.cpp -o main.o -IRLib/include
gcc -c RLib/glad/src/glad_gl.c -o glad_gl.o -IRLib/include
g++ -o rdcpp main.o glad.o -lglfw3dll -lopengl32</pre></div></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-WinLibs-Executer-le-projet"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Compiler-un-projet-GLFW-sous-WinLibs">Exécuter le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">set "PATH=winlibs-i686-posix-dwarf-gcc-11.2.0-llvm-12.0.1-mingw-w64-9.0.0-r1\mingw32\bin;%PATH%";
set "PATH=RLib\lib;%PATH%"

.\rdcpp</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL"><a class="Link9" href="#Programmation-3D-avec-OpenGL">Apprendre OpenGL</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Creation-d-un-triangle">Création d'un triangle</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Creation-de-2-triangles">Création de 2 triangles</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-de-plusieurs-VAOs-et-VBOs">Utilisation de plusieurs VAOs et VBOs</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-de-sommets-indexes--EBO-">Utilisation de sommets indexés (EBO)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-de-plusieurs-shaders">Utilisation de plusieurs shaders</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-d-une-variable-shader-uniform">Utilisation d'une variable shader uniform</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-de-la-technique-d-interpolation">Utilisation de la technique d'interpolation</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Chargement-des-shaders-a-partir-de-fichiers">Chargement des shaders à partir de fichiers</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Manipulation-des-sommets-dans-le-vertex-shader">Manipulation des sommets dans le vertex shader</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Manipulation-des-sommets-dans-le-vertex-shader--uniform-">Manipulation des sommets dans le vertex shader (uniform)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Interpolation-des-couleurs-dans-le-fragment-shader">Interpolation des couleurs dans le fragment shader</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Application-d-une-texture-sur-une-surface">Application d'une texture sur une surface</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Melange-de-plusieurs-textures">Mélange de plusieurs textures</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Inversion-de-texture-dans-le-fragment-shader">Inversion de texture dans le fragment shader</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Repetition-d-une-texture-sur-une-surface">Répétition d'une texture sur une surface</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Zoom-d-une-texture-sur-une-surface">Zoom d'une texture sur une surface</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Variation-du-taux-de-melange-de-plusieurs-textures">Variation du taux de mélange de plusieurs textures</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Application-d-une-transformation--Translation---Rotation-">Application d'une transformation (Translation - Rotation)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Application-d-une-transformation--Rotation---Translation-">Application d'une transformation (Rotation - Translation)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Application-d-une-transfromation--ZoomIn---ZoomOut-">Application d'une transfromation (ZoomIn - ZoomOut)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-du-systeme-de-coordonnees">Utilisation du système de coordonnées</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Prise-en-compte-de-la-profondeur--GL_DEPTH_TEST-">Prise en compte de la profondeur (GL_DEPTH_TEST)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Affichage-de-plusieurs-objets">Affichage de plusieurs objets</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Rotation-de-plusieurs-objets">Rotation de plusieurs objets</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Rotation-d-une-camera-autour-d-une-scene">Rotation d'une camera autour d'une scène</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Deplacement-d-une-camera-dans-une-scene">Déplacement d'une camera dans une scène</a></div></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Creation-d-un-triangle"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Création d'un triangle</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lParams.shader_vertex_code = ""
            "#version 330 core\n"
            "layout (location = 0) in vec3 aPos;\n"
            "void main()\n"
            "{\n"
            "   gl_Position = vec4(aPos.x, aPos.y, aPos.z, 1.0);\n"
            "}\n";

    lParams.shader_fragment_code = ""
            "#version 330 core\n"
            "out vec4 FragColor;\n"
            "void main()\n"
            "{\n"
            "   FragColor = vec4(1.0f, 0.5f, 0.2f, 1.0f);\n"
            "}\n";

    lOpenGL.shader(lParams.shader_vertex_code, lParams.shader_fragment_code);

    GLfloat lVertices[] = {
        -0.5f, -0.5f, 0.0f, // left
         0.5f, -0.5f, 0.0f, // right
         0.0f,  0.5f, 0.0f  // top
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 3, 0);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Création du triangle<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::triangle(GLint _index, GLsizei _count) {
    glDrawArrays(GL_TRIANGLES, _index, _count);
}
//===============================================</pre></div></div><br>Initialisation du système<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::init2() {
    glfwInit();
    m_window = glfwCreateWindow(m_width, m_height, m_title.c_str(), NULL, NULL);
    glfwMakeContextCurrent(m_window);
    glfwSwapInterval(1);
    glEnable(GL_LINE_SMOOTH);
    glHint(GL_LINE_SMOOTH_HINT, GL_NICEST);
    glEnable(GL_POINT_SMOOTH);
    glHint(GL_POINT_SMOOTH_HINT, GL_NICEST);
    glEnable(GL_BLEND);
    glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);
    glEnable(GL_ALPHA_TEST) ;
    glewExperimental = true;
    glewInit();
}
//===============================================</pre></div></div><br>Gestion du redimensionnement de la fenêtre<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::viewport(int _width, int _height) {
    glViewport(0, 0, _width, _height);
}
//===============================================</pre></div></div><br>Gestion du clavier<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::onKey() {
    if(glfwGetKey(m_window, GLFW_KEY_ESCAPE) == GLFW_PRESS) {
        glfwSetWindowShouldClose(m_window, true);
    }
}
//===============================================</pre></div></div><br>Chargement des shaders<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::shader(const std::string&amp; _vertex, const std::string&amp; _fragment) {
    GLuint lVertexId = glCreateShader(GL_VERTEX_SHADER);
    compile(lVertexId, _vertex);

    GLuint lFragmentId = glCreateShader(GL_FRAGMENT_SHADER);
    compile(lFragmentId, _fragment);

    m_program = glCreateProgram();

    glAttachShader(m_program, lVertexId);
    glAttachShader(m_program, lFragmentId);
    glLinkProgram(m_program);

    GLint lResult = 0;
    int logLength;

    glGetProgramiv(m_program, GL_LINK_STATUS, &amp;lResult);
    glGetProgramiv(m_program, GL_INFO_LOG_LENGTH, &amp;logLength);

    glDeleteShader(lVertexId);
    glDeleteShader(lFragmentId);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_triangle.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_triangle.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Creation-de-2-triangles"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Création de 2 triangles</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lParams.shader_vertex_code = ""
            "#version 330 core\n"
            "layout (location = 0) in vec3 aPos;\n"
            "void main()\n"
            "{\n"
            "   gl_Position = vec4(aPos.x, aPos.y, aPos.z, 1.0);\n"
            "}\n";

    lParams.shader_fragment_code = ""
            "#version 330 core\n"
            "out vec4 FragColor;\n"
            "void main()\n"
            "{\n"
            "   FragColor = vec4(1.0f, 0.5f, 0.2f, 1.0f);\n"
            "}\n";

    lOpenGL.shader(lParams.shader_vertex_code, lParams.shader_fragment_code);

    GLfloat lVertices[] = {
        // first triangle
        -0.9f, -0.5f, 0.0f,  // left
        -0.0f, -0.5f, 0.0f,  // right
        -0.45f, 0.5f, 0.0f,  // top
        // second triangle
         0.0f, -0.5f, 0.0f,  // left
         0.9f, -0.5f, 0.0f,  // right
         0.45f, 0.5f, 0.0f   // top
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 3, 0);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_triangle_2.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_triangle_2.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-de-plusieurs-VAOs-et-VBOs"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Utilisation de plusieurs VAOs et VBOs</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lParams.shader_vertex_code = ""
            "#version 330 core\n"
            "layout (location = 0) in vec3 aPos;\n"
            "void main()\n"
            "{\n"
            "   gl_Position = vec4(aPos.x, aPos.y, aPos.z, 1.0);\n"
            "}\n";

    lParams.shader_fragment_code = ""
            "#version 330 core\n"
            "out vec4 FragColor;\n"
            "void main()\n"
            "{\n"
            "   FragColor = vec4(1.0f, 0.5f, 0.2f, 1.0f);\n"
            "}\n";

    lOpenGL.shader(lParams.shader_vertex_code, lParams.shader_fragment_code);

    float lFirstTriangle[] = {
        -0.9f, -0.5f, 0.0f,  // left
        -0.0f, -0.5f, 0.0f,  // right
        -0.45f, 0.5f, 0.0f,  // top
    };
    float lSecondTriangle[] = {
        0.0f, -0.5f, 0.0f,  // left
        0.9f, -0.5f, 0.0f,  // right
        0.45f, 0.5f, 0.0f   // top
    };

    lOpenGL.vao(2, lParams.vao);
    lOpenGL.vbo(2, lParams.vbo);

    lOpenGL.vao(lParams.vao[0]);
    lOpenGL.vbo(lParams.vbo[0], lFirstTriangle, sizeof(lFirstTriangle));
    lOpenGL.vbo(0, 3, 3, 0);

    lOpenGL.vao(lParams.vao[1]);
    lOpenGL.vbo(lParams.vbo[1], lSecondTriangle, sizeof(lSecondTriangle));
    lOpenGL.vbo(0, 3, 0, 0);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.vao(lParams.vao[0]);
        lOpenGL.triangle(0, 3);
        lOpenGL.vao(lParams.vao[1]);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(2, lParams.vao);
    lOpenGL.deleteVbo(2, lParams.vbo);
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_2_vao_vbo.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_2_vao_vbo.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-de-sommets-indexes--EBO-"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Utilisation de sommets indexés (EBO)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lParams.shader_vertex_code = ""
            "#version 330 core\n"
            "layout (location = 0) in vec3 aPos;\n"
            "void main()\n"
            "{\n"
            "   gl_Position = vec4(aPos.x, aPos.y, aPos.z, 1.0);\n"
            "}\n";

    lParams.shader_fragment_code = ""
            "#version 330 core\n"
            "out vec4 FragColor;\n"
            "void main()\n"
            "{\n"
            "   FragColor = vec4(1.0f, 0.5f, 0.2f, 1.0f);\n"
            "}\n";

    lOpenGL.shader(lParams.shader_vertex_code, lParams.shader_fragment_code);

    GLfloat lVertices[] = {
            0.5f,  0.5f, 0.0f,  // top right
            0.5f, -0.5f, 0.0f,  // bottom right
            -0.5f, -0.5f, 0.0f, // bottom left
            -0.5f,  0.5f, 0.0f  // top left
    };
    GLuint lIndices[] = {
            0, 1, 3,  // first Triangle
            1, 2, 3   // second Triangle
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo2(lParams.ebo, lIndices, sizeof(lIndices));
    lOpenGL.vbo(0, 3, 3, 0);
    lOpenGL.vbo(0);
    lOpenGL.vao(0);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle2(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteVbo(1, &amp;lParams.ebo);
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Affichage des sommets<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::triangle2(const void* _indices, GLsizei _count) {
    glDrawElements(GL_TRIANGLES, _count, GL_UNSIGNED_INT, _indices);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_triangle_index.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_triangle_index.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-de-plusieurs-shaders"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Utilisation de plusieurs shaders</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lParams.shader_vertex_code = ""
            "#version 330 core\n"
            "layout (location = 0) in vec3 aPos;\n"
            "void main()\n"
            "{\n"
            "   gl_Position = vec4(aPos.x, aPos.y, aPos.z, 1.0);\n"
            "}\n";

    lParams.shader_fragment_code = ""
            "#version 330 core\n"
            "out vec4 FragColor;\n"
            "void main()\n"
            "{\n"
            "   FragColor = vec4(1.0f, 0.5f, 0.2f, 1.0f);\n"
            "}\n";

    lParams.shader_fragment_code2 = ""
            "#version 330 core\n"
            "out vec4 FragColor;\n"
            "void main()\n"
            "{\n"
            "   FragColor = vec4(1.0f, 1.0f, 0.0f, 1.0f);\n"
            "}\n";

    GOpenGL lOpenGL2;

    lOpenGL.shader(lParams.shader_vertex_code, lParams.shader_fragment_code);
    lOpenGL2.shader(lParams.shader_vertex_code, lParams.shader_fragment_code2);

    GLfloat lFirstTriangle[] = {
        -0.9f, -0.5f, 0.0f,  // left
        -0.0f, -0.5f, 0.0f,  // right
        -0.45f, 0.5f, 0.0f,  // top
    };
    GLfloat lSecondTriangle[] = {
        0.0f, -0.5f, 0.0f,  // left
        0.9f, -0.5f, 0.0f,  // right
        0.45f, 0.5f, 0.0f   // top
    };

    lOpenGL.vao(2, lParams.vao);
    lOpenGL.vbo(2, lParams.vbo);

    lOpenGL.vao(lParams.vao[0]);
    lOpenGL.vbo(lParams.vbo[0], lFirstTriangle, sizeof(lFirstTriangle));
    lOpenGL.vbo(0, 3, 3, 0);

    lOpenGL.vao(lParams.vao[1]);
    lOpenGL.vbo(lParams.vbo[1], lSecondTriangle, sizeof(lSecondTriangle));
    lOpenGL.vbo(0, 3, 3, 0);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.vao(lParams.vao[0]);
        lOpenGL.triangle(0, 3);
        lOpenGL2.use();
        lOpenGL.vao(lParams.vao[1]);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(2, lParams.vao);
    lOpenGL.deleteVbo(2, lParams.vbo);
    lOpenGL.deleteProgram();
    lOpenGL2.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_2_shaders.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_2_shaders.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-d-une-variable-shader-uniform"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Utilisation d'une variable shader uniform</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lParams.shader_vertex_code =""
            "#version 330 core\n"
            "layout (location = 0) in vec3 aPos;\n"
            "void main()\n"
            "{\n"
            "   gl_Position = vec4(aPos, 1.0);\n"
            "}\n";

    lParams.shader_fragment_code = ""
            "#version 330 core\n"
            "out vec4 FragColor;\n"
            "uniform vec4 ourColor;\n"
            "void main()\n"
            "{\n"
            "   FragColor = ourColor;\n"
            "}\n";

    lOpenGL.shader(lParams.shader_vertex_code, lParams.shader_fragment_code);

    GLfloat lVertices[] = {
            0.5f, -0.5f, 0.0f,  // bottom right
            -0.5f, -0.5f, 0.0f, // bottom left
            0.0f,  0.5f, 0.0f   // top
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 3, 0);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        float lTimeValue = glfwGetTime();
        float lGreenValue = sin(lTimeValue) / 2.0f + 0.5f;
        lOpenGL.uniform("ourColor", 0.0f, lGreenValue, 0.0f, 1.0f);
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Affectation de la variable shader uniform<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::uniform(const char* _name, GLfloat _v0, GLfloat _v1, GLfloat _v2, GLfloat _v3) {
    int lLocation = glGetUniformLocation(m_program, _name);
    glUniform4f(lLocation, _v0, _v1, _v2, _v3);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_uniform.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_uniform.gif"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-de-la-technique-d-interpolation"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Utilisation de la technique d'interpolation</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lParams.shader_vertex_code = ""
    	    "#version 330 core\n"
    	    "layout (location = 0) in vec3 aPos;\n"
    	    "layout (location = 1) in vec3 aColor;\n"
    	    "out vec3 ourColor;\n"
    	    "void main()\n"
    	    "{\n"
    	    "   gl_Position = vec4(aPos, 1.0);\n"
    	    "   ourColor = aColor;\n"
    	    "}\n";

    lParams.shader_fragment_code = ""
    	    "#version 330 core\n"
    	    "out vec4 FragColor;\n"
    	    "in vec3 ourColor;\n"
    	    "void main()\n"
    	    "{\n"
    	    "   FragColor = vec4(ourColor, 1.0f);\n"
    	    "}\n";

    lOpenGL.shader(lParams.shader_vertex_code, lParams.shader_fragment_code);

    GLfloat lVertices[] = {
        // positions         // colors
         0.5f, -0.5f, 0.0f,  1.0f, 0.0f, 0.0f,  // bottom right
        -0.5f, -0.5f, 0.0f,  0.0f, 1.0f, 0.0f,  // bottom left
         0.0f,  0.5f, 0.0f,  0.0f, 0.0f, 1.0f   // top
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 6, 0);
    lOpenGL.vbo(1, 3, 6, 3);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_interpolation.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_interpolation.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Chargement-des-shaders-a-partir-de-fichiers"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Chargement des shaders à partir de fichiers</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);

    GLfloat lVertices[] = {
        // positions         // colors
         0.5f, -0.5f, 0.0f,  1.0f, 0.0f, 0.0f,  // bottom right
        -0.5f, -0.5f, 0.0f,  0.0f, 1.0f, 0.0f,  // bottom left
         0.0f,  0.5f, 0.0f,  0.0f, 0.0f, 1.0f   // top
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 6, 0);
    lOpenGL.vbo(1, 3, 6, 3);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Chargement des shaders<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::shader2(const std::string&amp; _vertex, const std::string&amp; _fragment) {
    GFile lFile;
    lFile.filename(_vertex);
    std::string lVertexCode = lFile.read();
    lFile.filename(_fragment);
    std::string lFragmentCode = lFile.read();
    shader(lVertexCode, lFragmentCode);
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec3 aColor;

out vec3 ourColor;

void main()
{
    gl_Position = vec4(aPos, 1.0);
    ourColor = aColor;
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;

in vec3 ourColor;

void main()
{
    FragColor = vec4(ourColor, 1.0f);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_shaders_files.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_shaders_files.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Manipulation-des-sommets-dans-le-vertex-shader"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Manipulation des sommets dans le vertex shader</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);

    GLfloat lVertices[] = {
        // positions         // colors
         0.5f, -0.5f, 0.0f,  1.0f, 0.0f, 0.0f,  // bottom right
        -0.5f, -0.5f, 0.0f,  0.0f, 1.0f, 0.0f,  // bottom left
         0.0f,  0.5f, 0.0f,  0.0f, 0.0f, 1.0f   // top
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 6, 0);
    lOpenGL.vbo(1, 3, 6, 3);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Manipulation des sommets<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec3 aColor;

out vec3 ourColor;

void main()
{
    gl_Position = vec4(aPos.x, -aPos.y, aPos.z, 1.0);
    ourColor = aColor;
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_vertex_shader.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_vertex_shader.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Manipulation-des-sommets-dans-le-vertex-shader--uniform-"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Manipulation des sommets dans le vertex shader (uniform)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);

    GLfloat lVertices[] = {
        // positions         // colors
         0.5f, -0.5f, 0.0f,  1.0f, 0.0f, 0.0f,  // bottom right
        -0.5f, -0.5f, 0.0f,  0.0f, 1.0f, 0.0f,  // bottom left
         0.0f,  0.5f, 0.0f,  0.0f, 0.0f, 1.0f   // top
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 6, 0);
    lOpenGL.vbo(1, 3, 6, 3);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        float lOffset = 0.5f;
        lOpenGL.uniform("xOffset", lOffset);
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec3 aColor;

out vec3 ourColor;

uniform float xOffset;

void main()
{
    gl_Position = vec4(aPos.x + xOffset, aPos.y, aPos.z, 1.0);
    ourColor = aColor;
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_vertex_shader_2.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_vertex_shader_2.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Interpolation-des-couleurs-dans-le-fragment-shader"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Interpolation des couleurs dans le fragment shader</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);

    GLfloat lVertices[] = {
        // positions         // colors
         0.5f, -0.5f, 0.0f,  1.0f, 0.0f, 0.0f,  // bottom right
        -0.5f, -0.5f, 0.0f,  0.0f, 1.0f, 0.0f,  // bottom left
         0.0f,  0.5f, 0.0f,  0.0f, 0.0f, 1.0f   // top
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 6, 0);
    lOpenGL.vbo(1, 3, 6, 3);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec3 aColor;

out vec3 ourPosition;

void main()
{
    gl_Position = vec4(aPos, 1.0); 
    ourPosition = aPos;
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;
// in vec3 ourColor;
in vec3 ourPosition;

void main()
{
    FragColor = vec4(ourPosition, 1.0);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_color_interpolation.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_color_interpolation.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Application-d-une-texture-sur-une-surface"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Application d'une texture sur une surface</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture(lApp-&gt;texture_file);

    GLfloat lVertices[] = {
        // positions          // colors           // texture coords
         0.5f,  0.5f, 0.0f,   1.0f, 0.0f, 0.0f,   1.0f, 1.0f, // top right
         0.5f, -0.5f, 0.0f,   0.0f, 1.0f, 0.0f,   1.0f, 0.0f, // bottom right
        -0.5f, -0.5f, 0.0f,   0.0f, 0.0f, 1.0f,   0.0f, 0.0f, // bottom left
        -0.5f,  0.5f, 0.0f,   1.0f, 1.0f, 0.0f,   0.0f, 1.0f  // top left
    };
    GLuint lIndices[] = {
        0, 1, 3, // first triangle
        1, 2, 3  // second triangle
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo2(lParams.ebo, lIndices, sizeof(lIndices));
    lOpenGL.vbo(0, 3, 8, 0);
    lOpenGL.vbo(1, 3, 8, 3);
    lOpenGL.vbo(2, 2, 8, 6);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle2(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteVbo(1, &amp;lParams.ebo);
    lOpenGL.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Chargement de la texture<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::texture(const std::string&amp; _image) {
    glGenTextures(1, &amp;m_texture);
    glBindTexture(GL_TEXTURE_2D, m_texture);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_WRAP_S, GL_REPEAT);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_WRAP_T, GL_REPEAT);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MIN_FILTER, GL_LINEAR_MIPMAP_LINEAR);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MAG_FILTER, GL_LINEAR);

    int lWidth, lHeight, lChannels;

    unsigned char* lData = stbi_load(_image.c_str(), &amp;lWidth, &amp;lHeight, &amp;lChannels, 0);

    if(lData) {
        glTexImage2D(GL_TEXTURE_2D, 0, GL_RGB, lWidth, lHeight, 0, GL_RGB, GL_UNSIGNED_BYTE, lData);
        glGenerateMipmap(GL_TEXTURE_2D);
    }

    stbi_image_free(lData);
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec3 aColor;
layout (location = 2) in vec2 aTexCoord;

out vec3 ourColor;
out vec2 TexCoord;

void main()
{
    gl_Position = vec4(aPos, 1.0);
    ourColor = aColor;
    TexCoord = vec2(aTexCoord.x, aTexCoord.y);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;

in vec3 ourColor;
in vec2 TexCoord;

uniform sampler2D texture1;

void main()
{
	FragColor = texture(texture1, TexCoord);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Melange-de-plusieurs-textures"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Mélange de plusieurs textures</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    GLfloat lVertices[] = {
        // positions          // colors           // texture coords
         0.5f,  0.5f, 0.0f,   1.0f, 0.0f, 0.0f,   1.0f, 1.0f, // top right
         0.5f, -0.5f, 0.0f,   0.0f, 1.0f, 0.0f,   1.0f, 0.0f, // bottom right
        -0.5f, -0.5f, 0.0f,   0.0f, 0.0f, 1.0f,   0.0f, 0.0f, // bottom left
        -0.5f,  0.5f, 0.0f,   1.0f, 1.0f, 0.0f,   0.0f, 1.0f  // top left
    };
    GLuint lIndices[] = {
        0, 1, 3, // first triangle
        1, 2, 3  // second triangle
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo2(lParams.ebo, lIndices, sizeof(lIndices));
    lOpenGL.vbo(0, 3, 8, 0);
    lOpenGL.vbo(1, 3, 8, 3);
    lOpenGL.vbo(2, 2, 8, 6);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle2(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteVbo(1, &amp;lParams.ebo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Chargement d'une texture (PNG)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::texture3(const std::string&amp; _image) {
    glGenTextures(1, &amp;m_texture);
    glBindTexture(GL_TEXTURE_2D, m_texture);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_WRAP_S, GL_REPEAT);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_WRAP_T, GL_REPEAT);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MIN_FILTER, GL_LINEAR);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MAG_FILTER, GL_LINEAR);

    int lWidth, lHeight, lChannels;

    unsigned char* lData = stbi_load(_image.c_str(), &amp;lWidth, &amp;lHeight, &amp;lChannels, 0);

    if(lData) {
		glTexImage2D(GL_TEXTURE_2D, 0, GL_RGBA, lWidth, lHeight, 0, GL_RGBA, GL_UNSIGNED_BYTE, lData);
        glGenerateMipmap(GL_TEXTURE_2D);
    }

    stbi_image_free(lData);
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec3 aColor;
layout (location = 2) in vec2 aTexCoord;

out vec3 ourColor;
out vec2 TexCoord;

void main()
{
    gl_Position = vec4(aPos, 1.0);
    ourColor = aColor;
    TexCoord = vec2(aTexCoord.x, aTexCoord.y);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;

in vec3 ourColor;
in vec2 TexCoord;

uniform sampler2D texture1;
uniform sampler2D texture2;

void main()
{
    FragColor = mix(texture(texture1, TexCoord), texture(texture2, TexCoord), 0.2);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture_blend.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture_blend.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Inversion-de-texture-dans-le-fragment-shader"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Inversion de texture dans le fragment shader</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    GLfloat lVertices[] = {
        // positions          // colors           // texture coords
         0.5f,  0.5f, 0.0f,   1.0f, 0.0f, 0.0f,   1.0f, 1.0f, // top right
         0.5f, -0.5f, 0.0f,   0.0f, 1.0f, 0.0f,   1.0f, 0.0f, // bottom right
        -0.5f, -0.5f, 0.0f,   0.0f, 0.0f, 1.0f,   0.0f, 0.0f, // bottom left
        -0.5f,  0.5f, 0.0f,   1.0f, 1.0f, 0.0f,   0.0f, 1.0f  // top left
    };
    GLuint lIndices[] = {
        0, 1, 3, // first triangle
        1, 2, 3  // second triangle
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo2(lParams.ebo, lIndices, sizeof(lIndices));
    lOpenGL.vbo(0, 3, 8, 0);
    lOpenGL.vbo(1, 3, 8, 3);
    lOpenGL.vbo(2, 2, 8, 6);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle2(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteVbo(1, &amp;lParams.ebo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec3 aColor;
layout (location = 2) in vec2 aTexCoord;

out vec3 ourColor;
out vec2 TexCoord;

void main()
{
    gl_Position = vec4(aPos, 1.0);
    ourColor = aColor;
    TexCoord = vec2(aTexCoord.x, aTexCoord.y);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;

in vec3 ourColor;
in vec2 TexCoord;

uniform sampler2D texture1;
uniform sampler2D texture2;

void main()
{
    FragColor = mix(texture(texture1, TexCoord), texture(texture2, vec2(1.0 - TexCoord.x, TexCoord.y)), 0.2);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture_flip.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture_flip.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Repetition-d-une-texture-sur-une-surface"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Répétition d'une texture sur une surface</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    GLfloat lVertices[] = {
        // positions          // colors           // texture coords
         0.5f,  0.5f, 0.0f,   1.0f, 0.0f, 0.0f,   2.0f, 2.0f, // top right
         0.5f, -0.5f, 0.0f,   0.0f, 1.0f, 0.0f,   2.0f, 0.0f, // bottom right
        -0.5f, -0.5f, 0.0f,   0.0f, 0.0f, 1.0f,   0.0f, 0.0f, // bottom left
        -0.5f,  0.5f, 0.0f,   1.0f, 1.0f, 0.0f,   0.0f, 2.0f  // top left
    };
    GLuint lIndices[] = {
        0, 1, 3, // first triangle
        1, 2, 3  // second triangle
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo2(lParams.ebo, lIndices, sizeof(lIndices));
    lOpenGL.vbo(0, 3, 8, 0);
    lOpenGL.vbo(1, 3, 8, 3);
    lOpenGL.vbo(2, 2, 8, 6);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle2(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteVbo(1, &amp;lParams.ebo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec3 aColor;
layout (location = 2) in vec2 aTexCoord;

out vec3 ourColor;
out vec2 TexCoord;

void main()
{
	gl_Position = vec4(aPos, 1.0);
	ourColor = aColor;
	TexCoord = vec2(aTexCoord.x, aTexCoord.y);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;

in vec3 ourColor;
in vec2 TexCoord;

uniform sampler2D texture1;
uniform sampler2D texture2;

void main()
{
	FragColor = mix(texture(texture1, TexCoord), texture(texture2, TexCoord), 0.2);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture_repeat.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture_repeat.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Zoom-d-une-texture-sur-une-surface"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Zoom d'une texture sur une surface</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture4(lApp-&gt;texture_file);
    lOpenGL2.texture5(lApp-&gt;texture_file2);

    GLfloat lVertices[] = {
        // positions          // colors           // texture coords
         0.5f,  0.5f, 0.0f,   1.0f, 0.0f, 0.0f,   0.55f, 0.55f, // top right
         0.5f, -0.5f, 0.0f,   0.0f, 1.0f, 0.0f,   0.55f, 0.45f, // bottom right
        -0.5f, -0.5f, 0.0f,   0.0f, 0.0f, 1.0f,   0.45f, 0.45f, // bottom left
        -0.5f,  0.5f, 0.0f,   1.0f, 1.0f, 0.0f,   0.45f, 0.55f  // top left
    };
    GLuint lIndices[] = {
        0, 1, 3, // first triangle
        1, 2, 3  // second triangle
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo2(lParams.ebo, lIndices, sizeof(lIndices));
    lOpenGL.vbo(0, 3, 8, 0);
    lOpenGL.vbo(1, 3, 8, 3);
    lOpenGL.vbo(2, 2, 8, 6);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle2(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteVbo(1, &amp;lParams.ebo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Chargement de la texture (GL_CLAMP_TO_EDGE - GL_NEAREST)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::texture4(const std::string&amp; _image) {
    glGenTextures(1, &amp;m_texture);
    glBindTexture(GL_TEXTURE_2D, m_texture);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_WRAP_S, GL_CLAMP_TO_EDGE);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_WRAP_T, GL_CLAMP_TO_EDGE);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MIN_FILTER, GL_NEAREST);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MAG_FILTER, GL_NEAREST);

    int lWidth, lHeight, lChannels;

    stbi_set_flip_vertically_on_load(true);

    unsigned char* lData = stbi_load(_image.c_str(), &amp;lWidth, &amp;lHeight, &amp;lChannels, 0);

    if(lData) {
        glTexImage2D(GL_TEXTURE_2D, 0, GL_RGB, lWidth, lHeight, 0, GL_RGB, GL_UNSIGNED_BYTE, lData);
        glGenerateMipmap(GL_TEXTURE_2D);
    }

    stbi_image_free(lData);
}
//===============================================</pre></div></div><br>Chargement de la texture (GL_REPEAT - GL_NEAREST)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::texture5(const std::string&amp; _image) {
    glGenTextures(1, &amp;m_texture);
    glBindTexture(GL_TEXTURE_2D, m_texture);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_WRAP_S, GL_REPEAT);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_WRAP_T, GL_REPEAT);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MIN_FILTER, GL_NEAREST);
    glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MAG_FILTER, GL_NEAREST);

    int lWidth, lHeight, lChannels;

    unsigned char* lData = stbi_load(_image.c_str(), &amp;lWidth, &amp;lHeight, &amp;lChannels, 0);

    if(lData) {
        glTexImage2D(GL_TEXTURE_2D, 0, GL_RGBA, lWidth, lHeight, 0, GL_RGBA, GL_UNSIGNED_BYTE, lData);
        glGenerateMipmap(GL_TEXTURE_2D);
    }

    stbi_image_free(lData);
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec3 aColor;
layout (location = 2) in vec2 aTexCoord;

out vec3 ourColor;
out vec2 TexCoord;

void main()
{
    gl_Position = vec4(aPos, 1.0);
    ourColor = aColor;
    TexCoord = vec2(aTexCoord.x, aTexCoord.y);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;

in vec3 ourColor;
in vec2 TexCoord;

uniform sampler2D texture1;
uniform sampler2D texture2;

void main()
{
    FragColor = mix(texture(texture1, TexCoord), texture(texture2, TexCoord), 0.2);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture_zoom.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture_zoom.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Variation-du-taux-de-melange-de-plusieurs-textures"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Variation du taux de mélange de plusieurs textures</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};
    lParams.mixValue = 0.2f;

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    GLfloat lVertices[] = {
        // positions          // colors           // texture coords
         0.5f,  0.5f, 0.0f,   1.0f, 0.0f, 0.0f,   1.0f, 1.0f, // top right
         0.5f, -0.5f, 0.0f,   0.0f, 1.0f, 0.0f,   1.0f, 0.0f, // bottom right
        -0.5f, -0.5f, 0.0f,   0.0f, 0.0f, 1.0f,   0.0f, 0.0f, // bottom left
        -0.5f,  0.5f, 0.0f,   1.0f, 1.0f, 0.0f,   0.0f, 1.0f  // top left
    };
    GLuint lIndices[] = {
        0, 1, 3, // first triangle
        1, 2, 3  // second triangle
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo2(lParams.ebo, lIndices, sizeof(lIndices));
    lOpenGL.vbo(0, 3, 8, 0);
    lOpenGL.vbo(1, 3, 8, 3);
    lOpenGL.vbo(2, 2, 8, 6);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.uniform("mixValue", lParams.mixValue);
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle2(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteVbo(1, &amp;lParams.ebo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Gestion du clavier<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::onKey(GLfloat&amp; _mixValue) {
    if(glfwGetKey(m_window, GLFW_KEY_ESCAPE) == GLFW_PRESS) {
        glfwSetWindowShouldClose(m_window, true);
    }

    if(glfwGetKey(m_window, GLFW_KEY_UP) == GLFW_PRESS) {
        _mixValue += 0.01f;
        if(_mixValue &gt;= 1.0f) {
            _mixValue = 1.0f;
        }
    }

    if (glfwGetKey(m_window, GLFW_KEY_DOWN) == GLFW_PRESS) {
        _mixValue -= 0.01f;
        if (_mixValue &lt;= 0.0f) {
            _mixValue = 0.0f;
        }
    }
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec3 aColor;
layout (location = 2) in vec2 aTexCoord;

out vec3 ourColor;
out vec2 TexCoord;

void main()
{
	gl_Position = vec4(aPos, 1.0);
	ourColor = aColor;
	TexCoord = vec2(aTexCoord.x, aTexCoord.y);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;

in vec3 ourColor;
in vec2 TexCoord;

uniform float mixValue;

uniform sampler2D texture1;
uniform sampler2D texture2;

void main()
{
    FragColor = mix(texture(texture1, TexCoord), texture(texture2, TexCoord), mixValue);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture_mix.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_texture_mix.gif"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Application-d-une-transformation--Translation---Rotation-"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Application d'une transformation (Translation - Rotation)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    GLfloat lVertices[] = {
        // positions          // texture coords
         0.5f,  0.5f, 0.0f,   1.0f, 1.0f, // top right
         0.5f, -0.5f, 0.0f,   1.0f, 0.0f, // bottom right
        -0.5f, -0.5f, 0.0f,   0.0f, 0.0f, // bottom left
        -0.5f,  0.5f, 0.0f,   0.0f, 1.0f  // top left
    };
    GLuint lIndices[] = {
        0, 1, 3, // first triangle
        1, 2, 3  // second triangle
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo2(lParams.ebo, lIndices, sizeof(lIndices));
    lOpenGL.vbo(0, 3, 5, 0);
    lOpenGL.vbo(1, 2, 5, 3);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        glm::mat4 lTransform = glm::mat4(1.0f);
        lTransform = glm::translate(lTransform, glm::vec3(0.5f, -0.5f, 0.0f));
        lTransform = glm::rotate(lTransform, (float)glfwGetTime(), glm::vec3(0.0f, 0.0f, 1.0f));
        lOpenGL.uniform("transform", glm::value_ptr(lTransform));
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle2(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteVbo(1, &amp;lParams.ebo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec2 aTexCoord;

out vec2 TexCoord;

uniform mat4 transform;

void main()
{
    gl_Position = transform * vec4(aPos, 1.0);
    TexCoord = vec2(aTexCoord.x, aTexCoord.y);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;

in vec2 TexCoord;

uniform sampler2D texture1;
uniform sampler2D texture2;

void main()
{
    FragColor = mix(texture(texture1, TexCoord), texture(texture2, TexCoord), 0.2);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_transform_tr.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_transform_tr.gif"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Application-d-une-transformation--Rotation---Translation-"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Application d'une transformation (Rotation - Translation)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    GLfloat lVertices[] = {
        // positions          // texture coords
         0.5f,  0.5f, 0.0f,   1.0f, 1.0f, // top right
         0.5f, -0.5f, 0.0f,   1.0f, 0.0f, // bottom right
        -0.5f, -0.5f, 0.0f,   0.0f, 0.0f, // bottom left
        -0.5f,  0.5f, 0.0f,   0.0f, 1.0f  // top left
    };
    GLuint lIndices[] = {
        0, 1, 3, // first triangle
        1, 2, 3  // second triangle
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo2(lParams.ebo, lIndices, sizeof(lIndices));
    lOpenGL.vbo(0, 3, 5, 0);
    lOpenGL.vbo(1, 2, 5, 3);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        glm::mat4 lTransform = glm::mat4(1.0f);
        lTransform = glm::rotate(lTransform, (float)glfwGetTime(), glm::vec3(0.0f, 0.0f, 1.0f));
        lTransform = glm::translate(lTransform, glm::vec3(0.5f, -0.5f, 0.0f));
        lOpenGL.uniform("transform", glm::value_ptr(lTransform));
        lOpenGL.vao(lParams.vao);
        lOpenGL.triangle2(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteVbo(1, &amp;lParams.ebo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec2 aTexCoord;

out vec2 TexCoord;

uniform mat4 transform;

void main()
{
    gl_Position = transform * vec4(aPos, 1.0);
    TexCoord = vec2(aTexCoord.x, aTexCoord.y);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;

in vec2 TexCoord;

uniform sampler2D texture1;
uniform sampler2D texture2;

void main()
{
    FragColor = mix(texture(texture1, TexCoord), texture(texture2, TexCoord), 0.2);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_transform_rt.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_transform_rt.gif"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Application-d-une-transfromation--ZoomIn---ZoomOut-"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Application d'une transfromation (ZoomIn - ZoomOut)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    GLfloat lVertices[] = {
        // positions          // texture coords
         0.5f,  0.5f, 0.0f,   1.0f, 1.0f, // top right
         0.5f, -0.5f, 0.0f,   1.0f, 0.0f, // bottom right
        -0.5f, -0.5f, 0.0f,   0.0f, 0.0f, // bottom left
        -0.5f,  0.5f, 0.0f,   0.0f, 1.0f  // top left
    };
    GLuint lIndices[] = {
        0, 1, 3, // first triangle
        1, 2, 3  // second triangle
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo2(lParams.ebo, lIndices, sizeof(lIndices));
    lOpenGL.vbo(0, 3, 5, 0);
    lOpenGL.vbo(1, 2, 5, 3);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.vao(lParams.vao);
        glm::mat4 lTransform = glm::mat4(1.0f);
        lTransform = glm::translate(lTransform, glm::vec3(0.5f, -0.5f, 0.0f));
        lTransform = glm::rotate(lTransform, (float)glfwGetTime(), glm::vec3(0.0f, 0.0f, 1.0f));
        lOpenGL.uniform("transform", glm::value_ptr(lTransform));
        lOpenGL.triangle2(0, 6);
        lTransform = glm::mat4(1.0f);
        lTransform = glm::translate(lTransform, glm::vec3(-0.5f, 0.5f, 0.0f));
        float lScaleAmount = sin(glfwGetTime());
        lTransform = glm::scale(lTransform, glm::vec3(lScaleAmount, lScaleAmount, lScaleAmount));        lOpenGL.uniform("transform", glm::value_ptr(lTransform));
        lOpenGL.uniform("transform", &amp;lTransform[0][0]);
        lOpenGL.triangle2(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteVbo(1, &amp;lParams.ebo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec2 aTexCoord;

out vec2 TexCoord;

uniform mat4 transform;

void main()
{
    gl_Position = transform * vec4(aPos, 1.0);
    TexCoord = vec2(aTexCoord.x, aTexCoord.y);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;

in vec2 TexCoord;

uniform sampler2D texture1;
uniform sampler2D texture2;

void main()
{
    FragColor = mix(texture(texture1, TexCoord), texture(texture2, TexCoord), 0.2);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_transform_zoom_io.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_transform_zoom_io.gif"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Utilisation-du-systeme-de-coordonnees"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Utilisation du système de coordonnées</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    GLfloat lVertices[] = {
            // positions          // texture coords
            0.5f,  0.5f, 0.0f,    1.0f, 1.0f, // top right
            0.5f, -0.5f, 0.0f,    1.0f, 0.0f, // bottom right
            -0.5f, -0.5f, 0.0f,   0.0f, 0.0f, // bottom left
            -0.5f,  0.5f, 0.0f,   0.0f, 1.0f  // top left
    };
    GLuint lIndices[] = {
            0, 1, 3, // first triangle
            1, 2, 3  // second triangle
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo2(lParams.ebo, lIndices, sizeof(lIndices));
    lOpenGL.vbo(0, 3, 5, 0);
    lOpenGL.vbo(1, 2, 5, 3);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.vao(lParams.vao);
        glm::mat4 lModel = glm::mat4(1.0f);
        glm::mat4 lView = glm::mat4(1.0f);
        glm::mat4 lProjection = glm::mat4(1.0f);
        lModel = glm::rotate(lModel, glm::radians(-55.0f), glm::vec3(1.0f, 0.0f, 0.0f));
        lView = glm::translate(lView, glm::vec3(0.0f, 0.0f, -3.0f));
        lProjection = glm::perspective(glm::radians(45.0f), (float)lOpenGL.width() / (float)lOpenGL.height(), 0.1f, 100.0f);
        lOpenGL.uniform("model", glm::value_ptr(lModel));
        lOpenGL.uniform("view", glm::value_ptr(lView));
        lOpenGL.uniform("projection", glm::value_ptr(lProjection));
        lOpenGL.triangle2(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteVbo(1, &amp;lParams.ebo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
layout (location = 0) in vec3 aPos;
layout (location = 1) in vec2 aTexCoord;

out vec2 TexCoord;

uniform mat4 model;
uniform mat4 view;
uniform mat4 projection;

void main()
{
    gl_Position = projection * view * model * vec4(aPos, 1.0);
    TexCoord = vec2(aTexCoord.x, aTexCoord.y);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 330 core
out vec4 FragColor;

in vec2 TexCoord;

uniform sampler2D texture1;
uniform sampler2D texture2;

void main()
{
    FragColor = mix(texture(texture1, TexCoord), texture(texture2, TexCoord), 0.2);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_coordinate_system.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_coordinate_system.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Prise-en-compte-de-la-profondeur--GL_DEPTH_TEST-"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Prise en compte de la profondeur (GL_DEPTH_TEST)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    float lVertices[] = {
        -0.5f, -0.5f, -0.5f,  0.0f, 0.0f,
         0.5f, -0.5f, -0.5f,  1.0f, 0.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 0.0f,

        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 1.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 1.0f,
        -0.5f,  0.5f,  0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,

        -0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f,  0.5f,  0.5f,  1.0f, 0.0f,

         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,

        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  1.0f, 1.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,

        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f,  0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 5, 0);
    lOpenGL.vbo(1, 2, 5, 3);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    lOpenGL2.depthOn();

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.vao(lParams.vao);
        glm::mat4 lModel = glm::mat4(1.0f);
        glm::mat4 lView = glm::mat4(1.0f);
        glm::mat4 lProjection = glm::mat4(1.0f);
        lModel = glm::rotate(lModel, (float)glfwGetTime(), glm::vec3(0.5f, 1.0f, 0.0f));
        lView  = glm::translate(lView, glm::vec3(0.0f, 0.0f, -3.0f));
		lProjection = glm::perspective(glm::radians(45.0f), (float)lOpenGL.width() / (float)lOpenGL.height(), 0.1f, 100.0f);        lOpenGL.uniform("model", glm::value_ptr(lModel));
        lOpenGL.uniform("view", glm::value_ptr(lView));
        lOpenGL.uniform("projection", glm::value_ptr(lProjection));
        lOpenGL.triangle(0, 36);
        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Autorisation de la prise en compte de la profondeur<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::depthOn() {
    glEnable(GL_DEPTH_TEST);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_coordinate_system_depth.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_coordinate_system_depth.gif"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Affichage-de-plusieurs-objets"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Affichage de plusieurs objets</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    float lVertices[] = {
        -0.5f, -0.5f, -0.5f,  0.0f, 0.0f,
         0.5f, -0.5f, -0.5f,  1.0f, 0.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 0.0f,

        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 1.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 1.0f,
        -0.5f,  0.5f,  0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,

        -0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f,  0.5f,  0.5f,  1.0f, 0.0f,

         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,

        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  1.0f, 1.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,

        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f,  0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f
    };
    glm::vec3 lCubePositions[] = {
        glm::vec3( 0.0f,  0.0f,  0.0f),
        glm::vec3( 2.0f,  5.0f, -15.0f),
        glm::vec3(-1.5f, -2.2f, -2.5f),
        glm::vec3(-3.8f, -2.0f, -12.3f),
        glm::vec3( 2.4f, -0.4f, -3.5f),
        glm::vec3(-1.7f,  3.0f, -7.5f),
        glm::vec3( 1.3f, -2.0f, -2.5f),
        glm::vec3( 1.5f,  2.0f, -2.5f),
        glm::vec3( 1.5f,  0.2f, -1.5f),
        glm::vec3(-1.3f,  1.0f, -1.5f)
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 5, 0);
    lOpenGL.vbo(1, 2, 5, 3);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    lOpenGL2.depthOn();

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.vao(lParams.vao);
        glm::mat4 lView = glm::mat4(1.0f);
        glm::mat4 lProjection = glm::mat4(1.0f);
        lProjection = glm::perspective(glm::radians(45.0f), (float)lOpenGL.width() / (float)lOpenGL.height(), 0.1f, 100.0f);
        lView = glm::translate(lView, glm::vec3(0.0f, 0.0f, -3.0f));
        lOpenGL.uniform("projection", glm::value_ptr(lProjection));
        lOpenGL.uniform("view", glm::value_ptr(lView));

        for (unsigned int i = 0; i &lt; 10; i++) {
            glm::mat4 lModel = glm::mat4(1.0f);
            lModel = glm::translate(lModel, lCubePositions[i]);
            float lAngle = 20.0f * (i + 1);
            lModel = glm::rotate(lModel, glm::radians(lAngle), glm::vec3(1.0f, 0.3f, 0.5f));
            lOpenGL.uniform("model", glm::value_ptr(lModel));
            lOpenGL.triangle(0, 36);
        }

        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_object_multiple.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_object_multiple.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Rotation-de-plusieurs-objets"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Rotation de plusieurs objets</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    float lVertices[] = {
        -0.5f, -0.5f, -0.5f,  0.0f, 0.0f,
         0.5f, -0.5f, -0.5f,  1.0f, 0.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 0.0f,

        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 1.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 1.0f,
        -0.5f,  0.5f,  0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,

        -0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f,  0.5f,  0.5f,  1.0f, 0.0f,

         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,

        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  1.0f, 1.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,

        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f,  0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f
    };
    glm::vec3 lCubePositions[] = {
        glm::vec3( 0.0f,  0.0f,  0.0f),
        glm::vec3( 2.0f,  5.0f, -15.0f),
        glm::vec3(-1.5f, -2.2f, -2.5f),
        glm::vec3(-3.8f, -2.0f, -12.3f),
        glm::vec3( 2.4f, -0.4f, -3.5f),
        glm::vec3(-1.7f,  3.0f, -7.5f),
        glm::vec3( 1.3f, -2.0f, -2.5f),
        glm::vec3( 1.5f,  2.0f, -2.5f),
        glm::vec3( 1.5f,  0.2f, -1.5f),
        glm::vec3(-1.3f,  1.0f, -1.5f)
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 5, 0);
    lOpenGL.vbo(1, 2, 5, 3);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    lOpenGL2.depthOn();

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.vao(lParams.vao);
        glm::mat4 lView = glm::mat4(1.0f);
        glm::mat4 lProjection = glm::mat4(1.0f);
        lProjection = glm::perspective(glm::radians(45.0f), (float)lOpenGL.width() / (float)lOpenGL.height(), 0.1f, 100.0f);
        lView = glm::translate(lView, glm::vec3(0.0f, 0.0f, -3.0f));
        lOpenGL.uniform("projection", glm::value_ptr(lProjection));
        lOpenGL.uniform("view", glm::value_ptr(lView));

        for (unsigned int i = 0; i &lt; 10; i++) {
            glm::mat4 lModel = glm::mat4(1.0f);
            lModel = glm::translate(lModel, lCubePositions[i]);
            float lAngle = 20.0f * (i + 1);
            if(i % 3 == 0) {
            	lAngle = glfwGetTime() * 25.0f;
            }
            lModel = glm::rotate(lModel, glm::radians(lAngle), glm::vec3(1.0f, 0.3f, 0.5f));
            lOpenGL.uniform("model", glm::value_ptr(lModel));
            lOpenGL.triangle(0, 36);
        }

        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_object_multiple_rotate.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_object_multiple_rotate.gif"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Rotation-d-une-camera-autour-d-une-scene"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Rotation d'une camera autour d'une scène</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};
    lParams.cam.eye = glm::vec3(0.f, 0.f, 0.f);
    lParams.cam.center = glm::vec3(0.f, 0.f, 0.f);
    lParams.cam.up = glm::vec3(0.f, 1.f, 0.f);
    lParams.radius = 10.f;

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    float lVertices[] = {
        -0.5f, -0.5f, -0.5f,  0.0f, 0.0f,
         0.5f, -0.5f, -0.5f,  1.0f, 0.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 0.0f,

        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 1.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 1.0f,
        -0.5f,  0.5f,  0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,

        -0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f,  0.5f,  0.5f,  1.0f, 0.0f,

         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,

        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  1.0f, 1.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,

        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f,  0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f
    };
    glm::vec3 lCubePositions[] = {
        glm::vec3( 0.0f,  0.0f,  0.0f),
        glm::vec3( 2.0f,  5.0f, -15.0f),
        glm::vec3(-1.5f, -2.2f, -2.5f),
        glm::vec3(-3.8f, -2.0f, -12.3f),
        glm::vec3( 2.4f, -0.4f, -3.5f),
        glm::vec3(-1.7f,  3.0f, -7.5f),
        glm::vec3( 1.3f, -2.0f, -2.5f),
        glm::vec3( 1.5f,  2.0f, -2.5f),
        glm::vec3( 1.5f,  0.2f, -1.5f),
        glm::vec3(-1.3f,  1.0f, -1.5f)
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 5, 0);
    lOpenGL.vbo(1, 2, 5, 3);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    lOpenGL2.depthOn();

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.vao(lParams.vao);

        lParams.cam.eye[0] = lParams.radius * sin(glfwGetTime());
        lParams.cam.eye[2] = lParams.radius * cos(glfwGetTime());
        lParams.mvp.view = lOpenGL.camera(lParams.cam);
        lOpenGL.uniform("view", glm::value_ptr(lParams.mvp.view));

        lParams.mvp.projection = glm::perspective(glm::radians(45.0f), (float)lOpenGL.width() / (float)lOpenGL.height(), 0.1f, 100.0f);
        lOpenGL.uniform("projection", glm::value_ptr(lParams.mvp.projection));

        for (int i = 0; i &lt; 10; i++) {
        	lParams.mvp.model = glm::mat4(1.0f);
        	lParams.mvp.model = glm::translate(lParams.mvp.model, lCubePositions[i]);
            lParams.angle = 20.0f * (i + 1);
            lParams.mvp.model = glm::rotate(lParams.mvp.model, glm::radians(lParams.angle), glm::vec3(1.0f, 0.3f, 0.5f));
            lOpenGL.uniform("model", glm::value_ptr(lParams.mvp.model));
            lOpenGL.triangle(0, 36);
        }

        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_camera_rotate.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_camera_rotate.gif"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Apprendre-OpenGL-Deplacement-d-une-camera-dans-une-scene"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Apprendre-OpenGL">Déplacement d'une camera dans une scène</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init2();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.color = {0.2f, 0.3f, 0.3f, 1.f};
    lParams.cam.eye = glm::vec3(0.f, 0.f, 3.f);
    lParams.cam.front = glm::vec3(0.f, 0.f, -1.f);
    lParams.cam.up = glm::vec3(0.f, 1.f, 0.f);
    lParams.cam.speedFactor = 2.5f;
    lParams.deltaTime = 0.f;
    lParams.lastTime = 0.f;

    GOpenGL lOpenGL2;

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.texture2(lApp-&gt;texture_file);
    lOpenGL2.texture3(lApp-&gt;texture_file2);

    float lVertices[] = {
        -0.5f, -0.5f, -0.5f,  0.0f, 0.0f,
         0.5f, -0.5f, -0.5f,  1.0f, 0.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 0.0f,

        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 1.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 1.0f,
        -0.5f,  0.5f,  0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,

        -0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f,  0.5f,  0.5f,  1.0f, 0.0f,

         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,

        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,
         0.5f, -0.5f, -0.5f,  1.0f, 1.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
         0.5f, -0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f, -0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f, -0.5f, -0.5f,  0.0f, 1.0f,

        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f,
         0.5f,  0.5f, -0.5f,  1.0f, 1.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
         0.5f,  0.5f,  0.5f,  1.0f, 0.0f,
        -0.5f,  0.5f,  0.5f,  0.0f, 0.0f,
        -0.5f,  0.5f, -0.5f,  0.0f, 1.0f
    };
    glm::vec3 lCubePositions[] = {
        glm::vec3( 0.0f,  0.0f,  0.0f),
        glm::vec3( 2.0f,  5.0f, -15.0f),
        glm::vec3(-1.5f, -2.2f, -2.5f),
        glm::vec3(-3.8f, -2.0f, -12.3f),
        glm::vec3( 2.4f, -0.4f, -3.5f),
        glm::vec3(-1.7f,  3.0f, -7.5f),
        glm::vec3( 1.3f, -2.0f, -2.5f),
        glm::vec3( 1.5f,  2.0f, -2.5f),
        glm::vec3( 1.5f,  0.2f, -1.5f),
        glm::vec3(-1.3f,  1.0f, -1.5f)
    };

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo);
    lOpenGL.vbo(1, &amp;lParams.ebo);

    lOpenGL.vao(lParams.vao);
    lOpenGL.vbo(lParams.vbo, lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 5, 0);
    lOpenGL.vbo(1, 2, 5, 3);

    lOpenGL.use();
    lOpenGL.uniform2("texture1", 0);
    lOpenGL.uniform2("texture2", 1);

    lOpenGL2.depthOn();

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.color);
        lOpenGL.use();
        lOpenGL.texture(GL_TEXTURE0);
        lOpenGL2.texture(GL_TEXTURE1);
        lOpenGL.vao(lParams.vao);

		GLfloat lCurrentTime = glfwGetTime();
		lParams.deltaTime = lCurrentTime - lParams.lastTime;
		lParams.lastTime = lCurrentTime;

        lParams.cam.center = lParams.cam.eye + lParams.cam.front;
        lParams.mvp.view = lOpenGL.camera(lParams.cam);
        lOpenGL.uniform("view", glm::value_ptr(lParams.mvp.view));

        lParams.mvp.projection = glm::perspective(glm::radians(45.0f), (float)lOpenGL.width() / (float)lOpenGL.height(), 0.1f, 100.0f);
        lOpenGL.uniform("projection", glm::value_ptr(lParams.mvp.projection));

        for (int i = 0; i &lt; 10; i++) {
        	lParams.mvp.model = glm::mat4(1.0f);
        	lParams.mvp.model = glm::translate(lParams.mvp.model, lCubePositions[i]);
            lParams.angle = 20.0f * (i + 1);
            lParams.mvp.model = glm::rotate(lParams.mvp.model, glm::radians(lParams.angle), glm::vec3(1.0f, 0.3f, 0.5f));
            lOpenGL.uniform("model", glm::value_ptr(lParams.mvp.model));
            lOpenGL.triangle(0, 36);
        }

        lOpenGL.pollEvents();
    }

    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo);
    lOpenGL.deleteTexture();
    lOpenGL2.deleteTexture();
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Gestion du clavier<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::onKey(sGCamera&amp; _cam, GLfloat&amp; _deltaTime) {
    if (glfwGetKey(m_window, GLFW_KEY_ESCAPE) == GLFW_PRESS) {
    	glfwSetWindowShouldClose(m_window, true);
    }

    _cam.speed = _cam.speedFactor * _deltaTime;

    if (glfwGetKey(m_window, GLFW_KEY_UP) == GLFW_PRESS) {
    	_cam.eye += _cam.speed * _cam.front;
    }
    if (glfwGetKey(m_window, GLFW_KEY_DOWN) == GLFW_PRESS) {
    	_cam.eye -= _cam.speed * _cam.front;
    }
    if (glfwGetKey(m_window, GLFW_KEY_LEFT) == GLFW_PRESS) {
    	_cam.eye -= glm::normalize(glm::cross(_cam.front, _cam.up)) * _cam.speed;
    }
    if (glfwGetKey(m_window, GLFW_KEY_RIGHT) == GLFW_PRESS) {
    	_cam.eye += glm::normalize(glm::cross(_cam.front, _cam.up)) * _cam.speed;
    }
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_camera_move.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_learn_camera_move.gif"></div><br><h2 class="Title7 GTitle2" id="Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL"><a class="Link9" href="#Programmation-3D-avec-OpenGL">Visualiser des données 3D avec OpenGL</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-un-point">Création d'un point</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-une-ligne">Création d'une ligne</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-un-triangle">Création d'un triangle</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-un-triangle--grille-">Création d'un triangle (grille)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-une-fonction-sinusoidale">Création d'une fonction sinusoïdale</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-une-carte-de-chaleur--Gaussian-2D-">Création d'une carte de chaleur (Gaussian 2D)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Affichage-de-donnees-ECG">Affichage de données ECG</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-un-rendu-de-forme-3D">Création d'un rendu de forme 3D</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-un-rendu-de-volume-3D">Création d'un rendu de volume 3D</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Utilisation-d-un-shader">Utilisation d'un shader</a></div></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-un-point"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL">Création d'un point</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    GOpenGL lOpenGL;
    lOpenGL.init();

    while (!lOpenGL.isClose()) {
        lOpenGL.viewport();
        glRotatef((float)glfwGetTime() * 50.f, 0.f, 0.f, 1.f);
        lOpenGL.point();
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br>Création d'un point<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::point(const sGVertex&amp; _obj, int _width) {
    glPointSize(_width);
    glBegin(GL_POINTS);
    glColor4f(_obj.r, _obj.g, _obj.b, _obj.a);
    glVertex3f(_obj.x, _obj.y, _obj.z);
    glEnd();
}
//===============================================</pre></div></div><br>Création de points alignés<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::point() {
    GLfloat size = 5.0f;
    for(GLfloat x = 0.0f; x &lt;= 1.0f; x += 0.2f, size += 5.0f){
        sGVertex v1 = {x, 0.0f, 0.0f, 1.0f, 1.0f, 1.0f, 1.0f};
        point(v1, size);
    }
}
//===============================================</pre></div></div><br>Initialisation du système<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::init() {
    glfwInit();
    m_window = glfwCreateWindow(m_width, m_height, m_title.c_str(), NULL, NULL);
    glfwMakeContextCurrent(m_window);
    glfwSwapInterval(1);
    glEnable(GL_LINE_SMOOTH);
    glHint(GL_LINE_SMOOTH_HINT, GL_NICEST);
    glEnable(GL_POINT_SMOOTH);
    glHint(GL_POINT_SMOOTH_HINT, GL_NICEST);
    glEnable(GL_BLEND);
    glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);
    glEnable(GL_ALPHA_TEST) ;
}
//===============================================</pre></div></div><br>Initialisation de la caméra<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::viewport() {
    float lRatio;
    glfwGetFramebufferSize(m_window, &amp;m_width, &amp;m_height);
    lRatio = (float)m_width / (float)m_height;
    glViewport(0, 0, m_width, m_height);
    glClear(GL_COLOR_BUFFER_BIT);
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    glOrtho(-lRatio, lRatio, -1.0f, 1.0f, 1.0f, -1.0f);
    glMatrixMode(GL_MODELVIEW);
    glLoadIdentity();
    glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
}
//===============================================</pre></div></div><br>Fermeture de la fenetre<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::close() {
    glfwDestroyWindow(m_window);
    glfwTerminate();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_point.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_point.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-une-ligne"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL">Création d'une ligne</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    GOpenGL lOpenGL;
    lOpenGL.init();

    while (!lOpenGL.isClose()) {
        lOpenGL.viewport();
        lOpenGL.grid(5.f, 1.f, 0.1f);
        lOpenGL.axis(5.f, 1.f, 10.f);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br>Création de la ligne<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::line(const sGVertex* _obj, int _width) {
    glLineWidth(_width);
    glBegin(GL_LINES);
    for(int i = 0; i &lt; 2; i++) {
        sGVertex lObj = _obj[i];
        glColor4f(lObj.r, lObj.g, lObj.b, lObj.a);
        glVertex3f(lObj.x, lObj.y, lObj.z);
    }
    glEnd();
}
//===============================================</pre></div></div><br>Création d'une grille<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::grid(float _width, float _height, float _div) {
    // horizontal
    for(float i = -_height; i &lt; _height; i += _div){
        sGVertex v1 = {-_width, i, 0.0f, 1.0f, 1.0f, 1.0f, 1.0f};
        sGVertex v2 = {_width, i, 0.0f, 1.0f, 1.0f, 1.0f, 1.0f};
        line(v1, v2, 1.f);
    }
    // vertical
    for(float i = -_width; i &lt; _width; i += _div){
        sGVertex v1 = {i, -_height, 0.0f, 1.0f, 1.0f, 1.0f, 1.0f};
        sGVertex v2 = {i, _height, 0.0f, 1.0f, 1.0f, 1.0f, 1.0f};
        line(v1, v2, 1.f);
    }
}
//===============================================</pre></div></div><br>Création des axes<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::axis(float _width, float _height, float _size) {
    sGVertex v1 = {-_width, 0.0f, 0.0f, 1.0f, 0.0f, 0.0f, 0.7f};
    sGVertex v2 = {_width, 0.0f, 0.0f, 0.0f, 1.0f, 0.0f, 0.7f};
    sGVertex v3 = {0.0f, _height, 0.0f, 0.0f, 0.0f, 1.0f, 0.7f};
    sGVertex v4 = {0.0f, -_height, 0.0f, 0.0f, 0.0f, 1.0f, 0.7f};
    line(v1, v2, _size);
    line(v3, v4, _size);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_line.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_line.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-un-triangle"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL">Création d'un triangle</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    GOpenGL lOpenGL;
    lOpenGL.init();

    sGVertex lTraingle[] = {
            {-0.6f, -0.4f, 0.f, 1.f, 0.f, 0.f},
            {0.6f, -0.4f, 0.f, 0.f, 1.f, 0.f},
            {0.f, 0.6f, 0.f, 0.f, 0.f, 1.f}
    };

    while (!lOpenGL.isClose()) {
        lOpenGL.viewport();
        glRotatef((float)glfwGetTime() * 50.f, 0.f, 0.f, 1.f);
        lOpenGL.triangle(lTraingle);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br>Création du triangle<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::triangle(const sGTriangle* obj) {
    glBegin(GL_TRIANGLES);
    for(int i = 0; i &lt; 3; i++) {
        sGTriangle lObj = obj[i];
        glColor3f(lObj.r, lObj.g, lObj.b);
        glVertex3f(lObj.x, lObj.y, lObj.z);
    }
    glEnd();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_triangle.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_triangle.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-un-triangle--grille-"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL">Création d'un triangle (grille)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    GOpenGL lOpenGL;
    lOpenGL.init();

    sGVertex v1 = {0.0f, 0.8f, 0.0f, 1.0f, 0.0f, 0.0f, 0.6f};
    sGVertex v2 = {-1.0f, -0.8f, 0.0f, 0.0f, 1.0f, 0.0f, 0.6f};
    sGVertex v3 = {1.0f, -0.8f, 0.0f, 0.0f, 0.0f, 1.0f, 0.6f};

    while (!lOpenGL.isClose()) {
        lOpenGL.viewport();
        lOpenGL.grid(5.f, 1.f, 0.1f);
        lOpenGL.triangle(v1, v2, v3);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_triangle_grid.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_triangle_grid.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-une-fonction-sinusoidale"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL">Création d'une fonction sinusoïdale</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    GOpenGL lOpenGL;
    lOpenGL.init();

    float lPhase = 0.f;

    while (!lOpenGL.isClose()) {
        lOpenGL.viewport();
        lOpenGL.grid(5.f, 1.f, 0.1f);
        lOpenGL.axis(5.f, 1.f , 5.f, {1.f, 1.f, 1.f, 0.5f});
        lPhase += 0.02f;
        lOpenGL.sinus(0.8f, lPhase, 200, 10.f, 5.f, 10.f);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br>Création de la fonction sinusoïdale<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
sGData* GFunction::sinus(float _max, float _phase, int _size, float _range) {
    m_size = _size;
    m_data = new sGData[m_size];
    for(int i = 0; i &lt; _size; i++) {
        m_data[i].x = ((float)i/_size) * _range - _range/2.0f;
        m_data[i].y = _max * cosf(m_data[i].x * 3.14f + _phase);
    }
    return m_data;
}
//===============================================</pre></div></div><br>Affichage des lignes de données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::line(GFunction&amp; _func, float _linesize) {
    for(int i = 0; i &lt; _func.size() - 1; i++) {
        GLfloat x1 = _func.data()[i].x;
        GLfloat y1 = _func.data()[i].y;
        GLfloat x2 = _func.data()[i + 1].x;
        GLfloat y2 = _func.data()[i + 1].y;

        sGVertex v1 = {x1, y1, 0.0f, 0.0f, 1.0f, 1.0f, 0.5f};
        sGVertex v2 = {x2, y2, 0.0f, 0.0f, 1.0f, 0.0f, 0.5f};
        line(v1, v2, _linesize);
    }
}
//===============================================</pre></div></div><br>Affichage des points de données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::point(GFunction&amp; _func, float _psize) {
    for(int i = 0; i &lt; _func.size(); i++) {
        GLfloat x = _func.data()[i].x;
        GLfloat y = _func.data()[i].y;
        sGVertex v = {x, y, 0.0f, 1.0, 1.0, 1.0, 0.7f};
        point(v, _psize);
    }
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_sinus.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_sinus.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-une-carte-de-chaleur--Gaussian-2D-"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL">Création d'une carte de chaleur (Gaussian 2D)</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    GOpenGL lOpenGL;
    lOpenGL.init();

    float lSigma = 0.01f;

    while (!lOpenGL.isClose()) {
        lOpenGL.viewport();
        lOpenGL.grid(5.f, 1.f, 0.1f);
        lOpenGL.axis(5.f, 1.f , 5.f, {1.f, 1.f, 1.f, 0.5f});
        lSigma += 0.01f;
        if(lSigma &gt; 1.0f) {lSigma = 0.01;}
        lOpenGL.gaussian2D(1000, 1000, lSigma, 2.f);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br>Création de la gaussian 2D<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
sGData* GFunction::gaussian2D(int _xSize, int _ySize, float _sigma) {
    m_size = _xSize*_ySize;
    m_data = new sGData[m_size];
    int lCount = 0;
    for(int x = -_xSize/2; x &lt; _xSize/2; x += 1) {
        for(int y = -_ySize/2; y &lt; _ySize/2; y += 1) {
            float lX = 2.0f*x / _xSize;
            float lY = 2.0f*y / _ySize;
            float lZ = exp(-0.5f * (lX * lX) / (_sigma * _sigma) - 0.5f * (lY * lY)/(_sigma * _sigma))/(_sigma * _sigma * 2.0f * M_PI);
            m_data[lCount].x = lX;
            m_data[lCount].y = lY;
            m_data[lCount].z = lZ;
            lCount++;
        }
    }
    return m_data;
}
//===============================================</pre></div></div><br>Création de la carte de chaleur<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::heatMap(GFunction&amp; _func, float _psize) {
    float zMin, zMax;
    _func.zMinMax(zMin, zMax);

    glPointSize(_psize);
    glBegin(GL_POINTS);

    for(int i = 0; i &lt; _func.size(); i++){
        const sGData d = _func.data()[i];
        float r, g, b;
        heatMap(d.z, zMin, zMax, r, g, b);
        glColor4f(r, g, b, 0.5f);
        glVertex3f(d.x, d.y, 0.0f);
    }

    glEnd();
}
//===============================================</pre></div></div><br>Calcul des intensités de chaleur<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::heatMap(float _v, float _vmin, float _vmax, float&amp; _r, float&amp; _g, float&amp; _b) {
    float _half = (_vmin + _vmax) / 2;
    _b = 1.0f - _v/_half;
    _r = _v/_half - 1.0f;
    if(_b &lt; 0) {_b = 0.f;}
    if(_r &lt; 0) {_r = 0.f;}
    _g = 1.0f - _b - _r;
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_gaussian_2d.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_gaussian_2d.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Affichage-de-donnees-ECG"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL">Affichage de données ECG</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    GOpenGL lOpenGL;
    lOpenGL.init();

    int lCount = 0;

    while (!lOpenGL.isClose()) {
        lOpenGL.viewport();
        lOpenGL.grid(5.f, 1.f, 0.1f);
        lOpenGL.axis(5.f, 1.f , 5.f, {1.f, 1.f, 1.f, 0.5f});
        if(lCount &gt; 5000) {lCount = 0;}
        lCount += 5;
        lOpenGL.ecg(data_ecg, lCount, 1024, 2.f);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br>Affichage des données ECG<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::ecg(const float* _data, int _offset, int _size, float _linesize) {
    ecg(_data, _offset, _size, -0.5f, 0.1f, _linesize);
    ecg(_data, _offset + _size, _size, 0.0f, 0.5f, _linesize);
    ecg(_data, _offset + _size*2, _size, 0.5f, -0.25f, _linesize);
}
//===============================================
void GOpenGL::ecg(const float* _data, int _offset, int _size, float _yoffset, float _scale, float _linesize) {
    const float lSpace = 2.0f / _size * m_ratio;
    float lPos = -_size * lSpace / 2.0f;
    glLineWidth(_linesize);

    glBegin(GL_LINE_STRIP);
    glColor4f(0.1f, 1.0f, 0.1f, 0.8f);

    for(int i = _offset; i &lt; _size + _offset; i++){
        const float data = _scale * _data[i] + _yoffset;
        glVertex3f(lPos, data, 0.0f);
        lPos += lSpace;
    }

    glEnd();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_ecg.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_ecg.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-un-rendu-de-forme-3D"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL">Création d'un rendu de forme 3D</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    lOpenGL.init();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lParams.sigma = 0.1f;
    lParams.sign = 1.0f;
    lParams.step = 0.01f;
    lParams.alpha = 210.0f;
    lParams.beta = 70.0f;
    lParams.zoom = 2.0f;
    lParams.lock = false;
    lParams.freeze = false;

    while (!lOpenGL.isClose()) {
        lOpenGL.position(lParams.alpha, lParams.beta, lParams.zoom);
        lOpenGL.grid(5.f, 1.f, 0.1f);
        lOpenGL.axis(5.f, 1.f , 5.f, {1.f, 1.f, 1.f, 0.5f});
        if(!lParams.freeze) {
            lParams.sigma = lParams.sigma + lParams.sign*lParams.step;
            if(lParams.sigma &gt; 1.0f) {lParams.sign = -1.0f;}
            if(lParams.sigma &lt; 0.1){lParams.sign = 1.0f;}
        }
        lOpenGL.gaussian2D(1000, 1000, lParams.sigma, 2.f);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================
void GOpenGLUi::onResize(GLFWwindow* window, int width, int height) {
    lOpenGL.camera(45.f, 0.1f, 128.f, width, height);
}
//===============================================
void GOpenGLUi::onKey(GLFWwindow* window, int key, int scancode, int action, int mods) {
    lOpenGL.onKey(action, key, lParams.freeze, lParams.alpha, lParams.beta, lParams.zoom);
}
//===============================================</pre></div></div><br>Gestion de la caméra<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::onResize(GLFWwindow* _window, int _width, int _height) {
    lOpenGL.camera(45.f, 0.1f, 128.f, _width, _height);
}
//===============================================
void GOpenGL::camera(float _fovY, float _front, float _back, int width, int height) {
    const double DEG2RAD = 3.14159265 / 180;
    m_ratio = 1.0f; m_width = width; m_height = height;
    if(m_height &gt; 0) {m_ratio = (float) m_width / (float) m_height;}
    glViewport(0, 0, m_width, m_height);
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    float lTangent = tan(_fovY / 2 * DEG2RAD);
    float lHeightF = _front * lTangent;
    float lWidthF = lHeightF * m_ratio;
    glFrustum(-lWidthF, lWidthF, -lHeightF, lHeightF, _front, _back);
}
//===============================================</pre></div></div><br>Gestion du clavier<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::onKey(GLFWwindow* _window, int _key, int _scancode, int _action, int _mods) {
    lOpenGL.onKey(_action, _key, lParams.freeze, lParams.alpha, lParams.beta, lParams.zoom);
}
//===============================================
void GOpenGL::onKey(int action, int key, bool&amp; _freeze, float&amp; _alpha, float&amp; _beta, float&amp; _zoom) {
    if (action != GLFW_PRESS) {return;}
    switch (key) {
        case GLFW_KEY_ESCAPE:
            glfwSetWindowShouldClose(m_window, GL_TRUE);
            break;
        case GLFW_KEY_SPACE:
            _freeze = !_freeze;
            break;
        case GLFW_KEY_LEFT:
            _alpha += 5.0f;
            break;
        case GLFW_KEY_RIGHT:
            _alpha -= 5.0f;
            break;
        case GLFW_KEY_UP:
            _beta -= 5.0f;
            break;
        case GLFW_KEY_DOWN:
            _beta += 5.0f;
            break;
        case GLFW_KEY_PAGE_UP:
            _zoom -= 0.25f;
            if (_zoom &lt; 0.0f) {_zoom = 0.0f;}
            break;
        case GLFW_KEY_PAGE_DOWN:
            _zoom += 0.25f;
            break;
        default:
            break;
    }
}
//===============================================</pre></div></div><br>Gestion du scroll de la souris<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::onScroll(GLFWwindow* _window, double _x, double _y) {
	lOpenGL.onScroll(_x, _y, lParams.zoom);
}
//===============================================
void GOpenGL::onScroll(double _x, double _y, float&amp; _zoom) {
	_zoom += (float) _y / 4.0f;
    if (_zoom &lt; 0.0f) {
    	_zoom = 0.0f;
    }
}
//===============================================</pre></div></div><br>Gestion des boutons de la souris<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::onMouse(GLFWwindow* _window, int _button, int _action, int _mods) {
    lOpenGL.onMouse(_button, _action, lParams.lock);
}
//===============================================
void GOpenGL::onMouse(int _button, int _action, bool&amp; lock) {
    if (_button != GLFW_MOUSE_BUTTON_LEFT) {return;}
    if (_action == GLFW_PRESS) {
        glfwSetInputMode(m_window, GLFW_CURSOR, GLFW_CURSOR_DISABLED);
        lock = true;
    }
    else {
        lock = false;
        glfwSetInputMode(m_window, GLFW_CURSOR, GLFW_CURSOR_NORMAL);
    }
}
//===============================================</pre></div></div><br>Gestion du curseur de la souris<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::onCursor(GLFWwindow* _window, double _x, double _y) {
    lOpenGL.onCursor(_x, _y, lParams.lock, lParams.alpha, lParams.beta, lParams.cursorX, lParams.cursorY);
}
//===============================================
void GOpenGL::onCursor(double _x, double _y, bool&amp; _lock, float&amp; _alpha, float&amp; _beta, int _cursorX, int&amp; _cursorY) {
    if (_lock) {
        _alpha += (float) (_x - _cursorX) / 10.0f;
        _beta += (float) (_y - _cursorY) / 10.0f;
    }
    _cursorX = (int) _x;
    _cursorY = (int) _y;
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_plot_3d.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_plot_3d.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Creation-d-un-rendu-de-volume-3D"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL">Création d'un rendu de volume 3D</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);
    lOpenGL.onScroll(onScroll);
    lOpenGL.onMouse(onMouse);
    lOpenGL.onCursor(onCursor);

    lParams.filename = lApp-&gt;mcml_file.c_str();
    lParams.xsize = 50;
    lParams.ysize = 50;
    lParams.zsize = 200;
    lParams.color = {1.f, 1.f, 1.f, 1.f};
    lParams.alpha = 220.0f;
    lParams.beta = -60.0f;
    lParams.zoom = 2.5f;
    lParams.lock = false;
    lParams.cursorX = 0;
    lParams.cursorY = 0;
    lParams.xslice = 0;
    lParams.yslice = 0;
    lParams.zslice = 0;
    lParams.pointsize = 5.f;
    lParams.linesize = 5.f;
    lParams.transparency = 0.5f;

    GFunction lFunction;
    lFunction.mcml(lParams.filename, lParams.xsize, lParams.ysize, lParams.zsize, lParams.color);

    while (!lOpenGL.isClose()) {
        lOpenGL.position(lParams.alpha, lParams.beta, lParams.zoom);
        lOpenGL.grid(5.f, 1.f, 0.1f);
        lOpenGL.depth(false);
        lOpenGL.mcml(lFunction, lParams.pointsize, 0.15f);
        lOpenGL.depth(true);
        lOpenGL.slice(lFunction, lParams.xsize, lParams.ysize, lParams.zsize, lParams.xslice, lParams.yslice, lParams.zslice, lParams.pointsize);
        lOpenGL.origin(lParams.linesize, lParams.transparency);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================
void GOpenGLUi::onResize(GLFWwindow* _window, int _width, int _height) {
    lOpenGL.camera(45.f, 0.1f, 128.f, _width, _height);
}
//===============================================
void GOpenGLUi::onKey(GLFWwindow* _window, int _key, int _scancode, int _action, int _mods) {
    lOpenGL.onKey2(_action, _key, lParams.xsize, lParams.ysize, lParams.zsize, lParams.pointsize, lParams.xslice, lParams.yslice, lParams.zslice, lParams.zoom);
}
//===============================================
void GOpenGLUi::onScroll(GLFWwindow* _window, double _x, double _y) {
    lOpenGL.onScroll(_x, _y, lParams.zoom);
}
//===============================================
void GOpenGLUi::onMouse(GLFWwindow* _window, int _button, int _action, int _mods) {
    lOpenGL.onMouse(_button, _action, lParams.lock);
}
//===============================================
void GOpenGLUi::onCursor(GLFWwindow* _window, double _x, double _y) {
    lOpenGL.onCursor(_x, _y, lParams.lock, lParams.alpha, lParams.beta, lParams.cursorX, lParams.cursorY);
}
//===============================================</pre></div></div><br>Chargement des données 3D<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GFunction::mcml(const char* _filename, int _xsize, int _ysize, int _zsize, const sGColor&amp; _color) {
    GFile lFile;
    lFile.filename(_filename);
    lFile.open();
    allocate(_xsize, _ysize, _zsize);
    float lData, lMin, lMax;
    GOpenGL _lOpenGL;

    for(int x = 0; x &lt; _xsize; x++){
        for(int z = 0; z &lt; _zsize; z++){
            for(int y = 0; y &lt; _ysize; y++) {
                if(lFile.read(lData) != EOF) {
                    lData = log(lData + 1);
                    m_float3D[x][y][z] = lData;
                    m_vertex3D[x][y][z].x = (float)(x - _xsize / 2.0f) / _xsize;
                    m_vertex3D[x][y][z].y = (float)(y - _ysize / 2.0f) / _ysize;
                    m_vertex3D[x][y][z].z = (float)(z - _zsize / 2.0f) / _zsize * 2.0f;
                }
            }
        }
    }

    zMinMax2(lMin, lMax);

    for(int z = 0; z &lt; _zsize; z++){
        for(int x = 0; x &lt; _xsize; x++){
            for(int y = 0; y &lt; _ysize; y++) {
                float lData = m_float3D[x][y][z];
                sGColor lColor = _lOpenGL.heatMap(lData, lMin, lMax, _color);
                m_vertex3D[x][y][z].r = lColor.r;
                m_vertex3D[x][y][z].g = lColor.g;
                m_vertex3D[x][y][z].b = lColor.b;
            }
        }
    }

    lFile.close();
}
//===============================================</pre></div></div><br>Affichage des données 3D<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::mcml(GFunction&amp; _func, float _pointsize, float _alpha) {
    glPointSize(_pointsize);
    glBegin(GL_POINTS);
    for(int z = 0; z &lt; _func.zsize(); z++){
        for(int x = 0; x &lt; _func.xsize(); x++){
            for(int y = 0; y &lt; _func.ysize(); y++){
                glColor4f(_func.vertex3D()[x][y][z].r, _func.vertex3D()[x][y][z].g, _func.vertex3D()[x][y][z].b, _alpha);
                glVertex3f(_func.vertex3D()[x][y][z].x, _func.vertex3D()[x][y][z].y, _func.vertex3D()[x][y][z].z);
            }
        }
    }
    glEnd();
}
//===============================================</pre></div></div><br>DEPTH (ON)<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_volume_3d.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_volume_3d.png"></div><br>DEPTH (OFF)<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_volume_3d_2.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_volume_3d_2.png"></div><br><h3 class="Title8 GTitle3" id="Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL-Utilisation-d-un-shader"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Visualiser-des-donnees-3D-avec-OpenGL">Utilisation d'un shader</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    const GLfloat lVertices[] = {
            -1.0f, -1.0f, 0.0f,
            1.0f, -1.0f, 0.0f,
            1.0f, 1.0f, 0.0f,
            -1.0f, -1.0f, 0.0f,
            1.0f, 1.0f, 0.0f,
            -1.0f, 1.0f, 0.0f
    };
    const GLfloat lColors[] = {
            0.0f, 0.0f, 1.0f,
            0.0f, 1.0f, 0.0f,
            1.0f, 0.0f, 0.0f,
            0.0f, 0.0f, 1.0f,
            1.0f, 0.0f, 0.0f,
            0.0f, 1.0f, 0.0f
    };

    lParams.vertex = lVertices;
    lParams.color = lColors;
    lParams.vertex_size = sizeof(lVertices);
    lParams.color_size = sizeof(lColors);

    lOpenGL.init2();

    lOpenGL.shader(lApp-&gt;vertex_shader_file, lApp-&gt;fragment_shader_file);

    lOpenGL.vao(1, &amp;lParams.vao);
    lOpenGL.vbo(1, &amp;lParams.vbo_vertex);
    lOpenGL.vbo(1, &amp;lParams.vbo_color);
    lOpenGL.vbo(lParams.vbo_vertex, lParams.vertex, lParams.vertex_size);
    lOpenGL.vbo(lParams.vbo_color, lParams.color, lParams.color_size);
    lOpenGL.vbo(lParams.vbo_vertex, lParams.attrib_vertex, "position");
    lOpenGL.vbo(lParams.vbo_color, lParams.attrib_color, "color_in");
    lOpenGL.fragment(0, "color_out");

    lOpenGL.use();

    while (!lOpenGL.isClose()) {
    	lOpenGL.bgcolor();
        glDrawArrays(GL_TRIANGLES, 0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.disableAttrib(lParams.attrib_vertex);
    lOpenGL.disableAttrib(lParams.attrib_color);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo_vertex);
    lOpenGL.deleteVbo(1, &amp;lParams.vbo_color);
    lOpenGL.deleteVao(1, &amp;lParams.vao);
    lOpenGL.deleteProgram();
    lOpenGL.close();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_shader.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_intro_shader.png"></div><br><h2 class="Title7 GTitle2" id="Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL"><a class="Link9" href="#Programmation-3D-avec-OpenGL">Comprendre les shaders avec OpenGL</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Creation-d-un-triangle">Création d'un triangle</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Utilisation-des-attributs">Utilisation des attributs</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Utilisation-de-variables-uniformes">Utilisation de variables uniformes</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Utilisation-des-blocs-de-variables-uniformes">Utilisation des blocs de variables uniformes</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Utilisation-des-pipelines">Utilisation des pipelines</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Creation-d-une-lumiere-diffuse">Création d'une lumière diffuse</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Creation-de-l-ombrage-de-Phong">Création de l'ombrage de Phong</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Creation-d-une-surface-ondulante">Création d'une surface ondulante</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Creation-d-une-fontaine-de-particules">Création d'une fontaine de particules</a></div></div><br><h3 class="GTitle3" id="Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Creation-d-un-triangle"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL">Création d'un triangle</a></h3><br>Cette opération permet d'<b>utiliser les shaders</b> pour créer un triangle avec des couleurs. On initialise le système. On charge les shaders.shaders. On lie les shaders au programme. On active les shaders. Et on déssine le triangle.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init(4, 5, 4);
    lOpenGL.depthOn();
    lOpenGL.onResize(onResize);
    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.use();

    lParams.bgcolor = {0.1f, 0.2f, 0.3f, 1.0f};

    GLfloat lVertices[] = {
            -0.8f, -0.8f, 0.0f,
            0.8f, -0.8f, 0.0f,
            0.0f,  0.8f, 0.0f
    };
    GLfloat lColors[] = {
            1.0f, 0.0f, 0.0f,
            0.0f, 1.0f, 0.0f,
            0.0f, 0.0f, 1.0f
    };

    lOpenGL.vao(1, lParams.vao);
    lOpenGL.vbo(2, lParams.vbo);

    lOpenGL.vao(lParams.vao[0]);
    lOpenGL.vbo(lParams.vbo[0], lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 3, 0);
    lOpenGL.vbo(lParams.vbo[1], lColors, sizeof(lColors));
    lOpenGL.vbo(1, 3, 3, 0);

    while (!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.bgcolor);
        lOpenGL.vao(lParams.vao[0]);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 450

layout (location=0) in vec3 VertexPosition;
layout (location=1) in vec3 VertexColor;

layout (location=0) out vec3 vColor;

void main()
{
    vColor = VertexColor;
    gl_Position = vec4(VertexPosition,1.0);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 450

layout(location=0) in vec3 vColor;

layout (location=0) out vec4 FragColor;

void main() {
    FragColor = vec4(vColor, 1.0);
}
//===============================================</pre></div></div><br>Initialisation du système<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::init(int _major, int _minor, int _samples) {
    glfwInit();
    glfwWindowHint(GLFW_CONTEXT_VERSION_MAJOR, _major);
    glfwWindowHint(GLFW_CONTEXT_VERSION_MINOR, _minor);
    glfwWindowHint(GLFW_OPENGL_FORWARD_COMPAT, GL_TRUE);
    glfwWindowHint(GLFW_OPENGL_PROFILE, GLFW_OPENGL_CORE_PROFILE);
    glfwWindowHint(GLFW_OPENGL_DEBUG_CONTEXT, GL_TRUE);
    glfwWindowHint(GLFW_SAMPLES, _samples);
    m_window = glfwCreateWindow(m_width, m_height, m_title.c_str(), NULL, NULL);
    glfwMakeContextCurrent(m_window);
    glfwSwapInterval(1);
    glEnable(GL_LINE_SMOOTH);
    glHint(GL_LINE_SMOOTH_HINT, GL_NICEST);
    glEnable(GL_POINT_SMOOTH);
    glHint(GL_POINT_SMOOTH_HINT, GL_NICEST);
    glEnable(GL_BLEND);
    glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);
    glEnable(GL_ALPHA_TEST) ;
    glewExperimental = true;
    glewInit();
}
//===============================================</pre></div></div><br>Chargement des shaders<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::shader(const std::string&amp; _vertex, const std::string&amp; _fragment) {
    GLuint lVertexId = glCreateShader(GL_VERTEX_SHADER);
    compile(lVertexId, _vertex);

    GLuint lFragmentId = glCreateShader(GL_FRAGMENT_SHADER);
    compile(lFragmentId, _fragment);

    m_program = glCreateProgram();

    glAttachShader(m_program, lVertexId);
    glAttachShader(m_program, lFragmentId);
    glLinkProgram(m_program);

    GLint lResult = 0;
    int logLength;

    glGetProgramiv(m_program, GL_LINK_STATUS, &amp;lResult);
    glGetProgramiv(m_program, GL_INFO_LOG_LENGTH, &amp;logLength);

    glDeleteShader(lVertexId);
    glDeleteShader(lFragmentId);
}
//===============================================</pre></div></div><br>Création du triangle<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::triangle(GLint _index, GLsizei _count) {
    glDrawArrays(GL_TRIANGLES, _index, _count);
}
//===============================================</pre></div></div><br>Gestion du redimensionnement de la fenêtre<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::onResize(GLFWwindow* _window, int _width, int _height) {
    lOpenGL.viewport(_width, _height);
}
//===============================================</pre></div></div><br>Traitement du redimensionnement de la fenêtre<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::viewport(int _width, int _height) {
    glViewport(0, 0, _width, _height);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_triangle.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_triangle.png"></div><br><h3 class="GTitle3" id="Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Utilisation-des-attributs"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL">Utilisation des attributs</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init(4, 5, 4);
    lOpenGL.depthOn();
    lOpenGL.onResize(onResize);

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.use();
    lParams.bgcolor = {0.1f, 0.2f, 0.3f, 1.0f};

    GLfloat lVertices[] = {
        -0.8f, -0.8f, 0.0f,
         0.8f, -0.8f, 0.0f,
         0.0f,  0.8f, 0.0f
    };
    GLfloat lColors[] = {
        1.0f, 0.0f, 0.0f,
        0.0f, 1.0f, 0.0f,
        0.0f, 0.0f, 1.0f
    };

    lOpenGL.vao(1, lParams.vao);
    lOpenGL.vbo(2, lParams.vbo);

    lOpenGL.vao(lParams.vao[0]);
    lOpenGL.vbo(lParams.vbo[0], lVertices, sizeof(lVertices));
    lOpenGL.vbo2(0, lParams.vbo[0], 0, 3);
    lOpenGL.attribut(0, 3, 0);
    lOpenGL.vbo(lParams.vbo[1], lColors, sizeof(lColors));
    lOpenGL.vbo2(1, lParams.vbo[1], 0, 3);
    lOpenGL.attribut(1, 3, 0);

    lOpenGL.attributs();

    while (!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.bgcolor);
        lOpenGL.vao(lParams.vao[0]);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br>Liste des attributs<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::attributs() {
    GLint lCount;
    glGetProgramInterfaceiv(m_programID, GL_PROGRAM_INPUT, GL_ACTIVE_RESOURCES, &amp;lCount);
    GLenum lProperties[] = {GL_NAME_LENGTH, GL_TYPE, GL_LOCATION};

    printf("Active attributes.....:\n");
    for(int i = 0; i &lt; lCount; i++) {
        GLint lResults[3];
        glGetProgramResourceiv(m_programID, GL_PROGRAM_INPUT, i, 3, lProperties, 3, NULL, lResults);
        GLint lSize = lResults[0] + 1;
        char* lName = new char[lSize];
        glGetProgramResourceName(m_programID, GL_PROGRAM_INPUT, i, lSize, NULL, lName);
        printf(".....[%-5d] : %s (%s)\n", lResults[2], lName, type(lResults[1]));
        delete[] lName;
    }
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_attributs_list.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_attributs_list.png"></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_attributs_img.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_attributs_img.png"></div><br><h3 class="GTitle3" id="Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Utilisation-de-variables-uniformes"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL">Utilisation de variables uniformes</a></h3><br>Cette opération permet de <b>réaliser la rotation d'un triangle</b> à travers l'utilisation d'une variable uniforme. On incrémente l'angle de rotation à chaque boucle. On calcule la matrice de rotation et on la transmet au shader via une variable uniforme.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init(4, 5, 4);
    lOpenGL.depthOn();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.use();

    lParams.bgcolor = {0.1f, 0.2f, 0.3f, 1.0f};
    lParams.animate = true;
    lParams.angle = 0.f;

    GLfloat lVertices[] = {
            -0.8f, -0.8f, 0.0f,
            0.8f, -0.8f, 0.0f,
            0.0f,  0.8f, 0.0f
    };
    GLfloat lColors[] = {
            1.0f, 0.0f, 0.0f,
            0.0f, 1.0f, 0.0f,
            0.0f, 0.0f, 1.0f
    };

    lOpenGL.vao(1, lParams.vao);
    lOpenGL.vbo(2, lParams.vbo);

    lOpenGL.vao(lParams.vao[0]);
    lOpenGL.vbo(lParams.vbo[0], lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 3, 0);
    lOpenGL.vbo(lParams.vbo[1], lColors, sizeof(lColors));
    lOpenGL.vbo(1, 3, 3, 0);

    while (!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.bgcolor);
    	lOpenGL.angle(lParams.animate, lParams.angle);
    	lOpenGL.rotation(lParams.rotation, lParams.angle);
    	lOpenGL.uniform("RotationMatrix", &amp;lParams.rotation[0][0]);
        lOpenGL.vao(lParams.vao[0]);
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 410

layout (location = 0) in vec3 VertexPosition;
layout (location = 1) in vec3 VertexColor;

out vec3 Color;

uniform mat4 RotationMatrix;

void main()
{
    Color = VertexColor;
    gl_Position = RotationMatrix * vec4(VertexPosition,1.0);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 410

in vec3 Color;
layout (location = 0) out vec4 FragColor;

void main() {
    FragColor = vec4(Color, 1.0);
}
//===============================================</pre></div></div><br>Incrémentation de l'angle de rotation<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::angle(bool _animate, float&amp; _angle) {
    if(_animate) {
        _angle += 0.1f;
        if(_angle &gt;= 360.0f) _angle -= 360.0f;
    }
}
//===============================================</pre></div></div><br>Calcul de la matrice de rotation<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::rotation(glm::mat4&amp; _rotation, float _angle) {
    _rotation = glm::rotate(glm::mat4(1.0f), _angle, glm::vec3(0.0f, 0.0f, 1.0f));
}
//===============================================</pre></div></div><br>Transfert de la matrice de rotation<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::uniform(const char* _name, const GLfloat* _v0) {
    GLint lLocation = glGetUniformLocation(m_programID, _name);
    glUniformMatrix4fv(lLocation, 1, GL_FALSE, _v0);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_uniform.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_uniform.png"></div><br><h3 class="GTitle3" id="Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Utilisation-des-blocs-de-variables-uniformes"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL">Utilisation des blocs de variables uniformes</a></h3><br>Cette opération permet de <b>regrouper des variables uniformes</b> dans un bloc avant de les appliquer à un shader. On alloue la mémoire du bloc. On charge les données dans la mémoire. Et on lie le bloc de données au shader.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init(4, 5, 4);
    lOpenGL.depthOn();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.use();

    lParams.bgcolor = {0.1f, 0.2f, 0.3f, 1.0f};

    float lVertices[] = {
            -0.8f, -0.8f, 0.0f,
            0.8f, -0.8f, 0.0f,
            0.8f,  0.8f, 0.0f,
            -0.8f, -0.8f, 0.0f,
            0.8f, 0.8f, 0.0f,
            -0.8f, 0.8f, 0.0f
    };
    GLfloat lTextures[] = {
            0.0f, 0.0f,
            1.0f, 0.0f,
            1.0f, 1.0f,
            0.0f, 0.0f,
            1.0f, 1.0f,
            0.0f, 1.0f
    };

    lOpenGL.vao(1, lParams.vao);
    lOpenGL.vbo(3, lParams.vbo);

    lOpenGL.vao(lParams.vao[0]);
    lOpenGL.vbo(lParams.vbo[0], lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 3, 0);
    lOpenGL.vbo(lParams.vbo[1], lTextures, sizeof(lTextures));
    lOpenGL.vbo(1, 2, 2, 0);

    const char* lBlobSettings[] = {
            "BlobSettings.InnerColor",
            "BlobSettings.OuterColor",
            "BlobSettings.RadiusInner",
            "BlobSettings.RadiusOuter"
    };

    GLfloat lOuterColor[] = {0.0f, 0.0f, 0.0f, 0.0f};
    GLfloat lInnerColor[] = {1.0f, 1.0f, 0.75f, 1.0f};
    GLfloat lRadiusInner[] = {0.25f};
    GLfloat lRadiusOuter[] = {0.45f};

    lOpenGL.uniformBloc("BlobSettings");
    lOpenGL.uniformBloc(4, lBlobSettings);
    lOpenGL.uniformBloc(0, 4, lInnerColor);
    lOpenGL.uniformBloc(1, 4, lOuterColor);
    lOpenGL.uniformBloc(2, 1, lRadiusInner);
    lOpenGL.uniformBloc(3, 1, lRadiusOuter);
    lOpenGL.uniformBloc(lParams.vbo[2]);
    lOpenGL.uniformBloc();

    lOpenGL.uniformBlocs();

    while (!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.bgcolor);
        lOpenGL.vao(lParams.vao[0]);
        lOpenGL.triangle(0, 6);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 430

layout (location = 0) in vec3 VertexPosition;
layout (location = 1) in vec3 VertexTexCoord;

out vec3 TexCoord;

void main()
{
    TexCoord = VertexTexCoord;
    gl_Position = vec4(VertexPosition,1.0);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 430

in vec3 TexCoord;
layout (location = 0) out vec4 FragColor;

layout (binding = 1) uniform BlobSettings {
    vec4 InnerColor;
    vec4 OuterColor;
    float RadiusInner;
    float RadiusOuter;
} Blob;

void main() {
    float dx = TexCoord.x - 0.5;
    float dy = TexCoord.y - 0.5;
    float dist = sqrt(dx * dx + dy * dy);
    FragColor = mix(
        Blob.InnerColor, 
        Blob.OuterColor,
        smoothstep(Blob.RadiusInner, Blob.RadiusOuter, dist)
    );
}
//===============================================</pre></div></div><br>Allocation d'un bloc de variables uniformes<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::uniformBloc(const char* _name) {
    GLuint lLocation = glGetUniformBlockIndex(m_programID, _name);
    glGetActiveUniformBlockiv(m_programID, lLocation, GL_UNIFORM_BLOCK_DATA_SIZE, &amp;m_blockSize);
    m_blockBuffer = new GLubyte[m_blockSize];
}
//===============================================</pre></div></div><br>Allocation des indices et des offsets<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::uniformBloc(int _size, const char** _names) {
    m_indices = new GLuint[_size];
    m_offset = new GLint[_size];
    glGetUniformIndices(m_programID, _size, _names, m_indices);
    glGetActiveUniformsiv(m_programID, _size, m_indices, GL_UNIFORM_OFFSET, m_offset);
}
//===============================================</pre></div></div><br>Chargement des données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::uniformBloc(int _offset, int _size, GLfloat* _data) {
    memcpy(m_blockBuffer + m_offset[_offset], _data, _size * sizeof(GLfloat));
}
//===============================================</pre></div></div><br>Liaison des données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::uniformBloc(GLuint _vbo) {
    glBindBuffer(GL_UNIFORM_BUFFER, _vbo);
    glBufferData( GL_UNIFORM_BUFFER, m_blockSize, m_blockBuffer, GL_DYNAMIC_DRAW);
    glBindBufferBase( GL_UNIFORM_BUFFER, 1, _vbo);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_uniform_block_list.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_uniform_block_list.png"></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_uniform_block_img.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_uniform_block_img.png"></div><br><h3 class="GTitle3" id="Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Utilisation-des-pipelines"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL">Utilisation des pipelines</a></h3><br>Cette opération permet de <b>combiner plusieurs shaders</b>, sans avoir besoin de les lier. On crée un programID pour chaque shader qu'on associe à un objet pipeline.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init(4, 5, 4);
    lOpenGL.depthOn();
    lOpenGL.onResize(onResize);

    GOpenGL lFragment1, lFragment2, lPipeline1, lPipeline2;
    lOpenGL.shader4(lApp-&gt;shader_vertex_file, GL_VERTEX_SHADER);
    lFragment1.shader4(lApp-&gt;shader_fragment_file, GL_FRAGMENT_SHADER);
    lFragment2.shader4(lApp-&gt;shader_fragment_file_2, GL_FRAGMENT_SHADER);
    lPipeline1.pipeline(lOpenGL, lFragment1);
    lPipeline2.pipeline(lOpenGL, lFragment2);

    lParams.bgcolor = {0.1f, 0.2f, 0.3f, 1.0f};

    GLfloat lVertices[] = {
            -0.8f, -0.8f, 0.0f,
            0.8f, -0.8f, 0.0f,
            0.0f,  0.8f, 0.0f
    };
    GLfloat lColors[] = {
            1.0f, 0.0f, 0.0f,
            0.0f, 1.0f, 0.0f,
            0.0f, 0.0f, 1.0f
    };

    lOpenGL.vao(1, lParams.vao);
    lOpenGL.vbo(2, lParams.vbo);

    lOpenGL.vao(lParams.vao[0]);
    lOpenGL.vbo(lParams.vbo[0], lVertices, sizeof(lVertices));
    lOpenGL.vbo(0, 3, 3, 0);
    lOpenGL.vbo(lParams.vbo[1], lColors, sizeof(lColors));
    lOpenGL.vbo(1, 3, 3, 0);

    while (!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.bgcolor);
        lOpenGL.use(0);
        lOpenGL.uniform2("uColorMask", 0.0f, 1.0f, 0.0f);
        lOpenGL.vao(lParams.vao[0]);
        lOpenGL.viewport(0.f, 0.f, 0.5f, 1.f);
        lPipeline1.pipeline();
        lOpenGL.triangle(0, 3);
        lOpenGL.viewport(0.5f, 0.f, 0.5f, 1.f);
        lPipeline2.pipeline();
        lOpenGL.triangle(0, 3);
        lOpenGL.pollEvents();
    }

    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 410

layout (location=0) in vec3 VertexPosition;
layout (location=1) in vec3 VertexColor;

uniform vec3 uColorMask = vec3(0.0);

layout (location=0) out vec3 Color;

out gl_PerVertex
{
    vec4 gl_Position;
    float gl_PointSize;
    float gl_ClipDistance[];
};

void main()
{
    Color = VertexColor * uColorMask;
    gl_Position = vec4(VertexPosition,1.0);
}
//===============================================</pre></div></div><br>Fragment shader (1)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 410

layout(location=0) in vec3 Color;
layout (location=0) out vec4 FragColor;

void main() {
    FragColor = vec4(Color, 1.0);
}
//===============================================</pre></div></div><br>Fragment shader (2)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 410

const float PI = 3.141592653589793;

layout(location=0) in vec3 Color;
layout (location=0) out vec4 FragColor;

void main() {
    float fac = 1.0 + 0.5 * cos( gl_FragCoord.x * 100 / PI );
    FragColor = vec4(fac * Color, 1.0);
}
//===============================================</pre></div></div><br>Création d'un programme shader séparé<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::shader4(const std::string&amp; _shaderFile, GLenum _shaderType) {
    GFile lFile;
    GLint lStatus;

    lFile.filename(_shaderFile);
    std::string lShaderCode = lFile.read();
    GLuint lShaderId = glCreateShader(_shaderType);
    compile(lShaderId, lShaderCode);
    m_programID = glCreateProgram();
    glProgramParameteri(m_programID, GL_PROGRAM_SEPARABLE, GL_TRUE);
    glAttachShader(m_programID, lShaderId);
    glLinkProgram(m_programID);
    glGetProgramiv(m_programID, GL_LINK_STATUS, &amp;lStatus);
}
//===============================================</pre></div></div><br>Création d'un pipeline<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::pipeline(const GOpenGL&amp; _vertex, const GOpenGL&amp; _fragment) {
    glCreateProgramPipelines(1, &amp;m_pipelineID);
    glUseProgramStages(m_pipelineID, GL_VERTEX_SHADER_BIT, _vertex.m_programID);
    glUseProgramStages(m_pipelineID, GL_FRAGMENT_SHADER_BIT, _fragment.m_programID);
}
//===============================================</pre></div></div><br>Utilisation d'un pipeline<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGL::pipeline() {
    glBindProgramPipeline(m_pipelineID);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_pipeline.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_pipeline.png"></div><br><h3 class="GTitle3" id="Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Creation-d-une-lumiere-diffuse"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL">Création d'une lumière diffuse</a></h3><br>Cette opération permet de <b>créer une lumière qui diffuse</b> dans toutes les directions au contact d'un objet. Cette technique suppose que l'intensité de la lumière au point de contact est maximale lorsque le rayon incident est parallèle à la normale et nulle lorsque le rayon incident est perpendiculaire à la normale.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init(4, 5, 4);
    lOpenGL.depthOn();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.use();

    lParams.bgcolor = {0.2f, 0.3f, 0.3f, 1.f};

    lParams.mvp2.model.identity();
    lParams.mvp2.model.rotate(-35.0f, 1.0f, 0.0f, 0.0f);
    lParams.mvp2.model.rotate(35.0f, 0.0f, 1.0f, 0.0f);
    lParams.mvp2.view.lookAt(0.0f, 0.0f, 2.0f, 0.0f, 0.0f, 0.0f, 0.0f, 1.0f, 0.0f);

    lOpenGL.uniform("Kd", 0.9f, 0.5f, 0.3f);
    lOpenGL.uniform("Ld", 1.0f, 1.0f, 1.0f);
    lOpenGL.uniform("LightPosition", lParams.mvp2.view.dot(5.0f, 5.0f, 2.0f, 1.0f));

    GObject lTorus;
    lTorus.torus(0.7f, 0.3f, 30, 30);
    lTorus.init();
    lTorus.clear();

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.bgcolor);
        lParams.mvp2.mv.dot(lParams.mvp2.view, lParams.mvp2.model);
        lOpenGL.uniform("ModelViewMatrix", lParams.mvp2.mv.mat4());
        lOpenGL.uniform("NormalMatrix", lParams.mvp2.mv.mat3());
        lParams.mvp2.mvp.dot(lParams.mvp2.projection, lParams.mvp2.mv);
        lOpenGL.uniform("MVP", lParams.mvp2.mvp.mat4());
        lTorus.render();
        lOpenGL.pollEvents();
    }

    lTorus.deletes();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 410

layout (location = 0) in vec3 VertexPosition;
layout (location = 1) in vec3 VertexNormal;

out vec3 LightIntensity;

uniform vec4 LightPosition; // Light position in eye coords.
uniform vec3 Kd;            // Diffuse reflectivity
uniform vec3 Ld;            // Diffuse light intensity

uniform mat4 ModelViewMatrix;
uniform mat3 NormalMatrix;
uniform mat4 ProjectionMatrix;
uniform mat4 MVP;

void main()
{
    vec3 tnorm = normalize( NormalMatrix * VertexNormal);
    vec4 eyeCoords = ModelViewMatrix * vec4(VertexPosition,1.0);
    vec3 s = normalize(vec3(LightPosition - eyeCoords));

    LightIntensity = Ld * Kd * max( dot( s, tnorm ), 0.0 );

    gl_Position = MVP * vec4(VertexPosition,1.0);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 410

in vec3 LightIntensity;

layout( location = 0 ) out vec4 FragColor;

void main() {
    FragColor = vec4(LightIntensity, 1.0);
}
//===============================================</pre></div></div><br>Création du tore<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GObject::torus(GLfloat _outerRadius, GLfloat _innerRadius, GLuint _nsides, GLuint _nrings) {
    GLuint faces = _nsides * _nrings;
    int nVerts  = _nsides * (_nrings + 1);

    m_points.resize(3 * nVerts);
    m_normals.resize(3 * nVerts);
    m_texCoords.resize(2 * nVerts);
    m_indices.resize(6 * faces);

    float ringFactor = glm::two_pi&lt;float&gt;() / _nrings;
    float sideFactor = glm::two_pi&lt;float&gt;() / _nsides;
    int idx = 0, tidx = 0;

    for(GLuint ring = 0; ring &lt;= _nrings; ring++) {
        float u = ring * ringFactor;
        float cu = cos(u);
        float su = sin(u);
        for( GLuint side = 0; side &lt; _nsides; side++ ) {
            float v = side * sideFactor;
            float cv = cos(v);
            float sv = sin(v);
            float r = (_outerRadius + _innerRadius * cv);
            m_points[idx + 0] = r * cu;
            m_points[idx + 1] = r * su;
            m_points[idx + 2] = _innerRadius * sv;
            m_normals[idx + 0] = cv * cu * r;
            m_normals[idx + 1] = cv * su * r;
            m_normals[idx + 2] = sv * r;
            m_texCoords[tidx + 0] = u / glm::two_pi&lt;float&gt;();
            m_texCoords[tidx + 1] = v / glm::two_pi&lt;float&gt;();
            tidx += 2;

            float len = sqrt(
                    m_normals[idx + 0] * m_normals[idx] +
                    m_normals[idx + 1] * m_normals[idx+1] +
                    m_normals[idx + 2] * m_normals[idx+2]
            );

            m_normals[idx + 0] /= len;
            m_normals[idx + 1] /= len;
            m_normals[idx + 2] /= len;
            idx += 3;
        }
    }

    idx = 0;
    for( GLuint ring = 0; ring &lt; _nrings; ring++ ) {
        GLuint ringStart = ring * _nsides;
        GLuint nextRingStart = (ring + 1) * _nsides;
        for( GLuint side = 0; side &lt; _nsides; side++ ) {
            int nextSide = (side+1) % _nsides;
            m_indices[idx + 0] = (ringStart + side);
            m_indices[idx + 1] = (nextRingStart + side);
            m_indices[idx + 2] = (nextRingStart + nextSide);
            m_indices[idx + 3] = ringStart + side;
            m_indices[idx + 4] = nextRingStart + nextSide;
            m_indices[idx + 5] = (ringStart + nextSide);
            idx += 6;
        }
    }
}
//===============================================</pre></div></div><br>Chargement des buffers<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GObject::init(){
    if(!m_buffers.empty()) deletes();
    if(m_indices.empty() || m_points.empty() || m_normals.empty()) return;

    m_nVerts = (GLuint)m_indices.size();

    GLuint indexBuf = 0, posBuf = 0, normBuf = 0, tcBuf = 0, tangentBuf = 0;

    glGenVertexArrays(1, &amp;m_vao);
    glBindVertexArray(m_vao);

    glGenBuffers(1, &amp;indexBuf);
    m_buffers.push_back(indexBuf);
    glBindBuffer(GL_ELEMENT_ARRAY_BUFFER, indexBuf);
    glBufferData(GL_ELEMENT_ARRAY_BUFFER, m_indices.size() * sizeof(GLuint), m_indices.data(), GL_STATIC_DRAW);

    glGenBuffers(1, &amp;posBuf);
    m_buffers.push_back(posBuf);
    glBindBuffer(GL_ARRAY_BUFFER, posBuf);
    glBufferData(GL_ARRAY_BUFFER, m_points.size() * sizeof(GLfloat), m_points.data(), GL_STATIC_DRAW);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, (void*)(0));
    glEnableVertexAttribArray(0);

    glGenBuffers(1, &amp;normBuf);
    m_buffers.push_back(normBuf);
    glBindBuffer(GL_ARRAY_BUFFER, normBuf);
    glBufferData(GL_ARRAY_BUFFER, m_normals.size() * sizeof(GLfloat), m_normals.data(), GL_STATIC_DRAW);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, (void*)(0));
    glEnableVertexAttribArray(1);

    if(!m_texCoords.empty()) {
        glGenBuffers(1, &amp;tcBuf);
        m_buffers.push_back(tcBuf);
        glBindBuffer(GL_ARRAY_BUFFER, tcBuf);
        glBufferData(GL_ARRAY_BUFFER, m_texCoords.size() * sizeof(GLfloat), m_texCoords.data(), GL_STATIC_DRAW);
        glVertexAttribPointer(2, 2, GL_FLOAT, GL_FALSE, 0, (void*)(0));
        glEnableVertexAttribArray(2);
    }

    if(!m_tangents.empty()) {
        glGenBuffers(1, &amp;tangentBuf);
        m_buffers.push_back(tangentBuf);
        glBindBuffer(GL_ARRAY_BUFFER, tangentBuf);
        glBufferData(GL_ARRAY_BUFFER, m_tangents.size() * sizeof(GLfloat), m_tangents.data(), GL_STATIC_DRAW);
        glVertexAttribPointer(3, 4, GL_FLOAT, GL_FALSE, 0, (void*)(0));
        glEnableVertexAttribArray(3);
    }

    glBindVertexArray(0);
}
//===============================================</pre></div></div><br>Gestion du redimensionnement<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::onResize(GLFWwindow* _window, int _width, int _height) {
    lOpenGL.viewport(_width,_height);
    lParams.mvp2.projection.perspective(70.0f, 0.3f, 100.0f, _width, _height);
}
//===============================================</pre></div></div><br>Traitement du redimensionnement<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GGml::perspective(float _angle, float _zNear, float _zFar, int _width, int _height) {
    float lRatio = (float)_width/_height;
    m_mat4 = glm::perspective(glm::radians(_angle), lRatio, _zNear, _zFar);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_light_diffuse.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_light_diffuse.png"></div><br><h3 class="GTitle3" id="Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Creation-de-l-ombrage-de-Phong"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL">Création de l'ombrage de Phong</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init(4, 5, 4);
    lOpenGL.depthOn();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.use();

    lParams.bgcolor = {0.2f, 0.3f, 0.3f, 1.f};
    lParams.angle = 0.f;
    lParams.animate = true;

    lParams.mvp2.view.lookAt(0.0f, 0.0f, 2.0f, 0.0f, 0.0f, 0.0f, 0.0f, 1.0f, 0.0f);
    lParams.light.world.data(5.0f, 5.0f, 2.0f, 1.0f);

    lOpenGL.uniform("Material.Kd", 0.9f, 0.5f, 0.3f);
    lOpenGL.uniform("Light.Ld", 1.0f, 1.0f, 1.0f);
    lOpenGL.uniform("Light.Position", lParams.mvp2.view.dot(lParams.light.world));
    lOpenGL.uniform("Material.Ka", 0.9f, 0.5f, 0.3f);
    lOpenGL.uniform("Light.La", 0.4f, 0.4f, 0.4f);
    lOpenGL.uniform("Material.Ks", 0.8f, 0.8f, 0.8f);
    lOpenGL.uniform("Light.Ls", 1.0f, 1.0f, 1.0f);
    lOpenGL.uniform("Material.Shininess", 100.0f);

    GObject lTorus;
    lTorus.torus(0.7f, 0.3f, 30, 30);
    lTorus.init();
    lTorus.clear();

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.bgcolor);
        lOpenGL.angle(lParams.animate, lParams.angle, 1.f);

        lParams.mvp2.model.identity();
        lParams.mvp2.model.rotate(lParams.angle, 0.0f, 1.0f, 0.0f);
        lParams.mvp2.model.rotate(-35.0f, 1.0f, 0.0f, 0.0f);
        lParams.mvp2.model.rotate(35.0f, 0.0f, 1.0f, 0.0f);

        lParams.mvp2.mv.dot(lParams.mvp2.view, lParams.mvp2.model);
        lOpenGL.uniform("ModelViewMatrix", lParams.mvp2.mv.mat4());
        lOpenGL.uniform("NormalMatrix", lParams.mvp2.mv.mat3());
        lOpenGL.uniform("MVP", lParams.mvp2.projection.dot2(lParams.mvp2.mv));

        lTorus.render();

        lOpenGL.pollEvents();
    }

    lTorus.deletes();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 410

layout (location = 0) in vec3 VertexPosition;
layout (location = 1) in vec3 VertexNormal;

out vec3 LightIntensity;

uniform struct LightInfo {
    vec4 Position; // Light position in eye coords.
    vec3 La;       // Ambient light intensity
    vec3 Ld;       // Diffuse light intensity
    vec3 Ls;       // Specular light intensity
} Light;

uniform struct MaterialInfo {
    vec3 Ka;            // Ambient reflectivity
    vec3 Kd;            // Diffuse reflectivity
    vec3 Ks;            // Specular reflectivity
    float Shininess;    // Specular shininess factor
} Material;

uniform mat4 ModelViewMatrix;
uniform mat3 NormalMatrix;
uniform mat4 ProjectionMatrix;
uniform mat4 MVP;

void main()
{
    vec3 n = normalize( NormalMatrix * VertexNormal);
    vec4 camCoords = ModelViewMatrix * vec4(VertexPosition,1.0);

    vec3 ambient = Light.La * Material.Ka;
    vec3 s = normalize(vec3(Light.Position - camCoords));
    float sDotN = max( dot(s,n), 0.0 );
    vec3 diffuse = Light.Ld * Material.Kd * sDotN;
    vec3 spec = vec3(0.0);
    if( sDotN &gt; 0.0 ) {
        vec3 v = normalize(-camCoords.xyz);
        vec3 r = reflect( -s, n );
        spec = Light.Ls * Material.Ks *
                pow( max( dot(r,v), 0.0 ), Material.Shininess );
    }

    LightIntensity = ambient + diffuse + spec;
    gl_Position = MVP * vec4(VertexPosition,1.0);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 410

in vec3 LightIntensity;
layout( location = 0 ) out vec4 FragColor;

void main() {
    FragColor = vec4(LightIntensity, 1.0);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_light_phong.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_light_phong.png"></div><br><h3 class="GTitle3" id="Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Creation-d-une-surface-ondulante"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL">Création d'une surface ondulante</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init(4, 5, 4);
    lOpenGL.depthOn();
    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.useProgram();

    lParams.bgcolor = {0.2f, 0.3f, 0.3f, 1.f};

    lOpenGL.uniform("Light.Intensity", glm::vec3(1.0f,1.0f,1.0f));
    lOpenGL.halfPi(lParams.angle);

    GObject lPlane;
    lPlane.plane(13.0f, 10.0f, 200, 2, 1.f, 1.f);
    lPlane.init();
    lPlane.clear();

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.bgcolor);

        lOpenGL.times(lParams.times);
        lOpenGL.size(lParams.width, lParams.height);
        lOpenGL.uniform("Time", lParams.times);
        lParams.mvp2.view.lookAt(10.0f * cos(lParams.angle), 4.0f, 10.0f * sin(lParams.angle), 0.0f, 0.0f, 0.0f, 0.0f, 1.0f, 0.0f);
        lParams.mvp2.projection.perspective(60.0f, 0.3f, 100.0f, lParams.width, lParams.height);

        lOpenGL.uniform("Material.Kd", 0.9f, 0.5f, 0.3f);
        lOpenGL.uniform("Material.Ks", 0.8f, 0.8f, 0.8f);
        lOpenGL.uniform("Material.Ka", 0.2f, 0.2f, 0.2f);
        lOpenGL.uniform("Material.Shininess", 100.0f);

        lParams.mvp2.model.identity();
        lParams.mvp2.model.rotate(-10.0f, 0.0f, 0.0f, 1.0f);
        lParams.mvp2.model.rotate(50.0f, 1.0f, 0.0f, 0.0f);

        lParams.mvp2.mv.dot(lParams.mvp2.view, lParams.mvp2.model);
        lOpenGL.uniform("ModelViewMatrix", lParams.mvp2.mv.mat4());
        lOpenGL.uniform("NormalMatrix", lParams.mvp2.mv.mat3());
        lOpenGL.uniform("MVP", lParams.mvp2.projection.dot2(lParams.mvp2.mv));

        lPlane.render();

        lOpenGL.pollEvents();
    }

    lPlane.deletes();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 400

layout (location = 0 ) in vec3 VertexPosition;
layout (location = 1) in vec3 VertexNormal;
layout (location = 2) in vec2 VertexTexCoord;

out vec4 Position;
out vec3 Normal;
out vec2 TexCoord;

uniform float Time;
uniform float Freq = 2.5;
uniform float Velocity = 2.5;
uniform float Amp = 0.6;

uniform mat4 ModelViewMatrix;
uniform mat3 NormalMatrix;
uniform mat4 MVP;

void main()
{
    vec4 pos = vec4(VertexPosition,1.0);

    float u = Freq * pos.x - Velocity * Time;
    pos.y = Amp * sin( u );

    vec3 n = vec3(0.0);
    n.xy = normalize(vec2(cos( u ), 1.0));

    Position = ModelViewMatrix * pos;
    Normal = NormalMatrix * n;
    TexCoord = VertexTexCoord;
    gl_Position = MVP * pos;
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 400

uniform struct LightInfo {
    vec4 Position;
    vec3 Intensity;
} Light;

uniform struct MaterialInfo {
    vec3 Ka;
    vec3 Kd;
    vec3 Ks;
    float Shininess;
} Material;

in vec4 Position;
in vec3 Normal;
in vec2 TexCoord;

uniform float Time;

layout ( location = 0 ) out vec4 FragColor;

vec3 phongModel(vec3 kd) {
    vec3 n = Normal;
    vec3 s = normalize(Light.Position.xyz - Position.xyz);
    vec3 v = normalize(-Position.xyz);
    vec3 r = reflect( -s, n );
    float sDotN = max( dot(s,n), 0.0 );
    vec3 diffuse = Light.Intensity * kd * sDotN;
    vec3 spec = vec3(0.0);
    if( sDotN &gt; 0.0 )
        spec = Light.Intensity * Material.Ks *
            pow( max( dot(r,v), 0.0 ), Material.Shininess );

    return Material.Ka * Light.Intensity + diffuse + spec;
}

void main()
{
    FragColor = vec4( phongModel(Material.Kd) , 1.0 );
}
//===============================================</pre></div></div><br>Création du plan<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GObject::plane(float _xsize, float _zsize, int _xdivs, int _zdivs, float _smax, float _tmax) {
    m_points.resize(3 * (_xdivs + 1) * (_zdivs + 1));
    m_normals.resize(3 * (_xdivs + 1) * (_zdivs + 1));
    m_texCoords.resize(2 * (_xdivs + 1) * (_zdivs + 1));
    m_indices.resize(6 * _xdivs * _zdivs);

    float x2 = _xsize / 2.0f;
    float z2 = _zsize / 2.0f;
    float iFactor = (float)_zsize / _zdivs;
    float jFactor = (float)_xsize / _xdivs;
    float texi = _smax / _zdivs;
    float texj = _tmax / _xdivs;
    float x, z;
    int vidx = 0, tidx = 0;
    for( int i = 0; i &lt;= _zdivs; i++ ) {
        z = iFactor * i - z2;
        for( int j = 0; j &lt;= _xdivs; j++ ) {
            x = jFactor * j - x2;
            m_points[vidx + 0] = x;
            m_points[vidx + 1] = 0.0f;
            m_points[vidx + 2] = z;
            m_normals[vidx + 0] = 0.0f;
            m_normals[vidx + 1] = 1.0f;
            m_normals[vidx + 2] = 0.0f;

            m_texCoords[tidx + 0] = j * texi;
            m_texCoords[tidx + 1] = i * texj;

            vidx += 3;
            tidx += 2;
        }
    }

    GLuint rowStart, nextRowStart;
    int idx = 0;
    for( int i = 0; i &lt; _zdivs; i++ ) {
        rowStart = (GLuint)( i * (_xdivs+1) );
        nextRowStart = (GLuint)( (i+1) * (_xdivs+1));
        for( int j = 0; j &lt; _xdivs; j++ ) {
            m_indices[idx + 0] = rowStart + j;
            m_indices[idx + 1] = nextRowStart + j;
            m_indices[idx + 2] = nextRowStart + j + 1;
            m_indices[idx + 3] = rowStart + j;
            m_indices[idx + 4] = nextRowStart + j + 1;
            m_indices[idx + 5] = rowStart + j + 1;
            idx += 6;
        }
    }
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_wave.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_wave.png"></div><br><h3 class="GTitle3" id="Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL-Creation-d-une-fontaine-de-particules"><a class="Title8" href="#Programmation-3D-avec-OpenGL-Comprendre-les-shaders-avec-OpenGL">Création d'une fontaine de particules</a></h3><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GOpenGLUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    lOpenGL.init(4, 5, 4);
    lOpenGL.blendOn();

    lOpenGL.onResize(onResize);
    lOpenGL.onKey(onKey);

    lOpenGL.shader2(lApp-&gt;shader_vertex_file, lApp-&gt;shader_fragment_file);
    lOpenGL.useProgram();

    lParams.bgcolor = {0.2f, 0.3f, 0.3f, 1.f};

    lOpenGL.pointsize(10.0f);
    lOpenGL.halfPi(lParams.angle);

	GObject lParticles;
	lParticles.particles();

    GOpenGL lParticlesTex;
    lParticlesTex.texture6(lApp-&gt;texture_file);
    lParticlesTex.texture(GL_TEXTURE0);

    lOpenGL.uniform2("ParticleTex", 0);
    lOpenGL.uniform("ParticleLifetime", 3.5f);
    lOpenGL.uniform("Gravity", glm::vec3(0.0f, -0.2f, 0.0f));

    while(!lOpenGL.isClose()) {
        lOpenGL.bgcolor2(lParams.bgcolor);

        lOpenGL.times(lParams.times);
        lOpenGL.uniform("Time", lParams.times);
        lParams.mvp2.view.lookAt(3.0f * cos(lParams.angle), 1.5f, 3.0f * sin(lParams.angle), 0.0f, 1.5f, 0.0f, 0.0f, 1.0f, 0.0f);
        lParams.mvp2.model.identity();
        lParams.mvp2.mv.dot(lParams.mvp2.view, lParams.mvp2.model);
        lOpenGL.uniform("MVP", lParams.mvp2.projection.dot2(lParams.mvp2.mv));

        lParticles.render();

        lOpenGL.pollEvents();
    }

    lParticles.deletes();
    lOpenGL.close();
}
//===============================================</pre></div></div><br>Vertex shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 400

layout (location = 0) in vec3 VertexInitVel; // Particle initial velocity
layout (location = 1) in float StartTime;    // Particle "birth" time

out float Transp;    // Transparency of the particle

uniform float Time;  // Animation time
uniform vec3 Gravity = vec3(0.0,-0.05,0.0);  // world coords
uniform float ParticleLifetime;              // Max particle lifetime

uniform mat4 MVP;

void main()
{
    // Assume the initial position is (0,0,0).
    vec3 pos = vec3(0.0);
    Transp = 0.0;

    // Particle dosen't exist until the start time
    if( Time &gt; StartTime ) {
        float t = Time - StartTime;

        if( t &lt; ParticleLifetime ) {
            pos = VertexInitVel * t + Gravity * t * t;
            Transp = 1.0 - t / ParticleLifetime;
        }
    }

    // Draw at the current position
    gl_Position = MVP * vec4(pos, 1.0);
}
//===============================================</pre></div></div><br>Fragment shader<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#version 400

in float Transp;
uniform sampler2D ParticleTex;

layout ( location = 0 ) out vec4 FragColor;

void main()
{
    FragColor = texture(ParticleTex, gl_PointCoord);
    FragColor.a *= Transp;
}
//===============================================</pre></div></div><br>Création du vecteur vitesse initiale<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GFunction::velocity(int _nParticles, float _vmin, float _vmax, float _fovZ) {
    glm::vec3 v(0.0f);
    float velocity, theta, phi;
    m_velocity = new GLfloat[_nParticles * 3];
    for(GLuint i = 0; i &lt; _nParticles; i++ ) {
        theta = glm::mix(0.0f, glm::pi&lt;float&gt;() * _fovZ, randFloat());
        phi = glm::mix(0.0f, glm::two_pi&lt;float&gt;(), randFloat());

        v.x = sinf(theta) * cosf(phi);
        v.y = cosf(theta);
        v.z = sinf(theta) * sinf(phi);

        velocity = glm::mix(_vmin, _vmax, randFloat());
        v = glm::normalize(v) * velocity;

        m_velocity[3*i + 0] = v.x;
        m_velocity[3*i + 1] = v.y;
        m_velocity[3*i + 2] = v.z;
    }
}
//===============================================</pre></div></div><br>Création du vecteur temps<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GFunction::times(int _nParticles, float _rate) {
    m_times = new GLfloat[_nParticles];
    float lTime = 0.0f;
    for( GLuint i = 0; i &lt; _nParticles; i++ ) {
        m_times[i] = lTime;
        lTime += _rate;
    }
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_particles.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_opengl_shader_particles.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Calcul-scientifique-avec-GSL"><a class="Link3" href="#">Calcul scientifique avec GSL</a></h1><div class="Body3"><br><b>GSL </b>est une bibliothèque de calcul scientifique comportant une collection de routines pour le calcul numérique. Les routines ont été écrites à partir de zéro en C et présentent une interface de programmation d'applications (API) moderne pour les programmeurs C, permettant d'écrire des wrappers pour des langages de très haut niveau. Le code source est distribué sous la licence publique générale GNU.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/b_gsl.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/b_gsl.png"></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Installer-l-environnement-GSL-sous-MSYS2"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Installer l'environnement GSL sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Installer-l-environnement-GSL-sous-MSYS2-Installer-GSL"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Installer-l-environnement-GSL-sous-MSYS2">Installer GSL</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh" data-state="off">pacman -S --needed --noconfirm mingw-w64-i686-gsl</pre></div></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Tester-un-projet-GSL-sous-MSYS2"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Tester un projet GSL sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Tester-un-projet-GSL-sous-MSYS2-Editer-le-programme--main-cpp-"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Tester-un-projet-GSL-sous-MSYS2">Editer le programme (main.cpp)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp" data-state="off">//===============================================
#include &lt;stdio.h&gt;
#include &lt;gsl/gsl_sf_bessel.h&gt;
//===============================================
int main(int argc, char** argv) {
    double x = 5.0;
    double y = gsl_sf_bessel_J0(x);
    printf ("J0(%g) = %.18e\n", x, y);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Tester-un-projet-GSL-sous-MSYS2-Compiler-le-projet"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Tester-un-projet-GSL-sous-MSYS2">Compiler le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh" data-state="off">export "PATH=/mingw32/bin:$PATH"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh" data-state="off">g++ -std=gnu++11 -c main.cpp -o main.o -I/mingw32/include
g++ -o rdcpp.exe main.o -lgsl -lgslcblas -lm</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Tester-un-projet-GSL-sous-MSYS2-Executer-le-projet"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Tester-un-projet-GSL-sous-MSYS2">Exécuter le projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh" data-state="off">./rdcpp.exe</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh" data-state="off">J0(5) = -1.775967713143382920e-01</pre></div></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Résoudre une équation différentielle ordinaire</a></h2><br>En mathématiques, une <b>équation différentielle ordinaire</b> (parfois simplement appelée équation différentielle et abrégée en EDO) est une équation différentielle dont la ou les fonctions inconnues ne dépendent que d'une seule variable; elle se présente sous la forme d'une relation entre ces fonctions inconnues et leurs dérivées successives. Le terme ordinaire est utilisé par opposition au terme équation différentielle partielle (plus communément équation aux dérivées partielles, ou EDP) où la ou les fonctions inconnues peuvent dépendre de plusieurs variables. L'ordre d'une équation différentielle correspond au degré maximal de dérivation auquel l'une des fonctions inconnues a été soumise.<br><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire-Definir-l-equation-differentielle">Définir l'équation différentielle</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire-Determiner-les-derivees-premieres-de-l-equation-differentielle">Déterminer les dérivées premières de l'équation différentielle</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire-Determiner-la-Jacobienne-de-l-equation-differentielle">Déterminer la Jacobienne de l'équation différentielle</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire-Editer-le-programme--main-cpp-">Editer le programme (main.cpp)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire-Resultat">Résultat</a></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire-Definir-l-equation-differentielle"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire">Définir l'équation différentielle</a></h3><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
u''(t)+µu'(t)\left(u(t)^2-1\right)+u(t) &amp;=&amp; 0
\end{eqnarray}</div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire-Determiner-les-derivees-premieres-de-l-equation-differentielle"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire">Déterminer les dérivées premières de l'équation différentielle</a></h3><br><div class="Formula GFormula1"><div class="Formula2">$$\left \{
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
\right .$$</div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire-Determiner-la-Jacobienne-de-l-equation-differentielle"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire">Déterminer la Jacobienne de l'équation différentielle</a></h3><br><div class="Formula GFormula1"><div class="Formula2">$$
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
$$</div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire-Editer-le-programme--main-cpp-"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire">Editer le programme (main.cpp)</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp" data-state="off">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire-Resultat"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Resoudre-une-equation-differentielle-ordinaire">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_gsl_ode_2.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_gsl_ode_2.png"></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Rechercher une interpolation linéaire</a></h2><br>L’<b>interpolation linéaire</b> est la méthode la plus simple pour estimer la valeur prise par une fonction continue entre deux points déterminés (interpolation). Elle consiste à utiliser pour cela la fonction affine (de la forme <span class="GCode3"><code style="color:#cccccc;">f(x) = m.x + b</code></span>) passant par les deux points déterminés. Cette technique était d'un emploi systématique lorsque l'on ne disposait que de tables numériques pour le calcul avec les fonctions transcendantes : les tables comportaient d'ailleurs à cet effet en marge les « différences tabulaires », auxiliaire de calcul servant à l'interpolation linéaire. Enfin l'interpolation linéaire est la base de la technique de quadrature numérique par la méthode des trapèzes. <br><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire-main-cpp">main.cpp</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire-GWindow-h">GWindow.h</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire-GWindow-cpp">GWindow.cpp</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire-Resultat">Résultat</a></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire-main-cpp"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire-GWindow-h"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire-GWindow-cpp"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire-Resultat"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-lineaire">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_linear.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_linear.gif"></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">gsl_interp_name :  linear
gsl_interp_min_size :  2
gsl_interp_type_min_size :  2</pre></div></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Rechercher une interploation polynomiale</a></h2><br>En mathématiques, en analyse numérique, l'<b>interpolation polynomiale</b> est une technique d'interpolation d'un ensemble de données ou d'une fonction par un polynôme. En d'autres termes, étant donné un ensemble de points (obtenu, par exemple, à la suite d'une expérience), on cherche un polynôme qui passe par tous ces points, et éventuellement vérifie d'autres conditions, de degré si possible le plus bas. Le résultat n'est toutefois pas toujours à la hauteur des espérances : dans le cas de l'interpolation lagrangienne, par exemple, le choix des points d'interpolation est critique. L'interpolation en des points régulièrement espacés peut fort bien diverger même pour des fonctions très régulières (phénomène de Runge).<br><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale-main-cpp">main.cpp</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale-GWindow-h">GWindow.h</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale-GWindow-cpp">GWindow.cpp</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale-Resultat">Résultat</a></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale-main-cpp"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale-GWindow-h"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale-GWindow-cpp"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale-Resultat"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interploation-polynomiale">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_polynomial.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_polynomial.gif"></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">gsl_interp_name :  polynomial
gsl_interp_min_size :  3
gsl_interp_type_min_size :  3</pre></div></div><br><h2 class="Title7 GTitle2" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique"><a class="Link9" href="#Calcul-scientifique-avec-GSL">Rechercher une interpolation spline cubique</a></h2><br>En mathématiques appliquées et en analyse numérique, une <b>spline </b>est une fonction définie par morceaux par des polynômes. Dans les problèmes d'interpolation, la méthode des splines est très souvent préférée à l'interpolation polynomiale. Les splines sont également utilisées dans les problèmes de lissage de données expérimentales ou de statistiques. Les splines sont utilisées pour représenter numériquement des contours complexes. Leur mise en œuvre est simple. Elles sont fréquemment employées dans les logiciels de dessin ou de conception graphique ; leur usage y a été généralisé par Pierre Bézier avec les B-splines. <br><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique-main-cpp">main.cpp</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique-GWindow-h">GWindow.h</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique-GWindow-cpp">GWindow.cpp</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique-Resultat">Résultat</a></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique-main-cpp"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique">main.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique-GWindow-h"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique">GWindow.h</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique-GWindow-cpp"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique">GWindow.cpp</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h3 class="Title8 GTitle3" id="Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique-Resultat"><a class="Title8" href="#Calcul-scientifique-avec-GSL-Rechercher-une-interpolation-spline-cubique">Résultat</a></h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_spline.gif" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_gsl_interpolation_spline.gif"></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">gsl_spline_name :  cspline
gsl_spline_min_size :  3
gsl_interp_type_min_size :  3</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation-reseau-socket-sous-Windows"><a class="Link3" href="#">Programmation réseau socket sous Windows</a></h1><div class="Body3"><br>Un <b>socket </b>réseau est une structure logicielle au sein d'un nœud de réseau d'un réseau informatique qui sert de point de terminaison pour l'envoi et la réception de données sur le réseau. La structure et les propriétés d'un socket sont définies par une interface de programmation d'application (API) pour l'architecture réseau. Les sockets sont créés uniquement pendant la durée de vie d'un processus d'une application s'exécutant dans le nœud.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Programmation-reseau-socket-sous-Windows-Apprendre-les-sockets"><a class="Link9" href="#Programmation-reseau-socket-sous-Windows">Apprendre les sockets</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-socket-sous-Windows-Apprendre-les-sockets-Creation-d-une-connexion-TCP-IP">Création d'une connexion TCP/IP</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-socket-sous-Windows-Apprendre-les-sockets-Creation-d-une-connexion-UDP">Création d'une connexion UDP</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-socket-sous-Windows-Apprendre-les-sockets-Transfert-de-donnees-volumineuses">Transfert de données volumineuses</a></div></div><br><h3 class="GTitle3" id="Programmation-reseau-socket-sous-Windows-Apprendre-les-sockets-Creation-d-une-connexion-TCP-IP"><a class="Title8" href="#Programmation-reseau-socket-sous-Windows-Apprendre-les-sockets">Création d'une connexion TCP/IP</a></h3><br>Cette opération permet d'<b>échanger des données</b> sur connexion TCP/IP. La connexion TCP/IP est une connexion sécurisée et fiable. On initialise le système. On configure l'adresse et le port de connexion. On crée le socket. On établit la liaison entre le socket et l'adresse de connexion côté serveur. On configure le nombre de connexions acceptable côte serveur. On engage l'acceptation d'une connexion client côté serveur. Et on démarre l'émission et la réception des données.<br><br>Programme principal (Serveur)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketServer::run(int argc, char** argv) {
    GSocket lServer;
    GSocket lClient;
    lServer.init();
    lServer.address();
    lServer.sockets();
    lServer.binds();
    lServer.listens();
    lServer.start();
    lServer.accepts(lClient);
    lClient.recvs();
    lClient.sends("ok");
    lClient.print();
    lClient.close();
    lServer.close();
    lServer.clean();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_server.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_server.png"></div><br>Programme principal (Client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketClient::run(int argc, char** argv) {
    GSocket lClient;
    lClient.init();
    lClient.ip("127.0.0.1");
    lClient.address();
    lClient.sockets();
    lClient.connects();
    lClient.sends("Bonjour tout le monde");
    lClient.recvs();
    lClient.print();
    lClient.close();
    lClient.clean();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_client.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_client.png"></div><br>Initialisation du système<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::init() {
    WSADATA lWsaData;
    WSAStartup(MAKEWORD(m_major, m_minor), &amp;lWsaData);
}
//===============================================</pre></div></div><br>Initialisation de l'adresse et le numero port<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::address() {
    m_address.sin_family = AF_INET;
    InetPton(AF_INET, m_ip.c_str(), &amp;m_address.sin_addr.s_addr);
    m_address.sin_port = htons(m_port);
    memset(&amp;m_address.sin_zero, 0, sizeof(m_address.sin_zero));
}
//===============================================</pre></div></div><br>Création du socket<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::sockets() {
    m_socket = socket(AF_INET, SOCK_STREAM, IPPROTO_TCP);
}
//===============================================</pre></div></div><br>Liaison du socket à l'adresse<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::binds() {
    bind(m_socket, (SOCKADDR*)&amp;m_address, sizeof(m_address));
}
//===============================================</pre></div></div><br>Initialisation du nombre de connexions à écouter<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::listens() {
    listen(m_socket, m_backlog);
}
//===============================================</pre></div></div><br>Attente et acceptation d'une connexion client<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::accepts(GSocket&amp; _socket) {
    _socket.m_size = sizeof(_socket.m_address);
    _socket.m_socket = accept(m_socket, (SOCKADDR*)&amp;_socket.m_address, &amp;_socket.m_size);
}
//===============================================</pre></div></div><br>Connexion d'un client<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::connects() {
    connect(m_socket, (SOCKADDR*)(&amp;m_address), sizeof(m_address));
}
//===============================================</pre></div></div><br>Réception d'un message<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::recvs() {
    m_bytes = recv(m_socket, m_buffer, BUFFER_SIZE, 0);
    m_buffer[m_bytes] = 0;
}
//===============================================</pre></div></div><br>Envoi d'un message<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::sends(const char* _data) {
    m_bytes = send(m_socket, _data, strlen(_data), 0);
}
//===============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-socket-sous-Windows-Apprendre-les-sockets-Creation-d-une-connexion-UDP"><a class="Title8" href="#Programmation-reseau-socket-sous-Windows-Apprendre-les-sockets">Création d'une connexion UDP</a></h3><br>Cette opération permet d'<b>échanger des données</b> sur connexion UDP. La connexion UDP est une connexion moins sécurisée et peu fiable. On initialise le système. On configure l'adresse et le port de connexion. On crée le socket. On établit la liaison entre le socket et l'adresse de connexion côté serveur. On démarre l'émission et la réception des données.<br><br>Programme principal (Serveur)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketServer::run(int argc, char** argv) {
    GSocket lServer;
    GSocket lClient;
    lServer.init();
    lServer.address();
    lServer.sockets2();
    lServer.binds();
    lServer.start();
    lServer.recvs(lClient);
    lServer.sends(lClient, "ok");
    lServer.print();
    lServer.close();
    lServer.clean();
}
//===============================================</pre></div></div><br>Programme principal (Client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketClient::run(int argc, char** argv) {
    GSocket lClient;
    lClient.init();
    lClient.ip("127.0.0.1");
    lClient.address();
    lClient.sockets2();
    lClient.sends(lClient, "Bonjour tout le monde");
    lClient.recvs(lClient);
    lClient.print();
    lClient.close();
    lClient.clean();
}
//===============================================</pre></div></div><br>Création du socket<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::sockets2() {
    m_socket = socket(AF_INET, SOCK_DGRAM, IPPROTO_UDP);
}
//===============================================</pre></div></div><br>Réception de données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::recvs(GSocket&amp; _socket) {
    _socket.m_size = sizeof(_socket.m_address);
    m_bytes = recvfrom(m_socket, m_buffer, BUFFER_SIZE, 0, (SOCKADDR*)&amp;_socket.m_address, &amp;_socket.m_size);
    m_buffer[m_bytes] = 0;
}
//===============================================</pre></div></div><br>Envoi de données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::sends(GSocket&amp; _socket, const char* _data) {
    _socket.m_size = sizeof(_socket.m_address);
    sendto(m_socket, _data, strlen(_data), 0, (SOCKADDR*)&amp;_socket.m_address, _socket.m_size);
}
//===============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-socket-sous-Windows-Apprendre-les-sockets-Transfert-de-donnees-volumineuses"><a class="Title8" href="#Programmation-reseau-socket-sous-Windows-Apprendre-les-sockets">Transfert de données volumineuses</a></h3><br>Cette opération permet d'<b>échanger des données volumineuses</b> sur une connexion TCP/IP. On charge les données à partir d'un fichier stocké sur le disque dur de l'ordianteur. Et on les envoye au serveur depuis le client.<br><br>Programme principal (Serveur)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketServer::run(int argc, char** argv) {
    GSocket lServer;
    GSocket lClient;
    GString lData;
    lServer.init();
    lServer.address();
    lServer.sockets();
    lServer.binds();
    lServer.listens();
    lServer.start();
    lServer.accepts(lClient);
    lClient.recvs(lData);
    lData.print();
    lClient.close();
    lServer.close();
    lServer.clean();
}
//===============================================</pre></div></div><br>Programme principal (Client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketClient::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    GFile lFile;
    lFile.filename(lApp-&gt;cascade_file);

    GString lData;
    lData.data(lFile.read());

    GSocket lClient;
    lClient.init();
    lClient.ip("127.0.0.1");
    lClient.address();
    lClient.sockets();
    lClient.connects();
    lClient.sends(lData);
    lClient.close();
    lClient.clean();
}
//===============================================</pre></div></div><br>Envoi de données volumineuses<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::sends(const GString&amp; _data) {
    int lIndex = 0;
    while(1) {
        m_bytes = _data.toChar(m_buffer, lIndex, BUFFER_SIZE);
        if(m_bytes &lt;= 0) break;
        lIndex += m_bytes;
        sends(m_buffer);
    }
}
//===============================================</pre></div></div><br>Réception de données volumineuses<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::recvs(GString&amp; _data) {
    _data.clear();
    while(1) {
        recvs();
        if(m_bytes &lt;= 0) break;
        _data.add(m_buffer);
    }
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_big_data.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_big_data.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation-reseau-socket-sous-Linux"><a class="Link3" href="#">Programmation réseau socket sous Linux</a></h1><div class="Body3"><br>Un <b>socket </b>réseau est une structure logicielle au sein d'un nœud de réseau d'un réseau informatique qui sert de point de terminaison pour l'envoi et la réception de données sur le réseau. La structure et les propriétés d'un socket sont définies par une interface de programmation d'application (API) pour l'architecture réseau. Les sockets sont créés uniquement pendant la durée de vie d'un processus d'une application s'exécutant dans le nœud.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Programmation-reseau-socket-sous-Linux-Apprendre-les-sockets"><a class="Link9" href="#Programmation-reseau-socket-sous-Linux">Apprendre les sockets</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-socket-sous-Linux-Apprendre-les-sockets-Creation-d-une-connexion-TCP-IP">Création d'une connexion TCP/IP</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-socket-sous-Linux-Apprendre-les-sockets-Creation-d-une-connexion-UDP">Création d'une connexion UDP</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-socket-sous-Linux-Apprendre-les-sockets-Transfert-de-donnees-volumineuses">Transfert de données volumineuses</a></div></div><br><h3 class="GTitle3" id="Programmation-reseau-socket-sous-Linux-Apprendre-les-sockets-Creation-d-une-connexion-TCP-IP"><a class="Title8" href="#Programmation-reseau-socket-sous-Linux-Apprendre-les-sockets">Création d'une connexion TCP/IP</a></h3><br>Cette opération permet d'<b>échanger des données</b> sur connexion TCP/IP. La connexion TCP/IP est une connexion sécurisée et fiable. On initialise le système. On configure l'adresse et le port de connexion. On crée le socket. On établit la liaison entre le socket et l'adresse de connexion côté serveur. On configure le nombre de connexions acceptable côte serveur. On engage l'acceptation d'une connexion client côté serveur. Et on démarre l'émission et la réception des données.<br><br>Programme principal (Serveur)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketServer::run(int argc, char** argv) {
    GSocket lServer;
    GSocket lClient;
    lServer.address();
    lServer.sockets();
    lServer.binds();
    lServer.listens();
    lServer.start();
    lServer.accepts(lClient);
    lClient.recvs();
    lClient.sends("ok");
    lClient.print();
    lClient.closes();
    lServer.closes();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_server.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_server.png"></div><br>Programme principal (Client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketClient::run(int argc, char** argv) {
    GSocket lClient;
    lClient.ip("127.0.0.1");
    lClient.address();
    lClient.sockets();
    lClient.connects();
    lClient.sends("Bonjour tout le monde");
    lClient.recvs();
    lClient.print();
    lClient.closes();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_client.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_client.png"></div><br>Création du socket<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::sockets() {
    m_socket = socket(AF_INET, SOCK_STREAM, IPPROTO_TCP);
}
//===============================================</pre></div></div><br>Configuration de l'adresse<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::address() {
    bzero(&amp;m_address, sizeof(m_address));
    m_address.sin_family = AF_INET;
    m_address.sin_addr.s_addr = inet_addr(m_ip.c_str());
    m_address.sin_port = htons(m_port);
}
//===============================================</pre></div></div><br>Liaison du socket à l'adresse<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::binds() {
    bind(m_socket, (struct sockaddr*)&amp;m_address, sizeof(m_address));
}
//===============================================</pre></div></div><br>Configuration du nombre de connexions à écouter<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::listens() {
    listen(m_socket, m_backlog);
}
//===============================================</pre></div></div><br>Attente et acception d'une connexion client<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::accepts(GSocket&amp; _socket) {
    _socket.m_size = sizeof(_socket.m_address);
    _socket.m_socket = accept(m_socket, (struct sockaddr*)&amp;_socket.m_address, (socklen_t*)&amp;_socket.m_size);
}
//===============================================</pre></div></div><br>Connexion d'un client<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::connects() {
    connect(m_socket, (struct sockaddr*)&amp;m_address, sizeof(m_address));
}
//===============================================</pre></div></div><br>Envoi d'un message<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::sends(const char* _data) {
    m_bytes = write(m_socket, _data, strlen(_data));
}
//===============================================</pre></div></div><br>Réception d'un message<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::recvs() {
    m_bytes = read(m_socket, m_buffer, BUFFER_DATA_SIZE);
    m_buffer[m_bytes] = 0;
}
//===============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-socket-sous-Linux-Apprendre-les-sockets-Creation-d-une-connexion-UDP"><a class="Title8" href="#Programmation-reseau-socket-sous-Linux-Apprendre-les-sockets">Création d'une connexion UDP</a></h3><br>Cette opération permet d'<b>échanger des données</b> sur connexion UDP. La connexion UDP est une connexion moins sécurisée et peu fiable. On configure l'adresse et le port de connexion. On crée le socket. On établit la liaison entre le socket et l'adresse de connexion côté client/serveur. On engage l'émission et la réception des données.<br><br>Programme principal (Serveur)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketServer::run(int argc, char** argv) {
    GSocket lServer;
    GSocket lClient;
    lServer.address();
    lServer.sockets2();
    lServer.binds();
    lServer.start();
    lServer.recvs(lClient);
    lServer.sends(lClient, "ok");
    lServer.print();
    lClient.ip();
    lClient.print2();
    lClient.closes();
    lServer.closes();
}
//===============================================</pre></div></div><br>Programme principal (Client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketClient::run(int argc, char** argv) {
    GSocket lClient;
    lClient.ip("127.0.0.1");
    lClient.address();
    lClient.sockets2();
    lClient.binds();
    lClient.sends(lClient, "Bonjour tout le monde");
    lClient.recvs(lClient);
    lClient.print();
    lClient.ip();
    lClient.print2();
    lClient.closes();
}
//===============================================</pre></div></div><br>Envoi d'un message<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::sends(GSocket&amp; _socket, const char* _data) {
    _socket.m_size = sizeof(_socket.m_address);
    sendto(m_socket, _data, strlen(_data), 0, (struct sockaddr*)&amp;_socket.m_address, _socket.m_size);
}
//===============================================</pre></div></div><br>Réception d'un message<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::recvs(GSocket&amp; _socket) {
    _socket.m_size = sizeof(_socket.m_address);
    m_bytes = recvfrom(m_socket, m_buffer, BUFFER_DATA_SIZE, 0, (struct sockaddr*)&amp;_socket.m_address, (socklen_t*)&amp;_socket.m_size);
    m_buffer[m_bytes] = 0;
}
//===============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-socket-sous-Linux-Apprendre-les-sockets-Transfert-de-donnees-volumineuses"><a class="Title8" href="#Programmation-reseau-socket-sous-Linux-Apprendre-les-sockets">Transfert de données volumineuses</a></h3><br>Cette opération permet d'<b>échanger des données volumineuses</b> sur une connexion TCP/IP. On charge les données à partir d'un fichier stocké sur le disque dur de l'ordianteur. Et on les envoye au serveur depuis le client.<br><br>Programme principal (Server)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketServer::run(int argc, char** argv) {
    GSocket lServer;
    GSocket lClient;
    GString lData;
    lServer.address();
    lServer.sockets();
    lServer.binds();
    lServer.listens();
    lServer.start();
    lServer.accepts(lClient);
    lClient.recvs(lData);
    lData.print();
    lClient.closes();
    lServer.closes();
}
//===============================================</pre></div></div><br>Programme principal (Client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocketClient::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    GFile lFile;
    lFile.filename(lApp-&gt;text_file);

    GString lData;
    lData.data(lFile.read());

    GSocket lClient;
    lClient.ip("127.0.0.1");
    lClient.address();
    lClient.sockets();
    lClient.connects();
    lClient.sends(lData);
    lClient.closes();
}
//===============================================</pre></div></div><br>Envoi de données volumineuses<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::sends(const GString&amp; _data) {
    int lIndex = 0;
    while(1) {
        m_bytes = _data.toChar(m_buffer, lIndex, BUFFER_DATA_SIZE);
        if(m_bytes &lt;= 0) break;
        lIndex += m_bytes;
        sends(m_buffer);
    }
}
//===============================================</pre></div></div><br>Réception de données volumineuses<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GSocket::recvs(GString&amp; _data) {
    _data.clear();
    while(1) {
        recvs();
        if(m_bytes &lt;= 0) break;
        _data.add(m_buffer);
    }
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_big_data.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_big_data.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation-reseau-avec-Boost-Asio"><a class="Link3" href="#">Programmation réseau avec Boost.Asio</a></h1><div class="Body3"><br><b>Boost.Asio</b> est une bibliothèque C++ multiplateforme , open source et disponible gratuitement pour la programmation réseau . Il fournit aux développeurs un modèle d' E/S asynchrone cohérent utilisant une approche C++ moderne.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Programmation-reseau-avec-Boost-Asio-Installer-l-environnement-Boost-Asio-sous-MSYS2"><a class="Link9" href="#Programmation-reseau-avec-Boost-Asio">Installer l'environnement Boost.Asio sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Programmation-reseau-avec-Boost-Asio-Installer-l-environnement-Boost-Asio-sous-MSYS2-Installer-Boost"><a class="Title8" href="#Programmation-reseau-avec-Boost-Asio-Installer-l-environnement-Boost-Asio-sous-MSYS2">Installer Boost</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">pacman -S --needed --noconfirm mingw32/mingw-w64-i686-boost</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-reseau-avec-Boost-Asio-Compiler-un-projet-Boost-Asio-sous-MSYS2"><a class="Link9" href="#Programmation-reseau-avec-Boost-Asio">Compiler un projet Boost.Asio sous MSYS2</a></h2><br><h3 class="GTitle3" id="Programmation-reseau-avec-Boost-Asio-Compiler-un-projet-Boost-Asio-sous-MSYS2-Fichiers-header"><a class="Title8" href="#Programmation-reseau-avec-Boost-Asio-Compiler-un-projet-Boost-Asio-sous-MSYS2">Fichiers header</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;boost/asio.hpp&gt;
#include &lt;boost/array.hpp&gt;
//===============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-avec-Boost-Asio-Compiler-un-projet-Boost-Asio-sous-MSYS2-Compilation-du-projet"><a class="Title8" href="#Programmation-reseau-avec-Boost-Asio-Compiler-un-projet-Boost-Asio-sous-MSYS2">Compilation du projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">GLIBS =\
    -L/mingw32/lib \
    -lboost_system-mt \</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-avec-Boost-Asio-Compiler-un-projet-Boost-Asio-sous-MSYS2-Execution-du-projet"><a class="Title8" href="#Programmation-reseau-avec-Boost-Asio-Compiler-un-projet-Boost-Asio-sous-MSYS2">Exécution du projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">#================================================
export "PATH=/mingw32/bin:$PATH"
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio"><a class="Link9" href="#Programmation-reseau-avec-Boost-Asio">Apprendre Boost.Asio</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio-Creation-d-une-connexion-TCP-IP">Création d'une connexion TCP/IP</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio-Utilisation-de-pointeurs-intelligents">Utilisation de pointeurs intelligents</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio-Utilisation-du-multithreading">Utilisation du multithreading</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio-Utilisation-du-mode-asynchrone">Utilisation du mode asynchrone</a></div></div><br><h3 class="GTitle3" id="Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio-Creation-d-une-connexion-TCP-IP"><a class="Title8" href="#Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio">Création d'une connexion TCP/IP</a></h3><br>Cette opération permet d'<b>échanger des données</b> sur connexion TCP/IP. La connexion TCP/IP est une connexion sécurisée et fiable. On configure l'adresse de connexion. On crée le point de terminaison. On crée le socket. On crée le gestionnaire des connexions côté serveur. On engage l'acceptation d'une connexion client côté serveur. Et on démarre l'émission et la réception des données.<br><br>Programme principal (Serveur)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsioServer::run(int argc, char** argv) {
    GAsio lServer;
    lServer.address();
    lServer.endpoint();
    lServer.acceptor();
    lServer.socket();
    lServer.start();
    lServer.accept();
    lServer.recv();
    lServer.send("ok");
    lServer.print();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_server.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_server.png"></div><br>Programme principal (Client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsioClient::run(int argc, char** argv) {
    GAsio lClient;
    lClient.ip("127.0.0.1");
    lClient.address();
    lClient.endpoint();
    lClient.socket();
    lClient.connect();
    lClient.send("Bonjour tout le monde");
    lClient.recv();
    lClient.print();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_client.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_socket_learn_tcp_ip_client.png"></div><br>Configuration de l'adresse<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::address() {
    m_address = boost::asio::ip::address::from_string(m_ip);
}
//===============================================</pre></div></div><br>Création du point de terminaison<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::endpoint() {
    m_endpoint = boost::asio::ip::tcp::endpoint(m_address, m_port);
}
//===============================================</pre></div></div><br>Création du socket<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::socket() {
    m_socket = boost::asio::ip::tcp::socket(m_ios);
}
//===============================================</pre></div></div><br>Création du gestionnaire de connexion<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::acceptor() {
    m_acceptor = boost::asio::ip::tcp::acceptor(m_ios, m_endpoint);
}
//===============================================</pre></div></div><br>Attente et acceptation d'une connexion<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::accept() {
    m_acceptor.accept(m_socket);
}
//===============================================</pre></div></div><br>Connexion d'un client<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::connect() {
    m_socket.connect(m_endpoint);
}
//===============================================</pre></div></div><br>Envoi d'un message<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::send(const std::string&amp; _data) {
    m_socket.send(boost::asio::buffer(_data));
}
//===============================================</pre></div></div><br>Réception d'un message<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::recv() {
    m_bytes = m_socket.read_some(boost::asio::buffer(m_buffer), m_errorcode);
    m_buffer[m_bytes] = 0;
}
//===============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio-Utilisation-de-pointeurs-intelligents"><a class="Title8" href="#Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio">Utilisation de pointeurs intelligents</a></h3><br>Cette opération permet de <b>garentir la protection des ressources</b> contre les problèmes de fuites de mémoires. Les fuites de mémoires sont des bugs liés à une occupation croissante et non contrôlée de la mémoire entrainant ainsi la sturation de l'ordinateur.<br><br>Programme principal (Serveur)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsioServer::run(int argc, char** argv) {
    GAsio lServer;
    lServer.address();
    lServer.endpoint();
    lServer.acceptor();
    lServer.socket();
    lServer.start();
    lServer.accept();
    lServer.recv();
    lServer.send("ok");
    lServer.print();
}
//===============================================</pre></div></div><br>Programme principal (Client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsioClient::run(int argc, char** argv) {
    GAsio lClient;
    lClient.ip("127.0.0.1");
    lClient.address();
    lClient.endpoint();
    lClient.socket();
    lClient.connect();
    lClient.send("Bonjour tout le monde");
    lClient.recv();
    lClient.print();
}
//===============================================</pre></div></div><br>Création du point de terminaison<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::endpoint() {
    m_endpoint = boost::make_shared&lt;boost::asio::ip::tcp::endpoint&gt;(m_address, m_port);
}
//===============================================</pre></div></div><br>Création du socket<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::socket() {
    m_socket = boost::make_shared&lt;boost::asio::ip::tcp::socket&gt;(m_ios);
}
//===============================================</pre></div></div><br>Création du gestionnaire de connexion<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::acceptor() {
    m_acceptor = boost::make_shared&lt;boost::asio::ip::tcp::acceptor&gt;(m_ios, *m_endpoint);
}
//===============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio-Utilisation-du-multithreading"><a class="Title8" href="#Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio">Utilisation du multithreading</a></h3><br>Cette opération permet de <b>traiter simultanement plusieurs connexions</b> client. A chaque connexion client, on crée un thread séparé dans lequel on traite la demande du client. Cela augmente les performances du serveur et permet de gagner en éfficacité.<br><br>Programme principal (Serveur)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsioServer::run(int argc, char** argv) {
    GAsio lServer;
    lServer.address();
    lServer.endpoint();
    lServer.acceptor();
    lServer.start();
    while(1) {
        lServer.socket();
        lServer.accept();
        lServer.thread(onThread, lServer.socket2());
    }
}
//===============================================</pre></div></div><br>Programme principal (Client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsioClient::run(int argc, char** argv) {
    GAsio lClient;
    lClient.ip("127.0.0.1");
    lClient.address();
    lClient.endpoint();
    lClient.socket();
    lClient.connect();
    lClient.send("Bonjour tout le monde");
    lClient.recv();
    lClient.print();
}
//===============================================</pre></div></div><br>Création du thread de traitement<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::thread(GAsio::onThreadCB _func, GAsio::socket_ptr _socket) {
    boost::thread(boost::bind(_func, _socket));
}
//===============================================</pre></div></div><br>Gestion du thread de traitement<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsioServer::onThread(GAsio::socket_ptr _socket) {
    GAsio lServer;
    lServer.socket(_socket);
    lServer.recv();
    lServer.send("ok");
    lServer.print();
}
//===============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio-Utilisation-du-mode-asynchrone"><a class="Title8" href="#Programmation-reseau-avec-Boost-Asio-Apprendre-Boost-Asio">Utilisation du mode asynchrone</a></h3><br>Programme principal (Serveur)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsioServer::run(int argc, char** argv) {
    GAsio lServer;
    lServer.address();
    lServer.endpoint();
    lServer.acceptor();
    lServer.start();
    while(1) {
        lServer.socket();
        lServer.accept();
        lServer.thread(onThread, lServer.socket2());
    }
}
//===============================================</pre></div></div><br>Programme principal (Client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsioClient::run(int argc, char** argv) {
    GAsio lClient;
    lClient.ip("127.0.0.1");
    lClient.address();
    lClient.endpoint();
    lClient.socket();
    lClient.onAsync(onAsync);
    lClient.run();
    lClient.send("Bonjour tout le monde");
    lClient.recv();
    lClient.print();
}
//===============================================</pre></div></div><br>Configuration du mode asynchrone<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsio::onAsync(onAsyncCB _func) {
    m_socket-&gt;async_connect(*m_endpoint, _func);
}
//===============================================</pre></div></div><br>Traitement du mode asynchrone<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GAsioClient::onAsync(const GAsio::error_ptr&amp; _errorcode) {
    GAsio lError;
    lError.error(_errorcode);
    lError.print2();
}
//===============================================</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation-reseau-RPC-avec-XML-RPC"><a class="Link3" href="#">Programmation réseau RPC avec XML-RPC</a></h1><div class="Body3"><br><b>XML-RPC</b> est un moyen simple et rapide d'effectuer des appels de procédure à distance sur Internet. Il convertit l'appel de procédure en un document XML, l'envoie à un serveur distant via HTTP et récupère la réponse en XML. Cette bibliothèque fournit une implémentation modulaire de XML-RPC pour C et C++. La bibliothèque fournit également des fonctionnalités limitées pour la variante courante de XML-RPC qui utilise HTTPS (cryptage SSL).<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Programmation-reseau-RPC-avec-XML-RPC-Compiler-un-projet-XML-RPC-sous-Ubuntu"><a class="Link9" href="#Programmation-reseau-RPC-avec-XML-RPC">Compiler un projet XML-RPC sous Ubuntu</a></h2><br><h3 class="GTitle3" id="Programmation-reseau-RPC-avec-XML-RPC-Compiler-un-projet-XML-RPC-sous-Ubuntu-Fichiers-header"><a class="Title8" href="#Programmation-reseau-RPC-avec-XML-RPC-Compiler-un-projet-XML-RPC-sous-Ubuntu">Fichiers header</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//==============================================
#include &lt;xmlrpc-c/base.hpp&gt;
#include &lt;xmlrpc-c/registry.hpp&gt;
#include &lt;xmlrpc-c/server_abyss.hpp&gt;
#include &lt;xmlrpc-c/girerr.hpp&gt;
#include &lt;xmlrpc-c/base.hpp&gt;
#include &lt;xmlrpc-c/client_simple.hpp&gt;
//==============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-RPC-avec-XML-RPC-Compiler-un-projet-XML-RPC-sous-Ubuntu-Compilation-du-projet"><a class="Title8" href="#Programmation-reseau-RPC-avec-XML-RPC-Compiler-un-projet-XML-RPC-sous-Ubuntu">Compilation du projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">GLIBS =\
    -lxmlrpc_abyss -lxmlrpc_server_abyss -lxmlrpc_client -lxmlrpc_server_cgi  -lxmlrpc -lxmlrpc_cpp -lxmlrpc_packetsocket -lxmlrpc_server -lxmlrpc_util \
    -lxmlrpc_client++ -lxmlrpc_server_cgi++ -lxmlrpc_server++ -lxmlrpc++ -lxmlrpc_server_pstream++ -lxmlrpc_server_abyss++ \</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-RPC-avec-XML-RPC-Compiler-un-projet-XML-RPC-sous-Ubuntu-Execution-du-projet"><a class="Title8" href="#Programmation-reseau-RPC-avec-XML-RPC-Compiler-un-projet-XML-RPC-sous-Ubuntu">Exécution du projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">#================================================
export LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
#================================================
./rdcpp
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-reseau-RPC-avec-XML-RPC-Apprendre-XML-RPC"><a class="Link9" href="#Programmation-reseau-RPC-avec-XML-RPC">Apprendre XML-RPC</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-RPC-avec-XML-RPC-Apprendre-XML-RPC-Creation-d-un-appel-de-procedure-a-distance">Création d'un appel de procédure à distance</a></div></div><br><h3 class="GTitle3" id="Programmation-reseau-RPC-avec-XML-RPC-Apprendre-XML-RPC-Creation-d-un-appel-de-procedure-a-distance"><a class="Title8" href="#Programmation-reseau-RPC-avec-XML-RPC-Apprendre-XML-RPC">Création d'un appel de procédure à distance</a></h3><br>Cette opération permet d'<b>appeler une procédure à distance</b>. On ajoute une méthode dans le registre côté serveur. On configure le serveur et on le démarre. On configure l'url côté client et on lance le client en pointant la méthode à appeler.<br><br>Programme principal (Serveur)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXmlRpcServer::run(int argc, char** argv) {
    GXmlRpcM* lAdd = new GXmlRpcM;
    lAdd-&gt;signature("i:ii");
    lAdd-&gt;help("Ajouter deux entiers");
    lAdd-&gt;onExecute(onAdd);

    GXmlRpc lServer;
    lServer.addMethod("add", lAdd);
    lServer.server();
    lServer.start();
    lServer.run();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_xmlrpc_learn_rpc_server.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_xmlrpc_learn_rpc_server.png"></div><br>Programme principal (Client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXmlRpcClient::run(int argc, char** argv) {
    GXmlRpc lClient;
    lClient.url();
    lClient.call("add", "ii", 7, 5);
    lClient.print();
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_xmlrpc_learn_rpc_client.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_xmlrpc_learn_rpc_client.png"></div><br>Ajout du methode dans le registre (côté serveur)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXmlRpc::addMethod(const std::string&amp; _name, pMethod* _method) {
    m_registry.addMethod(_name, _method);
}
//===============================================</pre></div></div><br>Configuration du serveur<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXmlRpc::server() {
    m_server.reset(
            new xmlrpc_c::serverAbyss(
                    xmlrpc_c::serverAbyss::constrOpt()
                    .registryP(&amp;m_registry)
                    .portNumber(m_port)
            )
    );
}
//===============================================</pre></div></div><br>Démarrage du serveur<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXmlRpc::run() {
    m_server-&gt;run();
}
//===============================================</pre></div></div><br>Fonction de rappel de la methode (add)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXmlRpcServer::onAdd(GXmlRpcM::pList _params, GXmlRpcM::pValue _value) {
    GXmlRpc lServer;
    lServer.onAdd(_params, _value);
}
//===============================================</pre></div></div><br>Traitement de la methode (Add)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXmlRpc::onAdd(GXmlRpcM::pList _params, GXmlRpcM::pValue _value) {
    int lA(_params.getInt(0));
    int lB(_params.getInt(1));
    _params.verifyEnd(2);
    int lC = lA + lB;
    *_value = xmlrpc_c::value_int(lC);
}
//===============================================</pre></div></div><br>Appel de la procédure à distance (côté client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXmlRpc::call(const std::string&amp; _name, const std::string&amp; _format, int _A, int _B) {
    m_client.call(m_url, _name, _format, &amp;m_result, _A, _B);
    m_data = std::to_string(xmlrpc_c::value_int(m_result));
}
//===============================================</pre></div></div><br>Configuration de l'url (côté client)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXmlRpc::url() {
    m_url = "";
    m_url += m_scheme;
    m_url += "://";
    m_url += m_host;
    m_url += ":";
    m_url += std::to_string(m_port);
    m_url += "/";
    m_url += "RPC2";
}
//===============================================</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation-reseau-avec-cURL"><a class="Link3" href="#">Programmation réseau avec cURL</a></h1><div class="Body3"><br><b>libcurl </b>est une bibliothèque de requêtes aux URL destinée à récupérer le contenu d'une ressource accessible par un réseau informatique. La ressource est désignée à l'aide d'une URL et doit être d'un type supporté par la bibliothèque. libcurl permet de créer ou modifier une ressource et peut ainsi être utilisé en tant que client REST. La bibliothèque supporte notamment les protocoles DICT, file, FTP, FTPS, Gopher, HTTP, HTTPS, IMAP, IMAPS, LDAP, LDAPS, POP3, POP3S, RTSP, SCP, SFTP, SMB, SMBS, SMTP, SMTPS, Telnet et TFTP.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Programmation-reseau-avec-cURL-Installer-l-environnement-libcurl-sous-MSYS2"><a class="Link9" href="#Programmation-reseau-avec-cURL">Installer l'environnement libcurl sous MSYS2</a></h2><br><h3 class="Title8 GTitle3" id="Programmation-reseau-avec-cURL-Installer-l-environnement-libcurl-sous-MSYS2-Installer-libcurl"><a class="Title8" href="#Programmation-reseau-avec-cURL-Installer-l-environnement-libcurl-sous-MSYS2">Installer libcurl</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">pacman -S --needed --noconfirm libcurl-devel</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-reseau-avec-cURL-Compiler-un-projet-cURL-sous-MSYS2"><a class="Link9" href="#Programmation-reseau-avec-cURL">Compiler un projet cURL sous MSYS2</a></h2><br><h3 class="GTitle3" id="Programmation-reseau-avec-cURL-Compiler-un-projet-cURL-sous-MSYS2-Fichiers-header"><a class="Title8" href="#Programmation-reseau-avec-cURL-Compiler-un-projet-cURL-sous-MSYS2">Fichiers header</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//==============================================
#include &lt;curl/curl.h&gt;
//==============================================</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-avec-cURL-Compiler-un-projet-cURL-sous-MSYS2-Compilation-du-projet"><a class="Title8" href="#Programmation-reseau-avec-cURL-Compiler-un-projet-cURL-sous-MSYS2">Compilation du projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">GINCS =\
    -I/mingw32/include \

GLIBS =\
    -L/mingw32/lib \
    -lcurl \</pre></div></div><br><h3 class="GTitle3" id="Programmation-reseau-avec-cURL-Compiler-un-projet-cURL-sous-MSYS2-Execution-du-projet"><a class="Title8" href="#Programmation-reseau-avec-cURL-Compiler-un-projet-cURL-sous-MSYS2">Exécution du projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">#================================================
export "PATH=/mingw32/bin:$PATH"
#================================================
./rdcpp.exe
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-reseau-avec-cURL-Apprendre-cURL"><a class="Link9" href="#Programmation-reseau-avec-cURL">Apprendre cURL</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Programmation-reseau-avec-cURL-Apprendre-cURL-Telechargement-du-contenu-d-une-page">Téléchargement du contenu d'une page</a></div></div><br><h3 class="GTitle3" id="Programmation-reseau-avec-cURL-Apprendre-cURL-Telechargement-du-contenu-d-une-page"><a class="Title8" href="#Programmation-reseau-avec-cURL-Apprendre-cURL">Téléchargement du contenu d'une page</a></h3><br>Cette opération permet de <b>télécherger le contenu</b> d'une page web. On initialise cURL. On configure l'URL de la page web. On configure la fonction de rappel pour l'écriture des données. On configure le buffer des données. Et on démarre le téléchargement des données.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCurlUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    GCurl lCurl;
    lCurl.init();
    lCurl.url(lApp-&gt;curl_url);
    lCurl.writeFunc(onWriteFunc);
    lCurl.writeData();
    lCurl.perform();
    lCurl.clean();
    lCurl.print();
}
//===============================================</pre></div></div><br>Initialisation du système<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCurl::init() {
    m_curl = curl_easy_init();
}
//===============================================</pre></div></div><br>Configuration de l'URL<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCurl::url(const std::string&amp; _url) {
    curl_easy_setopt(m_curl, CURLOPT_URL, _url.c_str());
}
//===============================================</pre></div></div><br>Configuration de la fonction de rappel pour l'écriture des données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCurl::writeFunc(onWriteFuncCB _onWriteFunc) {
    curl_easy_setopt(m_curl, CURLOPT_WRITEFUNCTION, _onWriteFunc);
}
//===============================================</pre></div></div><br>Configuration du buffer des données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCurl::writeData() {
    curl_easy_setopt(m_curl, CURLOPT_WRITEDATA, &amp;m_data);
}
//===============================================</pre></div></div><br>Démarrage des opérations<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GCurl::perform() {
    m_code = curl_easy_perform(m_curl);
}
//===============================================</pre></div></div><br>Fonction de rappel pour l'écriture des données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
size_t GCurlUi::onWriteFunc(void* _content, size_t _size, size_t _nmemb, void* _params) {
    GCurl lData;
    return lData.append(_content, _size, _nmemb, _params);
}
//===============================================</pre></div></div><br>Ecriture des données<br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
size_t GCurl::append(void* _content, size_t _size, size_t _nmemb, void* _params) {
    std::string* lData = (std::string*)_params;
    char* lContent = (char*)_content;
    lData-&gt;append(lContent, _size * _nmemb);
    return _size * _nmemb;
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_curl_learn_content_download.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_curl_learn_content_download.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Analyse-de-donnees-XML-avec-Libxml2"><a class="Link3" href="#">Analyse de données XML avec Libxml2</a></h1><div class="Body3"><br><b>Libxml2 </b>est un analyseur XML gratuit et disponible sous la licence MIT . XML est un métalangage pour concevoir des langages de balisage, c'est-à-dire un langage de texte où la sémantique et la structure sont ajoutées au contenu en utilisant des informations de « balisage » supplémentaires entre crochets angulaires. HTML est le langage de balisage le plus connu. Bien que la bibliothèque soit écrite en C, diverses liaisons de langage la rendent disponible dans d'autres environnements. Libxml2 est connu pour être très portable, la bibliothèque devrait être construite et fonctionner sans problèmes sérieux sur une variété de systèmes (Linux, Unix, Windows, CygWin, MacOS, MacOS X, RISC Os, OS/2, VMS, QNX, MVS, VxWorks).<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Analyse-de-donnees-XML-avec-Libxml2-Compiler-un-projet-LibXml2-sous-MSYS2"><a class="Link9" href="#Analyse-de-donnees-XML-avec-Libxml2">Compiler un projet LibXml2 sous MSYS2</a></h2><br><h3 class="GTitle3" id="Analyse-de-donnees-XML-avec-Libxml2-Compiler-un-projet-LibXml2-sous-MSYS2-Fichiers-header"><a class="Title8" href="#Analyse-de-donnees-XML-avec-Libxml2-Compiler-un-projet-LibXml2-sous-MSYS2">Fichiers header</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//==============================================
#include &lt;libxml/tree.h&gt;
#include &lt;libxml/xpath.h&gt;
//==============================================</pre></div></div><br><h3 class="GTitle3" id="Analyse-de-donnees-XML-avec-Libxml2-Compiler-un-projet-LibXml2-sous-MSYS2-Compilation-du-projet"><a class="Title8" href="#Analyse-de-donnees-XML-avec-Libxml2-Compiler-un-projet-LibXml2-sous-MSYS2">Compilation du projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">GINCS =\
    -I/mingw32/include \
    -I/mingw32/include/libxml2 \

GLIBS =\
    -L/mingw32/lib \
    -lxml2 \</pre></div></div><br><h3 class="GTitle3" id="Analyse-de-donnees-XML-avec-Libxml2-Compiler-un-projet-LibXml2-sous-MSYS2-Execution-du-projet"><a class="Title8" href="#Analyse-de-donnees-XML-avec-Libxml2-Compiler-un-projet-LibXml2-sous-MSYS2">Exécution du projet</a></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">#================================================
export "PATH=/mingw32/bin:$PATH"
#================================================
./rdcpp.exe
#================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Analyse-de-donnees-XML-avec-Libxml2-Apprendre-libxml2"><a class="Link9" href="#Analyse-de-donnees-XML-avec-Libxml2">Apprendre libxml2</a></h2><br><div class="Content0 GSummary3"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Analyse-de-donnees-XML-avec-Libxml2-Apprendre-libxml2-Affichage-du-contenu-d-un-document-XML">Affichage du contenu d'un document XML</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Analyse-de-donnees-XML-avec-Libxml2-Apprendre-libxml2-Ajout-d-un-element-a-un-document-XML">Ajout d'un element à un document XML</a></div></div><br><h3 class="GTitle3" id="Analyse-de-donnees-XML-avec-Libxml2-Apprendre-libxml2-Affichage-du-contenu-d-un-document-XML"><a class="Title8" href="#Analyse-de-donnees-XML-avec-Libxml2-Apprendre-libxml2">Affichage du contenu d'un document XML</a></h3><br>Cette opération permet d'<b>afficher le contenu</b> d'un document XML. On charge le document XML à partir d'un fichier stocké sur le disque dur de l'ordianteur. On autorise d'ignorer les blancs. On analyse le document à travers un parser. On récupère son noeud racine. Et on l'affiche dans la console.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXmlUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    GXml lXml;
    lXml.filename(lApp-&gt;xml_file);
    lXml.blank();
    lXml.parse();
    lXml.root();
    lXml.print();
    lXml.free();
}
//===============================================</pre></div></div><br>Analyse du document XML<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXml::parse() {
    m_doc = xmlParseFile(m_filename.c_str());
}
//===============================================</pre></div></div><br>Récupération du noeud racine<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXml::root() {
    m_node = xmlDocGetRootElement(m_doc);
}
//===============================================</pre></div></div><br>Affichage du document XML<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXml::print() const {
    xmlDocFormatDump(stdout, m_doc, 1);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_xml_using_print.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_xml_using_print.png"></div><br><h3 class="GTitle3" id="Analyse-de-donnees-XML-avec-Libxml2-Apprendre-libxml2-Ajout-d-un-element-a-un-document-XML"><a class="Title8" href="#Analyse-de-donnees-XML-avec-Libxml2-Apprendre-libxml2">Ajout d'un element à un document XML</a></h3><br>Cette opération permet d'<b>ajouter un élément</b> à un document XML. On charge le document XML à partir d'un fichier stocké sur le disque dur de l'ordianteur. On autorise d'ignorer les blancs. On analyse le document à travers un parser. On récupère son noeud racine. On récupère le noeud à la position 1 (le premier noeud). On crée un nouveau noeud. On ajoute le nouveau au document. Et on l'affiche dans la console. La récupération d'un noeud est réalisée à travers une requête XPath.<br><br>Programme principal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXmlUi::run(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;data()-&gt;app;

    GXml lXml;
    lXml.filename(lApp-&gt;xml_file);
    lXml.blank();
    lXml.parse();
    lXml.root();

    GXml lProduct;
    lProduct.xpath(lXml, "/catalog/product[position()=1]");

    GXml lNew;
    lNew.create("REF123456", "Capteur ReadyDev", "10.00");

    lProduct.nextSibling(lNew);

    lXml.print();

    lXml.free();
}
//===============================================</pre></div></div><br>Exécution d'une requête XPath<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXml::xpath(GXml&amp; _xml, const std::string&amp; _xpath) {
    xmlXPathInit();
    xmlXPathContextPtr lContext = xmlXPathNewContext(_xml.m_doc);
    xmlXPathObjectPtr lResult = xmlXPathEvalExpression(BAD_CAST(_xpath.c_str()), lContext);
    if(lResult &amp;&amp; XPATH_NODESET == lResult-&gt;type &amp;&amp; lResult-&gt;nodesetval-&gt;nodeNr == 1) {
        m_node = lResult-&gt;nodesetval-&gt;nodeTab[0];
    }
    xmlXPathFreeObject(lResult);
    xmlXPathFreeContext(lContext);
}
//===============================================</pre></div></div><br>Création du nouveau noeud<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GXml::create(const std::string&amp; _reference, const std::string&amp; _name, const std::string&amp; _price) {
    node("product");
    attribute("reference", _reference);

    GXml lName;
    lName.node("name");
    lName.data(_name);

    child(lName);
    child("price", _price);
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Cpp/img/i_xml_using_node_add.png" class="lazy" data-src="/Tutoriels/Software_Development/Cpp/img/i_xml_using_node_add.png"></div><br></div></div></div></div><br>