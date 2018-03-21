<!-- ============================================ -->
<div class="pgCt10">
    <div class="bgra">
        <h1 class="bgra pgCt20" id="Communiquer_avec_le_clavier">
            <a class="clrb" href="#Sommaire">
                Communiquer avec le clavier
            </a>
        </h1>
        <!-- ============================================ -->
        <div class="txal pgCt10">
            <div class="txal pgCr10">
                <ul class="fa-ul">
                    <?php 
                        $m_ds = $m_data["Clavier"];
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
            <!-- ============================================ -->
            <div class="pgCr10" id="Lire_des_donnees_a_partir_du_clavier">
                <a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer_avec_le_clavier">
                    Lire des données à partir du clavier
                </a>    
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Objectif</b></div>
                <div class="">
                    Récupérer des données saisies à partir du clavier.
                </div>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Implémentation</b></div>
                <div class="">
                    Récupérer les identifiants d’une personne saisis à partir du clavier.<br/>
                    Récupérer le nom (m_name) et le code d’entrée (m_code) de la personne.
                </div>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Résultat</b></div>
                <div class="txal ovfa">
                    <img src="img/Image_02.png" alt="Image.png" />
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
	string m_name;
	int m_code;
	
	cout << "\n### Saisir vos identifiants:\n";
	cout << "Nom: "; cin >> m_name;
	cout << "Code: "; cin >> m_code;
	
	cout << "\n### Vous avez saisi:\n";
	cout << "Nom: " << m_name << "\n";
	cout << "Code: " << m_code << "\n";
	return 0;
}
//===============================================
                </xmp></pre>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Problème</b></div>
<pre class="ovfa ftf0">
Problème de gestion d’espace lors de la saisie
Nom : Gerard KESSE
Code : la saisie du code est ignorée
</pre>
                <div class="txal ovfa">
                    <img src="img/Image_03.png" alt="Image.png" />
                </div>
            </div>
            <!-- ============================================ -->
            <!-- ============================================ -->
            <div class="pgCr10" id="Compiler_un_projet_Cpp_avec_plusieurs_fichiers_sources">
                <a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer_avec_le_clavier">
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
            <!-- ============================================ -->
            <div class="pgCr10" id="Compiler_un_projet_Cpp_a_partir_d_un_fichier_Makefile">
                <a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer_avec_le_clavier">
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
            <!-- ============================================ -->
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
