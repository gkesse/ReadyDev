<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en Batch<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>Batch</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Batch </b>est un interpréteur de commandes destiné aux systèmes d'exploitation de type Windows qui permet d'accéder aux fonctionnalités internes du système d'exploitation. Il se présente sous la forme d'une interface en ligne de commande accessible depuis la console ou un terminal. L'utilisateur lance des commandes sous forme d'une entrée texte exécutée ensuite par le batch.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Batch/img/b_batch.png" class="lazy" data-src="/Tutoriels/Software_Development/Batch/img/b_batch.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Batch.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649094292"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649094292");</script></div><br><h2 class="Title7 GTitle2" id="Installation-Installer-l-environnement-Batch-sous-Windows"><a class="Link9" href="#Installation">Installer l'environnement Batch sous Windows</a></h2><br>Aucune installation n'est nécessaire.<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Batch.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649178149"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649178149");</script></div><br><h2 class="Title7 GTitle2" id="Tests-Tester-un-projet-Batch-sous-Windows"><a class="Link9" href="#Tests">Tester un projet Batch sous Windows</a></h2><br><h3 class="Title8 GTitle3">Éditer le script (main.bat)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">@echo off
::===============================================
echo Bonjour tout le monde
::===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Exécuter le script</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">main.bat</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Bonjour tout le monde</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de Batch.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1622798020800"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1622798020800");</script></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-if"><a class="Link9" href="#Fondamentaux">Créer une condition if</a></h2><br><h3 class="Title8 GTitle3">main.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">@echo off
::===============================================
set "a=100"
set "b=20"
set "m=(%a%) est inferieur ou egal a (%b%)"
if %a% gtr %b% ( set "m=(%a%) est superieur a (%b%)" )
echo %m%
::===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">(100) est superieur a (20)</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-if-else"><a class="Link9" href="#Fondamentaux">Créer une condition if else</a></h2><br><h3 class="Title8 GTitle3">main.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">@echo off
::===============================================
set "a=10"
set "b=20"
if %a% gtr %b% ( set "m=(%a%) est superieur a (%b%)" 
) else ( set "m=(%a%) est inferieur ou egal a (%b%)" 
)
echo %m%
::===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">(10) est inferieur ou egal a (20)</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-condition-else-if"><a class="Link9" href="#Fondamentaux">Créer une condition else if</a></h2><br><h3 class="Title8 GTitle3">main.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">@echo off
::===============================================
set "a=20"
set "b=20"
if %a% gtr %b% ( set "m=(%a%) est superieur a (%b%)" 
) else ( if %a% equ %b% (set "m=(%a%) est egal a (%b%)" 
) else ( set "m=(%a%) est inferieur a (%b%)" 
))
echo %m%
::===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">(20) est egal a (20)</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-operation-arithmetique"><a class="Link9" href="#Fondamentaux">Créer une opération arithmétique</a></h2><br><h3 class="Title8 GTitle3">main.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">@echo off
::===============================================
set /a "a=22"
set /a "b=7"
::===============================================
set /a "add=%a% + %b%"
set /a "sub=%a% - %b%"
set /a "mul=%a% * %b%"
set /a "div=%a% / %b%"
set /a "mod=%a% %% %b%"
::===============================================
echo add(%a%, %b%) : %add%
echo sub(%a%, %b%) : %add%
echo mul(%a%, %b%) : %mul%
echo div(%a%, %b%) : %div%
echo mod(%a%, %b%) : %mod%
::===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">add(22, 7) : 29
sub(22, 7) : 29
mul(22, 7) : 154
div(22, 7) : 3
mod(22, 7) : 1</pre></div></div><br><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-fonction"><a class="Link9" href="#Fondamentaux">Créer une fonction</a></h2><br><h3 class="Title8 GTitle3">main.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">@echo off
::===============================================
call :SayHello
goto :eof
::===============================================
:SayHello
echo Bonjour tout le monde
goto :eof
::===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-module"><a class="Link9" href="#Fondamentaux">Créer un module</a></h2><br><br><h3 class="Title8 GTitle3">main.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">@echo off
::===============================================
call GHello :SayHello
::===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GHello.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">@echo off
::===============================================
call %*
goto :eof
::===============================================
:SayHello
echo Bonjour tout le monde
goto :eof
::===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-boucle-for"><a class="Link9" href="#Fondamentaux">Créer une boucle for</a></h2><br><h3 class="Title8 GTitle3">main.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">@echo off
::===============================================
for /l %%a in (1, 1, 9) do ( call :Run %%a )
goto :eof
::===============================================
:Run
set /a "a=%1"
set /a "b=9"
set /a "c=%a% * %b%"
echo %a% x %b% = %c%
goto :eof
::===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">1 x 9 = 9
2 x 9 = 18
3 x 9 = 27
4 x 9 = 36
5 x 9 = 45
6 x 9 = 54
7 x 9 = 63
8 x 9 = 72
9 x 9 = 81</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-boucle-goto"><a class="Link9" href="#Fondamentaux">Créer une boucle goto</a></h2><br><h3 class="Title8 GTitle3">main.bat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">@echo off
::===============================================
set /a "a=1"
::===============================================
call :Main
goto :eof
::===============================================
:Main
if %a% equ 10 ( goto :eof )
set /a "b=9"
set /a "c=%a% * %b%"
echo %a% x %b% = %c%
set /a "a=%a% + 1"
goto :Main
::===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">1 x 9 = 9
2 x 9 = 18
3 x 9 = 27
4 x 9 = 36
5 x 9 = 45
6 x 9 = 54
7 x 9 = 63
8 x 9 = 72
9 x 9 = 81</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Systeme-d-administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Le <b>système d'administration</b> que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités d'une application.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619045578000"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619045578000");</script></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-main-bat"><a class="Link9" href="#Systeme-d-administration">main.bat</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">@echo off
::===============================================
set "g_state=init"
set "g_tab=    "
::===============================================
call :Main
goto :eof
::===============================================
:Main
if "%g_state%" == "init" ( call :Init
) else ( if "%g_state%" == "method" ( call :Method
) else ( if "%g_state%" == "choice" ( call :Choice
) else ( if "%g_state%" == "sqlite" ( call :SQLite
) else ( if "%g_state%" == "opencv" ( call :OpenCV
) else ( if "%g_state%" == "quit" ( call :Quit
) else ( goto :eof
))))))
goto :Main
::===============================================
:Init
echo.
echo ADMIN !!!
echo %g_tab%-q : quitter l'application
echo.
set "g_state=method"
goto :Main
::===============================================
:Method
echo ADMIN :
echo %g_tab% 1 : SQLite
echo %g_tab% 2 : OpenCV
echo.
set "g_state=choice"
goto :Main
::===============================================
:Choice
set "lAnswer="
set /p lAnswer="ADMIN ? "
if "%lAnswer%" == "-q" ( set "g_state=end" 
) else ( if "%lAnswer%" == "1" ( set "g_state=sqlite" 
) else ( if "%lAnswer%" == "2" ( set "g_state=opencv"
)))
goto :Main
::===============================================
:SQLite
echo.
echo Execution du module SQLite
set "g_state=quit"
goto :Main
::===============================================
:OpenCV
echo.
echo Execution du module OpenCV
set "g_state=quit"
goto :Main
::===============================================
:Quit
echo.
set "lAnswer="
set /p lAnswer="QUIT ? "
if "%lAnswer%" == "-q" ( set "g_state=end" 
) else ( if "%lAnswer%" == "" ( set "g_state=init" 
) else ( if "%lAnswer%" == "n" ( set "g_state=init"
) else ( if "%lAnswer%" == "o" ( set "g_state=end"
))))
::===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Resultat"><a class="Link9" href="#Systeme-d-administration">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Batch/img/i_admin_system.gif" alt="/Tutoriels/Software_Development/Batch/img/i_admin_system.gif"></div><br></div></div></div></div><br>