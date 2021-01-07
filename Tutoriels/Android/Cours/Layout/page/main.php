<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Récupérer une vue à partir d'un layout sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à récupérer une vue à partir d'un layout sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_layout.png" alt="/Tutoriels/Android/img/b_cours_layout.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Récupérer une vue à partir d'un layout sous Android"><a class="Link3" href="#">Récupérer une vue à partir d'un layout sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Récupérer une vue à partir d'un layout sous Android-Introduction"><a class="Link9" href="#Récupérer une vue à partir d'un layout sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de récupérer une vue à partir d'un layout sous Android.<br><br><h2 class="Title7 GTitle2" id="Récupérer une vue à partir d'un layout sous Android-Programme principal"><a class="Link9" href="#Récupérer une vue à partir d'un layout sous Android">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GLayout.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public GLayout(Context context) {
    super(context);
    GManager.sGApp lApp = GManager.Instance().getData().app;

    LayoutInflater lLayoutInflater = (LayoutInflater)context.getSystemService(Context.LAYOUT_INFLATER_SERVICE); 
    View lView = lLayoutInflater.inflate(R.layout.activity_main, null);

    TextView lTextView = (TextView)lView.findViewById(R.id.hello_world);
    lTextView.setTypeface(GManager.Instance().loadFace(lApp.app_font));
    
    setOrientation(LinearLayout.VERTICAL);       
    setLayoutParams(new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT));
    addView(lView);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Récupérer une vue à partir d'un layout sous Android-Structure du layout"><a class="Link9" href="#Récupérer une vue à partir d'un layout sous Android">Structure du layout</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;!-- ============================================ --&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".GMainActivity"&gt;
    &lt;!-- ============================================ --&gt;
    &lt;TextView
        android:id="@+id/hello_world"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="Bonjour tout le monde"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;
    &lt;!-- ============================================ --&gt;
&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
&lt;!-- ============================================ --&gt;
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Récupérer une vue à partir d'un layout sous Android-Résultat"><a class="Link9" href="#Récupérer une vue à partir d'un layout sous Android">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_layout.png" alt="/Tutoriels/Android/img/i_cours_layout.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>