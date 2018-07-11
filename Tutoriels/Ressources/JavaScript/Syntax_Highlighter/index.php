<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Syntax_Highlighter.json");

    GConfig::Instance()->setData("title", "Syntax Highlighter");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Syntax_Highlighter");
    GConfig::Instance()->setData("link", $lData["links"]);
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="Parallax">
    <div class="Img Binary">
        <div class="Caption">
            <a href="#"><div class="Text">Création de coloration syntaxique</div></a>
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
                    Création de coloration syntaxique
                </a>
            </h1>
            <div class="Body3">
                <!-- ============================================ -->
                <div class="Row3">
                    Le <b>JavaScript</b> est un langage de programmation web dynamique côté client.<br/>
                    Le but de ce tutoriel est de vous apprendre
                    la <b>coloration syntaxique</b> avec le <b>JavaScript</b>.<br/>
                    Produit par <b>Gérard KESSE</b>.
                </div>
                <!-- ============================================ -->
                <div class="Row3">
                    <a class="Title3" href="#">
                        Code HTML
                    </a>    
                </div>
                <!-- ============================================ -->
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
        </div>
    </div>
</div>
<!-- ============================================ -->
<script src="/js/class/GSyntax.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
