<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- ============================================ -->
        <title>Ace | ReadyDev</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" href="style.css"/>
        <!-- ============================================ -->
    </head>
    <body>
        <!-- ============================================ -->
        <div class="MainPage">
            <!-- ============================================ -->
            <h1 class="Title">Utilisation de Ace</h1>
            <!-- ============================================ -->
            <h3 class="Title2">Code HTML</h3>
            <pre class="Code"><xmp class="Code2 AceCode" data-lang="html">
<!-- ============================================ -->
<!DOCTYPE html>
<html>
    <head>
        <!-- ============================================ -->
        <title>Html | ReadyDev</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js" type="text/javascript" charset="utf-8"></script>
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
            <pre class="Code"><xmp class="Code2 AceCode" data-lang="tex">
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
            <pre class="Code"><xmp class="Code2 AceCode" data-lang="vbscript">
'================================================'
Module GModule
    Sub Main()
        Dim CR As String = Environment.newLine
        Console.Write("### Utilisation de Vbc" + CR + CR)
        Console.Write("Bonjour tout le monde" + CR)
    End Sub
End Module
'================================================'
            </xmp></pre>
            <!-- ============================================ -->
            <h3 class="Title2">Code Batch</h3>
            <pre class="Code"><xmp class="Code2 AceCode" data-lang="makefile">
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
       </div>
        <!-- ============================================ -->
        <script src="GAce.js"></script>
        <!-- ============================================ -->
    </body>
</html>