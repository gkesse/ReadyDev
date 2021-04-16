<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/PHP_Cours_Admin_System.json");
    
    GConfig::Instance()->setData("title", "PHP - Créer un système d'administration");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "PHP_Cours_Admin_System");
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

