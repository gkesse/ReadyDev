<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation système embarqué avec le 8051</div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation système embarqué avec le <b>8051</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>8051 </b>est un microcontrôleur développé pour être utilisé dans des produits embarqués. C'est une architecture populaire incorporée dans de nombreux microcontrôleurs plus récents, puis complétée par un certain nombre de circuits périphériques intégrés sur la même puce, et dotés de mémoires de plus grande capacité. <br><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/b_8051.png" alt="/Tutoriels/Embedded_System/8051/img/b_8051.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement 8051.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617735857427"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617735857427");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous Keil µVision"><a class="Link9" href="#Installation">1.1 - Installation sous Keil µVision</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger Keil µVision"><a class="Link9" href="#Installation">1.1.1 - Télécharger Keil µVision</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.keil.com/download/product/">https://www.keil.com/download/product/</a><br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">C51
Enter Your Contact Information Below
First Name -> XXXXX
Last Name -> XXXXX
E-mail -> XXXXX
Company -> XXXXX
Job Title -> XXXXX
Country/Region -> XXXXX
Phone -> XX.XX.XX.XX.XX
Cocher -> Send me e-mail when there is a new update.
Which device are you using? -> AT89C52
Cocher ->  Please keep me updated on products
Submit
C51V960A.EXE</xmp></pre></div><br><a class="Link7 GLink1" style="color:gray;" target="_blank" href="https://www87.zippyshare.com/v/30Cu5IaS/file.html">Fin</a><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Extraire Keil µVision"><a class="Link9" href="#Installation">1.1.2 - Extraire Keil µVision</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil_C51_uVision5.rar
Clic droit -&gt; Extraire vers Keil_C51_uVision5\
Protection contre les virus et les menances
Trojan:Win32/Tiggre!rfn
Options de la mesure prise
Autoriser sur l'appareil
Intervenir</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil_C51_uVision5.rar
Clic droit -&gt; Extraire vers Keil_C51_uVision5\</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.3 - Installer Keil µVision"><a class="Link9" href="#Installation">1.1.3 - Installer Keil µVision</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">c51v960a.exe
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
Finish</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.4 - Démarrer Keil µVision"><a class="Link9" href="#Installation">1.1.4 - Démarrer Keil µVision</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
Keil µVision5</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.5 - Installer la licence"><a class="Link9" href="#Installation">1.1.5 - Installer la licence</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
File -&gt; License Management
Computer ID -&gt; CID -&gt; XXXXX-XXXXX -&gt; Copier</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">License.rar
Clic droit -&gt; Extraire vers License\
Protection contre les virus et les menances
Trojan:Win32/Occamy.C78
Options de la mesure prise
Autoriser sur l'appareil
Intervenir</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">l51.dll -&gt; Clic droit -&gt; Copier
C:\Keil_v5\C51\BIN -&gt; Clic droit -&gt; Coller
Remplacer le fichier dans la destination</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">License.exe
MCU Type -&gt; Cocher -&gt; 51
Professional Developers Kit
With computer ID code
Cocher -&gt; V2
Cocher -&gt; External CID code -&gt; XXXXX-XXXXX
Generate
LICO -&gt; XXXXX-XXXXX-XXXXX-XXXXX-XXXXX -&gt; Clic droit -&gt; Copier</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
File -&gt; License Management
New License ID Code (LIC) -&gt; XXXXX-XXXXX-XXXXX-XXXXX-XXXXX
Add LIC
Close</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.2 - Installation sous SDCC"><a class="Link9" href="#Installation">1.2 - Installation sous SDCC</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.2.1 - Télécharger SDCC"><a class="Link9" href="#Installation">1.2.1 - Télécharger SDCC</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/sdcc/files/">https://sourceforge.net/projects/sdcc/files/</a><br><br><b>sdcc-4.1.0-x64-setup.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.2.2 - Installer SDCC"><a class="Link9" href="#Installation">1.2.2 - Installer SDCC</a></h2><br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">sdcc-4.1.0-x64-setup.exe
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
Finish</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet C pour le 8051.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617781951844"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617781951844");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous Keil µVision"><a class="Link9" href="#Tests">1.1 - Test sous Keil µVision</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Créer le projet"><a class="Link9" href="#Tests">1.1.1 - Créer le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
Project -&gt; New µVision Project
Adresse -&gt; ReadyTest\8051\keil
Nom du fichier -&gt; ReadyApp
Project Files (*.uvproj; *.uvprojx)
Enregistrer</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Device
Search -&gt; AT89C52
Microchip -&gt; AT89C52
Ok
Copy 'STARTUP.A51' to Project Folder 
and Add File to Project ? -&gt; Non</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Modifier la cible"><a class="Link9" href="#Tests">1.1.2 - Modifier la cible</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
Project Explorer
Project:ReadyApp
Target 1 -&gt; Clic droit -&gt; Options for Target 'TArget 1'
Device
Search -&gt; AT89C52
Microchip -&gt; AT89C52
Ok</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Configurer la génération d'un fichier exécutable"><a class="Link9" href="#Tests">1.1.3 - Configurer la génération d'un fichier exécutable</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
Project Explorer
Project:ReadyApp
Target 1 -&gt; Clic droit -&gt; Options for Target 'TArget 1'
Output
Name of Executable -&gt; rd8051
Cocher -&gt; Create HEX File HEX Format -&gt; HEX-80
Ok</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.4 - Ajouter un fichier source"><a class="Link9" href="#Tests">1.1.4 - Ajouter un fichier source</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
Project Explorer
Project:ReadyApp
Target 1
Source Group 1 -&gt; Clic droit
Add New Item to Group 'Source Group 1'
Sélectionner -&gt; C File (.c)
Type -&gt; C File (.c)
Name -&gt; main
Location -&gt; ReadyTest\8051\keil
Add</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.5 - Éditer le programme C"><a class="Link9" href="#Tests">1.1.5 - Éditer le programme C</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on inclut le fichier entete des declarations 8051
#include &lt;reg52.h&gt;

