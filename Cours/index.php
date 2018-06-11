<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Cours.json");
    
    GConfig::Instance()->setData("title", "Cours");
    GConfig::Instance()->setData("menu", "Cours");
    GConfig::Instance()->setData("view", "Cours");

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
