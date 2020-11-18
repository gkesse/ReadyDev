<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Basculer entre des activités sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à basculer entre des activités sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_activity_switch.png" alt="/Tutoriels/Android/img/b_cours_activity_switch.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Basculer entre des activités sous Android"><a class="Link3" href="#">Basculer entre des activités sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Basculer entre des activités sous Android-Introduction"><a class="Link9" href="#Basculer entre des activités sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de basculer entre des activités sous Android.<br><br><h2 class="Title7 GTitle2" id="Basculer entre des activités sous Android-Programme principal"><a class="Link9" href="#Basculer entre des activités sous Android">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMainActivity.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMainActivity extends Activity implements OnClickListener {
    //===============================================
    @Override
    protected void onCreate(Bundle savedInstanceState) {      
        super.onCreate(savedInstanceState);

        LinearLayout lMainLayout = new LinearLayout(this);
        lMainLayout.setOrientation(LinearLayout.VERTICAL);
        lMainLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));

        TextView lTextView = new TextView(this);
        lTextView.setText("Menu principal");

        Button lButton = new Button(this);
        lButton.setText("Activité secondaire");
        lButton.setAllCaps(false);
        lButton.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
        lButton.setOnClickListener(this);
        
        lMainLayout.addView(lTextView);
        lMainLayout.addView(lButton);

        setContentView(lMainLayout);
    }
    //===============================================
    @Override
    public void onClick(View v) {
        Intent lIntent = new Intent(this, GSecondActivity.class);
        startActivity(lIntent);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Basculer entre des activités sous Android-Activité sécondaire"><a class="Link9" href="#Basculer entre des activités sous Android">Activité sécondaire</a></h2><br><h3 class="Title8 GTitle3">GSecondActivity.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GSecondActivity extends Activity implements OnClickListener {
    //===============================================
    @Override
    protected void onCreate(Bundle savedInstanceState) {      
        super.onCreate(savedInstanceState);

        LinearLayout lMainLayout = new LinearLayout(this);
        lMainLayout.setOrientation(LinearLayout.VERTICAL);
        lMainLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));

        TextView lTextView = new TextView(this);
        lTextView.setText("Activité secondaire");
        
        Button lButton = new Button(this);
        lButton.setText("Terminer");
        lButton.setAllCaps(false);
        lButton.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
        lButton.setOnClickListener(this);
        
        lMainLayout.addView(lTextView);
        lMainLayout.addView(lButton);

        setContentView(lMainLayout);
    }
    //===============================================
    @Override
    public void onClick(View v) {
        finish();
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Basculer entre des activités sous Android-Fichier Manifest"><a class="Link9" href="#Basculer entre des activités sous Android">Fichier Manifest</a></h2><br><h3 class="Title8 GTitle3">AndroidManifest.xml</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
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
        &lt;activity android:name=".GSecondActivity"&gt;&lt;/activity&gt;
        &lt;!--=============================================--&gt;
    &lt;/application&gt;
    &lt;!--=============================================--&gt;
&lt;/manifest&gt;
&lt;!--=============================================--&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Basculer entre des activités sous Android-Résultat"><a class="Link9" href="#Basculer entre des activités sous Android">Résultat</a></h2><br><h3 class="Title8 GTitle3">Au démarrage</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_activity_switch.png" alt="/Tutoriels/Android/img/i_cours_activity_switch.png"></div><br><h3 class="Title8 GTitle3">Après un clic sur le bouton (Activité secondaire)</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_activity_switch_02.png" alt="/Tutoriels/Android/img/i_cours_activity_switch_02.png"></div><br><h3 class="Title8 GTitle3">Après un clic sur le bouton (Terminer)</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_activity_switch.png" alt="/Tutoriels/Android/img/i_cours_activity_switch.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>