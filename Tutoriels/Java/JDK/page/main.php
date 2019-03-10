<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre à compiler un projet Java avec Java JDK</div></a></div></div><div class="Body2 Orange">Le <b>Java </b>est un langage de programmation orientée objet.<br><b>Java JDK  </b>est un outil de compilation de projet <b>Java</b>.<br>Le but de ce tutoriel est de vous apprendre à compiler un projet <b>Java </b>avec <b>Java JDK</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1552129206292"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1552129206292");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la compilation de projet <span class="GColor1" style="color:lime;">Java </span>avec <span class="GColor1" style="color:lime;">Java JDK</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- Java JDK, comme compilateur.<br>- Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Installer Java JDK</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/technetwork/java/archive-139210.html">https://www.oracle.com/technetwork/java/archive-139210.html</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler un fichier source"><a class="Link3" href="#">Compiler un fichier source</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">compiler un fichier source </span>avec Java JDK.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1552130645016"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1552130645016");</script></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Programme principal"><a class="Link9" href="#Compiler un fichier source">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (GMain.java)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMain {
    public static void main(String[] args){
        System.out.print("Bonjour tout le monde\n");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Compiler le projet"><a class="Link9" href="#Compiler un fichier source">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build

javac %GSRC%\GMain.java ^
-d %GBUILD%</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Exécuter le projet"><a class="Link9" href="#Compiler un fichier source">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin
set CLASSPATH=build

echo.
java GMain
echo.

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler un fichier source-Résultat"><a class="Link9" href="#Compiler un fichier source">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Unique.png" alt="img/Fichier_Unique.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compiler plusieurs fichiers sources"><a class="Link3" href="#">Compiler plusieurs fichiers sources</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">compiler plusieurs fichiers sources </span>avec Java JDK.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1552131641851"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1552131641851");</script></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Programme principal"><a class="Link9" href="#Compiler plusieurs fichiers sources">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMain {
    public static void main(String[] args){
        double lAdd = GMath.add(22, 7);
        System.out.printf("add(22, 7): %.2f%n", lAdd);
        
        double lSub = GMath.sub(22, 7);
        System.out.printf("sub(22, 7): %.2f%n", lSub);
        
        double lMul = GMath.mul(22, 7);
        System.out.printf("mul(22, 7): %.2f%n", lMul);
        
        double lDiv = GMath.div(22, 7);
        System.out.printf("div(22, 7): %.2f%n", lDiv);
        
        int lMod = GMath.mod(22, 7);
        System.out.printf("mod(22, 7): %d%n", lMod);        
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Programme secondaire"><a class="Link9" href="#Compiler plusieurs fichiers sources">Programme secondaire</a></h2><br><h3 class="Title8 GTitle3">Programme secondaire</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMath {
    //===============================================
    public static double add(double a, double b){
        double c = a + b;
        return c;
    }
    //===============================================
    public static double sub(double a, double b){
        double c = a - b;
        return c;
    }
    //===============================================
    public static double mul(double a, double b){
        double c = a * b;
        return c;
    }
    //===============================================
    public static double div(double a, double b){
        double c = a / b;
        return c;
    }
    //===============================================
    public static int mod(int a, int b){
        int c = a % b;
        return c;
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Compiler le projet"><a class="Link9" href="#Compiler plusieurs fichiers sources">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build
set GMGR=%GSRC%\manager

javac %GSRC%\GMain.java ^
-d %GBUILD% ^
-sourcepath %GMGR%</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Exécuter le projet"><a class="Link9" href="#Compiler plusieurs fichiers sources">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin
set CLASSPATH=build

echo.
java GMain
echo.

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Résultat"><a class="Link9" href="#Compiler plusieurs fichiers sources">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Multiple.png" alt="img/Fichier_Multiple.png"></div></div></div></div></div><br>