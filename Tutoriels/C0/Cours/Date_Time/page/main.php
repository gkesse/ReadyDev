<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Lire la date et l'heure en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à lire la date et l'heure en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/b_date_time.png" alt="/Tutoriels/C0/img/b_date_time.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Lire la date et l'heure"><a class="Link3" href="#">Lire la date et l'heure</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599411222455"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599411222455");</script></div><br><h2 class="Title7 GTitle2" id="Lire la date et l'heure-Introduction"><a class="Link9" href="#Lire la date et l'heure">Introduction</a></h2><br>Le concept de l'horodatage permet dater une information ou un évènement dans le temps. C'est le cas par exemple lors de la création du compte d'un utilisateur pour une application donnée. La valeur représentant la date et l'heure est appelée (timestamp), c'est un nombre long. Sa lecture se fait par la fonction (time) et sa conversion en structure date et heure (datetime) se fait par la fonction (localtime).<br><br>Dans l'exemple qui suit, nous essayons de lire la date et l'heure courante. on affiche aussi le jour de la semaine et le mois correspondant.<br><br><h2 class="Title7 GTitle2" id="Lire la date et l'heure-Programme principal"><a class="Link9" href="#Lire la date et l'heure">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int main(int argc, char** argv) {
    char lDate[256];
    char lDay[256];
    char lMonth[256];
    
    GDate_DateTime(lDate);
    GDate_DayName(lDay);
    GDate_MonthName(lMonth);
    
    printf("%-20s : %s\n", "DATE", lDate);
    printf("%-20s : %s\n", "JOUR", lDay);
    printf("%-20s : %s\n", "MOIS", lMonth);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lire la date et l'heure-Affichage du menu système"><a class="Link9" href="#Lire la date et l'heure">Affichage du menu système</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GElevator_MENU(int argc, char** argv) {
    printf("\n");
    printf("MENU !!!\n");
    printf("\t%-2s : %s\n", "m", "afficher le menu");
    printf("\t%-2s : %s\n", "1", "ouvrir l'ascenseur");
    printf("\t%-2s : %s\n", "2", "fermer l'ascenseur");
    printf("\t%-2s : %s\n", "3", "choisir un niveau");
    printf("\t%-2s : %s\n", "4", "demarrer l'ascenseur");
    printf("\t%-2s : %s\n", "q", "quitter l'application");
    G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lire la date et l'heure-Choix d'une option système"><a class="Link9" href="#Lire la date et l'heure">Choix d'une option système</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GElevator_CHOICE(int argc, char** argv) {
    printf("\n");
    printf("CHOIX ? : ");
    char lAnswer[256];
    fgets(lAnswer, 255, stdin); 
    lAnswer[strlen(lAnswer)-1] = 0;
    if(!strcmp(lAnswer, "m")) {G_STATE = "S_MENU";}
    else if(!strcmp(lAnswer, "1")) {G_STATE = "S_OPEN";}
    else if(!strcmp(lAnswer, "2")) {G_STATE = "S_CLOSE";}
    else if(!strcmp(lAnswer, "3")) {G_STATE = "S_LEVEL";}
    else if(!strcmp(lAnswer, "4")) {G_STATE = "S_START";}
    else if(!strcmp(lAnswer, "q")) {G_STATE = "S_QUIT";}
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lire la date et l'heure-Ouverture de l'ascenseur"><a class="Link9" href="#Lire la date et l'heure">Ouverture de l'ascenseur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GElevator_OPEN(int argc, char** argv) {
    printf("[info] ouverture de l'ascenseur...\n");
    G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lire la date et l'heure-Fermeture de l'ascenseur"><a class="Link9" href="#Lire la date et l'heure">Fermeture de l'ascenseur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GElevator_CLOSE(int argc, char** argv) {
    printf("[info] fermeture de l'ascenseur...\n");
    G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lire la date et l'heure-Choix d'un niveau de destination"><a class="Link9" href="#Lire la date et l'heure">Choix d'un niveau de destination</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GElevator_LEVEL(int argc, char** argv) {
    printf("[info] choix du niveau de destination...\n");
    G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lire la date et l'heure-Démarrage de l'ascenseur"><a class="Link9" href="#Lire la date et l'heure">Démarrage de l'ascenseur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GElevator_START(int argc, char** argv) {
    printf("[info] demarrage de l'ascenseur...\n");
    G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lire la date et l'heure-Quitter l'application"><a class="Link9" href="#Lire la date et l'heure">Quitter l'application</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GElevator_QUIT(int argc, char** argv) {
    printf("[info] quitter l'application...\n");
    G_STATE = "S_END";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lire la date et l'heure-Résultat"><a class="Link9" href="#Lire la date et l'heure">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/i_date_time.png" alt="/Tutoriels/C0/img/i_date_time.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465340717"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1594465340717","C","basics");</script></div><br><span class="GColor1" style="color:lime;">Programmation avancée en C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465358756"><div class="Row26">List 1 &gt; C &gt; advanced</div></div><script>loadList1("Loader_1594465358756","C","advanced");</script></div><br></div></div></div></div><br>