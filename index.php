<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php"; ?>
<!-- ============================================ -->
<?php    
    $m_data = GJson::Instance()->getData("data/json/cv.json");
    
    GHeader::Instance()->setTitle("CV");
    GHeader::Instance()->setMenu("CV");
    GHeader::Instance()->setView("CV");
?>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/header.php"; ?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd pgCr10">
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Sommaire">
                    <a class="clrb" href="#">
                        Ingénieur Développeur Logiciel C/C++/Qt
                    </a>
                </h1>
                <div class="tal pgCt10">
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["summary"];
                            foreach($m_ds as $m_di) {
                            ?>
                            <li class=""><i class="fa-li fa fa-book clrg"></i>
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
                <h1 class="bga pgCt20" id="Diplomes">
                    <a class="clrb" href="#Sommaire">
                        Diplômes
                    </a>
                </h1>
                <div class="tal pgCt10">
                    <?php 
                        $m_ds = $m_data["graduation"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="pgCr10">
                            <div class="fl tac">
                                <i class="faa <?php echo $m_di["icon"]; ?>"></i>
                            </div>
                            <div class='mla'><?php echo join(" ", $m_di["description"]); ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Certificats">
                    <a class="clrb" href="#Sommaire">
                        Certificats
                    </a>
                </h1>
                <div class="tal pgCt10">
                    <?php 
                        $m_ds = $m_data["certificate"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="pgCr10">
                            <div class="fl tac">
                                <i class="faa <?php echo $m_di["icon"]; ?>"></i>
                            </div>
                            <div class='mla'><?php echo join(" ", $m_di["description"]); ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Parcours">
                    <a class="clrb" href="#Sommaire">
                        Parcours Professionnels
                    </a>
                </h1>
                <div class="tal pgCt10">
                    <?php 
                        $m_ds = $m_data["career"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="pgCr10">
                            <div class="fl tac">
                                <i class="faa <?php echo $m_di["icon"]; ?>"></i>
                            </div>
                            <div class='mla'><?php echo join(" ", $m_di["description"]); ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Competences">
                    <a class="clrb" href="#Sommaire">
                        Compétences Informatiques
                    </a>
                </h1>
                <div class="tal pgCt10">
                    <?php 
                        $m_ds = $m_data["skill"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="pgCr10">
                            <div class="fl tac">
                                <i class="faa <?php echo $m_di["icon"]; ?>"></i>
                            </div>
                            <div class='mla'><?php echo join(" ", $m_di["description"]); ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Competences">
                    <a class="clrb" href="#Sommaire">
                        Langues
                    </a>
                </h1>
                <div class="tal pgCt10">
                    <?php 
                        $m_ds = $m_data["language"];
                        foreach($m_ds as $m_di) {
                        ?>
                        <div class="pgCr10">
                            <div class="fl tac">
                                <i class="faa <?php echo $m_di["icon"]; ?>"></i>
                            </div>
                            <div class='mla'><?php echo join(" ", $m_di["description"]); ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Experiences">
                    <a class="clrb" href="#Sommaire">
                        Expériences Professionnelles
                    </a>
                </h1>
                <div class="tal pgCt10">
                    <?php 
                        $m_ds = $m_data["experience"];
                        $m_count = count($m_ds);
                        $i = 0;
                        foreach($m_ds as $m_di) {
                            if($i != 0) {echo "<hr/><br/>";} $i++;
                        ?>
                        <!-- ============================================ -->
                        <div class="pgCr10">
                            <div class="fl tac">
                                <i class="faa <?php echo $m_di["icon"]; ?>"></i><br/>
                                <span class="clrb">
                                    <?php echo ($m_count - $i + 1)."/".$m_count; ?>
                                </span>
                            </div>
                            <div class='mla'><?php echo join(" ", $m_di["intro"]); ?></div>
                        </div>
                        <!-- ============================================ -->
                        <div class="pgCr10">
                            <a class="bga dibm ffb clra pgCt10" href="#Experiences">
                                Contexte
                            </a>    
                        </div>
                        <!-- ============================================ -->
                        <div class="pgCr10">
                            <?php echo join(" ", $m_di["context"]); ?>
                        </div>
                        <!-- ============================================ -->
                        <div class="pgCr10">
                            <a class="bga dibm ffb clra pgCt10" href="#Experiences">
                                Responsabilités
                            </a>    
                        </div>
                        <!-- ============================================ -->
                        <div class="pgCr10">
                            <ul class="fa-ul">
                                <?php 
                                    $m_dsi = $m_di["task"];
                                    foreach($m_dsi as $m_dj) {
                                    ?>
                                    <li>
                                        <i class="fa-li fa fa-check"></i>
                                        <?php echo $m_dj; ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- ============================================ -->
                        <div class="pgCr10">
                            <a class="bga dibm ffb clra pgCt10" href="#Experiences">
                                Résultats 
                            </a>    
                        </div>
                        <!-- ============================================ -->
                        <div class="pgCr10">
                            <ul class="fa-ul">
                                <?php 
                                    $m_dsi = $m_di["result"];
                                    foreach($m_dsi as $m_dj) {
                                    ?>
                                    <li>
                                        <i class="fa-li fa fa-check"></i>
                                        <?php echo $m_dj; ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- ============================================ -->
                        <div class="pgCr10">
                            <a class="bga dibm ffb clra pgCt10" href="#Experiences">
                                Environnements
                            </a>    
                        </div>
                        <!-- ============================================ -->
                        <div class="pgCr10">
                            <ul class="fa-ul">
                                <?php 
                                    $m_dsi = $m_di["tool"];
                                    foreach($m_dsi as $m_dj) {
                                    ?>
                                    <li>
                                        <i class="fa-li fa fa-check"></i>
                                        <?php echo $m_dj; ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- ============================================ -->
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
