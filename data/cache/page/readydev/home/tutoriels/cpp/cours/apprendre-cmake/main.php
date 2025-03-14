<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/cours/apprendre-cmake">CMake</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre CMake</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Bienvenue dans ce tutoriel consacré à l'apprentissage des technologies liées au développement d'applications en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#travailler-avec-cmake">### Travailler avec CMake</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#definir-un-symbole-de-preprocesseur-sous-cmake">Définir un symbole de préprocesseur sous CMake</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#configurer-un-fichier-d-entete-precompile-sous-cmake">Configurer un fichier d'entête précompilé sous CMake</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#configurer-les-sources-d-un-module-sous-cmake">Configurer les sources d'un module sous CMake</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#ajouter-le-repertoire-de-build-cmake-au-headers-sous-cmake">Ajouter le répertoire de build CMake au headers sous CMake</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#travailler-avec-qt">### Travailler avec Qt</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#configurer-un-projet-qt-sous-cmake">Configurer un projet Qt sous CMake</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#configurer-une-ressource-qt-sous-cmake">Configurer une ressource Qt sous CMake</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#configurer-une-interface-utilisateur-qt-sous-cmake">Configurer une interface utilisateur Qt sous CMake</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#suite">### Suite</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>C++</b> est un langage de programmation orientée objet. Il offre la possibilité d'avoir le contrôle total sur la gestion de la mémoire.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="travailler-avec-cmake">### Travailler avec CMake</a>
</h1>
<div class="Section6"><br><b>CMake</b> est un outil de construction prenant en charge la construction de projet C++.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="definir-un-symbole-de-preprocesseur-sous-cmake">Définir un symbole de préprocesseur sous CMake</a>
</h1>
<div class="Section6"><br>Un <b>symbole de préprocesseur</b> est utilisé par le préprocesseur pour déterminer les portions de codes à exécuter en fonction des options de compilation. Il est défini avec l'instruction (<b>add_definitions</b>).<br><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt (Définir un symbole de préprocesseur)</span><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
cmake_minimum_required(VERSION 3.10.0)
project(rdvcpp VERSION 0.1.0 LANGUAGES C CXX)
add_definitions(-DDEBUG_ON)
add_executable(rdvcpp main.cpp)
...</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="configurer-un-fichier-d-entete-precompile-sous-cmake">Configurer un fichier d'entête précompilé sous CMake</a>
</h1>
<div class="Section6"><br>Un <b>fichier d'en-tête précompilé</b> est un gestionnaire de fichiers d'en-tête stables. Il permet de rassembler tous les fichiers d'en-tête stables dans un seul fichier précompilé afin d'accélérer le processus de compilation du projet. Il est recommandé d'inclure tous les fichiers d'en-tête des librairies standards dans le fichier d'en-tête précompilé.<br><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt (Configurer un fichier d'entête précompilé)</span><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
cmake_minimum_required(VERSION 3.10.0)
project(rdvcpp VERSION 0.1.0 LANGUAGES C CXX)
set(CMAKE_PCH_INSTANTIATE_TEMPLATES ON)
add_executable(rdvcpp main.cpp)
target_precompile_headers(rdvcpp PRIVATE rdv_pch.h)
...</pre><br><span class="GText2" style="
color: #00ff00;
">// Notes.txt (Configurer un fichier d'entête précompilé)</span><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
# Cela génère le fichier (.obj) &gt; build\[nom-projet].dir\Debug\cmake_pch.obj
# Cela génère le fichier (.pch) &gt; build\[nom-projet].dir\Debug\cmake_pch.pch
...</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="configurer-les-sources-d-un-module-sous-cmake">Configurer les sources d'un module sous CMake</a>
</h1>
<div class="Section6"><br>Un <b>module</b> est un concept de la programmation modulaire et réutilisable. Il permet de rassembler dans un fichier séparé un ensemble des fonctionnalités réutilisable.<br><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt (Configurer les sources d'un module)</span><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
cmake_minimum_required(VERSION 3.10.0)
project(rdvcpp VERSION 0.1.0 LANGUAGES C CXX)
add_executable(rdvcpp
    main.cpp
    rdv_hello.cpp
)
...</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="ajouter-le-repertoire-de-build-cmake-au-headers-sous-cmake">Ajouter le répertoire de build CMake au headers sous CMake</a>
</h1>
<div class="Section6"><br>Lors de la construction de certains projets C++, des fichiers headers sont générés automatiquement dans le <b>répertoire de build CMake</b> et sont inclus dans les fichiers sources du projet. Pour pouvoir les indexés, il est nécessaire de rajouter le répertoire de build CMake aux chemins de recherche des fichiers headers.<br><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt (Ajouter le répertoire de build CMake au headers)</span><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
set(CMAKE_INCLUDE_CURRENT_DIR ON)
...</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="travailler-avec-qt">### Travailler avec Qt</a>
</h1>
<div class="Section6"><br><b>Qt</b> est un gestionnaire d'interfaces homme-machine supporté par CMake. Il permet de créer des interfaces homme-machine multiplateformes bureau ou mobile sans changer la base de code.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="configurer-un-projet-qt-sous-cmake">Configurer un projet Qt sous CMake</a>
</h1>
<div class="Section6"><br>La <b>configuration de Qt</b> sous CMake consiste à autoriser la traduction des fichiers ressources (.qrc) avec l'outil (RCC), à autoriser la traduction du mécanisme des connexions (Signal/Slot) avec l'outil (MOC), à autoriser la traduction des fichiers d'interface utilisateur (.ui) avec l'outil (UIC) et à configurer l'édition des liens des modules Qt utilisés par le projet.<br><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt (Configurer un projet Qt)</span><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
cmake_minimum_required(VERSION 3.10.0)
project(rdvcpp VERSION 0.1.0 LANGUAGES C CXX)

set(CMAKE_AUTORCC ON)
set(CMAKE_AUTOMOC ON)
set(CMAKE_AUTOUIC ON)
set(CMAKE_INCLUDE_CURRENT_DIR ON)

set(CMAKE_PREFIX_PATH "C:/Qt/6.5.2/msvc2019_64/lib/cmake")

find_package(Qt6 REQUIRED COMPONENTS
    Widgets
)

add_executable(rdvcpp main.cpp)

target_link_libraries (rdvcpp
    Qt6::Widgets
)
...</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="configurer-une-ressource-qt-sous-cmake">Configurer une ressource Qt sous CMake</a>
</h1>
<div class="Section6"><br>CMake permet de configurer une <b>ressource Qt</b>.<br><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt (Configurer une ressource Qt)</span><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
add_executable(rdvcpp
    main.cpp
    resources.qrc
)
...</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="configurer-une-interface-utilisateur-qt-sous-cmake">Configurer une interface utilisateur Qt sous CMake</a>
</h1>
<div class="Section6"><br>CMake permet de configurer une <b>interface utilisateur Qt</b>.
<br><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt (Configurer une interface utilisateur Qt)</span><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
qt_wrap_ui(UI_FILES
    cMainWindow.ui
)

add_executable(rdvcpp
    main.cpp
    cMainWindow.cpp
    resources.qrc
    ${UI_FILES}
)
...</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="suite">### Suite</a>
</h1>
<div class="Section6"><br><div class="GLink1 Link1">
<i class="Link2 fa fa-arrow-circle-left"></i>
<a class="Link3" href="#">Précédent</a>
</div><div class="GLink1 Link1">
<i class="Link2 fa fa-arrow-circle-right"></i>
<a class="Link3" href="#">Suivant</a>
</div><br></div>
</div>
</div>
</div><br>