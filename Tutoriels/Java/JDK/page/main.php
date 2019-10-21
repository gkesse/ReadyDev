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
set GSRCPATH=%GSRC%\manager

javac %GSRC%\GMain.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Exécuter le projet"><a class="Link9" href="#Compiler plusieurs fichiers sources">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin
set CLASSPATH=build

echo.
java GMain
echo.

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Compiler plusieurs fichiers sources-Résultat"><a class="Link9" href="#Compiler plusieurs fichiers sources">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Multiple.png" alt="img/Fichier_Multiple.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un package"><a class="Link3" href="#">Créer un package</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer un package </span>avec Java JDK.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1552228589582"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1552228589582");</script></div><br><h2 class="Title7 GTitle2" id="Créer un package-Package "><a class="Link9" href="#Créer un package">Package </a></h2><br><h3 class="Title8 GTitle3">Package (manager/GMath.java) </h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package manager;
//===============================================
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
//===============================================
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un package-Programme de Test"><a class="Link9" href="#Créer un package">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.java)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
import manager.GMath;
//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un package-Compiler le projet"><a class="Link9" href="#Créer un package">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build
set GSRCPATH=%GSRC%

javac %GSRC%\GMain.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un package-Exécuter le projet"><a class="Link9" href="#Créer un package">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set CLASSPATH=build

echo.
java GMain
echo.

pause
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un package-Résultat"><a class="Link9" href="#Créer un package">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Package.png" alt="img/Package.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un fichier exécutable"><a class="Link3" href="#">Créer un fichier exécutable</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer un fichier exécutable </span>avec Java JDK.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1552229261028"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1552229261028");</script></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable-Package"><a class="Link9" href="#Créer un fichier exécutable">Package</a></h2><br><h3 class="Title8 GTitle3">Package (manager/GMath.java) </h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package manager;
//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable-Programme de Test"><a class="Link9" href="#Créer un fichier exécutable">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.java)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
import manager.GMath;
//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable-Compiler le projet"><a class="Link9" href="#Créer un fichier exécutable">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build
set GSRCPATH=..\src

javac %GSRC%\GMain.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable-Créer le fichier exécutable"><a class="Link9" href="#Créer un fichier exécutable">Créer le fichier exécutable</a></h2><br><h3 class="Title8 GTitle3">Créer le fichier exécutable</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GBUILD=build
set GJAR=jar\GMain.jar
set GMAIN=GMain

echo.
jar cvfe %GJAR% %GMAIN% ^
-C %GBUILD% .
echo.</xmp></pre></div><br><div class="Img3 GImage"><img src="img/Fichier_Executable.png" alt="img/Fichier_Executable.png"></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable-Exécuter le projet"><a class="Link9" href="#Créer un fichier exécutable">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GJAR=jar\GMain.jar

echo.
java -jar %GJAR%
echo.

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable-Résultat"><a class="Link9" href="#Créer un fichier exécutable">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Executable_02.png" alt="img/Fichier_Executable_02.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un fichier exécutable avec MANIFEST.MF"><a class="Link3" href="#">Créer un fichier exécutable avec MANIFEST.MF</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer un fichier exécutable avec MANIFEST.MF </span>avec Java JDK.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1552232473691"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1552232473691");</script></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable avec MANIFEST.MF-Package"><a class="Link9" href="#Créer un fichier exécutable avec MANIFEST.MF">Package</a></h2><br><h3 class="Title8 GTitle3">Package (manager/GMath.java) </h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package manager;
//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable avec MANIFEST.MF-Programme de Test"><a class="Link9" href="#Créer un fichier exécutable avec MANIFEST.MF">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.java)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
import manager.GMath;
//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable avec MANIFEST.MF-Compiler le projet"><a class="Link9" href="#Créer un fichier exécutable avec MANIFEST.MF">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build
set GSRCPATH=..\src

