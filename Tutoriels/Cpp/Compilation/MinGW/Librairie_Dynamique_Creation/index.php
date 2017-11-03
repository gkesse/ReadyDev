<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php"; ?>
<!-- ============================================ -->
<?php
    $m_data = GJson::Instance()->getData("data/json/MinGW_05.json");
    
    GHeader::Instance()->setTitle("MinGW");
    GHeader::Instance()->setMenu("Tutoriels");
    GHeader::Instance()->setView("MinGW_05");
    GHeader::Instance()->setLink($m_data["links"]);
?>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/header.php"; ?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd pgCr10">
        <!-- ============================================ -->
        <?php GFileSystem::Instance()->setDirectory(__FILE__); ?>
        <?php require $_SERVER["DOCUMENT_ROOT"]."/php/file_system.php"; ?>  
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga clrb pgCt20">MinGW</h1>
                <div class="tal pgCt10">
                    <?php $m_ds = $m_data["definition"]; ?>
                    <div class=""><?php echo join(" ", $m_ds) ?></div>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga clrb pgCt20">Programmation</h1>
                <div class="tal pgCt10">
                    <h3 class="clra">Programme Création Librairie Dynamique:</h3>
                    <pre><xmp class="ova prettyprint linenums">
//===============================================
#ifndef _GMath_
#define _GMath_
//===============================================
#include <cmath>
//===============================================
#ifdef DLL_APP  
#define DLL_API __declspec(dllexport)   
#else  
#define DLL_API __declspec(dllimport)   
#endif 
//===============================================
class DLL_API GMath {
...
};
//===============================================
#endif
//===============================================
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Programme Création Librairie Dynamique:</h3>
                    <pre><xmp class="ova prettyprint linenums">
//===============================================
#ifndef _GShow_
#define _GShow_
//===============================================
#include <iostream>
#include <iomanip>
#include <string>
//===============================================
#ifdef DLL_APP  
#define DLL_API __declspec(dllexport)   
#else  
#define DLL_API __declspec(dllimport)   
#endif 
//===============================================
using namespace std;
//===============================================
class DLL_API GShow {
...
};
//===============================================
#endif
//===============================================
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Règles Création Librairie Dynamique:</h3>
                    <pre><xmp class="ova prettyprint linenums">
all: $(GOBJS)
	g++ -shared -o $(GTARGET) $(GOBJS)
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Règles Création Librairie Dynamique:</h3>
                    <pre><xmp class="ova prettyprint linenums">
$(GBUILD)/GMath.o: $(GSRC)/manager/GMath.cpp
	g++ -c -DDLL_APP $(GSRC)/manager/GMath.cpp -o $(GBUILD)/GMath.o $(GINCS)
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Règles Création Librairie Dynamique:</h3>
                    <pre><xmp class="ova prettyprint linenums">
$(GBUILD)/GShow.o: $(GSRC)/manager/GShow.cpp
	g++ -c -DDLL_APP $(GSRC)/manager/GShow.cpp -o $(GBUILD)/GShow.o $(GINCS)
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Règles Makefile:</h3>
                    <pre><xmp class="ova prettyprint linenums">
GSRC = ../src
GBIN = lib
GBUILD = build
GTARGET = $(GBIN)/libHello.dll

GINCS = \
    -I$(GSRC)/manager
    
GOBJS = \
    $(GBUILD)/GShow.o \
    $(GBUILD)/GMath.o
    
all: $(GOBJS)
	g++ -shared -o $(GTARGET) $(GOBJS)
$(GBUILD)/GShow.o: $(GSRC)/manager/GShow.cpp
	g++ -c -DDLL_APP $(GSRC)/manager/GShow.cpp -o $(GBUILD)/GShow.o $(GINCS)
$(GBUILD)/GMath.o: $(GSRC)/manager/GMath.cpp
	g++ -c -DDLL_APP $(GSRC)/manager/GMath.cpp -o $(GBUILD)/GMath.o $(GINCS)
clean:
	del /Q $(GBUILD)\* $(GBIN)\*
                    </xmp></pre>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
        <div class="bga">
        <h1 class="bga clrb pgCt20">Résultats</h1>
        <div class="tal ova pgCt10">
                    <?php $m_ds = $m_data["img"]["results"]; ?>
                    <img src="<?php echo $m_ds; ?>" alt="Resultats" />
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga clrb pgCt20">Voir Aussi</h1>
                <div class="tal pgCt10">
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["see_also"];
                            foreach($m_ds as $m_di) {
                            ?>
                            <li class="mrgb"><i class="fa-li fa fa-paper-plane-o"></i>
                                <a class="hvra" href="<?php echo $m_di["link"]; ?>">
                                    <?php echo $m_di["name"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
            </div>
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
