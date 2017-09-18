<!-- ============================================ -->
<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/php.json");
    
    GHeader::Instance()->setTitle("PHP");
    GHeader::Instance()->setMenu("Tutoriels");
    GHeader::Instance()->setView("PHP");
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
            <p  id="<?php echo $m_di["id"]; ?>"></p>
            <div class="pgCt20 tal">
                <div class="bga">
                    <h1 class="bga pgCt20 tac">
                        <a class="clrb" href="#summary">
                            <?php echo $m_di["name"]; ?>
                        </a>
                    </h1>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["menu"])) { ?>
                        <div class="pgCt10">
                            <ul class="fa-ul">
                                <?php 
                                    for($j = 0; $j < count($m_di["menu"]); $j++) {
                                        $m_dj = $m_di["menu"][$j];
                                    ?>
                                    <li class="mbb"><i class="fa-li fa fa-chevron-right"></i>
                                        <a href="<?php echo $m_dj["link"]; ?>">
                                            <?php echo $m_dj["name"]; ?>
                                        </a>
                                    </li>
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
                                    <a class="bga dibm ffb clra pgCt10" href="#<?php echo $m_di["id"]; ?>">
                                        <?php echo $m_dj["name"]; ?>
                                    </a>    
                                </div>
                            <?php } ?>
                            <!-- ============================================ -->
                            <?php if(isset($m_dj["description"])) { ?>
                                <div class="pgCt10">
                                    <?php echo join(" ", $m_dj["description"]); ?>
                                </div>
                            <?php } ?>
                            <!-- ============================================ -->
                            <?php if(isset($m_dj["menu"])) { ?>
                                <div class="pgCt10">
                                    <ul class="fa-ul">
                                        <?php 
                                            for($k = 0; $k < count($m_dj["menu"]); $k++) {
                                                $m_dk = $m_dj["menu"][$k];
                                            ?>
                                            <li class="mbb"><i class="fa-li fa fa-chevron-right"></i>
                                                <a href="<?php echo $m_dk["link"]; ?>">
                                                    <?php echo $m_dk["name"]; ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
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
                        <?php } ?>
                        <!-- ============================================ -->
                    <?php } ?>
                    <!-- ============================================ -->
                </div>
            </div>
            <!-- ============================================ -->
        <?php } ?>
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
