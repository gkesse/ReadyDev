<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation web en JavaScript<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation web en <b>JavaScript</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>JavaScript </b>est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web. Avec les technologies HTML et CSS, JavaScript est parfois considéré comme l'une des technologies cœur du World Wide Web. Une grande majorité des sites web l'utilisent, et la majorité des navigateurs web disposent d'un moteur JavaScript dédié pour l'interpréter, indépendamment des considérations de sécurité qui peuvent se poser le cas échéant. C'est un langage orienté objet à prototype : les bases du langage et ses principales interfaces sont fournies par des objets. Cependant, à la différence d'un langage orienté objets, les objets de base ne sont pas des instances de classes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/b_javascript.png" alt="/Tutoriels/Web/JavaScript/img/b_javascript.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de JavaScript.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621915613102"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621915613102");</script></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-programme-de-test"><a class="Link9" href="#Fondamentaux">Créer un programme de test</a></h2><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;button onclick="onClick('red')"&gt;Red&lt;/button&gt;
        &lt;button onclick="onClick('green')"&gt;Green&lt;/button&gt;
        &lt;button onclick="onClick('blue')"&gt;Blue&lt;/button&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p id="msg"&gt;Bonjour tout le monde&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js'&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
function onClick(color) {
    var lMsg = document.getElementById("msg");
    lMsg.style.color = color;
}
//===============================================
onClick("green");
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_javascript_minimal.gif" alt="/Tutoriels/Web/JavaScript/img/i_javascript_minimal.gif"></div><br></div></div></div></div><br>