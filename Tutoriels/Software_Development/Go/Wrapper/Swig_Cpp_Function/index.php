<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Go_Wrapper_Swig_Cpp_Function.json");
    
    GConfig::Instance()->setData("title", "Go - Utiliser une fonction C++ avec swig");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Go_Wrapper_Swig_Cpp_Function");
    GConfig::Instance()->setData("link", $m_data["links"]);

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainBody">
    <!-- ============================================ -->
    <?php require "page/main.php"; ?>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->

