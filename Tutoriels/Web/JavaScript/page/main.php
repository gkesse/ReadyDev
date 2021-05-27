<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation web en JavaScript<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation web en <b>JavaScript</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>JavaScript </b>est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web. Avec les technologies HTML et CSS, JavaScript est parfois considéré comme l'une des technologies cœur du World Wide Web. Une grande majorité des sites web l'utilisent, et la majorité des navigateurs web disposent d'un moteur JavaScript dédié pour l'interpréter, indépendamment des considérations de sécurité qui peuvent se poser le cas échéant. C'est un langage orienté objet à prototype : les bases du langage et ses principales interfaces sont fournies par des objets. Cependant, à la différence d'un langage orienté objets, les objets de base ne sont pas des instances de classes. <br><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/JavaScript/img/b_javascript.png" class="lazy" data-src="/Tutoriels/Web/JavaScript/img/b_javascript.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de JavaScript.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621915613102"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621915613102");</script></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-script-de-test"><a class="Link9" href="#Fondamentaux">Créer un script de test</a></h2><br>Le <b>script </b>est récupéré et exécuté immédiatement, avant que le navigateur ne poursuive l'analyse de la page. C'est pourquoi, dans la pratique, il est communément admis de placer, dans la mesure du possible, les balises &lt;script&gt; à la fin du document juste avant la fermeture de &lt;/body&gt;.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
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
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/JavaScript/img/i_javascript_minimal.gif" class="lazy" data-src="/Tutoriels/Web/JavaScript/img/i_javascript_minimal.gif"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-script-avec-l-attribut-async"><a class="Link9" href="#Fondamentaux">Créer un script avec l'attribut async</a></h2><br>L'attribut <b>async </b>est un attribut booléen. Lorsqu'il est présent, il spécifie que le script sera exécuté de manière asynchrone avec le reste de la page (le script sera exécuté pendant que la page continue l'analyse). L'ordre d'exécution des scripts n'est pas préservé, il est indépendant de leur apparition dans le code source HTML. Il est uniquement destiné aux scripts externes (et ne doit être utilisé que si l'attribut src est présent). Il permet d'optimiser les performances du site web en augmentant la vitesse de chargement du contenu observable et des ressources.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;button onclick="onClick('red')"&gt;Red&lt;/button&gt;
        &lt;button onclick="onClick('green')"&gt;Green&lt;/button&gt;
        &lt;button onclick="onClick('blue')"&gt;Blue&lt;/button&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p id="msg"&gt;Bonjour tout le monde&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
function onClick(color) {
    var lMsg = document.getElementById("msg");
    lMsg.style.color = color;
}
//===============================================
onClick("green");
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/JavaScript/img/i_javascript_async.gif" class="lazy" data-src="/Tutoriels/Web/JavaScript/img/i_javascript_async.gif"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-script-avec-l-attribut-defer"><a class="Link9" href="#Fondamentaux">Créer un script avec l'attribut defer</a></h2><br>L'attribut <b>defer </b>est un attribut booléen. Lorsqu'il est présent, il spécifie que le script est exécuté lorsque la page a terminé l'analyse. L'ordre d'exécution des scripts est préservé, en fonction de leur apparition dans le code source HTML. Il est uniquement destiné aux scripts externes (et ne doit être utilisé que si l'attribut src est présent). Il permet d'optimiser les performances du site web en augmentant la vitesse de chargement du contenu observable.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' defer&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;button onclick="onClick('red')"&gt;Red&lt;/button&gt;
        &lt;button onclick="onClick('green')"&gt;Green&lt;/button&gt;
        &lt;button onclick="onClick('blue')"&gt;Blue&lt;/button&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p id="msg"&gt;Bonjour tout le monde&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
function onClick(color) {
    var lMsg = document.getElementById("msg");
    lMsg.style.color = color;
}
//===============================================
onClick("green");
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/JavaScript/img/i_javascript_defer.gif" class="lazy entered loaded" data-src="/Tutoriels/Web/JavaScript/img/i_javascript_defer.gif" data-ll-status="loaded" src="/Tutoriels/Web/JavaScript/img/i_javascript_defer.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Timers"><a class="Link3" href="#">Timers</a></h1><div class="Body3"><br>L'obje <span class="GCode3"><code style="color:#cccccc;">window</code></span> permet l'exécution de code à des <b>intervalles de temps</b> spécifiés. Ces intervalles de temps sont appelés événements de chronométrage.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1622129349360"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1622129349360");</script></div><br><h2 class="Title7 GTitle2" id="Timers-Creer-un-timer-avec-setInterval"><a class="Link9" href="#Timers">Créer un timer avec setInterval</a></h2><br>La méthode <b>setInterval </b>répète une fonction donnée à chaque intervalle de temps donné.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;button onclick="onClick('start')"&gt;Start&lt;/button&gt;
        &lt;button onclick="onClick('stop')"&gt;Stop&lt;/button&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p id="count" class="msg"&gt;0&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
var gTimer = null;
//===============================================
function onTimer() {
    var lCountId = document.getElementById("count");
    var lCount = parseInt(lCountId.innerText);
    lCount += 1;
    lCountId.innerText = lCount;
}
//===============================================
function onClick(key) {
    if(key == "start") {gTimer = setInterval(onTimer, 1000);}
    else if(key == "stop") {clearInterval(gTimer);}
}
//===============================================
function main() {
    onClick("stop");
}
//===============================================
main();
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_javascript_setinterval.gif" alt="/Tutoriels/Web/JavaScript/img/i_javascript_setinterval.gif"></div><br><h2 class="Title7 GTitle2" id="Timers-Creer-un-timer-avec-setTimeout"><a class="Link9" href="#Timers">Créer un timer avec setTimeout</a></h2><br>La méthode <b>setTimeout </b>exécute une seule fois une fonction donnée après avoir attendue un nombre spécifié de millisecondes.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;button onclick="onClick('start')"&gt;Start&lt;/button&gt;
        &lt;button onclick="onClick('stop')"&gt;Stop&lt;/button&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p id="count" class="msg"&gt;0&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
var gContinue = true;
//===============================================
function onTimer() {
    var lCountId = document.getElementById("count");
    var lCount = parseInt(lCountId.innerText);
    lCount += 1;
    lCountId.innerText = lCount;
    if(gContinue) {setTimeout(onTimer, 1000);}
}
//===============================================
function onClick(key) {
    if(key == "start") {gContinue = true; setTimeout(onTimer, 1000);}
    else if(key == "stop") {gContinue = false;}
}
//===============================================
function main() {
    onClick("stop");
}
//===============================================
main();
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_javascript_settimeout.gif" alt="/Tutoriels/Web/JavaScript/img/i_javascript_settimeout.gif"></div><br></div></div></div></div><br>