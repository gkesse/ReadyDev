<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Ace.json");

    GConfig::Instance()->setData("title", "Ace");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Ace");
    GConfig::Instance()->setData("link", $lData["links"]);
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="Parallax">
    <div class="Img Binary">
        <div class="Caption">
            <a href="#"><div class="Text">Utilisation de Ace</div></a>
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
                    Utilisation de Ace
                </a>
            </h1>
            <div class="Body3">
                <!-- ============================================ -->
                <div class="Row3">
                    Le <b>JavaScript</b> est un langage de programmation web dynamique côté client.<br/>
                    Le but de ce tutoriel est de vous apprendre
                    <b>l'utilisation de Ace</b> avec le <b>JavaScript</b>.<br/>
                    Produit par <b>Gérard KESSE</b>.
                </div>
                <!-- ============================================ -->
                <div class="Row3">
                    <a class="Title3" href="#">
                        Code HTML
                    </a>    
                </div>
                <!-- ============================================ -->
                <pre><xmp class="AceCode" data-mode="html" data-theme="monokai">
<!-- ============================================ -->
<!DOCTYPE html>
<html>
    <head>
        <!-- ============================================ -->
        <title>Html | ReadyDev</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="initial-scale=1.0"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js"></script>
        <link rel="stylesheet" href="style.css"/>
        <!-- ============================================ -->
        <script>
            .Title {
                color: lime;
                text-decoration: underline;
            }
            
            .Title2 {
                color: orange;
                border: 1px solid orange;
            }
        </script>
        <!-- ============================================ -->
    </head>
    <body>
        <!-- ============================================ -->
        <div class="MainPage">
            <!-- ============================================ -->
            <h1 class="Title">Apprendre le HTML</h1>
            <!-- ============================================ -->
            <h3 class="Title2">Insertion d'une image</h3>
            <img src="image.png" alt="image.png" title="image.png"/>
            <!-- ============================================ -->
            <h3 class="Title2">Insertion d'un lien</h3>
            <a href="www.readydev.com">www.readydev.com</a>
            <!-- ============================================ -->
        </div>
        <!-- ============================================ -->
        <script src="GScript.js"></script>
        <!-- ============================================ -->
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
<script src="/js/class/GAce.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
