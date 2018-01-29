<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/RaspberryPi.json");
    
    GConfig::Instance()->setData("title", "RaspberryPi");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "RaspberryPi");
    GConfig::Instance()->setData("link", $m_data["links"]);

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
                <h1 class="bgra pgCt20" id="Notions">
                    <a class="clrb" href="#Sommaire">
                        Notions de Base
                    </a>
                </h1>
                <!-- ============================================ -->
                <div class="txal pgCt10">
                    <h3 class="pgCr05" id="Installation_RPI">
                        <a class="clra" href="#Notions">
                            Installation RPI
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["installation"];
                            foreach($m_ds as $m_di) {
                            ?>
                            <li class="mrgb"><i class="fa-li fa fa-chevron-right"></i>
                                <a class="hvra" href="<?php echo $m_di["link"]; ?>">
                                    <?php echo $m_di["name"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
                <!-- ============================================ -->
                <div class="txal pgCt10">
                    <h3 class="pgCr05" id="Raspi_Config">
                        <a class="clra" href="#Notions">
                            Utilitaire Raspi-Config
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["raspi_config"];
                            foreach($m_ds as $m_di) {
                            ?>
                            <li class="mrgb"><i class="fa-li fa fa-chevron-right"></i>
                                <a class="hvra" href="<?php echo $m_di["link"]; ?>">
                                    <?php echo $m_di["name"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
                <!-- ============================================ -->
                <div class="txal pgCt10">
                    <h3 class="pgCr05" id="Git">
                        <a class="clra" href="#Notions">
                            Utilitaire Git
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["git"];
                            foreach($m_ds as $m_di) {
                            ?>
                            <li class="mrgb"><i class="fa-li fa fa-chevron-right"></i>
                                <a class="hvra" href="<?php echo $m_di["link"]; ?>">
                                    <?php echo $m_di["name"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
                <!-- ============================================ -->
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra pgCt20" id="Serveur_Web">
                    <a class="clrb" href="#Sommaire">
                        Serveur Web
                    </a>
                </h1>
                <!-- ============================================ -->
                <div class="txal pgCt10">
                    <h3 class="pgCr05" id="Apache">
                        <a class="clra" href="#Serveur_Web">
                            Utilitaire Apache
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["web"]["apache"];
                            foreach($m_ds as $m_di) {
                            ?>
                            <li class="mrgb"><i class="fa-li fa fa-chevron-right"></i>
                                <a class="hvra" href="<?php echo $m_di["link"]; ?>">
                                    <?php echo $m_di["name"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
                <!-- ============================================ -->
            </div>
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
