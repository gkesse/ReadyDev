<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en Shell<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>Shell</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Shell </b>est un interpréteur de commandes destiné aux systèmes d'exploitation de type Unix qui permet d'accéder aux fonctionnalités internes du système d'exploitation. Il se présente sous la forme d'une interface en ligne de commande accessible depuis la console ou un terminal. L'utilisateur lance des commandes sous forme d'une entrée texte exécutée ensuite par le shell.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Shell/img/b_shell.png" alt="/Tutoriels/Software_Development/Shell/img/b_shell.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Shell.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617650179524"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617650179524");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous MSYS2"><a class="Link9" href="#Installation">1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger MSYS2"><a class="Link9" href="#Installation">1.1.1 - Télécharger MSYS2</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://repo.msys2.org/distrib/x86_64/">http://repo.msys2.org/distrib/x86_64/</a><br><br><b>msys2-x86_64-20210228.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Installer MSYS2"><a class="Link9" href="#Installation">1.1.2 - Installer MSYS2</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">msys2-x86_64-20210228.exe
Suivant
Dossier d'installation -&gt; C:\msys64
Suivant
Raccourci du menu Démarrer -&gt; MSYS2 64bit
Suivant
Suivant
Terminer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.3 - Démarrer MSYS2"><a class="Link9" href="#Installation">1.1.3 - Démarrer MSYS2</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
MSYS2</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-2 - Installation sous Linux"><a class="Link9" href="#Installation">2 - Installation sous Linux</a></h2><br>Aucune installation n'est nécessaire.<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Shell.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617650828720"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617650828720");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous MSYS2"><a class="Link9" href="#Tests">1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Éditer le programme"><a class="Link9" href="#Tests">1.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.sh</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
# on affiche un message a l'ecran
echo "Bonjour tout le monde"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.2 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./main.sh</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Bonjour tout le monde</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-2 - Test sous Linux"><a class="Link9" href="#Tests">2 - Test sous Linux</a></h2><br><h2 class="Title7 GTitle2" id="Tests-2.1 - Test sous Ubuntu"><a class="Link9" href="#Tests">2.1 - Test sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Tests-2.1.1 - Éditer le programme"><a class="Link9" href="#Tests">2.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.sh</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
# on affiche un message a l'ecran
echo "Bonjour tout le monde"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-2.1.2 - Exécuter le projet"><a class="Link9" href="#Tests">2.1.2 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo chmod 755 main.sh</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./main.sh</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en Shell.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617653866949"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617653866949");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Shell/img/b_shell_admin_system.png" alt="/Tutoriels/Software_Development/Shell/img/b_shell_admin_system.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Introduction"><a class="Link9" href="#Système d'administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités d'une application.<br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme principal"><a class="Link9" href="#Système d'administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.sh</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
function GProcess_Ui() {
    # on initialise la base donnees
    GSQLite_Init
    # on lance le systeme d'administration
    GProcessUi_Run $@
}
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Structure du système d'administration"><a class="Link9" href="#Système d'administration">Structure du système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.sh</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
# on source les scripts dont on aura besoin
# cela permet d'utiliser leurs fonctions
. manager/GSQLiteUi.sh
. manager/GConfig.sh
#================================================
# on definit l'etat global du systeme 
G_STATE=""
#================================================
# on execute la fonction d'entree du systeme
# c'est une machine a etats finis
#================================================
function GProcessUi_Run() {
    # on definit l'etat initial du systeme
    G_STATE="S_INIT"
    # on rentre dans la boucle de controle
    while [ 1 ] ; do
        # on verifie l'etat courant du systeme
        # on exectue la fonction correspondante
        # on fait evoluer le systeme vers l'etat suivant
        if [ "$G_STATE" = "S_INIT" ] ; then GProcessUi_INIT $@
        elif [ "$G_STATE" = "S_METHOD" ] ; then GProcessUi_METHOD $@
        elif [ "$G_STATE" = "S_CHOICE" ] ; then GProcessUi_CHOICE $@
        #
        elif [ "$G_STATE" = "S_SQLITE" ] ; then GProcessUi_SQLITE $@
        elif [ "$G_STATE" = "S_STRING" ] ; then GProcessUi_STRING $@
        #
        elif [ "$G_STATE" = "S_SAVE" ] ; then GProcessUi_SAVE $@
        elif [ "$G_STATE" = "S_LOAD" ] ; then GProcessUi_LOAD $@
        else break
        fi
    done
}
#================================================
# on definit la fonction d'initialisation
# en affichant quelques informations d'ordre general
# puis on passe a l'etat chargement des donnees
#================================================
function GProcessUi_INIT() {
    printf "\n"
    printf "ADMIN !!!\n"
    printf "\t%-2s : %s\n" "-q" "quitter l'application"
    printf "\n"
    G_STATE="S_LOAD"
}
#================================================
# on definit la fonction d'affichage des methodes
# en affichant l'ensemble des modules du systeme
# ou a chaque module on associe un numero d'acces
# (1) pour le module (SQLITE)
# (2) pour le module (STRING) 
# puis on passe a l'etat choix d'une methode
#================================================
function GProcessUi_METHOD() {
    printf "ADMIN :\n"
    printf "\t%-2s : %s\n" "1" "S_SQLITE"
    printf "\t%-2s : %s\n" "2" "S_STRING"
    printf "\n"
    G_STATE="S_CHOICE"
}
#================================================
# on definit la fonction de choix d'une methode
# en demendant a l'utilisateur de saisir le numero
# du module auquel il veut acceder
# puis on passe a l'etat execution du module
#================================================
function GProcessUi_CHOICE() {
    local lAnswer=""
    read -p "ADMIN ($G_ADMIN_ID) ? " lAnswer
    if [ "$lAnswer" = "" ] ; then lAnswer="$G_ADMIN_ID" ; fi
    if [ "$lAnswer" = "-q" ] ; then G_STATE="S_END"
    #
    elif [ "$lAnswer" = "1" ] ; then G_STATE="S_SQLITE" ; G_ADMIN_ID="$lAnswer"
    elif [ "$lAnswer" = "2" ] ; then G_STATE="S_STRING" ; G_ADMIN_ID="$lAnswer"
    #
    fi
}
#================================================
# on definit la fonction d'execution du module SQLITE
# en faisant appel a son interface d'administration
# puis on passe a l'etat sauvegarde des donnees
#================================================
function GProcessUi_SQLITE() {
    GSQLiteUi_Run $@
    G_STATE="S_SAVE"
}
#================================================
# on definit la fonction d'execution du module STRING
# en faisant appel a son interface d'administration
# puis on passe a l'etat sauvegarde des donnees
#================================================
function GProcessUi_STRING() {
    printf "\n"
    printf "GProcessUi_STRING\n"
    G_STATE="S_SAVE"
}
#================================================
# on definit la fonction de sauvegarde des donnees
# sous la forme d'un systeme de cle valeur
# dans une base de donnees SQLite
# puis on passe a l'etat termine
#================================================
function GProcessUi_SAVE() {
    GConfig_SaveData "G_ADMIN_ID" "$G_ADMIN_ID"
    G_STATE="S_END"
}
#================================================
# on definit la fonction de chargement des donnees
# structurees sous la forme d'un systeme de cle/valeur
# dans une base de donnees SQLite
# puis on passe a l'etat affichage des methodes
#================================================
function GProcessUi_LOAD() {
    G_ADMIN_ID=$(GConfig_LoadData "G_ADMIN_ID")
    G_STATE="S_METHOD"
}
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat ds opérations"><a class="Link9" href="#Système d'administration">Résultat ds opérations</a></h2><br><h2 class="Title7 GTitle2" id="Système d'administration-1 - Menu principal"><a class="Link9" href="#Système d'administration">1 - Menu principal</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Shell/img/i_shell_admin_system.png" alt="/Tutoriels/Software_Development/Shell/img/i_shell_admin_system.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-2 - Menu du module SQLite"><a class="Link9" href="#Système d'administration">2 - Menu du module SQLite</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Shell/img/i_shell_admin_system_02.png" alt="/Tutoriels/Software_Development/Shell/img/i_shell_admin_system_02.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-2.1 - Affichage de la version"><a class="Link9" href="#Système d'administration">2.1 - Affichage de la version</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Shell/img/i_shell_admin_system_03.png" alt="/Tutoriels/Software_Development/Shell/img/i_shell_admin_system_03.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-2.2 - Affichage des tables"><a class="Link9" href="#Système d'administration">2.2 - Affichage des tables</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Shell/img/i_shell_admin_system_04.png" alt="/Tutoriels/Software_Development/Shell/img/i_shell_admin_system_04.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-2.3 - Affichage de la table config_data"><a class="Link9" href="#Système d'administration">2.3 - Affichage de la table config_data</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Shell/img/i_shell_admin_system_05.png" alt="/Tutoriels/Software_Development/Shell/img/i_shell_admin_system_05.png"></div><br></div></div></div></div><br>