javac %GSRC%\GMain.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable avec MANIFEST.MF-Fichier MANIFEST.MF"><a class="Link9" href="#Créer un fichier exécutable avec MANIFEST.MF">Fichier MANIFEST.MF</a></h2><br><h3 class="Title8 GTitle3">Fichier MANIFEST.MF</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">Manifest-Version: 1.0
Created-By: Gerard KESSE
Main-Class: GMain</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable avec MANIFEST.MF-Créer le fichier exécutable"><a class="Link9" href="#Créer un fichier exécutable avec MANIFEST.MF">Créer le fichier exécutable</a></h2><br><h3 class="Title8 GTitle3">Créer le fichier exécutable</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files (x86)\Java\jdk1.8.0_77\bin

set GBUILD=build
set GJAR=jar\GMain.jar
set GMANIFEST=MANIFEST.MF

echo.
jar cvmf %GMANIFEST% %GJAR% ^
-C %GBUILD% .
echo.</xmp></pre></div><br><div class="Img3 GImage"><img src="img/Fichier_Manifest.png" alt="img/Fichier_Manifest.png"></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable avec MANIFEST.MF-Exécuter le projet"><a class="Link9" href="#Créer un fichier exécutable avec MANIFEST.MF">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GJAR=jar\GMain.jar

echo.
java -jar %GJAR%
echo.

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un fichier exécutable avec MANIFEST.MF-Résultat"><a class="Link9" href="#Créer un fichier exécutable avec MANIFEST.MF">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Fichier_Manifest_02.png" alt="img/Fichier_Manifest_02.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une librairie"><a class="Link3" href="#">Créer une librairie</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer une librairie</span> avec Java JDK.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1552234193892"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1552234193892");</script></div><br><h2 class="Title7 GTitle2" id="Créer une librairie-Librairie"><a class="Link9" href="#Créer une librairie">Librairie</a></h2><br><h3 class="Title8 GTitle3">Librairie (com/ready/dev/GMath.java)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.ready.dev;
//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie-Compiler le projet"><a class="Link9" href="#Créer une librairie">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src\com\ready\dev
set GBUILD=build
set GSRCPATH=..\src

javac %GSRC%\*.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie-Créer la librairie"><a class="Link9" href="#Créer une librairie">Créer la librairie</a></h2><br><h3 class="Title8 GTitle3">Créer la librairie</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GBUILD=build
set GJAR=jar\GMath.jar

echo.
jar cvf %GJAR% ^
-C %GBUILD% .
echo.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie-Résultat"><a class="Link9" href="#Créer une librairie">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie.png" alt="img/Librairie.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser une librairie"><a class="Link3" href="#">Utiliser une librairie</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">utiliser une librairie </span>avec Java JDK.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1552235291606"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1552235291606");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie-Programme de Test"><a class="Link9" href="#Utiliser une librairie">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.java)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
import com.ready.dev.GMath;
//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie-Compiler le projet"><a class="Link9" href="#Utiliser une librairie">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build
set GSRCPATH=..\src
set CLASSPATH=lib\GMath.jar

javac %GSRC%\GMain.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie-Créer le fichier exécutable"><a class="Link9" href="#Utiliser une librairie">Créer le fichier exécutable</a></h2><br><h3 class="Title8 GTitle3">Créer le fichier exécutable</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GBUILD=build
set GJAR=jar\GMain.jar
set GMAIN=GMain

echo.
jar cvfe %GJAR% %GMAIN% ^
-C %GBUILD% .
echo.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie-Exécuter le projet"><a class="Link9" href="#Utiliser une librairie">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GMAIN=GMain
set CLASSPATH=jar\GMain.jar
set CLASSPATH=lib\GMath.jar;%CLASSPATH%

