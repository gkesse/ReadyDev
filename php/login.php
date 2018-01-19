<!-- ============================================ -->
<div class="pgCt10">
    <div class="bgra">
        <h1 class="bgra clrb pgCt20">Connexion</h1>
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
                    <?php $m_ds = $m_data["password"]; ?>
                    <div class="pgCr05">
                        <?php echo $m_ds["label"]; ?>
                        <span class="erra">(*)
                            <?php echo $m_check[$m_ds["id"]."Error"]; ?>
                        </span>
                    </div>
                    <div class="bgra brda brra <?php echo $m_check[$m_ds["id"]]; ?>">
                        <i class="fltl ftac <?php echo $m_ds["icon"]; ?>"></i>
                        <div class="mglb">
                            <input value="<?php echo $m_check[$m_ds["id"]."Value"]; ?>" type="password"
                            name="<?php echo $m_ds["id"]; ?>"
                            placeholder="<?php echo $m_ds["placeholder"]; ?>"/>
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
