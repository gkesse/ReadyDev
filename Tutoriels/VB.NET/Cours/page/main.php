<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation avec le VB.NET</div></a></div></div><div class="Body2 Orange">Le <b>VB.NET</b> est un langage de programmation orientée objet.<br>Le but de ce tutoriel est de vous apprendre la programmation avec le <b>VB.NET</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la programmation avec le VB.NET, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>La programmation avec le VB.NET nécessite un éditeur de texte pour l'édition de nos programmes et un compilateur pour la compilation de nos programmes.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- MinGW, comme outil de construction automatique.<br>- Vbc, comme compilateur.<br>- Notepad++, comme éditeur de texte.<br><br>Le compilateur Vbc est par défaut disponible sous Windows.<br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.mingw.org/">http://www.mingw.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utilisation du compilateur Vbc"><a class="Link3" href="#">Utilisation du compilateur Vbc</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">utiliser le compilateur Vbc</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Programme principale (GMain.vb)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-vb">'================================================'
Module GModule
    Sub Main()
        Dim CR As String = Environment.newLine
        Console.Write("### Utilisation de Vbc" + CR + CR)
        Console.Write("Bonjour tout le monde" + CR)
    End Sub
End Module
'================================================'</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier de construction automatique (Makefile)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-sh">GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\GProject.exe

GSRCS = \
    $(GSRC)\GMain.vb

all:
	vbc /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GTARGET)</xmp></pre></div>	<br><h3 class="Title8 GTitle3">Compilation du projet (cmd_compile.bat)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-sh">@echo off

set PATH=C:\MinGW\bin
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%

mingw32-make</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/Vbc_Utilisation.png" alt="img/Vbc_Utilisation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Communiquer avec la console"><a class="Link3" href="#">Communiquer avec la console</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">communiquer avec la console</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Programme principale (GMain.vb)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums lang-vb">'================================================'
Module GModule
    Sub Main()
        Dim CR As String = Environment.newLine
        Console.Write("### Console" + CR + CR)
        Console.Write("Bonjour tout le monde" + CR)
    End Sub
End Module
'================================================'</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><div class="Img3"><img src="img/Console.png" alt="img/Console.png"></div></div></div></div></div></div><br><br>