<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Gérer un afficheur 7-segment avec le 8051</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à gérer un afficheur 7-segment avec le <b>8051</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Un <b>système embarqué</b> est un système électronique et informatique autonome, souvent temps réel, spécialisé dans une tâche précise et dont les ressources sont généralement limitées spatialement (encombrement réduit) et énergétiquement (consommation restreinte).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/b_8051_7segment.png" alt="/Tutoriels/Embedded_System/img/b_8051_7segment.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gérer un afficheur 7-segment avec le 8051"><a class="Link3" href="#">Gérer un afficheur 7-segment avec le 8051</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Gérer un afficheur 7-segment avec le 8051-Introduction"><a class="Link9" href="#Gérer un afficheur 7-segment avec le 8051">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de gérer un afficheur 7-segment avec le 8051.<br><br><h2 class="Title7 GTitle2" id="Gérer un afficheur 7-segment avec le 8051-Programme principal"><a class="Link9" href="#Gérer un afficheur 7-segment avec le 8051">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_7seg() {
    G7seg_Init(3);
    GSch_Add_Task(G7seg_Update, 0, 500);
}
//===============================================</xmp><br></pre><h3 class="Title8 GTitle3">G7seg.c</h3><pre class="Code2"><br></pre><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static GCode g_digit_map[] = {
    //0   1     2     3     4     5     6     7     8     9
    0x40, 0x79, 0x24, 0x30, 0x19, 0x12, 0x02, 0x78, 0x00, 0x10
};
//===============================================</xmp></pre></div><pre class="Code2"><br></pre></div><h2 class="Title7 GTitle2" id="Gérer un afficheur 7-segment avec le 8051-Initialisation de l'afficheur 7segment"><a class="Link9" href="#Gérer un afficheur 7-segment avec le 8051">Initialisation de l'afficheur 7segment</a></h2><br><h3 class="Title8 GTitle3">G7seg.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void G7seg_Init(uchar port) {
    g_7seg_port = port;
    g_digit_count = 0;
    G7seg_Data_Write(0x7F);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un afficheur 7-segment avec le 8051-Mise à jour de l'afficheur 7segment"><a class="Link9" href="#Gérer un afficheur 7-segment avec le 8051">Mise à jour de l'afficheur 7segment</a></h2><br><h3 class="Title8 GTitle3">G7seg.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void G7seg_Update() {
    G7seg_Digit_Write(g_digit_count);
    g_digit_count += 1;
    if(g_digit_count &gt;= g_digit_size) {g_digit_count = 0;}
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un afficheur 7-segment avec le 8051-Écriture d'un chiffre sur l'afficheur 7segment"><a class="Link9" href="#Gérer un afficheur 7-segment avec le 8051">Écriture d'un chiffre sur l'afficheur 7segment</a></h2><br><h3 class="Title8 GTitle3">G7seg.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void G7seg_Data_Write(uchar d) {
    uchar l_mask = 0x80;
    uchar l_data_mask = (~l_mask) & d;
    uchar l_data_port = GPort_Data_Read(g_7seg_port);
    uchar l_port_mask = l_mask & l_data_port;
    uchar l_data = l_data_mask `| l_port_mask;
    GPort_Data_Write(g_7seg_port, l_data);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un afficheur 7-segment avec le 8051-Résultat"><a class="Link9" href="#Gérer un afficheur 7-segment avec le 8051">Résultat</a></h2><br><h3 class="Title8 GTitle3">Schéma électrique</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/i_8051_7segment.png" alt="/Tutoriels/Embedded_System/img/i_8051_7segment.png"></div><br><h3 class="Title8 GTitle3">Digits</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/i_8051_7segment_02.png" alt="/Tutoriels/Embedded_System/img/i_8051_7segment_02.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Système Embarqué 8051</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1613915522514"><div class="Row26">List 1 &gt; Embedded_System &gt; 8051</div></div><script>loadList1("Loader_1613915522514","Embedded_System","8051");</script></div><br></div></div></div></div><br>