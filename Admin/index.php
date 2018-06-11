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
<div class="MainBody">
    <!-- ============================================ -->
    <div class="Parallax">
        <div class="Img Binary">
            <div class="Caption">
                <a href="#"><div class="Text">Administration</div></a>
            </div>
        </div>
        <div class="Body2 Orange">
            <div class="Row8">
                <!--?php echo join(" ", $lData["intro"]) ?-->
            </div>
            <div class="Row0">
                <ul class="fa-ul">
                    <?php 
                        $lDataMap = $lData["summary"];
                        foreach($lDataMap as $lItem) {
                        ?>
                        <li>
                            <i class="Icon2 fa-li fa fa-book"></i>
                            <a class="Link4" href="<?php echo $lItem["link"]; ?>">
                                <?php echo $lItem["name"]; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>            
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="Content2">
        <!-- ============================================ -->
		<?php require "page/sitemap.php"; ?>
		<?php require "page/editor.php"; ?>
        <!-- ============================================ -->
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
        