<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C++<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C++</b> est un langage de programmation compilé permettant la programmation sous de multiples paradigmes (comme la programmation procédurale, orientée objet ou générique). Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/b_cpp.png" alt="/Tutoriels/Software_Development/Cpp/img/b_cpp.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616558777155"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616558777155");</script></div><br><h2 class="Title7 GTitle2" id="Installation-Installer l'environnement C++ sous MSYS2"><a class="Link9" href="#Installation">Installer l'environnement C++ sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Télécharger MSYS2</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://repo.msys2.org/distrib/x86_64/msys2-x86_64-20210228.exe">https://repo.msys2.org/distrib/x86_64/msys2-x86_64-20210228.exe</a><br><br><h3 class="Title8 GTitle3">Installer MSYS2</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">msys2-x86_64-20210228.exe
Suivant
Dossier d'installation -> C:\msys64
Suivant
Raccourci du menu Démarrer -> MSYS2 64bit
Suivant
Suivant
Terminer</xmp></pre></div><br><h3 class="Title8 GTitle3">Démarrer MSYS2</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
MSYS2</xmp></pre></div><br><h3 class="Title8 GTitle3">Mettre à jour les packages MSYS2</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -Syu</xmp></pre></div><br><h3 class="Title8 GTitle3">Installer le package (make)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm make</xmp></pre></div><br><h3 class="Title8 GTitle3">Installer le package (gcc)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm gcc</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616682650861"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616682650861");</script></div><br><h2 class="Title7 GTitle2" id="Tests-Tester un projet C++ sous MSYS2"><a class="Link9" href="#Tests">Tester un projet C++ sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Éditer le programme (main.cpp)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
executer la methode</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation orientée objet"><a class="Link3" href="#">Programmation orientée objet</a></h1><div class="Body3"><br>La <b>programmation orientée objet</b> (POO) est un paradigme de programmation informatique qui consiste en la définition et l'interaction de briques logicielles appelées objets ; un objet représente un concept, une idée ou toute entité du monde physique, comme une voiture, une personne ou encore une page d'un livre. Il possède une structure interne et un comportement, et il sait interagir avec ses pairs. Il s'agit donc de représenter ces objets et leurs relations ; l'interaction entre les objets via leurs relations permet de concevoir et réaliser les fonctionnalités attendues, de mieux résoudre le ou les problèmes. Dès lors, l'étape de modélisation revêt une importance majeure et nécessaire pour la POO. C'est elle qui permet de transcrire les éléments du réel sous forme virtuelle. La programmation orientée objet consiste à utiliser des techniques de programmation pour mettre en œuvre une conception basée sur les objets. Celle-ci peut être élaborée en utilisant des méthodologies de développement logiciel objet, dont la plus connue est le processus unifié et exprimée à l'aide de langages de modélisation tels que le Unified Modeling Language (UML).<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620957525148"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620957525148");</script></div><br><h2 class="Title7 GTitle2" id="Programmation orientée objet-Créer une classe"><a class="Link9" href="#Programmation orientée objet">Créer une classe</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
Personne[coef] : 3.14</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patrons de conception"><a class="Link3" href="#">Patrons de conception</a></h1><div class="Body3"><br>Un <b>patron de conception</b> (design pattern) est un arrangement caractéristique de modules, reconnu comme bonne pratique en réponse à un problème de conception d'un logiciel. Il décrit une solution standard, utilisable dans la conception de différents logiciels. Un patron de conception est issu de l'expérience des concepteurs de logiciels. Il décrit un arrangement récurrent de rôles et d'actions joués par des modules d'un logiciel, et le nom du patron sert de vocabulaire commun entre le concepteur et le programmeur. D'une manière analogue à un motif de conception en architecture, le patron de conception décrit les grandes lignes d'une solution, qui peuvent ensuite être modifiées et adaptées en fonction des besoins.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620957910286"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620957910286");</script></div><br><h2 class="Title7 GTitle2" id="Patrons de conception-Créer un patron singleton"><a class="Link9" href="#Patrons de conception">Créer un patron singleton</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
sauvegarder les donnees</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patrons de conception-Créer un manager de données"><a class="Link9" href="#Patrons de conception">Créer un manager de données</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GManager.h"
//===============================================
int main(int argc, char** argv) {
    sGApp* lApp = GManager::Instance()-&gt;getData()-&gt;app;
    printf("lApp-&gt;app_name : %s\n", lApp-&gt;app_name.c_str());
    printf("lApp-&gt;win_width : %d\n", lApp-&gt;win_width);
    printf("lApp-&gt;win_height : %d\n", lApp-&gt;win_height);
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GManager.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GManager.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">lApp-&gt;app_name : ReadyDev
lApp-&gt;win_width : 640
lApp-&gt;win_height : 48</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Le <b>système d'administration</b> que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621005046333"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621005046333");</script></div><br><h2 class="Title7 GTitle2" id="Système d'administration-main.cpp"><a class="Link9" href="#Système d'administration">main.cpp</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_admin_system.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_admin_system.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface Homme-Machine avec Qt"><a class="Link3" href="#">Interface Homme-Machine avec Qt</a></h1><div class="Body3"><br><b>Qt </b>est une bibliothèque de création d'interface homme-machine.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617838385077"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617838385077");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/b_qt.png" alt="/Tutoriels/Software_Development/Cpp/img/b_qt.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-Installer l'environnement Qt sous MSYS2"><a class="Link9" href="#Interface Homme-Machine avec Qt">Installer l'environnement Qt sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Installer Qt</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-qt5
pacman -S --needed --noconfirm mingw-w64-i686-qt-creator
pacman -S --needed --noconfirm mingw-w64-i686-gdb
pacman -S --needed --noconfirm mingw-w64-i686-cmake
pacman -S --needed --noconfirm mingw-w64-i686-clang</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-Tester&nbsp; un projet Qt sous MSYS2"><a class="Link9" href="#Interface Homme-Machine avec Qt">Tester&nbsp; un projet Qt sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Éditer le programme (main.cpp)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Éditer le fichier projet (GProject.pro)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="prolog">TEMPLATE = app
TARGET = $$(GPROJECT_EXE)
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += console release gnu++11
QT += widgets

QMAKE_CXXFLAGS +=\
    -Wno-unused-parameter \
    -Wno-deprecated-declarations \</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">qmake
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
Clic droit -&gt; Extraire vers QtAwesome-master/</xmp></pre></div><br><h3 class="Title8 GTitle3">Observer la structure du dossier</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">QtAwesome-master
├───QtAwesome
│   └───fonts
└───QtAwesomeSample</xmp></pre></div><br><h3 class="Title8 GTitle3">Créer une librairie statique</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">cd QtAwesome-master/QtAwesome
qmake
make</xmp></pre></div><br><h3 class="Title8 GTitle3">Vérifier la librairie statique</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">release/libQtAwesome.a</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création de pitogrammes avec QtAwesome-Tester un projet QtAwesome sous MSYS2"><a class="Link9" href="#Création de pitogrammes avec QtAwesome">Tester un projet QtAwesome sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Editer le programme (main.cpp)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Definir le fichier projet (GProjet.pro)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">TEMPLATE = app
TARGET = rdcpp
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += console release gnu++11
QT += widgets

INCLUDEPATH +=\
    $$PWD \
    /mingw32/include

INCLUDEPATH +=\
    $$PWD

SOURCES +=\
    $$PWD/main.cpp

HEADERS +=\
    $$PWD/QtAwesome.h \   
    $$PWD/QtAwesomeAnim.h

LIBS +=\
    -L$$PWD -lQtAwesome</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">qmake
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
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_toogle.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_qtawesome_toogle.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tracé de courbes 2D avec QCustomPlot"><a class="Link3" href="#">Tracé de courbes 2D avec QCustomPlot</a></h1><div class="Body3"><br><b>QCustomPlot </b>est un widget Qt en C++ pour le traçage et la visualisation des données 2D. Il n'a pas d'autres dépendances et est bien documenté. Il se concentre sur la création de tracés 2D, de graphiques et offre de hautes performances pour les applications de visualisation de données en temps réel. Il permet d'exporter les graphes vers divers formats de fichiers tels que les fichiers PDF vectorisés et les images pixelisées comme PNG, JPG et BMP. QCustomPlot est la solution idéale pour afficher des données en temps réel dans une application ainsi que pour produire des tracés 2D de haute qualité pour d'autres médias.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620349301251"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620349301251");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/b_qcustomplot_demo.gif" alt="/Tutoriels/Software_Development/Cpp/img/b_qcustomplot_demo.gif"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes avec QCustomPlot-1 - Installation"><a class="Link9" href="#Tracé de courbes avec QCustomPlot">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-1.1 - Installation sous Windows"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-1.1.1 - Installation sous MSYS"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">1.1.1 - Installation sous MSYS</a></h2><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-1.1.1.1 - Télécharger QCustomPlot"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">1.1.1.1 - Télécharger QCustomPlot</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.qcustomplot.com/index.php/download">https://www.qcustomplot.com/index.php/download</a><br><br><b>QCustomPlot.tar.gz</b><br><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-1.1.1.2 - Extraire QCustomPlot"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">1.1.1.2 - Extraire QCustomPlot</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Extraire -&gt; QCustomPlot.tar.gz</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-2 - Tests"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-2.1 - Test sous Windows"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-2.1.1 - Test sous MSYS"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">2.1.1 - Test sous MSYS</a></h2><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-2.1.1.1 - Structure du projet"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">2.1.1.1 - Structure du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">ReadyTest/qcustomplot/
|___ main.cpp
|___ qcustomplot.h
|___ qcustomplot.cpp</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-2.1.1.2 - Programme principal"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">2.1.1.2 - Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;QApplication&gt;
#include &lt;qcustomplot.h&gt;
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    
    // on cree les donnees
    QVector&lt;double&gt; x(101), y(101); 
    for (int i= 0; i &lt; 101; i++) {
        x[i] = i/50.0 - 1; 
        y[i] = x[i]*x[i];  
    }
    
    // on cree le gestionnaire de trace
    QCustomPlot* lCustomPlot = new QCustomPlot;
    // on ajoute un graphe
    lCustomPlot-&gt;addGraph();
    // on ajoute des donnees dans le graphe
    lCustomPlot-&gt;graph(0)-&gt;setData(x, y);
    // on definit le label de l'axe (x)
    lCustomPlot-&gt;xAxis-&gt;setLabel("x");
    // on definit le label de l'axe (y)
    lCustomPlot-&gt;yAxis-&gt;setLabel("y");
    // on definit les limites de l'axe (x)
    lCustomPlot-&gt;xAxis-&gt;setRange(-1, 1);
    // on definit les limites de l'axe (y)
    lCustomPlot-&gt;yAxis-&gt;setRange(0, 1);
    
    lCustomPlot-&gt;show();
    lCustomPlot-&gt;setWindowTitle("ReadyApp");
    lCustomPlot-&gt;resize(400, 200);
    
    return app.exec();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-2.1.1.3 - Fichier projet"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">2.1.1.3 - Fichier projet</a></h2><br><h3 class="Title8 GTitle3">GProject.pro</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">TEMPLATE = app
TARGET = rdcpp
QT += widgets printsupport
CONFIG += release console gnu++11

INCLUDEPATH +=\
    $$PWD

SOURCES +=\
    main.cpp \
    qcustomplot.cpp

HEADERS +=\
    qcustomplot.h</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-2.1.1.4 - Compilation du projet"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">2.1.1.4 - Compilation du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">qmake
make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-2.1.1.5 - Exécuter le projet"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">2.1.1.5 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">./release/rdcpp.exe</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_test.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_test.png"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3 - Modules"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3 - Modules</a></h2><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.1 - QCustomPlot"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.1 - QCustomPlot</a></h2><br><b>QCustomPlot </b>est la classe centrale de la bibliothèque. C'est le QWidget qui affiche le tracé et interagit avec l'utilisateur.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_qcustomplot.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_qcustomplot.png"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.1.1 - Créer un objet QCustomPlot"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.1.1 - Créer un objet QCustomPlot</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot = new QCustomPlot;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.1.2 - Ajouter un graphe"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.1.2 - Ajouter un graphe</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;addGraph();</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.1.3 - Mettre à jour les graphes"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.1.3 - Mettre à jour les graphes</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;replot();</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.1.4 - Supprimer tous les graphes"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.1.4 - Supprimer tous les graphes</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;clearGraphs();</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.1.5 - Définir les intéractions avec l'afficheur"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.1.5 - Définir les intéractions avec l'afficheur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on definit les intercations avec le graphe
// on active le deplacement des graphes (iRangeDrag)
// on active le zoom des graphes (iRangeZoom)
// on active la selection des graphex (iRangeZoom)
m_plot-&gt;setInteractions(QCP::iRangeDrag | QCP::iRangeZoom | QCP::iSelectPlottables);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.1.5.1 - Zoomer les graphes de l'afficheur"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.1.5.1 - Zoomer les graphes de l'afficheur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;setInteraction(QCP::iRangeZoom, true);</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_zoom.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_zoom.gif"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.1.5.2 - Déplacer les graphes de l'afficheur"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.1.5.2 - Déplacer les graphes de l'afficheur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;setInteraction(QCP::iRangeDrag, true);</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_drag.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_drag.gif"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.1.5.3 - Sélectionner les graphes de l'afficheur"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.1.5.3 - Sélectionner les graphes de l'afficheur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;setInteraction(QCP::iRangeSelectPlottables, true);</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_select.gif" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_select.gif"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.2 - QCPGraph"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.2 - QCPGraph</a></h2><br><b>QCPGraph </b>représente un grahe dans l'afficheur.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_qcpgraph.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_qcpgraph.png"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.2.1 - Créer les données d'un graphe"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.2.1 - Créer les données d'un graphe</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">QVector&lt;double&gt; x(101), y(101); 

for (int i= 0; i &lt; 101; i++) {
    x[i] = i/50.0 - 1; 
    y[i] = x[i]*x[i];  
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.2.2 - Initialiser les données d'un graphe"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.2.2 - Initialiser les données d'un graphe</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;graph(0)-&gt;setData(x, y);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3 - QCPAxis"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3 - QCPAxis</a></h2><br><b>QCPAxis </b>représente un axe dans l'afficheur.<br><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.1 - xAxis"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.1 - xAxis</a></h2><br><b>xAxis </b>représente l'axe (x) dans l'afficheur.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_xaxis.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_xaxis.png"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.1.1 - Définir le label de l'axe (x)"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.1.1 - Définir le label de l'axe (x)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;xAxis-&gt;setLabel("x");</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.1.2 - Définir les limites de l'axe (x)"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.1.2 - Définir les limites de l'axe (x)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;xAxis-&gt;setRange(-1, 1);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.2 - yAxis"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.2 - yAxis</a></h2><br><b>yAxis </b>représente l'axe (y) dans l'afficheur.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_yaxis.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_yaxis.png"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.2.1 - Définir le label de l'axe (y)"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.2.1 - Définir le label de l'axe (y)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;yAxis-&gt;setLabel("y");</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.2.2 - Définir les limites de l'axe (y)"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.2.2 - Définir les limites de l'axe (y)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;yAxis-&gt;setRange(0, 1);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.3 - xAxis2"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.3 - xAxis2</a></h2><br><b>xAxis2 </b>représente l'axe (x2) dans l'afficheur.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_xaxis2.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_xaxis2.png"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.3.1 - Afficher l'axe (x2)"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.3.1 - Afficher l'axe (x2)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;xAxis2-&gt;setVisible(true);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.3.2 - Afficher les ticks de l'axe (x2)"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.3.2 - Afficher les ticks de l'axe (x2)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;xAxis2-&gt;setTickLabels(true);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.3.3 - Connecter l'axe (x) à l'axe (x2)"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.3.3 - Connecter l'axe (x) à l'axe (x2)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">connect(m_plot-&gt;xAxis, SIGNAL(rangeChanged(QCPRange)), m_plot-&gt;xAxis2, SLOT(setRange(QCPRange)));</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.4 - yAxis2"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.4 - yAxis2</a></h2><br><b>yAxis2 </b>représente l'axe (y2) dans l'afficheur.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_yaxis2.png" alt="/Tutoriels/Software_Development/Cpp/img/i_qcustomplot_yaxis2.png"></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.4.1 - Afficher l'axe (y2)"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.4.1 - Afficher l'axe (y2)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;yAxis2-&gt;setVisible(true);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.4.2 - Afficher les ticks de l'axe (y2)"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.4.2 - Afficher les ticks de l'axe (y2)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_plot-&gt;yAxis2-&gt;setTickLabels(true);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracé de courbes 2D avec QCustomPlot-3.3.4.3 - Connecter l'axe (y) à l'axe (y2)"><a class="Link9" href="#Tracé de courbes 2D avec QCustomPlot">3.3.4.3 - Connecter l'axe (y) à l'axe (y2)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">connect(m_plot-&gt;yAxis, SIGNAL(rangeChanged(QCPRange)), m_plot-&gt;yAxis2, SLOT(setRange(QCPRange)));</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Vision par Ordinateur avec OpenCV"><a class="Link3" href="#">Vision par Ordinateur avec OpenCV</a></h1><div class="Body3"><br><b>OpenCV </b>est une bibliothèque de vision par ordinateur.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617840709282"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617840709282");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/b_opencv.png" alt="/Tutoriels/Software_Development/Cpp/img/b_opencv.png"></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1 - Installation"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1 - Installation</a></h2><br>Installer l'environnement OpenCV pour C++.<br><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1.1 - Installation sous Windows"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1.1.1 - Installation sous MSYS2"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1.1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-1.1.1.1 - Installer OpenCV"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">1.1.1.1 - Installer OpenCV</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-opencv</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2 - Tests"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2 - Tests</a></h2><br>Créer un projet OpenCV en C++.<br><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2.1 - Test sous Windows"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2.1.1 - Test sous MSYS2"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2.1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2.1.1.1 - Éditer le programme"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2.1.1.1 - Éditer le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;opencv2/opencv.hpp&gt;
//===============================================
int main(int argc, char** argv) {
    cv::Mat lImg = cv::imread("image.png");
    cv::namedWindow("ReadyApp");
    cv::imshow("ReadyApp", lImg);
    cv::waitKey(0);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2.1.1.2 - Compiler le projet"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2.1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -std=gnu++11  -c ./main.cpp -o ./main.o \
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
-lopencv_xphoto -lopencv_photo -lopencv_imgproc -lopencv_core</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-2.1.1.3 - Exécuter le projet"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">2.1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcpp.exe</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_opencv_test.png" alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_test.png"></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-3 - Opérations"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">3 - Opérations</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-3.1 - Images"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">3.1 - Images</a></h2><br>Opérations sur les images.<br><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-3.1.1 - Affichage d'une image"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">3.1.1 - Affichage d'une image</a></h2><br><h3 class="Title8 GTitle3">GOpenCVPc.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on charge l'image
cv::Mat lImg = cv::imread(lFilename, -1);
// on cree la fenetre d'affichage
cv::namedWindow(lApp-&gt;app_name, cv::WINDOW_AUTOSIZE);
// on affiche l'image
cv::imshow(lApp-&gt;app_name, lImg );
// on attend l'appui d'une touche indefinitivement
cv::waitKey(0);
// on ferme toutes les fenetres
cv::destroyAllWindows();</xmp><br></pre><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_opencv_image_load.png" alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_image_load.png"></div><pre class="Code2"><br></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-3.2 - Vidéos"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">3.2 - Vidéos</a></h2><br>Opérations sur les vidéos.<br><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-3.2.1 - Lecture d'une vidéo"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">3.2.1 - Lecture d'une vidéo</a></h2><br><h3 class="Title8 GTitle3">GOpenCVPc.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on cree la fenetre d'affichage
cv::namedWindow(lApp-&gt;app_name, cv::WINDOW_AUTOSIZE);
// on cree l'objet capture video
cv::VideoCapture lCap;
// on ouvre la video
lCap.open(lFilename);
// on cree la matrice d'image
cv::Mat lImg;

while(1) {
    // on lire l'image video
    lCap &gt;&gt; lImg;
    if(lImg.empty()) {break;}
    // on affiche l'image video
    cv::imshow(lApp-&gt;app_name, lImg);
    // on attend l'appui d'une touche pendant (33ms)
    char lKey = cv::waitKey(33);
    if(lKey != -1 ) {break;}
}</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/i_opencv_video_load.png" alt="/Tutoriels/Software_Development/Cpp/img/i_opencv_video_load.png"></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-4 - Modules"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">4 - Modules</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-4.1 - CommandLineParser"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">4.1 - CommandLineParser</a></h2><br>CommandLineParser est un analyseur de ligne de commande.<br><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-4.1.1 - Analyse d'une ligne de ommande"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">4.1.1 - Analyse d'une ligne de ommande</a></h2><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-4.1.1.1 - Programme principal"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">4.1.1.1 - Programme principal</a></h2><br><h3 class="Title8 GTitle3">GOpenCVPc.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on definit les arguments en ligne de commande
// syntaxe  : "{arg_1}{...}{arg_i}{...}{arg_n}"
// arg_i    : nom_i | defaut_i | desc_i
// nom_i    : mot_i (pour argument long) ou lettre_i (pour argument court)
// defaut_i : valeur par defaut (peut etre vide)
// desc_i   : description (peut etre vide)
// nom_i    : argument obligatoire si (@nom_i)
// nom_i    : argument optionnel   si (nom_i)
const cv::String lKeys =
"{help h usage ? |      | affichier le message d'aide }"
"{@image1        |      | definir l'image 1 pour la comparaison }"
"{@image2        |&lt;none&gt;| definir l'image 2 pour la comparaison }"
"{@repeat        |1     | definir le nombre de repetitions }"
"{path           |.     | definir le repertoire du fichier de sortie }"
"{fps            |25    | definir le fps pour la video de sortie }"
"{N count        |100   | definir le nombre d'objets a compter }"
"{ts timestamp   |      | utiliser le timestamp }"
;

// on cree l'analyseur de ligne de commande
cv::CommandLineParser lParser(argc, argv, lKeys);
// on definit la description de l'application
lParser.about("ReayApp v1.0.0");

// on verifie la presence de l'option (help)
if (lParser.has("help")) {
    // on affiche le message d'aide si l'option (help) est present
    lParser.printMessage(); 
    return;
}

// on recupere le nombre d'objets (N : entier)
int N = lParser.get&lt;int&gt;("N");
// on recupere le fps (fps : reel)
double fps = lParser.get&lt;double&gt;("fps");
// on recupere le chemin du repertoire de sortie (path : chaine)
cv::String path = lParser.get&lt;cv::String&gt;("path");
// on recupere l'utilisation du timestamp (ts : booleen)
bool use_time_stamp = lParser.has("timestamp");
// on recupere le chemin de l'image 1 (image1 : chaine)
cv::String img1 = lParser.get&lt;cv::String&gt;(0);
// on recupere le chemin de l'image 2 (image2 : chaine)
cv::String img2 = lParser.get&lt;cv::String&gt;(1);
// on recupere le nombre de repetitions (repeat : entier)
int repeat = lParser.get&lt;int&gt;(2);

//on affiche les arguments
printf("%-40s : %d\n", "Nombre d'objets[N]", N);
printf("%-40s : %f\n", "Nombre d'image par seconde[fps]", fps);
printf("%-40s : %s\n", "Repertoire de sortie [path]", path.c_str());
printf("%-40s : %d\n", "Utilisation du timestamp [ts]", use_time_stamp);
printf("%-40s : %s\n", "Image 1 [image1]", img1.c_str());
printf("%-40s : %s\n", "Image 2 [image2]", img2.c_str());
printf("%-40s : %d\n", "Nombre de repetition [repeat]", repeat);

// on verifie l'analyseur
if (!lParser.check()){
    // on afficheur le message d'erreur s'il y a erreur
    lParser.printErrors();
    return;
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-4.1.1.2 - Affichage de l'aide"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">4.1.1.2 - Affichage de l'aide</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcpp.exe --help</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">ReayApp v1.0.0
Usage: rdcpp.exe [params] image1 image2 repeat

        -?, -h, --help, --usage (value:true)
                affichier le message d'aide
        -N, --count (value:100)
                definir le nombre d'objets a compter
        --fps (value:25)
                definir le fps pour la video de sortie
        --path (value:.)
                definir le repertoire du fichier de sortie
        --timestamp, --ts
                utiliser le timestamp

        image1 (value:image1.png)
                definir l'image 1 pour la comparaison
        image2 (value:image2.png)
                definir l'image 2 pour la comparaison
        repeat (value:1)
                definir le nombre de repetitions</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-4.1.1.2 - Exécution du programme"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">4.1.1.2 - Exécution du programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcpp.exe image1.png image2.png</xmp></pre></div><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">
Nombre d'objets[N]                       : 100
Nombre d'image par seconde[fps]          : 25.000000
Repertoire de sortie [path]              : .
Utilisation du timestamp [ts]            : 0
Image 1 [image1]                         : image1.png
Image 2 [image2]                         : image2.png
Nombre de repetition [repeat]            : 1</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcpp.exe image1.png image2.png 20</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Nombre d'objets[N]                       : 100
Nombre d'image par seconde[fps]          : 25.000000
Repertoire de sortie [path]              : .
Utilisation du timestamp [ts]            : 0
Image 1 [image1]                         : image1.png
Image 2 [image2]                         : image2.png
Nombre de repetition [repeat]            : 20</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-4.1.1.2 - Utilisation des options"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">4.1.1.2 - Utilisation des options</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcpp.exe image1.png image2.png 20 \
-N=200 --fps=30 --path=ReadyTest/opencv --ts=1</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Nombre d'objets[N]                       : 200
Nombre d'image par seconde[fps]          : 30.000000
Repertoire de sortie [path]              : ReadyTest/opencv
Utilisation du timestamp [ts]            : 1
Image 1 [image1]                         : image1.png
Image 2 [image2]                         : image2.png
Nombre de repetition [repeat]            : 20</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-4.1.1.3 - Affichage en cas d'erreur"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">4.1.1.3 - Affichage en cas d'erreur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcpp.exe image1.png image2.png 20 --count=N200</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Nombre d'objets[N]                       : 0
Nombre d'image par seconde[fps]          : 25.000000
Repertoire de sortie [path]              : .
Utilisation du timestamp [ts]            : 0
Image 1 [image1]                         : image1.png
Image 2 [image2]                         : image2.png
Nombre de repetition [repeat]            : 20

ERRORS:
Parameter 'N': can not convert: [N200] to [int]</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Vision par Ordinateur avec OpenCV-Liens"><a class="Link9" href="#Vision par Ordinateur avec OpenCV">Liens</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://docs.opencv.org/">https://docs.opencv.org/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://docs.opencv.org/4.5.2/">https://docs.opencv.org/4.5.2/</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Calcul scientifique avec GSL"><a class="Link3" href="#">Calcul scientifique avec GSL</a></h1><div class="Body3"><br><b>GSL </b>est une bibliothèque de calcul scientifique comportant une collection de routines pour le calcul numérique. Les routines ont été écrites à partir de zéro en C et présentent une interface de programmation d'applications (API) moderne pour les programmeurs C, permettant d'écrire des wrappers pour des langages de très haut niveau. Le code source est distribué sous la licence publique générale GNU.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617832634274"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617832634274");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Cpp/img/b_gsl.png" alt="/Tutoriels/Software_Development/Cpp/img/b_gsl.png"></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-1 - Installation"><a class="Link9" href="#Calcul scientifique avec GSL">1 - Installation</a></h2><br>Installer l'environnement GSL pour C++.<br><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-1.1 - Installation sous Windows"><a class="Link9" href="#Calcul scientifique avec GSL">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-1.1.1 - Installation sous MSYS2"><a class="Link9" href="#Calcul scientifique avec GSL">1.1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-1.1.1.1 - Installer GSL"><a class="Link9" href="#Calcul scientifique avec GSL">1.1.1.1 - Installer GSL</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-gsl</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2 - Tests"><a class="Link9" href="#Calcul scientifique avec GSL">2 - Tests</a></h2><br>Créer un projet GSL en C++.<br><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2.1 - Test sous Windows"><a class="Link9" href="#Calcul scientifique avec GSL">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2.1.1 - Test sous MSYS2"><a class="Link9" href="#Calcul scientifique avec GSL">2.1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2.1.1.1 - Éditer le programme"><a class="Link9" href="#Calcul scientifique avec GSL">2.1.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;gsl/gsl_sf_bessel.h&gt;
//===============================================
int main(int argc, char** argv) {
    double x = 5.0;
    double y = gsl_sf_bessel_J0(x);
    printf ("J0(%g) = %.18e\n", x, y);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2.1.1.2 - Compiler le programme"><a class="Link9" href="#Calcul scientifique avec GSL">2.1.1.2 - Compiler le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -std=gnu++11 -c main.cpp -o main.o -I/mingw32/include
g++ -o rdcpp.exe main.o -lgsl -lgslcblas -lm</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-2.1.1.3 - Exécuter le programme"><a class="Link9" href="#Calcul scientifique avec GSL">2.1.1.3 - Exécuter le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcpp.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">J0(5) = -1.775967713143382920e-01</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-3 - Modules"><a class="Link9" href="#Calcul scientifique avec GSL">3 - Modules</a></h2><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-3.1 - Équations différentielles ordinaires"><a class="Link9" href="#Calcul scientifique avec GSL">3.1 - Équations différentielles ordinaires</a></h2><br>Résolution numérique d'équations différentielles.<br><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-3.1.1 - gsl_odeiv2_system"><a class="Link9" href="#Calcul scientifique avec GSL">3.1.1 - gsl_odeiv2_system</a></h2><br><b>gsl_odeiv2_system </b>représente la structure de l'équation différentielle avec des paramètres optionnels.<br><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-3.1.1.1 - Définir l'équation différentielle"><a class="Link9" href="#Calcul scientifique avec GSL">3.1.1.1 - Définir l'équation différentielle</a></h2><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
u''(t)+µu'(t)\left(u(t)^2-1\right)+u(t) &amp;=&amp; 0
\end{eqnarray}</div></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-3.1.1.2 - Déterminer les dérivées premières de l'équation différentielle"><a class="Link9" href="#Calcul scientifique avec GSL">3.1.1.2 - Déterminer les dérivées premières de l'équation différentielle</a></h2><br><div class="Formula GFormula1"><div class="Formula2">$$\left \{
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
\right .$$</div></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-3.1.1.3 - Déterminer la Jacobienne de l'équation différentielle"><a class="Link9" href="#Calcul scientifique avec GSL">3.1.1.3 - Déterminer la Jacobienne de l'équation différentielle</a></h2><br><div class="Formula GFormula1"><div class="Formula2">$$
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
$$</div></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-3.1.1.4 - Définir la fonction de calcul des dérivées premières de l'équation différentielle"><a class="Link9" href="#Calcul scientifique avec GSL">3.1.1.4 - Définir la fonction de calcul des dérivées premières de l'équation différentielle</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int GGslQt::onFunction(double t, const double y[], double f[], void *params) {
    // on n'utilise pas le temps (t)
    (void)(t);
    // on recupere le parametre (µ)
    double mu = *(double*)params;
    // on calcule la fonction f0 
    f[0] = y[1];
    // on calcule la fonction f1
    f[1] = -y[0] - mu*y[1]*(y[0]*y[0] - 1);
    return GSL_SUCCESS;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-3.1.1.5 - Définir la fonction de calcul de la Jacobienne de l'équation différentielle"><a class="Link9" href="#Calcul scientifique avec GSL">3.1.1.5 - Définir la fonction de calcul de la Jacobienne de l'équation différentielle</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int GGslQt::onJacobian(double t, const double y[], double *dfdy, double dfdt[], void *params) {
    // on n'utilise pas le parametre (t)
    (void)(t);
    // on recupere le parametre (µ)
    double mu = *(double *)params;
    // on cree une vue matricielle
    // de la jacobienne (dfdt) de dimension (2,2)
    gsl_matrix_view dfdy_mat = gsl_matrix_view_array (dfdy, 2, 2);
    // on recupere le pointeur de la matrice
    gsl_matrix * m = &dfdy_mat.matrix;
    // on calcule la jacobienne j(0, 0)
    gsl_matrix_set (m, 0, 0, 0.0);
    // on calcule la jacobienne j(0, 1)
    gsl_matrix_set (m, 0, 1, 1.0);
    // on calcule la jacobienne j(1, 0)
    gsl_matrix_set (m, 1, 0, -2.0*mu*y[0]*y[1] - 1.0);
    // on calcule la jacobienne j(1, 1)
    gsl_matrix_set (m, 1, 1, -mu*(y[0]*y[0] - 1.0));
    return GSL_SUCCESS;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Calcul scientifique avec GSL-3.1.1.6 - Initialiser la structure de l'équation différentielle"><a class="Link9" href="#Calcul scientifique avec GSL">3.1.1.6 - Initialiser la structure de l'équation différentielle</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on initialse la structure de l'equation differentielle
// avec la fonction de calcul des derivees premieres (onFunction)
// avec la fonction de calcul de la jacobienne (onJacobian)
// avec la dimension de l'equation differentielle (2)
// avec le parametre (µ)
gsl_odeiv2_system sys = {onFunction, onJacobian, 2, &mu};</xmp></pre></div><br></div></div></div></div><br>