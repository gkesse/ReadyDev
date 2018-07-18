<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Mathématiques</div></a></div></div><div class="Body2 Orange">Les <b>Mathématiques </b>sont un ensemble de connaissances abstraites résultant de raisonnements logiques.<br>Le but de ce cours est de vous apprendre les <b>Mathématiques</b> appliquées aux sciences de l'ingénieur.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1530820262574"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1530820262574");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Période, Fréquence, Pulsation"><a class="Link3" href="#">Période, Fréquence, Pulsation</a></h1><div class="Body3">Le but de cette section est de vous apprendre à exprimer les relations entre <span class="GColor1" style="color:lime;">la période, la fréquence et la pulsation</span> d'un signal.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Schéma explicatif</h3><div class="Img3"><img src="img/Frequence.png" alt="img/Frequence.png"></div><br><div class="Formula GFormula1"><div class="Formula2">$T\rightarrow$ période du signal $(s)$<br>
$f\rightarrow$ fréquence du signal $(Hz)$<br>
$\omega\rightarrow$ pulsation du signal $(rad.s^{-1})$<br>
</div></div><br><h3 class="Title8 GTitle3">Période</h3><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
T &amp;=&amp; \frac{1}{f}
\end{eqnarray}
</div></div><br><h3 class="Title8 GTitle3">Fréquence</h3><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
f &amp;=&amp; \frac{1}{T}
\end{eqnarray}
</div></div><br><h3 class="Title8 GTitle3">Pulsation</h3><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray} 
\omega &amp;=&amp; 2\pi f\\\\
\omega &amp;=&amp; \frac{2\pi}{T}\\\\
\omega T &amp;=&amp; 2\pi
\end{eqnarray}
</div></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Déphasage angulaire"><a class="Link3" href="#">Déphasage angulaire</a></h1><div class="Body3">Le but de cette section est de vous apprendre à calculer le <span class="GColor1" style="color:lime;">déphasage angulaire</span> entre deux signaux.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Schéma explicatif</h3><div class="Img3"><img src="img/Dephasage.png" alt="img/Dephasage.png"></div><br><div class="Formula GFormula1"><div class="Formula2">$T\rightarrow$ période du signal $(s)$<br>
$\Delta t\rightarrow$ décalage horaire $(s)$<br>
$\Delta\phi\rightarrow$ décalage angulaire $(rad)$<br>
</div></div><br><h3 class="Title8 GTitle3">Déphasage angulaire</h3><div class="Formula GFormula1"><div class="Formula2">$$\left \{
\begin{array}{r c l}
T &amp;\rightarrow&amp; 2\pi\\
\Delta t &amp;\rightarrow&amp; \Delta\phi
\end{array}
\right.$$
</div></div><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
\frac{\Delta\phi}{2\pi} &amp;=&amp; \frac{\Delta t}{T}
\end{eqnarray}
</div></div><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
{\Delta\phi} &amp;=&amp; \frac{\Delta t}{T}2\pi
\end{eqnarray}
</div></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Valeur moyenne"><a class="Link3" href="#">Valeur moyenne</a></h1><div class="Body3">Le but de cette section est de vous apprendre à calculer la <span class="GColor1" style="color:lime;">valeur moyenne</span> d'un signal.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1531686129634"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1531686129634");</script></div><br><h2 class="Title7 GTitle2" id="Valeur moyenne-Définition"><a class="Link9" href="#Valeur moyenne">Définition</a></h2><br><div class="Formula GFormula1"><div class="Formula2">$$\langle v \rangle=\frac{1}{T}\int_{0}^{T} v(t)\ dt$$</div></div><br><h2 class="Title7 GTitle2" id="Valeur moyenne-Signal rectangulaire"><a class="Link9" href="#Valeur moyenne">Signal rectangulaire</a></h2><br><h3 class="Title8 GTitle3">Forme d'onde<br></h3><div class="Img3"><img src="img/Signal_Carre.png" alt="img/Signal_Carre.png"></div><br><h3 class="Title8 GTitle3">Expression</h3><div class="Formula GFormula1"><div class="Formula2">$$\left \{\begin{array}{r c l}v(t) &amp;=&amp; E\ ;\ \forall\ t\in\ [0\ ;\ \alpha T]\\v(t) &amp;=&amp; 0\ ;\ \forall\ t\in\ [\alpha T\ ;\ T]\end{array}\right.$$</div></div><br><h3 class="Title8 GTitle3">Valeur moyenne</h3><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
\langle v \rangle &amp;=&amp; \frac{1}{T}\int_{0}^{T} v(t)\ dt\\\\
\langle v \rangle &amp;=&amp; \frac{1}{T}\int_{0}^{\alpha T} E\ dt\\\\
\langle v \rangle &amp;=&amp; \frac{E}{T}[t]_{0}^{\alpha T}\\\\
\langle v \rangle &amp;=&amp; \frac{E}{T}\alpha T
\end{eqnarray}</div></div><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
\langle v \rangle &amp;=&amp; \alpha E
\end{eqnarray}</div></div><br><h3 class="Title8 GTitle3">Signal carré</h3><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
\langle v \rangle &amp;=&amp; \alpha E\ ;\ \alpha &amp;=&amp; \frac{1}{2}
\end{eqnarray}</div></div><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
\langle v \rangle &amp;=&amp; \frac{E}{2}
\end{eqnarray}</div></div><br><h2 class="Title7 GTitle2" id="Valeur moyenne-Signal triangulaire"><a class="Link9" href="#Valeur moyenne">Signal triangulaire</a></h2><br><h3 class="Title8 GTitle3">Forme d'onde</h3><div class="Img3"><img src="img/Signal_Triangle.png" alt="img/Signal_Triangle.png"></div><br><h2 class="Title7 GTitle2" id="Valeur moyenne-Signal en dent de scie"><a class="Link9" href="#Valeur moyenne">Signal en dent de scie</a></h2><br><h3 class="Title8 GTitle3">Forme d'onde</h3><div class="Img3"><img src="img/Signal_Dent_Scie.png" alt="img/Signal_Dent_Scie.png"></div><br><h2 class="Title7 GTitle2" id="Valeur moyenne-Signal sinusoïdal"><a class="Link9" href="#Valeur moyenne">Signal sinusoïdal</a></h2><br><h3 class="Title8 GTitle3">Forme d'onde</h3><div class="Img3"><img src="img/Signal_Sinus.png" alt="img/Signal_Sinus.png"></div><br><h3 class="Title8 GTitle3">Expression</h3><div class="Formula GFormula1"><div class="Formula2">$$v(t)=V_{max}\sin{\omega t}\ ;\ \forall\ t\ \in\ [0\ ;\ T]$$</div></div><br><h3 class="Title8 GTitle3">Valeur moyenne</h3><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
\langle v \rangle &amp;=&amp; \frac{1}{T}\int_{0}^{T} v(t)\ dt\\\\
\langle v \rangle &amp;=&amp; \frac{1}{T}\int_{0}^{T} V_{max}\sin{\omega t}\ dt\\\\
\langle v \rangle &amp;=&amp; \frac{V_{max}}{T}\int_{0}^{T} \sin{\omega t}\ dt\\\\
\langle v \rangle &amp;=&amp; \frac{V_{max}}{\omega T}\int_{0}^{T} \cos{\omega t}\ dt\\\\
\langle v \rangle &amp;=&amp; \frac{V_{max}}{2\pi}[\cos{\omega t}]_{0}^{T}\\\\
\langle v \rangle &amp;=&amp; \frac{V_{max}}{2\pi}(\cos{\omega T}-\cos{0})\\\\
\langle v \rangle &amp;=&amp; \frac{V_{max}}{2\pi}(\cos{2\pi}-\cos{0})\\\\
\langle v \rangle &amp;=&amp; \frac{V_{max}}{2\pi}(1-1)
\end{eqnarray}</div></div><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
\langle v \rangle &amp;=&amp; 0
\end{eqnarray}</div></div><br><h2 class="Title7 GTitle2" id="Valeur moyenne-Signal sinusoïdal mono-alternance"><a class="Link9" href="#Valeur moyenne">Signal sinusoïdal mono-alternance</a></h2><br><h3 class="Title8 GTitle3">Forme d'onde</h3><div class="Img3"><img src="img/Signal_Sinus_Mono.png" alt="img/Signal_Sinus_Mono.png"></div><br><h2 class="Title7 GTitle2" id="Valeur moyenne-Signal sinusoïdal double-alternance"><a class="Link9" href="#Valeur moyenne">Signal sinusoïdal double-alternance</a></h2><br><h3 class="Title8 GTitle3">Forme d'onde</h3><div class="Img3"><img src="img/Signal_Sinus_Double.png" alt="img/Signal_Sinus_Double.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Transformée de Laplace"><a class="Link3" href="#">Transformée de Laplace</a></h1><div class="Body3">Le but de cette section est de vous apprendre à calculer la <span class="GColor1" style="color:lime;">transformée de Laplace</span> d'un signal.<br>Produit par <b>Gérard KESSE</b>.</div></div></div></div><br>