<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Admin.json");
    GAdmin::Instance()->validate();
    
    GConfig::Instance()->setData("title", "Administration");
    GConfig::Instance()->setData("menu", "Admin");
    GConfig::Instance()->setData("view", "Admin");
    GConfig::Instance()->setData("code_prettify", false);
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd">
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra pgCt20" id="Sommaire-Admin">
                    <a class="clrb" href="#">
                        Sommaire
                    </a>
                </h1>
                <div class="txal pgCt10">
                    <ul class="fa-ul">
                        <?php 
                            $lDs = $lData["summary"];
                            foreach($lDs as $lDi) {
                            ?>
                            <li>
                                <i class="fa-li fa fa-book clrg"></i>
								<?php 
									$lLink = "#";
									$lLink .= GGlobal::Instance()->getLink($lDi["name"]); 
								?>
                                <a class="hvra clrg" href="<?php echo $lLink; ?>">
                                    <?php echo $lDi["name"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
            </div>
        </div>
        <!-- ============================================ -->
		<?php require "page/sitemap.php"; ?>
		<?php require "page/editor.php"; ?>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
        