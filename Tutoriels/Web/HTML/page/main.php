<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation web en HTML<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation web en <b>HTML</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>HTML </b>permet de créer des pages web statiques. <b>CSS </b>permet de faire la mise en forme des pages web. <b>JS </b>permet de créer des pages web dynamiques côté client. Les attributs de données (<b>dataset</b>) permettent des informations supplémentaires sur une balise.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/HTML/img/b_html.png" class="lazy entered loaded" data-src="/Tutoriels/Web/HTML/img/b_html.png" data-ll-status="loaded" src="/Tutoriels/Web/HTML/img/b_html.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de l'HTML.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621916381426"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621916381426");</script></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-programme-minimal"><a class="Link9" href="#Fondamentaux">Créer un programme minimal</a></h2><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p&gt;Bonjour tout le monde&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/HTML/img/i_html_minimal.png" class="lazy entered loaded" data-src="/Tutoriels/Web/HTML/img/i_html_minimal.png" data-ll-status="loaded" src="/Tutoriels/Web/HTML/img/i_html_minimal.png"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-element-xmp"><a class="Link9" href="#Fondamentaux">Créer un élément xmp</a></h2><br>L'élément HTML &lt;<b>xmp</b>&gt; (pour example) affiche le texte entre les balises d'ouverture et de fermeture sans interpréter le HTML qu'il contient et en utilisant une police à chasse fixe. La spécification HTML 2 recommande un affichage suffisamment large pour contenir 80 caractères par ligne.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;xmp&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p&gt;Bonjour tout le monde&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;
        &lt;/xmp&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/HTML/img/i_html_xmp.png" class="lazy entered loaded" data-src="/Tutoriels/Web/HTML/img/i_html_xmp.png" data-ll-status="loaded" src="/Tutoriels/Web/HTML/img/i_html_xmp.png"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-element-pre"><a class="Link9" href="#Fondamentaux">Créer un élément pre</a></h2><br>L'élément HTML &lt;<b>pre</b>&gt; représente du texte préformaté, généralement écrit avec une police à chasse fixe. Le texte est affiché tel quel, les espaces utilisés dans le document HTML seront retranscrits. Il est nécessaire d'échapper les caractères '&lt;' en &amp;lt; afin de s'assurer que le code écrit entre les éléments ne soit pas interprété de façon involontaire.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;pre&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p&gt;Bonjour tout le monde&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;
        &lt;/pre&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/HTML/img/i_html_pre.png" class="lazy entered loaded" data-src="/Tutoriels/Web/HTML/img/i_html_pre.png" data-ll-status="loaded" src="/Tutoriels/Web/HTML/img/i_html_pre.png"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-element-code"><a class="Link9" href="#Fondamentaux">Créer un élément code</a></h2><br>L'élément HTML &lt;<b>code</b>&gt; représente un fragment de code machine. Par défaut, l'agent utilisateur utilise une police à chasse fixe (monospace) afin d'afficher le texte contenu dans cet élément.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        Calcul de la factorielle de &lt;code&gt;n&lt;/code&gt;.&lt;br&gt;
        Soit &lt;code&gt;f(x)&lt;/code&gt; ma fonction factorielle.&lt;br&gt;
        On a : &lt;code&gt;f(n) = n x f(n - 1)&lt;/code&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/HTML/img/i_html_code.png" class="lazy entered loaded" data-src="/Tutoriels/Web/HTML/img/i_html_code.png" data-ll-status="loaded" src="/Tutoriels/Web/HTML/img/i_html_code.png"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-element-samp"><a class="Link9" href="#Fondamentaux">Créer un élément samp</a></h2><br>L'élément HTML &lt;<b>samp</b>&gt; est un élément qui permet de représenter un résultat produit par un programme informatique. Il est généralement affiché avec la police à chasse fixe du navigateur (par exemple en Courier ou en Lucida Console).<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        Calcul de la factorielle de &lt;samp&gt;n&lt;/samp&gt;.&lt;br&gt;
        Soit &lt;samp&gt;f(x)&lt;/samp&gt; ma fonction factorielle.&lt;br&gt;
        On a : &lt;samp&gt;f(n) = n x f(n - 1)&lt;/samp&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><h2 class="Title7 GTitle2" id="Fondamentaux-Convertir-un-caractere-en-code-HTML"><a class="Link9" href="#Fondamentaux">Convertir un caractère en code HTML</a></h2><br>Tous les codes de caractères HTML des polices de texte et des symboles de <b>&amp;#0;</b> à <b>&amp;#65535;</b>.<br>Cliquez sur le caractère pour obtenir le code HTML.<br><br><h3 class="Title8 GTitle3">Accéder à l'interface web</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.rapidtables.com/web/html/html-codes.html">https://www.rapidtables.com/web/html/html-codes.html</a><br><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/HTML/img/i_html_code_html.png" class="lazy entered loaded" data-src="/Tutoriels/Web/HTML/img/i_html_code_html.png" data-ll-status="loaded" src="/Tutoriels/Web/HTML/img/i_html_code_html.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interfaces-utilisateurs"><a class="Link3" href="#">Interfaces utilisateurs</a></h1><div class="Body3"><br>Les interfaces utilisateurs permettent à un utilisateur d’interagir avec l'application.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Interfaces-utilisateurs-Gestion-d-un-bouton-poussoir"><a class="Link9" href="#Interfaces-utilisateurs">Gestion d'un bouton poussoir</a></h2><br>Un <b>bouton poussoir</b> permet de générer une action à partir d'un clic.<br><br><div class="Content0 GSummary3"><div class="Row26">Summary 3</div></div><br><div class="Img3 GImage"><img src="/Tutoriels/Web/HTML/img/i_ui_pushbutton_demo.gif" alt="/Tutoriels/Web/HTML/img/i_ui_pushbutton_demo.gif"></div><br><h3 class="GTitle3" id="Interfaces-utilisateurs-Gestion-d-un-bouton-poussoir-Creation-de-l-interface"><a class="Title8" href="#Interfaces-utilisateurs-Gestion-d-un-bouton-poussoir">Création de l'interface</a></h3><br>Programme principal (html)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!-- ============================================ --&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp-HTML&lt;/title&gt;
        &lt;meta charset="UTF-8"/&gt;
        &lt;script src="js/script.js"&gt;&lt;/script&gt;
        &lt;link rel="stylesheet" href="css/styles.css"&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="box"&gt;
            &lt;button class="button"
            onclick="onAction(this)"&gt;Action&lt;/button&gt;
        &lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="box"&gt;
            &lt;div class="message"&gt;Bonjour tout le monde&lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;
