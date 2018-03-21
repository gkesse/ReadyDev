<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Cpp_02.json");
    
    GConfig::Instance()->setData("title", "Apprendre à Programmer en C++");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Cpp_02");
    GConfig::Instance()->setData("link", $m_data["links"]);

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
	<div class="mrga pgBd">
		<!-- ============================================ -->
		<div class="pgCt10">
			<div class="bgra">
				<h1 class="bgra pgCt20" id="Sommaire">
					<a class="clrb" href="#">
						Sommaire
					</a>
				</h1>
				<div class="txal pgCt10">
					<ul class="fa-ul">
						<?php 
                            $m_ds = $m_data["summary"];
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
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10">
			<div class="bgra">
				<h1 class="bgra pgCt20" id="Introduction">
					<a class="clrb" href="#Sommaire">
						Introduction
					</a>
				</h1>
				<div class="txal pgCt10">
					<?php $m_ds = $m_data["intro"]; ?>
					<div class=""><?php echo join(" ", $m_ds) ?></div>
				</div>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10">
			<div class="bgra">
				<h1 class="bgra pgCt20" id="Auteur">
					<a class="clrb" href="#Sommaire">
						Auteur
					</a>
				</h1>
				<div class="txal pgCt10">
					<?php $m_ds = $m_data["author"]; ?>
					<div class=""><?php echo join(" ", $m_ds) ?></div>
				</div>
				<div class="txac ovfa pgCt10">
					<img src="/img/readydev.png" alt="ReadyDev.png" />
				</div>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10">
			<div class="bgra">
				<h1 class="bgra pgCt20" id="Installation_sous_Windows_avec_MinGW">
					<a class="clrb" href="#Sommaire">
						Installation sous Windows avec MinGW
					</a>
				</h1>
				<!-- ============================================ -->
				<div class="txal pgCt05">
					<div class="pgCr20" id="Telechargements">
						<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation_sous_Windows_avec_MinGW">
							Téléchargements
						</a>    
					</div>
					<!-- ============================================ -->
					<div class="pgCr05">
						<b class="ftsg">Notepad++</b><br/>
						<a class="clrb hvra" href="https://notepad-plus-plus.org/fr/">
							https://notepad-plus-plus.org/fr/
						</a>
					</div>
					<!-- ============================================ -->
					<div class="pgCr05">
						<b class="ftsg">MinGW</b><br/>
						<a class="clrb hvra" href="http://www.mingw.org/">
							http://www.mingw.org/
						</a>
					</div>
					<!-- ============================================ -->
					<div class="pgCr20" id="Installation_de_MinGW">
						<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation_sous_Windows_avec_MinGW">
							Installation de MinGW
						</a>    
					</div>
					<!-- ============================================ -->
					<div class="pgCr05">
						<div><b class="ftsg">Packages MinGW</b></div>
<pre class="ovfa">
mingw33-base
mingw32-gcc-g++
</pre>
					</div>
					<!-- ============================================ -->
					<div class="pgCr20" id="Installation_de_Notepad_pp">
						<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation_sous_Windows_avec_MinGW">
							Installation de Notepad++
						</a>    
					</div>
					<!-- ============================================ -->
					<div class="pgCr10">
						<b class="ftsg">Plugins Notepad++</b><br/>
<pre class="ovfa">
TextFX
NppExport
</pre>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10">
			<div class="bgra">
				<h1 class="bgra pgCt20" id="Compilation_d_un_projet_Cpp_avec_MinGW">
					<a class="clrb" href="#Sommaire">
						Compilation d’un projet C++ avec MinGW
					</a>
				</h1>
				<!-- ============================================ -->
				<div class="txal pgCt10">
					<div class="pgCr10" id="Compiler_un_projet_Cpp_avec_un_seul_fichier_source">
						<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compilation_d_un_projet_Cpp_avec_MinGW">
							Compiler un projet C++ avec un seul fichier source
						</a>    
					</div>
					<!-- ============================================ -->
					<div class="pgCr10">
						<b class="ftsg">Objectif</b><br/>
						<div class="">
							Compiler un projet C++ avec un seul fichier source.
						</div>
					</div>
					<!-- ============================================ -->
					<div class="pgCr10">
						<b class="ftsg">Implémentation</b><br/>
						<div class="">
							Afficher un message dans la console (Bonjour tout le monde).
						</div>
					</div>
					<!-- ============================================ -->
					<div class="pgCr10">
						<b class="ftsg">Résultat</b><br/>
						<div class="txal ovfa">
							<img src="/img/readydev.png" alt="Image.png" />
						</div>
					</div>
					<!-- ============================================ -->
					<div class="pgCr00">
						<b class="ftsg">Dossier projet</b><br/>
						<pre class="ovfa"><xmp class="pdd0 mrgd">
src/main.cpp
win/bin/
win/build/
						</xmp></pre>
					</div>
					<!-- ============================================ -->
					<div class="pgCr00">
						<b class="ftsg">src/main.cpp</b><br/>
						<pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    cout << "Hello World\n";
    return 0;
}
//===============================================
						</xmp></pre>
					</div>
					<!-- ============================================ -->
					<div class="pgCr00">
						<b class="ftsg">Compilation du projet</b><br/>
						<pre class="ovfa"><xmp class="pdd0 mrgd">
g++ -c src/main.cpp -o build/main.o
g++ -o bin/GProject.exe build/main.o
						</xmp></pre>
					</div>
					<!-- ============================================ -->
					<div class="pgCr00">
						<b class="ftsg">Exécution du projet</b><br/>
						<pre class="ovfa"><xmp class="pdd0 mrgd">
bin/GProject.exe
						</xmp></pre>
					</div>
				</div>
				<!-- ============================================ -->
			</div>
		</div>
		<!-- ============================================ -->
	</div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
