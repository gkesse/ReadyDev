<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Autoprotolyse_Produit_Ionique_Eau.json");
    
    GConfig::Instance()->setData("TITLE", "Autoprotolyse et Produit Ionique de l'Eau");
    GConfig::Instance()->setData("MENU", "Cours");
    GConfig::Instance()->setData("VIEW", "Autoprotolyse_Produit_Ionique_Eau");
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
