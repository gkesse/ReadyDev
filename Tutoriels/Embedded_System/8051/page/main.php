<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation système embarqué avec le 8051</div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation système embarqué avec le <b>8051</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Introduction">Introduction</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Fondamentaux">Fondamentaux</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Boucle-infinie">Boucle infinie</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Systeme-d-exploitation-embarque-simple">Système d'exploitation embarqué simple</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Systeme-d-exploitation-temps-reel">Système d'exploitation temps réel</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Ports">Ports</a></div></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>8051 </b>est un microcontrôleur développé pour être utilisé dans des produits embarqués. C'est une architecture populaire incorporée dans de nombreux microcontrôleurs plus récents, puis complétée par un certain nombre de circuits périphériques intégrés sur la même puce, et dotés de mémoires de plus grande capacité. <br><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/8051/img/b_8051.png" class="lazy entered loaded" data-src="/Tutoriels/Embedded_System/8051/img/b_8051.png" data-ll-status="loaded" src="/Tutoriels/Embedded_System/8051/img/b_8051.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de 8051.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Installer-l-environnement-8051-sous-Keil--Vision">Installer l'environnement 8051 sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Installer-l-environnement-8051-sous-SDCC">Installer l'environnement 8051 sous SDCC</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Installer-l-environnement-8051-sous-Proteus">Installer l'environnement 8051 sous Proteus</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Creer-un-projet-8051-sous-Keil--Vision">Créer un projet 8051 sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Ajouter-un-fichier-source-C-sous-Keil--Vision">Ajouter un fichier source C sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Generer-un-fichier-executable-sous-Keil--Vision">Générer un fichier exécutable sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Compiler-un-projet-8051-sous-Keil--Vision">Compiler un projet 8051 sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Simuler-un-projet-8051-sous-Keil--Vision">Simuler un projet 8051 sous Keil µVision</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Compiler-un-projet-8051-sous-SDDC">Compiler un projet 8051 sous SDDC</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Simuler-un-projet-8051-sous-Proteus">Simuler un projet 8051 sous Proteus</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Calculer-les-valeurs-de-prechargement-des-Timers">Calculer les valeurs de préchargement des Timers</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Registre-de-controle-du-mode-Timer--TMOD-">Registre de contrôle du mode Timer (TMOD)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Registre-d-activation-d-interruption--IEN0-">Registre d'activation d'interruption (IEN0)</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Registre-de-configuration-de-l-alimentation--PCON-">Registre de configuration de l'alimentation (PCON)</a></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Installer-l-environnement-8051-sous-Keil--Vision"><a class="Link9" href="#Fondamentaux">Installer l'environnement 8051 sous Keil µVision</a></h2><br>L'IDE <b>Keil µVision</b> combine la gestion de projet, l'environnement d'exécution, les installations de construction, l'édition de code source et le débogage de programme dans un seul environnement puissant. Keil µVision est facile à utiliser et accélère le développement de votre logiciel embarqué. Keil µVision prend en charge plusieurs écrans et vous permet de créer des dispositions de fenêtres individuelles n'importe où sur la surface visuelle. Le débogueur Keil µVision fournit un environnement unique dans lequel vous pouvez tester, vérifier et optimiser le code de votre application. Le débogueur comprend des fonctionnalités traditionnelles telles que des points d'arrêt simples et complexes, des fenêtres de surveillance et un contrôle d'exécution et offre une visibilité complète sur les périphériques de l'appareil.<br><br><h3 class="Title8 GTitle3">Télécharger Keil µVision</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www87.zippyshare.com/v/30Cu5IaS/file.html">https://www87.zippyshare.com/v/30Cu5IaS/file.html</a><br><br><h3 class="Title8 GTitle3">Extraire Keil µVision</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil_C51_uVision5.rar
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
Debug -&gt; Run</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/8051/img/i_8051_test_keil.png" class="lazy entered loaded" data-src="/Tutoriels/Embedded_System/8051/img/i_8051_test_keil.png" data-ll-status="loaded" src="/Tutoriels/Embedded_System/8051/img/i_8051_test_keil.png"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Compiler-un-projet-8051-sous-SDDC"><a class="Link9" href="#Fondamentaux">Compiler un projet 8051 sous SDDC</a></h2><br><h3 class="Title8 GTitle3">Editer le programme (main.c)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
Run the simulation</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png" class="lazy entered loaded" data-src="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png" data-ll-status="loaded" src="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png"></div><br><h2 class="Title7 GTitle2" id="Boucle-infinie-Calculer-les-valeurs-de-prechargement-des-Timers"><a class="Link9" href="#Boucle-infinie">Calculer les valeurs de préchargement des Timers</a></h2><br><h3 class="Title8 GTitle3">Schéma fonctionnel<br></h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_delay_hardware.png" alt="/Tutoriels/Embedded_System/8051/img/i_delay_hardware.png"></div><br><h3 class="Title8 GTitle3">Calculer les valeurs de préchargement</h3><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
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
\end{eqnarray}</div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Registre-de-controle-du-mode-Timer--TMOD-"><a class="Link9" href="#Fondamentaux">Registre de contrôle du mode Timer (TMOD)</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_registre_tmod.png" alt="/Tutoriels/Embedded_System/8051/img/i_registre_tmod.png"></div><br><span class="GCode3"><code style="color:#cccccc;">7 - GATE1</code></span><br>Bit de contrôle de synchronisation du Timer 1<br>0 $\to$ pour activer le Timer 1 chaque fois que le bit TR1 est défini.<br>1 $\to$ pour activer le Timer 1 uniquement lorsque la broche INT1 est élevée et que le bit TR1 est défini.<br><br><span class="GCode3"><code style="color:#cccccc;">6 - C/T1</code></span><br>Bit de sélection du Timer 1<br>0 $\to$ pour le fonctionnement de la minuterie : le Timer 1 compte l'horloge système divisée.<br>1 $\to$ pour le fonctionnement du compteur : le timer 1 compte les transitions négatives sur la broche externe T1.<br><br><span class="GCode3"><code style="color:#cccccc;">5,4 - M11,M01</code></span><br>Bits de sélection de mode du Timer 1 <br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">M11 | M01 | Mode de fonctionnement
----+-----+-----------------------
0   | 0   | Mode 0 : Timer/Compteur 13 bits.
0   | 1   | Mode 1 : Timer/Compteur 16 bits.
1   | 0   | Mode 2 : Timer/compteur 8 bits auto-rechargeable.
1   | 1   | Mode 3 : Timer 1 arrêtée. Conserve le compte.</pre></div></div><br><span class="GCode3"><code style="color:#cccccc;">3 - GATE0</code></span><br>Bit de contrôle de synchronisation du Timer 0<br>0 $\to$ pour activer le Timer 0 chaque fois que le bit TR0 est défini.<br>1 $\to$ pour activer le Timer 0 uniquement lorsque la broche INT0 est élevée et que le bit TR0 est défini à 1.<br><br><span class="GCode3"><code style="color:#cccccc;">2 - C/T0</code></span><br>Bit de sélection du Timer 0<br>0 $\to$ pour le fonctionnement de la minuterie : le Timer 0 compte l'horloge système divisée.<br>1 $\to$ pour le fonctionnement du compteur : le Timer 0 compte les transitions négatives sur la broche externe T0.<br><br><span class="GCode3"><code style="color:#cccccc;">1,0 - M10,M00</code></span><br>Bit de sélection de mode du Timer 0<br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">M10 | M00 | Mode de fonctionnement
----+-----+-----------------------
0   | 0   | Mode 0 : Timer/Compteur 13 bits.
0   | 1   | Mode 1 : Timer/Compteur 16 bits.
1   | 0   | Mode 2 : Timer/compteur 8 bits auto-rechargeable.
1   | 1   | Mode 3 : Timer/compteur 8 bits.</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Registre-d-activation-d-interruption--IEN0-"><a class="Link9" href="#Fondamentaux">Registre d'activation d'interruption (IEN0)</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_registre_ien0.png" alt="/Tutoriels/Embedded_System/8051/img/i_registre_ien0.png"></div><br><span class="GCode3"><code style="color:#cccccc;">7 - EA</code></span><br>Activer tout bit d'interruption<br>0 $\to$ pour désactiver toutes les interruptions.<br>1 $\to$ pour activer toutes les interruptions. Si EA=1, chaque source d'interruption est activée ou désactivée individuellement en réglant ou effaçant son bit d'activation d'interruption.<br><br><span class="GCode3"><code style="color:#cccccc;">6 - CE</code></span><br>Activer l'interruption PCA<br>0 $\to$ pour désactiver l'interruption PCA.<br>1 $\to$ pour activer l'interruption PCA.<br><br><span class="GCode3"><code style="color:#cccccc;">5 - ET2</code></span><br>Bit d'activation d'interruption de débordement du Timer 2<br>0 $\to$ pour désactiver l'interruption de débordement du Timer 2.<br>1 $\to$ pour activer l'interruption de débordement du Timer 2.<br><br><span class="GCode3"><code style="color:#cccccc;">4 - ES</code></span><br>Bit d'activation du port série<br>0 $\to$ pour désactiver l'interruption du port série.<br>1 $\to$ pour activer l'interruption du port série.<br><br><span class="GCode3"><code style="color:#cccccc;">3 - ET1</code></span><br>Bit d'activation de l'interruption de débordement du Timer 1<br>0 $\to$ pour désactiver l'interruption de débordement du Timer 1.<br>1 $\to$ pour activer l'interruption de débordement du Timer 1.<br><br><span class="GCode3"><code style="color:#cccccc;">2 - EX1</code></span><br>Interruption externe 1 Bit d'activation<br>0 $\to$ pour désactiver l'interruption externe 1.<br>1 $\to$ pour activer l'interruption externe 1.<br><br><span class="GCode3"><code style="color:#cccccc;">1 - ET0</code></span><br>Bit d'activation de l'interruption de débordement du Timer 0<br>0 $\to$ pour désactiver l'interruption de débordement du Timer 0.<br>1 $\to$ pour activer l'interruption de débordement du Timer 0.<br><br><span class="GCode3"><code style="color:#cccccc;">0 - EX0</code></span><br>Interruption externe 0 Bit d'activation<br>0 $\to$ pour désactiver l'interruption externe 0.<br>1 $\to$ pour activer l'interruption externe 0.<br><br><h3 class="Title8 GTitle3">Adresses des vecteurs d'interruption</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_registre_interrupt_vectors.png" alt="/Tutoriels/Embedded_System/8051/img/i_registre_interrupt_vectors.png"></div><br><h3 class="Title8 GTitle3">Numéros d'interruption en C</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">#define INTERRUPT_EXTERNAL_INT0 0
#define INTERRUPT_TIMER_T0      1
#define INTERRUPT_EXTERNAL_INT1 2
#define INTERRUPT_TIMER_T1      3
#define INTERRUPT_UART          4
#define INTERRUPT_TIMER_T2      5</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Registre-de-configuration-de-l-alimentation--PCON-"><a class="Link9" href="#Fondamentaux">Registre de configuration de l'alimentation (PCON)</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_registre_pcon.png" alt="/Tutoriels/Embedded_System/8051/img/i_registre_pcon.png"></div><br><span class="GCode3"><code style="color:#cccccc;">7-4 - Réservé</code></span><br>La valeur lue sur ces bits est indéterminée. Ne définissez pas ces bits.<br><br><span class="GCode3"><code style="color:#cccccc;">3 - GF1</code></span><br>Drapeau à usage général 1<br>Une utilisation est d'indiquer si une interruption s'est produite pendant le fonctionnement normal ou pendant le mode veille.<br><br><span class="GCode3"><code style="color:#cccccc;">2 - GF0</code></span><br>Drapeau à usage général 0<br>Une utilisation est d'indiquer si une interruption s'est produite pendant le fonctionnement normal ou pendant le mode veille.<br><br><span class="GCode3"><code style="color:#cccccc;">1 - PD</code></span><br>Bit de mode de mise hors tension<br>0 $\to$ par le matériel lorsqu'une interruption ou une réinitialisation se produit.<br>1 $\to$ pour activer le mode de mise hors tension. Si IDL et PD sont tous les deux définis à 1, PD est prioritaire.<br><br><span class="GCode3"><code style="color:#cccccc;">0 - IDL</code></span><br>Bit de mode veille<br>0 $\to$ par le matériel lorsqu'une interruption ou une réinitialisation se produit.<br>1 $\to$ pour activer le mode veille. Si IDL et PD sont tous les deux définis, PD est prioritaire.<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Boucle-infinie"><a class="Link3" href="#">Boucle infinie</a></h1><div class="Body3"><br>Une <b>boucle infinie</b> est basée sur une boucle dont la condition de sortie ne peut pas être satisfaite. En conséquence, la boucle ne peut se terminer qu'à l'interruption du programme qui l'utilise. L'architecture boucle infinie est le plus simple des systèmes d'exploitation que l'on puisse réaliser sur un microcontrôleur. Elle utilise une base de temps qui peut être définie sous forme logicielle ou matérielle pour fixer le tick time (entre 1 et 50 ms) lui permettant de synchroniser l'exécution des différentes tâches du système.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Boucle-infinie-Utiliser-un-delai-logiciel">Utiliser un délai logiciel</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Boucle-infinie-Utiliser-un-delai-materiel-Timer-T0">Utiliser un délai matériel Timer T0</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Boucle-infinie-Utiliser-un-delai-materiel-Timer-T1">Utiliser un délai matériel Timer T1</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Boucle-infinie-Utiliser-un-delai-materiel-Timer-T2">Utiliser un délai matériel Timer T2</a></div></div><br><h2 class="Title7 GTitle2" id="Boucle-infinie-Utiliser-un-delai-logiciel"><a class="Link9" href="#Boucle-infinie">Utiliser un délai logiciel</a></h2><br>Un délai est un temps accordé pour faire une chose, ou à l’expiration duquel on sera tenu de faire une certaine chose. Le <b>délai logiciel</b> est plus simple à mettre en œuvre, mais il est moins précis. Il est basé sur l'utilisation d'une boucle for.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
#define TIME_1_MS (125)
//===============================================
typedef unsigned char uchar;
typedef unsigned int uint;
//===============================================
sbit g_led_pin = P1^0;
sbit g_button_pin = P1^7;
//===============================================
static bit g_button_state = 0;
//===============================================
static uchar g_button_time = 1;
static uchar g_led_time = 0;
//===============================================
static void GDelay_ms(uint ms) {
    uint i, j;
    for(i = 0; i &lt; ms; i++) {
        for(j = 0; j &lt; TIME_1_MS; j++);
    }
}
//===============================================
static void GTask_Init() {
    g_led_pin = 1;
    g_button_pin = 1;
}
//===============================================
static void GButton_Update() {
    if(++g_button_time &gt;= 4) {
        if(g_button_pin == 0) {
            g_button_state = !g_button_state;
            if(g_button_state == 0) {
                g_led_pin = 1;
            }
        }
        g_button_time = 0;
    }
}
//===============================================
static void GLed_Update() {
    if(++g_led_time &gt;= 4) {
        if(g_button_state == 1) {
            g_led_pin = !g_led_pin;
        }
        g_led_time = 0;
    }
}
//===============================================
static void GTask_Update() {
    GButton_Update();
    GLed_Update();
}
//===============================================
void main() {
    GTask_Init();
    while(1) {
        GTask_Update();
        GDelay_ms(50);
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_loop_delay_software.gif" alt="/Tutoriels/Embedded_System/8051/img/i_loop_delay_software.gif"></div><br><h2 class="Title7 GTitle2" id="Boucle-infinie-Utiliser-un-delai-materiel-Timer-T0"><a class="Link9" href="#Boucle-infinie">Utiliser un délai matériel Timer T0</a></h2><br>Le <b>délai matériel</b> est basé sur l’utilisation d'un Timer. Il est moins facile à mettre en œuvre, mais il est plus précis.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned char uchar;
//===============================================
#define TIME_MS (50)
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD (65536 - ((OSC_FREQ * TIME_MS) / (OSC_PER_INST * 1000)))
#define PRELOAD_H (PRELOAD / 256)
#define PRELOAD_L (PRELOAD % 256)
//===============================================
sbit g_led_pin = P1^0;
sbit g_button_pin = P1^7;
//===============================================
static bit g_button_state = 0;
//===============================================
static uchar g_button_time = 1;
static uchar g_led_time = 0;
//===============================================
static void GDelay_ms() {
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
static void GTask_Init() {
    g_led_pin = 1;
    g_button_pin = 1;
}
//===============================================
static void GButton_Update() {
    if(++g_button_time &gt;= 4) {
        if(g_button_pin == 0) {
            g_button_state = !g_button_state;
            if(g_button_state == 0) {
                g_led_pin = 1;
            }
        }
        g_button_time = 0;
    }
}
//===============================================
static void GLed_Update() {
    if(++g_led_time &gt;= 4) {
        if(g_button_state == 1) {
            g_led_pin = !g_led_pin;
        }
        g_led_time = 0;
    }
}
//===============================================
static void GTask_Update() {
    GButton_Update();
    GLed_Update();
}
//===============================================
void main() {
    GTask_Init();
    while(1) {
        GTask_Update();
        GDelay_ms();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_loop_delay_timer_t0.gif" alt="/Tutoriels/Embedded_System/8051/img/i_loop_delay_timer_t0.gif"></div><br><h2 class="Title7 GTitle2" id="Boucle-infinie-Utiliser-un-delai-materiel-Timer-T1"><a class="Link9" href="#Boucle-infinie">Utiliser un délai matériel Timer T1</a></h2><br>Le <b>délai matériel</b> est basé sur l'utilsation d'un Timer. Il est moins facile à mettre en oeuvre, mais il est plus précis.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned char uchar;
//===============================================
#define TIME_MS (50)
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD (65536 - ((OSC_FREQ * TIME_MS) / (OSC_PER_INST * 1000)))
#define PRELOAD_H (PRELOAD / 256)
#define PRELOAD_L (PRELOAD % 256)
//===============================================
sbit g_led_pin = P1^0;
sbit g_button_pin = P1^7;
//===============================================
static bit g_button_state = 0;
//===============================================
static uchar g_button_time = 1;
static uchar g_led_time = 0;
//===============================================
static void GDelay_ms() {
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
static void GTask_Init() {
    g_led_pin = 1;
    g_button_pin = 1;
}
//===============================================
static void GButton_Update() {
    if(++g_button_time &gt;= 4) {
        if(g_button_pin == 0) {
            g_button_state = !g_button_state;
            if(g_button_state == 0) {
                g_led_pin = 1;
            }
        }
        g_button_time = 0;
    }
}
//===============================================
static void GLed_Update() {
    if(++g_led_time &gt;= 4) {
        if(g_button_state == 1) {
            g_led_pin = !g_led_pin;
        }
        g_led_time = 0;
    }
}
//===============================================
static void GTask_Update() {
    GButton_Update();
    GLed_Update();
}
//===============================================
void main() {
    GTask_Init();
    while(1) {
        GTask_Update();
        GDelay_ms();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_loop_delay_timer_t1.gif" alt="/Tutoriels/Embedded_System/8051/img/i_loop_delay_timer_t1.gif"></div><br><h2 class="Title7 GTitle2" id="Boucle-infinie-Utiliser-un-delai-materiel-Timer-T2"><a class="Link9" href="#Boucle-infinie">Utiliser un délai matériel Timer T2</a></h2><br>Le <b>délai matériel</b> est basé sur l'utilsation d'un Timer. Il est moins facile à mettre en oeuvre, mais il est plus précis.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned char uchar;
//===============================================
#define TIME_MS (50)
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD (65536 - ((OSC_FREQ * TIME_MS) / (OSC_PER_INST * 1000)))
#define PRELOAD_H (PRELOAD / 256)
#define PRELOAD_L (PRELOAD % 256)
//===============================================
sbit g_led_pin = P1^0;
sbit g_button_pin = P1^7;
//===============================================
static bit g_button_state = 0;
//===============================================
static uchar g_button_time = 1;
static uchar g_led_time = 0;
//===============================================
static void GDelay_ms() {
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
static void GTask_Init() {
    g_led_pin = 1;
    g_button_pin = 1;
}
//===============================================
static void GButton_Update() {
    if(++g_button_time &gt;= 4) {
        if(g_button_pin == 0) {
            g_button_state = !g_button_state;
            if(g_button_state == 0) {
                g_led_pin = 1;
            }
        }
        g_button_time = 0;
    }
}
//===============================================
static void GLed_Update() {
    if(++g_led_time &gt;= 4) {
        if(g_button_state == 1) {
            g_led_pin = !g_led_pin;
        }
        g_led_time = 0;
    }
}
//===============================================
static void GTask_Update() {
    GButton_Update();
    GLed_Update();
}
//===============================================
void main() {
    GTask_Init();
    while(1) {
        GTask_Update();
        GDelay_ms();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_loop_delay_timer_t2.gif" alt="/Tutoriels/Embedded_System/8051/img/i_loop_delay_timer_t2.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Systeme-d-exploitation-embarque-simple"><a class="Link3" href="#">Système d'exploitation embarqué simple</a></h1><div class="Body3"><br>Le système d'exploitation embarqué simple (<b>sEOS</b>) que nous proposons ici est basé sur l'utilisation de l'intérruption d'un Timer cadencé à une certaine fréquence (entre 1 et 50 ms) pour fixer le tick time lui permettant de synchroniser l'exécution des différentes tâches du système. Il prend en charge le mode Idle permettant de faire basculer le système en mode veille réduisant ainsi sa consommation d'énergie.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Systeme-d-exploitation-embarque-simple-Utilser-une-interruption-du-Timer-T0">Utilser une interruption du Timer T0</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Systeme-d-exploitation-embarque-simple-Utilser-une-interruption-du-Timer-T1">Utilser une interruption du Timer T1</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Systeme-d-exploitation-embarque-simple-Utilser-une-interruption-du-Timer-T2">Utilser une interruption du Timer T2</a></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-exploitation-embarque-simple-Comprendre-le-mode-Idle"><a class="Link9" href="#Systeme-d-exploitation-embarque-simple">Comprendre le mode Idle</a></h2><br>Le mode <b>Idle</b> est un mode de mise en veille du système permettant de faire de l'économie d'énergie. Pour quitter ce mode, il faut générer une interruption (externe ou interne) ou réinitialiser le système. Une interruption Timer permet de quitter le mode Idle.<br><br><h3 class="Title8 GTitle3">Gérer le mode Idle</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
static void GSeos_Go_To_Sleep() {
    PCON |= 0x01;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-exploitation-embarque-simple-Comprendre-le-mode-Power-Down"><a class="Link9" href="#Systeme-d-exploitation-embarque-simple">Comprendre le mode Power Down</a></h2><br>Le mode <b>Power Down</b> est un mode de mise hors tension du système permettant de faire de l'économie d'énergie. Pour quitter ce mode, il faut générer une interruption (externe) ou réinitialiser le système. Une interruption Timer ne permet pas de quitter le mode Power Down.<br><br><h3 class="Title8 GTitle3">Gérer le mode Power Down</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
static void GSeos_Go_To_Sleep() {
    PCON |= 0x02;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-exploitation-embarque-simple-Utilser-une-interruption-du-Timer-T0"><a class="Link9" href="#Systeme-d-exploitation-embarque-simple">Utilser une interruption du Timer T0</a></h2><br>Cette stratégie permet d'exécuter l'ensemble des tâches du système dans la <b>routine d'interruption</b> du Timer T0.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned char uchar;
//===============================================
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD(ms) (65536 - ((OSC_FREQ * ms) / (OSC_PER_INST * 1000)))
#define PRELOAD_H(ms) (PRELOAD(ms) / 256)
#define PRELOAD_L(ms) (PRELOAD(ms) % 256)
//===============================================
#define INTERRUPT_TIMER_T0      1
//===============================================
sbit g_led_pin = P1^0;
sbit g_button_pin = P1^7;
//===============================================
static bit g_button_state = 0;
//===============================================
static uchar g_button_time = 1;
static uchar g_led_time = 0;
//===============================================
static uchar g_preload_h;
static uchar g_preload_l;
//===============================================
static void GSeos_Init(uchar ms) {
    g_preload_h = PRELOAD_H(ms); 
    g_preload_l = PRELOAD_L(ms); 
    TMOD &amp;= 0xF0; 
    TMOD |= 0x01; 
    TH0 = g_preload_h; 
    TL0 = g_preload_l; 
    TF0 = 0; 
    ET0 = 1;
    TR0 = 1; 
}
//===============================================
static void GSeos_Reload() {
    TH0 = g_preload_h; 
    TL0 = g_preload_l; 
    TF0 = 0; 
}
//===============================================
static void GSeos_Start() {
    EA = 1;
}
//===============================================
static void GSeos_Go_To_Sleep() {
    PCON |= 0x01;
}
//===============================================
static void GTask_Init() {
    g_led_pin = 1;
    g_button_pin = 1;
}
//===============================================
static void GButton_Update() {
    if(++g_button_time &gt;= 20) {
        if(g_button_pin == 0) {
            g_button_state = !g_button_state;
            if(g_button_state == 0) {
                g_led_pin = 1;
            }
        }
        g_button_time = 0;
    }
}
//===============================================
static void GLed_Update() {
    if(++g_led_time &gt;= 20) {
        if(g_button_state == 1) {
            g_led_pin = !g_led_pin;
        }
        g_led_time = 0;
    }
}
//===============================================
static void GTask_Update() {
    GButton_Update();
    GLed_Update();
}
//===============================================
static void GSeos_Update() interrupt INTERRUPT_TIMER_T0 {
    GSeos_Reload();
    GTask_Update();
}
//===============================================
void main() {
    GSeos_Init(10);
    GTask_Init();
    GSeos_Start();
    while(1) {
        GSeos_Go_To_Sleep();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_seos_interrupt_timer_t0.gif" alt="/Tutoriels/Embedded_System/8051/img/i_seos_interrupt_timer_t0.gif"></div><br><h2 class="Title7 GTitle2" id="Systeme-d-exploitation-embarque-simple-Utilser-une-interruption-du-Timer-T1"><a class="Link9" href="#Systeme-d-exploitation-embarque-simple">Utilser une interruption du Timer T1</a></h2><br>Cette stratégie permet d'exécuter l'ensemble des tâches du système dans la <b>routine d'interruption</b> du Timer T1.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned char uchar;
//===============================================
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD(ms) (65536 - ((OSC_FREQ * ms) / (OSC_PER_INST * 1000)))
#define PRELOAD_H(ms) (PRELOAD(ms) / 256)
#define PRELOAD_L(ms) (PRELOAD(ms) % 256)
//===============================================
#define INTERRUPT_TIMER_T1      3
//===============================================
sbit g_led_pin = P1^0;
sbit g_button_pin = P1^7;
//===============================================
static bit g_button_state = 0;
//===============================================
static uchar g_button_time = 1;
static uchar g_led_time = 0;
//===============================================
static uchar g_preload_h;
static uchar g_preload_l;
//===============================================
static void GSeos_Init(uchar ms) {
    g_preload_h = PRELOAD_H(ms); 
    g_preload_l = PRELOAD_L(ms); 
    TMOD &amp;= 0x0F; 
    TMOD |= 0x10; 
    TH1 = g_preload_h; 
    TL1 = g_preload_l; 
    TF1 = 0; 
    ET1 = 1;
    TR1 = 1; 
}
//===============================================
static void GSeos_Reload() {
    TH1 = g_preload_h; 
    TL1 = g_preload_l; 
    TF1 = 0; 
}
//===============================================
static void GSeos_Start() {
    EA = 1;
}
//===============================================
static void GSeos_Go_To_Sleep() {
    PCON |= 0x01;
}
//===============================================
static void GTask_Init() {
    g_led_pin = 1;
    g_button_pin = 1;
}
//===============================================
static void GButton_Update() {
    if(++g_button_time &gt;= 20) {
        if(g_button_pin == 0) {
            g_button_state = !g_button_state;
            if(g_button_state == 0) {
                g_led_pin = 1;
            }
        }
        g_button_time = 0;
    }
}
//===============================================
static void GLed_Update() {
    if(++g_led_time &gt;= 20) {
        if(g_button_state == 1) {
            g_led_pin = !g_led_pin;
        }
        g_led_time = 0;
    }
}
//===============================================
static void GTask_Update() {
    GButton_Update();
    GLed_Update();
}
//===============================================
static void GSeos_Update() interrupt INTERRUPT_TIMER_T1 {
    GSeos_Reload();
    GTask_Update();
}
//===============================================
void main() {
    GSeos_Init(10);
    GTask_Init();
    GSeos_Start();
    while(1) {
        GSeos_Go_To_Sleep();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_seos_interrupt_timer_t1.gif" alt="/Tutoriels/Embedded_System/8051/img/i_seos_interrupt_timer_t1.gif"></div><br><h2 class="Title7 GTitle2" id="Systeme-d-exploitation-embarque-simple-Utilser-une-interruption-du-Timer-T2"><a class="Link9" href="#Systeme-d-exploitation-embarque-simple">Utilser une interruption du Timer T2</a></h2><br>Cette stratégie permet d'exécuter l'ensemble des tâches du système dans la <b>routine d'interruption</b> du Timer T2.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned char uchar;
//===============================================
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD(ms) (65536 - ((OSC_FREQ * ms) / (OSC_PER_INST * 1000)))
#define PRELOAD_H(ms) (PRELOAD(ms) / 256)
#define PRELOAD_L(ms) (PRELOAD(ms) % 256)
//===============================================
#define INTERRUPT_TIMER_T2      5
//===============================================
sbit g_led_pin = P1^0;
sbit g_button_pin = P1^7;
//===============================================
static bit g_button_state = 0;
//===============================================
static uchar g_button_time = 1;
static uchar g_led_time = 0;
//===============================================
static void GSeos_Init(uchar ms) {
    T2CON = 0x04;
    TH2 = PRELOAD_H(ms);
    TL2 = PRELOAD_L(ms); 
    RCAP2H = PRELOAD_H(ms);
    RCAP2L = PRELOAD_L(ms); 
    TF2 = 0;
    ET2 = 1;
    TR2 = 1; 
}
//===============================================
static void GSeos_Start() {
    EA = 1;
}
//===============================================
static void GSeos_Go_To_Sleep() {
    PCON |= 0x01;
}
//===============================================
static void GTask_Init() {
    g_led_pin = 1;
    g_button_pin = 1;
}
//===============================================
static void GButton_Update() {
    if(++g_button_time &gt;= 20) {
        if(g_button_pin == 0) {
            g_button_state = !g_button_state;
            if(g_button_state == 0) {
                g_led_pin = 1;
            }
        }
        g_button_time = 0;
    }
}
//===============================================
static void GLed_Update() {
    if(++g_led_time &gt;= 20) {
        if(g_button_state == 1) {
            g_led_pin = !g_led_pin;
        }
        g_led_time = 0;
    }
}
//===============================================
static void GTask_Update() {
    GButton_Update();
    GLed_Update();
}
//===============================================
static void GSeos_Update() interrupt INTERRUPT_TIMER_T2 {
    TF2 = 0;
    GTask_Update();
}
//===============================================
void main() {
    GSeos_Init(10);
    GTask_Init();
    GSeos_Start();
    while(1) {
        GSeos_Go_To_Sleep();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_seos_interrupt_timer_t2.gif" alt="/Tutoriels/Embedded_System/8051/img/i_seos_interrupt_timer_t2.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Systeme-d-exploitation-temps-reel"><a class="Link3" href="#">Système d'exploitation temps réel</a></h1><div class="Body3"><br>Le système d'exploitation temps réel (<b>RTOS</b>) que nous proposons ici est basé sur l'architecture des systèmes à déclenchement temporel (TTA) certifié pour le développement de systèmes à sécurité critique. Il utilise un Timer pour fixer la cadence d'entrainement d'un ordonnanceur (<b>Scheduler</b>) de tâches reparties dans un tableau. Il prend en charge le mode Idle permettant de faire basculer le système en mode veille réduisant ainsi sa consommation d'énergie.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-exploitation-temps-reel-Modeliser-une-tache"><a class="Link9" href="#Systeme-d-exploitation-temps-reel">Modéliser une tâche</a></h2><br>Dans cette architecture, on modélise une <b>tâche </b>par une fonction (<span class="GColor1" style="color:lime;">pTask</span>) à laquelle on associe un delai d'exécution (<span class="GColor1" style="color:lime;">delay</span>), une période d'exécution (<span class="GColor1" style="color:lime;">period</span>) et un drapeau d'exécution (<span class="GColor1" style="color:lime;">run_me</span>). Le délai d'exécution est le temps de départ d'exécution d'une tâche ; il est décrémenté à chaque tick time et quand il atteint la valeur 0 : on incrémente de 1 le drapeau d'exécution (run_me) de la tâche puis on le recharge à nouveau avec la valeur de la période d'exécution (period) de la tâche si cette dernière est différente de 0.<br><br><h3 class="Title8 GTitle3">Structure d'une tâche</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
struct _sGTask {
    void (*pTask)();
    uint delay;
    uint period;
    uchar run_me;
};
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Nombre de tâches</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#define SCH_MAX_TASKS (8)
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Tableau des tâches</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
sGTask g_task_map[SCH_MAX_TASKS];
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-exploitation-temps-reel-Creer-un-ordonnanceur-a-base-du-Timer-T0"><a class="Link9" href="#Systeme-d-exploitation-temps-reel">Créer un ordonnanceur à base du Timer T0</a></h2><br>Le <b>Timer T0</b> propose dans son mode 1 un compteur 16 bits à rechargement manuel.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
//===============================================
sbit g_led_pin = P1^0;
sbit g_button_pin = P1^7;
//===============================================
static bit g_button_state = 0;
//===============================================
static void GTask_Init() {
    g_led_pin = 1;
    g_button_pin = 1;
}
//===============================================
static void GButton_Update() {
    if(g_button_pin == 0) {
        g_button_state = !g_button_state;
        if(g_button_state == 0) {
            g_led_pin = 1;
        }
    }
}
//===============================================
static void GLed_Update() {
    if(g_button_state == 1) {
        g_led_pin = !g_led_pin;
    }
}
//===============================================
void main() {
    GSch_Init(10);
    GTask_Init();
    GSch_Add_Task(GButton_Update, 0, 20);
    GSch_Add_Task(GLed_Update, 1, 20);
    GSch_Start();
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GSch.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GSch_
#define _GSch_
//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned char uchar;
typedef unsigned int uint;
typedef unsigned long ulong;
//===============================================
void GSch_Init(uchar ms);
void GSch_Add_Task(void (*pTask)(), const uint delay, const uint period);
void GSch_Start();
void GSch_Dispatch_Tasks();
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GSch.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
//===============================================
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD(ms) (65536 - ((OSC_FREQ * ms) / (OSC_PER_INST * 1000))) 
#define PRELOAD_H(ms) (PRELOAD(ms) / 256)
#define PRELOAD_L(ms) (PRELOAD(ms) % 256)
//===============================================
#define INTERRUPT_TIMER_T0 1
//===============================================
#define SCH_MAX_TASKS (8)
//===============================================
typedef struct _sGTask sGTask;
//===============================================
struct _sGTask {
    void (*pTask)();
    uint delay;
    uint period;
    uchar run_me;
};
//===============================================
sGTask g_task_map[SCH_MAX_TASKS];
//===============================================
static uchar g_preload_h;
static uchar g_preload_l;
//===============================================
static void GSch_Go_To_Sleep();
static void GSch_Delete_Task(uchar index);
static void GSch_Reload();
//===============================================
void GSch_Init(uchar ms) {
    uchar l_index;
    for(l_index = 0; l_index &lt; SCH_MAX_TASKS; l_index++) {
        GSch_Delete_Task(l_index);
    }
    g_preload_h = PRELOAD_H(ms); 
    g_preload_l = PRELOAD_L(ms); 
    TMOD &amp;= 0xF0; 
    TMOD |= 0x01; 
    TH0 = g_preload_h; 
    TL0 = g_preload_l; 
    TF0 = 0; 
    ET0 = 1;
    TR0 = 1; 
}
//===============================================
static void GSch_Reload() {
    TH0 = g_preload_h; 
    TL0 = g_preload_l; 
    TF0 = 0; 
}
//===============================================
void GSch_Add_Task(void (*pTask)(), const uint delay, const uint period) {
    uchar l_index = 0;
    while((g_task_map[l_index].pTask != 0) &amp;&amp; (l_index &lt; SCH_MAX_TASKS)) l_index++;
    if(l_index == SCH_MAX_TASKS) return;
    g_task_map[l_index].pTask = pTask;
    g_task_map[l_index].delay = delay;
    g_task_map[l_index].period = period;
    g_task_map[l_index].run_me = 0;
}
//===============================================
void GSch_Start() {
    EA = 1;
}
//===============================================
static void GSch_Update() interrupt INTERRUPT_TIMER_T0 {
    uchar l_index;
    GSch_Reload();
    for(l_index = 0; l_index &lt; SCH_MAX_TASKS; l_index++) {
        if(g_task_map[l_index].pTask != 0) {
            if(g_task_map[l_index].delay == 0) {
                g_task_map[l_index].run_me += 1;
                if(g_task_map[l_index].period != 0) {
                    g_task_map[l_index].delay = g_task_map[l_index].period;
                }
            }
            else {
                g_task_map[l_index].delay -= 1;
            }
        }
    }
}
//===============================================
void GSch_Dispatch_Tasks() {
    uchar l_index;
    for(l_index = 0; l_index &lt; SCH_MAX_TASKS; l_index++) {
        if(g_task_map[l_index].run_me &gt; 0) {
            (*g_task_map[l_index].pTask)();
            g_task_map[l_index].run_me -= 1;
            if(g_task_map[l_index].period == 0) {
                GSch_Delete_Task(l_index);
            }
        }
    }
    GSch_Go_To_Sleep();
}
//===============================================
static void GSch_Delete_Task(uchar index) {
    g_task_map[index].pTask = 0x0000;
    g_task_map[index].delay = 0;
    g_task_map[index].period = 0;
    g_task_map[index].run_me = 0;
}
//===============================================
static void GSch_Go_To_Sleep() {
    PCON |= 0x01;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_sch_interrupt_timer_t0.gif" alt="/Tutoriels/Embedded_System/8051/img/i_sch_interrupt_timer_t0.gif"></div><br><h2 class="Title7 GTitle2" id="Systeme-d-exploitation-temps-reel-Creer-un-ordonnanceur-a-base-du-Timer-T1"><a class="Link9" href="#Systeme-d-exploitation-temps-reel">Créer un ordonnanceur à base du Timer T1</a></h2><br>Le <b>Timer T1</b> propose dans son mode 1 un compteur 16 bits à rechargement manuel.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
//===============================================
sbit g_led_pin = P1^0;
sbit g_button_pin = P1^7;
//===============================================
static bit g_button_state = 0;
//===============================================
static void GTask_Init() {
    g_led_pin = 1;
    g_button_pin = 1;
}
//===============================================
static void GButton_Update() {
    if(g_button_pin == 0) {
        g_button_state = !g_button_state;
        if(g_button_state == 0) {
            g_led_pin = 1;
        }
    }
}
//===============================================
static void GLed_Update() {
    if(g_button_state == 1) {
        g_led_pin = !g_led_pin;
    }
}
//===============================================
void main() {
    GSch_Init(10);
    GTask_Init();
    GSch_Add_Task(GButton_Update, 0, 20);
    GSch_Add_Task(GLed_Update, 1, 20);
    GSch_Start();
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GSch.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GSch_
#define _GSch_
//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned char uchar;
typedef unsigned int uint;
typedef unsigned long ulong;
//===============================================
void GSch_Init(uchar ms);
void GSch_Add_Task(void (*pTask)(), const uint delay, const uint period);
void GSch_Start();
void GSch_Dispatch_Tasks();
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GSch.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
//===============================================
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD(ms) (65536 - ((OSC_FREQ * ms) / (OSC_PER_INST * 1000))) 
#define PRELOAD_H(ms) (PRELOAD(ms) / 256)
#define PRELOAD_L(ms) (PRELOAD(ms) % 256)
//===============================================
#define INTERRUPT_TIMER_T1 3
//===============================================
#define SCH_MAX_TASKS (8)
//===============================================
typedef struct _sGTask sGTask;
//===============================================
struct _sGTask {
    void (*pTask)();
    uint delay;
    uint period;
    uchar run_me;
};
//===============================================
sGTask g_task_map[SCH_MAX_TASKS];
//===============================================
static uchar g_preload_h;
static uchar g_preload_l;
//===============================================
static void GSch_Go_To_Sleep();
static void GSch_Delete_Task(uchar index);
static void GSch_Reload();
//===============================================
void GSch_Init(uchar ms) {
    uchar l_index;
    for(l_index = 0; l_index &lt; SCH_MAX_TASKS; l_index++) {
        GSch_Delete_Task(l_index);
    }
    g_preload_h = PRELOAD_H(ms); 
    g_preload_l = PRELOAD_L(ms); 
    TMOD &amp;= 0x0F; 
    TMOD |= 0x10; 
    TH1 = g_preload_h; 
    TL1 = g_preload_l; 
    TF1 = 0; 
    ET1 = 1;
    TR1 = 1; 
}
//===============================================
static void GSch_Reload() {
    TH1 = g_preload_h; 
    TL1 = g_preload_l; 
    TF1 = 0; 
}
//===============================================
void GSch_Add_Task(void (*pTask)(), const uint delay, const uint period) {
    uchar l_index = 0;
    while((g_task_map[l_index].pTask != 0) &amp;&amp; (l_index &lt; SCH_MAX_TASKS)) l_index++;
    if(l_index == SCH_MAX_TASKS) return;
    g_task_map[l_index].pTask = pTask;
    g_task_map[l_index].delay = delay;
    g_task_map[l_index].period = period;
    g_task_map[l_index].run_me = 0;
}
//===============================================
void GSch_Start() {
    EA = 1;
}
//===============================================
static void GSch_Update() interrupt INTERRUPT_TIMER_T1 {
    uchar l_index;
    GSch_Reload();
    for(l_index = 0; l_index &lt; SCH_MAX_TASKS; l_index++) {
        if(g_task_map[l_index].pTask != 0) {
            if(g_task_map[l_index].delay == 0) {
                g_task_map[l_index].run_me += 1;
                if(g_task_map[l_index].period != 0) {
                    g_task_map[l_index].delay = g_task_map[l_index].period;
                }
            }
            else {
                g_task_map[l_index].delay -= 1;
            }
        }
    }
}
//===============================================
void GSch_Dispatch_Tasks() {
    uchar l_index;
    for(l_index = 0; l_index &lt; SCH_MAX_TASKS; l_index++) {
        if(g_task_map[l_index].run_me &gt; 0) {
            (*g_task_map[l_index].pTask)();
            g_task_map[l_index].run_me -= 1;
            if(g_task_map[l_index].period == 0) {
                GSch_Delete_Task(l_index);
            }
        }
    }
    GSch_Go_To_Sleep();
}
//===============================================
static void GSch_Delete_Task(uchar index) {
    g_task_map[index].pTask = 0x0000;
    g_task_map[index].delay = 0;
    g_task_map[index].period = 0;
    g_task_map[index].run_me = 0;
}
//===============================================
static void GSch_Go_To_Sleep() {
    PCON |= 0x01;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_sch_interrupt_timer_t1.gif" alt="/Tutoriels/Embedded_System/8051/img/i_sch_interrupt_timer_t1.gif"></div><br><h2 class="Title7 GTitle2" id="Systeme-d-exploitation-temps-reel-Creer-un-ordonnanceur-a-base-du-Timer-T2"><a class="Link9" href="#Systeme-d-exploitation-temps-reel">Créer un ordonnanceur à base du Timer T2</a></h2><br>Le <b>Timer T2</b> propose un compteur 16 bits à rechargement automatique.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
//===============================================
sbit g_led_pin = P1^0;
sbit g_button_pin = P1^7;
//===============================================
static bit g_button_state = 0;
//===============================================
static void GTask_Init() {
    g_led_pin = 1;
    g_button_pin = 1;
}
//===============================================
static void GButton_Update() {
    if(g_button_pin == 0) {
        g_button_state = !g_button_state;
        if(g_button_state == 0) {
            g_led_pin = 1;
        }
    }
}
//===============================================
static void GLed_Update() {
    if(g_button_state == 1) {
        g_led_pin = !g_led_pin;
    }
}
//===============================================
void main() {
    GSch_Init(10);
    GTask_Init();
    GSch_Add_Task(GButton_Update, 0, 20);
    GSch_Add_Task(GLed_Update, 1, 20);
    GSch_Start();
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GSch.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#ifndef _GSch_
#define _GSch_
//===============================================
#include &lt;reg52.h&gt;
//===============================================
typedef unsigned char uchar;
typedef unsigned int uint;
typedef unsigned long ulong;
//===============================================
void GSch_Init(uchar ms);
void GSch_Add_Task(void (*pTask)(), const uint delay, const uint period);
void GSch_Start();
void GSch_Dispatch_Tasks();
//===============================================
#endif
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GSch.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
//===============================================
#define OSC_FREQ (12000000UL)
#define OSC_PER_INST (12) 
//===============================================
#define PRELOAD(ms) (65536 - ((OSC_FREQ * ms) / (OSC_PER_INST * 1000))) 
#define PRELOAD_H(ms) (PRELOAD(ms) / 256)
#define PRELOAD_L(ms) (PRELOAD(ms) % 256)
//===============================================
#define INTERRUPT_TIMER_T2 5
//===============================================
#define SCH_MAX_TASKS (8)
//===============================================
typedef struct _sGTask sGTask;
//===============================================
struct _sGTask {
    void (*pTask)();
    uint delay;
    uint period;
    uchar run_me;
};
//===============================================
sGTask g_task_map[SCH_MAX_TASKS];
//===============================================
static void GSch_Go_To_Sleep();
static void GSch_Delete_Task(uchar index);
//===============================================
void GSch_Init(uchar ms) {
    uchar l_index;
    for(l_index = 0; l_index &lt; SCH_MAX_TASKS; l_index++) {
        GSch_Delete_Task(l_index);
    }
    T2CON = 0x00; 
    TH2 = PRELOAD_H(ms); 
    TL2 = PRELOAD_L(ms); 
    RCAP2H = PRELOAD_H(ms); 
    RCAP2L = PRELOAD_L(ms);
    TF2 = 0;
    ET2 = 1;
    TR2 = 1;
}
//===============================================
void GSch_Add_Task(void (*pTask)(), const uint delay, const uint period) {
    uchar l_index = 0;
    while((g_task_map[l_index].pTask != 0) &amp;&amp; (l_index &lt; SCH_MAX_TASKS)) l_index++;
    if(l_index == SCH_MAX_TASKS) return;
    g_task_map[l_index].pTask = pTask;
    g_task_map[l_index].delay = delay;
    g_task_map[l_index].period = period;
    g_task_map[l_index].run_me = 0;
}
//===============================================
void GSch_Start() {
    EA = 1;
}
//===============================================
static void GSch_Update() interrupt INTERRUPT_TIMER_T2 {
    uchar l_index;
    TF2 = 0;
    for(l_index = 0; l_index &lt; SCH_MAX_TASKS; l_index++) {
        if(g_task_map[l_index].pTask != 0) {
            if(g_task_map[l_index].delay == 0) {
                g_task_map[l_index].run_me += 1;
                if(g_task_map[l_index].period != 0) {
                    g_task_map[l_index].delay = g_task_map[l_index].period;
                }
            }
            else {
                g_task_map[l_index].delay -= 1;
            }
        }
    }
}
//===============================================
void GSch_Dispatch_Tasks() {
    uchar l_index;
    for(l_index = 0; l_index &lt; SCH_MAX_TASKS; l_index++) {
        if(g_task_map[l_index].run_me &gt; 0) {
            (*g_task_map[l_index].pTask)();
            g_task_map[l_index].run_me -= 1;
            if(g_task_map[l_index].period == 0) {
                GSch_Delete_Task(l_index);
            }
        }
    }
    GSch_Go_To_Sleep();
}
//===============================================
static void GSch_Delete_Task(uchar index) {
    g_task_map[index].pTask = 0x0000;
    g_task_map[index].delay = 0;
    g_task_map[index].period = 0;
    g_task_map[index].run_me = 0;
}
//===============================================
static void GSch_Go_To_Sleep() {
    PCON |= 0x01;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_sch_interrupt_timer_t2.gif" alt="/Tutoriels/Embedded_System/8051/img/i_sch_interrupt_timer_t2.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ports"><a class="Link3" href="#">Ports</a></h1><div class="Body3"><br>Un <b>port </b>est une ensemble de 8 broches permettant au microcontrôleur de communiquer avec son environnement extérieur.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ports-Ecrire-sur-un-port">Écrire sur un port</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ports-Lire-un-port">Lire un port</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ports-Ecrire-sur-une-broche">Ecrire sur une broche</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ports-Lire-une-broche">Lire une broche</a></div></div><br><h2 class="Title7 GTitle2" id="Ports-Ecrire-sur-un-port"><a class="Link9" href="#Ports">Écrire sur un port</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
//===============================================
static uchar g_port = 0;
static uchar g_data = 0;
static uchar g_state = 0;
//===============================================
static void GPort_Data_Write(uchar port, uchar d) {
    if(port == 0) {P0 = d;}
    else if(port == 1) {P1 = d;}
    else if(port == 2) {P2 = d;}
    else if(port == 3) {P3 = d;}
}
//===============================================
static void GTask_Init(uchar port, uchar d) {
    g_port = port;
    g_data = d;
    g_state = 0;
}
//===============================================
static void GTask_Update() {
    if(g_state == 0) {
        GPort_Data_Write(g_port, g_data);
        g_state = 1;
    }
    else {
        GPort_Data_Write(g_port, ~g_data);
        g_state = 0;
    }
}
//===============================================
void main() {
    GSch_Init(10);
    GTask_Init(1, 0xC3);
    GSch_Add_Task(GTask_Update, 1, 100);
    GSch_Start();
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_port_byte_write.gif" alt="/Tutoriels/Embedded_System/8051/img/i_port_byte_write.gif"></div><br><h2 class="Title7 GTitle2" id="Ports-Lire-un-port"><a class="Link9" href="#Ports">Lire un port</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
//===============================================
static uchar g_read_port;
static uchar g_write_port;
//===============================================
static void GPort_Data_Write(uchar port, uchar d) {
    if(port == 0) {P0 = d;}
    else if(port == 1) {P1 = d;}
    else if(port == 2) {P2 = d;}
    else if(port == 3) {P3 = d;}
}
//===============================================
static uchar GPort_Data_Read(uchar port) {
    uchar l_data = 0;
    if(port == 0) {l_data = P0;}
    else if(port == 1) {l_data = P1;}
    else if(port == 2) {l_data = P2;}
    else if(port == 3) {l_data = P3;}
    return l_data;
}
//===============================================
static void GTask_Init(uchar read_port, uchar write_port) {
    g_read_port = read_port;
    g_write_port = write_port;
    GPort_Data_Write(g_read_port, 0xFF);
}
//===============================================
static void GTask_Update() {
    uchar l_data = GPort_Data_Read(g_read_port);
    GPort_Data_Write(g_write_port, l_data);
}
//===============================================
void main() {
    GSch_Init(10);
    GTask_Init(3, 1);
    GSch_Add_Task(GTask_Update, 1, 20);
    GSch_Start();
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_port_byte_read.gif" alt="/Tutoriels/Embedded_System/8051/img/i_port_byte_read.gif"></div><br><h2 class="Title7 GTitle2" id="Ports-Ecrire-sur-une-broche"><a class="Link9" href="#Ports">Ecrire sur une broche</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
//===============================================
static uchar g_port;
static uchar g_pin_1;
static uchar g_pin_2;
static bit g_data = 0;
//=============================================== 
static void GPort_Bit_Write(uchar port, uchar pin, bit d) {
    uchar l_mask = 0x01;
    l_mask &lt;&lt;= pin;
    if(port == 0) {P0 = (d == 0) ? (P0 &amp; (~l_mask)) : (P0 | l_mask);}
    else if(port == 1) {P1 = (d == 0) ? (P1 &amp; (~l_mask)) : (P1 | l_mask);}
    else if(port == 2) {P2 = (d == 0) ? (P2 &amp; (~l_mask)) : (P2 | l_mask);}
    else if(port == 3) {P3 = (d == 0) ? (P3 &amp; (~l_mask)) : (P3 | l_mask);}
}
//===============================================
static void GTask_Init(uchar port, uchar pin_1, uchar pin_2) {
    g_port = port;
    g_pin_1 = pin_1;
    g_pin_2 = pin_2;
}
//===============================================
static void GTask_Update() {
    g_data = !g_data;
    GPort_Bit_Write(g_port, g_pin_1, g_data);
    GPort_Bit_Write(g_port, g_pin_2, g_data);
}
//===============================================
void main() {
    GSch_Init(10);
    GTask_Init(1, 0, 7);
    GSch_Add_Task(GTask_Update, 1, 100);
    GSch_Start();
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_port_bit_write.gif" alt="/Tutoriels/Embedded_System/8051/img/i_port_bit_write.gif"></div><br><h2 class="Title7 GTitle2" id="Ports-Lire-une-broche"><a class="Link9" href="#Ports">Lire une broche</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
//===============================================
static uchar g_port;
static uchar g_read_pin;
static uchar g_write_pin;
//=============================================== 
static void GPort_Bit_Write(uchar port, uchar pin, bit d) {
    uchar l_mask = 0x01;
    l_mask &lt;&lt;= pin;
    if(port == 0) {P0 = (d == 0) ? (P0 &amp; (~l_mask)) : (P0 | l_mask);}
    else if(port == 1) {P1 = (d == 0) ? (P1 &amp; (~l_mask)) : (P1 | l_mask);}
    else if(port == 2) {P2 = (d == 0) ? (P2 &amp; (~l_mask)) : (P2 | l_mask);}
    else if(port == 3) {P3 = (d == 0) ? (P3 &amp; (~l_mask)) : (P3 | l_mask);}
}
//=============================================== 
static bit GPort_Bit_Read(uchar port, uchar pin) {
    uchar l_mask = 0x01;
    bit l_data = 0;
    l_mask &lt;&lt;= pin;
    if(port == 0) {l_data = ((P0 &amp; l_mask) == 0) ? 0 : 1;}
    else if(port == 1) {l_data = ((P1 &amp; l_mask) == 0) ? 0 : 1;}
    else if(port == 2) {l_data = ((P2 &amp; l_mask) == 0) ? 0 : 1;}
    else if(port == 3) {l_data = ((P3 &amp; l_mask) == 0) ? 0 : 1;}
    return l_data;
}
//===============================================
static void GTask_Init(uchar port, uchar read_pin, uchar write_pin) {
    g_port = port;
    g_read_pin = read_pin;
    g_write_pin = write_pin;
    GPort_Bit_Write(g_port, g_read_pin, 1);
}
//===============================================
static void GTask_Update() {
    bit l_data = GPort_Bit_Read(g_port, g_read_pin);
    GPort_Bit_Write(g_port, g_write_pin, l_data);
}
//===============================================
void main() {
    GSch_Init(10);
    GTask_Init(1, 7, 0);
    GSch_Add_Task(GTask_Update, 1, 20);
    GSch_Start();
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_port_bit_read.gif" alt="/Tutoriels/Embedded_System/8051/img/i_port_bit_read.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Diode-LED"><a class="Link3" href="#">Diode LED</a></h1><div class="Body3"><br>Une <b>diode LED</b> peut servir de voyant lumineux pour interpeller un utilisateur.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Diode-LED-Clignoter-une-diode-LED"><a class="Link9" href="#Diode-LED">Clignoter une diode LED</a></h2><br>On peut faire <b>clignoter </b>une diode LED pour informer un utilisateur suite à la mise sous tension d'un système. Pour réaliser cela, on se sert d'un bouton poussoir pour modéliser la mise sous tension du système et on fait clignoter la diode LED chaque 200 ms pendant 3 s puis on l'éteint.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
#include "GPort.h"
//===============================================
static uchar g_button_port;
static uchar g_button_pin;
static bit g_button_state;
static uchar g_led_port;
static uchar g_led_pin;
static bit g_led_state;
static uchar g_led_count;
//===============================================
static void GTask_Init() {
    g_button_port = 1;
    g_button_pin = 7;
    g_led_port = 1;
    g_led_pin = 0;
    g_led_state = 1;
    g_led_count = 0;
    GPort_Bit_Write(g_button_port, g_button_pin, 1);
    GPort_Bit_Write(g_led_port, g_led_pin, g_led_state);
}
//===============================================
static void GButton_Update() {
    bit l_button_state = GPort_Bit_Read(g_button_port, g_button_pin);
    if(l_button_state == 0) {
        g_button_state = 1;
    }
}
//===============================================
static void GLed_Flash_Update() {
    if(g_button_state == 1) {
        g_led_state = !g_led_state;
        GPort_Bit_Write(g_led_port, g_led_pin, g_led_state);
    }
}
//===============================================
static void GLed_Stop_Update() {
    if(g_button_state == 1) {
        if(g_led_count++ == 15) {
            g_led_count = 0;
            g_button_state = 0;
            g_led_state = 1;
            GPort_Bit_Write(g_led_port, g_led_pin, g_led_state);
        }
    }
}
//===============================================
void main() {
    GSch_Init(1);
    GTask_Init();
    GSch_Add_Task(GButton_Update, 0, 200);
    GSch_Add_Task(GLed_Flash_Update, 1, 200);
    GSch_Add_Task(GLed_Stop_Update, 2, 200);
    GSch_Start();
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GPort.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GPort.h"
//=============================================== 
void GPort_Bit_Write(uchar port, uchar pin, bit d) {
    uchar l_mask = 0x01;
    l_mask &lt;&lt;= pin;
    if(port == 0) {P0 = (d == 0) ? (P0 &amp; (~l_mask)) : (P0 | l_mask);}
    else if(port == 1) {P1 = (d == 0) ? (P1 &amp; (~l_mask)) : (P1 | l_mask);}
    else if(port == 2) {P2 = (d == 0) ? (P2 &amp; (~l_mask)) : (P2 | l_mask);}
    else if(port == 3) {P3 = (d == 0) ? (P3 &amp; (~l_mask)) : (P3 | l_mask);}
}
//=============================================== 
bit GPort_Bit_Read(uchar port, uchar pin) {
    uchar l_mask = 0x01;
    bit l_data = 0;
    l_mask &lt;&lt;= pin;
    if(port == 0) {l_data = ((P0 &amp; l_mask) == 0) ? 0 : 1;}
    else if(port == 1) {l_data = ((P1 &amp; l_mask) == 0) ? 0 : 1;}
    else if(port == 2) {l_data = ((P2 &amp; l_mask) == 0) ? 0 : 1;}
    else if(port == 3) {l_data = ((P3 &amp; l_mask) == 0) ? 0 : 1;}
    return l_data;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_led_flash.gif" alt="/Tutoriels/Embedded_System/8051/img/i_led_flash.gif"></div><br><h2 class="Title7 GTitle2" id="Diode-LED-Realiser-un-chenillard"><a class="Link9" href="#Diode-LED">Réaliser un chenillard</a></h2><br>On peut utiliser un <b>chenillard </b>pour indiquer une direction à suivre par exemple de haut en bas. Pour réaliser cela, on dispose des diodes LED suivant la verticale, ensuite on allume 3 diodes LED et on les fait déplacer chaque 500 ms.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
#include "GPort.h"
//===============================================
static uchar g_chase_count;
static uchar g_chase_port;
//===============================================
static void GTask_Init() {
    g_chase_count = 0;
    g_chase_port = 1;
}
//===============================================
static void GChase_Update() {
    GPort_Data_Write(g_chase_port, 0xFF);
    GPort_Bit_Write(g_chase_port, g_chase_count, 0);
    GPort_Bit_Write(g_chase_port, g_chase_count + 1, 0);
    GPort_Bit_Write(g_chase_port, g_chase_count + 2, 0);
    if(++g_chase_count &gt;= 8) {
        g_chase_count = 0;
    }
}
//===============================================
void main() {
    GSch_Init(1);
    GTask_Init();
    GSch_Add_Task(GChase_Update, 0, 500);
    GSch_Start();
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GPort.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GPort.h"
//===============================================
void GPort_Data_Write(uchar port, uchar d) {
    if(port == 0) {P0 = d;}
    else if(port == 1) {P1 = d;}
    else if(port == 2) {P2 = d;}
    else if(port == 3) {P3 = d;}
}
//=============================================== 
void GPort_Bit_Write(uchar port, uchar pin, bit d) {
    uchar l_mask = 0x01;
    l_mask &lt;&lt;= pin;
    if(port == 0) {P0 = (d == 0) ? (P0 &amp; (~l_mask)) : (P0 | l_mask);}
    else if(port == 1) {P1 = (d == 0) ? (P1 &amp; (~l_mask)) : (P1 | l_mask);}
    else if(port == 2) {P2 = (d == 0) ? (P2 &amp; (~l_mask)) : (P2 | l_mask);}
    else if(port == 3) {P3 = (d == 0) ? (P3 &amp; (~l_mask)) : (P3 | l_mask);}
}
//===============================================</pre></div></div>&nbsp;<br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_led_chase.gif" alt="/Tutoriels/Embedded_System/8051/img/i_led_chase.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficheur-7-segment"><a class="Link3" href="#">Afficheur 7-segment</a></h1><div class="Body3"><br>Un afficheur <b>7-segment</b> peut être utilisé pour afficher des chiffres.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Afficheur-7-segment-Realiser-un-compteur-a-1-digit-de-0-a-9"><a class="Link9" href="#Afficheur-7-segment">Réaliser un compteur à 1 digit de 0 à 9</a></h2><br>Un <b>compteur </b>peut être associé à des feux de circulation pour indiquer le temps restant avant d'être autorisé à circuler.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
#include "G7Seg.h"
//===============================================
static uchar g_counter_data;
//===============================================
static void GTask_Init() {
    g_counter_data = 0;
}
//===============================================
static void GCounter_Update() {
    G7Seg_Digit_Write(g_counter_data);
    if(++g_counter_data &gt; 9) {
        g_counter_data = 0;
    }
}
//===============================================
void main() {
    GSch_Init(1);
    GTask_Init();
    GSch_Add_Task(GCounter_Update, 1, 1000);
    GSch_Start();
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">G7Seg.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "G7Seg.h"
//===============================================
#define DATA_PORT   P1
//===============================================
static code uchar g_digit_map[] = {
    0x3f, 0x06, 0x5b,0x4f, 0x66, 0x6d, 0x7d, 0x07, 0x7f, 0x6F
};
//===============================================
void G7Seg_Digit_Write(uchar d) {
    DATA_PORT = ~g_digit_map[d];
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_7seg_1_digit.gif" alt="/Tutoriels/Embedded_System/8051/img/i_7seg_1_digit.gif"></div><br><h2 class="Title7 GTitle2" id="Afficheur-7-segment-Realiser-un-compteur-a-2-digits-de-0-a-99"><a class="Link9" href="#Afficheur-7-segment">Réaliser un compteur à 2 digits de 0 à 99</a></h2><br>Un <b>compteur </b>peut être associé à des feux de circulation pour indiquer le temps restant avant d'être autorisé à circuler.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GSch.h"
#include "G7Seg.h"
//===============================================
static uchar g_counter_data;
//===============================================
static void GTask_Init() {
    g_counter_data = 0;
    G7Seg_Init();
}
//===============================================
static void GCounter_Update() {
    G7Seg_Digit_Write(g_counter_data);
    if(++g_counter_data &gt; 99) {
        g_counter_data = 0;
    }
}
//===============================================
void main() {
    GSch_Init(1);
    GTask_Init();
    GSch_Add_Task(G7Seg_Update, 0, 40);
    GSch_Add_Task(GCounter_Update, 1, 1000);
    GSch_Start();
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">G7Seg.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "G7Seg.h"
//===============================================
#define DATA_PORT   P1
#define COM_PORT    P3
//===============================================
sbit g_com_pin_0 = COM_PORT^0;
sbit g_com_pin_1 = COM_PORT^1;
//===============================================
static uchar g_com_state;
static uchar g_data;
//===============================================
static code uchar g_digit_map[] = {
    0x3f, 0x06, 0x5b,0x4f, 0x66, 0x6d, 0x7d, 0x07, 0x7f, 0x6F
};
//===============================================
void G7Seg_Init() {
    g_com_pin_0 = 0;
    g_com_pin_1 = 0;
    g_com_state = 1;
    g_data = 0;
}
//===============================================
void G7Seg_Digit_Write(uchar d) {
    g_data = d;
}
//===============================================
void G7Seg_Update() {
    uchar l_digit;

    if(g_com_state == 0) {
        l_digit = g_data % 10;
        g_com_pin_0 = 1;
        g_com_pin_1 = 0;
        DATA_PORT = ~g_digit_map[l_digit];
        g_com_state = 1;
    }
    else if(g_com_state == 1) {
        l_digit = (g_data/10) % 10;
        g_com_pin_0 = 0;
        g_com_pin_1 = 1;
        DATA_PORT = ~g_digit_map[l_digit];
        g_com_state = 0;
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_7seg_2_digit.png" alt="/Tutoriels/Embedded_System/8051/img/i_7seg_2_digit.png"></div><br></div></div></div></div><br>