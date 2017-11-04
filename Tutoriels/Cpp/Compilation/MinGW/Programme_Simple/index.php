<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/MinGW_01.json");
    
    GHeader::Instance()->setTitle("MinGW");
    GHeader::Instance()->setMenu("Tutoriels");
    GHeader::Instance()->setView("MinGW_01");
    GHeader::Instance()->setLink($m_data["links"]);

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
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
                    <h3 class="clra">Programme Principal:</h3>
                    <pre><xmp class="ova prettyprint linenums">
//===============================================
#include <iostream>
//===============================================
using namespace std;

int main(int argc, char** argv) {
    cout << "Simple Program...\n";
    return 0;
}
//===============================================
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Règles Makefile:</h3>
                    <pre><xmp class="ova prettyprint linenums">
GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o
    
all: $(GOBJS)
	g++ -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.cpp
	g++ -c $(GSRC)/main.cpp -o $(GBUILD)/main.o
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
