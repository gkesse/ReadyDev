<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation système embarqué avec le 8051</div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation système embarqué avec le <b>8051</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>8051 </b>est un microcontrôleur développé pour être utilisé dans des produits embarqués. C'est une architecture populaire incorporée dans de nombreux microcontrôleurs plus récents, puis complétée par un certain nombre de circuits périphériques intégrés sur la même puce, et dotés de mémoires de plus grande capacité. <br><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/8051/img/b_8051.png" class="lazy" data-src="/Tutoriels/Embedded_System/8051/img/b_8051.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de 8051.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Installer-l-environnement-8051-sous-Keil--Vision"><a class="Link9" href="#Fondamentaux">Installer l'environnement 8051 sous Keil µVision</a></h2><br>L'IDE <b>Keil µVision</b> combine la gestion de projet, l'environnement d'exécution, les installations de construction, l'édition de code source et le débogage de programme dans un seul environnement puissant. Keil µVision est facile à utiliser et accélère le développement de votre logiciel embarqué. Keil µVision prend en charge plusieurs écrans et vous permet de créer des dispositions de fenêtres individuelles n'importe où sur la surface visuelle. Le débogueur Keil µVision fournit un environnement unique dans lequel vous pouvez tester, vérifier et optimiser le code de votre application. Le débogueur comprend des fonctionnalités traditionnelles telles que des points d'arrêt simples et complexes, des fenêtres de surveillance et un contrôle d'exécution et offre une visibilité complète sur les périphériques de l'appareil.<br><br><h3 class="Title8 GTitle3">Télécharger Keil µVision</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www87.zippyshare.com/v/30Cu5IaS/file.html">https://www87.zippyshare.com/v/30Cu5IaS/file.html</a><br><br><h3 class="Title8 GTitle3">Extraire Keil µVision</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">Keil_C51_uVision5.rar
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
Debug -&gt; Run</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/8051/img/i_8051_test_keil.png" class="lazy" data-src="/Tutoriels/Embedded_System/8051/img/i_8051_test_keil.png"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Compiler-un-projet-8051-sous-SDDC"><a class="Link9" href="#Fondamentaux">Compiler un projet 8051 sous SDDC</a></h2><br><h3 class="Title8 GTitle3">Editer le programme (main.c)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
Run the simulation</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png" class="lazy" data-src="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Notes-et-references"><a class="Link3" href="#">Notes et références</a></h1><div class="Body3"><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.alldatasheet.com/">https://www.alldatasheet.com/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.alldatasheet.com/datasheet-pdf/pdf/56216/ATMEL/AT89C52.html">https://www.alldatasheet.com/datasheet-pdf/pdf/56216/ATMEL/AT89C52.html</a><br><br></div></div></div></div><br>