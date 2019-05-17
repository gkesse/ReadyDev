<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre à compiler un projet C# avec CSC</div></a></div></div><div class="Body2 Orange">Le <b>C#</b> est un langage de programmation orientée objet.<br><b>CSC </b>est un outil de compilation de projet <b>C#</b> fourni par <b>Visual Studio</b>.<br>Le but de ce tutoriel est de vous apprendre à compiler un projet <b>C#</b> avec <b>CSC</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre à compiler un projet <span class="GColor1" style="color:lime;">C#</span> avec <span class="GColor1" style="color:lime;">CSC</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- CSC, comme compilateur.<br>- NMake, comme compilateur automatisé.<br>- Visual Studio, comme environnement de développement intégré.<br>- Microsoft SDKs, comme kit de développement.<br>- Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Installer Visual Studio</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://visualstudio.microsoft.com/fr/downloads/">https://visualstudio.microsoft.com/fr/downloads/</a><br><br><h3 class="Title8 GTitle3">Installer Microsoft SDKs</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://developer.microsoft.com/fr-fr/windows/downloads/windows-10-sdk">https://developer.microsoft.com/fr-fr/windows/downloads/windows-10-sdk</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler un fichier source"><a class="Link3" href="#">Compiler un fichier source</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Compiler un fichier source </span>avec CSC.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1555384753311"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1555384753311");</script></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Programme de Test"><a class="Link9" href="#Compiler un fichier source">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    static void Main(string[] args) {
        Console.WriteLine("Bonjour tout le monde");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Fichier Makefile"><a class="Link9" href="#Compiler un fichier source">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\GProject.exe

GSRCS =\
    $(GSRC)\*.cs

all:
	csc /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Compiler le projet"><a class="Link9" href="#Compiler un fichier source">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Community\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%

nmake</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Exécuter le projet"><a class="Link9" href="#Compiler un fichier source">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

echo.
bin\GProject.exe
echo.

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Résultat"><a class="Link9" href="#Compiler un fichier source">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Unique.png" alt="img/Fichier_Unique.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler plusieurs fichiers sources"><a class="Link3" href="#">Compiler plusieurs fichiers sources</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Compiler plusieurs fichiers sources </span>avec CSC.<br>Produit par <b>Gérard KESSE</b><br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1555386365596"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1555386365596");</script></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Programme de Test"><a class="Link9" href="#Compiler plusieurs fichiers sources">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    static void Main(string[] args) {
        double a = 22;
        double b = 7;
        double lData;
        
        lData = GMath.Instance().Add(a, b);
        GShow.Instance().Show(lData, "Add(22, 7)");
        lData = GMath.Instance().Sub(a, b);
        GShow.Instance().Show(lData, "Sub(22, 7)");
        lData = GMath.Instance().Mul(a, b);
        GShow.Instance().Show(lData, "Mul(22, 7)");
        lData = GMath.Instance().Div(a, b);
        GShow.Instance().Show(lData, "Div(22, 7)");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Programme sécondaire"><a class="Link9" href="#Compiler plusieurs fichiers sources">Programme sécondaire</a></h2><br><h3 class="Title8 GTitle3">Gestionnaire d'opérations mathématiques (GMath.cs)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
