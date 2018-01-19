<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
        
    $m_data = GJson::Instance()->getData("data/json/Admin.json");
    GAdmin::Instance()->validateAdmin();
    
    GConfig::Instance()->setData("title", "Administration");
    GConfig::Instance()->setData("menu", "Admin");
    GConfig::Instance()->setData("view", "Admin");
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg admin">
    <div class="mrga pgBd">
        <!-- ============================================ -->
        Admin
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
