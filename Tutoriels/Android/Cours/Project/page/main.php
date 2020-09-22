<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile, fondé sur le noyau Linux et développé par Google. Lancé en juin 2007 à la suite du rachat par Google en 2005 de la startup du même nom, le système avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les Chromebook (Chrome OS qui utilise les applications Android) et les smartwatch (Wear OS). En 2015, Android est le système d'exploitation mobile le plus utilisé dans le monde, devant iOS d’Apple, avec plus de 80 % de parts de marché dans les smartphones pour l'ensemble de ses versions et adaptations. (ref. <a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://fr.wikipedia.org/wiki/Android">Wikipédia</a>)<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_project.png" alt="/Tutoriels/Android/img/b_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet Android"><a class="Link3" href="#">Créer un projet Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet Android-Introduction"><a class="Link9" href="#Créer un projet Android">Introduction</a></h2><br>Un projet Android commence par le fichier manifest (AndroidManifest.xml) qui définit l'activité principale de l'application, ainsi que ses activités secondaires. L'activité principale est le programme lancé au démarrage de l'application. Nous choisissons de l’appeler (GMainActivity). La compilation du projet génère un fichier (*.apk) utilisé par le simulateur Android pour visualiser l'application.<br><br>Dans l'exemple qui suit, nous essayons d'écrire un programme qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un projet Android-AndroidManifest.xml"><a class="Link9" href="#Créer un projet Android">AndroidManifest.xml</a></h2><br>C'est le fichier de déclaration des activités de l'application.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;!--=============================================--&gt;
&lt;manifest 
    xmlns:android="http://schemas.android.com/apk/res/android"
    package="com.pkg.readyapp"&gt;
    &lt;!--=============================================--&gt;
    &lt;application
        android:allowBackup="true"
        android:icon="@mipmap/ic_launcher"
        android:label="@string/app_name"
        android:roundIcon="@mipmap/ic_launcher_round"
        android:supportsRtl="true"
        android:theme="@style/AppTheme"&gt;
        &lt;!--=============================================--&gt;
        &lt;activity android:name=".GMainActivity"&gt;
            &lt;intent-filter&gt;
                &lt;action android:name="android.intent.action.MAIN" /&gt;
                &lt;category android:name="android.intent.category.LAUNCHER" /&gt;
            &lt;/intent-filter&gt;
        &lt;/activity&gt;
        &lt;!--=============================================--&gt;
    &lt;/application&gt;
    &lt;!--=============================================--&gt;
&lt;/manifest&gt;
&lt;!--=============================================--&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Android-GMainActivity.java"><a class="Link9" href="#Créer un projet Android">GMainActivity.java</a></h2><br>C'est l'activité principale et elle utilise le layout (main_layout).<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
import android.os.Bundle;
import android.app.Activity;
//===============================================
public class GMainActivity extends Activity {
    //===============================================
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main_layout);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Android-main_layout.xml"><a class="Link9" href="#Créer un projet Android">main_layout.xml</a></h2><br>C'est le layout associé à l'activité principale et il utilise une vue texte (TextView).<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;!--=============================================--&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout 
    xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".GMainActivity"&gt;
    &lt;!--=============================================--&gt;
    &lt;TextView
        android:id="@+id/textview_state"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="Bonjour tout le monde"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;
    &lt;!--=============================================--&gt;
&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
&lt;!--=============================================--&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Android-strings.xml"><a class="Link9" href="#Créer un projet Android">strings.xml</a></h2><br>C'est le fichier de déclaration des ressources de type texte.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;!--=============================================--&gt;
&lt;resources&gt;
    &lt;string name="app_name"&gt;ReadyApp&lt;/string&gt;
&lt;/resources&gt;
&lt;!--=============================================--&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Android-Résultat"><a class="Link9" href="#Créer un projet Android">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_project.png" alt="/Tutoriels/Android/img/i_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>