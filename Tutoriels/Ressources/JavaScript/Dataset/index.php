<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Dataset.json");

    GConfig::Instance()->setData("title", "Dataset");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Dataset");
    GConfig::Instance()->setData("link", $lData["links"]);
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="Parallax">
    <div class="Img Binary">
        <div class="Caption">
            <a href="#"><div class="Text">Intégration de données à un élément HTML</div></a>
        </div>
    </div>
</div>
<!-- ============================================ -->
<div class="Content2">
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Diplomes">
                <a class="Link3" href="#">
                    Intégration de données à un élément HTML
                </a>
            </h1>
            <div class="Body3">
                <!-- ============================================ -->
                <div class="Row0">
                    L'utilisation des <b>Dataset</b> est une technique d'intégration
                    de données à un élément HTML.<br/>
                    Le but de ce tutoriel est de vous apprendre
                    l'intégration de données à un élément HTML avec les <b>Dataset</b>.<br/>
                    Produit par <b>Gérard KESSE</b>.
                </div>
                <!-- ============================================ -->
                <div class="Row28">
                    <a class="Title3" href="#">
                        Création des dataset
                    </a>    
                </div>
                <!-- ============================================ -->
                <div class="Row27">
                    <img id="moto" src="/data/img/defaults/moto.jpg" alt="moto.jpg" title="moto.jpg"
                    data-model="Ducati-749"
                    data-moteur="bicylindre en V à 90°, 4 temps refroidissement liquide"
                    data-puissance-max="103 ch à 10 000 tr/min"/>
                </div>
                <!-- ============================================ -->
                <div class="Row28">
                    <a class="Title3" href="#">
                        Lecture des dataset
                    </a>    
                </div>
                <!-- ============================================ -->
                <div class="Result" id="ReadDataset"></div>
                <!-- ============================================ -->
            </div>
        </div>
    </div>
</div>
<!-- ============================================ -->
<script src="/js/class/GDataset.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
