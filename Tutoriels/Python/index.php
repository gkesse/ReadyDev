<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Python.json");
    
    GConfig::Instance()->setData("title", "Python");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Python");
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
                <h1 class="bgra pgCt20" id="Utilisation">
                    <a class="clrb" href="#Sommaire">
                        Utilisation
                    </a>
                </h1>
                <!-- ============================================ -->
                <div class="txal pgCt10">
                    <h3 class="pgCr05" id="Utilitaire_Python">
                        <a class="clra" href="#Introduction">
                            Utilisez Python
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["execute"]["python"];
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
                <h1 class="bgra pgCt20" id="Notions_Base">
                    <a class="clrb" href="#Sommaire">
                        Notions de Base
                    </a>
                </h1>
                <!-- ============================================ -->
                <div class="txal pgCt10">
                    <h3 class="pgCr05" id="Console">
                        <a class="clra" href="#Notions_Base">
                            Console
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["console"];
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
                    <h3 class="pgCr05" id="Clavier">
                        <a class="clra" href="#Notions_Base">
                            Clavier
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["keyboard"];
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
                    <h3 class="pgCr05" id="Fonctions">
                        <a class="clra" href="#Notions_Base">
                            Fonctions
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["function"];
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
                    <h3 class="pgCr05" id="Importation">
                        <a class="clra" href="#Notions_Base">
                            Importation
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["import"];
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
                    <h3 class="pgCr05" id="Structures_Conditionnelles">
                        <a class="clra" href="#Notions_Base">
                            Structures Conditionnelles
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["condition"];
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
                    <h3 class="pgCr05" id="Boucles">
                        <a class="clra" href="#Notions_Base">
                            Boucles
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["loop"];
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
                    <h3 class="pgCr05" id="Listes">
                        <a class="clra" href="#Notions_Base">
                            Listes
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["list"];
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
                    <h3 class="pgCr05" id="Assertions">
                        <a class="clra" href="#Notions_Base">
                            Dictionnaires
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["dictionary"];
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
                    <h3 class="pgCr05" id="Assertions">
                        <a class="clra" href="#Notions_Base">
                            Assertions
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["assert"];
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
                    <h3 class="pgCr05" id="Conversions">
                        <a class="clra" href="#Notions_Base">
                            Conversions
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["convert"];
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
                    <h3 class="pgCr05" id="Exceptions">
                        <a class="clra" href="#Notions_Base">
                            Exceptions
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["exception"];
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
                    <h3 class="pgCr05" id="Exceptions">
                        <a class="clra" href="#Notions_Base">
                            Fichiers
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["file"];
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
                    <h3 class="pgCr05" id="Exceptions">
                        <a class="clra" href="#Notions_Base">
                            Sérialisation
                        </a>
                    </h3>
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["notion"]["serialize"];
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
