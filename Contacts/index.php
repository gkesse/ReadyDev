<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    GConfig::Instance()->setData("title", "Contacts");
    GConfig::Instance()->setData("menu", "Contacts");
    GConfig::Instance()->setData("view", "Contacts");
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainBody">
    <!-- ============================================ -->
    <?php require "page/main.php"; ?>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<script src="/js/contact.js"></script>
<script src="/js/class/GContact.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
