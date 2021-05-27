<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en Batch<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>Batch</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Batch </b>est un interpréteur de commandes destiné aux systèmes d'exploitation de type Windows qui permet d'accéder aux fonctionnalités internes du système d'exploitation. Il se présente sous la forme d'une interface en ligne de commande accessible depuis la console ou un terminal. L'utilisateur lance des commandes sous forme d'une entrée texte exécutée ensuite par le batch.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Batch/img/b_batch.png" class="lazy" data-src="/Tutoriels/Software_Development/Batch/img/b_batch.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Batch.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649094292"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649094292");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1---Installation-sous-Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1-1---Installation-sous-Batch"><a class="Link9" href="#Installation">1.1 - Installation sous Batch</a></h2><br>Aucune installation n'est nécessaire.<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Batch.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649178149"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649178149");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1---Test-sous-Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1-1---Test-sous-Batch"><a class="Link9" href="#Tests">1.1 - Test sous Batch</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1-1-1---Editer-le-programme"><a class="Link9" href="#Tests">1.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">@echo off
::===============================================
:: on affiche un message a l'ecran
echo Bonjour tout le monde
::===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-1-2---Executer-le-projet"><a class="Link9" href="#Tests">1.1.2 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">main.bat</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Bonjour tout le monde</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Systeme-d-administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en Shell.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619045578000"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619045578000");</script></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Batch/img/b_batch_admin_system.png" class="lazy" data-src="/Tutoriels/Software_Development/Batch/img/b_batch_admin_system.png"></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Introduction"><a class="Link9" href="#Systeme-d-administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités d'une application.<br><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-principal"><a class="Link9" href="#Systeme-d-administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">::===============================================
:Ui
    :: on initialise la base de donnees
    call manager\GSQLite :Init %*
    :: on appelle le systeme d'administration
    call manager\GProcessUi :Run %*
goto :eof
::===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Structure-du-systeme-d-administration"><a class="Link9" href="#Systeme-d-administration">Structure du système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">@echo off 
::===============================================
call %*
goto :eof
::===============================================
:: on execute la fonction d'entree du systeme
:: c'est une machine a etats finis
::===============================================
:Run
    :: on definit l'etat initial du systeme
    set "G_STATE=S_INIT"   
    :: on rentre dans la boucle de controle
    :: on verifie l'etat courant du systeme
    :: on exectue la fonction correspondante
    :: on fait evoluer le systeme vers l'etat suivant 
:RunLoop
    if "%G_STATE%" == "S_INIT" ( goto INIT %*
    ) else ( if "%G_STATE%" == "S_METHOD" ( goto METHOD %*
    ) else ( if "%G_STATE%" == "S_CHOICE" ( goto CHOICE %*
    ) else ( if "%G_STATE%" == "S_SQLITE" ( goto SQLITE %*
    ) else ( if "%G_STATE%" == "S_STRING" ( goto STRING %*
    ) else ( if "%G_STATE%" == "S_SAVE" ( goto SAVE %*
    ) else ( if "%G_STATE%" == "S_LOAD" ( goto LOAD %*
    ) else ( goto :eof 
    )))))))
goto :RunLoop
::===============================================
:: on definit la fonction d'initialisation
:: en affichant quelques informations d'ordre general
:: puis on passe a l'etat chargement des donnees
::===============================================
:INIT
    printf "\n"
    printf "ADMIN !!!\n"
    printf "\t%%-2s : %%s\n" "-q" "quitter l'application"
    printf "\n"
    set "G_STATE=S_LOAD"
goto :RunLoop
::===============================================
:: on definit la fonction d'affichage des methodes
:: en affichant l'ensemble des modules du systeme
:: ou a chaque module on associe un numero d'acces
:: (1) pour le module (SQLITE)
:: (2) pour le module (STRING) 
:: puis on passe a l'etat choix d'une methode
::===============================================
:METHOD
    printf "ADMIN :\n"
    printf "\t%%-2s : %%s\n" "1" "S_SQLITE"
    printf "\t%%-2s : %%s\n" "2" "S_STRING"
    printf "\n"
    set "G_STATE=S_CHOICE"