echo.
java %GMAIN%
echo.

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie-Résultat"><a class="Link9" href="#Utiliser une librairie">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_02.png" alt="img/Librairie_02.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une librairie avec MANIFEST.MF"><a class="Link3" href="#">Créer une librairie avec MANIFEST.MF</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer une librairie avec MANIFEST.MF </span>avec Java JDK.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1552501244912"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1552501244912");</script></div><br><h2 class="Title7 GTitle2" id="Créer une librairie avec MANIFEST.MF-Librairie"><a class="Link9" href="#Créer une librairie avec MANIFEST.MF">Librairie</a></h2><br><h3 class="Title8 GTitle3">Librairie (com/ready/dev/GMath.java)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.ready.dev;
//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie avec MANIFEST.MF-Compiler le projet"><a class="Link9" href="#Créer une librairie avec MANIFEST.MF">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src\com\ready\dev
set GBUILD=build
set GSRCPATH=..\src

javac %GSRC%\*.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie avec MANIFEST.MF-Fichier MANIFEST.MF"><a class="Link9" href="#Créer une librairie avec MANIFEST.MF">Fichier MANIFEST.MF</a></h2><br><h3 class="Title8 GTitle3">Fichier MANIFEST.MF</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">Manifest-Version: 1.0
Created-By: Gerard KESSE</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie avec MANIFEST.MF-Créer la librairie"><a class="Link9" href="#Créer une librairie avec MANIFEST.MF">Créer la librairie</a></h2><br><h3 class="Title8 GTitle3">Créer la librairie</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GBUILD=build
set GJAR=jar\GMath.jar
set GMANIFEST=MANIFEST.MF

echo.
jar cvfm %GJAR% %GMANIFEST% ^
-C %GBUILD% .
echo.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie avec MANIFEST.MF-Résultat"><a class="Link9" href="#Créer une librairie avec MANIFEST.MF">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_03.png" alt="img/Librairie_03.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser une librairie avec MANIFEST.MF"><a class="Link3" href="#">Utiliser une librairie avec MANIFEST.MF</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">utiliser une librairie avec MANIFEST.MF </span>avec Java JDK.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1552502519906"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1552502519906");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie avec MANIFEST.MF-Programme de Test"><a class="Link9" href="#Utiliser une librairie avec MANIFEST.MF">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test (GMain.java)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
import com.ready.dev.GMath;
//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie avec MANIFEST.MF-Compiler le projet"><a class="Link9" href="#Utiliser une librairie avec MANIFEST.MF">Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build
set GSRCPATH=..\src
set CLASSPATH=lib\GMath.jar

javac %GSRC%\GMain.java ^
-d %GBUILD% ^
-sourcepath %GSRCPATH%</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie avec MANIFEST.MF-Fichier MANIFEST.MF"><a class="Link9" href="#Utiliser une librairie avec MANIFEST.MF">Fichier MANIFEST.MF</a></h2><br><h3 class="Title8 GTitle3">Fichier MANIFEST.MF</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">Manifest-Version: 1.0
Created-By: Gerard KESSE
Main-Class: GMain</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie avec MANIFEST.MF-Créer le fichier exécutable"><a class="Link9" href="#Utiliser une librairie avec MANIFEST.MF">Créer le fichier exécutable</a></h2><br><h3 class="Title8 GTitle3">Créer le fichier exécutable</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GBUILD=build
set GJAR=jar\GMain.jar
set GMANIFEST=MANIFEST.MF

echo.
jar cvfm %GJAR% %GMANIFEST% ^
-C %GBUILD% .
echo.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie avec MANIFEST.MF-Exécuter le projet"><a class="Link9" href="#Utiliser une librairie avec MANIFEST.MF">Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GMAIN=GMain
set CLASSPATH=jar\GMain.jar
set CLASSPATH=lib\GMath.jar;%CLASSPATH%

echo.
java %GMAIN%
echo.

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie avec MANIFEST.MF-Résultat"><a class="Link9" href="#Utiliser une librairie avec MANIFEST.MF">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Librairie_04.png" alt="img/Librairie_04.png"></div></div></div></div></div><br>