<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un fragment sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un fragment sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile. Il avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les ChromeBook (Chrome OS qui utilise les applications Android) et les SmartWatch (Wear OS).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_fragment.png" alt="/Tutoriels/Android/img/b_cours_fragment.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un fragment sous Android"><a class="Link3" href="#">Créer un fragment sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un fragment sous Android-Introduction"><a class="Link9" href="#Créer un fragment sous Android">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un fragment sous Android.<br><br><h2 class="Title7 GTitle2" id="Créer un fragment sous Android-Programme principal"><a class="Link9" href="#Créer un fragment sous Android">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMainActivity.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMainActivity extends Activity {
    //===============================================
    @Override
    protected void onCreate(Bundle savedInstanceState) {      
        super.onCreate(savedInstanceState);

        LinearLayout lMainLayout = new LinearLayout(this);
        lMainLayout.setOrientation(LinearLayout.VERTICAL);
        lMainLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
                        
        TextView lTextView = new TextView(this);
        lTextView.setText("Je suis l'activié principale");
        
        GFragment lFragment = new GFragment();
        LinearLayout lFragLayout = new LinearLayout(this);
        lFragLayout.setOrientation(LinearLayout.VERTICAL);
        lFragLayout.setLayoutParams(new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT));
        lFragLayout.setId(View.generateViewId());
        getFragmentManager().beginTransaction().add(lFragLayout.getId(), lFragment).commit();
                
        lMainLayout.addView(lTextView);
        lMainLayout.addView(lFragLayout);

        setContentView(lMainLayout);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un fragment sous Android-Structure du fragment"><a class="Link9" href="#Créer un fragment sous Android">Structure du fragment</a></h2><br><h3 class="Title8 GTitle3">GFragment.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
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
        lTextView.setText("Je suis un fragment");
                
        lMainLayout.addView(lTextView);

        return lMainLayout;
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un fragment sous Android-Résultat"><a class="Link9" href="#Créer un fragment sous Android">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_fragment.png" alt="/Tutoriels/Android/img/i_cours_fragment.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>