<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation mobile sous Android<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation mobile sous <b>Android</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Android </b>est un système d'exploitation mobile conçu à l'origine pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Mobile/Android/img/b_android.png" alt="/Tutoriels/Mobile/Android/img/b_android.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Android.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617655389490"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617655389490");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous Batch"><a class="Link9" href="#Installation">1.1 - Installation sous Batch</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger Android Studio"><a class="Link9" href="#Installation">1.1.1 - Télécharger Android Studio</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://developer.android.com/studio">https://developer.android.com/studio</a><br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Download Android Studio
Cocher -&gt;  I have read and agree with the above terms and conditions
Download Android Studio for Windows</xmp></pre></div><br><b>android-studio-ide-201.7199119-windows.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Installer Android Studio"><a class="Link9" href="#Installation">1.1.2 - Installer Android Studio</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">android-studio-ide-201.7199119-windows.exe
Next
Cocher -&gt; Android Virtual Device
Next
Cocher -&gt; C:\Program Files\Android\Android Studio
Next
Install
Next
Cocher -&gt; Start Android Studio
Finish</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.3 - Démarrer Android Studio"><a class="Link9" href="#Installation">1.1.3 - Démarrer Android Studio</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
Android Studio</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Android.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617658055429"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617658055429");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous Batch"><a class="Link9" href="#Tests">1.1 - Test sous Batch</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Créer le projet sous Android Studio"><a class="Link9" href="#Tests">1.1.1 - Créer le projet sous Android Studio</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Android Studio
File -&gt; New -&gt; New Project
Phone and Tablet -&gt; Empty Activity
Next
Name -&gt; ReadyApp
Package Name -&gt; com.pkg.readyapp
Save Location -&gt; ReadyTest\android
Language -&gt; Java
Minimum SDK -&gt; API 16: Android 4.1 (Jelly Bean)
Finish</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Éditer le projet sous Notepad++"><a class="Link9" href="#Tests">1.1.2 - Éditer le projet sous Notepad++</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.2.1 - Éditer le programme principal"><a class="Link9" href="#Tests">1.1.2.1 - Éditer le programme principal</a></h2><br><h3 class="Title8 GTitle3">Modifications</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Modifier le nom du fichier -&gt; MainActivity.java
Par le nom de votre choix -&gt; GMainActivity.java</xmp></pre></div><br><h3 class="Title8 GTitle3">MainActivity.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
//===============================================
public class MainActivity extends AppCompatActivity {
    //===============================================
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br>Aucune ligne n'est à modifier.<br><br><h2 class="Title7 GTitle2" id="Tests-1.1.2.2 - Définir la classe principale"><a class="Link9" href="#Tests">1.1.2.2 - Définir la classe principale</a></h2><br><h3 class="Title8 GTitle3">AndroidManifest.xml</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;!-- ============================================ --&gt;
&lt;manifest 
    xmlns:android="http://schemas.android.com/apk/res/android"
    package="com.pkg.readyapp"&gt;
    &lt;!-- ============================================ --&gt;
    &lt;application
        android:allowBackup="true"
        android:icon="@mipmap/ic_launcher"
        android:label="@string/app_name"
        android:roundIcon="@mipmap/ic_launcher_round"
        android:supportsRtl="true"
        android:theme="@style/Theme.ReadyApp"&gt;
        &lt;!-- ============================================ --&gt;
        &lt;activity android:name=".GMainActivity"&gt;
            &lt;intent-filter&gt;
                &lt;action android:name="android.intent.action.MAIN" /&gt;
                &lt;category android:name="android.intent.category.LAUNCHER" /&gt;
            &lt;/intent-filter&gt;
        &lt;/activity&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/application&gt;
    &lt;!-- ============================================ --&gt;
&lt;/manifest&gt;
&lt;!-- ============================================ --&gt;</xmp></pre></div><br>Quelques lignes sont à modifier.<br><br><h3 class="Title8 GTitle3">AndroidManifest.xml</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;activity android:name=".GMainActivity"&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2.3 - Éditer le layout principal"><a class="Link9" href="#Tests">1.1.2.3 - Éditer le layout principal</a></h2><br><h3 class="Title8 GTitle3">activity_main.xml</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;!-- ============================================ --&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout 
    xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".MainActivity"&gt;
    &lt;!-- ============================================ --&gt;
    &lt;TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="Bonjour tout le monde"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;
    &lt;!-- ============================================ --&gt;
&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
&lt;!-- ============================================ --&gt;</xmp></pre></div><br>Quelques lignes sont à modifier.<br><br><h3 class="Title8 GTitle3">activity_main.xml</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">android:text="Bonjour tout le monde"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Compiler le projet sous Batch"><a class="Link9" href="#Tests">1.1.3 - Compiler le projet sous Batch</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Program Files (x86)\Nox\bin;%PATH%"
set "JAVA_HOME=C:\Program Files\Java\jdk-15.0.1"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">gradlew installDebug</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.4 - Simuler le projet sous NoxPlayer"><a class="Link9" href="#Tests">1.1.4 - Simuler le projet sous NoxPlayer</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">nox ReadyTest\android\app\build\outputs\apk\debug\app-debug.apk</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">gradlew installDebug</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">NoxPlayer
ReadyApp</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.4.1 - Page d'accueil sous NoxPlayer"><a class="Link9" href="#Tests">1.1.4.1 - Page d'accueil sous NoxPlayer</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Mobile/Android/img/i_android_test.png" alt="/Tutoriels/Mobile/Android/img/i_android_test.png"></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.4.2 - Page de l'application sous NoxPlayer"><a class="Link9" href="#Tests">1.1.4.2 - Page de l'application sous NoxPlayer</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Mobile/Android/img/i_android_test_02.png" alt="/Tutoriels/Mobile/Android/img/i_android_test_02.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration sous Android.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617705224722"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617705224722");</script></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Introduction"><a class="Link9" href="#Système d'administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface graphique permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Système d'administration-Système d'administration"><a class="Link9" href="#Système d'administration">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GMainActivity.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMainActivity extends AppCompatActivity {
    //===============================================
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        GManager.sGApp lApp = GManager.Instance().getData().app;
        lApp.context = this;

