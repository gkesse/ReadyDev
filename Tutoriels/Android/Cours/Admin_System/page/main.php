<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un système d'administration sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un système d'administration sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_admin_system.png" alt="/Tutoriels/Android/img/b_cours_admin_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un système d'administration sous Android"><a class="Link3" href="#">Créer un système d'administration sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration sous Android-Introduction"><a class="Link9" href="#Créer un système d'administration sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un système d'administration sous Android.<br><br><h2 class="Title7 GTitle2" id="Créer un système d'administration sous Android-Programme principal"><a class="Link9" href="#Créer un système d'administration sous Android">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMainActivity.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMainActivity extends Activity {
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
        lWindow.addItem("home/sqlite", GWidget.Create("sqlite", this), "SQLite");
        lWindow.addItem("home/opencv", GWidget.Create("opencv", this), "OpenCV");
        lWindow.addItem("home/layout", GWidget.Create("layout", this), "Layout");
        
        LinearLayout lMainLayout = new LinearLayout(this);
        lMainLayout.setOrientation(LinearLayout.VERTICAL);       
        lMainLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
        lMainLayout.addView(lTitleBar); lMainLayout.addView(GManager.Instance().spaceV(20));
        lMainLayout.addView(lAddressBar); lMainLayout.addView(GManager.Instance().spaceV(20));
        lMainLayout.addView(lAddressKey); lMainLayout.addView(GManager.Instance().spaceV(20));
        lMainLayout.addView(lWindow); lMainLayout.addView(GManager.Instance().spaceV(20));
        lMainLayout.setPadding(20, 10, 20, 10);

        setContentView(lMainLayout);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration sous Android-Création des pages"><a class="Link9" href="#Créer un système d'administration sous Android">Création des pages</a></h2><br><h3 class="Title8 GTitle3">GWindow.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void addItem(String key, View v, String title, int isDefault) {
    GManager.sGApp lApp = GManager.Instance().getData().app;
    int lIndex = lApp.page_map.count();
    lApp.page_map.addItem(v);
    lApp.page_id.put(key, lIndex);
    lApp.title_map.put(key, title);
    if(isDefault == 1) {GManager.Instance().setPage(key);}
}
//===============================================
public void addItem(String key, View v, String title) {
    addItem(key, v, title, 0);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration sous Android-Empilement des pages"><a class="Link9" href="#Créer un système d'administration sous Android">Empilement des pages</a></h2><br><h3 class="Title8 GTitle3">GStackWidget.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void addItem(View v) {
    addView(v);
    m_widgetMap.put(m_count, v);
    if(m_count != m_currentIndex) {v.setVisibility(View.GONE);}
    m_count++;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration sous Android-Affichage d'une page"><a class="Link9" href="#Créer un système d'administration sous Android">Affichage d'une page</a></h2><br><h3 class="Title8 GTitle3">GStackWidget.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void setCurrentIndex(int index) {
    View lView = m_widgetMap.get(m_currentIndex);
    lView.setVisibility(View.GONE);
    m_currentIndex = index;
    lView = m_widgetMap.get(m_currentIndex);
    lView.setVisibility(View.VISIBLE);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GManager.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration sous Android-Page d'accueil"><a class="Link9" href="#Créer un système d'administration sous Android">Page d'accueil</a></h2><br><h3 class="Title8 GTitle3">GHome.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public GHome(Context context) {
    super(context);
    
    GWidget lListBox = GWidget.Create("listbox", context);
    lListBox.addOnItemClick(this);
    lListBox.addItem("SQLite", "home/sqlite", "database");
    lListBox.addItem("OpenCV", "home/opencv", "camera");
    lListBox.addItem("Layout", "home/layout", "book");
    
    setOrientation(LinearLayout.VERTICAL);       
    setLayoutParams(new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT));
    addView(lListBox);
    setBackgroundColor(Color.TRANSPARENT);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration sous Android-Sélection d'une page"><a class="Link9" href="#Créer un système d'administration sous Android">Sélection d'une page</a></h2><br><h3 class="Title8 GTitle3">GHome.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void onItemClick() {
    GManager.sGApp lApp = GManager.Instance().getData().app;
    GManager.Instance().setPage(lApp.widget_id);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration sous Android-Résultat"><a class="Link9" href="#Créer un système d'administration sous Android">Résultat</a></h2><br><h3 class="Title8 GTitle3">Page d'accueil</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_admin_system.png" alt="/Tutoriels/Android/img/i_cours_admin_system.png"></div><br><h3 class="Title8 GTitle3">Page du module SQLite</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_admin_system_02.png" alt="/Tutoriels/Android/img/i_cours_admin_system_02.png"></div><br><h3 class="Title8 GTitle3">Page du module OpenCV</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_admin_system_03.png" alt="/Tutoriels/Android/img/i_cours_admin_system_03.png"></div><br><h3 class="Title8 GTitle3">Page du module Layout</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_admin_system_04.png" alt="/Tutoriels/Android/img/i_cours_admin_system_04.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>