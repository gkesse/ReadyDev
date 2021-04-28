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
            l_state = "multiple_a";
        }
        // on calcule les multiples de a
        else if(l_state == "multiple_a") {
            std::cout &lt;&lt; "Multiple A : ";
            for(int i = 0, j = 0; i &lt; l_n; i++) {
                if(i == 0) {continue;}
                int l_ma = l_a*i;
                if(l_ma &gt;= l_n) {break;}
                if(j != 0) {std::cout &lt;&lt; " ; ";}
                std::cout &lt;&lt; l_ma;
                l_s += l_ma;
                j++;
            }
            std::cout &lt;&lt; "\n";
            l_state = "multiple_b";
        }
        // on calcule les multiples de b
        else if(l_state == "multiple_b") {
            std::cout &lt;&lt; "Multiple B : ";
            for(int i = 0, j = 0; i &lt; l_n; i++) {
                if(i == 0) {continue;}
                int l_mb = l_b*i;
                if(l_mb &gt;= l_n) {break;}
                if(j != 0) {std::cout &lt;&lt; " ; ";}
                std::cout &lt;&lt; l_mb;
                l_s += l_mb;
                j++;
            }
            std::cout &lt;&lt; "\n";
            l_state = "show_a_b";
        }
        // on affiche les resultats
        else if(l_state == "show_a_b") {
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
Multiple A : 3 ; 6 ; 9
Multiple B : 5
A : 3
B : 5
N : 10
S : 23 </xmp></pre></div><br><h2 class="Title7 GTitle2" id="C++-2.3.2 - Test avec les données (3, 5, 1000)"><a class="Link9" href="#C++">2.3.2 - Test avec les données (3, 5, 1000)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Multiple de A ou B
Saisir A : 3
Saisir B : 5
Saisir N : 1000
Multiple A : 3 ; 6 ; 9 ; 12 ; 15 ; 18 ; 21 ; 24 ; 27 ; 30 ; 33 ; 36 ; 39 ; 42 ; 45 ; 48 ; 51 ; 54 ; 57 ; 60 ; 63 ; 66 ; 69 ; 72 ; 75 ; 78 ; 81 ; 84 ; 87 ; 90 ; 93 ; 96 ; 99 ; 102 ; 105 ; 108 ; 111 ; 114 ; 117 ; 120 ; 123 ; 126 ; 129 ; 132 ; 135 ; 138 ; 141 ; 144 ; 147 ; 150 ; 153 ; 156 ; 159 ; 162 ; 165 ; 168 ; 171 ; 174 ; 177 ; 180 ; 183 ; 186 ; 189 ; 192 ; 195 ; 198 ; 201 ; 204 ; 207 ; 210 ; 213 ; 216 ; 219 ; 222 ; 225 ; 228 ; 231 ; 234 ; 237 ; 240 ; 243 ; 246 ; 249 ; 252 ; 255 ; 258 ; 261 ; 264 ; 267 ; 270 ; 273 ; 276 ; 279 ; 282 ; 285 ; 288 ; 291 ; 294 ; 297 ; 300 ; 303 ; 306 ; 309 ; 312 ; 315 ; 318 ; 321 ; 324 ; 327 ; 330 ; 333 ; 336 ; 339 ; 342 ; 345 ; 348 ; 351 ; 354 ; 357 ; 360 ; 363 ; 366 ; 369 ; 372 ; 375 ; 378 ; 381 ; 384 ; 387 ; 390 ; 393 ; 396 ; 399 ; 402 ; 405 ; 408 ; 411 ; 414 ; 417 ; 420 ; 423 ; 426 ; 429 ; 432 ; 435 ; 438 ; 441 ; 444 ; 447 ; 450 ; 453 ; 456 ; 459 ; 462 ; 465 ; 468 ; 471 ; 474 ; 477 ; 480 ; 483 ; 486 ; 489 ; 492 ; 495 ; 498 ; 501 ; 504 ; 507 ; 510 ; 513 ; 516 ; 519 ; 522 ; 525 ; 528 ; 531 ; 534 ; 537 ; 540 ; 543 ; 546 ; 549 ; 552 ; 555 ; 558 ; 561 ; 564 ; 567 ; 570 ; 573 ; 576 ; 579 ; 582 ; 585 ; 588 ; 591 ; 594 ; 597 ; 600 ; 603 ; 606 ; 609 ; 612 ; 615 ; 618 ; 621 ; 624 ; 627 ; 630 ; 633 ; 636 ; 639 ; 642 ; 645 ; 648 ; 651 ; 654 ; 657 ; 660 ; 663 ; 666 ; 669 ; 672 ; 675 ; 678 ; 681 ; 684 ; 687 ; 690 ; 693 ; 696 ; 699 ; 702 ; 705 ; 708 ; 711 ; 714 ; 717 ; 720 ; 723 ; 726 ; 729 ; 732 ; 735 ; 738 ; 741 ; 744 ; 747 ; 750 ; 753 ; 756 ; 759 ; 762 ; 765 ; 768 ; 771 ; 774 ; 777 ; 780 ; 783 ; 786 ; 789 ; 792 ; 795 ; 798 ; 801 ; 804 ; 807 ; 810 ; 813 ; 816 ; 819 ; 822 ; 825 ; 828 ; 831 ; 834 ; 837 ; 840 ; 843 ; 846 ; 849 ; 852 ; 855 ; 858 ; 861 ; 864 ; 867 ; 870 ; 873 ; 876 ; 879 ; 882 ; 885 ; 888 ; 891 ; 894 ; 897 ; 900 ; 903 ; 906 ; 909 ; 912 ; 915 ; 918 ; 921 ; 924 ; 927 ; 930 ; 933 ; 936 ; 939 ; 942 ; 945 ; 948 ; 951 ; 954 ; 957 ; 960 ; 963 ; 966 ; 969 ; 972 ; 975 ; 978 ; 981 ; 984 ; 987 ; 990 ; 993 ; 996 ; 999
Multiple B : 5 ; 10 ; 15 ; 20 ; 25 ; 30 ; 35 ; 40 ; 45 ; 50 ; 55 ; 60 ; 65 ; 70 ; 75 ; 80 ; 85 ; 90 ; 95 ; 100 ; 105 ; 110 ; 115 ; 120 ; 125 ; 130 ; 135 ; 140 ; 145 ; 150 ; 155 ; 160 ; 165 ; 170 ; 175 ; 180 ; 185 ; 190 ; 195 ; 200 ; 205 ; 210 ; 215 ; 220 ; 225 ; 230 ; 235 ; 240 ; 245 ; 250 ; 255 ; 260 ; 265 ; 270 ; 275 ; 280 ; 285 ; 290 ; 295 ; 300 ; 305 ; 310 ; 315 ; 320 ; 325 ; 330 ; 335 ; 340 ; 345 ; 350 ; 355 ; 360 ; 365 ; 370 ; 375 ; 380 ; 385 ; 390 ; 395 ; 400 ; 405 ; 410 ; 415 ; 420 ; 425 ; 430 ; 435 ; 440 ; 445 ; 450 ; 455 ; 460 ; 465 ; 470 ; 475 ; 480 ; 485 ; 490 ; 495 ; 500 ; 505 ; 510 ; 515 ; 520 ; 525 ; 530 ; 535 ; 540 ; 545 ; 550 ; 555 ; 560 ; 565 ; 570 ; 575 ; 580 ; 585 ; 590 ; 595 ; 600 ; 605 ; 610 ; 615 ; 620 ; 625 ; 630 ; 635 ; 640 ; 645 ; 650 ; 655 ; 660 ; 665 ; 670 ; 675 ; 680 ; 685 ; 690 ; 695 ; 700 ; 705 ; 710 ; 715 ; 720 ; 725 ; 730 ; 735 ; 740 ; 745 ; 750 ; 755 ; 760 ; 765 ; 770 ; 775 ; 780 ; 785 ; 790 ; 795 ; 800 ; 805 ; 810 ; 815 ; 820 ; 825 ; 830 ; 835 ; 840 ; 845 ; 850 ; 855 ; 860 ; 865 ; 870 ; 875 ; 880 ; 885 ; 890 ; 895 ; 900 ; 905 ; 910 ; 915 ; 920 ; 925 ; 930 ; 935 ; 940 ; 945 ; 950 ; 955 ; 960 ; 965 ; 970 ; 975 ; 980 ; 985 ; 990 ; 995
A : 3
B : 5
N : 1000
S : 266333</xmp></pre></div><br></div></div></div></div><br>