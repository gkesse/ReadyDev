<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Go_Qt_Style.json");
    
    GConfig::Instance()->setData("title", "Go - Qt - Ajouter un style");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Go_Qt_Style");
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

