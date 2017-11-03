<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php"; ?>
<!-- ============================================ -->
<?php    
    $m_data = GJson::Instance()->getData("data/json/Presentation.json");
    
    GHeader::Instance()->setTitle("Présentation");
    GHeader::Instance()->setMenu("Présentation");
    GHeader::Instance()->setView("Presentation");
?>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/header.php"; ?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd pgCr10">
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Intro">
                    <a class="clrb" href="#">
                        Je me présente 
                    </a>
                </h1>
                <div class="tal pgCt10">
                    <?php $m_ds = $m_data["avatar"]; ?>
                    <img class="fl brb" src="<?php echo $m_ds["src"]; ?>" 
                    alt="<?php echo $m_ds["alt"]; ?>"
                    width="<?php echo $m_ds["width"]; ?>"/>
                    <?php $m_ds = $m_data["intro"]; ?>
                    <div class="mla"><?php echo join(" ", $m_ds); ?></div>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Sommaire">
                    <a class="clrb" href="#Intro">
                        Je vous propose 
                    </a>
                </h1>
                <div class="tal pgCt10">
                    <?php 
                        $m_ds = $m_data["summary"];
                        echo $m_ds["msg"]; 
                        ?>
                    <div class="pgCr10">
                        <ul class="fa-ul">
                            <?php 
                                $m_dsi = $m_ds["list"];
                                foreach($m_dsi as $m_di) {
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
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Parcours">
                    <a class="clrb" href="#Intro">
                        Mon parcours scolaire 
                    </a>
                </h1>
                <div class="tal pgCt10">
                    <?php $m_ds = $m_data["cursus"]; ?>
                    <div class="pgCr10">
                        <div><?php echo join(" ", $m_ds["msg"]); ?></div>
                    </div>
                    <!-- ============================================ -->
                    <div class="pgCr10">
                        <div><?php echo join(" ", $m_ds["msg2"]); ?></div>
                    </div>
                    <!-- ============================================ -->
                    <div class="pgCr10">
                        <ul class="fa-ul">
                            <?php 
                                $m_dsi = $m_ds["list"];
                                foreach($m_dsi as $m_dj) {
                                ?>
                                <li class="">
                                    <i class="fa-li fa fa-check"></i>
                                    <?php echo join(" ", $m_dj); ?>
                                </li>
                            <?php } ?>
                        </ul>            
                    </div>
                    <!-- ============================================ -->
                    <div class="pgCr10">
                        <div><?php echo join(" ", $m_ds["msg3"]); ?></div>
                    </div>
                    <!-- ============================================ -->
                    <div class="pgCr10">
                        <ul class="fa-ul">
                            <?php 
                                $m_dsi = $m_ds["list2"];
                                foreach($m_dsi as $m_dj) {
                                ?>
                                <li class="">
                                    <i class="fa-li fa fa-check"></i>
                                    <?php echo join(" ", $m_dj); ?>
                                </li>
                            <?php } ?>
                        </ul>            
                    </div>
                    <!-- ============================================ -->
                    <div class="pgCr10">
                        <div><?php echo join(" ", $m_ds["msg4"]); ?></div>
                    </div>
                    <!-- ============================================ -->
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Experiences">
                    <a class="clrb" href="#Intro">
                        Mes expériences professionnelles 
                    </a>
                </h1>
                <div class="tal">
                    <?php $m_ds = $m_data["experience"]; ?>
                    <!-- ============================================ -->
                    <div class="pgCt10">
                        <?php echo join(" ", $m_ds["msg"]); ?>
                    </div>
                    <!-- ============================================ -->
                    <ul class="fa-ul">
                        <?php 
                            $m_dsi = $m_ds["array"];
                            $m_count = count($m_dsi);
                            $i = 0;
                            foreach($m_dsi as $m_dj) {
                                if($i != 0) {echo "<hr/><br/>";} $i++;
                            ?>
                            <!-- ============================================ -->
                            <li class="pgCr10">
                                <i class="fa-li fa fa-building-o pgCr10"></i>
                                <div class="psr">
                                    <?php echo $m_dj["company"]; ?>,<br/>
                                    <!-- ============================================ -->
                                    <?php echo join(" ", $m_dj["description"]); ?>
                                    <!-- ============================================ -->
                                    <span class="psaa clrb">
                                        <?php echo $i . "/" . $m_count; ?>
                                    </span>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dj["info"])) { ?>
                                        <div class="pgCr10">
                                            <?php echo $m_dj["info"]; ?>
                                        </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dj["list"])) { ?>
                                        <ul class="fa-ul">
                                            <?php 
                                                $m_dsj = $m_dj["list"];
                                                foreach($m_dsj as $m_dk) {
                                                ?>
                                                <li class="">
                                                    <i class="fa-li fa fa-check"></i>
                                                    <?php echo join(" ", $m_dk); ?>
                                                </li>
                                            <?php } ?>
                                        </ul>            
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dj["info2"])) { ?>
                                        <div class="pgCr10">
                                            <?php echo $m_dj["info2"]; ?>
                                        </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dj["list2"])) { ?>
                                        <ul class="fa-ul">
                                            <?php 
                                                $m_dsj = $m_dj["list2"];
                                                foreach($m_dsj as $m_dk) {
                                                ?>
                                                <li class="">
                                                    <i class="fa-li fa fa-check"></i>
                                                    <?php echo join(" ", $m_dk); ?>
                                                </li>
                                            <?php } ?>
                                        </ul>            
                                    <?php } ?>
                                    <!-- ============================================ -->
                                </div>
                                <!-- ============================================ -->
                            </li>
                            <!-- ============================================ -->
                        <?php } ?>
                    </ul>
                    <!-- ============================================ -->
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Competences">
                    <a class="clrb" href="#Sommaire">
                        Mes compétences 
                    </a>
                </h1>
                <?php $m_ds = $m_data["skill"]; ?>
                <div class="tal pgCt10">
                    <?php echo join(" ", $m_ds["description"]); ?>
                </div>
                <div class="tal pgCt10">
                    <ul class="fa-ul">
                        <?php 
                            $m_dsi = $m_ds["list"];
                            foreach($m_dsi as $m_di) {
                            ?>
                            <li class="">
                                <i class="fa-li fa fa-check"></i>
                                <?php echo join(" ", $m_di); ?>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga pgCt20" id="Atouts">
                    <a class="clrb" href="#Sommaire">
                        Mes atouts 
                    </a>
                </h1>
                <?php $m_ds = $m_data["asset"]; ?>
                <div class="tal pgCt10">
                    <?php echo join(" ", $m_ds["description"]); ?>
                </div>
                <div class="tal pgCt10">
                    <ul class="fa-ul">
                        <?php 
                            $m_dsi = $m_ds["list"];
                            foreach($m_dsi as $m_di) {
                            ?>
                            <li class="">
                                <i class="fa-li fa fa-check"></i>
                                <?php echo join(" ", $m_di); ?>
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
