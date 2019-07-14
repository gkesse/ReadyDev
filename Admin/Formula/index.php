<!DOCTYPE html>
<html>
    <head>
        <title>ReadyFormula</title>
        <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML"></script>
        <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
            tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
        });
        </script>
        <style>
            html, body {
                border: 0px;
                margin: 0px;
                padding: 0px;
            }
        </style>
        <script>
            function viewFormula() {
				var lFormulaShow = document.getElementById("FormulaShow");
                MathJax.Hub.Queue(["Typeset",MathJax.Hub,lFormulaShow]);
            }
        </script>
    </head>
    <body>
        <div style="
            background-color: rgba(255, 255, 255, 0.2);
            max-height: 400px;
            font-family: arial;
            font-size: 16px;
            color: white;
            overflow: auto;
            scrollbar-color: #5f6681 #051039;
            scrollbar-width: auto;
        ">
            <div id="FormulaShow">Visualisez de la formule</div>
        </div>
    </body>
</html> 