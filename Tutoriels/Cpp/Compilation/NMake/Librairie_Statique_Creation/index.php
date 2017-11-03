<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php"; ?>
<!-- ============================================ -->
<?php
    $m_data = GJson::Instance()->getData("data/json/NMake_03.json");
    
    GHeader::Instance()->setTitle("NMake");
    GHeader::Instance()->setMenu("Tutoriels");
    GHeader::Instance()->setView("NMake_03");
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
                <h1 class="bga clrb pgCt20">NMake</h1>
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
                    <h3 class="clra">Programme Fichier Header:</h3>
                    <pre><xmp class="ova prettyprint linenums">
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
                <div class="tal pgCt10">
                    <h3 class="clra">Programme Fichier Header:</h3>
                    <pre><xmp class="ova prettyprint linenums">
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
                <div class="tal pgCt10">
                    <h3 class="clra">Programme Fichier Source:</h3>
                    <pre><xmp class="ova prettyprint linenums">
//===============================================
#include "GMath.h"
//===============================================
...
//===============================================
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Programme Fichier Source:</h3>
                    <pre><xmp class="ova prettyprint linenums">
//===============================================
#include "GShow.h"
//===============================================
...
//===============================================
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Règles Création Librairie Statique:</h3>
                    <pre><xmp class="ova prettyprint linenums">
all: $(GOBJS)
	lib /OUT:$(GTARGET) $(GOBJS)
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Règles Makefile:</h3>
                    <pre><xmp class="ova prettyprint linenums">
GSRC = ../src
GBIN = lib
GBUILD = build
GTARGET = $(GBIN)/Hello.lib

GINCS = \
    /I$(GSRC)/manager
    
GOBJS = \
    $(GBUILD)/GShow.obj \
    $(GBUILD)/GMath.obj
    
all: $(GOBJS)
	lib /OUT:$(GTARGET) $(GOBJS)
$(GBUILD)/GShow.obj: $(GSRC)/manager/GShow.cpp
	cl /c /EHsc $(GSRC)/manager/GShow.cpp /Fo$(GBUILD)/GShow.obj $(GINCS)
$(GBUILD)/GMath.obj: $(GSRC)/manager/GMath.cpp
	cl /c /EHsc $(GSRC)/manager/GMath.cpp /Fo$(GBUILD)/GMath.obj $(GINCS)
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
