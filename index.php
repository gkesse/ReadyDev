<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/cv.json");
    
    GHeader::Instance()->setTitle("CV");
    GHeader::Instance()->setMenu("CV");
    GHeader::Instance()->setView("CV");
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
                            <?php if(isset($m_dj["description"])) { ?>
                                <div class="pgCt10">
                                    <?php if(isset($m_dj["icon"])) { ?>
                                        <div class="fl tac">
                                            <i class="faa <?php echo $m_dj["icon"]; ?>"></i><br/>
                                            <?php if($m_di["id"] == "careers") { ?>
                                            <span class="clrb">
                                                <?php 
                                                    $m_dt = count($m_di["section"]);
                                                    echo ($m_dt-$j)."/".$m_dt; 
                                                ?>
                                            </span>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <div class='mla'><?php echo join(" ", $m_dj["description"]); ?></div>
                                </div>
                            <?php } ?>
                            <!-- ============================================ -->
                            <?php if(isset($m_dj["section"])) { ?>
                                <?php 
                                    for($k = 0; $k < count($m_dj["section"]); $k++) {
                                        $m_dk = $m_dj["section"][$k];
                                    ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dk["intro"])) { ?>
                                        <?php if($j != 0) { ?>
                                            <hr/>
                                        <?php } ?>
                                        <div class="pgCt10">
                                            <?php if(isset($m_dk["icon"])) { ?>
                                                <div class="fl tac">
                                                    <i class="faa <?php echo $m_dk["icon"]; ?>"></i><br/>
                                                    <span class="clrb">
                                                        <?php 
                                                            $m_dt = count($m_di["section"]);
                                                            echo ($m_dt-$j)."/".$m_dt; 
                                                        ?>
                                                    </span>
                                                </div>
                                            <?php } ?>
                                            <div class='mla'><?php echo join(" ", $m_dk["intro"]); ?></div>
                                        </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dk["name"])) { ?>
                                        <div class="pgCt10">
                                            <a class="bga dibm ffb clra pgCt10" href="#experiences">
                                                <?php echo $m_dk["name"]; ?>
                                            </a>    
                                        </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dk["description"])) { ?>
                                        <div class="pgCt10">
                                            <?php echo join(" ", $m_dk["description"]); ?>
                                        </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dk["article"])) { ?>
                                        <div class="pgCt10">
                                            <ul class="fa-ul">
                                                <?php 
                                                    for($p = 0; $p < count($m_dk["article"]); $p++) {
                                                        $m_dp = $m_dk["article"][$p];
                                                    ?>
                                                    <li><i class="fa-li <?php echo $m_dk["icon"]; ?>"></i><?php echo $m_dp; ?></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                <?php } ?>
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
