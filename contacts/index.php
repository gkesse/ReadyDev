<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    GPostRedirectGet::Instance()->redirect();
    
    $m_check = GContact::Instance()->check();
    $m_data = GJson::Instance()->getData("data/json/contacts.json");
    
    GHeader::Instance()->setTitle("Contacts");
    GHeader::Instance()->setMenu("Contacts");
    GHeader::Instance()->setView("Contacts");
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";   
?>
<!-- ============================================ -->
<div class="pgBg contacts">
    <!-- ============================================ -->
    <?php
        $m_ds = $m_data["details"];
        for($i = 0; $i < count($m_ds); $i++) {
            $m_di = $m_ds[$i];
            $m_width = "pgBd";
            if(isset($m_di["width"])) {
                $m_width = $m_di["width"];
            }
        ?>
        <!-- ============================================ -->
        <div class="mrga <?php echo $m_width; ?>">
            <!-- ============================================ -->
            <div class="pgCt20 tal">
                <div class="bga">
                    <h1 class="bga pgCt20 tac">
                        <a class="clrb" href="#main_menu" id="<?php echo $m_di["id"]; ?>">
                            <?php echo $m_di["name"]; ?>
                        </a>
                    </h1>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["form"])) { ?>
                        <!-- ============================================ -->
                        <div class="pgCt05">
                            <!-- ============================================ -->
                            <?php if(!empty($_POST)) { ?>
                                <div class="pgCr05">
                                    <?php echo $m_check["validate"]; ?>
                                </div>
                            <?php } ?>
                            <!-- ============================================ -->
                            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                <?php
                                    for($j = 0; $j < count($m_di["form"]); $j++) {
                                        $m_dj = $m_di["form"][$j];
                                    ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dj["input"])) { ?>
                                        <?php $m_dk = $m_dj["input"]; ?>
                                        <div class="pgCr05">
                                            <div class="pgCr05">
                                                <?php echo $m_dk["label"]; ?>
                                                <span class="erra">(*)
                                                    <?php echo $m_check[$m_dk["name"]."Error"]; ?>
                                                </span>
                                                </div>
                                                <div class="bga bda bra <?php echo $m_check[$m_dk["name"]]; ?>">
                                                    <i class="fl fac <?php echo $m_dk["icon"]; ?>"></i>
                                                    <div class="mlb">
                                                        <input value="<?php echo $m_check[$m_dk["name"]."Value"]; ?>" type="text"
                                                        name="<?php echo $m_dk["name"]; ?>"
                                                        placeholder="<?php echo $m_dk["placeholder"]; ?>"/>
                                                    </div>
                                                </div>
                                        </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dj["textarea"])) { ?>
                                        <div class="pgCr05">
                                            <?php $m_dk = $m_dj["textarea"]; ?>
                                            <div class="pgCr05">
                                                <?php echo $m_dk["label"]; ?>
                                                <span class="erra">(*)
                                                    <?php echo $m_check[$m_dk["name"]."Error"]; ?>
                                                </span>
                                            </div>
                                            <div class="bga bda bra <?php echo $m_check[$m_dk["name"]]; ?>">
                                                <i class="fl fac <?php echo $m_dk["icon"]; ?>"></i>
                                                <div class="mlb">
                                                    <textarea class="message" rows="11" cols="100"
                                                    name="<?php echo $m_dk["name"]; ?>" 
                                                    maxlength="<?php echo $m_dk["max"]; ?>" 
                                                    placeholder="<?php echo $m_dk["placeholder"]; ?>"><?php echo $m_check[$m_dk["name"]."Value"]; ?></textarea>
                                                </div>
                                                <div class="pdc">
                                                    <label class="number"></label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                    <?php if(isset($m_dj["button"])) { ?>
                                        <?php $m_dk = $m_dj["button"]; ?>
                                        <div class="tar pgCr05">
                                            <div class="bga bra pla dibm evta">
                                                <i class="<?php echo $m_dk["icon"]; ?>"></i>
                                                <button type="submit" 
                                                name="<?php echo $m_dk["name"]; ?>" 
                                                value="<?php echo $m_dk["label"]; ?>">
                                                    <?php echo $m_dk["label"]; ?>
                                                </button>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <!-- ============================================ -->
                                <?php } ?>
                            </form>
                        </div>
                    <?php } ?>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["img"])) { ?>
                        <?php $m_dk = $m_di["img"]; ?>
                        <img src="<?php echo $m_dk["src"]; ?>" 
                        alt="<?php echo $m_dk["src"]; ?>" 
                        width="<?php echo $m_dk["width"]; ?>"/>
                    <?php } ?>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["description"])) { ?>
                        <div class="pgCt05 tac">
                            <?php echo join(" ", $m_di["description"]); ?>
                        </div>
                    <?php } ?>
                    <!-- ============================================ -->
                    <?php if(isset($m_di["mail"])) { ?>
                        <?php $m_dk = $m_di["mail"]; ?>
                        <div class="pgCt10 tac">
                            <a href="mailto:<?php echo $m_dk["mailto"]; ?>?subject=<?php echo $m_dk["subject"]; ?>&body=<?php echo $m_dk["body"]; ?>">
                                <i class="evta faa <?php echo $m_dk["icon"]; ?>"></i>
                            </a>                        
                        </div>
                    <?php } ?>
                    <!-- ============================================ -->
                </div>
            </div>
            <!-- ============================================ -->                    
        </div>
    <?php } ?>
</div>
<!-- ============================================ -->
<script src="/js/class/GContact.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
