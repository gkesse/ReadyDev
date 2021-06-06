<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/b_c.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/b_c.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616843526757"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616843526757");</script></div><br><h2 class="Title7 GTitle2" id="Installation-Installer-l-environnement-C-sous-MSYS2"><a class="Link9" href="#Installation">Installer l'environnement C sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Télécharger MSYS2</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://repo.msys2.org/distrib/x86_64/">https://repo.msys2.org/distrib/x86_64/</a><br><br><b>msys2-x86_64-20210228.exe</b><br><br><h3 class="Title8 GTitle3">Démarrer l'installation</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">msys2-x86_64-20210228.exe
Suivant
Dossier d'installation -&gt; C:\msys64
Suivant
Raccourci du menu Démarrer -&gt; MSYS2 64bit
Suivant
Suivant
Terminer</pre></div></div><br><h3 class="Title8 GTitle3">Démarrer MSYS2</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Windows
MSYS2</pre></div></div><br><h3 class="Title8 GTitle3">Installer les packages</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -Syu
pacman -S --needed --noconfirm make
pacman -S --needed --noconfirm gcc</pre><br></div></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616852257743"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616852257743");</script></div><br><h2 class="Title7 GTitle2" id="Tests-Tester-un-programme-C-sous-MSYS2"><a class="Link9" href="#Tests">Tester un programme C sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Éditer le programme</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    printf("Bonjour tout le monde\n");
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">gcc -std=gnu11 -c ./main.c -o ./main.o </pre></div></div><br><h3 class="Title8 GTitle3">Éditer les liens du projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">gcc -o ./rdc.exe ./main.o </pre></div></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">./rdc.exe</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Bonjour tout le monde</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620691663743"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620691663743");</script></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-commentaire"><a class="Link9" href="#Fondamentaux">Créer un commentaire</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    // voici mon commentaire
    int var = 10;
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-commentaire-a-droite"><a class="Link9" href="#Fondamentaux">Créer un commentaire à droite</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    int var = 10; // voici mon commentaire
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-commentaire-sur-plusieurs-lignes"><a class="Link9" href="#Fondamentaux">Créer un commentaire sur plusieurs lignes</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    /*
    voici mon commentaire
    voici mon commentaire
    voici mon commentaire
    */
    int var = 10;
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Afficher-un-message"><a class="Link9" href="#Fondamentaux">Afficher un message</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    printf("voici mon message\n");
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Formater-l-affichage-d-un-message"><a class="Link9" href="#Fondamentaux">Formater l'affichage d'un message</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    printf("%-20s : %s\n", "Identifiant", "readydev");
    printf("%-20s : %s\n", "Email", "contact@readydev.com");
    printf("%-20s : %d\n", "Code", 1234);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Definir-la-largeur-de-formatage-de-l-affichage-d-un-message"><a class="Link9" href="#Fondamentaux">Définir la largeur de formatage de l'affichage d'un message</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    int lWidth = -20;
    printf("%*s : %s\n", lWidth, "Identifiant", "readydev");
    printf("%*s : %s\n", lWidth, "Email", "contact@readydev.com");
    printf("%*s : %d\n", lWidth, "Code", 1234);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Declarer-une-varibale"><a class="Link9" href="#Fondamentaux">Déclarer une varibale</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    int var;
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Initialiser-une-variable-au-moment-de-sa-declaration"><a class="Link9" href="#Fondamentaux">Initialiser une variable au moment de sa déclaration</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    int var = 10;
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Affecter-une-valeur-a-une-variable"><a class="Link9" href="#Fondamentaux">Affecter une valeur à une variable</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    int var = 10;
    var = 20;
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Afficher-une-variable"><a class="Link9" href="#Fondamentaux">Afficher une variable</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    int var = 10;
    printf("var : %d\n", var);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Saisir-un-entier-au-clavier"><a class="Link9" href="#Fondamentaux">Saisir un entier au clavier</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
