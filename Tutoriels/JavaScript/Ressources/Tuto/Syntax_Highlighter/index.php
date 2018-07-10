<!-- ============================================ -->
<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    GConfig::Instance()->setData("title", "Syntax Highlighter");   
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainPage">
    <!-- ============================================ -->
    <h1 class="Title">Création d'un Syntax Highlighter</h1>
    <!-- ============================================ -->
    <h3 class="Title2">Code HTML</h3>
    <pre class="PrintSyntax"><xmp>
<!-- ============================================ -->
<!-- Voici mon commentaire -->
<!DOCTYPE html>
<html>
    <head>
        <title>JS | ReadyDev</title>
    </head>
    <body>
    
    <!-- Voici mon deuxième commentaire -->
    <h1>Testing an HTML Syntax Highlighter</h2>
    <p>Hello world!</p>
    <a href="https://www.w3schools.com">Back to School</a>
    
    </body>
</html>
<!-- ============================================ -->
    </xmp></pre>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<script src="/js/class/GSyntax.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php";	?>
<!-- ============================================ -->