goto :RunLoop
::===============================================
:: on definit la fonction de choix d'une methode
:: en demendant a l'utilisateur de saisir le numero
:: du module auquel il veut acceder
:: puis on passe a l'etat execution du module
::===============================================
:CHOICE
    set "lAnswer="
    set /p lAnswer="ADMIN (%G_ADMIN_ID%) ? "
    if "%lAnswer%" == "" ( set "lAnswer=%G_ADMIN_ID%" )
    if "%lAnswer%" == "-q" ( set "G_STATE=S_END" 
    ) else ( if "%lAnswer%" == "1" ( set "G_STATE=S_SQLITE" &amp;&amp; set "G_ADMIN_ID=%lAnswer%" 
    ) else ( if "%lAnswer%" == "2" ( set "G_STATE=S_STRING" &amp;&amp; set "G_ADMIN_ID=%lAnswer%" 
    )))
goto :RunLoop
::===============================================
:: on definit la fonction d'execution du module SQLITE
:: en faisant appel a son interface d'administration
:: puis on passe a l'etat sauvegarde des donnees
::===============================================
:SQLITE
    call manager\GSQLiteUi :Run %*
    set "G_STATE=S_SAVE"
goto :RunLoop
::===============================================
:: on definit la fonction d'execution du module STRING
:: en faisant appel a son interface d'administration
:: puis on passe a l'etat sauvegarde des donnees
::===============================================
:STRING
    call manager\GStringUi :Run %*
    set "G_STATE=S_SAVE"
goto :RunLoop
::===============================================
:: on definit la fonction de sauvegarde des donnees
:: sous la forme d'un systeme de cle valeur
:: dans une base de donnees SQLite
:: puis on passe a l'etat termine
::===============================================
:SAVE
    call manager\GConfig :Save G_ADMIN_ID %G_ADMIN_ID%
    set "G_STATE=S_END"
goto :RunLoop
::===============================================
:: on definit la fonction de chargement des donnees
:: structurees sous la forme d'un systeme de cle/valeur
:: dans une base de donnees SQLite
:: puis on passe a l'etat affichage des methodes
::===============================================
:LOAD
    call manager\GConfig :Load G_ADMIN_ID G_ADMIN_ID
    set "G_STATE=S_METHOD"