//===============================================
int main(int argc, char** argv) {
    int lInt;
    while(1) {
        printf("Saisier un entier : ");
        fflush(stdout);
        scanf("%d", &amp;lInt);
        printf("Int: [%d]\n", lInt);
        if(lInt == -1) {break;}
    }
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Saisir-un-reel-au-clavier"><a class="Link9" href="#Fondamentaux">Saisir un réel au clavier</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
//===============================================
int main(int argc, char** argv) {
    float lFloat;
    while(1) {
        printf("Saisier un reel : ");
        fflush(stdout);
        scanf("%f", &amp;lFloat);
        printf("Float : [%f]\n", lFloat);
        if(lFloat == -1) {break;}
    }
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Saisir-un-mot-au-clavier"><a class="Link9" href="#Fondamentaux">Saisir un mot au clavier</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
//===============================================
int main(int argc, char** argv) {
    char lString[256];
    while(1) {
        printf("Saisier une chaine sans espace : ");
        fflush(stdout);
        scanf("%s", &amp;lString);
        printf("lString : [%s]\n", lString);
        if(!strcmp(lString, "-q")) {break;}
    }
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Saisir-une-chaine-de-caractere-au-clavier"><a class="Link9" href="#Fondamentaux">Saisir une chaîne de caractère au clavier</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
//===============================================
int main(int argc, char** argv) {
    char lBuffer[256];
    while(1) {
        printf("Saisier une chaine : ");
        fflush(stdout);
        fgets(lBuffer, sizeof(lBuffer), stdin);
        lBuffer[strlen(lBuffer) - 1] = 0;
        printf("Donnee : [%s]\n", lBuffer);
        if(!strcmp(lBuffer, "-q")) {break;}
    }
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-if"><a class="Link9" href="#Fondamentaux">Créer une condition if</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    int a = 100;
    int b = 1000;
    if(a &lt; b) {
        printf("Si : on a : a &lt; b\n");
    }
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-if-else"><a class="Link9" href="#Fondamentaux">Créer une condition if else</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    int a = 100;
    int b = 10;
    if(a &lt; b) {
        printf("Si : on a : a &lt; b\n");
    }
    else {
        printf("Sinon : on a : a &gt;= b\n");
    }
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-else-if"><a class="Link9" href="#Fondamentaux">Créer une condition else if</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    int a = 100;
    int b = 100;
    if(a &lt; b) {
        printf("Si : on a : a &lt; b\n");
    }
    else if(a == b) {
        printf("Sinon Si : on a : a &lt; b\n");
    }
    else {
        printf("Sinon : on a : a &gt; b\n");
    }
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-ternaire"><a class="Link9" href="#Fondamentaux">Créer une condition ternaire</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
//===============================================
int main(int argc, char** argv) {
    int lAge = 20;
    char* lCategory = (lAge &gt;= 18) ? "MAJEUR" : "MINEUR";
    printf("Categorie : %s\n", lCategory);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-switch-case"><a class="Link9" href="#Fondamentaux">Créer une condition switch case</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
//===============================================
int main(int argc, char** argv) {
    int lState = 0;
    switch(lState) {
        case 0: {
            printf("0 -&gt; Rouge\n");
            break;
        }
        case 1: {
            printf("1 -&gt; Orange\n");
            break;
        }
        case 2: {
            printf("2 -&gt; Vert\n");
            break;
        }
        default: {
            printf("% -&gt; Etat par defaut\n", lState);
            break;
        }
    }
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-boucle-for"><a class="Link9" href="#Fondamentaux">Créer une boucle for</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    for(int i = 0; i &lt; 10; i++) {
        printf("%d\n", i);
    }
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-boucle-while"><a class="Link9" href="#Fondamentaux">Créer une boucle while</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    int i = 0;
    while(i &lt; 10) {
        printf("%d\n", i);
        i++;
    }        
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-boucle-do-while"><a class="Link9" href="#Fondamentaux">Créer une boucle do while</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    int i = 0;
    do {
        printf("%d\n", i);
        i++;
    } while(i &lt; 10);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction"><a class="Link9" href="#Fondamentaux">Créer une fonction</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
void sayHello() {
    printf("Bonjour tout le monde\n"); 
}
//===============================================
int main(int argc, char** argv) {
    sayHello();
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-avec-un-parametre"><a class="Link9" href="#Fondamentaux">Créer une fonction avec un paramètre</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
void sayHello(const char* name) {
    printf("Bonjour : %s\n", name); 
}
//===============================================
int main(int argc, char** argv) {
    sayHello("Gerard KESSE");
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-qui-retourne-une-valeur"><a class="Link9" href="#Fondamentaux">Créer une fonction qui retourne une valeur</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int volume(int width, int height, int depth) {
    int lVolume = width*height*depth; 
    return lVolume;
}
//===============================================
int main(int argc, char** argv) {
    int lVolume = volume(10, 10, 10);
    printf("Volume : %d\n", lVolume);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction-recursive"><a class="Link9" href="#Fondamentaux">Créer une fonction récursive</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int factorial(int n) {
    if(n == 0) {return 1;}
    return n*factorial(n - 1);
}
//===============================================
int main(int argc, char** argv) {
    int lFactorial = factorial(5);
    printf("Factorial : %d\n", lFactorial);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-structure"><a class="Link9" href="#Fondamentaux">Créer une structure</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
typedef struct {
    char* name;
    int code;
} sGPerson;
//===============================================
int main(int argc, char** argv) {
    sGPerson lPerson = {"Gerard KESSE", 1234};
    printf("Nom : %s\n", lPerson.name);
    printf("Code : %d\n", lPerson.code);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-pointeur-de-fonction"><a class="Link9" href="#Fondamentaux">Créer un pointeur de fonction</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
void sayHello() {
    printf("Bonjour tout le monde\n");
}
//===============================================
void client(void (*onFunc)()) {
    onFunc();
}
//===============================================
int main(int argc, char** argv) {
    client(sayHello);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-type-pointeur-de-fonction"><a class="Link9" href="#Fondamentaux">Créer un type pointeur de fonction</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
typedef void (*FUNC_CB)();
//===============================================
void sayHello() {
    printf("Bonjour tout le monde\n");
}
//===============================================
void client(FUNC_CB onFunc) {
    onFunc();
}
//===============================================
int main(int argc, char** argv) {
    client(sayHello);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-machine-a-etats-finis"><a class="Link9" href="#Fondamentaux">Créer une machine à états finis</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
//===============================================
int main(int argc, char** argv) {
    const char* lState = "INIT";
    while(1) {
        if(!strcmp(lState, "INIT")) {
            printf("-&gt; INIT\n");
            lState = "RED";
        }
        else if(!strcmp(lState, "RED")) {
            printf("-&gt; RED\n");
            lState = "AMBER";
        }
        else if(!strcmp(lState, "AMBER")) {
            printf("-&gt; AMBER\n");
            lState = "GREEN";
        }
        else if(!strcmp(lState, "GREEN")) {
            printf("-&gt; GREEN\n");
            lState = "END";
        }
        else {break;}
    }
    return 0;
}
//===============================================</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation-orientee-objet"><a class="Link3" href="#">Programmation orientée objet</a></h1><div class="Body3"><br>La <b>programmation orientée objet</b> (POO) est un paradigme de programmation informatique qui consiste en la définition et l'interaction de briques logicielles appelées objets ; un objet représente un concept, une idée ou toute entité du monde physique, comme une voiture, une personne ou encore une page d'un livre. Il possède une structure interne et un comportement, et il sait interagir avec ses pairs. Il s'agit donc de représenter ces objets et leurs relations ; l'interaction entre les objets via leurs relations permet de concevoir et réaliser les fonctionnalités attendues, de mieux résoudre le ou les problèmes. Dès lors, l'étape de modélisation revêt une importance majeure et nécessaire pour la POO. C'est elle qui permet de transcrire les éléments du réel sous forme virtuelle. La programmation orientée objet consiste à utiliser des techniques de programmation pour mettre en œuvre une conception basée sur les objets. Celle-ci peut être élaborée en utilisant des méthodologies de développement logiciel objet, dont la plus connue est le processus unifié et exprimée à l'aide de langages de modélisation tels que le Unified Modeling Language (UML).<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620730109517"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620730109517");</script></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Creer-une-classe"><a class="Link9" href="#Programmation-orientee-objet">Créer une classe</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
//===============================================
int main(int argc, char** argv) {
    GAnimalO* lAnimal = GAnimal_New("Chat", 10);
    lAnimal-&gt;Print(lAnimal);
    lAnimal-&gt;Delete(lAnimal);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
//===============================================
typedef struct _GAnimalO GAnimalO;
//===============================================
struct _GAnimalO {
    void (*Delete)(GAnimalO* obj);
    void (*Print)(GAnimalO* obj);
    char name[256];
    int weight;
};
//===============================================
GAnimalO* GAnimal_New(const char* name, int weight);
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
//===============================================
static void GAnimal_Delete(GAnimalO* obj);
static void GAnimal_Print(GAnimalO* obj);
//===============================================
GAnimalO* GAnimal_New(const char* name, int weight) {
    GAnimalO* lObj = (GAnimalO*)malloc(sizeof(GAnimalO));
    
    sprintf(lObj-&gt;name, "%s", name);
    lObj-&gt;weight = weight;
    
    lObj-&gt;Delete = GAnimal_Delete;
    lObj-&gt;Print = GAnimal_Print;
    return lObj;
}
//===============================================
static void GAnimal_Delete(GAnimalO* obj) {
    free(obj);
}
//===============================================
static void GAnimal_Print(GAnimalO* obj) {
    printf("Nom : %s | Poids : %d (kg)\n", obj-&gt;name, obj-&gt;weight);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Nom : Chat | Poids : 10 (kg)</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patrons-de-conception"><a class="Link3" href="#">Patrons de conception</a></h1><div class="Body3"><br>Un <b>patron de conception</b> (design pattern) est un arrangement caractéristique de modules, reconnu comme bonne pratique en réponse à un problème de conception d'un logiciel. Il décrit une solution standard, utilisable dans la conception de différents logiciels. Un patron de conception est issu de l'expérience des concepteurs de logiciels. Il décrit un arrangement récurrent de rôles et d'actions joués par des modules d'un logiciel, et le nom du patron sert de vocabulaire commun entre le concepteur et le programmeur. D'une manière analogue à un motif de conception en architecture, le patron de conception décrit les grandes lignes d'une solution, qui peuvent ensuite être modifiées et adaptées en fonction des besoins.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620728386561"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620728386561");</script></div><br><h2 class="Title7 GTitle2" id="Patrons-de-conception-Creer-un-patron-singleton"><a class="Link9" href="#Patrons-de-conception">Créer un patron singleton</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GDatabase.h"
//===============================================
int main(int argc, char** argv) {
    GDatabase()-&gt;Open();
    GDatabase()-&gt;Load();
    GDatabase()-&gt;Update();
    GDatabase()-&gt;Save();
    GDatabase()-&gt;Delete();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDatabase.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDatabase_
#define _GDatabase_
//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
//===============================================
typedef struct _GDatabaseO GDatabaseO;
//===============================================
struct _GDatabaseO {
    void (*Delete)();
    void (*Open)();
    void (*Load)();
    void (*Update)();
    void (*Save)();
};
//===============================================
GDatabaseO* GDatabase();
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDatabase.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GDatabase.h"
//===============================================
static GDatabaseO* m_GDatabaseO = 0;
//===============================================
static GDatabaseO* GDatabase_New();
static void GDatabase_Delete();
static void GDatabase_Open();
static void GDatabase_Load();
static void GDatabase_Update();
static void GDatabase_Save();
//===============================================
static GDatabaseO* GDatabase_New() {
    GDatabaseO* lObj = (GDatabaseO*)malloc(sizeof(GDatabaseO));
        
    lObj-&gt;Delete = GDatabase_Delete;
    lObj-&gt;Open = GDatabase_Open;
    lObj-&gt;Load = GDatabase_Load;
    lObj-&gt;Update = GDatabase_Update;
    lObj-&gt;Save = GDatabase_Save;
    return lObj;
}
//===============================================
static void GDatabase_Delete() {
    free(m_GDatabaseO);
    m_GDatabaseO = 0;
}
//===============================================
GDatabaseO* GDatabase() {
    if(m_GDatabaseO == 0) {
        m_GDatabaseO = GDatabase_New();
    }
    return m_GDatabaseO;
}
//===============================================
static void GDatabase_Open() {
    printf("on ouvre la base de donnee\n");
}
//===============================================
static void GDatabase_Load() {
    printf("on charge la base de donnees\n");
}
//===============================================
static void GDatabase_Update() {
    printf("on met a jour la base de donnees\n");
}
//===============================================
static void GDatabase_Save() {
    printf("on sauvegarde la base de donnee\n");
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">on ouvre la base de donnee
on charge la base de donnees
on met a jour la base de donnees
on sauvegarde la base de donnee</pre></div></div><br><h2 class="Title7 GTitle2" id="Patrons-de-conception-Creer-un-patron-strategie"><a class="Link9" href="#Patrons-de-conception">Créer un patron stratégie</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
#include "GCat.h"
#include "GDog.h"
//===============================================
int main(int argc, char** argv) {
    GAnimalO* lAnimals[3];
    
    lAnimals[0] = GAnimal_New();
    lAnimals[1] = GCat_New("Tom");
    lAnimals[2] = GDog_New(10);
    
    for(int i = 0; i &lt; 3; i++) {
        GAnimalO* lAnimal = lAnimals[i];
        lAnimal-&gt;Print(lAnimal);
        lAnimal-&gt;Delete(lAnimal);
    }
    
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
//===============================================
typedef struct _GAnimalO GAnimalO;
//===============================================
struct _GAnimalO {
    void* child;
    void (*Delete)(GAnimalO* obj);
    void (*Print)(GAnimalO* obj);
};
//===============================================
GAnimalO* GAnimal_New();
void GAnimal_Delete(GAnimalO* obj);
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
//===============================================
static void GAnimal_Print(GAnimalO* obj);
//===============================================
GAnimalO* GAnimal_New() {
    GAnimalO* lObj = (GAnimalO*)malloc(sizeof(GAnimalO));
    
    lObj-&gt;Delete = GAnimal_Delete;
    lObj-&gt;Print = GAnimal_Print;
    return lObj;
}
//===============================================
void GAnimal_Delete(GAnimalO* obj) {
    free(obj);
}
//===============================================
static void GAnimal_Print(GAnimalO* obj) {
    printf("Je suis un animal\n");
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GCat.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GCat_
#define _GCat_
//===============================================
#include "GAnimal.h"
//===============================================
typedef struct _GCatO GCatO;
//===============================================
struct _GCatO {
    void (*Delete)(GAnimalO* obj);
    void (*Print)(GAnimalO* obj);
    char name[256];
};
//===============================================
GAnimalO* GCat_New(const char* name);
//===============================================
#endif
//===============================================</pre></div></div><br><br><h3 class="Title8 GTitle3">GCat.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GCat.h"
//===============================================
static void GCat_Delete(GAnimalO* obj);
static void GCat_Print(GAnimalO* obj);
//===============================================
GAnimalO* GCat_New(const char* name) {
    GAnimalO* lParent = GAnimal_New();
    GCatO* lChild = (GCatO*)malloc(sizeof(GCatO));

    sprintf(lChild-&gt;name, "%s", name);

    lParent-&gt;child = lChild;
    lParent-&gt;Delete = GCat_Delete;
    lParent-&gt;Print = GCat_Print;
    return lParent;
}
//===============================================
static void GCat_Delete(GAnimalO* obj) {
    GAnimal_Delete(obj);
}
//===============================================
static void GCat_Print(GAnimalO* obj) {
    GCatO* lObj = obj-&gt;child;
    printf("Je suis un chat : mon nom est : %s\n", lObj-&gt;name);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDog.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDog_
#define _GDog_
//===============================================
#include "GAnimal.h"
//===============================================
typedef struct _GDogO GDogO;
//===============================================
struct _GDogO {
    void (*Delete)(GAnimalO* obj);
    void (*Print)(GAnimalO* obj);
    int weight;
};
//===============================================
GAnimalO* GDog_New(int weight);
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDog.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GDog.h"
//===============================================
static void GDog_Delete(GAnimalO* obj);
static void GDog_Print(GAnimalO* obj);
//===============================================
GAnimalO* GDog_New(int weight) {
    GAnimalO* lParent = GAnimal_New();
    GDogO* lChild = (GDogO*)malloc(sizeof(GDogO));

    lChild-&gt;weight = weight;

    lParent-&gt;child = lChild;
    lParent-&gt;Delete = GDog_Delete;
    lParent-&gt;Print = GDog_Print;
    return lParent;
}
//===============================================
static void GDog_Delete(GAnimalO* obj) {
    GAnimal_Delete(obj);
}
//===============================================
static void GDog_Print(GAnimalO* obj) {
    GDogO* lObj = obj-&gt;child;
    printf("Je suis un chien : mon poids est : %d (kg)\n", lObj-&gt;weight);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Je suis un animal
Je suis un chat : mon nom est : Tom
Je suis un chien : mon poids est : 10 (kg)</pre></div></div><br><h2 class="Title7 GTitle2" id="Patrons-de-conception-Creer-un-patron-fabrique"><a class="Link9" href="#Patrons-de-conception">Créer un patron fabrique</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
//===============================================
int main(int argc, char** argv) {
    GAnimalO* lAnimals[3];
    
    lAnimals[0] = GAnimal("animal");
    lAnimals[1] = GAnimal("cat");
    lAnimals[2] = GAnimal("dog");
    
    for(int i = 0; i &lt; 3; i++) {
        GAnimalO* lAnimal = lAnimals[i];
        lAnimal-&gt;Print(lAnimal);
        lAnimal-&gt;Delete(lAnimal);
    }
    
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
//===============================================
typedef struct _GAnimalO GAnimalO;
//===============================================
struct _GAnimalO {
    void* child;
    void (*Delete)(GAnimalO* obj);
    void (*Print)(GAnimalO* obj);
};
//===============================================
GAnimalO* GAnimal(const char* key);
GAnimalO* GAnimal_New();
void GAnimal_Delete(GAnimalO* obj);
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GAnimal.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
#include "GCat.h"
#include "GDog.h"
//===============================================
static void GAnimal_Print(GAnimalO* obj);
//===============================================
GAnimalO* GAnimal_New() {
    GAnimalO* lObj = (GAnimalO*)malloc(sizeof(GAnimalO));
    
    lObj-&gt;Delete = GAnimal_Delete;
    lObj-&gt;Print = GAnimal_Print;
    return lObj;
}
//===============================================
void GAnimal_Delete(GAnimalO* obj) {
    free(obj);
}
//===============================================
GAnimalO* GAnimal(const char* key) {
    if(!strcmp(key, "animal")) {return GAnimal_New();}
    if(!strcmp(key, "cat")) {return GCat_New();}
    if(!strcmp(key, "dog")) {return GDog_New();}
    return GAnimal_New();
}
//===============================================
static void GAnimal_Print(GAnimalO* obj) {
    printf("Je suis un animal\n");
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GCat.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GCat_
#define _GCat_
//===============================================
#include "GAnimal.h"
//===============================================
typedef struct _GCatO GCatO;
//===============================================
struct _GCatO {
    void (*Delete)(GAnimalO* obj);
    void (*Print)(GAnimalO* obj);
};
//===============================================
GAnimalO* GCat_New();
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GCat.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GCat.h"
//===============================================
static void GCat_Delete(GAnimalO* obj);
static void GCat_Print(GAnimalO* obj);
//===============================================
GAnimalO* GCat_New() {
    GAnimalO* lParent = GAnimal_New();
    GCatO* lChild = (GCatO*)malloc(sizeof(GCatO));

    lParent-&gt;child = lChild;
    lParent-&gt;Delete = GCat_Delete;
    lParent-&gt;Print = GCat_Print;
    return lParent;
}
//===============================================
static void GCat_Delete(GAnimalO* obj) {
    GAnimal_Delete(obj);
}
//===============================================
static void GCat_Print(GAnimalO* obj) {
    printf("Je suis un chat\n");
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDog.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDog_
#define _GDog_
//===============================================
#include "GAnimal.h"
//===============================================
typedef struct _GDogO GDogO;
//===============================================
struct _GDogO {
    void (*Delete)(GAnimalO* obj);
    void (*Print)(GAnimalO* obj);
};
//===============================================
GAnimalO* GDog_New();
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDog.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GDog.h"
//===============================================
static void GDog_Delete(GAnimalO* obj);
static void GDog_Print(GAnimalO* obj);
//===============================================
GAnimalO* GDog_New(int weight) {
    GAnimalO* lParent = GAnimal_New();
    GDogO* lChild = (GDogO*)malloc(sizeof(GDogO));

    lParent-&gt;child = lChild;
    lParent-&gt;Delete = GDog_Delete;
    lParent-&gt;Print = GDog_Print;
    return lParent;
}
//===============================================
static void GDog_Delete(GAnimalO* obj) {
    GAnimal_Delete(obj);
}
//===============================================
static void GDog_Print(GAnimalO* obj) {
    printf("Je suis un chien\n");
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Je suis un animal
Je suis un chat
Je suis un chien</pre></div></div><br><h2 class="Title7 GTitle2" id="Patrons-de-conception-Creer-un-patron-observateur"><a class="Link9" href="#Patrons-de-conception">Créer un patron observateur</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GWidget.h"
//===============================================
int main(int argc, char** argv) {
    GWidgetO* lButton = GWidget("button");
    GWidgetO* lLed = GWidget("led");
    lLed-&gt;AddClick(lLed, lButton);
    
    lButton-&gt;Click(lButton);
    lButton-&gt;Click(lButton);
    lButton-&gt;Click(lButton);
    lButton-&gt;Click(lButton);
    
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWidget.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GWidget_
#define _GWidget_
//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
//===============================================
typedef struct _GWidgetO GWidgetO;
//===============================================
struct _GWidgetO {
    void* child;
    void (*Delete)(GWidgetO* obj);
    void (*Click)(GWidgetO* obj);
    void (*EmitClick)(GWidgetO* obj);
    void (*OnClick)(GWidgetO* obj);
    void (*AddClick)(GWidgetO* obj, GWidgetO* obs);
    GWidgetO* item_map[8];
    int item_count;
};
//===============================================
GWidgetO* GWidget(const char* key);
GWidgetO* GWidget_New();
void GWidget_Delete(GWidgetO* obj);
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWidget.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GWidget.h"
#include "GButton.h"
#include "GLed.h"
//===============================================
static void GWidget_Click(GWidgetO* obj);
static void GWidget_EmitClick(GWidgetO* obj);
static void GWidget_OnClick(GWidgetO* obj);
static void GWidget_AddClick(GWidgetO* obj, GWidgetO* obs);
//===============================================
GWidgetO* GWidget_New() {
    GWidgetO* lObj = (GWidgetO*)malloc(sizeof(GWidgetO));
    
    lObj-&gt;item_count = 0;
    
    lObj-&gt;Delete = GWidget_Delete;
    lObj-&gt;Click = GWidget_Click;
    lObj-&gt;EmitClick = GWidget_EmitClick;
    lObj-&gt;OnClick = GWidget_OnClick;
    lObj-&gt;AddClick = GWidget_AddClick;
    return lObj;
}
//===============================================
void GWidget_Delete(GWidgetO* obj) {
    free(obj);
}
//===============================================
GWidgetO* GWidget(const char* key) {
    if(!strcmp(key, "widget")) {return GWidget_New();}
    if(!strcmp(key, "button")) {return GButton_New();}
    if(!strcmp(key, "led")) {return GLed_New();}
    return GWidget_New();
}
//===============================================
static void GWidget_EmitClick(GWidgetO* obj) {
    for(int i = 0; i &lt; obj-&gt;item_count; i++) {
        GWidgetO* lObj = obj-&gt;item_map[i];
        lObj-&gt;OnClick(lObj);
    }
}
//===============================================
static void GWidget_AddClick(GWidgetO* obj, GWidgetO* obs) {
    obs-&gt;item_map[obs-&gt;item_count] = obj;
    obs-&gt;item_count++;
}
//===============================================
static void GWidget_Click(GWidgetO* obj) {}
static void GWidget_OnClick(GWidgetO* obj) {}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GButton.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GButton_
#define _GButton_
//===============================================
#include "GWidget.h"
//===============================================
typedef struct _GButtonO GButtonO;
//===============================================
struct _GButtonO {
    void (*Delete)(GWidgetO* obj);
    void (*Click)(GWidgetO* obj);
};
//===============================================
GWidgetO* GButton_New();
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GButton.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GButton.h"
//===============================================
static void GButton_Delete(GWidgetO* obj);
static void GButton_Click(GWidgetO* obj);
//===============================================
GWidgetO* GButton_New() {
    GWidgetO* lParent = GWidget_New();
    GButtonO* lChild = (GButtonO*)malloc(sizeof(GButtonO));

    lParent-&gt;child = lChild;
    lParent-&gt;Delete = GButton_Delete;
    lParent-&gt;Click = GButton_Click;
    return lParent;
}
//===============================================
static void GButton_Delete(GWidgetO* obj) {
    GWidget_Delete(obj);
}
//===============================================
static void GButton_Click(GWidgetO* obj) {
    printf("Je clique sur le BOUTON\n");
    obj-&gt;EmitClick(obj);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GLed.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GLed_
#define _GLed_
//===============================================
#include "GWidget.h"
//===============================================
typedef struct _GLedO GLedO;
//===============================================
struct _GLedO {
    void (*Delete)(GWidgetO* obj);
    void (*Click)(GWidgetO* obj);
    char* state;
};
//===============================================
GWidgetO* GLed_New();
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GLed.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "GLed.h"
//===============================================
static void GLed_Delete(GWidgetO* obj);
static void GLed_OnClick(GWidgetO* obj);
//===============================================
GWidgetO* GLed_New() {
    GWidgetO* lParent = GWidget_New();
    GLedO* lChild = (GLedO*)malloc(sizeof(GLedO));

    lChild-&gt;state = "off";

    lParent-&gt;child = lChild;
    lParent-&gt;Delete = GLed_Delete;
    lParent-&gt;OnClick = GLed_OnClick;
    return lParent;
}
//===============================================
static void GLed_Delete(GWidgetO* obj) {
    GWidget_Delete(obj);
}
//===============================================
static void GLed_OnClick(GWidgetO* obj) {
    GLedO* lObj = obj-&gt;child;
    if(!strcmp(lObj-&gt;state, "off")) {
        printf("Je fais allumer la LED [ON]\n");
        lObj-&gt;state = "on";
    }
    else if(!strcmp(lObj-&gt;state, "on")) {
        printf("Je fais eteindre la LED [OFF]\n");
        lObj-&gt;state = "off";
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Je clique sur le BOUTON
Je fais allumer la LED [ON]
Je clique sur le BOUTON
Je fais eteindre la LED [OFF]
Je clique sur le BOUTON
Je fais allumer la LED [ON]
Je clique sur le BOUTON
Je fais eteindre la LED [OFF]</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Systeme-d-administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Le <b>système d'administration</b> que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités d'une application.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620770747229"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620770747229");</script></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-main-c"><a class="Link9" href="#Systeme-d-administration">main.c</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
//===============================================
char* g_state = "init";
//===============================================
static void run_init(int argc, char** argv);
static void run_method(int argc, char** argv);
static void run_choice(int argc, char** argv);
static void run_sqlite(int argc, char** argv);
static void run_opencv(int argc, char** argv);
static void run_quit(int argc, char** argv);
//===============================================
int main(int argc, char** argv) {
    while(1) {
        if(!strcmp(g_state, "init")) {run_init(argc, argv);}
        else if(!strcmp(g_state, "method")) {run_method(argc, argv);}
        else if(!strcmp(g_state, "choice")) {run_choice(argc, argv);}
        else if(!strcmp(g_state, "sqlite")) {run_sqlite(argc, argv);}
        else if(!strcmp(g_state, "opencv")) {run_opencv(argc, argv);}
        else if(!strcmp(g_state, "quit")) {run_quit(argc, argv);}
        else {break;}
    }
    return 0;
}
//===============================================
static void run_init(int argc, char** argv) {
    printf("\n");
    printf("ADMIN !!!\n");
    printf("\t%-2s : %s\n", "-q", "quitter l'application");
    g_state = "method";
}
//===============================================
static void run_method(int argc, char** argv) {
    printf("\n");
    printf("ADMIN :\n");
    printf("\t%-2s : %s\n", "1", "sqlite");
    printf("\t%-2s : %s\n", "2", "opencv");
    printf("\n");
    g_state = "choice";
}
//===============================================
static void run_choice(int argc, char** argv) {
    char l_answer[256];
    printf("ADMIN ? ");
    fflush(stdout);
    fgets(l_answer, sizeof(l_answer), stdin);
    l_answer[strlen(l_answer) - 1] = 0;
    if(!strcmp(l_answer, "-q")) {g_state = "end";}
    else if(!strcmp(l_answer, "1")) {g_state = "sqlite";}
    else if(!strcmp(l_answer, "2")) {g_state = "opencv";}
}
//===============================================
static void run_sqlite(int argc, char** argv) {
    printf("\n");
    printf("execution du module sqlite\n");
    g_state = "quit";
}
//===============================================
static void run_opencv(int argc, char** argv) {
    printf("\n");
    printf("execution du module opencv\n");
    g_state = "quit";
}
//===============================================
static void run_quit(int argc, char** argv) {
    char l_answer[256];
    printf("\n");
    printf("QUIT (Oui/[N]on) ? ");
    fflush(stdout);
    fgets(l_answer, sizeof(l_answer), stdin);
    l_answer[strlen(l_answer) - 1] = 0;
    if(!strcmp(l_answer, "-q")) {g_state = "end";}
    else if(!strcmp(l_answer, "o")) {g_state = "end";}
    else if(!strcmp(l_answer, "n")) {g_state = "init";}
    else if(!strcmp(l_answer, "")) {g_state = "init";}
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Resultat"><a class="Link9" href="#Systeme-d-administration">Résultat</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_admin_system.gif" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_admin_system.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire-de-fichier-log"><a class="Link3" href="#">Gestionnaire de fichier log</a></h1><div class="Body3"><br>Le <b>gestionnaire de fichier log</b> que nous présentons ici est une interface permettant de transférer des données depuis notre application vers un fichier texte qui peut être exploité par la suite par un système d'analyse de fichier log dédié. Un fichier log permet de suivre l'historique des traces laissées par un système au cours de son exécution. L'un des avantages de ce concept est de pouvoir analyser en temps réel les actions et réactions du système.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620776207075"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620776207075");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-fichier-log-Creer-un-gestionnaire-de-fichier-simple"><a class="Link9" href="#Gestionnaire-de-fichier-log">Créer un gestionnaire de fichier simple</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
#include &lt;stdarg.h&gt;
//===============================================
static void log_write(const char* format, ...);
//===============================================
int main(int argc, char** argv) {
    log_write("Affichage des donnees simples\n");
    log_write("\t%-10s : %d\n", "Entier", 1000);
    log_write("\t%-10s : %.2f\n", "Reel", 3.14);
    log_write("\t%-10s : %s\n", "Chaine", "voici ma chaine");
    return 0;
}
//===============================================
static void log_write(const char* format, ...) {
    FILE* lFile = fopen ("log.txt","a+");
    va_list lArgs;
    va_start(lArgs, format);
    vfprintf(lFile, format, lArgs);
    va_end(lArgs);
    fclose(lFile);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_log_simple.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_log_simple.png"></div><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-fichier-log-Creer-un-gestionnaire-de-fichier-complexe"><a class="Link9" href="#Gestionnaire-de-fichier-log">Créer un gestionnaire de fichier complexe</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
#include &lt;stdarg.h&gt;
//===============================================
typedef void (*GLOG_CB)(void* params);
//===============================================
typedef struct {
    char* name;
    int id;
    double coef;
} sGPerson;
//===============================================
static void log_write(int key, ...);
static void log_file(const char* format, ...);
static void log_person(void* params);
//===============================================
int main(int argc, char** argv) {
    log_write(3, "Affichage de donnees simples", 3, "\n", 0);
    log_write(3, "\t", 30, -15, "Int", 3, " : ", 1, 10000, 3, "\n", 0);
    log_write(3, "\t", 30, -15, "Double", 3, " : ", 2, 3.14, 3, "\n", 0);
    log_write(3, "\t", 30, -15, "String", 3, " : ", 3, "voici ma chaine", 3, "\n", 0);
    
    sGPerson lPerson = {"Gerard KESSE", 1234, 3.14};
    
    log_write(3, "Affichage de donnees complexes", 3, "\n", 0);
    log_write(4, log_person, &amp;lPerson, 0);

    return 0;
}
//===============================================
static void log_write(int key, ...) {
    va_list lArgs;
    va_start(lArgs, key);
    int lType = key;
    
    while(1) {
        // off
        if(lType == 0) break;
        // int
        if(lType == 1) {
            int lData = va_arg(lArgs, int);
            log_file("%d", lData);
        }
        // int - width
        else if(lType == 10) {
            int lWidth = va_arg(lArgs, int);
            int lData = va_arg(lArgs, int);
            log_file("%*d", lWidth, lData);
        }
        // double 
        else if(lType == 2) {
            double lData = va_arg(lArgs, double);
            log_file("%f", lData);
        }
        // double - width
        else if(lType == 20) {
            int lWidth = va_arg(lArgs, int);
            double lData = va_arg(lArgs, double);
            log_file("%.*f", lWidth, lData);
        }
        // string
        else if(lType == 3) {
            char* lData = va_arg(lArgs, char*);
            log_file("%s", lData);
        }
        // string - width
        else if(lType == 30) {
            int lWidth = va_arg(lArgs, int);
            char* lData = va_arg(lArgs, char*);
            log_file("%*s", lWidth, lData);
        }
        // struct
        else if(lType == 4) {
            GLOG_CB onLog = (GLOG_CB)va_arg(lArgs, void*);
            void* lObj = va_arg(lArgs, void*);
            onLog(lObj);
        }
        lType = va_arg(lArgs, int);
    }        
}
//===============================================
static void log_file(const char* format, ...) {
    FILE* lFile = fopen ("log.txt","a+");
    va_list lArgs;
    va_start(lArgs, format);
    vfprintf(lFile, format, lArgs);
    va_end(lArgs);
    fclose(lFile);
}
//===============================================
static void log_person(void* params) {
    sGPerson* lPerson = (sGPerson*)params;
    log_write(3, "\t", 30, -15, "Person[name]", 3, " : ", 3, lPerson-&gt;name, 3, "\n", 0);
    log_write(3, "\t", 30, -15, "Person[id]", 3, " : ", 1, lPerson-&gt;id, 3, "\n", 0);
    log_write(3, "\t", 30, -15, "Person[coef]", 3, " : ", 2, lPerson-&gt;coef, 3, "\n", 0);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_log_complexe.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_log_complexe.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Multithreading"><a class="Link3" href="#">Multithreading</a></h1><div class="Body3"><br>Un processeur est dit <b>multithread </b>s'il est capable d'exécuter efficacement plusieurs threads simultanément. Contrairement aux systèmes multiprocesseurs (tels les systèmes multi-cœur), les threads doivent partager les ressources d'un unique cœur : les unités de traitement, le cache processeur et le translation lookaside buffer ; certaines parties sont néanmoins dupliquées : chaque thread dispose de ses propres registres et de son propre pointeur d'instruction. Là où les systèmes multiprocesseurs incluent plusieurs unités de traitement complètes, le multithreading a pour but d'augmenter l'utilisation d'un seul cœur en tirant profit des propriétés des threads et du parallélisme au niveau des instructions. Comme les deux techniques sont complémentaires, elles sont parfois combinées dans des systèmes comprenant de multiples processeurs multithreads ou des processeurs avec de multiples cœurs multithreads.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Multithreading-Creer-un-thread"><a class="Link9" href="#Multithreading">Créer un thread</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;pthread.h&gt;
#include &lt;unistd.h&gt;
//===============================================
static void* onTask(void* params) {
    char* lName = (char*)params;
    for(int i = 0; i &lt; 5; i++) {
        printf("on execute le thread %s\n", lName);
        sleep(1);
    }
    return 0;
}
//===============================================
int main(int argc, char** argv) {
    pthread_t  lThreadA;
    pthread_t  lThreadB;
    pthread_create(&amp;lThreadA, NULL, onTask, "A");
    pthread_create(&amp;lThreadB, NULL, onTask, "B");
    pthread_join(lThreadA, NULL);
    pthread_join(lThreadB, NULL);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">on execute le thread A
on execute le thread B
on execute le thread B
on execute le thread A
on execute le thread A
on execute le thread B
on execute le thread B
on execute le thread A
on execute le thread A
on execute le thread B</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface-Homme-Machine-avec-Gtk"><a class="Link3" href="#">Interface Homme-Machine avec Gtk</a></h1><div class="Body3"><br><b>GTK </b>est une bibliothèque de création d'interfaces homme-machine dévoppé à l'origine pour les besoins du logiciel de traitement d'images GIMP. GTK+ est maintenant utilisé dans de nombreux projets, dont les environnements de bureau GNOME, Xfce, Lxde et ROX. GTK est un projet libre et multiplate-forme.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618606543470"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618606543470");</script></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Installer-Gtk-sous-MSYS2"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Installer Gtk sous MSYS2</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -S --needed --noconfirm mingw-w64-i686-gtk3</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Tester-un-programme-Gtk-sous-MSYS2"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Tester un programme Gtk sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
static gboolean GWindow_OnDeleteEvent(GtkWidget* obj, GdkEvent* event, gpointer params);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&amp;argc, &amp;argv);
    
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 0);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 400, 200);

    GtkWidget* lLabel = gtk_label_new(0);
    gtk_label_set_text(GTK_LABEL(lLabel), "Bonjour tout le monde");
    
    GtkWidget* lMainLayout = gtk_box_new(GTK_ORIENTATION_VERTICAL, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lLabel, 1, 1, 0);

    gtk_container_add(GTK_CONTAINER(lWindow), lMainLayout);
    gtk_widget_show_all(lWindow);
        
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">gcc -std=gnu11 -c ./main.c -o ./main.o \
`pkg-config --cflags gtk+-3.0`</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">gcc -std=gnu11 -c ./main.c -o ./main.o \
-I/mingw32/include/gtk-3.0 -I/mingw32/include/pango-1.0 -I/mingw32/include -I/mingw32/include/glib-2.0 \
-I/mingw32/lib/glib-2.0/include -I/mingw32/include/harfbuzz -I/mingw32/include/freetype2 \
-I/mingw32/include/libpng16 -mms-bitfields -I/mingw32/include/fribidi -I/mingw32/include/cairo \
-I/mingw32/include/lzo -I/mingw32/include/pixman-1 -mms-bitfields -mms-bitfields -mms-bitfields \
-mms-bitfields -mms-bitfields -mms-bitfields -mms-bitfields -I/mingw32/include/gdk-pixbuf-2.0 \
-mms-bitfields -mms-bitfields -mms-bitfields -I/mingw32/include/atk-1.0 -mms-bitfields -mms-bitfields \
-mms-bitfields -pthread -mms-bitfields</pre></div></div><br><h3 class="Title8 GTitle3">Éditer les liens du projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">gcc -o ./rdc.exe ./main.o  \
`pkg-config --libs gtk+-3.0`</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">gcc -o ./rdc.exe ./main.o  \
-L/mingw32/lib \ 
-lgtk-3 -lgdk-3 -lz -lgdi32 -limm32 -lshell32 -lole32 -Wl,-luuid -lwinmm -ldwmapi -lsetupapi \
-lcfgmgr32 -lpangowin32-1.0 -lpangocairo-1.0 -lpango-1.0 -lharfbuzz -latk-1.0 -lcairo-gobject \
-lcairo -lgdk_pixbuf-2.0 -lgio-2.0 -lgobject-2.0 -lglib-2.0 -lintl</pre></div></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">./rdc.exe</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_test.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_test.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Ceer-un-bouton"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Céer un bouton</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&amp;argc, &amp;argv);
     
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 10);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 400, 200);
    
    GtkWidget* lButton = gtk_button_new();
    gtk_button_set_label(GTK_BUTTON(lButton), "Button");

    GtkWidget* lHeaderLayout = gtk_box_new(GTK_ORIENTATION_HORIZONTAL, 0);
    gtk_box_pack_start(GTK_BOX(lHeaderLayout), lButton, 0, 0, 0);

    GtkWidget* lMainLayout = gtk_box_new(GTK_ORIENTATION_VERTICAL, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lHeaderLayout, 0, 0, 0);

    gtk_container_add(GTK_CONTAINER(lWindow), lMainLayout);
    gtk_widget_show_all(lWindow);
    
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_button.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_button.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Creer-un-bouton-sans-bordure"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Créer un bouton sans bordure</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&amp;argc, &amp;argv);
     
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 10);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 400, 200);
    
    GtkWidget* lButton = gtk_button_new();
    gtk_button_set_label(GTK_BUTTON(lButton), "Button");
    gtk_button_set_relief(GTK_BUTTON(lButton), GTK_RELIEF_NONE);

    GtkWidget* lHeaderLayout = gtk_box_new(GTK_ORIENTATION_HORIZONTAL, 0);
    gtk_box_pack_start(GTK_BOX(lHeaderLayout), lButton, 0, 0, 0);

    GtkWidget* lMainLayout = gtk_box_new(GTK_ORIENTATION_VERTICAL, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lHeaderLayout, 0, 0, 0);

    gtk_container_add(GTK_CONTAINER(lWindow), lMainLayout);
    gtk_widget_show_all(lWindow);
    
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_button_no_border.gif" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_button_no_border.gif"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Charger-une-image"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Charger une image</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&amp;argc, &amp;argv);
     
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 10);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 400, 200);
    
    GdkPixbuf* lPixbuf = gdk_pixbuf_new_from_file("readydev.png", 0);
    GtkWidget* lImage = gtk_image_new();
    gtk_image_set_from_pixbuf(GTK_IMAGE(lImage), lPixbuf);

    GtkWidget* lHeaderLayout = gtk_box_new(GTK_ORIENTATION_HORIZONTAL, 0);
    gtk_box_pack_start(GTK_BOX(lHeaderLayout), lImage, 0, 0, 0);

    GtkWidget* lMainLayout = gtk_box_new(GTK_ORIENTATION_VERTICAL, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lHeaderLayout, 0, 0, 0);

    gtk_container_add(GTK_CONTAINER(lWindow), lMainLayout);
    gtk_widget_show_all(lWindow);
    
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_image.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_image.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Redimensionner-une--image"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Redimensionner une&nbsp; image</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><br><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_image_resize.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_image_resize.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Utiliser-une-police-personnalisee"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Utiliser une police personnalisée</a></h2><br><h3 class="Title8 GTitle3">Télécharger FontAwesome</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/beakerbrowser/beakerbrowser.com/tree/master/fonts">https://github.com/beakerbrowser/beakerbrowser.com/tree/master/fonts</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/FortAwesome/Font-Awesome/tree/master/otfs">https://github.com/FortAwesome/Font-Awesome/tree/master/otfs</a><br><br><b>fontawesome-webfont.ttf</b><br><br><h3 class="Title8 GTitle3">Installer FontAwesome sous Windows</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">fontawesome-webfont.ttf
Clic droit -&gt; Installer pour tous les utilisateurs</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier l'installation de FontAwesome sous Windows</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Ouvrir un document Word
Insert
Symbols
Symbol
More symbols
Font -&gt; FontAwesome</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_custom_font_install_windows.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_custom_font_install_windows.png"></div><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&amp;argc, &amp;argv);
     
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 10);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 400, 200);
    
    GtkWidget* lIcon = gtk_label_new(0);
    PangoFontDescription* lFont = pango_font_description_from_string("FontAwesome 20");
    gtk_widget_override_font(lIcon, lFont);
    pango_font_description_free(lFont);
    gtk_label_set_markup(GTK_LABEL(lIcon), "\uf167");
    
    GtkWidget* lHeaderLayout = gtk_box_new(GTK_ORIENTATION_HORIZONTAL, 0);
    gtk_box_pack_start(GTK_BOX(lHeaderLayout), lIcon, 0, 0, 0);

    GtkWidget* lMainLayout = gtk_box_new(GTK_ORIENTATION_VERTICAL, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lHeaderLayout, 0, 0, 0);

    gtk_container_add(GTK_CONTAINER(lWindow), lMainLayout);
    gtk_widget_show_all(lWindow);
    
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_custom_font.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_custom_font.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Creer-un-label-avec-un-lien"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Créer un label avec un lien</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&amp;argc, &amp;argv);
    
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 0);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 400, 200);
    
    const gchar* lLink =
    "Consultez notre siteweb "
    "&lt;a href=\"https://readydev.ovh/\""
    "title=\"&lt;b&gt;ReadyDev&lt;/b&gt; notre siteweb\"&gt;"
    "ReadyDev&lt;/a&gt;\nPour plus d'informations...";
    GtkWidget *label = gtk_label_new (0);
    gtk_label_set_markup (GTK_LABEL (label), lLink);
        
    gtk_container_add(GTK_CONTAINER(lWindow), label);
    gtk_widget_show_all(lWindow);
    
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_label_link.gif" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_label_link.gif"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Selectionner-le-texte-d-un-label"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Sélectionner le texte d'un label</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
static gboolean GWindow_OnDeleteEvent(GtkWidget* obj, GdkEvent* event, gpointer params);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&amp;argc, &amp;argv);
    
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 0);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 400, 200);
    
    GtkWidget* label = gtk_label_new ("Bonjour tout le monde");
    gtk_label_set_selectable (GTK_LABEL (label), TRUE);

    gtk_container_add(GTK_CONTAINER(lWindow), label);
    gtk_widget_show_all(lWindow);
    
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_label_select.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_label_select.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Ajouter-un-code-mnemonique-a-un-bouton"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Ajouter un code mnémonique à un bouton</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
static gboolean GWindow_OnDeleteEvent(GtkWidget* obj, GdkEvent* event, gpointer params);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&amp;argc, &amp;argv);
    
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 0);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 400, 200);
    
    GtkWidget* button = gtk_button_new_with_mnemonic ("_Close");
    gtk_button_set_relief (GTK_BUTTON (button), GTK_RELIEF_NONE);

    gtk_container_add(GTK_CONTAINER(lWindow), button);
    gtk_widget_show_all(lWindow);
    
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    g_signal_connect_swapped (G_OBJECT (button), "clicked", G_CALLBACK (gtk_widget_destroy), (gpointer) lWindow);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_button_mnemonic.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_button_mnemonic.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Ajouter-des-elements-au-debut-d-un-layout-vertical"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Ajouter des éléments au début d'un layout vertical</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
#define NUM_NAMES 4
const gchar* names[] = { "Andrew", "Joe", "Samantha", "Jonathan" };
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&amp;argc, &amp;argv);
    
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 0);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 400, 200);
    
    GtkWidget* vbox = gtk_box_new (GTK_ORIENTATION_VERTICAL, 5);

    for (int i = 0; i &lt; NUM_NAMES; i++) {
        GtkWidget *button = gtk_button_new_with_label (names[i]);
        gtk_box_pack_start(GTK_BOX (vbox), button, 1, 0, 0);

        g_signal_connect_swapped (G_OBJECT (button), "clicked", G_CALLBACK (gtk_widget_destroy), (gpointer) button);
    }

    gtk_container_add(GTK_CONTAINER(lWindow), vbox);
    gtk_widget_show_all(lWindow);
    
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_box_vertical_start.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_box_vertical_start.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Ajouter-des-elements-a-la-fin-d-un-layout-vertical"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Ajouter des éléments à la fin d'un layout vertical</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
#define NUM_NAMES 4
const gchar* names[] = { "Andrew", "Joe", "Samantha", "Jonathan" };
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&amp;argc, &amp;argv);
    
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 0);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 400, 200);
    
    GtkWidget* vbox = gtk_box_new (GTK_ORIENTATION_VERTICAL, 5);

    for (int i = 0; i &lt; NUM_NAMES; i++) {
        GtkWidget *button = gtk_button_new_with_label (names[i]);
        gtk_box_pack_end(GTK_BOX (vbox), button, 1, 0, 0);

        g_signal_connect_swapped (G_OBJECT (button), "clicked", G_CALLBACK (gtk_widget_destroy), (gpointer) button);
    }

    gtk_container_add(GTK_CONTAINER(lWindow), vbox);
    gtk_widget_show_all(lWindow);
    
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_box_vertical_end.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_box_vertical_end.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Gtk-Associer-un-gestionnaire-d-evenement-a-un-widget"><a class="Link9" href="#Interface-Homme-Machine-avec-Gtk">Associer un gestionnaire d'évènement à un widget</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
static gboolean button_pressed (GtkWidget *eventbox, GdkEventButton *event, GtkLabel *label);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&amp;argc, &amp;argv);
    
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 0);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 400, 200);
    
    GtkWidget* label = gtk_label_new ("Double-Click Me!");
    
    GtkWidget* eventbox = gtk_event_box_new ();
    gtk_container_add (GTK_CONTAINER (eventbox), label);
    g_signal_connect (G_OBJECT (eventbox), "button_press_event",
    G_CALLBACK (button_pressed), (gpointer) label);
    
    gtk_container_add(GTK_CONTAINER(lWindow), eventbox);
    gtk_widget_show_all(lWindow);
    
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================
static gboolean button_pressed (GtkWidget *eventbox, GdkEventButton *event, GtkLabel *label) {
    if (event-&gt;type == GDK_2BUTTON_PRESS) {
        const gchar *text = gtk_label_get_text (label);

        if (text[0] == 'D') {
            gtk_label_set_text (label, "I Was Double-Clicked!");
        }
        else {
            gtk_label_set_text (label, "Double-Click Me Again!");
        }
    }
    return FALSE;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_gtk_eventbox.gif" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_gtk_eventbox.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Vision-par-Ordinateur-avec-OpenCV"><a class="Link3" href="#">Vision par Ordinateur avec OpenCV</a></h1><div class="Body3"><br><b>OpenCV </b>est une bibliothèque de vision par ordinateur.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618653283888"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618653283888");</script></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/b_opencv.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/b_opencv.png"></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-Installer-OpenCV-sous-MinGW"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">Installer OpenCV sous MinGW</a></h2><br><h3 class="Title8 GTitle3">Télécharger OpenCV</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/opencv/opencv/archive/refs/tags/2.4.13.7.zip">https://github.com/opencv/opencv/archive/refs/tags/2.4.13.7.zip</a><br><br><h3 class="Title8 GTitle3">Extraire OpenCV</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">2.4.13.7.zip -&gt; Clic droit
