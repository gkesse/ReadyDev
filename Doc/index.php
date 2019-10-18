<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Doc.json");
    GAdmin::Instance()->validate();

    GConfig::Instance()->setData("title", "Documentation sur ReadyDev");
    GConfig::Instance()->setData("menu", "Doc");
    GConfig::Instance()->setData("view", "Doc");

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
