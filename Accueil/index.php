<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    GSetting::Instance()->load("data/config/config.txt");
    GProcess::Instance()->run();
    
    $lData = GJson::Instance()->getData("data/json/Accueil.json");

    GConfig::Instance()->setData("TITLE", "Accueil");
    GConfig::Instance()->setData("MENU", "Accueil");
    GConfig::Instance()->setData("VIEW", "Accueil");

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainBody">
    <!-- ============================================ -->
    <?php require "page/main.php"; ?>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
