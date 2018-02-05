<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Tutoriels.json");
    
    GConfig::Instance()->setData("title", "Tutoriels");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Tutoriels");

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
                <h1 class="bgra pgCt20" id="Developpement_Logiciel">
                    <a class="clrb" href="#Sommaire">
                        Développement Logiciel
                    </a>
                </h1>
                <div class="pgRw">
                    <?php 
                        $m_ds = $m_data["software"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="rwda pgCl06">
                            <a class="bgrf dibm brdb evtb" href="<?php echo $m_di["link"]; ?>">
                                <div class="bgrg">
                                    <div class="bgra hghb txac dtlf">
                                        <div class="dtcm">
                                            <i class="ftse fa <?php echo $m_di["icon"]; ?>"></i>
                                        </div>
                                    </div>
                                    <div class="hghc txac dtlf">
                                        <div class="dtcm">
                                            <div class="ftsd ftfb pddb"><?php echo $m_di["theme"]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pddc ftsc clrd txac"><?php echo $m_di["description"]; ?></div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra pgCt20" id="Developpement_Web">
                    <a class="clrb" href="#Sommaire">
                        Développement Web
                    </a>
                </h1>
                <div class="pgRw">
                    <?php 
                        $m_ds = $m_data["web"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="rwda pgCl06">
                            <a class="bgrf dibm brdb evtb" href="<?php echo $m_di["link"]; ?>">
                                <div class="bgrg">
                                    <div class="bgra hghb txac dtlf">
                                        <div class="dtcm">
                                            <i class="ftse fa <?php echo $m_di["icon"]; ?>"></i>
                                        </div>
                                    </div>
                                    <div class="hghc txac dtlf">
                                        <div class="dtcm">
                                            <div class="ftsd ftfb pddb"><?php echo $m_di["theme"]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pddc ftsc clrd txac"><?php echo $m_di["description"]; ?></div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra pgCt20" id="Systeme_Gestion_Version">
                    <a class="clrb" href="#Sommaire">
                        Système de Gestion de Version
                    </a>
                </h1>
                <div class="pgRw">
                    <?php 
                        $m_ds = $m_data["version"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="rwda pgCl06">
                            <a class="bgrf dibm brdb evtb" href="<?php echo $m_di["link"]; ?>">
                                <div class="bgrg">
                                    <div class="bgra hghb txac dtlf">
                                        <div class="dtcm">
                                            <i class="ftse fa <?php echo $m_di["icon"]; ?>"></i>
                                        </div>
                                    </div>
                                    <div class="hghc txac dtlf">
                                        <div class="dtcm">
                                            <div class="ftsd ftfb pddb"><?php echo $m_di["theme"]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pddc ftsc clrd txac"><?php echo $m_di["description"]; ?></div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra pgCt20" id="Systemes_Embarques">
                    <a class="clrb" href="#Sommaire">
                        Systèmes Embarqués
                    </a>
                </h1>
                <div class="pgRw">
                    <?php 
                        $m_ds = $m_data["embedded"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="rwda pgCl06">
                            <a class="bgrf dibm brdb evtb" href="<?php echo $m_di["link"]; ?>">
                                <div class="bgrg">
                                    <div class="bgra hghb txac dtlf">
                                        <div class="dtcm">
                                            <i class="ftse fa <?php echo $m_di["icon"]; ?>"></i>
                                        </div>
                                    </div>
                                    <div class="hghc txac dtlf">
                                        <div class="dtcm">
                                            <div class="ftsd ftfb pddb"><?php echo $m_di["theme"]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pddc ftsc clrd txac"><?php echo $m_di["description"]; ?></div>
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