Extraire vers 2.4.13.7\</pre></div></div><br><h3 class="Title8 GTitle3">Construire OpenCV</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">set "PATH=C:\TDM-GCC-64\bin:%PATH%"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">cd 2.4.13.7
mkdir build
cd build
cmake .. -G "MinGW Makefiles" -DCMAKE_INSTALL_PREFIX=dev
mingw32-make
mingw32-make install</pre></div></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-Tester-OpenCV-sous-MinGW"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">Tester OpenCV sous MinGW</a></h2><br><h3 class="Title8 GTitle3">Editer le programme</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;opencv2/core/core_c.h&gt;
#include &lt;opencv2/highgui/highgui_c.h&gt;
//===============================================
int main(int argc, char** argv) {
    IplImage* lImg = cvLoadImage("image.png", CV_LOAD_IMAGE_COLOR);
    cvNamedWindow("ReadyApp", CV_WINDOW_AUTOSIZE);
    cvShowImage("ReadyApp", lImg);
    cvWaitKey(0);
    cvReleaseImage(&amp;lImg);
    cvDestroyAllWindows();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">set "PATH=C:\TDM-GCC-64\bin;%PATH%"
set "PATH=ReadyLib\opencv\bin;%PATH%"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">gcc -c main.c -o main.o -I"ReadyLib\opencv\include"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">gcc -o rdc.exe main.o -L"ReadyLib\opencv\lib" ^
-lopencv_core2413 -lopencv_highgui2413</pre></div></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">rdc.exe</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_opencv_test.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_opencv_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Base-de-donnees-avec-SQLite"><a class="Link3" href="#">Base de données avec SQLite</a></h1><div class="Body3"><br><b>SQLite </b>est un système de gestion de base de données relationnelle accessible par le langage SQL et dont l'intégralité de la base de données (déclarations, tables, index et données) est stockée dans un fichier indépendant de la plateforme.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618653104019"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618653104019");</script></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/b_sqlite.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/b_sqlite.png"></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-Installer-SQLite-sous-MSYS2"><a class="Link9" href="#Base-de-donnees-avec-SQLite">Installer SQLite sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Installer SQLite</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">pacman -S --needed --noconfirm mingw-w64-i686-sqlite3</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-Tester-SQLite-sous-MSYS2"><a class="Link9" href="#Base-de-donnees-avec-SQLite">Tester SQLite sous MSYS2</a></h2><br><h3 class="Title8 GTitle3">Éditer le programme</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;sqlite3.h&gt;
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    // on recupere la version de SQLite
    const char* lVersion = sqlite3_libversion();
    // on affiche la version de SQLite
    printf("SQLite version %s\n", lVersion);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">gcc -std=gnu11 -c ./main.c -o ./main.o \
-I/mingw32/include</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">gcc -o ./rdc.exe ./main.o  \
-L/mingw32/lib -lsqlite3</pre></div></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">./rdc.exe</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">SQLite version 3.35.2</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-Afficher-la-version-de-SQLite"><a class="Link9" href="#Base-de-donnees-avec-SQLite">Afficher la version de SQLite</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;sqlite3.h&gt;
//===============================================
int main(int argc, char** argv) {
    const char* lVersion = sqlite3_libversion();
    printf("SQLite version %s\n", lVersion);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">SQLite version 3.35.4</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-Creer-une-table"><a class="Link9" href="#Base-de-donnees-avec-SQLite">Créer une table</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;sqlite3.h&gt;
//===============================================
int main(int argc, char** argv) {
    sqlite3* lDb;
    char* lError;
    int lAnswer;
    char lSql[256] = ""
    "create table if not exists config_data(\n"
    "config_key text,\n"
    "config_value text\n"
    ")\n"
    "";
    sqlite3_open("database.dat", &amp;lDb);
    sqlite3_exec(lDb, lSql, 0, 0, &amp;lError);
    sqlite3_close(lDb);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-Inserer-des-donnees-dans-la-table"><a class="Link9" href="#Base-de-donnees-avec-SQLite">Insérer des données dans la table</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;sqlite3.h&gt;
//===============================================
int main(int argc, char** argv) {
    sqlite3* lDb;
    char* lError;
    int lAnswer;
    char lSql[256] = ""
    "insert into config_data(config_key, config_value)\n"
    "values('fullname', 'Gerard KESSE')\n"
    "";
    sqlite3_open("database.dat", &amp;lDb);
    sqlite3_exec(lDb, lSql, 0, 0, &amp;lError);
    sqlite3_close(lDb);
    return 0;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-Afficher-la-liste-des-tables"><a class="Link9" href="#Base-de-donnees-avec-SQLite">Afficher la liste des tables</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;sqlite3.h&gt;
//===============================================
static int onExec(void* params, int colCount, char** colValue, char** colName);
//===============================================
int main(int argc, char** argv) {
    sqlite3* lDb;
    char* lError;
    int lAnswer;
    char lSql[256] = ""
    "select name from sqlite_master\n"
    "where type='table'\n"
    "";
    sqlite3_open("database.dat", &amp;lDb);
    sqlite3_exec(lDb, lSql, onExec, 0, &amp;lError);
    sqlite3_close(lDb);
    return 0;
}
//===============================================
static int onExec(void* params, int colCount, char** colValue, char** colName) {
    const char* lValue = colValue[0];
    printf("%s\n", lValue);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">config_data</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-Afficher-les-donnees-de-la-table"><a class="Link9" href="#Base-de-donnees-avec-SQLite">Afficher les données de la table</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;sqlite3.h&gt;
//===============================================
static int onExec(void* params, int colCount, char** colValue, char** colName);
//===============================================
int main(int argc, char** argv) {
    sqlite3* lDb;
    char* lError;
    char lSql[256] = ""
    "select * from config_data\n"
    "";
    sqlite3_open("database.dat", &amp;lDb);
    sqlite3_exec(lDb, lSql, onExec, 0, &amp;lError);
    sqlite3_close(lDb);
    return 0;
}
//===============================================
static int onExec(void* params, int colCount, char** colValue, char** colName) {
    for(int i = 0; i &lt; colCount; i++) {
        const char* lValue = colValue[i];
        if(i != 0) {printf(" | ");}
        printf("%*s", -20, lValue);
    }
    printf("\n");
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">fullname             | Gerard KESSE
username             | gkesse
password             | 123456</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-Afficher-les-noms-des-colonnes"><a class="Link9" href="#Base-de-donnees-avec-SQLite">Afficher les noms des colonnes</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;sqlite3.h&gt;
//===============================================
static int onExec(void* params, int colCount, char** colValue, char** colName);
//===============================================
int main(int argc, char** argv) {
    sqlite3* lDb;
    char* lError;
    int lHeader = 1;
    char lSql[256] = ""
    "select * from config_data\n"
    "";
    sqlite3_open("database.dat", &amp;lDb);
    sqlite3_exec(lDb, lSql, onExec, &amp;lHeader, &amp;lError);
    sqlite3_close(lDb);
    return 0;
}
//===============================================
static int onExec(void* params, int colCount, char** colValue, char** colName) {
    int* lHeader = (int*)params;
    // header
    if((*lHeader) == 1) {
        for(int i = 0; i &lt; colCount; i++) {
            const char* lName = colName[i];
            if(i != 0) {printf(" | ");}
            printf("%*s", -20, lName);
        }
        (*lHeader) = 0;
        printf("\n");
    }
    // data
    for(int i = 0; i &lt; colCount; i++) {
        const char* lValue = colValue[i];
        if(i != 0) {printf(" | ");}
        printf("%*s", -20, lValue);
    }
    printf("\n");
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">config_key           | config_value
fullname             | Gerard KESSE
username             | gkesse
password             | 123456</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-Ajouter-un--separateur-entre-les-noms-des-colonnes-et-les-donnees"><a class="Link9" href="#Base-de-donnees-avec-SQLite">Ajouter un&nbsp; séparateur entre les noms des colonnes et les données</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;sqlite3.h&gt;
//===============================================
static int onExec(void* params, int colCount, char** colValue, char** colName);
//===============================================
int main(int argc, char** argv) {
    sqlite3* lDb;
    char* lError;
    int lHeader = 1;
    char lSql[256] = ""
    "select * from config_data\n"
    "";
    sqlite3_open("database.dat", &amp;lDb);
    sqlite3_exec(lDb, lSql, onExec, &amp;lHeader, &amp;lError);
    sqlite3_close(lDb);
    return 0;
}
//===============================================
static int onExec(void* params, int colCount, char** colValue, char** colName) {
    int* lHeader = (int*)params;
    // header
    if((*lHeader) == 1) {
        for(int i = 0; i &lt; colCount; i++) {
            const char* lName = colName[i];
            if(i != 0) {printf(" | ");}
            printf("%*s", -20, lName);
        }
        printf("\n");
        // sep
        for(int i = 0; i &lt; colCount; i++) {
            if(i != 0) {printf("-|-");}
            for(int j = 0; j &lt; 20; j++) {
                printf("-");
            }
        }
        (*lHeader) = 0;
        printf("\n");
    }
    // data
    for(int i = 0; i &lt; colCount; i++) {
        const char* lValue = colValue[i];
        if(i != 0) {printf(" | ");}
        printf("%*s", -20, lValue);
    }
    printf("\n");
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">config_key           | config_value
---------------------|---------------------
fullname             | Gerard KESSE
username             | gkesse
password             | 123456</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Socket-sous-Windows"><a class="Link3" href="#">Socket sous Windows</a></h1><div class="Body3"><br>Une <b>Socket </b>est une structure logicielle dans un nœud de réseau d'un réseau informatique qui sert de point de terminaison pour envoyer et recevoir des données sur le réseau. La structure et les propriétés d'une socket sont définies par une interface de programmation d'application (API) pour l'architecture réseau. Les sockets sont créées uniquement pendant la durée de vie d'un processus d'une application s'exécutant dans le nœud. Une socket est identifiée de manière externe aux autres hôtes par son adresse de socket , qui est la triade du protocole de transport , de l'adresse IP et du numéro de port . Une socket est aussi utilisée pour le point de terminaison logiciel de la communication inter-processus interne au nœud (IPC).<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620670499920"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620670499920");</script></div><br><h2 class="Title7 GTitle2" id="Socket-sous-Windows-Afficher-les-interfaces-reseau"><a class="Link9" href="#Socket-sous-Windows">Afficher les interfaces réseau</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;winsock2.h&gt;
#include &lt;iphlpapi.h&gt;
#include &lt;ws2tcpip.h&gt;
//===============================================
int main(int argc, char** argv) {
    WSADATA d;
    DWORD asize = 20000;
    PIP_ADAPTER_ADDRESSES adapters;
    PIP_ADAPTER_UNICAST_ADDRESS address;
    int lFamily;
    char* lFamilyName;
    char lHost[256];
    
    WSAStartup(MAKEWORD(2, 2), &amp;d);

    adapters = (PIP_ADAPTER_ADDRESSES)malloc(asize);
    GetAdaptersAddresses(AF_UNSPEC, GAA_FLAG_INCLUDE_PREFIX, 0, adapters, &amp;asize);
    
    while(1) {
        if(adapters == 0) {break;}
        printf("Adapter name: %S\n", adapters-&gt;FriendlyName);

        address = adapters-&gt;FirstUnicastAddress;
        
        while(1) {
            if(address == 0) {break;}
            lFamily = address-&gt;Address.lpSockaddr-&gt;sa_family;
            lFamilyName = (lFamily == AF_INET) ? "IPv4" : "IPv6";
            printf("\t%s", lFamilyName);
            
            getnameinfo(address-&gt;Address.lpSockaddr,
            address-&gt;Address.iSockaddrLength,
            lHost, sizeof(lHost), 0, 0, NI_NUMERICHOST);
            printf("\t%s\n", lHost);
            
            address = address-&gt;Next;
        }
        
        adapters = adapters-&gt;Next;
        printf("\n");
    }

    free(adapters);
    WSACleanup();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_socket_network_interface.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_socket_network_interface.png"></div><br><h2 class="Title7 GTitle2" id="Socket-sous-Windows-Afficher-la-version-maximale-de-winsock2-supportee"><a class="Link9" href="#Socket-sous-Windows">Afficher la version maximale de winsock2 supportée</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;winsock2.h&gt;
//===============================================
int main(int argc, char** argv) {
    WSADATA wsaData;
    WSAStartup(MAKEWORD(2,1), &amp;wsaData);
    
    printf("Version en cours : %u.%u\n", LOBYTE(wsaData.wVersion),
    HIBYTE(wsaData.wVersion));
    printf("Version maximale supportee : %u.%u\n", LOBYTE(wsaData.wHighVersion),
    HIBYTE(wsaData.wHighVersion));
    
    WSACleanup();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_socket_version.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_socket_version.png"></div><br><h2 class="Title7 GTitle2" id="Socket-sous-Windows-Echanger-des-donnees-entre-un-client-serveur"><a class="Link9" href="#Socket-sous-Windows">Echanger des données entre un client/serveur</a></h2><br><h3 class="Title8 GTitle3">main.c (serveur)<br></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;winsock2.h&gt;
//===============================================
int main(int argc, char** argv) {
    WSADATA wsaData;
    WSAStartup(MAKEWORD(2,1), &amp;wsaData);
    
    int Port = 5150;
    SOCKADDR_IN ServerAddr;
    ServerAddr.sin_family = AF_INET;
    ServerAddr.sin_port = htons(Port);
    ServerAddr.sin_addr.s_addr = htonl(INADDR_ANY);    

    SOCKET ListeningSocket = socket(AF_INET, SOCK_STREAM, IPPROTO_TCP);
    bind(ListeningSocket, (SOCKADDR *)&amp;ServerAddr, sizeof(ServerAddr));
    listen(ListeningSocket, 5);
    
    SOCKET NewConnection = accept(ListeningSocket, NULL, NULL);
    
    char lMessage[256];
    int lBytes = recv(NewConnection, lMessage, sizeof(lMessage), 0);
    lMessage[lBytes] = 0;
    printf("[server] recv : %s\n", lMessage);
    sprintf(lMessage, "Bonjour ! Je suis le serveur");
    send(NewConnection, lMessage, strlen(lMessage), 0);
    printf("[server] send : %s\n", lMessage);

    closesocket(NewConnection);
    closesocket(ListeningSocket);
    WSACleanup();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">main.c (client)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;winsock2.h&gt;
#include &lt;iphlpapi.h&gt;
#include &lt;ws2tcpip.h&gt;
//===============================================
int main(int argc, char** argv) {
    WSADATA wsaData;
    WSAStartup(MAKEWORD(2, 2), &amp;wsaData);

    int Port = 5150;
    SOCKADDR_IN ServerAddr;
    ServerAddr.sin_family = AF_INET;
    ServerAddr.sin_port = htons(Port);
    ServerAddr.sin_addr.s_addr = inet_addr("127.0.0.1");
     
    SOCKET SendingSocket = socket(AF_INET, SOCK_STREAM, IPPROTO_TCP);
    connect(SendingSocket, (SOCKADDR *) &amp;ServerAddr, sizeof(ServerAddr));
        
    char lMessage[256];
    sprintf(lMessage, "Bonjour ! Qui est-tu ?");
    send(SendingSocket, lMessage, strlen(lMessage), 0);
    printf("[client] send : %s\n", lMessage);
    int lBytes = recv(SendingSocket, lMessage, sizeof(lMessage), 0);
    lMessage[lBytes] = 0;
    printf("[client] recv : %s\n", lMessage);
    
    closesocket(SendingSocket);
    WSACleanup();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat (serveur)</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_socket_win_data_server.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_socket_win_data_server.png"></div><br><h3 class="Title8 GTitle3">Résultat (client)</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_socket_win_data_client.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_socket_win_data_client.png"></div><br><h2 class="Title7 GTitle2" id="Socket-sous-Windows-Echanger-la-date-entre-un-client-serveur"><a class="Link9" href="#Socket-sous-Windows">Echanger la date entre un client/serveur</a></h2><br><h3 class="Title8 GTitle3">main.c (serveur)<br></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;winsock2.h&gt;
#include &lt;iphlpapi.h&gt;
#include &lt;ws2tcpip.h&gt;
//===============================================
int main(int argc, char** argv) {
    WSADATA d;
    WSAStartup(MAKEWORD(2, 2), &amp;d);

    struct addrinfo hints;
    memset(&amp;hints, 0, sizeof(hints));
    hints.ai_family = AF_INET;
    hints.ai_socktype = SOCK_STREAM;
    hints.ai_flags = AI_PASSIVE;
    
    struct addrinfo *bind_address;
    getaddrinfo(0, "8080", &amp;hints, &amp;bind_address);

    SOCKET socket_listen = socket(bind_address-&gt;ai_family,
    bind_address-&gt;ai_socktype, bind_address-&gt;ai_protocol);
    bind(socket_listen, bind_address-&gt;ai_addr, bind_address-&gt;ai_addrlen);
    freeaddrinfo(bind_address);
    listen(socket_listen, 10);

    struct sockaddr_storage client_address;
    socklen_t client_len = sizeof(client_address);
    SOCKET socket_client = accept(socket_listen, (struct sockaddr*) &amp;client_address, &amp;client_len);
    
    char lMessage[256];
    int lBytes = recv(socket_client, lMessage, sizeof(lMessage), 0);
    lMessage[lBytes] = 0;
    printf("[server] recv : %s\n", lMessage);
    
    time_t timer;
    time(&amp;timer);
    char *time_msg = ctime(&amp;timer);
    send(socket_client, time_msg, strlen(time_msg), 0);
    printf("[server] send : %s\n", time_msg);
    
    closesocket(socket_client);
    closesocket(socket_listen);
    WSACleanup();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">main.c (client)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;winsock2.h&gt;
#include &lt;iphlpapi.h&gt;
#include &lt;ws2tcpip.h&gt;
//===============================================
int main(int argc, char** argv) {
    WSADATA wsaData;
    WSAStartup(MAKEWORD(2, 2), &amp;wsaData);

    struct addrinfo hints;
    memset(&amp;hints, 0, sizeof(hints));
    hints.ai_socktype = SOCK_STREAM;

    struct addrinfo *peer_address;
    getaddrinfo("127.0.0.1", "8080", &amp;hints, &amp;peer_address);
    
    SOCKET socket_peer = socket(peer_address-&gt;ai_family, 
    peer_address-&gt;ai_socktype, peer_address-&gt;ai_protocol);
    connect(socket_peer, 
    peer_address-&gt;ai_addr, peer_address-&gt;ai_addrlen);
    freeaddrinfo(peer_address);
    
    char lMessage[256];
    sprintf(lMessage, "Bonjour ! C'est quoi la date ?");
    send(socket_peer, lMessage, strlen(lMessage), 0);
    printf("[client] send : %s\n", lMessage);

    int lBytes = recv(socket_peer, lMessage, sizeof(lMessage), 0);
    lMessage[lBytes] = 0;
    printf("[client] recv : %s\n", lMessage);

    closesocket(socket_peer);
    WSACleanup();
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat (serveur)</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_socket_win_date_server.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_socket_win_date_server.png"></div><br><h3 class="Title8 GTitle3">Résultat (client)</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_socket_win_date_client.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_socket_win_date_client.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Date"><a class="Link3" href="#">Date</a></h1><div class="Body3"><br>La <b>date </b>est une indication de temps visant à définir un jour unique, généralement du calendrier grégorien. On l’utilise notamment pour repérer, avec l’heure, un événement temporel donné. Le calendrier grégorien, utilisé aujourd’hui par la plupart des pays européens, se base sur une année terrestre, c’est-à-dire une révolution de la Terre autour du soleil. Il découpe l’année en douze mois, pour un total de 365 jours (à l’exception des années bissextiles qui en comportent 366), soit 28 (29 pour les années bissextiles), 30 ou 31 jours par mois.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620671644111"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620671644111");</script></div><br><h2 class="Title7 GTitle2" id="Date-Afficher-la-date"><a class="Link9" href="#Date">Afficher la date</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;time.h&gt;
//===============================================
int main(int argc, char** argv) {
    time_t timer;
    char* lDate;
    
    time(&amp;timer);
    lDate = ctime(&amp;timer);
    
    printf ("Local time is: %s", lDate);
    return 0;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/C0/img/i_date_show.png" class="lazy" data-src="/Tutoriels/Software_Development/C0/img/i_date_show.png"></div><br></div></div></div></div><br>