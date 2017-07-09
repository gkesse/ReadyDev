<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/cpp.json");
    
    GHeader::Instance()->setTitle("C/C++");
    GHeader::Instance()->setMenu("Tutoriels");
    GHeader::Instance()->setView("Cpp");
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
                    <h1 class="bga pgCt20 tac">
                        <a class="clrb" href="#main_menu" id="<?php echo $m_di["id"]; ?>">
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
                    <?php if(isset($m_di["box"])) { ?>
                        <div class="pgRw tac">
                            <?php 
                                for($j = 0; $j < count($m_di["box"]); $j++) {
                                    $m_dj = $m_di["box"][$j];
                                ?>
                                <!-- ============================================ -->
                                <div class="rsa pgCl06">
                                    <a class="bgd dibm bdb evtc" href="<?php echo $m_dj["link"]; ?>">
                                        <div class="bgg">
                                            <div class="bga htb tac dtlf">
                                                <div class="dtcm">
                                                    <i class="fse fa <?php echo $m_dj["icon"]; ?>"></i>
                                                </div>
                                            </div>
                                            <div class="htc tac dtlf">
                                                <div class="dtcm">
                                                    <div class="fsd ffb pdb"><?php echo $m_dj["theme"]; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pdc fsc clrd tac"><?php echo $m_dj["description"]; ?></div>
                                    </a>
                                </div>
                                <!-- ============================================ -->
                            <?php } ?>
                        </div>
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
