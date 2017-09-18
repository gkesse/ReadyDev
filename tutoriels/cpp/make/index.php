<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/nmake.json");
    
    GHeader::Instance()->setTitle("NMake");
    GHeader::Instance()->setMenu("Tutoriels");
    GHeader::Instance()->setView("NMake");
    GHeader::Instance()->setLink($m_data["links"]);
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";   
?>
<!-- ============================================ -->
<div class="pgBg">
    <!-- ============================================ -->
    <div class="mrga pgBd">
        <!-- ============================================ -->
        <?php
            $m_ds = $m_data["details"];
            for($i = 0; $i < count($m_ds); $i++) {
                $m_di = $m_ds[$i];
            ?>
            <!-- ============================================ -->
            <div class="pgCt20 tal">
                <div class="bga">
                    <h1 class="bga pgCt20 mba tac">
                        <a class="clrb" href="#summary" id="<?php echo $m_di["id"]; ?>">
                            <?php echo $m_di["name"]; ?>
                        </a>
                    </h1>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["description"])) { ?>
                        <div class="pgCt10">
                            <?php echo join(" ", $m_di["description"]); ?>
                        </div>
                    <?php } ?>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["menu"])) { ?>
                        <div class="pgCt10">
                            <ul class="fa-ul">
                                <?php 
                                    for($j = 0; $j < count($m_di["menu"]); $j++) {
                                        $m_dj = $m_di["menu"][$j];
                                    ?>
                                    <li class="mbb"><i class="fa-li fa fa-chevron-right"></i><a href="<?php echo $m_dj["link"]; ?>"><?php echo $m_dj["name"]; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["section"])) { ?>
                        <?php 
                            for($j = 0; $j < count($m_di["section"]); $j++) {
                                $m_dj = $m_di["section"][$j];
                            ?>
                            <!-- ============================================ -->
                            <?php if(isset($m_dj["name"])) { ?>
                                <div class="pgCt10">
                                    <a class="bga dibm ffb clra pgCt10" href="#summary">
                                        <?php echo $m_dj["name"]; ?>
                                    </a>    
                                </div>
                            <?php } ?>
                            <!-- ============================================ -->
                            <?php if(isset($m_dj["tools"])) { ?>
                                <div class="pgCt10">
                                    <ul class="fa-ul">
                                        <?php 
                                            for($k = 0; $k < count($m_dj["tools"]); $k++) {
                                                $m_dk = $m_dj["tools"][$k];
                                            ?>
                                            <li><i class="fa-li fa fa-check"></i><?php echo $m_dk; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            <?php } ?>
                            <!-- ============================================ -->
                            <?php if(isset($m_dj["description"])) { ?>
                                <div class="pgCt10">
                                    <?php echo join(" ", $m_dj["description"]); ?>
                                </div>
                            <?php } ?>
                            <!-- ============================================ -->
                            <?php if(isset($m_dj["file"])) { ?>
                                <div class="ffc clrb pgCt10">
                                    <?php echo $m_dj["file"]; ?>
                                </div>
                            <?php } ?>
                            <!-- ============================================ -->
                            <?php if(isset($m_dj["code"])) { ?>
                                <div class="pgCt10">
                                    <div class="bga">
                                        <div class="">
                                            <div class="dibm pgCt05"><i class="fa fa-clipboard"></i> Copier</div>
                                        </div>
                                        <?php $m_code = GFile::Instance()->getData($m_dj["code"]); ?>
                                        <pre><xmp class="prettyprint linenums"><?php echo $m_code; ?></xmp></pre>
                                    </div>
                                    </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dj["resultat"])) { ?>
                                    <div class="ova pgCt10">
                                    <img src="<?php echo $m_dj["resultat"]; ?>" alt="resultat.png"/>
                                    </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    <?php } ?>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    </div>
                                    </div>
                                    <!-- ============================================ -->
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    </div>
                                    </div>
                                    <!-- ============================================ -->
                                    <?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
                                                                        