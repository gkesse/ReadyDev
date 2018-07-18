<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/MathJax_02.json");

    GConfig::Instance()->setData("title", "MathJax");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "MathJax_02");
    GConfig::Instance()->setData("link", $lData["links"]);
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="Parallax">
    <div class="Img Binary">
        <div class="Caption">
            <a href="#"><div class="Text">Edition de formules mathématiques</div></a>
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
                    Edition de formules mathématiques
                </a>
            </h1>
            <div class="Body3">
                <!-- ============================================ -->
                <div class="Row0">
                    <b>MathJax</b> est un outil d'édition formules mathématiques.<br/>
                    Le but de ce tutoriel est de vous apprendre
                    l'édition de formules mathématiques avec <b>MathJax</b>.<br/>
                    Produit par <b>Gérard KESSE</b>.
                </div>
                <!-- ============================================ -->
                <div class="Row28">
                    <a class="Title3" href="#">
                        Edition de formules mathématiques
                    </a>    
                </div>
                <!-- ============================================ -->
                <div class="Row31">
                    <div class="Row12">
                        <select class="ComboBox2" onchange="getFormula(this.value); this.selectedIndex = 0">
                            <!-- ============================================ -->
                            <option value="">ReadyFormula</option>
                            <option value="Formule">Formule</option>
                            <option value="SystemeEquations">Système d'Equations</option>
                            <option value="Alpha">Alpha</option>
                            <option value="Beta">Beta</option>
                            <option value="Gama">Gama</option>
                            <option value="Lambda">Lambda</option>
                            <option value="Nabla">Nabla</option>
                            <option value="DeriveePartielle">Derivée Partielle</option>
                            <option value="Appartient">Appartient</option>
                            <option value="NAppartientPas">N'Appartient Pas</option>
                            <option value="PourTout">Pour Tout</option>
                            <option value="ValeurMoyenne">Valeur Moyenne</option>
                            <option value="Integrale">Intégrale</option>
                            <option value="Fraction">Fraction</option>
                            <!-- ============================================ -->
                        </select>
                        <button class="Button5" type="button" title="Espace" onclick="getFormula('Espace')"><i class="fa fa-code"></i></button>		
                        <button class="Button5" type="button" title="Alpha" onclick="getFormula('Alpha')">&alpha;</button>		
                        <button class="Button5" type="button" title="Beta" onclick="getFormula('Beta')">&beta;</button>		
                        <button class="Button5" type="button" title="Gama" onclick="getFormula('Gama')">&gamma;</button>		
                        <button class="Button5" type="button" title="Omega" onclick="getFormula('Omega')">&omega;</button>		
                        <button class="Button5" type="button" title="Lambda" onclick="getFormula('Lambda')">&lambda;</button>		
                    </div>
                    <div class="Row12">
                        <textarea class="Field2" id="FormulaText" rows="10"
                        placeholder="Entrez votre formule mathématique..."
                        oninput="viewFormula(this)"></textarea>
                    </div>
                    <div class="Row12">
                        <div class="Show" id="FormulaShow">Aperçu</div>
                    </div>
                </div>
                <!-- ============================================ -->
            </div>
        </div>
    </div>
</div>
<!-- ============================================ -->
<script src="/js/class/GPrototype.js"></script>
<script src="/js/class/GFormula.js"></script>
<script src="/js/formula.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
