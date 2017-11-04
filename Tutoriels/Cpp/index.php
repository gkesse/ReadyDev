<?php require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php"; ?>
<!-- ============================================ -->
<?php    
    $m_data = GJson::Instance()->getData("data/json/Cpp.json");
    
    GHeader::Instance()->setTitle("C/C++");
    GHeader::Instance()->setMenu("Tutoriels");
    GHeader::Instance()->setView("Cpp");
    GHeader::Instance()->setLink($m_data["links"]);
?>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/header.php"; ?>
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
                <h1 class="bga clrb pgCt20" id="Compilation">Compilation</h1>
                <!-- ============================================ -->
                <div class="tal pgCt10">
                    <h3 class="clra" id="NMake">Compilez avec NMake</h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["compilation"]["compiler"];
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
                <div class="tal pgCt10">
                    <h3 class="clra" id="MinGW">Compilez avec MinGW</h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["compilation"]["compiler"];
                            foreach($m_ds as $m_di) {
                            $m_link = str_replace("/NMake/", "/MinGW/", $m_di["link"]);
                            ?>
                            <li class="mrgb"><i class="fa-li fa fa-chevron-right"></i>
                                <a class="hvra" href="<?php echo $m_link; ?>">
                                    <?php echo $m_di["name"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
                <!-- ============================================ -->
                <div class="tal pgCt10">
                    <h3 class="clra" id="Cygwin">Compilez avec Cygwin</h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["compilation"]["compiler"];
                            foreach($m_ds as $m_di) {
                            $m_link = str_replace("/NMake/", "/Cygwin/", $m_di["link"]);
                            ?>
                            <li class="mrgb"><i class="fa-li fa fa-chevron-right"></i>
                                <a class="hvra" href="<?php echo $m_link; ?>">
                                    <?php echo $m_di["name"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
                <!-- ============================================ -->
                <div class="tal pgCt10">
                    <h3 class="clra" id="Make">Compilez avec Make</h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["compilation"]["compiler"];
                            foreach($m_ds as $m_di) {
                            $m_link = str_replace("/NMake/", "/Make/", $m_di["link"]);
                            ?>
                            <li class="mrgb"><i class="fa-li fa fa-chevron-right"></i>
                                <a class="hvra" href="<?php echo $m_link; ?>">
                                    <?php echo $m_di["name"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
                <!-- ============================================ -->
                <div class="tal pgCt10">
                    <h3 class="clra" id="CMake">Compilez avec CMake</h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["compilation"]["compiler"];
                            foreach($m_ds as $m_di) {
                            $m_link = str_replace("/NMake/", "/CMake/NMake/", $m_di["link"]);
                            ?>
                            <li class="mrgb"><i class="fa-li fa fa-chevron-right"></i>
                                <a class="hvra" href="<?php echo $m_link; ?>">
                                    <?php echo $m_di["name"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
                <!-- ============================================ -->
                <div class="tal pgCt10">
                    <h3 class="clra" id="QMake">Compilez avec QMake</h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["compilation"]["compiler"];
                            foreach($m_ds as $m_di) {
                            $m_link = str_replace("/NMake/", "/QMake/NMake/", $m_di["link"]);
                            ?>
                            <li class="mrgb"><i class="fa-li fa fa-chevron-right"></i>
                                <a class="hvra" href="<?php echo $m_link; ?>">
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
            <div class="bga">
                <h1 class="bga clrb pgCt20" id="Notions">Notions de Base</h1>
                <div class="tal pgCt10">
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["basics"];
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
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Patron_Conception">
                    <a class="clrb" href="#Sommaire">
                        Patron de Conception
                    </a>
                </h1>
                <!-- ============================================ -->
                <div class="tal pgCt10">
                    <h3 id="Patron_Creation">
                        <a class="clra" href="#Patron_Conception">
                            Patron de Création
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["design_pattern"]["creational"];
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
