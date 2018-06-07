<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Tutoriels.json");

    GConfig::Instance()->setData("title", "Tutoriels");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Tutoriels");

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainBody">
    <!-- ============================================ -->
    <div class="Parallax Binary">
        <div class="Img">
            <div class="Caption">
                <div class="Text">Tutoriels</div>
            </div>
        </div>
        <div class="Body">
            <div><?php echo join(" ", $lData["intro"]) ?></div>
        </div>
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
