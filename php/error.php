<?php
     require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
        
    GConfig::Instance()->setData("title", "ERREUR");

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd">
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra pgCt20">
                <i class="clri fa fa-exclamation-triangle"></i>
                <span class="clri">PAGE NON TROUVEE</span>
            </div>
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
