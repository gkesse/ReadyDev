<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Vision par Ordinateur avec OpenCV en C#<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la vision par ordinateur avec <b>OpenCV </b>en <b>C#</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>OpenCV </b>est une bibliothèque de vision par ordinateur spécialisée dans le traitement d'images vidéo en temps réel.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/CSharp/img/b_opencv.png" alt="/Tutoriels/Software_Development/CSharp/img/b_opencv.png"></div><br><h2 class="Title7 GTitle2" id="Introduction-Prérequis"><a class="Link9" href="#Introduction">Prérequis</a></h2><br>$\checkmark$ <a class="Link7 GLink1" style="color:lime;" href="../#Installation">Installer l'environnement C#</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement OpenCV pour C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616940191704"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616940191704");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous Microsoft.NET"><a class="Link9" href="#Installation">1.1 - Installation sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger EmguCV"><a class="Link9" href="#Installation">1.1.1 - Télécharger EmguCV</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/emgucv/files/emgucv/">https://sourceforge.net/projects/emgucv/files/emgucv/</a><br><br><b>libemgucv-windesktop-3.2.0.2682.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Installer EmguCV"><a class="Link9" href="#Installation">1.1.2 - Installer EmguCV</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">libemgucv-windesktop-3.2.0.2682.exe
Suivant
J'accepte
Dossier d'installation -&gt; C:\Emgu\emgucv-windesktop 3.2.0.2682
Suivant
Dossier dans le menu Démarrer -&gt; emgucv-windesktop 3.2.0.2682
Suivant
Installer
Fermer</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet OpenCV en C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616946812764"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616946812764");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous Microsoft.NET"><a class="Link9" href="#Tests">1.1 - Test sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Editer le programme"><a class="Link9" href="#Tests">1.1.1 - Editer le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using Emgu.CV;
using Emgu.CV.CvEnum;
using Emgu.CV.Structure; 
//===============================================
class GMain {
    //===============================================
    static void Main(string[] args) {
        CvInvoke.NamedWindow("ReadyApp"); 
        Mat lImg = new Mat(250, 500, DepthType.Cv8U, 3); 
        lImg.SetTo(new Bgr(0x10, 0x10, 0x30).MCvScalar); 
        CvInvoke.PutText(lImg, "Bonjour tout le monde", new System.Drawing.Point(10, 80), 
        FontFace.HersheyComplex, 0.8, new Bgr(0xFF, 0xFF, 0xFF).MCvScalar);
        CvInvoke.Imshow("ReadyApp", lImg);
        CvInvoke.WaitKey(0);  
        CvInvoke.DestroyAllWindows();
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Compiler le projet"><a class="Link9" href="#Tests">1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%"
</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">csc /out:rdcsharp.exe ^
/lib:"C:\Emgu\emgucv-windesktop 3.2.0.2682\bin" ^
/r:Emgu.CV.World.dll ^
GMain.cs</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Emgu\emgucv-windesktop 3.2.0.2682\bin\x64;%PATH%"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">./rdcsharp.exe
./Emgu.CV.World.dll</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/CSharp/img/i_opencv_test.png" alt="/Tutoriels/Software_Development/CSharp/img/i_opencv_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3"><br><span class="GColor1" style="color:lime;">Bibliothèques</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1616977297229"><div class="Row26">List 1 &gt; CSharp &gt; libs</div></div><script>loadList1("Loader_1616977297229","CSharp","libs");</script></div><br></div></div></div></div><br>