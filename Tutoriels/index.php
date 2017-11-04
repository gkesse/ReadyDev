<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Tutoriels.json");
    
    GHeader::Instance()->setTitle("Tutoriels");
    GHeader::Instance()->setMenu("Tutoriels");
    GHeader::Instance()->setView("Tutoriels");

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd pgCr10">
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga clrb pgCt20" id="Sommaire">Sommaire</h1>
                <div class="tal pgCt10">
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
            <div class="bga">
                <h1 class="bga clrb pgCt20" id="Developpement_Logiciel">Développement Logiciel</h1>
                <div class="pgRw">
                    <?php 
                        $m_ds = $m_data["software"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="rsa pgCl06">
                            <a class="bgf dibm bdb evtb" href="<?php echo $m_di["link"]; ?>">
                                <div class="bgg">
                                    <div class="bga htb tac dtlf">
                                        <div class="dtcm">
                                            <i class="fse fa <?php echo $m_di["icon"]; ?>"></i>
                                        </div>
                                    </div>
                                    <div class="htc tac dtlf">
                                        <div class="dtcm">
                                            <div class="fsd ffb pdb"><?php echo $m_di["theme"]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pdc fsc clrd tac"><?php echo $m_di["description"]; ?></div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga clrb pgCt20" id="Developpement_Web">Développement Web</h1>
                <div class="pgRw">
                    <?php 
                        $m_ds = $m_data["web"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="rsa pgCl06">
                            <a class="bgf dibm bdb evtb" href="<?php echo $m_di["link"]; ?>">
                                <div class="bgg">
                                    <div class="bga htb tac dtlf">
                                        <div class="dtcm">
                                            <i class="fse fa <?php echo $m_di["icon"]; ?>"></i>
                                        </div>
                                    </div>
                                    <div class="htc tac dtlf">
                                        <div class="dtcm">
                                            <div class="fsd ffb pdb"><?php echo $m_di["theme"]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pdc fsc clrd tac"><?php echo $m_di["description"]; ?></div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga clrb pgCt20" id="Systeme_Gestion_Version">Système de Gestion de Version</h1>
                <div class="pgRw">
                    <?php 
                        $m_ds = $m_data["version"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="rsa pgCl06">
                            <a class="bgf dibm bdb evtb" href="<?php echo $m_di["link"]; ?>">
                                <div class="bgg">
                                    <div class="bga htb tac dtlf">
                                        <div class="dtcm">
                                            <i class="fse fa <?php echo $m_di["icon"]; ?>"></i>
                                        </div>
                                    </div>
                                    <div class="htc tac dtlf">
                                        <div class="dtcm">
                                            <div class="fsd ffb pdb"><?php echo $m_di["theme"]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pdc fsc clrd tac"><?php echo $m_di["description"]; ?></div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
