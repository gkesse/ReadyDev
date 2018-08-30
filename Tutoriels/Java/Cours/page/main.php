<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation avec le Java</div></a></div></div><div class="Body2 Orange">Le <b>Java</b> est un langage de programmation orientée objet.<br>Le but de ce tutoriel est de vous apprendre la programmation avec le <b>Java</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la programmation avec le <span class="GColor1" style="color:lime;">Java</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- Java JDK, comme compilateur.<br>- Apache Ant, comme outil d'automatisation.<br>- Apache Maven, comme outil d'automatisation.<br>- Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger Java JDK<br></h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.oracle.com/technetwork/java/javase/archive-139210.html">http://www.oracle.com/technetwork/java/javase/archive-139210.html</a><br><br><h3 class="Title8 GTitle3">Télécharger Apache Ant</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://ant.apache.org/bindownload.cgi">https://ant.apache.org/bindownload.cgi</a><br><br><h3 class="Title8 GTitle3">Télécharger Apache Maven</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://maven.apache.org/download.cgi">https://maven.apache.org/download.cgi</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utilisation de Java JDK"><a class="Link3" href="#">Utilisation de Java JDK</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser <span class="GColor1" style="color:lime;">Java JDK</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Java JDK permet de compiler des projets Java.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1535535270992"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1535535270992");</script></div><br><h2 class="Title7 GTitle2" id="Utilisation de Java JDK-Fichier source unique"><a class="Link9" href="#Utilisation de Java JDK">Fichier source unique</a></h2><br><h3 class="Title8 GTitle3">Programme principal (GMain.java)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMain {
   public static void main(String[] args) {
      System.out.println("Bonjour tout le monde");
   }
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Nettoyer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

del /q build\*.class</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build

javac %GSRC%\GMain.java ^
-d %GBUILD%</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set CLASSPATH=build

echo.
java GMain
echo.

pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Construire le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

