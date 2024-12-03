<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/application/oscilloscope-numerique">Oscilloscope numérique</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Conception d'un oscilloscope numérique</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Bienvenue dans ce tutoriel consacré à la conception d'un <b>oscilloscope numérique</b> en <b>C++</b> avec la bibliothèque <b>Qt</b> sous l'environnement <b>WSL-Ubuntu</b> du système <b>Windows</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#creation-d-un-projet-c---avec-cmake-sous-vscode">Création d'un projet C++ avec CMake sous VSCode</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>ReadyScope</b> est un oscilloscope numérique pour le streaming de données texte ou binaires via TCP, ports série et Bluetooth RFCOMM. Il offre un rendu flexible et un format de streaming binaire ou de flux de texte hautement configurable. Il se compose d'une fenêtre principale avec un nombre variable d'oscilloscopes affichant les traces de signaux entrants.<br><br>Les sources de données de signal incluent les sources TCP, les ports série (USB ou série matériel) et Bluetooth RFCOMM.
Le format des données entrantes comprend le format texte brut et le format de streaming binaire. Le format de streaming binaire est entièrement configurable, y compris l'en-tête, le nombre de canaux et la largeur des données de canal.<br><br>Les données acquises peuvent être exportées vers un fichier.<br><br>Le nombre d'oscilloscopes, ainsi que le nombre de traces par oscilloscope sont entièrement configurables<br><br>Caractéristiques principales:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Connexion série (USB et série matérielle), Bluetooth RFCOMM et TCP.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Format de données texte et binaire.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Indication en temps réel de la vitesse des données entrantes.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Portées entièrement configurables, avec plusieurs traces par portée, échelle X/Y configurable, couleurs, etc.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vitesse d'affichage configurable.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Zoom (temps et amplitude) et mise à l'échelle automatique.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Exporter les données du signal vers un fichier.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="creation-d-un-projet-c---avec-cmake-sous-vscode">Création d'un projet C++ avec CMake sous VSCode</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous utilisons l'éditeur (VSCode) pour configurer un projet C++ avec l'outil (CMake) sous l'environnement (WSL-Ubuntu) du système (Windows).</div>
</div><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c---avec-cmake-sous-vscode_cloner-un-depot-volumineux-sous-git">Cloner un dépôt volumineux sous Git</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c---avec-cmake-sous-vscode_installer-l-extension-wsl-sous-vscode">Installer l'extension WSL sous VSCode</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c---avec-cmake-sous-vscode_ouvrir-un-dossier-avec-wsl-sous-vscode">Ouvrir un dossier avec WSL sous VSCode</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c---avec-cmake-sous-vscode_installer-l-extension-c---sous-vscode">Installer l'extension C++ sous VSCode</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c---avec-cmake-sous-vscode_installer-l-extension-cmake-sous-vscode">Installer l'extension CMake sous VSCode</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c---avec-cmake-sous-vscode_configurer-l-outil-cmake">Configurer l'outil CMake</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c---avec-cmake-sous-vscode_configurer-le-projet-c--">Configurer le projet C++</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c---avec-cmake-sous-vscode_compiler-le-projet-c--">Compiler le projet C++</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c---avec-cmake-sous-vscode_executer-le-projet-c--">Exécuter le projet C++</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c---avec-cmake-sous-vscode_cloner-un-depot-volumineux-sous-git" href="#creation-d-un-projet-c---avec-cmake-sous-vscode">Cloner un dépôt volumineux sous Git</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// Terminal</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">git clone http://github.com/large-repository --depth 1
cd large-repository
git fetch --unshallow</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c---avec-cmake-sous-vscode_installer-l-extension-wsl-sous-vscode" href="#creation-d-un-projet-c---avec-cmake-sous-vscode">Installer l'extension WSL sous VSCode</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// VSCode (Extensions)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">VSCode &gt; Extensions &gt; WSL &gt; Install</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c---avec-cmake-sous-vscode_ouvrir-un-dossier-avec-wsl-sous-vscode" href="#creation-d-un-projet-c---avec-cmake-sous-vscode">Ouvrir un dossier avec WSL sous VSCode</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// VSCode (WSL Folder)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Barre de recherche &gt; Show and Run Commands
&gt; WSL: Open Folder in WSL
Dossier &gt; v03 &gt; Sélectionner un dossier</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c---avec-cmake-sous-vscode_installer-l-extension-c---sous-vscode" href="#creation-d-un-projet-c---avec-cmake-sous-vscode">Installer l'extension C++ sous VSCode</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// VSCode (Extensions C++)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">VSCode &gt; Extensions &gt; C/C++ &gt; Install</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c---avec-cmake-sous-vscode_installer-l-extension-cmake-sous-vscode" href="#creation-d-un-projet-c---avec-cmake-sous-vscode">Installer l'extension CMake sous VSCode</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// VSCode (Extensions CMake)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">VSCode &gt; Extensions &gt; CMake &gt; Install
VSCode &gt; Extensions &gt; CMake Tools &gt; Install</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c---avec-cmake-sous-vscode_configurer-l-outil-cmake" href="#creation-d-un-projet-c---avec-cmake-sous-vscode">Configurer l'outil CMake</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// VSCode (CMakeLists.txt)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Barre de recherche &gt; Show and Run Commands 
&gt; CMake: Quick Start
Name : ReadyMario
C++ : Create a C++ project
Executable : Create an executable
OK &gt; OK</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c---avec-cmake-sous-vscode_configurer-le-projet-c--" href="#creation-d-un-projet-c---avec-cmake-sous-vscode">Configurer le projet C++</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// main.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;iostream&gt;
...
int main(int argc, char *argv[])
{
    std::cout &lt;&lt; "Démarrage de l'application..." &lt;&lt; std::endl;
    return 0;
}</pre><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt</span><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">cmake_minimum_required(VERSION 3.5.0)
project(ReadyScope VERSION 0.1.0 LANGUAGES C CXX)
...
add_executable(ReadyScope main.cpp)</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c---avec-cmake-sous-vscode_compiler-le-projet-c--" href="#creation-d-un-projet-c---avec-cmake-sous-vscode">Compiler le projet C++</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// VSCode (Build)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">CMake Tools &gt; Build &gt; Run</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c---avec-cmake-sous-vscode_executer-le-projet-c--" href="#creation-d-un-projet-c---avec-cmake-sous-vscode">Exécuter le projet C++</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// VSCode (Launch)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">CMake Tools &gt; Launch &gt; Run</pre><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br></div>
</div>
</div>
</div><br>