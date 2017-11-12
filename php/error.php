<?php
     require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
        
    GHeader::Instance()->setTitle("ERREUR");
    GHeader::Instance()->setMenu("CV");
    GHeader::Instance()->setView("ERREUR");

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd pgCt10">
        <!-- ============================================ -->
        <div class="bga pgCt20 clri">
            <i class="fa fa-exclamation-triangle"></i>
            <span class="">PAGE NON TROUVEE</span>
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
