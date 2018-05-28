<?php
     require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
        
    GConfig::Instance()->setData("title", "ERREUR");

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainBody">
    <!-- ============================================ -->
    <div class="Parallax Error">
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
