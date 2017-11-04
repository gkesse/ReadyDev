<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Singleton.json");
    
    GHeader::Instance()->setTitle("Singleton");
    GHeader::Instance()->setMenu("Tutoriels");
    GHeader::Instance()->setView("Singleton");
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
                <h1 class="bga clrb pgCt20">Patron Singleton</h1>
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
#include "GSingleton.h"
//===============================================
int main(int argc, char** argv) {
    GSingleton::Instance()->showData();
    GSingleton::Instance()->setData("Hello World");
    GSingleton::Instance()->showData();
    GSingleton::Instance()->setData("Welcome Singleton");
    GSingleton::Instance()->showData();
    return 0;
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra">Programme Initialisation:</h3>
                    <pre><xmp class="ova prettyprint linenums">
//===============================================
GSingleton* GSingleton::m_instance = 0;
//===============================================
                    </xmp></pre>
                    <h3 class="clra">Programme Instanciation:</h3>
                    <pre><xmp class="ova prettyprint linenums">
//===============================================
GSingleton* GSingleton::Instance() {
    if(m_instance == 0) {
        m_instance = new GSingleton;
    }
    return m_instance;
}
//===============================================
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
