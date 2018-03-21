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
                <div class="txal pgCt10">
                    <div class="txal pgCr10">
                        <ul class="fa-ul">
                            <?php 
                                $m_ds = $m_data["summary_02"];
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
                    <div class="pgCr10" id="Telechargements">
                        <a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation_sous_Windows_avec_MinGW">
                            Téléchargements
                        </a>    
                    </div>
                    <!-- ============================================ -->
                    <div class="pgCr10">
                        <div><b class="ftsg">Notepad++</b></div>
                        <a class="clrb hvra" href="https://notepad-plus-plus.org/fr/">
                            https://notepad-plus-plus.org/fr/
                        </a>
                    </div>
                    <!-- ============================================ -->
                    <div class="pgCr10">
                        <div><b class="ftsg">MinGW</b></div>
                        <a class="clrb hvra" href="http://www.mingw.org/">
                            http://www.mingw.org/
                        </a>
                    </div>
                    <!-- ============================================ -->
                    <div class="pgCr10" id="Installation_de_MinGW">
                        <a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation_sous_Windows_avec_MinGW">
                            Installation de MinGW
                        </a>    
                    </div>
                    <!-- ============================================ -->
                    <div class="pgCr10">
                        <div><b class="ftsg">Packages MinGW</b></div>
<pre class="ovfa">
mingw33-base
mingw32-gcc-g++
</pre>
                    </div>
                    <!-- ============================================ -->
                    <div class="pgCr10" id="Installation_de_Notepad_pp">
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
                <!-- ============================================ -->
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
                    <!-- ============================================ -->
                </div>
                <!-- ============================================ -->
            </div>
        </div>
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
    cout << "Hello World\n";
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
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
