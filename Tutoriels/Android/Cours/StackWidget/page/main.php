<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une pile de vues sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une pile de vues sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_stackwidget.png" alt="/Tutoriels/Android/img/b_cours_stackwidget.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une pile de vues sous Android"><a class="Link3" href="#">Créer une pile de vues sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une pile de vues sous Android-Introduction"><a class="Link9" href="#Créer une pile de vues sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une pile de vues sous Android (GStackWidget).<br><br><h2 class="Title7 GTitle2" id="Créer une pile de vues sous Android-Structure de la pile de vues"><a class="Link9" href="#Créer une pile de vues sous Android">Structure de la pile de vues</a></h2><br><h3 class="Title8 GTitle3">GStackWidget.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public GStackWidget(Context context) {
    super(context);
    setOrientation(LinearLayout.VERTICAL);       
    setLayoutParams(new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT));
    setBackground(GManager.Instance().bgColor("", 10, 2, "#705050"));
    setPadding(20, 10, 20, 10);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une pile de vues sous Android-Ajout d'une vue"><a class="Link9" href="#Créer une pile de vues sous Android">Ajout d'une vue</a></h2><br><h3 class="Title8 GTitle3">GStackWidget.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void addItem(View v) {
    addView(v);
    m_widgetMap.put(m_count, v);
    if(m_count != m_currentIndex) {v.setVisibility(View.GONE);}
    m_count++;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une pile de vues sous Android-Affichage d'une vue"><a class="Link9" href="#Créer une pile de vues sous Android">Affichage d'une vue</a></h2><br><h3 class="Title8 GTitle3">GStackWidget.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void setCurrentIndex(int index) {
    View lView = m_widgetMap.get(m_currentIndex);
    lView.setVisibility(View.GONE);
    m_currentIndex = index;
    lView = m_widgetMap.get(m_currentIndex);
    lView.setVisibility(View.VISIBLE);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une pile de vues sous Android-Lecture du nombre de vues"><a class="Link9" href="#Créer une pile de vues sous Android">Lecture du nombre de vues</a></h2><br><h3 class="Title8 GTitle3">GStackWidget.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public int count() {
    return m_count;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une pile de vues sous Android-Résultat"><a class="Link9" href="#Créer une pile de vues sous Android">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_stackwidget.png" alt="/Tutoriels/Android/img/i_cours_stackwidget.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>