<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation en mathématiques avec Project Euler<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmtion des mathématiques avec <b>Project Euler</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Project Euler</b> est un site web proposant une série de problèmes mathématiques conçus pour être résolus à l'aide de programmes informatiques. Le but du projet est d'attirer des adultes et des élèves intéressés par les mathématiques et l’informatique. Il comprend actuellement plus de 700 problèmes de difficultés variables, chacun pouvant être résolu en principe en moins d'une minute par un algorithme efficace sur un ordinateur de puissance modeste. De nouveaux problèmes sont progressivement ajoutés, actuellement au rythme d'un toutes les deux semaines, depuis la création du site en 2001. Un forum spécifique à chaque problème est accessible aux utilisateurs qui l'ont résolu. Une section Scores classe également les membres selon le nombre de problèmes résolus. Il existe quatorze niveaux de classement selon le nombre de problèmes résolus, ainsi qu'un classement spécial basé sur la vitesse de résolution des derniers problèmes parus.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Resources/Project_Euler/img/b_project_euler.png" alt="/Tutoriels/Resources/Project_Euler/img/b_project_euler.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="C++"><a class="Link3" href="#">C++</a></h1><div class="Body3"><br>Programmation en C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619634770777"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619634770777");</script></div><br><h2 class="Title7 GTitle2" id="C++-1 - Projet - Bonjour tout le monde"><a class="Link9" href="#C++">1 - Projet - Bonjour tout le monde</a></h2><br><h2 class="Title7 GTitle2" id="C++-1.1 - Objectif"><a class="Link9" href="#C++">1.1 - Objectif</a></h2><br>Afficher un message d'accueil à l'écran.<br><br><h2 class="Title7 GTitle2" id="C++-1.2 - Programme principal"><a class="Link9" href="#C++">1.2 - Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include &lt;iostream&gt;
//================================================
int main(int argc, char** argv) {
    // on affiche le message
    std::cout &lt;&lt; "Bonjour tout le monde\n";
    return 0;
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="C++-1.3 - Résultat"><a class="Link9" href="#C++">1.3 - Résultat</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Bonjour tout le monde</xmp></pre></div><br><h2 class="Title7 GTitle2" id="C++-2 - Projet - Multiples de 3 et 5"><a class="Link9" href="#C++">2 - Projet - Multiples de 3 et 5</a></h2><br><h2 class="Title7 GTitle2" id="C++-2.1 - Objectif"><a class="Link9" href="#C++">2.1 - Objectif</a></h2><br>Si nous listons tous les nombres naturels inférieurs à 10 qui sont des multiples de 3 ou 5, nous obtenons 3, 5, 6 et 9. La somme de ces multiples est 23.<br><br>Trouvez la somme de tous les multiples de 3 ou 5 en dessous de 1000.<br><br><h2 class="Title7 GTitle2" id="C++-2.2 - Programme principal"><a class="Link9" href="#C++">2.2 - Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include &lt;iostream&gt;
//================================================
int main(int argc, char** argv) {
    // on initialise la machine a etat finis
    std::string l_state = "init";
    // on declare le nombre a
    int l_a;
    // on declare le nombre b
    int l_b;
    // on declare la limite n
    int l_n;
    // on declare la somme s
    int l_s = 0;
    // on declare le flag ok
    int l_ok;
    
    while(1) {
        // on affiche le theme
        if(l_state == "init") {
            std::cout &lt;&lt; "Multiple de A ou B\n";
            l_state = "enter_a";
        }
        // on saisit a
        else if(l_state == "enter_a") {
            std::cout &lt;&lt; "Saisir A : ";
            std::cin &gt;&gt; l_a; 
            l_state = "enter_b";
        }
        // on saisit b
        else if(l_state == "enter_b") {
            std::cout &lt;&lt; "Saisir B : ";
            std::cin &gt;&gt; l_b; 
            l_state = "limit_n";
        }
        // on saisit n
        else if(l_state == "limit_n") {
            std::cout &lt;&lt; "Saisir N : ";
            std::cin &gt;&gt; l_n; 
            l_state = "multiple_ab";
        }
        // on calcule les multiples de a(n) ou b(n)
        else if(l_state == "multiple_ab") {
            std::cout &lt;&lt; "Multiple AB : ";
            for(int i = 0, j = 0; i &lt; l_n; i++) {
                if(i == 0) {continue;}
                l_ok = 0;
                if(i % l_a == 0) {l_ok = 1;}
                if(i % l_b == 0) {l_ok = 1;}
                if(l_ok == 1) {
                    //if(j != 0) {std::cout &lt;&lt; " ; ";}
                    //std::cout &lt;&lt; i;
                    l_s += i;
                    j++;
                }
            }
            std::cout &lt;&lt; "\n";
            l_state = "show";
        }
        // on affiche les resultats
        else if(l_state == "show") {
            std::cout &lt;&lt; "A : " &lt;&lt; l_a &lt;&lt; "\n";
            std::cout &lt;&lt; "B : " &lt;&lt; l_b &lt;&lt; "\n";
            std::cout &lt;&lt; "N : " &lt;&lt; l_n &lt;&lt; "\n";
            std::cout &lt;&lt; "S : " &lt;&lt; l_s &lt;&lt; "\n";
            l_state = "end";
        }
        else {break;}
    }
    
    return 0;
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="C++-2.3 - Résultat"><a class="Link9" href="#C++">2.3 - Résultat</a></h2><br><h2 class="Title7 GTitle2" id="C++-2.3.1 - Test avec les données (3, 5, 10)"><a class="Link9" href="#C++">2.3.1 - Test avec les données (3, 5, 10)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Multiple de A ou B
Saisir A : 3
Saisir B : 5
Saisir N : 10
Multiple AB : 3 ; 5 ; 6 ; 9
A : 3
B : 5
N : 10
S : 23</xmp></pre></div><br><h2 class="Title7 GTitle2" id="C++-2.3.2 - Test avec les données (3, 5, 1000)"><a class="Link9" href="#C++">2.3.2 - Test avec les données (3, 5, 1000)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Multiple de A ou B
Saisir A : 3
Saisir B : 5
Saisir N : 1000
Multiple AB :
A : 3
B : 5
N : 1000
S : 233168</xmp></pre></div><br><h2 class="Title7 GTitle2" id="C++-3 - Projet - Numéros pairs de Fibonacci"><a class="Link9" href="#C++">3 - Projet - Numéros pairs de Fibonacci</a></h2><br><h2 class="Title7 GTitle2" id="C++-3.1 - Objectif"><a class="Link9" href="#C++">3.1 - Objectif</a></h2><br>Chaque nouveau terme dans la séquence de Fibonacci est généré en ajoutant les deux termes précédents. En commençant par 1 et 2, les 10 premiers termes seront:<br><br>1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...<br><br>En considérant les termes de la séquence de Fibonacci dont les valeurs ne dépassent pas quatre millions, trouvez la somme des termes pairs.<br><br><h2 class="Title7 GTitle2" id="C++-3.2 - Programme principal"><a class="Link9" href="#C++">3.2 - Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include &lt;iostream&gt;
//================================================
int main(int argc, char** argv) {
    // on initialise la machine a etat finis
    std::string l_state = "init";
    // on declare la limite n
    int l_n;
    // on declare la valeur maximale m
    int l_m;
    // on declare les parametres de la suite de fibonacci f
    int l_f0;
    int l_f1;
    int l_f2;
    // on declare la somme des valeur paires s
    int l_s = 0;
    
    while(1) {
        // on affiche le theme
        if(l_state == "init") {
            std::cout &lt;&lt; "Numero pairs de Fibonacci\n";
            l_state = "limit_n";
        }
        // on saisit n
        else if(l_state == "limit_n") {
            std::cout &lt;&lt; "Saisir N : ";
            std::cin &gt;&gt; l_n;
            l_state = "limit_m";
        }
        // on saisit m
        else if(l_state == "limit_m") {
            std::cout &lt;&lt; "Saisir M : ";
            std::cin &gt;&gt; l_m;
            l_state = "fibonacci_n";
        }
        // on calcule la suite f(n)
        else if(l_state == "fibonacci_n") {
            std::cout &lt;&lt; "Fibonacci N : ";
            l_f0 = 0; l_f1 = 1;
            for(int i = 0; i &lt; l_n; i++) {
                l_f2 = l_f0 + l_f1;
                if(i != 0) {std::cout &lt;&lt; " ; ";}
                std::cout &lt;&lt; l_f2;
                l_f0 = l_f1;
                l_f1 = l_f2;
            }
            std::cout &lt;&lt; "\n";
            l_state = "fibonacci_m";
        }
        // on calcule la suite f(m)
        else if(l_state == "fibonacci_m") {
            std::cout &lt;&lt; "Fibonacci M : ";
            l_f0 = 0; l_f1 = 1;
            for(int i = 0; ; i++) {
                l_f2 = l_f0 + l_f1;
                if(l_f2 &gt;= l_m) {break;}
                //if(i != 0) {std::cout &lt;&lt; " ; ";}
                //std::cout &lt;&lt; l_f2;
                l_f0 = l_f1;
                l_f1 = l_f2;
            }
            std::cout &lt;&lt; "\n";
            l_state = "fibonacci_p";
        }
        // on calcule la somme s(m)
        else if(l_state == "fibonacci_p") {
            std::cout &lt;&lt; "Fibonacci P : ";
            l_f0 = 0; l_f1 = 1;
            for(int i = 0, j = 0; ; i++) {
                l_f2 = l_f0 + l_f1;
                if(l_f2 &gt;= l_m) {break;}
                if(l_f2 %2 == 0) {
                    //if(j != 0) {std::cout &lt;&lt; " ; ";}
                    //std::cout &lt;&lt; l_f2;
                    l_s += l_f2;
                    j++;
                }
                l_f0 = l_f1;
                l_f1 = l_f2;
            }
            std::cout &lt;&lt; "\n";
            l_state = "show";
        }
        // on affiche les resultats
        else if(l_state == "show") {
            std::cout &lt;&lt; "N : " &lt;&lt; l_n &lt;&lt; "\n";
            std::cout &lt;&lt; "M : " &lt;&lt; l_m &lt;&lt; "\n";
            std::cout &lt;&lt; "S : " &lt;&lt; l_s &lt;&lt; "\n";
            l_state = "end";
        }
        else {break;}
    }
    
    return 0;
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="C++-3.3 - Résultat"><a class="Link9" href="#C++">3.3 - Résultat</a></h2><br><h2 class="Title7 GTitle2" id="C++-3.3.1 - Test avec les données (10, 100)"><a class="Link9" href="#C++">3.3.1 - Test avec les données (10, 100)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Numero pairs de Fibonacci
Saisir N : 10
Saisir M : 100
Fibonacci N : 1 ; 2 ; 3 ; 5 ; 8 ; 13 ; 21 ; 34 ; 55 ; 89
Fibonacci M : 1 ; 2 ; 3 ; 5 ; 8 ; 13 ; 21 ; 34 ; 55 ; 89
Fibonacci P : 2 ; 8 ; 34
N : 10
M : 100
S : 44</xmp></pre></div><br><h2 class="Title7 GTitle2" id="C++-3.3.2 - Test avec les données (10, 4000000)"><a class="Link9" href="#C++">3.3.2 - Test avec les données (10, 4000000)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Numero pairs de Fibonacci
Saisir N : 10
Saisir M : 4000000
Fibonacci N : 1 ; 2 ; 3 ; 5 ; 8 ; 13 ; 21 ; 34 ; 55 ; 89
Fibonacci M :
Fibonacci P :
N : 10
M : 4000000
S : 4613732</xmp></pre></div><br></div></div></div></div><br>