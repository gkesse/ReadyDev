<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation web avec le HTML</div></a></div></div><div class="Body2 Orange">Le <b>HTML </b>est un langage de programmation web statique.<br>Le but de ce tutoriel est de vous apprendre la programmation web avec le <b>HTML</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la programmation web avec le <span class="GColor1" style="color:lime;">HTML</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- WampServer, comme serveur web.<br>- Firefox, comme navigateur web.<br>- Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Installer WampServer<br></h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.wampserver.com/">http://www.wampserver.com/</a><br><br><h3 class="Title8 GTitle3">Installer Firefox</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.mozilla.org/fr/firefox/new/">https://www.mozilla.org/fr/firefox/new/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface Web"><a class="Link3" href="#">Interface Web</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer une <span class="GColor1" style="color:lime;">Interface Web </span>avec le HTML.<br>Produit par <b>Gérard KESSE</b>.<br><br>L'Interface Web (Web Design) proposée ici est dotée de:<br>- Entête de page (HEADER).<br>- Corps de page (BODY).<br>- Pied de page (FOOTER).<br><br>L'entête de page (HEADER) est décomposée en:<br>- Bannière publicitaire (BANNER)<br>- Barre de navigation (MENU).<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1555152060381"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1555152060381");</script></div><br><h2 class="Title7 GTitle2" id="Interface Web-Résultat"><a class="Link9" href="#Interface Web">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Interface_Web.png" alt="img/Interface_Web.png"></div><br><h2 class="Title7 GTitle2" id="Interface Web-Bannière publicitaire"><a class="Link9" href="#Interface Web">Bannière publicitaire</a></h2><br><h3 class="Title8 GTitle3">Bannière publicitaire (Couleur de fond)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="html">&lt;div style="
    background-color: #633363;
    position: absolute;
    min-height: 150px;
    top: 0px;
    left: 0px;
    right: 0px;
    z-index: -1;
    border: 5px solid #AAAAAA;
"&gt;&lt;/div&gt;</xmp><br></pre></div><h3 class="Title8 GTitle3">Bannière publicitaire (Contenu)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="html">&lt;div style="
    position: absolute;
    top: 60px;
    left: 0px;
    right: 0px;
    z-index: 1;
    border: 5px solid transparent;
"&gt;BANNER&lt;/div&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Web-Barre de navigation"><a class="Link9" href="#Interface Web">Barre de navigation</a></h2><br><h3 class="Title8 GTitle3">Barre de navigation (Couleur de fond et Contenu)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="html">&lt;div style="
    position: relative;
    background-color: #333333;
    min-height: 50px;
"&gt;
    &lt;div style="
        position: absolute;
        top: 12px;
        left: 0px;
        right: 0px;
        z-index: 1;
        border: 5px solid transparent;
    "&gt;MENU&lt;/div&gt;
&lt;/div&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Web-Corps de page"><a class="Link9" href="#Interface Web">Corps de page</a></h2><br><h3 class="Title8 GTitle3">Corps de page (Couleur de fond et Contenu)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="html">&lt;div style="
    position: relative;
    background-color: #336363;
    min-height: 350px;
"&gt;
    &lt;div style="
        position: absolute;
        top: 120px;
        left: 0px;
        right: 0px;
        z-index: 1;
        border: 5px solid transparent;
    "&gt;BODY&lt;/div&gt;
&lt;/div&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Web-Pied de page"><a class="Link9" href="#Interface Web">Pied de page</a></h2><br><h3 class="Title8 GTitle3">Pied de page (Couleur de fond)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="html">&lt;div style="
    background-color: #636333;
    position: absolute;
    min-height: 150px;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: -1;
    border: 5px solid #AAAAAA;
"&gt;&lt;/div&gt;</xmp></pre></div><br><h3 class="Title8 GTitle3">Pied de page (Contenu)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="html">&lt;div style="
    position: absolute;
    bottom: 60px;
    left: 0px;
    right: 0px;
    z-index: 1;
    border: 5px solid transparent;
"&gt;FOOTER&lt;/div&gt;</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Compte utilisateur"><a class="Link3" href="#">Compte utilisateur</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer un <b>Compte utilisateur </b>avec le HTML.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1555318295360"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1555318295360");</script></div><br><h2 class="Title7 GTitle2" id="Compte utilisateur-Résultat"><a class="Link9" href="#Compte utilisateur">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Compte_Utilisateur.png" alt="img/Compte_Utilisateur.png"></div><br></div></div></div></div><br>