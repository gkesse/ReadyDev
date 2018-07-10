<!-- ============================================ -->
<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    GConfig::Instance()->setData("title", "JavaScript");   
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainPage">
    <!-- ============================================ -->
    <h1 class="Title">Tutoriels JavaScript</h1>
    <!-- ============================================ -->
    <h3 class="Title2">Sommaire</h3>
    <div id="Summary"></div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<script src="/js/class/GScript.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php";	?>
<!-- ============================================ -->
