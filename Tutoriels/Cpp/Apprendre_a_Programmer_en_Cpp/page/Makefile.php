<!-- ============================================ -->
<div class="pgCt10">
	<div class="bgra">
		<h1 class="bgra pgCt20" id="Comprendre_la_structure_d_un_fichier_Makefile">
			<a class="clrb" href="#Sommaire">
				Comprendre la structure d’un fichier Makefile
			</a>
		</h1>
		<!-- ============================================ -->
		<div class="txal pgCt10">
			<div class="txal pgCr10">
				<ul class="fa-ul">
					<?php 
						$m_ds = $m_data["summary_04"];
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
			<div class="pgCr10" id="Optimiser_la_structure_d_un_fichier_Makefile">
				<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Comprendre_la_structure_d_un_fichier_Makefile">
					Optimiser la structure d’un fichier Makefile
				</a>    
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Objectif</b></div>
				<div class="">
					Ecrire un fichier Makefile optimisé.<br/>
					Créer des macros dans un fichier Makefile.

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
src/manager/hello.h
src/manager/hello.cpp
win/Makeifle
win/bin/
win/build/
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
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">win/Makefile</b></div>
				<pre><xmp class="ovfa prettyprint linenums">
GSRC = ..\src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\GProject.exe

GINCS = \
    -I..\src\manager

GOBJS = \
    $(GBUILD)\main.o \
    $(GBUILD)\hello.o

all: $(GOBJS)
    g++ -o $(GTARGET) $(GOBJS)
$(GBUILD)\main.o: $(GSRC)\main.cpp
    g++ -c $(GSRC)\main.cpp -o $(GBUILD)\main.o $(GINCS)
$(GBUILD)\hello.o: $(GSRC)\manager\hello.cpp
    g++ -c $(GSRC)\manager\hello.cpp -o $(GBUILD)\hello.o $(GINCS)
clean:
    del /q $(GBIN)\* $(GBUILD)\*
				</xmp></pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Macros Makefile</b></div>
<pre class="ovfa">
GSRC : répertoire des fichiers sources
GBIN : répertoire du fichier exécutable
GBUILD : répertoire de génération des fichiers objets
GTARGET : chemin du fichier exécutable
GINCS : liste de répertoires des fichiers entêtes
GOBJS : liste des fichiers objets
</pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Compilation du projet</b></div>
<pre class="ovfa">
mingw32-make clean
mingw32-make
</pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Exécution du projet</b></div>
<pre class="ovfa">
bin/GProject.exe
</pre>
			</div>
		</div>
		<!-- ============================================ -->
	</div>
</div>
<!-- ============================================ -->
