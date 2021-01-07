<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une barre de titre sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une barre de titre sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_titlebar.png" alt="/Tutoriels/Android/img/b_cours_titlebar.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une barre de titre sous Android"><a class="Link3" href="#">Créer une barre de titre sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une barre de titre sous Android-Introduction"><a class="Link9" href="#Créer une barre de titre sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une barre de titre sous Android (GTitleBar).<br><br><h2 class="Title7 GTitle2" id="Créer une barre de titre sous Android-Structure de la barre de titre"><a class="Link9" href="#Créer une barre de titre sous Android">Structure de la barre de titre</a></h2><br><h3 class="Title8 GTitle3">GTitleBar.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public GTitleBar(Context context) {
    super(context);
    GManager.sGApp lApp = GManager.Instance().getData().app;
    
    ImageView lLogo = new ImageView(context);
    lLogo.setImageBitmap(GManager.Instance().getBitmap("logo.png", 40, 40));
    LinearLayout lLogoLayout = new LinearLayout(context);
    lLogoLayout.setOrientation(LinearLayout.VERTICAL);       
    lLogoLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
    lLogoLayout.addView(lLogo);
    lLogoLayout.setGravity(Gravity.BOTTOM);
    lLogoLayout.setPadding(0, 0, 0, 5);
    
    TextView lAppName = new TextView(context);
    lAppName.setText(lApp.app_name);
    lAppName.setTypeface(GManager.Instance().loadFace(lApp.app_font));
    lAppName.setTextSize(TypedValue.COMPLEX_UNIT_DIP, 30);
    
    TextView lTitle = new TextView(context);
    lApp.title = lTitle;
    lTitle.setTypeface(GManager.Instance().loadFace(lApp.app_font));
    lTitle.setGravity(Gravity.CENTER);

    setOrientation(LinearLayout.HORIZONTAL);       
    setLayoutParams(new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT));
    addView(lLogoLayout, new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.FILL_PARENT)); 
    addView(GManager.Instance().spaceH(5), new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
    addView(lAppName, new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT)); 
    addView(GManager.Instance().spaceH(30), new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
    addView(lTitle, new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT, 1)); 
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une barre de titre sous Android-Résultat"><a class="Link9" href="#Créer une barre de titre sous Android">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_titlebar.png" alt="/Tutoriels/Android/img/i_cours_titlebar.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>