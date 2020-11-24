<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Appliquer un style sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à appliquer un style sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_style.png" alt="/Tutoriels/Android/img/b_cours_style.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Appliquer un style sous Android"><a class="Link3" href="#">Appliquer un style sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Appliquer un style sous Android-Introduction"><a class="Link9" href="#Appliquer un style sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons d'appliquer un style sous Android.<br><br><h2 class="Title7 GTitle2" id="Appliquer un style sous Android-Programme principal"><a class="Link9" href="#Appliquer un style sous Android">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMainActivity.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMainActivity extends Activity {
    //===============================================
    @Override
    protected void onCreate(Bundle savedInstanceState) {      
        super.onCreate(savedInstanceState);

        LinearLayout lMainLayout = new LinearLayout(this);
        lMainLayout.setOrientation(LinearLayout.VERTICAL);
        lMainLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
                
        Button lRed = new Button(new ContextThemeWrapper(this, R.style.GMainActivity_Red), null, R.style.GMainActivity_Red);
        lRed.setText("Red");
        lRed.setAllCaps(false);
        lRed.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
                
        Button lGreen = new Button(new ContextThemeWrapper(this, R.style.GMainActivity_Green), null, R.style.GMainActivity_Green);
        lGreen.setText("Green");
        lGreen.setAllCaps(false);
        lGreen.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));

        Button lBlue = new Button(new ContextThemeWrapper(this, R.style.GMainActivity_Blue), null, R.style.GMainActivity_Blue);
        lBlue.setText("Blue");
        lBlue.setAllCaps(false);
        lBlue.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));

        lMainLayout.addView(lRed);   
        lMainLayout.addView(lGreen);   
        lMainLayout.addView(lBlue);   

        setContentView(lMainLayout);        
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Appliquer un style sous Android-Définition du style"><a class="Link9" href="#Appliquer un style sous Android">Définition du style</a></h2><br><h3 class="Title8 GTitle3">res/values/styles.xml</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;resources&gt;
    &lt;!-- ============================================ --&gt;
    &lt;!-- AppTheme --&gt;
    &lt;!-- ============================================ --&gt;
    &lt;style name="AppTheme" parent="Theme.AppCompat.Light.DarkActionBar"&gt;
        &lt;item name="colorPrimary"&gt;@color/colorPrimary&lt;/item&gt;
        &lt;item name="colorPrimaryDark"&gt;@color/colorPrimaryDark&lt;/item&gt;
        &lt;item name="colorAccent"&gt;@color/colorAccent&lt;/item&gt;
        &lt;!-- ============================================ --&gt;
        &lt;item name="android:background"&gt;#201010&lt;/item&gt;
        &lt;item name="android:textColor"&gt;#ffffff&lt;/item&gt;
        &lt;item name="android:buttonStyle"&gt;@style/GButton&lt;/item&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/style&gt;
    &lt;!-- ============================================ --&gt;
    &lt;!-- GButton --&gt;
    &lt;!-- ============================================ --&gt;
    &lt;style name="GButton" parent="@android:style/Widget.Button"&gt;
        &lt;item name="android:background"&gt;?android:attr/background&lt;/item&gt;
        &lt;item name="android:textColor"&gt;?android:attr/textColor&lt;/item&gt;
	&lt;/style&gt;
    &lt;!-- ============================================ --&gt;
    &lt;!-- GMainActivity --&gt;
    &lt;!-- ============================================ --&gt;
    &lt;style name="GMainActivity_Red" parent="@android:style/Widget.Button"&gt;
        &lt;item name="android:background"&gt;#aa1010&lt;/item&gt;
        &lt;item name="android:minWidth"&gt;200sp&lt;/item&gt;
        &lt;item name="android:textColor"&gt;#ffffff&lt;/item&gt;
        &lt;item name="android:padding"&gt;10sp&lt;/item&gt;
        &lt;item name="android:layout_margin"&gt;10dp&lt;/item&gt;
        &lt;item name="android:textSize"&gt;20sp&lt;/item&gt;
	&lt;/style&gt;
    &lt;!-- ============================================ --&gt;
    &lt;style name="GMainActivity_Green" parent="@android:style/Widget.Button"&gt;
        &lt;item name="android:background"&gt;#10aa10&lt;/item&gt;
        &lt;item name="android:minWidth"&gt;200sp&lt;/item&gt;
        &lt;item name="android:textColor"&gt;#ffffff&lt;/item&gt;
        &lt;item name="android:padding"&gt;10sp&lt;/item&gt;
        &lt;item name="android:layout_marginBottom"&gt;10dp&lt;/item&gt;
        &lt;item name="android:textSize"&gt;20sp&lt;/item&gt;
	&lt;/style&gt;
    &lt;!-- ============================================ --&gt;
    &lt;style name="GMainActivity_Blue" parent="@android:style/Widget.Button"&gt;
        &lt;item name="android:background"&gt;#1010aa&lt;/item&gt;
        &lt;item name="android:minWidth"&gt;200sp&lt;/item&gt;
        &lt;item name="android:textColor"&gt;#ffffff&lt;/item&gt;
        &lt;item name="android:padding"&gt;10sp&lt;/item&gt;
        &lt;item name="android:layout_margin"&gt;10dp&lt;/item&gt;
        &lt;item name="android:textSize"&gt;20sp&lt;/item&gt;
	&lt;/style&gt;
    &lt;!-- ============================================ --&gt;
&lt;/resources&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Appliquer un style sous Android-Résultat"><a class="Link9" href="#Appliquer un style sous Android">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_style.png" alt="/Tutoriels/Android/img/i_cours_style.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>