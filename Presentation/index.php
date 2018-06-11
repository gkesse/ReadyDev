<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Presentation.json");
    
    GConfig::Instance()->setData("title", "Présentation");
    GConfig::Instance()->setData("menu", "Présentation");
    GConfig::Instance()->setData("view", "Presentation");

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
