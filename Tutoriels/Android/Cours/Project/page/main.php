<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_project.png" alt="/Tutoriels/Android/img/b_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet sous Android"><a class="Link3" href="#">Créer un projet sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet sous Android-Introduction"><a class="Link9" href="#Créer un projet sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de Créer un projet sous Android qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un projet sous Android-Programme principal"><a class="Link9" href="#Créer un projet sous Android">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMainActivity.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
import android.app.*;
import android.os.*;
import android.widget.*;
//===============================================
public class GMainActivity extends Activity {
    //===============================================
    @Override
    protected void onCreate(Bundle savedInstanceState) {      
        super.onCreate(savedInstanceState);
        TextView lTextView = new TextView(this);
        lTextView.setText("Bonjour tout le monde");
        setContentView(lTextView);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet sous Android-Fichier Manifest"><a class="Link9" href="#Créer un projet sous Android">Fichier Manifest</a></h2><br><h3 class="Title8 GTitle3">AndroidManifest.xml</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
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
&lt;!--=============================================--&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet sous Android-Fichier Makefile"><a class="Link9" href="#Créer un projet sous Android">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">android_studio:
	studio64
apk_install:
	adb install $(GAPK)
nox_start: 
	Nox
nox_stop: 
	nox_adb kill-server
nox_connect: 
	nox_adb connect $(GSERVER_IP):$(GSERVER_PORT)
nox_install: 
	Nox "-apk:$(GAPK)"
avd_start: 
	emulator -avd $(GAVD_NAME)
avd_list: 
	emulator -list-avds
grad_install: 
	cd $(GPROJECT) && gradlew installDebug
grad_tasks: 
	cd $(GPROJECT) && gradlew tasks</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet sous Android-Variables d'environnement"><a class="Link9" href="#Créer un projet sous Android">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\TDM-GCC-64\bin;%PATH%" 
set "PATH=C:\Program Files (x86)\Nox\bin;%PATH%"
set "PATH=C:\Program Files\Android\Android Studio\bin;%PATH%"
set "PATH=C:\Users\Admin\AppData\Local\Android\Sdk\emulator;%PATH%"
set "PATH=C:\Users\Admin\AppData\Local\Android\Sdk\tools;%PATH%"
::===============================================
set "GPROJECT=C:\Users\Admin\Downloads\Programs\ReadyAndroid\code"
set "GAPK=%GPROJECT%\app\build\outputs\apk\debug\app-debug.apk"
::===============================================
set "GSERVER_IP=127.0.0.1"
set "GSERVER_PORT=62001"
set "GAVD_NAME=Android_TV_720p_API_QG"
::===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">make.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
mingw32-make %*
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet sous Android-Compilation automatique"><a class="Link9" href="#Créer un projet sous Android">Compilation automatique</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make nox_start
make nox_connect
make grad_install</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet sous Android-Compilation manuelle"><a class="Link9" href="#Créer un projet sous Android">Compilation manuelle</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">Nox
nox_adb connect 127.0.0.1:62001
d C:\Users\Admin\Downloads\Programs\ReadyAndroid\code
gradlew installDebug</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet sous Android-Résultat"><a class="Link9" href="#Créer un projet sous Android">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_project.png" alt="/Tutoriels/Android/img/i_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>