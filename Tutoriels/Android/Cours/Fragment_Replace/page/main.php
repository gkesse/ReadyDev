<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Remplacer un fragment sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à remplacer un fragment sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_fragment_replace.png" alt="/Tutoriels/Android/img/b_cours_fragment_replace.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Remplacer un fragment sous Android"><a class="Link3" href="#">Remplacer un fragment sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Remplacer un fragment sous Android-Introduction"><a class="Link9" href="#Remplacer un fragment sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de remplacer un fragment sous Android.<br><br><h2 class="Title7 GTitle2" id="Remplacer un fragment sous Android-Programme principal"><a class="Link9" href="#Remplacer un fragment sous Android">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMainActivity.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMainActivity extends Activity implements OnClickListener {
    //===============================================
    private int m_fragmentFlag = 1;
    private LinearLayout m_fragmentLayout;
    private Button m_fragmentButton;
    //===============================================
    @Override
    protected void onCreate(Bundle savedInstanceState) {      
        super.onCreate(savedInstanceState);

        LinearLayout lMainLayout = new LinearLayout(this);
        lMainLayout.setOrientation(LinearLayout.VERTICAL);
        lMainLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
                        
        TextView lTextView = new TextView(this);
        lTextView.setText("Je suis l'activié principale");
                
        m_fragmentLayout = new LinearLayout(this);
        m_fragmentLayout.setOrientation(LinearLayout.VERTICAL);
        m_fragmentLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
        m_fragmentLayout.setId(View.generateViewId());
                
        m_fragmentButton = new Button(this);
        m_fragmentButton.setAllCaps(false);
        m_fragmentButton.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
        m_fragmentButton.setOnClickListener(this);

        lMainLayout.addView(lTextView);
        lMainLayout.addView(m_fragmentLayout);
        lMainLayout.addView(m_fragmentButton);

        setContentView(lMainLayout);        

        updateFragment();
    }
    //===============================================
    @Override
    public void onClick(View v) {
        updateFragment();
    }
    //===============================================
    public void updateFragment() {
        if (m_fragmentFlag == 1) {
            getFragmentManager().beginTransaction().replace(m_fragmentLayout.getId(), new GFragment()).commit();
            m_fragmentButton.setText("Fragment secondaire");
            m_fragmentFlag = 2;
        } else {
            getFragmentManager().beginTransaction().replace(m_fragmentLayout.getId(), new GSecondFragment()).commit();
            m_fragmentButton.setText("Fragment primaire");
            m_fragmentFlag = 1;
        }
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Remplacer un fragment sous Android-Structure du fragment primaire"><a class="Link9" href="#Remplacer un fragment sous Android">Structure du fragment primaire</a></h2><br><h3 class="Title8 GTitle3">GFragment.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GFragment extends Fragment {
    //===============================================
    private LinearLayout lFragLayout;
    //===============================================
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        LinearLayout lMainLayout = new LinearLayout(getActivity());
        lMainLayout.setOrientation(LinearLayout.VERTICAL);
        lMainLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));

        TextView lTextView = new TextView(getActivity());
        lTextView.setText("Je suis le fragment primaire");
                
        lMainLayout.addView(lTextView);

        return lMainLayout;
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Remplacer un fragment sous Android-Structure du fragment secondaire"><a class="Link9" href="#Remplacer un fragment sous Android">Structure du fragment secondaire</a></h2><br><h3 class="Title8 GTitle3">GSecondFragment.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GSecondFragment extends Fragment {
    //===============================================
    private LinearLayout lFragLayout;
    //===============================================
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        LinearLayout lMainLayout = new LinearLayout(getActivity());
        lMainLayout.setOrientation(LinearLayout.VERTICAL);
        lMainLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));

        TextView lTextView = new TextView(getActivity());
        lTextView.setText("Je suis le fragment secondaire");
                
        lMainLayout.addView(lTextView);

        return lMainLayout;
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Remplacer un fragment sous Android-Résultat"><a class="Link9" href="#Remplacer un fragment sous Android">Résultat</a></h2><br><h3 class="Title8 GTitle3">Au démarrage</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_fragment_replace.png" alt="/Tutoriels/Android/img/i_cours_fragment_replace.png"></div><br><h3 class="Title8 GTitle3">Après un clic sur le bouton (Fragment secondaire)</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_fragment_replace_02.png" alt="/Tutoriels/Android/img/i_cours_fragment_replace_02.png"></div><br><h3 class="Title8 GTitle3">Après un clic sur le bouton (Fragment primaire)</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_fragment_replace.png" alt="/Tutoriels/Android/img/i_cours_fragment_replace.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>