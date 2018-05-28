<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Accueil.json");

    GConfig::Instance()->setData("title", "Accueil");
    GConfig::Instance()->setData("menu", "Accueil");
    GConfig::Instance()->setData("view", "Accueil");

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainBody">
    <!-- ============================================ -->
    <div class="Parallax Binary">
        <div class="Img">
            <div class="Caption">
                <div class="Text">ReadyDev</div>
            </div>
        </div>
        <div class="Body">
            <div><?php echo join(" ", $lData["readydev"]) ?></div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="Parallax">
        <div class="Img">
            <div class="Caption">
                <div class="Text">PAGE NON TROUVEE</div>
            </div>
        </div>
        <div class="Body">
            <div>La page que vous cherchiez n'existe pas...</div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="Parallax">
        <div class="Img">
            <div class="Caption">
                <div class="Text">PAGE NON TROUVEE</div>
            </div>
        </div>
        <div class="Body">
            <div>La page que vous cherchiez n'existe pas...</div>
        </div>
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