call cmd_clean.bat
call cmd_compile.bat
call cmd_run.bat</xmp></pre></div><br><h3 class="Title8 GTitle3">Resultat</h3><div class="Img3 GImage"><img src="img/Jdk.png" alt="img/Jdk.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utilisation d'Apache Ant"><a class="Link3" href="#">Utilisation d'Apache Ant</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser <span class="GColor1" style="color:lime;">Apache Ant</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Apache Ant permet d'automatiser la compilation de projets Java.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1535535416598"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1535535416598");</script></div><br><h2 class="Title7 GTitle2" id="Utilisation d'Apache Ant-Fichier source unique"><a class="Link9" href="#Utilisation d'Apache Ant">Fichier source unique</a></h2><br><h3 class="Title8 GTitle3">Programme principal (GMain.java)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMain {
   public static void main(String[] args) {
      System.out.println("Bonjour tout le monde");
   }
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier de construction du projet (build.xml)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml"><?xml version="1.0" encoding="UTF-8"?>
<project default="run">
    <!-- ============================================ -->
    <property name="GSRC" value="../src"/>
    <property name="GBUILD" value="build"/>
    <property name="GJAR" value="jar"/>
    <property name="GJARFILE" value="jar/GMain.jar"/>
    <property name="GMAIN" value="GMain"/>
    <!-- ============================================ -->
    <target name="clean">
        <delete dir="${GBUILD}"/>
        <delete dir="${GJAR}"/>
    </target>
    <!-- ============================================ -->
    <target name="compile" depends="clean">
        <mkdir dir="${GBUILD}"/>
        <javac srcdir="${GSRC}" destdir="${GBUILD}"/>
    </target>
    <!-- ============================================ -->
    <target name="jar" depends="compile">
        <mkdir dir="${GJAR}"/>
        <jar destfile="${GJARFILE}" basedir="${GBUILD}">
            <manifest>
                <attribute name="Main-Class" value="${GMAIN}"/>
            </manifest>
        </jar>
    </target>
    <!-- ============================================ -->
    <target name="run" depends="jar">
        <java jar="${GJARFILE}" fork="true"/>
    </target>
    <!-- ============================================ -->
</project></xmp></pre></div><br><h3 class="Title8 GTitle3">Nettoyer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin
set PATH=C:\Users\sabine\Downloads\Gerard\apache-ant-1.10.5\bin;%PATH%

ant clean</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin
set PATH=C:\Users\sabine\Downloads\Gerard\apache-ant-1.10.5\bin;%PATH%

ant compile</xmp></pre></div><br><h3 class="Title8 GTitle3">Générer le fichier JAR</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin
set PATH=C:\Users\sabine\Downloads\Gerard\apache-ant-1.10.5\bin;%PATH%

ant jar</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin
set PATH=C:\Users\sabine\Downloads\Gerard\apache-ant-1.10.5\bin;%PATH%

echo.
ant
echo.</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet avec Java<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GJAR=jar\GMain.jar

echo.
java -jar %GJAR%
echo.

pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Construire le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

call cmd_jar.bat
call cmd_run.bat</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Ant.png" alt="img/Ant.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utilisation d'Apache Maven"><a class="Link3" href="#">Utilisation d'Apache Maven</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser <span class="GColor1" style="color:lime;">Apache Maven</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Apache Maven permet d'automatiser la compilation de projets Java.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1535539889903"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1535539889903");</script></div><br><h2 class="Title7 GTitle2" id="Utilisation d'Apache Maven-Fichier source unique"><a class="Link9" href="#Utilisation d'Apache Maven">Fichier source unique</a></h2><br><h3 class="Title8 GTitle3">Créer le projet<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\apache-maven-3.5.4\bin
set JAVA_HOME=C:\Program Files\Java\jdk-10.0.2

set GROOT=..
set GGROUPID=com.ready.dev
set GARTIFACTID=GProject

cd %GROOT%
mvn archetype:generate ^
-DgroupId=%GGROUPID% ^
-DartifactId=%GARTIFACTID%</xmp></pre></div><br><h3 class="Title8 GTitle3">Programme principal (App.java)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.ready.dev;
//===============================================
public class App {
    public static void main(String[] args) {
        System.out.println("Bonjour tout le monde");
    }
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Configurer le plugin Surefire (pom.xml)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml"><!-- ============================================ -->
<plugin>
    <artifactId>maven-surefire-plugin</artifactId>
    <version>2.19.1</version>
</plugin>
<!-- ============================================ --></xmp></pre></div><br><h3 class="Title8 GTitle3">Nettoyer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\apache-maven-3.5.4\bin
set JAVA_HOME=C:\Program Files\Java\jdk-10.0.2

set GPOM=..\GProject\pom.xml

mvn -f %GPOM% clean</xmp></pre></div><br><h3 class="Title8 GTitle3">Valider le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\apache-maven-3.5.4\bin
set JAVA_HOME=C:\Program Files\Java\jdk-10.0.2

set GPOM=..\Projet_Creer\GProject\pom.xml

mvn -f %GPOM% validate</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\apache-maven-3.5.4\bin
set JAVA_HOME=C:\Program Files\Java\jdk-10.0.2

set GPOM=..\GProject\pom.xml

mvn -f %GPOM% compile</xmp></pre></div><br><h3 class="Title8 GTitle3">Packager le projet<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\apache-maven-3.5.4\bin
set JAVA_HOME=C:\Program Files\Java\jdk-10.0.2

set GPOM=..\Projet_Creer\GProject\pom.xml

mvn -f %GPOM% package</xmp></pre></div><br><h3 class="Title8 GTitle3">Tester le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\apache-maven-3.5.4\bin
set JAVA_HOME=C:\Program Files\Java\jdk-10.0.2

set GPOM=..\GProject\pom.xml

mvn -f %GPOM% test</xmp></pre></div><br><h3 class="Title8 GTitle3">Installer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\apache-maven-3.5.4\bin
set JAVA_HOME=C:\Program Files\Java\jdk-10.0.2

set GPOM=..\Projet_Creer\GProject\pom.xml

mvn -f %GPOM% install</xmp></pre></div><br><h3 class="Title8 GTitle3">Vérifier le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\apache-maven-3.5.4\bin
set JAVA_HOME=C:\Program Files\Java\jdk-10.0.2

set GPOM=..\Projet_Creer\GProject\pom.xml

mvn -f %GPOM% verify</xmp></pre></div><br><h3 class="Title8 GTitle3">Test d'intégration du projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\apache-maven-3.5.4\bin
set JAVA_HOME=C:\Program Files\Java\jdk-10.0.2

set GPOM=..\Projet_Creer\GProject\pom.xml

mvn -f %GPOM% integration-test</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GMAIN=com.ready.dev.App
set CLASSPATH=..\Projet_Creer\GProject\target\GProject-1.0-SNAPSHOT.jar

echo.
java %GMAIN%
echo.

pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Maven.png" alt="img/Maven.png"></div></div></div></div></div><br>