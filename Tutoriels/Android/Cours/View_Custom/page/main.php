<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une vue personnalisée sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une vue personnalisée sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_view_custom.png" alt="/Tutoriels/Android/img/b_cours_view_custom.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une vue personnalisée sous Android"><a class="Link3" href="#">Créer une vue personnalisée sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une vue personnalisée sous Android-Introduction"><a class="Link9" href="#Créer une vue personnalisée sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une vue personnalisée sous Android.<br><br><h2 class="Title7 GTitle2" id="Créer une vue personnalisée sous Android-Programme principal"><a class="Link9" href="#Créer une vue personnalisée sous Android">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMainActivity.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMainActivity extends Activity implements OnClickListener {
    //===============================================
    private GCustomView m_customView;
    private String m_state = "red";
    //===============================================
    @Override
    protected void onCreate(Bundle savedInstanceState) {      
        super.onCreate(savedInstanceState);

        LinearLayout lMainLayout = new LinearLayout(this);
        lMainLayout.setOrientation(LinearLayout.VERTICAL);
        lMainLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
                                        
        Button lButton = new Button(this);
        lButton.setText("Action");
        lButton.setAllCaps(false);
        lButton.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
        lButton.setOnClickListener(this);

        m_customView = new GCustomView(this);
        
        lMainLayout.addView(lButton);
        lMainLayout.addView(m_customView);

        setContentView(lMainLayout);        
    }
    //===============================================
    @Override
    public void onClick(View v) {
        if(m_state == "red") {
            m_customView.setText("J'active le fond d'écran (Red)");
            m_customView.setBgColor("#501010");
            m_state = "green";
        }
        else if(m_state == "green") {
            m_customView.setText("J'active le fond d'écran (Vert)");
            m_customView.setBgColor("#105010");
            m_state = "blue";
        }
        else if(m_state == "blue") {
            m_customView.setText("J'active le fond d'écran (Bleu)");
            m_customView.setBgColor("#101050");
            m_state = "red";
        }
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une vue personnalisée sous Android-Structure de la vue personnalisée"><a class="Link9" href="#Créer une vue personnalisée sous Android">Structure de la vue personnalisée</a></h2><br><h3 class="Title8 GTitle3">GCustomView.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GCustomView extends View {
    //===============================================
    private Paint m_paint;
    private int m_bgColor;
    private String m_text;
    //===============================================
    public GCustomView(Context context) {
        super(context);
        m_paint = new Paint();
        m_paint.setColor(Color.parseColor("#ffffff"));
        m_paint.setTextSize(30);
        m_bgColor = Color.parseColor("#202020");
        m_text = "Je suis une vue personnalisée";
    }
    //===============================================
    @Override
    protected void onDraw(Canvas canvas) {
        super.onDraw(canvas);
        setBackgroundColor(m_bgColor);
        canvas.drawText(m_text, 50, 50, m_paint);
    }
    //===============================================
    public void setBgColor(String color) {
        m_bgColor = Color.parseColor(color);
        invalidate();
    }
    //===============================================
    public void setText(String text) {
        m_text = text;
        invalidate();
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une vue personnalisée sous Android-Résultat"><a class="Link9" href="#Créer une vue personnalisée sous Android">Résultat</a></h2><br><h3 class="Title8 GTitle3">Au démarrage</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_view_custom.png" alt="/Tutoriels/Android/img/i_cours_view_custom.png"></div><br><h3 class="Title8 GTitle3">Après un clic sur le bouton (Action)</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_view_custom_02.png" alt="/Tutoriels/Android/img/i_cours_view_custom_02.png"></div><br><h3 class="Title8 GTitle3">Après un clic sur le bouton (Action)</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_view_custom_03.png" alt="/Tutoriels/Android/img/i_cours_view_custom_03.png"></div><br><h3 class="Title8 GTitle3">Après un clic sur le bouton (Action)</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_view_custom_04.png" alt="/Tutoriels/Android/img/i_cours_view_custom_04.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>