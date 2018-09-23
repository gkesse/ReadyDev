<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Make_07.json");
    
    GConfig::Instance()->setData("title", "Make");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Make_07");
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
                    <h3 class="clra">Programme Principal:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include "GProcess.h"
//===============================================
int main(int argc, char** argv) {
    GProcess::Instance()->run();
    return 0;
}
//===============================================
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Programme Utilisation Fichier Header:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include "GProcess.h"
//===============================================
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Programme Utilisation Librairie Dynamique:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include "GProcess.h"
#include "GShow.h"
#include "GMath.h"
//===============================================
...
//===============================================
void GProcess::run() {
    double m_data;
    
    GShow::Instance()->show("Full Project..."); 
    
    m_data = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(m_data, "add(22, 7)");  
    
    m_data = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(m_data, "subtract(22, 7)");  
    
    m_data = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(m_data, "multiply(22, 7)"); 
    
    m_data = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(m_data, "divide(22, 7)"); 
    
    m_data = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(m_data, "quotient(22, 7)"); 
    
    m_data = GMath::Instance()->modulus(22, 7);
    GShow::Instance()->show(m_data, "modulus(22, 7)");    
}
//===============================================
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Règles Utilisation Fichier Header:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
GINCS = \
    -I$(GSRC)/manager
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Règles Utilisation Librairie Dynamique:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
GINCS = \
    -Ilib/hello/include

GLIBS = \
    -Llib/hello/bin -lHello
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Règles Makefile:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
    -I$(GSRC)/manager \
    -Ilib/hello/include

GLIBS = \
    -Llib/hello/bin -lHello
            
GOBJS = \
    $(patsubst $(GSRC)/%.cpp, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.cpp)) \
    $(patsubst $(GSRC)/manager/%.cpp, $(GBUILD)/%.o, $(wildcard $(GSRC)/manager/*.cpp))
    
all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS) $(GLIBS)
$(GBUILD)/%.o: $(GSRC)/%.cpp
	g++ -c $< -o $@ $(GINCS)
$(GBUILD)/%.o: $(GSRC)/manager/%.cpp
	g++ -c $< -o $@ $(GINCS)
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
