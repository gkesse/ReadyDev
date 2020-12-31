<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une liste de données sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une liste de données sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_listbox.png" alt="/Tutoriels/Android/img/b_cours_listbox.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une liste de données sous Android"><a class="Link3" href="#">Créer une liste de données sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une liste de données sous Android-Introduction"><a class="Link9" href="#Créer une liste de données sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une liste de données sous Android (GListBox).<br><br><h2 class="Title7 GTitle2" id="Créer une liste de données sous Android-Structure de la liste de données"><a class="Link9" href="#Créer une liste de données sous Android">Structure de la liste de données</a></h2><br><h3 class="Title8 GTitle3">GListBox.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public GListBox(Context context) {
    super(context);
    setOrientation(LinearLayout.VERTICAL);       
    setLayoutParams(new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT));
    setBackgroundColor(Color.TRANSPARENT);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une liste de données sous Android-Ajout d'une donnée"><a class="Link9" href="#Créer une liste de données sous Android">Ajout d'une donnée</a></h2><br><br><h3 class="Title8 GTitle3">GHome.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">lListBox.addItem("SQLite", "home/sqlite", "database");
lListBox.addItem("OpenCV", "home/opencv", "camera");
lListBox.addItem("Layout", "home/layout", "book");</xmp></pre></div><br><h3 class="Title8 GTitle3">GListBox.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
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
//===============================================
public void addItem(String text, String key) {
    addItem(text, key, "");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une liste de données sous Android-Émission d'une notification suite à l'appui d'une donnée"><a class="Link9" href="#Créer une liste de données sous Android">Émission d'une notification suite à l'appui d'une donnée</a></h2><br> <h3 class="Title8 GTitle3">GListBox.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une liste de données sous Android-Enregistrement d'un observateur"><a class="Link9" href="#Créer une liste de données sous Android">Enregistrement d'un observateur</a></h2><br><h3 class="Title8 GTitle3">GHome.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">lListBox.addOnItemClick(this);</xmp></pre></div><br><h3 class="Title8 GTitle3">GWidget.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void addOnItemClick(GWidget obj) {
    m_itemMap.add(obj);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une liste de données sous Android-Réception d'une notification suite à l'appui d'une donnée"><a class="Link9" href="#Créer une liste de données sous Android">Réception d'une notification suite à l'appui d'une donnée</a></h2><br><h3 class="Title8 GTitle3">GHome.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void onItemClick() {
    GManager.sGApp lApp = GManager.Instance().getData().app;
    GManager.Instance().setPage(lApp.widget_id);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une liste de données sous Android-Résultat"><a class="Link9" href="#Créer une liste de données sous Android">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_listbox.png" alt="/Tutoriels/Android/img/i_cours_listbox.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>