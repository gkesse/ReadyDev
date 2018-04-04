<!-- ============================================ -->
<div class="pgCt10">
	<div class="bgra">
		<h1 class="bgra pgCt20" id="Communiquer_avec_la_console">
			<a class="clrb" href="#Sommaire">
				Communiquer avec la console
			</a>
		</h1>
		<!-- ============================================ -->
		<div class="txal pgCt10">
			<div class="txal pgCr10">
				<ul class="fa-ul">
					<?php 
						$m_ds = $m_data["Console"];
						foreach($m_ds as $m_di) {
						?>
					<li>
						<i class="fa-li fa fa-book clrg"></i>
						<a class="hvra clrg" href="<?php echo $m_di["link"]; ?>">
							<?php echo $m_di["name"]; ?>
						</a>
					</li>
					<?php } ?>
				</ul>            
			</div>
			<!-- ============================================ -->
			<div class="pgCr10" id="Afficher_un_message">
				<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer_avec_la_console">
					Afficher un message
				</a>    
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Objectif</b></div>
				<div class="">
					Apprendre à affiicher un message dans la console.
				</div>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Implémentation</b></div>
				<div class="">
					Afficher un message dans la console (Bonjour tout le monde).
				</div>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Résultat</b></div>
				<div class="txal ovfa">
					<img src="img/Image_01.png" alt="Image.png" />
				</div>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Dossier projet</b></div>
<pre class="ovfa">
src/main.cpp
</pre>
			</div>
			<!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">src/main.cpp</b></div>
                <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
	cout << "Bonjour tout le monde\n";
	return 0;
}
//===============================================
                </xmp></pre>
            </div>
		</div>
		<!-- ============================================ -->
	</div>
</div>
<!-- ============================================ -->
