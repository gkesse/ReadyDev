<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Gérer un bouton avec le 8051</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à gérer un bouton avec le <b>8051</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Un <b>système embarqué</b> est un système électronique et informatique autonome, souvent temps réel, spécialisé dans une tâche précise et dont les ressources sont généralement limitées spatialement (encombrement réduit) et énergétiquement (consommation restreinte).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/b_8051_button.png" alt="/Tutoriels/Embedded_System/img/b_8051_button.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gérer un bouton avec le 8051"><a class="Link3" href="#">Gérer un bouton avec le 8051</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Gérer un bouton avec le 8051-Introduction"><a class="Link9" href="#Gérer un bouton avec le 8051">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de gérer un bouton avec le 8051.<br><br><h2 class="Title7 GTitle2" id="Gérer un bouton avec le 8051-Programme principal"><a class="Link9" href="#Gérer un bouton avec le 8051">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Button() {
    GButton_Init(1, 6);
    GLedButton_Init(1, 7);
    GSch_Add_Task(GButton_Update, 0, 200);
    GSch_Add_Task(GLedButton_Update, 1, 200);
}
//===============================================</xmp></pre></div>&nbsp;<br><h2 class="Title7 GTitle2" id="Gérer un bouton avec le 8051-Initialisation du button"><a class="Link9" href="#Gérer un bouton avec le 8051">Initialisation du button</a></h2><br><h3 class="Title8 GTitle3">GButton.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GButton_Init(uchar port, uchar pin) {
    g_button_port = port;
    g_button_pin = pin;
    g_button_state = 1;
    GPort_Bit_Write(g_button_port, g_button_pin, 1);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un bouton avec le 8051-Mise à jour du bouton"><a class="Link9" href="#Gérer un bouton avec le 8051">Mise à jour du bouton</a></h2><br><h3 class="Title8 GTitle3">GButton.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GButton_Update() {
    GBit l_button_state = GPort_Bit_Read(g_button_port, g_button_pin);
    if(l_button_state == 0) {
        g_button_state = !g_button_state;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un bouton avec le 8051-Lecture de l'état du bouton"><a class="Link9" href="#Gérer un bouton avec le 8051">Lecture de l'état du bouton</a></h2><br><h3 class="Title8 GTitle3">GButton.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GBit GButton_Get_State() {
    return g_button_state;
}
//===============================================</xmp></pre></div>&nbsp;<br><h2 class="Title7 GTitle2" id="Gérer un bouton avec le 8051-Initialisation de la diode LED"><a class="Link9" href="#Gérer un bouton avec le 8051">Initialisation de la diode LED</a></h2><br><h3 class="Title8 GTitle3">GLedButton.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GLedButton_Init(uchar port, uchar pin) {
    g_led_port = port;
    g_led_pin = pin;
    GPort_Bit_Write(g_led_port, g_led_pin, 1);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un bouton avec le 8051-Mise à jour de la diode LED"><a class="Link9" href="#Gérer un bouton avec le 8051">Mise à jour de la diode LED</a></h2><br><h3 class="Title8 GTitle3">GLedButton.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GLedButton_Update() {
    GBit l_led_state = GButton_Get_State();
    GPort_Bit_Write(g_led_port, g_led_pin, l_led_state);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer un bouton avec le 8051-Résultat"><a class="Link9" href="#Gérer un bouton avec le 8051">Résultat</a></h2><br><h3 class="Title8 GTitle3">Allumage de la diode LED<br></h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/i_8051_button.png" alt="/Tutoriels/Embedded_System/img/i_8051_button.png"></div><br><h3 class="Title8 GTitle3">Extinction de la diode LED<br></h3><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/i_8051_button_2.png" alt="/Tutoriels/Embedded_System/img/i_8051_button_2.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Système Embarqué 8051</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1613915522514"><div class="Row26">List 1 &gt; Embedded_System &gt; 8051</div></div><script>loadList1("Loader_1613915522514","Embedded_System","8051");</script></div><br></div></div></div></div><br>