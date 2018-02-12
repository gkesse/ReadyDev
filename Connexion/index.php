<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    GPostRedirectGet::Instance()->redirect();
    
    $m_data = GJson::Instance()->getData("data/json/Connexion.json");
    GConfig::Instance()->setData("login", $m_data["login"]);
    $m_check = GAdmin::Instance()->check();
    
    GConfig::Instance()->setData("title", "Connexion");
    GConfig::Instance()->setData("menu", "Connexion");
    GConfig::Instance()->setData("view", "Connexion");
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg admin">
    <div class="mrga pgBd">
        <!-- ============================================ -->
        <?php 
            if(!isset($_SESSION["login"])) {
                require $_SERVER["DOCUMENT_ROOT"]."/php/login.php";
            }
        ?>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
