<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre l'électronique<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre l'<b>électronique </b>appliquée aux sciences de l'ingénieur.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br>L'<b>Électronique</b> est une branche de la physique appliquée, utilisant l'électricité comme support pour le traitement, la transmission et le stockage d'informations au sens large (son, image, commande). <br><br><div class="Img3 GImage"><img alt="/Cours/Electronics/img/b_electronics.png" class="lazy" data-src="/Cours/Electronics/img/b_electronics.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Circuit-RC"><a class="Link3" href="#">Circuit RC</a></h1><div class="Body3"><br>Un <b>circuit RC</b> est un circuit électrique, composé d'une résistance et d'un condensateur montés en série ou en parallèle. Dans leur configuration série, les circuits RC permettent de réaliser des filtres électroniques passe-bas ou passe-haut. La constante de temps $\tau$  d'un circuit RC est donnée par le produit de la valeur de ces deux éléments.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Circuit-RC-Etude-d-un-circuit-RC-en-regime-transitoire"><a class="Link9" href="#Circuit-RC">Étude d'un circuit RC en régime transitoire</a></h2><br><h3 class="Title8 GTitle3">Schéma électrique</h3><br><div class="Img3 GImage"><img alt="/Cours/Electronics/img/i_circuit_rc.png" class="lazy" data-src="/Cours/Electronics/img/i_circuit_rc.png"></div><br><h3 class="Title8 GTitle3">Équation différentielle</h3><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
v_R+v_C &amp;=&amp; v_E\\
v_R &amp;=&amp; Ri\\
i &amp;=&amp; C\dfrac{dv_C}{dt}\\
Ri+v_C &amp;=&amp; v_E\\
RC\dfrac{dv_C}{dt}+v_C &amp;=&amp; v_E\\
\tau &amp;=&amp; RC\\
\tau\dfrac{dv_C}{dt}+v_C &amp;=&amp; v_E\\
v_C &amp;=&amp; v_{Ch}+v_{Cp}\\
\tau\dfrac{dv_{Ch}}{dt}+v_{Ch} &amp;=&amp; 0\\
\tau\dfrac{dv_{Ch}}{dt} &amp;=&amp; -v_{Ch}\\
\dfrac{dv_{Ch} }{v_{Ch}} &amp;=&amp; -\dfrac{dt}{\tau}\\
\int \dfrac{dv_{Ch} }{v_{Ch}} &amp;=&amp; -\int \dfrac{dt}{\tau}\\
\ln{v_{Ch}} &amp;=&amp; -\dfrac{t}{\tau} + K\\
\mathrm{e}^{\ln{v_{Ch}}} &amp;=&amp; {\mathrm{e}}^{\left(-\dfrac{t}{\tau} + K\right)}\\
v_{Ch} &amp;=&amp; A\mathrm{e}^{-\dfrac{t}{\tau}}\\
v_{Cp} &amp;=&amp; B\\
v_{C}(t) &amp;=&amp; A\mathrm{e}^{-\dfrac{t}{\tau}}+B\\
v_{C}(t = 0) &amp;=&amp; A+B = 0\\
v_{C}(t = +\infty) &amp;=&amp; B = V_{E}\\
A &amp;=&amp; -B = -V_{E}\\
v_{C}(t) &amp;=&amp; -V_{E}\ \mathrm{e}^{-\dfrac{t}{\tau}}+V_{E}\\
v_{C}(t) &amp;=&amp; V_{E}\left(1-\mathrm{e}^{-\dfrac{t}{\tau}}\right)\\
\end{eqnarray}</div></div><br></div></div></div></div><br>