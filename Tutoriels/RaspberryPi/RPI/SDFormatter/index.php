<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/SDFormatter.json");
    
    GConfig::Instance()->setData("title", "SDFormatter");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "SDFormatter");
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
                <h1 class="bgra pgCt20">
                    <a class="clrb" href="#">
                        SDFormatter
                    </a>
                </h1>
                <div class="txal pgCt10">
                    <?php $m_ds = $m_data["definition"]; ?>
                    <div class=""><?php echo join(" ", $m_ds) ?></div>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra pgCt20">
                    <a class="clrb" href="#">
                        Procédure
                    </a>
                </h1>
                <!-- ============================================ -->
                <div class="txal pgCt10">
                    <h3 class="clra pgCr10">Téléchargement SDFormatter</h3>
                    <div class="pdle">
                        <i class="fa fa-chevron-right"></i>
                        <a class="hvra" target="_blank"
                        href="https://www.sdcard.org/downloads/formatter_4/">
                            Télécharger SDFormatter
                        </a>
                    </div>
                </div>
                <!-- ============================================ -->
                <div class="txal pgCt10">
                    <h3 class="clra pgCr10">Démarrage SDFormatter</h3>
                    <div class="txal ovfa pgCt10">
                        <?php 
                            $m_ds = dirname($_SERVER['PHP_SELF'])."/".
                            $m_data["img"]["Image_01"];
                        ?>
                        <img src="<?php echo $m_ds; ?>" alt="Image_01" />
                    </div>
                </div>
                <!-- ============================================ -->
                <div class="txal pgCt10">
                    <h3 class="clra pgCr10">Formatage Carte SD:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
Drive
G
Volume Label
RPIBOOT
Option
Format Type
Full (Erase)
Format Size Adjustment
On
Ok
Format
Ok
Exit
                    </xmp></pre>
                </div>
                <!-- ============================================ -->
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
