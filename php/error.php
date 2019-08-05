<?php
     require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
        
    GConfig::Instance()->setData("TITLE", "ERREUR");

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainBody">
    <!-- ============================================ -->
    <div class="Parallax">
        <div class="Img Error">
            <div class="Caption">
                <div class="Text">PAGE NON TROUVEE</div>
            </div>
        </div>
        <div class="Body2 Orange">
            <div class="Row0 Italic Center">La page que vous cherchiez n'existe pas...</div>
        </div>
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
