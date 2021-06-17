<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation système embarqué avec le 8051</div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation système embarqué avec le <b>8051</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Introduction">Introduction</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Fondamentaux">Fondamentaux</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Delai">Délai</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Ports">Ports</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Boucle-infinie">Boucle infinie</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Systeme-d-exploitation-embarque-simple">Système d'exploitation embarqué simple</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Notes-et-references">Notes et références</a></div></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>8051 </b>est un microcontrôleur développé pour être utilisé dans des produits embarqués. C'est une architecture populaire incorporée dans de nombreux microcontrôleurs plus récents, puis complétée par un certain nombre de circuits périphériques intégrés sur la même puce, et dotés de mémoires de plus grande capacité. <br><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/8051/img/b_8051.png" class="lazy entered loaded" data-src="/Tutoriels/Embedded_System/8051/img/b_8051.png" data-ll-status="loaded" src="/Tutoriels/Embedded_System/8051/img/b_8051.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de 8051.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Installer-l-environnement-8051-sous-Keil--Vision">Installer l'environnement 8051 sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Installer-l-environnement-8051-sous-SDCC">Installer l'environnement 8051 sous SDCC</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Installer-l-environnement-8051-sous-Proteus">Installer l'environnement 8051 sous Proteus</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-projet-8051-sous-Keil--Vision">Créer un projet 8051 sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Ajouter-un-fichier-source-C-sous-Keil--Vision">Ajouter un fichier source C sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Generer-un-fichier-executable-sous-Keil--Vision">Générer un fichier exécutable sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Compiler-un-projet-8051-sous-Keil--Vision">Compiler un projet 8051 sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Simuler-un-projet-8051-sous-Keil--Vision">Simuler un projet 8051 sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Compiler-un-projet-8051-sous-SDDC">Compiler un projet 8051 sous SDDC</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Simuler-un-projet-8051-sous-Proteus">Simuler un projet 8051 sous Proteus</a></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Installer-l-environnement-8051-sous-Keil--Vision"><a class="Link9" href="#Fondamentaux">Installer l'environnement 8051 sous Keil µVision</a></h2><br>L'IDE <b>Keil µVision</b> combine la gestion de projet, l'environnement d'exécution, les installations de construction, l'édition de code source et le débogage de programme dans un seul environnement puissant. Keil µVision est facile à utiliser et accélère le développement de votre logiciel embarqué. Keil µVision prend en charge plusieurs écrans et vous permet de créer des dispositions de fenêtres individuelles n'importe où sur la surface visuelle. Le débogueur Keil µVision fournit un environnement unique dans lequel vous pouvez tester, vérifier et optimiser le code de votre application. Le débogueur comprend des fonctionnalités traditionnelles telles que des points d'arrêt simples et complexes, des fenêtres de surveillance et un contrôle d'exécution et offre une visibilité complète sur les périphériques de l'appareil.<br><br><h3 class="Title8 GTitle3">Télécharger Keil µVision</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www87.zippyshare.com/v/30Cu5IaS/file.html">https://www87.zippyshare.com/v/30Cu5IaS/file.html</a><br><br><h3 class="Title8 GTitle3">Extraire Keil µVision</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil_C51_uVision5.rar
Clic droit -&gt; Extraire vers Keil_C51_uVision5\</pre></div></div><br><h3 class="Title8 GTitle3">Désactiver la protection contre les virus</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Protection contre les virus et les menances
Trojan:Win32/Tiggre!rfn
Options de la mesure prise
Autoriser sur l'appareil
Intervenir</pre></div></div><br><h3 class="Title8 GTitle3">Installer Keil µVision</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">c51v960a.exe
Next
Cocher -&gt; I agree to all the terms of the preceding License Agreement
Next
Destination Folder -&gt; C:\Keil_v5
Next
First Name -&gt; N/A
Last Name -&gt; N/A
Company Name -&gt; N/A
Email -&gt; N/A
Next
Cocher -&gt; Show Release Notes
Cocher -&gt; Retain current µVision configuration
Cocher -&gt; Add example projects to the recently used project list
Finish</pre></div></div><br><h3 class="Title8 GTitle3">Démarrer Keil µVision</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Windows
Keil µVision5</pre></div></div><br><h3 class="Title8 GTitle3">Copier le Computer ID (CID)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil µVision5
File -&gt; License Management
Computer ID -&gt; CID -&gt; XXXXX-XXXXX -&gt; Copier</pre></div></div><br><h3 class="Title8 GTitle3">Extraire la licence</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">License.rar
Clic droit -&gt; Extraire vers License\</pre></div></div><br><h3 class="Title8 GTitle3">Désactiver la protection contre les virus</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Protection contre les virus et les menances
Trojan:Win32/Occamy.C78
Options de la mesure prise
Autoriser sur l'appareil
Intervenir</pre></div></div><br><h3 class="Title8 GTitle3">Configurer la DLL</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Copier -&gt; l51.dll
Coller -&gt; C:\Keil_v5\C51\BIN
Valider -&gt; Remplacer le fichier dans la destination</pre></div></div><br><h3 class="Title8 GTitle3">Générer la licence</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">License.exe
MCU Type -&gt; Cocher -&gt; 51
Professional Developers Kit
With computer ID code
Cocher -&gt; V2
Cocher -&gt; External CID code -&gt; XXXXX-XXXXX
Generate
LICO -&gt; XXXXX-XXXXX-XXXXX-XXXXX-XXXXX -&gt; Clic droit -&gt; Copier</pre></div></div><br><h3 class="Title8 GTitle3">Configurer la licence</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil µVision5
File -&gt; License Management
New License ID Code (LIC) -&gt; XXXXX-XXXXX-XXXXX-XXXXX-XXXXX
Add LIC
Close</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Installer-l-environnement-8051-sous-SDCC"><a class="Link9" href="#Fondamentaux">Installer l'environnement 8051 sous SDCC</a></h2><br><b>SDCC </b>(Small Device C Compile) est un logiciel libre , partiellement reciblable, compilateur C pour microcontrôleurs 8 bits. Il est distribué sous la licence publique générale GNU . Le paquet contient également un assembleur , un éditeur de liens , un simulateur et un débogueur . Depuis mars 2007, SDCC est le seul compilateur C open source pour les microcontrôleurs compatibles Intel 8051.&nbsp; En 2011, le compilateur a été téléchargé en moyenne plus de 200 fois par jour.<br><br><h3 class="Title8 GTitle3">Télécharger SDCC</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/sdcc/files/">https://sourceforge.net/projects/sdcc/files/</a><br><br><b>sdcc-4.1.0-x64-setup.exe</b><br><br><h3 class="Title8 GTitle3">Installer SDCC</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">sdcc-4.1.0-x64-setup.exe
Next
I Agree
Choose Start Menu Folder -&gt; SDCC
Next
Select the type of install -&gt; Full (Bin, ucSim, SDCDB, Doc, Lib, Src)
Next
Destination Folder -&gt; C:\Program Files\SDCC
Install
Cocher -&gt; Add C:\Program Files\SDCC\bin to PATH
Next
Finish</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Installer-l-environnement-8051-sous-Proteus"><a class="Link9" href="#Fondamentaux">Installer l'environnement 8051 sous Proteus</a></h2><br><b>Proteus </b>est une suite logicielle de CAO électronique qui permet la conception d'un système électronique complet et de le simuler, y compris avec le code des microcontrôleurs. Pour ce faire, elle inclut un éditeur de schéma (ISIS), un outil de placement-routage (ARES), un simulateur analogique-numérique, un environnement de développement intégré pour microcontrôleurs, un module de programmation par algorigrammes ainsi qu'un éditeur d'interface pour smartphone afin de piloter à distance des cartes Arduino ou Raspberry Pi<br><br><h3 class="Title8 GTitle3">Télécharger Proteus</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://mega.nz/file/5MJ1GKyI#s325o7wYhZInJuXxbvys-Cv-BZ4NNZP8U-hlMPkYIpc">https://mega.nz/file/5MJ1GKyI#s325o7wYhZInJuXxbvys-Cv-BZ4NNZP8U-hlMPkYIpc</a><br><br><b>Proteus Professional 8.9 SP0 Build 27865.rar</b><br><br><h3 class="Title8 GTitle3">Extraire Proteus</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Proteus Professional 8.9 SP0 Build 27865.rar -&gt; Clic droit
Extraire vers Proteus Professional 8.9 SP0 Build 27865\</pre></div></div><br><h3 class="Title8 GTitle3">Installer Proteus</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">P8.9.sp0_Setup.exe
Next
Cocher -&gt; I accept the terms of this agreement
Next
Setup Type -&gt; Use a locally installed license key
Next -&gt; Next
Décocher -&gt; Merge styles from previous version
Décocher -&gt; Import templates from previous version
Décocher -&gt; Import user libraries l from previous version
Next
Choose the installation you want -&gt; Typical
Close</pre></div></div><br><h3 class="Title8 GTitle3">Configurer la licence</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Copier -&gt; Licence.lxk
Copier -&gt; PP8.9.exe
Coller -&gt; C:\Program Files (x86)\Labcenter Electronics\Proteus 8 Professional</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-projet-8051-sous-Keil--Vision"><a class="Link9" href="#Fondamentaux">Créer un projet 8051 sous Keil µVision</a></h2><br><h3 class="Title8 GTitle3">Créer le projet 8051<br></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil µVision5
Project -&gt; New µVision Project
Adresse -&gt; ReadyTest\8051\keil
Nom du fichier -&gt; ReadyApp
Project Files (*.uvproj; *.uvprojx)
Enregistrer</pre></div></div><br><h3 class="Title8 GTitle3">Configurer la cible</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Device
Search -&gt; AT89C52
Microchip -&gt; AT89C52
Ok
Copy 'STARTUP.A51' to Project Folder 
and Add File to Project ? -&gt; Non</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Ajouter-un-fichier-source-C-sous-Keil--Vision"><a class="Link9" href="#Fondamentaux">Ajouter un fichier source C sous Keil µVision</a></h2><br><h3 class="Title8 GTitle3">Ajouter un fichier source C</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil µVision5
Project Explorer
Project:ReadyApp
Target 1
Source Group 1 -&gt; Clic droit
Add New Item to Group 'Source Group 1'
Sélectionner -&gt; C File (.c)
Type -&gt; C File (.c)
Name -&gt; main
Location -&gt; ReadyTest\8051\keil
Add</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Generer-un-fichier-executable-sous-Keil--Vision"><a class="Link9" href="#Fondamentaux">Générer un fichier exécutable sous Keil µVision</a></h2><br><h3 class="Title8 GTitle3">Générer un fichier exécutable</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil µVision5
Project Explorer
Project:ReadyApp
Target 1 -&gt; Clic droit -&gt; Options for Target 'TArget 1'
Output
Name of Executable -&gt; rd8051
Cocher -&gt; Create HEX File HEX Format -&gt; HEX-80
Ok</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Compiler-un-projet-8051-sous-Keil--Vision"><a class="Link9" href="#Fondamentaux">Compiler un projet 8051 sous Keil µVision</a></h2><br><h3 class="Title8 GTitle3">Editer le programme (main.c)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
void main() {
    P1 = 0xAA;
    while(1);    
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Compiler un projet 8051</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil µVision5
Project -&gt; Rebuild all target files

Rebuild started: Project: ReadyApp
Rebuild target 'Target 1'
compiling main.c...
linking...
Program Size: data=9.0 xdata=0 code=20
creating hex file from ".\Objects\rd8051"...
".\Objects\rd8051" - 0 Error(s), 0 Warning(s).
Build Time Elapsed:  00:00:04</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier le fichier exécutable</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">ReadyTest\8051\keil\Objects\rd8051.hex</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Simuler-un-projet-8051-sous-Keil--Vision"><a class="Link9" href="#Fondamentaux">Simuler un projet 8051 sous Keil µVision</a></h2><br><h3 class="Title8 GTitle3">Ouvrir le débogueur</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil µVision5
Debug -&gt; Start/Stop Debug Session</pre></div></div><br><h3 class="Title8 GTitle3">Ouvrir le port P1</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil µVision5
Peripherals -&gt; I/O - Ports -&gt; Port 1</pre></div></div><br><h3 class="Title8 GTitle3">Démarrer la simulation</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil µVision5
Debug -&gt; Run</pre></div></div><br><h3 class="Title8 GTitle3">Arrêter la simulation</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil µVision5
Debug -&gt; Run</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/8051/img/i_8051_test_keil.png" class="lazy entered exited" data-src="/Tutoriels/Embedded_System/8051/img/i_8051_test_keil.png"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Compiler-un-projet-8051-sous-SDDC"><a class="Link9" href="#Fondamentaux">Compiler un projet 8051 sous SDDC</a></h2><br><h3 class="Title8 GTitle3">Editer le programme (main.c)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
void main() {
    P1 = 0xAA;
    while(1);    
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet 8051</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">set "PATH=C:\Program Files\SDCC\bin;%PATH%"

sdcc --std-c11 -c main.c</pre></div></div><br><h3 class="Title8 GTitle3">Générer le fichier exécutable</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">sdcc main.rel
packihx main.ihx &gt; rd8051.hex</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Simuler-un-projet-8051-sous-Proteus"><a class="Link9" href="#Fondamentaux">Simuler un projet 8051 sous Proteus</a></h2><br><h3 class="Title8 GTitle3">Ouvrir l'interface schematic capture</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Proteus
Schematic Capture</pre></div></div><br><h3 class="Title8 GTitle3">Enregistrer le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Proteus
File -&gt; Save Project As
Enregistrer dans -&gt; ReadyTest\8051\proteus
Nom du fichier -&gt; circuit_8051
Type -&gt; Project Files
Enregistrer</pre></div></div><br><h3 class="Title8 GTitle3">Ajouter un composant</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Proteus
Schematic Capture
Component Mode
Pick Devices
Keyword -&gt; AT89C52
Device -&gt; AT89C52
Ok</pre></div></div><br><h3 class="Title8 GTitle3">Placer un composant</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Proteus
Schematic Capture
Component Mode
Devices
Cliquer/Déposer -&gt; AT89C52</pre></div></div><br><h3 class="Title8 GTitle3">Placer un terminal</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Proteus
Schematic Capture
Terminals Mode
Default</pre></div></div><br><h3 class="Title8 GTitle3">Charger un progrogramme dans un microcontrôleur</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Proteus
Schematic Capture
Component Mode
Workspace
AT89C52 -&gt; Clic droit -&gt; Edit Properties
Program File -&gt; ..\keil\Objects\rd8051.hex
Ok</pre></div></div><br><h3 class="Title8 GTitle3"> Démarrer la simulation</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Proteus
Schematic Capture
Run the simulation</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png" class="lazy entered loaded" data-src="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png" data-ll-status="loaded" src="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Delai"><a class="Link3" href="#">Délai</a></h1><div class="Body3"><br>Un <b>délai </b>est un temps accordé pour faire une chose, ou à l’expiration duquel on sera tenu de faire une certaine chose.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Delai-Creer-un-delai-logiciel">Créer un délai logiciel</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Delai-Creer-un-delai-materiel-Timer-T0-en-mode-16-bit">Créer un délai matériel Timer T0 en mode 16-bit</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Delai-Creer-un-delai-materiel-Timer-T1-en-mode-16-bit">Créer un délai matériel Timer T1 en mode 16-bit</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Delai-Creer-un-delai-materiel-Timer-T2-en-mode-16-bit">Créer un délai matériel Timer T2 en mode 16-bit</a></div></div><br><h2 class="Title7 GTitle2" id="Delai-Creer-un-delai-logiciel"><a class="Link9" href="#Delai">Créer un délai logiciel</a></h2><br>Le <b>délai logiciel</b> est basé sur l'utilisation d'une boucle réalisée par programme. Il est facile à mettre en œuvre, mais moins précis.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
#define TIME_1_MS (125)
//===============================================
typedef unsigned int uint;
//===============================================
sbit g_pin = P1^0;
//===============================================
void GDelay_ms(uint ms) {
    uint i, j;
    for(i = 0; i &lt; ms; i++) {
        for(j = 0; j &lt; TIME_1_MS; j++);
    }
}
//===============================================
void main() {
    g_pin = 0;
    while(1) {
        g_pin = !g_pin;
        GDelay_ms(1000);
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_delay_software.gif" alt="/Tutoriels/Embedded_System/8051/img/i_delay_software.gif"></div><br><h2 class="Title7 GTitle2" id="Delai-Creer-un-delai-materiel-Timer-T0-en-mode-16-bit"><a class="Link9" href="#Delai">Créer un délai matériel Timer T0 en mode 16-bit</a></h2><br>Le <b>Timer 0</b> fonctionne comme un temporisateur ou un compteur d'événements dans quatre modes de fonctionnement. Le Timer 0 est contrôlé par les quatre bits inférieurs du registre TMOD et les bits 0, 1, 4 et 5 du registre TCON. Le registre TMOD sélectionne la méthode de déclenchement du Timer (GATE0), le fonctionnement du temporisateur ou du compteur (T/C0) et le mode de fonctionnement (M10 et M00). Le registre TCON fournit des fonctions de contrôle du Timer 0&nbsp;: indicateur de débordement (TF0), bit de contrôle d'exécution (TR0), indicateur d'interruption (IE0) et bit de contrôle de type d'interruption (IT0). Pour le fonctionnement normal du Timer (GATE0 = 0), le réglage à 1 de TR0 permet d'incrémenter TL0 par l'entrée sélectionnée. Le réglage à 1 de GATE0 et TR0 permet à la broche externe INT0 de contrôler le fonctionnement du Timer. Le dépassement du Timer 0 (lorsque tous les bits du Timer passent de 1 à 0) définit à 1 l'indicateur TF0 générant une demande d'interruption. Il est important d'arrêter le Timer/Counter avant de changer de mode.<br><br><h3 class="Title8 GTitle3">Calculer les valeurs de préchargement</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_delay_hardware.png" alt="/Tutoriels/Embedded_System/8051/img/i_delay_hardware.png"></div><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
f_{osc} &amp;\to&amp; fréquence\ de\ l'oscillateur\ (Hz)\\
k_{osc} &amp;\to&amp; diviseur\ de\ la\ fréquence\ de\ l'oscillateur\\\\
f_{osc} &amp;=&amp; 12\ MHz=12\ 000\ 000\ Hz\\
k_{osc} &amp;=&amp; 12\\\\
f_{timer} &amp;\to&amp; fréquence\ du\  timer\ (Hz)\\
T_{timer} &amp;\to&amp; Période\ du\  timer\ (Hz)\\\\
f_{timer} &amp;=&amp; \dfrac{f_{osc}}{k_{osc}}\\
T_{timer} &amp;=&amp; \dfrac{1}{f_{timer}}\\
T_{timer} &amp;=&amp; \dfrac{k_{osc}}{f_{osc}}\\\\
T_{delay} &amp;\to&amp; Durée\ du\ delai\ (s)\\
n_{delay} &amp;\to&amp; Pas\ du\ delai\\\\
T_{delay} &amp;=&amp; n_{delay}*T_{timer}\\
n_{delay} &amp;=&amp; \dfrac{T_{delay}}{T_{timer}}\\
n_{delay} &amp;=&amp; \dfrac{f_{osc}*T_{delay}}{k_{osc}}\\\\
n_{max} &amp;\to&amp; Pas\ maximal\\
n_{bits} &amp;\to&amp; Nombre\ de\ bits\\\\ 
n_{max} &amp;=&amp; 2^{n_{bits}}\\\\
n_{bits} = 8 &amp;\to&amp; n_{max} = 256\\
n_{bits} = 16 &amp;\to&amp; n_{max} = 65536\\\\
n_{preload} &amp;\to&amp; Pas\ de\ préchargement\\\\
n_{preload} &amp;=&amp; n_{max} - n_{delay}\\
n_{preload} &amp;=&amp; n_{max} - \dfrac{f_{osc}*T_{delay}}{k_{osc}}\\\\
T_{delay} &amp;\to&amp; Temps\ en\ (s)\\
T_{delay}(ms) &amp;\to&amp; Temps\ en\ (ms)\\\\
T_{delay} &amp;=&amp; \dfrac{T_{delay}(ms)}{1000}\\\\
n_{preload} &amp;=&amp; n_{max} - \dfrac{f_{osc}*T_{delay}(ms)}{k_{osc}*1000}\\
\end{eqnarray}</div></div><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned int uint;
//===============================================
#define TIME_MS (50)
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD (65536 - ((OSC_FREQ * TIME_MS) / (OSC_PER_INST * 1000)))
#define PRELOAD_H (PRELOAD / 256)
#define PRELOAD_L (PRELOAD % 256)
//===============================================
sbit g_pin = P1^0;
//===============================================
void GDelay_T0_50ms() {
    TMOD &amp;= 0xF0; 
    TMOD |= 0x01; 
    ET0 = 0; 
    TH0 = PRELOAD_H; 
    TL0 = PRELOAD_L; 
    TF0 = 0; 
    TR0 = 1; 
    while (TF0 == 0); 
    TR0 = 0;
}
//===============================================
void GDelay_50ms(uint ms) {
    uint i;
    for(i = 0; i &lt; ms; i++) {
        GDelay_T0_50ms();
    }
}
//===============================================
void main() {
    g_pin = 0;
    while(1) {
        g_pin = !g_pin;
        GDelay_50ms(20);
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_delay_hardware_timer_t0.gif" alt="/Tutoriels/Embedded_System/8051/img/i_delay_hardware_timer_t0.gif"></div><br><h2 class="Title7 GTitle2" id="Delai-Creer-un-delai-materiel-Timer-T1-en-mode-16-bit"><a class="Link9" href="#Delai">Créer un délai matériel Timer T1 en mode 16-bit</a></h2><br>Le <b>Timer 1</b> est identique au Timer 0 à l'exception du mode 3 qui est un mode de compte en attente. Les commentaires suivants aident à comprendre les différences : Le Timer 1 fonctionne comme un temporisateur ou un compteur d'événements dans trois modes de fonctionnement. Le mode 3 du Timer 1 est un mode de compte en attente. Le Timer 1 est contrôlé par les quatre bits de poids fort du registre TMOD et les bits 2, 3, 6 et 7 du registre TCON. Le registre TMOD sélectionne la méthode de déclenchement du Timer (GATE1), le fonctionnement du temporisateur ou du compteur (C/T1) et le mode de fonctionnement (M11 et M01). Le registre TCON fournit des fonctions de contrôle du Timer 1: indicateur de débordement (TF1), bit de contrôle d'exécution (TR1), indicateur d'interruption (IE1) et bit de contrôle de type d'interruption (IT1). Le Timer 1 peut servir de générateur de débit en bauds pour le port série. Le mode 2 est le mieux adapté à cette fin. Pour un fonctionnement normal du Timer (GATE1 = 0), le réglage à 1 de TR1 permet à TL1 d'être incrémenté par l'entrée sélectionnée. Le réglage à 1 de GATE1 et TR1 permet à la broche externe INT1 de contrôler le fonctionnement du Timer. Le débordement du Timer 1 (lorsque tous les bits du Timer passent de 1 à 0) définit à 1 le drapeau TF1 générant une demande d'interruption. Lorsque le Timer 1 est en mode 3, il utilise l'indicateur de débordement du Timer 1 (TF1) et le bit de contrôle d'exécution (TR1). Dans cette situation, utilisez le Timer 1 uniquement pour les applications qui ne nécessitent pas d'interruption (comme un générateur de débit en bauds pour le port série) et basculez le Timer 1 dans et hors du mode 3 pour l'éteindre et le rallumer. Il est important d'arrêter le Timer/Counter avant de changer de mode.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned int uint;
//===============================================
#define TIME_MS (50)
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD (65536 - ((OSC_FREQ * TIME_MS) / (OSC_PER_INST * 1000)))
#define PRELOAD_H (PRELOAD / 256)
#define PRELOAD_L (PRELOAD % 256)
//===============================================
sbit g_pin = P1^0;
//===============================================
void GDelay_T1_50ms() {
    TMOD &amp;= 0x0F; 
    TMOD |= 0x10; 
    ET1 = 0; 
    TH1 = PRELOAD_H;
    TL1 = PRELOAD_L; 
    TF1 = 0; 
    TR1 = 1; 
    while (TF1 == 0); 
    TR1 = 0;
}
//===============================================
void GDelay_50ms(uint ms) {
    uint i;
    for(i = 0; i &lt; ms; i++) {
        GDelay_T1_50ms();
    }
}
//===============================================
void main() {
    g_pin = 0;
    while(1) {
        g_pin = !g_pin;
        GDelay_50ms(20);
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_delay_hardware_timer_t1.gif" alt="/Tutoriels/Embedded_System/8051/img/i_delay_hardware_timer_t1.gif"></div><br><h2 class="Title7 GTitle2" id="Delai-Creer-un-delai-materiel-Timer-T2-en-mode-16-bit"><a class="Link9" href="#Delai">Créer un délai matériel Timer T2 en mode 16-bit</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned int uint;
//===============================================
#define TIME_MS (50)
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD (65536 - ((OSC_FREQ * TIME_MS) / (OSC_PER_INST * 1000)))
#define PRELOAD_H (PRELOAD / 256)
#define PRELOAD_L (PRELOAD % 256)
//===============================================
sbit g_pin = P1^0;
//===============================================
void GDelay_T2_50ms() {
    T2CON = 0x04;
    ET2 = 0; 
    TH2 = PRELOAD_H;
    TL2 = PRELOAD_L; 
    RCAP2H = PRELOAD_H;
    RCAP2L = PRELOAD_L; 
    TF2 = 0; 
    TR2 = 1; 
    while (TF2 == 0); 
    TR2 = 0;
}
//===============================================
void GDelay_50ms(uint ms) {
    uint i;
    for(i = 0; i &lt; ms; i++) {
        GDelay_T2_50ms();
    }
}
//===============================================
void main() {
    g_pin = 0;
    while(1) {
        g_pin = !g_pin;
        GDelay_50ms(20);
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_delay_hardware_timer_t2.gif" alt="/Tutoriels/Embedded_System/8051/img/i_delay_hardware_timer_t2.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ports"><a class="Link3" href="#">Ports</a></h1><div class="Body3"><br>Les <b>ports </b>du microcontrôleur lui permettent d'interagir avec son environnement extérieur. Chaque port est constitué d'un ensemble de 8 broches et est adressable à travers un registre de 8 bits.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ports-Ecrire-une-donnee-sur-un-port">Écrire une donnée sur un port</a></div></div><br><h2 class="Title7 GTitle2" id="Ports-Ecrire-une-donnee-sur-un-port"><a class="Link9" href="#Ports">Écrire une donnée sur un port</a></h2><br>La fonction <b>GPort_Data_Write </b>permet d'écrire un octet sur port. Elle prend en entrée le numéro du port et la valeur de l'octet à écrire.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GTask.h"
#include "GDelay.h"
//===============================================
void main() {
    GTask_Init(1, 0xC3);
    while(1) {
        GTask_Update();
        GDelay_ms(1000);
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GTask.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GTask_
#define _GTask_
//===============================================
#include "GInclude.h"
//===============================================
void GTask_Init(uchar port, uchar d);
void GTask_Update();
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GTask.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GTask.h"
#include "GPort.h"
//===============================================
static uchar g_port;
static uchar g_data;
static bit g_state = 0;
//===============================================
void GTask_Init(uchar port, uchar d) {
    g_port = port;
    g_data = d;
    GPort_Data_Write(g_port, g_data);
}
//===============================================
void GTask_Update() {
    if(g_state == 0) {
        GPort_Data_Write(g_port, g_data);
        g_state = 1;
    }
    else {
        GPort_Data_Write(g_port, ~g_data);
        g_state = 0;
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GPort.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GPort_
#define _GPort_
//===============================================
#include "GInclude.h"
//===============================================
void GPort_Data_Write(uchar port, uchar d);
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GPort.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GPort.h"
//===============================================
#define PORT_0 P0
#define PORT_1 P1
#define PORT_2 P2
#define PORT_3 P3
//===============================================
void GPort_Data_Write(uchar port, uchar d) {
    if(port == 0) {PORT_0 = d;}
    else if(port == 1) {PORT_1 = d;}
    else if(port == 2) {PORT_2 = d;}
    else if(port == 3) {PORT_3 = d;}
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDelay.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GDelay_
#define _GDelay_
//===============================================
#include "GInclude.h"
//===============================================
void GDelay_ms(uint ms);
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDelay.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GDelay.h"
//===============================================
#define TIME_1_MS (125)
//===============================================
void GDelay_ms(uint ms) {
    uint i, j;
    for(i = 0; i &lt; ms; i++) {
        for(j = 0; j &lt; TIME_1_MS; j++);
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GInclude.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GInclude_
#define _GInclude_
//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned char uchar;
typedef unsigned int uint;
typedef unsigned long ulong;
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_port_data_write.gif" alt="/Tutoriels/Embedded_System/8051/img/i_port_data_write.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Boucle-infinie"><a class="Link3" href="#">Boucle infinie</a></h1><div class="Body3"><br>La structure logicielle de la <b>boucle infinie</b> est basée sur une boucle dont la condition de sortie ne peut pas être satisfaite. En conséquence, la boucle ne peut se terminer qu'à l'interruption du programme qui l'utilise. L'architecture boucle infinie contient une zone d'initialisation du système située à l'extérieur de la boucle et une zone d'opérations située à l'intérieur de la boucle. La zone d'opérations est constituée de la mise à jour des tâches du système et un délai de temposrisation.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Boucle-infinie-Creer-une-architecture-boucle-infinie">Créer une architecture boucle infinie</a></div></div><br><h2 class="Title7 GTitle2" id="Boucle-infinie-Creer-une-architecture-boucle-infinie"><a class="Link9" href="#Boucle-infinie">Créer une architecture boucle infinie</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GTask.h"
#include "GDelay.h"
//===============================================
void main() {
    GTask_Init(1, 0xC3);
    while(1) {
        GTask_Update();
        GDelay_ms(1000);
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GTask.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GTask_
#define _GTask_
//===============================================
#include "GInclude.h"
//===============================================
void GTask_Init(uchar port, uchar d);
void GTask_Update();
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GTask.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GTask.h"
#include "GPort.h"
//===============================================
static uchar g_port;
static uchar g_data;
static bit g_state = 0;
//===============================================
void GTask_Init(uchar port, uchar d) {
    g_port = port;
    g_data = d;
    GPort_Data_Write(g_port, g_data);
}
//===============================================
void GTask_Update() {
    if(g_state == 0) {
        GPort_Data_Write(g_port, g_data);
        g_state = 1;
    }
    else {
        GPort_Data_Write(g_port, ~g_data);
        g_state = 0;
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GPort.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GPort_
#define _GPort_
//===============================================
#include "GInclude.h"
//===============================================
void GPort_Data_Write(uchar port, uchar d);
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GPort.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GPort.h"
//===============================================
#define PORT_0 P0
#define PORT_1 P1
#define PORT_2 P2
#define PORT_3 P3
//===============================================
void GPort_Data_Write(uchar port, uchar d) {
    if(port == 0) {PORT_0 = d;}
    else if(port == 1) {PORT_1 = d;}
    else if(port == 2) {PORT_2 = d;}
    else if(port == 3) {PORT_3 = d;}
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDelay.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GDelay_
#define _GDelay_
//===============================================
#include "GInclude.h"
//===============================================
void GDelay_ms(uint ms);
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GDelay.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GDelay.h"
//===============================================
#define TIME_1_MS (125)
//===============================================
void GDelay_ms(uint ms) {
    uint i, j;
    for(i = 0; i &lt; ms; i++) {
        for(j = 0; j &lt; TIME_1_MS; j++);
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GInclude.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GInclude_
#define _GInclude_
//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned char uchar;
typedef unsigned int uint;
typedef unsigned long ulong;
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_loop_delay_software.gif" alt="/Tutoriels/Embedded_System/8051/img/i_loop_delay_software.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Systeme-d-exploitation-embarque-simple"><a class="Link3" href="#">Système d'exploitation embarqué simple</a></h1><div class="Body3">Ajouter un texte ici...</div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Notes-et-references"><a class="Link3" href="#">Notes et références</a></h1><div class="Body3"><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.alldatasheet.com/">https://www.alldatasheet.com/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.alldatasheet.com/datasheet-pdf/pdf/56216/ATMEL/AT89C52.html">https://www.alldatasheet.com/datasheet-pdf/pdf/56216/ATMEL/AT89C52.html</a><br><br></div></div></div></div><br>