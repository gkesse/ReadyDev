<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Make_03.json");
    
    GConfig::Instance()->setData("title", "Make");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Make_03");
    GConfig::Instance()->setData("link", $m_data["links"]);
    GConfig::Instance()->setData("dir", __FILE__);

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd">
        <!-- ============================================ -->
        <?php require $_SERVER["DOCUMENT_ROOT"]."/php/file_system.php"; ?>  
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra clrb pgCt20">Make</h1>
                <div class="txal pgCt10">
                    <?php $m_ds = $m_data["definition"]; ?>
                    <div class=""><?php echo join(" ", $m_ds) ?></div>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra clrb pgCt20">Programmation</h1>
                <div class="txal pgCt10">
                    <h3 class="clra">Programme Fichier Header:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#ifndef _GMath_
#define _GMath_
//===============================================
#include <cmath>
//===============================================
class GMath {
...
};
//===============================================
#endif
//===============================================
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Programme Fichier Header:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#ifndef _GShow_
#define _GShow_
//===============================================
#include <iostream>
#include <iomanip>
#include <string>
//===============================================
using namespace std;
//===============================================
class GShow {
...
};
//===============================================
#endif
//===============================================
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Programme Fichier Source:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include "GMath.h"
//===============================================
...
//===============================================
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Programme Fichier Source:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include "GShow.h"
//===============================================
...
//===============================================
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Règles Création Librairie Statique:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
all: $(GOBJS)
	ar rcs $(GTARGET) $(GOBJS)
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Règles Makefile:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
GSRC = ../src
GBIN = lib
GBUILD = build
GTARGET = $(GBIN)/libHello.a

GINCS = \
    -I$(GSRC)/manager
    
GOBJS = \
    $(GBUILD)/GShow.o \
    $(GBUILD)/GMath.o
    
all: $(GOBJS)
	ar rcs $(GTARGET) $(GOBJS)
$(GBUILD)/GShow.o: $(GSRC)/manager/GShow.cpp
	g++ -c $(GSRC)/manager/GShow.cpp -o $(GBUILD)/GShow.o $(GINCS)
$(GBUILD)/GMath.o: $(GSRC)/manager/GMath.cpp
	g++ -c $(GSRC)/manager/GMath.cpp -o $(GBUILD)/GMath.o $(GINCS)
clean:
	rm -f $(GBUILD)/* $(GBIN)/*
                    </xmp></pre>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra clrb pgCt20">Résultats</h1>
                <div class="txal ovfa pgCt10">
                    <?php 
                        $m_ds = dirname($_SERVER['PHP_SELF'])."/".
                        $m_data["img"]["results"];
                    ?>
                    <img src="<?php echo $m_ds; ?>" alt="Resultats" />
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra clrb pgCt20">Voir Aussi</h1>
                <div class="txal pgCt10">
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