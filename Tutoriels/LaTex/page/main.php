<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la composition de documents avec le LaTex</div></a></div></div><div class="Body2 Orange">            Le <b>LaTex</b> est un langage de composition de documents.<br>            Le but de ce tutoriel est de vous apprendre la composition de documents avec le <b>LaTex</b>.<br>            Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la composition de documents avec le LaTex, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>La composition de documents avec le LaTex nécessite un éditeur de texte pour l'édition de nos programmes, et un compilateur LaTex pour la compilation de nos programmes.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- MiKTeX, comme compilateur LaTex.<br>- Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger Firefox<br></h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://miktex.org/download">https://miktex.org/download</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utilisation de MiKTeX"><a class="Link3" href="#">Utilisation de MiKTeX</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">utiliser MiKTeX</span>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1530905521477"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1530905521477");</script></div><br><h2 class="Title7 GTitle2" id="Utilisation de MiKTeX-Programme principal"><a class="Link9" href="#Utilisation de MiKTeX">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.tex)<br></h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-latex">%================================================
\documentclass{article}
%================================================
\usepackage[utf8]{inputenc}
\usepackage[T1]{fontenc}
\usepackage[francais]{babel}
%================================================
\begin{document}
%================================================
\parindent=0em
\textbf{Utilisation de MiKTeX} \\ \\
%================================================
Bonjour tout le monde
%================================================
\end{document}
%================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utilisation de MiKTeX-Compilation du programme LaTex"><a class="Link9" href="#Utilisation de MiKTeX">Compilation du programme LaTex</a></h2><br><h3 class="Title8 GTitle3">Compilation du programme LaTex (cmd_latex.bat)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-sh">@echo off

set PATH=C:\Program Files\MiKTeX 2.9\miktex\bin\x64

set GSRC=..\src
set GBUILD=build

latex %GSRC%\main.tex ^
-aux-directory %GBUILD% ^
-output-directory %GBUILD%</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utilisation de MiKTeX-Création du document Pdf"><a class="Link9" href="#Utilisation de MiKTeX">Création du document Pdf</a></h2><br><h3 class="Title8 GTitle3">Création du document Pdf (cmd_pdf_create.bat)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-sh">@echo off

set PATH=C:\Program Files\MiKTeX 2.9\miktex\bin\x64

set GBUILD=build
set GPDF=pdf

dvipdfm %GBUILD%\main.dvi ^
-o %GPDF%\main.pdf</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utilisation de MiKTeX-Ouverture du document Pdf"><a class="Link9" href="#Utilisation de MiKTeX">Ouverture du document Pdf</a></h2><br><h3 class="Title8 GTitle3">Ouverture du document Pdf (cmd_pdf_open.bat)<br></h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-sh">@echo off

set PATH=C:\Program Files (x86)\Adobe\Reader 11.0\Reader

set GPDF=%cd%\pdf

AcroRd32 %GPDF%\main.pdf</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utilisation de MiKTeX-Résultat"><a class="Link9" href="#Utilisation de MiKTeX">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/MiKTeX_Utilisation.png" alt="img/MiKTeX_Utilisation.png"><br></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gérer les caractères spéciaux"><a class="Link3" href="#">Gérer les caractères spéciaux</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">gérer les caractères spéciaux</span> avec le LaTeX.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Programme spécial (main.tex)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-tex">%================================================
\documentclass{article}
%================================================
\usepackage[utf8]{inputenc}
\usepackage[T1]{fontenc}
\usepackage[francais]{babel}
%================================================
\begin{document}
%================================================
\parindent=0em
\textbf{Caractères spéciaux} \\ \\
%================================================
\$
\&
\%
\#
\_
\{
\}
\
\^
\textbackslash{}
%================================================
\end{document}
%================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/Caractere_Special.png" alt="img/Caractere_Special.png"></div></div></div></div></div><br>