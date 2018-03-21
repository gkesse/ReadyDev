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
			<div class="txal pgCr10">
				<ul class="fa-ul">
					<?php 
						$m_ds = $m_data["summary_03"];
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
			<div class="pgCr10" id="Compiler_un_projet_Cpp_avec_un_seul_fichier_source">
				<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compilation_d_un_projet_Cpp_avec_MinGW">
					Compiler un projet C++ avec un seul fichier source
				</a>    
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Objectif</b></div>
				<div class="">
					Compiler un projet C++ avec un seul fichier source.
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
cout << "Hello World\n";
return 0;
}
//===============================================
				</xmp></pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Compilation du projet</b></div>
<pre class="ovfa">
del /q bin\* build\*
g++ -c src/main.cpp -o build/main.o
g++ -o bin/GProject.exe build/main.o
</pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Exécution du projet</b></div>
<pre class="ovfa">
bin/GProject.exe
</pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10" id="Compiler_un_projet_Cpp_avec_plusieurs_fichiers_sources">
				<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compilation_d_un_projet_Cpp_avec_MinGW">
					Compiler un projet C++ avec plusieurs fichiers sources
				</a>    
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Objectif</b></div>
				<div class="">
					Compiler un projet C++ avec plusieurs fichiers sources.
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
win/bin/
win/build/
</pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">src/main.cpp</b></div>
				<pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include "hello.h"
//===============================================
int main(int argc, char** argv) {
sayHello();
return 0;
}
//===============================================
				</xmp></pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">src/manager/hello.h</b></div>
				<pre><xmp class="ovfa prettyprint linenums">
//===============================================
#ifndef _hello_
#define _hello_
//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
void sayHello();
//===============================================
#endif
//===============================================
				</xmp></pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">src/manager/hello.cpp</b></div>
				<pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include "hello.h"
//===============================================
void sayHello() {
cout << "Bonjour tout le monde\n";
}
//===============================================
				</xmp></pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Compilation du projet</b></div>
<pre class="ovfa">
del /q bin\* build\*
g++ -c ..\src\main.cpp -o build\main.o -I..\src\manager
g++ -c ..\src\manager\hello.cpp -o build\hello.o -I..\src\manager
g++ -o bin\GProject.exe build\main.o build\hello.o 
</pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Exécution du projet</b></div>
<pre class="ovfa">
bin/GProject.exe
</pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10" id="Compiler_un_projet_Cpp_a_partir_d_un_fichier_Makefile">
				<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Compilation_d_un_projet_Cpp_avec_MinGW">
					Compiler un projet C++ à partir d’un fichier Makefile
				</a>    
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">Objectif</b></div>
				<div class="">
					Compiler un projet C++ à partir d’un fichier Makefile.
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
win/Makefile
win/bin/
win/build/
</pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">src/main.cpp</b></div>
				<pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include "hello.h"
//===============================================
int main(int argc, char** argv) {
sayHello();
return 0;
}
//===============================================
				</xmp></pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">src/manager/hello.h</b></div>
				<pre><xmp class="ovfa prettyprint linenums">
//===============================================
#ifndef _hello_
#define _hello_
//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
void sayHello();
//===============================================
#endif
//===============================================
				</xmp></pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">src/manager/hello.cpp</b></div>
				<pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include "hello.h"
//===============================================
void sayHello() {
cout << "Bonjour tout le monde\n";
}
//===============================================
				</xmp></pre>
			</div>
			<!-- ============================================ -->
			<div class="pgCr10">
				<div><b class="ftsg">win/Makefile</b></div>
				<pre><xmp class="ovfa prettyprint linenums">
win/Makefile :
all: build\main.o build\hello.o
g++ -o bin\GProject.exe build\main.o build\hello.o
build\main.o: ..\src\main.cpp
g++ -c ..\src\main.cpp -o build\main.o -I..\src\manager
build\hello.o: ..\src\manager\hello.cpp
g++ -c ..\src\manager\hello.cpp -o build\hello.o -I..\src\manager
clean:
del /q bin\* build\*
				</xmp></pre>
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
			<!-- ============================================ -->
		</div>
		<!-- ============================================ -->
	</div>
</div>
<!-- ============================================ -->
