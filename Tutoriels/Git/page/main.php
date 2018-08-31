<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la gestion de version avec Git</div></a></div></div><div class="Body2 Orange"><b>Git</b> est un système de gestion de versions.<br>Le but de ce tutoriel est de vous apprendre la gestion de versions avec <b>Git</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la gestion de versions avec <span class="GColor1" style="color:lime;">Git</span><span class="GColor1" style="color:lime;"></span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- Git, comme système de gestion de versions.<br>- GitHub, comme serveur de données Git.<br>- Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger Git</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://git-scm.com/downloads">https://git-scm.com/downloads</a><br><br><h3 class="Title8 GTitle3">Accéder à GitHub</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/">https://github.com/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://notepad-plus-plus.org/">https://notepad-plus-plus.org/</a><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher le numéro de version"><a class="Link3" href="#">Afficher le numéro de version</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">afficher le numéro de version</span> avec Git.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Afficher le numéro de version</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo  off

set PATH=C:\Program Files\Git\bin;%PATH%

git --version

echo.
pause
</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Configurer le nom d'utilisateur "><a class="Link3" href="#">Configurer le nom d'utilisateur </a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">configurer le nom d'utilisateur</span> avec Git.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Configurer le nom d'utilisateur</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo  off

set PATH=C:\Program Files\Git\bin;%PATH%

git config --global user.name "Gerard KESSE"

echo.
pause</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Configurer l'email d'utilisateur"><a class="Link3" href="#">Configurer l'email d'utilisateur</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">configurer l'email  d'utilisateur</span> avec Git.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Configurer l'email d'utilisateur</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo  off

set PATH=C:\Program Files\Git\bin;%PATH%

git config --global user.email "tiakagerard@hotmail.com"

echo.
pause</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Configurer l'éditeur de texte"><a class="Link3" href="#">Configurer l'éditeur de texte</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">configurer l'éditeur de texte</span> avec Git.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Configurer l'éditeur de texte</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo  off

set PATH=C:\Program Files\Git\bin;%PATH%

git config --global core.editor ^
"'C:/Program Files (x86)/Notepad++/notepad++.exe' -multiInst -notabbar -nosession -noPlugin"

echo.
pause</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher les paramètres"><a class="Link3" href="#">Afficher les paramètres</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">afficher les paramètre</span> avec Git.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Afficher les paramètres</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo  off

set PATH=C:\Program Files\Git\bin;%PATH%

git config --list

echo.
pause</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Obtenir de l'aide"><a class="Link3" href="#">Obtenir de l'aide</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">obtenir de l'aide</span> avec Git.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Obtenir de l'aide</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo  off

set PATH=C:\Program Files\Git\bin;%PATH%

git config --help

echo.
pause
</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Initialiser un dépôt"><a class="Link3" href="#">Initialiser un dépôt</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">initialiser un dépôt</span> avec Git.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Initialiser un dépôt</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo  off

set PATH=C:\Program Files\Git\bin;%PATH%

cd ..\GDepot

git init

echo.
pause</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher l'état d'un dépôt"><a class="Link3" href="#">Afficher l'état d'un dépôt</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">afficher l'état d'un dépôt</span> avec Git.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Afficher l'état d'un dépôt</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo  off

set PATH=C:\Program Files\Git\bin;%PATH%

cd ..\GDepot

git status

echo.
pause</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ajouter des fichiers à un dépôt"><a class="Link3" href="#">Ajouter des fichiers à un dépôt</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">ajouter des fichiers à un dépôt</span> avec Git.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Ajouter des fichiers à un dépôt</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo  off

set PATH=C:\Program Files\Git\bin;%PATH%

cd ..\GDepot

git add --all

echo.
pause</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Commiter les fichiers d'un dépôt"><a class="Link3" href="#">Commiter les fichiers d'un dépôt</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">commiter les fichiers d'un dépôt</span> avec Git.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Commiter les données d'un dépôt</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo  off

set PATH=C:\Program Files\Git\bin;%PATH%

cd ..\GDepot

git commit -m "Initial Commit"

echo.
pause</xmp></pre></div></div></div></div></div><br> 