<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un sélecteur d'adresse sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un sélecteur d'adresse sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_addresskey.png" alt="/Tutoriels/Android/img/b_cours_addresskey.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un sélecteur d'adresse sous Android"><a class="Link3" href="#">Créer un sélecteur d'adresse sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un sélecteur d'adresse sous Android-Introduction"><a class="Link9" href="#Créer un sélecteur d'adresse sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un sélecteur d'adresse sous Android (GAddressKey).<br><br><h2 class="Title7 GTitle2" id="Créer un sélecteur d'adresse sous Android-Structure du sélecteur d'adresse"><a class="Link9" href="#Créer un sélecteur d'adresse sous Android">Structure du sélecteur d'adresse</a></h2><br><h3 class="Title8 GTitle3">GAddressKey.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public GAddressKey(Context context) {
    super(context);
    GManager.sGApp lApp = GManager.Instance().getData().app;
    lApp.address_key = this;
    setOrientation(LinearLayout.HORIZONTAL);       
    setLayoutParams(new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT));
    setPadding(10, 0, 10, 0);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un sélecteur d'adresse sous Android-Conversion d'une adresse en une suite de boutons"><a class="Link9" href="#Créer un sélecteur d'adresse sous Android">Conversion d'une adresse en une suite de boutons</a></h2><br><h3 class="Title8 GTitle3">GAddressKey.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void setContent(String text) {
    GManager.sGApp lApp = GManager.Instance().getData().app;
    removeAllViews();

    String[] lMap = text.split("/");
    String lKeyId = "";

    for(int i = 0; i &lt; lMap.length; i++) {
        if(i != 0) {
            Button lButton = new Button(lApp.context);
            lButton.setText(lApp.icon_map.get("chevronright"));
            lButton.setTypeface(GManager.Instance().loadFace(lApp.icon_font));
            lButton.setTransformationMethod(null);
            lButton.setTextSize(TypedValue.COMPLEX_UNIT_DIP, 20);
            lButton.setPadding(10, 0, 10, 0);
            addView(lButton);
        }
        
        String lKey = lMap[i];
        
        Button lButton = new Button(lApp.context);
        lButton.setText(lKey);
        lButton.setOnClickListener(this);
        lButton.setTypeface(GManager.Instance().loadFace(lApp.app_font));
        
        if(i != 0) lKeyId += "/";
        lKeyId += lKey;
        
        m_widgetMap.put(lButton, lKeyId);
        
        addView(lButton);
    }        
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un sélecteur d'adresse sous Android-Affichage d'une page suite à l'appui d'un bouton d'adresse"><a class="Link9" href="#Créer un sélecteur d'adresse sous Android">Affichage d'une page suite à l'appui d'un bouton d'adresse</a></h2><br><h3 class="Title8 GTitle3">GAddressKey.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
@Override
public void onClick(View v) {
    String lWidgetId = m_widgetMap.get(v);
    GManager.Instance().setPage(lWidgetId);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un sélecteur d'adresse sous Android-Résultat"><a class="Link9" href="#Créer un sélecteur d'adresse sous Android">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_addresskey.png" alt="/Tutoriels/Android/img/i_cours_addresskey.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>