        GManager.Instance().loadData();
        
        GWidget lTitleBar = GWidget.Create("titlebar", this);
        GWidget lAddressBar = GWidget.Create("addressbar", this);
        GWidget lAddressKey = GWidget.Create("addresskey", this);
        GWidget lWindow = GWidget.Create("window", this);
        
        lWindow.addItem("home", GWidget.Create("home", this), "Accueil", 1);
        lWindow.addItem("home/login", GWidget.Create("login", this), "Connexion", 1);
        lWindow.addItem("home/sqlite", GWidget.Create("sqlite", this), "SQLite");
        lWindow.addItem("home/opencv", GWidget.Create("opencv", this), "OpenCV");
        lWindow.addItem("home/debug", GWidget.Create("debug", this), "Debug");
        
        GSQLite.Instance();

        LinearLayout lMainLayout = new LinearLayout(this);
        lMainLayout.setOrientation(LinearLayout.VERTICAL);       
        lMainLayout.setLayoutParams(new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT));
        lMainLayout.addView(lTitleBar); lMainLayout.addView(GManager.Instance().spaceV(20));
        lMainLayout.addView(lAddressBar); lMainLayout.addView(GManager.Instance().spaceV(20));
        lMainLayout.addView(lAddressKey); lMainLayout.addView(GManager.Instance().spaceV(20));
        lMainLayout.addView(lWindow); lMainLayout.addView(GManager.Instance().spaceV(20));
        lMainLayout.setPadding(20, 10, 20, 10);

        getSupportActionBar().hide();
        setContentView(lMainLayout);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Ajout d'une page"><a class="Link9" href="#Système d'administration">Ajout d'une page</a></h2><br><h3 class="Title8 GTitle3">GWindow.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void addItem(String key, View v, String title, int isDefault) {
    GManager.sGApp lApp = GManager.Instance().getData().app;
    int lIndex = lApp.page_map.count();
    lApp.page_map.addItem(v);
    lApp.page_id.put(key, lIndex);
    lApp.title_map.put(key, title);
    if(isDefault == 1) {GManager.Instance().setPage(key);}
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GStackWidget.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void addItem(View v) {
    addView(v);
    m_widgetMap.put(m_count, v);
    if(m_count != m_currentIndex) {v.setVisibility(View.GONE);}
    m_count++;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Page d'accueil"><a class="Link9" href="#Système d'administration">Page d'accueil</a></h2><br><h3 class="Title8 GTitle3">GHome.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public GHome(Context context) {
    super(context);
    
    GWidget lListBox = GWidget.Create("listbox", context);
    lListBox.addOnItemClick(this);
    lListBox.addItem("Connexion", "home/login", "user");
    lListBox.addItem("SQLite", "home/sqlite", "database");
    lListBox.addItem("OpenCV", "home/opencv", "camera");
    lListBox.addItem("Debug", "home/debug", "filetexto");
    
    setOrientation(LinearLayout.VERTICAL);       
    setLayoutParams(new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT));
    addView(lListBox);
    setBackgroundColor(Color.TRANSPARENT);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Sélection d'une page"><a class="Link9" href="#Système d'administration">Sélection d'une page</a></h2><br><h3 class="Title8 GTitle3">GListBox.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void addItem(String text, String key, String icon) {
    GManager.sGApp lApp = GManager.Instance().getData().app;
    
    Button lIcon = new Button(lApp.context);
    lIcon.setText(lApp.icon_map.get(icon));
    lIcon.setOnClickListener(this);
    lIcon.setTypeface(GManager.Instance().loadFace(lApp.icon_font));
    lIcon.setBackgroundColor(Color.TRANSPARENT);
    lIcon.setTextSize(TypedValue.COMPLEX_UNIT_DIP, 22);
    lIcon.setMinimumWidth(45);
    m_widgetMap.put(lIcon, key);
    
    Button lButton = new Button(lApp.context);
    lButton.setText(text);
    lButton.setOnClickListener(this);
    lButton.setTypeface(GManager.Instance().loadFace(lApp.app_font));
    lButton.setBackgroundColor(Color.TRANSPARENT);
    m_widgetMap.put(lButton, key);
    
    LinearLayout lItemLayout = new LinearLayout(lApp.context);
    lItemLayout.setOrientation(LinearLayout.HORIZONTAL);       
    lItemLayout.setLayoutParams(new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT));
    lItemLayout.setBackgroundColor(Color.TRANSPARENT);
    lItemLayout.addView(lIcon, new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
    lItemLayout.addView(GManager.Instance().spaceH(2), new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
    lItemLayout.addView(lButton, new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT, 1));
    
    addView(lItemLayout);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GListBox.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
@Override
public void onClick(View v) {
    GManager.sGApp lApp = GManager.Instance().getData().app;
    String lWidgetId = m_widgetMap.get(v);
    lApp.widget_id = lWidgetId;
    emitOnItemClick();
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GWidget.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void emitOnItemClick() {
    for(GWidget lObj : m_itemMap) {
        lObj.onItemClick();
    }
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GWidget.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void addOnItemClick(GWidget obj) {
    m_itemMap.add(obj);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GHome.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void onItemClick() {
    GManager.sGApp lApp = GManager.Instance().getData().app;
    GManager.Instance().setPage(lApp.widget_id);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Affichage d'une page"><a class="Link9" href="#Système d'administration">Affichage d'une page</a></h2><br><h3 class="Title8 GTitle3">GManager.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void setPage(String address) {
    if(!mgr.app.page_id.containsKey(address)) {
        mgr.app.address_bar.setText(mgr.app.address_url);
        return;
    }
    int lPageId = mgr.app.page_id.get(address);
    String lTitle = mgr.app.title_map.get(address);
    mgr.app.page_map.setCurrentIndex(lPageId);
    mgr.app.address_key.setContent(address);
    mgr.app.address_bar.setText(address);
    mgr.app.title.setText(lTitle);
    mgr.app.address_url = address;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GStackWidget.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void setCurrentIndex(int index) {
    View lView = m_widgetMap.get(m_currentIndex);
    lView.setVisibility(View.GONE);
    m_currentIndex = index;
    lView = m_widgetMap.get(m_currentIndex);
    lView.setVisibility(View.VISIBLE);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><h2 class="Title7 GTitle2" id="Système d'administration-1 - Page d'accueil"><a class="Link9" href="#Système d'administration">1 - Page d'accueil</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Mobile/Android/img/i_android_admin_system.png" alt="/Tutoriels/Mobile/Android/img/i_android_admin_system.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-2 - Page du module de connexion"><a class="Link9" href="#Système d'administration">2 - Page du module de connexion</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Mobile/Android/img/i_android_admin_system_02.png" alt="/Tutoriels/Mobile/Android/img/i_android_admin_system_02.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-3 - Page du module SQLite"><a class="Link9" href="#Système d'administration">3 - Page du module SQLite</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Mobile/Android/img/i_android_admin_system_03.png" alt="/Tutoriels/Mobile/Android/img/i_android_admin_system_03.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-4 - Page du module OpenCV"><a class="Link9" href="#Système d'administration">4 - Page du module OpenCV</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Mobile/Android/img/i_android_admin_system_04.png" alt="/Tutoriels/Mobile/Android/img/i_android_admin_system_04.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-5 - Page du module de débogage"><a class="Link9" href="#Système d'administration">5 - Page du module de débogage</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Mobile/Android/img/i_android_admin_system_05.png" alt="/Tutoriels/Mobile/Android/img/i_android_admin_system_05.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="NoxPlayer"><a class="Link3" href="#">NoxPlayer</a></h1><div class="Body3"><br>NoxPlayer est un émulateur Android.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617657152195"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617657152195");</script></div><br><h2 class="Title7 GTitle2" id="Nox-1 - Installation"><a class="Link9" href="#Nox">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Nox-1.1 - Installation sous Windows"><a class="Link9" href="#Nox">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Nox-1.1.1 - Installation sous Batch"><a class="Link9" href="#Nox">1.1.1 - Installation sous Batch</a></h2><br><h2 class="Title7 GTitle2" id="NoxPlayer-1.1.1.1 - Télécharger NoxPlayer"><a class="Link9" href="#NoxPlayer">1.1.1.1 - Télécharger NoxPlayer</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.bignox.com/">https://www.bignox.com/</a><br><br><b>nox_setup_v7.0.1.0_full_intl.exe</b><br><br><h2 class="Title7 GTitle2" id="NoxPlayer-1.1.1.2 - Installer NoxPlayer"><a class="Link9" href="#NoxPlayer">1.1.1.2 - Installer NoxPlayer</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">nox_setup_v7.0.1.0_full_intl.exe
Cocher -&gt; Accepter la convention d'utilisation
Installer maintenant</xmp></pre></div><br><h2 class="Title7 GTitle2" id="NoxPlayer-1.1.1.3 - Démarrer NoxPlayer"><a class="Link9" href="#NoxPlayer">1.1.1.3 - Démarrer NoxPlayer</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
Nox</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Android Asset Studio"><a class="Link3" href="#">Android Asset Studio</a></h1><div class="Body3"><br>Android Asset Studio est une collection d'outils pour générer facilement des icônes pour des applications Android. <br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617711262007"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617711262007");</script></div><br><h2 class="Title7 GTitle2" id="Android Asset Studio-1 - Interface"><a class="Link9" href="#Android Asset Studio">1 - Interface</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://romannurik.github.io/AndroidAssetStudio/index.html">http://romannurik.github.io/AndroidAssetStudio/index.html</a><br><br></div></div></div></div><br>