<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    GPostRedirectGet::Instance()->redirect();
    
    $m_check = GContact::Instance()->check();
    $m_data = GJson::Instance()->getData("data/json/Contacts.json");
    
    GConfig::Instance()->setData("title", "Contacts");
    GConfig::Instance()->setData("menu", "Contacts");
    GConfig::Instance()->setData("view", "Contacts");
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg contacts">
    <div class="mrga pgBd">
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra pgCt20" id="Formulaire">
                    <a class="clrb" href="#">
                        Formulaire  
                    </a>
                </h1>
                <div class="txal pgCt10">
                    <!-- ============================================ -->
                    <?php if(!empty($_POST)) { ?>
                        <div class="pgCr05">
                            <?php echo $m_check["validate"]; ?>
                        </div>
                    <?php } ?>
                    <!-- ============================================ -->
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <!-- ============================================ -->
                        <div class="pgCr05">
                            <?php $m_ds = $m_data["name"]; ?>
                            <div class="pgCr05">
                                <?php echo $m_ds["label"]; ?>
                                <span class="erra">(*)
                                    <?php echo $m_check[$m_ds["id"]."Error"]; ?>
                                </span>
                            </div>
                            <div class="bgra brda brra <?php echo $m_check[$m_ds["id"]]; ?>">
                                <i class="fltl ftac <?php echo $m_ds["icon"]; ?>"></i>
                                <div class="mglb">
                                    <input value="<?php echo $m_check[$m_ds["id"]."Value"]; ?>" type="text"
                                    name="<?php echo $m_ds["id"]; ?>"
                                    placeholder="<?php echo $m_ds["placeholder"]; ?>"/>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================ -->
                        <div class="pgCr05">
                            <?php $m_ds = $m_data["email"]; ?>
                            <div class="pgCr05">
                                <?php echo $m_ds["label"]; ?>
                                <span class="erra">(*)
                                    <?php echo $m_check[$m_ds["id"]."Error"]; ?>
                                </span>
                            </div>
                            <div class="bgra brda brra <?php echo $m_check[$m_ds["id"]]; ?>">
                                <i class="fltl ftac <?php echo $m_ds["icon"]; ?>"></i>
                                <div class="mglb">
                                    <input value="<?php echo $m_check[$m_ds["id"]."Value"]; ?>" type="text"
                                    name="<?php echo $m_ds["id"]; ?>"
                                    placeholder="<?php echo $m_ds["placeholder"]; ?>"/>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================ -->
                        <div class="pgCr05">
                            <?php $m_ds = $m_data["subject"]; ?>
                            <div class="pgCr05">
                                <?php echo $m_ds["label"]; ?>
                                <span class="erra">(*)
                                    <?php echo $m_check[$m_ds["id"]."Error"]; ?>
                                </span>
                            </div>
                            <div class="bgra brda brra <?php echo $m_check[$m_ds["id"]]; ?>">
                                <i class="fltl ftac <?php echo $m_ds["icon"]; ?>"></i>
                                <div class="mglb">
                                    <input value="<?php echo $m_check[$m_ds["id"]."Value"]; ?>" type="text"
                                    name="<?php echo $m_ds["id"]; ?>"
                                    placeholder="<?php echo $m_ds["placeholder"]; ?>"/>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================ -->
                        <div class="pgCr05">
                            <?php $m_ds = $m_data["message"]; ?>
                            <div class="pgCr05">
                                <?php echo $m_ds["label"]; ?>
                                <span class="erra">(*)
                                    <?php echo $m_check[$m_ds["id"]."Error"]; ?>
                                </span>
                            </div>
                            <div class="bgra brda brra <?php echo $m_check[$m_ds["id"]]; ?>">
                                <i class="fltl ftac <?php echo $m_ds["icon"]; ?>"></i>
                                <div class="mglb">
                                    <textarea class="message" rows="11" cols="100"
                                    name="<?php echo $m_ds["id"]; ?>" 
                                    maxlength="<?php echo $m_ds["max"]; ?>" 
                                    placeholder="<?php echo $m_ds["placeholder"]; ?>"><?php echo $m_check[$m_ds["id"]."Value"]; ?></textarea>
                                </div>
                                <div class="pddc">
                                    <label class="number"></label>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================ -->
                        <div class="txar pgCr05">
                            <?php $m_ds = $m_data["submit"]; ?>
                            <button class="bgra brra evta"
                            type="submit" name="<?php echo $m_ds["id"]; ?>" 
                            value="<?php echo $m_ds["label"]; ?>">
                                <i class="<?php echo $m_ds["icon"]; ?>"></i>
                                <?php echo $m_ds["label"]; ?>
                            </button>
                        </div>
                        <!-- ============================================ -->
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="mxwa mrga pgCt10">
            <div class="bgra">
                <h1 class="bgra pgCt20">
                    <a class="clrb" href="#Formulaire">
                        Carte Profesionnelle  
                    </a>
                </h1>
                <div class="">
                    <?php $m_ds = $m_data["card"]; ?>
                    <img src="<?php echo $m_ds["src"]; ?>" 
                    alt="<?php echo $m_ds["src"]; ?>" 
                    width="<?php echo $m_ds["width"]; ?>"/>
                </div>
                <div class="pgCt05">
                    <?php echo join(" ", $m_ds["description"]); ?>
                </div>
                <?php $m_di = $m_ds["mail"]; ?>
                <div class="pgCt10">
                    <a href="mailto:<?php echo $m_di["mailto"]; ?>?subject=<?php echo $m_di["subject"]; ?>&body=<?php echo $m_di["body"]; ?>">
                        <i class="evta ftaa <?php echo $m_di["icon"]; ?>"></i>
                    </a>                        
                </div>
            </div>
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<script src="/js/class/GContact.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->