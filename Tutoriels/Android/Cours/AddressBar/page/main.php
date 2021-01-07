<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une barre d'adresse sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une barre d'adresse sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_addressbar.png" alt="/Tutoriels/Android/img/b_cours_addressbar.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une barre d'adresse sous Android"><a class="Link3" href="#">Créer une barre d'adresse sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une barre d'adresse sous Android-Introduction"><a class="Link9" href="#Créer une barre d'adresse sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une barre d'adresse sous Android (GAddressBar).<br><br><h2 class="Title7 GTitle2" id="Créer une barre d'adresse sous Android-Structure de la barre d'adresse"><a class="Link9" href="#Créer une barre d'adresse sous Android">Structure de la barre d'adresse</a></h2><br><h3 class="Title8 GTitle3">GAddressBar.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public GAddressBar(Context context) {
    super(context);
    GManager.sGApp lApp = GManager.Instance().getData().app;
    
    Button lIcon = new Button(context);
    lIcon.setText(lApp.icon_map.get("home"));
    lIcon.setBackgroundColor(Color.TRANSPARENT);
    lIcon.setOnClickListener(this);
    lIcon.setTypeface(GManager.Instance().loadFace(lApp.icon_font));
    lIcon.setTransformationMethod(null);
    lIcon.setPadding(10, 0, 10, 0);
    m_widgetMap.put(lIcon, "icon");
    
    EditText lAddress = new EditText(context);
    lApp.address_bar = lAddress;
    lAddress.setBackgroundColor(Color.TRANSPARENT);
    lAddress.setSingleLine(true);
    lAddress.setOnKeyListener(this);
    lAddress.setTypeface(GManager.Instance().loadFace(lApp.app_font));
    lAddress.setTextColor(Color.parseColor("#808080"));
    m_widgetMap.put(lAddress, "address");
    
    Button lGoTo = new Button(context);
    lGoTo.setText(lApp.icon_map.get("paperplaneo"));
    lGoTo.setBackgroundColor(Color.TRANSPARENT);
    lGoTo.setOnClickListener(this);
    lGoTo.setTypeface(GManager.Instance().loadFace(lApp.icon_font));
    lGoTo.setTransformationMethod(null);
    lGoTo.setPadding(10, 0, 10, 0);
    m_widgetMap.put(lGoTo, "goto");

    setOrientation(LinearLayout.HORIZONTAL);       
    setLayoutParams(new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT));
    addView(lIcon, new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
    addView(lAddress, new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT, 1));
    addView(lGoTo, new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
    setBackground(GManager.Instance().bgColor("#503030", 10));
    setPadding(5, 5, 5, 5);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une barre d'adresse sous Android-Affichage d'une page suite à l'appui des boutons"><a class="Link9" href="#Créer une barre d'adresse sous Android">Affichage d'une page suite à l'appui des boutons</a></h2><br><h3 class="Title8 GTitle3">GAddressBar.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
@Override
public void onClick(View v) {
    GManager.sGApp lApp = GManager.Instance().getData().app;
    String lWidgetId = m_widgetMap.get(v);
    if(lWidgetId.equals("goto")) {
        String lAddress = lApp.address_bar.getText().toString();
        GManager.Instance().setPage(lAddress);
    }
    else if(lWidgetId.equals("icon")) {
        GManager.Instance().setPage("home");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une barre d'adresse sous Android-Affichage d'une page suite à l'appui de la touche Entrée"><a class="Link9" href="#Créer une barre d'adresse sous Android">Affichage d'une page suite à l'appui de la touche Entrée</a></h2><br><h3 class="Title8 GTitle3">GAddressBar.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
@Override
public boolean onKey(View v, int keyCode, KeyEvent event) {
    GManager.sGApp lApp = GManager.Instance().getData().app;
    if((event.getAction() == KeyEvent.ACTION_DOWN) &&
    (keyCode == KeyEvent.KEYCODE_ENTER)) {
        String lAddress = lApp.address_bar.getText().toString();
        GManager.Instance().setPage(lAddress);
        return true;
    }
    return false;
}    
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une barre d'adresse sous Android-Résultat"><a class="Link9" href="#Créer une barre d'adresse sous Android">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_addressbar.png" alt="/Tutoriels/Android/img/i_cours_addressbar.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>