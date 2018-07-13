<!-- ============================================ -->
<div class="Modal" id="ModalFormula">
    <div class="Content10" id="FormulaBody">
        <div class="Button3 Close" onclick="closeFormula(this)"><i class="fa fa-close"></i></div>
        <div class="Title5">Formule Mathématique</div>
        <div class="Body4">
            <div class="Row11">Entrez votre formule mathématique.</div>
            <div class="Row12">
                <select class="ComboBox2" onchange="getFormula(this); this.selectedIndex = 0">
                    <!-- ============================================ -->
                    <option value="">ReadyFormula</option>
                    <option value="SystemeEquations">Système d'Equations</option>
                    <option value="LettreAlpha">Lettre Alpha</option>
                    <option value="LettreBeta">Lettre Beta</option>
                    <option value="LettreGama">Lettre Gama</option>
                    <option value="LettreLambda">Lettre Lambda</option>
                    <option value="LettreNabla">Lettre Nabla</option>
                    <option value="DeriveePartielle">Derivée Partielle</option>
                    <option value="SymboleAppartient">Symbole Appartient</option>
                    <option value="SymboleNAppartientPas">Symbole N'Appartient Pas</option>
                    <!-- ============================================ -->
                </select>
            </div>
            <div class="Row12">
                <textarea class="Field2" id="FormulaText" rows="10"
                placeholder="Entrez votre formule mathématique..."
                oninput="viewFormula(this)"></textarea>
            </div>
            <div class="Row12">
                <div class="Show" id="FormulaShow">Aperçu</div>
            </div>
            <div class="Row13">
                <div class="Button4" onclick="validate(this)"><i class="fa fa-paper-plane-o"></i> Valider</div>
            </div>
        </div>
        <div class="Row14" id="FormulaMsg"></div>
    </div>
</div>
<!-- ============================================ -->
<script src="/js/class/GPrototype.js"></script>
<script src="/js/class/GFormula.js"></script>
<script src="/js/formula.js"></script>
<!-- ============================================ -->
