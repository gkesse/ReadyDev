<!-- ============================================ -->
<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    GConfig::Instance()->setData("title", "Dataset");   
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainPage">
    <!-- ============================================ -->
    <h1 class="Title">Utilisation des dataset</h1>
    <!-- ============================================ -->
    <h3 class="Title2">Création des dataset</h3>
    <img id="moto" src="/data/img/moto.jpg" alt="moto.jpg" title="moto.jpg"
    data-model="Ducati-749"
    data-moteur="bicylindre en V à 90°, 4 temps refroidissement liquide"
    data-puissance-max="103 ch à 10 000 tr/min"/>
    <!-- ============================================ -->
    <h3 class="Title2">Lecture des dataset</h3>
    <div class="Result" id="ReadDataset"></div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<script src="/js/class/GDataset.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php";	?>
<!-- ============================================ -->