public class GMath {
    //===============================================
    private static GMath m_instance = null;
    //===============================================
    private GMath() {
        
    }
    //===============================================
    public static GMath Instance() {
        if(m_instance == null) {
            m_instance = new GMath();
        }
        return m_instance;
    }
    //===============================================
    public double Add(double a, double b) {
        double lData = a + b;
        return lData;
    }
    //===============================================
    public double Sub(double a, double b) {
        double lData = a - b;
        return lData;
    }
    //===============================================
    public double Mul(double a, double b) {
        double lData = a * b;
        return lData;
    }
    //===============================================
    public double Div(double a, double b) {
        double lData = a / b;
        return lData;
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Gestionnaire d'affichage (GShow.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
public class GShow {
    //===============================================
    private static GShow m_instance = null;
    //===============================================
    private GShow() {
        
    }
    //===============================================
    public static GShow Instance() {
        if(m_instance == null) {
            m_instance = new GShow();
        }
        return m_instance;
    }
    //===============================================
    public void Show(string data, string name = "") {
        string lFormat = "";
        if(name != "") lFormat += name + " : ";
        lFormat += data;
        Console.WriteLine(lFormat);
    }
    //===============================================
    public void Show(int data, string name = "") {
        string lFormat = Convert.ToString(data);
        Show(lFormat, name);
    }
    //===============================================
    public void Show(double data, string name = "") {
        string lFormat = Convert.ToString(data);
        Show(lFormat, name);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Fichier Makefile"><a class="Link9" href="#Compiler plusieurs fichiers sources">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\GProject.exe

GSRCS =\
    $(GSRC)\*.cs \
    $(GSRC)\manager\*.cs

all:
	csc /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Compiler le projet"><a class="Link9" href="#Compiler plusieurs fichiers sources">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Community\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%

nmake</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Exécuter le projet"><a class="Link9" href="#Compiler plusieurs fichiers sources">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

echo.
bin\GProject.exe
echo.

pause
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Résultat"><a class="Link9" href="#Compiler plusieurs fichiers sources">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Multiple.png" alt="img/Fichier_Multiple.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un module"><a class="Link3" href="#">Créer un module</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Créer un module </span>avec CSC.<br>Produit par <b>Gérard KESSE</b><br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1556888627622"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1556888627622");</script></div><br><h2 class="Title7 GTitle2" id="Créer un module-Module"><a class="Link9" href="#Créer un module">Module</a></h2><br><h3 class="Title8 GTitle3">Module d'opérations mathématiques (GMath.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
public class GMath {
    //===============================================
    private static GMath m_instance = null;
    //===============================================
    private GMath() {
        
    }
    //===============================================
    public static GMath Instance() {
        if(m_instance == null) {
            m_instance = new GMath();
        }
        return m_instance;
    }
    //===============================================
    public double Add(double a, double b) {
        double lData = a + b;
        return lData;
    }
    //===============================================
    public double Sub(double a, double b) {
        double lData = a - b;
        return lData;
    }
    //===============================================
    public double Mul(double a, double b) {
        double lData = a * b;
        return lData;
    }
    //===============================================
    public double Div(double a, double b) {
        double lData = a / b;
        return lData;
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Module d'affichage (GShow.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
public class GShow {
    //===============================================
    private static GShow m_instance = null;
    //===============================================
    private GShow() {
        
    }
    //===============================================
    public static GShow Instance() {
        if(m_instance == null) {
            m_instance = new GShow();
        }
        return m_instance;
    }
    //===============================================
    public void Show(string data, string name = "") {
        string lFormat = "";
        if(name != "") lFormat += name + " : ";
        lFormat += data;
        Console.WriteLine(lFormat);
    }
    //===============================================
    public void Show(int data, string name = "") {
        string lFormat = Convert.ToString(data);
        Show(lFormat, name);
    }
    //===============================================
    public void Show(double data, string name = "") {
        string lFormat = Convert.ToString(data);
        Show(lFormat, name);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un module-Fichier Makefile"><a class="Link9" href="#Créer un module">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\Hello.dll

GSRCS =\
    $(GSRC)\manager\*.cs

all:
	csc /t:module /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.dll</xmp></pre></div>	<br><h2 class="Title7 GTitle2" id="Créer un module-Compiler le projet"><a class="Link9" href="#Créer un module">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Community\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%

nmake</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un module-Résultat"><a class="Link9" href="#Créer un module">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Module_Creation.png" alt="img/Module_Creation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser un module"><a class="Link3" href="#">Utiliser un module</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Utiliser un module </span>avec CSC.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1556917563862"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1556917563862");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser un module-Programme de Test"><a class="Link9" href="#Utiliser un module">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    static void Main(string[] args) {
        double a = 22;
        double b = 7;
        double lData;
        
        lData = GMath.Instance().Add(a, b);
        GShow.Instance().Show(lData, "Add(22, 7)");
        lData = GMath.Instance().Sub(a, b);
        GShow.Instance().Show(lData, "Sub(22, 7)");
        lData = GMath.Instance().Mul(a, b);
        GShow.Instance().Show(lData, "Mul(22, 7)");
        lData = GMath.Instance().Div(a, b);
        GShow.Instance().Show(lData, "Div(22, 7)");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un module-Fichier Makefile"><a class="Link9" href="#Utiliser un module">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\GProject.exe

GLIBS =\
    /lib:lib\Hello\bin \
    /addmodule:Hello.dll

GSRCS =\
    $(GSRC)\*.cs

all:
	csc $(GLIBS) /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.exe</xmp></pre></div>	<br><h2 class="Title7 GTitle2" id="Utiliser un module-Compiler le projet"><a class="Link9" href="#Utiliser un module">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Community\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%

nmake</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un module-Exécuter le projet"><a class="Link9" href="#Utiliser un module">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

echo.
bin\GProject.exe
echo.

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un module-Résultat"><a class="Link9" href="#Utiliser un module">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Module_Utilisation.png" alt="img/Module_Utilisation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une librairie"><a class="Link3" href="#">Créer une librairie</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Créer une librairie </span>avec CSC.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1556964060166"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1556964060166");</script></div><br><h2 class="Title7 GTitle2" id="Créer une librairie-Librairie"><a class="Link9" href="#Créer une librairie">Librairie</a></h2><br><h3 class="Title8 GTitle3">Librairie d'opérations mathématiques (GMath.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
public class GMath {
    //===============================================
    private static GMath m_instance = null;
    //===============================================
    private GMath() {
        
    }
    //===============================================
    public static GMath Instance() {
        if(m_instance == null) {
            m_instance = new GMath();
        }
        return m_instance;
    }
    //===============================================
    public double Add(double a, double b) {
        double lData = a + b;
        return lData;
    }
    //===============================================
    public double Sub(double a, double b) {
        double lData = a - b;
        return lData;
    }
    //===============================================
    public double Mul(double a, double b) {
        double lData = a * b;
        return lData;
    }
    //===============================================
    public double Div(double a, double b) {
        double lData = a / b;
        return lData;
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Module d'affichage (GShow.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
public class GShow {
    //===============================================
    private static GShow m_instance = null;
    //===============================================
    private GShow() {
        
    }
    //===============================================
    public static GShow Instance() {
        if(m_instance == null) {
            m_instance = new GShow();
        }
        return m_instance;
    }
    //===============================================
    public void Show(string data, string name = "") {
        string lFormat = "";
        if(name != "") lFormat += name + " : ";
        lFormat += data;
        Console.WriteLine(lFormat);
    }
    //===============================================
    public void Show(int data, string name = "") {
        string lFormat = Convert.ToString(data);
        Show(lFormat, name);
    }
    //===============================================
    public void Show(double data, string name = "") {
        string lFormat = Convert.ToString(data);
        Show(lFormat, name);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie-Fichier Makefile"><a class="Link9" href="#Créer une librairie">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\Hello.dll

GSRCS =\
    $(GSRC)\manager\*.cs

all:
	csc /t:library /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.dll</xmp></pre></div>	<br><h2 class="Title7 GTitle2" id="Créer une librairie-Compiler le projet"><a class="Link9" href="#Créer une librairie">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Community\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%

nmake</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie-Résultat"><a class="Link9" href="#Créer une librairie">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_Creation.png" alt="img/Librairie_Creation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser une librairie"><a class="Link3" href="#">Utiliser une librairie</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Utiliser une librairie </span>avec CSC.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1556997432735"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1556997432735");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie-Programme de Test"><a class="Link9" href="#Utiliser une librairie">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    static void Main(string[] args) {
        double a = 22;
        double b = 7;
        double lData;
        
        lData = GMath.Instance().Add(a, b);
        GShow.Instance().Show(lData, "Add(22, 7)");
        lData = GMath.Instance().Sub(a, b);
        GShow.Instance().Show(lData, "Sub(22, 7)");
        lData = GMath.Instance().Mul(a, b);
        GShow.Instance().Show(lData, "Mul(22, 7)");
        lData = GMath.Instance().Div(a, b);
        GShow.Instance().Show(lData, "Div(22, 7)");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie-Fichier Makefile"><a class="Link9" href="#Utiliser une librairie">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\GProject.exe

GLIBS =\
    /lib:lib\Hello\bin \
    /r:Hello.dll

GSRCS =\
    $(GSRC)\*.cs

all:
	csc $(GLIBS) /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.exe</xmp></pre></div>	<br><h2 class="Title7 GTitle2" id="Utiliser une librairie-Compiler le projet"><a class="Link9" href="#Utiliser une librairie">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Community\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%

nmake</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie-Exécuter le projet"><a class="Link9" href="#Utiliser une librairie">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

echo.
bin\GProject.exe
echo.

pause
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie-Résultat"><a class="Link9" href="#Utiliser une librairie">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_Utilisation.png" alt="img/Librairie_Utilisation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un assembly privé"><a class="Link3" href="#">Créer un assembly privé</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Créer un assembly privé</span> avec CSC.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1557949458161"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1557949458161");</script></div><br><h2 class="Title7 GTitle2" id="Créer un assembly privé-Fichier Makefile"><a class="Link9" href="#Créer un assembly privé">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GBIN = bin
GTARGET = $(GBIN)\HelloAssembly.dll

GLIBS =\
    lib\Hello\bin\Hello.dll

assembly:
	al /t:library /out:$(GTARGET) $(GLIBS) 
clean:
	del /q $(GBIN)\*.dll</xmp></pre></div><br>	<h2 class="Title7 GTitle2" id="Créer un assembly privé-Créer l'assembly privé"><a class="Link9" href="#Créer un assembly privé">Créer l'assembly privé</a></h2><br><h3 class="Title8 GTitle3">Créer l'assembly privé</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Professional\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Program Files (x86)\Microsoft SDKs\Windows\v10.0A\bin\NETFX 4.6.1 Tools;%PATH%

nmake assembly</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un assembly privé-Résultat"><a class="Link9" href="#Créer un assembly privé">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Assembly_Prive_Creation.png" alt="img/Assembly_Prive_Creation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser un assembly privé"><a class="Link3" href="#">Utiliser un assembly privé</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Utiliser un assembly privé </span>avec CSC.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1558083230100"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1558083230100");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser un assembly privé-Programme de Test"><a class="Link9" href="#Utiliser un assembly privé">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    static void Main(string[] args) {
        double a = 22;
        double b = 7;
        double lData;
        
        lData = GMath.Instance().Add(a, b);
        GShow.Instance().Show(lData, "Add(22, 7)");
        lData = GMath.Instance().Sub(a, b);
        GShow.Instance().Show(lData, "Sub(22, 7)");
        lData = GMath.Instance().Mul(a, b);
        GShow.Instance().Show(lData, "Mul(22, 7)");
        lData = GMath.Instance().Div(a, b);
        GShow.Instance().Show(lData, "Div(22, 7)");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un assembly privé-Fichier Makefile"><a class="Link9" href="#Utiliser un assembly privé">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\GProject.exe

GLIBS =\
    /lib:lib\Hello\bin \
    /r:HelloAssembly.dll

GSRCS=\
    $(GSRC)\*.cs

all:
	csc $(GLIBS) /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.exe</xmp></pre></div>	<br><h2 class="Title7 GTitle2" id="Utiliser un assembly privé-Compiler le projet"><a class="Link9" href="#Utiliser un assembly privé">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Professional\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%

nmake</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un assembly privé-Exécuter le projet"><a class="Link9" href="#Utiliser un assembly privé">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

echo.
bin\GProject.exe
echo.

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un assembly privé-Résultat"><a class="Link9" href="#Utiliser un assembly privé">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Assembly_Prive_Utilisation.png" alt="img/Assembly_Prive_Utilisation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Générer une pair de clé publique"><a class="Link3" href="#">Générer une pair de clé publique</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Générer une pair de clé publique</span> avec CSC.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1558037475312"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1558037475312");</script></div><br><h2 class="Title7 GTitle2" id="Générer une pair de clé publique-Fichier Makefile"><a class="Link9" href="#Générer une pair de clé publique">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GBIN = bin
GTARGET = $(GBIN)\HelloKey.snk

key:
	sn -k $(GTARGET)
clean:
	del /q $(GBIN)\*.snk</xmp></pre></div>	<br><h2 class="Title7 GTitle2" id="Générer une pair de clé publique-Générer la pair de clé publique"><a class="Link9" href="#Générer une pair de clé publique">Générer la pair de clé publique</a></h2><br><h3 class="Title8 GTitle3">Générer la pair de clé publique</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Professional\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Program Files (x86)\Microsoft SDKs\Windows\v10.0A\bin\NETFX 4.6.1 Tools;%PATH%

nmake key</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Générer une pair de clé publique-Résultat"><a class="Link9" href="#Générer une pair de clé publique">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Assembly_Key_Creation.png" alt="img/Assembly_Key_Creation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un assembly global"><a class="Link3" href="#">Créer un assembly global</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Créer un assembly global </span>avec CSC.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1558033354250"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1558033354250");</script></div><br><h2 class="Title7 GTitle2" id="Créer un assembly global-Fichier Makefile"><a class="Link9" href="#Créer un assembly global">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GBIN = bin
GTARGET = $(GBIN)\HelloGlobalAssembly.dll

GKEYS =\
    /keyfile:lib\Hello\key\HelloKey.snk \
    /v:1.0.0.0
    
GLIBS =\
    lib\Hello\bin\Hello.dll

assembly:
	al $(GKEYS) /t:library /out:$(GTARGET) $(GLIBS) 
clean:
	del /q $(GBIN)\*.dll</xmp></pre></div>	<br><h2 class="Title7 GTitle2" id="Créer un assembly global-Créer l'assembly global"><a class="Link9" href="#Créer un assembly global">Créer l'assembly global</a></h2><br><h3 class="Title8 GTitle3">Créer l'assembly global</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Professional\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Program Files (x86)\Microsoft SDKs\Windows\v10.0A\bin\NETFX 4.6.1 Tools;%PATH%

nmake assembly</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un assembly global-Résultat"><a class="Link9" href="#Créer un assembly global">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Assembly_Global_Creation.png" alt="img/Assembly_Global_Creation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser un assembly global"><a class="Link3" href="#">Utiliser un assembly global</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Utiliser un assembly global </span>avec CSC.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1558080815613"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1558080815613");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser un assembly global-Programme de Test"><a class="Link9" href="#Utiliser un assembly global">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    static void Main(string[] args) {
        double a = 22;
        double b = 7;
        double lData;
        
        lData = GMath.Instance().Add(a, b);
        GShow.Instance().Show(lData, "Add(22, 7)");
        lData = GMath.Instance().Sub(a, b);
        GShow.Instance().Show(lData, "Sub(22, 7)");
        lData = GMath.Instance().Mul(a, b);
        GShow.Instance().Show(lData, "Mul(22, 7)");
        lData = GMath.Instance().Div(a, b);
        GShow.Instance().Show(lData, "Div(22, 7)");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un assembly global-Fichier Makefile"><a class="Link9" href="#Utiliser un assembly global">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\GProject.exe

GLIBS =\
    /lib:lib\Hello\bin \
    /r:HelloGlobalAssembly.dll

GSRCS = \
    $(GSRC)\*.cs

all:
	csc $(GLIBS) /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.exe</xmp></pre></div>	<br><h2 class="Title7 GTitle2" id="Utiliser un assembly global-Compiler le projet"><a class="Link9" href="#Utiliser un assembly global">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Professional\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%

nmake</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un assembly global-Exécuter le projet"><a class="Link9" href="#Utiliser un assembly global">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

echo.
bin\GProject.exe
echo.

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un assembly global-Résultat"><a class="Link9" href="#Utiliser un assembly global">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Assembly_Global_Utilisation.png" alt="img/Assembly_Global_Utilisation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un global assembly cache (GAC)"><a class="Link3" href="#">Créer un global assembly cache (GAC)</a></h1><div class="Body3">Le but de cette section est de vous apprendre à&nbsp;<span class="GColor1" style="color:lime;">Créer un global assembly cache (GAC) </span>avec CSC.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1558085310995"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1558085310995");</script></div><br><h2 class="Title7 GTitle2" id="Créer un global assembly cache (GAC)-Fichier Makefile"><a class="Link9" href="#Créer un global assembly cache (GAC)">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GGAC = HelloGlobalAssembly
GLIBS = lib\Hello\bin\HelloGlobalAssembly.dll

gac:
	gacutil /i $(GLIBS)
clean:
	gacutil -u $(GGAC)</xmp></pre></div>	<br><h2 class="Title7 GTitle2" id="Créer un global assembly cache (GAC)-Créer le global assembly cache (GAC)"><a class="Link9" href="#Créer un global assembly cache (GAC)">Créer le global assembly cache (GAC)</a></h2><br><h3 class="Title8 GTitle3">Créer le global assembly cache (GAC)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Professional\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Program Files (x86)\Microsoft SDKs\Windows\v10.0A\bin\NETFX 4.6.1 Tools;%PATH%

nmake gac</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un global assembly cache (GAC)-Résultat"><a class="Link9" href="#Créer un global assembly cache (GAC)">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat GAC<br></h3><div class="Img3 GImage"><img src="img/Assembly_Global_Cache_Creation.png" alt="img/Assembly_Global_Cache_Creation.png"></div><br><h3 class="Title8 GTitle3">Résultat GAC localisation</h3><span class="GColor1" style="color:lime;">C:\Windows\Microsoft.NET\assembly\GAC_MSIL\HelloGlobalAssembly\v4.0_1.0.0.0__0e01aa170cf9a74c</span><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser un global assembly cache (GAC)"><a class="Link3" href="#">Utiliser un global assembly cache (GAC)</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Utiliser un global assembly cache (GAC) </span>avec CSC.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1558088108357"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1558088108357");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser un global assembly cache (GAC)-Programme de Test"><a class="Link9" href="#Utiliser un global assembly cache (GAC)">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.cs)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    static void Main(string[] args) {
        double a = 22;
        double b = 7;
        double lData;
        
        lData = GMath.Instance().Add(a, b);
        GShow.Instance().Show(lData, "Add(22, 7)");
        lData = GMath.Instance().Sub(a, b);
        GShow.Instance().Show(lData, "Sub(22, 7)");
        lData = GMath.Instance().Mul(a, b);
        GShow.Instance().Show(lData, "Mul(22, 7)");
        lData = GMath.Instance().Div(a, b);
        GShow.Instance().Show(lData, "Div(22, 7)");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un global assembly cache (GAC)-Fichier Makefile"><a class="Link9" href="#Utiliser un global assembly cache (GAC)">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Fichier Makefile (Makefile)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\GProject.exe

GLIBS =\
    /lib:lib\Hello\bin \
    /r:HelloGlobalAssembly.dll

GSRCS = \
    $(GSRC)\*.cs

all:
	csc $(GLIBS) /out:$(GTARGET) $(GSRCS)
clean:
	del /q $(GBIN)\*.exe</xmp></pre></div>	<br><h2 class="Title7 GTitle2" id="Utiliser un global assembly cache (GAC)-Compiler le projet"><a class="Link9" href="#Utiliser un global assembly cache (GAC)">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Microsoft Visual Studio\2019\Professional\VC\Tools\MSVC\14.20.27508\bin\Hostx86\x86
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%

nmake</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un global assembly cache (GAC)-Exécuter le projet"><a class="Link9" href="#Utiliser un global assembly cache (GAC)">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3>@echo off<br><br>echo.<br>bin\GProject.exe<br>echo.<br><br>pause<br><br><h2 class="Title7 GTitle2" id="Utiliser un global assembly cache (GAC)-Résultat"><a class="Link9" href="#Utiliser un global assembly cache (GAC)">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Assembly_Global_Cache_Utilisation.png" alt="img/Assembly_Global_Cache_Utilisation.png"></div></div></div></div></div><br>