// on definit le programme principal
void main() {
    // on ecrit sur le port P1 la valeur binaire (10101010)
    P1 = 0xAA;
    // on definit la boucle principale
    // un microcontroleur tourne toujours dans une bouble
    while(1);
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.6 - Compiler le projet"><a class="Link9" href="#Tests">1.1.6 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
Project -&gt; Rebuild all target files</xmp></pre></div><br><h3 class="Title8 GTitle3">Sortie</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Rebuild started: Project: ReadyApp
Rebuild target 'Target 1'
compiling main.c...
linking...
Program Size: data=9.0 xdata=0 code=20
creating hex file from ".\Objects\rd8051"...
".\Objects\rd8051" - 0 Error(s), 0 Warning(s).
Build Time Elapsed:  00:00:02</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier exécutable</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">ReadyTest\8051\keil\Objects\rd8051</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.7 - Simulation"><a class="Link9" href="#Tests">1.1.7 - Simulation</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.7.1 - Simulation sous Keil µVision"><a class="Link9" href="#Tests">1.1.7.1 - Simulation sous Keil µVision</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.7.1.1 - Ouvrir le débogueur"><a class="Link9" href="#Tests">1.1.7.1.1 - Ouvrir le débogueur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
Debug -> Start/Stop Debug Session</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.7.1.2 - Ouvrir le port P1"><a class="Link9" href="#Tests">1.1.7.1.2 - Ouvrir le port P1</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
Peripherals -&gt; I/O - Ports -&gt; Port 1</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.7.1.3 - Démarrer la simulation"><a class="Link9" href="#Tests">1.1.7.1.3 - Démarrer la simulation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
Debug -&gt; Run</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_8051_test_keil.png" alt="/Tutoriels/Embedded_System/8051/img/i_8051_test_keil.png"></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.7.1.4 - Arrêter la simulation"><a class="Link9" href="#Tests">1.1.7.1.4 - Arrêter la simulation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
Debug -&gt; Stop</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.7.1.5 - Fermer le débogueur"><a class="Link9" href="#Tests">1.1.7.1.5 - Fermer le débogueur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Keil µVision5
Debug -&gt; Start/Stop Debug Session</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.7.2 - Simulation sous Proteus"><a class="Link9" href="#Tests">1.1.7.2 - Simulation sous Proteus</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png" alt="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png"></div><br><h2 class="Title7 GTitle2" id="Tests-1.2 - Test sous SDCC"><a class="Link9" href="#Tests">1.2 - Test sous SDCC</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.2.1 - Créer le projet"><a class="Link9" href="#Tests">1.2.1 - Créer le projet</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on inclut le fichier entete des declarations 8051
#include &lt;8052.h&gt;

// on definit le programme principal
void main() {
    // on ecrit sur le port P1 la valeur binaire (10101010)
    P1 = 0xAA;
    // on definit la boucle principale
    // un microcontroleur tourne toujours dans une bouble
    while(1);
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.2.2 - Compiler le projet"><a class="Link9" href="#Tests">1.2.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Program Files\SDCC\bin;%PATH%"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">sdcc --std-c11 -c main.c</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.2.3 - Générer le fichier exécutable"><a class="Link9" href="#Tests">1.2.3 - Générer le fichier exécutable</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">sdcc main.rel
packihx main.ihx &gt; rd8051.hex</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.2.4 - Simulation"><a class="Link9" href="#Tests">1.2.4 - Simulation</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.2.4.1 - Simulation sous Proteus"><a class="Link9" href="#Tests">1.2.4.1 - Simulation sous Proteus</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png" alt="/Tutoriels/Embedded_System/8051/img/i_8051_test_proteus.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Keil µVision"><a class="Link3" href="#">Keil µVision</a></h1><div class="Body3"><br>Keil µVision est un environnement de développement intégré.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618403446475"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618403446475");</script></div><br><h2 class="Title7 GTitle2" id="Keil µVision-1 - Opérations"><a class="Link9" href="#Keil µVision">1 - Opérations</a></h2><br><h2 class="Title7 GTitle2" id="Keil µVision-1.1 - Ajouter un fichier source existant"><a class="Link9" href="#Keil µVision">1.1 - Ajouter un fichier source existant</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Explorer -&gt; Project: rd8051 -&gt; Target 1 -&gt; Source Group 1
Clic droit -&gt; Add Existing Files to Group 'Source Group 1'
Regarder dans -&gt; src
Nom du fichier -&gt; main.c
Type de fichiers -&gt; C Source File (*.c)
Add
Close</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Keil µVision-1.2 - Définir le repetoire des fichiers include"><a class="Link9" href="#Keil µVision">1.2 - Définir le repetoire des fichiers include</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Explorer -&gt; Project: rd8051 -&gt; Target 1
Clic droit -&gt; Options for Target 'Target 1'
C51
Include Paths -&gt; ..\readyapp\src\include
Ok</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Keil µVision-1.3 - Ajouter une définition lors de la compilation"><a class="Link9" href="#Keil µVision">1.3 - Ajouter une définition lors de la compilation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Explorer -&gt; Project: rd8051 -&gt; Target 1
Clic droit -&gt; Options for Target 'Target 1'
C51
Preprocessor Symbols -&gt; Define -&gt; _KEIL_
Ok</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Proteus"><a class="Link3" href="#">Proteus</a></h1><div class="Body3"><br>Proteus est un simulateur de circuits électriques.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617788146413"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617788146413");</script></div><br><h2 class="Title7 GTitle2" id="Proteus-1 - Introduction"><a class="Link9" href="#Proteus">1 - Introduction</a></h2><br>Proteus est une suite logicielle de CAO électronique qui permet la conception d'un système électronique complet et de le simuler, y compris avec le code des microcontrôleurs. Pour ce faire, elle inclut un éditeur de schéma (ISIS), un outil de placement-routage (ARES), un simulateur analogique-numérique, un environnement de développement intégré pour microcontrôleurs, un module de programmation par algorigrammes ainsi qu'un éditeur d'interface pour smartphone afin de piloter à distance des cartes Arduino ou Raspberry.<br><br><h2 class="Title7 GTitle2" id="Proteus-2 - Installation"><a class="Link9" href="#Proteus">2 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Proteus-2.1 - Installation sous Windows"><a class="Link9" href="#Proteus">2.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Proteus-2.1.1 - Installation sous Proteus"><a class="Link9" href="#Proteus">2.1.1 - Installation sous Proteus</a></h2><br><h2 class="Title7 GTitle2" id="Proteus-2.1.1.1 - Télécharger Proteus"><a class="Link9" href="#Proteus">2.1.1.1 - Télécharger Proteus</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.labcenter.com/">https://www.labcenter.com/</a><br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Labcenter
Circuit Simulation Software
VSM Packages
Bundle Offers -&gt; Proteus Platinum Edition
Continue
Update Service Contract -&gt; Update Service Contract 1 Year € 646.00
Continue
Check Out</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Order Promotions
Code -&gt; PROMO -&gt; Add
Continue</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Existing Customers
Licence Key Number -&gt; 12-12345-678
Expiry Date -&gt; 2014 / 04 / 25
Set Key
Continue</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Payment Contact Details
Name -&gt; First Name -&gt; XXXXX
Name -&gt; Last Name -&gt; XXXXX
Telephone -&gt; Primary Phone -&gt; XX.XX.XX.XX..XX
Email -&gt; Email -&gt; XXXXX
Email -&gt; Confirm Email -&gt; XXXXX
Street Address -&gt; Line 1 -&gt; XXXXX
City -&gt; XXXXX
Postal Code -&gt; XXXXX
Country -&gt; XXXXX
Pay Now</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">MasterCard
Cardholder's name -&gt; XXXXX YYYYY
Card number -&gt; XXXX XXXX XXXX XXXX XXXX
Card verification code -&gt; XXX
Expiry date (mm/yyyy) -&gt; XX / YYYY
Postcode/City -&gt; XXXXX / YYYYY
Country -&gt; XXXXX
Yes, I confirm my payment</xmp></pre></div><br><a class="Link7 GLink1" style="color:gray;" target="_blank" href="https://mega.nz/file/5MJ1GKyI#s325o7wYhZInJuXxbvys-Cv-BZ4NNZP8U-hlMPkYIpc">Fin</a><br><br><h2 class="Title7 GTitle2" id="Proteus-2.1.1.2 - Installer Proteus"><a class="Link9" href="#Proteus">2.1.1.2 - Installer Proteus</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Proteus Professional 8.9 SP0 Build 27865.rar -&gt; Clic droit
Extraire vers Proteus Professional 8.9 SP0 Build 27865\</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">P8.9.sp0_Setup.exe
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
Close</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Licence
Copier -&gt; Licence.lxk
Copier -&gt; PP8.9.exe
Coller -&gt; C:\Program Files (x86)\Labcenter Electronics\Proteus 8 Professional</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Proteus-3 - Exemples"><a class="Link9" href="#Proteus">3 - Exemples</a></h2><br><h2 class="Title7 GTitle2" id="Proteus-3.1 - Exemple sous Windows"><a class="Link9" href="#Proteus">3.1 - Exemple sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Proteus-3.1.1 - Créer un circuit électrique"><a class="Link9" href="#Proteus">3.1.1 - Créer un circuit électrique</a></h2><br><h2 class="Title7 GTitle2" id="Proteus-3.1.1.1 - Ouvrir l'interface schematic capture"><a class="Link9" href="#Proteus">3.1.1.1 - Ouvrir l'interface schematic capture</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Proteus
Schematic Capture</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Proteus-3.1.1.2 - Enregistrer le projet"><a class="Link9" href="#Proteus">3.1.1.2 - Enregistrer le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Proteus
File -&gt; Save Project As
Enregistrer dans -&gt; ReadyTest\8051\proteus
Nom du fichier -&gt; circuit_8051
Type -&gt; Project Files
Enregistrer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Proteus-3.1.1.3 - Ajouter un composant"><a class="Link9" href="#Proteus">3.1.1.3 - Ajouter un composant</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Proteus
Schematic Capture
Component Mode
Pick Devices
Keyword -&gt; AT89C52
Device -&gt; AT89C52
Ok</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Proteus-3.1.1.4 - Placement de composants"><a class="Link9" href="#Proteus">3.1.1.4 - Placement de composants</a></h2><br><h2 class="Title7 GTitle2" id="Proteus-3.1.1.4.1 - Placer un composant"><a class="Link9" href="#Proteus">3.1.1.4.1 - Placer un composant</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Proteus
Schematic Capture
Component Mode
Devices
Cliquer/Déposer -&gt; AT89C52</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Proteus-3.1.1.4.2 - Placer un terminal"><a class="Link9" href="#Proteus">3.1.1.4.2 - Placer un terminal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Proteus
Schematic Capture
Terminals Mode
Default</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Proteus-3.1.1.5 - Chargement de programmes"><a class="Link9" href="#Proteus">3.1.1.5 - Chargement de programmes</a></h2><br><h2 class="Title7 GTitle2" id="Proteus-3.1.1.5.1 - Charger un programme dans microcontrôleur"><a class="Link9" href="#Proteus">3.1.1.5.1 - Charger un programme dans microcontrôleur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Proteus
Schematic Capture
Component Mode
Workspace
AT89C52 -&gt; Clic droit -&gt; Edit Properties
Program File -&gt; ..\keil\Objects\rd8051.hex
Ok</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Proteus-3.1.1.6 - Simulation"><a class="Link9" href="#Proteus">3.1.1.6 - Simulation</a></h2><br><h2 class="Title7 GTitle2" id="Proteus-3.1.1.6.1 - Démarrer la simulation"><a class="Link9" href="#Proteus">3.1.1.6.1 - Démarrer la simulation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Proteus
Schematic Capture
Run the simulation</xmp></pre></div><br> </div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Liens"><a class="Link3" href="#">Liens</a></h1><div class="Body3"><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.alldatasheet.com/">https://www.alldatasheet.com/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.alldatasheet.com/datasheet-pdf/pdf/56216/ATMEL/AT89C52.html">https://www.alldatasheet.com/datasheet-pdf/pdf/56216/ATMEL/AT89C52.html</a><br><br></div></div></div></div><br>