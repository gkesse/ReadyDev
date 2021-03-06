<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Pont diviseur de tension</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre le pont diviseur de tension en <b>Électronique</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">L'<b>Électronique </b>est une branche de la physique appliquée, utilisant l'électricité comme support pour le traitement, la transmission et le stockage d'informations au sens large (son, image, commande).<br><br><div class="Img3 GImage"><img src="/data/img/defaults/banner_electronics_voltage_divider.png" alt="/data/img/defaults/banner_electronics_voltage_divider.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Pont diviseur de tension"><a class="Link3" href="#">Pont diviseur de tension</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1598441695432"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1598441695432");</script></div><br><h2 class="Title7 GTitle2" id="Pont diviseur de tension-Utilité"><a class="Link9" href="#Pont diviseur de tension">Utilité</a></h2><br>$\checkmark$ Obtenir une tension proportionnelle à une tension d'entrée<br><br><h2 class="Title7 GTitle2" id="Pont diviseur de tension-Schéma électrique"><a class="Link9" href="#Pont diviseur de tension">Schéma électrique</a></h2><br><br><div class="Img3 GImage"><img src="/Cours/Electronics/img/voltage_divider.png" alt="/Cours/Electronics/img/voltage_divider.png"></div><br><h2 class="Title7 GTitle2" id="Pont diviseur de tension-Relation"><a class="Link9" href="#Pont diviseur de tension">Relation</a></h2><br>Soit $i$, le courant parcourant les résistances $R_1$ et $R_2$.<br><br>Loi d'ohm :<br><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
v_2 &amp;=&amp; R_2i\\
\end{eqnarray}</div></div><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
v_E &amp;=&amp; (R_1+R_2)i\\
\end{eqnarray}</div></div><br>On a :<br><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
\frac{v_2}{v_E} &amp;=&amp; \frac{R_2i}{(R_1+R_2)i}
\end{eqnarray}</div></div><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
\frac{v_2}{v_E} &amp;=&amp; \frac{R_2}{R_1+R_2}
\end{eqnarray}</div></div><br><div class="Formula GFormula1"><div class="Formula5">\begin{eqnarray} 
v_2 &amp;=&amp; \frac{R_2}{R_1+R_2}v_E
\end{eqnarray}</div></div><br>Posons :<br><br><div class="Formula GFormula1"><div class="Formula2">$$\left \{
\begin{array}{r c l}
R_1 &amp; = &amp; kR \\
R_2 &amp; = &amp; R
\end{array}
\right .$$</div></div><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
v_2 &amp;=&amp; \frac{R}{kR+R}v_E 
\end{eqnarray}</div></div><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
v_2 &amp;=&amp; \frac{R}{(k+1)R}v_E 
\end{eqnarray}</div></div><br><div class="Formula GFormula1"><div class="Formula5">\begin{eqnarray} 
v_2 &amp;=&amp; \frac{1}{1+k}v_E 
\end{eqnarray}</div></div><br></div></div></div></div><br>