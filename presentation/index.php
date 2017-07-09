<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/presentation.json");
    
    GHeader::Instance()->setTitle("Présentation");
    GHeader::Instance()->setMenu("Présentation");
    GHeader::Instance()->setView("Presentation");
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
                    <h1 class="bga pgCt20 tac">
                        <a class="clrb" href="#main_menu" id="<?php echo $m_di["id"]; ?>">
                            <?php echo $m_di["name"]; ?>
                        </a>
                    </h1>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["intro"])) { ?>
                        <div class="pgCt10">
                            <?php $m_dj = $m_di["intro"]["img"]; ?>
                            <img class="fl brb" src="<?php echo $m_dj["src"]; ?>" 
                            alt="<?php echo $m_dj["alt"]; ?>"
                            width="<?php echo $m_dj["width"]; ?>"/>
                            <?php $m_dj = $m_di["intro"]; ?>
                            <div class="mla"><?php echo join(" ", $m_dj["description"]); ?></div>
                        </div>
                    <?php } ?>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["description"])) { ?>
                        <div class="pgCt10">
                            <div><?php echo join(" ", $m_di["description"]); ?></div>
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
                            <?php if(isset($m_dj["description"])) { ?>
                                <div class="pgCt10">
                                    <div><?php echo join(" ", $m_dj["description"]); ?></div>
                                </div>
                            <?php } ?>
                            <!-- ============================================ -->
                            <?php if(isset($m_dj["article"])) { ?>
                                <div class="pgCt10">
                                    <ul class="fa-ul">
                                        <?php 
                                            for($k = 0; $k < count($m_dj["article"]); $k++) {
                                                $m_dk = $m_dj["article"][$k];
                                            ?>
                                            <li><i class="fa-li fa fa-check"></i><?php echo join(" ", $m_dk); ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            <?php } ?>
                            <!-- ============================================ -->
                        <?php } ?>
                    <?php } ?>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["article"])) { ?>
                        <ul class="fa-ul">
                            <?php 
                                for($j = 0; $j < count($m_di["article"]); $j++) {
                                    $m_dj = $m_di["article"][$j];
                                ?>
                                <li class="pgCr10"><i class="fa-li fa fa-building-o pgCr10"></i>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dj["company"])) { ?>
                                        <div class="psr">
                                            <?php echo $m_dj["company"]; ?>
                                            <span class="psaa clrb">
                                                <?php 
                                                    $m_dt = count($m_di["article"]);
                                                    echo ($j+1)."/".$m_dt; 
                                                ?>
                                            </span>
                                        </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dj["section"])) { ?>
                                        <?php 
                                            for($k = 0; $k < count($m_dj["section"]); $k++) {
                                                $m_dk = $m_dj["section"][$k];
                                            ?>
                                            <!-- ============================================ -->
                                            <?php if(isset($m_dk["description"])) { ?>
                                                <div class="pgCr05"><?php echo join(" ", $m_dk["description"]); ?></div>
                                            <?php } ?>
                                            <!-- ============================================ -->
                                            <?php if(isset($m_dk["section"])) { ?>
                                                <?php 
                                                    for($p = 0; $p < count($m_dk["section"]); $p++) {
                                                        $m_dp = $m_dk["section"][$p];
                                                    ?>
                                                    <!-- ============================================ -->
                                                    <?php if(isset($m_dp["transition"])) { ?>
                                                        <div class="pgCr05"><?php echo $m_dp["transition"]; ?></div>
                                                    <?php } ?>
                                                    <!-- ============================================ -->
                                                    <?php if(isset($m_dp["article"])) { ?>
                                                        <div class="pgCr05">
                                                            <ul class="fa-ul">
                                                                <?php 
                                                                    for($q = 0; $q < count($m_dp["article"]); $q++) {
                                                                        $m_dq = $m_dp["article"][$q];
                                                                    ?>
                                                                    <li><i class="fa-li fa fa-check"></i><?php echo join(" ", $m_dq); ?></li>
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
                                </li>
                            <?php } ?>
                        </ul>
                        <!-- ============================================ -->
                    <?php } ?>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["box"])) { ?>
                        <div class="pgCt10">
                            <ul class="fa-ul">
                                <?php 
                                    for($j = 0; $j < count($m_di["box"]); $j++) {
                                        $m_dj = $m_di["box"][$j];
                                    ?>
                                    <li><i class="fa-li fa fa-check"></i><?php echo join(" ", $m_dj); ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                    <!-- ============================================ -->
                </div>
            </div>
        <?php } ?>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
