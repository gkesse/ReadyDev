<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C++<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C++</b> est un langage de programmation compilé permettant la programmation sous de multiples paradigmes (comme la programmation procédurale, orientée objet ou générique). Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/b_cpp.png" alt="/Tutoriels/Software_Development/Cpp/img/b_cpp.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616558777155"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616558777155");</script></div><br><h2 class="Title7 GTitle2" id="Installation-Installer l'environnement C++ sous MSYS2"><a class="Link9" href="#Installation">Installer l'environnement C++ sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Télécharger MSYS2</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://repo.msys2.org/distrib/x86_64/msys2-x86_64-20210228.exe">https://repo.msys2.org/distrib/x86_64/msys2-x86_64-20210228.exe</a><br><br><h3 class="Title8 GTitle3">Installer MSYS2</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">msys2-x86_64-20210228.exe
Suivant
Dossier d'installation -> C:\msys64
Suivant
Raccourci du menu Démarrer -> MSYS2 64bit
Suivant
Suivant
Terminer</xmp></pre></div><br><h3 class="Title8 GTitle3">Démarrer MSYS2</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
MSYS2</xmp></pre></div><br><h3 class="Title8 GTitle3">Mettre à jour les packages MSYS2</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -Syu</xmp></pre></div><br><h3 class="Title8 GTitle3">Installer le package (make)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm make</xmp></pre></div><br><h3 class="Title8 GTitle3">Installer le package (gcc)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm gcc</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-Installer l'environnement C++ sous WinLibs"><a class="Link9" href="#Installation">Installer l'environnement C++ sous WinLibs</a></h2><br><h3 class="Title8 GTitle3">Télécharger WinLibs</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://winlibs.com/#download-release">https://winlibs.com/#download-release</a><br><br><b>winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-8.0.2-r1.7z</b><br><br><h3 class="Title8 GTitle3">Extraire WinLibs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-8.0.2-r1.7z -&gt; Clic droit
Extraire vers winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-8.0.2-r1\</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616682650861"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616682650861");</script></div><br><h2 class="Title7 GTitle2" id="Tests-Tester un projet C++ sous MSYS2"><a class="Link9" href="#Tests">Tester un projet C++ sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Éditer le programme (main.cpp)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Bonjour tout le monde\n";
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">g++ -std=gnu++11 -c main.cpp -o main.o</xmp></pre></div><br><h3 class="Title8 GTitle3">Éditer les liens du projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">g++ -o rdcpp.exe main.o</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">./rdcpp.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620393328135"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620393328135");</script></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une condition if"><a class="Link9" href="#Fondamentaux">Créer une condition if</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">a(1000) est superieur a b(100)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une condition if else"><a class="Link9" href="#Fondamentaux">Créer une condition if else</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">a(10) est inferieur ou egal a b(100)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une condition else if"><a class="Link9" href="#Fondamentaux">Créer une condition else if</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">a(100) est egal a b(100)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une boucle for"><a class="Link9" href="#Fondamentaux">Créer une boucle for</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une bouble while"><a class="Link9" href="#Fondamentaux">Créer une bouble while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une boucle do while"><a class="Link9" href="#Fondamentaux">Créer une boucle do while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Casser une boucle for"><a class="Link9" href="#Fondamentaux">Casser une boucle for</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Casser une boucle while"><a class="Link9" href="#Fondamentaux">Casser une boucle while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Casser une boucle do while"><a class="Link9" href="#Fondamentaux">Casser une boucle do while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">0 x 3 = 0
1 x 3 = 3
2 x 3 = 6
3 x 3 = 9
4 x 3 = 12
5 x 3 = 15
6 x 3 = 18
7 x 3 = 21
8 x 3 = 24
9 x 3 = 27</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Continuer une boucle for"><a class="Link9" href="#Fondamentaux">Continuer une boucle for</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">f[-5.0] = -0.20
f[-4.0] = -0.25
f[-3.0] = -0.33
f[-2.0] = -0.50
f[-1.0] = -1.00
f[1.0] = 1.00
f[2.0] = 0.50
f[3.0] = 0.33
f[4.0] = 0.25
f[5.0] = 0.20</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Continuer une boucle while"><a class="Link9" href="#Fondamentaux">Continuer une boucle while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">f[-5.0] = -0.20
f[-4.0] = -0.25
f[-3.0] = -0.33
f[-2.0] = -0.50
f[-1.0] = -1.00
f[1.0] = 1.00
f[2.0] = 0.50
f[3.0] = 0.33
f[4.0] = 0.25
f[5.0] = 0.20</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Continuer une boucle do while"><a class="Link9" href="#Fondamentaux">Continuer une boucle do while</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">f[-5.0] = -0.20
f[-4.0] = -0.25
f[-3.0] = -0.33
f[-2.0] = -0.50
f[-1.0] = -1.00
f[1.0] = 1.00
f[2.0] = 0.50
f[3.0] = 0.33
f[4.0] = 0.25
f[5.0] = 0.20</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Récupérer les paramètres passés en ligne de commande"><a class="Link9" href="#Fondamentaux">Récupérer les paramètres passés en ligne de commande</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;cstdio&gt;
//===============================================
int main(int argc, char** argv) {
    for(int i = 0; i &lt; argc; i++) {
        printf("argv[%d] : %s\n", i, argv[i]);
    }
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">./rdcpp.exe un deux trois</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">argv[0] : rdcpp.exe
argv[1] : un
argv[2] : deux
argv[3] : trois</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une machine à états finis"><a class="Link9" href="#Fondamentaux">Créer une machine à états finis</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">initialiser le systeme
afficher la liste des methodes
choisir une methode
executer la methode</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une surchage de fonctions"><a class="Link9" href="#Fondamentaux">Créer une surchage de fonctions</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
void sayHello();
void sayHello(const std::string& name);
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
void sayHello(const std::string& name) {
    std::cout &lt;&lt; "Bonjour " &lt;&lt; name &lt;&lt; "\n";
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Bonjour tout le monde
Bonjour Gerard KESEE</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une allocation mémoire dynamique"><a class="Link9" href="#Fondamentaux">Créer une allocation mémoire dynamique</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int* lData = new int;
    *lData = 1000;
    printf("Donnee : %d\n", *lData);
    delete lData;
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Donnee : 1000</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer un tableau d'allocation mémoire dynamique"><a class="Link9" href="#Fondamentaux">Créer un tableau d'allocation mémoire dynamique</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Donnee[0] : 0
Donnee[1] : 1
Donnee[2] : 4
Donnee[3] : 9
Donnee[4] : 16
Donnee[5] : 25
Donnee[6] : 36
Donnee[7] : 49
Donnee[8] : 64
Donnee[9] : 81</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une fonction inline automatique"><a class="Link9" href="#Fondamentaux">Créer une fonction inline automatique</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================
int main(int argc, char** argv) {
    GHello lHello;
    lHello.sayHello();
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GHello.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GHello.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Bonjour tout le monde</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une fonction inline externe"><a class="Link9" href="#Fondamentaux">Créer une fonction inline externe</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================
int main(int argc, char** argv) {
    GHello lHello;
    lHello.sayHello();
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GHello.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GHello.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Bonjour tout le monde</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une référence"><a class="Link9" href="#Fondamentaux">Créer une référence</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
void updateData(int& ptr, int value);
//===============================================
void updateData(int& ptr, int value) {
    ptr = value;
}
//===============================================
int main(int argc, char** argv) {
    int lData = 10;
    updateData(lData, 2021);
    printf("Donnee : %d\n", lData);
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Donnee : 2021</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer un espace de nom"><a class="Link9" href="#Fondamentaux">Créer un espace de nom</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Bonjour tout le monde</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer un template de fonction"><a class="Link9" href="#Fondamentaux">Créer un template de fonction</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
template &lt;typename T&gt; T min(const T &x, const T &y);
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
template &lt;typename T&gt; T min(const T &x, const T &y) {
    return (x &lt; y) ? x : y;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">min&lt;double&gt;(20.5, 50.5) : 20.5
min&lt;int&gt;(40, 30) : 30
min&lt;std::string&gt;("bonjour", "bonbon") : bonbon</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer un template de classe"><a class="Link9" href="#Fondamentaux">Créer un template de classe</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GRectangle.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GRectangle_
#define _GRectangle_
//===============================================
#include &lt;iostream&gt;
//===============================================
template &lt;typename T&gt; 
class GRectangle {
public:
    GRectangle(const T& x1, const T& x2, const T& y1, const T& y2);
    ~GRectangle();

public:
    T width() const;
    T height() const;
    bool contain(const T& x, const T& y) const;
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GRectangle.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GRectangle.h"
//===============================================
template &lt;typename T&gt;
GRectangle&lt;T&gt;::GRectangle(const T& x1, const T& x2, const T& y1, const T& y2) {
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
bool GRectangle&lt;T&gt;::contain(const T& x, const T& y) const {
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Rectangle (-1, 2, -2, 2) : width : 3
Rectangle (-1, 2, -2, 2) : height : 4
Rectangle (-1, 2, -2, 2) : perimeter : 14
Rectangle (-1, 2, -2, 2) : area : 12
Rectangle (-1, 2, -2, 2) : area : 12
Rectangle (-1, 2, -2, 2) : contain (0,-1) : 1
Rectangle (-1, 2, -2, 2) : contain (0,-3) : 0</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer un template de classe header"><a class="Link9" href="#Fondamentaux">Créer un template de classe header</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GRectangle.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GRectangle_
#define _GRectangle_
//===============================================
#include &lt;iostream&gt;
//===============================================
template &lt;typename T&gt; 
class GRectangle {
public:
    GRectangle(const T& x1, const T& x2, const T& y1, const T& y2);
    ~GRectangle();

public:
    T width() const;
    T height() const;
    bool contain(const T& x, const T& y) const;
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
GRectangle&lt;T&gt;::GRectangle(const T& x1, const T& x2, const T& y1, const T& y2) {
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
bool GRectangle&lt;T&gt;::contain(const T& x, const T& y) const {
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GRectangle.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GRectangle.h"
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Rectangle (-1, 2, -2, 2) : width : 3.00
Rectangle (-1, 2, -2, 2) : height : 4.00
Rectangle (-1, 2, -2, 2) : perimeter : 14.00
Rectangle (-1, 2, -2, 2) : area : 12.00
Rectangle (-1, 2, -2, 2) : area : 12.00
Rectangle (-1, 2, -2, 2) : contain (0,-1) : 1
Rectangle (-1, 2, -2, 2) : contain (0,-3) : 0</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une exception"><a class="Link9" href="#Fondamentaux">Créer une exception</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
    catch(const std::string& e) {
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">divide (22, 7) : 3.14
divide (33, 8) : 4.12
[erreur] division par zero</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une exception de classe"><a class="Link9" href="#Fondamentaux">Créer une exception de classe</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
    catch(const std::exception& e) {
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GError.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GError_
#define _GError_
//===============================================
#include &lt;iostream&gt;
#include &lt;exception&gt;
//===============================================
class GError : public std::exception {
public:
    GError(const std::string& msg) throw();
    ~GError() throw();

public:
    const char* what() const throw();

private:
    std::string m_msg;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GError.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GError.h"
//===============================================
GError::GError(const std::string& msg) throw() {
    m_msg = msg;
}
//===============================================
GError::~GError() throw() {
    
}
//===============================================
const char* GError::what() const throw() {
    return m_msg.c_str();
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">divide (22, 7) : 3.14
divide (33, 8) : 4.12
[erreur] division par zero</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une référence LValue"><a class="Link9" href="#Fondamentaux">Créer une référence LValue</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    int a = 100;
    int& b = a;
    printf("a : %d\n", a);
    b = 200;
    printf("a : %d\n", a);
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">a : 100
a : 200</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une référence LValue de fonction"><a class="Link9" href="#Fondamentaux">Créer une référence LValue de fonction</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int a = 100;
//===============================================
int& getA();
//===============================================
int main(int argc, char** argv) {
    printf("a : %d\n", a);
    getA() = 200;
    printf("a : %d\n", a);
    return 0;
}
//===============================================
int& getA() {
    return a;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">a : 100
a : 200</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une référence RValue (C++11)"><a class="Link9" href="#Fondamentaux">Créer une référence RValue (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int a = 100;
//===============================================
int getA();
//===============================================
int main(int argc, char** argv) {
    printf("a : %d\n", a);
    int&& b = getA();
    b = 200;
    printf("a : %d\n", a);
    printf("b : %d\n", b);
    return 0;
}
//===============================================
int getA() {
    return a;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">a : 100
a : 100
b : 200</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une référence RValue de fonction (C++11)"><a class="Link9" href="#Fondamentaux">Créer une référence RValue de fonction (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int a = 100;
//===============================================
int getA();
void printV(std::string k, int&& v);
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
void printV(std::string k, int&& v) {
    printf("%s : %d\n", k.c_str(), v);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">a : 100
v : 200</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une déduction de type avec auto (C++11)"><a class="Link9" href="#Fondamentaux">Créer une déduction de type avec auto (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">var_int : 100
var_double : 3.14
var_bool : 1
var_string : voici ma chaine</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une déduction de type liste avec auto (C++11)"><a class="Link9" href="#Fondamentaux">Créer une déduction de type liste avec auto (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">1 ; 2 ; 3 ; 4 ; 5
1.1 ; 2.2 ; 3.3 ; 4.4 ; 5.5
un ; deux ; trois ; quatre ; cinq</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une évaluation d'expression avec constexpr (C++11)"><a class="Link9" href="#Fondamentaux">Créer une évaluation d'expression avec constexpr (C++11)</a></h2><br>En C ++11, une fonction <b>constexpr </b>ne doit contenir qu'une seule instruction <b>return</b>.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">product (3, 4) : 12
product (4, 5) : 20
product (5, 6) : 30</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une évaluation d'expression avec constexpr (C++14)"><a class="Link9" href="#Fondamentaux">Créer une évaluation d'expression avec constexpr (C++14)</a></h2><br>En C ++14, une fonction <b>constexpr </b>autorise plusieurs instructions.<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">product (3, 4) : 12
product (4, 5) : 20
product (5, 6) : 30</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une fonction lambda (C++11)"><a class="Link9" href="#Fondamentaux">Créer une fonction lambda (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;algorithm&gt;
//===============================================
int main(int argc, char** argv) {
    std::vector&lt;int&gt; nums {1, 2, 3, 4, 5};
    int i;
    auto show = [&i](const int& n) -&gt; void {
        if(i != 0) {printf(" ; ");}
        printf("%d", n);
        i = 1;
    };
    i = 0; std::for_each(nums.cbegin(), nums.cend(), show);
    printf("\n");
    //
    std::for_each(nums.begin(), nums.end(), [](int &n) -&gt; void { 
        n *= 5;
    });
    //
    i = 0; std::for_each(nums.cbegin(), nums.cend(), show);
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">1 ; 2 ; 3 ; 4 ; 5
5 ; 10 ; 15 ; 20 ; 25</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une fonction lambda comme paramètre (C++14)"><a class="Link9" href="#Fondamentaux">Créer une fonction lambda comme paramètre (C++14)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
    lambda_vec(vec_nums, [&i](int x) -&gt; void {
        if(i != 0) {printf(" ; ");}
        printf("%d", x);
        i = 1;
    });
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">42
1 ; 2 ; 3 ; 4 ; 5</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer une boucle for basée sur une palge (C++11)"><a class="Link9" href="#Fondamentaux">Créer une boucle for basée sur une palge (C++11)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">1 ; 2 ; 3 ; 4 ; 5
5 ; 6 ; 7 ; 8 ; 9</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer un module avec import, export et module (C++20)"><a class="Link9" href="#Fondamentaux">Créer un module avec import, export et module (C++20)</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
import hello;
//===============================================
int main (int argc, char** argv) {
    sayHello("Gerard KESSE");
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GHello.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
module;
//===============================================
#include &lt;iostream&gt;
#include &lt;string_view&gt;
//===============================================
export module hello;
//===============================================
export void sayHello (std::string_view const &name) {
    std::cout &lt;&lt; "[module] Bonjour " &lt;&lt; name &lt;&lt; "!\n";
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">g++ -std=gnu++20 -fmodules-ts -c main.cpp -o main.o
g++ -std=gnu++20 -fmodules-ts -c GHello.cpp -o GHello.o
g++ -std=gnu++20 -fmodules-ts -o rdcpp.exe main.o GHello.o</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">rdcpp.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">[module] Bonjour Gerard KESSE</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Créer un paramètre non utilisé"><a class="Link9" href="#Fondamentaux">Créer un paramètre non utilisé</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    (void)argc;
    (void)argv;
    printf("Bonjour tout le monde\n");
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation orientée objet"><a class="Link3" href="#">Programmation orientée objet</a></h1><div class="Body3"><br>La <b>programmation orientée objet</b> (POO) est un paradigme de programmation informatique qui consiste en la définition et l'interaction de briques logicielles appelées objets ; un objet représente un concept, une idée ou toute entité du monde physique, comme une voiture, une personne ou encore une page d'un livre. Il possède une structure interne et un comportement, et il sait interagir avec ses pairs. Il s'agit donc de représenter ces objets et leurs relations ; l'interaction entre les objets via leurs relations permet de concevoir et réaliser les fonctionnalités attendues, de mieux résoudre le ou les problèmes. Dès lors, l'étape de modélisation revêt une importance majeure et nécessaire pour la POO. C'est elle qui permet de transcrire les éléments du réel sous forme virtuelle. La programmation orientée objet consiste à utiliser des techniques de programmation pour mettre en œuvre une conception basée sur les objets. Celle-ci peut être élaborée en utilisant des méthodologies de développement logiciel objet, dont la plus connue est le processus unifié et exprimée à l'aide de langages de modélisation tels que le Unified Modeling Language (UML).<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620957525148"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620957525148");</script></div><br><h2 class="Title7 GTitle2" id="Programmation orientée objet-Créer une classe"><a class="Link9" href="#Programmation orientée objet">Créer une classe</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GPerson.h"
//===============================================
int main(int argc, char** argv) {
    GPerson lPerson = {"Gerard KESSE", 123456, 3.14};
    lPerson.print();
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GPerson.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GPerson_
#define _GPerson_
//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
class GPerson {
public:
    GPerson(const std::string& name, const int& code, const double& coef);
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GPerson.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GPerson.h"
//===============================================
GPerson::GPerson(const std::string& name, const int& code, const double& coef) {
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">Personne[name] : Gerard KESSE
Personne[code] : 123456
Personne[coef] : 3.14</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programmation orientée objet-Créer un héritage"><a class="Link9" href="#Programmation orientée objet">Créer un héritage</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GAnimal.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
class GAnimal {
public:
    GAnimal(const std::string& name);
    ~GAnimal();

public:
    void setCategory(const std::string& category);
    void print();
    
protected:
    std::string m_name;
    std::string m_category;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GAnimal.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
//===============================================
GAnimal::GAnimal(const std::string& name) {
    m_name = name;
}
//===============================================
GAnimal::~GAnimal() {
    
}
//===============================================
void GAnimal::setCategory(const std::string& category) {
    m_category = category;
}
//===============================================
void GAnimal::print() {
    printf("[Animal] Nom : %s\n", m_name.c_str());
    printf("[Animal] Categorie : %s\n", m_category.c_str());
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GDog.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDog_
#define _GDog_
//===============================================
#include "GAnimal.h"
//===============================================
class GDog : public GAnimal {
public:
    GDog(const std::string& name, int weight);
    ~GDog();

public:
    void print();
    
private:
    int m_weight;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GDog.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDog.h"
//===============================================
GDog::GDog(const std::string& name, int weight) :
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">[Animal] Nom : Tom
[Animal] Categorie : Chat
[Dog] Nom : Medor
[Dog] Categorie : Chien
[Dog] Poids : 20 (kg)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programmation orientée objet-Créer un polymorphisme"><a class="Link9" href="#Programmation orientée objet">Créer un polymorphisme</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GAnimal.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
class GAnimal {
public:
    GAnimal(const std::string& name);
    virtual ~GAnimal();

public:
    virtual void setCategory(const std::string& category);
    virtual void print();
    
protected:
    std::string m_name;
    std::string m_category;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GAnimal.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
//===============================================
GAnimal::GAnimal(const std::string& name) {
    m_name = name;
}
//===============================================
GAnimal::~GAnimal() {
    
}
//===============================================
void GAnimal::setCategory(const std::string& category) {
    m_category = category;
}
//===============================================
void GAnimal::print() {
    printf("[Animal] Nom : %s | Categorie : %s\n", 
    m_name.c_str(), m_category.c_str());
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GDog.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDog_
#define _GDog_
//===============================================
#include "GAnimal.h"
//===============================================
class GDog : public GAnimal {
public:
    GDog(const std::string& name, int weight);
    ~GDog();

public:
    void print();
    
private:
    int m_weight;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GDog.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDog.h"
//===============================================
GDog::GDog(const std::string& name, int weight) :
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">[Animal] Nom : Tom | Categorie : Chat
[Dog] Nom : Medor | Categorie : Chien | Poids : 20 (kg)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programmation orientée objet-Créer une classe abstraite"><a class="Link9" href="#Programmation orientée objet">Créer une classe abstraite</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GAnimal.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include &lt;iostream&gt;
#include &lt;string&gt;
//===============================================
class GAnimal {
public:
    GAnimal(const std::string& name);
    virtual ~GAnimal();

public:
    virtual void setCategory(const std::string& category);
    virtual void print() = 0;
    
protected:
    std::string m_name;
    std::string m_category;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GAnimal.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
//===============================================
GAnimal::GAnimal(const std::string& name) {
    m_name = name;
}
//===============================================
GAnimal::~GAnimal() {
    
}
//===============================================
void GAnimal::setCategory(const std::string& category) {
    m_category = category;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GDog.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDog_
#define _GDog_
//===============================================
#include "GAnimal.h"
//===============================================
class GDog : public GAnimal {
public:
    GDog(const std::string& name, int weight);
    ~GDog();

public:
    void print();
    
private:
    int m_weight;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GDog.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDog.h"
//===============================================
GDog::GDog(const std::string& name, int weight) :
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GCat.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GCat_
#define _GCat_
//===============================================
#include "GAnimal.h"
//===============================================
class GCat : public GAnimal {
public:
    GCat(const std::string& name, int price);
    ~GCat();

public:
    void print();
    
private:
    int m_price;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GCat.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GCat.h"
//===============================================
GCat::GCat(const std::string& name, int price) :
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">[Cat] Nom : Tom | Categorie : Chat | Prix : 1000 (€)
[Dog] Nom : Medor | Categorie : Chien | Poids : 20 (kg)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programmation orientée objet-Créer une interface"><a class="Link9" href="#Programmation orientée objet">Créer une interface</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GShape.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GShape.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GShape.h"
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GRectangle.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GRectangle.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GCircle.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GCircle.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">[Rectangle] Perimetre (w : 30, h : 40) : 140 (m)
[Rectangle] Aire (w : 30, h : 40) : 1200 (m2)
[Rectangle] on supprime le rectangle (r : 30 ; w : 40)
[Circle] Perimetre (r : 20) : 126 (m)
[Circle] Aire (r : 20) : 1257 (m2)
[Circle] on supprime le cercle (r : 20)</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patrons de conception"><a class="Link3" href="#">Patrons de conception</a></h1><div class="Body3"><br>Un <b>patron de conception</b> (design pattern) est un arrangement caractéristique de modules, reconnu comme bonne pratique en réponse à un problème de conception d'un logiciel. Il décrit une solution standard, utilisable dans la conception de différents logiciels. Un patron de conception est issu de l'expérience des concepteurs de logiciels. Il décrit un arrangement récurrent de rôles et d'actions joués par des modules d'un logiciel, et le nom du patron sert de vocabulaire commun entre le concepteur et le programmeur. D'une manière analogue à un motif de conception en architecture, le patron de conception décrit les grandes lignes d'une solution, qui peuvent ensuite être modifiées et adaptées en fonction des besoins.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620957910286"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620957910286");</script></div><br><h2 class="Title7 GTitle2" id="Patrons de conception-Créer un patron singleton"><a class="Link9" href="#Patrons de conception">Créer un patron singleton</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDatabase.h"
//===============================================
int main(int argc, char** argv) {
    GDatabase::Instance()-&gt;open();
    GDatabase::Instance()-&gt;load();
    GDatabase::Instance()-&gt;update();
    GDatabase::Instance()-&gt;save();
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GDatabase.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GDatabase.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">ouvrir la base de donnees
charger les donnees
mettre a jour les donnees
sauvegarder les donnees</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un manager de données"><a class="Link3" href="#">Créer un manager de données</a></h1><div class="Body3"><br>Le <b>manager de données</b> que nous présentons ici est une architecture logicielle permettant d'accéder à toutes les données de notre application.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621364608073"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621364608073");</script></div><br><h2 class="Title7 GTitle2" id="Créer un manager de données-main.cpp"><a class="Link9" href="#Créer un manager de données">main.cpp</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GManager.h"
//===============================================
int main(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;getData()-&gt;app;
    printf("lApp-&gt;app_name : %s\n", lApp-&gt;app_name.c_str());
    printf("lApp-&gt;win_width : %d\n", lApp-&gt;win_width);
    printf("lApp-&gt;win_height : %d\n", lApp-&gt;win_height);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un manager de données-GManager.h"><a class="Link9" href="#Créer un manager de données">GManager.h</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un manager de données-GManager.cpp"><a class="Link9" href="#Créer un manager de données">GManager.cpp</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un manager de données-Résultat"><a class="Link9" href="#Créer un manager de données">Résultat</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">lApp-&gt;app_name : ReadyDev
lApp-&gt;win_width : 640
lApp-&gt;win_height : </xmp><br></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Le <b>système d'administration</b> que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621005046333"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621005046333");</script></div><br><h2 class="Title7 GTitle2" id="Système d'administration-main.cpp"><a class="Link9" href="#Système d'administration">main.cpp</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GProcess.h"
//===============================================
int main(int argc, char** argv) {
    GProcess::Instance()-&gt;run(argc, argv);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-GProcess.h"><a class="Link9" href="#Système d'administration">GProcess.h</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-GProcess.cpp"><a class="Link9" href="#Système d'administration">GProcess.cpp</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_admin_system.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_admin_system.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface Homme-Machine avec Qt"><a class="Link3" href="#">Interface Homme-Machine avec Qt</a></h1><div class="Body3"><br><b>Qt </b>est une API orientée objet et développée en C++ qui offre des composants d'interface graphique (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc. Par certains aspects, elle ressemble à un framework lorsqu'on l'utilise pour concevoir des interfaces graphiques ou que l'on conçoit l'architecture de son application en utilisant les mécanismes des signaux et slots par exemple. Qt permet la portabilité des applications qui n'utilisent que ses composants par simple recompilation du code source. Les environnements pris en charge sont les Unix (dont GNU/Linux) qui utilisent le système graphique X Window System ou Wayland, Windows, Mac OS X, Tizen et également Genode. Le fait d'être une bibliothèque logicielle multiplateforme attire un grand nombre de personnes qui ont donc l'occasion de diffuser leurs programmes sur les principaux OS existants. Qt intègre des bindings avec plus d'une dizaine de langages autres que le C++, comme Ada, C#, Java, Python, Ruby, Visual Basic, etc. Qt est notamment connu pour être le framework sur lequel repose l'environnement graphique KDE Plasma, l'un des environnements de bureau par défaut de plusieurs distributions GNU/Linux. <br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617838385077"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617838385077");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/b_qt.png" alt="/Tutoriels/Software_Development/Cpp/img/b_qt.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-Installer l'environnement Qt sous MSYS2"><a class="Link9" href="#Interface Homme-Machine avec Qt">Installer l'environnement Qt sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Installer Qt</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-qt5
pacman -S --needed --noconfirm mingw-w64-i686-qt-creator
pacman -S --needed --noconfirm mingw-w64-i686-gdb
pacman -S --needed --noconfirm mingw-w64-i686-cmake
pacman -S --needed --noconfirm mingw-w64-i686-clang</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-Tester un projet Qt sous MSYS2"><a class="Link9" href="#Interface Homme-Machine avec Qt">Tester un projet Qt sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Éditer le programme (main.cpp)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Éditer le fichier projet (GProject.pro)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">TEMPLATE = app
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
    $$PWD/main.cpp \</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">qmake
make</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">./bin/rdcpp.exe</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_test.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_test.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-Créer une fenêtre personnalisée"><a class="Link9" href="#Interface Homme-Machine avec Qt">Créer une fenêtre personnalisée</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_custom_widget.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_custom_widget.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-Créer un bouton avec un texte"><a class="Link9" href="#Interface Homme-Machine avec Qt">Créer un bouton avec un texte</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qt_button.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_qt_button.gif"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-Créer un bouton avec un texte et une icône"><a class="Link9" href="#Interface Homme-Machine avec Qt">Créer un bouton avec un texte et une icône</a></h2><br><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-Créer un bouton avec une icône sans texte"><a class="Link9" href="#Interface Homme-Machine avec Qt">Créer un bouton avec une icône sans texte</a></h2><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Création de pitogrammes avec QtAwesome"><a class="Link3" href="#">Création de pitogrammes avec QtAwesome</a></h1><div class="Body3"><br><b>QtAwesome</b> est une bibliothèque simple qui peut être utilisée pour ajouter des icônes Font Awesome à votre application Qt. Bien que le nom soit QtAwesome et qu'il soit actuellement très basé sur Font Awesome, vous pouvez utiliser toutes les autres polices d'icônes / glyphes de votre choix. La classe peut également être utilisée pour gérer vos propres icônes dessinées par code dynamique, en ajoutant des peintres d'icônes nommés. Cette bibliothèque a été mise à jour vers la version 4.7.0 de Font Awesome <br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621011676563"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621011676563");</script></div><br><h2 class="Title7 GTitle2" id="Création de pitogrammes avec QtAwesome-Installer l'environnement QtAwesome sous MSYS2"><a class="Link9" href="#Création de pitogrammes avec QtAwesome">Installer l'environnement QtAwesome sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Télécharger QtAwesome</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/gamecreature/QtAwesome">https://github.com/gamecreature/QtAwesome</a><br><br><b>QtAwesome-master.zip</b><br><br><h3 class="Title8 GTitle3">Extraire QtAwesome</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">QtAwesome-master.zip
Clic droit -&gt; Extraire vers QtAwesome-master\</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création de pitogrammes avec QtAwesome-Tester un projet QtAwesome sous MSYS2"><a class="Link9" href="#Création de pitogrammes avec QtAwesome">Tester un projet QtAwesome sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Observer la structure du projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">ReadyTest/QtAwesome/
|___ main.cpp
|___ QtAwesome.cpp  
|___ QtAwesome.h 
|___ QtAwesomeAnim.cpp
|___ QtAwesomeAnim.h
|___ QtAwesome.qrc
|___ fonts/fontawesome-4.7.0.ttf
|___ GProject.pro</xmp></pre></div><br><h3 class="Title8 GTitle3">Editer le programme (main.cpp)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Définir le fichier projet (GProjet.pro)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">TEMPLATE = app
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
    $$PWD/QtAwesome.qrc \</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">qmake
make</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./release/rdcpp</xmp></pre></div><br><h3 class="Title8 GTitle3">Résulat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_test.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_test.png"></div><br><h2 class="Title7 GTitle2" id="Création de pitogrammes avec QtAwesome-Créer un pictogramme à partir de son id"><a class="Link9" href="#Création de pitogrammes avec QtAwesome">Créer un pictogramme à partir de son id</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_id.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_id.png"></div><br><h2 class="Title7 GTitle2" id="Création de pitogrammes avec QtAwesome-Créer un pictogramme à partir de son nom"><a class="Link9" href="#Création de pitogrammes avec QtAwesome">Créer un pictogramme à partir de son nom</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_name.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_name.png"></div><br><h2 class="Title7 GTitle2" id="Création de pitogrammes avec QtAwesome-Créer un pictogramme à partir de son caractère"><a class="Link9" href="#Création de pitogrammes avec QtAwesome">Créer un pictogramme à partir de son caractère</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_char.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_char.png"></div><br><h2 class="Title7 GTitle2" id="Création de pitogrammes avec QtAwesome-Définir la couleur d'un pictogramme"><a class="Link9" href="#Création de pitogrammes avec QtAwesome">Définir la couleur d'un pictogramme</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_color.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_color.png"></div><br><h2 class="Title7 GTitle2" id="Création de pitogrammes avec QtAwesome-Définir la couleur par défaut des pictogrammes"><a class="Link9" href="#Création de pitogrammes avec QtAwesome">Définir la couleur par défaut des pictogrammes</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_default.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_default.png"></div><br><h2 class="Title7 GTitle2" id="Création de pitogrammes avec QtAwesome-Créer un pictogramme animé"><a class="Link9" href="#Création de pitogrammes avec QtAwesome">Créer un pictogramme animé</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_anim.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_anim.gif"></div><br><h2 class="Title7 GTitle2" id="Création de pitogrammes avec QtAwesome-Basculer d'un pictogramme à l'autre entre deux états"><a class="Link9" href="#Création de pitogrammes avec QtAwesome">Basculer d'un pictogramme à l'autre entre deux états</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_toogle.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_toogle.gif"></div><br><h2 class="Title7 GTitle2" id="Création de pitogrammes avec QtAwesome-Créer un pictogramme personnalisé"><a class="Link9" href="#Création de pitogrammes avec QtAwesome">Créer un pictogramme personnalisé</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
#include &lt;QtAwesome.h&gt;
//================================================
class DuplicateIconPainter : public QtAwesomeIconPainter {
public:
    //================================================
    virtual void paint(QtAwesome* awesome, QPainter* painter, const QRect& rectIn, QIcon::Mode mode, QIcon::State state, const QVariantMap& options) {
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_custom.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_custom.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tracé de courbes 2D avec QCustomPlot"><a class="Link3" href="#">Tracé de courbes 2D avec QCustomPlot</a></h1><div class="Body3"><br><b>QCustomPlot </b>est un widget Qt en C++ pour le traçage et la visualisation des données 2D. Il n'a pas d'autres dépendances et est bien documenté. Il se concentre sur la création de tracés 2D, de graphiques et offre de hautes performances pour les applications de visualisation de données en temps réel. Il permet d'exporter les graphes vers divers formats de fichiers tels que les fichiers PDF vectorisés et les images pixelisées comme PNG, JPG et BMP. QCustomPlot est la solution idéale pour afficher des données en temps réel dans une application ainsi que pour produire des tracés 2D de haute qualité pour d'autres médias.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620349301251"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620349301251");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/b_qcustomplot_demo.gif" alt="/Tutoriels/Software_Development/Cpp/img/b_qcustomplot_demo.gif"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-Installer l'environnement QCustomPlot sous MSYS"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">Installer l'environnement QCustomPlot sous MSYS</a></h2><br><h3 class="Title8 GTitle3">Télécharger QCustomPlot</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.qcustomplot.com/index.php/download">https://www.qcustomplot.com/index.php/download</a><br><br><b>QCustomPlot.tar.gz</b><br><br><h3 class="Title8 GTitle3">Extraire QCustomPlot</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">QCustomPlot.tar.gz
Clic droit -&gt; Extraire vers QCustomPlot\</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-Tester un projet QCustomPlot sous MSYS2"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">Tester un projet QCustomPlot sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Observer la structure du projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">ReadyTest/QCustomPlot/
|___ main.cpp
|___ qcustomplot.h
|___ qcustomplot.cpp
|___ GProject.pro</xmp></pre></div><br><h3 class="Title8 GTitle3">Editer le programme (main.cpp)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Editer le fichier projet (GProject.pro)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">TEMPLATE = app
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
    $$PWD/qcustomplot.h \</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">qmake
make</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">./release/rdcpp.exe</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_test.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Vision par Ordinateur avec OpenCV"><a class="Link3" href="#">Vision par Ordinateur avec OpenCV</a></h1><div class="Body3"><br><b>OpenCV </b>est une bibliothèque graphique libre, spécialisée dans le traitement d'images en temps réel. La bibliothèque OpenCV met à disposition de nombreuses fonctionnalités très diversifiées permettant de créer des programmes en partant des données brutes pour aller jusqu'à la création d'interfaces graphiques basiques. OpenCV propose la plupart des opérations classiques en traitement bas niveau des images : lecture, écriture et affichage d’une image ; calcul de l'histogramme des niveaux de gris ou d'histogrammes couleurs ; lissage, filtrage ; seuillage d'image (méthode d'Otsu, seuillage adaptatif) ; segmentation (composantes connexes, GrabCut) ; morphologie mathématique.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617840709282"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617840709282");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/b_opencv.png" alt="/Tutoriels/Software_Development/Cpp/img/b_opencv.png"></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-Installer l'environnement OpenCV sous MSYS2"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">Installer l'environnement OpenCV sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Télécharger OpenCV</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-opencv</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-Tester un projet OpenCV sous MSYS2"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">Tester un projet OpenCV sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Éditer le programme (main.cpp)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;opencv2/opencv.hpp&gt;
//===============================================
int main(int argc, char** argv) {
    cv::Mat lImg = cv::imread("image.png");
    cv::namedWindow("ReadyApp");
    cv::imshow("ReadyApp", lImg);
    cv::waitKey(0);
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -std=gnu++11  -c ./main.cpp -o ./main.o \
-I/mingw32/include/opencv4</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -std=gnu++11 -o ./rdcpp.exe ./main.o \
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
-lopencv_xphoto -lopencv_photo -lopencv_imgproc -lopencv_core</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcpp.exe</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_opencv_test.png" alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Calcul scientifique avec GSL"><a class="Link3" href="#">Calcul scientifique avec GSL</a></h1><div class="Body3"><br><b>GSL </b>est une bibliothèque de calcul scientifique comportant une collection de routines pour le calcul numérique. Les routines ont été écrites à partir de zéro en C et présentent une interface de programmation d'applications (API) moderne pour les programmeurs C, permettant d'écrire des wrappers pour des langages de très haut niveau. Le code source est distribué sous la licence publique générale GNU.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617832634274"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617832634274");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/b_gsl.png" alt="/Tutoriels/Software_Development/Cpp/img/b_gsl.png"></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-Installer l'environnement GSL sous MSYS2"><a class="Link9" href="#Calcul scientifique avec GSL">Installer l'environnement GSL sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Installer GSL</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-gsl</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-Tester un projet GSL sous MSYS2"><a class="Link9" href="#Calcul scientifique avec GSL">Tester un projet GSL sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Editer le programme (main.cpp)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;gsl/gsl_sf_bessel.h&gt;
//===============================================
int main(int argc, char** argv) {
    double x = 5.0;
    double y = gsl_sf_bessel_J0(x);
    printf ("J0(%g) = %.18e\n", x, y);
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -std=gnu++11 -c main.cpp -o main.o -I/mingw32/include
g++ -o rdcpp.exe main.o -lgsl -lgslcblas -lm</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcpp.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">J0(5) = -1.775967713143382920e-01</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-Résoudre une équation différentielle d'ordre 2"><a class="Link9" href="#Calcul scientifique avec GSL">Résoudre une équation différentielle d'ordre 2</a></h2><br><h3 class="Title8 GTitle3">Définir l'équation différentielle</h3><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
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
$$</div></div><br><h3 class="Title8 GTitle3">Editer le programme (main.cpp)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
    gsl_matrix * m = &dfdy_mat.matrix;
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
    gsl_odeiv2_system sys = {onFunction, onJacobian, 2, &mu};

    gsl_odeiv2_driver * d =
    gsl_odeiv2_driver_alloc_y_new (&sys, gsl_odeiv2_step_rk8pd, 1e-6, 1e-6, 0.0);
    int i;
    double t = 0.0, t1 = 100.0;
    double y[2] = { 1.0, 0.0 };
    QVector&lt;double&gt; x(100), y1(100), y2(100);
    double xmin = 0, xmax = 0, ymin = 0, ymax = 0;
    int lOneOnly = true;
    
    for (i = 1; i &lt;= 100; i++) {
        double ti = i * t1 / 100.0;
        int status = gsl_odeiv2_driver_apply (d, &t, ti, y);

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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_ode_2.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_ode_2.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="C++ Builder"><a class="Link3" href="#">C++ Builder</a></h1><div class="Body3"><br><b>C++Builder</b> est un logiciel de développement rapide d'applications (RAD) conçu par Borland qui reprend les mêmes concepts, la même interface et la même bibliothèque que Delphi en utilisant le langage C++. Il permet de créer rapidement des applications Win32, Win64, MacOS, iOS, Android, ainsi qu'une interface graphique avec son éditeur de ressources. Utilisant en interne le compilateur Clang, ll est compatible avec la version de norme ISO C++ C++17. <br><br><h2 class="Title7 GTitle2" id="C++ Builder-Installer l'environnement C++Builder sous Windows"><a class="Link9" href="#C++ Builder">Installer l'environnement C++Builder sous Windows</a></h2><br><h3 class="Title8 GTitle3">Télécharger C++Builder</h3><br><b>RADStudio-1042-esd-4203.exe</b><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.embarcadero.com/fr/products/cbuilder/start-for-free">https://www.embarcadero.com/fr/products/cbuilder/start-for-free</a><br><br><h3 class="Title8 GTitle3">Installer C++Builder</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">RADStudio-1042-esd-4203.exe
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
Démarrer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="C++ Builder-Tester C++Builder sous Windows"><a class="Link9" href="#C++ Builder">Tester C++Builder sous Windows</a></h2><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Notes et références"><a class="Link3" href="#">Notes et références</a></h1><div class="Body3"><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://cs.stanford.edu/people/eroberts/courses/cs106b/materials/cppdoc/">https://cs.stanford.edu/people/eroberts/courses/cs106b/materials/cppdoc/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://vector-of-bool.github.io/2019/03/10/modules-1.html">https://vector-of-bool.github.io/2019/03/10/modules-1.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://gcc.gnu.org/wiki/cxx-modules">https://gcc.gnu.org/wiki/cxx-modules</a><br><br></div></div></div></div><br>