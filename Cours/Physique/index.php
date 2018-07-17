<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Physique.json");
    
    GConfig::Instance()->setData("title", "Physique");
    GConfig::Instance()->setData("menu", "Cours");
    GConfig::Instance()->setData("view", "Physique");
    GConfig::Instance()->setData("link", $lData["links"]);

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
