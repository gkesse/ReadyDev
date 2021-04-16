<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Création d'interfaces homme-machine avec Qt en C#<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la création d'interfaces homme-machine avec <b>Qt </b>en <b>C#</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Qt </b>est une bibliothèque de composants d'interfaces graphiques (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc, et doté d'un mécanisme de notifications par des signaux et slots.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/CSharp/img/b_qt.png" alt="/Tutoriels/Software_Development/CSharp/img/b_qt.png"></div><br><h2 class="Title7 GTitle2" id="Introduction-Prérequis"><a class="Link9" href="#Introduction">Prérequis</a></h2><br>$\checkmark$ <a class="Link7 GLink1" style="color:lime;" href="../#Installation">Installer l'environnement C#</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Qt pour C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616940191704"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616940191704");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous Microsoft.NET"><a class="Link9" href="#Installation">1.1 - Installation sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger QtSharp"><a class="Link9" href="#Installation">1.1.1 - Télécharger QtSharp</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://gitlab.com/ddobrev/QtSharp/-/releases">https://gitlab.com/ddobrev/QtSharp/-/releases</a><br><br><b>QtSharp-0.7.6-Qt-5.12.4-MinGW.zip</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Installer QtSharp"><a class="Link9" href="#Installation">1.1.2 - Installer QtSharp</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">Extraire -&gt; QtSharp-0.7.6-Qt-5.12.4-MinGW.zip</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Qt en C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616946812764"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616946812764");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous Microsoft.NET"><a class="Link9" href="#Tests">1.1 - Test sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Editer le programme"><a class="Link9" href="#Tests">1.1.1 - Editer le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using QtGui;
using QtWidgets;
using QtCore.Qt;
//===============================================
class GMain {
    //===============================================
    unsafe static void Main(string[] args) {       
        int argc = 0;
        QApplication lApp = new QApplication (ref argc, null);       
        
        QLabel lLabel = new QLabel();
        lLabel.Text = "Bonjour tout le monde";
        lLabel.Alignment = AlignmentFlag.AlignCenter;
        
        QVBoxLayout lMainLayout = new QVBoxLayout();
        lMainLayout.AddWidget(lLabel);

        QWidget lWindow = new QWidget();
        lWindow.Layout = lMainLayout;
        lWindow.Resize(500, 250);
        lWindow.WindowTitle = "ReadyApp";
        lWindow.Show();
        
        QApplication.Exec();
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Compiler le projet"><a class="Link9" href="#Tests">1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%"
set "PATH=C:\Users\Admin\Downloads\Compressed\QtSharp-0.7.6-Qt-5.12.4-MinGW;%PATH%"
set "PATH=C:\Qt\5.15.0\mingw81_64\bin;%PATH%" </xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">csc /unsafe /out:rdcsharp.exe ^
/lib:"C:\Users\Admin\Downloads\Compressed\QtSharp-0.7.6-Qt-5.12.4-MinGW" ^
/r:QtWidgets.Sharp.dll ^
/r:QtGui.Sharp.dll ^
/r:QtCore.Sharp.dll ^
GMain.cs</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">rdcsharp.exe
QtWidgets.Sharp.dll
QtGui.Sharp.dll
QtCore.Sharp.dll</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/CSharp/img/i_qt_test.png" alt="/Tutoriels/Software_Development/CSharp/img/i_qt_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3"><br><span class="GColor1" style="color:lime;">Bibliothèques</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1616977297229"><div class="Row26">List 1 &gt; CSharp &gt; libs</div></div><script>loadList1("Loader_1616977297229","CSharp","libs");</script></div><br></div></div></div></div><br>