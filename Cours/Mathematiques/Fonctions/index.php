<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Fonctions.json");
    
    GConfig::Instance()->setData("title", "Fonctions");
    GConfig::Instance()->setData("menu", "Cours");
    GConfig::Instance()->setData("view", "Fonctions");
    GConfig::Instance()->setData("link", $m_data["links"]);
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pdfBd">
        <!-- ============================================ -->
        <div class="pgCt10">
            <object id="pdf" width="100%" height="640"
            data="/lib/pdfjs/web/viewer.html?file=/Cours/Mathematiques/Fonctions/Fonctions.pdf#zoom=page-width" 
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
