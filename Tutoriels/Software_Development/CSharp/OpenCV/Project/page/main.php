<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet OpenCV en C#</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet OpenCV en <b>C#</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C#</b> est un langage de programmation orientée objet destiné à développer sur la plateforme Microsoft .NET. Il est dérivé du C++ et très proche du Java dont il reprend la syntaxe générale ainsi que les concepts, y ajoutant des notions telles que la surcharge des opérateurs, les indexeurs et les délégués. Il est utilisé notamment pour développer des applications web sur la plateforme ASP.NET.<br><br><div class="Img3 GImage"><img src="/Tutoriels/CSharp/img/b_opencv_project.png" alt="/Tutoriels/CSharp/img/b_opencv_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet OpenCV en C#"><a class="Link3" href="#">Créer un projet OpenCV en C#</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C#-Introduction"><a class="Link9" href="#Créer un projet OpenCV en C#">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet OpenCV en C#.<br><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C#-Programme principal"><a class="Link9" href="#Créer un projet OpenCV en C#">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GOpenCV.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using Emgu.CV;
using Emgu.CV.CvEnum;
using Emgu.CV.Structure;  
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C#-Création d'une image"><a class="Link9" href="#Créer un projet OpenCV en C#">Création d'une image</a></h2><br><h3 class="Title8 GTitle3">GOpenCV.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run(string[] args) {
    sGApp lApp = GManager.Instance().getData().app;
    CvInvoke.NamedWindow(lApp.app_name); 
    Mat lImg = new Mat(lApp.win_height, lApp.win_width, DepthType.Cv8U, 3); 
    lImg.SetTo(lApp.win_bg_color.MCvScalar); 
    CvInvoke.PutText(lImg, "Bonjour tout le monde", new System.Drawing.Point(10, 80), 
    FontFace.HersheyComplex, 1.0, lApp.win_fg_color.MCvScalar);
    CvInvoke.Imshow(lApp.app_name, lImg);
    CvInvoke.WaitKey(0);  
    CvInvoke.DestroyAllWindows();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C#-Fichier Makefile"><a class="Link9" href="#Créer un projet OpenCV en C#">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile.csc.mak</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">GSRC = ..\code\GProject\src
GBIN = bin
GTARGET = $(GBIN)\gp_csharp.exe

GSRCS = \
    $(GSRC)\\*.cs \
    $(GSRC)\manager\\*.cs \

GLIBS =\
    /lib:bin \
    /r:Emgu.CV.World.dll \

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
	@del /q $(GBIN)\*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C#-    Variables d'environnement"><a class="Link9" href="#Créer un projet OpenCV en C#">    Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\MinGW\bin;%PATH%" 
set "PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%"
set "PATH=C:\Emgu\emgucv-windesktop 3.2.0.2682\bin\x64;%PATH%"
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C#-Résultat"><a class="Link9" href="#Créer un projet OpenCV en C#">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/CSharp/img/i_opencv_project.png" alt="/Tutoriels/CSharp/img/i_opencv_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Vision par Ordianteur OpenCV</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1607679004907"><div class="Row26">List 1 &gt; CSharp &gt; opencv</div></div><script>loadList1("Loader_1607679004907","CSharp","opencv");</script></div><br></div></div></div></div><br>