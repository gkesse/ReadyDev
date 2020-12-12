<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet Qt en C#</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet Qt en <b>C#</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C#</b> est un langage de programmation orientée objet destiné à développer sur la plateforme Microsoft .NET. Il est dérivé du C++ et très proche du Java dont il reprend la syntaxe générale ainsi que les concepts, y ajoutant des notions telles que la surcharge des opérateurs, les indexeurs et les délégués. Il est utilisé notamment pour développer des applications web sur la plateforme ASP.NET.<br><br><div class="Img3 GImage"><img src="/Tutoriels/CSharp/img/b_qt_project.png" alt="/Tutoriels/CSharp/img/b_qt_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet Qt en C#"><a class="Link3" href="#">Créer un projet Qt en C#</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C#-Introduction"><a class="Link9" href="#Créer un projet Qt en C#">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet Qt en C#.<br><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C#-Programme principal"><a class="Link9" href="#Créer un projet Qt en C#">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GQt.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using QtGui;
using QtWidgets;
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C#-Création d'une fenêtre"><a class="Link9" href="#Créer un projet Qt en C#">Création d'une fenêtre</a></h2><br><h3 class="Title8 GTitle3">GQt.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public unsafe void run(string[] args) {
    sGApp lApp = GManager.Instance().getData().app;
    
    int argc = 0;
    lApp.app = new QApplication (ref argc, null);        
    
    QLabel lLabel = new QLabel();
    lLabel.Text = "Bonjour tout le monde";
    lLabel.Alignment = AlignmentFlag.AlignCenter;
    
    QVBoxLayout lMainLayout = new QVBoxLayout();
    lMainLayout.AddWidget(lLabel);

    QWidget lWindow = new QWidget();
    lWindow.Layout = lMainLayout;
    lWindow.Resize(lApp.win_width, lApp.win_height);
    lWindow.WindowTitle = lApp.app_name;
    lWindow.Show();
    
    QApplication.Exec();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C#-Fichier Makefile"><a class="Link9" href="#Créer un projet Qt en C#">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile.csc.mak</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">GSRC = ..\code\GProject\src
GBIN = bin
GTARGET = $(GBIN)\gp_csharp.exe

GSRCS = \
    $(GSRC)\\*.cs \
    $(GSRC)\manager\\*.cs \

GLIBS =\
    /lib:bin \
    /r:QtWidgets.Sharp.dll \
    /r:QtGui.Sharp.dll \
    /r:QtCore.Sharp.dll \

GCFLAGS =\
    -unsafe \
    
all: clean compile run

compile:
	@if not exist $(GBIN) @mkdir $(GBIN)
	@csc $(GCFLAGS) $(GLIBS) /out:$(GTARGET) $(GSRCS)
run: 
	@$(GTARGET) $(argv)
clean: 
	@if not exist $(GBIN) @mkdir $(GBIN)
	@del /q $(GBIN)\*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C#-    Variables d'environnement"><a class="Link9" href="#Créer un projet Qt en C#">    Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">@echo off
::===============================================
set "PATH=C:\MinGW\bin;%PATH%" 
set "PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%"
set "PATH=C:\Users\Admin\Downloads\QtSharp-0.7.6-Qt-5.12.4-MinGW;%PATH%"
set "PATH=C:\Qt\5.15.0\mingw81_64\bin;%PATH%"
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C#-Résultat"><a class="Link9" href="#Créer un projet Qt en C#">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/CSharp/img/i_qt_project.png" alt="/Tutoriels/CSharp/img/i_qt_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; CSharp &gt; basics</div></div><script>loadList1("Loader_1600429735365","CSharp","basics");</script></div><br></div></div></div></div><br>