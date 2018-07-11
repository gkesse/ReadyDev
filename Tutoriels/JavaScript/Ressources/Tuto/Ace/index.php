<!-- ============================================ -->
<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    GConfig::Instance()->setData("title", "Ace");   
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainPage">
    <!-- ============================================ -->
    <h1 class="Title">Utilisation de Ace</h1>
    <!-- ============================================ -->
    <h3 class="Title2">Code HTML</h3>
    <pre class="Code"><xmp class="Code2 AceCode" data-mode="html" data-theme="monokai">
<!-- ============================================ -->
<!DOCTYPE html>
<html>
    <head>
        <!-- ============================================ -->
        <title>Html | ReadyDev</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="initial-scale=1.0"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace.js"></script>
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
            <h3 class="Title2">Code LaTeX</h3>
            <pre class="Code"><xmp class="Code2 AceCode" data-mode="tex" data-theme="monokai">
%================================================
\documentclass{article}
%================================================
\usepackage[utf8]{inputenc}
\usepackage[T1]{fontenc}
\usepackage[francais]{babel}
%================================================
\begin{document}
%================================================
\parindent=0em
\textbf{Définir un encodage} \\ \\
%================================================
Accents : é è à ç
%================================================
\end{document}
%================================================
            </xmp></pre>
            <!-- ============================================ -->
            <h3 class="Title2">Code VB.NET</h3>
            <pre class="Code"><xmp class="Code2 AceCode" data-mode="vbscript" data-theme="monokai">
'================================================
Module GModule
    Sub Main()
        Dim CR As String = Environment.newLine
        Console.Write("### Utilisation de Vbc" + CR + CR)
        Console.Write("Bonjour tout le monde" + CR)
    End Sub
End Module
'================================================
            </xmp></pre>
            <!-- ============================================ -->
            <h3 class="Title2">Code Makefile</h3>
            <pre class="Code"><xmp class="Code2 AceCode" data-mode="makefile" data-theme="monokai">
GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\GProject.exe
 
GSRCS = \
    $(GSRC)\GMain.vb
 
all:
    vbc /out:$(GTARGET) $(GSRCS)
clean:
    del /q $(GTARGET)
            </xmp></pre>
            <!-- ============================================ -->
            <h3 class="Title2">Code Batch</h3>
            <pre class="Code"><xmp class="Code2 AceCode" data-mode="batchfile" data-theme="monokai">
@echo off
 
set PATH=C:\MinGW\bin
set PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%
 
mingw32-make
    </xmp></pre>
     <!-- ============================================ -->
</div>
<!-- ============================================ -->
<script src="/js/class/GAce.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php";	?>
<!-- ============================================ -->
