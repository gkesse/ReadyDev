<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/CV_02.json");
    
    GConfig::Instance()->setData("TITLE", "Curriculum Vitae");
    GConfig::Instance()->setData("MENU", "CV");
    GConfig::Instance()->setData("VIEW", "CV_02");
    GConfig::Instance()->setData("link", $lData["links"]);
    GConfig::Instance()->setData("dir", __FILE__);

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainBody">
    <div class="Content0">
        <!-- ============================================ -->
        <div class="MainBlock0">
            <?php $lPdf = GPdf::Instance()->getUrl($lData["pdf"]);  ?>
            <object id="pdf" width="100%" class="Content12"
            data="<?php echo $lPdf; ?>" 
            type="text/html">
                La visualisation n’est pas encore disponible sur votre navigateur,
                veillez à le mettre à jour.
            </object>
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
