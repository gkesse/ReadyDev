<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Batch.json");
    
    GConfig::Instance()->setData("title", "Batch");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Batch");
    GConfig::Instance()->setData("link", $m_data["links"]);

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

