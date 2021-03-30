<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Gestion de base de données avec SQLite en C#<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la gestion de base de données avec <b>SQLite </b>en <b>C#</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>SQLite </b>est un système de gestion de base de données relationnelle accessible par le langage SQL et dont l'intégralité de la base de données (déclarations, tables, index et données) est stockée dans un fichier indépendant de la plateforme. <br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/CSharp/img/b_opencv.png" alt="/Tutoriels/Software_Development/CSharp/img/b_opencv.png"></div><br><h2 class="Title7 GTitle2" id="Introduction-Prérequis"><a class="Link9" href="#Introduction">Prérequis</a></h2><br>$\checkmark$ <a class="Link7 GLink1" style="color:lime;" href="../#Installation">Installer l'environnement C#</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement OpenCV pour C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616940191704"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616940191704");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous Microsoft.NET"><a class="Link9" href="#Installation">1.1 - Installation sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger SQLite.NET"><a class="Link9" href="#Installation">1.1.1 - Télécharger SQLite.NET</a></h2><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://system.data.sqlite.org/index.html/doc/trunk/www/downloads.wiki">https://system.data.sqlite.org/index.html/doc/trunk/www/downloads.wiki</a><br><br><b>sqlite-netFx40-setup-x64-2010-1.0.113.0.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Installer SQLite.NET"><a class="Link9" href="#Installation">1.1.2 - Installer SQLite.NET</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">sqlite-netFx40-setup-x64-2010-1.0.113.0.exe
Select Destination Location -&gt; C:\Program Files\System.Data.SQLite\2010
Next
Select Components -&gt; Full installation
Next
Select Start Menu Folder -&gt; System.Data.SQLite\2010
Next
Next
Install</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet OpenCV en C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616946812764"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616946812764");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous Microsoft.NET"><a class="Link9" href="#Tests">1.1 - Test sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Editer le programme"><a class="Link9" href="#Tests">1.1.1 - Editer le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
using System.Data.SQLite;
//===============================================
class GMain {
    //===============================================
    static void Main(string[] args) {       
        SQLiteConnection lCon = new SQLiteConnection("Data Source=config.dat");
        lCon.Open();
        SQLiteCommand lCmd = new SQLiteCommand(lCon);
        lCmd.CommandText = String.Format(@"
        select 'Bonjour tout le monde'
        ");
        SQLiteDataReader lReader = lCmd.ExecuteReader();
        lReader.Read();
        string lData = lReader[0].ToString();
        Console.Write("{0}\n", lData);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Compiler le projet"><a class="Link9" href="#Tests">1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%"
set "PATH=C:\Program Files\System.Data.SQLite\2010\bin;%PATH%"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">csc /out:rdcsharp.exe ^
/lib:"C:\Program Files\System.Data.SQLite\2010\bin" ^
/r:System.Data.SQLite.dll ^
GMain.cs</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">rdcsharp.exe
System.Data.SQLite.dll</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3"><br><span class="GColor1" style="color:lime;">Bibliothèques</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1616977297229"><div class="Row26">List 1 &gt; CSharp &gt; libs</div></div><script>loadList1("Loader_1616977297229","CSharp","libs");</script></div><br></div></div></div></div><br>