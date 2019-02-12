<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/NMake_05.json");
    
    GConfig::Instance()->setData("title", "NMake");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "NMake_05");
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
                <h1 class="bgra clrb pgCt20">NMake</h1>
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
                    <h3 class="clra">Programme Création Librairie Dynamique:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
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
                <div class="txal pgCt10">
                    <h3 class="clra">Programme Création Librairie Dynamique:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
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
                <div class="txal pgCt10">
                    <h3 class="clra">Règles Création Librairie Dynamique:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
all: $(GOBJS)
	link /DLL /OUT:$(GTARGET) $(GOBJS)
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Règles Création Librairie Dynamique:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
$(GBUILD)/GMath.obj: $(GSRC)/manager/GMath.cpp
	cl /c /EHsc /DDLL_APP $(GSRC)/manager/GMath.cpp /Fo$(GBUILD)/GMath.obj $(GINCS)
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Règles Création Librairie Dynamique:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
$(GBUILD)/GShow.obj: $(GSRC)/manager/GShow.cpp
	cl /c /EHsc /DDLL_APP $(GSRC)/manager/GShow.cpp /Fo$(GBUILD)/GShow.obj $(GINCS)
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Règles Makefile:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
GSRC = ../src
GBIN = lib
GBUILD = build
GTARGET = $(GBIN)/Hello.dll

GINCS = \
    /I$(GSRC)/manager
    
GOBJS = \
    $(GBUILD)/GShow.obj \
    $(GBUILD)/GMath.obj
    
all: $(GOBJS)
	link /DLL /OUT:$(GTARGET) $(GOBJS)
$(GBUILD)/GShow.obj: $(GSRC)/manager/GShow.cpp
	cl /c /EHsc /DDLL_APP $(GSRC)/manager/GShow.cpp /Fo$(GBUILD)/GShow.obj $(GINCS)
$(GBUILD)/GMath.obj: $(GSRC)/manager/GMath.cpp
	cl /c /EHsc /DDLL_APP $(GSRC)/manager/GMath.cpp /Fo$(GBUILD)/GMath.obj $(GINCS)
clean:
	del /Q $(GBUILD)\* $(GBIN)\*
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