goto :RunLoop
::===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Resultat-des-operations"><a class="Link9" href="#Systeme-d-administration">Résultat des opérations</a></h2><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-1---Menu-principal"><a class="Link9" href="#Systeme-d-administration">1 - Menu principal</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Batch/img/i_batch_admin_system.png" class="lazy" data-src="/Tutoriels/Software_Development/Batch/img/i_batch_admin_system.png"></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-2---Menu-du-module-SQLite"><a class="Link9" href="#Systeme-d-administration">2 - Menu du module SQLite</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Batch/img/i_batch_admin_system_02.png" class="lazy" data-src="/Tutoriels/Software_Development/Batch/img/i_batch_admin_system_02.png"></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-2-1---Affichage-de-la-version"><a class="Link9" href="#Systeme-d-administration">2.1 - Affichage de la version</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Batch/img/i_batch_admin_system_03.png" class="lazy" data-src="/Tutoriels/Software_Development/Batch/img/i_batch_admin_system_03.png"></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-2-2---Affichage-des-tables"><a class="Link9" href="#Systeme-d-administration">2.2 - Affichage des tables</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Batch/img/i_batch_admin_system_04.png" class="lazy" data-src="/Tutoriels/Software_Development/Batch/img/i_batch_admin_system_04.png"></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-2-3---Affichage-de-la-table-CONFIG_DATA"><a class="Link9" href="#Systeme-d-administration">2.3 - Affichage de la table CONFIG_DATA</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Batch/img/i_batch_admin_system_05.png" class="lazy" data-src="/Tutoriels/Software_Development/Batch/img/i_batch_admin_system_05.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="GnuWin"><a class="Link3" href="#">GnuWin</a></h1><div class="Body3"><br><b>GnuWin </b>est un paquetage du projet GNU contenant de nombreux outils de base nécessaires pour les systèmes d'exploitation de type Unix tels que cat, ls, rm, etc, modifié pour fonctionner sous Windows.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618938497776"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618938497776");</script></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Batch/img/b_gnuwin.png" class="lazy" data-src="/Tutoriels/Software_Development/Batch/img/b_gnuwin.png"></div><br><h2 class="Title7 GTitle2" id="GnuWin-1---Referentiel"><a class="Link9" href="#GnuWin">1 - Référentiel</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/gnuwin32/files/">https://sourceforge.net/projects/gnuwin32/files/</a><br><br><h2 class="Title7 GTitle2" id="GnuWin-2---CoreUtils"><a class="Link9" href="#GnuWin">2 - CoreUtils</a></h2><br><h2 class="Title7 GTitle2" id="GnuWin-2-1---Installation"><a class="Link9" href="#GnuWin">2.1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="GnuWin-2-1-1---Installation-sous-Windows"><a class="Link9" href="#GnuWin">2.1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="GnuWin-2-1-1-1---Telecharger-CoreUtils"><a class="Link9" href="#GnuWin">2.1.1.1 - Télécharger CoreUtils</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/gnuwin32/files/coreutils/5.3.0/coreutils-5.3.0-bin.zip">https://sourceforge.net/projects/gnuwin32/files/coreutils/5.3.0/coreutils-5.3.0-bin.zip</a><br><br><h2 class="Title7 GTitle2" id="GnuWin-2-1-1-2---Telecharger-les-dependances"><a class="Link9" href="#GnuWin">2.1.1.2 - Télécharger les dépendances</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/gnuwin32/files/coreutils/5.3.0/coreutils-5.3.0-dep.zip">https://sourceforge.net/projects/gnuwin32/files/coreutils/5.3.0/coreutils-5.3.0-dep.zip</a><br><br><h2 class="Title7 GTitle2" id="GnuWin-2-1-1-3---Installer-CoreUtils"><a class="Link9" href="#GnuWin">2.1.1.3 - Installer CoreUtils</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">Extraire -&gt; coreutils-5.3.0-bin.zip
Extraire -&gt; coreutils-5.3.0-dep.zip</pre></div></div><br><h2 class="Title7 GTitle2" id="GnuWin-2-2---Tests"><a class="Link9" href="#GnuWin">2.2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="GnuWin-2-2-1---Test-sous-Windows"><a class="Link9" href="#GnuWin">2.2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="GnuWin-2-2-1-1---Editer-le-programme-"><a class="Link9" href="#GnuWin">2.2.1.1 - Éditer le programme </a></h2><br><h3 class="Title8 GTitle3">main.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">@echo off 
::===============================================
printf "%%-10s : %%s\n" "Nom" "KESSE"
printf "%%-10s : %%s\n" "Prenom" "Gerard"
printf "%%-10s : %%s\n" "Email" "gerard.kesse@readydev.com"
::===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="GnuWin-2-2-1-1---Executer-le-projet"><a class="Link9" href="#GnuWin">2.2.1.1 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">set "PATH=ReadyLib\coreutils-5.3.0-bin\bin;%PATH%"
set "PATH=ReadyLib\coreutils-5.3.0-dep\bin;%PATH%"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">main.bat</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Batch/img/i_gnuwin_coreutils.png" class="lazy" data-src="/Tutoriels/Software_Development/Batch/img/i_gnuwin_coreutils.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Notes-et-references"><a class="Link3" href="#">Notes et références</a></h1><div class="Body3"><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://ss64.com/nt/">https://ss64.com/nt/</a><br><br></div></div></div></div><br>