&lt;!-- ============================================ --&gt;</pre></div></div><br>Mise en forme du corps de la page (css)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="css">/* ============================================== */
body {
    background-color: #222222;
    color: white;
    font-family: arial;
    font-size: 16px;
}
/* ============================================== */</pre></div></div><br>Mise en forme du bouton (css)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="css">/* ============================================== */
button {
    background-color: #2e4053;
    color: white;
    font-family: arial;
    font-size: 16px;
    border: none;
    border-radius: 10px;
    padding: 10px;
    cursor: pointer;
}
/* ============================================== */
button:hover {
    background-color: gray;
}
/* ============================================== */
button:active {
    background-color: #2e4053;
}
/* ============================================== */</pre></div></div><br>Mise en forme de la boîte de message (css)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="css">/* ============================================== */
.message {
    background-color: #2e4053;
    padding: 10px;   
    border-radius: 10px;
    min-height: 200px;
    max-width: 500px;
}
/* ============================================== */</pre></div></div><br><div class="Img3 GImage"><img src="/Tutoriels/Web/HTML/img/i_ui_pushbutton.png" alt="/Tutoriels/Web/HTML/img/i_ui_pushbutton.png"></div><br><h3 class="GTitle3" id="Interfaces-utilisateurs-Gestion-d-un-bouton-poussoir-Gestion-de-l-appui-sur-le-bouton"><a class="Title8" href="#Interfaces-utilisateurs-Gestion-d-un-bouton-poussoir">Gestion de l'appui sur le bouton</a></h3><br>Programme principal (html)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!-- ============================================ --&gt;
&lt;div class="box"&gt;
    &lt;button class="button"
    onclick="onAction(this)"&gt;Action&lt;/button&gt;
&lt;/div&gt;
&lt;!-- ============================================ --&gt;</pre></div></div><br>Gestion de l'appui sur le bouton (js)<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
function onAction(obj) {
    var lMessage = document.getElementsByClassName("message")[0];
    var lHtml = "\
    &lt;div&gt;Le bouton (Action) a été appuyé&lt;/div&gt;\
    ";
    lMessage.innerHTML += lHtml;
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img src="/Tutoriels/Web/HTML/img/i_ui_pushbutton_onclick.png" alt="/Tutoriels/Web/HTML/img/i_ui_pushbutton_onclick.png"></div><br></div></div></div></div><br>