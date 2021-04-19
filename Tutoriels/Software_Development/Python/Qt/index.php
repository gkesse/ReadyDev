<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Python_Qt.json");
    
    GConfig::Instance()->setData("title", "Python - Qt");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Python_Qt");
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

