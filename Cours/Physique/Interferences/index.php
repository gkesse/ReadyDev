<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Interferences.json");
    
    GConfig::Instance()->setData("title", "Interférences");
    GConfig::Instance()->setData("menu", "Cours");
    GConfig::Instance()->setData("view", "Interferences");
    GConfig::Instance()->setData("link", $m_data["links"]);
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pdfBd">
        <!-- ============================================ -->
        <div class="pgCt10">
            <?php $m_pdf = GPdf::Instance()->getUrl($m_data["pdf"]);  ?>
            <object id="pdf" width="100%" class="pdfHt"
            data="<?php echo $m_pdf; ?>" 
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
